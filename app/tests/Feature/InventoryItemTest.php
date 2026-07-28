<?php

namespace Tests\Feature;

use App\Models\Inventory\InventoryItem;
use App\Models\School;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Tests\TestCase;

class InventoryItemTest extends TestCase
{
    use RefreshDatabase;

    protected User $admin;

    protected School $school;

    protected function setUp(): void
    {
        parent::setUp();
        $this->app['config']->set('laravellocalization.hideDefaultLocaleInURL', true);
        $this->app->setLocale('ar');
        session(['locale' => 'ar']);

        $this->app[PermissionRegistrar::class]->forgetCachedPermissions();

        $this->school = School::factory()->create();
        $this->admin = User::factory()->create([
            'school_id' => $this->school->id,
        ]);

        $this->givePermission(
            $this->admin,
            'stocks-index',
            'stocks-create',
            'stocks-update',
            'stocks-delete',
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
            $roleName = 'inventory-test-role-'.$permission;
            $role = Role::firstOrCreate(['name' => $roleName]);
            $role->givePermissionTo($perm);
            $user->assignRole($role);
        }
        $user->load('roles');
        $this->app[PermissionRegistrar::class]->forgetCachedPermissions();
    }

    public function test_can_list_inventory_items(): void
    {
        InventoryItem::factory()->count(3)->create([
            'school_id' => $this->school->id,
        ]);

        $response = $this->get(
            route('inventory.items.index', 'all'),
        );

        $response->assertStatus(200);
    }

    public function test_can_create_inventory_item_with_valid_data(): void
    {
        $itemData = [
            'name' => 'Test Item',
            'type' => 'stock',
        ];

        $response = $this->post(
            route('inventory.items.store'),
            $itemData,
        );

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
        $item = InventoryItem::factory()->create([
            'school_id' => $this->school->id,
        ]);

        $response = $this->get(
            route('inventory.items.show', $item->id),
        );

        $response->assertStatus(200);
    }

    public function test_can_update_inventory_item(): void
    {
        $item = InventoryItem::factory()->create([
            'school_id' => $this->school->id,
        ]);

        $response = $this->put(
            route('inventory.items.update', $item->id),
            [
                'name' => 'Updated Item',
                'type' => $item->type->value,
            ],
        );

        $response->assertRedirect();
        $this->assertDatabaseHas('inventory_items', [
            'id' => $item->id,
            'name' => 'Updated Item',
        ]);
    }

    public function test_can_delete_inventory_item(): void
    {
        $item = InventoryItem::factory()->create([
            'school_id' => $this->school->id,
        ]);

        $response = $this->delete(
            route('inventory.items.destroy', $item->id),
        );

        $response->assertRedirect();
        $this->assertSoftDeleted('inventory_items', [
            'id' => $item->id,
        ]);
    }
}
