<?php

namespace Tests\Feature\Reports;

use App\Enums\Payment_Status;
use App\Jobs\GenerateReportJob;
use App\Models\ClassRoom;
use App\Models\FeeInvoice;
use App\Models\Grade;
use App\Models\MyParent;
use App\Models\ReceiptPayment;
use App\Models\SchoolFee;
use App\Models\Student;
use Illuminate\Support\Facades\Storage;

class GenerateReportJobTest extends ReportTestCase
{
    public function test_job_generates_students_fees_and_payments_reports(): void
    {
        Storage::fake('local');
        $school = $this->school();
        $user = $this->userForSchool($school);
        $adminId = $user->id;
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
            'amount' => 1500,
        ]);
        FeeInvoice::factory()->create([
            'school_id' => $school->id,
            'student_id' => $student->id,
            'grade_id' => $grade->id,
            'classroom_id' => $classroom->id,
            'academic_year_id' => $year->id,
            'school_fee_id' => $fee->id,
            'user_id' => $adminId,
            'status' => Payment_Status::CLOSE->value,
            'invoice_date' => now()->toDateString(),
        ]);
        ReceiptPayment::factory()->create([
            'school_id' => $school->id,
            'student_id' => $student->id,
            'academic_year_id' => $year->id,
            'user_id' => $adminId,
        ]);

        foreach (['students', 'fees', 'payments'] as $reportType) {
            (new GenerateReportJob($school->id, $year->id, $reportType, $adminId))->handle();
        }

        foreach (['students', 'fees', 'payments'] as $reportType) {
            Storage::disk('local')->assertExists(
                $this->latestReportFile($reportType),
            );
        }

        $students = json_decode(Storage::disk('local')->get($this->latestReportFile('students')), true);
        $this->assertCount(1, $students);
        $this->assertArrayHasKey('classroom', $students[0]);
        $this->assertArrayHasKey('parent', $students[0]);

        $fees = json_decode(Storage::disk('local')->get($this->latestReportFile('fees')), true);
        $this->assertCount(1, $fees);
        $this->assertArrayHasKey('school_fee', $fees[0]);
        $this->assertSame(1500.0, (float) ($fees[0]['school_fee']['amount'] ?? 0));

        $payments = json_decode(Storage::disk('local')->get($this->latestReportFile('payments')), true);
        $this->assertCount(1, $payments);
    }

    public function test_job_handles_unknown_report_type_without_output(): void
    {
        Storage::fake('local');
        $school = $this->school();
        $user = $this->userForSchool($school);
        $year = $this->activeAcademicYear($school);

        (new GenerateReportJob($school->id, $year->id, 'unknown', $user->id))->handle();

        Storage::disk('local')->assertDirectoryEmpty('reports');
    }

    private function latestReportFile(string $reportType): string
    {
        return collect(Storage::disk('local')->files('reports'))
            ->filter(fn (string $file): bool => str_contains($file, "{$reportType}_"))
            ->sort()
            ->last();
    }
}
