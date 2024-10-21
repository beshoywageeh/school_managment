<?php

namespace App\Http\Controllers;

use App\Models\acadmice_year;
use App\Models\My_parents;
use App\Models\Student;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AcadmiceYearController extends Controller
{
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
            $year_start = date('Y-m-d', strtotime($request->year_start));
            $year_end = date('Y-m-d', strtotime($request->year_end));
            $view = Carbon::parse($year_start)->format('Y') . ' - ' . Carbon::parse($year_end)->format('Y');
            acadmice_year::create([
                'year_start' => $year_start,
                'year_end' => $year_end,
                'view' => $view,
                'created_by' => Auth::id(),
                'status' => ($request->status) ? 0 : 1,

            ]);
            $this->logActivity('اضافة', trans('system_lookup.field_add', ['value' => $request->view]));
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
    public function show($id)
    {
        $acc_year = acadmice_year::findorFail($id);
        $start_year = Carbon::parse($acc_year->year_start);
        $end_year = Carbon::parse($acc_year->year_end);
        $students = Student::whereBetween('created_at', [$start_year, $end_year])->get();
        $parents = My_parents::whereBetween('created_at', [$start_year, $end_year])->get();
        $users = User::whereBetween('created_at', [$start_year, $end_year])->get();
        return $users;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update(Request $request)
    {
        //   return $request;
        try {
            $acadmice_year = acadmice_year::findorFail($request->id);
            $year_start = date('Y-m-d', strtotime($acadmice_year->year_start));
            $year_end = date('Y-m-d', strtotime($request->year_end));
            $view = Carbon::parse($year_start)->format('Y') . ' - ' . Carbon::parse($year_end)->format('Y');
            $acadmice_year->year_end = $year_end;
            $acadmice_year->updated_by = Auth::id();
            $acadmice_year->view =  $view;
            $acadmice_year->status = ($request->status) ? 0 : 1;
            $acadmice_year->save();
            session()->flash('success', trans('general.success'));
            $this->logActivity('تعديل', trans('system_lookup.field_change', ['value' => $request->view]));
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
            $acadmice_year->delete();
            session()->flash('success', trans('general.success'));
            $this->logActivity('حذف', trans('system_lookup.field_delete', ['value' => $acadmice_year->view]));
            return redirect()->back();
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }
}