<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\FeeInvoice;
use App\Models\PaymentParts;
use App\Models\Student;
use App\Services\Finance\FinancialService;
use DB;

class PaymentPartsController extends Controller
{
    use LogsActivity, SchoolTrait;

    public function __construct(private FinancialService $financial_service)
    {
        $this->middleware('permission:payment_parts-list', [
            'only' => ['index'],
        ]);
        $this->middleware('permission:payment_parts-create', [
            'only' => ['create', 'store'],
        ]);
        $this->middleware('permission:payment_parts-edit', [
            'only' => ['edit', 'update'],
        ]);
        $this->middleware('permission:payment_parts-delete', [
            'only' => ['destroy'],
        ]);
    }

    public function index()
    {
        $school = $this->getSchool();
        $PaymentParts = PaymentParts::when(
            $this->schoolId(),
            fn ($q, $id) => $q->where('school_id', $id),
        )
            ->with(['student', 'grade', 'classroom', 'year'])
            ->paginate(config('school.per_page'));

        return view(
            'backend.payment_parts.index',
            compact('PaymentParts', 'school'),
        );
    }

    public function create($id)
    {
        try {
            $school = $this->getSchool();
            $student = Student::when(
                $this->schoolId(),
                fn ($q, $id) => $q->where('school_id', $id),
            )
                ->where('id', $id)
                ->with([
                    'fee_invoice' => function ($q) {
                        $q->where('status', 'unpaid')->with(['schoolFee']);
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

    public function store(StorePaymentRequest $request)
    {
        try {
            DB::beginTransaction();
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

            DB::commit();
            session()->flash('success', trans('general.success'));

            return redirect()->route('payment_parts.index');
        } catch (\Exception $e) {
            DB::rollBack();
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
            if ($paymentpart->status === 'paid') {
                session()->flash(
                    'error',
                    trans('general.cannot_update_paid_part'),
                );

                return redirect()->back();
            }
            $school = $this->getSchool();

            return view(
                'backend.payment_parts.edit',
                compact('paymentParts', 'school'),
            );
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    public function update(UpdatePaymentRequest $request)
    {
        try {
            $paymentpart = PaymentParts::findorfail($request->id);
            if ($paymentpart->status === 'paid') {
                session()->flash(
                    'error',
                    trans('general.cannot_update_paid_part'),
                );

                return redirect()->back();
            }
            $paymentpart->update([
                'amount' => $request->amount,
            ]);
            $this->logActivity(
                trans('log.actions.updated'),
                trans('log.models.payment_part.updated', [
                    'name' => $paymentpart->student->name,
                ]),
            );
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
            if ($pay->status === 'paid') {
                session()->flash(
                    'error',
                    trans('general.cannot_delete_paid_part'),
                );

                return redirect()->back();
            }
            $this->logActivity(
                trans('log.actions.deleted'),
                trans('log.models.payment_part.deleted', [
                    'name' => $pay->student->name,
                ]),
            );
            $pay->delete();
            session()->flash('success', trans('general.success'));

            return redirect()->route('payment_parts.index');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }
}
