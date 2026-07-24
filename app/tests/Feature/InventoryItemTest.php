<?php

namespace Tests\Feature;

use App\Models\Inventory\InventoryItem;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class InventoryItemTest extends TestCase
{
    use RefreshDatabase;

    protected User $admin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->admin = User::factory()->create();
        $this->actingAs($this->admin);
    }

    public function test_can_list_inventory_items(): void
    {
        InventoryItem::factory()->count(3)->create();

        $response = $this->get(route('inventory.items.index'));

        $response->assertStatus(200);
    }

    public function test_can_create_inventory_item_with_valid_data(): void
    {
        $itemData = [
            'name' => 'Test Item',
            'type' => 'book',
            'category' => 'stationery',
            'sales_price' => 100.00,
            'cost_price' => 50.00,
        ];

        $response = $this->post(route('inventory.items.store'), $itemData);

        $response->assertRedirect();
        $this->assertDatabaseHas('inventory_items', [
            'name' => 'Test Item',
        ]);
    }

    public function test_cannot_create_inventory_item_with_invalid_data(): void
    {
        $response = $this->post(route('inventory.items.store'), [
            'name' => '',
        ]);

        $response->assertSessionHasErrors('name');
    }

    public function test_can_show_inventory_item(): void
    {
        $item = InventoryItem::factory()->create();

        $response = $this->get(route('inventory.items.show', $item->id));

        $response->assertStatus(200);
    }

    public function test_can_update_inventory_item(): void
    {
        $item = InventoryItem::factory()->create();

        $response = $this->put(route('inventory.items.update', $item->id), [
            'name' => 'Updated Item',
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('inventory_items', [
            'id' => $item->id,
            'name' => 'Updated Item',
        ]);
    }

    public function test_can_delete_inventory_item(): void
    {
        $item = InventoryItem::factory()->create();

        $response = $this->delete(route('inventory.items.destroy', $item->id));

        $response->assertRedirect();
        $this->assertDatabaseMissing('inventory_items', [
            'id' => $item->id,
        ]);
    }
}
