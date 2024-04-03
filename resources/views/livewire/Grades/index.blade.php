<div>
<x-card :page="$page">
<x-slot name="button">
    <x-button :target="'#Create_Grade'">{{ trans('General.new') }}</x-button>
</x-slot>
<x-table.table>
    <x-slot name="head">
        <thead>
            <tr>
                <th>#</th>
                <th>{{ trans('Grades.name') }}</th>
                <th>{{ trans('grades.by') }}</th>
                <th>{{ trans('grades.add_date') }}</th>
                <th>{{ trans('grades.class_count') }}</th>
                <th>{{ trans('grades.student_count') }}</th>
                <th>{{ trans('general.actions') }}</th>

            </tr>
        </thead>
    </x-slot>
    @foreach ($data['grades'] as $grade )
    @include('livewire.Grades.table_row')
    @endforeach

</x-table.table>
</x-card>





    @include('livewire.Grades.create')
</div>
