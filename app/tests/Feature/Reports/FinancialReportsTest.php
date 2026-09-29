<?php

namespace Tests\Feature\Reports;

use App\Models\AcademicYear;
use App\Models\ClassRoom;
use App\Models\ExceptionFees;
use App\Models\FeeInvoice;
use App\Models\Grade;
use App\Models\MyParent;
use App\Models\PaymentParts;
use App\Models\ReceiptPayment;
use App\Models\SchoolFee;
use App\Models\Student;
use Illuminate\Support\Collection;

class FinancialReportsTest extends ReportTestCase
{
    /**
     * Build a complete financial fixture for one school: active year, grade,
     * classroom, parent, student, school fee and fee invoice.
     *
     * @return array{year: AcademicYear, grade: Grade, classroom: ClassRoom, student: Student, fee: SchoolFee, invoice: FeeInvoice}
     */
    private function financialFixture($school): array
    {
        $adminId = auth()->id();
        $year = $this->activeAcademicYear($school);
        $grade = Grade::factory()->create(['school_id' => $school->id, 'user_id' => $adminId]);
        $classroom = ClassRoom::factory()->create(['grade_id' => $grade->id, 'school_id' => $school->id, 'user_id' => $adminId]);
        $parent = MyParent::factory()->create(['school_id' => $school->id]);
        $student = Student::factory()->create([
            'school_id' => $school->id,
            'grade_id' => $grade->id,
            'classroom_id' => $classroom->id,
            'parent_id' => $parent->id,
            'acadmiecyear_id' => $year->id,
            'user_id' => $adminId,
        ]);
        $fee = SchoolFee::factory()->create([
            'school_id' => $school->id,
            'grade_id' => $grade->id,
            'classroom_id' => $classroom->id,
            'academic_year_id' => $year->id,
            'user_id' => $adminId,
            'title' => 'Tuition',
            'amount' => 1500,
        ]);
        $invoice = FeeInvoice::factory()->create([
            'school_id' => $school->id,
            'student_id' => $student->id,
            'grade_id' => $grade->id,
            'classroom_id' => $classroom->id,
            'academic_year_id' => $year->id,
            'school_fee_id' => $fee->id,
            'user_id' => $adminId,
            'status' => 'paid',
            'invoice_date' => now()->toDateString(),
        ]);

        return compact('year', 'grade', 'classroom', 'student', 'fee', 'invoice');
    }

    public function test_credit_renders_paid_invoices_with_credit_key(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);
        $fx = $this->financialFixture($school);

        $this->mockPdfExport()
            ->shouldReceive('printPdf')->andReturn(response('mock-pdf'))
            ->once()
            ->withArgs(function ($view, $data, $orientation) use ($fx) {
                return $view === 'backend.report.PDF.credit'
                    && $orientation === 'P'
                    && is_array($data)
                    && array_key_exists('credit', $data)
                    && $data['credit'] instanceof Collection
                    && $data['credit']->pluck('id')->contains($fx['invoice']->id);
            });

