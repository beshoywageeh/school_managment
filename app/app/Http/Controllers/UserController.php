<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Traits\ImageTrait;
use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Imports\WorkersImport;
use App\Models\Job;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel as ExcelExcel;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    use ImageTrait, LogsActivity, SchoolTrait;

    public function __construct(
        protected UserService $userService,
    ) {
        $this->middleware('permission:employees-list', ['only' => ['index', 'show', 'getjobs']]);
        $this->middleware('permission:employees-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:employees-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:employees-delete', ['only' => ['destroy', 'return_emp', 'return_list']]);
        $this->middleware('permission:employees-import_Excel', ['only' => ['Excel_Import']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $school = $this->getSchool();

        // $jobs=job::all()->groupBy('type');
        // return $jobs;
        return view('backend.employees.Index', compact('school'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $years = range(date('Y'), date('Y') - 50);
        $school = $this->getSchool();

        return view('backend.employees.create', compact('years', 'school'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {
        try {
            $this->executeInTransaction(function () use ($request) {
                $school = $this->getSchool();
                $user = User::create($this->userService->assignFields($request, $school));
                $this->verifyAndStoreImage($request, 'file', 'employees'.'/'.$request->name, 'upload_attachments', $user->id, 'App\Model\Users', $request->name);
                $this->logActivity(trans('log.actions.added'), trans('log.models.user.created', ['name' => $request->name]));
            });
            session()->flash('success', trans('general.success'));

            return redirect()->route('employees.index');
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
        $user = User::findorFail($id);
        $school = $this->getSchool();

        return view('backend.employees.show', compact('user', 'school'));
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

            return view('backend.employees.edit', compact('user', 'years', 'school'));
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back()->withInput();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request)
    {
        try {
            $this->executeInTransaction(function () use ($request) {
                $user = User::findOrFail($request->id);
                $data = $this->userService->prepareUserData($request);
                if (is_int($data['type'])) {
                    $user->type = $data['type'];
                }
                if (is_int($data['job_id'])) {
                    $user->job_id = $data['job_id'];
                }
                $data['email'] = $data['email'] ?? $user->email;
                $user->fill(collect($data)->except(['type', 'job_id'])->toArray());
                $user->save();
                $this->verifyAndStoreImage($request, 'file', 'employees'.'/'.$request->name, 'upload_attachments', $user->id, 'App\Model\Users', $request->name);
                $this->logActivity(trans('log.actions.updated'), trans('log.models.user.updated', ['name' => $request->name]));
            });
            session()->flash('success', trans('general.success'));

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
        $this->authorize('employees-delete', User::class);
        try {
            $user = User::findOrFail($id);
            $this->logActivity(trans('log.actions.deleted'), trans('log.models.user.deleted', ['name' => $user->name]));
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
        $this->logActivity(trans('log.actions.restored'), trans('log.models.user.restored', ['name' => $emp->name]));
        session()->flash('success', trans('general.success'));

        return redirect()->route('employees.index');
    }

    public function return_list()
    {
        $employees = User::onlyTrashed()->get();
        $school = $this->getSchool();

        return view('backend.employees.resign', compact('employees', 'school'));
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

            return redirect()->route('students.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            \Log::error($e->getMessage());

            return redirect()->back()->withInput();
        }
    }
}
