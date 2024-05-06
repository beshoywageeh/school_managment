<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use Illuminate\Http\Request;
use App\Models\{Grade,My_parents,class_room, Student};
class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.Students.Index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $grades=Grade::all(['id','Grade_Name']);
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
            ]);     session()->flash('success',trans('general.success'));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


public function getclasses($id){
    $class_rooms = class_room::where('grade_id',$id)->get(['id','class_name']);
    return response()->json($class_rooms);
}

}