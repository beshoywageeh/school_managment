@extends('layouts.app')
@section('title')
    {{ trans('stock.inventory_order') }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden" x-data="{
        rows: @json($stocks->map(fn($s) => ['id' => $s->id, 'name' => $s->name, 'inv' => (float)($s->orders()->sum('quantity_in') + $s->opening_stock - $s->orders()->sum('quantity_out')), 'actual' => null])),
        diff(row) { return (parseFloat(row.actual) || 0) - row.inv; }
    }">
        <div class="p-4 border-b border-gray-100">
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <tr>
                        <th class="py-2 px-4 text-right font-medium text-gray-600">الرقم : {{ $order }}</th>
                        <th class="py-2 px-4 text-right font-medium text-gray-600">النوع : {{ trans('stock.inventory_order') }}</th>
                        <th class="py-2 px-4 text-right font-medium text-gray-600">التاريخ : {{ $order->created_at->format('Y-M-d') }}</th>
                        <th class="py-2 px-4 text-right font-medium text-gray-600">الوقت : {{ $order->created_at->format('g : i : s A') }}</th>
                    </tr>
                </table>
            </div>
        </div>
        <form action="{{ route('gard.store') }}" method="post" autocomplete="off">
            <div class="p-6">
                @csrf
                <input type="hidden" name="id" value="{{ $order->id }}">
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">#</th>
                                <th class="px-4 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('stock.name') }}</th>
                                <th class="px-4 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('gard.inv_stock') }}</th>
                                <th class="px-4 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('gard.actual_stock') }}</th>
                                <th class="px-4 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('gard.different') }}</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <template x-for="(row, index) in rows" :key="row.id">
                                <tr>
                                    <td class="px-4 py-3 text-center text-gray-600" x-text="index + 1"></td>
                                    <td class="px-4 py-3">
                                        <label class="text-gray-800 font-medium" x-text="row.name"></label>
                                        <input type="hidden" x-bind:value="row.id" x-bind:name="`stock_id[${index}]`">
                                    </td>
                                    <td class="px-4 py-3">
                                        <input type="text" disabled x-bind:value="row.inv" class="w-full px-3 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-600">
                                    </td>
                                    <td class="px-4 py-3">
                                        <input type="number" x-model.number="row.actual" x-bind:name="`actual_stock[${index}]`" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                                    </td>
                                    <td class="px-4 py-3">
                                        <input type="number" disabled x-bind:value="diff(row)"
                                            x-bind:name="`different[${index}]`"
                                            class="w-full px-3 py-2 border border-gray-300 rounded-lg bg-gray-50 font-bold text-gray-800" />
                                    </td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="px-6 py-4 border-t border-gray-100 bg-gray-50 flex justify-end">
                <button class="px-6 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 font-medium" type="submit">{{ trans('general.Submit') }}</button>
            </div>
        </form>
    </div>
@endsection