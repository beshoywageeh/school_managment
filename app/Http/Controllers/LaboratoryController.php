<?php

namespace App\Http\Controllers;

use App\Http\Traits\LogsActivity;
use App\Models\Laboratory;
use Illuminate\Http\Request;

class LaboratoryController extends Controller
{
    use LogsActivity;

    public function index()
    {
        $labs = Laboratory::where('is_main', 1)->with('sub_locations')->get();
        $labs_main = Laboratory::where('is_main', 1)->get();

        return view('backend.labs.index', get_defined_vars());
    }

    public function store(Request $request)
    {

        try {
            $main_location = $request->location;
            $labs = $request->list_labs;
            $location = Laboratory::firstOrCreate(['location' => $main_location], ['location' => $main_location, 'is_main' => 1]);
            foreach ($labs as $lab) {
                Laboratory::firstOrCreate(['sub_location' => $lab['name']], [
                    'location' => null,
                    'is_main' => 0,
                    'sub_location' => $lab['name'],
                    'location_id' => $location->id]);
                $this->logActivity('اضافة', 'تم إضافة معمل '.$lab['name'].' بالمكان '.$main_location);
            }

            return redirect()->back()->with('success', trans('General.success'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $laboratory = Laboratory::with('sub_locations:id,sub_location,location_id')->findOrFail($id);

        return view('backend.labs.edit', get_defined_vars());
    }

    public function update(Request $request)
    {
        // return $request;
        try {
            $laboratory = Laboratory::findOrFail($request->id);
            $laboratory->update(['location' => $request->location]);
            foreach ($request->sub_location_id as $index => $sub_location_id) {
                Laboratory::where('id', $sub_location_id)->update(['sub_location' => $request->sub_locations[$index]]);
                $this->logActivity('تعديل', 'تم تعديل المعمل '.$request->sub_locations.' بالمكان '.$laboratory->location);
            }

            return redirect()->route('labs.index')->with('success', trans('General.success'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function show($id)
    {
        $laboratory = Laboratory::with(['orders:id,auto_number,created_at','orders.stocks:id,name','main_location:id,location'])->findOrFail($id);
//  return $laboratory;
        return view('backend.labs.show', get_defined_vars());

    }

    public function destroy($id)
    {
        try {
            $laboratory = Laboratory::findOrFail($id);
            if ($laboratory->orders->count() > 0) {
                return redirect()->back()->with('info', trans('General.cant_delete'));
            }
            $laboratory->delete();

            return redirect()->back()->with('success', trans('General.success'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}