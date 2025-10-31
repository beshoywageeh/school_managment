<?php

namespace App\Http\Controllers;

use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\acadmice_year;
use App\Models\Fee_invoice;
use App\Models\PaymentParts;
use App\Models\Recipt_Payment;
use App\Models\Student;
use App\Models\StudentAccount;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentPartsController extends Controller
{
    use LogsActivity, SchoolTrait;

    public function index()
    {
        $PaymentParts = PaymentParts::with(['students', 'grades', 'classes', 'year'])->get();
        $school = $this->getSchool();

        return view('backend.payment_parts.index', get_defined_vars());
    }

    public function create($id)
    {
        try {
            $student = Fee_invoice::where('student_id', $id)->with(['students', 'grades', 'classes', 'acd_year', 'fees'])->get();
            $school = $this->getSchool();
            if ($student->count() == 0) {
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
                $fee->school_id = $this->getSchool()->id;
                $fee->user_id = auth()->user()->id;
                $fee->save();
                $this->logActivity(trans('log.actions.added'), trans('log.models.payment_part.created', ['name' => $fee->students->name]));
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
            $school = $this->getSchool();
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
            $school = $this->getSchool();

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
            $this->logActivity(trans('log.actions.updated'), trans('log.models.payment_part.updated', ['name' => $paymentpart->students->name]));
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
            $pay = PaymentParts::findorFail($id);
            $this->logActivity(trans('log.actions.deleted'), trans('log.models.payment_part.deleted', ['name' => $pay->students->name]));
            $pay->delete();
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
            $school = $this->getSchool();

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
            $fee = Fee_invoice::where('school_fee_id', $part->school_fees_id)->where('student_id', $part->student_id)->where('status', '0')->with('fees')->first();
            $fee_parts = PaymentParts::where('school_fees_id', $part->school_fees_id)->where('student_id', $part->student_id)->get();
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
                    'school_id' => $this->getSchool()->id,
                    'user_id' => auth()->user()->id,
                ]);
                $newPart->save();
                $this->logActivity(trans('log.actions.paid_partially'), trans('log.models.payment_part.paid_partially', ['name' => $student->name]));
                $part->delete();
                DB::commit();
            } elseif ($request->amount === $part->amount || $check->count() !== 0) {

                // Handling full payment
                $part->update(['payment_status' => 1]);
                $this->createStudentAccount(null, $request->student_id, $student->grade_id, $student->classroom_id, $currentYear->id, $currentDate, $part->amount, 0.00, '2');
                $totalAmount = $request->amount;
                $receipt = $this->createReceipt($totalAmount, $request->student_id, $currentYear->id);
                if ($fee_parts->sum('amount') == $check->sum('amount')) {
                    $fee->update(['status' => 1]);
                }
                $this->logActivity(trans('log.actions.paid_fully'), trans('log.models.payment_part.paid_fully', ['name' => $student->name]));
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
        $student = Student::findOrFail($studentId);
        $receipt = new Recipt_Payment([
            'manual' => $manual,
            'date' => Carbon::today(),
            'student_id' => $studentId,
            'Debit' => $amount,
            'academic_year_id' => $academicYearId,
            'school_id' => $this->getSchool()->id,
            'user_id' => auth()->user()->id,
        ]);
        $this->logActivity(trans('log.actions.added'), trans('log.models.payment_part.receipt_added', ['name' => $student->name]));
        $receipt->save();

        return $receipt;
    }

    private function createStudentAccount($receiptId, $studentId, $gradeId, $classroomId, $academicYearId, $date, $credit, $debit, $type)
    {
        $student = Student::findOrFail($studentId);

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
        $this->logActivity(trans('log.actions.added'), trans('log.models.payment_part.account_added', ['name' => $student->name]));
        $studentAccount->save();
    }
}
