@extends('layouts.app')
@section('title')
    {{ trans('stock.inventory_order') }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="flex flex-wrap mb-30" x-data="{
        rows: @json($stocks->map(fn($s) => ['id' => $s->id, 'name' => $s->name, 'grade' => $s->grade->name, 'classroom' => $s->classroom->name, 'inv' => (float)($s->orders()->sum('quantity_in') + $s->opening_qty - $s->orders()->sum('quantity_out')), 'actual' => null])),
        diff(row) { return (parseFloat(row.actual) || 0) - row.inv; }
    }">
        <div class="flex-1">
            <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                <div class="px-6 py-4 border-b border-gray-200">
                    <div class="my-2 text-center flex flex-wrap">
                        <div class="flex-1">
                            <h6>الرقم : {{ $auto_number }}</h6>
                        </div>
                        <div class="flex-1">
                            <h6>النوع : {{ trans('stock.inventory_order') }}</h6>
                        </div>
                        <div class="flex-1">
                            <h6>التاريخ : {{ date('Y-m-d') }}</h6>
                        </div>
                        <div class="flex-1">
                            <h6>الوقت : {{ date('s : i : g A') }}</h6>
                        </div>
                    </div>
                </div>
                <form action="{{ route('bookSheetsOrder.submit_gard') }}"method="post" autocomplete="off">
                    <div class="p-6">
                        @csrf
                        <table class="w-full border border-gray-200">
                            <thead>
                                <tr class="my-1">
                                    <th><strong>#</strong></th>
                                    <th><strong>{{ trans('Grades.name') }}</strong></th>
                                    <th><strong>{{ trans('class_rooms.Name') }}</strong></th>
                                    <th><strong>{{ trans('stock.name') }}</strong></th>
                                    <th><strong>{{ trans('gard.inv_stock') }}</strong></th>
                                    <th><strong>{{ trans('gard.actual_stock') }}</strong></th>
                                    <th><strong>{{ trans('gard.different') }}</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <template x-for="(row, index) in rows" :key="row.id">
                                    <tr>
                                        <td x-text="index + 1"></td>
                                        <td x-text="row.grade"></td>
                                        <td x-text="row.classroom"></td>
                                        <td>
                                            <label x-text="row.name"></label>
                                            <input type="hidden" x-bind:value="row.id" x-bind:name="`stock_id[${index}]`">
                                        </td>
                                        <td>
                                            <input type="text" disabled x-bind:value="row.inv" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all">
                                        </td>
                                        <td>
                                            <input type="number" x-model.number="row.actual" x-bind:name="`actual_stock[${index}]`" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all">
                                        </td>
                                        <td>
                                            <input type="number" disabled x-bind:value="diff(row)" x-bind:name="`different[${index}]`" class="font-extrabold w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all">
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
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
@endsection
