<div class="modal fade" id="editItem-{{ $stock->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="relative flex flex-col w-full bg-white rounded-lg shadow-xl border-0">
            <div class="flex items-center justify-between px-6 py-4 border-b border-blue-600 bg-blue-500 text-white rounded-t-lg">
                <h6 class="font-medium">{{ trans('general.new') }}</h6>
                <button type="button" class="text-white hover:text-gray-200" data-dismiss="modal" aria-label="Close">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <form action="{{ route('stocks.update') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $stock->id }}">
                <div class="p-6">
                    <div class="grid grid-cols-4 gap-4">
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
                <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-200 bg-gray-50 rounded-b-lg">
                    <button class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 font-medium" type="submit">
                        {{ trans('general.Submit') }}
                    </button>
                    <button class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400" type="button" data-dismiss="modal">
                        {{ trans('general.Cancel') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>