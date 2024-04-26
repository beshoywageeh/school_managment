<x-card :page="$report_data->Grade_Name">
    <x-slot name="button">
        <button class="btn btn-primary">
            <i data-feather="printer" height="1rem" width="1rem"></i>
            <span>{{trans('general.print')}}</span>
        </button>
    </x-slot>
    <table class='tabel table-bordered'>
        <tr>
            <td>{{ trans('Grades.name') }}</td>
            <td>{{ $report_data->Grade_Name }}</td>
            <td>{{ trans('Grades.add_date') }}</td>
            <td>{{ $report_data->created_at }}</td>
        </tr>
        <tr>
            <td>{{ trans('Grades.class_count') }}</td>
            <td>{{ $report_data->class_room_count }}</td>
            <td>{{ trans('Grades.student_coun') }}</td>
            <td>{{ $report_data->students_count }}</td>
        </tr>
    </table>
    <br>
    @foreach ($report_data->class_room as $classes )
    <table class='table table-secondary'>
        <tr>
            <td>{{ trans('class_rooms.Name') }}</td>
            <td>{{ $classes->class_name }}</td>
        </tr>
        <tr>
            <table class="table table-bordered">
                <tr>
                    <th>{{ trans('students.name') }}</th>
                    <th>{{ trans('students.gender') }}</th>
                    <th>{{ trans('students.religion') }}</th>
                    <th>{{ trans('student.birth_date') }}</td>
                </tr>
                <tbody>
                    @foreach ($classes->students as $student )

                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->gender }}</td>
                        <td>{{ $student->Religion }}</td>
                        <td>{{ $student->birth_date }}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td>{{ trans('student.chritian') }}</td>
                        <td></td>
                        <td>{{ trans('student.chritian') }}</td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
        </tr>
    </table>
    <br>
    @endforeach
</x-card>