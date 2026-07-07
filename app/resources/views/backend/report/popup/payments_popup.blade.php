<x-modal id="payments" title="{{ trans('Sidebar.ReceiptPayment') }}" titleButton="{{ trans('general.open') }}" can="ReceiptPayment-list" size="lg">
    <form action="{{ route('report.payments') }}" method="post" id="payments">
        @csrf
        <div class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">{{ trans('general.from') }} - {{ trans('general.to') }}</label>
                <div class="flex items-center gap-2">
                    <input type="text" class="flex-1 rounded-lg border border-gray-300 px-3 py-2.5 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all" name="from" placeholder="{{ trans('general.from') }}">
                    <span class="text-gray-500">-</span>
                    <input class="flex-1 rounded-lg border border-gray-300 px-3 py-2.5 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all" type="text" name="to" placeholder="{{ trans('general.to') }}">
                </div>
            </div>
        </div>
    </form>
    <x-slot name="footer">
        <div class="flex items-center justify-end gap-3">
            <button type="button" class="px-4 py-2.5 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors" @click="open = false">{{ trans('general.close') }}</button>
            <button type="button" x-on:click="document.getElementById('payments').submit(); open = false;" class="px-4 py-2.5 text-sm font-medium text-white bg-primary rounded-lg hover:bg-primary/90 transition-colors">{{ trans('general.show') }}</button>
        </div>
    </x-slot>
</x-modal>
