@extends('layouts.app')
@section('title')
    @if ($type == 'inventory')
        {{ trans('stock.income_order') }} : {{ trans('Sidebar.clothes') }}
    @elseif ($type == 'sales')
        {{ trans('stock.outcome_order') }}
    @elseif ($type == 'gard')
        {{ trans('stock.inventory_order') }}
    @endif
@endsection

@section('content')
    @include('backend.msg')

    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden mb-6">
        <div class="p-4 border-b border-gray-100 flex justify-between items-center">
            <div class="flex gap-2">
                @if ($type == 'inventory')
                    @can('clothes-income_order')
                        <a href="{{ route('clothes-order.tawreed') }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-medium">
                            {{ trans('stock.income_order') }}
                        </a>
                    @endcan
                @elseif ($type == 'sales')
                    @can('clothes-outcome_order')
                        <a href="{{ route('clothes_out_order.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-medium">
                            {{ trans('stock.outcome_order') }}
                        </a>
                    @endcan
                @elseif ($type == 'gard')
                    @can('clothes-inventory_order')
                        <a href="{{ route('clothes.gard') }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-medium">
                            {{ trans('stock.inventory_order') }}
                        </a>
                    @endcan
                @endif
            </div>
        </div>

        @if(Auth::user()->hasAnyPermission(['clothes-income_order', 'clothes-outcome_order', 'clothes-inventory_order']))
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-blue-50">
                        <tr>
                            <th class="px-6 py-3 text-center text-xs font-medium text-blue-700 uppercase">#</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-blue-700 uppercase">{{ trans('orders.num') }}</th>
                            @if ($type == 'sales')
                                <th class="px-6 py-3 text-start text-xs font-medium text-blue-700 uppercase">{{ trans('student.name') }}</th>
                            @endif
                            <th class="px-6 py-3 text-start text-xs font-medium text-blue-700 uppercase">{{ trans('orders.product_count') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-blue-700 uppercase">{{ trans('general.created_at') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-blue-700 uppercase">{{ trans('general.updated_at') }}</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-blue-700 uppercase">{{ trans('general.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($orders as $order)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-center text-sm text-gray-600">{{ $loop->index + 1 }}</td>
                            <td class="px-6 py-4 text-sm">
                                <a target="_blank" href="{{ route('clothes-order.show', $order->id) }}" class="text-blue-600 hover:text-blue-800 font-medium">
                                    {{ $order->auto_number }}
                                </a>
                                @if($order->status == 'notpayed' && $order->type == 'sales')
                                    <span class="mr-1 ml-1 px-2 py-1 text-xs font-medium rounded-full bg-red-100 text-red-700">{{ trans('clothes.not_payed') }}</span>
                                @endif
                                @if($order->status == 'payed' && $order->type == 'sales')
                                    <span class="mr-1 ml-1 px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-700">{{ trans('clothes.payed') }}</span>
                                @endif
                            </td>
                            @if($order->type == 'sales')
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $order->students->name }}</td>
                            @endif
                            <td class="px-6 py-4 text-sm text-gray-600">
                                {{-- {{ trans('clothes.total_product') . ' ' . $order->stocks()->count('quantity_in') . ' ' . trans('clothes.total_qty') . ' ' . $order->stocks()->sum('quantity_in') - $order->stocks()->sum('quantity_out') }} --}}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $order->created_at->format('Y-m-d') }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $order->updated_at ? $order->updated_at->format('Y-m-d') : '' }}</td>
                            <td class="px-6 py-4 text-center">
                                @if($type == 'sales' && $order->status == 'payed')
                                    <div class="flex items-center justify-center gap-1">
                                        @can('clothes-income_order-update')
                                        <a href="{{ route('clothes_order.edit', $order->id) }}" class="p-2 text-green-600 hover:bg-green-50 rounded-lg" title="{{ trans('general.edit') }}">
                                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                        @endcan
                                        @can('clothes-income_order_delete')
                                        <form action="{{ route('clothes_order.delete', $order->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="p-2 text-red-600 hover:bg-red-50 rounded-lg" onclick="confirmation(event)" title="{{ trans('general.delete') }}">
                                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </form>
                                        @endcan
                                    </div>
                                @endif

                                @if($order->status == 'notpayed' && $order->type == 'sales' && $type == 'sales')
                                    <div class="flex items-center justify-center gap-1">
                                        @can('clothes-outcome_order-update')
                                        <a href="{{ route('clothes_out_order.edit', $order->id) }}" class="p-2 text-green-600 hover:bg-green-50 rounded-lg" title="{{ trans('general.edit') }}">
                                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                        <a href="{{ route('clothes_order.pay', $order->id) }}" class="p-2 text-green-600 hover:bg-green-50 rounded-lg" title="{{ trans('clothes.pay') }}">
                                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                            </svg>
                                        </a>
                                        @endcan
                                        @can('clothes-outcome_order-delete')
                                        <form action="{{ route('clothes_order.delete', $order->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="p-2 text-red-600 hover:bg-red-50 rounded-lg" onclick="confirmation(event)" title="{{ trans('general.delete') }}">
                                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </form>
                                        @endcan
                                    </div>
                                @endif

                                @if($type == 'inventory')
                                    <div class="flex items-center justify-center gap-1">
                                        @can('clothes-inventory_order-update')
                                        <a href="{{ route('clothes_inventory_order.edit', $order->id) }}" class="p-2 text-green-600 hover:bg-green-50 rounded-lg" title="{{ trans('general.edit') }}">
                                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                        @endcan
                                        @can('clothes-inventory_order-delete')
                                        <form action="{{ route('clothes_order.delete', $order->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="p-2 text-red-600 hover:bg-red-50 rounded-lg" onclick="confirmation(event)" title="{{ trans('general.delete') }}">
                                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </form>
                                        @endcan
                                    </div>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="px-6 py-12 text-center text-gray-500">
                                {{ trans('general.404') }}
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection
