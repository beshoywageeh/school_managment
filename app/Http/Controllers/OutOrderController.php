<?php

namespace App\Http\Controllers;

use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\laboratory;
use App\Models\order;
use App\Models\stock;
use Exception;
use Illuminate\Http\Request;

class OutOrderController extends Controller
{
    use LogsActivity, SchoolTrait;

    public function index()
    {
        $orders = order::where('type', 2)->withcount('stocks')->get();
        $type = 2;
        $school = $this->getSchool();

        return view('backend.orders.index', get_defined_vars());
    }

    public function new_transfer()
    {
        try {
            $generate_code = order::where('type', '2')->orderBy('auto_number', 'desc')->first();
            $auto_number = isset($generate_code) ? str_pad($generate_code->auto_number + 1, 6) : '000001';
            $labs = Laboratory::where('is_main', 1)->with('sub_locations')->get();
            $stocks = stock::all();
            $school = $this->getSchool();

            return view('backend.orders.new_transfer', get_defined_vars());
        } catch (Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    public function submit_transfer(Request $request)
    {
        // return $request;
        try {
            \DB::beginTransaction();
            $order_id = $request->id;
            $list_stocks = $request->list_outorder;
            $order_id = order::create([
                'auto_number' => $request->auto_number,
                'type' => 2,
                'laboratory_id' => $request->location_to,
                'school_id' => $this->getSchool()->id,
                'user_id' => auth()->user()->id,
            ])->id;
            foreach ($list_stocks as $stock) {
                \DB::table('stocks_order')->Insert([
                    'order_id' => $order_id,
                    'stock_id' => $stock['stock_id'],
                    'quantity_out' => (int) ($stock['qty'] ?? 0),
                ]);
                $stock_name = stock::findorfail($stock['stock_id'])->name;
                $this->logActivity(trans('log.out_order.disbursement_action'), trans('log.out_order.disbursement_added', ['stock_name' => $stock_name, 'quantity' => $stock['qty']]));
            }
            \DB::commit();

            return redirect()->route('stocks.index')->with('success', trans('general.success'));
        } catch (Exception $e) {
            \DB::rollback();

            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    public function show($id)
    {
        try {
            $order = order::with('stocks')->findorFail($id);
            $type = 2;
            $school = $this->getSchool();

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
            $school = $this->getSchool();
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
            $this->logActivity(trans('log.parents.updated_action'), trans('log.out_order.disbursement_updated', ['number' => $order->auto_number]));
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
            $this->logActivity(trans('log.parents.deleted_action'), trans('log.out_order.disbursement_deleted', ['number' => $order->auto_number]));
            session()->flash('success', 'تم الحذف بنجاح');

            return redirect()->back();
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
