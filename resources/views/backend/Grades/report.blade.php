@extends('layouts.report_view')
@section('title')
@endsection
@section('content')
<div class="table-responsive">
    <table class="table table-striped table-bordered table-sm table-bordered">
        <tr>
            <th>{{ trans('Grades.name') }}</th>
            <th>{{ trans('Grades.class_count') }}</th>
            <th>{{ trans('Grades.student_count') }}</th>
            <th>{{ trans('General.created_at') }}</th>
            <th>{{ trans('General.updated_at') }}</th>
        </tr>
        <tr>
            <td>{{ $report_data->name }}</td>
            <td>{{ $report_data->class_room_count }}</td>
            <td>{{ $report_data->students_count }}</td>
            <td>{{ $report_data->created_at->format('Y-m-d') }}</td>
            <td>{{ $report_data->updated_at->format('Y-m-d') }}</td>
        </tr>
    </table>
</div>
<br>
<div class="table-reponsive">
    @foreach ($report_data->class_room as $classes )
    <table class="table table-striped table-bordered table-sm">
       
        <thead>
        <tr>
            <th>#</th>
            <th>{{ trans('student.name') }}</th>
            <th>{{ trans('student.gender') }}</th>
            <th>{{ trans('student.religion') }}</th>
            <th>{{ trans('student.birth_date') }}</th>
        </tr>
        <tr>
            <th colspan="5">{{$loop->index + 1}} - {{ $classes->name }}</th>
        </tr>
    </thead>
        <tbody>
    
            @foreach ($classes->students as $student )
            <tr>
                <td>{{$loop->index + 1}}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->gender->lang() }}</td>
                <td>{{ $student->religion->lang() }}</td>
                <td>{{ $student->birth_date }}</td>
            </tr>
            @endforeach
        </tbody>
    
    </table>
    @endforeach
</div>

@endsection

