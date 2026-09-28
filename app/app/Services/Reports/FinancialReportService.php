<?php

namespace App\Services\Reports;

use App\Enums\Payment_Status;
use App\Enums\Payment_Type;
use App\Models\AcademicYear;
use App\Models\ClassRoom;
use App\Models\ExceptionFees;
use App\Models\FeeInvoice;
use App\Models\Grade;
use App\Models\SchoolFee;
use App\Models\Student;
use App\Models\StudentAccount;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class FinancialReportService
{
    public function __construct(private ReportService $reportService) {}

    /**
     * Resolve the final-year report dataset.
     *
     * Every optional collection is ALWAYS returned (empty when the related
     * filters/entities are absent) so the PDF view never hits an undefined
     * variable, whatever combination of grade/classroom filters is submitted.
     *
     * @return array{
     *   Students_query: Builder,
     *   grade: \Illuminate\Database\Eloquent\Collection,
     *   classroom: \Illuminate\Database\Eloquent\Collection,
     *   Students_grouped: \Illuminate\Database\Eloquent\Collection,
     *   Students_grouped_sum: int,
     *   Students_by_grade: Collection,
     *   Students_by_classroom: Collection,
     *   acadmic_year: AcademicYear|null,
     *   paid: int|float,
     *   students_accounts_query: Collection,
     *   school_fees: \Illuminate\Database\Eloquent\Collection,
     *   exception_fees: Collection,
     * }
     */
    public function getFinalYearData($request): array
    {
        $year = $this->reportService->activeAcademicYear();
        $gradeId = $this->filterId($request, 'grade');
        $classroomId = $this->filterId($request, 'classroom');

        $data = [
            'Students_query' => Student::query()
                ->whereNotNull('classroom_id')
                ->whereNotNull('grade_id'),
            'grade' => collect(),
            'classroom' => collect(),
            'Students_grouped' => collect(),
            'Students_grouped_sum' => 0,
            'Students_by_grade' => collect(),
            'Students_by_classroom' => collect(),
            'acadmic_year' => $year,
            'paid' => 0,
            'students_accounts_query' => collect(),
            'school_fees' => collect(),
            'exception_fees' => collect(),
        ];

        $studentsQuery = $data['Students_query'];
        if ($gradeId !== null) {
            $studentsQuery->where('grade_id', $gradeId);
            $data['grade'] = Grade::where('id', $gradeId)->get();
        }
        if ($classroomId !== null) {
            $studentsQuery->where('classroom_id', $classroomId);
            $data['classroom'] = ClassRoom::where('id', $classroomId)->get();
        }

        $grouped = (clone $studentsQuery)
            ->select(
                'grade_id',
                'classroom_id',
                \DB::raw('count(*) as student_count'),
            )
            ->with('grade:id,name', 'classroom:id,name')
            ->groupBy('grade_id', 'classroom_id')
            ->get();

        $data['Students_grouped'] = $grouped;
        $data['Students_grouped_sum'] = (int) $grouped->sum('student_count');
        $data['Students_by_grade'] = $grouped
            ->groupBy('grade_id')
            ->map(fn ($g) => $g->sum('student_count'));
        $data['Students_by_classroom'] = $grouped
            ->groupBy('classroom_id')
            ->map(fn ($g) => $g->sum('student_count'));

        if ($year !== null) {
            $data['paid'] = FeeInvoice::where('academic_year_id', $year->id)
                ->when($gradeId !== null, fn ($q) => $q->where('grade_id', $gradeId))
                ->when($classroomId !== null, fn ($q) => $q->where('classroom_id', $classroomId))
                ->where('status', Payment_Status::CLOSE->value)
                ->withSum('schoolFee', 'amount')
                ->get()
                ->sum('school_fee_sum_amount');

            $data['school_fees'] = SchoolFee::where('academic_year_id', $year->id)
                ->when($gradeId !== null, fn ($q) => $q->where('grade_id', $gradeId))
                ->when($classroomId !== null, fn ($q) => $q->where('classroom_id', $classroomId))
                ->get();

            $data['students_accounts_query'] = StudentAccount::where(
                'academic_year_id',
                $year->id,
            )
                ->where('type', Payment_Type::PAYMENT->value)
                ->when($gradeId !== null, fn ($q) => $q->where('grade_id', $gradeId))
                ->when($classroomId !== null, fn ($q) => $q->where('classroom_id', $classroomId))
                ->with(
                    'grade:id,name',
                    'classroom:id,name',
                    'fee:id,status,school_fee_id',
                )
                ->get([
                    'grade_id',
                    'classroom_id',
                    'student_id',
                    'fee_invoices_id',
                    'debit',
                    'credit',
                ])
                ->groupBy('classroom.name');

            $data['exception_fees'] = ExceptionFees::where(
                'academic_year_id',
                $year->id,
            )
                ->when($gradeId !== null, fn ($q) => $q->where('grade_id', $gradeId))
                ->when($classroomId !== null, fn ($q) => $q->where('class_id', $classroomId))
                ->with('school_fee', 'classroom')
                ->get()
                ->groupBy('classroom.name');
        }

        return $data;
    }

    /**
     * Normalize a nullable report filter input: "0"/absent → null (no clause).
     */
    private function filterId($request, string $key): ?int
    {
        $value = $request->input($key);

        if ($value === null || $value === '' || (int) $value === 0) {
            return null;
        }

        return (int) $value;
    }

    /**
     * @return array{
     *   student: string,
     *   total: float,
     *   paid: float,
     *   remaining: float,
     *   status: 'paid'|'partial'|'unpaid',
     * }[]
     */
    public function getPaymentStatusReport(
        int $schoolId,
        int $academicYearId,
    ): array {
        $students = Student::where('school_id', $schoolId)
            ->where('acadmiecyear_id', $academicYearId)
            ->with([
                'fee_invoices' => function ($query) {
                    $query->select('id', 'student_id', 'status', 'school_fee_id')
                        ->with('schoolFee:id,amount');
                },
            ])
            ->get(['id', 'name', 'grade_id']);

        return $students
            ->map(function ($student) {
                $totalInvoice = $student->fee_invoices->sum(
                    fn ($invoice) => $invoice->schoolFee?->amount ?? 0,
                );
                $paidAmount = $student->fee_invoices
                    ->where('status', Payment_Status::CLOSE->value)
                    ->sum(fn ($invoice) => $invoice->schoolFee?->amount ?? 0);
                $remaining = $totalInvoice - $paidAmount;

                return [
                    'student' => $student->fullName(),
                    'total' => $totalInvoice,
                    'paid' => $paidAmount,
                    'remaining' => $remaining,
                    'status' => $remaining <= 0
                        ? 'paid'
                        : ($paidAmount > 0
                            ? 'partial'
                            : 'unpaid'),
                ];
            })
            ->toArray();
    }
}
