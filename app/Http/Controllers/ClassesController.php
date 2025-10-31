<?php

namespace App\Http\Controllers;

use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\class_room;
use App\Models\classes;
use App\Models\Student;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    use logsActivity,SchoolTrait;

    public function index()
    {
        $school = $this->getSchool();
        $class_rooms = class_room::where('school_id', $school->id)->with(['grade:id,name'])->get(['id', 'name', 'grade_id'])->groupBy('grade.name');
        $classes = classes::with(['grade:id,name', 'class_room:id,name'])->withCount('students')->get(['id', 'title', 'class_room_id', 'grade_id', 'tameen']);

        return view('backend.classes.index', get_defined_vars());
    }

    public function create()
    {
        $school = $this->getSchool();

        return view('backend.classes.create', get_defined_vars());
    }

    public function store(Request $request)
    {
        try {
            $school = $this->getSchool();
            foreach ($request->list_classes as $class) {
                classes::create([
                    'title' => $class['class_name'],
                    'class_room_id' => $class['grade_name'],
                    'grade_id' => class_room::find($class['grade_name'])->grade_id,
                    'school_id' => $school->id,
                    'user_id' => auth()->user()->id,
                ]);
            }
            session()->flash('success', trans('general.success'));
            $this->logActivity(trans('log.actions.added'), trans('log.models.class.created', ['class_name' => $request->class_name]));

            return redirect()->route('classes.index')->with('success', trans('general.success'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function add_students(classes $c)
    {
        $class = $c->with('grade', 'class_room')->first();
        $students = Student::where('grade_id', $class->grade->id)->where('classroom_id', $class->class_room->id)->get(['id', 'name']);

        return view('backend.classes.add_students', get_defined_vars());
    }

    public function add_students_submit(Request $request)
    {
        try {
            Student::whereIn('id', $request->student_id)->update(['class_id' => $request->class_id]);
            $class = classes::findorfail($request->class_id)->first()->title;
            $this->logActivity(trans('log.actions.added'), trans('log.models.class.students_added', ['class_name' => $class]));

            return redirect()->route('classes.index')->with('success', trans('general.success'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function update(Request $request)
    {
        try {
            $class = classes::findorfail($request->id);
            $class->update([
                'title' => $request->class_name,
                'class_room_id' => $request->grade_name,
                'grade_id' => class_room::find($request->grade_name)->grade_id,
                'tameen' => 0,
            ]);
            $students = Student::where('class_id', $request->id)->update(['class_id' => null]);
            $this->logActivity(trans('log.actions.updated'), trans('log.models.class.updated', ['class_name' => $request->title]));

            return redirect()->route('classes.index')->with('success', trans('general.success'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function show($id)
    {
        $class = classes::where('id', $id)->with('grade:id,name', 'class_room:id,name', 'students:id,name,class_id,gender,religion')->first(['id', 'title', 'tameen', 'class_room_id', 'grade_id']);
        $school = $this->getSchool();
        if ($class->students->count() == 0) {
            return redirect()->route('classes.index')->with('info', trans('general.noDataToShow'));
        }

        return view('backend.classes.show', get_defined_vars());
    }

    public function tammen(classes $class)
    {
        $students = student::where('class_id', $class->id)->update(['tameen' => 1]);
        // $class->update(['tameen'=>1]);
        $c = classes::findorfail($class->id)->first();
        $c->update(['tameen' => 1]);
        $this->logActivity(trans('log.actions.tameen_status_updated'), trans('log.models.class.tameen_status_updated', ['class_name' => $class->title]));

        return redirect()->route('classes.index')->with('success', trans('general.success'));
    }

    public function destroy($id)
    {
        try {
            $class = classes::findorfail($id);
            $student = Student::where('class_id', $id)->count();
            if ($student > 0) {
                return redirect()->back()->with('info', trans('classes.cant_delete'));
            }
            $this->logActivity(trans('log.actions.deleted'), trans('log.models.class.deleted', ['class_name' => $class->title]));
            $class->delete();

            return redirect()->route('classes.index')->with('success', trans('general.success'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
