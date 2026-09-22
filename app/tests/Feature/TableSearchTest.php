<?php

namespace Tests\Feature;

use App\Models\School;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Tests\TestCase;

class TableSearchTest extends TestCase
{
    use RefreshDatabase;

    protected User $admin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->app['config']->set('laravellocalization.hideDefaultLocaleInURL', true);
        $this->app->setLocale('ar');
        session(['locale' => 'ar']);

        $school = School::factory()->create();
        $this->admin = User::factory()->create(['school_id' => $school->id]);
    }

    protected function givePermission(User $user, string ...$permissions): void
    {
        $this->app[PermissionRegistrar::class]->forgetCachedPermissions();
        foreach ($permissions as $permission) {
            $perm = Permission::firstOrCreate(['name' => $permission, 'table' => 'test']);
            $role = Role::firstOrCreate(['name' => 'search-test-role-'.$permission]);
            $role->givePermissionTo($perm);
            $user->assignRole($role);
        }
        $user->load('roles');
        $this->app[PermissionRegistrar::class]->forgetCachedPermissions();
    }

    public function test_filters_component_renders_search_form(): void
    {
        $html = $this->blade('<x-filters action="/x" reset="/x" placeholder="Enter-Name" />');

        $this->assertStringContainsString('<form method="GET" action="/x"', $html);
        $this->assertStringContainsString('name="search"', $html);
        $this->assertStringContainsString('Enter-Name', $html);
    }
}
