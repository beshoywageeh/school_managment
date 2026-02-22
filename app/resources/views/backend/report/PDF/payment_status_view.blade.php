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


    @foreach ($data['exp'] as $key=>$students)
    <div style="height: 5px; width: 95%; margin: auto; margin-bottom:5px;">
        <div style="font-size: 15px; font-weight:bold; margin-top:50px;border-bottom:2px solid black">
            <table class="data-table" style="width:100%">
                <tr>
                    <td class="text-center" width="25%">
                        {!! $data['school_data']->heading_right !!}
                    </td>
                    <td class="text-center" width="50%">
                        {{ trans('report.acc_year', ['aa' => $data['acc_year']->view]) }}
                        <br>
                        <br>
                        {{ trans('report.payment',['grade'=> $key ]) }}

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
    <table class="table text-center table-striped table-bordered table-sm">
            <thead>

                <tr class="text-white bg-dark">
                    <th>#</th>
                    <th>{{ trans('report.student') }}</th>
                    <th>{{ trans('report.note') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td width="5%">{{ $loop->index + 1 }}</td>
                        <td>{{ $student->students->name }}</td>
                        <td>{{ $student->note }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if (! $loop->last)

        <pagebreak></pagebreak>
        @endif
        @endforeach


</body>

</html>
@else
    @extends('layouts.app')
    @section('content')
        <a href="{{ route('report.payment_status.pdf', request()->query()) }}" class="btn btn-primary">Export to PDF</a>
        @foreach ($data['exp'] as $key=>$students)
        <div style="height: 5px; width: 95%; margin: auto; margin-bottom:5px;">
            <div style="font-size: 15px; font-weight:bold; margin-top:50px;border-bottom:2px solid black">
                <table class="data-table" style="width:100%">
                    <tr>
                        <td class="text-center" width="25%">
                            {!! $data['school_data']->heading_right !!}
                        </td>
                        <td class="text-center" width="50%">
                            {{ trans('report.acc_year', ['aa' => $data['acc_year']->view]) }}
                            <br>
                            <br>
                            {{ trans('report.payment',['grade'=> $key ]) }}

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
        <table class="table text-center table-striped table-bordered table-sm">
                <thead>

                    <tr class="text-white bg-dark">
                        <th>#</th>
                        <th>{{ trans('report.student') }}</th>
                        <th>{{ trans('report.note') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td width="5%">{{ $loop->index + 1 }}</td>
                            <td>{{ $student->students->name }}</td>
                            <td>{{ $student->note }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if (! $loop->last)

            <pagebreak></pagebreak>
            @endif
            @endforeach
    @endsection
@endif

