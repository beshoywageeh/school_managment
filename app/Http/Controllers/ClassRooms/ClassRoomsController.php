<?php

namespace App\Http\Controllers\ClassRooms;

use App\Http\Controllers\Controller;
use App\Http\Traits\LogsActivity;
use App\Models\class_room;
use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClassRoomsController extends Controller
{
    use LogsActivity;

    public function index()
    {
        $id = \Auth::id();
        if (Auth::user()->hasRole('Admin')) {
            $data['class_rooms'] = class_room::with(['user', 'grade'])->withCount('students')->orderBy('grade_id', 'asc')->get();
        } else {
            $grade = DB::Table('teacher_grade')->where('teacher_id', $id)->pluck('grade_id');
            $data['class_rooms'] = class_room::whereIn('grade_id', $grade)->with('user')->withCount(['students'])->paginate(10);
        }

        $data['grades'] = Grade::get();

        return view('backend.class_rooms.index', ['data' => $data]);
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
        try {
            foreach ($request->list_classes as $class) {
                class_room::create([
                    'name' => $class['class_name'],
                    'grade_id' => $class['grade_name'],
                    'user_id' => \Auth::Id(),
                ]);
            }
            session()->flash('success', trans('general.success'));
            $this->logActivity('اضافة', trans('system_lookup.field_add', ['value' => $request->class_name]));

            return redirect()->back();
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
            $data['class_room'] = class_room::where('id', $id)->with(['user', 'grade', 'students'])->first();

            // return $data;
            return view('backend.class_rooms.show', ['data' => $data]);
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back()->withInput();
        }
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
    public function update(Request $request)
    {
        try {
            $class_room = class_room::find($request->id);
            $class_room->name = $request->class_name;
            $class_room->grade_id = $request->grade_name;
            $class_room->save();
            session()->flash('success', trans('general.success'));
            $this->logActivity('تعديل', trans('system_lookup.change', ['value' => $request->class_name]));

            return redirect()->route('class_rooms.index');
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
            $class_room = class_room::where('id', $id)->withcount('students')->first();
            if ($class_room->students_count == 0) {
                $class_room->delete();

                return redirect()->back()->with('success', trans('general.success'));
            }
            $this->logActivity('حذف', trans('system_lookup.field_delete', ['value' => $class_room->class_name]));

            return redirect()->back()->with('error', trans('grade.cannot_deleted'));
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back()->withInput();
        }
    }
}
