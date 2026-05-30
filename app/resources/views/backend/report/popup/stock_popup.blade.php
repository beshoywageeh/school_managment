<x-modal id="stock" title="{{ trans('report.stock') }}" titleButton="{{ trans('general.open') }}" can="stocks-index">
    <form action="{{ route('report.stock') }}" method="post" id="stock">
        @csrf
        <div class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">{{ trans('report.stock') }}</label>
                <select name="stock_id" class="w-full rounded-lg border border-gray-300 px-3 py-2.5 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all tom-select">
                    <option selected disabled>{{ trans('report.select_stock') }}</option>
                    @foreach ($stocks as $stock)
                        <option value="{{ $stock->id }}">{{ $stock->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </form>
    <x-slot name="footer">
        <div class="flex items-center justify-end gap-3">
            <button type="button" class="px-4 py-2.5 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors" @click="open = false">{{ trans('general.close') }}</button>
            <button type="button" x-on:click="document.getElementById('stock').submit(); open = false;" class="px-4 py-2.5 text-sm font-medium text-white bg-emerald-600 rounded-lg hover:bg-emerald-700 transition-colors">{{ trans('general.show') }}</button>
        </div>
    </x-slot>
</x-modal>