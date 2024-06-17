<!DOCTYPE html>
<html lang="ar"
      dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>{{ trans('General.Export_PDF') }}</title>
    <style>
        @page {
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
            width: 100px;
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

        .school_date {
            width: 100%;
            margin: auto;
            border-collapse: collapse;
            text-align: center;
            margin-bottom: 0.5rem;
            padding: 5px;
            border: 0;
        }
    </style>
</head>

<body>

@foreach ($data['students'] as $students)
<page-header>
        <table class="school_date">
            <tr>
                <th><h4>{{$school->name}}</h4></th>
                <th><img class="logo"
                         src="{{ asset('storage/attachments/schools/' . $school->slug . '/' . $school->image->filename) }}"
                         alt=""/></th>
                <th>{!!$school->heading_right!!}</th>
            </tr>
        </table>
</page-header>
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
            <th rowspan="2">#</th>
            <th rowspan="2">{{ trans('student.name') }}</th>
            <th rowspan="2">{{ trans('student.national_id') }}</th>
            <th rowspan="2">{{ trans('student.birth_date') }}</th>
            <th colspan="3">{{ trans('student.october') }}</th>
            <th rowspan="2">{{ trans('student.join_date') }}</th>
            <th rowspan="2">{{ trans('student.gender') }}</th>
            <th rowspan="2">{{ trans('Parents.Father_Name') }}</th>
            <th rowspan="2">{{ trans('General.std_status') }}</th>
            <th rowspan="2">{{ trans('general.religion') }}</th>
            <th rowspan="2">{{ trans('class_rooms.Name') }}</th>
        </tr>
        <tr>
            <th>{{ trans('student.year') }}</th>
            <th>{{ trans('student.month') }}</th>
            <th>{{ trans('student.day') }}</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($students->students as $student)
            @php
                $age=explode('-',$student->birth_at_begin);
            @endphp
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->national_id }}</td>
                <td>{{ $student->birth_date }}</td>
                <td>{{ $age[0] }}</td>
                <td>{{ $age[1] }}</td>
                <td>{{ $age[2] }}</td>
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
