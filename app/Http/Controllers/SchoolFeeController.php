<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSchool_FeeRequest;
use App\Http\Requests\UpdateSchool_FeeRequest;
use App\Http\Traits\LogsActivity;
use App\Models\acadmice_year;
use App\Models\class_room;
use App\Models\Fee_invoice;
use App\Models\Grade;
use App\Models\School_Fee;
use App\Models\Student;
use App\Models\StudentAccount;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SchoolFeeController extends Controller
{
    use LogsActivity;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $School_Fees = School_Fee::with('grade:id,name', 'classroom:id,name', 'user:id,name', 'year:id,view')->get(['id', 'title', 'amount', 'academic_year_id', 'description', 'grade_id', 'classroom_id', 'user_id', 'created_at']);

        return view('backend.school_fees.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            $grades = Grade::get();
            $years = acadmice_year::where('status', 0)->get();
            if ($grades->count() == 0 || $years->count() == 0) {
                session()->flash('info', 'من فضلك اضف مراحل واعوام دراسية للبدء');

                return redirect()->back();
            } else {
                return view('backend.school_fees.create', get_defined_vars());
            }

        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSchool_FeeRequest $request)
    {
        DB::beginTransaction();
        try {
            foreach ($request->classroom_id as $class_rooms) {
                $school_fee = new School_Fee;
                $school_fee->grade_id = $request->grade_id;
                $school_fee->classroom_id = $class_rooms;
                $school_fee->user_id = $request->user()->id;
                $school_fee->academic_year_id = $request->academic_year_id;
                $school_fee->description = $request->description;
                $school_fee->amount = $request->amount;
                $school_fee->title = $request->title;
                $school_fee->save();
                $this->logActivity('إضافة', 'مصروفات دراسية بقيمة :'.\Number::currency($request->amount, 'EGP', 'ar'));
            }
            $students = Student::where('grade_id', $request->grade_id)->whereIn('classroom_id', $request->classroom_id)->get();
            $ac_year = acadmice_year::where('status', '0')->first();
            // return $student;
            foreach ($students as $student) {
                $fee = new Fee_invoice;
                $fee->invoice_date = date('Y-m-d');
                $fee->student_id = $student->id;
                $fee->grade_id = $student->grade_id;
                $fee->classroom_id = $student->classroom_id;
                $fee->school_fee_id = $school_fee->id;
                $fee->academic_year_id = $ac_year->id;
                $fee->save();
                $std = new StudentAccount;
                $std->student_id = $student->id;
                $std->grade_id = $student->grade_id;
                $std->date = $fee->invoice_date;
                $std->type = '1';
                $std->fee_invoices_id = $fee->id;
                $std->classroom_id = $student->classroom_id;
                $std->academic_year_id = $ac_year->id;
                $std->debit = $request->amount;
                $std->credit = 0.00;
                $std->save();
                $this->logActivity('إضافة', 'تم اضافة فاتورة جديدة للطالب : '.$student->name.'بقيمة :'.\Number::currency($request->amount, 'EGP', 'ar'));
            }
            session()->flash('success', trans('General.success'));
            DB::commit();

            return redirect()->route('schoolfees.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            DB::rollBack();

            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $school_fee = School_Fee::findorFail($id);
        $students = Student::where('classroom_id', $school_fee->classroom_id)->where('grade_id', $school_fee->grade_id)->with('classroom:id,name', 'grade:id,name')->get(['code', 'name', 'classroom_id', 'grade_id']);

        return view('backend.school_fees.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $school_Fee = School_Fee::findorFail($id);
            $grades = Grade::get();
            $years = acadmice_year::where('status', 1)->get();
            $academic_years =
                $years->map(function ($year) {
                    return [
                        'id' => $year->id,
                        'academic_year' => Carbon::parse($year->year_start)->format('Y').'-'.Carbon::parse($year->year_end)->format('Y'),
                    ];
                });

            return view('backend.school_fees.edit', get_defined_vars());
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSchool_FeeRequest $request)
    {

        try {
            $school_fee = School_Fee::findorFail($request->id);
            $school_fee->update([
                'grade_id' => $request->grade_id,
                'classroom_id' => $request->classroom_id,
                'academic_year_id' => $request->academic_year_id,
                'description' => $request->description,
                'amount' => $request->amount,
            ]);
            $this->logActivity('تعديل', 'تم تعديل مصروفات دراسية بقيمة :'.\Number::currency($request->amount, 'EGP', 'ar'));
            session()->flash('success', trans('general.success'));

            return redirect()->route('schoolfees.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $fee = School_Fee::findorFail($id);
            $this->logActivity('حذف', 'تم حذف مصروف دراسي بقيمة :'.\Number::currency($fee->amount, 'EGP', 'ar'));
            $fee->delete();
            session()->flash('success', trans('general_success'));

            return redirect()->route('schoolfees.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    public function getclasses($id)
    {
        $class_rooms = class_room::where('grade_id', $id)->get(['id', 'name']);

        return response()->json($class_rooms);
    }
}
