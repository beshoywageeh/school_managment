<x-modal id="payment_parts" title="{{ trans('Sidebar.payment_parts') }}" titleButton="{{ trans('general.open') }}" can="payment_parts-list" size="lg">
    <form action="{{ route('report.payment_parts') }}" method="post" id="payment_parts">
        @csrf
        <div class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">{{ trans('general.from') }} - {{ trans('general.to') }}</label>
                <div class="flex items-center gap-2">
                    <input type="text" class="flex-1 rounded-lg border border-gray-300 px-3 py-2.5 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all" name="from" placeholder="{{ trans('general.from') }}">
                    <span class="text-gray-500">-</span>
                    <input class="flex-1 rounded-lg border border-gray-300 px-3 py-2.5 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all" type="text" name="to" placeholder="{{ trans('general.to') }}">
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">{{ trans('general.payment_status') }}</label>
                <select name="payment_status" class="w-full rounded-lg border border-gray-300 px-3 py-2.5 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all">
                    <option value="" selected disabled>
                        {{ trans('general.choose', ['value' => trans('report.payment_status')]) }}
                    </option>
                    <option value="2">{{ trans('general.all') }}</option>
                    <option value="0">{{ trans('clothes.not_payed') }}</option>
                    <option value="1">{{ trans('clothes.payed') }}</option>
                </select>
            </div>
        </div>
    </form>
    <x-slot name="footer">
        <div class="flex items-center justify-end gap-3">
            <button type="button" class="px-4 py-2.5 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors" @click="open = false">{{ trans('general.close') }}</button>
            <button type="button" x-on:click="document.getElementById('payment_parts').submit(); open = false;" class="px-4 py-2.5 text-sm font-medium text-white bg-emerald-600 rounded-lg hover:bg-emerald-700 transition-colors">{{ trans('general.show') }}</button>
        </div>
    </x-slot>
</x-modal>
