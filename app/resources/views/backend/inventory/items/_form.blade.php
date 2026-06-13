<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div>
        <x-input name="name" type="text" :value="old('name', $item->name ?? '')">{{ trans('inventory.name') }}</x-input>
    </div>
    <div>
        <x-input-label>{{ trans('inventory.type') }}</x-input-label>
        <select name="type" x-model="formType" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all">
            <option value="stock" {{ old('type', $item->type->value ?? 'stock') == 'stock' ? 'selected' : '' }}>{{ trans('inventory.stock') }}</option>
            <option value="clothe" {{ old('type', $item->type->value ?? 'stock') == 'clothe' ? 'selected' : '' }}>{{ trans('inventory.clothes') }}</option>
            <option value="book" {{ old('type', $item->type->value ?? 'stock') == 'book' ? 'selected' : '' }}>{{ trans('inventory.books') }}</option>
        </select>
        <x-input-error :messages="$errors->get('type')" />
    </div>
    <div x-show="formType === 'book'" x-cloak>
        <x-input-label>{{ trans('enums.inventory_item_category.book') }}</x-input-label>
        <select name="category" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all">
            <option value="">{{ trans('general.choose') }}</option>
            <option value="book" {{ old('category', $item->category->value ?? '') == 'book' ? 'selected' : '' }}>{{ trans('enums.inventory_item_type.book') }}</option>
            <option value="sheet" {{ old('category', $item->category->value ?? '') == 'sheet' ? 'selected' : '' }}>{{ trans('book_sheet.sheet') }}</option>
        </select>
        <x-input-error :messages="$errors->get('category')" />
    </div>
    <div>
        <x-input name="opening_qty" type="number" step="0.01" :value="old('opening_qty', $item->opening_qty ?? '')">{{ trans('stock.opening_balance') }}</x-input>
    </div>
    <div>
        <x-input name="sell_price" type="number" step="0.01" :value="old('sell_price', $item->sell_price ?? '')">{{ trans('inventory.sell_price') }}</x-input>
    </div>
    <div>
        <x-input name="cost_price" type="number" step="0.01" :value="old('cost_price', $item->cost_price ?? '')">{{ trans('inventory.cost_price') }}</x-input>
    </div>

    <div x-show="formType === 'clothe' || formType === 'book'" x-cloak>
        <x-input-label>{{ trans('fees.classroom') }}</x-input-label>
        <select name="classroom_id" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all tom-select">
            <option value="">{{ trans('general.choose',['value'=>'']) }}</option>
            @foreach($classrooms ?? [] as $key => $classroom)
                <optgroup label="{{ $key }}">
                    @foreach ($classroom as $class )

                    <option value="{{ $class->id }}" {{ old('classroom_id', $item->id ?? '') == $class->id ? 'selected' : '' }}>{{ $class->name }}</option>
                    @endforeach
                </optgroup>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('classroom_id')" />
    </div>
</div>
