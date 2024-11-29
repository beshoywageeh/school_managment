<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ trans('report.report_type', ['type' => 41]) }}</title>

</head>
<style>
    body {
        font-size: 0.875rem;
    }

    .table {
        border: 1px solid black !important;
        width: 100%;
        border-collapse: collapse;
        text-align: center;
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

    .text-center {
        text-align: center;
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
    @foreach ($data['students'] as $grade => $students)
        <div style="height: 5px; width: 95%; margin: auto;">
            <div style="font-size: 15px; font-weight:bold;border-bottom:2px solid black">
                <table class="data-table" style="width:100%">
                    <tr>
                        <td class="text-right">
                            {!! $school->heading_right !!}
                        </td>
                        <td class="text-center">
                            <p>{{ trans('report.student_new', ['classroom' => $grade, 'acc' => $data['acc']->view]) }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                {{ trans('report.report_type', ['type' => 41]) }}</p>
                        </td>
                        <td class="text-left">
                            @if ($school->image == null)
                                <img class="img-fluid" style="max-width:10%"
                                    src="{{ asset('assests/images/loop_labs.jpg') }}" alt="{{ $school->name }}">
                            @else
                                <img class="img-fluid" style="max-width:10%"
                                    src="{{ asset('storage/app/attachments/schools/' . $school->slug . '/' . $school->image->filename) }}"
                                    alt="{{ $school->name }}">
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <table class="table table-sm table-bordered" style="margin-top: 10px" id="content">
            <thead>
                <tr class="">
                    <th rowspan="2"><strong>#</strong></th>
                    <th rowspan="2"><strong>{{ trans('student.name') }}</strong></th>
                    <th rowspan="2"><strong>{{ trans('General.std_status') }}</strong></th>
                    <th rowspan="2"><strong>{{ trans('general.religion') }}</strong></th>
                    <th rowspan="2"><strong>{{ trans('student.national_id') }}</strong></th>
                    <th rowspan="2"><strong>{{ trans('student.birth_date') }}</strong></th>
                    <th colspan="3"><strong>{{ trans('student.october') }}</strong></th>
                    <th rowspan="2"><strong>{{ trans('Parents.Father_Name') }}</strong></th>
                    <th rowspan="2"><strong>{{ trans('Parents.Address') }}</strong></th>
                    <th rowspan="2">{{ trans('General.note') }}</th>
                </tr>
                <tr class="">
                    <th><strong>{{ trans('student.year') }}</strong></th>
                    <th><strong>{{ trans('student.month') }}</strong></th>
                    <th><strong>{{ trans('student.day') }}</strong></th>

                </tr>
            </thead>
            <tbody>
                @foreach ($students as $stud)
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
                        <td>{{ $stud->parent->Address }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <pagebreak></pagebreak>
    @endforeach

  
    <htmlpagefooter name="page-footer">
        <div style="height: 5px; width: 95%; margin: auto;">
            <div style="font-size: 15px; font-weight:bold; margin-top:50px;border-top:2px solid black">
                <table class="data-table" style="width:100%">
                    <tr>
                        <td class="text-right" width="20%">
                            <div class="text-center">
                                <center>

                                    {!! $school->footer_right !!}
                                </center>
                            </div>
                        </td>
                        <td class="text-center" width="50%">
                            {PAGENO}
                        </td>
                        <td class="text-left">

                            <center>

                                {!! $school->footer_left !!}
                            </center>

                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </htmlpagefooter>
</body>

</html>
