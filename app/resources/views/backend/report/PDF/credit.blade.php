@extends('layouts.pdf', ['school' => $school])

@section('title', 'credit')

@section('header-center')
    <p>{{ trans('report.daily_payment') }}</p>
    <br>
    <p>{{ trans('report.print_date', ['date' => date('Y-m-d')]) }}</p>
@endsection

@section('content')
    <table class="table text-center table-striped table-bordered table-sm">
        <thead>
            <tr class="text-white bg-dark">
                <th>#</th>
                <th>{{ trans('report.date') }}</th>
                <th>{{ trans('report.student') }}</th>
                <th>{{ trans('report.classroom') }}</th>
                <th>{{ trans('general.grade') }}</th>
                <th>{{ trans('academic_year.view') }}</th>
                <th>{{ trans('report.fee_title') }}</th>
                <th>{{ trans('report.amount') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data['credit'] as $credit_item)
                <tr>
                    <td width="5%">{{ $loop->index + 1 }}</td>
                    <td>{{ $credit_item->invoice_date }}</td>
                    <td>{{ $credit_item->students->name }}</td>
                    <td>{{ $credit_item->classes->name }}</td>
                    <td>{{ $credit_item->grades->name }}</td>
                    <td>{{ $credit_item->acd_year->view }}</td>
                    <td>{{ $credit_item->fees->title }}</td>
                    <td>{{ Number::currency($credit_item->fees->amount, 'EGP', 'ar') }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="7">{{ trans('report.total') }}</th>
                <th>{{ Number::currency($data['credit']->sum('fees.amount'), 'EGP', 'ar') }}</th>
            </tr>
        </tfoot>
    </table>
@endsection
