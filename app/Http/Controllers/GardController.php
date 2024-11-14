<?php

namespace App\Http\Controllers;

use App\Http\Traits\LogsActivity;
use App\Models\order;
use App\Models\stock;
use Exception;
use Illuminate\Http\Request;

class GardController extends Controller
{
    use LogsActivity;

    public function index()
    {
        $orders = order::where('type', 3)->withcount('stocks')->get();
        $type = 3;

        return view('backend.orders.index', compact('orders', 'type'));
    }

    public function create()
    {
        try {
            $stocks = stock::all();
            if ($stocks->count() == 0) {
                return redirect()->back()->with('error', 'لا يوجد مستودعات');
            }
            $generate_code = order::where('type', '3')->orderBy('auto_number', 'desc')->first();
            $order = order::create([
                'auto_number' => isset($generate_code) ? str_pad($generate_code->auto_number + 1, 6, '0', STR_PAD_LEFT) : '000001',
                'type' => '3',
            ]);
            $this->logActivity('إضافة', ' إضافة أمر جرد رقم'.$order->auto_number);

            return view('backend.gard.create', compact('order', 'stocks'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function store(Request $request)
    {

        try {
            foreach ($request->stock_id as $key => $stock) {
                $stock = stock::find($stock);
                $current_qty = $stock->orders()->where('stock_id', $stock->id);
                $qty = $request->actual_stock[$key] - ($stock->opening_stock + $current_qty->sum('quantity_in') - $current_qty->sum('quantity_out'));

                $quantity_in = max(0, $qty);
                $quantity_out = max(0, -$qty);

                \DB::table('stocks_order')->Insert([
                    'order_id' => $request->id,
                    'stock_id' => $stock->id,
                    'quantity_out' => $quantity_out,
                    'quantity_in' => $quantity_in,
                ]);
                $this->logActivity('إضافة', 'إضافة للمخزن'.$stock->name.'في الجرد رقم'.$request->id);
            }

            return redirect()->route('stocks.index')->with('success', 'تم الاضافة بنجاح');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $order = order::where('id', $id)->with('stocks')->first();
            $type = 3;

            // return $order;
            return view('backend.gard.edit', get_defined_vars());
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function update(Request $request)
    {
        try {
            $order = order::where('id', $request->id)->with('stocks')->first();
            $type = 3;
            foreach ($request->stock_id as $key => $stock) {
                $stock = stock::find($stock);
                $current_qty = $stock->orders()->where('orders.id', '!=', $order->id)->where('stock_id', $stock->id);
                $qty = $request->actual_stock[$key] - ($stock->opening_stock + $current_qty->sum('quantity_in') - $current_qty->sum('quantity_out'));
                if ($qty > 0) {
                    $order->stocks()->syncWithPivotValues('order_id', [
                        'stock_id' => $stock->id,
                        'quantity_in' => $qty,
                        'quantity_out' => 0,
                    ]);
                } else {
                    $order->stocks()->syncWithPivotValues('order_id', [
                        'stock_id' => $stock->id,
                        'quantity_in' => 0,
                        'quantity_out' => -$qty,
                    ]);
                }
                $this->logActivity('تعديل', 'تعديل للمخزن'.$stock->name.'في الجرد رقم'.$order->auto_number);
            }

            return redirect()->route('stocks.index')->with('success', trans('general.success'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $order = order::with('stocks')->findorFail($id);
            $type = 3;

            return view('backend.orders.show', get_defined_vars());
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $gard = order::findorfail($id);
            $this->logActivity('حذف', ' حذف أمر جرد رقم'.$gard->auto_number);
            $gard->delete();

            return redirect()->back()->with('success', trans('general.success'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
