<?php

namespace App\Http\Controllers;

use App\Models\clothes;
use Illuminate\Http\Request;
use App\Http\Traits\LogsActivity;
class ClothesController extends Controller
{
    use LogsActivity;
    public function index(){
        $clothes = clothes::with('orders')->get();
        return view('backend.clothes.index',compact('clothes'));
    }
    public function store(Request $request){
        try{
            clothes::create([
                'name' => $request->name,
                'opening_qty'=>$request->opening_stock,
                'isset'=>$request->isset,
                'opening_date'=>date('Y-m-d'),

            ]);
            $this->logActivity('اضافة', trans('system_lookup.field_create', ['value' => $request->name]));
            return redirect()->back()->with('success',trans('general.success'));
        }catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}