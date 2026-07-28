<?php

namespace Tests\Feature;

use App\Models\AcademicYear;
use App\Models\ClassRoom;
use App\Models\Grade;
use App\Models\MyParent;
use App\Models\Nationality;
use App\Models\School;
use App\Models\Student;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Tests\TestCase;

class SchoolScopeTest extends TestCase
{
    use RefreshDatabase;

    protected School $schoolA;

    protected School $schoolB;

    protected User $userA;

    protected User $userB;

    protected function setUp(): void
    {
        parent::setUp();
        $this->app['config']->set('laravellocalization.hideDefaultLocaleInURL', true);
        $this->app->setLocale('ar');
        session(['locale' => 'ar']);

        $this->schoolA = School::factory()->create();
        $this->schoolB = School::factory()->create();

        $this->userA = User::factory()->create(['school_id' => $this->schoolA->id, 'isAdmin' => '0']);
        $this->userB = User::factory()->create(['school_id' => $this->schoolB->id, 'isAdmin' => '0']);
    }

    protected function givePermission(User $user, string ...$permissions): void
    {
        $this->app[PermissionRegistrar::class]->forgetCachedPermissions();
        foreach ($permissions as $permission) {
            $perm = Permission::firstOrCreate(['name' => $permission, 'table' => 'test']);
            $roleName = 'school-scope-test-role-'.$permission;
            $role = Role::firstOrCreate(['name' => $roleName]);
            $role->givePermissionTo($perm);
            $user->assignRole($role);
        }
        $user->load('roles');
        $this->app[PermissionRegistrar::class]->forgetCachedPermissions();
    }

    protected function giveAdminRole(User $user): void
    {
        $this->app[PermissionRegistrar::class]->forgetCachedPermissions();
        $role = Role::firstOrCreate(['name' => 'Admin']);
        $user->assignRole($role);
        $user->load('roles');
        $this->app[PermissionRegistrar::class]->forgetCachedPermissions();
    }

    public function test_student_from_school_a_not_visible_to_school_b_user(): void
    {
        $this->givePermission($this->userA, 'Students-list');
        $this->givePermission($this->userB, 'Students-list');
        $this->giveAdminRole($this->userB);

        $grade = Grade::factory()->create(['school_id' => $this->schoolA->id]);
        $classRoom = ClassRoom::factory()->create([
            'grade_id' => $grade->id,
            'school_id' => $this->schoolA->id,
        ]);
        $parent = MyParent::factory()->create(['school_id' => $this->schoolA->id]);
        $nationality = Nationality::create(['name' => 'Test Nationality']);
        $academicYear = AcademicYear::factory()->create(['school_id' => $this->schoolA->id]);

        $student = Student::factory()->create([
            'school_id' => $this->schoolA->id,
            'grade_id' => $grade->id,
            'classroom_id' => $classRoom->id,
            'parent_id' => $parent->id,
            'nationality_id' => $nationality->id,
            'acadmiecyear_id' => $academicYear->id,
            'user_id' => $this->userA->id,
            'name' => 'Ahmed From School A',
        ]);

        $this->actingAs($this->userB);
        $response = $this->get(route('students.index'));

        $response->assertStatus(200);
        $response->assertDontSee('Ahmed From School A');
    }

    public function test_student_from_school_a_visible_to_school_a_user(): void
    {
        $this->givePermission($this->userA, 'Students-list');
        $this->giveAdminRole($this->userA);

        $grade = Grade::factory()->create(['school_id' => $this->schoolA->id]);
        $classRoom = ClassRoom::factory()->create([
            'grade_id' => $grade->id,
            'school_id' => $this->schoolA->id,
        ]);
        $parent = MyParent::factory()->create(['school_id' => $this->schoolA->id]);
        $nationality = Nationality::create(['name' => 'Test Nationality']);
        $academicYear = AcademicYear::factory()->create(['school_id' => $this->schoolA->id]);

        $student = Student::factory()->create([
            'school_id' => $this->schoolA->id,
            'grade_id' => $grade->id,
            'classroom_id' => $classRoom->id,
            'parent_id' => $parent->id,
            'nationality_id' => $nationality->id,
            'acadmiecyear_id' => $academicYear->id,
            'user_id' => $this->userA->id,
            'name' => 'Sara From School A',
        ]);

        $this->actingAs($this->userA);
        $response = $this->get(route('students.index'));

        $response->assertStatus(200);
        $response->assertSee('Sara From School A');
    }

