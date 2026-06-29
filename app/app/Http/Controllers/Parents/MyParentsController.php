<?php

namespace App\Http\Controllers\Parents;

use App\Http\Controllers\Controller;
use App\Http\Requests\ParentsRequest;
use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Imports\ParentsImport;
use App\Models\MyParent;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MyParentsController extends Controller
{
    use LogsActivity, SchoolTrait;

    public function index()
    {
        $school = $this->getSchool();

        return view('backend.Parents.Index', compact('school'));
    }

    public function create()
    {
        $school = $this->getSchool();
        $Mother_Status = MyParent::get('mother_status');

        return view('backend.Parents.create', get_defined_vars());
    }

    public function store(ParentsRequest $request)
    {
        try {
            if ($request->father_birth_date == '') {
                $Father_Birth_Date = null;
            } else {
                $Father_Birth_Date = Carbon::parse($request->father_birth_date);
            }
            if ($request->mother_birth_date == '') {
                $Mother_Birth_Date = null;
            } else {
                $Mother_Birth_Date = Carbon::parse($request->mother_birth_date);
            }
            MyParent::create([
                'father_name' => $request->father_name,
                'father_phone' => $request->father_phone,
                'father_job' => $request->father_job,
                'father_national_id' => $request->father_national_id,
                'father_birth_date' => $Father_Birth_Date,
                'mother_name' => $request->mother_name,
                'mother_phone' => $request->mother_phone,
                'mother_job' => $request->mother_job,
                'mother_national_id' => $request->mother_national_id,
                'mother_birth_date' => $Mother_Birth_Date,
                'address' => $request->address,
                'religion' => $request->religion,
                'user_id' => \Auth::Id(),
                'father_learning' => $request->father_learning,
                'school_id' => \Auth::user()->school_id,
                'mother_status' => $request->Mother_Status,
            ]);
            $this->logActivity(trans('log.actions.added'), trans('log.models.parent.created', ['name' => $request->father_name]));
            session()->flash('success', trans('general.success'));

            return redirect()->route('parents.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back()->withInput();
        }
    }

    public function show(string $id)
    {
        $parent = MyParent::where('id', $id)->with(['students'])->first();
        $school = $this->getSchool();

        return view('backend.Parents.show', get_defined_vars());
    }

    public function edit($id)
    {
        $parent = MyParent::findorfail($id);
        $school = $this->getSchool();
        $Mother_Status = MyParent::get('mother_status');

        return view('backend.Parents.edit', get_defined_vars());
    }

    public function update(ParentsRequest $request)
    {
        try {
            if ($request->father_birth_date == '') {
                $Father_Birth_Date = null;
            } else {
                $Father_Birth_Date = Carbon::parse($request->father_birth_date);
            }
            if ($request->mother_birth_date == '') {
                $Mother_Birth_Date = null;
            } else {
                $Mother_Birth_Date = Carbon::parse($request->mother_birth_date);
            }
            MyParent::find($request->id)->update([
                'father_name' => $request->father_name,
                'father_phone' => $request->father_phone,
                'father_job' => $request->father_job,
                'father_national_id' => $request->father_national_id,
                'father_birth_date' => $Father_Birth_Date,
                'mother_name' => $request->mother_name,
                'mother_phone' => $request->mother_phone,
                'mother_job' => $request->mother_job,
                'mother_national_id' => $request->mother_national_id,
                'mother_birth_date' => $Mother_Birth_Date,
                'address' => $request->address,
                'religion' => $request->religion,
                'father_learning' => $request->father_learning,
                'mother_status' => $request->Mother_Status,
            ]);
            $this->logActivity(trans('log.actions.updated'), trans('log.models.parent.updated', ['name' => $request->father_name]));
            session()->flash('success', trans('general.success'));

            return redirect()->route('parents.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back()->withInput();
        }
    }

    public function destroy(string $id, Request $request)
    {
        try {
            $d = MyParent::withCount('Students')->findorfail($id);
            if ($d->Students_count == 0) {
                $d->delete();
                $this->logActivity(trans('log.actions.deleted'), trans('log.models.parent.deleted', ['name' => $d->father_name]));
                session()->flash('success', trans('general.deleted'));

                return redirect()->route('parents.index');
            }
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->route('parents.index');
        }
    }

    public function Excel_Import(Request $request)
    {
        //  dd($request->file('file'));
        try {
            Excel::import(new ParentsImport, $request->file('file'));
            session()->flash('success', trans('general.success'));

            return redirect()->route('parents.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back()->withInput();
        }
    }
}
