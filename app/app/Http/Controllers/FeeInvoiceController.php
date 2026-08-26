<?php

namespace App\Http\Controllers;

use Alkoumi\LaravelArabicNumbers\Numbers;
use App\Http\Requests\StoreFeeInvoiceRequest;
use App\Http\Requests\UpdateFeeInvoiceRequest;
use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\AcademicYear;
use App\Models\FeeInvoice;
use App\Models\Grade;
use App\Models\SchoolFee as school_fee;
use App\Models\Student;
use App\Services\AccountingReversalService;
use App\Services\Finance\FinancialService;
use App\Services\InvoiceQueryService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeeInvoiceController extends Controller
{
    use LogsActivity, SchoolTrait;

    public function __construct(
        protected InvoiceQueryService $invoiceQueryService,
        protected AccountingReversalService $accountingReversalService,
    ) {
        $this->middleware('permission:fee_invoice-list', [
            'only' => ['index', 'show'],
        ]);
        $this->middleware('permission:fee_invoice-create', [
            'only' => ['create', 'store'],
        ]);
        $this->middleware('permission:fee_invoice-edit', [
            'only' => ['edit', 'update'],
        ]);
        $this->middleware('permission:fee_invoice-delete', [
            'only' => ['destroy'],
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $school = $this->getSchool();
        $gradeOptions = Grade::pluck('name', 'id')->toArray();

        $columns = [
            [
                'key' => 'invoice_date',
                'label' => trans('fee_invoice.date'),
                'sortable' => true,
            ],
            [
                'key' => 'student.name',
                'label' => trans('fee_invoice.name'),
                'filter_type' => 'text',
                'filter_key' => 'students',
                'sortable' => false,
            ],
            [
                'key' => 'schoolFee.amount',
                'label' => trans('fee_invoice.debit'),
                'sortable' => false,
            ],
            [
                'key' => 'grade.name',
                'label' => trans('fee_invoice.grade'),
                'filter_type' => 'select_relation',
                'filter_key' => 'grade_id',
                'options' => $gradeOptions,
                'sortable' => true,
            ],
            [
                'key' => 'classroom.name',
                'label' => trans('fee_invoice.class'),
                'sortable' => false,
            ],
            [
                'key' => 'acd_year.view',
                'label' => trans('fee_invoice.acadmic'),
                'sortable' => false,
            ],
        ];

        $fee_invoices = $this->invoiceQueryService->getFilteredQuery(
            $request,
            $this->schoolId(),
        );

        if ($request->expectsJson()) {
            return response()->json([
                'items' => $fee_invoices->items(),
                'pagination' => [
                    'current_page' => $fee_invoices->currentPage(),
                    'last_page' => $fee_invoices->lastPage(),
                ],
            ]);
        }

        return view(
            'backend.fee_invoices.index',
            compact('school', 'gradeOptions', 'columns', 'fee_invoices'),
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($student_id)
    {
        try {
            $school = $this->getSchool();
            $student = Student::where('id', $student_id)
                ->when(
                    $this->schoolId(),
                    fn ($q, $id) => $q->where('school_id', $id),
                )
                ->first();
            $school_fees = school_fee::when(
                $this->schoolId(),
                fn ($q, $id) => $q->where('school_id', $id),
            )
                ->where('grade_id', $student->grade_id)
                ->where('classroom_id', $student->classroom_id)
                ->get(['id', 'title', 'amount']);

            if (! $student || $school_fees->count() == 0) {
                session()->flash('info', trans('general.no_data_found'));

                return redirect()->back();
            }

            return view(
                'backend.fee_invoices.create',
                compact('school', 'student', 'school_fees'),
            );
        } catch (Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(
        StoreFeeInvoiceRequest $request,
        FinancialService $service,
    ) {
        $this->authorize('fee_invoice-create', FeeInvoice::class);
        $List_Fees = $request->list_fees;
        try {
            $this->executeInTransaction(function () use ($List_Fees, $service) {
                $ac_year = AcademicYear::where(
                    'status',
                    config('school.academic_year_status'),
                )->first();
                foreach ($List_Fees as $list_fee) {
                    $student = Student::findorfail($list_fee['student_id']);
                    $service->FeeInvoice(
                        $student,
                        $list_fee['fee'],
                        $ac_year->id,
                        $this->getSchool()->id,
                    );
                }
                $this->logActivity(
                    trans('log.actions.added'),
                    trans('log.models.fee-invoice.created', [
                        'name' => $student->name,
                    ]),
                );
            });

            return redirect()
                ->route('fee-invoice.index')
                ->with('success', trans('general.success'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $school = $this->getSchool();
        $invoice_details = FeeInvoice::where('id', $id)
            ->with('student', 'schoolFee', 'grade', 'classroom')
            ->first();
        $tafqeet = Numbers::TafqeetMoney(
            $invoice_details->schoolFee->amount,
            config('school.currency'),
            'ar',
        );

        return view(
            'backend.fee_invoices.show',
            compact('school', 'invoice_details', 'tafqeet'),
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $school = $this->getSchool();
        $fee = FeeInvoice::where('id', $id)
            ->with('student', 'schoolFee')
            ->first();
        $sfees = school_fee::where('grade_id', $fee->grade_id)
            ->where('classroom_id', $fee->classroom_id)
            ->get();

        return view(
            'backend.fee_invoices.edit',
            compact('school', 'fee', 'sfees'),
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        UpdateFeeInvoiceRequest $request,
        FinancialService $service,
    ) {
        $this->authorize('fee_invoice-edit', FeeInvoice::class);
        try {
            $this->executeInTransaction(function () use ($request) {
                $fee = FeeInvoice::findOrFail($request->id);
                $student = Student::findorfail($fee->student_id);
                $ac_year = AcademicYear::where(
                    'status',
                    config('school.academic_year_status'),
                )->first();

                $studentAccount = StudentAccount::firstOrNew([
                    'fee_invoices_id' => $fee->id,
                ]);
                $studentAccount->student_id = $student->id;
                $studentAccount->grade_id = $student->grade_id;
                $studentAccount->classroom_id = $student->classroom_id;
                $studentAccount->academic_year_id = $ac_year->id;
                $studentAccount->date = now()->toDateString();
                $studentAccount->type = 'invoice';
                $studentAccount->debit = $fee->amount;
                $studentAccount->credit = 0.0;
                $studentAccount->save();

                $this->logActivity(
                    trans('log.actions.updated'),
                    trans('log.models.fee-invoice.updated', [
                        'name' => $fee->student->name,
                    ]),
                );
            });

            return redirect()
                ->route('fee-invoice.index')
                ->with('success', trans('general.success'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('fee_invoice-delete', FeeInvoice::class);
        try {
            $fee = FeeInvoice::findorFail($id);

            DB::transaction(function () use ($fee) {
                $this->accountingReversalService->reverseFeeInvoiceEntries(
                    $fee,
                );
                $fee->delete();
            });

            $this->logActivity(
                trans('log.actions.deleted'),
                trans('log.models.fee-invoice.deleted', [
                    'name' => $fee->student->name,
                ]),
            );

            return redirect()
                ->route('fee-invoice.index')
                ->with('success', trans('general.success'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
