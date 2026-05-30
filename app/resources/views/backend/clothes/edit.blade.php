<div x-data="{ open: false }" x-on:open-modal-edit-clothes-{{ $stock->id }}.window="open = true">
    {{-- Backdrop --}}
    <div x-show="open" x-transition
         class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 p-4"
         x-on:click.self="open = false"
         style="display: none;">
        {{-- Panel --}}
        <div x-show="open" x-transition
             class="bg-white rounded-xl shadow-xl w-full max-w-sm overflow-hidden"
             style="display: none;">
            {{-- Header --}}
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
                <h6 class="text-base font-medium text-gray-900">{{ trans('general.edit') }}</h6>
                <button x-on:click="open = false" type="button"
                    class="w-7 h-7 flex items-center justify-center rounded-lg border border-gray-200 text-gray-400 hover:text-gray-600 hover:bg-gray-50 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            {{-- Body --}}
            <form action="{{ route('stock.update') }}" method="POST">
                @csrf
                <div class="px-6 py-4 space-y-4">
                    <input type="hidden" name="id" value="{{ $stock->id }}">
                    <x-input name="name" type="text" value="{{ $stock->name }}">{{ trans('stock.name') }}</x-input>
                    <x-input name="opening_qty" value="{{ $stock->opening_stock }}" type="number">{{ trans('stock.opening_balance') }}</x-input>
                </div>
                {{-- Footer --}}
                <div class="flex items-center justify-end gap-2 px-6 py-4 border-t border-gray-100 bg-gray-50/50">
                    <button type="button" x-on:click="open = false"
                        class="h-9 px-4 text-sm text-gray-600 rounded-lg border border-gray-200 hover:bg-gray-50 transition-colors">
                        {{ trans('general.Cancel') }}
                    </button>
                    <button type="submit"
                        class="h-9 px-4 text-sm font-medium text-white bg-green-600 hover:bg-green-700 rounded-lg transition-colors">
                        {{ trans('general.Submit') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
