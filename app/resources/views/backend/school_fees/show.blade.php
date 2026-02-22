@extends('layouts.report_view')

@section('title')
    {{ trans('report.daily_fee') }}
@endsection
@section('content')

        <div class="table-responsive" id="heading">
            <table class="table text-center table-borderless table-sm">
                <tr>
                    <th rowspan="2" class="text-center align-middle">{{ $school->name }}<br>{!! $school->heading_right !!}</th>
                    <th></th>
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
                <tr>
                    <th>{{$school_fee->title}}</th>
                    <th>{{Number::currency($school_fee->amount,'EGP','ar')}}</th>
                </tr>
            </table>
        </div>
        <div class="table-responsive" id="data">
            <table class="table text-center table-striped table-bordered table-sm">
                <thead>
                    <tr class="text-white bg-dark">
                        <th>#</th>
                        <th>{{ trans('student.code') }}</th>
                        <th>{{ trans('student.name') }}</td>
                        <th>{{ trans('student.class') }}</th>
                        <th>{{ trans('student.grade') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($students as $student)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $student->code }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->classroom->name }}</td>
                            <td>{{ $student->grade->name }}</td>
                        </tr>
                    @empty
                        <h5>{{ trans('report.no_data_found') }}</h5>
                    @endforelse
                </tbody>
                <tfoot>
                    <tr class="text-center text-white bg-dark">
                        <th colspan="4">{{ trans('report.to_colcet') }}</th>
                        <th>{{ Number::currency($students->count()*$school_fee->amount,'EGP','ar') }}</th>

                    </tr>
                </tfoot>
            </table>
        </div>
@endsection
