<x-modal id="exception_fee" title="{{ trans('report.excepiton_fee') }}" titleButton="{{ trans('general.open') }}" can="except_fee-list">
    <form action="{{ route('report.exception_fee') }}" method="post" id="exception_fee">
        @csrf
        <div class="space-y-4">
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">{{ trans('academic_year.year_start') }}</label>
                    <input class="w-full rounded-lg border border-gray-300 px-3 py-2.5 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all" name="start_date" type="date">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">{{ trans('academic_year.year_end') }}</label>
                    <input class="w-full rounded-lg border border-gray-300 px-3 py-2.5 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all" name="end_date" type="date">
                </div>
            </div>
        </div>
    </form>
    <x-slot name="footer">
        <div class="flex items-center justify-end gap-3">
            <button type="button" class="px-4 py-2.5 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors" @click="open = false">{{ trans('general.close') }}</button>
            <button type="button" x-on:click="document.getElementById('exception_fee').submit(); open = false;" class="px-4 py-2.5 text-sm font-medium text-white bg-emerald-600 rounded-lg hover:bg-emerald-700 transition-colors">{{ trans('general.show') }}</button>
        </div>
    </x-slot>
</x-modal>