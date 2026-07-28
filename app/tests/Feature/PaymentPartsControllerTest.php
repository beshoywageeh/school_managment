<?php

namespace Tests\Feature;

use App\Models\School;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Tests\TestCase;

class PaymentPartsControllerTest extends TestCase
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
            $roleName = 'payment-test-role-'.$permission;
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
        $response = $this->get(route('payment-parts.index'));
        $response->assertForbidden();
    }

    public function test_index_is_accessible_with_list_permission(): void
    {
        $this->givePermission($this->admin, 'payment_parts-list');
        $this->actingAs($this->admin);
        $response = $this->get(route('payment-parts.index'));
        $response->assertOk();
    }

    // ─── Store ──────────────────────────────────────────────

    public function test_store_requires_create_permission(): void
    {
        $this->actingAs($this->unauthorizedUser);
        $response = $this->post(route('payment-parts.store'), []);
        $response->assertForbidden();
    }

    public function test_store_validates_student_id_required(): void
    {
        $this->givePermission($this->admin, 'payment_parts-create');
        $this->actingAs($this->admin);
        $response = $this->post(route('payment-parts.store'), [
            'student_id' => '',
            'parts' => [
                ['fee_id' => 1, 'pay_at' => now()->toDateString(), 'amount' => 100],
            ],
        ]);
        $response->assertSessionHasErrors('student_id');
    }

    public function test_store_validates_parts_required(): void
    {
        $this->givePermission($this->admin, 'payment_parts-create');
        $this->actingAs($this->admin);
        $response = $this->post(route('payment-parts.store'), [
            'student_id' => 1,
            'parts' => '',
        ]);
        $response->assertSessionHasErrors('parts');
    }

    public function test_store_validates_parts_minimum_one(): void
    {
        $this->givePermission($this->admin, 'payment_parts-create');
        $this->actingAs($this->admin);
        $response = $this->post(route('payment-parts.store'), [
            'student_id' => 1,
            'parts' => [],
        ]);
        $response->assertSessionHasErrors('parts');
    }

    // ─── Destroy ────────────────────────────────────────────

    public function test_destroy_requires_delete_permission(): void
    {
        $this->actingAs($this->unauthorizedUser);
        $response = $this->delete(route('payment-parts.destroy', 1));
        $response->assertForbidden();
    }

    public function test_destroy_redirects_for_nonexistent_record(): void
    {
        $this->givePermission($this->admin, 'payment_parts-delete');
        $this->actingAs($this->admin);
        $response = $this->delete(route('payment-parts.destroy', 9999));
        $response->assertRedirect();
    }
}
