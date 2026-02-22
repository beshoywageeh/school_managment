<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>التقرير الختامي</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @page {
            size: A4 landscape;
            margin: 2mm;
        }

        body {
            font-family: 'Arial', sans-serif;
            /* Use a font that supports Arabic if possible */
            direction: rtl;
            text-align: center;
        }

        .header-table {
            width: 100%;
            margin-bottom: 20px;
        }

        .report-title {
            text-align: center;
            font-weight: bold;
            font-size: 18px;
            color: #000080;
            /* Dark Blue */
        }

        .school-logo {
            text-align: center;
        }

        .table-custom {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            text-align: center;
            font-size: 12px;
        }

        .table-custom th,
        .table-custom td {
            border: 1px solid #000;
            padding: 5px;
            text-align: center;
        }

        .table-custom th {
            background-color: #f0f0f0;
            font-weight: bold;
        }

        .gray-row {
            background-color: #e0e0e0;
        }

        .total-number {
            font-size: 16px;
            font-weight: bold;
            margin: 10px 0;
            text-align: center;
        }

        .section-title {
            text-align: center;
            font-weight: bold;
            margin: 10px 0;
            padding: 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- Header -->
        <table class="header-table">
            <tr>
                <td width="30%"></td>
                <td width="40%" class="report-title">
                    الحساب الختامي
                    @php
                        $uniqueGrades = $Students_grouped->pluck('grade.name')->unique();
                    @endphp
                    @foreach ($uniqueGrades as $grade_name)
                        <span>اجمالي {{ $grade_name }}</span>
                    @endforeach


                    المحبة عن العام الدراسي {{ $acadmic_year->view ?? '' }}
                </td>
                <td width="30%" class="school-logo">
                    @if ($school->image)
                        <img src="{{ URL::asset('storage/attachments/schools/' . $school->slug . '/' . $school->image->filename) }}"
                            style="height: 80px;" alt="Logo">
                    @else
                        <h2>{{ $school->name }}</h2>
                    @endif
                </td>
            </tr>
        </table>

        <!-- 1. Student Counts -->
        <table class="table-custom">
            <thead>
                <tr>
                    <th>{{ trans('report.general.count') }}</th>
                    @foreach ($Students_grouped as $grade_stat)
                        <th> {{ trans('report.general.total') . ' ' . $grade_stat->classroom->name }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $Students_grouped_sum }}</td>
                    @foreach ($Students_grouped as $grade_stat)
                        <td>{{ $grade_stat->student_count }}</td>
                    @endforeach
                </tr>
            </tbody>
        </table>
        <!-- 2. Fees-->
        <h4 class="text-center section-title gray-row">
            {{ trans('report.finalyear.pay_head', ['total' => Number::currency($payed, 'EGP', 'AR', true)]) }}</h4>
            <table style="width: 100%;">
                <tr>
        @foreach ($students_accounts_query as $classroom => $data)
            <th>
                <table class="table-custom">
                    <tr>
                        <table class="table-custom">
                            <thead>

                                <tr>
                                    <th colspan="3">{{ $classroom }}</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>القسط الاول</td>
                                    <td>{{ $data->count('debit') }}</td>
                                    <td>{{ Number::currency($data->sum('debit'), 'EGP', 'AR', true) }}</td>

                                </tr>
                            </tbody>
                        </table>

            </th>
        @endforeach
        </tr>
        </table>

        <h4 class="text-center section-title gray-row">{{ trans('report.finalyear.not_pay_head') }}</h4>
 <table style="width: 100%;">
                <tr>

                    @foreach ($excpetion as $classroom => $data)
            <th>
         <table class="table-custom">
            <thead>


                <tr>

                    <th colspan="3">{{ $classroom }}</th>
                </tr>
            </thead>
            <tbody>
                    <tr>

                            <td>{{ $data->count('amount') }}</td>
                            <td>{{ Number::currency($data->sum('amount'), 'EGP', 'AR', true) }}</td>
                    </tr>
                </table>

            </th>
            @endforeach

        </tr>
        </table>

    </div>

    <script></script>
</body>

</html>
