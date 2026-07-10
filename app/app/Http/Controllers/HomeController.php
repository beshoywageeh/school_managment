<?php

namespace App\Http\Controllers;

use App\Http\Traits\SchoolTrait;
use App\Models\Grade;
use App\Models\MyParent;
use App\Models\PaymentParts;
use App\Models\ReceiptPayment;
use App\Models\Student;
use App\Models\StudentAccount;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    use SchoolTrait;

    public function index()
    {
        $user = Auth::user();
        $school = $this->getSchool();
        $schoolId = $school->id;
        $isAdmin = $user->hasRole('Admin');

        // Get counts based on user role
        [$students, $parents] = $this->getUserRoleCounts(
            $user->id,
            $schoolId,
            $isAdmin,
        );

        // Get financial data
        $financialData = $this->getFinancialData($schoolId);

        // Get other counts
        $employees = DB::table('users')
            ->where('school_id', $schoolId)
            ->where('code', '!=', '000001')
            ->count();

        // Get grades with classrooms and student counts
        $grades = Grade::where('school_id', $school->id)
            ->with([
                'class_rooms' => function ($query) {
                    $query->withCount('students');
                },
            ])
            ->where('school_id', $schoolId)
            ->get();

        $data['users'] = User::where('school_id', $schoolId)->get();
        $data['grades'] = $grades;

        $chartData = $this->generateChartData($grades);
        $revenueTrend = $this->getMonthlyRevenueTrend($schoolId);

        return view(
            'dashboard',
            array_merge(
                compact(
                    'students',
                    'parents',
                    'employees',
                    'grades',
                    'school',
                    'data',
                ),
                $financialData,
                $chartData,
                $revenueTrend,
            ),
        );
    }

    /**
     * Get student and parent counts based on user role
     */
    private function getUserRoleCounts(
        int $userId,
        int $schoolId,
        bool $isAdmin,
    ): array {
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

    /**
     * Get financial data including today and totals
     */
    private function getFinancialData(int $schoolId): array
    {
        return [
            'credit' => StudentAccount::where('type', 'invoice')->sum(
                'debit',
            ),
            'payment_parts' => PaymentParts::where('school_id', $schoolId)
                ->where('status', 'paid')
                ->sum('amount'),
            'payments' => ReceiptPayment::where(
                'school_id',
                $schoolId,
            )->sum('Debit'),
            // Detailed totals
            'totalInvoiced' => DB::table('fee_invoices')
                ->join(
                    'school__fees',
                    'fee_invoices.school_fee_id',
                    '=',
                    'school__fees.id',
                )
                ->where('fee_invoices.school_id', $schoolId)
                ->whereNull('fee_invoices.deleted_at')
                ->sum('school__fees.amount'),
            'totalPaid' => ReceiptPayment::where(
                'school_id',
                $schoolId,
            )->sum('Debit'),
        ];
    }

    /**
     * Get monthly revenue trend for the last 6 months
     */
    private function getMonthlyRevenueTrend(int $schoolId): array
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

    /**
     * Generate chart data for grades and classrooms
     */
    private function generateChartData($grades): array
    {
        $chart_labels = [];
        $chart_data = [];

        foreach ($grades as $index => $grade) {
            foreach ($grade->class_rooms as $classroom) {
                $chart_labels[] = "{$grade->name} - {$classroom->name}";
                $chart_data[] = $classroom->students_count;
            }
        }

        return compact('chart_labels', 'chart_data');
    }

    public function widgets()
    {
        $user = Auth::user();
        $school = $this->getSchool();
        $schoolId = $school->id;

        if ($user->hasRole('Admin')) {
            $admin = $this->adminWidgets($user, $schoolId)->getData(true);
            $accountant = $this->accountantWidgets($schoolId)->getData(true);
            $teacher = $this->teacherWidgets($user, $schoolId)->getData(true);

            return response()->json([
                'statCards' => array_merge($admin['statCards'], $accountant['statCards'], $teacher['statCards']),
                'quickActions' => array_merge($admin['quickActions'], $accountant['quickActions'], $teacher['quickActions']),
                'charts' => array_merge($admin['charts'], $accountant['charts'], $teacher['charts']),
                'recentActivity' => collect($admin['recentActivity'])
                    ->concat($accountant['recentActivity'])
                    ->concat($teacher['recentActivity'])
                    ->sortByDesc('time')
                    ->take(5)
                    ->values(),
                'permissions' => array_merge($admin['permissions'], $accountant['permissions'], $teacher['permissions']),
            ]);
        }

        if ($user->hasRole('Accountant')) {
            return $this->accountantWidgets($schoolId);
        }

        if ($user->hasRole('Teacher')) {
            return $this->teacherWidgets($user, $schoolId);
        }

        return $this->adminWidgets($user, $schoolId);
    }

    private function adminWidgets(User $user, int $schoolId): JsonResponse
    {
        [$students, $parents] = $this->getUserRoleCounts($user->id, $schoolId, true);
        $employees = DB::table('users')
            ->where('school_id', $schoolId)
            ->where('code', '!=', '000001')
            ->count();
        $financialData = $this->getFinancialData($schoolId);
        $grades = Grade::where('school_id', $schoolId)
            ->with(['class_rooms' => function ($q) {
                $q->withCount('students');
            }])
            ->get();
        $chartData = $this->generateChartData($grades);
        $revenueTrend = $this->getMonthlyRevenueTrend($schoolId);

        $trendData = $this->calculateTrendData($schoolId);

        $recentActivity = $this->getRecentActivity($schoolId);

        return response()->json([
            'statCards' => [
                ['label' => __('Sidebar.Students'), 'value' => $students, 'icon' => 'graduation-cap', 'color' => 'blue', 'trend' => $trendData['students']['trend'], 'trendDirection' => $trendData['students']['direction'], 'sparklineData' => $trendData['students']['sparkline']],
                ['label' => __('Sidebar.parents'), 'value' => $parents, 'icon' => 'users', 'color' => 'green', 'trend' => $trendData['parents']['trend'], 'trendDirection' => $trendData['parents']['direction'], 'sparklineData' => $trendData['parents']['sparkline']],
                ['label' => __('Sidebar.employees'), 'value' => $employees, 'icon' => 'id-card', 'color' => 'cyan', 'trend' => null, 'trendDirection' => null, 'sparklineData' => null],
                ['label' => __('general.Pending_Balance'), 'value' => number_format($financialData['totalInvoiced'] - $financialData['totalPaid'], 2), 'icon' => 'exclamation-circle', 'color' => 'red', 'trend' => $trendData['pending']['trend'], 'trendDirection' => $trendData['pending']['direction'], 'sparklineData' => $trendData['pending']['sparkline']],
            ],
            'quickActions' => [
                ['route' => route('students.create'), 'icon' => 'graduation-cap', 'label' => __('Sidebar.Students'), 'perm' => 'Students-create'],
                ['route' => route('parents.create'), 'icon' => 'users', 'label' => __('Sidebar.parents'), 'perm' => 'parents-create'],
                ['route' => route('grade.index'), 'icon' => 'line-chart', 'label' => __('Sidebar.Grade'), 'perm' => 'grade-list'],
                ['route' => route('class_rooms.index'), 'icon' => 'building', 'label' => __('Sidebar.Class_Rooms'), 'perm' => 'class_rooms-list'],
                ['route' => route('jobs.create'), 'icon' => 'briefcase', 'label' => __('Sidebar.jobs'), 'perm' => 'jobs-create'],
                ['route' => route('backup.create'), 'icon' => 'database', 'label' => __('Sidebar.backup'), 'perm' => 'backup-create'],
            ],
            'charts' => [
                'studentChart' => [
                    'labels' => $chartData['chart_labels'],
                    'data' => $chartData['chart_data'],
                ],
                'revenueTrend' => [
                    'labels' => $revenueTrend['revenue_trend_labels'],
                    'data' => $revenueTrend['revenue_trend_data'],
                ],
            ],
            'recentActivity' => $recentActivity,
            'permissions' => [
                'canViewStudents' => $user->can('Students-list'),
                'canViewParents' => $user->can('parents-list'),
                'canViewEmployees' => $user->can('employees-list'),
                'canViewFinancials' => $user->hasAnyPermission(['schoolfees-list', 'fee_invoice-list', 'ReceiptPayment-list']),
            ],
        ]);
    }

    private function accountantWidgets(int $schoolId): JsonResponse
    {
        $financialData = $this->getFinancialData($schoolId);
        $revenueTrend = $this->getMonthlyRevenueTrend($schoolId);
        $trendData = $this->calculateTrendData($schoolId);

        $recentActivity = ReceiptPayment::where('school_id', $schoolId)
            ->latest()->take(5)->get()->map(fn ($p) => [
                'icon' => 'credit-card',
                'description' => __('general.dashboard.payment_received').': '.number_format($p->Debit, 2),
                'time' => $p->created_at->diffForHumans(),
            ])->values();

        return response()->json([
            'statCards' => [
                ['label' => __('general.dashboard.invoiced'), 'value' => number_format($financialData['totalInvoiced'], 2), 'icon' => 'file-text', 'color' => 'blue', 'trend' => $trendData['invoiced']['trend'], 'trendDirection' => $trendData['invoiced']['direction'], 'sparklineData' => $trendData['invoiced']['sparkline']],
                ['label' => __('general.dashboard.collected'), 'value' => number_format($financialData['totalPaid'], 2), 'icon' => 'credit-card', 'color' => 'green', 'trend' => $trendData['collected']['trend'], 'trendDirection' => $trendData['collected']['direction'], 'sparklineData' => $trendData['collected']['sparkline']],
                ['label' => __('general.dashboard.pending'), 'value' => number_format($financialData['totalInvoiced'] - $financialData['totalPaid'], 2), 'icon' => 'clock', 'color' => 'amber', 'trend' => $trendData['pending']['trend'], 'trendDirection' => $trendData['pending']['direction'], 'sparklineData' => $trendData['pending']['sparkline']],
                ['label' => __('general.dashboard.overdue'), 'value' => '0.00', 'icon' => 'exclamation-circle', 'color' => 'red', 'trend' => null, 'trendDirection' => null, 'sparklineData' => null],
            ],
            'quickActions' => [
                ['route' => route('fee_invoice.index'), 'icon' => 'file-text', 'label' => __('general.dashboard.new_invoice'), 'perm' => 'fee_invoice-create'],
                ['route' => route('receipt_payment.index'), 'icon' => 'credit-card', 'label' => __('general.dashboard.create_receipt'), 'perm' => 'ReceiptPayment-create'],
                ['route' => route('except_fee.index'), 'icon' => 'minus-circle', 'label' => __('general.dashboard.fee_exceptions'), 'perm' => 'except_fee-list'],
                ['route' => route('payment_parts.index'), 'icon' => 'arrow-circle-down', 'label' => __('general.dashboard.payment_plans'), 'perm' => 'payment_parts-list'],
            ],
            'charts' => [
                'revenueTrend' => [
                    'labels' => $revenueTrend['revenue_trend_labels'],
                    'data' => $revenueTrend['revenue_trend_data'],
                ],
            ],
            'recentActivity' => $recentActivity,
            'permissions' => [
                'canViewFinancials' => true,
            ],
        ]);
    }

    private function teacherWidgets(User $user, int $schoolId): JsonResponse
    {
        $gradeIds = DB::table('teacher_grade')
            ->where('teacher_id', $user->id)
            ->pluck('grade_id');

        $students = Student::where('school_id', $schoolId)
            ->whereIn('grade_id', $gradeIds)
            ->count();

        try {
            $todaySchedule = DB::table('schedules')
                ->where('teacher_id', $user->id)
                ->whereDate('date', now())
                ->count();
        } catch (\Exception) {
            $todaySchedule = 0;
        }

        try {
            $pendingTasksCount = DB::table('tasks')
                ->where('assigned_to', $user->id)
                ->where('status', 'pending')
                ->count();
        } catch (\Exception) {
            $pendingTasksCount = 0;
        }

        $recentActivity = collect();

        return response()->json([
            'statCards' => [
                ['label' => __('general.dashboard.my_students'), 'value' => $students, 'icon' => 'graduation-cap', 'color' => 'blue', 'trend' => null, 'trendDirection' => null, 'sparklineData' => null],
                ['label' => __('general.dashboard.today_schedule'), 'value' => $todaySchedule, 'icon' => 'calendar-check', 'color' => 'green', 'trend' => null, 'trendDirection' => null, 'sparklineData' => null],
                ['label' => __('general.dashboard.pending_tasks'), 'value' => $pendingTasksCount, 'icon' => 'clipboard-list', 'color' => 'amber', 'trend' => null, 'trendDirection' => null, 'sparklineData' => null],
            ],
            'quickActions' => [
                ['route' => route('classes.index'), 'icon' => 'list-alt', 'label' => __('general.dashboard.my_classes'), 'perm' => null],
                ['route' => route('grade.index'), 'icon' => 'check-square', 'label' => __('general.dashboard.take_attendance'), 'perm' => null],
                ['route' => route('grade.index'), 'icon' => 'edit', 'label' => __('general.dashboard.grade_entry'), 'perm' => null],
            ],
            'charts' => [],
            'recentActivity' => $recentActivity,
            'permissions' => [],
        ]);
    }

    private function calculateTrendData(int $schoolId): array
    {
        $currentMonth = now();
        $lastMonth = now()->subMonth();

        $trendMetric = function (\Closure $query) use ($currentMonth, $lastMonth) {
            $current = $query($currentMonth->year, $currentMonth->month);
            $previous = $query($lastMonth->year, $lastMonth->month);
            if ($previous == 0) {
                return ['trend' => $current > 0 ? '+100%' : '0%', 'direction' => $current > 0 ? 'up' : 'down', 'sparkline' => null];
            }
            $change = round((($current - $previous) / $previous) * 100);

            return [
                'trend' => ($change >= 0 ? '+' : '').$change.'%',
                'direction' => $change >= 0 ? 'up' : 'down',
                'sparkline' => null,
            ];
        };

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

        $collectedCurrent = ReceiptPayment::where('school_id', $schoolId)
            ->whereYear('date', $currentMonth->year)
            ->whereMonth('date', $currentMonth->month)
            ->sum('Debit');
        $collectedPrevious = ReceiptPayment::where('school_id', $schoolId)
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

    private function buildMonthlyAggregate(int $schoolId, string $modelClass, string $dateColumn): array
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

    private function getRecentActivity(int $schoolId): Collection
    {
        $recentStudents = Student::where('school_id', $schoolId)
            ->latest()->take(2)->get()->map(fn ($s) => [
                'icon' => 'graduation-cap',
                'description' => __('general.dashboard.student_created').': '.$s->name,
                'time' => $s->created_at->diffForHumans(),
            ]);
        $recentPayments = ReceiptPayment::where('school_id', $schoolId)
            ->latest()->take(3)->get()->map(fn ($p) => [
                'icon' => 'credit-card',
                'description' => __('general.dashboard.payment_received').': '.number_format($p->Debit, 2),
                'time' => $p->created_at->diffForHumans(),
            ]);

        return $recentStudents->concat($recentPayments)->sortByDesc('time')->take(5)->values();
    }
}
