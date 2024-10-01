<?php

namespace App\Http\Controllers;

use App\Models\{acadmice_year, Fee_invoice, PaymentParts, Recipt_Payment, Student, StudentAccount};
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            $student = Fee_invoice::where('student_id', $id)->with(['students', 'grades', 'classes', 'acd_year', 'fees'])->get();
            if ($student == null) {
                session()->flash('info', trans('general.noInvoiceToPart'));
                return redirect()->back();
            } else {
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
                $fee = new PaymentParts;
                $fee->date = $list_part['pay_at'];
                $fee->student_id = $list_part['student_id'];
                $fee->grade_id = $request->grade_id;
                $fee->class_id = $request->class_id;
                $fee->school_fees_id = $list_part['fee_id'];
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
                'amount' => $request->amount,
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
            PaymentParts::findorFail($id)->delete();
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


        try {
            DB::beginTransaction();
            $part = PaymentParts::findOrFail($request->id);
            $check = PaymentParts::where('school_fees_id', $part->school_fees_id)->where('student_id', $part->student_id)->get();
            $fee = Fee_invoice::where('school_fee_id', $part->school_fees_id)->with('fees')->first();
            //return $fee;
            $student = Student::findOrFail($request->student_id);
            $currentYear = acadmice_year::where('status', '0 ')->firstOrFail();
            $currentDate = Carbon::today();
            if ($request->amount != $part->amount) {
    
                // Handling partial payments
                $newPart = new PaymentParts([
                    'date' => $currentDate,
                    'student_id' => $student->id,
                    'grade_id' => $student->grade_id,
                    'class_id' => $student->classroom_id,
                    'amount' => $part->amount - $request->amount,
                    'school_fees_id' => $part->school_fees_id,
                    'academic_year_id' => $currentYear->id,
                ]);
                $newPart->save();
                $part->delete();
            } elseif ($request->amount === $part->amount || $check->count() !== 0) {
                //dd($check->sum('amount'), $fee->fees->amount);
                // Handling full payment
                $part->update(['payment_status' => 1]);
                $this->createStudentAccount(null, $request->student_id, $student->grade_id, $student->classroom_id, $currentYear->id, $currentDate, $part->amount, 0.00, '2 ');
                $totalAmount = $request->amount;
                $receipt = $this->createReceipt($totalAmount, $request->student_id, $currentYear->id);
                if ($totalAmount == $fee->fees->amount) {
                    $fee->update(['status' => '1']);
                }
                DB::commit();
                return redirect()->route('Recipt_Payment.print', $receipt->id);
            } else {
                $part->update(['payment_status' => 1]);
                DB::commit();
                return redirect()->route('Recipt_Payment.print', $receipt->id);
            }
            DB::commit();
            session()->flash('success', trans('general.success'));
            return redirect()->route('payment_parts.index');
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('error', $e->getMessage());
            return redirect()->back();
        }
    }
    private function createReceipt($amount, $studentId, $academicYearId)
    {
        $lastPayment = Recipt_Payment::orderBy('manual', 'desc')->first();
        $manual = $lastPayment ? str_pad($lastPayment->manual + 1, 5, '0', STR_PAD_LEFT) : '00001';
        $receipt = new Recipt_Payment([
            'manual' => $manual,
            'date' => Carbon::today(),
            'student_id' => $studentId,
            'Debit' => $amount,
            'academic_year_id' => $academicYearId,
        ]);
        $receipt->save();
        return $receipt;
    }

    private function createStudentAccount($receiptId, $studentId, $gradeId, $classroomId, $academicYearId, $date, $credit, $debit, $type)
    {
        $studentAccount = new StudentAccount([
            'student_id' => $studentId,
            'type' => $type,
            'date' => $date,
            'credit' => $credit,
            'grade_id' => $gradeId,
            'classroom_id' => $classroomId,
            'debit' => $debit,
            'academic_year_id' => $academicYearId,
            'recipt__payments_id' => $receiptId,
        ]);
        $studentAccount->save();
    }
}