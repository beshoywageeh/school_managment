<?php

namespace App\Http\Controllers\Parents;

use App\DataTables\ParentsDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\ParentsRequest;
use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Imports\ParentsImport;
use App\Models\My_parents;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MyParentsController extends Controller
{
    use LogsActivity, SchoolTrait;

    public function index(ParentsDataTable $datatable)
    {
        $school = $this->getSchool();

        return $datatable->render('backend.Parents.Index', compact('school'));
    }

    public function create()
    {
        $school = $this->getSchool();

        return view('backend.Parents.create', get_defined_vars());
    }

    public function store(ParentsRequest $request)
    {
        try {
            if ($request->Father_Birth_Date == '') {
                $Father_Birth_Date = null;
            } else {
                $Father_Birth_Date = Carbon::parse($request->Father_Birth_Date);
            }
            if ($request->Mother_Birth_Date == '') {
                $Mother_Birth_Date = null;
            } else {
                $Mother_Birth_Date = Carbon::parse($request->Mother_Birth_Date);
            }
            My_parents::create([
                'Father_Name' => $request->Father_Name,
                'Father_Phone' => $request->Father_Phone,
                'Father_Job' => $request->Father_Job,
                'Father_National_Id' => $request->Father_National_Id,
                'Father_Birth_Date' => $Father_Birth_Date,
                'Mother_Name' => $request->Mother_Name,
                'Mother_Phone' => $request->Mother_Phone,
                'Mother_Job' => $request->Mother_Job,
                'Mother_National_Id' => $request->Mother_National_Id,
                'Mother_Birth_Date' => $Mother_Birth_Date,
                'Address' => $request->Address,
                'Religion' => $request->religion,
                'user_id' => \Auth::Id(),
                'Father_Learning' => $request->Father_Learning,
                'school_id' => \Auth::user()->school_id,
            ]);
            $this->logActivity(trans('log.parents.added_action'), trans('log.parents.added', ['name' => $request->Father_Name]));
            session()->flash('success', trans('general.success'));

            return redirect()->route('parents.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back()->withInput();
        }
    }

    public function show(string $id)
    {
        $parent = My_parents::where('id', $id)->with(['students'])->first();
        $school = $this->getSchool();

        return view('backend.Parents.show', get_defined_vars());
    }

    public function edit($id)
    {
        $parent = My_parents::findorfail($id);
        $school = $this->getSchool();

        return view('backend.Parents.edit', get_defined_vars());
    }

    public function update(ParentsRequest $request)
    {
        try {
            if ($request->Father_Birth_Date == '') {
                $Father_Birth_Date = null;
            } else {
                $Father_Birth_Date = Carbon::parse($request->Father_Birth_Date);
            }
            if ($request->Mother_Birth_Date == '') {
                $Mother_Birth_Date = null;
            } else {
                $Mother_Birth_Date = Carbon::parse($request->Mother_Birth_Date);
            }
            My_parents::find($request->id)->update([
                'Father_Name' => $request->Father_Name,
                'Father_Phone' => $request->Father_Phone,
                'Father_Job' => $request->Father_Job,
                'Father_National_Id' => $request->Father_National_Id,
                'Father_Birth_Date' => $Father_Birth_Date,
                'Mother_Name' => $request->Mother_Name,
                'Mother_Phone' => $request->Mother_Phone,
                'Mother_Job' => $request->Mother_Job,
                'Mother_National_Id' => $request->Mother_National_Id,
                'Mother_Birth_Date' => $Mother_Birth_Date,
                'Address' => $request->Address,
                'Religion' => $request->religion,
                'Father_Learning' => $request->Father_Learning,
            ]);
            $this->logActivity(trans('log.parents.updated_action'), trans('log.parents.updated', ['name' => $request->Father_Name]));
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
            $d = My_parents::withCount('Students')->findorfail($id);
            if ($d->Students_count == 0) {
                $d->delete();
                $this->logActivity(trans('log.parents.deleted_action'), trans('log.parents.deleted', ['name' => $d->Father_Name]));
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
