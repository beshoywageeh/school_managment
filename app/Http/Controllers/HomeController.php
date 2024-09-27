<?php

namespace App\Http\Controllers;

use App\Models\My_parents;
use App\Models\PaymentParts;
use App\Models\Recipt_Payment;
use App\Models\Student;
use App\Models\StudentAccount;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        if (Auth::user()->hasRole('Admin')) {
            $students = Student::count();
            $parents = My_parents::count();
        } else {
            $grade = DB::Table('teacher_grade')->where('teacher_id', $id)->pluck('grade_id');
            $students = Student::whereIn('grade_id', $grade)->count();
            $parents = My_parents::whereIn('student_id', $grade)->count();
        }
        $credit = StudentAccount::sum('credit');
        $payment_parts = PaymentParts::where('date', '<=', date('Y-m-d'))->where('payment_status', '0')->with('students:id,name')->get();
        $payments = Recipt_Payment::where('date', date('Y-m-d'))->with(['student:id,name'])->get();

        return view('dashboard', get_defined_vars());
    }
}
