<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClassStoreRequest;
use App\Http\Requests\ClassUpdateRequest;
use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\ClassRoom;
use App\Models\ClassRoom2 as classes;
use App\Models\Student;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    use LogsActivity, SchoolTrait;

    public function __construct()
    {
        $this->middleware('permission:classes-list', ['only' => ['index', 'show']]);
        $this->middleware('permission:classes-create', ['only' => ['store']]);
        $this->middleware('permission:classes-update', ['only' => ['update']]);
        $this->middleware('permission:classes-delete', ['only' => ['destroy']]);
        $this->middleware('permission:classes-addstudent', ['only' => ['add_students', 'add_students_submit']]);
        $this->middleware('permission:classes-tammen', ['only' => ['tammen']]);
    }

    public function index()
    {
        $school = $this->getSchool();
        $class_rooms = ClassRoom::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))
            ->with(['grade:id,name'])
            ->get(['id', 'name', 'grade_id'])
            ->groupBy('grade.name');
        $classes = classes::with(['grade:id,name', 'class_room:id,name'])
            ->withCount('students')
            ->get(['id', 'title', 'class_room_id', 'grade_id', 'tameen']);

        // return $classes;
        return view('backend.classes.index', compact('school', 'class_rooms', 'classes'));
    }

    public function store(ClassStoreRequest $request)
    {
        try {
            $this->executeInTransaction(function () use ($request) {
                foreach ($request->classroom as $class) {
                    classes::create([
                        'title' => $class['class_name'],
                        'class_room_id' => $class['class_id'],
                        'grade_id' => ClassRoom::find($class['class_id'])
                            ->grade_id,
                        'school_id' => auth()->user()->school_id,
                        'user_id' => auth()->user()->id,
                    ]);

                    $this->logActivity(
                        trans('log.actions.added'),
                        trans('log.models.class.created', [
                            'class_name' => $class['class_name'],
                        ]),
                    );
                }
            });

            return redirect()
                ->route('classes.index')
                ->with('success', trans('general.success'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function add_students(Request $request)
    {
        // return $request->id;
        $school = $this->getSchool();
        $class = classes::with([
            'grade' => function ($q) {
                $q->select('id', 'name');
            },
            'class_room' => function ($q) {
                $q->select('id', 'name');
            },
        ])->findOrFail($request->id, ['id', 'title', 'grade_id', 'class_room_id']);
        $students = Student::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))
            ->where('grade_id', $class->grade_id)
            ->where('classroom_id', $class->class_room_id)
            ->get();

        // return $class;
        return view('backend.classes.add_students', compact('school', 'class', 'students'));
    }

    public function add_students_submit(Request $request)
    {
        try {
            Student::whereIn('id', $request->student_id)->update([
                'class_id' => $request->class_id,
            ]);
            $class = classes::findorfail($request->class_id)
                ->title;
            $this->logActivity(
                trans('log.actions.added'),
                trans('log.models.class.students_added', [
                    'class_name' => $class,
                ]),
            );

            return redirect()
                ->route('classes.index')
                ->with('success', trans('general.success'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function update(ClassUpdateRequest $request)
    {
        try {
            $class = classes::findorfail($request->id);
            $class->update([
                'title' => $request->class_name,
                'class_room_id' => $request->grade_name,
                'grade_id' => ClassRoom::find($request->grade_name)
                    ->grade_id,
                'tameen' => $class->tameen,
            ]);

            $this->logActivity(
                trans('log.actions.updated'),
                trans('log.models.class.updated', [
                    'class_name' => $request->title,
                ]),
            );

            return redirect()
                ->route('classes.index')
                ->with('success', trans('general.success'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function show($id)
    {
        $class = classes::where('id', $id)
            ->with(
                'grade:id,name',
                'class_room:id,name',
                'students:id,name,class_id,gender,religion',
            )
            ->first([
                'id',
                'title',
                'tameen',
                'class_room_id',
                'grade_id',
            ]);
        $school = $this->getSchool();
        if ($class->students->count() == 0) {
            return redirect()
                ->route('classes.index')
                ->with('info', trans('general.noDataToShow'));
        }

        return view('backend.classes.show', compact('class', 'school'));
    }

    public function tammen(classes $class)
    {
        $students = Student::where('class_id', $class->id)->update([
            'tameen' => 1,
        ]);
        // $class->update(['tameen'=>1]);
        $c = classes::findorfail($class->id)->first();
        $c->update(['tameen' => 1]);
        $this->logActivity(
            trans('log.actions.tameen_status_updated'),
            trans('log.models.class.tameen_status_updated', [
                'class_name' => $class->title,
            ]),
        );

        return redirect()
            ->route('classes.index')
            ->with('success', trans('general.success'));
    }

    public function destroy($id)
    {
        try {
            $class = classes::findorfail($id);
            $student = Student::where('class_id', $id)->count();
            if ($student > 0) {
                return redirect()
                    ->back()
                    ->with('info', trans('classes.cant_delete'));
            }
            $this->logActivity(
                trans('log.actions.deleted'),
                trans('log.models.class.deleted', [
                    'class_name' => $class->title,
                ]),
            );
            $class->delete();

            return redirect()
                ->route('classes.index')
                ->with('success', trans('general.success'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
