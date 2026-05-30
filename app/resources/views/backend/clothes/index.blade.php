@extends('layouts.app')
@section('title')
    {{ trans('stock.title') }} : {{ trans('Sidebar.clothes') }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="bg-white h-screen rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100 flex justify-between items-center">
            <div></div>
            <div class="flex gap-2">
                @can('clothes-income_order')
                    <a href="{{ route('clothes-order.tawreed') }}"
                        class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-medium"><strong>{{ trans('stock.income_order') }}</strong></a>
                @endcan
                @can('clothes-outcome_order')
                    <a href="{{ route('clothes_out.create') }}"
                        class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-medium"><strong>{{ trans('stock.outcome_order') }}</strong></a>
                @endcan
                @can('clothes-inventory_order')
                    <a href="{{ route('clothes_gard.create') }}"
                        class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-medium"><strong>{{ trans('stock.inventory_order') }}</strong></a>
                @endcan
                @include('backend.clothes.create')

            </div>
        </div>
        <div class="p-6">
            @can('clothes-index')
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase">#</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('Grades.title') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('class_rooms.title') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('stock.name') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('stock.opening_balance') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('stock.opening_date') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('stock.current_stock') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('clothes.purchase_price') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('clothes.sales_price') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('clothes.sales_isset') }}</th>
                                <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase">{{ trans('general.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @forelse ($clothes as $stock)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2 text-center text-gray-600">{{ $loop->index + 1 }}</td>
                                    <td class="px-4 py-2 text-gray-800">{{ $stock->grade->name }}</td>
                                    <td class="px-4 py-2 text-gray-800">{{ $stock->classroom->name }}</td>
                                    <td class="px-4 py-2 text-gray-800 font-medium">{{ $stock->name }}</td>
                                    <td class="px-4 py-2 text-gray-600">{{ number_format($stock->opening_qty, 2) }}</td>
                                    <td class="px-4 py-2 text-gray-600">{{ $stock->opening_stock_date }}</td>
                                    <td class="px-4 py-2 text-gray-800 font-medium">{{$stock->current_qty}}</td>
                                    <td class="px-4 py-2 text-gray-600">{{ Number::currency($stock->purchase_price, 'EGP', 'ar') }}</td>
                                    <td class="px-4 py-2 text-gray-600">{{ Number::currency($stock->sales_price, 'EGP', 'ar') }}</td>
                                    <td class="px-4 py-2 text-gray-600">{{ Number::currency($stock->sales_price_set, 'EGP', 'ar') }}</td>
                                    <td class="px-4 py-2 text-center">
                                        <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                            [
                                                'type' => 'link',
                                                'url' => route('clothes.destroy', $stock->id),
                                                'text' => trans('general.delete'),
                                                'icon' => 'trash',
                                                'onclick' => 'confirmation(event)',
                                                'can' => 'clothes-delete',
                                            ],
                                            [
                                                'type' => 'button',
                                                'text' => trans('general.edit'),
                                                'icon' => 'pencil',
                                                'toggle' => 'modal',
                                                'target' => '#editItem-' . $stock->id,
                                                'can' => 'clothes-update',
                                            ],
                                        ]" /></td>
                                </tr>
                                @include('backend.stocks.edit')

                            @empty
                                <tr>
                                    <td colspan='10' class="px-4 py-8 text-center text-gray-500">
                                        {{ trans('general.404') }}
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            @endcan
        </div>
    </div>


@endsection
