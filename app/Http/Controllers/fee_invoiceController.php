<?php

namespace App\Http\Controllers;

use Alkoumi\LaravelArabicNumbers\Numbers;
use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\acadmice_year;
use App\Models\Fee_invoice;
use App\Models\School_Fee;
use App\Models\Student;
use App\Models\StudentAccount;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class fee_invoiceController extends Controller
{
    use LogsActivity, SchoolTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $school = $this->getSchool();
        $fee_invoices = Fee_invoice::where('school_id', $school)->with(['students:id,name', 'grades:id,name', 'classes:id,name', 'acd_year:id,view'])->withSum('fees', 'amount')->get();

        return view('backend.fee_invoices.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($student_id)
    {
        $school = $this->getSchool();
        $student = Student::where('school_id', $school)->where('id', $student_id)->first();
        $School_Fees = School_Fee::where('school_id', $school)->where('grade_id', $student->grade_id)->where('classroom_id', $student->classroom_id)->get(['id', 'title', 'amount']);

        return view('backend.fee_invoices.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $List_Fees = $request->list_fees;
        DB::beginTransaction();
        try {
            $ac_year = acadmice_year::where('status', '0')->first();
            foreach ($List_Fees as $list_fee) {
                $fee = new Fee_invoice;
                $fee->invoice_date = date('Y-m-d');
                $fee->student_id = $list_fee['student_id'];
                $fee->grade_id = $request->grade_id;
                $fee->classroom_id = $request->classroom_id;
                $fee->school_fee_id = $list_fee['fee'];
                $fee->academic_year_id = $ac_year->id;
                $fee->user = auth()->user()->id;
                $fee->school_id = $this->getSchool()->id;
                $fee->save();
                $std = new StudentAccount;
                $std->student_id = $list_fee['student_id'];
                $std->grade_id = $request->grade_id;
                $std->date = $fee->invoice_date;
                $std->type = '1';
                $std->fee_invoices_id = $fee->id;
                $std->classroom_id = $request->classroom_id;
                $std->academic_year_id = $ac_year->id;
                $std->debit = School_Fee::where('id', $list_fee['fee'])->first()->amount;
                $std->credit = 0.00;

                $std->save();

            }
            $this->logActivity('إضافة', 'تم اضافة فاتورة مدفوع لطالب', $fee->students->name);
            DB::commit();

            return redirect()->route('fee_invoice.index')->with('success', trans('general.success'));
        } catch (Exception $e) {
            DB::rollback();

            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $school = $this->getSchool();
        $invoice_details = Fee_invoice::where('id', $id)->with('students', 'fees', 'grades', 'classes')->first();
        $tafqeet = Numbers::TafqeetMoney($invoice_details->fees->amount, 'EGP', 'ar');

        return view('backend.fee_invoices.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $school = $this->getSchool();
        $fee = Fee_invoice::where('id', $id)->with('students', 'fees')->first();
        $sfees = School_Fee::where('grade_id', $fee->grade_id)->where('classroom_id', $fee->classroom_id)->get();

        return view('backend.fee_invoices.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        DB::beginTransaction();
        try {
            // Retrieve the existing fee invoice by its ID
            $fee = Fee_invoice::findOrFail($request->id);

            // Update the fee invoice details
            $fee->invoice_date = date('Y-m-d');
            $fee->student_id = $request->student_id;
            $fee->grade_id = $request->grade_id;
            $fee->classroom_id = $request->classroom_id;
            $fee->school_fee_id = $request->fee;
            $ac_year = acadmice_year::where('status', '0')->first();
            $fee->academic_year_id = $ac_year->id;
            $fee->save();

            // Update the corresponding student account record
            $std = StudentAccount::where('fee_invoices_id', $fee->id)->firstOrFail();
            $std->student_id = $request->student_id;
            $std->grade_id = $request->grade_id;
            $std->fee_invoices_id = $fee->id;
            $std->classroom_id = $request->classroom_id;
            $std->academic_year_id = $ac_year->id;
            $std->debit = School_Fee::where('id', $request->fee)->first()->amount;
            $std->credit = 0.00;
            $std->save();
            $this->logActivity('تعديل', 'تم تعديل فاتورة مدفوع لطالب', $fee->students->name);
            DB::commit();

            return redirect()->route('fee_invoice.index')->with('success', trans('general.success'));
        } catch (Exception $e) {
            DB::rollback();

            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $fee = Fee_invoice::findorFail($id);
            $this->logActivity('حذف', 'تم حذف فاتورة مدفوع لطالب', $fee->students->name);
            $fee->delete();

            return redirect()->route('fee_invoice.index')->with('success', trans('general.success'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
