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
<form action="{{ route('export.submit') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="format">Choose export format:</label>
        <select class="custom-select" name="format" id="format">
            <option value="excel">Excel</option>
            <option value="pdf">PDF</option>
            <option value="word">Word</option>
        </select>
    </div>

    <button type="submit">Export</button>
</form>
@foreach ($students as $student)
    <table class="school_date">
        <tr>
            <th><h4>{{$school->name}}</h4></th>
            @if($school->image == null)
                <th></th>
            @else
                <th><img class="logo"
                         src="{{ asset('storage/attachments/schools/' . $school->slug . '/' . $school->image->filename) }}"
                         alt=""/></th>
            @endif

            <th>{!!$school->heading_right!!}</th>
        </tr>
    </table>
    <table class="grade_data">
        <tr>
            <th>{{ trans('Grades.name') }}</th>
            <th>{{ $student->name }}</th>
            <th>{{ trans('Grades.student_count') }}</th>
            <th>{{ $student->students_count }}</th>
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
        @foreach ($student->students as $stud)
            @php
                $age=explode('-',$stud->birth_at_begin);
            @endphp
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $stud->name }}</td>
                <td>{{ $stud->national_id }}</td>
                <td>{{ $stud->birth_date }}</td>
                <td>{{ $age[0] }}</td>
                <td>{{ $age[1] }}</td>
                <td>{{ $age[2] }}</td>
                <td>{{ $stud->join_date }}</td>
                <td>{{ $stud->gender->lang() }}</td>
                <td>{{ $stud->parent->Father_Name }}</td>
                <td>{{ $stud->student_status->lang() }}</td>
                <td>{{ $stud->religion->lang() }}</td>
                <td>{{ $stud->classroom->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endforeach
</body>

</html>
