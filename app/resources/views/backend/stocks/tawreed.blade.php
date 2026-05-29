@extends('layouts.app')
@section('title')
    @if ($type == 1)
        {{ trans('stock.income_order') }}
    @elseif ($type == 2)
        {{ trans('stock.outcome_order') }}
    @elseif ($type == 3)
        {{ trans('stock.gard') }}
    @else
    @endif
@endsection
@section('content')
    @include('backend.msg')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100">
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <tr>
                        <th class="py-2 px-4 text-right font-medium text-gray-600">الرقم : {{ $order->auto_number }}</th>
                        <th class="py-2 px-4 text-right font-medium text-gray-600">النوع : @if ($type == 1)
                                {{ trans('stock.income_order') }}
                            @elseif ($type == 2)
                                {{ trans('stock.outcome_order') }}
                            @elseif ($type == 3)
                                {{ trans('stock.gard') }}
                            @else
                            @endif
                        </th>
                        @if ($type == 2)
                            <th class="py-2 px-4 text-right font-medium text-gray-600">إلي : {{ $order->location }}</th>
                        @endif
                        <th class="py-2 px-4 text-right font-medium text-gray-600">التاريخ : {{ $order->created_at->format('Y-M-d') }}</th>
                        <th class="py-2 px-4 text-right font-medium text-gray-600">الوقت : {{ $order->created_at->format('h : i : s A') }}</th>
                    </tr>
                </table>
            </div>
        </div>
        @if ($type == 1)
            <form action="{{ route('stocks.stock_submit.store') }}"method="post" autocomplete="off">
            @elseif($type == 2)
                <form action="{{ route('orders.submit_transfer') }}"method="post" autocomplete="off">
        @endif
            <div class="p-6">
                @csrf
                <input type="hidden" name="id" value="{{ $order->id }}">
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('stock.name') }}</th>
                                @if ($type == 1)
                                    <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('stock.manual_num') }}</th>
                                    <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('stock.manual_date') }}</th>
                                @endif
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('stock.quantity') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('general.delete') }}</th>
                            </tr>
                        </thead>
                        <tbody data-repeater-list="List_stocks">
                            <tr data-repeater-item>
                                <td class="px-4 py-2">
                                    <select name="name" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                                        <option value="" selected disabled>{{ trans('general.select') }}</option>
                                        @forelse ($stocks as $stock)
                                            <option value={{ $stock->id }}>
                                                {{ $stock->name }}
                                            </option>
                                        @empty
                                            <option value="">{{ trans('general.noDataToShow') }}</option>
                                        @endforelse
                                    </select>
                                </td>
                                @if ($type == 1)
                                    <td class="px-4 py-2">
                                        <input type="text" name="manual_num" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" />
                                    </td>
                                    <td class="px-4 py-2">
                                        <input type="date" name="manual_date" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" />
                                    </td>
                                @endif
                                <td class="px-4 py-2">
                                    <input type="number" name="quantity" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" />
                                </td>
                                <td class="px-4 py-2">
                                    <input class="w-full px-3 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 font-medium" data-repeater-delete type="button"
                                        value="{{ trans('general.delete') }}" />
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5" class="px-4 py-4">
                                    <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-medium" data-repeater-create
                                        type="button">{{ trans('stock.new') }}</button>
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
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('.table').repeater({

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