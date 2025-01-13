<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 100%;
            margin: 0 auto;
            padding: 20px;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .table th, .table td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .table th {
            background-color: #f2f2f2;
        }
        .alert-secondary {
            background-color: #e9ecef;
            color: #212529;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f9f9f9;
        }
        .table-bordered {
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="table-responsive">
            @foreach ($data['report_data']->class_rooms as $classes)
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr class="alert alert-secondary">
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
