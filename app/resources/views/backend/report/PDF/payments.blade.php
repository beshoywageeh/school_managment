@extends('layouts.pdf', ['school' => $school])

@section('header-center')
    {{ trans('report.payments') }}
    <br>
    <br>
    {{ trans('report.period', ['from' => $data['from'], 'to' => $data['to']]) }}
    <br>
    <br>
    {{ trans('report.print_date', ['date' => date('d-m-Y')]) }}
@endsection

@section('content')
    <table class="table text-center table-striped table-bordered table-sm">
        <thead>
            <tr class="text-white bg-dark">
                <th>#</th>
                <th>{{ trans('report.manual') }}</th>
                <th>{{ trans('report.date') }}</th>
                <th>{{ trans('report.student') }}</th>
                <th>{{ trans('report.classroom') }}</th>
                <th>{{ trans('report.amount') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data['payment'] as $payment)
                <tr>
                    <td width="5%">{{ $loop->index + 1 }}</td>
                    <td>{{ $payment->manual }}</td>
                    <td>{{ $payment->date }}</td>
                    <td>{{ $payment->student->name }}</td>
                    <td>{{ $payment->student->classroom->name }}</td>
                    <td>{{ Number::currency($payment->Debit, 'EGP', 'ar') }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="5">{{ trans('report.total') }}</th>
                <th>{{ Number::currency($data['payment']->sum('Debit'), 'EGP', 'ar') }}</th>
            </tr>
        </tfoot>
    </table>
@endsection
