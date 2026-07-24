<?php

namespace App\Http\Controllers;

use App\Http\Traits\SchoolTrait;
use App\Models\Student;
use App\Models\User;
use App\Services\DashboardService;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    use SchoolTrait;

    public function __construct(
        private DashboardService $dashboardService,
    ) {}

    public function index()
    {
        $user = Auth::user();
        $school = $this->getSchool();
        $schoolId = $school->id;
        $isAdmin = $user->hasRole('Admin');

        [$students, $parents] = $this->dashboardService->getUserRoleCounts($user->id, $schoolId, $isAdmin);
        $financialData = $this->dashboardService->getFinancialData($schoolId);
        $employees = $this->dashboardService->getEmployeeCount($schoolId);
        $grades = $this->dashboardService->getGradesWithClassrooms($schoolId);

        $data['users'] = User::where('school_id', $schoolId)->get();
        $data['grades'] = $grades;

        $chartData = $this->dashboardService->generateChartData($grades);
        $revenueTrend = $this->dashboardService->getMonthlyRevenueTrend($schoolId);

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
        [$students, $parents] = $this->dashboardService->getUserRoleCounts($user->id, $schoolId, true);
        $employees = $this->dashboardService->getEmployeeCount($schoolId);
        $financialData = $this->dashboardService->getFinancialData($schoolId);
        $grades = $this->dashboardService->getGradesWithClassrooms($schoolId);
        $chartData = $this->dashboardService->generateChartData($grades);
        $revenueTrend = $this->dashboardService->getMonthlyRevenueTrend($schoolId);
        $trendData = $this->dashboardService->calculateTrendData($schoolId);
        $recentActivity = $this->dashboardService->getRecentActivity($schoolId);

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
                ['route' => route('class-rooms.index'), 'icon' => 'building', 'label' => __('Sidebar.Class_Rooms'), 'perm' => 'class_rooms-list'],
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
        $financialData = $this->dashboardService->getFinancialData($schoolId);
        $revenueTrend = $this->dashboardService->getMonthlyRevenueTrend($schoolId);
        $trendData = $this->dashboardService->calculateTrendData($schoolId);

        $recentActivity = DB::table('recipt__payments')
            ->where('school_id', $schoolId)
            ->latest()->take(5)->get()->map(fn ($p) => [
                'icon' => 'credit-card',
                'description' => __('general.dashboard.payment_received').': '.number_format($p->Debit, 2),
                'time' => Carbon::parse($p->created_at)->diffForHumans(),
            ])->values();

        return response()->json([
            'statCards' => [
                ['label' => __('general.dashboard.invoiced'), 'value' => number_format($financialData['totalInvoiced'], 2), 'icon' => 'file-text', 'color' => 'blue', 'trend' => $trendData['invoiced']['trend'], 'trendDirection' => $trendData['invoiced']['direction'], 'sparklineData' => $trendData['invoiced']['sparkline']],
                ['label' => __('general.dashboard.collected'), 'value' => number_format($financialData['totalPaid'], 2), 'icon' => 'credit-card', 'color' => 'green', 'trend' => $trendData['collected']['trend'], 'trendDirection' => $trendData['collected']['direction'], 'sparklineData' => $trendData['collected']['sparkline']],
                ['label' => __('general.dashboard.pending'), 'value' => number_format($financialData['totalInvoiced'] - $financialData['totalPaid'], 2), 'icon' => 'clock', 'color' => 'amber', 'trend' => $trendData['pending']['trend'], 'trendDirection' => $trendData['pending']['direction'], 'sparklineData' => $trendData['pending']['sparkline']],
                ['label' => __('general.dashboard.overdue'), 'value' => '0.00', 'icon' => 'exclamation-circle', 'color' => 'red', 'trend' => null, 'trendDirection' => null, 'sparklineData' => null],
            ],
            'quickActions' => [
                ['route' => route('fee-invoice.index'), 'icon' => 'file-text', 'label' => __('general.dashboard.new_invoice'), 'perm' => 'fee_invoice-create'],
                ['route' => route('receipt-payment.index'), 'icon' => 'credit-card', 'label' => __('general.dashboard.create_receipt'), 'perm' => 'ReceiptPayment-create'],
                ['route' => route('except-fee.index'), 'icon' => 'minus-circle', 'label' => __('general.dashboard.fee_exceptions'), 'perm' => 'except_fee-list'],
                ['route' => route('payment-parts.index'), 'icon' => 'arrow-circle-down', 'label' => __('general.dashboard.payment_plans'), 'perm' => 'payment_parts-list'],
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
            'recentActivity' => collect(),
            'permissions' => [],
        ]);
    }
}
