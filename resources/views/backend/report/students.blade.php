@extends('layouts.report_view')
@section('content')

    @foreach ($students as $student)
    <div class="table-responsive">
        <table class="table table-sm table-borderless">
            <tr>
                <th>{{$school->name}}<br>{!!$school->heading_right!!}</th>
                @if($school->image == null)
                    <th></th>
                @else
                    <th><img class="logo"
                             src="{{ asset('storage/attachments/schools/' . $school->slug . '/' . $school->image->filename) }}"
                             alt=""/></th>
                @endif

         <th>{{trans('report.print_date') .' - '. date('Y-m-d')}}</th>
            </tr>
        </table>
    </div>
    <div class="table-reponsive">
        <table class="table table-sm table-bordered">
            <tr>
                <th>{{ trans('Grades.name') }}</th>
                <th>{{ $student->name }}</th>
                <th>{{ trans('Grades.student_count') }}</th>
                <th>{{ $student->students_count }}</th>
            </tr>
        </table>
    </div>
<div class="table-responsive">
    <table class="table table-sm table-bordered">
        <thead>
        <tr class="bg-dark text-white">
            <th rowspan="2">#</th>
            <th rowspan="2">{{ trans('student.name') }}</th>
            <th rowspan="2">{{ trans('student.national_id') }}</th>
            <th rowspan="2">{{ trans('student.birth_date') }}</th>
            <th colspan="3">{{ trans('student.october') }}</th>
            <th rowspan="2">{{ trans('student.join_date') }}</th>
            <th rowspan="2">{{ trans('student.gender') }}</th>
            <th rowspan="2">{{ trans('Parents.Father_Name') }}</th>
            <th rowspan="2">{{ trans('General.std_status') }}</th>
            <th rowspan="2">{{ trans('general.religion') }}</th>
            <th rowspan="2">{{ trans('class_rooms.Name') }}</th>
        </tr>
        <tr class="bg-dark text-white">
            <th>{{ trans('student.year') }}</th>
            <th>{{ trans('student.month') }}</th>
            <th>{{ trans('student.day') }}</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($student->students as $stud)
            @php
                $age=explode('-',$stud->birth_at_begin);
            @endphp
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $stud->name }}</td>
                <td>{{ $stud->national_id }}</td>
                <td>{{ $stud->birth_date }}</td>
                <td>{{ $age[0] }}</td>
                <td>{{ $age[1] }}</td>
                <td>{{ $age[2] }}</td>
                <td>{{ $stud->join_date }}</td>
                <td>{{ $stud->gender->lang() }}</td>
                <td>{{ $stud->parent->Father_Name }}</td>
                <td>{{ $stud->student_status->lang() }}</td>
                <td>{{ $stud->religion->lang() }}</td>
                <td>{{ $stud->classroom->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

    @endforeach


@endsection
