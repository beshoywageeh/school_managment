@extends('layouts.app')
@section('title')
    @if ($order->type == 1)
        {{ trans('stock.income_order') }}
    @elseif ($order->type == 2)
        {{ trans('stock.outcome_order') }}
    @elseif ($order->type == 3)
        {{ trans('stock.inventory_order') }}
    @else
    @endif
@endsection
@push('css')
    <style>
        @media print {
            @page {
                size: A5 landscape;
            }
        }

        .table {
            border: 3px solid black;
        }

        .table td,
        .table th {
            border: 3px solid black;
        }

        .table th {
            background-color: #ddd;
            font-weight: 1.2rem
        }
    </style>
@endpush
@section('content')
    @include('backend.msg')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100 flex justify-end">
            <button type="button" onclick="printDiv()" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 flex items-center gap-2">
                <x-hero-icon name="print" class="w-5 h-5" />
                {{ trans('general.print') }}
            </button>
        </div>
        <div class="p-6" id="print">
            <div class="overflow-x-auto mb-6">
                <table class="w-full text-sm">
                    <tr>
                        <td colspan="2" class="py-2 px-4">
                            <h6 class="text-gray-800 font-semibold">{{ $school->name }}</h6>
                        </td>
                    </tr>
                    <tr>
                        <th class="py-2 px-4 text-right font-medium text-gray-600">{{ trans('orders.num') }}</th>
                        <td class="py-2 px-4 text-gray-800">{{ $order->auto_number }}</td>
                    </tr>
                    <tr>
                        <th class="py-2 px-4 text-right font-medium text-gray-600">{{ trans('general.created_at') }}</th>
                        <td class="py-2 px-4 text-gray-800">{{ $order->date }}</td>
                    </tr>
                    @if ($order->type == 2)
                        <tr>
                            <th class="py-2 px-4 text-right font-medium text-gray-600">{{ trans('student.name') }}</th>
                            <td class="py-2 px-4 text-gray-800">{{ $order->students->name }}</td>
                        </tr>
                    @endif
                </table>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full text-sm">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase">#</th>
                            <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('stock.name') }}</th>
                            <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('Grades.name') }}</th>
                            <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('class_rooms.Name') }}</th>
                            <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('clothes.sales_price') }}</th>
                            @if ($order->type == 3)
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('report.quantity_in') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('report.quantity_out') }}</th>
                            @endif
                            @if ($order->type != 3)
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('stock.quantity') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('clothes.total_price') }}</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse ($order->stocks as $stock)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-2 text-center text-gray-600">{{ $loop->index + 1 }}</td>
                                <td class="px-4 py-2 text-gray-800 font-medium">{{ $stock->name }}</td>
                                <td class="px-4 py-2 text-gray-600">{{ $stock->grade->name }}</td>
                                <td class="px-4 py-2 text-gray-600">{{ $stock->classroom->name }}</td>
                                @if ($order->type == 1)
                                    <td class="px-4 py-2 text-gray-800">{{ Number::currency($stock->sales_price, 'EGP', 'ar') }}</td>
                                    <td class="px-4 py-2 text-gray-800 font-medium">{{ number_format($stock->pivot->quantity_in, 2) }}</td>
                                    <td class="px-4 py-2 text-gray-800 font-medium">
                                        {{ Number::currency($stock->pivot->quantity_in * $stock->sales_price, 'EGP', 'ar') }}
                                    </td>
                                @endif
                                <td class="px-4 py-2 text-gray-800">{{ Number::currency($stock->sales_price, 'EGP', 'ar') }}</td>
                                @if ($order->type == 2)
                                    <td class="px-4 py-2 text-gray-800 font-medium">{{ number_format($stock->pivot->quantity_out, 2) }}</td>
                                    <td class="px-4 py-2 text-gray-800 font-medium">
                                        {{ Number::currency($stock->pivot->quantity_out * $stock->sales_price, 'EGP', 'ar') }}
                                    </td>
                                @endif
                                @if ($order->type == 3)
                                    <td class="px-4 py-2 text-gray-800 font-medium">{{ number_format($stock->pivot->quantity_in, 2) }}</td>
                                    <td class="px-4 py-2 text-gray-800 font-medium">{{ number_format($stock->pivot->quantity_out, 2) * -1 }}</td>
                                @endif
                            </tr>
                        @empty
                            <tr>
                                <td colspan='6' class="px-4 py-8 text-center text-gray-500">
                                    {{ trans('general.404') }}
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                    @if ($order->type != 3)
                        <tfoot class="bg-gray-50">
                            <tr>
                                <td colspan="5" class="px-4 py-2 text-right font-medium text-gray-800"><strong>{{ trans('general.total') }}</strong></td>
                                <td class="px-4 py-2 text-gray-800 font-medium">
                                    {{ number_format($order->stocks->sum(fn($stock) => $stock->pivot->quantity_out), 2) }}
                                </td>
                                <td class="px-4 py-2 text-gray-800 font-bold">
                                    {{ Number::currency($order->stocks->sum(fn($stock) => $stock->pivot->quantity_out * $stock->sales_price), 'EGP', 'ar') }}
                                </td>
                            </tr>
                            <tr>
                                <th colspan="7" class="px-4 py-2 text-center text-gray-700 font-medium">
                                    {{ Numbers::TafqeetMoney($order->stocks->sum(fn($stock) => $stock->pivot->quantity_out * $stock->sales_price), 'EGP') }}
                                </th>
                            </tr>
                        </tfoot>
                    @endif
                </table>
            </div>
        </div>
    </div>
@endsection