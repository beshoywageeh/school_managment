<?php

namespace App\Services;

use App\Models\Grade;
use App\Models\MyParent;
use App\Models\ReceiptPayment;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class DashboardService
{
    public function getUserRoleCounts(int $userId, int $schoolId, bool $isAdmin): array
    {
        if ($isAdmin) {
            $students = Student::where('school_id', $schoolId)->count();
            $parents = MyParent::where('school_id', $schoolId)->count();
        } else {
            $gradeIds = DB::table('teacher_grade')
                ->where('teacher_id', $userId)
                ->pluck('grade_id');

            $students = Student::where('school_id', $schoolId)
                ->whereIn('grade_id', $gradeIds)
                ->count();

            $parents = MyParent::where('school_id', $schoolId)
                ->whereIn('student_id', $gradeIds)
                ->count();
        }

        return [$students, $parents];
    }

    public function getFinancialData(int $schoolId): array
    {
        return [
            'credit' => DB::table('student_accounts')
                ->where('type', 'invoice')
                ->sum('debit'),
            'payment_parts' => DB::table('payment_parts')
                ->where('school_id', $schoolId)
                ->where('status', 'paid')
                ->sum('amount'),
            'payments' => DB::table('recipt__payments')
                ->where('school_id', $schoolId)
                ->sum('Debit'),
            'totalInvoiced' => DB::table('fee_invoices')
                ->join('school__fees', 'fee_invoices.school_fee_id', '=', 'school__fees.id')
                ->where('fee_invoices.school_id', $schoolId)
                ->whereNull('fee_invoices.deleted_at')
                ->sum('school__fees.amount'),
            'totalPaid' => DB::table('recipt__payments')
                ->where('school_id', $schoolId)
                ->sum('Debit'),
        ];
    }

    public function generateChartData($grades): array
    {
        $chart_labels = [];
        $chart_data = [];

        foreach ($grades as $grade) {
            foreach ($grade->class_rooms as $classroom) {
                $chart_labels[] = "{$grade->name} - {$classroom->name}";
                $chart_data[] = $classroom->students_count;
            }
        }

        return compact('chart_labels', 'chart_data');
    }

    public function getMonthlyRevenueTrend(int $schoolId): array
    {
        $months = [];
        $revenue = [];

        for ($i = 5; $i >= 0; $i--) {
            $date = Carbon::now()->subMonths($i);
            $months[] = $date->format('M Y');

            $revenue[] = ReceiptPayment::where('school_id', $schoolId)
                ->whereYear('date', $date->year)
                ->whereMonth('date', $date->month)
                ->sum('Debit');
        }

        return [
            'revenue_trend_labels' => $months,
            'revenue_trend_data' => $revenue,
        ];
    }

    public function calculateTrendData(int $schoolId): array
    {
        $currentMonth = now();
        $lastMonth = now()->subMonth();

        $studentsCurrent = Student::where('school_id', $schoolId)
            ->whereYear('created_at', $currentMonth->year)
            ->whereMonth('created_at', $currentMonth->month)
            ->count();
        $studentsPrevious = Student::where('school_id', $schoolId)
            ->whereYear('created_at', $lastMonth->year)
            ->whereMonth('created_at', $lastMonth->month)
            ->count();
        $studentsSparkline = $this->buildMonthlyAggregate($schoolId, Student::class, 'created_at');

        $parentsCurrent = MyParent::where('school_id', $schoolId)
            ->whereYear('created_at', $currentMonth->year)
            ->whereMonth('created_at', $currentMonth->month)
            ->count();
        $parentsPrevious = MyParent::where('school_id', $schoolId)
            ->whereYear('created_at', $lastMonth->year)
            ->whereMonth('created_at', $lastMonth->month)
            ->count();
        $parentsSparkline = $this->buildMonthlyAggregate($schoolId, MyParent::class, 'created_at');

        $invoicedCurrent = DB::table('fee_invoices')
            ->join('school__fees', 'fee_invoices.school_fee_id', '=', 'school__fees.id')
            ->where('fee_invoices.school_id', $schoolId)
            ->whereNull('fee_invoices.deleted_at')
            ->whereYear('fee_invoices.created_at', $currentMonth->year)
            ->whereMonth('fee_invoices.created_at', $currentMonth->month)
            ->sum('school__fees.amount');
        $invoicedPrevious = DB::table('fee_invoices')
            ->join('school__fees', 'fee_invoices.school_fee_id', '=', 'school__fees.id')
            ->where('fee_invoices.school_id', $schoolId)
            ->whereNull('fee_invoices.deleted_at')
            ->whereYear('fee_invoices.created_at', $lastMonth->year)
            ->whereMonth('fee_invoices.created_at', $lastMonth->month)
            ->sum('school__fees.amount');

        $collectedCurrent = DB::table('recipt__payments')
            ->where('school_id', $schoolId)
            ->whereYear('date', $currentMonth->year)
            ->whereMonth('date', $currentMonth->month)
            ->sum('Debit');
        $collectedPrevious = DB::table('recipt__payments')
            ->where('school_id', $schoolId)
            ->whereYear('date', $lastMonth->year)
            ->whereMonth('date', $lastMonth->month)
            ->sum('Debit');

        $calc = fn ($current, $previous) => [
            'trend' => $previous == 0
                ? ($current > 0 ? '+100%' : '0%')
                : (($change = round((($current - $previous) / $previous) * 100)) >= 0 ? '+'.$change.'%' : $change.'%'),
            'direction' => ($current - $previous) >= 0 ? 'up' : 'down',
        ];

        return [
            'students' => [
                'trend' => $calc($studentsCurrent, $studentsPrevious)['trend'],
                'direction' => $calc($studentsCurrent, $studentsPrevious)['direction'],
                'sparkline' => $studentsSparkline,
            ],
            'parents' => [
                'trend' => $calc($parentsCurrent, $parentsPrevious)['trend'],
                'direction' => $calc($parentsCurrent, $parentsPrevious)['direction'],
                'sparkline' => $parentsSparkline,
            ],
            'invoiced' => [
                'trend' => $calc($invoicedCurrent, $invoicedPrevious)['trend'],
                'direction' => $calc($invoicedCurrent, $invoicedPrevious)['direction'],
                'sparkline' => null,
            ],
            'collected' => [
                'trend' => $calc($collectedCurrent, $collectedPrevious)['trend'],
                'direction' => $calc($collectedCurrent, $collectedPrevious)['direction'],
                'sparkline' => null,
            ],
            'pending' => [
                'trend' => null,
                'direction' => 'up',
                'sparkline' => null,
            ],
        ];
    }

    public function buildMonthlyAggregate(int $schoolId, string $modelClass, string $dateColumn): array
    {
        $data = [];
        for ($i = 11; $i >= 0; $i--) {
            $date = now()->subMonths($i);
            $count = $modelClass::where('school_id', $schoolId)
                ->whereYear($dateColumn, $date->year)
                ->whereMonth($dateColumn, $date->month)
                ->count();
            $data[] = $count;
        }

        return $data;
    }

    public function getRecentActivity(int $schoolId): Collection
    {
        $recentStudents = Student::where('school_id', $schoolId)
            ->latest()->take(2)->get()->map(fn ($s) => [
                'icon' => 'graduation-cap',
                'description' => __('general.dashboard.student_created').': '.$s->name,
                'time' => $s->created_at->diffForHumans(),
            ]);
        $recentPayments = DB::table('recipt__payments')
            ->where('school_id', $schoolId)
            ->latest()->take(3)->get()->map(fn ($p) => [
                'icon' => 'credit-card',
                'description' => __('general.dashboard.payment_received').': '.number_format($p->Debit, 2),
                'time' => Carbon::parse($p->created_at)->diffForHumans(),
            ]);

        return $recentStudents->concat($recentPayments)->sortByDesc('time')->take(5)->values();
    }

    public function getGradesWithClassrooms(int $schoolId)
    {
        return Grade::where('school_id', $schoolId)
            ->with(['class_rooms' => function ($query) {
                $query->withCount('students');
            }])
            ->get();
    }

    public function getEmployeeCount(int $schoolId): int
    {
        return DB::table('users')
            ->where('school_id', $schoolId)
            ->where('code', '!=', '000001')
            ->count();
    }
}
