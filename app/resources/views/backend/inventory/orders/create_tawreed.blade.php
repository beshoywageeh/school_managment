@extends('layouts.app')
@section('title')
    {{ trans('stock.income_order') }}
@endsection

@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100">
            <h4 class="text-lg font-bold text-gray-800">{{ trans('stock.income_order') }}</h4>
        </div>

        <form action="{{ route('inventory.orders.store') }}" method="POST">
            @csrf
            <input type="hidden" name="type" value="inventory">
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                    <div>
                        <x-input name="date" type="date" :value="old('date', date('Y-m-d'))">{{ trans('general.date') }}</x-input>
                    </div>
                    <div>
                        <x-input name="manual_number" type="text" :value="old('manual_number')">{{ trans('stock.manual_num') }}</x-input>
                    </div>
                    <div>
                        <x-input name="manual_date" type="date" :value="old('manual_date')">{{ trans('stock.manual_date') }}</x-input>
                    </div>
                </div>

                <div class="mb-4">
                    <x-input name="notes" type="text" :value="old('notes')">{{ trans('general.notes') }}</x-input>
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
                            </tbody>
                        </table>
                    </div>

                    <p x-show="items.length === 0" class="text-center text-sm text-gray-400 py-8">
                        {{ trans('general.Msg') }}
                    </p>
                </div>
            </div>

            <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-100 bg-gray-50">
                <a href="{{ route('inventory.orders.index', 'inventory') }}" class="px-4 py-2 text-gray-600 rounded-lg border border-gray-200 hover:bg-gray-50">
                    {{ trans('general.back') }}
                </a>
                <button type="submit" class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 font-medium">
                    {{ trans('general.Submit') }}
                </button>
            </div>
        </form>
    </div>
@endSection
