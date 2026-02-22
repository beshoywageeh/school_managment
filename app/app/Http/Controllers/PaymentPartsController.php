<?php

namespace App\Http\Controllers;

use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\acadmice_year;
use App\Models\Fee_invoice;
use App\Models\PaymentParts;
use App\Models\Student;
use App\Services\FinancialService;
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

    public function store(Request $request, FinancialService $service)
    {
        $List_Parts = $request->list_parts;
        try {
            foreach ($List_Parts as $list_part) {
                $acc_year = acadmice_year::where('status', '0')->first()->id;
                $student = Student::findorfail($list_part['student_id']);
                $this->logActivity(trans('log.actions.added'), trans('log.models.payment_part.created', ['name' => $student->name]));
                $service->PaymentParts($student, $list_part['fee_id'], $acc_year, $this->GetSchool()->id, $list_part['pay_at'], $list_part['amount']);
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

    public function submit_pay(Request $request, FinancialService $service)
    {
        try {
            DB::beginTransaction();
            $part = PaymentParts::findOrFail($request->id);
            $check = PaymentParts::where('school_fees_id', $part->school_fees_id)->where('student_id', $part->student_id)->get();
            $fee = Fee_invoice::where('school_fee_id', $part->school_fees_id)->where('student_id', $part->student_id)->where('status', '0')->with('fees')->first();
            $fee_parts = PaymentParts::where('school_fees_id', $part->school_fees_id)->where('student_id', $part->student_id)->get();
            $student = Student::findOrFail($request->student_id);
            $currentYear = acadmice_year::where('status', '0 ')->firstOrFail();

            if ($request->amount != $part->amount) {
                // Handling partial payments
                $service->submit_pay_less($student, $part, $request->amount, $currentYear->id, $this->GetSchool()->id);
                $this->logActivity(trans('log.actions.paid_partially'), trans('log.models.payment_part.paid_partially', ['name' => $student->name]));
                $part->delete();
                DB::commit();
            } elseif ($request->amount === $part->amount || $check->count() !== 0) {

                // Handling full payment
                $part->update(['status' => 'payed']);
                $totalAmount = $request->amount;
                $receipt = $service->createReceipt($totalAmount, $student, $currentYear->id, $this->GetSchool()->id);
                $service->CreateStudentAccount($student, $receipt->id, $currentYear->id, 'payment', $part->amount);
                if ($fee_parts->sum('amount') == $check->sum('amount')) {
                    $fee->update(['status' => 'payed']);
                }
                $this->logActivity(trans('log.actions.paid_fully'), trans('log.models.payment_part.paid_fully', ['name' => $student->name]));
                DB::commit();

                return redirect()->route('Recipt_Payment.print', $receipt->id);
            } else {
                $part->update(['status' => 'payed']);
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
}
