@extends('layouts.app')
@section('title')
    {{ trans('stock.inventory_order') }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="flex flex-wrap mb-30">
        <div class="flex-1">
            <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                <div class="px-6 py-4 border-b border-gray-200">
                    <div class="text-center flex flex-wrap">
                        <div class="flex-1">
                            <h6><strong>الرقم : {{ $order->auto_number }}</strong></h6>
                        </div>
                        <div class="flex-1">
                            <h6><strong>النوع : {{ trans('stock.inventory_order') }}</strong></h6>
                        </div>
                        <div class="flex-1">
                            <h6><strong>التاريخ : {{ $order->created_at->format('Y-M-d') }}</strong></h6>
                        </div>
                        <div class="flex-1">
                            <h6><strong>الوقت : {{ $order->created_at->format('s : i : g A') }}</strong></h6>
                        </div>
                    </div>
                </div>
                <form action="{{ route('clothes_inventory_order.update') }}" method="post" autocomplete="off">
                    <div class="p-6">
                        @csrf
                        <input type="hidden" name="id" value="{{ $order->id }}">
                        <table class="w-full border border-gray-200">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ trans('stock.name') }}</th>
                                    <th>{{ trans('gard.inv_stock') }}</th>
                                    <th>{{ trans('gard.actual_stock') }}</th>
                                    <th>{{ trans('gard.different') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order->stocks as $stock)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>
                                            <label>{{ $stock->name }}</label>
                                            <input type="hidden" value="{{ $stock->id }}" name="stock_id[]">
                                        </td>
                                        <td>
                                            <input type="text" disabled name="inv_stock[]" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all inv_stock"
                                                value="{{ $stock->orders()->sum('quantity_in') + $stock->opening_qty }}" />
                                        </td>
                                        <td>
                                            <input type="number"
                                                value={{ $stock->orders()->sum('quantity_in') + $stock->opening_qty - $stock->orders()->sum('quantity_out') }}
                                                name="actual_stock[]" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all actual_stock" />
                                        </td>
                                        <td>
                                            <input type="number" disabled name="different[]"
                                                class="font-extrabold w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all different" value="0" />
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    <div class="px-6 py-4 border-t border-gray-200">
                        <div class="text-right">
                            <x-button class="success" type="submit">{{ trans('general.Submit') }}</x-button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('input[type="number"]').on('input', function() {
                    $(this).val($(this).val().replace(/[^0-9\.]/g, ''));
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $('.actual_stock').on('input', function() {
                    var actual_stock = $(this).val();
                    var inv_stock = $(this).closest('tr').find('.inv_stock').val();
                    var different = actual_stock - inv_stock;
                    $(this).closest('tr').find('.different').val(different);
                });
            });
        </script>
    @endpush
@endsection
