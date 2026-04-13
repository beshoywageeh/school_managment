<?php

namespace Tests\Feature;

use App\Models\class_room;
use App\Models\Grade;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ClassRoomCrudTest extends TestCase
{
    use RefreshDatabase;

    protected User $admin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->admin = User::factory()->create();
        $this->actingAs($this->admin);
    }

    public function test_can_list_class_rooms(): void
    {
        $grade = Grade::factory()->create();
        class_room::factory()->count(3)->create(['grade_id' => $grade->id]);

        $response = $this->get(route('class-rooms.index'));

        $response->assertStatus(200);
    }

    public function test_can_create_class_room(): void
    {
        $grade = Grade::factory()->create();

        $classRoomData = [
            'name' => 'Class A',
            'grade_id' => $grade->id,
        ];

        $response = $this->post(route('class-rooms.store'), $classRoomData);

        $response->assertRedirect();
        $this->assertDatabaseHas('class_rooms', [
            'name' => 'Class A',
        ]);
    }

    public function test_can_show_class_room(): void
    {
        $grade = Grade::factory()->create();
        $classRoom = class_room::factory()->create(['grade_id' => $grade->id]);

        $response = $this->get(route('class-rooms.show', $classRoom->id));

        $response->assertStatus(200);
    }

    public function test_can_update_class_room(): void
    {
        $grade = Grade::factory()->create();
        $classRoom = class_room::factory()->create(['grade_id' => $grade->id]);
        $updatedData = [
            'id' => $classRoom->id,
            'name' => 'Updated Class',
            'grade_name' => $grade->id,
        ];

        $response = $this->post(route('class-rooms.update'), $updatedData);

        $response->assertRedirect();
        $this->assertDatabaseHas('class_rooms', [
            'name' => 'Updated Class',
        ]);
    }

    public function test_can_delete_class_room(): void
    {
        $grade = Grade::factory()->create();
        $classRoom = class_room::factory()->create(['grade_id' => $grade->id]);

        $response = $this->delete(route('class-rooms.destroy', $classRoom->id));

        $response->assertRedirect();
        $this->assertSoftDeleted('class_rooms', [
            'id' => $classRoom->id,
        ]);
    }

    public function test_class_room_name_is_required(): void
    {
        $response = $this->post(route('class-rooms.store'), [
            'name' => '',
            'grade_id' => '',
        ]);

        $response->assertSessionHasErrors();
    }

    public function test_class_room_requires_valid_grade(): void
    {
        $response = $this->post(route('class-rooms.store'), [
            'name' => 'Test Class',
            'grade_id' => 9999,
        ]);

        $response->assertSessionHasErrors('grade_id');
    }
}
