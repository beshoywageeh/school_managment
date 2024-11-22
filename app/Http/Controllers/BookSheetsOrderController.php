<?php

namespace App\Http\Controllers;

use App\Http\Traits\LogsActivity;
use App\Models\book_sheet;
use App\Models\bookSheets_order;
use Illuminate\Http\Request;

class BookSheetsOrderController extends Controller
{
    use LogsActivity;

    public function index($type)
    {
        $orders = bookSheets_order::where('type', $type)->with('stocks')->get();

        return view('backend.book_sheets_order.index', compact('orders', 'type'));
    }

    public function create_tawreed()
    {
        $books_sheets = book_sheet::with('grade', 'classroom')->get();
        if ($books_sheets->count() == 0) {
            return redirect()->route('books_sheets.index')->with('info', trans('general.noDataToShow'));
        }
        $generate_code = bookSheets_order::where('type', '1')->orderBy('auto_number', 'desc')->first();

        $auto_number = isset($generate_code) ? str_pad($generate_code->auto_number + 1, 6, '0', STR_PAD_LEFT) : '000001';

        return view('backend.book_sheets_order.create_tawreed', compact('auto_number', 'books_sheets'));
    }

    public function store_tawreed(Request $request)
    {
        try {
            \DB::begintransaction();
            $generate_code = bookSheets_order::where('type', '1')->orderBy('auto_number', 'desc')->first();
            $order = bookSheets_order::create([
                'auto_number' => isset($generate_code) ? str_pad($generate_code->auto_number + 1, 6, '0', STR_PAD_LEFT) : '000001',
                'type' => '1',
                'date' => date('Y-m-d'),
                'manual_date' => $request->manual_date,
                'manual_number' => $request->manual_num,
            ]);
            foreach ($request->id as $key => $book_sheet) {
                \DB::table('books_sheets_stocks')->insert([
                    'books_sheets_id' => $book_sheet,
                    'quantity_in' => $request->qty[$key],
                    'quantity_out' => '0',
                    'order_id' => $order->id,
                ]);
            }
            $this->logActivity('إضافة', 'إضافة أمر توريد رقم'.$order->auto_number);
            \DB::commit();

            return redirect()->route('books_sheets.index')->with('success', trans('general.success'));
        } catch (\Exception $e) {
            \DB::rollback();

            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function destroy($id)
    {
        try {
            $order = bookSheets_order::find($id);
            $this->logActivity('حذف', 'تم حذف أمر توريد رقم'.$order->auto_number);
            $order->delete();
            return redirect()->back()->with('success', trans('general.success'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
