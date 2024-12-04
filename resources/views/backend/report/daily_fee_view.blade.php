<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ trans('report.daily_fee') }}</title>
</head>
<style>
    body {
        font-size: 0.875rem;
    }

    .table {
        border: 1px solid black !important;
        width: 100%;
        border-collapse: collapse;
        text-align:center
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
    <htmlpageheader name="page-header">
        <div style="height: 5px; width: 95%; margin: auto;">
            <div style="font-size: 15px; font-weight:bold; margin-top:50px;border-bottom:2px solid black">
                <table class="data-table" style="width:100%">
                    <tr>
                        <td class="text-center" width="25%">
                            <center>

                                {!! $school->heading_right !!}
                            </center>
                        </td>
                        <td class="text-center" width="50%">
                            <center>
                                <p>{{ trans('report.daily_payment') }}</p>
                                <br>
                                <p>
                                    {{ trans('report.period', ['from' => $data['begin'], 'to' => $data['end']]) }}
                                </p>
                                <br>
                                <p>{{trans('report.print_date',['date'=>date('Y-m-d')])}}</p>
                            </center>
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

                                </center>
                            </div>
                        </td>
                        <td class="text-center" width="50%">
                            <center>

                                {PAGENO}
                            </center>
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
                    <th>{{ trans('report.manual') }}</th>
                    <th>{{ trans('report.date') }}</td>
                    <th>{{ trans('report.student') }}</th>
                    <th>{{ trans('report.fee') }}</th>
                    <th>{{ trans('report.note') }}</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data['daily'] as $fee)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $fee->manual }}</td>
                        <td>{{ $fee->date }}</td>
                        <td>{{ $fee->student->name }}</td>
                        <td>{{ Number::currency($fee->Debit, 'EGP', 'ar') }}</td>
                        <td>{{ $fee->note }}</td>
                    </tr>
                @empty
                    <h5>{{ trans('report.no_data_found') }}</h5>
                @endforelse
            </tbody>
            <tfoot>
                <tr class="text-center text-white bg-dark">
                    <th colspan="4">{{ trans('report.total') }}</th>
                    <th>{{ Number::currency($data['daily']->sum('Debit'), 'EGP', 'ar') }}</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div>
</body>

</html>
