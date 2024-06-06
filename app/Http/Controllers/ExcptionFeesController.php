<?php

namespace App\Http\Controllers;

use App\Models\acadmice_year;
use App\Models\ExcptionFees;
use App\Models\Fee_invoice;
use App\Models\Student;
use App\Models\StudentAccount;
use Illuminate\Http\Request;

class ExcptionFeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $ExcptionFees=ExcptionFees::with('students')->get();

         return view('backend.fee_exception.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        try{
            $Excpetion = Student::where('id',$id)->first();
$acadmincs= acadmice_year::where('status','0')->get();
            return view('backend.fee_exception.create',get_defined_vars());
        }catch(\Exception $e){
            session()->flash('error',$e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         try{
             \DB::beginTransaction();
             $pay = new ExcptionFees();
             $pay->date = date('Y-m-d');
             $pay->student_id = $request->student_id;
             $pay->amount = $request->amount;
             $pay->academic_year_id=$request->acadmic_id;
             $pay->grade_id = Student::where('id', $request->student_id)->first()->grade_id;
             $pay->class_id = Student::where('id', $request->student_id)->first()->classroom_id;
             $pay->save();
             $std = new StudentAccount();
             $std->student_id = $request->student_id;
             $std->date=$pay->date;
             $std->type='3';
             $std->credit = $request->amount;
             $std->academic_year_id=$request->acadmic_id;

             $std->grade_id = Student::where('id', $request->student_id)->first()->grade_id;
             $std->classroom_id = Student::where('id', $request->student_id)->first()->classroom_id;
             $std->debit = 0.00;
             $std->excpetion_id = $pay->id;
             $std->save();
             \DB::commit();
            session()->flash('success',trans('general.success'));
            return redirect()->route('except_fee.index');
        }catch(\Exception $e){
             \DB::rollback();
            session()->flash('error',$e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ExcptionFees $excptionFees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try{
            $excptionFees= ExcptionFees::where('id',$id)->with('students')->first();

            return view('backend.fee_exception.edit',get_defined_vars());
        }catch(\Exception $e){
            session()->flash('error',$e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        \DB::beginTransaction();
        try{
            // Fetch the existing ExceptionFees record
            $pay = ExcptionFees::where('id', $request->id)->first();
            $pay->date = date('Y-m-d');
             $pay->academic_year_id=$request->acadmic_id;
             $pay->amount = $request->amount;
            $pay->grade_id = Student::where('id', $request->student_id)->first()->grade_id;
            $pay->class_id = Student::where('id', $request->student_id)->first()->classroom_id;
            $pay->save();

            // Fetch the existing StudentAccount record
            $std = StudentAccount::
                where('excpetion_id', $request->id)
                ->first();
            $std->credit = $request->amount;
            $std->academic_year_id=$request->acadmic_id;

            $std->grade_id = Student::where('id', $request->student_id)->first()->grade_id;
            $std->classroom_id = Student::where('id', $request->student_id)->first()->classroom_id;
            $std->debit = 0.00;
            $std->save();

            \DB::commit();
            session()->flash('success',trans('general.success'));
            return redirect()->route('except_fee.index');
        }catch(\Exception $e){
\DB::rollback();
            session()->flash('error',$e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            ExcptionFees::findorfail($id)->delete();

            session()->flash('success',trans('general.success'));
            return redirect()->route('except_fee.index');
        }catch(\Exception $e){
            session()->flash('error',$e->getMessage());
            return redirect()->back();
        }
    }
}
