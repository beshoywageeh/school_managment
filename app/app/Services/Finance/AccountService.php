<?php

namespace App\Services\Finance;

use App\Exceptions\FinancialException;
use App\Http\Traits\LogsActivity;
use App\Models\ExchangeBond;
use App\Models\FundAccount;
use App\Models\ReceiptPayment;
use App\Models\Student;
use App\Models\StudentAccount;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountService
{
    use LogsActivity;

    private function generateAutoNumber(
        string $modelClass,
        string $column = 'auto_number',
        int $pad = 6
    ): string {
        return DB::transaction(function () use ($modelClass, $column, $pad) {
            $last = $modelClass::lockForUpdate()->orderBy($column, 'desc')->first();

            $nextNumber = $last ? ((int) $last->$column + 1) : 1;

            return str_pad($nextNumber, $pad, '0', STR_PAD_LEFT);
        });
    }

    public function createReceipt($amount, $student, $academicYearId, $school_id): ReceiptPayment
    {
        if ($amount <= 0) {
            throw new FinancialException('Receipt amount must be greater than zero.');
        }

        return DB::transaction(function () use ($amount, $student, $academicYearId, $school_id) {
            $receipt = ReceiptPayment::create([
                'manual' => $this->generateAutoNumber(ReceiptPayment::class, 'manual', 5),
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

    public function createOrUpdateExchangeBond($school, Request $request, $acc_year): ExchangeBond
    {
        if ($request->amount <= 0) {
            throw new FinancialException('Exchange bond amount must be greater than zero.');
        }

        $student = Student::findOrFail($request->student_id);
        $academicYearId = is_object($acc_year) ? $acc_year->id : $acc_year;

        return DB::transaction(function () use ($school, $request, $academicYearId, $student) {
            $exchange = ExchangeBond::updateOrCreate(
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

            $this->createStudentAccount(
                student: $student,
                fee_invoices_id: null,
                acc_year: $academicYearId,
                type: 'exchange',
                debit: $request->amount,
                credit: 0.0,
                exchange_bond_id: $exchange->id
            );

            $this->fundAccount($school, $exchange->id, 0.0, $request->amount);

            return $exchange;
        });
    }

    public function fundAccount(
        $school,
        $exchange = null,
        $Credit = 0.0,
        $Debit = 0.0,
        $receipt = null
    ): void {
        FundAccount::create([
            'date' => Carbon::today()->toDateString(),
            'user_id' => auth()->id(),
            'school_id' => $school->id,
            'exchange_bond_id' => $exchange,
            'receipt_id' => is_object($receipt) ? $receipt->id : $receipt,
            'Credit' => $Credit,
            'Debit' => $Debit,
        ]);
    }

    public function createStudentAccount(
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
        if (! $student) {
            throw new FinancialException('Cannot create student account without a student.');
        }

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
