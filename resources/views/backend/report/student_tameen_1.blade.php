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

    .text-left {
        text-align: left;
    }

    .text-center {
        text-align: center;
    }

    @page {
        header: page-header;
        footer: page-footer;
    }
</style>

<body>
    <htmlpageheader name="page-header">
        <div style="height: 5px; width: 95%; margin: auto;">
            <div style="font-size: 15px; font-weight:bold; margin-top:50px;border-bottom:2px solid black">
                <table class="data-table" style="width:100%">
                    <tr>
                        <td class="text-center" width="25%">
                            {!! $school->heading_right !!}
                        </td>
                        <td class="text-center" width="50%">
                            {{ trans('report.acc_year', ['aa' => $data['aa']->view]) }}<br>
                            {{ trans('report.report_tammen_1') }}<br>
                            {{ trans('report.classroom',['class'=>$data['classroom']->name]) }}
                        </td>
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
                        <td>{{$student->national_id}}</td>
                        <td>{{$student->parent->Father_Phone}}</td>
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
</body>

</html>
