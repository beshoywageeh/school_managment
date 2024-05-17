<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::paginate(10);
        $create = true;
        return view('backend.Job.index', get_defined_vars());
    }

    public function store(Request $request)
    {
        try {
            Job::create([
                'title' => $request->job_name,
                'status' => ($request->status == 'on') ? 0 : 1,
                'created_by' => \Auth::id()
            ]);
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
    public function show(Job $job)
    {
        //
    }
    public function edit($id)
    {
        $create = false;
        $job = Job::findorFail($id);
        $jobs = Job::paginate(10);
        return view('backend.Job.index', get_defined_vars());
    }
    public function update(Request $request, Job $job)
    {
        try {
            $Job = Job::findorFail($request->id);
            $Job->update([
                'title' => $request->job_name,
                'status' => ($request->status == 'on') ? 0 : 1,
                'updated_by' => \Auth::id()
            ]);
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
            $this->syslog('', 'Job', \Auth::id(), [$Job], $request->ip());
            $Job->delete();
            return redirect()->back();
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            return redirect()->back();
        }
    }
}
