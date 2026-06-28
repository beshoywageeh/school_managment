<?php

namespace App\Services\Finance;

use App\Http\Traits\LogsActivity;
use App\Models\Exchange_bond; // يفضل مستقبلاً تعديلها إلى ExchangeBond
use App\Models\ExcptionFees;  // يفضل مستقبلاً تعديلها إلى ExceptionFee
use App\Models\Fee_invoice;   // يفضل مستقبلاً تعديلها إلى FeeInvoice
use App\Models\fund_account;  // يفضل مستقبلاً تعديلها إلى FundAccount
use App\Models\Inventory\InventoryItem;
use App\Models\Inventory\InventoryOrder;
use App\Models\PaymentParts;
use App\Models\Recipt_Payment; // يفضل مستقبلاً تعديلها إلى ReceiptPayment
use App\Models\Student;
use App\Models\StudentAccount;
use App\Services\Inventory\InventoryService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FinancialService
{
    use LogsActivity;

    public function __construct(
        protected InventoryService $inventoryService,
    ) {}

    /**
     * توليد رقم تسلسلي تلقائي مبطن بالأصفار
     */
    private function generateAutoNumber(
        string $modelClass,
        string $column = 'auto_number',
        int $pad = 6
    ): string {
        $last = $modelClass::orderBy($column, 'desc')->first();

        $nextNumber = $last ? ((int) $last->$column + 1) : 1;

        return str_pad($nextNumber, $pad, '0', STR_PAD_LEFT);
    }

    /**
     * إنشاء فاتورة رسوم دراسية
     */
    public function FeeInvoice($student, $fee, $acc_year, $school): Fee_invoice
    {
        return DB::transaction(function () use ($student, $fee, $acc_year, $school) {
            $invoice = Fee_invoice::create([
                'invoice_date' => Carbon::today()->toDateString(),
                'student_id' => $student->id,
                'grade_id' => $student->grade_id,
                'classroom_id' => $student->classroom_id,
                'school_fee_id' => $fee->id,
                'academic_year_id' => $acc_year,
                'user_id' => auth()->id(),
                'school_id' => $school,
            ]);

            $this->logActivity(
                trans('log.actions.added'),
                trans('log.models.receipt_payment.created', [
                    'name' => $student->name,
                    'date' => Carbon::today()->toDateString(),
                ])
            );

            // تم التغيير من updateOrCreate إلى create لإنشاء حركة جديدة في الحساب
            $this->CreateStudentAccount(
                student: $student,
                fee_invoices_id: $invoice->id,
                acc_year: $acc_year,
                type: 'invoice',
                debit: $fee->amount,
                credit: 0.0
            );

            return $invoice;
        });
    }

    /**
     * تسجيل أجزاء الدفع (الأقساط المخططة)
     */
    public function PaymentParts(
        $student,
        $fee_id,
        $acc_year,
        $school,
        $pay_at,
        $amount,
        $status
    ): void {
        PaymentParts::create([
            'date' => $pay_at,
            'student_id' => $student->id,
            'grade_id' => $student->grade_id,
            'class_id' => $student->classroom_id,
            'school_fees_id' => $fee_id,
            'amount' => $amount,
            'academic_year_id' => $acc_year,
            'school_id' => $school,
            'user_id' => auth()->id(),
            'status' => $status,
        ]);

        $this->logActivity(
            trans('log.actions.added'),
            trans('log.models.payment_part.created', [
                'name' => $student->name,
            ])
        );
    }

    /**
     * صرف كتب للطالب وإنشاء فاتورتها
     */
    public function AddStudentBookInvoice($student, ?Request $request = null): InventoryOrder
    {
        return DB::transaction(function () use ($student, $request) {
            $requestBookIds = $request?->book_id ?? [];
            $quantities = $request?->quantity ?? [];

            // جلب الكتب دفعة واحدة لمنع الـ N+1 Query
            $books = InventoryItem::whereIn('id', $requestBookIds)->get()->keyBy('id');
            $total = 0;
            $itemsData = [];

            foreach ($requestBookIds as $key => $bookId) {
                $book = $books->get($bookId);
                $qty = (int) ($quantities[$key] ?? 0);

                if ($book && $qty > 0) {
                    $itemTotal = $qty * $book->sell_price;
                    $total += $itemTotal;

                    $itemsData[] = [
                        'itemable_id' => $bookId,
                        'itemable_type' => InventoryItem::class,
                        'quantity_out' => $qty,
                        'quantity_in' => 0,
                        'unit_price' => $book->sell_price,
                        'total' => $itemTotal,
                    ];
                }
            }

            $order = InventoryOrder::create([
                'auto_number' => $this->generateAutoNumber(InventoryOrder::class),
                'type' => 'sales',
                'date' => Carbon::today()->toDateString(),
                'student_id' => $student->id,
                'school_id' => auth()->user()->school_id,
                'user_id' => auth()->id(),
                'total_amount' => $total,
            ]);

            if (! empty($itemsData)) {
                $this->inventoryService->createOrderItems($order, $itemsData);
            }

            $this->logActivity(
                trans('log.parents.added_action'),
                trans('log.book_sheets_order.sarf_added', [
                    'number' => $order->auto_number,
                ])
            );

            return $order;
        });
    }

    /**
     * صرف ملابس للطالب وإنشاء فاتورتها
     */
    public function AddStudentClotheInvoice($student, ?Request $request = null): InventoryOrder
    {
        return DB::transaction(function () use ($student, $request) {
            $requestClotheIds = $request?->clothe_id ?? [];
            $quantities = $request?->quantity ?? [];
            $useSetPrice = $request?->boolean('isset') ?? false;

            $clothes = InventoryItem::whereIn('id', $requestClotheIds)->get()->keyBy('id');
            $total = 0;
            $itemsData = [];

            foreach ($requestClotheIds as $key => $clotheId) {
                $clothe = $clothes->get($clotheId);
                $qty = (int) ($quantities[$key] ?? 0);

                if ($clothe && $qty > 0) {
                    $price = $useSetPrice ? $clothe->sales_price_set : $clothe->sell_price;
                    $itemTotal = $qty * $price;
                    $total += $itemTotal;

                    $itemsData[] = [
                        'itemable_id' => $clotheId,
                        'itemable_type' => InventoryItem::class,
                        'quantity_out' => $qty,
                        'quantity_in' => 0,
                        'unit_price' => $price,
                        'total' => $itemTotal,
                    ];
                }
            }

            $order = InventoryOrder::create([
                'auto_number' => $this->generateAutoNumber(InventoryOrder::class),
                'type' => 'sales',
                'date' => Carbon::today()->toDateString(),
                'total_amount' => $total,
                'student_id' => $student->id,
                'school_id' => auth()->user()->school_id,
                'user_id' => auth()->id(),
            ]);

            if (! empty($itemsData)) {
                $this->inventoryService->createOrderItems($order, $itemsData);
            }

            $this->logActivity(
                trans('log.clothes_order.out_order_added_action'),
                trans('log.clothes_order.out_order_added', [
                    'order_id' => $order->id,
                    'student_name' => $student->name,
                ])
            );

            return $order;
        });
    }

    /**
     * إنشاء سند قبض (إيصال استلام نقدية)
     */
    public function createReceipt($amount, $student, $academicYearId, $school_id): Recipt_Payment
    {
        return DB::transaction(function () use ($amount, $student, $academicYearId, $school_id) {
            $receipt = Recipt_Payment::create([
                'manual' => $this->generateAutoNumber(Recipt_Payment::class, 'manual', 5),
                'date' => Carbon::today()->toDateString(),
                'student_id' => $student->id,
                'Debit' => $amount,
                'academic_year_id' => $academicYearId,
                'school_id' => $school_id,
                'user_id' => auth()->id(),
            ]);

            $this->logActivity(
                trans('log.actions.added'),
                trans('log.models.payment_part.receipt_added', [
                    'name' => $student->name,
                ])
            );

            return $receipt;
        });
    }

    /**
     * إضافة إعفاء أو استثناء من الرسوم
     */
    public function exciption_fee($student, Request $request, $acc_year, $school_id): ExcptionFees
    {
        return ExcptionFees::create([
            'date' => Carbon::today()->toDateString(),
            'student_id' => $student->id,
            'amount' => $request->amount,
            'academic_year_id' => $acc_year,
            'grade_id' => $student->grade_id,
            'class_id' => $student->classroom_id,
            'fee_id' => $request->fee_id,
            'school_id' => $school_id,
            'user_id' => auth()->id(),
        ]);
    }

    /**
     * إنشاء أو تحديث سند صرف
     */
    public function Exchange_bond($school, Request $request, $acc_year): Exchange_bond
    {
        $student = Student::findOrFail($request->student_id);
        $academicYearId = is_object($acc_year) ? $acc_year->id : $acc_year;

        return DB::transaction(function () use ($school, $request, $academicYearId, $student) {
            $exchange = Exchange_bond::updateOrCreate(
                ['id' => $request->id],
                [
                    'school_id' => $school->id,
                    'manual' => $request->manual,
                    'student_id' => $student->id,
                    'academic_year_id' => $academicYearId,
                    'amount' => $request->amount,
                    'date' => Carbon::today()->toDateString(),
                    'description' => $request->note,
                    'user_id' => auth()->id(),
                ]
            );

            $this->CreateStudentAccount(
                student: $student,
                fee_invoices_id: null,
                acc_year: $academicYearId,
                type: 'exchange',
                debit: $request->amount,
                credit: 0.0,
                exchange_bond_id: $exchange->id
            );

            $this->Fund_Account($school, $exchange->id, 0.0, $request->amount);

            return $exchange;
        });
    }

    /**
     * حركة حساب الصندوق للمدرسة
     */
    public function Fund_Account(
        $school,
        $exchange = null,
        $Credit = 0.0,
        $Debit = 0.0,
        $receipt = null
    ): void {
        fund_account::create([
            'date' => Carbon::today()->toDateString(),
            'user_id' => auth()->id(),
            'school_id' => $school->id,
            'exchange_bond_id' => $exchange,
            'receipt_id' => is_object($receipt) ? $receipt->id : $receipt,
            'Credit' => $Credit,
            'Debit' => $Debit,
        ]);
    }

    /**
     * تسجيل القيود في كشف حساب الطالب (Ledger Entry)
     */
    public function CreateStudentAccount(
        $student,
        $fee_invoices_id,
        $acc_year,
        $type,
        $debit = 0.0,
        $credit = 0.0,
        $recipt_id = null,
        $excpetion_id = null,
        $exchange_bond_id = null
    ): void {
        // تم استبدال updateOrCreate بـ create لأن كشف الحساب التراكمي لا يجب عمل سحق (Overwrite) لبياناته.
        StudentAccount::create([
            'student_id' => $student->id,
            'grade_id' => $student->grade_id,
            'classroom_id' => $student->classroom_id,
            'recipt__payments_id' => $recipt_id,
            'fee_invoices_id' => $fee_invoices_id,
            'excpetion_id' => $excpetion_id,
            'exchange_bond_id' => $exchange_bond_id,
            'date' => Carbon::today()->toDateString(),
            'type' => $type,
            'academic_year_id' => is_object($acc_year) ? $acc_year->id : $acc_year,
            'debit' => $debit,
            'credit' => $credit,
        ]);
    }
}
