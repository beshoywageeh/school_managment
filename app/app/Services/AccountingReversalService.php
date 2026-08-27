<?php

namespace App\Services;

use App\Exceptions\FinancialException;
use App\Models\ExceptionFees;
use App\Models\ExchangeBond;
use App\Models\FeeInvoice;
use App\Models\FundAccount;
use App\Models\ReceiptPayment;
use App\Models\StudentAccount;

class AccountingReversalService
{
    public function reverseExceptionEntries(ExceptionFees $exception): void
    {
        $studentAccounts = StudentAccount::where(
            'exception_id',
            $exception->id,
        )->get();

        foreach ($studentAccounts as $account) {
            StudentAccount::create([
                'student_id' => $account->student_id,
                'grade_id' => $account->grade_id,
                'classroom_id' => $account->classroom_id,
                'receipt_payment_id' => $account->receipt_payment_id,
                'fee_invoices_id' => $account->fee_invoices_id,
                'exception_id' => $account->exception_id,
                'exchange_bond_id' => $account->exchange_bond_id,
                'academic_year_id' => $account->academic_year_id,
                'date' => $account->date,
                'type' => $account->type,
                'school_id' => $account->school_id,
                'debit' => $account->credit,
                'credit' => $account->debit,
            ]);
        }
    }

    public function reverseReceiptEntries(ReceiptPayment $receipt): void
    {
        $entries = FundAccount::where('receipt_id', $receipt->id)->get();

        if ($entries->isEmpty()) {
            throw new FinancialException(
                'No fund account entries found for this receipt to reverse.',
            );
        }

        foreach ($entries as $entry) {
            FundAccount::create([
                'date' => now()->toDateString(),
                'receipt_id' => $entry->receipt_id,
                'user_id' => $entry->user_id,
                'school_id' => $entry->school_id,
                'Credit' => $entry->Debit,
                'Debit' => $entry->Credit,
            ]);
        }

        $studentAccounts = StudentAccount::where(
            'receipt_payment_id',
            $receipt->id,
        )->get();
        $invoiceIds = $studentAccounts
            ->pluck('fee_invoices_id')
            ->filter()
            ->unique()
            ->all();

        foreach ($studentAccounts as $account) {
            StudentAccount::create([
                'student_id' => $account->student_id,
                'grade_id' => $account->grade_id,
                'classroom_id' => $account->classroom_id,
                'receipt_payment_id' => $account->receipt_payment_id,
                'fee_invoices_id' => $account->fee_invoices_id,
                'exception_id' => $account->exception_id,
                'academic_year_id' => $account->academic_year_id,
                'date' => $account->date,
                'type' => $account->type,
                'school_id' => $account->school_id,
                'debit' => $account->credit,
                'credit' => $account->debit,
            ]);
        }

        if (! empty($invoiceIds)) {
            FeeInvoice::whereIn('id', $invoiceIds)->update([
                'status' => 'unpaid',
            ]);
        }
    }

    public function reverseFeeInvoiceEntries(FeeInvoice $invoice): void
    {
        $studentAccounts = StudentAccount::where(
            'fee_invoices_id',
            $invoice->id,
        )->get();

        foreach ($studentAccounts as $account) {
            StudentAccount::create([
                'student_id' => $account->student_id,
                'grade_id' => $account->grade_id,
                'classroom_id' => $account->classroom_id,
                'receipt_payment_id' => $account->receipt_payment_id,
                'fee_invoices_id' => $account->fee_invoices_id,
                'exception_id' => $account->exception_id,
                'academic_year_id' => $account->academic_year_id,
                'date' => $account->date,
                'type' => $account->type,
                'school_id' => $account->school_id,
                'debit' => $account->credit,
                'credit' => $account->debit,
            ]);
        }

        $receiptIds = $studentAccounts
            ->pluck('receipt_payment_id')
            ->filter()
            ->unique()
            ->all();

        if (! empty($receiptIds)) {
            $receipts = ReceiptPayment::whereIn('id', $receiptIds)->get();
            foreach ($receipts as $receipt) {
                $this->reverseReceiptEntries($receipt);
            }
        }
    }

    public function reverseExchangeBond(ExchangeBond $bond): void
    {
        $fundAccounts = FundAccount::where(
            'exchange_bond_id',
            $bond->id,
        )->get();

        foreach ($fundAccounts as $entry) {
            FundAccount::create([
                'date' => now()->toDateString(),
                'receipt_id' => $entry->receipt_id,
                'user_id' => $entry->user_id,
                'school_id' => $entry->school_id,
                'exchange_bond_id' => $entry->exchange_bond_id,
                'Credit' => $entry->Debit,
                'Debit' => $entry->Credit,
            ]);
        }

        $studentAccounts = StudentAccount::where(
            'exchange_bond_id',
            $bond->id,
        )->get();

        foreach ($studentAccounts as $account) {
            StudentAccount::create([
                'student_id' => $account->student_id,
                'grade_id' => $account->grade_id,
                'classroom_id' => $account->classroom_id,
                'receipt_payment_id' => $account->receipt_payment_id,
                'fee_invoices_id' => $account->fee_invoices_id,
                'exception_id' => $account->exception_id,
                'academic_year_id' => $account->academic_year_id,
                'date' => $account->date,
                'type' => $account->type,
                'school_id' => $account->school_id,
                'exchange_bond_id' => $account->exchange_bond_id,
                'debit' => $account->credit,
                'credit' => $account->debit,
            ]);
        }
    }
}
