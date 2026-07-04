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

        [$students, $parents] = $this->getUserRoleCounts($user->id, $schoolId, $user->hasRole('Admin'));
        $employees = DB::table('users')
            ->where('school_id', $schoolId)
            ->where('code', '!=', '000001')
            ->count();
        $financialData = $this->getFinancialData($schoolId);
        $grades = Grade::where('school_id', $school->id)
            ->with(['class_rooms' => function ($q) {
                $q->withCount('students');
            }])
            ->where('school_id', $schoolId)
            ->get();
        $chartData = $this->generateChartData($grades);
        $revenueTrend = $this->getMonthlyRevenueTrend($schoolId);

        $recentActivity = collect();
        $recentStudents = Student::where('school_id', $schoolId)
            ->latest()->take(2)->get()->map(fn ($s) => [
                'icon' => 'graduation-cap',
                'description' => __('Student created').': '.$s->name,
                'time' => $s->created_at->diffForHumans(),
            ]);
        $recentPayments = ReceiptPayment::where('school_id', $schoolId)
            ->latest()->take(2)->get()->map(fn ($p) => [
                'icon' => 'credit-card',
                'description' => __('Payment received').': '.number_format($p->Debit, 2),
                'time' => $p->created_at->diffForHumans(),
            ]);
        $recentActivity = $recentStudents->concat($recentPayments)->sortByDesc('time')->take(5)->values();

        return response()->json([
            'statCards' => [
                ['label' => __('Students'), 'value' => $students, 'icon' => 'graduation-cap', 'color' => 'blue', 'trend' => null, 'trendDirection' => 'up', 'sparklineData' => null],
                ['label' => __('Parents'), 'value' => $parents, 'icon' => 'users', 'color' => 'green', 'trend' => null, 'trendDirection' => 'up', 'sparklineData' => null],
                ['label' => __('Employees'), 'value' => $employees, 'icon' => 'id-card', 'color' => 'cyan', 'trend' => null, 'sparklineData' => null],
                ['label' => __('Pending Balance'), 'value' => number_format($financialData['totalInvoiced'] - $financialData['totalPaid'], 2), 'icon' => 'exclamation-circle', 'color' => 'red', 'trend' => null, 'sparklineData' => null],
            ],
            'quickActions' => [
                ['route' => 'students.create', 'icon' => 'graduation-cap', 'label' => __('Create Student'), 'perm' => 'Students-create'],
                ['route' => 'parents.create', 'icon' => 'users', 'label' => __('Create Parent'), 'perm' => 'parents-create'],
                ['route' => 'grade.index', 'icon' => 'line-chart', 'label' => __('Grades'), 'perm' => 'grade-list'],
                ['route' => 'class_rooms.index', 'icon' => 'building', 'label' => __('Class Rooms'), 'perm' => 'class_rooms-list'],
                ['route' => 'jobs.create', 'icon' => 'briefcase', 'label' => __('Create Job'), 'perm' => 'jobs-create'],
                ['route' => 'backup.create', 'icon' => 'database', 'label' => __('Create Backup'), 'perm' => 'backup-create'],
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
}
