<?php

namespace App\Http\Controllers\Grades;

use App\Http\Controllers\Controller;
use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\Grade;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;

class GradesController extends Controller
{
    use LogsActivity, SchoolTrait;

    public function index()
    {
        $school = $this->getSchool();
        $gradesQuery = Grade::where('school_id', $school->id)
            ->with('user')
            ->withCount(['class_rooms', 'students']);

        if (Auth::user()->hasRole('Admin')) {
            $gradesQuery->withSum('fees', 'amount');
        } else {
            $gradesQuery->whereIn('id', DB::table('teacher_grade')
                ->where('teacher_id', Auth::id())
                ->pluck('grade_id'));
        }

        $data = [
            'grades' => $gradesQuery->paginate(10),
            'users' => User::select('id', 'name')->get(),
        ];

        return view('backend.Grades.Index', get_defined_vars());
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $request->validate([
                'Grade_Name' => ['required', 'string', 'max:255'],
            ]);
            $grade = Grade::create([
                'name' => $request->Grade_Name,
                'user_id' => \Auth::Id(),
                'school_id' => $this->getSchool()->id,
            ]);
            $grade->users()->attach($request->user_id, ['school_id' => $this->getSchool()->id]);
            $this->logActivity(trans('log.parents.added_action'), trans('system_lookup.field_add', ['value' => $request->Grade_Name]));
            DB::commit();
            session()->flash('success', trans('general.success'));

            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollBack();
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
            $data['school'] = $this->getSchool();
            $data['report_data'] = Grade::where('id', $id)->with(['class_rooms', 'class_rooms.students'])->withCount(['class_rooms', 'students'])->first();

            $pdf = PDF::loadView('backend.Grades.report', ['data' => $data], [], [
                'format' => 'A4',
                'default_font_size' => 10,
                'margin_left' => 2,
                'margin_right' => 2,
                'margin_top' => 2,
                'margin_bottom' => 2,
                'margin_header' => 2,
                'margin_footer' => 2,
                'orientation' => 'P',
            ]);

            return $pdf->stream($data['report_data']->name.'.pdf');

        } catch (\Exception $e) {
            \Log::error('PDF Generation failed: '.$e->getMessage());

            return back()->with('error', 'Failed to generate PDF. Please try again later.');
        }
    }

    public function edit(string $id) {}

    public function update(Request $request)
    {
        DB::beginTransaction();
        try {
            $request->validate([
                'Grade_Name' => ['required', 'string', 'max:255'],
            ]);
            $grade = Grade::where('id', $request->id)->first();
            $grade->update([
                'name' => $request->Grade_Name,
            ]);
            if (isset($request->user_id)) {
                $grade->users()->sync($request->user_id);
            } else {
                $grade->users()->sync([]);
            }
            $this->logActivity(trans('log.parents.updated_action'), trans('system_lookup.field_change', ['value' => $request->Grade_Name]));
            DB::commit();
            session()->flash('success', trans('general.success'));

            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', $e->getMessage());

            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {

        $grade = Grade::where('id', $id)->withcount('class_room')->first();
        if ($grade->class_room_count == 0) {
            $grade->delete();
            $this->logActivity(trans('log.parents.deleted_action'), trans('system_lookup.field_delete', ['value' => $grade->name]));

            return redirect()->back()->with('success', trans('general.success'));
        }

        return redirect()->back()->with('error', trans('Grades.cannot_deleted'));
    }
}
