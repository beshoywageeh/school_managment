<x-modal title="{{ trans('classes.title') }}" icon="plus" class="text-green-600" id="CreateclassesForm" can="classes-create" titleButton="{{ trans('general.new') }}" size="max">

    {{-- لاحظ هنا: الـ ID بتاع المودال لازم يطابق الـ ID بتاع الـ Form عشان زرار الـ Submit يشتغل تلقائي --}}
    <form action="{{ route('classes.store') }}" method="POST" id="CreateclassesForm">
        @csrf

        <div x-data="{
            classes: [{ id: Date.now(), class_id: '', class_name: '' }],

            addRow() {
                this.classes.push({
                    id: Date.now() + Math.random(), {{-- لتوليد Key فريد ومميز لكل صف --}}
                    class_id: '',
                    class_name: ''
                });
            },

            removeRow(index) {
                if (this.classes.length > 1) {
                    this.classes.splice(index, 1);
                }
            }
        }">

            {{-- حاوية الصفوف المكررة --}}
            <div class="space-y-4 mb-6">
                <template x-for="(classname, index) in classes" :key="classname.id">

                    {{-- جعلنا الـ Grid لكل صف على حدة عشان التصميم يفضل مظبوط مهما كررت --}}
                    <div x-transition class="grid grid-cols-1 md:grid-cols-3 gap-4 items-end bg-gray-50/50 p-3 rounded-xl border border-gray-100">

                        {{-- 1. حقل المرحلة الدراسية --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Grades.title') }}</label>
                            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500 focus:ring-2 focus:ring-green-200 tom-select"
                                    x-model="classname.class_id"
                                    :name="`classroom[${index}][class_id]`"
                                    required>
                                <option value="" @disabled(true)>
                                    {{ trans('class_rooms.select_grade') }}</option>
                                    @foreach ($class_rooms as $key => $class_room)
                                        <optgroup label="{{ $key }}">
                                            @foreach ($class_room as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </optgroup>
                                    @endforeach
                                </select>

                        </div>

                        {{-- 2. حقل اسم الفصل --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('class_rooms.Name') }}</label>
                            <input type="text"
                                   x-model="classname.class_name"
                                   :name="`classroom[${index}][class_name]`"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500 focus:ring-2 focus:ring-green-200"
                                   placeholder="مثال: فصل 1/1"
                                   required />
                        </div>

                        {{-- 3. زرار حذف الصف --}}
                        <div class="flex items-center justify-between md:justify-start gap-2 h-10">
                            <button type="button" x-on:click="removeRow(index)"
                                class="h-10 px-3 flex items-center justify-center gap-1 rounded-lg text-red-500 hover:text-red-700 hover:bg-red-50 transition-colors disabled:opacity-30 disabled:hover:bg-transparent"
                                :disabled="classes.length <= 1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                </svg>
                                <span class="text-xs md:hidden">حذف الصف</span> {{-- يظهر فقط في الشاشات الصغيرة --}}
                            </button>
                        </div>

                    </div>
                </template>
            </div>

            {{-- زرار إضافة صف جديد (الآن أصبح داخل نطاق الـ x-data) --}}
            <div class="mt-4 border-t border-dashed border-gray-200 pt-4">
                <button class="px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded-lg hover:bg-blue-600 flex items-center gap-2 transition-colors"
                        x-on:click="addRow()"
                        type="button">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    {{ trans('class_rooms.new') }}
                </button>
            </div>

        </div>
    </form>
</x-modal>

