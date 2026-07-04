<?php

namespace App\Http\Controllers;

use Alkoumi\LaravelArabicNumbers\Numbers;
use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\AcademicYear;
use App\Models\FeeInvoice;
use App\Models\Inventory\InventoryItem;
use App\Models\PaymentParts;
use App\Models\ReceiptPayment;
use App\Models\Student;
use App\Models\StudentAccount;
use App\Services\Finance\FinancialService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReceiptPaymentController extends Controller
{
    use LogsActivity, SchoolTrait;

    public function __construct(
        protected FinancialService $FinancialService,
    ) {
        $this->middleware('permission:ReceiptPayment-list', ['only' => ['index', 'show']]);
        $this->middleware('permission:ReceiptPayment-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:ReceiptPayment-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:ReceiptPayment-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $school = $this->getSchool();
        $Recipt_Payments = ReceiptPayment::where('school_id', $school->id)
            ->with(['student:id,name'])
            ->orderBy('date', 'desc')
            ->paginate(10);

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
                    'fee_invoice' => function ($query) {
                        $query
                            ->where('status', 'unpaid')
                            ->with('fees:id,title,amount');
                    },
                    'StudentAccount',
                    'parts' => function ($q) {
                        $q->where('status', 'unpaid');
                    },
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
                get_defined_vars(),
            );
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $type = $request->type;
            $report_data = match ($type) {
                'fee_invoice' => $this->handleFeeInvoice(
                    $request,
                    $this->FinancialService,
                ),
                'payment_parts' => $this->handlePartialPayment(
                    $request,
                    $this->FinancialService,
                ),
                'clothes' => $this->handleClothesPayment(
                    $request,
                    $this->FinancialService,
                ),
                'books' => $this->handleBooksPayment(
                    $request,
                    $this->FinancialService,
                ),
                default => throw new \Exception('Invalid payment type'),
            };

            return redirect()
                ->route('receipt_payment.create', $request->student_id)
                ->with('report_data', $report_data);
        } catch (\Exception $e) {
            DB::rollBack();
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
            'EGP',
        );

        return view('backend.reciptpayment.print', get_defined_vars());
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

            return view('backend.reciptpayment.edit', get_defined_vars());
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
            DB::beginTransaction();

            // Retrieve the existing ReceiptPayment record using the id from the request
            $pay = ReceiptPayment::findOrFail($request->id);

            $pay->date = date('Y-m-d');
            $pay->student_id = $request->student_id;
            $pay->Debit = $request->amount;
            $pay->academic_year_id = AcademicYear::where(
                'status',
                '0',
            )->first()->id;

            $pay->save();

            // Retrieve the corresponding StudentAccount record
            $std = StudentAccount::where(
                'recipt__payments_id',
                $pay->id,
            )->firstOrFail();
            $std->student_id = $request->student_id;
            $std->credit = $request->amount;
            $std->academic_year_id = AcademicYear::where(
                'status',
                '0',
            )->first()->id;

            $std->grade_id = Student::where(
                'id',
                $request->student_id,
            )->first()->grade_id;
            $std->classroom_id = Student::where(
                'id',
                $request->student_id,
            )->first()->classroom_id;
            $std->debit = 0.0;
            $std->recipt__payments_id = $pay->id;
            $std->save();
            $this->logActivity(
                trans('log.actions.updated'),
                trans('log.models.receipt_payment.updated', [
                    'name' => $request->student->name,
                    'date' => date('Y-m-d'),
                ]),
            );
            DB::commit();

            return redirect()
                ->route('receipt-payment.index')
                ->with('success', trans('general.success'));
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $ReceiptPayment = ReceiptPayment::findorFail($id);
            $ReceiptPayment->delete();
            $this->logActivity(
                trans('log.actions.deleted'),
                trans('log.models.receipt_payment.deleted', [
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

    private function handleFeeInvoice($request, $FinancialService)
    {
        $student = Student::findorfail($request->student_id);

        $academic_year = AcademicYear::where('status', '0')->first();
        DB::beginTransaction();
        $invoice = FeeInvoice::where('id', $request->feeInvoice)
            ->with('fees:id,title,amount')
            ->first();
        $pay = $FinancialService->createReceipt(
            $invoice->fees->amount,
            $student,
            $academic_year->id,
            $this->getSchool()->id,
        );
        $FinancialService->CreateStudentAccount(
            $student,
            $invoice->id,
            $academic_year->id,
            'payment',
            0.0,
            $invoice->fees->amount,
            $pay->id,
        );

        $invoice->update(['status' => 'paid']);
        $FinancialService->Fund_Account(
            $this->GetSchool(),
            null,
            0.0,
            $invoice->fees->amount,
            $pay->id,
        );
        DB::commit();
        $report_data = [];
        $report_data['type'] = 'fee_invoice';
        $report_data['columns'] = [
            'description' => trans('fees.desc'),
            'amount' => trans('Recipt_Payments.amount'),
        ];
        $report_data['items'] = [
            [
                'description' => $invoice->fees->title,
                'amount' => $invoice->fees->amount,
            ],
        ];
        $report_data['recipt'] = ReceiptPayment::where('id', $pay->id)
            ->with(['student:id,name'])
            ->first();
        $report_data['tafqeet'] = Numbers::TafqeetMoney(
            $report_data['recipt']->Debit,
            'EGP',
        );

        return $report_data;
    }

    private function handlePartialPayment($request, $FinancialService)
    {
        $student = Student::findorfail($request->student_id);
        $report_data = [];
        $academic_year = AcademicYear::where('status', '0')->first();
        DB::beginTransaction();
        $parts = PaymentParts::where('student_id', $student->id)
            ->orderBy('date')
            ->get();
        $current_amount = $request->amount * 1;
        foreach ($parts as $part) {
            if ($current_amount >= $part->amount) {
                $pay = $FinancialService->createReceipt(
                    $part->amount,
                    $student,
                    $academic_year->id,
                    $this->getSchool()->id,
                );
                $FinancialService->CreateStudentAccount(
                    $student,
                    $part->id,
                    $academic_year->id,
                    'payment',
                    0.0,
                    $part->amount,
                    $pay->id,
                );

                $part->update(['status' => 'paid']);
                $FinancialService->Fund_Account(
                    $this->GetSchool(),
                    null,
                    0.0,
                    $part->amount,
                    $pay->id,
                );
                $current_amount = $current_amount - $part->amount;
                $report_data['recipt'] = ReceiptPayment::where(
                    'id',
                    $pay->id,
                )->first('Debit');
                $report_data['items'] = [
                    [
                        'date' => $pay->date,
                        'amount' => $pay->amount,
                    ],
                ];
                $report_data['tafqeet'] = Numbers::TafqeetMoney(
                    $report_data['recipt']->Debit,
                    'EGP',
                );
                $report_data['type'] = 'payment_parts';
                $report_data['columns'] = ['date', 'amount'];
            }
        }

        DB::commit();

        return $report_data;
    }

    private function handleClothesPayment($request, $FinancialService)
    {
        $student = Student::findorfail($request->student_id);

        $academic_year = AcademicYear::where('status', '0')->first();
        $report_data = [];
        DB::beginTransaction();
        $clothes_order = $FinancialService->AddStudentClotheInvoice(
            $student,
            $request,
        );
        $pay = $FinancialService->createReceipt(
            $clothes_order->total_amount,
            $student,
            $academic_year->id,
            $this->getSchool()->id,
        );
        $FinancialService->CreateStudentAccount(
            $student,
            $clothes_order->id,
            $academic_year->id,
            'payment',
            0.0,
            $clothes_order->total_amount,
            $pay->id,
        );
        $clothes_order->update(['status' => 'paid']);
        $FinancialService->Fund_Account(
            $this->GetSchool(),
            null,
            $clothes_order->total_amount * 1,
            $pay->id,
        );
        $report_data['recipt'] = ReceiptPayment::where('id', $pay->id)
            ->with(['student:id,name'])
            ->first();
        $report_data['tafqeet'] = Numbers::TafqeetMoney(
            $report_data['recipt']->Debit,
            'EGP',
        );
        $clothes_order->load('items.itemable');
        $report_data['items'] = $clothes_order->items
            ->map(
                fn ($item) => [
                    'name' => $item->itemable?->name ?? '--',
                    'sales_price' => $item->unit_price,
                    'quantity' => $item->quantity_out,
                    'total' => $item->total,
                ],
            )
            ->values()
            ->toArray();
        $report_data['type'] = 'clothes';
        $report_data['columns'] = [
            'name' => trans('fees.desc'),
            'sales_price' => trans('Recipt_Payments.amount'),
            'quantity' => trans('clothes.qty'),
            'total' => trans('clothes.total_price'),
        ];

        DB::commit();

        return $report_data;
    }

    private function handleBooksPayment($request, $FinancialService)
    {
        $student = Student::findorfail($request->student_id);

        $academic_year = AcademicYear::where('status', '0')->first();
        $report_data = [];
        DB::beginTransaction();
        $books_order = $FinancialService->AddStudentBookInvoice(
            $student,
            $request,
        );
        $pay = $FinancialService->createReceipt(
            $books_order->total_amount,
            $student,
            $academic_year->id,
            $this->getSchool()->id,
        );
        $FinancialService->CreateStudentAccount(
            $student,
            $books_order->id,
            $academic_year->id,
            'payment',
            0.0,
            $books_order->total_amount,
            $pay->id,
        );
        $books_order->update(['status' => 'paid']);
        $FinancialService->Fund_Account(
            $this->GetSchool(),
            null,
            $books_order->total_amount * 1,
            $pay->id,
        );
        $report_data['recipt'] = ReceiptPayment::where('id', $pay->id)
            ->with(['student:id,name'])
            ->first();
        $report_data['tafqeet'] = Numbers::TafqeetMoney(
            $report_data['recipt']->Debit,
            'EGP',
        );
        $books_order->load('items.itemable');
        $report_data['items'] = $books_order->items
            ->map(
                fn ($item) => [
                    'name' => $item->itemable?->name ?? '--',
                    'sales_price' => $item->unit_price,
                    'quantity' => $item->quantity_out,
                    'total' => $item->total,
                ],
            )
            ->values()
            ->toArray();
        $report_data['type'] = 'books';
        $report_data['columns'] = [
            'name' => trans('fees.desc'),
            'sales_price' => trans('Recipt_Payments.amount'),
            'quantity' => trans('book_sheet.qty'),
            'total' => trans('book_sheet.total_price'),
        ];

        DB::commit();

        return $report_data;
    }
}
