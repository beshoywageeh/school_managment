<x-modal can="classes-update" id="class-edit-{{ $class->id }}" title="{{ trans('general.edit') }}" icon="pencil" size="sm" variant="warning">
    <form action="{{ route('classes.update') }}" method="POST" id="class-edit-{{ $class->id }}" >
        @csrf
        <input type="hidden" name="id" value="{{ $class->id }}">
        <div class="modal-body">
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
        </div>

    </form>
</x-modal>

<div class="modal fade" id="class-edit-{{ $class->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-blue-500 text-white">
                <div class="modal-title">
                    <h6 class="font-medium">{{ trans('general.edit') }}</h6>
                </div>
                <button type="button" class="text-white hover:text-gray-200" data-dismiss="modal" aria-label="Close">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <form action="{{ route('classes.update') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $class->id }}">
                <div class="modal-body">
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
                </div>
                <div class="modal-footer bg-gray-50">
                    <button class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 font-medium" type="submit">
                        {{ trans('general.Submit') }}
                    </button>
                    <button class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400" type="button" data-dismiss="modal">
                        {{ trans('general.Cancel') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
