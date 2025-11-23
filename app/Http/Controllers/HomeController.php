<?php

namespace App\Http\Controllers;

use App\Http\Traits\SchoolTrait;
use App\Models\Grade;
use App\Models\My_parents;
use App\Models\PaymentParts;
use App\Models\Recipt_Payment;
use App\Models\Student;
use App\Models\StudentAccount;
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
        [$students, $parents] = $this->getUserRoleCounts($user->id, $schoolId, $isAdmin);

        // Get financial data for today
        $financialData = $this->getTodayFinancialData($schoolId);

        // Get other counts
        $employees = DB::table('users')
            ->where('school_id', $schoolId)
            ->where('code', '!=', '000001')
            ->count();

        // Get parents data (consider if this is actually used in the view)
        $parents_data = My_parents::where('school_id', $schoolId)
            ->get(['id', 'Father_name']);

        // Get grades with classrooms and student counts
        $grades = Grade::with(['class_rooms' => function ($query) {
            $query->withCount('students');
        }])
            ->where('school_id', $schoolId)
            ->get();

        // Generate chart data
        $chartData = $this->generateChartData($grades);

        return view('dashboard', array_merge(
            compact('students', 'parents', 'parents_data', 'employees', 'grades', 'school'),
            $financialData,
            $chartData
        ));
    }

    /**
     * Get student and parent counts based on user role
     */
    private function getUserRoleCounts(int $userId, int $schoolId, bool $isAdmin): array
    {
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

            // Note: This looks like a bug - should this be checking grade_id instead of student_id?
            $parents = My_parents::where('school_id', $schoolId)
                ->whereIn('student_id', $gradeIds)
                ->count();
        }

        return [$students, $parents];
    }

    /**
     * Get financial data for today
     */
    private function getTodayFinancialData(int $schoolId): array
    {
        $today = now()->toDateString();

        return [
            'credit' => StudentAccount::sum('credit'),
            'payment_parts' => PaymentParts::where('school_id', $schoolId)
                ->whereDate('date', $today)
                ->where('payment_status', '0')
                ->sum('amount'),
            'payments' => Recipt_Payment::where('school_id', $schoolId)
                ->whereDate('date', $today)
                ->sum('Debit'),
        ];
    }

    /**
     * Generate chart data for grades and classrooms
     */
    private function generateChartData($grades): array
    {
        $baseColors = [
            [255, 99, 132],   // Red
            [54, 162, 235],   // Blue
            [255, 206, 86],   // Yellow
            [75, 192, 192],   // Green
            [153, 102, 255],  // Purple
            [255, 159, 64],   // Orange
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

        return compact('chart_labels', 'chart_data', 'chart_bg_colors', 'chart_border_colors');
    }
}
