<div x-data="{ open: false }" x-on:open-modal-create-stock.window="open = true">
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
                <h3 class="text-lg font-semibold text-gray-800">{{ trans('general.new') }}</h3>
                <button x-on:click="open = false" type="button"
                    class="p-1 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <form action="{{ route('stocks.store') }}" method="POST"
                x-data="{ items: [{ name: '', opening_qty: '', price: '' }], addItem() { this.items.push({ name: '', opening_qty: '', price: '' }) }, removeItem(index) { this.items.splice(index, 1) } }">
                @csrf
                <div class="p-6">
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 text-right text-sm font-medium text-gray-700">{{ trans('stock.name') }}</th>
                                    <th class="py-2 px-4 text-right text-sm font-medium text-gray-700">{{ trans('stock.opening_balance') }}</th>
                                    <th class="py-2 px-4 text-right text-sm font-medium text-gray-700">{{ trans('stock.price') }}</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <template x-for="(item, index) in items" :key="index">
                                    <tr>
                                        <td class="py-2 px-2">
                                            <input type="text" :name="'list_stocks[' + index + '][name]'" x-model="items[index].name" list="stocks" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200"/>
                                            <datalist id="stocks">
                                                @foreach ($stocks as $stock)
                                                    <option value="{{ $stock->name }}">
                                                @endforeach
                                            </datalist>
                                        </td>
                                        <td class="py-2 px-2">
                                            <input type="number" :name="'list_stocks[' + index + '][opening_qty]'" x-model="items[index].opening_qty" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                                        </td>
                                        <td class="py-2 px-2">
                                            <input type="number" :name="'list_stocks[' + index + '][price]'" x-model="items[index].price" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                                        </td>
                                        <td class="py-2 px-2">
                                            <button type="button" @click="removeItem(index)" class="w-full px-3 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600">
                                                <svg class="w-5 h-5 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4" class="py-2">
                                        <button class="w-full px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-medium" @click="addItem()"
                                            type="button">{{ trans('general.new') }}</button>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-100 bg-gray-50 rounded-b-xl">
                    <button x-on:click="open = false" type="button" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 font-medium">{{ trans('general.Cancel') }}</button>
                    <button class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 font-medium" type="submit">{{ trans('general.Submit') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>