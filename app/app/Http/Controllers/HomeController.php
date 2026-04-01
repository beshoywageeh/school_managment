<?php

namespace App\Http\Controllers;

use App\Models\acadmice_year;
use App\Models\ActivityLog;
use App\Models\Grade;
use App\Models\My_parents;
use App\Models\PaymentParts;
use App\Models\Recipt_Payment;
use App\Models\Student;
use App\Models\StudentAccount;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Traits\SchoolTrait;
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
        $academic_years = acadmice_year::where('school_id', $schoolId)->get();

        // Get financial data
        $financialData = $this->getFinancialData($schoolId);

        // Get other counts
        $employees = DB::table('users')
            ->where('school_id', $schoolId)
            ->where('code', '!=', '000001')
            ->count();

        // Get grades with classrooms and student counts
        $grades = Grade::with([
            'class_rooms' => function ($query) {
                $query->withCount('students');
            },
        ])
            ->where('school_id', $schoolId)
            ->get();

        $data['users'] = User::where('school_id', $schoolId)->get();
        $data['grades'] = $grades;

        // Generate chart data
        $chartData = $this->generateChartData($grades);
        $revenueTrend = $this->getMonthlyRevenueTrend($schoolId);

        // Additional data for advanced dashboard
        $latestStudents = Student::where('school_id', $schoolId)
            ->with(['grade', 'classroom'])
            ->latest()
            ->take(5)
            ->get();

        $recentActivities = ActivityLog::where('setting_id', $schoolId)
            ->with('user')
            ->latest()
            ->take(10)
            ->get();

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
                    'academic_years',
                    'latestStudents',
                    'recentActivities'
                ),
                $financialData,
                $chartData,
                $revenueTrend
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
            $parents = My_parents::where('school_id', $schoolId)->count();
        } else {
            $gradeIds = DB::table('teacher_grade')
                ->where('teacher_id', $userId)
                ->pluck('grade_id');

            $students = Student::where('school_id', $schoolId)
                ->whereIn('grade_id', $gradeIds)
                ->count();

            $parents = My_parents::where('school_id', $schoolId)
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
            'credit' => StudentAccount::where('type', 'invoice')->sum('debit'),
            'payment_parts' => PaymentParts::where('school_id', $schoolId)
                ->where('status', 'payed')
                ->sum('amount'),
            'payments' => Recipt_Payment::where('school_id', $schoolId)->sum('Debit'),
            // Detailed totals
            'totalInvoiced' => DB::table('fee_invoices')
                ->join('school__fees', 'fee_invoices.school_fee_id', '=', 'school__fees.id')
                ->where('fee_invoices.school_id', $schoolId)
                ->whereNull('fee_invoices.deleted_at')
                ->sum('school__fees.amount'),
            'totalPaid' => Recipt_Payment::where('school_id', $schoolId)->sum('Debit'),
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

            $revenue[] = Recipt_Payment::where('school_id', $schoolId)
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
        $baseColors = [
            [255, 99, 132], // Red
            [54, 162, 235], // Blue
            [255, 206, 86], // Yellow
            [75, 192, 192], // Green
            [153, 102, 255], // Purple
            [255, 159, 64], // Orange
        ];

        $chart_labels = [];
        $chart_data = [];
        $chart_bg_colors = [];
        $chart_border_colors = [];

        foreach ($grades as $index => $grade) {
            $color = $baseColors[$index % count($baseColors)];

            foreach ($grade->class_rooms as $classroom) {
                $chart_labels[] = "{$grade->name} - {$classroom->name}";
                $chart_data[] = $classroom->students_count;
                $chart_bg_colors[] = "rgba({$color[0]}, {$color[1]}, {$color[2]}, 0.6)";
                $chart_border_colors[] = "rgba({$color[0]}, {$color[1]}, {$color[2]}, 1)";
            }
        }

        return compact(
            'chart_labels',
            'chart_data',
            'chart_bg_colors',
            'chart_border_colors',
        );
    }
}
