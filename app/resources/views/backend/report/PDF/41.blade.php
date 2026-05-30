@extends('layouts.pdf', ['school' => $school])

@section('title', trans('report.report_type', ['type' => 41]))

@section('header-center')
    <p>
        <strong>
            {{ trans('report.student_new', ['classroom' => $data['classroom']->name . ' ' . $data['classroom']->grade->name, 'acc' => $data['acc']->view]) }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            {{ trans('report.report_type', ['type' => 41]) }}
        </strong>
    </p>
@endsection

@section('content')
    @foreach ($data['students'] as $key => $students)
        <table class="table table-sm table-bordered" style="margin-top: 10px" id="content">
            <thead>
                <tr class="">
                    <th rowspan="2"><strong>#</strong></th>
                    <th rowspan="2"><strong>{{ trans('student.name') }}</strong></th>
                    <th rowspan="2"><strong>{{ trans('general.std_status') }}</strong></th>
                    <th rowspan="2"><strong>{{ trans('general.religion') }}</strong></th>
                    <th rowspan="2"><strong>{{ trans('student.national_id') }}</strong></th>
                    <th rowspan="2"><strong>{{ trans('student.birth_date') }}</strong></th>
                    <th colspan="3"><strong>{{ trans('student.october') }}</strong></th>
                    <th rowspan="2"><strong>{{ trans('Parents.Father_Name') }}</strong></th>
                    <th rowspan="2"><strong>{{ trans('Parents.Address') }}</strong></th>
                    <th rowspan="2">{{ trans('general.note') }}</th>
                </tr>
                <tr class="">
                    <th><strong>{{ trans('student.year') }}</strong></th>
                    <th><strong>{{ trans('student.month') }}</strong></th>
                    <th><strong>{{ trans('student.day') }}</strong></th>

                </tr>
            </thead>
            <tbody>
                @foreach ($students as $key => $stud)
                    @php
                        $age = explode('-', $stud->birth_at_begin);
                    @endphp
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $stud->name }}</td>
                        <td>{{ $stud->student_status->lang() }}</td>
                        <td>{{ $stud->religion == null ? ' - ' : $stud->religion->lang() }}</td>
                        <td>{{ $stud->national_id }}</td>
                        <td>{{ $stud->birth_date }}</td>
                        <td>{{ $age[0] ?? '-' }}</td>
                        <td>{{ $age[1] ?? '-' }}</td>
                        <td>{{ $age[2] ?? '-' }}</td>
                        <td>{{ $stud->parent->Father_Name }}</td>
                        <td>{{ $stud->parent->address }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if (!$loop->last)
            <pagebreak></pagebreak>
        @endif
    @endforeach
@endsection
