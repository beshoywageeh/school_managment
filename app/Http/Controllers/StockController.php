<?php

namespace App\Http\Controllers;

use App\http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\order;
use App\Models\stock;
use Exception;
use Illuminate\Http\Request;

class StockController extends Controller
{
    use LogsActivity, SchoolTrait;

    public function index()
    {
        $school = $this->getSchool();
        $stocks = stock::where('school_id', $school->id)->with('orders')->get();

        return view('backend.stocks.index', get_defined_vars());
    }

    public function store(Request $request)
    {
        try {
            $stocks = $request->list_stocks;
            foreach ($stocks as $stock) {
                stock::create([
                    'name' => $stock['name'],
                    'opening_stock' => $stock['opening_qty'],
                    'opening_stock_date' => date('Y-m-d'),
                    'school_id' => $this->getSchool()->id,
                    'user_id' => auth()->user()->id,
                ]);
                $this->logActivity('إضافة', trans('system_lookup.field_create', ['value' => $stock['name']]));
            }
            session()->flash('success', trans('General.success'));

            return redirect()->route('stocks.index');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function update(Request $request)
    {
        try {
            $stock = stock::findorfail($request->id);
            $stock->update([
                'name' => $request->name,
                'opening_stock' => $request->opening_qty,
                'opening_stock_date' => date('Y-m-d'),
            ]);
            $this->logActivity('تعديل', trans('system_lookup.field_update', ['value' => $request->name]));
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
        $school = $this->getSchool();
        $order = Order::findorFail($id);
        $stocks = stock::get(['id', 'name']);
        $type = 1;

        return view('backend.stocks.tawreed', get_defined_vars());
    }

    public function stocks_submit(Request $request)
    {
        try {
            $order_id = $request->id;
            $list_stocks = $request->List_stocks;
            foreach ($list_stocks as $stock) {
                \DB::table('stocks_order')->Insert([
                    'order_id' => $order_id,
                    'stock_id' => $stock['name'],
                    'manual' => $stock['manual_num'],
                    'manual_date' => $stock['manual_date'],
                    'quantity_in' => $stock['quantity'],
                ]);
            }

            return redirect()->route('stocks.index')->with('success', trans('general.success'));
        } catch (Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }
}
