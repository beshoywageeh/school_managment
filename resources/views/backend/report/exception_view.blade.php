@extends('layouts.report_view')

@section('title')
    {{ trans('report.exception') }}
@endsection
@section('content')

        <div class="table-responsive" id="heading">
            <table class="table text-center table-borderless table-sm">
                <tr>
                    <th rowspan="2" class="text-center align-middle">{{ $school->name }}<br>{!! $school->heading_right !!}</th>
                    <th>{{ trans('report.period', ['from' => $date['from'], 'to' => $date['to']]) }}</th>
                    @if ($school->image == null)
                        <th rowspan="2"></th>
                    @else
                        <th class="text-center align-middle" rowspan="2"><img class="logo" width="20" height="20"
                                src="{{ asset('storage/attachments/schools/' . $school->slug . '/' . $school->image->filename) }}"
                                alt="" /></th>
                    @endif
                </tr>
                <tr>
                    <th>
                        {{ trans('report.print_date') }} | {{ date('Y-m-d') }}
                    </th>
                </tr>
            </table>
        </div>
        <div class="table-responsive" id="data">
            <table class="table text-center table-striped table-bordered table-sm">
                <thead>
                    <tr class="text-white bg-dark">
                        <th>#</th>
                        <th>{{ trans('report.manual') }}</th>
                        <th>{{ trans('report.date') }}</td>
                        <th>{{ trans('report.student') }}</th>
                        <th>{{ trans('report.fee') }}</th>
                        <th>{{ trans('report.note') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $fee)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $fee->manual }}</td>
                            <td>{{ $fee->date }}</td>
                            <td>{{ $fee->student->name }}</td>
                            <td>{{ Number::currency($fee->Debit, 'EGP') }}</td>
                            <td>{{ $fee->note }}</td>
                        </tr>
                    @empty
                        <h5>{{ trans('report.no_data_found') }}</h5>
                    @endforelse
                </tbody>
                <tfoot>
                    <tr class="text-center text-white bg-dark">
                        <th colspan="4">{{ trans('report.total') }}</th>
                        <th>{{ Number::currency($data->sum('Debit'), 'EGP') }}</th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
@endsection
