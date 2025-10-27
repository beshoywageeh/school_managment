<?php

namespace App\Http\Controllers;

use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\acadmice_year;
use App\Models\Exchange_bond;
use App\Models\fund_account;
use App\Models\Student;
use App\Models\StudentAccount;
use App\Services\StudentFinancialService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExchangeBondController extends Controller
{
    use LogsActivity,SchoolTrait;

    public function index()
    {
        $school = $this->GetSchool();
        $exchanges = Exchange_bond::where('school_id', $school->id)->with(['student', 'acadmic_year'])->get();

        return view('backend.exchange_bond.index', get_defined_vars());
    }

    public function create($id)
    {
        $school = $this->GetSchool();
        $student = Student::withSum('StudentAccount', 'debit')->withSum('StudentAccount', 'credit')->findOrFail($id);

        return view('backend.exchange_bond.create', get_defined_vars());
    }

    public function store(Request $request, StudentFinancialService $StudentAccount)
    {
        try {
            $acc_year = acadmice_year::whereYear('year_start', date('Y'))->first();
            $student = Student::where('id', $request->student_id)->first();
            DB::beginTransaction();
            $school = $this->GetSchool();
            $exchange = new Exchange_bond;
            $exchange->school_id = $school->id;
            $exchange->manual = $request->manual;
            $exchange->student_id = $request->student_id;
            $exchange->academic_year_id = $acc_year->id;
            $exchange->amount = $request->amount;
            $exchange->date = date('Y-m-d');
            $exchange->description = $request->note;
            $exchange->user_id = auth()->user()->id;
            $exchange->save();

            $StudentAccount->CreateStudentAccount($student, $exchange, $acc_year, 4, $request->amount, 0.00, null, null, $exchange->id);
            $fund_account = new fund_account;
            $fund_account->date = date('Y-m-d');
            $fund_account->user_id = auth()->user()->id;
            $fund_account->school_id = $school->id;
            $fund_account->exchange_bond_id = $exchange->id;
            $fund_account->Credit = $request->amount;
            $fund_account->Debit = 0.00;
            $fund_account->save();
            DB::commit();
            $this->LogActivity(trans('log.exchange_bond.added_action'), trans('log.exchange_bond.added'));

            return redirect()->route('exchange_bonds.print', $exchange->id);
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }

    }

    public function edit($id)
    {
        $school = $this->GetSchool();
        $exchange = Exchange_bond::where('id', $id)->with('student')->first();

        return view('backend.exchange_bond.edit', get_defined_vars());
    }

    public function update(Request $request,StudentFinancialService $StudentAccount)
    {
        try {
            $id = $request->id;
            $exchange = Exchange_bond::find($id);
            $student_account = StudentAccount::where('exchange_bond_id', $id)->first();
            $fund_account = fund_account::where('exchange_bond_id', $id)->first();
            DB::beginTransaction();
            $exchange->manual = $request->manual;
            $exchange->amount = $request->amount;
            $exchange->description = $request->note;
            $exchange->user_id = auth()->user()->id;
            $exchange->save();

            $StudentAccount->CreateStudentAccount($exchange->student, $exchange, acadmice_year::find($exchange->academic_year_id), 4, $request->amount - $student_account->debit, 0.00, null, null, $exchange->id);
            $fund_account->Credit = $request->amount;
            $fund_account->save();
            DB::commit();
            $this->LogActivity(trans('log.exchange_bond.updated_action'), trans('log.exchange_bond.updated'));

            return redirect()->route('exchange_bonds.index')->with('success', trans('general.success'));
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    public function print($id)
    {
        $school = $this->GetSchool();
        $exchange = Exchange_bond::where('id', $id)->with('student')->first();

        return view('backend.exchange_bond.print', get_defined_vars());
    }

    public function destroy($id)
    {
        try {
            $exchange = Exchange_bond::find($id);
            $student_account = StudentAccount::where('exchange_bond_id', $id)->first();
            $fund_account = fund_account::where('exchange_bond_id', $id)->first();
            DB::beginTransaction();
            $exchange->delete();
            $student_account->delete();
            $fund_account->delete();
            DB::commit();
            $this->LogActivity(trans('log.exchange_bond.deleted_action'), trans('log.exchange_bond.deleted'));

            return redirect()->route('exchange_bonds.index')->with('success', trans('general.success'));
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }
}
