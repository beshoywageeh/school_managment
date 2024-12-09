<?php

namespace App\Http\Controllers;

use App\Models\class_room;
use App\Models\classes;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Traits\LogsActivity;

class ClassesController extends Controller
{
    use logsActivity;
    public function index()
    {
        $class_rooms = class_room::with(['grade:id,name'])->get(['id','name','grade_id'])->groupBy('grade.name');
        $classes= classes::with(['grade:id,name','class_room:id,name'])->get(['id','title','class_room_id','grade_id']);
        return view('backend.classes.index',get_defined_vars());
    }
    public function create(){

        return view('backend.classes.create');
    }
    public function store(Request $request){
        try{
            foreach ($request->list_classes as $class) {
                classes::create([
                    'title' => $class['class_name'],
                    'class_room_id' => $class['grade_name'],
                    'grade_id'=>class_room::find($class['grade_name'])->grade_id
                ]);
            }
            session()->flash('success', trans('general.success'));
            $this->logActivity('اضافة', trans('system_lookup.field_add', ['value' => $request->class_name]));

            return redirect()->route('classes.index')->with('success',trans('general.success'));
        }catch(\Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
    }
    public function add_students(classes $c){
        $class = $c->with('grade','class_room')->first();
        $students = Student::where('grade_id',$class->grade->id)->where('classroom_id',$class->class_room->id)->get(['id','name']);
        return view('backend.classes.add_students',get_defined_vars());
    }
    public function add_students_submit(Request $request){
        try{
            Student::whereIn('id',$request->student_id)->update(['class_id'=>$request->class_id]);
            $class =classes::findorfail($request->class_id)->first()->title;
            $this->logActivity('اضافة', ' تم إضافة طلاب للصف'.$class);
            return redirect()->route('classes.index')->with('success',trans('general.success'));
        }catch(\Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
    }
    public function destroy($id){
        try{
            $class = classes::findorfail($id);
            $student = Student::where('class_id',$id)->count();
            if($student > 0){
                return redirect()->back()->with('info',trans('classes.cant_delete'));
            }
            $this->logActivity('حذف', trans('system_lookup.field_delete', ['value' => $class->title]));
            $class->delete();
            return redirect()->route('classes.index')->with('success',trans('general.success'));
        }catch(\Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
    }
}