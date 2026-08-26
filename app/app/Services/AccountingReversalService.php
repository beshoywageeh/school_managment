<?php

namespace App\Services;

use App\Exceptions\FinancialException;
use App\Models\FeeInvoice;
use App\Models\FundAccount;
use App\Models\ReceiptPayment;
use App\Models\StudentAccount;

class AccountingReversalService
{
    public function reverseReceiptEntries(ReceiptPayment $receipt): void
    {
        $entries = FundAccount::where('receipt_id', $receipt->id)->get();

        if ($entries->isEmpty()) {
            throw new FinancialException(
                'No fund account entries found for this receipt to reverse.',
            );
        }

        foreach ($entries as $entry) {
            $entry->create([
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
            $account->create([
                'Debit' => $account->Credit,
                'Credit' => $account->Debit,
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
            $account->create([
                'Debit' => $account->Credit,
                'Credit' => $account->Debit,
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
}
