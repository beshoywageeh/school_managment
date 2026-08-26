<?php

namespace Tests\Feature;

use App\Models\ClassRoom;
use App\Models\Grade;
use App\Models\School;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Tests\TestCase;

class GetClassRoomsAjaxTest extends TestCase
{
    use RefreshDatabase;

    protected School $schoolA;

    protected School $schoolB;

    protected Grade $gradeA;

    protected Grade $gradeB;

    protected ClassRoom $classA1;

    protected ClassRoom $classA2;

    protected ClassRoom $classB1;

    protected function setUp(): void
    {
        parent::setUp();

        $this->app['config']->set('laravellocalization.hideDefaultLocaleInURL', true);

        $this->schoolA = School::factory()->create();
        $this->schoolB = School::factory()->create();

        $admin = User::factory()->create([
            'school_id' => $this->schoolA->id,
        ]);

        $this->gradeA = Grade::factory()->create([
            'user_id' => $admin->id,
            'school_id' => $this->schoolA->id,
        ]);
        $this->gradeB = Grade::factory()->create([
            'user_id' => $admin->id,
            'school_id' => $this->schoolB->id,
        ]);

        $this->classA1 = ClassRoom::factory()->create([
            'grade_id' => $this->gradeA->id,
            'school_id' => $this->schoolA->id,
        ]);
        $this->classA2 = ClassRoom::factory()->create([
            'grade_id' => $this->gradeA->id,
            'school_id' => $this->schoolA->id,
        ]);
        $this->classB1 = ClassRoom::factory()->create([
            'grade_id' => $this->gradeB->id,
            'school_id' => $this->schoolB->id,
        ]);

        app(PermissionRegistrar::class)->forgetCachedPermissions();
    }

    private function userWithPermission(School $school, bool $isAdmin): User
    {
        $user = User::factory()->create([
            'school_id' => $school->id,
            'isAdmin' => $isAdmin,
        ]);

        $perm = Permission::firstOrCreate(['name' => 'Students-list', 'table' => 'test']);
        $role = Role::firstOrCreate(['name' => 'ajax-test-role', 'guard_name' => 'web']);
        $role->givePermissionTo($perm);
        $user->assignRole($role);
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        return $user;
    }

    public function test_user_sees_only_own_school_classrooms(): void
    {
        $user = $this->userWithPermission($this->schoolA, false);

        $response = $this->actingAs($user)->getJson("/ajax/get-class-rooms/{$this->gradeA->id}");

        $response->assertOk();

        $ids = collect($response->json())->pluck('id')->all();

        $this->assertEqualsCanonicalizing([$this->classA1->id, $this->classA2->id], $ids);
    }

    public function test_admin_can_fetch_classrooms_from_any_school(): void
    {
        $admin = $this->userWithPermission($this->schoolA, true);

        $response = $this->actingAs($admin)->getJson("/ajax/get-class-rooms/{$this->gradeB->id}");

        $response->assertOk();

        $ids = collect($response->json())->pluck('id')->all();

        $this->assertContains($this->classB1->id, $ids);
    }

    public function test_non_admin_cannot_fetch_other_school_classrooms(): void
    {
        $user = $this->userWithPermission($this->schoolA, false);

        $response = $this->actingAs($user)->getJson("/ajax/get-class-rooms/{$this->gradeB->id}");

        $response->assertOk()->assertExactJson([]);
    }

    public function test_returns_empty_json_array_when_grade_has_no_classrooms(): void
    {
        $admin = $this->userWithPermission($this->schoolA, true);

        $emptyGrade = Grade::factory()->create([
            'user_id' => $admin->id,
            'school_id' => $this->schoolA->id,
        ]);

        $response = $this->actingAs($admin)->getJson("/ajax/get-class-rooms/{$emptyGrade->id}");

        $response->assertOk()->assertExactJson([]);
    }

    public function test_guest_gets_unauthenticated_response(): void
    {
        $response = $this->getJson("/ajax/get-class-rooms/{$this->gradeA->id}");

        $response->assertUnauthorized();
    }
}
