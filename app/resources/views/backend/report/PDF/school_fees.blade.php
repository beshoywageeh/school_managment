@extends('layouts.pdf', ['school' => $school])

@section('title', 'school fees')

@section('header-center')
    <p>{{ trans('report.fee_invoice') }}</p>
    <br>
    <p>{{ trans('report.print_date', ['date' => date('Y-m-d')]) }}</p>
@endsection

@section('content')
    @foreach ($data['school_fees'] as $grade => $classrooms)
        @foreach ($classrooms as $classroom => $fees)
            <table class="table" style="margin-bottom: 0.5rem">
                <tr>
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
                        <th>{{ trans('report.fee_title') }}</th>
                        <th>{{ trans('report.amount') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fees as $fee)
                        <tr>
                            <td width="5%">{{ $loop->index + 1 }}</td>
                            <td>{{ $fee->title }}</td>
                            <td>{{ Number::currency($fee->amount, 'EGP', 'ar') }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="2">{{ trans('report.total') }}</th>
                        <th colspan="1">{{ Number::currency($fees->sum('amount'), 'EGP', 'ar') }}</th>
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
@endsection
