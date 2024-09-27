<?php

namespace App\Http\Controllers\Parents;

use App\Http\Controllers\Controller;
use App\Http\Requests\ParentsRequest;
use App\Imports\ParentsImport;
use App\Models\My_parents;
use Illuminate\Http\Request;
use yajra\DataTables\DataTables;

class MyParentsController extends Controller
{
    public function index()
    {
        //$parents = My_parents::with('students')->get();
        return view('backend.Parents.index', get_defined_vars());
    }

    public function data()
    {
        $parents = My_parents::withCount('students')->get(['id', 'Father_Name', 'Father_Phone', 'Mother_Name', 'Mother_Phone', 'Address']);

        return Datatables::of($parents)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                return view('components.parent_table_action', compact('row'));
            })
            ->addColumn('childrens', function ($row) {
                return $row->students_count;
            })
            ->rawColumns(['action', 'childrens'])
            ->make(true);
    }

    public function create()
    {
        return view('backend.Parents.create');
    }

    public function store(ParentsRequest $request)
    {
        try {
            My_parents::create([
                'Father_Name' => $request->Father_Name,
                'Father_Phone' => $request->Father_Phone,
                'Father_Job' => $request->Father_Job,
                'Father_National_Id' => $request->Father_National_Id,
                'Father_Birth_Date' => $request->Father_Birth_Date,
                'Mother_Name' => $request->Mother_Name,
                'Mother_Phone' => $request->Mother_Phone,
                'Mother_Job' => $request->Mother_Job,
                'Mother_National_Id' => $request->Mother_National_Id,
                'Mother_Birth_Date' => $request->Mother_Birth_Date,
                'Address' => $request->Address,
                'Religion' => $request->religion,
                'user_id' => \Auth::Id(),
                'Father_Learning' => $request->Father_Learning,
            ]);
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

        return view('backend.Parents.show', get_defined_vars());
    }

    public function edit($id)
    {
        $parent = My_parents::findorfail($id);

        //return $parent;
        return view('backend.parents.edit', get_defined_vars());
    }

    public function update(ParentsRequest $request)
    {
        try {
            My_parents::find($request->id)->update([
                'Father_Name' => $request->Father_Name,
                'Father_Phone' => $request->Father_Phone,
                'Father_Job' => $request->Father_Job,
                'Father_National_Id' => $request->Father_National_Id,
                'Father_Birth_Date' => $request->Father_Birth_Date,
                'Mother_Name' => $request->Mother_Name,
                'Mother_Phone' => $request->Mother_Phone,
                'Mother_Job' => $request->Mother_Job,
                'Mother_National_Id' => $request->Mother_National_Id,
                'Mother_Birth_Date' => $request->Mother_Birth_Date,
                'Address' => $request->Address,
                'Religion' => $request->religion,
                'Father_Learning' => $request->Father_Learning,
            ]);

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
        try {
            $path = $request->file('excel')->getRealPath();
            \Excel::import(new ParentsImport, $path);
            session()->flash('success', trans('general.success'));

            return redirect()->route('parents.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back()->withInput();
        }
    }
}
