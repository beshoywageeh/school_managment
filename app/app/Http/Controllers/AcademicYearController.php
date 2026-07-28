<?php

namespace App\Http\Controllers;

use App\Http\Requests\AcadmiceYearStoreRequest;
use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\AcademicYear;
use App\Models\MyParent;
use App\Models\Student;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AcademicYearController extends Controller
{
    use LogsActivity;
    use SchoolTrait;

    public function __construct()
    {
        $this->middleware('permission:academic_year-list', ['only' => ['index', 'show']]);
        $this->middleware('permission:academic_year-create', ['only' => ['store']]);
        $this->middleware('permission:academic_year-edit', ['only' => ['update']]);
        $this->middleware('permission:academic_year-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $school = $this->getSchool();
        $acadmice_years = AcademicYear::where('school_id', $school->id)->paginate(config('school.per_page'));

        return view('backend.academic_year.index', compact('school', 'acadmice_years'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AcadmiceYearStoreRequest $request)
    {

        try {
            $year_start = date('Y-m-d', strtotime($request->year_start));
            $year_end = date('Y-m-d', strtotime($request->year_end));
            $view = Carbon::parse($year_start)->format('Y').' - '.Carbon::parse($year_end)->format('Y');
            AcademicYear::create([
                'year_start' => $year_start,
                'year_end' => $year_end,
                'view' => $view,
                'created_by' => Auth::id(),
                'status' => ($request->status) ? 1 : 0,
                'school_id' => $this->getSchool()->id,

            ]);
            $this->logActivity(trans('log.actions.added'), trans('log.models.academic_year.created', ['view' => $request->view]));
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
        $acc_year = AcademicYear::findorFail($id);
        $date_range = [
            Carbon::parse($acc_year->year_start),
            Carbon::parse($acc_year->year_end),
        ];
        $school = $this->getSchool();
        $users = collect([])
            ->merge(Student::where('acadmiecyear_id', $acc_year->id)->with(['grade', 'classroom'])->get())
            ->merge(MyParent::whereBetween('created_at', $date_range)->with('user')->get())
            ->merge(User::whereBetween('created_at', $date_range)->with('job')->get());

        return $users;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update(Request $request)
    {
        //   return $request;
        try {
            $acadmice_year = AcademicYear::findorFail($request->id);
            $year_start = date('Y-m-d', strtotime($acadmice_year->year_start));
            $year_end = date('Y-m-d', strtotime($request->year_end));
            $view = Carbon::parse($year_start)->format('Y').' - '.Carbon::parse($year_end)->format('Y');
            $acadmice_year->year_end = $year_end;
            $acadmice_year->updated_by = Auth::id();
            $acadmice_year->view = $view;
            $acadmice_year->status = ($request->status) ? 1 : 0;
            $acadmice_year->save();
            session()->flash('success', trans('general.success'));
            $this->logActivity(trans('log.actions.updated'), trans('log.models.academic_year.updated', ['view' => $request->view]));

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

            $acadmice_year = AcademicYear::findorFail($id);
            $acadmice_year->delete();
            session()->flash('success', trans('general.success'));
            $this->logActivity(trans('log.actions.deleted'), trans('log.models.academic_year.deleted', ['view' => $acadmice_year->view]));

            return redirect()->back();
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }
}
