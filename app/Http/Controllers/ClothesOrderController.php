<?php

namespace App\Http\Controllers;

use App\Http\Traits\LogsActivity;
use App\Models\clothes;
use App\Models\clothes_order;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClothesOrderController extends Controller
{
    use LogsActivity;

    public function index($type)
    {
        if ($type == 1) {
            $orders = clothes_order::where('type', 1)->with('stocks')->get();
            $type = 1;
        }
        if ($type == 2) {
            $orders = clothes_order::where('type', 2)->with('stocks')->get();
            $type = 2;
        }  if ($type == 3) {
            $orders = clothes_order::where('type', 3)->with('stocks')->get();
            $type = 3;
        }

        return view('backend.clothes_order.index', get_defined_vars());
    }

    public function tawreed()
    {

        $clothes = clothes::with('orders', 'grade:id,name', 'classroom:id,name')->get();
        if ($clothes->count() == 0) {
            return redirect()->route('clothes.index')->with('info', trans('General.noDataToShow'));
        }
        $generate_code = clothes_order::where('type', '1')->orderBy('auto_number', 'desc')->first();
        $auto_number = isset($generate_code) ? str_pad($generate_code->auto_number + 1, 6, '0', STR_PAD_LEFT) : '000001';

        return view('backend.clothes_order.tawreed', get_defined_vars());
    }

    public function clothes_order_gard_edit($id)
    {

        try {
            $order = clothes_order::where('id', $id)->with('stocks')->first();
            $type = 3;

            // return $order;
            return view('backend.clothes_order.inventory_edit', get_defined_vars());
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function clothes_order_gard_update(Request $request)
    {
        try {
            $order = clothes_order::where('id', $request->id)->with('stocks')->first();
            $type = 3;
            foreach ($request->stock_id as $key => $stock) {
                $stock = clothes::find($stock);
                $current_qty = $stock->orders()->where('clothes_id', $stock->id);
                $qty = $request->actual_stock[$key] - ($stock->opening_qty + $current_qty->sum('qty_in') - $current_qty->sum('qty_out'));

                return $qty;
                $order->stocks()->syncWithPivotValues('order_id', [
                    'clothes_id' => $stock->id,
                    'qty_out' => max(0, -$qty),
                    'qty_in' => max(0, $qty),
                ]);
                $this->logActivity('تعديل', 'تعديل للمخزن'.$stock->name.'في الجرد رقم'.$order->auto_number);
            }

            return redirect()->route('clothes.index')->with('success', trans('general.success'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
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
                'manual_number' => $request->manual_num,
                'manual_date' => Carbon::parse($request->manual_date)->format('Y-m-d'),
            ]);
            foreach ($request->id as $key => $clothe_id) {
                \DB::table('clothes_stocks')->insert([
                    'clothes_id' => $clothe_id,
                    'qty_in' => $request->qty[$key],
                    'qty_out' => '0',
                    'order_id' => $order->id,
                ]);
                clothes::find($clothe_id)->update([
                    'sales_price' => $request->sales[$key],
                    'purchase_price' => $request->purchase[$key],
                    'sales_price_set' => $request->sales_isset[$key],
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
                'manual_number' => $request->manual_num,
                'manual_date' => Carbon::parse($request->manual_date)->format('Y-m-d'),
            ]);
            \DB::table('clothes_stocks')->where('order_id', $request->order_id)->delete();
            foreach ($request->id as $key => $clothe_id) {
                \DB::table('clothes_stocks')->insert([
                    'clothes_id' => $clothe_id,
                    'qty_in' => $request->qty[$key],
                    'qty_out' => '0',
                    'order_id' => $request->order_id,
                ]);
                clothes::find($clothe_id)->update([
                    'sales_price' => $request->sales[$key],
                    'purchase_price' => $request->purchase[$key],
                    'sales_price_set' => $request->sales_isset[$key],
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

    public function clothes_out_order()
    {
        $generate_code = clothes_order::where('type', '2')->orderBy('auto_number', 'desc')->first();
        $auto_number = isset($generate_code) ? str_pad($generate_code->auto_number + 1, 6, '0', STR_PAD_LEFT) : '000001';
        $students = Student::get();
        $type = 2;

        return view('backend.clothes_order.out_order', get_defined_vars());
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

    public function clothes_out_order_submit(Request $request)
    {
        try {
            \DB::beginTransaction();
            $generate_code = clothes_order::where('type', '2')->orderBy('auto_number', 'desc')->first();
            $order = clothes_order::create([
                'auto_number' => isset($generate_code) ? str_pad($generate_code->auto_number + 1, 6, '0', STR_PAD_LEFT) : '000001',
                'type' => '2',
                'date' => date('Y-m-d'),
                'student_id' => $request->student_id,
            ]);
            foreach ($request->id as $key => $clothe_id) {
                \DB::table('clothes_stocks')->insert([
                    'clothes_id' => $clothe_id,
                    'qty_out' => $request->quantity[$key],
                    'qty_in' => '0',
                    'order_id' => $order->id,
                ]);
            }
            $this->logActivity('اضافة', 'تم إضافة أمر صرف رقم '.$order->id.' للطالب '.Student::findorfail($request->student_id)->name);
            \DB::commit();
            $order = clothes_order::where('id', $order->id)->with('stocks', 'students')->first();

            return view('backend.clothes_order.out_order_print', compact('order'));

        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function clothes_out_order_edit($id)
    {
        try {
            $order = clothes_order::with('stocks')->find($id);
            $students = Student::all();

            return view('backend.clothes_order.out_order_edit', get_defined_vars());
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function clothes_out_order_update(Request $request)
    {
        try {
            $order_id = $request->order_id;
            $order = clothes_order::findorfail($order_id);
            $order->update([
                'student_id' => $request->student_id,
            ]);
            foreach ($request->id as $key => $clothe_id) {

                $clothes = [
                    'clothes_id' => $clothe_id, // updated line
                    'order_id' => $order_id,
                    'qty_out' => $request->quantity[$key],
                ];

                $order->stocks()->syncWithPivotValues($order_id, $clothes);
            }
            $this->logActivity('تعديل', 'تم تعديل أمر صرف رقم '.$order->id.' للطالب '.Student::findorfail($request->student_id)->name);

            return view('backend.clothes_order.out_order_print', compact('order'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function clothes_order_gard()
    {
        try {
            $generate_code = clothes_order::where('type', '3')->orderBy('auto_number', 'desc')->first();
            $order = clothes_order::create([
                'auto_number' => isset($generate_code) ? str_pad($generate_code->auto_number + 1, 6, '0', STR_PAD_LEFT) : '000001',
                'type' => '3',
                'date' => date('Y-m-d'),
            ]);
            $stocks = clothes::with('grade', 'classroom')->get();
            $this->logActivity('إضافة', ' إضافة أمر جرد رقم'.$order->auto_number);

            return view('backend.clothes_order.gard_create', compact('order', 'stocks'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function clothes_order_gard_submit(Request $request)
    {

        try {
            foreach ($request->stock_id as $key => $stock) {
                $stock = clothes::find($stock);
                $current_qty = $stock->orders()->where('clothes_id', $stock->id);
                $qty = $request->actual_stock[$key] - ($stock->opening_qty + $current_qty->sum('qty_in') - $current_qty->sum('qty_out'));
                \DB::table('clothes_stocks')->Insert([
                    'order_id' => $request->id,
                    'clothes_id' => $stock->id,
                    'qty_out' => max(0, -$qty),
                    'qty_in' => max(0, $qty),
                ]);
                $this->logActivity('إضافة', ' إضافة للمخزن'.$stock->name.'في الجرد رقم'.$request->id);
            }

            return redirect()->route('clothes.index')->with('success', 'تم الاضافة بنجاح');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function getClothes($id)
    {
        $std = Student::findorfail($id);
        $clothes = clothes::where('grade_id', $std->grade_id)->where('classroom_id', $std->classroom_id)->get();

        return response()->json($clothes);
    }
}
