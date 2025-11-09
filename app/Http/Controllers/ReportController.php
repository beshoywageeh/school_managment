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

        return view('backend.report.index', get_defined_vars());
    }

    private function get_export_students_data()
    {
        $data=[];
        $data['grade'] = Grade::select('id', 'name', 'created_at', 'updated_at')->withCount('students')->get();
        $data['grade']->load('students:id,name,grade_id,student_status,birth_date,birth_at_begin,gender,parent_id');
        $data['school_data']=$this->getSchool();
        return $data;
    }

    public function export_students_view()
    {
        $data = $this->get_export_students_data();
        $data['is_pdf'] = false;
        return view('backend.report.students', ['data' => $data]);
    }

    public function export_students_pdf(PDFExportService $PDFExportService)
    {
        $data = $this->get_export_students_data();
        $data['is_pdf'] = true;
        return $PDFExportService->PrintPDF('students','stream',$data,'L');
    }

    private function get_payment_parts_data(Request $request)
    {
        $data = [];
        $data['from'] = Carbon::parse($request->from)->format('Y-m-d');
        $data['to'] = Carbon::parse($request->to)->format('Y-m-d');
        $query = PaymentParts::whereBetween('date', [$data['from'], $data['to']])->with('students', 'grades', 'classes');
        if ($request->payment_status != 2) {
            $query->where('payment_status', $request->payment_status);
        }
        $data['parts'] = $query->get();
        $data['school_data']=$this->getSchool();
        return $data;
    }

    public function payment_parts_view(Request $request)
    {
        $data = $this->get_payment_parts_data($request);
        $data['is_pdf'] = false;
        return view('backend.report.payments_part', ['data' => $data]);
    }

    public function payment_parts_pdf(Request $request, PDFExportService $PDFExportService)
    {
        $data = $this->get_payment_parts_data($request);
        $data['is_pdf'] = true;
        return $PDFExportService->PrintPDF('payments_part','stream',$data,'P');
    }

    private function get_stock_products_data()
    {
        $data=[];
        $data['stocks'] = stock::with('orders')->get();
        $data['school_data']=$this->getSchool();
        return $data;
    }

    public function stock_products_view()
    {
        $data = $this->get_stock_products_data();
        $data['is_pdf'] = false;
        return view('backend.report.stock_products', ['data' => $data]);
    }

    public function stock_products_pdf(PDFExportService $PDFExportService)
    {
        $data = $this->get_stock_products_data();
        $data['is_pdf'] = true;
        return $PDFExportService->PrintPDF('stock_products','stream',$data,'P');
    }

    private function get_clothes_stocks_data()
    {
        $data=[];
        $data['school_data']=$this->getSchool();

        $data['clothes'] = clothes::with('orders', 'classroom', 'grade')->get();
        return $data;
    }

    public function clothes_stocks_view()
    {
        $data = $this->get_clothes_stocks_data();
        $data['is_pdf'] = false;
        return view('backend.report.clothes_stocks', ['data' => $data]);
    }

    public function clothes_stocks_pdf(PDFExportService $PDFExportService)
    {
        $data = $this->get_clothes_stocks_data();
        $data['is_pdf'] = true;
        return $PDFExportService->PrintPDF('clothes','stream',$data,'P');
    }

    public function books_sheets(PDFExportService $PDFExportService)
    {
        $data=[];
        $data['school_data']=$this->getSchool();

        $data['book_sheet'] = book_sheet::with('orders', 'classroom', 'grade')->get();
        return $PDFExportService->PrintPDF('books_sheet','stream',$data,'P');

    }

    public function clothe_stock(Request $request,PDFExportService $PDFExportService)
    {
        $data=[];
        $id = $request->stock;
        $data['stock'] = clothes::where('id', $id)->with('orders')->first();

        if (!$data['stock']) {
            return redirect()->back()->with('info', trans('report.no_data_found'));
        }

        $data['total'] = $this->calculateTotals($data['stock']);

        $data['school_data']=$this->getSchool();
        return $PDFExportService->PrintPDF('clothe_stock','stream',$data,'P');
        
    }

    private function get_book_sheet_stock_data(Request $request)
    {
        $id = $request->stock;
        $data['stock'] = book_sheet::where('id', $id)->with('orders')->first();

        if (!$data['stock']) {
            return null;
        }

        $data['total'] = $this->calculateTotals($data['stock']);
        $data['school_data'] = $this->getSchool();
        return $data;
    }

    public function book_sheet_stock_view(Request $request)
    {
        $data = $this->get_book_sheet_stock_data($request);
        if (!$data) {
            return redirect()->back()->with('info', trans('report.no_data_found'));
        }
        $data['is_pdf'] = false;
        return view('backend.report.book_sheet_stock', ['data' => $data]);
    }

    public function book_sheet_stock_pdf(Request $request, PDFExportService $PDFExportService)
    {
        $data = $this->get_book_sheet_stock_data($request);
        if (!$data) {
            return redirect()->back()->with('info', trans('report.no_data_found'));
        }
        $data['is_pdf'] = true;
        return $PDFExportService->PrintPDF('book_sheet_stock', 'stream', $data, 'P');
    }

    private function get_stock_product_data(Request $request)
    {
        $data['stock'] = stock::where('id', $request->stock)->with('orders')->first();

        if (!$data['stock']) {
            return null;
        }

        $data['stocks'] = $this->calculateTotals($data['stock']);
        $data['school_data'] = $this->getSchool();
        return $data;
    }

    public function stock_product_view(Request $request)
    {
        $data = $this->get_stock_product_data($request);
        if (!$data) {
            return redirect()->back()->with('info', trans('report.no_data_found'));
        }
        $data['is_pdf'] = false;
        return view('backend.report.stock_product_view', ['data' => $data]);
    }

    public function stock_product_pdf(Request $request, PDFExportService $PDFExportService)
    {
        $data = $this->get_stock_product_data($request);
        if (!$data) {
            return redirect()->back()->with('info', trans('report.no_data_found'));
        }
        $data['is_pdf'] = true;
        return $PDFExportService->PrintPDF('stock_product_view', 'stream', $data, 'P');
    }

    private function get_student_report_data($type, Request $request)
    {
        $year_start = Carbon::now()->format('Y');
        $data['acc'] = acadmice_year::whereYear('year_start', $year_start)->first();

        if (is_null($data['acc'])) {
            return null;
        }
        if ($type == 41) {
            $data['students'] = Student::where('classroom_id', $request->classroom_id)->where('student_status', 0)->where('acadmiecyear_id', $data['acc']->id)
                ->with(['parent:id,Father_Name,address', 'grade:id,name', 'classroom:id,name'])
                ->orderBy('gender', 'DESC')
                ->orderBy('name', 'ASC')
                ->orderBy('religion', 'ASC')
                ->get(['id', 'name', 'student_status', 'classroom_id', 'grade_id', 'parent_id', 'national_id', 'religion', 'birth_date', 'birth_at_begin'])->chunk(100);

            $data['classroom'] = class_room::where('id', $request->classroom_id)->with('grade')->first();

            $data['school_data'] = $this->getSchool();
            return $data;
        }
        return null; // Handle other types or no data found
    }

    public function student_report_view($type, Request $request)
    {
        $data = $this->get_student_report_data($type, $request);
        if (is_null($data)) {
            return redirect()->back()->with('info', trans('General.noDataToShow'));
        }
        $data['is_pdf'] = false;
        return view('backend.report.41', ['data' => $data]);
    }

    public function student_report_pdf($type, Request $request, PDFExportService $PDFExportService)
    {
        $data = $this->get_student_report_data($type, $request);
        if (is_null($data)) {
            return redirect()->back()->with('info', trans('General.noDataToShow'));
        }
        $data['is_pdf'] = true;
        return $PDFExportService->PrintPDF('41', 'stream', $data, 'L');
    }

    private function get_exception_fee_data(Request $request)
    {
        $data['begin'] = Carbon::parse($request->start_date)->format('Y-m-d');
        $data['end'] = Carbon::parse($request->end_date)->format('Y-m-d');
        $data['exception_list'] = ExcptionFees::whereBetween('date', [$data['begin'], $data['end']])->with('students:id,name,parent_id')->get();
        $data['school_data'] = $this->getSchool();
        return $data;
    }

    public function exception_fee_view(Request $request)
    {
        $data = $this->get_exception_fee_data($request);
        $data['is_pdf'] = false;
        return view('backend.report.exception_view', ['data' => $data]);
    }

    public function exception_fee_pdf(Request $request, PDFExportService $PDFExportService)
    {
        $data = $this->get_exception_fee_data($request);
        $data['is_pdf'] = true;
        return $PDFExportService->PrintPDF('exception_view', 'stream', $data, 'P');
    }

    private function get_payment_status_data(Request $request)
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
        $data['school_data'] = $this->getSchool();
        return $data;
    }

    public function payment_status_view(Request $request)
    {
        $data = $this->get_payment_status_data($request);
        $data['is_pdf'] = false;
        return view('backend.report.payment_status_view', ['data' => $data]);
    }

    public function payment_status_pdf(Request $request, PDFExportService $PDFExportService)
    {
        $data = $this->get_payment_status_data($request);
        $data['is_pdf'] = true;
        return $PDFExportService->PrintPDF('payment_status_view', 'stream', $data, 'P');
    }

    private function get_payments_data(Request $request)
    {
        $data['from'] = Carbon::parse($request->from)->format('Y-m-d');
        $data['to'] = Carbon::parse($request->to)->format('Y-m-d');
        $data['payment'] = Recipt_Payment::whereBetween('date', [$data['from'], $data['to']])->with(['student' => function ($q) {
            $q->with('classroom');
        }], 'acc_year')->get();
        $data['school_data'] = $this->getSchool();
        return $data;
    }

    public function payments_view(Request $request)
    {
        $data = $this->get_payments_data($request);
        $data['is_pdf'] = false;
        return view('backend.report.payments', ['data' => $data]);
    }

    public function payments_pdf(Request $request, PDFExportService $PDFExportService)
    {
        $data = $this->get_payments_data($request);
        $data['is_pdf'] = true;
        return $PDFExportService->PrintPDF('payments', 'stream', $data, 'P');
    }

    private function get_fees_invoices_data(Request $request)
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
        $data['school_data'] = $this->getSchool();
        return $data;
    }

    public function fees_invoices_view(Request $request)
    {
        $data = $this->get_fees_invoices_data($request);
        $data['is_pdf'] = false;
        return view('backend.report.fee_invoices', ['data' => $data]);
    }

    public function fees_invoices_pdf(Request $request, PDFExportService $PDFExportService)
    {
        $data = $this->get_fees_invoices_data($request);
        $data['is_pdf'] = true;
        return $PDFExportService->PrintPDF('fee_invoices', 'stream', $data, 'P');
    }

    private function get_student_tameen_data(Request $request)
    {
        $data['type'] = $request->type;
        $data['classroom'] = class_room::findorfail($request->classroom_id);
        $date = Carbon::now()->format('Y');
        $data['aa'] = acadmice_year::whereyear('year_start', $date)->first();
        $data['students'] = student::where('classroom_id', $request->classroom_id)->where('tameen', 1)->with('parent:id,Father_Phone,address')->get(['name', 'national_id', 'parent_id', 'birth_date', 'gender']);
        if (is_null($data['students'])) {
            return null;
        }

        $data['school_data'] = $this->getSchool();
        return $data;
    }

    public function student_tameen_view(Request $request)
    {
        $data = $this->get_student_tameen_data($request);
        if (is_null($data)) {
            return redirect()->back()->with('info', trans('report.no_data_found'));
        }
        $data['is_pdf'] = false;
        if ($data['type'] == 1) {
            return view('backend.report.student_tameen_1', ['data' => $data]);
        } else {
            return view('backend.report.student_tameen_2', ['data' => $data]);
        }
    }

    public function student_tameen_pdf(Request $request, PDFExportService $PDFExportService)
    {
        $data = $this->get_student_tameen_data($request);
        if (is_null($data)) {
            return redirect()->back()->with('info', trans('report.no_data_found'));
        }
        $data['is_pdf'] = true;
        if ($data['type'] == 1) {
            return $PDFExportService->PrintPDF('student_tameen_1', 'stream', $data, 'P');
        } else {
            return $PDFExportService->PrintPDF('student_tameen_2', 'stream', $data, 'P');
        }
    }

    private function get_credit_data(Request $request)
    {
        $query = Fee_invoice::where('status', 0)->with('students', 'grades', 'classes', 'fees', 'acd_year');

        if ($request->acc_year && $request->acc_year != 0) {
            $query->where('academic_year_id', $request->acc_year);

        }
        $data['credit'] = $query->get();

        $data['school_data'] = $this->getSchool();
        return $data;
    }

    public function credit_view(Request $request)
    {
        $data = $this->get_credit_data($request);
        $data['is_pdf'] = false;
        return view('backend.report.credit', ['data' => $data]);
    }

    public function credit_pdf(Request $request, PDFExportService $PDFExportService)
    {
        $data = $this->get_credit_data($request);
        $data['is_pdf'] = true;
        return $PDFExportService->PrintPDF('credit', 'stream', $data, 'P');
    }

    private function get_school_fees_data()
    {
        $date = date('Y');
        $data['acc_year'] = acadmice_year::whereYear('year_start', $date)->first(['id', 'view']);
        $data['school_fees'] = School_Fee::where('academic_year_id', $data['acc_year']->id)->with(['grade:id,name', 'classroom:id,name'])->get()->groupBy(['grade.name', 'classroom.name']);
        $data['school_data'] = $this->getSchool();
        return $data;
    }

    public function school_fees_view()
    {
        $data = $this->get_school_fees_data();
        $data['is_pdf'] = false;
        return view('backend.report.school_fees', ['data' => $data]);
    }

    public function school_fees_pdf(PDFExportService $PDFExportService)
    {
        $data = $this->get_school_fees_data();
        $data['is_pdf'] = true;
        return $PDFExportService->PrintPDF('school_fees', 'stream', $data, 'P');
    }

    private function calculateTotals($stocks)
    {
        $previousstock = 0;
        $totals = [];

        if ($stocks && $stocks->orders) {
            foreach ($stocks->orders->sortBy('created_at') as $stock) {
                $previousstock += $stock->pivot->quantity_in - $stock->pivot->quantity_out;
                $totals[$stock->id] = [
                    'stk' => $stock,
                    'total' => $previousstock,
                ];
            }
        }

        return $totals;
    }
}

