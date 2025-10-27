<?php

namespace App\Services;

use App\Models\StudentAccount;

class StudentFinancialService
{
    public function CreateStudentAccount($student, $fees, $acc_year, $type, $debit = 0.00, $credit = 0.00, $recipt_id = null, $excpetion_id = null, $exchange_bond_id = null)
    {

        $StudentAccount = new StudentAccount;
        $StudentAccount->student_id = $student->id;
        $StudentAccount->grade_id = $student->grade_id;
        $StudentAccount->classroom_id = $student->classroom_id;
        $StudentAccount->recipt__payments_id = $recipt_id;
        $StudentAccount->fee_invoices_id = $fees->id;
        $StudentAccount->excpetion_id = $excpetion_id;
        $StudentAccount->exchange_bond_id = $exchange_bond_id;
        $StudentAccount->date = $fees->invoice_date;
        $StudentAccount->type = $type;
        $StudentAccount->classroom_id = $student->classroom_id;
        $StudentAccount->academic_year_id = $acc_year->id;
        $StudentAccount->debit = $debit;
        $StudentAccount->credit = $credit;
        $StudentAccount->save();
    }
}
