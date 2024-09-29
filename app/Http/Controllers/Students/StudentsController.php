<?php

namespace App\Http\Controllers\Students;

use App\DataTables\StudentDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use App\Imports\StudentImport;
use App\Models\class_room;
use App\Models\Grade;
use App\Models\My_parents;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index(StudentDataTable $datatable)
    {
        return $datatable->render('backend.Students.Index');
        // return view('backend.Students.Index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $grades = Grade::all(['id', 'name']);
        $parents = My_parents::all(['id', 'Father_Name']);

        //return get_defined_vars();
        return view('backend.Students.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        try {
            $inputDate = \Carbon\Carbon::parse($request->birth_date);
            $firstOfOctober = \Carbon\Carbon::create(date('Y'), 10, 1);
            $generate_code = Student::orderBy('code', 'desc')->first();
            $years = $inputDate->diffInYears($firstOfOctober);
            $months = $inputDate->diffInMonths($firstOfOctober) % 12;
            $days = $inputDate->diffInDays($firstOfOctober->copy()->subYears($years)->subMonths($months));
            $final_date = "{$years}-{$months}-{$days}";
            Student::create([
                'code' => isset($generate_code) ? str_pad($generate_code->code + 1, 6, '0', STR_PAD_LEFT) : '000001',
                'name' => $request->student_name,
                'birth_date' => $request->birth_date,
                'join_date' => $request->join_date,
                'gender' => $request->gender,
                'grade_id' => $request->grade,
                'parent_id' => $request->parents,
                'classroom_id' => $request->class_room,
                'address' => $request->address,
                'national_id' => $request->national_id,
                'student_status' => $request->std_status,
                'religion' => My_parents::findorfail($request->parents)->Religion,
                'birth_at_begin' => $final_date,
                'user_id' => \Auth::Id(),
            ]);
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
            $student = Student::where('id', $id)->with(['user:id,name', 'grade:id,name', 'classroom:id,name', 'parent:id,Father_Name,Mother_Name,Father_Phone,Mother_Phone', 'StudentAccount'])->withsum('StudentAccount', 'debit')->withsum('StudentAccount', 'credit')->first();

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

            return view('backend.Students.edit', get_defined_vars());
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request)
    {
        try {
            $student = Student::findorfail($request->id);
            $student->update([
                'name' => $request->student_name,
                'birth_date' => $request->birth_date,
                'join_date' => $request->join_date,
                'gender' => $request->gender,
                'grade_id' => $request->grade,
                'parent_id' => $request->parents,
                'classroom_id' => $request->class_room,
                'address' => $request->address,
                'student_status' => $request->std_status,
                'national_id' => $request->national_id,
                'religion' => My_parents::findorfail($request->parents)->Religion,

                'user_id' => \Auth::Id(),
            ]);
            session()->flash('success', trans('general.success'));

            return redirect()->route('Students.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {
        try {
            $student = Student::findorfail($id);
            $student->delete();

            return redirect()->back()->with('success', trans('general.success'));
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    public function getclasses($id)
    {
        $class_rooms = class_room::where('grade_id', $id)->get(['id', 'name']);

        return response()->json($class_rooms);
    }
    public function Excel_Import(Request $request)
    {
        try {
            $path = $request->file('excel')->getRealPath();
            \Excel::import(new StudentImport, $path);
            session()->flash('success', trans('general.success'));

            return redirect()->route('Students.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back()->withInput();
        }
    }
}