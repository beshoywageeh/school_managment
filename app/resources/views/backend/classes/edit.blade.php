<x-modal can="classes-update" id="class-edit-{{ $class->id }}" title="{{ trans('general.edit') }}" icon="pencil" size="sm" variant="warning">
    <form action="{{ route('classes.update') }}" method="POST" id="class-edit-{{ $class->id }}" >
        @csrf
        <input type="hidden" name="id" value="{{ $class->id }}">
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Grades.title') }}</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" name="grade_name">
                    <option value="" disabled>{{ trans('class_rooms.select_grade') }}</option>
                    @foreach ($class_rooms as $key => $class_room)
                        <optgroup label="{{ $key }}">
                            @foreach ($class_room as $item)
                                <option value="{{ $item->id }}" @selected($item->id == $class->class_room_id)>{{ $item->name }}</option>
                            @endforeach
                        </optgroup>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('class_rooms.Name') }}</label>
                <input type="text" name="class_name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" value="{{ $class->title }}" />
            </div>

    </form>
</x-modal>

