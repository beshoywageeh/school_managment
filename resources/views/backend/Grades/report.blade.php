<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$data->name}}</title>
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
    @foreach ($data->class_room as $classes )
    <table class="table table-striped table-bordered table-sm">

        <thead>
            <tr>
                <th colspan="5">{{$loop->index + 1}} - {{ $classes->name }}</th>
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
    <pagebreak></pagebreak>
    @endforeach
    <htmlpageheader name="page-header">
        <div style="height: 5px; width: 95%; margin: auto;">
            <div style="font-size: 15px; font-weight:bold; margin-top:50px;border-bottom:2px solid black">
                <table class="data-table" style="width:100%">
                    <tr>
                        <td class="text-right">
                            {!! $school->heading_right !!}
                        </td>
                        <td></td>
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
