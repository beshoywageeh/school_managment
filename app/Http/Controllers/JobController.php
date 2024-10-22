<?php

namespace App\Http\Controllers;

use App\Http\Traits\LogsActivity;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    use LogsActivity;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::with('jobs')->get();
        $jobs_main = Job::where('is_main', 1)->get();

        return view('backend.Job.index', get_defined_vars());
    }

    public function store(Request $request)
    {

        try {
            Job::create([
                'name' => $request->job_name,
                'status' => ($request->status == 'on') ? 0 : 1,
                'is_main' => ($request->is_main == 'on') ? 1 : 0,
                'main_job_id' => ($request->is_main == 'on') ? null : $request->type,
                'created_by' => \Auth::id(),
            ]);
            $this->logActivity('إضافة', 'تم اضافة وظيفة جديدة'.$request->job_name);
            session()->flash('success', trans('general.success'));

            return redirect()->route('jobs.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $jobs = Job::where('main_job_id', $id)->get();

        return response()->json($jobs);
    }

    public function edit($id) {}

    public function update(Request $request)
    {
        //   return $request;

        try {
            $Job = Job::findOrFail($request->id);

            $Job->update([
                'name' => $request->job_name,
                'main_job_id' => $request->type || $Job->main_job_id,
            ]);
            $this->logActivity('تعديل', 'تم تعديل وظيفة '.$request->job_name);
            session()->flash('success', trans('general.success'));

            return redirect()->route('jobs.index');
        } catch (\Exception $e) {

            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, Request $request)
    {
        try {

            $Job = Job::findorFail($id);
            $this->logActivity('حذف', 'تم حذف وظيفة '.$Job->name);
            $Job->delete();

            return redirect()->back();
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }
}
