<x-modal id="EditClassRoom-{{ $class_room->id }}" title="{{ trans('general.edit') }}" variant="warning" icon="pencil" size="md" can="class_rooms-edit">
    <form action="{{ route('class_rooms.update') }}" method="POST" id="EditClassRoom-{{ $class_room->id }}">
            @csrf
            @method('PUT') {{-- ممارسة صحيحة في لارافيل عند التحديث --}}

            <input type="hidden" name="id" value="{{ $class_room->id }}">

            {{-- الحاوية الأساسية للحقول مع مسافات متناسقة --}}
            <div class="space-y-4 text-right"> {{-- تدعم الـ RTL --}}

                {{-- 1. حقل اختيار المرحلة --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">
                        {{ trans('Grades.title') }}
                    </label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-white text-gray-900 text-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-shadow appearance-none"
                            name="grade_name"
                            required>
                        <option value="" disabled>{{ trans('class_rooms.select_grade') }}</option>
                        @foreach ($data['grades'] as $grade)
                            <option @selected($grade->id == $class_room->grade_id) value="{{ $grade->id }}">
                                {{ $grade->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- 2. حقل اسم الفصل --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">
                        {{ trans('class_rooms.Name') }}
                    </label>
                    {{-- مررنا كلاسات لـ الـ x-input عشان يتناسق مع السيلكت --}}
                    <x-input
                        name="class_name"
                        type="text"
                        value="{{ $class_room->name }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary"
                        required />
                </div>

            </div>

        </form>
</x-modal>
