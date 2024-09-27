<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Traits\ImageTrait;
use App\Imports\WorkersImport;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use ImageTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = User::with('job')->get();

        return view('backend.employees.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jobs_main = Job::where('is_main', 1)->get();
        $years = range(date('Y'), date('Y') - 10);

        return view('backend.employees.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        \DB::beginTransaction();
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
            $user->type = $request->type;
            $user->job_id = $request->job_id;
            $user->email = $request->email;
            $user->isAdmin = $request->isAdmin ?? false;
            $user->login_allow = $request->login_allow ?? false;
            $user->password = $request->password ? bcrypt($request->password) : null;
            $user->insurance = $request->insurance ?? false;
            $user->insurance_number = $request->insurance_number;
            $user->insurance_date = $request->insurance_date ? $request->insurance_date : null;
            $user->national_id = $request->national_id;
            $user->save();
            $this->verifyAndStoreImage($request, 'file', 'employees'.'/'.$request->name, 'upload_attachments', $user->id, 'App\Model\Users', $request->name);
            \DB::commit();
            session()->flash('success', trans('General.success'));

            return redirect()->route('employees.index');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        try {

            $jobs_main = Job::where('is_main', 1)->get();
            $user = User::findOrFail($id);
            $years = range(date('Y'), date('Y') - 10);

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
        // return $request;
        try {
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
            $user->type = (is_int($request->type)) ? $request->type : $user->type;
            $user->job_id = (is_int($request->job_id)) ? $request->job_id : $user->job_id;
            $user->email = $request->email ?? $user->email;
            $user->isAdmin = $request->isAdmin ?? false;
            $user->login_allow = $request->login_allow ?? false;
            $user->password = $request->password ? bcrypt($request->password) : null;
            $user->insurance = $request->insurance ?? false;
            $user->insurance_number = $request->insurance_number;
            $user->insurance_date = $request->insurance_date ? $request->insurance_date : null;
            $user->national_id = $request->national_id;
            $user->save();
            session()->flash('success', trans('General.success'));

            return redirect()->route('employees.index');
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
        try {
            $user = User::findOrFail($id);
            $user->delete();
            session()->flash('success', trans('General.success'));

            return redirect()->route('employees.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back()->withInput();
        }
    }

    public function getjobs($id)
    {
        $jobs = Job::where('main_job_id', $id)->get(['id', 'name']);

        return response()->json($jobs);
    }

    public function Excel_Import(Request $request)
    {
        try {
            $path = $request->file('excel')->getRealPath();
            \Excel::import(new WorkersImport, $path);
            session()->flash('success', trans('general.success'));

            return redirect()->route('Students.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back()->withInput();
        }
    }
}
