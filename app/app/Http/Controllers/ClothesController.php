<?php

namespace App\Http\Controllers;

use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\clothes;
use App\Models\Grade;
use Exception;
use Illuminate\Http\Request;

class ClothesController extends Controller
{
    use LogsActivity, SchoolTrait;

    public function index()
    {
        $school = $this->getSchool();
        $clothes = clothes::where('school_id', $school->id)->with('orders', 'grade', 'classroom')->get();
        $grades = Grade::all();

        return view('backend.clothes.index', compact('clothes', 'grades'));
    }

    public function store(Request $request)
    {
        try {
            clothes::create([
                'classroom_id' => $request->classroom_id,
                'grade_id' => $request->grade_id,
                'sales_price' => $request->sales_price,
                'purchase_price' => $request->purchase_price,
                'name' => $request->name,
                'opening_qty' => $request->quantity,
                'isset' => ($request->isset == 'on') ? 1 : 0,
                'opening_date' => date('Y-m-d'),
                'sales_price_set' => $request->sales_price_isset,
                'school_id' => $this->getSchool()->id,
                'user_id' => auth()->user()->id,
            ]);
            $this->logActivity(trans('log.parents.added_action'), trans('log.clothes.added', ['name' => $request->name]));

            return redirect()->back()->with('success', trans('general.success'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function update(Request $request)
    {
        try {
            $clothes = clothes::findorfail($request->id);
            $clothes->update([
                'classroom_id' => $request->classroom_id,
                'grade_id' => $request->grade_id,
                'sales_price' => $request->sales_price,
                'purchase_price' => $request->purchase_price,
                'opening_qty' => $request->quantity,
                'name' => $request->name,
                'isset' => ($request->isset == 'on') ? 1 : 0,
                'sales_price_set' => $request->sales_price_isset,

            ]);
            $this->logActivity(trans('log.parents.updated_action'), trans('log.clothes.updated', ['name' => $request->name]));

            return redirect()->back()->with('success', trans('general.success'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $clothes = clothes::findorfail($id);
            $this->logActivity(trans('log.parents.deleted_action'), trans('log.clothes.deleted', ['name' => $clothes->name]));
            $clothes->delete();

            return redirect()->back()->with('success', trans('general.success'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
