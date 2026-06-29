<?php

namespace App\Http\Controllers;

use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\AcademicYear;
use App\Models\Exchange_bond;
use App\Models\FundAccount;
use App\Models\Student;
use App\Models\StudentAccount;
use App\Services\FinancialService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExchangeBondController extends Controller
{
    use LogsActivity, SchoolTrait;

    public function __construct(private FinancialService $StudentAccount) {}

    public function index()
    {
        $school = $this->GetSchool();
        $exchanges = Exchange_bond::where('school_id', $school->id)
            ->with(['student', 'acadmic_year'])
            ->get();

        return view('backend.exchange_bond.index', get_defined_vars());
    }

    public function create($id)
    {
        $school = $this->GetSchool();
        $student = Student::withSum('StudentAccount', 'debit')
            ->withSum('StudentAccount', 'credit')
            ->findOrFail($id);

        return view('backend.exchange_bond.create', get_defined_vars());
    }

    public function store(Request $request)
    {
        try {
            $acc_year = AcademicYear::whereYear(
                'year_start',
                date('Y'),
            )->first();

            $school = $this->GetSchool();
            $exchange = $this->StudentAccount->Exchange_bond(
                $school,
                $request,
                $acc_year->id,
            );

            $this->LogActivity(
                trans('log.actions.added'),
                trans('log.models.exchange_bond.created'),
            );

            return redirect()->route('exchange-bonds.print', $exchange->id);
        } catch (\Exception $e) {
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

    public function update(Request $request)
    {
        try {
            $id = $request->id;
            $exchange = Exchange_bond::find($id);
            $student_account = StudentAccount::where(
                'exchange_bond_id',
                $id,
            )->first();
            $FundAccount = FundAccount::where(
                'exchange_bond_id',
                $id,
            )->first();
            DB::beginTransaction();
            $exchange->manual = $request->manual;
            $exchange->amount = $request->amount;
            $exchange->description = $request->note;
            $exchange->user_id = auth()->user()->id;
            $exchange->save();

            $this->StudentAccount->CreateStudentAccount(
                $exchange->student,
                $exchange,
                AcademicYear::find($exchange->academic_year_id),
                'exchange',
                $request->amount - $student_account->debit,
                0.0,
                null,
                null,
                $exchange->id,
            );
            $FundAccount->Debit = $request->amount;
            $FundAccount->save();
            DB::commit();
            $this->LogActivity(
                trans('log.actions.updated'),
                trans('log.models.exchange_bond.updated'),
            );

            return redirect()
                ->route('exchange-bonds.index')
                ->with('success', trans('general.success'));
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
            $student_account = StudentAccount::where(
                'exchange_bond_id',
                $id,
            )->first();
            $FundAccount = FundAccount::where(
                'exchange_bond_id',
                $id,
            )->first();
            DB::beginTransaction();
            $exchange->delete();
            $student_account->delete();
            $FundAccount->delete();
            DB::commit();
            $this->LogActivity(
                trans('log.actions.deleted'),
                trans('log.models.exchange_bond.deleted'),
            );

            return redirect()
                ->route('exchange-bonds.index')
                ->with('success', trans('general.success'));
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }
}
