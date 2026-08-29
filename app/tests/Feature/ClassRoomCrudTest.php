<?php

namespace Tests\Feature;

use App\Models\ClassRoom;
use App\Models\Grade;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Tests\TestCase;

class ClassRoomCrudTest extends TestCase
{
    use RefreshDatabase;

    protected User $admin;

    protected function setUp(): void
    {
        parent::setUp();

        $this->app['config']->set('laravellocalization.hideDefaultLocaleInURL', true);

        $this->admin = User::factory()->create();

        $permissions = ['class_rooms-list', 'class_rooms-create', 'class_rooms-edit', 'class_rooms-delete'];
        $role = Role::firstOrCreate(['name' => 'class-room-crud-role']);
        foreach ($permissions as $name) {
            $role->givePermissionTo(Permission::firstOrCreate(['name' => $name]));
        }
        $this->admin->assignRole($role);
        $this->admin->load('roles');
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        $this->actingAs($this->admin);
    }

    public function test_can_list_class_rooms(): void
    {
        $grade = Grade::factory()->create(['school_id' => $this->admin->school_id]);
        ClassRoom::factory()->count(3)->create([
            'grade_id' => $grade->id,
            'school_id' => $this->admin->school_id,
        ]);

        $response = $this->get(route('class-rooms.index'));

        $response->assertStatus(200);
    }

    public function test_can_create_class_room(): void
    {
        $grade = Grade::factory()->create(['school_id' => $this->admin->school_id]);

        $classRoomData = [
            'classroom' => [
                ['class_name' => 'Class A', 'grade_id' => $grade->id],
            ],
        ];

        $response = $this->post(route('class-rooms.store'), $classRoomData);

        $response->assertRedirect();
        $this->assertDatabaseHas('class_rooms', [
            'name' => 'Class A',
        ]);
    }

    public function test_can_show_class_room(): void
    {
        $grade = Grade::factory()->create(['school_id' => $this->admin->school_id]);
        $classRoom = ClassRoom::factory()->create([
            'grade_id' => $grade->id,
            'school_id' => $this->admin->school_id,
        ]);

        $response = $this->get(route('class-rooms.show', $classRoom->id));

        $response->assertStatus(200);
    }

    public function test_can_update_class_room(): void
    {
        $grade = Grade::factory()->create(['school_id' => $this->admin->school_id]);
        $classRoom = ClassRoom::factory()->create([
            'grade_id' => $grade->id,
            'school_id' => $this->admin->school_id,
        ]);
        $updatedData = [
            'id' => $classRoom->id,
            'class_name' => 'Updated Class',
            'grade_name' => $grade->id,
        ];

        $response = $this->put(route('class-rooms.update', $classRoom->id), $updatedData);

        $response->assertRedirect();
        $this->assertDatabaseHas('class_rooms', [
            'name' => 'Updated Class',
        ]);
    }

    public function test_can_delete_class_room(): void
    {
        $grade = Grade::factory()->create(['school_id' => $this->admin->school_id]);
        $classRoom = ClassRoom::factory()->create([
            'grade_id' => $grade->id,
            'school_id' => $this->admin->school_id,
        ]);

        $response = $this->delete(route('class-rooms.destroy', $classRoom->id));

        $response->assertStatus(302);
        $this->assertSoftDeleted('class_rooms', [
            'id' => $classRoom->id,
        ]);
    }

    public function test_class_room_name_is_required(): void
    {
        $response = $this->post(route('class-rooms.store'), [
            'classroom' => [
                ['class_name' => '', 'grade_id' => ''],
            ],
        ]);

        $response->assertSessionHasErrors();
    }

    public function test_class_room_requires_valid_grade(): void
    {
        $response = $this->post(route('class-rooms.store'), [
            'classroom' => [
                ['class_name' => 'Test Class', 'grade_id' => 9999],
            ],
        ]);

        $response->assertSessionHasErrors('classroom.0.grade_id');
    }
}
