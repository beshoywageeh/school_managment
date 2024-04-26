<div class="table-resposive">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>{{ trans('Grades.name') }}</th>
                <th>{{ trans('grades.by') }}</th>
                <th>{{ trans('grades.add_date') }}</th>
                <th>{{ trans('grades.class_count') }}</th>
                <th>{{ trans('grades.student_count') }}</th>
                <th>{{ trans('grades.total_fees') }}</th>
                <th>{{ trans('general.actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data['grades'] as $grade)
            @include('livewire.Grades.table_row')
            @endforeach
        </tbody>
    </table>

</div>
{{$pages ?? ''}}