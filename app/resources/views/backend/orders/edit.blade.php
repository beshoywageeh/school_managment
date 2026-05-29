@extends('layouts.app')
@section('title')
    @if ($type == 1)
        {{ trans('stock.income_order') }} | {{ $order->auto_number }}
    @elseif ($type == 2)
        {{ trans('stock.outcome_order') }} | {{ $order->auto_number }}
    @elseif ($type == 3)
        {{ trans('stock.gard') }} | {{ $order->auto_number }}
    @else
    @endif
@endsection
@section('content')
    @include('backend.msg')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100 flex justify-between items-center">
            <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600" onclick="printDiv()">
                <x-hero-icon name="print" class="w-5 h-5" />
            </button>
        </div>
        <div class="p-6" id="print">
            <div class="overflow-x-auto mb-6">
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
            @if ($type == 1)
                <form action="{{ route('order.update') }}" method="POST">
            @elseif($type == 2)
                <form action="{{ route('outorder.update') }}" method="POST">
            @else
            @endif
            @csrf
            <input type="hidden" name="order_id" value="{{ $order->id }}">
            <div class="overflow-x-auto">
                <table class="min-w-full text-sm">
                    <thead class="bg-blue-50">
                        <tr>
                            <th class="px-4 py-2 text-center text-xs font-medium text-blue-700 uppercase">#</th>
                            <th class="px-4 py-2 text-start text-xs font-medium text-blue-700 uppercase">{{ trans('stock.name') }}</th>
                            @if ($type == 1)
                                <th class="px-4 py-2 text-start text-xs font-medium text-blue-700 uppercase">{{ trans('stock.manual_num') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-blue-700 uppercase">{{ trans('stock.manual_date') }}</th>
                            @endif
                            <th class="px-4 py-2 text-start text-xs font-medium text-blue-700 uppercase">{{ trans('stock.quantity') }}</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse ($order->stocks as $stock)
                            <tr>
                                <td class="px-4 py-2 text-center text-gray-600">{{ $loop->index + 1 }}</td>
                                <td class="px-4 py-2">
                                    <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" name="name[]">
                                        @forelse ($stocks as $stockd)
                                            <option @selected($stockd->id == $stock->pivot->stock_id) value={{ $stockd->id }}>
                                                {{ $stockd->name }}</option>
                                        @empty
                                            <option value="">{{ trans('general.noDataToShow') }}</option>
                                        @endforelse
                                    </select>
                                </td>
                                @if ($type == 1)
                                    <td class="px-4 py-2"><input type="text" name="manual[]" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
                                            value="{{ $stock->pivot->manual ?? '' }}"></td>
                                    <td class="px-4 py-2"><input type="date"
                                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200"value="{{ $stock->pivot->manual_date ?? '' }}"
                                            name="manual_date"></td>
                                @endif
                                <td class="px-4 py-2">
                                    @if ($type == 1)
                                        <input type="number" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" name="quantity[]"
                                            value="{{ $stock->pivot->quantity_in ?? '' }}">
                                    @elseif($type == 2)
                                        <input type="number" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" name="quantity[]"
                                            value="{{ $stock->pivot->quantity_out ?? '' }}">
                                    @else
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-4 py-8 text-center text-gray-500">{{ trans('general.404') }}</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5" class="px-4 py-4">
                                <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-medium"
                                    type="submit">{{ trans('general.Submit') }}</button>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            </form>
        </div>
    </div>
    @push('scripts')
    @endpush
@endsection