<?php

namespace App\Http\Controllers;

use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\Fee_invoice;
use App\Models\PaymentParts;
use App\Models\Student;
use App\Services\FinancialService;
use Illuminate\Http\Request;

class PaymentPartsController extends Controller
{
    use LogsActivity, SchoolTrait;

    public function __construct(
        private FinancialService $financial_service,
    ) {}

    public function index()
    {
        $PaymentParts = PaymentParts::with([
            'students',
            'grades',
            'classes',
            'year',
        ])->paginate(10);
        $school = $this->getSchool();

        // return $PaymentParts;
        return view('backend.payment_parts.index', get_defined_vars());
    }

    public function create($id)
    {
        try {
            $student = Student::where('id', $id)
                ->with([
                    'fee_invoice' => function ($q) {
                        $q->where('status', 'notpayed')->with(
                            'fees:id,title,amount',
                        );
                    },
                    'parent:id,Father_Name',
                ])
                ->first(['id', 'name', 'acadmiecyear_id', 'parent_id']);

            $school = $this->getSchool();
            if ($student->count() == 0) {
                session()->flash('info', trans('general.noInvoiceToPart'));

                return redirect()->back();
            } else {
                return view(
                    'backend.payment_parts.create',
                    get_defined_vars(),
                );
            }
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
            $academic_year = Fee_invoice::where('student_id', $student->id)
                ->where('status', 'notpayed')
                ->first('academic_year_id');

            foreach ($parts as $part) {
                $this->financial_service->PaymentParts(
                    $student,
                    $part['fee_id'],
                    $academic_year->academic_year_id,
                    $this->GetSchool()->id,
                    $part['pay_at'],
                    $part['amount'],
                );
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
            $paymentParts = PaymentParts::where('id', $id)
                ->with([
                    'students:id,name',
                    'grades:id,name',
                    'classes:id,name',
                    'acd_year',
                ])
                ->first();
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
