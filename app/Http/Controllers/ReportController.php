<?php

namespace App\Http\Controllers;

use App\Models\acadmice_year;
use App\Models\book_sheet;
use App\Models\clothes;
use App\Models\ExcptionFees;
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
        $clothes = clothes::with('grade:id,name', 'classroom:id,name')->get();
$books_sheets=book_sheet::with('grade:id,name','classroom:id,name')->get();
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

        return $pdf->stream('students.pdf');
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

    public function clothes_stocks()
    {
        $data = clothes::with('orders', 'classroom', 'grade')->get();
        $pdf = PDF::loadView('backend.report.clothes_stocks', ['data' => $data], [], [
            'format' => 'A4',
            'default_font_size' => 10,
            'margin_left' => 10,
            'margin_right' => 10,
            'margin_top' => 25,
            'margin_bottom' => 10,
            'margin_header' => 1,
            'margin_footer' => 2,
            'orientation' => 'P',
        ]);

        return $pdf->stream('clothes.pdf');
    }
    public function books_sheets()
    {
        $data = book_sheet::with('orders', 'classroom', 'grade')->get();
        $pdf = PDF::loadView('backend.report.books_sheets_stocks', ['data' => $data], [], [
            'format' => 'A4',
            'default_font_size' => 10,
            'margin_left' => 10,
            'margin_right' => 10,
            'margin_top' => 25,
            'margin_bottom' => 10,
            'margin_header' => 1,
            'margin_footer' => 2,
            'orientation' => 'P',
        ]);

        return $pdf->stream('clothes.pdf');
    }

    public function clothe_stock(Request $request)
    {
        $id = $request->stock;
        $data['stock'] = clothes::where('id', $id)->with('orders')->first();

        $data['total'] = $this->calculateTotals($data['stock']);

        $pdf = PDF::loadView('backend.report.clothe_stock', ['data' => $data], [], [
            'format' => 'A4',
            'default_font_size' => 10,
            'margin_left' => 10,
            'margin_right' => 10,
            'margin_top' => 25,
            'margin_bottom' => 10,
            'margin_header' => 1,
            'margin_footer' => 2,
            'orientation' => 'P',
        ]);

        return $pdf->stream('clothes.pdf');
    }public function book_sheet_stock(Request $request)
    {
        $id = $request->stock;
        $data['stock'] = book_sheet::where('id', $id)->with('orders')->first();

        $data['total'] = $this->calculateTotals($data['stock']);

        $pdf = PDF::loadView('backend.report.book_sheet_stock', ['data' => $data], [], [
            'format' => 'A4',
            'default_font_size' => 10,
            'margin_left' => 10,
            'margin_right' => 10,
            'margin_top' => 25,
            'margin_bottom' => 10,
            'margin_header' => 1,
            'margin_footer' => 2,
            'orientation' => 'P',
        ]);

        return $pdf->stream('book_sheet.pdf');
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
        $data['acc'] = acadmice_year::whereYear('year_start', $year_start)->first();
        if (is_null($data['acc'])) {
            return redirect()->back()->with('info', trans('General.noDataToShow'));
        }
        if ($type == 41) {
            $data['students'] = Student::where('acadmiecyear_id', $data['acc']->id)->with('parent','grade','classroom')->orderBy('gender', 'DESC')->orderBy('name', 'ASC')->get()->groupBy('classroom.name');

        $pdf = PDF::loadView('backend.report.41', ['data' => $data], [], [
            'format' => 'A4',
            'default_font_size' => 10,
            'margin_left' => 5,
            'margin_right' => 5,
            'margin_top' => 2,
            'margin_bottom' => 10,
            'margin_header' => 1,
            'margin_footer' => 1,
            'orientation' => 'L',
        ]);

        return $pdf->stream('student_41.pdf');

        }

    }
    public function exception_fee (Request $request){
        $data['begin'] = Carbon::parse($request->start_date)->format('Y-m-d');
        $data['end'] = Carbon::parse($request->end_date)->format('Y-m-d');
        $data['exception_list']= ExcptionFees::whereBetween('date',[$data['begin'],$data['end']])->with('students:id,name,parent_id')->get();
        $pdf = PDF::loadView('backend.report.exception_view', ['data' => $data], [], [
            'format' => 'A4',
            'default_font_size' => 10,
            'margin_left' => 5,
            'margin_right' => 5,
            'margin_top' => 25,
            'margin_bottom' => 25,
            'margin_header' => 1,
            'margin_footer' => 1,
            'orientation' => 'P',
        ]);

        return $pdf->stream('exception_fee.pdf');

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