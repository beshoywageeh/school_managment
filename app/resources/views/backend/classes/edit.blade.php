<x-modal can="classes-update" id="class-edit-{{ $class->id }}" title="{{ trans('general.edit') }}" icon="pencil" size="sm" variant="warning">
    <form action="{{ route('classes.update') }}" method="POST" id="class-edit-{{ $class->id }}" >
        @csrf
        <input type="hidden" name="id" value="{{ $class->id }}">
            <x-select name="grade_name" label="{{ trans('Grades.title') }}">
                <option value="" disabled>{{ trans('class_rooms.select_grade') }}</option>
                @foreach ($class_rooms as $key => $class_room)
                    <optgroup label="{{ $key }}">
                        @foreach ($class_room as $item)
                            <option value="{{ $item->id }}" @selected($item->id == $class->class_room_id)>{{ $item->name }}</option>
                        @endforeach
                    </optgroup>
                @endforeach
            </x-select>
            <x-input name="class_name" type="text" value="{{ $class->title }}">{{ trans('class_rooms.Name') }}</x-input>

    </form>
</x-modal>

