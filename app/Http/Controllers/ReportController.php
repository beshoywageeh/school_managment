<?php

namespace App\Http\Controllers;

use App\Models\acadmice_year;
use App\Models\book_sheet;
use App\Models\class_room;
use App\Models\clothes;
use App\Models\ExcptionFees;
use App\Models\Fee_invoice;
use App\Models\Grade;
use App\Models\PaymentParts;
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
        $books_sheets = book_sheet::with('grade:id,name', 'classroom:id,name')->get();
        $grades = grade::with('class_rooms:id,name,grade_id')->get(['id', 'name']);

        return view('backend.report.index', get_defined_vars());
    }

    public function ExportStudents()
    {
        $data = Grade::select('id', 'name', 'created_at', 'updated_at')->withCount('students')->get();
        $data->load('students:id,name,grade_id,student_status,birth_date,birth_at_begin,gender,parent_id');

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

        return $pdf->download('students.pdf');
        //return view('backend.report.students', get_defined_vars());
    }

    public function payment_parts(Request $request)
    {
        $data['from'] = Carbon::parse($request->from)->format('Y-m-d');
        $data['to'] = Carbon::parse($request->to)->format('Y-m-d');
        if ($request->payment_status == 2) {
            $parts = PaymentParts::whereBetween('date', [$data['from'], $data['to']])->get();

            return $parts;
        } else {
            $parts = PaymentParts::whereBetween('date', [$data['from'], $data['to']])->where('payment_status', $request->payment_status)->get();

            return 1;
        }
    }

    public function StockProducts()
    {
        $data['stocks'] = stock::with('orders')->get();
        $pdf = PDF::loadView('backend.report.stock_product', ['data' => $data], [], [
            'format' => 'A4',
            'default_font_size' => 10,
            'margin_left' => 10,
            'margin_right' => 10,

            'margin_header' => 1,
            'margin_footer' => 2,
            'orientation' => 'P',
        ]);

        return $pdf->stream('stocks.pdf');
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
    }

    public function book_sheet_stock(Request $request)
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
        $data['stock'] = stock::where('id', $request->stock)->with('orders')->first();

        $data['stocks'] = $this->calculateTotals($data['stock']);
        $pdf = PDF::loadView('backend.report.stock_product_view', ['data' => $data], [], [
            'format' => 'A4',
            'default_font_size' => 10,
            'margin_left' => 10,
            'margin_right' => 10,
            'margin_header' => 1,
            'margin_footer' => 10,
            'orientation' => 'P',
        ]);

        return $pdf->stream($data['stock']->name.'.pdf');
    }

    public function student_report($type, Request $request)
    {
        $year_start = Carbon::now()->format('Y');
        $data['acc'] = acadmice_year::whereYear('year_start', $year_start)->first();

        if (is_null($data['acc'])) {
            return redirect()->back()->with('info', trans('General.noDataToShow'));
        }
        if ($type == 41) {
            $data['students'] = Student::where('classroom_id', $request->classroom_id)->where('student_status', 0)->where('acadmiecyear_id', $data['acc']->id)
                ->with(['parent:id,Father_Name,address', 'grade:id,name', 'classroom:id,name'])
                ->orderBy('gender', 'DESC')
                ->orderBy('name', 'ASC')
                ->orderBy('religion', 'ASC')
                ->get(['id', 'name', 'student_status', 'classroom_id', 'grade_id', 'parent_id', 'national_id', 'religion', 'birth_date', 'birth_at_begin'])->chunk(100);

            $data['classroom'] = class_room::where('id', $request->classroom_id)->with('grade')->first();

            // Stream PDF generation to handle memory efficiently
            return \PDF::loadView('backend.report.41', compact('data'), [], [
                'format' => 'A4',
                'default_font_size' => 10,
                'margin_left' => 5,
                'margin_right' => 5,
                'margin_top' => 35,
                'margin_bottom' => 20,
                'margin_header' => 1,
                'margin_footer' => 1,
                'orientation' => 'L',
            ])
                ->stream('student_41.pdf');
        }
    }

    public function exception_fee(Request $request)
    {
        $data['begin'] = Carbon::parse($request->start_date)->format('Y-m-d');
        $data['end'] = Carbon::parse($request->end_date)->format('Y-m-d');
        $data['exception_list'] = ExcptionFees::whereBetween('date', [$data['begin'], $data['end']])->with('students:id,name,parent_id')->get();
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

    public function payment_status(Request $request)
    {
        $year = Carbon::now()->format('Y');
        $grade = $request->grade;
        $data['acc_year'] = acadmice_year::whereyear('year_start', $year)->first(['id', 'view']);
        if ($grade == 0) {
            $data['exp'] = Fee_invoice::where('academic_year_id', $data['acc_year']->id)->where('status', $request->payment_status)->with('grades:id,name', 'students:id,name')->get(['student_id', 'grade_id'])->groupBy('grades.name');
        } else {
            $data['exp'] = Fee_invoice::where('academic_year_id', $data['acc_year']->id)->where('grade_id', $grade)->where('status', $request->payment_status)->with('grades:id,name', 'students:id,name')->get(['student_id', 'grade_id'])->groupBy('grades.name');
        }
        $pdf = PDF::loadView('backend.report.payment_status_view', ['data' => $data], [], [
            'format' => 'A4',
            'default_font_size' => 10,
            'margin_left' => 5,
            'margin_right' => 5,
            'margin_top' => 5,
            'margin_bottom' => 25,
            'margin_header' => 1,
            'margin_footer' => 1,
            'orientation' => 'P',
        ]);

        return $pdf->stream('payment_status.pdf');
    }

    public function payments(Request $request)
    {
        $data['from'] = Carbon::parse($request->from)->format('Y-m-d');
        $data['to'] = Carbon::parse($request->to)->format('Y-m-d');
        $data['payment'] = Recipt_payment::whereBetween('date', [$data['from'], $data['to']])->with(['student' => function ($q) {
            $q->with('classroom');
        }], 'acc_year')->get();
        $pdf = PDF::loadView('backend.report.payments', ['data' => $data], [], [
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

        return $pdf->stream('payments.pdf');

    }

    public function fees_invoices(Request $request)
    {
        $grade = $request->grade;
        $payment_status = $request->payment_status;
        $start = $request->from;
        $end = $request->to;
        $year = Carbon::now()->format('Y');
        $data['acc_year'] = acadmice_year::whereyear('year_start', $year)->first(['id', 'view']);
        if ($grade == 0 && $payment_status == 0 && $start == '' && $end == '') {
            $data['all'] = Fee_invoice::with('grades:id,name', 'classes:id,name', 'students:id,name', 'acd_year:id,view')->get(['id', 'student_id', 'grade_id', 'classroom_id', 'academic_year_id', 'school_fee_id', 'status'])->groupBy(['acd_year.view', 'grades.name', 'classes.name']);

            return $data;
        }
    }

    public function student_tameen(Request $request)
    {
        $data['type'] = $request->type;
        $data['classroom'] = class_room::findorfail($request->classroom_id);
        $date = Carbon::now()->format('Y');
        $data['aa'] = acadmice_year::whereyear('year_start', $date)->first();
        $data['students'] = student::where('classroom_id', $request->classroom_id)->where('tameen', 1)->with('parent:id,Father_Phone,address')->get(['name', 'national_id', 'parent_id', 'birth_date', 'gender']);
        if (is_null($data['students'])) {
            return redirect()->back()->with('info', trans('report.no_data_found'));
        }

        if ($data['type'] == 1) {
            $pdf = PDF::loadView('backend.report.student_tameen_1', ['data' => $data], [], [
                'format' => 'A4',
                'default_font_size' => 10,
                'margin_left' => 5,
                'margin_right' => 5,
                'margin_top' => 20,
                'margin_bottom' => 25,
                'margin_header' => 2,
                'margin_footer' => 1,
                'orientation' => 'P',
            ]);

            return $pdf->stream('tammen.pdf');
        } else {
            $pdf = PDF::loadView('backend.report.student_tameen_2', ['data' => $data], [], [
                'format' => 'A4',
                'default_font_size' => 10,
                'margin_left' => 5,
                'margin_right' => 5,
                'margin_top' => 20,
                'margin_bottom' => 25,
                'margin_header' => 2,
                'margin_footer' => 1,
                'orientation' => 'P',
            ]);

            return $pdf->stream('tammen.pdf');
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
