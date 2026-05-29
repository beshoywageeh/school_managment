
<x-modal can="academic_year-create" title="{{ trans('academic_year.title') }}" titleButton="{{trans('general.new')}}" id="academic_year-create">
    <slot>
        <form action="{{ route('academic_year.store') }}" method="post" id="academic_year-create">
            @csrf
        <div class="px-6 py-5 space-y-4">
            <div class="grid grid-cols-2 gap-3">
                <div class="space-y-1.5">
                    <label class="text-xs font-medium text-gray-500">{{ trans('academic_year.year_start') }}</label>
                    <input name="year_start" type="date"
                        class="w-full h-9 rounded-lg border border-gray-200 bg-white text-sm text-gray-900 px-3 focus:ring-2 focus:ring-green-500 focus:border-transparent outline-none">
                </div>
                <div class="space-y-1.5">
                    <label class="text-xs font-medium text-gray-500">{{ trans('academic_year.year_end') }}</label>
                    <input name="year_end" type="date"
                        class="w-full h-9 rounded-lg border border-gray-200 bg-white text-sm text-gray-900 px-3 focus:ring-2 focus:ring-green-500 focus:border-transparent outline-none">
                </div>
            </div>
            <div class="flex items-center gap-2">
                <input type="checkbox" name="status" id="create_status"
                    class="w-4 h-4 accent-green-600 rounded">
                <label for="create_status" class="text-sm text-gray-700">{{ trans('academic_year.status') }}</label>
            </div>
        </div>
        </form>
    </slot>
</x-modal>
