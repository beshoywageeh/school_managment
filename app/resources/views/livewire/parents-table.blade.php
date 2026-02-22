<div>
    <div class="row">
        <div class="col-md-4">
            <input type="text" class="form-control" placeholder="Search by Father or Student Name..." wire:model.live.debounce.300ms="search">
        </div>
    </div>
    <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>{{trans('Parents.father-name')}}</th>
                <th>{{trans('Parents.father-phone')}}</th>
                <th>{{trans('Parents.father-job')}}</th>
                <th>{{trans('student.name')}}</th>
                <th>{{trans('general.buttons.action')}}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students_parents as $parent)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $parent->Father_Name }}</td>
                    <td>{{ $parent->Father_Phone }}</td>
                    <td>{{ $parent->Father_Job }}</td>
                    <td>
                        @foreach($parent->Students as $student)
                            {{ $student->name }}<br>
                        @endforeach
                    </td>
                    <td>
                        <x-parent_table_action :id="$parent->id" />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $students_parents->links() }}
</div>
