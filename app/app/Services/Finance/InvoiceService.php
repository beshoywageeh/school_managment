<?php

namespace App\Services\Finance;

use App\Http\Traits\LogsActivity;
use App\Models\ExceptionFees;
use App\Models\FeeInvoice;
use App\Models\PaymentParts;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceService
{
    use LogsActivity;

    private function generateAutoNumber(
        string $modelClass,
        string $column = 'auto_number',
        int $pad = 6,
    ): string {
        return DB::transaction(function () use ($modelClass, $column, $pad) {
            $last = $modelClass::lockForUpdate()
                ->orderBy($column, 'desc')
                ->first();

            $nextNumber = $last ? (int) $last->$column + 1 : 1;

            return str_pad($nextNumber, $pad, '0', STR_PAD_LEFT);
        });
    }

    public function createFeeInvoice(
        $student,
        $fee,
        $acc_year,
        $school,
    ): FeeInvoice {
        return DB::transaction(function () use (
            $student,
            $fee,
            $acc_year,
            $school,
        ) {
            $invoice = FeeInvoice::create([
                'invoice_date' => Carbon::today()->toDateString(),
                'student_id' => $student->id,
                'grade_id' => $student->grade_id,
                'classroom_id' => $student->classroom_id,
                'school_fee_id' => $fee->id,
                'academic_year_id' => $acc_year,
                'user_id' => auth()->id(),
                'school_id' => $school,
                'status' => 'not_paid',
            ]);

            $this->logActivity(
                trans('log.actions.added'),
                trans('log.models.receipt_payment.created', [
                    'name' => $student->name,
                    'date' => Carbon::today()->toDateString(),
                ]),
            );

            app(AccountService::class)->createStudentAccount(
                student: $student,
                fee_invoices_id: $invoice->id,
                acc_year: $acc_year,
                type: 'invoice',
                debit: $fee->amount,
                credit: 0.0,
            );

            return $invoice;
        });
    }

    public function createPaymentParts(
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

    public function createExceptionFee(
        $student,
        Request $request,
        $acc_year,
        $school_id,
    ): ExceptionFees {
        return ExceptionFees::create([
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
}
