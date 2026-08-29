<?php

namespace Tests\Feature;

use App\Models\Grade;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Tests\TestCase;

class GradeCrudTest extends TestCase
{
    use RefreshDatabase;

    protected User $admin;

    protected function setUp(): void
    {
        parent::setUp();

        $this->app['config']->set('laravellocalization.hideDefaultLocaleInURL', true);

        $this->admin = User::factory()->create();

        $permissions = ['grade-list', 'grade-create', 'grade-edit', 'grade-delete'];
        $role = Role::firstOrCreate(['name' => 'grade-crud-role']);
        foreach ($permissions as $name) {
            $role->givePermissionTo(Permission::firstOrCreate(['name' => $name]));
        }
        $this->admin->assignRole($role);
        $this->admin->load('roles');
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        $this->actingAs($this->admin);
    }

    public function test_can_list_grades(): void
    {
        Grade::factory()->count(3)->create(['school_id' => $this->admin->school_id]);

        $response = $this->get(route('grade.index'));

        $response->assertStatus(200);
    }

    public function test_can_create_grade(): void
    {
        $gradeData = [
            'name' => 'Test Grade',
            'user_id' => [$this->admin->id],
        ];

        $response = $this->post(route('grade.store'), $gradeData);

        $response->assertRedirect();
        $this->assertDatabaseHas('grades', [
            'name' => 'Test Grade',
        ]);
    }

    public function test_can_show_grade(): void
    {
        $grade = Grade::factory()->create(['school_id' => $this->admin->school_id]);

        $response = $this->get(route('grade.show', $grade->id));

        $response->assertStatus(200);
    }

    public function test_can_update_grade(): void
    {
        $grade = Grade::factory()->create(['school_id' => $this->admin->school_id]);
        $updatedData = [
            'id' => $grade->id,
            'name' => 'Updated Grade',
            'user_id' => [$this->admin->id],
        ];

        $response = $this->put(route('grade.update', $grade->id), $updatedData);

        $response->assertRedirect();
        $this->assertDatabaseHas('grades', [
            'name' => 'Updated Grade',
        ]);
    }

    public function test_can_delete_grade(): void
    {
        $grade = Grade::factory()->create(['school_id' => $this->admin->school_id]);

        $response = $this->delete(route('grade.destroy', $grade->id));

        $response->assertStatus(302);
        $this->assertSoftDeleted('grades', [
            'id' => $grade->id,
        ]);
    }

    public function test_grade_name_is_required(): void
    {
        $response = $this->post(route('grade.store'), [
            'name' => '',
        ]);

        $response->assertSessionHasErrors('name');
    }

    public function test_grade_name_must_be_unique(): void
    {
        Grade::factory()->create(['name' => 'Duplicate Grade', 'school_id' => $this->admin->school_id]);

        $response = $this->post(route('grade.store'), [
            'name' => 'Duplicate Grade',
            'user_id' => [$this->admin->id],
        ]);

        $response->assertSessionHasErrors('name');
    }
}
