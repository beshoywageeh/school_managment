<?php

namespace App\Http\Controllers\Grades;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GradesController extends Controller
{
    public function index()
    {
        $id = \Auth::id();
        if (Auth::user()->hasRole('Admin')) {
            $data['grades'] = Grade::with('user')->withCount(['class_room', 'students'])->paginate(10);
        } else {
            $grade = DB::Table('teacher_grade')->where('teacher_id', $id)->pluck('grade_id');
            $data['grades'] = Grade::whereIn('id', $grade)->with('user')->withCount(['class_room', 'students'])->paginate(10);
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
        \DB::beginTransaction();
        try {
            $request->validate([
                'Grade_Name' => ['required', 'string', 'max:255'],
            ]);
            $grade = Grade::create([
                'name' => $request->Grade_Name,
                'user_id' => \Auth::Id(),
            ]);
            $grade->users()->attach($request->user_id);
            \DB::commit();
            session()->flash('success', trans('general.success'));

            return redirect()->back();
        } catch (\Exception $e) {
            \DB::rollBack();
            session()->flash('error', $e->getMessage());

            return redirect()->back()->withInput();
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $report_data = Grade::where('id', $id)->with(['class_room', 'class_room.students'])->withCount(['class_room', 'students'])->first();
        //    return $data;
        $pdf = \PDF::loadView('backend.grades.report', ['report_data' => $report_data]);

        return $pdf->stream($report_data->Grade_Name . '.pdf');
        //  return view('backend.grades.report', compact('report_data'));
    }

    public function edit(string $id)
    {
        return $id;
    }

    public function update(Request $request)
    {
        \DB::beginTransaction();
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
                $grade->users()->sync(array());
            }
            \DB::commit();
            session()->flash('success', trans('general.success'));

            return redirect()->back();
        } catch (\Exception $e) {
            \DB::rollBack();
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

            return redirect()->back()->with('success', trans('general.success'));
        }

        return redirect()->back()->with('error', trans('grade.cannot_deleted'));
    }
}
