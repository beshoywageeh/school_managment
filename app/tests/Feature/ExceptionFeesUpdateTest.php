<?php

namespace Tests\Feature;

use App\Models\AcademicYear;
use App\Models\ClassRoom;
use App\Models\ExceptionFees;
use App\Models\FeeInvoice;
use App\Models\Grade;
use App\Models\School;
use App\Models\Student;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Tests\TestCase;

class ExceptionFeesUpdateTest extends TestCase
{
    use RefreshDatabase;

    protected School $school;

    protected User $user;

    protected Grade $grade;

    protected ClassRoom $classRoom;

    protected AcademicYear $year;

    protected Student $student;

    protected FeeInvoice $fee;

    protected function setUp(): void
    {
        parent::setUp();

        $this->app['config']->set('laravellocalization.hideDefaultLocaleInURL', true);

        $this->school = School::factory()->create();
        $this->user = User::factory()->create([
            'school_id' => $this->school->id,
            'isAdmin' => false,
        ]);

        $this->grade = Grade::factory()->create(['school_id' => $this->school->id]);
        $this->classRoom = ClassRoom::factory()->create([
            'grade_id' => $this->grade->id,
            'school_id' => $this->school->id,
        ]);
        $this->year = AcademicYear::factory()->create([
            'school_id' => $this->school->id,
            'status' => 'active',
        ]);
        $this->student = Student::factory()->create([
            'school_id' => $this->school->id,
            'grade_id' => $this->grade->id,
            'classroom_id' => $this->classRoom->id,
            'acadmiecyear_id' => $this->year->id,
        ]);
        $this->fee = FeeInvoice::create([
            'invoice_date' => now()->toDateString(),
            'student_id' => $this->student->id,
            'grade_id' => $this->grade->id,
            'classroom_id' => $this->classRoom->id,
            'academic_year_id' => $this->year->id,
            'school_fee_id' => 1,
            'school_id' => $this->school->id,
            'user_id' => $this->user->id,
            'status' => 'unpaid',
        ]);

        $perm = Permission::firstOrCreate(['name' => 'except_fee-edit', 'table' => 'test']);
        $role = Role::firstOrCreate(['name' => 'exception-edit-role']);
        $role->givePermissionTo($perm);
        $this->user->assignRole($role);
        $this->user->load('roles');
        app(PermissionRegistrar::class)->forgetCachedPermissions();
        Auth::login($this->user);
    }

    private function makeException(float $amount = 100.0): ExceptionFees
    {
        return ExceptionFees::create([
            'student_id' => $this->student->id,
            'grade_id' => $this->grade->id,
            'class_id' => $this->classRoom->id,
            'fee_id' => $this->fee->id,
            'academic_year_id' => $this->year->id,
            'user_id' => $this->user->id,
            'school_id' => $this->school->id,
            'date' => now()->toDateString(),
            'amount' => $amount,
        ]);
    }

    public function test_exception_update_with_non_existent_id_returns_validation_error(): void
    {
        $response = $this->put(route('except-fee.update', 9999), [
            'id' => 9999,
            'student_id' => $this->student->id,
            'amount' => 200,
            'acadmic_id' => $this->year->id,
        ]);
        $response->assertSessionHasErrors('id');

        $this->assertSame(0, ExceptionFees::count());
    }

    public function test_exception_update_with_valid_id_but_no_student_account_does_not_crash(): void
    {
        $exception = $this->makeException(100.0);

        $this->put(route('except-fee.update', $exception->id), [
            'id' => $exception->id,
            'student_id' => $this->student->id,
            'amount' => 500,
            'acadmic_id' => $this->year->id,
        ])->assertRedirect();

        $this->assertDatabaseHas('excption_fees', [
            'id' => $exception->id,
            'amount' => 500,
        ]);
    }
}
