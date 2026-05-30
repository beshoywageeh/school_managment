@extends('layouts.app')
@section('title')
    {{ trans('stock.title') }}
@endsection

@section('content')
    @include('backend.msg')

    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden mb-6">
        <div class="p-4 border-b border-gray-100 flex justify-between items-center">
            <div class="flex gap-2">
                @can('stocks-income_order')
                    <a href="{{ route('order.store') }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-medium">
                        {{ trans('stock.income_order') }}
                    </a>
                @endcan
                @can('stocks-outcome_order')
                    <a href="{{ route('outorder.new_transfer') }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-medium">
                        {{ trans('stock.outcome_order') }}
                    </a>
                @endcan
                @can('stocks-inventory_order-create')
                    <a href="{{ route('gard.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-medium">
                        {{ trans('stock.inventory_order') }}
                    </a>
                @endcan
            </div>
            @can('stocks-create')
                <button onclick="window.dispatchEvent(new Event('open-modal-create-stock'))" class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 font-medium">
                    {{ trans('general.new') }}
                </button>
            @endcan
        </div>

        @can('stocks-index')
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">#</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('stock.name') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('stock.opening_balance') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('stock.opening_date') }}</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">{{ trans('stock.current_stock') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('stock.price') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('stock.total_price') }}</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">{{ trans('general.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($stocks as $stock)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-center text-sm text-gray-600">{{ $loop->index + 1 }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800 font-medium">{{ $stock->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $stock->opening_stock }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $stock->opening_stock_date }}</td>
                            <td class="px-6 py-4 text-center text-sm text-gray-800 font-medium">
                                {{ $stock->orders()->sum('quantity_in') + $stock->opening_stock - $stock->orders()->sum('quantity_out') }}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ number_format($stock->price, 2) }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800 font-medium">
                                {{ number_format($stock->price * ($stock->orders()->sum('quantity_in') + $stock->opening_stock - $stock->orders()->sum('quantity_out')), 2) }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex items-center justify-center gap-1">
                                    @can('stocks-update')
                                    <button type="button" onclick="window.dispatchEvent(new Event('open-modal-edit-stock-{{ $stock->id }}'))" class="p-2 text-green-600 hover:bg-green-50 rounded-lg" title="{{ trans('general.edit') }}">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </button>
                                    @endcan
                                    @can('stocks-delete')
                                    <form action="{{ route('stocks.destroy', $stock->id) }}" method="POST" class="inline">
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
                            </td>
                        </tr>
                        @include('backend.stocks.edit')
                        @empty
                        <tr>
                            <td colspan="8" class="px-6 py-12 text-center text-gray-500">
                                {{ trans('general.404') }}
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        @endcan
    </div>
    @include('backend.stocks.create')

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('.list_stocks').repeater({
                    show: function() {
                        $(this).slideDown();
                    },
                    hide: function(deleteElement) {
                        $(this).slideUp(deleteElement);
                    }
                });
            });
        </script>
    @endpush
@endsection