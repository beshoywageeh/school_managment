<?php

namespace App\Http\Controllers\ClassRooms;

use App\Http\Controllers\Controller;
use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\acadmice_year;
use App\Models\class_room;
use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;

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
            ->when(Auth::user()->hasRole('Admin'), fn ($q) => $q->orderBy('grade_id', 'asc'))
            ->when(! Auth::user()->hasRole('Admin'), fn ($q) => $q->paginate(10))
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
        try {
            foreach ($request->list_classes as $class) {
                class_room::create([
                    'name' => $class['class_name'],
                    'grade_id' => $class['grade_name'],
                    'user_id' => \Auth::Id(),
                    'school_id' => $this->getSchool()->id,
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
            $data['class_room'] = class_room::where('id', $id)->with(['grade:id,name', 'students'])->first();
            $current_year = \Carbon\Carbon::parse()->format('Y');
            $data['school'] = $this->getSchool();

            $data['acc_year'] = acadmice_year::whereYear('year_start', $current_year)->first();
            $pdf = PDF::loadView('backend.class_rooms.show', ['data' => $data], [], [
                'format' => 'A4',
                'default_font_size' => 10,
                'margin_left' => 2,
                'margin_right' => 2,
                'margin_top' => 25,
                'margin_bottom' => 10,
                'margin_header' => 2,
                'margin_footer' => 2,
                'orientation' => 'P',
            ]);

            return $pdf->stream($data['class_room']->grade->name.' - '.$data['class_room']->name.'.pdf');

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
            $this->logActivity('تعديل', trans('system_lookup.change', ['value' => $request->class_name]));

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
            $class = class_room::where('id', $id)->with('students')->first();
            if ($class->students->isEmpty()) {
                return redirect()->back()->with('info', trans('General.no_students'));
            }
            $class->students->toQuery()->update(['tameen' => 1]);
            $class->update(['tameen' => 1]);
            $this->logActivity('تعديل', trans('system_lookup.tammen_on_class', ['class' => $class->name]));
            \DB::commit();

            return redirect()->back()->with('success', trans('General.success'));
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
            $class_room = class_room::where('id', $id)->withcount('students')->first();
            if ($class_room->students_count == 0) {
                $class_room->delete();

                return redirect()->back()->with('success', trans('general.success'));
            }
            $this->logActivity('حذف', trans('system_lookup.field_delete', ['value' => $class_room->class_name]));

            return redirect()->back()->with('error', trans('class_rooms.cannot_deleted'));
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back()->withInput();
        }
    }
}
