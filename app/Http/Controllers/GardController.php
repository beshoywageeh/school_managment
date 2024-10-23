<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Http\Traits\LogsActivity;
use Exception;
use App\Models\stock;
use App\Models\Gard;
class GardController extends Controller
{
    use LogsActivity;
    public function index()
    {
        $orders=order::where('type',3)->withcount('stocks')->get();
        $type=3;
        return view('backend.orders.index',compact('orders','type'));
    }
    public function create(){
        try{
            $generate_code = order::where('type', '3')->orderBy('auto_number', 'desc')->first();
            $order = order::create([
                'auto_number' => isset($generate_code) ? str_pad($generate_code->auto_number + 1, 6, '0', STR_PAD_LEFT) : '000001',
                'type' => '3',
            ]);
            $stocks = stock::all();
            $this->logActivity('إضافة', ' إضافة أمر جرد رقم'.$order->auto_number);
            return view('backend.gard.create',compact('order','stocks'));
        }catch(Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
    }
    public function store(Request $request){

        try{
            foreach($request->stock_id as $key=>$stock){
                $stock = stock::find($stock);
                $current_qty = $stock->orders()->where('stock_id',$stock->id);
                $qty=$request->actual_stock[$key]-($stock->opening_stock+$current_qty->sum('quantity_in')-$current_qty->sum('quantity_out'));

                Gard::create([
                    'order_id' => $request->id,
                    'stock_id' => $stock->id,
                    'quantity'=>$qty
                ]);
                $this->logActivity('إضافة', 'إضافة للمخزن'.$stock);
            }
            return redirect()->route('stocks.index')->with('success','تم الاضافة بنجاح');
        }catch(Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
    }
}