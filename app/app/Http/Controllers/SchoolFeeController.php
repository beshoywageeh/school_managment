<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSchool_FeeRequest;
use App\Http\Requests\UpdateSchool_FeeRequest;
use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\acadmice_year;
use App\Models\class_room;
use App\Models\Grade;
use App\Models\School_Fee;
use App\Models\Student;
use App\Services\FinancialService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SchoolFeeController extends Controller
{
    use LogsActivity, SchoolTrait;

    public function __construct(
        protected FinancialService $financialService,
    ) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $school = $this->getSchool();
        $grades = Grade::where('school_id', $school->id)->get();
        $years = acadmice_year::where('school_id', $school->id)
            ->where('status', 0)
            ->get();
        $School_Fees = School_Fee::where('school_id', $school->id)
            ->with(
                'grade:id,name',
                'classroom:id,name',
                'user:id,name',
                'year:id,view',
            )
            ->paginate(10);

        return view('backend.school_fees.index', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSchool_FeeRequest $request)
    {
        DB::beginTransaction();
        try {
            $School_Fee = new School_Fee;
            $School_Fee->grade_id = $request->grade_id;
            $School_Fee->classroom_id = $request->classroom_id;
            $School_Fee->user_id = Auth::user()->id;
            $School_Fee->school_id = $this->getSchool()->id;
            $School_Fee->academic_year_id = $request->academic_year_id;
            $School_Fee->description = $request->description;
            $School_Fee->amount = $request->amount;
            $School_Fee->title = $request->title;
            $School_Fee->save();
            $this->logActivity(
                trans('log.actions.added'),
                trans('log.models.School_Fee.created', [
                    'amount' => $request->amount,
                ]),
            );
            $students = Student::where('grade_id', $request->grade_id)
                ->where('classroom_id', $request->classroom_id)
                ->get();
            $ac_year = acadmice_year::where('status', '0')->first();
            $students->map(function (
                $student,
                $ac_year,
                $request,
                $School_Fee,
            ) {
                $fee = $this->financialService->FeeInvoice(
                    $student,
                    $School_Fee->id,
                    $ac_year->id,
                    $this->getSchool()->id,
                );
                $this->financialService->CreateStudentAccount(
                    $student,
                    $fee->id,
                    $ac_year,
                    $request->amount,
                );
                $this->logActivity(
                    trans('log.actions.added'),
                    trans('log.models.School_Fee.invoice_added', [
                        'name' => $student->name,
                        'amount' => $request->amount,
                    ]),
                );
            });
            session()->flash('success', trans('general.success'));
            DB::commit();

            return redirect()->route('school_fees.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            \Log::channel('error')->error(
                'Error creating school fee: '.$e->getMessage(),
                ['stack' => $e->getTraceAsString()],
            );
            DB::rollBack();

            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $school = $this->getSchool();

        $school_fee = School_Fee::findorFail($id);
        $students = Student::where(
            'classroom_id',
            $school_fee->classroom_id,
        )
            ->where('grade_id', $school_fee->grade_id)
            ->with('classroom:id,name', 'grade:id,name')
            ->get(['code', 'name', 'classroom_id', 'grade_id']);

        return view('backend.school_fees.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $school = $this->getSchool();
            $School_Fee = School_Fee::findorFail($id);
            $grades = Grade::where('school_id', $school->id)->get();
            $years = acadmice_year::where('status', 1)->get();
            $academic_years = $years->map(function ($year) {
                return [
                    'id' => $year->id,
                    'academic_year' => Carbon::parse($year->year_start)->format('Y').
                        '-'.
                        Carbon::parse($year->year_end)->format('Y'),
                ];
            });

            return view('backend.School_Fees.edit', get_defined_vars());
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSchool_FeeRequest $request)
    {
        try {
            $School_Fee = School_Fee::findorFail($request->id);
            $School_Fee->update([
                'grade_id' => $request->grade_id,
                'classroom_id' => $request->classroom_id,
                'academic_year_id' => $request->academic_year_id,
                'description' => $request->description,
                'amount' => $request->amount,
            ]);
            $this->logActivity(
                trans('log.actions.updated'),
                trans('log.models.School_Fee.updated', [
                    'amount' => \Number::currency(
                        $request->amount,
                        'EGP',
                        'ar',
                    ),
                ]),
            );
            session()->flash('success', trans('general.success'));

            return redirect()->route('school_fees.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $fee = School_Fee::findorFail($id);
            $this->logActivity(
                trans('log.actions.deleted'),
                trans('log.models.School_Fee.deleted', [
                    'amount' => \Number::currency(
                        $fee->amount,
                        'EGP',
                        'ar',
                    ),
                ]),
            );
            $fee->delete();
            session()->flash('success', trans('general.success'));

            return redirect()->route('school_fees.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    public function getclasses($id)
    {
        $class_rooms = class_room::where('grade_id', $id)->get([
            'id',
            'name',
        ]);

        return response()->json($class_rooms);
    }
}
