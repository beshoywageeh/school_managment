<x-modal id="clothes_stock" title="{{ trans('report.clothe_stock') }}" titleButton="{{ trans('general.open') }}" can="clothes-index">
    <form action="{{ route('report.clothes_stock') }}" method="post" id="clothes_stock">
        @csrf
        <div class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">{{ trans('report.stock') }}</label>
                <select name="stock_id" class="w-full rounded-lg border border-gray-300 px-3 py-2.5 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all tom-select">
                    <option selected disabled>{{ trans('report.select_stock') }}</option>
                    @foreach ($clothes as $stock)
                        <option value="{{ $stock->id }}">
                            {{ $stock->grade->name . ' - ' . $stock->classroom->name . ' - ' . $stock->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </form>
    <x-slot name="footer">
        <div class="flex items-center justify-end gap-3">
            <button type="button" class="px-4 py-2.5 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors" @click="open = false">{{ trans('general.close') }}</button>
            <button type="button" x-on:click="document.getElementById('clothes_stock').submit(); open = false;" class="px-4 py-2.5 text-sm font-medium text-white bg-primary rounded-lg hover:bg-primary/90 transition-colors">{{ trans('general.show') }}</button>
        </div>
    </x-slot>
</x-modal>