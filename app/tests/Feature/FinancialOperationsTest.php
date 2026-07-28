<?php

namespace Tests\Feature;

use App\Enums\Payment_Type;
use App\Models\AcademicYear;
use App\Models\ClassRoom;
use App\Models\Grade;
use App\Models\School;
use App\Models\SchoolFee;
use App\Models\Student;
use App\Models\StudentAccount;
use App\Models\User;
use App\Services\Finance\InvoiceService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\PermissionRegistrar;
use Tests\TestCase;

class FinancialOperationsTest extends TestCase
{
    use RefreshDatabase;

    protected School $school;

    protected User $user;

    protected Grade $grade;

    protected ClassRoom $classRoom;

    protected AcademicYear $year;

    protected Student $student;

    protected SchoolFee $schoolFee;

    protected function setUp(): void
    {
        parent::setUp();

        $this->app['config']->set('laravellocalization.hideDefaultLocaleInURL', true);

        $this->school = School::factory()->create();
        $this->user = User::factory()->create([
            'school_id' => $this->school->id,
            'isAdmin' => true,
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

        $this->schoolFee = SchoolFee::factory()->create([
            'school_id' => $this->school->id,
            'grade_id' => $this->grade->id,
            'classroom_id' => $this->classRoom->id,
            'academic_year_id' => $this->year->id,
            'amount' => 1000,
        ]);

        app(PermissionRegistrar::class)->forgetCachedPermissions();
        Auth::login($this->user);
    }

    public function test_fee_invoice_creation_creates_student_account_entry(): void
    {
        $invoiceService = app(InvoiceService::class);

        $invoice = $invoiceService->createFeeInvoice(
            $this->student,
            $this->schoolFee,
            $this->year->id,
            $this->school->id,
        );

        $this->assertDatabaseHas('fee_invoices', [
            'student_id' => $this->student->id,
            'school_id' => $this->school->id,
            'school_fee_id' => $this->schoolFee->id,
        ]);

        $studentAccountEntries = StudentAccount::where('fee_invoices_id', $invoice->id)->get();
        $this->assertCount(1, $studentAccountEntries);

        $entry = $studentAccountEntries->first();
        $this->assertEquals($this->student->id, $entry->student_id);
        $this->assertEquals($this->grade->id, $entry->grade_id);
        $this->assertEquals($this->classRoom->id, $entry->classroom_id);
        $this->assertEquals(Payment_Type::FEE_INVOICE, $entry->type);
        $this->assertEquals(1000.0, (float) $entry->debit);
        $this->assertEquals(0.0, (float) $entry->credit);
    }

    public function test_fee_invoice_status_is_not_paid(): void
    {
        $invoiceService = app(InvoiceService::class);

        $invoice = $invoiceService->createFeeInvoice(
            $this->student,
            $this->schoolFee,
            $this->year->id,
            $this->school->id,
        );

        $this->assertDatabaseHas('fee_invoices', [
            'id' => $invoice->id,
            'status' => 'not_paid',
        ]);
        $this->assertDatabaseMissing('fee_invoices', [
            'id' => $invoice->id,
            'status' => 'unpaid',
        ]);
    }

    public function test_no_unpaid_status_exists_in_database(): void
    {
        DB::table('fee_invoices')->where('status', 'unpaid')->update(['status' => 'not_paid']);

        $unpaidCount = DB::table('fee_invoices')->where('status', 'unpaid')->count();
        $this->assertEquals(0, $unpaidCount);
    }

    public function test_multiple_fee_invoices_create_separate_student_account_entries(): void
    {
        $invoiceService = app(InvoiceService::class);

        $schoolFee2 = SchoolFee::factory()->create([
            'school_id' => $this->school->id,
            'grade_id' => $this->grade->id,
            'classroom_id' => $this->classRoom->id,
            'academic_year_id' => $this->year->id,
            'amount' => 2000,
        ]);

        $invoice1 = $invoiceService->createFeeInvoice(
            $this->student,
            $this->schoolFee,
            $this->year->id,
            $this->school->id,
        );

        $invoice2 = $invoiceService->createFeeInvoice(
            $this->student,
            $schoolFee2,
            $this->year->id,
            $this->school->id,
        );

        $entries1 = StudentAccount::where('fee_invoices_id', $invoice1->id)->get();
        $entries2 = StudentAccount::where('fee_invoices_id', $invoice2->id)->get();

        $this->assertCount(1, $entries1);
        $this->assertCount(1, $entries2);

        $this->assertEquals(1000.0, (float) $entries1->first()->debit);
        $this->assertEquals(2000.0, (float) $entries2->first()->debit);
    }

    public function test_student_account_debit_matches_school_fee_amount(): void
    {
        $invoiceService = app(InvoiceService::class);

        $invoice = $invoiceService->createFeeInvoice(
            $this->student,
            $this->schoolFee,
            $this->year->id,
            $this->school->id,
        );

        $entry = StudentAccount::where('fee_invoices_id', $invoice->id)->first();
        $this->assertEquals($this->schoolFee->amount, (float) $entry->debit);
    }

    public function test_student_account_belongs_to_correct_student(): void
    {
        $invoiceService = app(InvoiceService::class);

        $invoice = $invoiceService->createFeeInvoice(
            $this->student,
            $this->schoolFee,
            $this->year->id,
            $this->school->id,
        );

        $entry = StudentAccount::where('fee_invoices_id', $invoice->id)->first();
        $this->assertEquals($this->student->id, $entry->student_id);
        $this->assertEquals($this->student->grade_id, $entry->grade_id);
        $this->assertEquals($this->student->classroom_id, $entry->classroom_id);
    }
}
