<div id="tammen_1-modal" x-data="{ open: false }" x-cloak>
    <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 z-50 flex items-center justify-center p-4" @keydown.escape.window="open = false">
        <div class="fixed inset-0 bg-black/50" @click="open = false"></div>
        <div class="relative bg-white rounded-xl shadow-xl w-full max-w-lg mx-auto z-10">
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-semibold text-gray-900">{{ trans('report.student_tammen') }}</h3>
                <button type="button" class="p-1.5 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100 transition-colors" @click="open = false">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <form action="{{ route('report.student_tameen') }}" method="post">
                <div class="p-6 space-y-4">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">{{ trans('general.choose', ['value' => trans('report.type')]) }}</label>
                        <div class="flex gap-4">
                            <label class="flex-1 flex items-center justify-center p-3 border border-emerald-200 rounded-lg bg-emerald-50 cursor-pointer hover:bg-emerald-100 transition-colors">
                                <input class="w-4 h-4 text-emerald-600 border-gray-300 rounded focus:ring-emerald-500" name="type" type="radio" value="1">
                                <span class="ms-2 text-sm font-medium text-gray-700">1</span>
                            </label>
                            <label class="flex-1 flex items-center justify-center p-3 border border-emerald-200 rounded-lg bg-emerald-50 cursor-pointer hover:bg-emerald-100 transition-colors">
                                <input class="w-4 h-4 text-emerald-600 border-gray-300 rounded focus:ring-emerald-500" name="type" type="radio" value="2">
                                <span class="ms-2 text-sm font-medium text-gray-700">2</span>
                            </label>
                        </div>
                    </div>
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
                <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-200 bg-gray-50 rounded-b-xl">
                    <button type="button" class="px-4 py-2.5 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors" @click="open = false">{{ trans('general.close') }}</button>
                    <button type="submit" class="px-4 py-2.5 text-sm font-medium text-white bg-emerald-600 rounded-lg hover:bg-emerald-700 transition-colors">{{ trans('general.show') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
