<?php

namespace App\Http\Controllers;

use App\Models\acadmice_year;
use App\Models\Grade;
use App\Models\Recipt_payment;
use App\Models\stock;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PDF;

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
        $data = Grade::with(['students'])->withcount('students')->get();
        $pdf = PDF::loadView('backend.report.students', ['data' => $data], [], [
            'format' => 'A4',
            'default_font_size' => 10,
            'margin_left' => 2,
            'margin_right' => 2,
            'margin_top' => 35,
            'margin_bottom' => 10,
            'margin_header' => 2,
            'margin_footer' => 2,
            'orientation' => 'L',
        ]);

        return $pdf->stream('d.pdf');
        //return view('backend.report.students', get_defined_vars());
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

    public function student_report($type)
    {
        $year_start = Carbon::now()->format('Y');
        $acc = acadmice_year::whereYear('year_start', $year_start)->first();

        if (is_null($acc)) {
            return redirect()->back()->with('info', trans('General.noDataToShow'));
        }
        if ($type == 41) {
            $students = Student::where('acadmiecyear_id', $acc->id)->with('parent')->orderBy('gender', 'DESC')->orderBy('name', 'ASC')->get()->groupBy('student_status');

            return view('backend.report.41', get_defined_vars());

        }

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
