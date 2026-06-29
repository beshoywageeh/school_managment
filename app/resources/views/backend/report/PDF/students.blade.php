@extends('layouts.pdf', ['school' => $school])

@section('header-center')

@endsection

@section('content')
    @foreach ($data as $grade => $student)
        <table class="table" id="heading">
            <tr>
                <th>{{ trans('Grades.name') }}</th>
                <th>{{ $grade }}</th>
            </tr>
        </table>

        <table class="table table-sm table-bordered" style="text-align: center;" id="content">
            <thead>
                <tr class="">
                    <th rowspan="2"><strong>#</strong></th>
                    <th rowspan="2"><strong>{{ trans('student.name') }}</strong></th>
                    <th rowspan="2"><strong>{{ trans('general.religion') }}</strong></th>
                    <th rowspan="2"><strong>{{ trans('general.std_status') }}</strong></th>
                    <th rowspan="2"><strong>{{ trans('student.national_id') }}</strong></th>
                    <th rowspan="2"><strong>{{ trans('student.birth_date') }}</strong></th>
                    <th colspan="3"><strong>{{ trans('student.october') }}</strong></th>
                    <th rowspan="2"><strong>{{ trans('student.gender') }}</strong></th>
                    <th rowspan="2"><strong>{{ trans('Parents.Father_Name') }}</strong></th>
                    <th rowspan="2"><strong>{{ trans('Parents.Address') }}</strong></th>
                </tr>
                <tr class="">
                    <th><strong>{{ trans('student.year') }}</strong></th>
                    <th><strong>{{ trans('student.month') }}</strong></th>
                    <th><strong>{{ trans('student.day') }}</strong></th>

                </tr>
            </thead>
            <tbody>
                @foreach ($student as $stud)
                    @php
                        $age = explode('-', $stud->birth_at_begin ?? '');
                    @endphp
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $stud->name }}</td>
                        <td>{{ $stud->religion->lang() }}</td>
                        <td>{{ $stud->student_status->lang() }}</td>
                        <td>{{ $stud->national_id }}</td>
                        <td>{{ $stud->birth_date }}</td>
                        <td>{{ $age[0] ?? '-' }}</td>
                        <td>{{ $age[1] ?? '-' }}</td>
                        <td>{{ $age[2] ?? '-' }}</td>
                        <td>{{ $stud->gender->lang() }}</td>
                        <td>{{ $stud->parent->father_name }}</td>
                        <td>{{ $stud->parent->address }}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    @endforeach

@endsection
