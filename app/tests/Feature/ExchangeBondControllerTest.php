<?php

namespace Tests\Feature;

use App\Models\School;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Tests\TestCase;

class ExchangeBondControllerTest extends TestCase
{
    use RefreshDatabase;

    protected User $admin;

    protected User $unauthorizedUser;

    protected function setUp(): void
    {
        parent::setUp();
        $this->app['config']->set('laravellocalization.hideDefaultLocaleInURL', true);
        $this->app->setLocale('ar');
        session(['locale' => 'ar']);

        $school = School::factory()->create();
        $this->admin = User::factory()->create(['school_id' => $school->id]);
        $this->unauthorizedUser = User::factory()->create(['school_id' => $school->id]);
    }

    protected function givePermission(User $user, string ...$permissions): void
    {
        $this->app[PermissionRegistrar::class]->forgetCachedPermissions();
        foreach ($permissions as $permission) {
            $perm = Permission::firstOrCreate(['name' => $permission, 'table' => 'test']);
            $roleName = 'exchange-test-role-'.$permission;
            $role = Role::firstOrCreate(['name' => $roleName]);
            $role->givePermissionTo($perm);
            $user->assignRole($role);
        }
        $user->load('roles');
        $this->app[PermissionRegistrar::class]->forgetCachedPermissions();
    }

    // ─── Index ──────────────────────────────────────────────

    public function test_index_requires_list_permission(): void
    {
        $this->actingAs($this->unauthorizedUser);
        $response = $this->get(route('exchange-bonds.index'));
        $response->assertForbidden();
    }

    public function test_index_is_accessible_with_list_permission(): void
    {
        $this->givePermission($this->admin, 'exchange_bonds-list');
        $this->actingAs($this->admin);
        $response = $this->get(route('exchange-bonds.index'));
        $response->assertOk();
    }

    // ─── Store ──────────────────────────────────────────────

    public function test_store_requires_create_permission(): void
    {
        $this->actingAs($this->unauthorizedUser);
        $response = $this->post(route('exchange-bonds.store'), []);
        $response->assertForbidden();
    }

    public function test_store_validates_student_id_required(): void
    {
        $this->givePermission($this->admin, 'exchange_bonds-create');
        $this->actingAs($this->admin);
        $response = $this->post(route('exchange-bonds.store'), [
            'student_id' => '',
            'amount' => 100,
            'manual' => '00001',
            'note' => '',
        ]);
        $response->assertSessionHasErrors('student_id');
    }

    public function test_store_validates_amount_required(): void
    {
        $this->givePermission($this->admin, 'exchange_bonds-create');
        $this->actingAs($this->admin);
        $response = $this->post(route('exchange-bonds.store'), [
            'student_id' => 1,
            'amount' => '',
            'manual' => '00001',
            'note' => '',
        ]);
        $response->assertSessionHasErrors('amount');
    }

    public function test_store_validates_manual_required(): void
    {
        $this->givePermission($this->admin, 'exchange_bonds-create');
        $this->actingAs($this->admin);
        $response = $this->post(route('exchange-bonds.store'), [
            'student_id' => 1,
            'amount' => 100,
            'manual' => '',
            'note' => '',
        ]);
        $response->assertSessionHasErrors('manual');
    }

    // ─── Destroy ────────────────────────────────────────────

    public function test_destroy_requires_delete_permission(): void
    {
        $this->actingAs($this->unauthorizedUser);
        $response = $this->delete(route('exchange-bonds.destroy', 1));
        $response->assertForbidden();
    }

    public function test_destroy_redirects_for_nonexistent_record(): void
    {
        $this->givePermission($this->admin, 'exchange_bonds-delete');
        $this->actingAs($this->admin);
        $response = $this->delete(route('exchange-bonds.destroy', 9999));
        $response->assertRedirect();
    }
}
