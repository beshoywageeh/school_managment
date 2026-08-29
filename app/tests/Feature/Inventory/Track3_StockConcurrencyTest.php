<?php

namespace Tests\Feature\Inventory;

use App\Enums\InventoryItemType;
use App\Exceptions\InventoryException;
use App\Models\ClassRoom;
use App\Models\Grade;
use App\Models\Inventory\InventoryItem;
use App\Models\School;
use App\Models\User;
use App\Services\Inventory\InventoryTransactionService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class Track3_StockConcurrencyTest extends TestCase
{
    use RefreshDatabase;

    private function makeItem(int $stock): InventoryItem
    {
        $school = School::factory()->create();
        $user = User::factory()->create(['school_id' => $school->id]);
        $grade = Grade::factory()->create(['school_id' => $school->id, 'user_id' => $user->id]);
        $classroom = ClassRoom::factory()->create(['school_id' => $school->id, 'grade_id' => $grade->id, 'user_id' => $user->id]);

        return InventoryItem::factory()->create([
            'school_id' => $school->id,
            'user_id' => $user->id,
            'grade_id' => $grade->id,
            'classroom_id' => $classroom->id,
            'type' => InventoryItemType::STOCK,
            'current_stock' => $stock,
            'opening_qty' => null,
        ]);
    }

    public function test_second_stock_out_cannot_drive_stock_below_zero(): void
    {
        $item = $this->makeItem(5);
        Auth::login($item->user);

        $service = new InventoryTransactionService;
        $service->stockOut($item, 4);

        $this->expectException(InventoryException::class);

        $service->stockOut($item, 4);

        $item->refresh();
        $this->assertSame(1, (int) $item->current_stock);
    }

    public function test_stock_out_never_leaves_a_negative_balance(): void
    {
        $item = $this->makeItem(3);
        Auth::login($item->user);

        $service = new InventoryTransactionService;

        try {
            $service->stockOut($item, 7);
            $this->fail('Overselling should have been rejected');
        } catch (InventoryException) {
        }

        $item->refresh();
        $this->assertSame(3, (int) $item->current_stock);
    }
}
