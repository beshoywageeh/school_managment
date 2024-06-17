<?php

namespace App\Http\Controllers;

use App\Models\acadmice_year;
use App\Models\Fee_invoice;
use App\Models\PaymentParts;
use App\Models\Recipt_Payment;
use App\Models\Student;
use App\Models\StudentAccount;
use Illuminate\Http\Request;

class PaymentPartsController extends Controller
{
    public function index()
    {
        $PaymentParts = PaymentParts::with(['students', 'grades', 'classes', 'year'])->get();
        return view('backend.payment_parts.index', get_defined_vars());
    }
    public function create($id)
    {
        try {
            $student = Fee_invoice::where('student_id', $id)->with(['students', 'grades', 'classes', 'acd_year'])->withSum('fees', 'amount')->first();
         // return $student;
            if($student == null){
                session()->flash('info', trans('general.noInvoiceToPart'));
                return redirect()->back();
            }else{
            return view('backend.payment_parts.create', get_defined_vars());
            }
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            return redirect()->back();
        }
    }
    public function store(Request $request)
    {
        $List_Parts = $request->list_parts;
        try {
            foreach ($List_Parts as $list_part) {
                $fee = new PaymentParts();
                $fee->date = $list_part['pay_at'];
                $fee->student_id = $list_part['student_id'];
                $fee->grade_id = $request->grade_id;
                $fee->class_id = $request->class_id;
                $fee->amount = $list_part['amount'];
                $fee->academic_year_id = acadmice_year::where('status', '0')->first()->id;
                $fee->save();
            }
            session()->flash('success', trans('general.success'));
            return redirect()->route('payment_parts.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            return redirect()->back()->withInput();
        }
    }
    public function show($id)
    {
        try {
            $paymentParts = PaymentParts::where('id', $id)->with(['students:id,name', 'grades:id,name', 'classes:id,name', 'acd_year'])->first();
            session()->flash('success', trans('general.success'));
            return view('backend.payment_parts.edit', get_defined_vars());
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            return redirect()->back();
        }
    }
    public function edit($id)
    {
        try {
            $paymentParts = PaymentParts::where('id', $id)->with(['students:id,name', 'grades:id,name', 'classes:id,name', 'year:id,year_start,year_end'])->first();

            return view('backend.payment_parts.edit', get_defined_vars());
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            return redirect()->back();
        }
    }
    public function update(Request $request)
    {
        try {
            $paymentpart = PaymentParts::findorfail($request->id);
            $paymentpart->update([
                'amount' => $request->amount
            ]);
            session()->flash('success', trans('general.success'));
            return redirect()->route('payment_parts.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            return redirect()->back();
        }
    }
    public function destroy($id)
    {
        try {

            $PaymentParts = PaymentParts::findorFail($id)->delete();
            session()->flash('success', trans('general.success'));
            return redirect()->route('payment_parts.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            return redirect()->back();
        }
    }

    public function pay($id)
    {
        try {

            $part = PaymentParts::where('id', $id)->with(['students', 'grades', 'classes', 'year'])->first();
            return view('backend.payment_parts.pay', get_defined_vars());
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            return redirect()->back();
        }
    }

    public function submit_pay(Request $request)
    {
        // return $request;
        \DB::beginTransaction();
        try {
            $part = PaymentParts::findorfail($request->id);

            if ($request->amount != $part->amount) {
                $part = PaymentParts::findorfail($request->id);
                $student = Student::findorfail($request->student_id);
                $new_part = new PaymentParts();
                $new_part->date = date('Y-m-d');
                $new_part->student_id = $student->id;
                $new_part->grade_id = $student->grade_id;
                $new_part->class_id = $student->classroom_id;
                $new_part->amount = $part->amount - $request->amount;
                $new_part->academic_year_id = acadmice_year::where('status', '0')->first()->id;
                $new_part->save();
                $recipt = new Recipt_Payment();
                $lastPayment = Recipt_Payment::orderBy('date', 'desc')->first();
                $recipt->manual = $lastPayment ? str_pad($lastPayment->manual + 1, 5, '0', STR_PAD_LEFT) : '00001';
                $recipt->date = date('Y-m-d');
                $recipt->student_id = $student->id;
                $recipt->academic_year_id = acadmice_year::where('status', '0')->first()->id;
                $recipt->Debit = $request->amount;
                $recipt->save();
                $std = new StudentAccount();
                $std->student_id = $request->student_id;
                $std->type = '1';
                $std->date = $recipt->date;
                $std->credit = $request->amount;
                $std->grade_id = $student->grade_id;
                $std->classroom_id = $student->classroom_id;
                $std->academic_year_id = acadmice_year::where('status', '0')->first()->id;
                $std->debit = 0.00;
                $std->recipt__payments_id = $recipt->id;
                $std->save();
                $part->delete();
            } else {
                $part = PaymentParts::findorfail($request->id);
                $student = Student::findorfail($request->student_id);
                $part->update([
                    'payment_status' => 1
                ]);
                $recipt = new Recipt_Payment();
                $lastPayment = Recipt_Payment::orderBy('manual', 'desc')->first();
                $recipt->manual = $lastPayment ? str_pad($lastPayment->manual + 1, 5, '0', STR_PAD_LEFT) : '00001';
                $recipt->date = date('Y-m-d');
                $recipt->student_id = $student->id;
                $recipt->Debit = $part->amount;
                $recipt->academic_year_id = acadmice_year::where('status', '0')->first()->id;
                $recipt->save();
                $std = new StudentAccount();
                $std->date = $recipt->date;
                $std->type = '2';
                $std->academic_year_id = acadmice_year::where('status', '0')->first()->id;
                $std->student_id = $request->student_id;
                $std->credit = $part->amount;
                $std->grade_id = $student->grade_id;
                $std->classroom_id = $student->classroom_id;
                $std->debit = 0.00;
                $std->recipt__payments_id = $recipt->id;
                $std->save();
            }
            \DB::commit();
            session()->flash('success', trans('general.success'));
            return redirect()->route('payment_parts.index');
        } catch (\Exception $e) {
            \DB::rollback();
            session()->flash('error', $e->getMessage());
            return redirect()->back();
        }
    }
}
