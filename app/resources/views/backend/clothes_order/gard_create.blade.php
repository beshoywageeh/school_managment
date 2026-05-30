@extends('layouts.app')
@section('title')
    {{ trans('stock.inventory_order') }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden" x-data="{
        rows: @json($stocks->map(fn($s) => ['id' => $s->id, 'name' => $s->name, 'grade' => $s->grade->name, 'classroom' => $s->classroom->name, 'inv' => (float)($s->orders()->sum('quantity_in') + $s->opening_qty - $s->orders()->sum('quantity_out')), 'actual' => null])),
        diff(row) { return (parseFloat(row.actual) || 0) - row.inv; }
    }">
        <div class="p-4 border-b border-gray-100">
            <div class="grid grid-cols-4 gap-4 text-center">
                <div>
                    <h6 class="text-gray-700 font-medium">الرقم : {{ $order->auto_number }}</h6>
                </div>
                <div>
                    <h6 class="text-gray-700 font-medium">النوع : {{ trans('stock.inventory_order') }}</h6>
                </div>
                <div>
                    <h6 class="text-gray-700 font-medium">التاريخ : {{ $order->created_at->format('Y-m-d') }}</h6>
                </div>
                <div>
                    <h6 class="text-gray-700 font-medium">الوقت : {{ $order->created_at->format('g : i : s A') }}</h6>
                </div>
            </div>
        </div>
        <form action="{{ route('clothes_gard.submit') }}"method="post" autocomplete="off">
            <div class="p-6">
                @csrf
                <input type="hidden" name="id" value="{{ $order->id }}">
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase"><strong>#</strong></th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase"><strong>{{ trans('Grades.name') }}</strong></th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase"><strong>{{ trans('class_rooms.Name') }}</strong></th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase"><strong>{{ trans('stock.name') }}</strong></th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase"><strong>{{ trans('gard.inv_stock') }}</strong></th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase"><strong>{{ trans('gard.actual_stock') }}</strong></th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase"><strong>{{ trans('gard.different') }}</strong></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <template x-for="(row, index) in rows" :key="row.id">
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2 text-center text-gray-600" x-text="index + 1"></td>
                                    <td class="px-4 py-2 text-gray-600" x-text="row.grade"></td>
                                    <td class="px-4 py-2 text-gray-600" x-text="row.classroom"></td>
                                    <td class="px-4 py-2">
                                        <label class="text-gray-800 font-medium" x-text="row.name"></label>
                                        <input type="hidden" x-bind:value="row.id" x-bind:name="`stock_id[${index}]`">
                                    </td>
                                    <td class="px-4 py-2">
                                        <input type="text" disabled x-bind:value="row.inv" class="w-full px-3 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-600">
                                    </td>
                                    <td class="px-4 py-2">
                                        <input type="number" x-model.number="row.actual" x-bind:name="`actual_stock[${index}]`" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                                    </td>
                                    <td class="px-4 py-2">
                                        <input type="number" disabled x-bind:value="diff(row)" x-bind:name="`different[${index}]`" class="w-full px-3 py-2 border border-gray-300 rounded-lg bg-gray-50 font-bold text-gray-800">
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