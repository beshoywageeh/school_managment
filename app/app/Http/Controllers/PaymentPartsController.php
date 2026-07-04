<?php

namespace App\Http\Controllers;

use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\FeeInvoice;
use App\Models\PaymentParts;
use App\Models\Student;
use App\Services\Finance\FinancialService;
use Illuminate\Http\Request;

class PaymentPartsController extends Controller
{
    use LogsActivity, SchoolTrait;

    public function __construct(private FinancialService $financial_service)
    {
        $this->middleware('permission:payment_parts-list', ['only' => ['index']]);
        $this->middleware('permission:payment_parts-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:payment_parts-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:payment_parts-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $PaymentParts = PaymentParts::with([
            'students',
            'grades',
            'classes',
            'year',
        ])->paginate(10);
        $school = $this->getSchool();

        return view('backend.payment_parts.index', get_defined_vars());
    }

    public function create($id)
    {
        try {
            $school = $this->getSchool();
            $student = Student::where('school_id', $school->id)
                ->where('id', $id)
                ->with([
                    'fee_invoice' => function ($q) {
                        $q->where('status', 'unpaid')->with(['fees']);
                    },
                    'parent:id,father_name',
                ])
                ->first();

            if ($student->fee_invoice->count() == 0) {
                session()->flash('info', trans('general.noInvoiceToPart'));

                return redirect()->back();
            }

            return view(
                'backend.payment_parts.create',
                compact('school', 'student'),
            );
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    public function store(Request $request)
    {
        try {
            $student = Student::findorfail($request->student_id);
            $parts = $request->parts;
            $academic_year = FeeInvoice::where('student_id', $student->id)
                ->where('status', 'unpaid')
                ->first('academic_year_id');
            $parts->each(function ($part) use ($student, $academic_year) {
                $this->financial_service->PaymentParts(
                    $student,
                    $part['fee_id'],
                    $academic_year->academic_year_id,
                    $this->GetSchool()->id,
                    $part['pay_at'],
                    $part['amount'],
                    'unpaid',
                );
            });

            session()->flash('success', trans('general.success'));

            return redirect()->route('payment_parts.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back()->withInput();
        }
    }

    public function edit($id)
    {
        try {
            $paymentParts = PaymentParts::where('id', $id)
                ->with([
                    'students:id,name',
                    'grades:id,name',
                    'classes:id,name',
                    'year:id,year_start,year_end',
                ])
                ->first();
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
            $this->logActivity(
                trans('log.actions.updated'),
                trans('log.models.payment_part.updated', [
                    'name' => $paymentpart->students->name,
                ]),
            );
            session()->flash('success', trans('general.success'));

            return redirect()->route('payment-parts.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        try {
            $pay = PaymentParts::findorFail($id);
            $this->logActivity(
                trans('log.actions.deleted'),
                trans('log.models.payment_part.deleted', [
                    'name' => $pay->students->name,
                ]),
            );
            $pay->delete();
            session()->flash('success', trans('general.success'));

            return redirect()->route('payment-parts.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }
}
