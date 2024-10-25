<?php

namespace App\Http\Controllers;

use App\Models\acadmice_year;
use App\Models\Grade;
use App\Models\Recipt_payment;
use App\Models\stock;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $acadmeic_years = acadmice_year::where('status', 0)->get();
        $stocks = stock::get();

        return view('backend.report.index', get_defined_vars());
    }

    public function ExportStudents()
    {
        $students = Grade::with(['students'])->withcount('students')->get();

        return view('backend.report.students', get_defined_vars());
    }

    public function daily_paymnet(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $data = Recipt_Payment::whereBetween('date', [$start_date, $end_date])->with(['student'])->get();
        $date = [];
        $date['from'] = $start_date;
        $date['to'] = $end_date;

        return view('backend.report.daily_fee_view', get_defined_vars());
    }

    public function StockProducts()
    {
        $stocks = stock::with('orders')->get();

        return view('backend.report.stock_product', get_defined_vars());
    }

    public function stock_product(Request $request)
    {
        $stock = stock::where('id', $request->stock)->with('orders')->first();
        $stocks = $this->calculateTotals($stock);

        return view('backend.report.stock_product_view', get_defined_vars());

    }

    private function calculateTotals($stocks)
    {
        $previousstock = 0;
        $totals = [];

        foreach ($stocks->orders->sortBy('created_at') as $stock) {
            $previousstock += $stock->pivot->quantity_in - $stock->pivot->quantity_out;
            $totals[$stock->id] = [
                'stk' => $stock,
                'total' => $previousstock,
            ];
        }

        return $totals;
    }
}
