@extends('layouts.app')
@section('title')
    {{ trans('stock.inventory_order') }}
@endsection

@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100">
            <h4 class="text-lg font-bold text-gray-800">{{ trans('stock.inventory_order') }}</h4>
        </div>

        <form action="{{ route('inventory.gard.store') }}" method="POST">
            @csrf
            <div class="p-6">
                <div class="mb-6">
                    <x-input name="date" type="date" :value="old('date', date('Y-m-d'))">{{ trans('general.date') }}</x-input>
                </div>

                <div class="mb-4">
                    <x-input name="notes" type="text" :value="old('notes')">{{ trans('general.notes') }}</x-input>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">#</th>
                                <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('inventory.name') }}</th>
                                <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('inventory.type') }}</th>
                                <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('gard.inv_stock') }}</th>
                                <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('gard.actual_stock') }}</th>
                                <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('gard.different') }}</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100" x-data="{
                            items: {{ json_encode($items ?? []) }},
                            diff(index) {
                                const actual = parseFloat($refs['actual_' + index]?.value) || 0;
                                const inv = parseFloat(this.items[index]?.current_stock) || 0;
                                return (actual - inv).toFixed(2);
                            }
                        }">
                            @forelse($items ?? [] as $invItem)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 text-center text-sm text-gray-600">{{ $loop->index + 1 }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800 font-medium">{{ $invItem->name }}</td>
                                <td class="px-6 py-4 text-sm">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $invItem->type?->color() ?? 'bg-gray-100 text-gray-700' }}">
                                        {{ $invItem->type?->lang() ?? $invItem->type }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-600">{{ $invItem->current_stock }}</td>
                                <td class="px-6 py-4 text-sm">
                                    <input type="hidden" name="items[{{ $loop->index }}][item_id]" value="{{ $invItem->id }}">
                                    <input type="number" step="0.01" x-ref="actual_{{ $loop->index }}" x-on:input="$el.closest('tr').querySelector('.diff-cell').textContent = $data.diff({{ $loop->index }})" name="items[{{ $loop->index }}][actual_stock]" value="{{ old('items.' . $loop->index . '.actual_stock', $invItem->current_stock) }}" class="w-32 px-3 py-2 text-sm rounded-lg border border-gray-300 focus:border-primary focus:ring-1 focus:ring-primary outline-none text-center">
                                </td>
                                <td class="px-6 py-4 text-sm font-medium diff-cell text-center">
                                    <span class="text-gray-600">0.00</span>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="px-6 py-12 text-center">
                                    <div class="bg-blue-50 text-blue-600 px-4 py-3 rounded-lg inline-block">
                                        {{ trans('general.Msg') }}
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-100 bg-gray-50">
                <a href="{{ route('inventory.orders.index', 'purchases') }}" class="px-4 py-2 text-gray-600 rounded-lg border border-gray-200 hover:bg-gray-50">
                    {{ trans('general.back') }}
                </a>
                <button type="submit" class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 font-medium">
                    {{ trans('general.Submit') }}
                </button>
            </div>
        </form>
    </div>
@endSection
