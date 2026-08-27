@extends('layouts.pdf', ['school' => $school])

@section('header-center')
    {{ trans('report.period', ['from' => $data['begin'], 'to' => $data['end']]) }}
@endsection

@section('content')
    <div class="table-responsive" id="data">
        <table class="table text-center table-striped table-bordered table-sm">
            <thead>
                <tr class="text-white bg-dark">
                    <th>#</th>
                    <th>{{ trans('report.date') }}</td>
                    <th>{{ trans('report.student') }}</th>
                    <th>{{ trans('report.fee') }}</th>
                    <th>{{ trans('report.note') }}</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data['exception_list'] as $fee)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $fee->date }}</td>
                        <td>{{ $fee->student->name }}</td>
                        <td>{{ Number::currency($fee->amount, config('school.currency'), 'ar') }}</td>
                        <td>{{ $fee->note }}</td>
                    </tr>
                @empty
                    <h5>{{ trans('report.no_data_found') }}</h5>
                @endforelse
            </tbody>
            <tfoot>
                <tr class="text-center text-white bg-dark">
                    <th colspan="3">{{ trans('report.total') }}</th>
                    <th>{{ Number::currency($data['exception_list']->sum('amount'), config('school.currency'), 'ar') }}</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection
