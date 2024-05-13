<?php

namespace App\Http\Controllers\Grades;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use Illuminate\Http\Request;
use App\Http\Traits\systemLogTrait;
class GradesController extends Controller
{
    use systemLogTrait;
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
            $grade = Grade::create([
                'name' => $request->Grade_Name,
                'user_id' => \Auth::Id(),
            ]);
            $this->syslog('create','App\Models\Grades',\Auth::Id(),$grade,$request->ip());
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
            $this->syslog('update','App\Models\Grades',\Auth::Id(),['id'=>$grade->id,'old_name'=>$grade->name,'new_name'=>$request->Grade_Name],$request->ip());
            $grade->update([
                'name' => $request->Grade_Name,
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
    public function destroy(string $id,Request $request)
    {

        $grade = Grade::where('id', $id)->withcount('class_room')->first();
        if ($grade->class_room_count == 0) {
            $this->syslog('delete','App\Models\Grades',\Auth::Id(),['id'=>$grade->id,'name'=>$grade->name],$request->ip());
            $grade->delete();

            return redirect()->back()->with('success', trans('general.success'));
        }

        return redirect()->back()->with('error', trans('grade.cannot_deleted'));
    }
}