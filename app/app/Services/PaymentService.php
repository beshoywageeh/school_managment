<?php

namespace App\Services;

use Alkoumi\LaravelArabicNumbers\Numbers;
use App\Http\Traits\SchoolTrait;
use App\Models\AcademicYear;
use App\Models\FeeInvoice;
use App\Models\PaymentParts;
use App\Models\ReceiptPayment;
use App\Models\Student;
use App\Services\Finance\FinancialService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentService
{
    use SchoolTrait;

    public function __construct(
        protected FinancialService $FinancialService,
    ) {}

    public function handleFeeInvoice(Request $request, FinancialService $FinancialService): array
    {
        $student = Student::findorfail($request->student_id);
        $academic_year = AcademicYear::where('status', config('school.academic_year_status'))->first();

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

    public function handlePartialPayment(Request $request, FinancialService $FinancialService): array
    {
        $student = Student::findorfail($request->student_id);
        $report_data = [];
        $academic_year = AcademicYear::where('status', config('school.academic_year_status'))->first();

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

                $report_data['recipt'] = ReceiptPayment::where('id', $pay->id)->first('Debit');
                $report_data['items'] = [
                    [
                        'date' => $pay->date,
                        'amount' => $pay->amount,
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
    }

    public function handleClothesPayment(Request $request, FinancialService $FinancialService): array
    {
        $student = Student::findorfail($request->student_id);
        $academic_year = AcademicYear::where('status', config('school.academic_year_status'))->first();
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
            config('school.currency'),
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

    public function handleBooksPayment(Request $request, FinancialService $FinancialService): array
    {
        $student = Student::findorfail($request->student_id);
        $academic_year = AcademicYear::where('status', config('school.academic_year_status'))->first();
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
            config('school.currency'),
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
