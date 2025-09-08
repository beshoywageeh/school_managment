<?php

namespace App\Http\Controllers;

use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\order;
use App\Models\stock;
use Exception;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    use LogsActivity, SchoolTrait;

    public function index()
    {
        $school = $this->getSchool();
        $orders = order::where('school_id', $school->id)->where('type', 1)->withcount('stocks')->get();
        $type = 1;

        return view('backend.orders.index', get_defined_vars());
    }

    public function show($id)
    {
        try {
            $order = order::with('stocks')->findorFail($id);
            $type = 1;
            $school = $this->getSchool();

            return view('backend.orders.show', get_defined_vars());
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function store()
    {
        try {
            $generate_code = order::where('type', '1')->orderBy('auto_number', 'desc')->first();
            $order = order::create([
                'auto_number' => isset($generate_code) ? str_pad($generate_code->auto_number + 1, 6, '0', STR_PAD_LEFT) : '000001',
                'type' => '1',
                'school_id' => $this->getSchool()->id,
                'user_id' => auth()->user()->id,
            ]);
            $this->logActivity('إضافة', 'إضافة أمر توريد رقم'.$order->auto_number);

            return redirect()->route('stock.tawreed', $order->id);
        } catch (Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    public function edit($id)
    {
        try {
            $order = order::with('stocks')->findorFail($id);
            $stocks = stock::get('id', 'name');
            $type = 1;
            $school = $this->getSchool();

            return view('backend.orders.edit', get_defined_vars());
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function update(Request $request)
    {

        try {
            $order = Order::findOrFail($request->order_id);
            foreach ($request->product as $key => $productName) {
                $product = Stock::where('name', $productName)->first()->id;

                $stocks = [
                    'manual' => $request->manual[$key], // updated line
                    'stock_id' => $product, // updated line
                    'order_id' => $order->id,
                    'manual_date' => $request->manual_date[$key],
                    'quantity_in' => $request->quantity[$key],
                ];
                $order->stocks()->syncWithPivotValues('order_id', $stocks);
            }
            $this->logActivity('تعديل', 'تعديل أمر توريد رقم'.$order->auto_number);
            session()->flash('success', 'تم التعديل بنجاح');

            return redirect()->route('order.index');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $order = order::withcount('stocks')->findorFail($id);
            if ($order->stocks_count > 0) {
                session()->flash('error', 'لا يمكن حذف هذا الامر');

                return redirect()->back();
            }
            $order->delete();
            $this->logActivity('حذف', 'حذف أمر توريد رقم'.$order->auto_number);
            session()->flash('success', 'تم الحذف بنجاح');

            return redirect()->back();
        } catch (Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    } //
}
