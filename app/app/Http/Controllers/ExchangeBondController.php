<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExchangeBondRequest;
use App\Http\Requests\UpdateExchangeBondRequest;
use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\AcademicYear;
use App\Models\ExchangeBond;
use App\Models\FundAccount;
use App\Models\Student;
use App\Models\StudentAccount;
use App\Services\AccountingReversalService;
use App\Services\Finance\FinancialService;

class ExchangeBondController extends Controller
{
    use LogsActivity, SchoolTrait;

    public function __construct(
        private FinancialService $StudentAccount,
        private AccountingReversalService $accountingReversalService,
    ) {
        $this->middleware('permission:exchange_bonds-list', ['only' => ['index']]);
        $this->middleware('permission:exchange_bonds-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:exchange_bonds-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:exchange_bonds-info', ['only' => ['print']]);
        $this->middleware('permission:exchange_bonds-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $school = $this->GetSchool();
        $exchanges = ExchangeBond::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))
            ->with(['student', 'academicYear'])
            ->paginate(config('school.per_page', 10));

        return view('backend.exchange_bond.index', compact('school', 'exchanges'));
    }

    public function create($id)
    {
        $school = $this->GetSchool();
        $student = Student::withSum('studentAccount', 'debit')
            ->withSum('studentAccount', 'credit')
            ->findOrFail($id);

        return view('backend.exchange_bond.create', compact('school', 'student'));
    }

    public function store(StoreExchangeBondRequest $request)
    {
        try {
            $acc_year = AcademicYear::whereYear(
                'year_start',
                date('Y'),
            )->first();

            $school = $this->GetSchool();
            $exchange = $this->StudentAccount->exchangeBond(
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
        $exchange = ExchangeBond::where('id', $id)->with('student')->first();

        return view('backend.exchange_bond.edit', compact('school', 'exchange'));
    }

    public function update(UpdateExchangeBondRequest $request)
    {
        try {
            $this->executeInTransaction(function () use ($request) {
                $id = $request->id;
                $exchange = ExchangeBond::find($id);
                $student_account = StudentAccount::where(
                    'exchange_bond_id',
                    $id,
                )->first();
                $FundAccount = FundAccount::where(
                    'exchange_bond_id',
                    $id,
                )->first();
                $exchange->manual = $request->manual;
                $exchange->amount = $request->amount;
                $exchange->description = $request->note;
                $exchange->user_id = auth()->user()->id;
                $exchange->save();

                $this->StudentAccount->CreateStudentAccount(
                    $exchange->student,
                    null,
                    AcademicYear::find($exchange->academic_year_id),
                    'exchange',
                    $request->amount - $student_account->debit,
                    0.0,
                    null,
                    null,
                    $exchange->id,
                );
                $FundAccount->Debit = 0.0;
                $FundAccount->Credit = $request->amount;
                $FundAccount->save();
            });
            $this->LogActivity(
                trans('log.actions.updated'),
                trans('log.models.exchange_bond.updated'),
            );

            return redirect()
                ->route('exchange-bonds.index')
                ->with('success', trans('general.success'));
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    public function print($id)
    {
        $school = $this->GetSchool();
        $exchange = ExchangeBond::where('id', $id)->with('student')->first();

        return view('backend.exchange_bond.print', compact('school', 'exchange'));
    }

    public function destroy($id)
    {
        try {
            $this->executeInTransaction(function () use ($id) {
                $exchange = ExchangeBond::find($id);

                if (! $exchange) {
                    throw new \Exception('Exchange bond not found.');
                }

                $this->accountingReversalService->reverseExchangeBond($exchange);

                $student_account = StudentAccount::where(
                    'exchange_bond_id',
                    $id,
                )->first();
                $FundAccount = FundAccount::where(
                    'exchange_bond_id',
                    $id,
                )->first();
                $exchange->delete();
                $student_account?->delete();
                $FundAccount?->delete();
            });
            $this->LogActivity(
                trans('log.actions.deleted'),
                trans('log.models.exchange_bond.deleted'),
            );

            return redirect()
                ->route('exchange-bonds.index')
                ->with('success', trans('general.success'));
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }
}
