<?php

namespace App\Http\Controllers;

use App\Models\{acadmice_year,PaymentParts,Recipt_Payment,Student,StudentAccount};


class HomeController extends Controller
{
    public function index()
    {
        $acadmic= acadmice_year::where('status','0')->first()->id;
        $students=Student::count();
        $debit=Recipt_payment::where('academic_year_id',$acadmic)->sum('Debit');
        $credit = StudentAccount::sum('credit');
        $payment_parts = PaymentParts::where('date','<=',date('Y-m-d'))->where('payment_status','0')->with('students:id,name')->get();
        $payments= Recipt_Payment::where('date',date('Y-m-d'))->with(['student:id,name'])->get();
       // return $payment_parts;
        return view('dashboard',get_defined_vars());
    }
}