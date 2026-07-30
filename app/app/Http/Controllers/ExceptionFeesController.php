<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExceptionFeeStoreRequest;
use App\Http\Requests\ExceptionFeeUpdateRequest;
use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\AcademicYear;
use App\Models\ExceptionFees;
use App\Models\FeeInvoice;
use App\Models\Student;
use App\Models\StudentAccount;
use App\Services\Finance\FinancialService;

class ExceptionFeesController extends Controller
{
    use LogsActivity, SchoolTrait;

    public function __construct()
    {
        $this->middleware('permission:except_fee-list', [
            'only' => ['index', 'show'],
        ]);
        $this->middleware('permission:except_fee-create', [
            'only' => ['create', 'store'],
        ]);
        $this->middleware('permission:except_fee-edit', [
            'only' => ['edit', 'update'],
        ]);
        $this->middleware('permission:except_fee-delete', [
            'only' => ['destroy'],
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $school = $this->getSchool();
        $ExceptionFees = ExceptionFees::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))
            ->with('student')
            ->paginate(config('school.per_page'));

        return view(
            'backend.fee_exception.index',
            compact('ExceptionFees', 'school'),
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        try {
            $Excpetion = Student::where('id', $id)
                ->with('studentAccount')
                ->first();
            $fees = FeeInvoice::where('student_id', $id)
                ->where('status', 'unpaid')
                ->with('schoolFee')
                ->get();
            $balance =
                $Excpetion->studentAccount->sum('debit') -
                $Excpetion->studentAccount->sum('credit');

            $school = $this->getSchool();
            if ($fees->isEmpty() || $balance <= 0) {
                session()->flash('info', trans('general.noInvoiceToExcept'));

                return redirect()->route('students.index');
            }

            return view(
                'backend.fee_exception.create',
                compact('Excpetion', 'fees', 'balance', 'school'),
            );
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExceptionFeeStoreRequest $request, FinancialService $studentFinanc)
    {
        try {
            $this->executeInTransaction(function () use (
                $request,
                $studentFinanc,
            ) {
                $student = Student::findorfail($request->student_id);
                $academic_year = AcademicYear::findorfail(
                    $student->acadmiecyear_id,
                );
                $fee = FeeInvoice::with('schoolFee')->findorfail($request->fee_id);
                if ($request->amount == $fee->schoolFee->amount) {
                    $fee->delete();
                }
                $pay = $studentFinanc->exciption_fee(
                    $student,
                    $request,
                    $academic_year->id,
                    $this->GetSchool()->id,
                );
                $studentFinanc->CreateStudentAccount(
                    $student,
                    null,
                    $academic_year,
                    'exciption',
                    0.0,
                    $request->amount,
                    null,
                    $pay->id,
                );

                $this->logActivity(
                    trans('log.actions.added'),
                    trans('log.models.exception_fee.created', [
                        'student_name' => $student->name,
                    ]),
                );
            });
            session()->flash('success', trans('general.success'));

            return redirect()->route('except-fee.index');
        } catch (\Exception $e) {
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
            $excptionFees = ExceptionFees::where('student_id', $id)
                ->with('student', 'academic_year', 'grade', 'classroom')
                ->get();
            $school = $this->getSchool();

            return view(
                'backend.fee_exception.show',
                compact('excptionFees', 'school'),
            );
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
            $school = $this->getSchool();
            $excptionFees = ExceptionFees::where('id', $id)->with('student')->first();

            return view(
                'backend.fee_exception.edit',
                compact('excptionFees', 'school'),
            );
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExceptionFeeUpdateRequest $request, FinancialService $service)
    {
        try {
            $this->executeInTransaction(function () use ($request) {
                $student = Student::findOrFail($request->student_id);

                // Fetch the existing ExceptionFees record
                $pay = ExceptionFees::where('id', $request->id)->first();
                $pay->date = date('Y-m-d');
                $pay->academic_year_id = $request->acadmic_id;
                $pay->amount = $request->amount;
                $pay->grade_id = $student->grade_id;
                $pay->class_id = $student->classroom_id;
                $pay->save();

                // Fetch the existing StudentAccount record
                $std = StudentAccount::where(
                    'excpetion_id',
                    $request->id,
                )->first();
                $std->credit = $request->amount;
                $std->academic_year_id = $request->acadmic_id;

                $std->grade_id = $student->grade_id;
                $std->classroom_id = $student->classroom_id;
                $std->debit = 0.0;
                $std->save();
                $this->logActivity(
                    trans('log.actions.updated'),
                    trans('log.models.exception_fee.updated', [
                        'student_name' => $pay->student->name,
                    ]),
                );
            });
            session()->flash('success', trans('general.success'));

            return redirect()->route('except-fee.index');
        } catch (\Exception $e) {
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
            $pay = ExceptionFees::with('student')->findorfail($id);

            $pay->delete();
            $this->logActivity(
                trans('log.actions.deleted'),
                trans('log.models.exception_fee.deleted', [
                    'student_name' => $pay->student->name,
                ]),
            );
            session()->flash('success', trans('general.success'));

            return redirect()->route('except-fee.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }
}
