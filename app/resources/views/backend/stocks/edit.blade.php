<div x-data="{ open: false }" x-on:open-modal-edit-stock-{{ $stock->id }}.window="open = true">
    {{-- Backdrop --}}
    <div x-show="open" x-transition
         class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 p-4"
         x-on:click.self="open = false"
         style="display: none;">
        {{-- Panel --}}
        <div x-show="open" x-transition
             class="bg-white rounded-xl shadow-xl w-full max-w-2xl overflow-hidden"
             style="display: none;">
            {{-- Header --}}
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
                <h6 class="text-base font-medium text-gray-900">{{ trans('general.new') }}</h6>
                <button x-on:click="open = false" type="button"
                    class="w-7 h-7 flex items-center justify-center rounded-lg border border-gray-200 text-gray-400 hover:text-gray-600 hover:bg-gray-50 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <form action="{{ route('stocks.update') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $stock->id }}">
                <div class="px-6 py-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('stock.name') }}</label>
                            <input type="text" name="name" value="{{ $stock->name }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('stock.quantity') }}</label>
                            <input type="number" value="{{ $stock->opening_stock }}" name="quantity" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('general.isset') }}</label>
                            <input type="checkbox" @checked($stock->isset == 1) name="isset" class="w-5 h-5 text-blue-500 rounded focus:ring-blue-500" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('stock.price') }}</label>
                            <input type="number" value="{{ $stock->price }}" name="price" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" />
                        </div>
                    </div>
                </div>
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