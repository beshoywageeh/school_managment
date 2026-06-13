<tr x-data="{ itemType: '' }">
    <td class="px-4 py-2">
        <select x-model="itemType" :name="`items[${index}][itemable_type]`" class="w-full px-3 py-2 text-sm rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none">
            <option value="App\Models\Inventory\InventoryItem">{{ trans('inventory.title') }}</option>
        </select>
    </td>
    <td class="px-4 py-2">
        <select :name="`items[${index}][itemable_id]`" class="w-full px-3 py-2 text-sm rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none tom-select">
            <option value="">{{ trans('general.choose') }}</option>
            @foreach($items ?? [] as $invItem)
                <option value="{{ $invItem->id }}">{{ $invItem->name }}</option>
            @endforeach
        </select>
    </td>
    <td class="px-4 py-2">
        <input type="number" step="0.01" :name="`items[${index}][quantity_in]`" class="w-full px-3 py-2 text-sm rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none" placeholder="{{ trans('stock.quantity') }}">
    </td>
    <td class="px-4 py-2">
        <input type="number" step="0.01" :name="`items[${index}][quantity_out]`" class="w-full px-3 py-2 text-sm rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none" placeholder="{{ trans('stock.quantity') }}">
    </td>
    <td class="px-4 py-2 text-center">
        <button type="button" x-on:click="items.splice(index, 1)" class="p-1.5 text-red-600 hover:bg-red-50 rounded-lg transition-colors">
            <x-hero-icon name="trash" class="w-5 h-5" />
        </button>
    </td>
</tr>
