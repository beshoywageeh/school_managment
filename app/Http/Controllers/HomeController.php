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

        $today = now()->toDateString();

        $credit = StudentAccount::sum('credit');
        $payment_parts = PaymentParts::where('school_id', $school->id)->whereDate('date', $today)
            ->where('payment_status', '0')
            ->sum('amount');
        $payments = Recipt_Payment::where('school_id', $school->id)->whereDate('date', $today)
            ->sum('Debit');

        $employees = DB::table('users')->where('school_id', $school->id)->where('code', '!=', '000001')->count();
        $grades = Grade::withCount('students')->where('school_id', $school->id)->get();

        return view('dashboard', get_defined_vars());
    }
}
