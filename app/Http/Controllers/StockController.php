<?php

namespace App\Http\Controllers;

use App\http\Traits\LogsActivity;
use App\Models\order;
use App\Models\stock;
use Exception;
use Illuminate\Http\Request;

class StockController extends Controller
{
    use LogsActivity;

    public function index()
    {
        $stocks = stock::with('orders')->get();

        return view('backend.stocks.index', compact('stocks'));
    }

    public function store(Request $request)
    {
        try {
            stock::create([
                'name' => $request->name,
                'opening_stock' => $request->opening_qty,
                'opening_stock_date' => date('Y-m-d'),
            ]);
            $this->logActivity('إضافة', trans('system_lookup.field_create', ['value' => $request->name]));
            session()->flash('success', trans('General.success'));

            return redirect()->back();
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $stock = stock::findorfail($id);
            $this->logActivity('حذف', trans('system_lookup.field_delete', ['value' => $stock->name]));
            $stock->delete();
            session()->flash('error', trans('General.deleted'));

            return redirect()->back();
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function new_tawreed_order($id)
    {
        $order = Order::findorFail($id);
        $stocks = stock::get(['id', 'name']);

        return view('backend.stocks.tawreed', get_defined_vars());
    }

    public function stocks_submit(Request $request)
    {

        try {
            $order_id = $request->id;
            $list_stocks = $request->List_stocks;
            foreach ($list_stocks as $stock) {
                $stock = stock::firstOrCreate(['name' => $stock['stock_name']], [
                    'opening_stock' => $stock['quantity'],
                    'opening_stock_date' => date('Y-m-d'),
                ]);
                $this->logActivity('اضافة', trans('system_lookup.field_create', ['value' => $stock->name.' - '.$stock->opening_stock]));
                \DB::table('stocks_order')->Insert([
                    'order_id' => $order_id,
                    'stock_id' => $stock->id,
                    'manual' => $stock['manual_num'],
                    'manual_date' => $stock['manual_date'],
                    'quantity_in' => $stock['quantity'],
                ]);
                $this->logActivity('اضافة', trans('system_lookup.field_create', ['value' => $stock->name.' - '.$stock->opening_stock]));
            }

            return redirect()->route('stocks.index')->with('success', trans('general.success'));
        } catch (Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }
}
