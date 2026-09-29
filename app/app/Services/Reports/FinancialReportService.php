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
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

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
        $gradeIds = $this->filterIds($request, 'grade');
        $classroomIds = $this->filterIds($request, 'classroom');

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
        if ($gradeIds !== null) {
            $studentsQuery->whereIn('grade_id', $gradeIds);
            $data['grade'] = Grade::whereIn('id', $gradeIds)->get();
        }
        if ($classroomIds !== null) {
            $studentsQuery->whereIn('classroom_id', $classroomIds);
            $data['classroom'] = ClassRoom::whereIn('id', $classroomIds)->get();
        }

        $grouped = (clone $studentsQuery)
            ->select(
                'grade_id',
                'classroom_id',
                DB::raw('count(*) as student_count'),
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
            // Single aggregate query instead of ->withSum()->get()->sum(),
            // which hydrated every invoice just to add up a single number.
            $schoolFeeTable = SchoolFee::query()->getModel()->getTable();

            $data['paid'] = (float) FeeInvoice::query()
                ->withoutGlobalScope(SoftDeletingScope::class)
                ->leftJoin($schoolFeeTable, "{$schoolFeeTable}.id", '=', 'fee_invoices.school_fee_id')
                ->where('fee_invoices.academic_year_id', $year->id)
                ->when($gradeIds !== null, fn ($q) => $q->whereIn('fee_invoices.grade_id', $gradeIds))
                ->when($classroomIds !== null, fn ($q) => $q->whereIn('fee_invoices.classroom_id', $classroomIds))
                ->where('fee_invoices.status', Payment_Status::CLOSE->value)
                ->whereNull('fee_invoices.deleted_at')
                ->whereNull("{$schoolFeeTable}.deleted_at")
                ->sum("{$schoolFeeTable}.amount");

            $data['school_fees'] = SchoolFee::where('academic_year_id', $year->id)
                ->when($gradeIds !== null, fn ($q) => $q->whereIn('grade_id', $gradeIds))
                ->when($classroomIds !== null, fn ($q) => $q->whereIn('classroom_id', $classroomIds))
                ->get();

            $data['students_accounts_query'] = StudentAccount::where(
                'academic_year_id',
                $year->id,
            )
                ->where('type', Payment_Type::PAYMENT->value)
                ->when($gradeIds !== null, fn ($q) => $q->whereIn('grade_id', $gradeIds))
                ->when($classroomIds !== null, fn ($q) => $q->whereIn('classroom_id', $classroomIds))
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
                ->when($gradeIds !== null, fn ($q) => $q->whereIn('grade_id', $gradeIds))
                ->when($classroomIds !== null, fn ($q) => $q->whereIn('class_id', $classroomIds))
                ->with('school_fee', 'classroom')
                ->get()
                ->groupBy('classroom.name');
        }

        return $data;
    }

    /**
     * Normalize a nullable multi-select report filter.
     *
     * Accepts a single id or a list of ids (multi-selects post `grade[]`) and
     * drops the "0" sentinel that the "All" option sends, so the caller can
     * treat "no real selection" and "no filter" as the same thing.
     *
     * @return list<int>|null Null when no real id was selected.
     */
    private function filterIds($request, string $key): ?array
    {
        $value = $request->input($key);

        if ($value === null || $value === '' || $value === []) {
            return null;
        }

        $ids = array_values(array_filter(
            array_map('intval', (array) $value),
            fn (int $id): bool => $id > 0,
        ));

        return $ids === [] ? null : $ids;
    }
}
