<?php

namespace App\Services;

use App\Http\Traits\LogsActivity;
use App\Models\book_sheet;
use App\Models\bookSheets_order;
use App\Models\clothes;
use App\Models\clothes_order;
use App\Models\Exchange_bond;
use App\Models\ExcptionFees;
use App\Models\Fee_invoice;
use App\Models\fund_account;
use App\Models\PaymentParts;
use App\Models\Recipt_Payment;
use App\Models\StudentAccount;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FinancialService
{
    use logsActivity;

    public function FeeInvoice($student, $fee_id, $acc_year, $school)
    {
        $fee = new Fee_invoice;
        $fee->invoice_date = date('Y-m-d');
        $fee->student_id = $student;
        $fee->grade_id = $student->grade_id;
        $fee->classroom_id = $student->classroom_id;
        $fee->school_fee_id = $fee_id;
        $fee->academic_year_id = $acc_year;
        $fee->user_id = Auth::user()->id;
        $fee->school_id = $school;
        $fee->save();
    }

    public function PaymentParts($student, $fee_id, $acc_year, $school, $pay_at, $amount)
    {
        $fee = new PaymentParts;
        $fee->date = $pay_at;
        $fee->student_id = $student->id;
        $fee->grade_id = $student->grade_id;
        $fee->class_id = $student->class_id;
        $fee->school_fees_id = $fee_id;
        $fee->amount = $amount;
        $fee->academic_year_id = $acc_year;
        $fee->school_id = $school;
        $fee->user_id = auth()->user()->id;
        $fee->save();
        $this->logActivity(trans('log.actions.added'), trans('log.models.payment_part.created', ['name' => $student->name]));
    }

    public function CreateStudentAccount($student, $fees, $acc_year, $type, $debit = 0.00, $credit = 0.00, $recipt_id = null, $excpetion_id = null, $exchange_bond_id = null)
    {

        $StudentAccount = new StudentAccount;
        $StudentAccount->student_id = $student->id;
        $StudentAccount->grade_id = $student->grade_id;
        $StudentAccount->classroom_id = $student->classroom_id;
        $StudentAccount->recipt__payments_id = $recipt_id;
        $StudentAccount->fee_invoices_id = $fees;
        $StudentAccount->excpetion_id = $excpetion_id;
        $StudentAccount->exchange_bond_id = $exchange_bond_id;
        $StudentAccount->date = date('Y-m-d');
        $StudentAccount->type = $type;
        $StudentAccount->classroom_id = $student->classroom_id;
        $StudentAccount->academic_year_id = $acc_year->id;
        $StudentAccount->debit = $debit;
        $StudentAccount->credit = $credit;
        $StudentAccount->save();
    }

    public function AddStudentBookInvoice($student)
    {
        $generate_code = bookSheets_order::where('type', '2')->orderBy('auto_number', 'desc')->first();
        $books = book_sheet::where('school_id', auth()->user()->school_id)->where('grade_id', $student->grade_id)->get();
        $order = bookSheets_order::create([
            'auto_number' => isset($generate_code) ? str_pad($generate_code->auto_number + 1, 6, '0', STR_PAD_LEFT) : '000001',
            'type' => '2',
            'date' => date('Y-m-d'),
            'student_id' => $student->id,
            'school_id' => auth()->user()->school_id,
            'user_id' => auth()->user()->id,
        ]);
        foreach ($books as $book_sheet) {
            DB::table('books_sheets_stocks')->insert([
                'books_sheets_id' => $book_sheet->id,
                'quantity_out' => '1',
                'quantity_in' => '0',
                'order_id' => $order->id,
            ]);
        }
        $this->logActivity(trans('log.parents.added_action'), trans('log.book_sheets_order.sarf_added', ['number' => $order->auto_number]));
    }

    public function AddStudentClotheInvoice($student)
    {
        $generate_code = clothes_order::where('type', '2')->orderBy('auto_number', 'desc')->first();
        $order = clothes_order::create([
            'auto_number' => isset($generate_code) ? str_pad($generate_code->auto_number + 1, 6, '0', STR_PAD_LEFT) : '000001',
            'type' => '2',
            'date' => date('Y-m-d'),
            'student_id' => $student->id,
            'isset_order' => 1,
            'school_id' => auth()->user()->school_id,
            'user_id' => auth()->user()->id,
        ]);
        $clothe_id = clothes::where('school_id', auth()->user()->school_id)->where('grade_id', $student->grade_id)->get();
        foreach ($clothe_id as $clothe) {
            \DB::table('clothes_stocks')->insert([
                'clothes_id' => $clothe->id,
                'quantity_out' => '1',
                'quantity_in' => '0',
                'order_id' => $order->id,
            ]);
        }
        $this->logActivity(trans('log.clothes_order.out_order_added_action'), trans('log.clothes_order.out_order_added', ['order_id' => $order->id, 'student_name' => $student->name]));
    }

    public function submit_pay_less($student, $part, $req_amount, $currentYear, $school)
    {
        $new_part = new PaymentParts([
            'date' => date('Y-m-d'),
            'student_id' => $student->id,
            'grade_id' => $student->grade_id,
            'class_id' => $student->classroom_id,
            'amount' => $part->amount - $req_amount,
            'school_fees_id' => $part->school_fees_id,
            'academic_year_id' => $currentYear,
            'school_id' => $school,
            'user_id' => auth()->user()->id,
        ]);

        return $new_part;
    }

    public function createReceipt($amount, $student, $academicYearId, $school_id)
    {
        $lastPayment = Recipt_Payment::orderBy('manual', 'desc')->first();
        $manual = $lastPayment ? str_pad($lastPayment->manual + 1, 5, '0', STR_PAD_LEFT) : '00001';

        $receipt = new Recipt_Payment([
            'manual' => $manual,
            'date' => Carbon::today(),
            'student_id' => $student,
            'Debit' => $amount,
            'academic_year_id' => $academicYearId,
            'school_id' => $school_id,
            'user_id' => auth()->user()->id,
        ]);
        $this->logActivity(trans('log.actions.added'), trans('log.models.payment_part.receipt_added', ['name' => $student->name]));
        $receipt->save();

        return $receipt;
    }

    public function exciption_fee($student, $request, $acc_year, $school_id)
    {
        $pay = new ExcptionFees;
        $pay->date = date('Y-m-d');
        $pay->student_id = $student->id;
        $pay->amount = $request->amount;
        $pay->academic_year_id = $acc_year;
        $pay->grade_id = $student->grade_id;
        $pay->class_id = $student->classroom_id;
        $pay->fee_id = $request->fee_id;
        $pay->school_id = $school_id;
        $pay->user_id = auth()->id();
        $pay->save();

        return $pay;
    }

    public function Exchange_bond($school, $request, $acc_year)
    {
        $exchange = new Exchange_bond;
        $exchange->school_id = $school->id;
        $exchange->manual = $request->manual;
        $exchange->student_id = $request->student_id;
        $exchange->academic_year_id = $acc_year->id;
        $exchange->amount = $request->amount;
        $exchange->date = date('Y-m-d');
        $exchange->description = $request->note;
        $exchange->user_id = auth()->user()->id;
        $exchange->save();

        return $exchange;
    }

    public function Fund_Account($school, $exchange = null, $Credit = 0.00, $Debit = 0.00, $receipt = null)
    {
        $fund_account = new fund_account;
        $fund_account->date = date('Y-m-d');
        $fund_account->user_id = auth()->user()->id;
        $fund_account->school_id = $school->id;
        $fund_account->exchange_bond_id = $exchange->id;
        $fund_account->recipt_id = $receipt->id;
        $fund_account->Credit = $Credit;
        $fund_account->Debit = $Debit;
        $fund_account->save();
    }
}
