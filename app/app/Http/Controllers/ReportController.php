<?php

namespace App\Http\Controllers;

use App\Http\Traits\SchoolTrait;
use App\Models\AcademicYear;
use App\Models\ClassRoom;
use App\Models\ExceptionFees;
use App\Models\FeeInvoice;
use App\Models\Grade;
use App\Models\Inventory\InventoryItem;
use App\Models\PaymentParts;
use App\Models\ReceiptPayment;
use App\Models\SchoolFee;
use App\Models\Student;
use App\Services\Reports\FinancialReportService;
use App\Services\Reports\PDFExportService;
use App\Services\Reports\ReportService;
use App\Services\Reports\StockReportService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    use SchoolTrait;

    public function __construct(
        private PDFExportService $PDFExport,
        private ReportService $reportService,
        private StockReportService $stockReportService,
        private FinancialReportService $financialReportService,
    ) {}

    public function index()
    {
        $school = $this->GetSchool();
        $user = auth()->id();
        $user_grade = \DB::Table('teacher_grade')
            ->where('teacher_id', $user)
            ->pluck('grade_id');
        $acadmeic_years = AcademicYear::where('status', config('school.academic_year_status'))->get();
        $stocks = InventoryItem::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))
            ->where('type', 'stock')
            ->get();
        $clothes = InventoryItem::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))
            ->where('type', 'clothe')
            ->whereIn('grade_id', $user_grade)
            ->with('grade:id,name', 'classroom:id,name')
            ->get();
        $books_sheets = InventoryItem::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))
            ->where('type', 'book')
            ->whereIn('grade_id', $user_grade)
            ->with('grade:id,name', 'classroom:id,name')
            ->get();
        $grades = Grade::whereIn('id', $user_grade)
            ->with('class_rooms:id,name,grade_id')
            ->get(['id', 'name']);
        $class_rooms = ClassRoom::whereIn('grade_id', $user_grade)->get();

        return view(
            'backend.report.index',
            compact(
                'school',
                'acadmeic_years',
                'stocks',
                'clothes',
                'books_sheets',
                'grades',
                'class_rooms',
            ),
        );
    }

    public function ExportStudents(Request $request)
    {
        $school = $this->GetSchool();
        $query = Student::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))->select(
            'id',
            'name',
            'grade_id',
            'student_status',
            'birth_date',
            'birth_at_begin',
            'gender',
            'parent_id',
            'religion',
            'grade_id',
            'classroom_id',
        );
        if ($request->grade != 0) {
            $query->where('grade_id', $request->grade);
        }
        if ($request->classroom != 0) {
            $query->where('classroom_id', $request->classroom);
        }
        $query->with('grade', 'classroom');
        $data = $query
            ->get()
            ->groupBy(['acd_year.view', 'grade.name', 'classes.name']);

        $PDFExport->PrintPDF('students', 'stream', $data, 'L', $school);
    }

    public function payment_parts(Request $request)
    {
        $school = $this->GetSchool();
        $data['from'] = Carbon::parse($request->from)->format('Y-m-d');
        $data['to'] = Carbon::parse($request->to)->format('Y-m-d');
        $query = PaymentParts::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))->whereBetween('date', [
            $data['from'],
            $data['to'],
        ])->with('student', 'grade', 'classroom');
        if ($request->payment_status != 2) {
            $query->where('payment_status', $request->payment_status);
        }
        $data['parts'] = $query->get();
        $PDFExport->PrintPDF('payment_parts', 'stream', $data, 'P', $school);
    }

    public function StockProducts()
    {
        $school = $this->GetSchool();
        $data['stocks'] = InventoryItem::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))
            ->with('orders')
            ->get();
        $PDFExport->PrintPDF('stock_product', 'stream', $data, 'P', $school);
    }

    public function clothes_stocks()
    {
        $school = $this->GetSchool();
        $data = InventoryItem::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))
            ->where('type', 'clothe')
            ->with('orders', 'classroom', 'grade')
            ->get();
        $PDFExport->PrintPDF('clothes_stocks', 'stream', $data, 'P', $school);
    }

    public function books_sheets()
    {
        $school = $this->GetSchool();
        $data = InventoryItem::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))
            ->where('type', 'book')
            ->with('orders', 'classroom', 'grade')
            ->get();
        $school = $this->GetSchool();
        $PDFExport->PrintPDF(
            'books_sheets_stocks',
            'stream',
            $data,
            'P',
            $school,
        );
    }

    public function clothe_stock(Request $request)
    {
        $school = $this->GetSchool();
        $data = $this->stockReportService->getStockItemReport($school->id, $request->stock, 'clothe');
        $PDFExport->PrintPDF('clothe_stock', 'stream', $data, 'P', $school);
    }

    public function book_sheet_stock(Request $request)
    {
        $school = $this->GetSchool();
        $data = $this->stockReportService->getStockItemReport($school->id, $request->stock, 'book');
        $PDFExport->PrintPDF('book_sheet_stock', 'stream', $data, 'P', $school);
    }

    public function stock_product(Request $request)
    {
        $school = $this->GetSchool();
        $data = $this->stockReportService->getStockItemReport($school->id, $request->stock, 'stock');
        $data['stocks'] = $data['totals'];
        $PDFExport->PrintPDF('stock_product_view', 'stream', $data, 'P', $school);
    }

    public function student_report($type, Request $request)
    {
        $school = $this->GetSchool();
        $data = $this->reportService->getStudentReport($type, $request);

        if (is_null($data)) {
            return redirect()
                ->back()
                ->with('info', trans('general.noDataToShow'));
        }

        $PDFExport->PrintPDF('41', 'stream', $data, 'L', $school);
    }

    public function exception_fee(Request $request)
    {
        $school = $this->GetSchool();
        $data['begin'] = Carbon::parse($request->start_date)->format('Y-m-d');
        $data['end'] = Carbon::parse($request->end_date)->format('Y-m-d');
        $data['exception_list'] = ExceptionFees::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))->whereBetween('date', [
            $data['begin'],
            $data['end'],
        ])
            ->with('students:id,name,parent_id')
            ->get();

        $PDFExport->PrintPDF('exception_fee', 'stream', $data, 'P', $school);
    }

    public function payment_status(Request $request)
    {
        $school = $this->GetSchool();
        $year = Carbon::now()->format('Y');
        $data['acc_year'] = AcademicYear::whereYear('year_start', $year)->first(
            ['id', 'view'],
        );

        $query = FeeInvoice::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))->where('academic_year_id', $data['acc_year']->id)
            ->where('status', $request->payment_status)
            ->with('grades:id,name', 'students:id,name')
            ->select(['student_id', 'grade_id']);

        // Apply grade filter only if a specific grade is selected
        if ($request->grade && $request->grade != 0) {
            $query->where('grade_id', $request->grade);
        }
        $data['exp'] = $query->get()->groupBy('grades.name');
        $PDFExport->PrintPDF(
            'payment_status_view',
            'stream',
            $data,
            'P',
            $school,
        );
    }

    public function payments(Request $request)
    {
        $school = $this->GetSchool();
        $data['from'] = Carbon::parse($request->from)->format('Y-m-d');
        $data['to'] = Carbon::parse($request->to)->format('Y-m-d');
        $data['payment'] = ReceiptPayment::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))->whereBetween('date', [
            $data['from'],
            $data['to'],
        ])
            ->with(
                [
                    'student' => function ($q) {
                        $q->with('classroom');
                    },
                ],
                'acc_year',
            )
            ->get();
        $PDFExport->PrintPDF('payments', 'stream', $data, 'P', $school);
    }

    public function fees_invoices(Request $request)
    {
        $school = $this->GetSchool();
        $year = Carbon::now()->format('Y');
        $data['acc_year'] = AcademicYear::whereYear('year_start', $year)->first(
            ['id', 'view'],
        );

        // Prepare base query
        $query = FeeInvoice::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))->with([
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
            $query->whereBetween('invoice_date', [
                $request->from,
                $request->to,
            ]);
        } elseif ($request->from) {
            // Only start date specified, use current date as end date
            $query->whereBetween('invoice_date', [
                $request->from,
                Carbon::now()->format('Y-m-d'),
            ]);
        }

        // Fetch and group results
        $data['all'] = $query
            ->get()
            ->groupBy(['acd_year.view', 'grades.name', 'classes.name']);
        $PDFExport->PrintPDF('fee_invoices', 'stream', $data, 'P', $school);
    }

    public function student_tameen(Request $request)
    {
        $school = $this->GetSchool();
        $data['type'] = $request->type;
        $data['classroom'] = ClassRoom::findorfail($request->classroom_id);
        $date = Carbon::now()->format('Y');
        $data['aa'] = AcademicYear::whereyear('year_start', $date)->first();
        $data['students'] = Student::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))->where(
            'classroom_id',
            $request->classroom_id,
        )
            ->where('tameen', 1)
            ->with('parent:id,father_phone,address')
            ->get(['name', 'national_id', 'parent_id', 'birth_date', 'gender']);
        if (is_null($data['students'])) {
            return redirect()
                ->back()
                ->with('info', trans('report.no_data_found'));
        }
        switch ($data['type']) {
            case 1:
                $PDFExport->PrintPDF(
                    'student_tameen_1',
                    'stream',
                    $data,
                    'P',
                    $school,
                );
                break;
            case 2:
                $PDFExport->PrintPDF(
                    'student_tameen_2',
                    'stream',
                    $data,
                    'P',
                    $school,
                );
                break;
            default:
        }
    }

    public function credit(Request $request)
    {
        $school = $this->GetSchool();
        $query = FeeInvoice::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))->where('status', 'paid')->with(
            'student',
            'grade',
            'classroom',
            'schoolFee',
            'acd_year',
        );

        if ($request->acc_year && $request->acc_year != 0) {
            $query->where('academic_year_id', $request->acc_year);
        }
        $data['credit'] = $query->get();
        $PDFExport->PrintPDF('credit', 'stream', $data, 'P', $school);
    }

    public function school_fees()
    {
        $school = $this->GetSchool();
        $date = date('Y');
        $data['acc_year'] = AcademicYear::whereYear('year_start', $date)->first(
            ['id', 'view'],
        );
        $data['school_fees'] = SchoolFee::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))->where(
            'academic_year_id',
            $data['acc_year']->id,
        )
            ->with(['grade:id,name', 'classroom:id,name'])
            ->get()
            ->groupBy(['grade.name', 'classroom.name']);
        $PDFExport->PrintPDF('school_fees', 'stream', $data, 'P', $school);
    }

    public function final_year(Request $request)
    {
        $school = $this->GetSchool();
        $data = $this->financialReportService->getFinalYearData($request);

        return view('backend.report.PDF.FinalYear', $data, [
            'school' => $school,
        ]);
    }
}
