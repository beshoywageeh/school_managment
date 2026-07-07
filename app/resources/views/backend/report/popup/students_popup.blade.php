<x-modal id="students" title="{{ trans('report.students') }}" size="lg" variant="primary" icon="cog" titleButton="{{ trans('general.generate') }}" can="Students-list">
    <form action="{{ route('report.export_student') }}" method="post" id="students">
        @csrf
        <div class="space-y-4" x-data="{
            gradeId: '',
            classrooms: [],
            async loadClassrooms() {
                if (!this.gradeId) { this.classrooms = []; return; }
                const res = await fetch(`/ajax/get_classRooms/${this.gradeId}`);
                this.classrooms = await res.json();
            }
        }">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">{{ trans('general.choose', ['value' => trans('Grades.name')]) }}</label>
                <select name="grade" x-model="gradeId" @change="loadClassrooms()" class="w-full rounded-lg border border-gray-300 px-3 py-2.5 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all">
                    <option value="" selected disabled>{{ trans('general.choose_grade') }}</option>
                    <option value="0">{{ trans('general.all') }}</option>
                    @foreach ($grades as $grade)
                        <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">{{ trans('general.choose', ['value' => trans('class_rooms.Name')]) }}</label>
                <select name="classroom" class="w-full rounded-lg border border-gray-300 px-3 py-2.5 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all">
                    <option value="0">{{ trans('general.all') }}</option>
                    <template x-for="cls in classrooms" :key="cls.id">
                        <option x-bind:value="cls.id" x-text="cls.name"></option>
                    </template>
                </select>
            </div>
        </div>
    </form>
    <x-slot name="footer">
        <div class="flex items-center justify-end gap-3">
            <button type="button" class="px-4 py-2.5 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors" @click="open = false">{{ trans('general.close') }}</button>
            <button type="button" x-on:click="document.getElementById('students').submit(); open = false;" class="px-4 py-2.5 text-sm font-medium text-white bg-primary rounded-lg hover:bg-primary/90 transition-colors">{{ trans('general.show') }}</button>
        </div>
    </x-slot>
</x-modal>