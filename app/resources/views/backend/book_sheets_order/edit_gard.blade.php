@extends('layouts.app')
@section('title')
    {{ trans('stock.inventory_order') }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden" x-data="{
        rows: @json($order->stocks->map(fn($s) => ['id' => $s->id, 'name' => $s->name, 'grade' => $s->grade->name, 'classroom' => $s->classroom->name, 'inv' => (float)($s->orders()->sum('quantity_in') + $s->opening_qty - $s->orders()->sum('quantity_out')), 'actual' => (float)($s->pivot->actual_stock ?? ($s->orders()->sum('quantity_in') + $s->opening_qty - $s->orders()->sum('quantity_out')))])),
        diff(row) { return (parseFloat(row.actual) || 0) - row.inv; }
    }">
        <div class="p-4 border-b border-gray-100">
            <div class="text-center flex flex-wrap gap-4">
                <div class="flex-1">
                    <h6 class="text-gray-700 font-medium">الرقم : {{ $order->auto_number }}</h6>
                </div>
                <div class="flex-1">
                    <h6 class="text-gray-700 font-medium">النوع : {{ trans('stock.inventory_order') }}</h6>
                </div>
                <div class="flex-1">
                    <h6 class="text-gray-700 font-medium">التاريخ : {{ $order->created_at->format('Y-m-d') }}</h6>
                </div>
                <div class="flex-1">
                    <h6 class="text-gray-700 font-medium">الوقت : {{ $order->created_at->format('s : i : g A') }}</h6>
                </div>
            </div>
        </div>
        <form action="{{ route('bookSheetsOrder.update_gard') }}" method="post" autocomplete="off">
            <input type="hidden" name="order_id" value="{{ $order->id }}">
            <div class="p-6">
                @csrf
                <table class="w-full border border-gray-200">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">#</th>
                            <th class="px-4 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('Grades.name') }}</th>
                            <th class="px-4 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('class_rooms.Name') }}</th>
                            <th class="px-4 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('stock.name') }}</th>
                            <th class="px-4 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('gard.inv_stock') }}</th>
                            <th class="px-4 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('gard.actual_stock') }}</th>
                            <th class="px-4 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('gard.different') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <template x-for="(row, index) in rows" :key="row.id">
                            <tr>
                                <td class="px-4 py-3 text-center text-gray-600" x-text="index + 1"></td>
                                <td class="px-4 py-3 text-gray-600" x-text="row.grade"></td>
                                <td class="px-4 py-3 text-gray-600" x-text="row.classroom"></td>
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
            <div class="px-6 py-4 border-t border-gray-100 bg-gray-50 flex justify-end">
                <x-button class="success" type="submit">{{ trans('general.Submit') }}</x-button>
            </div>
        </form>
    </div>
@endsection
