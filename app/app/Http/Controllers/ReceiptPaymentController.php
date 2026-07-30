<?php

namespace App\Http\Controllers;

use Alkoumi\LaravelArabicNumbers\Numbers;
use App\Http\Requests\ReceiptPaymentStoreRequest;
use App\Http\Requests\ReceiptPaymentUpdateRequest;
use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\Inventory\InventoryItem;
use App\Models\ReceiptPayment;
use App\Models\Student;
use App\Models\StudentAccount;
use App\Services\AccountingReversalService;
use App\Services\Finance\FinancialService;
use App\Services\InventoryPaymentService;
use App\Services\PaymentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReceiptPaymentController extends Controller
{
    use LogsActivity, SchoolTrait;

    public function __construct(
        protected FinancialService $FinancialService,
        protected PaymentService $PaymentService,
        protected AccountingReversalService $accountingReversalService,
        protected InventoryPaymentService $inventoryPaymentService,
    ) {
        $this->middleware('permission:ReceiptPayment-list', [
            'only' => ['index', 'show'],
        ]);
        $this->middleware('permission:ReceiptPayment-create', [
            'only' => ['create', 'store'],
        ]);
        $this->middleware('permission:ReceiptPayment-edit', [
            'only' => ['edit', 'update'],
        ]);
        $this->middleware('permission:ReceiptPayment-delete', [
            'only' => ['destroy'],
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $school = $this->getSchool();
        $Recipt_Payments = ReceiptPayment::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))
            ->with(['student:id,name'])
            ->orderBy('date', 'desc')
            ->paginate(config('school.per_page'));

        return view(
            'backend.reciptpayment.index',
            compact('Recipt_Payments', 'school'),
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        try {
            $school = $this->getSchool();
            $Student = Student::where('id', $id)
                ->with([
                    'fee_invoice' => fn ($q) => $q
                        ->where('status', 'unpaid')
                        ->with('schoolFee:id,title,amount'),

                    'studentAccount',
                    'parts' => fn ($q) => $q->where('status', 'unpaid'),
                    'excption',
                ])
                ->first();
            $lastPayment = ReceiptPayment::orderBy(
                'manual',
                'desc',
            )->first();
            $invoice_manual = $lastPayment
                ? str_pad($lastPayment->manual + 1, 5, '0', STR_PAD_LEFT)
                : '00001';
            $clothes = InventoryItem::ByType('clothe')
                ->where('grade_id', $Student->grade_id)
                ->get();

            $books = InventoryItem::ByType('book')
                ->where('grade_id', $Student->grade_id)
                ->get();

            $report_data = session('report_data');

            return view(
                'backend.reciptpayment.create',
                compact('school', 'Student', 'lastPayment', 'invoice_manual', 'clothes', 'books', 'report_data'),
            );
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReceiptPaymentStoreRequest $request)
    {
        try {
            $report_data = match ($request->type) {
                'fee_invoice' => $this->PaymentService->handleFeeInvoice(
                    $request,
                    $this->FinancialService,
                    $this->getSchool(),
                ),
                'payment_parts' => $this->PaymentService->handlePartialPayment(
                    $request,
                    $this->FinancialService,
                    $this->getSchool(),
                ),
                'clothes' => $this->inventoryPaymentService->handleClothesPayment(
                    $request,
                    $this->FinancialService,
                    $this->getSchool(),
                ),
                'books' => $this->inventoryPaymentService->handleBooksPayment(
                    $request,
                    $this->FinancialService,
                    $this->getSchool(),
                ),
                default => throw new \Exception('Invalid payment type'),
            };

            return redirect()
                ->route('receipt-payment.create', $request->student_id)
                ->with('report_data', $report_data);
        } catch (\Exception $e) {
            \Log::channel('errors')->error($e->getMessage());

            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $school = $this->getSchool();
        $report_data['recipt'] = ReceiptPayment::where('id', $id)
            ->with(['student:id,name'])
            ->first();
        $report_data['tafqeet'] = Numbers::TafqeetMoney(
            $report_data['recipt']->Debit,
            $school->currency,
        );

        return view('backend.reciptpayment.print', compact('school', 'report_data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $recipt_Payment = ReceiptPayment::where('id', $id)
                ->with('student')
                ->first();
            $school = $this->getSchool();

            return view('backend.reciptpayment.edit', compact('recipt_Payment', 'school'));
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReceiptPaymentUpdateRequest $request)
    {
        try {
            $this->executeInTransaction(function () use ($request) {
                $info_data = Student::where(
                    'id',
                    $request->student_id,
                )->first();
                // Retrieve the existing ReceiptPayment record using the id from the request
                $pay = ReceiptPayment::findOrFail($request->id);

                $pay->date = date('Y-m-d');
                $pay->student_id = $request->student_id;
                $pay->Debit = $request->amount;
                $pay->academic_year_id = $info_data->acadmiecyear_id;

                $pay->save();

                // Retrieve the corresponding StudentAccount record
                $std = StudentAccount::where(
                    'recipt__payments_id',
                    $pay->id,
                )->firstOrFail();
                $std->student_id = $request->student_id;
                $std->credit = $request->amount;
                $std->academic_year_id = $info_data->acadmiecyear_id;

                $std->grade_id = $info_data->grade_id;
                $std->classroom_id = $info_data->classroom_id;
                $std->debit = 0.0;
                $std->recipt__payments_id = $pay->id;
                $std->save();
                $this->logActivity(
                    trans('log.actions.updated'),
                    trans('log.models.receipt-payment.updated', [
                        'name' => $request->student->name,
                        'date' => date('Y-m-d'),
                    ]),
                );
            });

            return redirect()
                ->route('receipt-payment.index')
                ->with('success', trans('general.success'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $ReceiptPayment = ReceiptPayment::with('student')->findorFail($id);

            DB::transaction(function () use ($ReceiptPayment) {
                $this->accountingReversalService->reverseReceiptEntries($ReceiptPayment);
                $ReceiptPayment->delete();
            });

            $this->logActivity(
                trans('log.actions.deleted'),
                trans('log.models.receipt-payment.deleted', [
                    'name' => $ReceiptPayment->student->name,
                    'date' => date('Y-m-d'),
                ]),
            );

            return redirect()
                ->route('receipt-payment.index')
                ->with('success', trans('general.success'));
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }
}
