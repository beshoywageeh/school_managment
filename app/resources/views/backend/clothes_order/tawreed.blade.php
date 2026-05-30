@extends('layouts.app')
@section('title')
    {{ trans('stock.income_order') }}
@endsection
@section('content')
    @include('backend.msg')
    <form action="{{ route('clothes_stock.store') }}" method="post" autocomplete="off">
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden" x-data="{
        rows: @json($clothes->map(fn($c) => ['id' => $c->id, 'name' => $c->name, 'grade' => $c->grade->name, 'classroom' => $c->classroom->name, 'qty' => 0, 'purchase' => 0, 'sales' => 0, 'sales_isset' => 0])),
        get grandQty() { return this.rows.reduce((sum, r) => sum + (parseFloat(r.qty) || 0), 0); },
        get grandTotal() { return this.rows.reduce((sum, r) => sum + ((parseFloat(r.qty) || 0) * (parseFloat(r.purchase) || 0)), 0); },
        formatCurrency(v) { return new Intl.NumberFormat('en-EG', { style: 'currency', currency: 'EGP' }).format(v); }
    }">
        <div class="p-4 border-b border-gray-100">
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <tr>
                        <th class="py-2 px-4 text-right font-medium text-gray-600">
                            <x-input type="text" name="auto_number" value="{{ $auto_number }}" ></x-input>
                        </th>
                        <th class="py-2 px-4 text-right font-medium text-gray-600">
                            <x-input type="text" name="type" value="{{ trans('stock.income_order') }}" disabled></x-input>
                        </th>
                        <th class="py-2 px-4 text-right font-medium text-gray-600">
                            <x-input type="date" name="date" value="{{ date('Y-m-d') }}"></x-input>
                        </th>
                        <th class="py-2 px-4 text-right font-medium text-gray-600">الوقت : {{ date('H:i:s') }}</th>
                    </tr>
                </table>
            </div>
        </div>
            <div class="p-6">
                @csrf
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
                                <th class="px-4 py-2 text-xs font-medium text-gray-500 uppercase">{{ trans('clothes.sales_isset') }}</th>
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
                                        <input type="text" x-bind:name="`manual_num[${index}]`" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                                    </td>
                                    <td class="px-4 py-2">
                                        <input type="date" x-bind:name="`manual_date[${index}]`" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
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
                                        <input type="number" x-model.number="row.sales_isset" x-bind:name="`sales_isset[${index}]`" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
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
    </div>
        </form>
@endsection