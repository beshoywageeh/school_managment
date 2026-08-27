<?php

namespace App\Services\Reports;

use App\Models\AcademicYear;
use App\Models\ClassRoom;
use App\Models\ExceptionFees;
use App\Models\FeeInvoice;
use App\Models\Grade;
use App\Models\SchoolFee;
use App\Models\Student;
use App\Models\StudentAccount;

class FinancialReportService
{
    public function getFinalYearData($request): array
    {
        $data['Students_query'] = Student::query();

        if ($request->grade && $request->grade != 0) {
            $data['Students_query']->whereIn('grade_id', (array) $request->grade);
            $data['grade'] = Grade::whereIn('id', (array) $request->grade)->get();
        }

        if ($request->classroom && $request->classroom != 0) {
            $data['Students_query']->whereIn('classroom_id', (array) $request->classroom);
            $data['classroom'] = ClassRoom::whereIn('id', (array) $request->classroom)->get();
        }

        if ($request->grade == 0 || $request->classroom == 0) {
            $data['Students_query']
                ->where('classroom_id', '!=', null)
                ->where('grade_id', '!=', null);
            $data['grade'] = Grade::where('id', '!=', null)->get();
            $data['classroom'] = ClassRoom::where('id', '!=', null)->get();
        }

        $grouped = (clone $data['Students_query'])
            ->select(
                'grade_id',
                'classroom_id',
                \DB::raw('count(*) as student_count'),
            )
            ->with('grade:id,name', 'classroom:id,name')
            ->groupBy('grade_id', 'classroom_id')
            ->get();

        $data['Students_grouped'] = $grouped;
        $data['Students_grouped_sum'] = $grouped->sum('student_count');

        $data['Students_by_grade'] = $grouped
            ->groupBy('grade_id')
            ->map(fn ($g) => $g->sum('student_count'));

        $data['Students_by_classroom'] = $grouped
            ->groupBy('classroom_id')
            ->map(fn ($g) => $g->sum('student_count'));

        $data['acadmic_year'] = AcademicYear::where('status', config('school.academic_year_status'))
            ->first(['id', 'view']);

        if (
            $request->grade && $request->grade != 0
            && $request->classroom && $request->classroom != 0
        ) {
            $invoices = FeeInvoice::where('academic_year_id', $data['acadmic_year']->id)
                ->whereIn('grade_id', (array) $request->grade)
                ->whereIn('classroom_id', (array) $request->classroom)
                ->where('status', 'paid')
                ->withSum('schoolFee', 'amount')
                ->get();
            $data['paid'] = $invoices->sum('school_fee_sum_amount');

            $data['students_accounts_query'] = StudentAccount::where(
                'academic_year_id',
                $data['acadmic_year']->id,
            )
                ->where('type', 'payment')
                ->whereIn('classroom_id', (array) $request->classroom)
                ->whereIn('grade_id', (array) $request->grade)
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

            $data['school_fees'] = SchoolFee::where(
                'academic_year_id',
                $data['acadmic_year']->id,
            )->get();

            $data['exception_fees'] = ExceptionFees::where(
                'academic_year_id',
                $data['acadmic_year']->id,
            )
                ->whereIn('class_id', $request->classroom)
                ->whereIn('grade_id', $request->grade)
                ->with('school_fee', 'classroom')
                ->get()
                ->groupBy('classroom.name');
        }

        return $data;
    }

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
                    ->where('status', 'paid')
                    ->sum(fn ($invoice) => $invoice->schoolFee?->amount ?? 0);
                $remaining = $totalInvoice - $paidAmount;

                return [
                    'student' => $student->name,
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
