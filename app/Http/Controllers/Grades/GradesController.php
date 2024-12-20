<?php

namespace App\Http\Controllers\Grades;

use App\Http\Controllers\Controller;
use App\Http\Traits\LogsActivity;
use App\Models\Grade;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;

class GradesController extends Controller
{
    use LogsActivity;

    public function index()
    {
        $id = \Auth::id();
        if (Auth::user()->hasRole('Admin')) {
            $data['grades'] = Grade::with('user')->withCount(['class_rooms', 'students'])->withSum('fees', 'amount')->paginate(10);
        } else {
            $grade = DB::Table('teacher_grade')->where('teacher_id', $id)->pluck('grade_id');
            $data['grades'] = Grade::whereIn('id', $grade)->with('user')->withCount(['class_rooms', 'students'])->paginate(10);
        }

        $data['users'] = User::get();

        return view('backend.Grades.index', ['data' => $data]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // return $request;
        DB::beginTransaction();
        try {
            $request->validate([
                'Grade_Name' => ['required', 'string', 'max:255'],
            ]);
            $grade = Grade::create([
                'name' => $request->Grade_Name,
                'user_id' => \Auth::Id(),
            ]);
            $grade->users()->attach($request->user_id);
            $this->logActivity('اضافة', trans('system_lookup.field_add', ['value' => $request->Grade_Name]));
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
            $report_data = Grade::where('id', $id)->with(['class_room', 'class_room.students'])->withCount(['class_room', 'students'])->first();

            // $pdf = PDF::loadView('backend.Grades.report', ['data' => $report_data], [], [
            //     'format' => 'A4',
            //     'default_font_size' => 10,
            //     'margin_left' => 2,
            //     'margin_right' => 2,
            //     'margin_top' => 25,
            //     'margin_bottom' => 10,
            //     'margin_header' => 2,
            //     'margin_footer' => 2,
            //     'orientation' => 'P',
            // ]);

            // return $pdf->stream($report_data->name.'.pdf');
            return view('backend.Grades.report', ['data' => $report_data]);
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
            $this->logActivity('تعديل', trans('system_lookup.field_add', ['value' => $request->Grade_name]));
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
            $this->logActivity('حذف', trans('system_lookup.field_delete', ['value' => $grade->class_name]));

            return redirect()->back()->with('success', trans('general.success'));
        }

        return redirect()->back()->with('error', trans('Grades.cannot_deleted'));
    }
}
