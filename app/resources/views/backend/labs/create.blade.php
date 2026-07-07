<x-modal id="lab_create_form" title="{{ trans('labs.index') }}" size="lg" can="labortories-create" titleButton="{{trans('general.new')}}" icon="plus">
    <form action="{{ route('labs.store') }}" method="POST" autocomplete="off" id="lab_create_form">
        @csrf
        <div class="p-6">
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('labs.location') }}</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" list="location_list" name="location"
                    value="{{ old('location') }}" placeholder="{{ trans('labs.location') }}">
                <datalist id="location_list">
                    @foreach ($labs_main as $lab)
                        <option value="{{ $lab->location }}">
                    @endforeach
                </datalist>
            </div>

            <div class="overflow-x-auto" x-data="{
                labs_list: [{ id: Date.now(), name: ''}],

                addRow() {
                    this.labs_list.push({
                        id: Date.now() + Math.random(),
                        name: '',
                    });
                },

                removeRow(index) {
                    if (this.labs_list.length > 1) {
                        this.labs_list.splice(index, 1);
                    }
                }
            }">

                <div class="space-y-3">
                    <template x-for="(lab, index) in labs_list" :key="lab.id">
                        <div x-transition class="grid grid-cols-1 md:grid-cols-3 gap-4 items-end bg-gray-50/50 p-3 rounded-xl border border-gray-100">

                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('labs.name') }}</label>
                                <input type="text"
                                       x-model="lab.name"
                                       :name="`labs_list[${index}][name]`"
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary"
                                       placeholder="مثال: معمل الحاسب 1"
                                       required />
                            </div>

                            <div class="flex items-center justify-between md:justify-start gap-2 h-10">
                                <button type="button" x-on:click="removeRow(index)"
                                    class="h-10 px-3 flex items-center justify-center gap-1 rounded-lg text-red-500 hover:text-red-700 hover:bg-red-50 transition-colors disabled:opacity-30 disabled:hover:bg-transparent"
                                    :disabled="labs_list.length <= 1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                    </svg>
                                    <span class="text-xs md:hidden">حذف الصف</span>
                                </button>
                            </div>

                        </div>
                    </template>
                </div>

                <div class="mt-4 border-t border-dashed border-gray-200 pt-4">
                    <button class="px-4 py-2 bg-primary text-white rounded-lg text-sm font-medium hover:bg-primary/90 flex items-center gap-2 transition-colors"
                            x-on:click="addRow()"
                            type="button">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                        {{ trans('labs.new_labs') }}
                    </button>
                </div>

            </div> </div> </form>
</x-modal>
