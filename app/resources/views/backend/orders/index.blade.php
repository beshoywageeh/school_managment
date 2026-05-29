@extends('layouts.app')
@section('title')
    @if ($type == 'inventory')
        {{ trans('stock.income_order') }}
    @elseif ($type == 'sales')
        {{ trans('stock.outcome_order') }}
    @elseif ($type == 'gard')
        {{ trans('stock.inventory_order') }}
    @else
    @endif
@endsection
@section('content')
    @include('backend.msg')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100 flex justify-between items-center">
            <div></div>
            <div class="flex gap-2">
                @if ($type == 'inventory')
                    @can('stocks-income_order')
                        <a href="{{ route('order.store') }}"
                            class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-medium"><strong>{{ trans('stock.income_order') }}</strong></a>
                    @endcan
                @elseif ($type == 'sales')
                    @can('stocks-outcome_order')
                        <a href="{{ route('outorder.new_transfer') }}"
                            class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-medium"><strong>{{ trans('stock.outcome_order') }}</strong></a>
                    @endcan
                @elseif ($type == 'gard')
                    @can('stocks-inventory_order-create')
                        <a href="{{ route('gard.create') }}"
                            class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-medium"><strong>{{ trans('stock.inventory_order') }}</strong></a>
                    @endcan
                @else
                @endif
            </div>
        </div>
        <div class="overflow-x-auto">
            @if (Auth::user()->hasAnyPermission(['orders-index', 'order_out-index', 'stocks-inventory_order-index']))
                <table class="min-w-full">
                    <thead class="bg-blue-50">
                        <tr>
                            <th class="px-6 py-3 text-center text-xs font-medium text-blue-700 uppercase">#</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-blue-700 uppercase">{{ trans('orders.num') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-blue-700 uppercase">{{ trans('orders.product_count') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-blue-700 uppercase">{{ trans('general.created_at') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-blue-700 uppercase">{{ trans('general.updated_at') }}</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-blue-700 uppercase">{{ trans('general.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse ($orders as $order)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 text-center text-sm text-gray-600">{{ $loop->index + 1 }}</td>
                                <td class="px-6 py-4 text-sm">
                                    <a class="px-3 py-1 bg-blue-100 text-blue-600 text-sm rounded-lg hover:bg-blue-200" target="_blank"
                                        @if ($type == 1) href="{{ route('order.show', $order->id) }}" @endif
                                        @if ($type == 2) href="{{ route('outorder.show', $order->id) }}" @endif
                                        @if ($type == 3) href="{{ route('gard.show', $order->id) }}" @endif>{{ $order->auto_number }}</a>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-600">{{ $order->stocks_count }}</td>
                                <td class="px-6 py-4 text-sm text-gray-600">{{ $order->created_at->format('Y-m-d') }}</td>
                                <td class="px-6 py-4 text-sm text-gray-600">{{ $order->updated_at->format('Y-m-d') }}</td>
                                <td class="px-6 py-4 text-center">
                                    @if ($type == 1)
                                        <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                            [
                                                'type' => 'link',
                                                'url' => route('order.destroy', $order->id),
                                                'text' => trans('general.delete'),
                                                'icon' => 'ti-trash',
                                                'onclick' => 'confirmation(event)',
                                                'can' => 'order-delete',
                                            ],
                                            [
                                                'type' => 'link',
                                                'url' => route('order.edit', $order->id),
                                                'text' => trans('general.edit'),
                                                'icon' => 'ti-pencil',
                                                'can' => 'order-edit',
                                            ],
                                        ]" />
                                    @endif
                                    @if ($type == 2)
                                        <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                            [
                                                'type' => 'link',
                                                'url' => route('outorder.destroy', $order->id),
                                                'text' => trans('general.delete'),
                                                'icon' => 'ti-trash',
                                                'onclick' => 'confirmation(event)',
                                                'can' => 'stocks-inventory_delete',
                                            ],
                                            [
                                                'type' => 'link',
                                                'url' => route('outorder.edit', $order->id),
                                                'text' => trans('general.edit'),
                                                'icon' => 'ti-pencil',
                                                'can' => 'stocks-inventory_edit',
                                            ],
                                        ]" />
                                    @endif
                                    @if ($type == 3)
                                        <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                            [
                                                'type' => 'link',
                                                'url' => route('gard.destroy', $order->id),
                                                'text' => trans('general.delete'),
                                                'icon' => 'ti-trash',
                                                'onclick' => 'confirmation(event)',
                                                'can' => 'stocks-inventory_delete',
                                            ],
                                            [
                                                'type' => 'link',
                                                'url' => route('gard.edit', $order->id),
                                                'text' => trans('general.edit'),
                                                'icon' => 'ti-pencil',
                                                'can' => 'stocks-inventory_edit',
                                            ],
                                        ]" />
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan='6' class="px-6 py-12 text-center text-gray-500">
                                    {{ trans('general.404') }}
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
@push('scripts')
@endpush