@extends('layouts.app')
@section('title')
    @if ($type == 1)
        {{ trans('stock.income_order') }} : {{ trans('Sidebar.books_sheets') }}
    @endif
    @if ($type == 2)
        {{ trans('stock.outcome_order') }} : {{ trans('Sidebar.books_sheets') }}
    @endif
    @if ($type == 3)
        {{ trans('stock.inventory_order') }} : {{ trans('Sidebar.books_sheets') }}
    @endif
@endsection
@section('content')
    @include('backend.msg')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100 flex justify-between items-center">
            <div></div>
            <div class="flex gap-2">
                @if ($type == 1)
                    @can('books_sheets-income_order-create')
                        <a href="{{ route('bookSheetsOrder.create') }}"
                            class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-medium"><strong>{{ trans('stock.income_order') }}</strong></a>
                    @endcan
                @endif
                @if ($type == 2)
                    @can('books_sheets-outcome_order-create')
                        <a href="{{ route('bookSheetsOrder.create_sarf') }}"
                            class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-medium"><strong>{{ trans('stock.outcome_order') }}</strong></a>
                    @endcan
                @endif
                @if ($type == 3)
                    @can('books_sheets-inventory_order-create')
                        <a href="{{ route('bookSheetsOrder.create_gard') }}"
                            class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-medium"><strong>{{ trans('stock.inventory_order') }}</strong></a>
                    @endcan
                @endif
            </div>
        </div>
        <div class="p-6">
            @if (Auth::user()->hasAnyPermission(['clothes-income_order', 'clothes-outcome_order', 'clothes-inventory_order']))
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm" id="datatable">
                        <thead class="bg-blue-50">
                            <tr>
                                <th class="px-4 py-2 text-center text-xs font-medium text-blue-700 uppercase">#</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-blue-700 uppercase">{{ trans('orders.num') }}</th>
                                @if ($type == 2)
                                    <th class="px-4 py-2 text-start text-xs font-medium text-blue-700 uppercase">{{ trans('student.name') }}</th>
                                @endif
                                <th class="px-4 py-2 text-start text-xs font-medium text-blue-700 uppercase">{{ trans('orders.product_count') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-blue-700 uppercase">{{ trans('general.created_at') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-blue-700 uppercase">{{ trans('general.updated_at') }}</th>
                                <th class="px-4 py-2 text-center text-xs font-medium text-blue-700 uppercase">{{ trans('general.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @forelse ($orders as $order)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2 text-center text-gray-600">{{ $loop->index + 1 }}</td>
                                    <td class="px-4 py-2">
                                        <a class="px-3 py-1 bg-blue-50 text-blue-600 text-sm rounded-lg hover:bg-blue-100 font-medium"
                                                target="_blank"href="{{ route('clothes_order.show', $order->id) }}">
                                                {{ $order->auto_number }}
                                        </a>
                                        @if ($order->is_payed == 0 && $order->type == 2)
                                            <span class="mr-1 ml-1 px-2 py-1 text-xs font-medium rounded-full bg-red-100 text-red-700">{{ trans('clothes.not_payed') }}</span>
                                        @endif
                                        @if ($order->is_payed == 1 && $order->type == 2)
                                            <span class="mr-1 ml-1 px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-700">{{ trans('clothes.payed') }}</span>
                                        @endif
                                    </td>
                                    @if ($order->type == 2)
                                        <td class="px-4 py-2 text-gray-800">{{ $order->students->name }}</td>
                                    @endif

                                    <td class="px-4 py-2 text-gray-600">{{ trans('clothes.total_product') . ' ' . $order->stocks()->count('quantity_in') . ' ' . trans('clothes.total_qty') . ' ' . $order->stocks()->sum('quantity_in') - $order->stocks()->sum('quantity_out') }}
                                    </td>
                                    <td class="px-4 py-2 text-gray-600">{{ $order->created_at->format('Y-m-d') }}</td>
                                    <td class="px-4 py-2 text-gray-600">{{ $order->updated_at ? $order->updated_at->format('Y-m-d') : '' }}
                                    </td>
                                    <td class="px-4 py-2 text-center">
                                        @if ($type == 1)
                                            <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                                [
                                                    'type' => 'link',
                                                    'url' => route('bookSheetsOrder.destroy', $order->id),
                                                    'text' => trans('general.delete'),
                                                    'icon' => 'ti-trash',
                                                    'onclick' => 'confirmation(event)',
                                                    'can' => 'books_sheets-income_order_delete',
                                                ],
                                                [
                                                    'type' => 'link',
                                                    'url' => route('bookSheetsOrder.edit_tawreed', $order->id),
                                                    'text' => trans('general.edit'),
                                                    'icon' => 'ti-pencil',
                                                    'can' => 'books_sheets-income_order-update',
                                                ],
                                                [
                                                    'type' => 'link',
                                                    'url' => route('bookSheetsOrder.show', $order->id),
                                                    'text' => trans('general.show'),
                                                    'icon' => 'fa fa-print',
                                                    'can' => 'books_sheets-order_show',
                                                ],
                                            ]" />
                                        @endif
                                        @if ($order->is_payed == 0)
                                            @if ($type == 2)
                                                <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                                    [
                                                        'type' => 'link',
                                                        'url' => route('bookSheetsOrder.destroy', $order->id),
                                                        'text' => trans('general.delete'),
                                                        'icon' => 'ti-trash',
                                                        'onclick' => 'confirmation(event)',
                                                        'can' => 'books_sheets-outcome_order-delete',
                                                    ],
                                                    [
                                                        'type' => 'link',
                                                        'url' => route('bookSheetsOrder.edit_sarf', $order->id),
                                                        'text' => trans('general.edit'),
                                                        'icon' => 'ti-pencil',
                                                        'can' => 'books_sheets-outcome_order-update',
                                                    ],
                                                    [
                                                        'type' => 'link',
                                                        'url' => route('bookSheetsOrder.show', $order->id),
                                                        'text' => trans('general.show'),
                                                        'icon' => 'fa fa-print',
                                                        'can' => 'books_sheets-order_show',
                                                    ],
                                                    [
                                                        'type' => 'link',
                                                        'url' => route('bookSheetsOrder.pay', $order->id),
                                                        'text' => trans('clothes.pay'),
                                                        'icon' => 'ti-money',
                                                        'can' => 'books_sheets-outcome_order-pay',
                                                    ],
                                                ]" />
                                            @endif
                                        @endif
                                        @if ($type == 3)
                                            <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                                [
                                                    'type' => 'link',
                                                    'url' => route('bookSheetsOrder.destroy', $order->id),
                                                    'text' => trans('general.delete'),
                                                    'icon' => 'ti-trash',
                                                    'onclick' => 'confirmation(event)',
                                                    'can' => 'books_sheets-inventory_order-delete',
                                                ],
                                                [
                                                    'type' => 'link',
                                                    'url' => route('bookSheetsOrder.edit_gard', $order->id),
                                                    'text' => trans('general.edit'),
                                                    'icon' => 'ti-pencil',
                                                    'can' => 'books_sheets-inventory_order-update',
                                                ],
                                                [
                                                    'type' => 'link',
                                                    'url' => route('bookSheetsOrder.show', $order->id),
                                                    'text' => trans('general.show'),
                                                    'icon' => 'fa fa-print',
                                                    'can' => 'books_sheets-order_show',
                                                ],
                                            ]" />
                                        @endif

                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan='6' class="px-4 py-8 text-center text-gray-500">
                                        {{ trans('general.noDataToShow') }}
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
@endsection
@push('scripts')
@endpush