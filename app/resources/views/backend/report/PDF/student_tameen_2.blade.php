@extends('layouts.pdf', ['school' => $school])

@section('header-center')
    {{ trans('report.acc_year', ['aa' => $data['aa']->view]) }}<br>
    {{ trans('report.report_tammen_1') }}<br>
    {{ trans('report.classroom', ['class' => $data['classroom']->name]) }}
@endsection

@section('content')
    <div class="table-responsive" id="data">
        <table class="table text-center table-striped table-bordered table-sm">
            <thead>
                <tr class="text-white bg-dark">
                    <th rowspan="2">#</th>
                    <th rowspan="2">{{ trans('student.name') }}</td>
                    <th colspan="3">{{ trans('student.birth_date') }}</th>
                    <th rowspan="2">{{ trans('student.gender') }}</th>
                    <th rowspan="2">{{ trans('Parents.address') }}</th>
                    <th rowspan="2">{{ trans('report.code') }}</th>
                </tr>
                <tr class="">
                    <th><strong>{{ trans('student.day') }}</strong></th>
                    <th><strong>{{ trans('student.month') }}</strong></th>
                    <th><strong>{{ trans('student.year') }}</strong></th>

                </tr>
            </thead>
            <tbody>
                @forelse ($data['students'] as $student)
                    @php
                        $date = explode('-', $student->birth_date);
                    @endphp
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $date[2] }}</td>
                        <td>{{ $date[1] }}</td>
                        <td>{{ $date[0] }}</td>
                        <td>{{ $student->gender->lang() }}</td>
                        <td>{{ $student->parent->address }}</td>
                        <td></td>
                    </tr>
                @empty
                    <h5>{{ trans('report.no_data_found') }}</h5>
                @endforelse
            </tbody>

        </table>
    </div>
@endsection
