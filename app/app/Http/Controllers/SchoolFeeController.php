<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSchoolFeeRequest;
use App\Http\Requests\UpdateSchoolFeeRequest;
use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\AcademicYear;
use App\Models\ClassRoom;
use App\Models\Grade;
use App\Models\SchoolFee;
use App\Models\Student;
use App\Services\Finance\FinancialService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SchoolFeeController extends Controller
{
    use LogsActivity, SchoolTrait;

    public function __construct(
        protected FinancialService $financialService,
    ) {
        $this->middleware('permission:schoolfees-list', ['only' => ['index', 'show', 'getclasses']]);
        $this->middleware('permission:schoolfees-create', ['only' => ['store']]);
        $this->middleware('permission:schoolfees-edit', ['only' => ['update']]);
        $this->middleware('permission:schoolfees-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $school = $this->getSchool();
        $grades = Grade::where('school_id', $school->id)->get();

        $years = AcademicYear::where('status', 'active')->get();
        $academic_years = $years->map(function ($year) {
            return [
                'id' => $year->id,
                'academic_year' => Carbon::parse($year->year_start)->format('Y').
                    '-'.
                    Carbon::parse($year->year_end)->format('Y'),
            ];
        });
        $SchoolFees = SchoolFee::where('school_id', $school->id)
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
    public function store(StoreSchoolFeeRequest $request)
    {
        try {
            DB::Transaction(function () use ($request) {
                $schoolFee = new SchoolFee;
                $schoolFee->grade_id = $request->grade_id;
                $schoolFee->classroom_id = $request->classroom_id;
                $schoolFee->user_id = Auth::user()->id;
                $schoolFee->school_id = $this->getSchool()->id;
                $schoolFee->academic_year_id = $request->academic_year_id;
                $schoolFee->description = $request->description;
                $schoolFee->amount = $request->amount;
                $schoolFee->title = $request->title;
                $schoolFee->save();
                $this->logActivity(
                    trans('log.actions.added'),
                    trans('log.models.SchoolFee.created', [
                        'amount' => $request->amount,
                    ]),
                );
                $students = Student::where('grade_id', $request->grade_id)
                    ->where('classroom_id', $request->classroom_id)
                    ->get();

                $students->each(function ($student) use (
                    $schoolFee,
                    $request,
                ) {
                    $this->financialService->FeeInvoice(
                        $student,
                        $schoolFee,
                        $request->academic_year_id,
                        $this->getSchool()->id,
                    );

                    $this->logActivity(
                        trans('log.actions.added'),
                        trans('log.models.SchoolFee.invoice_added', [
                            'name' => $student->name,
                            'amount' => $request->amount,
                        ]),
                    );
                });
            });
            session()->flash('success', trans('general.success'));

            return redirect()->route('school_fees.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            \Log::channel('error')->error(
                'Error creating school fee: '.$e->getMessage(),
                ['stack' => $e->getTraceAsString()],
            );

            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $school = $this->getSchool();

        $school_fee = SchoolFee::findorFail($id);
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
     * Update the specified resource in storage.
     */
    public function update(UpdateSchoolFeeRequest $request)
    {
        try {
            $SchoolFee = SchoolFee::findorFail($request->id);
            $SchoolFee->update([
                'title' => $request->name,
                'grade_id' => $request->grade_id,
                'classroom_id' => $request->classroom_id,
                'academic_year_id' => $request->academic_year_id,
                'description' => $request->description,
                'amount' => $request->amount,
            ]);
            $this->logActivity(
                trans('log.actions.updated'),
                trans('log.models.SchoolFee.updated', [
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
            $fee = SchoolFee::findorFail($id);
            $this->logActivity(
                trans('log.actions.deleted'),
                trans('log.models.SchoolFee.deleted', [
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
        $class_rooms = ClassRoom::where('grade_id', $id)->get([
            'id',
            'name',
        ]);

        return response()->json($class_rooms);
    }
}
