<?php

namespace App\Services;

use Alkoumi\LaravelArabicNumbers\Numbers;
use App\Exceptions\FinancialException;
use App\Models\AcademicYear;
use App\Models\FeeInvoice;
use App\Models\PaymentParts;
use App\Models\ReceiptPayment;
use App\Models\School;
use App\Models\Student;
use App\Services\Finance\FinancialService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentService
{
    public function __construct(protected FinancialService $FinancialService) {}

    public function handleFeeInvoice(
        Request $request,
        FinancialService $FinancialService,
        School $school,
    ) {
        try {
            $student = Student::findorfail($request->student_id);
            if (! $student) {
                throw new FinancialException('Student not found.');
            }

            DB::beginTransaction();
            $invoice = FeeInvoice::where('id', $request->feeInvoice)
                ->where('student_id', $student->id)
                ->with('schoolFee:id,title,amount')
                ->first();
            if (! $invoice) {
                throw new FinancialException('Fee invoice not found.');
            }

            if ($invoice->status->value === 'paid') {
                throw new FinancialException('Fee invoice is already paid.');
            }

            $pay = $FinancialService->createReceipt(
                $invoice->schoolFee->amount,
                $student,
                $invoice->academic_year_id,
                $school->id,
            );

            $FinancialService->CreateStudentAccount(
                $student,
                $invoice->id,
                $invoice->academic_year_id,
                'payment',
                0.0,
                $invoice->schoolFee->amount,
                $pay->id,
            );

            $invoice->update(['status' => 'paid']);

            $FinancialService->Fund_Account(
                $school,
                null,
                0.0,
                $invoice->schoolFee->amount,
                $pay->id,
            );

            $report_data = [];
            $report_data['type'] = 'fee_invoice';
            $report_data['columns'] = [
                'description' => trans('fees.desc'),
                'amount' => trans('Recipt_Payments.amount'),
            ];
            $report_data['items'] = [
                [
                    'description' => $invoice->schoolFee->title,
                    'amount' => $invoice->schoolFee->amount,
                ],
            ];
            $report_data['recipt'] = ReceiptPayment::where('id', $pay->id)
                ->with(['student:id,name'])
                ->first();
            $report_data['tafqeet'] = Numbers::TafqeetMoney(
                $report_data['recipt']->Debit,
                config('school.currency'),
            );

            DB::commit();

            return $report_data;
        } catch (Exception $e) {
            DB::rollBack();
            session()->flash('error');
            \Log::alert('handleFeeInvoice '.$e->getMessage());

            return redirect()->back();
        }
    }

    public function handlePartialPayment(
        Request $request,
        FinancialService $FinancialService,
        School $school,
    ) {
        try {
            DB::beginTransaction();
            $student = Student::findorfail($request->student_id);
            if (! $student) {
                throw new FinancialException('Student not found.');
            }
            $report_data = [];
            $academic_year = AcademicYear::where(
                'status',
                config('school.academic_year_status'),
            )->first();

            $parts = PaymentParts::where('student_id', $student->id)
                ->where('status', 'unpaid')
                ->orderBy('date')
                ->lockForUpdate()
                ->get();

            $current_amount = $request->amount * 1;

            foreach ($parts as $part) {
                if ($current_amount >= $part->amount) {
                    $pay = $FinancialService->createReceipt(
                        $part->amount,
                        $student,
                        $academic_year->id,
                        $school->id,
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
                        $school,
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
                            'amount' => $pay->Debit,
                        ],
                    ];
                    $report_data['tafqeet'] = Numbers::TafqeetMoney(
                        $report_data['recipt']->Debit,
                        config('school.currency'),
                    );
                    $report_data['type'] = 'payment_parts';
                    $report_data['columns'] = ['date', 'amount'];
                }
            }

            DB::commit();

            return $report_data;
        } catch (Exception $e) {
            DB::rollBack();
            session()->flash('error');
            \Log::alert('handleFeeInvoice '.$e->getMessage());

            return redirect()->back();
        }
    }
}
