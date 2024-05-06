<?php

namespace App\Http\Controllers\Grades;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use Illuminate\Http\Request;

class GradesController extends Controller
{
    public function index()
    {
        $data['grades'] = Grade::with('user')->withCount(['class_room', 'students'])->withSum('fees', 'amount')->paginate(10);

        return view('backend.Grades.index', ['data' => $data]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'Grade_Name' => ['required', 'string', 'max:255'],
            ]);
            Grade::create([
                'Grade_Name' => $request->Grade_Name,
                'user_id' => \Auth::Id(),
            ]);
            session()->flash('success', trans('general.success'));

            return redirect()->back();
        } catch (\Exception $e) {
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

        return $pdf->stream($report_data->Grade_Name.'.pdf');
        //  return view('backend.grades.report', compact('report_data'));
    }

    public function edit(string $id)
    {
        return $id;
    }

    public function update(Request $request)
    {
        try {
            $request->validate([
                'Grade_Name' => ['required', 'string', 'max:255'],
            ]);
            $grade = Grade::where('id', $request->id)->first();
            $grade->update([
                'Grade_Name' => $request->Grade_Name,
            ]);
            session()->flash('success', trans('general.success'));

            return redirect()->back();
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back()->withInput();
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $grade = Grade::where('id', $id)->withcount('class_room')->first();
        if ($grade->class_room_count == 0) {

            $grade->delete();

            return redirect()->back()->with('success', trans('general.success'));
        }

        return redirect()->back()->with('error', trans('grade.cannot_deleted'));
    }
}
