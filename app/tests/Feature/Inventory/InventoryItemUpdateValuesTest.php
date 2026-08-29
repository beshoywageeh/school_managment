<?php

namespace Tests\Feature\Inventory;

use App\Enums\InventoryItemType;
use App\Models\ClassRoom;
use App\Models\Grade;
use App\Models\Inventory\InventoryItem;
use App\Models\School;
use App\Models\User;
use App\Services\Inventory\InventoryItemService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class InventoryItemUpdateValuesTest extends TestCase
{
    use RefreshDatabase;

    private function makeItem(): InventoryItem
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
            'cost_price' => 25.00,
            'sell_price' => 40.00,
            'current_stock' => 10,
            'opening_qty' => null,
        ]);
    }

    public function test_zero_price_is_persisted_on_update(): void
    {
        $item = $this->makeItem();
        $service = new InventoryItemService;

        $service->updateItem($item, ['name' => $item->name, 'cost_price' => 0, 'sell_price' => 0]);

        $item->refresh();
        $this->assertSame(0, (int) $item->cost_price);
        $this->assertSame(0, (int) $item->sell_price);
    }

    public function test_zero_current_stock_is_persisted_on_update(): void
    {
        $item = $this->makeItem();
        $service = new InventoryItemService;

        $service->updateItem($item, ['name' => $item->name, 'current_stock' => 0]);

        $item->refresh();
        $this->assertSame(0, (int) $item->current_stock);
    }

    public function test_false_is_active_is_persisted_on_update(): void
    {
        $item = $this->makeItem();
        $service = new InventoryItemService;

        $service->updateItem($item, ['name' => $item->name, 'is_active' => false]);

        $item->refresh();
        $this->assertFalse((bool) $item->is_active);
    }

    public function test_missing_fields_keep_existing_values(): void
    {
        $item = $this->makeItem();
        $service = new InventoryItemService;

        $service->updateItem($item, ['name' => 'New Name']);

        $item->refresh();
        $this->assertSame('New Name', $item->name);
        $this->assertSame(25.0, (float) $item->cost_price);
        $this->assertSame(40.0, (float) $item->sell_price);
        $this->assertSame(10, (int) $item->current_stock);
        $this->assertTrue((bool) $item->is_active);
    }
}
