<?php

namespace App\Http\Controllers;

use App\Http\Traits\systemLogTrait;
use App\Models\acadmice_year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AcadmiceYearController extends Controller
{
    use systemLogTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $acadmice_years = acadmice_year::with('creator', 'updator')->latest()->paginate(10);
        return view('backend.academic_year.index', get_defined_vars());
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {
            $validated = $request->validate([
                'year_end' => 'required|date|unique:acadmice_years,year_end',
            ]);
            $latest_year = acadmice_year::latest()->first();
            if ($latest_year->status == 0) {
                session()->flash('error', trans('general.active_year'));
                return redirect()->back();
            }
            acadmice_year::create([
                'year_start' => \Carbon\Carbon::parse($latest_year->year_end)->addDays(1),
                'year_end' => $request->year_end,
                'created_by' => Auth::id(),
                'status' => 0
            ]);
            $this->syslog('', 'acadmice_year', Auth::id(), ['year_start' => $latest_year->year_end, 'year_end' => $request->year_end], $request->ip());
            session()->flash('success', trans('general.success'));
            return redirect()->back();
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(acadmice_year $acadmice_year)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Request $request)
    {
        try {
            $before = acadmice_year::findorFail($id);
            $acadmice_year = acadmice_year::findorFail($id);
            $acadmice_year->status = ($acadmice_year->status == 0) ? 1 : 0;
            $acadmice_year->save();
            $this->syslog('', 'acadmice_year', Auth::id(), ['status-before' => $before->status, 'status-after' => $acadmice_year->status], $request->ip());
            session()->flash('success', trans('general.success'));
            return redirect()->back();
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

            $acadmice_year = acadmice_year::findorFail($id);
            $this->syslog('', 'App\Models\acadmice_year', \Auth::id(), [$acadmice_year], $request->ip());
            $acadmice_year->delete();
            session()->flash('success', trans('general_success'));
            return redirect()->back();
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            return redirect()->back();
        }
    }
}
