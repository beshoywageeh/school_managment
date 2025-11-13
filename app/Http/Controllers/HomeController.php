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
        $id = Auth::id();
        $user = Auth::user();
        $school = $this->getSchool();

        if ($user->hasRole('Admin')) {
            $students = Student::where('school_id', $school->id)->count();
            $parents = My_parents::where('school_id', $school->id)->count();
        } else {
            $gradeIds = DB::table('teacher_grade')
                ->where('teacher_id', $id)
                ->pluck('grade_id');

            $students = Student::where('school_id', $school->id)->whereIn('grade_id', $gradeIds)->count();
            $parents = My_parents::where('school_id', $school->id)->whereIn('student_id', $gradeIds)->count();
        }
        $parents_data = My_parents::where('school_id', $school->id)->get(['id', 'Father_name']);
        $today = now()->toDateString();

        $credit = StudentAccount::sum('credit');
        $payment_parts = PaymentParts::where('school_id', $school->id)->whereDate('date', $today)
            ->where('payment_status', '0')
            ->sum('amount');
        $payments = Recipt_Payment::where('school_id', $school->id)->whereDate('date', $today)
            ->sum('Debit');

        $employees = DB::table('users')->where('school_id', $school->id)->where('code', '!=', '000001')->count();
        $grades = Grade::with(['class_rooms' => function ($query) {
            $query->withCount('students');
        }])->where('school_id', $school->id)->get();

        $chart_labels = [];
        $chart_data = [];
        $chart_bg_colors = [];
        $chart_border_colors = [];

        $grade_colors = []; // To store a base color for each grade
        $color_index = 0;
        $base_colors = [
            [255, 99, 132], // Red
            [54, 162, 235], // Blue
            [255, 206, 86], // Yellow
            [75, 192, 192], // Green
            [153, 102, 255], // Purple
            [255, 159, 64], // Orange
        ];

        foreach ($grades as $grade) {
            // Assign a base color to the grade
            if (! isset($grade_colors[$grade->id])) {
                $base_color = $base_colors[$color_index % count($base_colors)];
                $grade_colors[$grade->id] = $base_color;
                $color_index++;
            }
            $current_base_color = $grade_colors[$grade->id];

            foreach ($grade->class_rooms as $classroom) {
                $chart_labels[] = $grade->name.' - '.$classroom->name;
                $chart_data[] = $classroom->students_count;

                // Use the base color for the grade, with varying alpha for backgrounds
                $chart_bg_colors[] = "rgba({$current_base_color[0]}, {$current_base_color[1]}, {$current_base_color[2]}, 0.6)";
                $chart_border_colors[] = "rgba({$current_base_color[0]}, {$current_base_color[1]}, {$current_base_color[2]}, 1)";
            }
        }

        return view('dashboard', get_defined_vars());
    }
}
