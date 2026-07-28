<?php

namespace Tests\Feature;

use App\Models\AcademicYear;
use App\Models\ClassRoom;
use App\Models\FeeInvoice;
use App\Models\Grade;
use App\Models\School;
use App\Models\SchoolFee;
use App\Models\Student;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Tests\TestCase;

class MultiTenancyTest extends TestCase
{
    use RefreshDatabase;

    protected School $schoolA;

    protected School $schoolB;

    protected User $userA;

    protected User $userB;

    protected Grade $gradeA;

    protected Grade $gradeB;

    protected ClassRoom $classA;

    protected ClassRoom $classB;

    protected AcademicYear $year;

    protected Student $studentA;

    protected Student $studentB;

    protected function setUp(): void
    {
        parent::setUp();

        $this->app['config']->set('laravellocalization.hideDefaultLocaleInURL', true);

        $this->schoolA = School::factory()->create(['name' => 'School Alpha']);
        $this->schoolB = School::factory()->create(['name' => 'School Beta']);

        $this->userA = User::factory()->create([
            'school_id' => $this->schoolA->id,
            'isAdmin' => false,
        ]);
        $this->userB = User::factory()->create([
            'school_id' => $this->schoolB->id,
            'isAdmin' => false,
        ]);

        $this->gradeA = Grade::factory()->create(['school_id' => $this->schoolA->id]);
        $this->gradeB = Grade::factory()->create(['school_id' => $this->schoolB->id]);

        $this->classA = ClassRoom::factory()->create([
            'grade_id' => $this->gradeA->id,
            'school_id' => $this->schoolA->id,
        ]);
        $this->classB = ClassRoom::factory()->create([
            'grade_id' => $this->gradeB->id,
            'school_id' => $this->schoolB->id,
        ]);

        $this->year = AcademicYear::factory()->create([
            'school_id' => $this->schoolA->id,
            'status' => 'active',
        ]);

        AcademicYear::factory()->create([
            'school_id' => $this->schoolB->id,
            'status' => 'active',
        ]);

        $this->studentA = Student::factory()->create([
            'school_id' => $this->schoolA->id,
            'grade_id' => $this->gradeA->id,
            'classroom_id' => $this->classA->id,
            'acadmiecyear_id' => $this->year->id,
        ]);

        $this->studentB = Student::factory()->create([
            'school_id' => $this->schoolB->id,
            'grade_id' => $this->gradeB->id,
            'classroom_id' => $this->classB->id,
            'acadmiecyear_id' => $this->year->id,
        ]);

        SchoolFee::factory()->create([
            'school_id' => $this->schoolA->id,
            'grade_id' => $this->gradeA->id,
            'classroom_id' => $this->classA->id,
            'academic_year_id' => $this->year->id,
            'amount' => 500,
        ]);

        SchoolFee::factory()->create([
            'school_id' => $this->schoolB->id,
            'grade_id' => $this->gradeB->id,
            'classroom_id' => $this->classB->id,
            'academic_year_id' => $this->year->id,
            'amount' => 750,
        ]);

        FeeInvoice::factory()->create([
            'student_id' => $this->studentA->id,
            'grade_id' => $this->gradeA->id,
            'classroom_id' => $this->classA->id,
            'school_id' => $this->schoolA->id,
            'academic_year_id' => $this->year->id,
        ]);

        FeeInvoice::factory()->create([
            'student_id' => $this->studentB->id,
            'grade_id' => $this->gradeB->id,
            'classroom_id' => $this->classB->id,
            'school_id' => $this->schoolB->id,
            'academic_year_id' => $this->year->id,
        ]);

        app(PermissionRegistrar::class)->forgetCachedPermissions();
    }

    private function givePermission(User $user, string ...$permissions): void
    {
        foreach ($permissions as $permission) {
            $perm = Permission::firstOrCreate(['name' => $permission, 'table' => 'test']);
            $roleName = 'mt-test-role-'.$permission;
            $role = Role::firstOrCreate(['name' => $roleName, 'guard_name' => 'web']);
            $role->givePermissionTo($perm);
            $user->assignRole($role);
        }
        $user->load('roles');
        app(PermissionRegistrar::class)->forgetCachedPermissions();
    }

    public function test_student_from_school_a_invisible_to_school_b(): void
    {
        $this->givePermission($this->userB, 'Students-list');
        Auth::login($this->userB);

        $students = Student::all();
        $studentIds = $students->pluck('id')->toArray();

        $this->assertNotContains($this->studentA->id, $studentIds);
        $this->assertContains($this->studentB->id, $studentIds);
    }

    public function test_fee_invoice_from_school_a_invisible_to_school_b(): void
    {
        $this->givePermission($this->userB, 'fee_invoice-list');
        Auth::login($this->userB);

        $invoices = FeeInvoice::all();
        $invoiceSchoolIds = $invoices->pluck('school_id')->toArray();

        $this->assertNotContains($this->schoolA->id, $invoiceSchoolIds);
        $this->assertContains($this->schoolB->id, $invoiceSchoolIds);
    }

    public function test_grade_from_school_a_invisible_to_school_b(): void
    {
        $this->givePermission($this->userB, 'grade-list');
        Auth::login($this->userB);

        $grades = Grade::all();
        $gradeIds = $grades->pluck('id')->toArray();

        $this->assertNotContains($this->gradeA->id, $gradeIds);
        $this->assertContains($this->gradeB->id, $gradeIds);
    }

    public function test_student_a_invisible_to_user_b(): void
    {
        $this->givePermission($this->userB, 'Students-list');
        Auth::login($this->userB);

        $found = Student::where('id', $this->studentA->id)->first();
        $this->assertNull($found);
    }

    public function test_school_fee_from_school_a_invisible_to_school_b(): void
    {
        $this->givePermission($this->userB, 'school_fee-list');
        Auth::login($this->userB);

        $fees = SchoolFee::all();
        $feeSchoolIds = $fees->pluck('school_id')->toArray();

        $this->assertNotContains($this->schoolA->id, $feeSchoolIds);
        $this->assertContains($this->schoolB->id, $feeSchoolIds);
    }

    public function test_user_b_cannot_see_student_a_via_find(): void
    {
        $this->givePermission($this->userB, 'Students-list');
        Auth::login($this->userB);

        $found = Student::find($this->studentA->id);
        $this->assertNull($found);
    }

    public function test_user_b_only_sees_own_school_students(): void
    {
        $this->givePermission($this->userB, 'Students-list');
        Auth::login($this->userB);

        $students = Student::all();
        foreach ($students as $student) {
            $this->assertEquals($this->schoolB->id, $student->school_id);
        }
    }
}
