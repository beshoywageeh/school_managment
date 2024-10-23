<?php

namespace App\Http\Controllers;

use App\Http\Traits\LogsActivity;
use App\Models\order;
use App\Models\stock;
use Exception;
use Illuminate\Http\Request;

class OutOrderController extends Controller
{
    use LogsActivity;

    public function index()
    {
        $orders = order::where('type', 2)->withcount('stocks')->get();
        $type = 2;

        return view('backend.orders.index', compact('orders', 'type'));
    }

    public function transfer(Request $request)
    {
        try {
            $generate_code = order::where('type', '2')->orderBy('auto_number', 'desc')->first();
            $order = order::create([
                'auto_number' => isset($generate_code) ? str_pad($generate_code->auto_number + 1, 6, '0', STR_PAD_LEFT) : '000001',
                'type' => '2',
                'location' => $request->name,
            ]);
            $this->logActivity('إضافة', 'إضافة أمر صرف رقم'.$order->auto_number);

            return redirect()->route('outorder.new_transfer', $order->id);
        } catch (Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    public function new_transfer($id)
    {
        $order = Order::findorFail($id);
        $stocks = stock::get(['id', 'name']);
        $type = 2;
        return view('backend.stocks.tawreed', get_defined_vars());
    }

    public function submit_transfer(Request $request)
    {
        try {
            $order_id = $request->id;
            $list_stocks = $request->List_stocks;
            foreach ($list_stocks as $stock) {
                \DB::table('stocks_order')->Insert([
                    'order_id' => $order_id,
                    'stock_id' => $stock['name'],
                    'quantity_out' => $stock['quantity'],
                ]);
                $stock_name = stock::findorfail($stock['name'])->name;
                $this->logActivity('صرف', 'صرف من '.$stock_name.' كمية :  '.$stock['quantity']);
            }

            return redirect()->route('stocks.index')->with('success', trans('general.success'));
        } catch (Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    public function show($id)
    {
        try {
            $order = order::with('stocks')->findorFail($id);
            $type = 2;

            return view('backend.orders.show', get_defined_vars());
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $order = order::with('stocks')->findorFail($id);
            $stocks = stock::get();

            $type = 2;

            return view('backend.orders.edit', get_defined_vars());
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function update(Request $request)
    {
        try {
            $order_id = $request->order_id;
            $order = order::findorfail($order_id);
            foreach ($request->name as $n => $na) {
                $stocks = [
                    'stock_id' => $request->name[$n], // updated line
                    'order_id' => $order_id,
                    'quantity_out' => $request->quantity[$n],
                ];
                $order->stocks()->syncWithPivotValues('order_id', $stocks);
            }
            $this->logActivity('تعديل', 'تعديل أمر صرف رقم'.$order->auto_number);
            session()->flash('success', 'تم التعديل بنجاح');

            return redirect()->route('outorder.index');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $order = order::findorfail($id);
            $order->delete();
            $this->logActivity('حذف', 'حذف أمر صرف رقم'.$order->auto_number);
            session()->flash('success', 'تم الحذف بنجاح');

            return redirect()->back();
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
