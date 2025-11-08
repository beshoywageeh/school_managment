<?php

namespace App\Services;

use App\Models\{book_sheet, StudentAccount, bookSheets_order, clothes, clothes_order};
use App\Http\Traits\LogsActivity;

use Illuminate\Support\Facades\DB;

class StudentFinancialService
{
    use logsActivity;
    public function CreateStudentAccount($student, $fees = null, $acc_year, $type, $debit = 0.00, $credit = 0.00, $recipt_id = null, $excpetion_id = null, $exchange_bond_id = null)
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
        $books=book_sheet::where('school_id',auth()->user()->school_id)->where('grade_id',$student->grade_id)->get();
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
    public function AddStudentClotheInvoice($student){
         $generate_code = clothes_order::where('type', '2')->orderBy('auto_number', 'desc')->first();
            $order = clothes_order::create([
                'auto_number' => isset($generate_code) ? str_pad($generate_code->auto_number + 1, 6, '0', STR_PAD_LEFT) : '000001',
                'type' => '2',
                'date' => date('Y-m-d'),
                'student_id' => $student->id,
                'isset_order' =>  1 ,
                'school_id' => auth()->user()->school_id,
                'user_id' => auth()->user()->id,
            ]);
            $clothe_id=clothes::where('school_id',auth()->user()->school_id)->where('grade_id',$student->grade_id)->get();
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
}
