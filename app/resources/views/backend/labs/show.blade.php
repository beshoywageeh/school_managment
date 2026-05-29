@extends('layouts.app')
@section('title')
    {{ trans('labs.index') }} | {{ trans('general.show') }} | {{ $laboratory->main_location->location }} |
    {{ $laboratory->sub_location }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 text-center">
                <div>
                    <h4 class="text-lg font-semibold text-gray-800">{{ $laboratory->main_location->location }}</h4>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-gray-800">{{ $laboratory->sub_location }}</h4>
                </div>
                <div>
                    <h4></h4>
                </div>
                <div>
                    <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600"
                        onclick="printDiv()">{{ trans('general.print') }}</button>
                </div>
            </div>
        </div>
        <div class="p-6" id="print">
            <div class="overflow-x-auto">
                <table class="min-w-full text-sm">

                    @forelse ($laboratory->orders as $order)
                        <tr class="border-b border-gray-200">
                            <td colspan="2" class="px-4 py-2 text-gray-600">{{ trans('stock.manual_num') }} | {{ $order->auto_number }}</td>
                            <td colspan="2" class="px-4 py-2 text-gray-600">{{ trans('stock.manual_date') }} |
                                {{ $order->created_at->format('Y-m-d') }}</td>
                        </tr>
                        <tr class="border-b border-gray-100 bg-gray-50">
                            <th class="px-4 py-2 text-right text-xs font-medium text-gray-500">#</th>
                            <th class="px-4 py-2 text-right text-xs font-medium text-gray-500">{{ trans('stock.name') }}</th>
                            <th class="px-4 py-2 text-right text-xs font-medium text-gray-500">{{ trans('stock.quantity') }}</th>
                            <th class="px-4 py-2 text-right text-xs font-medium text-gray-500">{{ trans('stock.current_stock') }}</th>
                        </tr>
                        @foreach ($order->stocks as $stock)
                            <tr class="border-b border-gray-50">
                                <td class="px-4 py-2 text-gray-600">{{ $loop->index + 1 }}</td>
                                <td class="px-4 py-2 text-gray-800">{{ $stock->name }}</td>
                                <td class="px-4 py-2 text-gray-800 font-medium">{{ $stock->pivot->quantity_out }}</td>
                                <td class="px-4 py-2 text-gray-600"></td>
                            </tr>
                        @endforeach
                    @empty
                        <tr>
                            <td colspan="4" class="px-4 py-8 text-center text-gray-500">{{ trans('general.noDataToShow') }}</td>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
@endpush