<x-modal id="incoming_students" title="{{ trans('report.report_type', ['type' => 41]) }}" titleButton="{{ trans('general.open') }}" can="Students-list">
    <form action="{{ route('report.student_report', ['type' => 41]) }}" method="post" id="incoming_students">
        @csrf
        <div class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">{{ trans('general.choose', ['value' => trans('class_rooms.Name')]) }}</label>
                <select name="classroom_id" class="w-full rounded-lg border border-gray-300 px-3 py-2.5 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all">
                    <option selected disabled>{{ trans('general.choose', ['value' => trans('class_rooms.Name')]) }}</option>
                    @foreach ($grades as $grade)
                        <optgroup label="{{ $grade->name }}">
                            @foreach ($grade->class_rooms as $class_room)
                                <option value="{{ $class_room->id }}">{{ $class_room->name }}</option>
                            @endforeach
                        </optgroup>
                    @endforeach
                </select>
            </div>
        </div>
    </form>
    <x-slot name="footer">
        <div class="flex items-center justify-end gap-3">
            <button type="button" class="px-4 py-2.5 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors" @click="open = false">{{ trans('general.close') }}</button>
            <button type="button" x-on:click="document.getElementById('incoming_students').submit(); open = false;" class="px-4 py-2.5 text-sm font-medium text-white bg-emerald-600 rounded-lg hover:bg-emerald-700 transition-colors">{{ trans('general.show') }}</button>
        </div>
    </x-slot>
</x-modal>