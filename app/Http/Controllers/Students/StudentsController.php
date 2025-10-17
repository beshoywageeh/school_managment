<?php

namespace App\Http\Controllers\Students;

use App\DataTables\StudentDataTable;
use App\Enums\Student_Status;
use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\acadmice_year;
use App\Models\class_room;
use App\Models\Grade;
use App\Models\My_parents;
use App\Models\Student;
use App\Services\AgeCalculationService;
use App\Services\StudentImportService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentsController extends Controller
{
    use LogsActivity, SchoolTrait;

    public function index(StudentDataTable $datatable)
    {
        $school = $this->getSchool();

        return $datatable->render('backend.Students.Index', get_defined_vars());
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
    public function store(StudentRequest $request, AgeCalculationService $ageCalculator)
    {
        try {
            $religion = My_parents::findorfail($request->parents)->first(['Religion']);
            $year = \Carbon\Carbon::parse()->format('Y');
            $acc_year = acadmice_year::whereYear('year_start', $year)->first()->id;
            Student::create([
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
            $this->logActivity(trans('log.students.added_action'), trans('log.students.added', ['student_name' => $request->name]));
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
            $student = Student::where('id', $id)->with(['user:id,name', 'grade:id,name', 'classroom:id,name', 'parent:id,Father_Name,Mother_Name,Father_Phone,Mother_Phone,Father_Job', 'StudentAccount', 'nationality'])->withsum('StudentAccount', 'debit')->withsum('StudentAccount', 'credit')->first();
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
            $this->logActivity(trans('log.students.updated_action'), trans('system_lookup.field_change', ['value' => $student->code]));

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
        $this->logActivity(trans('log.students.restored_action'), trans('log.students.restored', ['student_name' => $student->name]));

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
            $this->logActivity(trans('log.students.graduated_action'), trans('log.students.graduated', ['student_name' => $student->name]));

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

            $this->logActivity(trans('log.students.deleted_action'), trans('log.students.deleted', ['student_name' => $student->name]));
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

            return redirect()->back()->withInput();
        }
    }
}
