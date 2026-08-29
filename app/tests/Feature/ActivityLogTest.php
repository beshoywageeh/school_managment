<?php

namespace Tests\Feature;

use App\Models\School;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Tests\TestCase;

class ActivityLogTest extends TestCase
{
    use RefreshDatabase;

    protected User $admin;

    protected function setUp(): void
    {
        parent::setUp();

        $this->app['config']->set('laravellocalization.hideDefaultLocaleInURL', true);

        $school = School::factory()->create();
        $this->admin = User::factory()->create(['school_id' => $school->id]);
        $role = Role::firstOrCreate(['name' => 'activity-log-test-role']);
        $role->givePermissionTo(Permission::firstOrCreate(['name' => 'monitor-access']));
        $role->givePermissionTo(Permission::firstOrCreate(['name' => 'settings-info']));
        $this->admin->assignRole($role);
        $this->admin->load('roles');
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        $this->actingAs($this->admin);
    }

    public function test_can_list_activity_logs(): void
    {
        DB::table('activity_logs')->insert([
            ['action' => 'created', 'model_type' => 'student', 'description' => 'x', 'ip' => '127.0.0.1', 'user_id' => $this->admin->id, 'school_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['action' => 'updated', 'model_type' => 'student', 'description' => 'x', 'ip' => '127.0.0.1', 'user_id' => $this->admin->id, 'school_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);

        $response = $this->get(route('system-lookup'));

        $response->assertStatus(200);
    }

    public function test_activity_logs_can_be_filtered_by_action(): void
    {
        DB::table('activity_logs')->insert([
            ['action' => 'created', 'model_type' => 'student', 'description' => 'x', 'ip' => '127.0.0.1', 'user_id' => $this->admin->id, 'school_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['action' => 'deleted', 'model_type' => 'student', 'description' => 'x', 'ip' => '127.0.0.1', 'user_id' => $this->admin->id, 'school_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);

        $response = $this->get(route('system-lookup', ['action' => 'created']));

        $response->assertStatus(200);
    }
}
