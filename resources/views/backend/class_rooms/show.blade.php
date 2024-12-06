<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$data['class_room']->grade->name.' - '.$data['class_room']->name}}</title>
</head>
<style>
    body {
        font-size: 0.875rem;
    }

    .table {
        border: 1px solid black !important;
        width: 100%;
        border-collapse: collapse;
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


        <table class="table table-sm" style="text-align: center;">
            <thead>
                <tr>
                    <th rowspan="2"><strong>#</strong></th>
                    <th rowspan="2"><strong>{{ trans('student.name') }}</strong></th>
                    <th colspan="3"><strong>{{ trans('student.birth_date') }}</strong></th>
                    <th colspan="3"><strong>{{ trans('student.october') }}</strong></th>
                    <th rowspan="2"><strong>{{ trans('student.national_id') }}</strong></th>
                </tr>
                <tr>
                    <th><strong>{{ trans('student.day') }}</strong></th>
                    <th><strong>{{ trans('student.month') }}</strong></th>
                    <th><strong>{{ trans('student.year') }}</strong></th>
                    <th><strong>{{ trans('student.day') }}</strong></th>
                    <th><strong>{{ trans('student.month') }}</strong></th>
                    <th><strong>{{ trans('student.year') }}</strong></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data['class_room']->students as $student)
                    @php
                        $age = explode('-', $student->birth_at_begin);
                    @endphp
                    <tr>
                        <td> {{ $loop->iteration }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ \Carbon\Carbon::parse($student->birth_date)->format('d') }}</td>
                        <td>{{ \Carbon\Carbon::parse($student->birth_date)->format('m') }}</td>
                        <td>{{ \Carbon\Carbon::parse($student->birth_date)->format('Y') }}</td>
                        <td>{{ $age[2] ?? '-' }}</td>
                        <td>{{ $age[1] ?? '-' }}</td>
                        <td>{{ $age[0] ?? '-' }}</td>
                        <td>{{ $student->national_id }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <htmlpageheader name="page-header">
            <div style="height: 5px; width: 95%; margin: auto;">
                <div style="font-size: 15px; font-weight:bold; margin-top:50px;border-bottom:2px solid black">
                    <table class="data-table" style="width:100%">
                        <tr>
                            <td class="text-right">
                                {!! $school->heading_right !!}
                            </td>
                            <td>      <h6 style="text-align: center; align-items:bottom">{{ trans('report.choose_grade_head', ['grade' => $data['class_room']->grade->name, 'class_room' => $data['class_room']->name, 'acc' => $data['acc_year']->view]) }}
                            </h6></td>
                            <td class="text-left">
                                @if ($school->image == null)
                                    <img class="img-fluid" style="max-width:10%"
                                        src="{{ asset('assests/images/loop_labs.png') }}" alt="{{ $school->name }}">
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
        </htmlpageheader>
        <htmlpagefooter name="page-footer">
            <div style="border-top:1px solid black;">

                <p style="text-align: center;">{PAGENO}</p>
            </div>
        </htmlpagefooter>
</body>
</html>
