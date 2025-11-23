<?php

namespace App\Http\Controllers;

use App\Http\Traits\SchoolTrait;
use App\Models\acadmice_year;
use App\Models\book_sheet;
use App\Models\class_room;
use App\Models\clothes;
use App\Models\ExcptionFees;
use App\Models\Fee_invoice;
use App\Models\Grade;
use App\Models\PaymentParts;
use App\Models\Recipt_Payment;
use App\Models\School_Fee;
use App\Models\stock;
use App\Models\Student;
use App\Services\PDFExportService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    use SchoolTrait;

    public function index()
    {
        $school = $this->GetSchool();
        $acadmeic_years = acadmice_year::where('status', 0)->get();
        $stocks = stock::get();
        $clothes = clothes::with('grade:id,name', 'classroom:id,name')->get();
        $books_sheets = book_sheet::with('grade:id,name', 'classroom:id,name')->get();
        $grades = grade::with('class_rooms:id,name,grade_id')->get(['id', 'name']);
        $class_rooms = class_room::get();

        return view('backend.report.index', get_defined_vars());
    }

    public function ExportStudents(Request $request, PDFExportService $PDFExport)
    {
        $query = Student::select('id', 'name', 'grade_id', 'student_status', 'birth_date', 'birth_at_begin', 'gender', 'parent_id', 'religion', 'grade_id', 'classroom_id');
        if ($request->grade != 0) {
            $query->where('grade_id', $request->grade);
        }
        if ($request->classroom != 0) {
            $query->where('classroom_id', $request->classroom);
        }
        $query->with('grade', 'classroom');
        $data = $query->get()->groupby('grade.name');
        $school = $this->GetSchool();
        //    return $data;
        $PDFExport->PrintPDF('students', 'stream', $data, 'L', $school);
    }

    public function payment_parts(Request $request, PDFExportService $PDFExport)
    {
        $data['from'] = Carbon::parse($request->from)->format('Y-m-d');
        $data['to'] = Carbon::parse($request->to)->format('Y-m-d');
        $query = PaymentParts::whereBetween('date', [$data['from'], $data['to']])->with('students', 'grades', 'classes');
        if ($request->payment_status != 2) {
            $query->where('payment_status', $request->payment_status);
        }
        $data['parts'] = $query->get();
        $school = $this->GetSchool();
        $PDFExport->PrintPDF('payment_parts', 'stream', $data, 'P', $school);

    }

    public function StockProducts(PDFExportService $PDFExport)
    {
        $data['stocks'] = stock::with('orders')->get();
        $school = $this->GetSchool();
        $PDFExport->PrintPDF('stock_product', 'stream', $data, 'P', $school);

    }

    public function clothes_stocks(PDFExportService $PDFExport)
    {
        $data = clothes::with('orders', 'classroom', 'grade')->get();
        $school = $this->GetSchool();
        $PDFExport->PrintPDF('clothes_stocks', 'stream', $data, 'P', $school);

    }

    public function books_sheets(PDFExportService $PDFExport)
    {
        $data = book_sheet::with('orders', 'classroom', 'grade')->get();
        $school = $this->GetSchool();
        $PDFExport->PrintPDF('books_sheets_stocks', 'stream', $data, 'P', $school);
    }

    public function clothe_stock(Request $request, PDFExportService $PDFExport)
    {
        $data['stock'] = clothes::where('id', $request->stock)->with('orders')->first();
        $data['total'] = $this->calculateTotals($data['stock']);
        $school = $this->GetSchool();
        $PDFExport->PrintPDF('clothe_stock', 'stream', $data, 'P', $school);
    }

    public function book_sheet_stock(Request $request, PDFExportService $PDFExport)
    {
        $data['stock'] = book_sheet::where('id', $request->stock)->with('orders')->first();
        $data['total'] = $this->calculateTotals($data['stock']);
        $school = $this->GetSchool();
        $PDFExport->PrintPDF('book_sheet_stock', 'stream', $data, 'P', $school);
    }

    public function stock_product(Request $request, PDFExportService $PDFExport)
    {
        $data['stock'] = stock::where('id', $request->stock)->with('orders')->first();
        $data['stocks'] = $this->calculateTotals($data['stock']);
        $school = $this->GetSchool();
        $PDFExport->PrintPDF('stock_product_view', 'stream', $data, 'P', $school);
    }

    public function student_report($type, Request $request, PDFExportService $PDFExport)
    {
        $year_start = Carbon::now()->format('Y');
        $data['acc'] = acadmice_year::whereYear('year_start', $year_start)->first();
        $school = $this->GetSchool();
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
            $PDFExport->PrintPDF('41', 'stream', $data, 'L', $school);
        }
    }

    public function exception_fee(Request $request, PDFExportService $PDFExport)
    {
        $data['begin'] = Carbon::parse($request->start_date)->format('Y-m-d');
        $data['end'] = Carbon::parse($request->end_date)->format('Y-m-d');
        $data['exception_list'] = ExcptionFees::whereBetween('date', [$data['begin'], $data['end']])->with('students:id,name,parent_id')->get();
        $school = $this->GetSchool();

        $PDFExport->PrintPDF('exception_fee', 'stream', $data, 'P', $school);
    }

    public function payment_status(Request $request, PDFExportService $PDFExport)
    {
        $year = Carbon::now()->format('Y');
        $data['acc_year'] = acadmice_year::whereYear('year_start', $year)->first(['id', 'view']);

        $query = Fee_invoice::where('academic_year_id', $data['acc_year']->id)
            ->where('status', $request->payment_status)
            ->with('grades:id,name', 'students:id,name')
            ->select(['student_id', 'grade_id']);

        // Apply grade filter only if a specific grade is selected
        if ($request->grade && $request->grade != 0) {
            $query->where('grade_id', $request->grade);
        }
        $data['exp'] = $query->get()->groupBy('grades.name');
        $school = $this->GetSchool();
        $PDFExport->PrintPDF('payment_status_view', 'stream', $data, 'P', $school);
    }

    public function payments(Request $request, PDFExportService $PDFExport)
    {
        $data['from'] = Carbon::parse($request->from)->format('Y-m-d');
        $data['to'] = Carbon::parse($request->to)->format('Y-m-d');
        $data['payment'] = Recipt_Payment::whereBetween('date', [$data['from'], $data['to']])->with(['student' => function ($q) {
            $q->with('classroom');
        }], 'acc_year')->get();
        $school = $this->GetSchool();
        $PDFExport->PrintPDF('payments', 'stream', $data, 'P', $school);
    }

    public function fees_invoices(Request $request, PDFExportService $PDFExport)
    {
        $year = Carbon::now()->format('Y');
        $data['acc_year'] = acadmice_year::whereYear('year_start', $year)->first(['id', 'view']);

        // Prepare base query
        $query = Fee_invoice::with([
            'grades:id,name',
            'classes:id,name',
            'students:id,name',
            'acd_year:id,view',
            'fees:id,amount',
        ])->select([
            'id',
            'student_id',
            'grade_id',
            'classroom_id',
            'academic_year_id',
            'school_fee_id',
            'status',
            'invoice_date',
        ]);

        // Apply grade filter
        if ($request->grade && $request->grade != 0) {
            $query->where('grade_id', $request->grade);
        }

        // Apply payment status filter
        if ($request->payment_status && $request->payment_status != 0) {
            $query->where('status', $request->payment_status);
        }

        // Apply date range filter
        if ($request->from && $request->to) {
            // Full date range specified
            $query->whereBetween('invoice_date', [$request->from, $request->to]);
        } elseif ($request->from) {
            // Only start date specified, use current date as end date
            $query->whereBetween('invoice_date', [$request->from, Carbon::now()->format('Y-m-d')]);
        }

        // Fetch and group results
        $data['all'] = $query->get()->groupBy([
            'acd_year.view',
            'grades.name',
            'classes.name',
        ]);
        $school = $this->GetSchool();
        $PDFExport->PrintPDF('fee_invoices', 'stream', $data, 'P', $school);
    }

    public function student_tameen(Request $request, PDFExportService $PDFExport)
    {
        $data['type'] = $request->type;
        $data['classroom'] = class_room::findorfail($request->classroom_id);
        $date = Carbon::now()->format('Y');
        $data['aa'] = acadmice_year::whereyear('year_start', $date)->first();
        $data['students'] = student::where('classroom_id', $request->classroom_id)->where('tameen', 1)->with('parent:id,Father_Phone,address')->get(['name', 'national_id', 'parent_id', 'birth_date', 'gender']);
        $school = $this->GetSchool();
        if (is_null($data['students'])) {
            return redirect()->back()->with('info', trans('report.no_data_found'));
        }
        switch ($data['type']) {
            case 1:
                $PDFExport->PrintPDF('student_tameen_1', 'stream', $data, 'P', $school);
            case 2 :
                $PDFExport->PrintPDF('student_tameen_2', 'stream', $data, 'P', $school);
            default:
        }
    }

    public function credit(Request $request, PDFExportService $PDFExport)
    {
        $query = Fee_invoice::where('status', 0)->with('students', 'grades', 'classes', 'fees', 'acd_year');

        if ($request->acc_year && $request->acc_year != 0) {
            $query->where('academic_year_id', $request->acc_year);

        }
        $data['credit'] = $query->get();
        $school = $this->GetSchool();
        $PDFExport->PrintPDF('credit', 'stream', $data, 'P', $school);

    }

    public function school_fees(PDFExportService $PDFExport)
    {
        $date = date('Y');
        $data['acc_year'] = acadmice_year::whereYear('year_start', $date)->first(['id', 'view']);
        $data['school_fees'] = School_Fee::where('academic_year_id', $data['acc_year']->id)->with(['grade:id,name', 'classroom:id,name'])->get()->groupBy(['grade.name', 'classroom.name']);
        $school = $this->GetSchool();
        $PDFExport->PrintPDF('school_fees', 'stream', $data, 'P', $school);
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
