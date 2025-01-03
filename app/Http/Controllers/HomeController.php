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
        $id = Auth::user();
        if (Auth::user()->hasRole('Admin')) {
            $students = Student::count();
            $parents = My_parents::count();
        } else {
            $grade = DB::Table('teacher_grade')->where('teacher_id', $id->id)->pluck('grade_id');
            $students = Student::whereIn('grade_id', $grade)->count();
            $parents = My_parents::whereIn('student_id', $grade)->count();
        }
        $credit = StudentAccount::sum('credit');
        $payment_parts = PaymentParts::where('date', date('Y-m-d'))->where('payment_status', '0')->sum('amount');
        $payments = Recipt_Payment::where('date', date('Y-m-d'))->sum('Debit');

        $employees = DB::Table('users')->count();
        $grades = Grade::withCount('students')->get();

        return view('dashboard', get_defined_vars());
    }
}
