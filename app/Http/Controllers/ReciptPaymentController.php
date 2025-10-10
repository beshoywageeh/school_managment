<?php

namespace App\Http\Controllers;

use Alkoumi\LaravelArabicNumbers\Numbers;
use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\acadmice_year;
use App\Models\Fee_invoice;
use App\Models\fund_account;
use App\Models\PaymentParts;
use App\Models\Recipt_Payment;
use App\Models\Student;
use App\Models\StudentAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReciptPaymentController extends Controller
{
    use LogsActivity, SchoolTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $school = $this->getSchool();
        $Recipt_Payments = Recipt_Payment::where('school_id', $school->id)->with(['student:id,name'])->get();

        return view('backend.reciptpayment.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        try {
            $school = $this->getSchool();
            $Student = Student::where('id', $id)->with('fees')->first();
            $lastPayment = Recipt_Payment::orderBy('manual', 'desc')->first();
            $invoice_manual = $lastPayment ? str_pad($lastPayment->manual + 1, 5, '0', STR_PAD_LEFT) : '00001';
            $feeInvoices = Fee_invoice::where('student_id', $id)->where('status', 0)->with('fees:id,title,amount')->get(['id', 'invoice_date', 'school_fee_id']);
            $parts = PaymentParts::where('student_id', $id)->where('payment_status', 0)->get();
            if ($feeInvoices->count() == 0 && $parts->count() == 0) {
                session()->flash('info', trans('General.noInvoiceToPay'));

                return redirect()->back();
            } else {
                return view('backend.reciptpayment.create', get_defined_vars());
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            if ($request->type == 'full') {

                DB::beginTransaction();
                $invoice = Fee_invoice::where('id', $request->feeInvoice)->with('fees:id,title,amount')->first();
                $pay = new Recipt_Payment;
                $lastPayment = Recipt_Payment::orderBy('manual', 'desc')->first();
                $pay->manual = $lastPayment ? str_pad($lastPayment->manual + 1, 5, '0', STR_PAD_LEFT) : '00001';
                $pay->date = date('Y-m-d');
                $pay->student_id = $request->student_id;
                $pay->Debit = $invoice->fees->amount;
                $pay->academic_year_id = acadmice_year::where('status', '0')->first()->id;
                $pay->school_id = $this->getSchool()->id;
                $pay->user_id = auth()->user()->id;
                $pay->save();
                $std = new StudentAccount;
                $std->date = date('Y-m-d');
                $std->academic_year_id = acadmice_year::where('status', '0')->first()->id;
                $std->student_id = $request->student_id;
                $std->type = '2';
                $std->credit = $invoice->fees->amount;
                $std->grade_id = Student::where('id', $request->student_id)->first()->grade_id;
                $std->classroom_id = Student::where('id', $request->student_id)->first()->classroom_id;
                $std->debit = 0.00;
                $std->recipt__payments_id = $pay->id;
                $std->save();
                $invoice->update(['status' => 1]);
                $fund = new fund_account;
                $fund->date = date('Y-m-d');
                $fund->receipt_id = $pay->id;
                $fund->Credit = 0.00;
                $fund->Debit = $invoice->fees->amount;
                $fund->school_id = $this->getSchool()->id;
                $fund->user_id = auth()->user()->id;
                $fund->save();
                $this->logActivity(trans('log.parents.added_action'), trans('log.receipt_payment.added', ['name' => Student::where('id', $request->student_id)->first()->name, 'date' => date('Y-m-d')]));
                DB::commit();

                return redirect()->route('Recipt_Payment.print', $pay->id);

            } else {

            }

        } catch (\Exception $e) {
            DB::rollback();

            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $school = $this->getSchool();
        $report_data['recipt'] = Recipt_Payment::where('id', $id)->with(['student:id,name'])->first();
        $report_data['tafqeet'] = Numbers::TafqeetMoney($report_data['recipt']->Debit, 'EGP');

        return view('backend.reciptpayment.print', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $recipt_Payment = Recipt_Payment::where('id', $id)->with('student')->first();
            $school = $this->getSchool();

            //  return $recipt_Payment;
            return view('backend.reciptpayment.edit', get_defined_vars());
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
            DB::beginTransaction();

            // Retrieve the existing Recipt_Payment record using the id from the request
            $pay = Recipt_Payment::findOrFail($request->id);

            $pay->date = date('Y-m-d');
            $pay->student_id = $request->student_id;
            $pay->Debit = $request->amount;
            $pay->academic_year_id = acadmice_year::where('status', '0')->first()->id;

            $pay->save();

            // Retrieve the corresponding StudentAccount record
            $std = StudentAccount::where('recipt__payments_id', $pay->id)->firstOrFail();
            $std->student_id = $request->student_id;
            $std->credit = $request->amount;
            $std->academic_year_id = acadmice_year::where('status', '0')->first()->id;

            $std->grade_id = Student::where('id', $request->student_id)->first()->grade_id;
            $std->classroom_id = Student::where('id', $request->student_id)->first()->classroom_id;
            $std->debit = 0.00;
            $std->recipt__payments_id = $pay->id;
            $std->save();
            $this->logActivity(trans('log.parents.updated_action'), trans('log.receipt_payment.updated', ['name' => $request->student->name, 'date' => date('Y-m-d')]));
            DB::commit();

            return redirect()->route('Recipt_Payment.index')->with('success', trans('general.success'));
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {

            $Recipt_Payment = Recipt_Payment::findorFail($id);
            $Recipt_Payment->delete();
            $this->logActivity(trans('log.parents.deleted_action'), trans('log.receipt_payment.deleted', ['name' => $Recipt_Payment->student->name, 'date' => date('Y-m-d')]));

            return redirect()->route('Recipt_Payment.index')->with('success', trans('general.success'));
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    public function print($id)
    {
        $report_data['recipt'] = Recipt_Payment::where('id', $id)->with(['student:id,name'])->first();

        $report_data['tafqeet'] = Numbers::TafqeetMoney($report_data['recipt']->Debit, 'EGP');
        $school = $this->getSchool();

        return view('backend.reciptpayment.print', get_defined_vars());

    }
}
