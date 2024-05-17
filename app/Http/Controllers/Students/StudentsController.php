<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use Illuminate\Http\Request;
use App\Models\{Grade,My_parents,class_room, Student};
use PDF;
class StudentsController extends Controller
{
    public function index()
    {
        return view('backend.Students.Index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $grades=Grade::all(['id','name']);
        $parents=My_parents::all(['id','Father_Name']);

         //return get_defined_vars();
        return view('backend.Students.create',get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {

         try{
            Student::create([
                'name'=>$request->student_name,
                'birth_date'=>$request->birth_date,
                'join_date'=>$request->join_date,
                'gender'=>$request->gender,
                'grade_id'=>$request->grade,
                'parent_id'=>$request->parents,
                'classroom_id'=>$request->class_room,
                'address'=>$request->address,
                'user_id'=>\Auth::Id(),
            ]);
            session()->flash('success',trans('general.success'));
             return redirect()->route('Students.index');
         }catch(\Exception $e){
             session()->flash('error', $e->getMessage());
             return redirect()->back()->withInput();
         }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try{
            $student = Student::where('id',$id)->with(['user','grade','classroom','parent'])->first();
            return view('backend.Students.show',get_defined_vars());
        }catch(\Exception $e){
            session()->flash('error',$e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try{
            $grades=Grade::all(['id','name']);
        $parents=My_parents::all(['id','Father_Name']);
            $student = Student::findorfail($id);
            return view('backend.Students.edit',get_defined_vars());
        }catch(\Exception $e){
            session()->flash('error',$e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request)
    {        try{
            $student->update([
                'name'=>$request->student_name,
                'birth_date'=>$request->birth_date,
                'join_date'=>$request->join_date,
                'gender'=>($request->gender =="" )?$student->gender:$request->gender,
                'grade_id'=>$request->grade,
                'parent_id'=>$request->parents,
                'classroom_id'=>($request->class_room =="" )?$student->classroom_id:$request->class_room,
                'address'=>$request->address,
                'national_id'=>$request->national_id,
                'user_id'=>\Auth::Id(),
            ]);
            session()->flash('success',trans('general.success'));
             return redirect()->route('Students.index');
         }catch(\Exception $e){
             session()->flash('error', $e->getMessage());
             return redirect()->back()->withInput();
         }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id,Request $request)
    {
        try{
            $student=Student::findorfail($id);
            $student->delete();
            return redirect()->back()->with('success',trans('general.success'));
        }catch(\Exception $e){
            session()->flash('error',$e->getMessage());
            return redirect()->back();
        }
    }


    public function getclasses($id){
        $class_rooms = class_room::where('grade_id',$id)->get(['id','name']);
        return response()->json($class_rooms);
    }
    public function pdf($id){
        $data['students'] = Grade::with(['students'])->withcount('students')->get();
      //  return $data['students'];
       $pdf = PDF::loadView('backend.Students.pdf' , ['data' => $data],[],[
        'format' => 'A4',
            'margin_left' => 4,
            'margin_right' => 4,
            'margin_top' => 4,
            'margin_bottom' => 4,
            'margin_header' => 0,
            'margin_footer' => 0,
            'orientation' => 'L',
       ]);
        // $pdf = PDF::loadView('backend.Students.pdf', ['students'=>$students]);
        return $pdf->stream(trans('student.info').'.pdf');

    }
}