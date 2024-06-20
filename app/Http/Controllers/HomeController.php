<?php

namespace App\Http\Controllers;

use App\Models\{acadmice_year, PaymentParts, Recipt_Payment, Student, StudentAccount};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {
        $id = Auth()->user()->id;
        $acadmic = acadmice_year::where('status', '0')->first();
        if ($acadmic == null) {
            $debit = '0';
        } else {
            $acadmic_id = $acadmic->id;
            $debit = Recipt_payment::where('academic_year_id', $acadmic)->sum('Debit');
        }
        if (Auth::user()->hasRole('Admin')) {
            $students = Student::count();
        } else {
            $grade = DB::Table('teacher_grade')->where('teacher_id', $id)->pluck('grade_id');
            $students = Student::whereIn('grade_id', $grade)->count();

        }
        $credit = StudentAccount::sum('credit');
        $payment_parts = PaymentParts::where('date', '<=', date('Y-m-d'))->where('payment_status', '0')->with('students:id,name')->get();
        $payments = Recipt_Payment::where('date', date('Y-m-d'))->with(['student:id,name'])->get();

        return view('dashboard', get_defined_vars());
    }
}
