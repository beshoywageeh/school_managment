<?php

namespace App\Http\Controllers;

use App\Models\{clothes,Grade};
use Illuminate\Http\Request;
use App\Http\Traits\LogsActivity;
use Exception;

class ClothesController extends Controller
{
    use LogsActivity;
    public function index(){
        $clothes = clothes::with('orders','grade','classroom')->get();
        $grades=Grade::all();
        return view('backend.clothes.index',compact('clothes','grades'));
    }
    public function store(Request $request){
        try{
            clothes::create([
                'classroom_id'=>$request->classroom_id,
                'grade_id'=>$request->grade_id,
                'sales_price'=>$request->sales_price,
                'purchase_price'=>$request->purchase_price,
                'name' => $request->name,
                'opening_qty'=>$request->quantity,
                'isset'=>($request->isset =='on')?1:0,
                'opening_date'=>date('Y-m-d'),

            ]);
            $this->logActivity('اضافة', trans('system_lookup.field_create', ['value' => $request->name]));
            return redirect()->back()->with('success',trans('general.success'));
        }catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function update(Request $request)
    {
        try{
            $clothes = clothes::findorfail($request->id);
            $clothes->update([
                'classroom_id'=>$request->classroom_id,
                'grade_id'=>$request->grade_id,
                'sales_price'=>$request->sales_price,
                'purchase_price'=>$request->purchase_price,
                'opening_qty'=>$request->quantity,
                'name' => $request->name,
                'isset'=>($request->isset =='on')?1:0,
            ]);
            $this->logActivity('تعديل', 'تم تعديل العنصر'.$request->name);
            return redirect()->back()->with('success',trans('general.success'));
        }catch(Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function destroy($id){
        try{
            $clothes = clothes::findorfail($id);
            $this->logActivity('حذف', 'تم حذف منتج '.$clothes->name);
            $clothes->delete();
            return redirect()->back()->with('success',trans('general.success'));
        }catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}