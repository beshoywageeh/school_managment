@extends('layouts.app')
@section('title')
    {{ trans('stock.income_order') }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden" x-data="{
        rows: @json($order->stocks->map(fn($s) => ['id' => $s->id, 'name' => $s->name, 'grade' => $s->grade->name, 'classroom' => $s->classroom->name, 'manual_number' => $s->manual_number, 'manual_date' => $s->manual_date, 'qty' => (float)$s->pivot->quantity_in, 'purchase' => (float)$s->purchase_price, 'sales' => (float)$s->sales_price])),
        get grandQty() { return this.rows.reduce((sum, r) => sum + (parseFloat(r.qty) || 0), 0); },
        get grandTotal() { return this.rows.reduce((sum, r) => sum + ((parseFloat(r.qty) || 0) * (parseFloat(r.purchase) || 0)), 0); },
        formatCurrency(v) { return new Intl.NumberFormat('en-EG', { style: 'currency', currency: 'EGP' }).format(v); }
    }">
        <div class="p-4 border-b border-gray-100">
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <tr>
                        <th class="py-2 px-4 text-right font-medium text-gray-600">
                            <h6>الرقم : {{ $order->auto_number }}</h6>
                        </th>
                        <th class="py-2 px-4 text-right font-medium text-gray-600">
                            <h6>النوع : {{ trans('stock.income_order') }}</h6>
                        </th>
                        <th class="py-2 px-4 text-right font-medium text-gray-600">
                            <h6>التاريخ : {{ $order->date }}</h6>
                        </th>
                        <th class="py-2 px-4 text-right font-medium text-gray-600">الوقت : {{ $order->created_at->format('H : i : s A') }}</th>
                    </tr>
                </table>
            </div>
        </div>
        <form action="{{ route('clothes_stock_submit.update') }}" method="post" autocomplete="off">
            <div class="p-6">
                @csrf
                <input type="hidden" name="order_id" value="{{ $order->id }}">
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm text-center">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-xs font-medium text-gray-500 uppercase">{{ trans('stock.name') }}</th>
                                <th class="px-4 py-2 text-xs font-medium text-gray-500 uppercase">{{ trans('Grades.name') }}</th>
                                <th class="px-4 py-2 text-xs font-medium text-gray-500 uppercase">{{ trans('class_rooms.Name') }}</th>
                                <th class="px-4 py-2 text-xs font-medium text-gray-500 uppercase">{{ trans('stock.manual_num') }}</th>
                                <th class="px-4 py-2 text-xs font-medium text-gray-500 uppercase">{{ trans('stock.manual_date') }}</th>
                                <th class="px-4 py-2 text-xs font-medium text-gray-500 uppercase">{{ trans('stock.quantity') }}</th>
                                <th class="px-4 py-2 text-xs font-medium text-gray-500 uppercase">{{ trans('clothes.purchase_price') }}</th>
                                <th class="px-4 py-2 text-xs font-medium text-gray-500 uppercase">{{ trans('clothes.sales_price') }}</th>
                                <th class="px-4 py-2 text-xs font-medium text-gray-500 uppercase">{{ trans('report.quantity_total') }}</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <template x-for="(row, index) in rows" :key="row.id">
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">
                                        <input type="hidden" x-bind:name="`id[${index}]`" x-model="row.id">
                                        <span class="text-gray-800 font-medium" x-text="row.name"></span>
                                    </td>
                                    <td class="px-4 py-2 text-gray-600" x-text="row.grade"></td>
                                    <td class="px-4 py-2 text-gray-600" x-text="row.classroom"></td>
                                    <td class="px-4 py-2">
                                        <input type="text" x-bind:name="`manual_num[${index}]`" x-model="row.manual_number" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                                    </td>
                                    <td class="px-4 py-2">
                                        <input type="date" x-bind:name="`manual_date[${index}]`" x-model="row.manual_date" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                                    </td>
                                    <td class="px-4 py-2">
                                        <input type="number" x-model.number="row.qty" x-bind:name="`qty[${index}]`" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                                    </td>
                                    <td class="px-4 py-2">
                                        <input type="number" x-model.number="row.purchase" x-bind:name="`purchase[${index}]`" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                                    </td>
                                    <td class="px-4 py-2">
                                        <input type="number" x-model.number="row.sales" x-bind:name="`sales[${index}]`" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                                    </td>
                                    <td class="px-4 py-2">
                                        <input type="text" disabled x-bind:value="formatCurrency((parseFloat(row.qty) || 0) * (parseFloat(row.purchase) || 0))" class="w-full px-3 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-600">
                                    </td>
                                </tr>
                            </template>
                        </tbody>
                        <tfoot class="bg-gray-50">
                            <tr>
                                <td colspan="2" class="px-4 py-2 text-right font-medium text-gray-700">{{ trans('clothes.total_qty') }}</td>
                                <td colspan="2" class="px-4 py-2">
                                    <input type="text" disabled x-bind:value="grandQty.toLocaleString('en-EG')" class="w-full px-3 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-600">
                                </td>
                                <td></td>
                                <td colspan="2" class="px-4 py-2 text-right font-medium text-gray-700">{{ trans('clothes.total_price') }}</td>
                                <td colspan="2" class="px-4 py-2">
                                    <input type="text" disabled x-bind:value="formatCurrency(grandTotal)" class="w-full px-3 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-600">
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="px-6 py-4 border-t border-gray-100 bg-gray-50 flex justify-end">
                <button class="px-6 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 font-medium" type="submit">{{ trans('general.Submit') }}</button>
            </div>
        </form>
    </div>
@endsection