        $this->post(route('report.credit'), ['acc_year' => $fx['year']->id])
            ->assertOk()
            ->assertSessionHasNoErrors();
    }

    public function test_credit_redirects_with_message_when_no_year_selected_and_none_active(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);

        $this->mockPdfExport()->shouldNotReceive('printPdf');

        $this->post(route('report.credit'), ['acc_year' => 0])
            ->assertRedirect()
            ->assertSessionHas('info');
    }

    public function test_school_fees_renders_grouped_by_grade_then_classroom(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);
        $fx = $this->financialFixture($school);

        $this->mockPdfExport()
            ->shouldReceive('printPdf')->andReturn(response('mock-pdf'))
            ->once()
            ->withArgs(function ($view, $data) use ($fx) {
                return $view === 'backend.report.PDF.school_fees'
                    && is_array($data)
                    && array_key_exists('school_fees', $data)
                    && $data['school_fees'] instanceof Collection
                    && $data['school_fees']->has($fx['grade']->name)
                    && $data['school_fees'][$fx['grade']->name]->has($fx['classroom']->name);
            });

        $this->get(route('report.school-fees'))
            ->assertOk()
            ->assertSessionHasNoErrors();
    }

    public function test_school_fees_redirects_when_no_active_academic_year(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);

        $this->mockPdfExport()->shouldNotReceive('printPdf');

        $this->get(route('report.school-fees'))
            ->assertRedirect()
            ->assertSessionHas('info');
    }

    public function test_payments_date_range_is_inclusive_of_end_date(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);
        $fx = $this->financialFixture($school);

        $inside = ReceiptPayment::create([
            'manual' => '00001',
            'date' => now()->subDay()->toDateString(),
            'student_id' => $fx['student']->id,
            'academic_year_id' => $fx['year']->id,
            'Debit' => 250,
            'school_id' => $school->id,
            'user_id' => auth()->id(),
        ]);
        $onEnd = ReceiptPayment::create([
            'manual' => '00002',
            'date' => now()->toDateString(),
            'student_id' => $fx['student']->id,
            'academic_year_id' => $fx['year']->id,
            'Debit' => 350,
            'school_id' => $school->id,
            'user_id' => auth()->id(),
        ]);
        ReceiptPayment::create([
            'manual' => '00003',
            'date' => now()->addDay()->toDateString(),
            'student_id' => $fx['student']->id,
            'academic_year_id' => $fx['year']->id,
            'Debit' => 450,
            'school_id' => $school->id,
            'user_id' => auth()->id(),
        ]);

        $this->mockPdfExport()
            ->shouldReceive('printPdf')->andReturn(response('mock-pdf'))
            ->once()
            ->withArgs(function ($view, $data) use ($inside, $onEnd) {
                return $view === 'backend.report.PDF.payments'
                    && is_array($data)
                    && array_key_exists('payment', $data)
                    && $data['payment'] instanceof Collection
                    && $data['payment']->pluck('id')->contains($onEnd->id)
                    && $data['payment']->pluck('id')->contains($inside->id);
            });

        $this->post(route('report.payments'), [
            'from' => now()->subDays(2)->toDateString(),
            'to' => now()->toDateString(),
        ])->assertOk()->assertSessionHasNoErrors();
    }

    public function test_payments_no_data_redirects_with_message(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);

        $this->mockPdfExport()->shouldNotReceive('printPdf');

        $this->post(route('report.payments'), [
            'from' => now()->subDays(10)->toDateString(),
            'to' => now()->subDays(5)->toDateString(),
        ])->assertRedirect()->assertSessionHas('info');
    }

    public function test_payment_parts_unpaid_filter_returns_unpaid_and_not_paid(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);
        $fx = $this->financialFixture($school);

        $unpaid = $this->createPart($fx, 'unpaid');
        $notPaid = $this->createPart($fx, 'not_paid');
        $paid = $this->createPart($fx, 'paid');

        $this->mockPdfExport()
            ->shouldReceive('printPdf')->andReturn(response('mock-pdf'))
            ->once()
            ->withArgs(function ($view, $data) use ($unpaid, $notPaid, $paid) {
                $ids = $data['parts']->pluck('id')->all();

                return $view === 'backend.report.PDF.payments_part'
                    && is_array($data)
                    && array_key_exists('parts', $data)
                    && in_array($unpaid->id, $ids, true)
                    && in_array($notPaid->id, $ids, true)
                    && ! in_array($paid->id, $ids, true);
            });

        $this->post(route('report.payment-parts'), [
            'from' => now()->subDays(3)->toDateString(),
            'to' => now()->toDateString(),
            'payment_status' => 'unpaid',
        ])->assertOk()->assertSessionHasNoErrors();
    }

    public function test_payment_parts_paid_filter_returns_paid_only(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);
        $fx = $this->financialFixture($school);

        $unpaid = $this->createPart($fx, 'unpaid');
        $paid = $this->createPart($fx, 'paid');

        $this->mockPdfExport()
            ->shouldReceive('printPdf')->andReturn(response('mock-pdf'))
            ->once()
            ->withArgs(function ($view, $data) use ($unpaid, $paid) {
                $ids = $data['parts']->pluck('id')->all();

                return $view === 'backend.report.PDF.payments_part'
                    && in_array($paid->id, $ids, true)
                    && ! in_array($unpaid->id, $ids, true);
            });

        $this->post(route('report.payment-parts'), [
            'from' => now()->subDays(3)->toDateString(),
            'to' => now()->toDateString(),
            'payment_status' => 'paid',
        ])->assertOk()->assertSessionHasNoErrors();
    }

    public function test_payment_status_groups_by_grade_name(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);
        $fx = $this->financialFixture($school);

        $this->mockPdfExport()
            ->shouldReceive('printPdf')->andReturn(response('mock-pdf'))
            ->once()
            ->withArgs(function ($view, $data) use ($fx) {
                return $view === 'backend.report.PDF.payment_status_view'
                    && is_array($data)
                    && array_key_exists('exp', $data)
                    && array_key_exists('acc_year', $data)
                    && $data['exp'] instanceof Collection
                    && $data['exp']->has($fx['grade']->name);
            });

        $this->post(route('report.payment-status'), ['payment_status' => 'all'])
            ->assertOk()
            ->assertSessionHasNoErrors();
    }

    public function test_payment_status_unpaid_filter_maps_to_unpaid_and_not_paid(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);
        $fx = $this->financialFixture($school);

        $unpaid = $this->invoiceWithStatus($fx, 'unpaid');
        $notPaid = $this->invoiceWithStatus($fx, 'not_paid');
        $paid = $this->invoiceWithStatus($fx, 'paid');

        $this->mockPdfExport()
            ->shouldReceive('printPdf')->andReturn(response('mock-pdf'))
            ->once()
            ->withArgs(function ($view, $data) use ($unpaid, $notPaid, $paid) {
                $ids = $data['exp']->flatten()->pluck('id')->all();

                return $view === 'backend.report.PDF.payment_status_view'
                    && in_array($unpaid->id, $ids, true)
                    && in_array($notPaid->id, $ids, true)
                    && ! in_array($paid->id, $ids, true);
            });

        $this->post(route('report.payment-status'), ['payment_status' => 'unpaid'])
            ->assertOk()
            ->assertSessionHasNoErrors();
    }

    public function test_payment_status_redirects_when_no_active_year(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);

        $this->mockPdfExport()->shouldNotReceive('printPdf');

        $this->post(route('report.payment-status'), ['payment_status' => 'all'])
            ->assertRedirect()
            ->assertSessionHas('info');
    }

    public function test_fees_invoices_groups_by_year_grade_classroom_and_filters_status(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);
        $fx = $this->financialFixture($school);

        $unpaid = $this->invoiceWithStatus($fx, 'unpaid');
        $paid = $this->invoiceWithStatus($fx, 'paid');

        $this->mockPdfExport()
            ->shouldReceive('printPdf')->andReturn(response('mock-pdf'))
            ->once()
            ->withArgs(function ($view, $data) use ($fx, $paid) {
                $ids = $data['all']->flatten()->flatten()->pluck('id')->all();

                return $view === 'backend.report.PDF.fee_invoices'
                    && is_array($data)
                    && array_key_exists('all', $data)
                    && $data['all'] instanceof Collection
                    && $data['all']->has($fx['year']->view)
                    && $data['all'][$fx['year']->view]->has($fx['grade']->name)
                    && $data['all'][$fx['year']->view][$fx['grade']->name]->has($fx['classroom']->name)
                    && in_array($pdfId = $paid->id, $ids, true);
            });

        $this->post(route('report.fees-invoices'), ['payment_status' => 'paid'])
            ->assertOk()
            ->assertSessionHasNoErrors();
    }

    public function test_exception_fee_date_range_is_inclusive_of_end_date(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);
        $fx = $this->financialFixture($school);

        $feeOnEnd = ExceptionFees::create([
            'student_id' => $fx['student']->id,
            'grade_id' => $fx['grade']->id,
            'class_id' => $fx['classroom']->id,
            'fee_id' => $fx['fee']->id,
            'academic_year_id' => $fx['year']->id,
            'user_id' => auth()->id(),
            'date' => now()->toDateString(),
            'amount' => 100,
        ]);
        ExceptionFees::create([
            'student_id' => $fx['student']->id,
            'grade_id' => $fx['grade']->id,
            'class_id' => $fx['classroom']->id,
            'fee_id' => $fx['fee']->id,
            'academic_year_id' => $fx['year']->id,
            'user_id' => auth()->id(),
            'date' => now()->addDay()->toDateString(),
            'amount' => 200,
        ]);

        $this->mockPdfExport()
            ->shouldReceive('printPdf')->andReturn(response('mock-pdf'))
            ->once()
            ->withArgs(function ($view, $data) use ($feeOnEnd) {
                return $view === 'backend.report.PDF.exception_fee'
                    && is_array($data)
                    && array_key_exists('exception_list', $data)
                    && $data['exception_list'] instanceof Collection
                    && $data['exception_list']->pluck('id')->contains($feeOnEnd->id);
            });

        $this->post(route('report.exception-fee'), [
            'start_date' => now()->subDay()->toDateString(),
            'end_date' => now()->toDateString(),
        ])->assertOk()->assertSessionHasNoErrors();
    }

    public function test_exception_fee_requires_both_dates(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);

        $this->mockPdfExport()->shouldNotReceive('printPdf');

        $this->post(route('report.exception-fee'), ['start_date' => now()->toDateString()])
            ->assertSessionHasErrors('end_date');
    }

    private function createPart(array $fx, string $status): PaymentParts
    {
        return PaymentParts::create([
            'student_id' => $fx['student']->id,
            'grade_id' => $fx['grade']->id,
            'class_id' => $fx['classroom']->id,
            'academic_year_id' => $fx['year']->id,
            'school_fees_id' => $fx['fee']->id,
            'user_id' => auth()->id(),
            'date' => now()->subDay()->toDateString(),
            'amount' => 500,
            'status' => $status,
        ]);
    }

    private function invoiceWithStatus(array $fx, string $status): FeeInvoice
    {
        return FeeInvoice::factory()->create([
            'school_id' => $fx['year']->school_id,
            'student_id' => $fx['student']->id,
            'grade_id' => $fx['grade']->id,
            'classroom_id' => $fx['classroom']->id,
            'academic_year_id' => $fx['year']->id,
            'school_fee_id' => $fx['fee']->id,
            'user_id' => auth()->id(),
            'status' => $status,
            'invoice_date' => now()->toDateString(),
        ]);
    }
}
