<?php

namespace App\Http\Controllers\ClassRooms;

use App\Http\Controllers\Controller;
use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\AcademicYear;
use App\Models\class_room;
use App\Models\Grade;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClassRoomsController extends Controller
{
    use LogsActivity, SchoolTrait;

    public function index()
    {
        $id = \Auth::id();
        $school = $this->getSchool();
        $query = class_room::where('school_id', $school->id)
            ->with(['user', 'grade'])
            ->withCount('students');

        if (! Auth::user()->hasRole('Admin')) {
            $grade_ids = DB::table('teacher_grade')
                ->where('teacher_id', $id)
                ->pluck('grade_id');
            $query->whereIn('grade_id', $grade_ids);
        }

        $data['class_rooms'] = $query
            ->when(
                Auth::user()->hasRole('Admin'),
                fn ($q) => $q->orderBy('grade_id', 'asc'),
            )
            ->when(
                ! Auth::user()->hasRole('Admin'),
                fn ($q) => $q->paginate(10),
            )
            ->when(Auth::user()->hasRole('Admin'), fn ($q) => $q->get());

        $data['grades'] = Grade::get();

        return view('backend.class_rooms.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->classroom;
        try {
            foreach ($request->classroom as $class) {
                class_room::create([
                    'name' => $class['class_name'],
                    'grade_id' => $class['grade_id'],
                    'user_id' => \Auth::Id(),
                    'school_id' => $this->getSchool()->id,
                ]);
                $this->logActivity(
                    trans('log.actions.added'),
                    trans('log.models.classroom.created', [
                        'class_name' => $class['class_name'],
                    ]),
                );
            }

            return redirect()
                ->back()
                ->with('success', trans('general.success'));
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back()->withInput();
            //  session()->flash('error',$e);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $data['class_room'] = class_room::where('id', $id)
                ->with(['grade:id,name', 'students'])
                ->first();
            $current_year = Carbon::parse()->format('Y');
            $data['school'] = $this->getSchool();

            $data['acc_year'] = AcademicYear::whereYear(
                'year_start',
                $current_year,
            )->first();

            return view('backend.class_rooms.show', [
                'data' => $data,
                'school' => $data['school'],
            ]);
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back()->withInput();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
            $class_room = class_room::find($request->id);
            $class_room->name = $request->class_name;
            $class_room->grade_id = $request->grade_name;
            $class_room->save();
            session()->flash('success', trans('general.success'));
            $this->logActivity(
                trans('log.actions.updated'),
                trans('log.models.classroom.updated', [
                    'class_name' => $request->class_name,
                ]),
            );

            return redirect()->route('class_rooms.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back()->withInput();
        }
    }

    public function tammen($id)
    {
        try {
            \DB::beginTransaction();
            $class = class_room::where('id', $id)
                ->with('students')
                ->first();
            if ($class->students->isEmpty()) {
                return redirect()
                    ->back()
                    ->with('info', trans('general.no_students'));
            }
            $class->students->toQuery()->update(['tameen' => 1]);
            $class->update(['tameen' => 1]);
            $this->logActivity(
                trans('log.actions.updated'),
                trans('log.models.classroom.tameen_on_class', [
                    'class' => $class->name,
                ]),
            );
            \DB::commit();

            return redirect()
                ->back()
                ->with('success', trans('general.success'));
        } catch (\Exception $e) {
            \DB::rollback();

            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {
        try {
            $class_room = class_room::where('id', $id)
                ->withcount('students')
                ->first();
            if ($class_room->students_count == 0) {
                $class_room->delete();

                return redirect()
                    ->back()
                    ->with('success', trans('general.success'));
            }
            $this->logActivity(
                trans('log.actions.deleted'),
                trans('log.models.classroom.deleted', [
                    'class_name' => $class_room->name,
                ]),
            );

            return redirect()
                ->back()
                ->with('error', trans('class_rooms.cannot_deleted'));
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back()->withInput();
        }
    }
}
