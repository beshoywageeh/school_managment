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
                    <th>#</th>
                    <th>{{ trans('student.name') }}</td>
                    <th>{{ trans('student.national_id') }}</th>
                    <th>{{ trans('Parents.Father_Phone') }}</th>
                    <th>{{ trans('report.come') }}</th>
                    <th>{{ trans('report.positive') }}</th>
                    <th>{{ trans('report.negative') }}</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data['students'] as $student)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->national_id }}</td>
                        <td>{{ $student->parent->Father_Phone }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                @empty
                    <h5>{{ trans('report.no_data_found') }}</h5>
                @endforelse
            </tbody>

        </table>
    </div>
@endsection
