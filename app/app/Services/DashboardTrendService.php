<?php

namespace App\Services;

use App\Models\FeeInvoice;
use App\Models\MyParent;
use App\Models\ReceiptPayment;
use App\Models\Student;
use Carbon\Carbon;

class DashboardTrendService
{
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

    public function getMonthlyRevenueTrend(?int $schoolId = null): array
    {
        $months = [];
        $revenue = [];

        for ($i = 5; $i >= 0; $i--) {
            $date = Carbon::now()->subMonths($i);
            $months[] = $date->format('M Y');

            $query = ReceiptPayment::query();
            if ($schoolId !== null) {
                $query->where('school_id', $schoolId);
            }
            $revenue[] = $query
                ->whereYear('date', $date->year)
                ->whereMonth('date', $date->month)
                ->sum('Debit');
        }

        return [
            'revenue_trend_labels' => $months,
            'revenue_trend_data' => $revenue,
        ];
    }

    public function calculateTrendData(?int $schoolId = null): array
    {
        $currentMonth = now();
        $lastMonth = now()->subMonth();

        $studentsBase = Student::query();
        $parentsBase = MyParent::query();
        $feeInvoicesBase = FeeInvoice::query();
        $receiptBase = ReceiptPayment::query();

        if ($schoolId !== null) {
            $studentsBase->where('school_id', $schoolId);
            $parentsBase->where('school_id', $schoolId);
            $feeInvoicesBase->where('fee_invoices.school_id', $schoolId);
            $receiptBase->where('school_id', $schoolId);
        }

        $studentsCurrent = (clone $studentsBase)
            ->whereYear('created_at', $currentMonth->year)
            ->whereMonth('created_at', $currentMonth->month)
            ->count();
        $studentsPrevious = (clone $studentsBase)
            ->whereYear('created_at', $lastMonth->year)
            ->whereMonth('created_at', $lastMonth->month)
            ->count();
        $studentsSparkline = $this->buildMonthlyAggregate($schoolId, Student::class, 'created_at');

        $parentsCurrent = (clone $parentsBase)
            ->whereYear('created_at', $currentMonth->year)
            ->whereMonth('created_at', $currentMonth->month)
            ->count();
        $parentsPrevious = (clone $parentsBase)
            ->whereYear('created_at', $lastMonth->year)
            ->whereMonth('created_at', $lastMonth->month)
            ->count();
        $parentsSparkline = $this->buildMonthlyAggregate($schoolId, MyParent::class, 'created_at');

        $invoicedCurrent = (clone $feeInvoicesBase)
            ->whereNull('fee_invoices.deleted_at')
            ->whereYear('fee_invoices.created_at', $currentMonth->year)
            ->whereMonth('fee_invoices.created_at', $currentMonth->month)
            ->join('school__fees', 'fee_invoices.school_fee_id', '=', 'school__fees.id')
            ->sum('school__fees.amount');
        $invoicedPrevious = (clone $feeInvoicesBase)
            ->whereNull('fee_invoices.deleted_at')
            ->whereYear('fee_invoices.created_at', $lastMonth->year)
            ->whereMonth('fee_invoices.created_at', $lastMonth->month)
            ->join('school__fees', 'fee_invoices.school_fee_id', '=', 'school__fees.id')
            ->sum('school__fees.amount');

        $collectedCurrent = (clone $receiptBase)
            ->whereYear('date', $currentMonth->year)
            ->whereMonth('date', $currentMonth->month)
            ->sum('Debit');
        $collectedPrevious = (clone $receiptBase)
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

    public function buildMonthlyAggregate(?int $schoolId, string $modelClass, string $dateColumn): array
    {
        $data = [];
        for ($i = 11; $i >= 0; $i--) {
            $date = now()->subMonths($i);
            $query = $modelClass::query();
            if ($schoolId !== null) {
                $query->where('school_id', $schoolId);
            }
            $count = $query
                ->whereYear($dateColumn, $date->year)
                ->whereMonth($dateColumn, $date->month)
                ->count();
            $data[] = $count;
        }

        return $data;
    }
}
