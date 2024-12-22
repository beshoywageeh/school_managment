<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>school fees</title>
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

                                </center>
                            </div>
                        </td>
                        <td class="text-center" width="50%">
                            {PAGENO}
                        </td>
                        <td class="text-left">
                            <center>
                            </center>

                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </htmlpagefooter>

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
                                <p>{{ trans('report.fee_invoice') }}</p>
                                <br>
                                <p>{{ trans('report.print_date', ['date' => date('Y-m-d')]) }}</p>
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

    @foreach ($data['school_fees'] as $grade => $classrooms)
        @foreach ($classrooms as $classroom => $fees)
            <table class="table" style="margin-bottom: 0.5rem">
                <tr>
                    <th>
                        <h5>{{ $grade }}</h5>
                    </th>
                    <th>
                        <h5>{{ $classroom }}</h5>
                    </th>
                </tr>
            </table>
            <table class="table text-center table-striped table-bordered table-sm">
                <thead>

                    <tr class="text-white bg-dark">
                        <th>#</th>
                        <th>{{ trans('report.fee_title') }}</th>
                        <th>{{ trans('report.amount') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fees as $fee)
                        <tr>
                            <td width="5%">{{ $loop->index + 1 }}</td>
                            <td>{{ $fee->title }}</td>
                            <td>{{ Number::currency($fee->amount, 'EGP', 'ar') }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="2">{{ trans('report.total') }}</th>
                        <th colspan="1">{{ Number::currency($fees->sum('amount'), 'EGP', 'ar') }}</th>
                    </tr>
                </tfoot>
            </table>
            @if (!$loop->last)
                <pagebreak></pagebreak>
            @endif
        @endforeach
        @if (!$loop->last)
            <pagebreak></pagebreak>
        @endif
    @endforeach


</body>

</html>