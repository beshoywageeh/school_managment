<?php

namespace Tests\Feature\Quality;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Tests\TestCase;

class RoleCleanupTrack3Test extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        app(PermissionRegistrar::class)->forgetCachedPermissions();

        $perm = Permission::firstOrCreate(['name' => 'role-delete', 'guard_name' => 'web']);
        $grant = Role::firstOrCreate(['name' => 'role-manager', 'guard_name' => 'web']);
        $grant->givePermissionTo($perm);
        $this->actingAs(User::factory()->create());
        auth()->user()->assignRole($grant);
        app(PermissionRegistrar::class)->forgetCachedPermissions();
    }

    public function test_role_deletion_removes_permission_and_assignment_pivots(): void
    {
        $permission = Permission::firstOrCreate(['name' => 'can-reports', 'guard_name' => 'web']);
        $role = Role::create(['name' => 'reports-role', 'guard_name' => 'web']);
        $role->givePermissionTo($permission);

        $holder = User::factory()->create();
        $holder->assignRole($role);
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        $this->assertSame(1, DB::table('role_has_permissions')->where('role_id', $role->id)->count());
        $this->assertSame(
            1,
            DB::table('model_has_roles')->where('role_id', $role->id)->count(),
        );

        $this->delete(route('roles.delete', $role->id))->assertRedirect();

        $this->assertDatabaseMissing('roles', ['id' => $role->id]);
        $this->assertSame(0, DB::table('role_has_permissions')->where('role_id', $role->id)->count());
        $this->assertSame(0, DB::table('model_has_roles')->where('role_id', $role->id)->count());
    }
}
