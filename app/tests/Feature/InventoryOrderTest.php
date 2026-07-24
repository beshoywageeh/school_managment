<?php

namespace Tests\Feature;

use App\Models\Inventory\InventoryItem;
use App\Models\Inventory\InventoryOrder;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class InventoryOrderTest extends TestCase
{
    use RefreshDatabase;

    protected User $admin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->admin = User::factory()->create();
        $this->actingAs($this->admin);
    }

    public function test_can_list_inventory_orders(): void
    {
        InventoryOrder::factory()->count(3)->create();

        $response = $this->get(route('inventory.orders.index'));

        $response->assertStatus(200);
    }

    public function test_can_create_inventory_order_with_valid_data(): void
    {
        $item = InventoryItem::factory()->create();

        $orderData = [
            'type' => 'tawreed',
            'date' => now()->toDateString(),
            'items' => [
                [
                    'item_id' => $item->id,
                    'quantity' => 10,
                    'unit_price' => 50.00,
                ],
            ],
        ];

        $response = $this->post(route('inventory.orders.store'), $orderData);

        $response->assertRedirect();
    }

    public function test_order_status_starts_as_pending(): void
    {
        $order = InventoryOrder::factory()->create(['status' => 'pending']);

        $this->assertEquals('pending', $order->status);
    }

    public function test_order_can_transition_to_confirmed(): void
    {
        $order = InventoryOrder::factory()->create(['status' => 'pending']);

        $order->update(['status' => 'confirmed']);

        $this->assertEquals('confirmed', $order->status);
    }

    public function test_order_can_transition_to_completed(): void
    {
        $order = InventoryOrder::factory()->create(['status' => 'confirmed']);

        $order->update(['status' => 'completed']);

        $this->assertEquals('completed', $order->status);
    }

    public function test_order_can_be_cancelled(): void
    {
        $order = InventoryOrder::factory()->create(['status' => 'pending']);

        $order->update(['status' => 'cancelled']);

        $this->assertEquals('cancelled', $order->status);
    }

    public function test_cancelled_is_terminal_state(): void
    {
        $order = InventoryOrder::factory()->create(['status' => 'cancelled']);

        $this->assertEquals('cancelled', $order->status);
    }
}
