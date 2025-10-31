<?php

namespace App\Http\Controllers;

use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\order;
use App\Models\stock;
use Exception;
use Illuminate\Http\Request;

class GardController extends Controller
{
    use LogsActivity, SchoolTrait;

    public function index()
    {
        $school = $this->getSchool();
        $orders = order::where('school_id', $school->id)->where('type', 3)->withcount('stocks')->get();
        $type = 3;

        return view('backend.orders.index', get_defined_vars());
    }

    public function create()
    {
        try {
            $school = $this->getSchool();
            $stocks = stock::where('school_id', $school->id)->get();
            if ($stocks->count() == 0) {
                return redirect()->back()->with('error', 'لا يوجد مستودعات');
            }
            $generate_code = order::where('school_id', $school->id)->where('type', '3')->orderBy('auto_number', 'desc')->first();
            $order = isset($generate_code) ? str_pad($generate_code->auto_number + 1, 6, '0', STR_PAD_LEFT) : '000001';
            $type = 3;
            $this->logActivity(trans('log.actions.added'), trans('log.models.gard.order_added', ['number' => $order]));

            return view('backend.gard.create', get_defined_vars());
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function store(Request $request)
    {

        try {
            $order = order::create([
                'auto_number' => isset($generate_code) ? str_pad($generate_code->auto_number + 1, 6, '0', STR_PAD_LEFT) : '000001',
                'type' => '3',
                'school_id' => $this->getSchool()->id,
                'user_id' => auth()->user()->id,
            ]);
            foreach ($request->stock_id as $key => $stock) {
                $stock = stock::find($stock);
                $current_qty = $stock->orders()->where('stock_id', $stock->id);
                $qty = $request->actual_stock[$key] - ($stock->opening_stock + $current_qty->sum('quantity_in') - $current_qty->sum('quantity_out'));

                $quantity_in = max(0, $qty);
                $quantity_out = max(0, -$qty);

                \DB::table('stocks_order')->Insert([
                    'order_id' => $order->id,
                    'stock_id' => $stock->id,
                    'quantity_out' => $quantity_out,
                    'quantity_in' => $quantity_in,
                ]);
                $this->logActivity(trans('log.actions.added'), trans('log.models.gard.stock_added', ['stock_name' => $stock->name, 'inventory_number' => $order->auto_number]));
            }

            return redirect()->route('stocks.index')->with('success', 'تم الاضافة بنجاح');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $school = $this->getSchool();
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
                $this->logActivity(trans('log.actions.updated'), trans('log.models.gard.stock_updated', ['stock_name' => $stock->name, 'inventory_number' => $order->auto_number]));
            }

            return redirect()->route('stocks.index')->with('success', trans('general.success'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $school = $this->getSchool();
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
            $this->logActivity(trans('log.actions.deleted'), trans('log.models.gard.order_deleted', ['number' => $gard->auto_number]));
            $gard->delete();

            return redirect()->back()->with('success', trans('general.success'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
