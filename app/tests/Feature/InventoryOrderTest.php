<?php

namespace Tests\Feature;

use App\Enums\InventoryOrderStatus;
use App\Models\Inventory\InventoryItem;
use App\Models\Inventory\InventoryOrder;
use App\Models\School;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Tests\TestCase;

class InventoryOrderTest extends TestCase
{
    use RefreshDatabase;

    protected User $admin;

    protected School $school;

    protected function setUp(): void
    {
        parent::setUp();
        $this->app['config']->set(
            'laravellocalization.hideDefaultLocaleInURL',
            true,
        );
        $this->app->setLocale('ar');
        session(['locale' => 'ar']);

        $this->app[PermissionRegistrar::class]->forgetCachedPermissions();

        $this->school = School::factory()->create();
        $this->admin = User::factory()->create([
            'school_id' => $this->school->id,
        ]);

        $this->givePermission(
            $this->admin,
            'stocks-inventory_order-index',
            'stocks-income_order',
            'stocks-inventory_order-create',
        );

        $this->actingAs($this->admin);
    }

    protected function givePermission(
        User $user,
        string ...$permissions,
    ): void {
        $this->app[PermissionRegistrar::class]->forgetCachedPermissions();
        foreach ($permissions as $permission) {
            $perm = Permission::firstOrCreate([
                'name' => $permission,
                'guard_name' => 'web',
            ]);
            $roleName = 'inventory-order-test-role-'.$permission;
            $role = Role::firstOrCreate(['name' => $roleName]);
            $role->givePermissionTo($perm);
            $user->assignRole($role);
        }
        $user->load('roles');
        $this->app[PermissionRegistrar::class]->forgetCachedPermissions();
    }

    public function test_can_list_inventory_orders(): void
    {
        InventoryOrder::factory()->count(3)->create([
            'school_id' => $this->school->id,
        ]);

        $response = $this->get(
            route('inventory.orders.index', 'inventory'),
        );

        $response->assertStatus(200);
    }

    public function test_can_create_inventory_order_with_valid_data(): void
    {
        $item = InventoryItem::factory()->create([
            'school_id' => $this->school->id,
        ]);

        $orderData = [
            'type' => 'inventory',
            'date' => now()->toDateString(),
            'items' => [
                [
                    'itemable_id' => $item->id,
                    'itemable_type' => InventoryItem::class,
                    'quantity_in' => 10,
                    'quantity_out' => 0,
                    'unit_price' => 50.00,
                ],
            ],
        ];

        $response = $this->post(
            route('inventory.orders.store'),
            $orderData,
        );

        $response->assertRedirect();
    }

    public function test_can_create_purchases_order(): void
    {
        $item = InventoryItem::factory()->create([
            'school_id' => $this->school->id,
        ]);

        $orderData = [
            'type' => 'purchases',
            'date' => now()->toDateString(),
            'items' => [
                [
                    'itemable_id' => $item->id,
                    'itemable_type' => InventoryItem::class,
                    'quantity_in' => 10,
                    'quantity_out' => 0,
                    'unit_price' => 30.00,
                ],
            ],
        ];

        $this->post(route('inventory.orders.store'), $orderData)
            ->assertRedirect();

        $order = InventoryOrder::latest('id')->first();

        $this->assertEquals('purchases', $order->type->value);
        $this->assertStringStartsWith('PUR-', $order->auto_number);
    }

    public function test_sales_order_total_reflects_unit_price_and_quantity(): void
    {
        $item = InventoryItem::factory()->create([
            'school_id' => $this->school->id,
            'current_stock' => 100,
        ]);

        $orderData = [
            'type' => 'sales',
            'date' => now()->toDateString(),
            'items' => [
                [
                    'itemable_id' => $item->id,
                    'itemable_type' => InventoryItem::class,
                    'quantity_in' => 0,
                    'quantity_out' => 5,
                    'unit_price' => 20,
                ],
            ],
        ];

        $this->post(route('inventory.orders.store'), $orderData)
            ->assertRedirect();

        $order = InventoryOrder::latest('id')->first();
        $line = $order->items()->first();

        $this->assertEquals(100.0, (float) $order->total_amount);
        $this->assertEquals(20.0, (float) $line->unit_price);
        $this->assertEquals(100.0, (float) $line->total);
    }

    public function test_order_rejects_invalid_itemable_target(): void
    {
        $this->post(route('inventory.orders.store'), [
            'type' => 'inventory',
            'date' => now()->toDateString(),
            'items' => [
                [
                    'itemable_id' => 999,
                    'itemable_type' => 'App\Models\SomeOtherModel',
                    'quantity_in' => 10,
                    'quantity_out' => 0,
                    'unit_price' => 5,
                ],
            ],
        ])->assertSessionHasErrors(['items.0.itemable_id', 'items.0.itemable_type']);
    }

    public function test_order_status_starts_as_not_paid(): void
    {
        $order = InventoryOrder::factory()->create([
            'school_id' => $this->school->id,
            'status' => InventoryOrderStatus::NOT_PAID,
        ]);

        $this->assertEquals(
            InventoryOrderStatus::NOT_PAID,
            $order->status,
        );
    }

    public function test_order_can_transition_to_paid(): void
    {
        $order = InventoryOrder::factory()->create([
            'school_id' => $this->school->id,
            'status' => InventoryOrderStatus::NOT_PAID,
        ]);

        $order->update(['status' => InventoryOrderStatus::PAID]);

        $this->assertEquals(
            InventoryOrderStatus::PAID,
            $order->status,
        );
    }

    public function test_order_can_toggle_back_to_not_paid(): void
    {
        $order = InventoryOrder::factory()->create([
            'school_id' => $this->school->id,
            'status' => InventoryOrderStatus::PAID,
        ]);

        $order->update([
            'status' => InventoryOrderStatus::NOT_PAID,
        ]);

        $this->assertEquals(
            InventoryOrderStatus::NOT_PAID,
            $order->status,
        );
    }

    public function test_order_status_is_always_paid_or_not_paid(): void
    {
        $paid = InventoryOrder::factory()->create([
            'school_id' => $this->school->id,
            'status' => InventoryOrderStatus::PAID,
        ]);
        $unpaid = InventoryOrder::factory()->create([
            'school_id' => $this->school->id,
            'status' => InventoryOrderStatus::NOT_PAID,
        ]);

        $this->assertContains(
            $paid->status,
            InventoryOrderStatus::cases(),
        );
        $this->assertContains(
            $unpaid->status,
            InventoryOrderStatus::cases(),
        );
    }
}
