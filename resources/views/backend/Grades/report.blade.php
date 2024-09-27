<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{trans('Grades.title')}} | {{ $report_data->Grade_Name }}</title>
    <style>
        @page {
            margin: 5px;
            header: page-header;
            footer: page-footer;
        }

        .grade_data,
        tr,
        td {
            width: 100vw;
            margin: auto;
            border-collapse: collapse;
            text-align: center;
            margin-bottom: 0.5rem;
            padding: 5px;
            border: 1px solid #6d6d6d;
        }

        table td,
        {
        border-collapse: collapse;
        text-align: center;
        }

        .logo {
            width: 100vw;
            border-radius: 50%;
        }

        .data {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        .data tr th,
        .data tr td {
            padding: 5px;
            border: 1px solid #6d6d6d;
        }

        .data thead tr {
            background-color: black;

        }

        .data thead tr th {

            color: white;
        }
    </style>
</head>


<body>
    <table class="grade_data">
        <tr>
            <td>{{ trans('Grades.name') }}</td>
            <td>{{ $report_data->Grade_Name }}</td>
            <td>{{ trans('Grades.add_date') }}</td>
            <td>{{ $report_data->created_at->format('Y-m-d') }}</td>
        </tr>
        <tr>
            <td>{{ trans('Grades.class_count') }}</td>
            <td>{{ $report_data->class_room_count }}</td>
            <td>{{ trans('Grades.student_count') }}</td>
            <td>{{ $report_data->students_count }}</td>
        </tr>
    </table>
    <br>
    @foreach ($report_data->class_room as $classes )
    <table class="data">
        <tr>
            <th colspan="5">{{$loop->iteration}} - {{ $classes->class_name }}</th>
        </tr>
        <tr>
            <th>#</th>
            <th>{{ trans('students.name') }}</th>
            <th>{{ trans('students.gender') }}</th>
            <th>{{ trans('students.religion') }}</th>
            <th>{{ trans('student.birth_date') }}</th>
        </tr>
        <tbody>

            @foreach ($classes->students as $student )
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->gender }}</td>
                <td>{{ $student->Religion }}</td>
                <td>{{ $student->birth_date }}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
    @endforeach
</body>

</html>
