<?php

namespace App\Http\Controllers;

use App\Models\Recipt_Payment;
use App\Models\acadmice_year;
use App\Models\settings;
use App\Models\Student;
use App\Models\StudentAccount;
use Illuminate\Http\Request;
use Alkoumi\LaravelArabicNumbers\Numbers;

class ReciptPaymentController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Recipt_Payments = Recipt_Payment::with(['student:id,name'])->get();

        return view('backend.reciptpayment.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        try {
            $Student = Student::where('id',$id)->with('fees')->first();
            $lastPayment = Recipt_Payment::orderBy('manual', 'desc')->first();
            $invoice_manual = $lastPayment ? str_pad($lastPayment->manual + 1, 5, '0', STR_PAD_LEFT) : '00001';
         //   return $Students;
            //$invoice_manual='';
            return view('backend.reciptpayment.create', get_defined_vars());
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
            \DB::beginTransaction();
            $pay = new Recipt_Payment();
            $lastPayment = Recipt_Payment::orderBy('manual', 'desc')->first();
            $pay->manual = $lastPayment ? str_pad($lastPayment->manual + 1, 5, '0', STR_PAD_LEFT) : '00001';
            $pay->date = date('Y-m-d');
            $pay->student_id = $request->student_id;
            $pay->Debit = $request->amount;
            $pay->academic_year_id = acadmice_year::where('status', '0')->first()->id;

            $pay->save();
            $std = new StudentAccount();
            $std->date = date('Y-m-d');
            $std->academic_year_id = acadmice_year::where('status', '0')->first()->id;

            $std->student_id = $request->student_id;
            $std->type = '2';
            $std->credit = $request->amount;
            $std->grade_id = Student::where('id', $request->student_id)->first()->grade_id;
            $std->classroom_id = Student::where('id', $request->student_id)->first()->classroom_id;
            $std->debit = 0.00;
            $std->recipt__payments_id = $pay->id;
            $std->save();
            \DB::commit();
            return redirect()->route('Recipt_Payment.index')->with('success', trans('general.success'));
        } catch (\Exception $e) {
            \DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
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
            $recipt_Payment = Recipt_Payment::where('id',$id)->with('student')->first();
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
            \DB::beginTransaction();

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

            \DB::commit();
            return redirect()->route('Recipt_Payment.index')->with('success', trans('general.success'));
        } catch (\Exception $e) {
            \DB::rollBack();
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
        return view('backend.reciptpayment.print', get_defined_vars());

    }
}
