@extends('layouts.app')
@section('title')
    {{ trans('inventory.edit_item') }} - {{ trans('stock.outcome_order') }}
@endsection

@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100">
            <h4 class="text-lg font-bold text-gray-800">{{ trans('stock.outcome_order') }}: {{ $order->auto_number }}</h4>
        </div>

        <form action="{{ route('inventory.orders.update') }}" method="POST">
            @csrf
            <input type="hidden" name="order_id" value="{{ $order->id }}">
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                    <div>
                        <x-input name="date" type="date" :value="old('date', $order->date?->format('Y-m-d'))">{{ trans('general.date') }}</x-input>
                    </div>
                    <div>
                        <x-input-label>{{ trans('student.title') }}</x-input-label>
                        <select name="student_id" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all tom-select">
                            <option value="">{{ trans('general.choose') }}</option>
                            @foreach($students ?? [] as $student)
                                <option value="{{ $student->id }}" {{ old('student_id', $order->student_id) == $student->id ? 'selected' : '' }}>{{ $student->name }}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('student_id')" />
                    </div>
                    <div>
                        <x-input name="manual_number" type="text" :value="old('manual_number', $order->manual_number)">{{ trans('stock.manual_num') }}</x-input>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                    <div>
                        <x-input name="manual_date" type="date" :value="old('manual_date', $order->manual_date)">{{ trans('stock.manual_date') }}</x-input>
                    </div>
                    <div>
                        <x-input name="notes" type="text" :value="old('notes', $order->notes)">{{ trans('general.notes') }}</x-input>
                    </div>
                </div>

                <div x-data="{ items: [] }" class="mb-6">
                    <div class="flex items-center justify-between mb-3">
                        <h5 class="text-md font-bold text-gray-700">{{ trans('stock.quantity') }}</h5>
                        <button type="button" x-on:click="items.push({})" class="px-3 py-1.5 bg-primary text-white rounded-lg hover:bg-primary/90 text-sm flex items-center gap-1">
                            <x-hero-icon name="plus" class="w-4 h-4" />
                            {{ trans('general.add') }}
                        </button>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-4 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('inventory.type') }}</th>
                                    <th class="px-4 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('inventory.name') }}</th>
                                    <th class="px-4 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('stock.quantity') }}</th>
                                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">{{ trans('general.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <template x-for="(item, index) in items" :key="index">
                                    @include('backend.inventory.orders._item_row')
                                </template>
                                @foreach($order->items as $existingItem)
                                <tr>
                                    <td class="px-4 py-2">
                                        <select name="items[{{ $loop->index }}][itemable_type]" class="w-full px-3 py-2 text-sm rounded-lg border border-gray-300 focus:border-primary focus:ring-1 focus:ring-primary outline-none">
                                            <option value="App\Models\Inventory\InventoryItem" selected>{{ trans('inventory.title') }}</option>
                                        </select>
                                    </td>
                                    <td class="px-4 py-2">
                                        <select name="items[{{ $loop->index }}][itemable_id]" class="w-full px-3 py-2 text-sm rounded-lg border border-gray-300 focus:border-primary focus:ring-1 focus:ring-primary outline-none tom-select">
                                            @foreach($items ?? [] as $invItem)
                                                <option value="{{ $invItem->id }}" {{ $existingItem->itemable_id == $invItem->id ? 'selected' : '' }}>{{ $invItem->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="px-4 py-2">
                                        <input type="number" step="0.01" name="items[{{ $loop->index }}][quantity_out]" value="{{ $existingItem->quantity_out }}" class="w-full px-3 py-2 text-sm rounded-lg border border-gray-300 focus:border-primary focus:ring-1 focus:ring-primary outline-none">
                                    </td>
                                    <td class="px-4 py-2 text-center">
                                        <button type="button" x-on:click="$event.target.closest('tr').remove()" class="p-1.5 text-danger hover:bg-danger/10 rounded-lg">
                                            <x-hero-icon name="trash" class="w-5 h-5" />
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-100 bg-gray-50">
                <a href="{{ route('inventory.orders.index', 'sales') }}" class="px-4 py-2 text-gray-600 rounded-lg border border-gray-200 hover:bg-gray-50">
                    {{ trans('general.back') }}
                </a>
                <button type="submit" class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 font-medium">
                    {{ trans('general.Submit') }}
                </button>
            </div>
        </form>
    </div>
@endSection
