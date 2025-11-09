@if($data['is_pdf'])
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body {
        font-size: 0.875rem;
    }

    .table {
        border: 1px solid black !important;
        width: 100%;
        border-collapse: collapse;
        text-align: center
    }

    .table td,
    .table th {
        border: 1px solid black !important;
        border-collapse: collapse;
        padding: 3px;
    }

    .table th {
        font-weight: 1.2rem !important;
    }

    p {
        margin: 0;
        padding: 0;
    }

    #heading {
        padding-top: 15px;
        padding-bottom: 15px;
    }

    .text-right {
        text-align: right;
    }

    .text-left {
        text-align: left;
    }

    @page {
        header: page-header;
        footer: page-footer;
    }
</style>

<body>

    @foreach ($data['grade'] as $student)
        <table class="table" id="heading">
            <tr>
                <th>{{ trans('Grades.name') }}</th>
                <th>{{ $student->name }}</th>
                <th>{{ trans('Grades.student_count') }}</th>
                <th>{{ $student->students_count }}</th>
            </tr>
        </table>

        <table class="table table-sm table-bordered" style="text-align: center;" id="content">
            <thead>
                <tr class="">
                    <th rowspan="2"><strong>#</strong></th>
                    <th rowspan="2"><strong>{{ trans('student.name') }}</strong></th>
                    <th rowspan="2"><strong>{{ trans('general.religion') }}</strong></th>
                    <th rowspan="2"><strong>{{ trans('General.std_status') }}</strong></th>
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
                @foreach ($student->students as $stud)
                    @php
                        $age = explode('-', $stud->birth_at_begin);
                    @endphp
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $stud->name }}</td>
                        <td>{{ $stud->religion == null ? ' - ' : $stud->religion->lang() }}</td>
                        <td>{{ $stud->student_status->lang() }}</td>
                        <td>{{ $stud->national_id }}</td>
                        <td>{{ $stud->birth_date }}</td>
                        <td>{{ $age[0] ?? '-' }}</td>
                        <td>{{ $age[1] ?? '-' }}</td>
                        <td>{{ $age[2] ?? '-' }}</td>
                        <td>{{ $stud->gender->lang() }}</td>
                        <td>{{ $stud->parent->Father_Name }}</td>
                        <td>{{ $stud->parent->Address }}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        <pagebreak></pagebreak>
    @endforeach
    <htmlpageheader name="page-header">
        <div style="height: 5px; width: 95%; margin: auto;">
            <div style="font-size: 15px; font-weight:bold; margin-top:50px;border-bottom:2px solid black">
                <table class="data-table" style="width:100%">
                    <tr>
                        <td class="text-center" width="25%">
                            {!! $data['school_data']->heading_right !!}
                        </td>
                        <td class="text-center" width="50%">

                        </td>
                        <td class="text-left">
                            @if ($data['school_data']->image == null)
                                <img class="img-fluid" style="max-width:10%"
                                    src="{{ asset('assests/images/loop_labs.png') }}" alt="{{ $data['school_data']->name }}">
                            @else
                                <img class="img-fluid" style="max-width:10%"
                                    src="{{ storage_path('app/attachments/schools/' . $data['school_data']->slug . '/' . $data['school_data']->image->filename) }}"
                                    alt="{{ $data['school_data']->name }}">
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </htmlpageheader>
    <htmlpagefooter name="page-footer">
        <div style="height: 5px; width: 95%; margin: auto;">
            <div style="font-size: 15px; font-weight:bold; margin-top:50px;border-top:2px solid black">
                <table class="data-table" style="width:100%">
                    <tr>
                        <td class="text-right" width="20%">
                            <div class="text-center">
                                <center>

                                    {!! $data['school_data']->footer_right !!}
                                </center>
                            </div>
                        </td>
                        <td class="text-center" width="50%">
                            {PAGENO}
                        </td>
                        <td class="text-left">

                            <center>

                                {!! $data['school_data']->footer_left !!}
                            </center>

                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </htmlpagefooter>
</body>

</html>
@else
    @extends('layouts.app')
    @section('content')
        <a href="{{ route('report.ExportStudents.pdf', request()->query()) }}" class="btn btn-primary">Export to PDF</a>
        @foreach ($data['grade'] as $student)
            <table class="table" id="heading">
                <tr>
                    <th>{{ trans('Grades.name') }}</th>
                    <th>{{ $student->name }}</th>
                    <th>{{ trans('Grades.student_count') }}</th>
                    <th>{{ $student->students_count }}</th>
                </tr>
            </table>

            <table class="table table-sm table-bordered" style="text-align: center;" id="content">
                <thead>
                    <tr class="">
                        <th rowspan="2"><strong>#</strong></th>
                        <th rowspan="2"><strong>{{ trans('student.name') }}</strong></th>
                        <th rowspan="2"><strong>{{ trans('general.religion') }}</strong></th>
                        <th rowspan="2"><strong>{{ trans('General.std_status') }}</strong></th>
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
                    @foreach ($student->students as $stud)
                        @php
                            $age = explode('-', $stud->birth_at_begin);
                        @endphp
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $stud->name }}</td>
                            <td>{{ $stud->religion == null ? ' - ' : $stud->religion->lang() }}</td>
                            <td>{{ $stud->student_status->lang() }}</td>
                            <td>{{ $stud->national_id }}</td>
                            <td>{{ $stud->birth_date }}</td>
                            <td>{{ $age[0] ?? '-' }}</td>
                            <td>{{ $age[1] ?? '-' }}</td>
                            <td>{{ $age[2] ?? '-' }}</td>
                            <td>{{ $stud->gender->lang() }}</td>
                            <td>{{ $stud->parent->Father_Name }}</td>
                            <td>{{ $stud->parent->Address }}</td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
            <pagebreak></pagebreak>
        @endforeach
    @endsection
@endif
