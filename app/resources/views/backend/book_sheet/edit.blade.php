<div id="book_sheet-edit-{{ $book_sheet->id }}" x-data="{
    open: false,
    gradeId: {{ $book_sheet->grade_id }},
    classrooms: [],
    async loadClassrooms() {
        if (!this.gradeId) { this.classrooms = []; return; }
        try {
            const res = await fetch(`/ajax/get_classRooms/${this.gradeId}`);
            this.classrooms = await res.json();
        } catch { this.classrooms = []; }
    },
    init() { this.loadClassrooms(); }
}" x-init="window.addEventListener('open-edit-{{ $book_sheet->id }}', () => open = true)">
    <div x-show="open"
         x-transition
         class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 p-4"
         x-on:click.self="open = false">

        <div class="bg-white rounded-xl shadow-xl w-full max-w-3xl">

            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-lg bg-blue-50 flex items-center justify-center">
                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"/>
                        </svg>
                    </div>
                    <h6 class="text-base font-medium text-gray-900">{{ trans('general.edit') }}</h6>
                </div>
                <button @click="open = false"
                    class="w-7 h-7 flex items-center justify-center rounded-lg border border-gray-200 text-gray-400 hover:text-gray-600 hover:bg-gray-50 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <form action="{{ route('books_sheets.update') }}" method="POST" autocomplete="off">
                @csrf
                <input type="hidden" name="id" value="{{ $book_sheet->id }}">

                <div class="px-6 py-5 space-y-5">

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <div class="space-y-1.5">
                            <label class="text-xs font-medium text-gray-500 uppercase tracking-wide">{{ trans('Grades.title') }}</label>
                            <select name="grade_id" x-model="gradeId" @change="loadClassrooms()"
                                class="w-full h-9 rounded-lg border border-gray-200 bg-white text-sm text-gray-900 px-3 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none">
                                @foreach ($grades as $grade)
                                    <option @selected($book_sheet->grade_id == $grade->id) value="{{ $grade->id }}">{{ $grade->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="space-y-1.5">
                            <label class="text-xs font-medium text-gray-500 uppercase tracking-wide">{{ trans('class_rooms.Name') }}</label>
                            <select name="classroom_id"
                                class="w-full h-9 rounded-lg border border-gray-200 bg-white text-sm text-gray-900 px-3 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none">
                                <template x-for="cls in classrooms" :key="cls.id">
                                    <option x-bind:value="cls.id" x-text="cls.name" x-bind:selected="cls.id == {{ $book_sheet->classroom_id }}"></option>
                                </template>
                            </select>
                        </div>

                        <div class="space-y-1.5">
                            <label class="text-xs font-medium text-gray-500 uppercase tracking-wide">{{ trans('book_sheet.name') }}</label>
                            <input type="text" name="name" value="{{ $book_sheet->name }}"
                                class="w-full h-9 rounded-lg border border-gray-200 bg-white text-sm text-gray-900 px-3 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <div class="space-y-1.5">
                            <label class="text-xs font-medium text-gray-500 uppercase tracking-wide">{{ trans('book_sheet.opening_qty') }}</label>
                            <input type="number" name="opening_qty" value="{{ $book_sheet->opening_qty }}"
                                class="w-full h-9 rounded-lg border border-gray-200 bg-white text-sm text-gray-900 px-3 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none">
                        </div>

                        <div class="space-y-1.5">
                            <label class="text-xs font-medium text-gray-500 uppercase tracking-wide">{{ trans('book_sheet.sales-price') }}</label>
                            <input type="number" name="sales_price" value="{{ $book_sheet->sales_price }}"
                                class="w-full h-9 rounded-lg border border-gray-200 bg-white text-sm text-gray-900 px-3 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none">
                        </div>

                        <div class="space-y-1.5">
                            <label class="text-xs font-medium text-gray-500 uppercase tracking-wide">{{ trans('book_sheet.is_book') }}</label>
                            <label class="flex items-center gap-2 h-9 px-3 rounded-lg border border-gray-200 cursor-pointer">
                                <input type="checkbox" name="is_book" @checked($book_sheet->is_book == 1)
                                    class="w-4 h-4 text-blue-500 border-gray-300 rounded focus:ring-blue-400 cursor-pointer">
                                <span class="text-sm text-gray-600">{{ trans('book_sheet.is_book') }}</span>
                            </label>
                        </div>
                    </div>

                </div>

                <div class="flex items-center justify-end gap-2 px-6 py-4 border-t border-gray-100 bg-gray-50 rounded-b-xl">
                    <button type="button" @click="open = false"
                        class="h-9 px-4 text-sm text-gray-600 rounded-lg border border-gray-200 hover:bg-gray-50 transition-colors">
                        {{ trans('general.Cancel') }}
                    </button>
                    <button type="submit"
                        class="h-9 px-4 text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 rounded-lg transition-colors">
                        {{ trans('general.Submit') }}
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
