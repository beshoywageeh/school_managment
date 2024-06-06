<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ trans('General.Export_PDF') }}</title>
    <style>
        @page {
            margin: 5px;
            header: page-header;
            footer: page-footer;
        }

        .grade_data {
            width: 100%;
        }

        table,
        .grade_data,
        tr,
        td,
        th {
            margin: auto;
            border-collapse: collapse;
            text-align: center;
            margin-bottom: 0.5rem;
            padding: 5px;
            border: 1px solid #6d6d6d;
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

        .data thead tr {
            background-color: black;
        }

        .data thead tr th {
            color: white;
        }
    </style>
</head>

<body>
@foreach ($data['students'] as $students)
    <table class="grade_data">
        <tr>
            <th>{{ trans('Grades.name') }}</th>
            <th>{{ $students->name }}</th>
            <th>{{ trans('Grades.student_count') }}</th>
            <th>{{ $students->students_count }}</th>
        </tr>
    </table>
    <table class="data">
        <thead>
        <tr>
            <th>#</th>
            <th>{{ trans('student.name') }}</th>
            <th>{{ trans('student.national_id') }}</th>
            <th>{{ trans('student.birth_date') }}</th>
            <th>{{ trans('student.checkbirth_date') }}</th>
            <th>{{ trans('student.join_date') }}</th>
            <th>{{ trans('student.gender') }}</th>
            <th>{{ trans('Parents.Father_Name') }}</th>
            <th>{{ trans('General.std_status') }}</th>
            <th>{{ trans('general.religion') }}</th>
            <th>{{ trans('class_rooms.Name') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($students->students as $student)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->national_id }}</td>
                <td>{{ $student->birth_date }}</td>
                <td>{{ $student->birth_at_begin }}</td>
                <td>{{ $student->join_date }}</td>
                <td>{{ $student->gender->lang() }}</td>
                <td>{{ $student->parent->Father_Name }}</td>
                <td>{{ $student->student_status->lang() }}</td>
                <td>{{ $student->religion->lang() }}</td>
                <td>{{ $student->classroom->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <pagebreak/>
@endforeach
</body>

</html>
