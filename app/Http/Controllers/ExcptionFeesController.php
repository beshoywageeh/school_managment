<?php

namespace App\Http\Controllers;

use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\acadmice_year;
use App\Models\ExcptionFees;
use App\Models\Fee_invoice;
use App\Models\Student;
use App\Models\StudentAccount;
use App\Services\FinancialService;
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
    public function store(Request $request, FinancialService $studentFinanc)
    {
        //        return $request;
        try {
            DB::beginTransaction();
            $student = Student::findorfail($request->student_id);
            $academic_year = acadmice_year::findorfail($student->acadmiecyear_id);
            $fee = Fee_invoice::findorfail($request->fee_id)->with('fees')->first();
            if ($request->amount == $fee->fees->amount) {
                $fee->delete();
            }
            $studentFinanc->exciption_fee($student, $request, $academic_year->id, $this->GetSchool()->id);
            $studentFinanc->CreateStudentAccount($student, null, $academic_year, 'exciption', 0.00, $request->amount, null, $pay->id);

            $this->logActivity(trans('log.actions.added'), trans('log.models.exception_fee.created', ['student_name' => $student->name]));
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
    public function update(Request $request, FinancialService $service)
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
            $this->logActivity(trans('log.actions.updated'), trans('log.models.exception_fee.updated', ['student_name' => $pay->students->name]));
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
            $this->logActivity(trans('log.actions.deleted'), trans('log.models.exception_fee.deleted', ['student_name' => $pay->students->name]));
            session()->flash('success', trans('general.success'));

            return redirect()->route('except_fee.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }
}
