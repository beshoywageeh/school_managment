<x-modal id="credit" title="{{ trans('report.fee_invoice') }}" titleButton="{{ trans('general.open') }}" can="ReceiptPayment-list">
    <form action="{{ route('report.credit') }}" method="post" id="credit">
        @csrf
        <div class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">{{ trans('general.choose', ['value' => trans('academic_year.view')]) }}</label>
                <select name="acc_year" class="w-full rounded-lg border border-gray-300 px-3 py-2.5 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all">
                    <option value="" selected disabled>{{ trans('general.academic_year') }}</option>
                    <option value="0">{{ trans('general.all') }}</option>
                    @foreach ($acadmeic_years as $acc_year)
                        <option value="{{ $acc_year->id }}">{{ $acc_year->view }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </form>
    <x-slot name="footer">
        <div class="flex items-center justify-end gap-3">
            <button type="button" class="px-4 py-2.5 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors" @click="open = false">{{ trans('general.close') }}</button>
            <button type="button" x-on:click="document.getElementById('credit').submit(); open = false;" class="px-4 py-2.5 text-sm font-medium text-white bg-primary rounded-lg hover:bg-primary/90 transition-colors">{{ trans('general.show') }}</button>
        </div>
    </x-slot>
</x-modal>