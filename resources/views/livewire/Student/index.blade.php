<div>
    <div class="card">
        <div class="card-body">
            <div class="flex justify-between mb-4">
                <h4 class="card-title">{{trans($page.'.title')}}</h4>
            </div>
            @include('livewire.Student.search')
            <table class="table table-striped" id="Grade_Table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{trans('Students.Name')}}</th>
                        <th>{{trans('Students.Join_date')}}</th>
                        <th>{{trans('Students.Added_By')}}</th>
                        <th>{{trans('Students.grade')}}</th>
                        <th>{{ trans('general.actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data['students'] as $student)
                        @include('livewire.Student.table_row')
                    @empty
                            <div class="alert alert-info" role="alert">
                                <p>{{trans('General.Msg')}}</p>
                            </div>

                    @endforelse
                </tbody>
            </table>
            {{ $data['students']->links() }}
        </div>
    </div>
</div>
