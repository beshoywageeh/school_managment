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
                    <div class="my-2 text-center flex flex-wrap">
                        <div class="flex-1">
                            <h6>الرقم : {{ $order->auto_number }}</h6>
                        </div>
                        <div class="flex-1">
                            <h6>النوع : {{ trans('stock.inventory_order') }}</h6>
                        </div>
                        <div class="flex-1">
                            <h6>التاريخ : {{ $order->created_at->format('Y-m-d') }}</h6>
                        </div>
                        <div class="flex-1">
                            <h6>الوقت : {{ $order->created_at->format('s : i : g A') }}</h6>
                        </div>
                    </div>
                </div>
                <form action="{{ route('bookSheetsOrder.update_gard') }}"method="post" autocomplete="off">
                    <input type="hidden" name="order_id" value="{{ $order->id }}">
                    <div class="p-6">
                        @csrf
                        <table class="w-full border border-gray-200">
                            <thead>
                                <tr class="my-1">
                                    <th><strong>#</strong></th>
                                    <th><strong>{{ trans('Grades.name') }}</strong></th>
                                    <th><strong>{{ trans('class_rooms.Name') }}</strong></th>
                                    <th><strong>{{ trans('stock.name') }}</strong></th>
                                    <th><strong>{{ trans('gard.inv_stock') }}</strong></th>
                                    <th><strong>{{ trans('gard.actual_stock') }}</strong></th>
                                    <th><strong>{{ trans('gard.different') }}</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order->stocks as $stock)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $stock->grade->name }}</td>
                                        <td>{{ $stock->classroom->name }}</td>
                                        <td>
                                            <label>{{ $stock->name }}</label>
                                            <input type="hidden" value="{{ $stock->id }}" name="stock_id[]">
                                        </td>
                                        <td>
                                            <input type="text" disabled name="inv_stock[]" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all inv_stock"
                                                value="{{ $stock->orders()->sum('quantity_out') - $stock->orders()->sum('quantity_in') + ($stock->opening_qty - $stock->orders()->sum('quantity_out')) }}" />
                                        </td>
                                        <td>
                                            <input type="number" name="actual_stock[]" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all actual_stock"
                                                value="{{ $stock->pivot->actual_stock }}" />
                                        </td>
                                        <td>
                                            <input type="number" disabled name="different[]"
                                                class="font-extrabold w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all different"
                                                value="{{ $stock->pivot->different }}" />
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