    public function test_students_from_both_schools_are_isolated(): void
    {
        $this->givePermission($this->userA, 'Students-list');
        $this->givePermission($this->userB, 'Students-list');
        $this->giveAdminRole($this->userA);
        $this->giveAdminRole($this->userB);

        $gradeA = Grade::factory()->create(['school_id' => $this->schoolA->id]);
        $classRoomA = ClassRoom::factory()->create([
            'grade_id' => $gradeA->id,
            'school_id' => $this->schoolA->id,
        ]);
        $parentA = MyParent::factory()->create(['school_id' => $this->schoolA->id]);
        $nationality = Nationality::create(['name' => 'Test Nationality']);
        $academicYearA = AcademicYear::factory()->create(['school_id' => $this->schoolA->id]);

        $gradeB = Grade::factory()->create(['school_id' => $this->schoolB->id]);
        $classRoomB = ClassRoom::factory()->create([
            'grade_id' => $gradeB->id,
            'school_id' => $this->schoolB->id,
        ]);
        $parentB = MyParent::factory()->create(['school_id' => $this->schoolB->id]);
        $academicYearB = AcademicYear::factory()->create(['school_id' => $this->schoolB->id]);

        Student::factory()->create([
            'school_id' => $this->schoolA->id,
            'grade_id' => $gradeA->id,
            'classroom_id' => $classRoomA->id,
            'parent_id' => $parentA->id,
            'nationality_id' => $nationality->id,
            'acadmiecyear_id' => $academicYearA->id,
            'user_id' => $this->userA->id,
            'name' => 'Student Only In School A',
        ]);

        Student::factory()->create([
            'school_id' => $this->schoolB->id,
            'grade_id' => $gradeB->id,
            'classroom_id' => $classRoomB->id,
            'parent_id' => $parentB->id,
            'nationality_id' => $nationality->id,
            'acadmiecyear_id' => $academicYearB->id,
            'user_id' => $this->userB->id,
            'name' => 'Student Only In School B',
        ]);

        $this->actingAs($this->userA);
        $responseA = $this->get(route('students.index'));
        $responseA->assertStatus(200);
        $responseA->assertSee('Student Only In School A');
        $responseA->assertDontSee('Student Only In School B');

        $this->actingAs($this->userB);
        $responseB = $this->get(route('students.index'));
        $responseB->assertStatus(200);
        $responseB->assertSee('Student Only In School B');
        $responseB->assertDontSee('Student Only In School A');
    }

    public function test_school_b_user_cannot_see_school_a_student_via_direct_query(): void
    {
        $grade = Grade::factory()->create(['school_id' => $this->schoolA->id]);
        $classRoom = ClassRoom::factory()->create([
            'grade_id' => $grade->id,
            'school_id' => $this->schoolA->id,
        ]);
        $parent = MyParent::factory()->create(['school_id' => $this->schoolA->id]);
        $nationality = Nationality::create(['name' => 'Direct Query Nationality']);
        $academicYear = AcademicYear::factory()->create(['school_id' => $this->schoolA->id]);

        $student = Student::factory()->create([
            'school_id' => $this->schoolA->id,
            'grade_id' => $grade->id,
            'classroom_id' => $classRoom->id,
            'parent_id' => $parent->id,
            'nationality_id' => $nationality->id,
            'acadmiecyear_id' => $academicYear->id,
            'user_id' => $this->userA->id,
        ]);

        $this->actingAs($this->userB);
        $found = Student::find($student->id);

        $this->assertNull($found, 'School B user should not be able to find School A student via Eloquent');
    }

    public function test_school_b_user_cannot_access_school_a_student_show_page(): void
    {
        $this->givePermission($this->userB, 'Students-list');
        $this->giveAdminRole($this->userB);

        $grade = Grade::factory()->create(['school_id' => $this->schoolA->id]);
        $classRoom = ClassRoom::factory()->create([
            'grade_id' => $grade->id,
            'school_id' => $this->schoolA->id,
        ]);
        $parent = MyParent::factory()->create(['school_id' => $this->schoolA->id]);
        $nationality = Nationality::create(['name' => 'Show Page Nationality']);
        $academicYear = AcademicYear::factory()->create(['school_id' => $this->schoolA->id]);

        $student = Student::factory()->create([
            'school_id' => $this->schoolA->id,
            'grade_id' => $grade->id,
            'classroom_id' => $classRoom->id,
            'parent_id' => $parent->id,
            'nationality_id' => $nationality->id,
            'acadmiecyear_id' => $academicYear->id,
            'user_id' => $this->userA->id,
        ]);

        $this->actingAs($this->userB);
        $response = $this->get(route('students.show', $student->id));

        $response->assertStatus(500);
        $response->assertDontSee($student->name);
    }
}
