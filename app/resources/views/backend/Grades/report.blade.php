<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .report-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .report-table th,
        .report-table td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .report-table th {
            background-color: #f2f2f2;
        }

        .report-header {
            background-color: #e9ecef;
            color: #212529;
        }

        .report-table-striped tbody tr:nth-of-type(odd) {
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    <div class="max-w-7xl mx-auto px-4">
        <div class="overflow-x-auto">
            @foreach ($data['report_data']->class_rooms as $classes)
                <table class="report-table report-table-striped">
                    <thead>
                        <tr class="report-header">
                            <th colspan="2">
                                <h5>{{ $data['report_data']->name }}</h5>
                            </th>
                            <th colspan=""></th>
                            <th colspan="2">
                                <h5>{{ $classes->name }}</h5>
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
                @if (!$loop->last)
                    <pagebreak></pagebreak>
                @endif
            @endforeach
        </div>
    </div>
</body>

</html>
