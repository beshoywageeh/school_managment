<x-modal id="tammen_1" title="{{ trans('report.student_tammen') }}" titleButton="{{ trans('general.open') }}" can="Students-list">
    <form action="{{ route('report.student_tameen') }}" method="post" id="tammen_1">
        @csrf
        <div class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">{{ trans('general.choose', ['value' => trans('report.type')]) }}</label>
                <div class="flex gap-4">
                    <label class="flex-1 flex items-center justify-center p-3 border border-emerald-200 rounded-lg bg-emerald-50 cursor-pointer hover:bg-emerald-100 transition-colors">
                        <input class="w-4 h-4 text-emerald-600 border-gray-300 rounded focus:ring-primary" name="type" type="radio" value="1">
                        <span class="ms-2 text-sm font-medium text-gray-700">1</span>
                    </label>
                    <label class="flex-1 flex items-center justify-center p-3 border border-emerald-200 rounded-lg bg-emerald-50 cursor-pointer hover:bg-emerald-100 transition-colors">
                        <input class="w-4 h-4 text-emerald-600 border-gray-300 rounded focus:ring-primary" name="type" type="radio" value="2">
                        <span class="ms-2 text-sm font-medium text-gray-700">2</span>
                    </label>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">{{ trans('general.choose', ['value' => trans('class_rooms.Name')]) }}</label>
                <select name="classroom_id" class="w-full rounded-lg border border-gray-300 px-3 py-2.5 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all">
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
            <button type="button" x-on:click="document.getElementById('tammen_1').submit(); open = false;" class="px-4 py-2.5 text-sm font-medium text-white bg-primary rounded-lg hover:bg-primary/90 transition-colors">{{ trans('general.show') }}</button>
        </div>
    </x-slot>
</x-modal>