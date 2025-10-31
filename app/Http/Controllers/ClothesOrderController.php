<?php

namespace App\Http\Controllers;

use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\clothes;
use App\Models\clothes_order;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClothesOrderController extends Controller
{
    use LogsActivity, SchoolTrait;

    public function index($type)
    {
        $school = $this->getSchool();

        $validTypes = [1, 2, 3];
        if (! in_array($type, $validTypes)) {
            abort(404);
        }

        $orders = clothes_order::where('school_id', $school->id)->where('type', $type)
            ->with(['stocks', $type == 2 ? 'students' : null])
            ->get();


        return view('backend.clothes_order.index', get_defined_vars());
    }

    public function tawreed()
    {
        $school = $this->getSchool();
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
        $school = $this->getSchool();

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
                $current_qty = $stock->orders()->where('clothes_orders.id', '!=', $order->id)->where('clothes_id', $stock->id);
                $qty = $request->actual_stock[$key] - ($stock->opening_qty + $current_qty->sum('quantity_in') - $current_qty->sum('quantity_out'));
                if ($qty < 0) {
                    $order->stocks()->syncWithPivotValues('clothes_orders.id', [
                        'clothes_id' => $stock->id,
                        'quantity_out' => abs($qty),
                    ]);
                } elseif ($qty > 0) {
                    $order->stocks()->syncWithPivotValues('clothes_orders.id', [
                        'clothes_id' => $stock->id,
                        'quantity_in' => $qty,
                    ]);
                }
                $this->logActivity(trans('log.actions.stock_updated'), trans('log.models.clothes_order.stock_updated', ['stock_name' => $stock->name, 'order_number' => $order->auto_number]));
            }

            return redirect()->route('clothes.index', 1)->with('success', trans('general.success'));

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
                'school_id' => $this->getSchool()->id,
                'user_id' => auth()->user()->id,
            ]);
            foreach ($request->id as $key => $clothe_id) {
                \DB::table('clothes_stocks')->insert([
                    'clothes_id' => $clothe_id,
                    'quantity_in' => $request->qty[$key],
                    'quantity_out' => '0',
                    'order_id' => $order->id,
                ]);
                clothes::find($clothe_id)->update([
                    'sales_price' => $request->sales[$key],
                    'purchase_price' => $request->purchase[$key],
                    'sales_price_set' => $request->sales_isset[$key],
                ]);
            }
            $this->logActivity(trans('log.actions.supply_added'), trans('log.models.clothes_order.supply_added', ['order_id' => $order->id]));
            \DB::commit();

            return redirect()->route('clothes_order.index', 1)->with('success', trans('general.success'));
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
                    'quantity_in' => $request->qty[$key],
                    'quantity_out' => '0',
                    'order_id' => $request->order_id,
                ]);
                clothes::find($clothe_id)->update([
                    'sales_price' => $request->sales[$key],
                    'purchase_price' => $request->purchase[$key],
                    'sales_price_set' => $request->sales_isset[$key],
                ]);
            }
            $this->logActivity(trans('log.actions.supply_updated'), trans('log.models.clothes_order.supply_updated', ['order_number' => $order->auto_number]));
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
            $school = $this->getSchool();
            $order = clothes_order::with('stocks')->find($id);

            return view('backend.clothes_order.show', get_defined_vars());
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $school = $this->getSchool();
            $order = clothes_order::with('stocks')->find($id);

            return view('backend.clothes_order.edit', get_defined_vars());
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function clothes_out_order()
    {
        $school = $this->getSchool();
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
            $this->logActivity(trans('log.actions.deleted'), trans('log.models.clothes_order.supply_deleted', ['order_number' => $order->auto_number]));
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
                'isset_order' => ($request->isset == 'on') ? 1 : 0,
                'school_id' => $this->getSchool()->id,
                'user_id' => auth()->user()->id,
            ]);
            foreach ($request->id as $key => $clothe_id) {
                \DB::table('clothes_stocks')->insert([
                    'clothes_id' => $clothe_id,
                    'quantity_out' => $request->quantity[$key],
                    'quantity_in' => '0',
                    'order_id' => $order->id,
                ]);
            }
            $this->logActivity(trans('log.actions.out_order_added'), trans('log.models.clothes_order.out_order_added', ['order_id' => $order->id, 'student_name' => Student::findorfail($request->student_id)->name]));
            \DB::commit();

            return redirect()->route('clothes_order.print', $order->id)->with('success', trans('general.success'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function clothes_out_order_print($id)
    {
        try {
            $order = clothes_order::where('id', $id)->with('stocks', 'students')->first();
            $school = $this->getSchool();

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
            $school = $this->getSchool();

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
                    'quantity_out' => $request->quantity[$key],
                ];

                $order->stocks()->syncWithPivotValues($order_id, $clothes);
            }
            $this->logActivity(trans('log.actions.out_order_updated'), trans('log.models.clothes_order.out_order_updated', ['order_id' => $order->id, 'student_name' => Student::findorfail($request->student_id)->name]));

            return redirect()->route('clothes_order.print', $order->id)->with('success', trans('general.success'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function clothes_order_gard()
    {
        try {
            $school = $this->getSchool();
            $stocks = clothes::with('grade', 'classroom')->get();
            if ($stocks->count() == 0) {
                return redirect()->back()->with('error', 'لا يوجد منتجات');
            }
            $generate_code = clothes_order::where('type', '3')->orderBy('auto_number', 'desc')->first();
            $order = clothes_order::create([
                'auto_number' => isset($generate_code) ? str_pad($generate_code->auto_number + 1, 6, '0', STR_PAD_LEFT) : '000001',
                'type' => '3',
                'date' => date('Y-m-d'),
            ]);
            $this->logActivity(trans('log.actions.inventory_order_added'), trans('log.models.clothes_order.inventory_order_added', ['order_number' => $order->auto_number]));

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
                $qty = $request->actual_stock[$key] - ($stock->opening_qty + $current_qty->sum('quantity_in') - $current_qty->sum('quantity_out'));
                \DB::table('clothes_stocks')->Insert([
                    'order_id' => $request->id,
                    'clothes_id' => $stock->id,
                    'quantity_out' => $qty < 0 ? abs($qty) : 0,
                    'quantity_in' => $qty > 0 ? $qty : 0,
                ]);
                $this->logActivity(trans('log.actions.stock_added_to_inventory'), trans('log.models.clothes_order.stock_added_to_inventory', ['stock_name' => $stock->name, 'inventory_number' => $request->id]));
            }

            return redirect()->route('clothes.index')->with('success', 'تم الاضافة بنجاح');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function pay($id)
    {
        try {
            $school = $this->getSchool();
            $order = clothes_order::findorfail($id);
            $order->update(['is_payed' => 1]);
            $this->logActivity(trans('log.actions.receipt_updated_to_paid'), trans('log.models.clothes_order.receipt_updated_to_paid', ['order_number' => $order->auto_number]));

            return redirect()->route('clothes_order.index', ['type' => 2])->with('info', 'تم الدفع بنجاح');
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
