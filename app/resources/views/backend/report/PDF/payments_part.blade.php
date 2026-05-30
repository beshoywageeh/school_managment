@extends('layouts.pdf', ['school' => $school])

@section('title', 'payment_parts')

@section('header-center')
    {{ trans('report.payments_parts') }}
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
                <th>{{ trans('report.student') }}</th>
                <th>{{ trans('general.grade') }}</th>
                <th>{{ trans('report.classroom') }}</th>
                <th>{{ trans('report.date') }}</th>
                <th>{{ trans('general.status') }}</th>
                <th>{{ trans('report.amount') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data['parts'] as $payment)
                <tr>
                    <td width="5%">{{ $loop->index + 1 }}</td>
                    <td>{{ $payment->students->name }}</td>
                    <td>{{ $payment->grades->name }}</td>
                    <td>{{ $payment->classes->name }}</td>
                    <td>{{ $payment->date }}</td>
                    <td>{{ $payment->status }}</td>
                    <td>{{ Number::currency($payment->amount, 'EGP', 'ar') }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="6">{{ trans('report.total') }}</th>
                <th>{{ Number::currency($data['parts']->sum('amount'), 'EGP', 'ar') }}</th>
            </tr>
        </tfoot>
    </table>
@endsection
