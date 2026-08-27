<?php

namespace Tests\Feature;

use App\Models\Grade;
use App\Models\School;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use Tests\TestCase;

class GradesTest extends TestCase
{
    use RefreshDatabase;

    protected School $school;

    protected User $admin;

    protected function setUp(): void
    {
        parent::setUp();

        $this->app['config']->set('laravellocalization.hideDefaultLocaleInURL', true);

        $this->school = School::factory()->create();
        $this->admin = User::factory()->create([
            'school_id' => $this->school->id,
            'isAdmin' => true,
        ]);

        $this->admin->givePermissionTo(
            Permission::findOrCreate('grade-create', 'web'),
            Permission::findOrCreate('grade-edit', 'web'),
        );

        app(PermissionRegistrar::class)->forgetCachedPermissions();
        Auth::login($this->admin);
    }

    public function test_grade_update_rejects_non_existent_id(): void
    {
        $this->put(route('grade.update', 9999), [
            'id' => 9999,
            'name' => 'Updated',
            'user_id' => [$this->admin->id],
        ])->assertSessionHasErrors('id');
    }

    public function test_grade_update_with_valid_id_succeeds(): void
    {
        $grade = Grade::factory()->create([
            'school_id' => $this->school->id,
            'name' => 'Original',
            'user_id' => $this->admin->id,
        ]);

        $this->put(route('grade.update', $grade->id), [
            'id' => $grade->id,
            'name' => 'Updated Name',
            'user_id' => [$this->admin->id],
        ])->assertRedirect();

        $this->assertDatabaseHas('grades', [
            'id' => $grade->id,
            'name' => 'Updated Name',
        ]);
    }

    public function test_grade_create_without_id_succeeds(): void
    {
        $this->post(route('grade.store'), [
            'name' => 'New Grade',
            'user_id' => [$this->admin->id],
        ])->assertRedirect();

        $this->assertDatabaseHas('grades', [
            'school_id' => $this->school->id,
            'name' => 'New Grade',
        ]);
    }
}
