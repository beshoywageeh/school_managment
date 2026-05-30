@extends('layouts.app')
@section('title')
    @if ($type == 1)
        {{ trans('stock.income_order') }}
    @elseif ($type == 2)
        {{ trans('stock.outcome_order') }}
    @elseif ($type == 3)
        {{ trans('stock.gard') }}
    @else
    @endif
@endsection
@section('content')
    @include('backend.msg')
    <div class="flex flex-wrap mb-30">
        <div class="flex-1">
            <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                <div class="px-6 py-4 border-b border-gray-200">
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm">
                            <tr>
                                <th>الرقم : {{ $order->auto_number }}</th>
                                <th>النوع : @if ($type == 1)
                                        {{ trans('stock.income_order') }}
                                    @elseif ($type == 2)
                                        {{ trans('stock.outcome_order') }}
                                    @elseif ($type == 3)
                                        {{ trans('stock.gard') }}
                                    @else
                                    @endif
                                </th>
                                @if ($type == 2)
                                    <th>إلي : {{ $order->location }}</th>
                                @endif
                                <th>التاريخ : {{ $order->created_at->format('Y-M-d') }}</th>
                                <th>الوقت : {{ $order->created_at->format('h : i : s A') }}</th>
                            </tr>
                        </table>
                    </div>
                </div>
                @if ($type == 1)
                    <form action="{{ route('stock_submit.store') }}"method="post" autocomplete="off"
                    x-data="{ items: [{ name: '', manual_num: '', manual_date: '', quantity: '' }], addItem() { this.items.push({ name: '', manual_num: '', manual_date: '', quantity: '' }) }, removeItem(index) { this.items.splice(index, 1) } }">
                    @elseif($type == 2)
                        <form action="{{ route('orders.submit_transfer') }}"method="post" autocomplete="off"
                        x-data="{ items: [{ name: '', quantity: '' }], addItem() { this.items.push({ name: '', quantity: '' }) }, removeItem(index) { this.items.splice(index, 1) } }">
                @endif
                <div class="p-6">
                    @csrf
                    <input type="hidden" name="id" value="{{ $order->id }}">
                    <table class="w-full text-sm border border-gray-200">
                        <thead>
                            <tr>
                                <th>{{ trans('stock.name') }}</th>
                                @if ($type == 1)
                                    <th>{{ trans('stock.manual_num') }}</th>
                                    <th>{{ trans('stock.manual_date') }}</th>
                                @endif
                                <th>{{ trans('stock.quantity') }}</th>
                                <th>{{ trans('general.delete') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <template x-for="(item, index) in items" :key="index">
                                <tr>
                                    <td>
                                        <select :name="'List_stocks[' + index + '][name]'" x-model="items[index].name" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all">
                                            <option value="" selected disabled>{{ trans('general.select') }}</option>
                                            @forelse ($stocks as $stock)
                                                <option value={{ $stock->id }}>
                                                    {{ $stock->name }}
                                                </option>
                                            @empty
                                                <option value="">{{ trans('general.noDataToShow') }}</option>
                                            @endforelse
                                        </select>
                                    </td>
                                    @if ($type == 1)
                                        <td>
                                            <input type="text" :name="'List_stocks[' + index + '][manual_num]'" x-model="items[index].manual_num" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all" />
                                        </td>
                                        <td>
                                            <input type="date" :name="'List_stocks[' + index + '][manual_date]'" x-model="items[index].manual_date" class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" />
                                        </td>
                                    @endif
                                    <td>
                                        <input type="number" :name="'List_stocks[' + index + '][quantity]'" x-model="items[index].quantity" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all" />
                                    </td>
                                    <td>
                                        <button type="button" @click="removeItem(index)" class="w-full px-4 py-2 rounded-lg font-medium bg-red-500 text-white hover:bg-red-600">{{ trans('general.delete') }}</button>
                                    </td>
                                </tr>
                            </template>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5">
                                    <x-button class="primary" type="button" @click="addItem()">{{ trans('stock.new') }}</x-button>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="px-6 py-4 border-t border-gray-200">
                    <div class="text-right">
                        <x-button class="success" type="submit">{{ trans('general.Submit') }}</x-button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
