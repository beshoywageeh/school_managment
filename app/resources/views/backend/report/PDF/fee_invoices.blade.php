@extends('layouts.pdf', ['school' => $school])

@section('title', 'fee invoices')

@section('header-center')
    <p>{{ trans('report.fee_invoice') }}</p>
    <br>
    <p>{{ trans('report.print_date', ['date' => date('Y-m-d')]) }}</p>
@endsection

@section('content')
    @foreach ($data['all'] as $acc => $grades)
        @foreach ($grades as $grade => $classrooms)
            @foreach ($classrooms as $classroom => $students)
                <table class="table" style="margin-bottom: 0.5rem">
                    <tr>
                        <th>
                            <h5>{{ $acc }}</h5>
                        </th>
                        <th>
                            <h5>{{ $grade }}</h5>
                        </th>
                        <th>
                            <h5>{{ $classroom }}</h5>
                        </th>
                    </tr>
                </table>
                <table class="table text-center table-striped table-bordered table-sm">
                    <thead>

                        <tr class="text-white bg-dark">
                            <th>#</th>
                            <th>{{ trans('report.student') }}</th>
                            <th>{{ trans('fee_invoice.date') }}</th>
                            <th>{{ trans('report.payment_status') }}</th>
                            <th>{{ trans('report.amount') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td width="5%">{{ $loop->index + 1 }}</td>
                                <td>{{ $student->student->name }}</td>
                                <td>{{ $student->invoice_date }}</td>
                                <td>{{ $student->status == 0 ? trans('report.unpaid') : trans('report.paid') }}</td>
                                <td>{{ Number::currency($student->schoolFee->amount, config('school.currency'), 'ar') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="4">{{ trans('report.total') }}</th>
                            <th colspan="1">{{ Number::currency($students->sum(fn ($s) => $s->schoolFee?->amount ?? 0), config('school.currency'), 'ar') }}</th>
                        </tr>
                    </tfoot>
                </table>
                @if (!$loop->last)
                    <pagebreak></pagebreak>
                @endif
            @endforeach
            @if (!$loop->last)
                <pagebreak></pagebreak>
            @endif
        @endforeach
        @if (!$loop->last)
            <pagebreak></pagebreak>
        @endif
    @endforeach




@endsection
