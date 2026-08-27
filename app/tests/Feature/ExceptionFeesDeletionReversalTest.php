<?php

namespace Tests\Feature;

use App\Models\AcademicYear;
use App\Models\ClassRoom;
use App\Models\ExceptionFees;
use App\Models\FeeInvoice;
use App\Models\Grade;
use App\Models\School;
use App\Models\Student;
use App\Models\StudentAccount;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Tests\TestCase;

class ExceptionFeesDeletionReversalTest extends TestCase
{
    use RefreshDatabase;

    protected School $schoolA;

    protected School $schoolB;

    protected User $adminA;

    protected Grade $grade;

    protected ClassRoom $classRoom;

    protected AcademicYear $year;

    protected Student $student;

    protected FeeInvoice $fee;

    protected function setUp(): void
    {
        parent::setUp();

        $this->app['config']->set('laravellocalization.hideDefaultLocaleInURL', true);

        $this->schoolA = School::factory()->create();
        $this->schoolB = School::factory()->create();

        $this->adminA = User::factory()->create([
            'school_id' => $this->schoolA->id,
            'isAdmin' => false,
        ]);

        $this->grade = Grade::factory()->create(['school_id' => $this->schoolA->id]);
        $this->classRoom = ClassRoom::factory()->create([
            'grade_id' => $this->grade->id,
            'school_id' => $this->schoolA->id,
        ]);
        $this->year = AcademicYear::factory()->create([
            'school_id' => $this->schoolA->id,
            'status' => 'active',
        ]);
        $this->student = Student::factory()->create([
            'school_id' => $this->schoolA->id,
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
            'school_id' => $this->schoolA->id,
            'user_id' => $this->adminA->id,
            'status' => 'unpaid',
        ]);

        $this->givePermission($this->adminA);
        app(PermissionRegistrar::class)->forgetCachedPermissions();
    }

    protected function givePermission(User $user): void
    {
        $perm = Permission::firstOrCreate(['name' => 'except_fee-delete', 'table' => 'test']);
        $role = Role::firstOrCreate(['name' => 'exception-delete-role']);
        $role->givePermissionTo($perm);
        $user->assignRole($role);
        $user->load('roles');
        app(PermissionRegistrar::class)->forgetCachedPermissions();
    }

    protected function makeException(float $amount = 100.0): ExceptionFees
    {
        $exception = ExceptionFees::create([
            'student_id' => $this->student->id,
            'grade_id' => $this->grade->id,
            'class_id' => $this->classRoom->id,
            'fee_id' => $this->fee->id,
            'academic_year_id' => $this->year->id,
            'user_id' => $this->adminA->id,
            'school_id' => $this->schoolA->id,
            'date' => now()->toDateString(),
            'amount' => $amount,
        ]);

        StudentAccount::create([
            'student_id' => $this->student->id,
            'grade_id' => $this->grade->id,
            'classroom_id' => $this->classRoom->id,
            'exception_id' => $exception->id,
            'fee_invoices_id' => $this->fee->id,
            'academic_year_id' => $this->year->id,
            'date' => now()->toDateString(),
            'type' => 'exciption',
            'debit' => 0.0,
            'credit' => $amount,
            'school_id' => $this->schoolA->id,
        ]);

        return $exception;
    }

    public function test_deleting_exemption_creates_reversal_with_full_context_that_inverts_debit_credit(): void
    {
        $this->actingAs($this->adminA);
        $exception = $this->makeException(250.0);

        $this->delete(route('except-fee.destroy', $exception->id))->assertRedirect();

        $rows = StudentAccount::withoutGlobalScopes()
            ->where('exception_id', $exception->id)
            ->orderBy('id')
            ->get();

        $this->assertCount(2, $rows);

        $original = $rows->first();
        $reversal = $rows->last();

        $this->assertSame($exception->id, (int) $reversal->exception_id);
        $this->assertSame($this->student->id, (int) $reversal->student_id);
        $this->assertSame($this->grade->id, (int) $reversal->grade_id);
        $this->assertSame($this->classRoom->id, (int) $reversal->classroom_id);
        $this->assertSame($this->year->id, (int) $reversal->academic_year_id);
        $this->assertSame($this->schoolA->id, (int) $reversal->school_id);
        $this->assertSame('exciption', $reversal->type->value);

        $this->assertEquals(250.0, (float) $original->credit);
        $this->assertEquals(0.0, (float) $original->debit);

        $this->assertEquals(0.0, (float) $reversal->credit);
        $this->assertEquals(250.0, (float) $reversal->debit);
    }

    public function test_deleting_exemption_with_no_student_account_succeeds_without_orphan_reversal(): void
    {
        $this->actingAs($this->adminA);
        $exception = ExceptionFees::create([
            'student_id' => $this->student->id,
            'grade_id' => $this->grade->id,
            'class_id' => $this->classRoom->id,
            'fee_id' => $this->fee->id,
            'academic_year_id' => $this->year->id,
            'user_id' => $this->adminA->id,
            'school_id' => $this->schoolA->id,
            'date' => now()->toDateString(),
            'amount' => 100.0,
        ]);

        $response = $this->delete(route('except-fee.destroy', $exception->id));

        $response->assertRedirect();
        $this->assertSoftDeleted('excption_fees', ['id' => $exception->id]);
        $this->assertSame(0, StudentAccount::withoutGlobalScopes()->where('exception_id', $exception->id)->count());
    }

    public function test_reversal_only_touches_current_school_rows(): void
    {
        $this->actingAs($this->adminA);
        $exception = $this->makeException(150.0);

        $this->delete(route('except-fee.destroy', $exception->id))->assertRedirect();

        $schoolACount = StudentAccount::withoutGlobalScopes()
            ->where('school_id', $this->schoolA->id)
            ->where('exception_id', $exception->id)
            ->count();
        $schoolBCount = StudentAccount::withoutGlobalScopes()
            ->where('school_id', $this->schoolB->id)
            ->where('exception_id', $exception->id)
            ->count();

        $this->assertSame(2, $schoolACount);
        $this->assertSame(0, $schoolBCount);
    }
}
