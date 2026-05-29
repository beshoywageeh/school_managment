@extends('layouts.app')
@section('title')
    {{ trans('stock.income_order') }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100">
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <tr>
                        <th class="py-2 px-4 text-right font-medium text-gray-600">
                            <h6>الرقم : {{ $order->auto_number }}</h6>
                        </th>
                        <th class="py-2 px-4 text-right font-medium text-gray-600">
                            <h6>النوع : {{ trans('stock.income_order') }}</h6>
                        </th>
                        <th class="py-2 px-4 text-right font-medium text-gray-600">
                            <h6>التاريخ : {{ $order->date }}</h6>
                        </th>
                        <th class="py-2 px-4 text-right font-medium text-gray-600">الوقت : {{ $order->created_at->format('H : i : s A') }}</th>
                    </tr>
                </table>
            </div>
        </div>
        <form action="{{ route('clothes_stock_submit.update') }}"method="post" autocomplete="off">
            <div class="p-6">
                @csrf
                <input type="hidden" name="order_id" value="{{ $order->id }}">
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm text-center">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-xs font-medium text-gray-500 uppercase">{{ trans('stock.name') }}</th>
                                <th class="px-4 py-2 text-xs font-medium text-gray-500 uppercase">{{ trans('Grades.name') }}</th>
                                <th class="px-4 py-2 text-xs font-medium text-gray-500 uppercase">{{ trans('class_rooms.Name') }}</th>
                                <th class="px-4 py-2 text-xs font-medium text-gray-500 uppercase">{{ trans('stock.manual_num') }}</th>
                                <th class="px-4 py-2 text-xs font-medium text-gray-500 uppercase">{{ trans('stock.manual_date') }}</th>
                                <th class="px-4 py-2 text-xs font-medium text-gray-500 uppercase">{{ trans('stock.quantity') }}</th>
                                <th class="px-4 py-2 text-xs font-medium text-gray-500 uppercase">{{ trans('clothes.purchase_price') }}</th>
                                <th class="px-4 py-2 text-xs font-medium text-gray-500 uppercase">{{ trans('clothes.sales_price') }}</th>
                                <th class="px-4 py-2 text-xs font-medium text-gray-500 uppercase">{{ trans('report.quantity_total') }}</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @foreach ($order->stocks as $stock)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">
                                        <input type="hidden" name="id[]" value="{{ $stock->id }}">
                                        <span class="text-gray-800 font-medium">{{ $stock->name }}</span>
                                    </td>
                                    <td class="px-4 py-2 text-gray-600">{{ $stock->grade->name }}</td>
                                    <td class="px-4 py-2 text-gray-600">{{ $stock->classroom->name }}</td>
                                    <td class="px-4 py-2">
                                        <input type="text" name="manual_num" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
                                            value="{{ $stock->manual_number }}">
                                    </td>
                                    <td class="px-4 py-2">
                                        <input type="date" name="manual_date" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
                                            value="{{ $stock->manual_date }}">
                                    </td>
                                    <td class="px-4 py-2">
                                        <input type="number" value="{{ $stock->pivot->quantity_in }}" name="qty[]"
                                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 qty">
                                    </td>
                                    <td class="px-4 py-2">
                                        <input type="number" value="{{ $stock->purchase_price }}" name="purchase[]"
                                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 purchase">
                                    </td>
                                    <td class="px-4 py-2">
                                        <input type="number" value="{{ $stock->sales_price }}" name="sales[]"
                                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                                    </td>
                                    <td class="px-4 py-2">
                                        <input type="text" disabled
                                            value="{{ $stock->pivot->quantity_in * $stock->purchase_price }}"
                                            class="w-full px-3 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-600 total_product">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot class="bg-gray-50">
                            <tr>
                                <td colspan="2" class="px-4 py-2 text-right font-medium text-gray-700">{{ trans('clothes.total_qty') }}</td>
                                <td colspan="2" class="px-4 py-2">
                                    <input type="text" disabled
                                        value="{{ number_format($order->stocks->sum(fn($stock) => $stock->pivot->quantity_in), 2) }}"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-600" id="grand_qty">
                                </td>
                                <td></td>
                                <td colspan="2" class="px-4 py-2 text-right font-medium text-gray-700">{{ trans('clothes.total_price') }}</td>
                                <td colspan="2" class="px-4 py-2">
                                    <input type="text" disabled
                                        value=" {{ Number::currency($order->stocks->sum(fn($stock) => $stock->pivot->quantity_in * $stock->sales_price), 'EGP', 'ar') }}"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-600" id="grand_total">
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
@endsection
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
            $('.qty').on('input', function() {
                var total = 0;
                $('.qty').each(function() {
                    total += parseFloat($(this).val());
                });
                $('#grand_qty').val(total.toLocaleString('en-EG'));
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.purchase, .qty').on('input', function() {
                var actual_stock = $(this).closest('tr').find('.purchase').val();
                var inv_stock = $(this).closest('tr').find('.qty').val();
                var total_product = parseFloat(actual_stock) * parseFloat(inv_stock);
                $(this).closest('tr').find('.total_product').val(total_product.toLocaleString('en-EG', {
                    style: 'currency',
                    currency: 'EGP'
                }));

                var total = 0;
                $('.total_product').each(function() {
                    total += parseFloat($(this).val().replace(/[^\d\.\-]/g, ''));
                });
                $('#grand_total').val(total.toLocaleString('en-EG', {
                    style: 'currency',
                    currency: 'EGP'
                }));
            });
        });
    </script>
@endpush