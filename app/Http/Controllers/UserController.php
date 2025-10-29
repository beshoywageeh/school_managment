<?php

namespace App\Http\Controllers;

use App\Http\Traits\ImageTrait;
use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Imports\WorkersImport;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Excel as ExcelExcel;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    use ImageTrait, LogsActivity, SchoolTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $school = $this->getSchool();

        // $jobs=job::all()->groupBy('type');
        // return $jobs;
        return view('backend.employees.Index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $years = range(date('Y'), date('Y') - 50);
        $school = $this->getSchool();

        return view('backend.employees.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $generate_code = User::orderBy('code', 'desc')->first();
            $user = new User;
            $user->name = $request->name;
            $user->code = isset($generate_code) ? str_pad($generate_code->code + 1, 6, '0', STR_PAD_LEFT) : '000001';
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->date_of_birth = $request->birth_date;
            $user->date_of_hiring = $request->date_of_hiring;
            $user->learning = $request->learning;
            $user->reiligon = $request->religion;
            $user->gender = $request->gender;
            $user->grade_year = $request->grade_year;
            $user->type = $request->worker_type;
            $user->job_id = $request->job_id;
            $user->email = $request->email;
            $user->isAdmin = $request->isAdmin ?? false;
            $user->login_allow = $request->login_allow ?? false;
            $user->password = $request->password ? bcrypt($request->password) : null;
            $user->insurance = $request->insurance ?? false;
            $user->insurance_number = $request->insurance_number;
            $user->insurance_date = $request->insurance_date ? $request->insurance_date : null;
            $user->national_id = $request->national_id;
            $user->email = \Str::slug($request->name).'@ischool.com';
            $user->school_id = $this->getSchool()->id;
            $user->user_id = auth()->id();
            $user->lesson_count = $request->lesson_count;
            $user->sepicality = $request->sepicality;
            $user->national_id_expire_date = $request->national_id_expire_date;
            $user->contract_start_date = $request->contract_start_date;
            $user->notes = $request->notes;
            $user->ministry_code = $request->ministry_code;
            $user->save();
            $this->verifyAndStoreImage($request, 'file', 'employees'.'/'.$request->name, 'upload_attachments', $user->id, 'App\Model\Users', $request->name);
            $this->logActivity(trans('log.parents.added_action'), trans('log.user.added', ['name' => $request->name]));
            DB::commit();
            session()->flash('success', trans('general.success'));

            return redirect()->route('employees.index');
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
        $user = User::findorFail($id);
        $school = $this->getSchool();

        return view('backend.employees.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {

            $user = User::findOrFail($id);
            $years = range(date('Y'), date('Y') - 10);
            $school = $this->getSchool();

            return view('backend.employees.edit', get_defined_vars());
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back()->withInput();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
            DB::beginTransaction();
            $user = User::findOrFail($request->id);
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->date_of_birth = $request->birth_date;
            $user->date_of_hiring = $request->date_of_hiring;
            $user->learning = $request->learning;
            $user->reiligon = $request->religion;
            $user->gender = $request->gender;
            $user->grade_year = $request->grade_year;
            $user->type = (is_int($request->worker_type)) ? $request->worker_type : $user->type;
            $user->job_id = (is_int($request->job_id)) ? $request->job_id : $user->job_id;
            $user->email = $request->email ?? $user->email;
            $user->isAdmin = $request->isAdmin ?? false;
            $user->login_allow = $request->login_allow ?? false;
            $user->password = $request->password ? bcrypt($request->password) : null;
            $user->insurance = $request->insurance ?? false;
            $user->insurance_number = $request->insurance_number;
            $user->insurance_date = $request->insurance_date ? $request->insurance_date : null;
            $user->national_id = $request->national_id;
            $user->sepicality = $request->sepicality;
            $user->national_id_expire_date = $request->national_id_expire_date;
            $user->contract_start_date = $request->contract_start_date;
            $user->notes = $request->notes;
            $user->ministry_code = $request->ministry_code;
            $user->save();
            $this->verifyAndStoreImage($request, 'file', 'employees'.'/'.$request->name, 'upload_attachments', $user->id, 'App\Model\Users', $request->name);
            $this->logActivity(trans('log.parents.updated_action'), trans('log.user.updated', ['name' => $request->name]));
            DB::commit();
            session()->flash('success', trans('general.success'));

            return redirect()->route('employees.index');
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', $e->getMessage());

            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $user = User::findOrFail($id);
            $this->logActivity(trans('log.parents.deleted_action'), trans('log.user.deleted', ['name' => $user->name]));
            $user->delete();
            session()->flash('success', trans('general.success'));

            return redirect()->route('employees.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back()->withInput();
        }
    }

    public function return_emp($id)
    {

        $emp = User::where('id', $id)->restore();
        $this->logActivity(trans('log.user.restored_action'), trans('log.user.restored', ['name' => $emp->name]));
        session()->flash('success', trans('general.success'));

        return redirect()->route('employees.index');
    }

    public function return_list()
    {
        $employees = User::onlyTrashed()->get();
        $school = $this->getSchool();

        return view('backend.employees.resign', get_defined_vars());
    }

    public function getjobs($id)
    {
        $school = $this->getSchool();
        $jobs = Job::where('school_id', $school->id)->where('type', $id)->get(['id', 'name']);

        return response()->json($jobs);
    }

    public function Excel_Import(Request $request)
    {
        try {
            $path = $request->file('excel')->getRealPath();
            // Excel::import(new WorkersImport, $path);
            Excel::import(new WorkersImport, $request->file('excel'), null, ExcelExcel::XLSX);
            session()->flash('success', trans('general.success'));

            return redirect()->route('Students.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            \Log::error($e->getMessage());

            return redirect()->back()->withInput();
        }
    }
}
