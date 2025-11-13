<?php

namespace App\Http\Controllers\Students;

use App\Enums\Student_Status;
use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\acadmice_year;
use App\Models\class_room;
use App\Models\Fee_invoice;
use App\Models\Grade;
use App\Models\My_parents;
use App\Models\Student;
use App\Services\AgeCalculationService;
use App\Services\StudentFinancialService;
use App\Services\StudentImportService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class StudentsController extends Controller
{
    use LogsActivity, SchoolTrait;

    public function index()
    {
        $school = $this->getSchool();

        return view('backend.Students.Index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $grades = Grade::all(['id', 'name']);
        $parents = My_parents::all(['id', 'Father_Name']);
        $school = $this->getSchool();

        return view('backend.Students.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request, AgeCalculationService $ageCalculator, StudentFinancialService $StudentAccount)
    {
        try {
            $religion = My_parents::findorfail($request->parents)->first(['Religion']);
            $year = \Carbon\Carbon::parse()->format('Y');
            $acc_year = acadmice_year::whereYear('year_start', $year)->first()->id;
            $year = Carbon::parse()->format('Y');
            $acc_year = acadmice_year::whereYear('year_start', $year)->where('status', 0)->first();
            if (! $acc_year) {
                session()->flash('error', trans('general.no_active_academic_year'));

                return redirect()->back()->withInput();
            }
            $student = Student::create([
                'name' => $request->student_name,
                'birth_date' => $request->birth_date,
                'join_date' => Carbon::parse()->format('Y-m-d'),
                'gender' => $request->gender,
                'grade_id' => $request->grade,
                'parent_id' => $request->parents,
                'classroom_id' => $request->class_room,
                'address' => $request->address,
                'national_id' => $request->national_id,
                'student_status' => $request->std_status,
                'religion' => $religion,
                'birth_at_begin' => $ageCalculator->calculateAgeAsOfOctoberFirst($request->birth_date),
                'acadmiecyear_id' => $acc_year,
                'nationality_id' => $request->nationality,
                'user_id' => Auth::id(),
                'school_id' => $this->getSchool()->id,
            ]);
            $this->logActivity(trans('log.actions.added'), trans('log.models.student.created', ['student_name' => $request->name]));
            $school_fee = DB::table('school__fees')->where('academic_year_id', $acc_year->id)->where('grade_id', $student->grade_id)->where('classroom_id', $student->classroom_id)->get();
            // dd($school_fee);
            foreach ($school_fee as $fee) {
                $fees = new Fee_invoice;
                $fees->invoice_date = \Carbon\Carbon::parse()->format('Y-m-d');
                $fees->student_id = $student->id;
                $fees->grade_id = $student->grade_id;
                $fees->classroom_id = $student->classroom_id;
                $fees->school_fee_id = $fee->id;
                $fees->academic_year_id = $acc_year->id;
                $fees->user_id = Auth::user()->id;
                $fees->school_id = Auth::user()->school_id;
                $fees->save();
                // Student Account Service
                $this->logActivity(trans('log.actions.added'), trans('log.models.school_fee.invoice_added', ['name' => $student->name, 'amount' => $fee->amount]));
            }
            $StudentAccount->AddStudentBookInvoice($student);
            $StudentAccount->AddStudentClotheInvoice($student);
            session()->flash('success', trans('general.success'));

            return redirect()->route('Students.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $student = Student::where('id', $id)
                ->with(
                    [
                        'user:id,name',
                        'grade:id,name',
                        'classroom:id,name',
                        'parent:id,Father_Name,Mother_Name,Father_Phone,Mother_Phone,Father_Job',
                        'StudentAccount',
                        'nationality',
                    ])
                ->withsum('StudentAccount', 'debit')
                ->withsum('StudentAccount', 'credit')
                ->first();
            $school = $this->getSchool();

            return view('backend.Students.show', get_defined_vars());
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $grades = Grade::all(['id', 'name']);
            $parents = My_parents::all(['id', 'Father_Name']);
            $student = Student::findorfail($id);
            $school = $this->getSchool();

            return view('backend.Students.edit', get_defined_vars());
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, AgeCalculationService $ageCalculator)
    {
        try {
            $student = Student::findorfail($request->id);
            $student->update([
                'name' => $request->student_name,
                'birth_date' => $request->birth_date,
                'join_date' => $student->join_date,
                'gender' => $request->gender,
                'grade_id' => $request->grade,
                'parent_id' => $request->parents,
                'classroom_id' => $request->class_room,
                'address' => $request->address,
                'student_status' => Student_Status::fromString($request->std_status),
                'national_id' => $request->national_id,
                'religion' => My_parents::findorfail($request->parents)->Religion,
                'birth_at_begin' => $ageCalculator->calculateAgeAsOfOctoberFirst($request->birth_date),

                'nationality_id' => $request->nationality,
                'user_id' => \Auth::Id(),
            ]);
            session()->flash('success', trans('general.success'));
            $this->logActivity(trans('log.actions.updated'), trans('log.models.student.updated', ['student_code' => $student->code]));

            return redirect()->route('Students.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back()->withInput();
        }
    }

    public function graduated()
    {
        $students = Student::onlyTrashed()->with('grade', 'classroom')->get();
        $school = $this->getSchool();

        return view('backend.students.graduated', get_defined_vars());
    }

    public function restore($id)
    {

        $student = Student::where('id', $id)->first();
        $student->restore();
        $this->logActivity(trans('log.actions.restored'), trans('log.models.student.restored', ['student_name' => $student->name]));

        return redirect()->route('Students.index')->with('success', trans('General.success'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function softDelete(string $id, Request $request)
    {
        try {
            $student = Student::findorfail($id);
            $student->delete();
            $this->logActivity(trans('log.actions.graduated'), trans('log.models.student.graduated', ['student_name' => $student->name]));

            return redirect()->route('Students.graduated')->with('success', trans('general.success'));
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    public function forceDelete(string $id, Request $request)
    {
        try {
            $student = Student::onlyTrashed()->where('id', $id)->first();

            $this->logActivity(trans('log.actions.deleted'), trans('log.models.student.deleted', ['student_name' => $student->name]));
            $student->forceDelete();

            return redirect()->route('Students.graduated')->with('success', trans('general.success'));
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    public function getclasses($id)
    {
        $class_rooms = class_room::where('school_id', $this->getSchool()->id)->where('grade_id', $id)->get(['id', 'name']);

        return response()->json($class_rooms);
    }

    public function Excel_Import(Request $request, StudentImportService $studentImportService)
    {
        try {
            $studentImportService->StudentImport($request->file('excel'));
            session()->flash('success', trans('general.success'));

            return redirect()->route('Students.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            Log::error($e->getMessage());

            return redirect()->back()->withInput();
        }
    }

    public function fast_add_student(Request $request, AgeCalculationService $ageCalculator, StudentFinancialService $StudentAccount)
    {

        try {
            DB::beginTransaction();
            $year = \Carbon\Carbon::parse()->format('Y');
            $acc_year = acadmice_year::whereYear('year_start', $year)->where('status', 0)->first();

            $year = \Carbon\Carbon::parse()->format('Y');

            $parent = My_parents::create([
                'Father_Name' => $request->Father_Name,
                'user_id' => Auth::id(),
                'school_id' => $this->getSchool()->id,
            ]);
            $student = Student::create([
                'name' => $request->student_name,
                'birth_date' => $request->birth_date,
                'join_date' => Carbon::parse()->format('Y-m-d'),
                'grade_id' => $request->grade,
                'classroom_id' => $request->class_room,
                'address' => $request->address,
                'national_id' => $request->national_id,
                'student_status' => $request->std_status,

                'birth_at_begin' => $ageCalculator->calculateAgeAsOfOctoberFirst($request->birth_date),
                'acadmiecyear_id' => $acc_year->id,
                'parent_id' => $parent->id,
                'nationality_id' => $request->nationality,
                'user_id' => Auth::id(),
                'school_id' => $this->getSchool()->id,
            ]);
            $this->logActivity(trans('log.actions.added'), trans('log.models.student.created', ['student_name' => $request->name]));
            $school_fee = DB::table('school__fees')->where('academic_year_id', $acc_year->id)->where('grade_id', $student->grade_id)->where('classroom_id', $student->classroom_id)->get();

            // dd($school_fee);
            foreach ($school_fee as $fee) {
                $fees = new Fee_invoice;
                $fees->invoice_date = \Carbon\Carbon::parse()->format('Y-m-d');
                $fees->student_id = $student->id;
                $fees->grade_id = $student->grade_id;
                $fees->classroom_id = $student->classroom_id;
                $fees->school_fee_id = $fee->id;
                $fees->academic_year_id = $acc_year->id;
                $fees->user_id = Auth::user()->id;
                $fees->school_id = Auth::user()->school_id;
                $fees->save();

                $StudentAccount->CreateStudentAccount($student, $fees->id, $acc_year, '1', $fee->amount);

                $this->logActivity(trans('log.actions.added'), trans('log.models.school_fee.invoice_added', ['name' => $student->name, 'amount' => $fee->amount]));
            }
            $StudentAccount->AddStudentBookInvoice($student);
            $StudentAccount->AddStudentClotheInvoice($student);
            DB::commit();

            return response()->json(['success' => true, 'message' => trans('general.success')]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            DB::rollBack();

            return response()->json(['success' => false, 'message' => trans('general.no_active_academic_year')], 400);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
}
