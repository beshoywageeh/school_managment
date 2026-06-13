<?php

namespace App\Services\Finance;

use App\Http\Traits\LogsActivity;
use App\Models\Exchange_bond;
use App\Models\ExcptionFees;
use App\Models\Fee_invoice;
use App\Models\fund_account;
use App\Models\Inventory\InventoryItem;
use App\Models\Inventory\InventoryOrder;
use App\Models\PaymentParts;
use App\Models\Recipt_Payment;
use App\Models\StudentAccount;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FinancialService
{
    use LogsActivity;

    private function generateAutoNumber(
        string $modelClass,
        string $column = 'auto_number',
        int $pad = 6,
    ): string {
        $last = $modelClass::orderBy($column, 'desc')->first();

        return $last
            ? str_pad($last->$column + 1, $pad, '0', STR_PAD_LEFT)
            : str_pad(1, $pad, '0', STR_PAD_LEFT);
    }

    public function FeeInvoice(
        $student,
        $fee_id,
        $acc_year,
        $school,
    ): Fee_invoice {
        $invoice = Fee_invoice::create([
            'invoice_date' => date('Y-m-d'),
            'student_id' => $student->id,
            'grade_id' => $student->grade_id,
            'classroom_id' => $student->classroom_id,
            'school_fee_id' => $fee_id,
            'academic_year_id' => $acc_year,
            'user_id' => auth()->id(),
            'school_id' => $school,
        ]);

        $this->logActivity(
            trans('log.actions.added'),
            trans('log.models.receipt_payment.created', [
                'name' => $student->name,
                'date' => date('Y-m-d'),
            ]),
        );

        return $invoice;
    }

    public function PaymentParts(
        $student,
        $fee_id,
        $acc_year,
        $school,
        $pay_at,
        $amount,
        $status,
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
            ]),
        );
    }

    public function CreateStudentAccount(
        $student,
        $fees,
        $acc_year,
        $type,
        $debit = 0.0,
        $credit = 0.0,
        $recipt_id = null,
        $excpetion_id = null,
        $exchange_bond_id = null,
    ): void {
        StudentAccount::create([
            'student_id' => $student->id,
            'grade_id' => $student->grade_id,
            'classroom_id' => $student->classroom_id,
            'recipt__payments_id' => $recipt_id,
            'fee_invoices_id' => $fees,
            'excpetion_id' => $excpetion_id,
            'exchange_bond_id' => $exchange_bond_id,
            'date' => date('Y-m-d'),
            'type' => $type,
            'academic_year_id' => $acc_year,
            'debit' => $debit,
            'credit' => $credit,
        ]);
    }

    public function AddStudentBookInvoice(
        $student,
        ?Request $request = null,
    ): InventoryOrder {
        $total = 0;
        $requestBookIds = $request?->book_id ?? [];

        foreach ($requestBookIds as $key => $bookId) {
            $book = InventoryItem::find($bookId);
            if ($book) {
                $total +=
                    $book->sell_price *
                    1 *
                    (($request->quantity[$key] ?? 0) * 1);
            }
        }

        $order = InventoryOrder::create([
            'auto_number' => $this->generateAutoNumber(
                InventoryOrder::class,
            ),
            'type' => 'sales',
            'date' => date('Y-m-d'),
            'student_id' => $student->id,
            'school_id' => auth()->user()->school_id,
            'user_id' => auth()->id(),
        ]);

        $order->total_amount = $total;
        $order->save();

        foreach ($requestBookIds as $key => $bookId) {
            $qty = $request->quantity[$key] ?? 0;
            $book = InventoryItem::find($bookId);
            if ($book) {
                $order->items()->create([
                    'itemable_id' => $bookId,
                    'itemable_type' => InventoryItem::class,
                    'quantity_out' => $qty,
                    'quantity_in' => 0,
                    'unit_price' => $book->sell_price,
                    'total' => $qty * $book->sell_price,
                ]);
            }
        }

        $this->logActivity(
            trans('log.parents.added_action'),
            trans('log.book_sheets_order.sarf_added', [
                'number' => $order->auto_number,
            ]),
        );

        return $order;
    }

    public function AddStudentClotheInvoice(
        $student,
        ?Request $request = null,
    ): InventoryOrder {
        $total = 0;
        $requestClotheIds = $request?->clothe_id ?? [];
        $useSetPrice = $request?->boolean('isset') ?? false;

        $clothes = InventoryItem::whereIn('id', $requestClotheIds)
            ->get()
            ->keyBy('id');

        foreach ($requestClotheIds as $key => $clotheId) {
            $clothe = $clothes->get($clotheId);
            if ($clothe) {
                $price = $useSetPrice
                    ? $clothe->sales_price_set
                    : $clothe->sell_price;
                $total +=
                    $price * 1 * (($request->quantity[$key] ?? 0) * 1);
            }
        }

        $order = InventoryOrder::create([
            'auto_number' => $this->generateAutoNumber(
                InventoryOrder::class,
            ),
            'type' => 'sales',
            'date' => date('Y-m-d'),
            'total_amount' => $total,
            'student_id' => $student->id,
            'school_id' => auth()->user()->school_id,
            'user_id' => auth()->id(),
        ]);

        foreach ($requestClotheIds as $key => $clotheId) {
            $clothe = $clothes->get($clotheId);
            if (! $clothe) {
                continue;
            }
            $price = $useSetPrice
                ? $clothe->sales_price_set
                : $clothe->sell_price;
            $qty = $request->quantity[$key] ?? 0;
            $order->items()->create([
                'itemable_id' => $clotheId,
                'itemable_type' => InventoryItem::class,
                'quantity_out' => $qty,
                'quantity_in' => 0,
                'unit_price' => $price,
                'total' => $qty * $price,
            ]);
        }

        $this->logActivity(
            trans('log.clothes_order.out_order_added_action'),
            trans('log.clothes_order.out_order_added', [
                'order_id' => $order->id,
                'student_name' => $student->name,
            ]),
        );

        return $order;
    }

    public function createReceipt(
        $amount,
        $student,
        $academicYearId,
        $school_id,
    ): Recipt_Payment {
        $receipt = Recipt_Payment::create([
            'manual' => $this->generateAutoNumber(
                Recipt_Payment::class,
                'manual',
                5,
            ),
            'date' => Carbon::today(),
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
            ]),
        );

        $receipt->save();

        return $receipt;
    }

    public function exciption_fee(
        $student,
        Request $request,
        $acc_year,
        $school_id,
    ): ExcptionFees {
        $pay = ExcptionFees::create([
            'date' => date('Y-m-d'),
            'student_id' => $student->id,
            'amount' => $request->amount,
            'academic_year_id' => $acc_year,
            'grade_id' => $student->grade_id,
            'class_id' => $student->classroom_id,
            'fee_id' => $request->fee_id,
            'school_id' => $school_id,
            'user_id' => auth()->id(),
        ]);

        return $pay;
    }

    public function Exchange_bond(
        $school,
        Request $request,
        $acc_year,
    ): Exchange_bond {
        $exchange = Exchange_bond::create([
            'school_id' => $school->id,
            'manual' => $request->manual,
            'student_id' => $request->student_id,
            'academic_year_id' => $acc_year->id,
            'amount' => $request->amount,
            'date' => date('Y-m-d'),
            'description' => $request->note,
            'user_id' => auth()->id(),
        ]);

        return $exchange;
    }

    public function Fund_Account(
        $school,
        $exchange = null,
        $Credit = 0.0,
        $Debit = 0.0,
        $receipt = null,
    ): void {
        fund_account::create([
            'date' => date('Y-m-d'),
            'user_id' => auth()->id(),
            'school_id' => $school->id,
            'exchange_bond_id' => $exchange,
            'receipt_id' => is_object($receipt) ? $receipt->id : $receipt,
            'Credit' => $Credit,
            'Debit' => $Debit,
        ]);
    }
}
