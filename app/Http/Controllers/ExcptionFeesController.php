<?php

namespace App\Http\Controllers;

use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\ExcptionFees;
use App\Models\Fee_invoice;
use App\Models\Student;
use App\Models\StudentAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExcptionFeesController extends Controller
{
    use LogsActivity, SchoolTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ExcptionFees = ExcptionFees::with('students')->get();
        $school = $this->getSchool();

        return view('backend.fee_exception.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        try {
            $Excpetion = Student::where('id', $id)->with('StudentAccount')->first();
            $fees = Fee_invoice::where('student_id', $id)->where('status', 0)->with('fees')->get();
            $balance = $Excpetion->StudentAccount->sum('debit') - $Excpetion->StudentAccount->sum('credit');
            $school = $this->getSchool();
            if ($fees->isEmpty() || $balance <= 0) {
                session()->flash('info', trans('General.noInvoiceToExcept'));

                return redirect()->route('Students.index');
            }

            return view('backend.fee_exception.create', get_defined_vars());
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $pay = new ExcptionFees;
            $pay->date = date('Y-m-d');
            $pay->student_id = $request->student_id;
            $pay->amount = $request->amount;
            $pay->academic_year_id = Student::where('id', $request->student_id)->first()->acadmiecyear_id;
            $pay->grade_id = Student::where('id', $request->student_id)->first()->grade_id;
            $pay->class_id = Student::where('id', $request->student_id)->first()->classroom_id;
            $pay->fee_id = $request->fee_id;
            $pay->school_id = $this->getSchool()->id;
            $pay->user_id = auth()->id();
            $pay->save();
            $std = new StudentAccount;
            $std->student_id = $request->student_id;
            $std->date = $pay->date;
            $std->type = '3';
            $std->credit = $request->amount;
            $std->academic_year_id = Student::where('id', $request->student_id)->first()->acadmiecyear_id;
            $std->grade_id = Student::where('id', $request->student_id)->first()->grade_id;
            $std->classroom_id = Student::where('id', $request->student_id)->first()->classroom_id;
            $std->debit = 0.00;
            $std->excpetion_id = $pay->id;
            $std->save();
            $this->logActivity(trans('log.exception_fees.added_action'), trans('log.exception_fees.added', ['student_name' => $pay->students->name]));
            DB::commit();
            session()->flash('success', trans('general.success'));

            return redirect()->route('except_fee.index');
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $excptionFees = ExcptionFees::where('student_id', $id)->with('students', 'academic_year', 'grade', 'classroom')->get();
            $school = $this->getSchool();

            return view('backend.fee_exception.show', get_defined_vars());
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $excptionFees = ExcptionFees::where('id', $id)->with('students')->first();
            $school = $this->getSchool();

            return view('backend.fee_exception.edit', get_defined_vars());
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        DB::beginTransaction();
        try {
            // Fetch the existing ExceptionFees record
            $pay = ExcptionFees::where('id', $request->id)->first();
            $pay->date = date('Y-m-d');
            $pay->academic_year_id = $request->acadmic_id;
            $pay->amount = $request->amount;
            $pay->grade_id = Student::where('id', $request->student_id)->first()->grade_id;
            $pay->class_id = Student::where('id', $request->student_id)->first()->classroom_id;
            $pay->save();

            // Fetch the existing StudentAccount record
            $std = StudentAccount::where('excpetion_id', $request->id)
                ->first();
            $std->credit = $request->amount;
            $std->academic_year_id = $request->acadmic_id;

            $std->grade_id = Student::where('id', $request->student_id)->first()->grade_id;
            $std->classroom_id = Student::where('id', $request->student_id)->first()->classroom_id;
            $std->debit = 0.00;
            $std->save();
            $this->logActivity(trans('log.exception_fees.updated_action'), trans('log.exception_fees.updated', ['student_name' => $pay->students->name]));
            DB::commit();
            session()->flash('success', trans('general.success'));

            return redirect()->route('except_fee.index');
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $pay = ExcptionFees::findorfail($id);

            $pay->delete();
            $this->logActivity(trans('log.exception_fees.deleted_action'), trans('log.exception_fees.deleted', ['student_name' => $pay->students->name]));
            session()->flash('success', trans('general.success'));

            return redirect()->route('except_fee.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }
}
