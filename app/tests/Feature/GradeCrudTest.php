<?php

namespace Tests\Feature;

use App\Models\Grade;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GradeCrudTest extends TestCase
{
    use RefreshDatabase;

    protected User $admin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->admin = User::factory()->create();
        $this->actingAs($this->admin);
    }

    public function test_can_list_grades(): void
    {
        Grade::factory()->count(3)->create();

        $response = $this->get(route('grade.index'));

        $response->assertStatus(200);
    }

    public function test_can_create_grade(): void
    {
        $gradeData = [
            'Grade_Name' => 'Test Grade',
            'user_id' => $this->admin->id,
        ];

        $response = $this->post(route('grade.store'), $gradeData);

        $response->assertRedirect();
        $this->assertDatabaseHas('grades', [
            'name' => 'Test Grade',
        ]);
    }

    public function test_can_show_grade(): void
    {
        $grade = Grade::factory()->create();

        $response = $this->get(route('grade.show', $grade->id));

        $response->assertStatus(200);
    }

    public function test_can_update_grade(): void
    {
        $grade = Grade::factory()->create();
        $updatedData = [
            'id' => $grade->id,
            'Grade_Name' => 'Updated Grade',
        ];

        $response = $this->post(route('grade.update'), $updatedData);

        $response->assertRedirect();
        $this->assertDatabaseHas('grades', [
            'name' => 'Updated Grade',
        ]);
    }

    public function test_can_delete_grade(): void
    {
        $grade = Grade::factory()->create();

        $response = $this->delete(route('grade.destroy', $grade->id));

        $response->assertRedirect();
        $this->assertSoftDeleted('grades', [
            'id' => $grade->id,
        ]);
    }

    public function test_grade_name_is_required(): void
    {
        $response = $this->post(route('grade.store'), [
            'Grade_Name' => '',
        ]);

        $response->assertSessionHasErrors('Grade_Name');
    }

    public function test_grade_name_must_be_unique(): void
    {
        Grade::factory()->create(['name' => 'Duplicate Grade']);

        $response = $this->post(route('grade.store'), [
            'Grade_Name' => 'Duplicate Grade',
        ]);

        $response->assertSessionHasErrors('Grade_Name');
    }
}
