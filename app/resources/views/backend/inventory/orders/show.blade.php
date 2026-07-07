@extends('layouts.report_view')
@section('title')
    {{ trans('orders.num') }}: {{ $order->auto_number }}
@endsection

@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 max-w-4xl mx-auto my-4">
        <div class="flex justify-between items-start border-b border-gray-200 pb-4 mb-4">
            <div>
                <h2 class="text-xl font-bold text-gray-800">{{ trans('orders.num') }}: {{ $order->auto_number }}</h2>
                <p class="text-sm text-gray-500 mt-1">{{ trans('general.date') }}: {{ $order->date?->format('Y-m-d') }}</p>
            </div>
            <div class="text-start">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium {{ $order->type?->color() ?? 'bg-gray-100 text-gray-700' }}">
                    {{ $order->type?->lang() ?? $order->type }}
                </span>
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium ms-2 {{ $order->status?->color() ?? 'bg-gray-100 text-gray-700' }}">
                    {{ $order->status?->lang() ?? $order->status }}
                </span>
            </div>
        </div>

        @if($order->student)
        <div class="mb-4 text-sm text-gray-600">
            <strong>{{ trans('student.title') }}:</strong> {{ $order->student->name }}
        </div>
        @endif

        @if($order->manual_number)
        <div class="mb-4 text-sm text-gray-600">
            <strong>{{ trans('stock.manual_num') }}:</strong> {{ $order->manual_number }}
            @if($order->manual_date) | <strong>{{ trans('stock.manual_date') }}:</strong> {{ $order->manual_date }} @endif
        </div>
        @endif

        <div class="overflow-x-auto">
        <table class="min-w-full border-collapse">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-3 text-sm font-semibold text-gray-700 border border-gray-300">#</th>
                    <th class="px-4 py-3 text-sm font-semibold text-gray-700 border border-gray-300">{{ trans('inventory.name') }}</th>
                    <th class="px-4 py-3 text-sm font-semibold text-gray-700 border border-gray-300">{{ trans('stock.quantity') }}</th>
                    <th class="px-4 py-3 text-sm font-semibold text-gray-700 border border-gray-300">{{ trans('stock.price') }}</th>
                    <th class="px-4 py-3 text-sm font-semibold text-gray-700 border border-gray-300">{{ trans('stock.total_price') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order->items ?? [] as $index => $item)
                <tr>
                    <td class="px-4 py-3 text-sm text-gray-600 border border-gray-300 text-center">{{ $index + 1 }}</td>
                    <td class="px-4 py-3 text-sm text-gray-800 border border-gray-300">{{ $item->itemable?->name ?? '--' }}</td>
                    <td class="px-4 py-3 text-sm text-gray-600 border border-gray-300 text-center">{{ $item->quantity_in ?: $item->quantity_out }}</td>
                    <td class="px-4 py-3 text-sm text-gray-600 border border-gray-300 text-center">{{ $item->itemable?->sell_price ?? '--' }}</td>
                    <td class="px-4 py-3 text-sm text-gray-800 font-medium border border-gray-300 text-center">{{ number_format(($item->quantity_in ?: $item->quantity_out) * ($item->itemable?->sell_price ?? 0), 2) }}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr class="bg-gray-50">
                    <td colspan="4" class="px-4 py-3 text-sm font-semibold text-gray-700 border border-gray-300 text-start">{{ trans('stock.total_price') }}</td>
                    <td class="px-4 py-3 text-sm font-bold text-gray-800 border border-gray-300 text-center">{{ number_format($order->total_amount, 2) }}</td>
                </tr>
            </tfoot>
        </table>

        </div>
        @if($order->notes)
        <div class="mt-4 p-4 bg-gray-50 rounded-lg">
            <strong class="text-sm text-gray-700">{{ trans('general.notes') }}:</strong>
            <p class="text-sm text-gray-600 mt-1">{{ $order->notes }}</p>
        </div>
        @endif
    </div>
@endSection
