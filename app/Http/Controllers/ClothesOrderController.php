<?php

namespace App\Http\Controllers;

use App\Http\Traits\LogsActivity;
use App\Models\clothes;
use App\Models\clothes_order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClothesOrderController extends Controller
{
    use LogsActivity;

    public function index()
    {
        $orders = clothes_order::with('stocks')->get();
        $type = 1;

        return view('backend.clothes_order.index', get_defined_vars());
    }

    public function tawreed()
    {

        $clothes = clothes::with('orders', 'grade:id,name', 'classroom:id,name')->get();
        if ($clothes->count() == 0) {
            return redirect()->route('clothes.index')->with('info', trans('general.no_data'));
        }
        $generate_code = clothes_order::where('type', '1')->orderBy('auto_number', 'desc')->first();
        $auto_number = isset($generate_code) ? str_pad($generate_code->auto_number + 1, 6, '0', STR_PAD_LEFT) : '000001';

        return view('backend.clothes_order.tawreed', get_defined_vars());
    }

    public function clothes_stock_submit(Request $request)
    {
        try {
            \DB::beginTransaction();
            $generate_code = clothes_order::where('type', '1')->orderBy('auto_number', 'desc')->first();
            $order = clothes_order::create([
                'auto_number' => isset($generate_code) ? str_pad($generate_code->auto_number + 1, 6, '0', STR_PAD_LEFT) : '000001',
                'type' => '1',
                'date' => date('Y-m-d'),
            ]);
            foreach ($request->id as $key => $clothe_id) {
                \DB::table('clothes_stocks')->insert([
                    'clothes_id' => $clothe_id,
                    'manual_number' => $request->manual_num[$key],
                    'manual_date' => Carbon::parse($request->manual_date[$key])->format('Y-m-d'),
                    'qty_in' => $request->qty[$key],
                    'qty_out' => '0',
                    'order_id' => $order->id,
                ]);
                clothes::find($clothe_id)->update([
                    'sales_price' => $request->sales[$key],
                    'purchase_price' => $request->purchase[$key],
                ]);
            }
            $this->logActivity('اضافة', 'تم إضافة أمر توريد رقم '.$order->id);
            \DB::commit();

            return redirect()->route('clothes_order.index')->with('success', trans('general.success'));
        } catch (\Exception $e) {
            \DB::rollback();

            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function clothes_stock_update(Request $request)
    {
        try {
            \DB::beginTransaction();
            $order = clothes_order::findOrFail($request->order_id);
            $order->update([
                'date' => date('Y-m-d'),
            ]);
            \DB::table('clothes_stocks')->where('order_id', $request->order_id)->delete();
            foreach ($request->id as $key => $clothe_id) {
                \DB::table('clothes_stocks')->insert([
                    'clothes_id' => $clothe_id,
                    'manual_number' => $request->manual_num[$key],
                    'manual_date' => Carbon::parse($request->manual_date[$key])->format('Y-m-d'),
                    'qty_in' => $request->qty[$key],
                    'qty_out' => '0',
                    'order_id' => $request->order_id,
                ]);
                clothes::find($clothe_id)->update([
                    'sales_price' => $request->sales[$key],
                    'purchase_price' => $request->purchase[$key],
                ]);
            }
            $this->logActivity('تعديل', 'تم تعديل أمر توريد رقم '.$order->auto_number);
            \DB::commit();

            return redirect()->route('clothes_order.index')->with('success', trans('general.success'));
        } catch (\Exception $e) {
            \DB::rollback();

            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $order = clothes_order::with('stocks')->find($id);

            return view('backend.clothes_order.show', get_defined_vars());
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $order = clothes_order::with('stocks')->find($id);

            return view('backend.clothes_order.edit', get_defined_vars());
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $order = clothes_order::find($id);
            $this->logActivity('حذف', 'تم حذف أمر توريد رقم'.$order->auto_number);
            $order->delete();

            return redirect()->back()->with('success', trans('general.success'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
