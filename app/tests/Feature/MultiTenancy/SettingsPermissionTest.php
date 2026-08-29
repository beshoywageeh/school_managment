<?php

namespace Tests\Feature\MultiTenancy;

use App\Models\School;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Tests\TestCase;

class SettingsPermissionTest extends TestCase
{
    use RefreshDatabase;

    private function grantSettingsInfo(User $user): void
    {
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        $perm = Permission::firstOrCreate(['name' => 'settings-info', 'guard_name' => 'web']);
        $role = Role::firstOrCreate(['name' => 'settings-manager', 'guard_name' => 'web']);
        $role->givePermissionTo($perm);
        $user->assignRole($role);

        app(PermissionRegistrar::class)->forgetCachedPermissions();
    }

    public function test_update_without_permission_is_rejected(): void
    {
        $school = School::factory()->create();
        $otherSchool = School::factory()->create();
        $user = User::factory()->create(['school_id' => $school->id, 'isAdmin' => false]);
        $this->actingAs($user);

        $this->put(route('settings.update', $otherSchool->id), [
            'school_name' => 'Hacked',
            'school_phone' => '01000000000',
            'address' => 'Giza',
        ])->assertForbidden();

        $this->assertDatabaseHas('schools', ['id' => $otherSchool->id, 'name' => $otherSchool->name]);
    }

    public function test_update_for_another_school_is_rejected_even_with_permission(): void
    {
        $school = School::factory()->create();
        $otherSchool = School::factory()->create();
        $user = User::factory()->create(['school_id' => $school->id, 'isAdmin' => false]);
        $this->grantSettingsInfo($user);
        $this->actingAs($user);

        $this->put(route('settings.update', $otherSchool->id), [
            'school_name' => 'Hacked',
            'school_phone' => '01000000000',
            'address' => 'Giza',
        ])->assertForbidden();

        $this->assertDatabaseHas('schools', ['id' => $otherSchool->id, 'name' => $otherSchool->name]);
    }

    public function test_update_for_own_school_succeeds_with_permission(): void
    {
        $school = School::factory()->create();
        $user = User::factory()->create(['school_id' => $school->id, 'isAdmin' => false]);
        $this->grantSettingsInfo($user);
        $this->actingAs($user);

        $response = $this->put(route('settings.update', $school->id), [
            'school_name' => 'My School',
            'school_phone' => '01000000001',
            'address' => 'Cairo',
        ]);

        $response->assertSessionHas('success');

        $this->assertDatabaseHas('schools', ['id' => $school->id, 'name' => 'My School']);
    }

    public function test_admin_can_update_any_school(): void
    {
        $school = School::factory()->create();
        $admin = User::factory()->create(['school_id' => null, 'isAdmin' => true]);
        $this->grantSettingsInfo($admin);
        $this->actingAs($admin);

        $this->put(route('settings.update', $school->id), [
            'school_name' => 'Admin Edited',
            'school_phone' => '01000000002',
            'address' => 'Alexandria',
        ])->assertSessionHas('success');

        $this->assertDatabaseHas('schools', ['id' => $school->id, 'name' => 'Admin Edited']);
    }
}
