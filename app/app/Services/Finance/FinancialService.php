<?php

namespace App\Services\Finance;

use App\Http\Traits\LogsActivity;
use App\Models\ExceptionFees;
use App\Models\ExchangeBond;
use App\Models\FeeInvoice;
use App\Models\Inventory\InventoryOrder;
use App\Models\ReceiptPayment;
use App\Services\StudentOrderService;
use Illuminate\Http\Request;

/**
 * @deprecated Use InvoiceService or AccountService or StudentOrderService directly.
 */
class FinancialService
{
    use LogsActivity;

    public function __construct(
        protected InvoiceService $invoiceService,
        protected AccountService $accountService,
        protected StudentOrderService $studentOrderService,
    ) {}

    public function FeeInvoice($student, $fee, $acc_year, $school): FeeInvoice
    {
        return $this->invoiceService->createFeeInvoice($student, $fee, $acc_year, $school);
    }

    public function PaymentParts($student, $fee_id, $acc_year, $school, $pay_at, $amount, $status): void
    {
        $this->invoiceService->createPaymentParts($student, $fee_id, $acc_year, $school, $pay_at, $amount, $status);
    }

    public function AddStudentBookInvoice($student, ?Request $request = null): InventoryOrder
    {
        return $this->studentOrderService->addStudentBookInvoice($student, $request);
    }

    public function AddStudentClotheInvoice($student, ?Request $request = null): InventoryOrder
    {
        return $this->studentOrderService->addStudentClotheInvoice($student, $request);
    }

    public function exciption_fee($student, Request $request, $acc_year, $school_id): ExceptionFees
    {
        return $this->invoiceService->createExceptionFee($student, $request, $acc_year, $school_id);
    }

    public function exchangeBond($school, Request $request, $acc_year): ExchangeBond
    {
        return $this->accountService->createOrUpdateExchangeBond($school, $request, $acc_year);
    }

    public function Fund_Account($school, $exchange = null, $Credit = 0.0, $Debit = 0.0, $receipt = null): void
    {
        $this->accountService->fundAccount($school, $exchange, $Credit, $Debit, $receipt);
    }

    public function createReceipt($amount, $student, $academicYearId, $school_id): ReceiptPayment
    {
        return $this->accountService->createReceipt($amount, $student, $academicYearId, $school_id);
    }

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
        $this->accountService->createStudentAccount(
            $student, $fee_invoices_id, $acc_year, $type,
            $debit, $credit, $recipt_id, $excpetion_id, $exchange_bond_id,
        );
    }
}
