@extends('layouts.report_view')
@section('content')
    <div class="container">

        <div class="table-responsive">

            @foreach ($data->class_room as $classes)
                <table class="table table-striped table-bordered">

                    <thead>
                        <tr class="alert alert-secondary">
                            <th colspan="5">
                                <h5>{{ $loop->index + 1 }} - {{ $classes->name }}</h5>
                            </th>
                        </tr>
                        <tr>
                            <th>#</th>
                            <th>{{ trans('student.name') }}</th>
                            <th>{{ trans('student.gender') }}</th>
                            <th>{{ trans('student.religion') }}</th>
                            <th>{{ trans('student.birth_date') }}</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($classes->students as $student)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
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
    </div>
@endsection
