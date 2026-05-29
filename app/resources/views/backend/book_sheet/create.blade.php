<div id="BookSheet" x-data="{
    open: false,
    gradeId: '',
    classrooms: [],
    books: [{ name: '', opening_qty: '', is_book: true }],
    addRow() {
        this.books.push({ name: '', opening_qty: '', is_book: true });
    },
    removeRow(index) {
        if (this.books.length > 1) this.books.splice(index, 1);
    },
    async loadClassrooms() {
        if (!this.gradeId) { this.classrooms = []; return; }
        try {
            const res = await fetch(`/ajax/get_classRooms/${this.gradeId}`);
            this.classrooms = await res.json();
        } catch { this.classrooms = []; }
    }
}" x-init="window.addEventListener('open-create-modal', () => open = true)">
    <div x-show="open"
         x-transition
         class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 p-4"
         x-on:click.self="open = false">

        <div class="bg-white rounded-xl shadow-xl w-full max-w-3xl">

            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-lg bg-blue-50 flex items-center justify-center">
                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                    </div>
                    <h6 class="text-base font-medium text-gray-900">{{ trans('general.new') }}</h6>
                </div>
                <button @click="open = false"
                    class="w-7 h-7 flex items-center justify-center rounded-lg border border-gray-200 text-gray-400 hover:text-gray-600 hover:bg-gray-50 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <form action="{{ route('books_sheets.store') }}" method="POST" autocomplete="off">
                @csrf

                <div class="px-6 py-5 space-y-5">

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <div class="space-y-1.5">
                            <label class="text-xs font-medium text-gray-500 uppercase tracking-wide">{{ trans('Grades.title') }}</label>
                            <select name="grade_id" x-model="gradeId" @change="loadClassrooms()"
                                class="w-full h-9 rounded-lg border border-gray-200 bg-white text-sm text-gray-900 px-3 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none">
                                <option value="" disabled selected>{{ trans('class_rooms.select_grade') }}</option>
                                @foreach ($grades as $grade)
                                    <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="space-y-1.5">
                            <label class="text-xs font-medium text-gray-500 uppercase tracking-wide">{{ trans('class_rooms.Name') }}</label>
                            <select name="classroom_id"
                                class="w-full h-9 rounded-lg border border-gray-200 bg-white text-sm text-gray-900 px-3 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none">
                                <option value="" disabled selected>{{ trans('general.choose_grade') }}</option>
                                <template x-for="cls in classrooms" :key="cls.id">
                                    <option x-bind:value="cls.id" x-text="cls.name"></option>
                                </template>
                            </select>
                        </div>

                        <div class="space-y-1.5">
                            <label class="text-xs font-medium text-gray-500 uppercase tracking-wide">{{ trans('book_sheet.sales-price') }}</label>
                            <input type="number" name="sales_price" value="{{ old('sales-price') }}"
                                class="w-full h-9 rounded-lg border border-gray-200 bg-white text-sm text-gray-900 px-3 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none">
                        </div>
                    </div>

                    <div class="overflow-x-auto rounded-lg border border-gray-200">
                        <table class="min-w-full">
                            <thead>
                                <tr class="bg-gray-50 border-b border-gray-200">
                                    <th class="px-4 py-2.5 text-start text-xs font-semibold text-gray-500 uppercase tracking-wide">{{ trans('book_sheet.name') }}</th>
                                    <th class="px-4 py-2.5 text-start text-xs font-semibold text-gray-500 uppercase tracking-wide w-36">{{ trans('book_sheet.opening_qty') }}</th>
                                    <th class="px-4 py-2.5 text-center text-xs font-semibold text-gray-500 uppercase tracking-wide w-24">{{ trans('book_sheet.is_book') }}</th>
                                    <th class="px-4 py-2.5 w-12"></th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <template x-for="(book, index) in books" :key="index">
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-2">
                                            <input type="text" x-model="book.name" :name="`books[${index}][name]`"
                                                class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg bg-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition">
                                        </td>
                                        <td class="px-4 py-2">
                                            <input type="number" x-model="book.opening_qty" :name="`books[${index}][opening_qty]`"
                                                class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg bg-white focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition">
                                        </td>
                                        <td class="px-4 py-2 text-center">
                                            <input type="hidden" :name="`books[${index}][is_book]`" value="0">
                                            <input type="checkbox" x-model="book.is_book" :name="`books[${index}][is_book]`" value="1"
                                                class="w-4 h-4 text-blue-500 border-gray-300 rounded focus:ring-blue-400 cursor-pointer">
                                        </td>
                                        <td class="px-4 py-2">
                                            <button type="button" @click="removeRow(index)"
                                                class="p-1.5 text-red-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors">
                                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                            <tfoot>
                                <tr class="bg-gray-50 border-t border-gray-200">
                                    <td colspan="4" class="px-4 py-2">
                                        <button type="button" @click="addRow()"
                                            class="w-full px-4 py-2 text-sm font-medium text-blue-600 bg-white border border-blue-200 rounded-lg hover:bg-blue-50 hover:border-blue-400 transition cursor-pointer">
                                            {{ trans('book_sheet.new_book') }}
                                        </button>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
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
