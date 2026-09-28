<?php

namespace App\Http\Controllers;

use App\Enums\Payment_Status;
use App\Http\Requests\Reports\CreditReportRequest;
use App\Http\Requests\Reports\ExceptionFeeReportRequest;
use App\Http\Requests\Reports\ExportStudentsRequest;
use App\Http\Requests\Reports\FeesInvoicesReportRequest;
use App\Http\Requests\Reports\FinalYearReportRequest;
use App\Http\Requests\Reports\PaymentRangeReportRequest;
use App\Http\Requests\Reports\PaymentStatusReportRequest;
use App\Http\Requests\Reports\StockItemReportRequest;
use App\Http\Requests\Reports\StudentTameenRequest;
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
        $user_grade = auth()->user()->grades()->pluck('grades.id');
        $academic_years = AcademicYear::where('status', config('school.academic_year_status'))->get();
        $stocks = InventoryItem::where('type', 'stock')
            ->with('grade:id,name', 'classroom:id,name')
            ->get();
        $clothes = InventoryItem::where('type', 'clothe')
            ->whereIn('grade_id', $user_grade)
            ->with('grade:id,name', 'classroom:id,name')
            ->get();
        $books_sheets = InventoryItem::where('type', 'book')
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
                'academic_years',
                'stocks',
                'clothes',
                'books_sheets',
                'grades',
                'class_rooms',
            ),
        );
    }

    public function ExportStudents(ExportStudentsRequest $request)
    {
        $school = $this->GetSchool();

        $query = Student::select(
            'id',
            'name',
            'grade_id',
            'student_status',
            'birth_date',
            'birth_at_begin',
            'gender',
            'parent_id',
            'religion',
            'classroom_id',
            'national_id',
        )->with('grade:id,name', 'classroom:id,name', 'parent:id,father_name,address');

        if ($request->filled('grade') && $request->integer('grade') !== 0) {
            $query->where('grade_id', $request->integer('grade'));
        }

        if ($request->filled('classroom') && $request->integer('classroom') !== 0) {
            $query->where('classroom_id', $request->integer('classroom'));
        }

        $data = $query->get()->groupBy('grade.name');

        if ($data->isEmpty()) {
            return redirect()->back()->with('info', trans('report.no_data_found'));
        }

        return $this->PDFExport->PrintPDF('backend.report.PDF.students', 'stream', $data, 'L', $school);
    }

    public function payment_parts(PaymentRangeReportRequest $request)
    {
        $school = $this->GetSchool();
        $from = $request->date('from')->format('Y-m-d');
        $to = $request->date('to')->format('Y-m-d');

        $query = PaymentParts::whereDate('date', '>=', $from)
            ->whereDate('date', '<=', $to)
            ->with('student', 'student.parent:id,father_name', 'grade', 'classroom');

        $statusFilter = Payment_Status::filterValues($request->validated('payment_status') ?? 'all');

        if ($statusFilter !== null) {
            $query->whereIn('status', $statusFilter);
        }

        $data = [
            'from' => $from,
            'to' => $to,
            'parts' => $query->get(),
        ];

        if ($data['parts']->isEmpty()) {
            return redirect()->back()->with('info', trans('report.no_data_found'));
        }

        return $this->PDFExport->PrintPDF('backend.report.PDF.payments_part', 'stream', $data, 'P', $school);
    }

    public function StockProducts()
    {
        $school = $this->GetSchool();
        $data['stocks'] = InventoryItem::with('orders')->get();

        if ($data['stocks']->isEmpty()) {
            return redirect()->back()->with('info', trans('report.no_data_found'));
        }

        return $this->PDFExport->PrintPDF('backend.report.PDF.stock_product', 'stream', $data, 'P', $school);
    }

    public function clothes_stocks()
    {
        $school = $this->GetSchool();
        $clothes = InventoryItem::where('type', 'clothe')
            ->with('orders', 'classroom:id,name', 'grade:id,name')
            ->get();

        if ($clothes->isEmpty()) {
            return redirect()->back()->with('info', trans('report.no_data_found'));
        }

        return $this->PDFExport->PrintPDF('backend.report.PDF.clothes_stocks', 'stream', ['clothes' => $clothes], 'P', $school);
    }

    public function books_sheets()
    {
        $school = $this->GetSchool();
        $data = InventoryItem::where('type', 'book')
            ->with('orders', 'classroom:id,name', 'grade:id,name')
            ->get();

        if ($data->isEmpty()) {
            return redirect()->back()->with('info', trans('report.no_data_found'));
        }

        return $this->PDFExport->PrintPDF('backend.report.PDF.books_sheets_stocks', 'stream', $data, 'P', $school);
    }

    public function clothe_stock(StockItemReportRequest $request)
    {
        $school = $this->GetSchool();
        $data = $this->stockReportService->getStockItemReport($school->id, $request->integer('stock'), 'clothe');
        $data['total'] = $data['totals'];

        return $this->PDFExport->PrintPDF('backend.report.PDF.clothe_stock', 'stream', $data, 'P', $school);
    }

    public function book_sheet_stock(StockItemReportRequest $request)
    {
        $school = $this->GetSchool();
        $data = $this->stockReportService->getStockItemReport($school->id, $request->integer('stock'), 'book');
        $data['total'] = $data['totals'];

        return $this->PDFExport->PrintPDF('backend.report.PDF.book_sheet_stock', 'stream', $data, 'P', $school);
    }

    public function stock_product(StockItemReportRequest $request)
    {
        $school = $this->GetSchool();
        $data = $this->stockReportService->getStockItemReport($school->id, $request->integer('stock'), 'stock');
        $data['stocks'] = $data['totals'];

        return $this->PDFExport->PrintPDF('backend.report.PDF.stock_product_view', 'stream', $data, 'P', $school);
    }

    public function student_report($type, Request $request)
    {
        $supportedTypes = [41];

        if (! in_array((int) $type, $supportedTypes, true)) {
            abort(404);
        }

        $request->validate([
            'classroom_id' => ['required', 'integer', 'exists:class_rooms,id'],
        ]);

        $school = $this->GetSchool();
        $data = $this->reportService->getStudentReport((int) $type, $request);

        if (is_null($data) || $data['students']->isEmpty()) {
            return redirect()->back()->with('info', trans('report.no_data_found'));
        }

        return $this->PDFExport->PrintPDF('backend.report.PDF.41', 'stream', $data, 'L', $school);
    }

    public function exception_fee(ExceptionFeeReportRequest $request)
    {
        $school = $this->GetSchool();
        $begin = $request->date('start_date')->format('Y-m-d');
        $end = $request->date('end_date')->format('Y-m-d');

        $exceptionList = ExceptionFees::whereDate('date', '>=', $begin)
            ->whereDate('date', '<=', $end)
            ->with('student:id,name,parent_id', 'student.parent:id,father_name')
            ->get();

        if ($exceptionList->isEmpty()) {
            return redirect()->back()->with('info', trans('report.no_data_found'));
        }

        return $this->PDFExport->PrintPDF('backend.report.PDF.exception_fee', 'stream', [
            'begin' => $begin,
            'end' => $end,
            'exception_list' => $exceptionList,
        ], 'P', $school);
    }

    public function payment_status(PaymentStatusReportRequest $request)
    {
        $school = $this->GetSchool();
        $year = $this->reportService->activeAcademicYear();

        if (is_null($year)) {
            return redirect()->back()->with('info', trans('report.no_data_found'));
        }

        $query = FeeInvoice::where('academic_year_id', $year->id)
            ->with(
                'grade:id,name',
                'student:id,name,parent_id',
                'student.parent:id,father_name',
                'schoolFee:id,title',
            )
            ->select(['student_id', 'grade_id', 'school_fee_id']);

        $statusFilter = Payment_Status::filterValues($request->validated('payment_status') ?? 'all');

        if ($statusFilter !== null) {
            $query->whereIn('status', $statusFilter);
        }

        if ($request->filled('grade') && $request->integer('grade') !== 0) {
            $query->where('grade_id', $request->integer('grade'));
        }

        $exp = $query->get()->groupBy('grade.name');

        if ($exp->isEmpty()) {
            return redirect()->back()->with('info', trans('report.no_data_found'));
        }

        return $this->PDFExport->PrintPDF('backend.report.PDF.payment_status_view', 'stream', [
            'acc_year' => $year,
            'exp' => $exp,
        ], 'P', $school);
    }

    public function payments(PaymentRangeReportRequest $request)
    {
        $school = $this->GetSchool();
        $from = $request->date('from')->format('Y-m-d');
        $to = $request->date('to')->format('Y-m-d');

        $payments = ReceiptPayment::whereDate('date', '>=', $from)
            ->whereDate('date', '<=', $to)
            ->with(
                [
                    'student' => function ($q) {
                        $q->with('classroom:id,name', 'parent:id,father_name');
                    },
                ],
                'acc_year',
            )
            ->get();

        if ($payments->isEmpty()) {
            return redirect()->back()->with('info', trans('report.no_data_found'));
        }

        return $this->PDFExport->PrintPDF('backend.report.PDF.payments', 'stream', [
            'from' => $from,
            'to' => $to,
            'payment' => $payments,
        ], 'P', $school);
    }

    public function fees_invoices(FeesInvoicesReportRequest $request)
    {
        $school = $this->GetSchool();
        $year = $this->reportService->activeAcademicYear();

        if (is_null($year)) {
            return redirect()->back()->with('info', trans('report.no_data_found'));
        }

        $query = FeeInvoice::where('academic_year_id', $year->id)
            ->with([
                'grade:id,name',
                'classroom:id,name',
                'student:id,name,parent_id',
                'student.parent:id,father_name',
                'acd_year:id,view',
                'schoolFee:id,amount',
            ])
            ->select([
                'id',
                'student_id',
                'grade_id',
                'classroom_id',
                'academic_year_id',
                'school_fee_id',
                'status',
                'invoice_date',
            ]);

        if ($request->filled('grade') && $request->integer('grade') !== 0) {
            $query->where('grade_id', $request->integer('grade'));
        }

        $statusFilter = Payment_Status::filterValues($request->validated('payment_status') ?? 'all');

        if ($statusFilter !== null) {
            $query->whereIn('status', $statusFilter);
        }

        if ($request->filled('from')) {
            $from = $request->date('from')->format('Y-m-d');
            $to = $request->filled('to') ? $request->date('to')->format('Y-m-d') : Carbon::now()->format('Y-m-d');
            $query->whereDate('invoice_date', '>=', $from)
                ->whereDate('invoice_date', '<=', $to);
        }

        $all = $query->get()->groupBy(['acd_year.view', 'grade.name', 'classroom.name']);

        if ($all->isEmpty()) {
            return redirect()->back()->with('info', trans('report.no_data_found'));
        }

        return $this->PDFExport->PrintPDF('backend.report.PDF.fee_invoices', 'stream', ['all' => $all], 'P', $school);
    }

    public function student_tameen(StudentTameenRequest $request)
    {
        $school = $this->GetSchool();
        $year = $this->reportService->activeAcademicYear();

        if (is_null($year)) {
            return redirect()->back()->with('info', trans('report.no_data_found'));
        }

        $classroom = ClassRoom::findOrFail($request->integer('classroom_id'));

        $students = Student::where('classroom_id', $classroom->id)
            ->where('tameen', 'active')
            ->where('acadmiecyear_id', $year->id)
            ->with('parent:id,father_name,father_phone,address')
            ->get(['id', 'name', 'national_id', 'parent_id', 'birth_date', 'gender']);

        if ($students->isEmpty()) {
            return redirect()->back()->with('info', trans('report.no_data_found'));
        }

        $data = [
            'classroom' => $classroom,
            'aa' => $year,
            'students' => $students,
        ];

        $view = $request->integer('type') === 2
            ? 'backend.report.PDF.student_tameen_2'
            : 'backend.report.PDF.student_tameen_1';

        return $this->PDFExport->PrintPDF($view, 'stream', $data, 'P', $school);
    }

    public function credit(CreditReportRequest $request)
    {
        $school = $this->GetSchool();

        $query = FeeInvoice::where('status', Payment_Status::CLOSE->value)
            ->with('student', 'student.parent:id,father_name', 'grade', 'classroom', 'schoolFee', 'acd_year');

        if ($request->filled('acc_year') && $request->integer('acc_year') !== 0) {
            $query->where('academic_year_id', $request->integer('acc_year'));
        } else {
            $year = $this->reportService->activeAcademicYear();

            if (is_null($year)) {
                return redirect()->back()->with('info', trans('report.no_data_found'));
            }

            $query->where('academic_year_id', $year->id);
        }

        $credit = $query->get();

        if ($credit->isEmpty()) {
            return redirect()->back()->with('info', trans('report.no_data_found'));
        }

        return $this->PDFExport->PrintPDF('backend.report.PDF.credit', 'stream', ['credit' => $credit], 'P', $school);
    }

    public function school_fees()
    {
        $school = $this->GetSchool();
        $year = $this->reportService->activeAcademicYear();

        if (is_null($year)) {
            return redirect()->back()->with('info', trans('report.no_data_found'));
        }

        $schoolFees = SchoolFee::where('academic_year_id', $year->id)
            ->with(['grade:id,name', 'classroom:id,name'])
            ->get()
            ->groupBy(['grade.name', 'classroom.name']);

        if ($schoolFees->isEmpty()) {
            return redirect()->back()->with('info', trans('report.no_data_found'));
        }

        return $this->PDFExport->PrintPDF('backend.report.PDF.school_fees', 'stream', [
            'school_fees' => $schoolFees,
        ], 'P', $school);
    }

    public function final_year(FinalYearReportRequest $request)
    {
        $school = $this->GetSchool();
        $data = $this->financialReportService->getFinalYearData($request);

        return view('backend.report.PDF.FinalYear', $data, [
            'school' => $school,
        ]);
    }
}
