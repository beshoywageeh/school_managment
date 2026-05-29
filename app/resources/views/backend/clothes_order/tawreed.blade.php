@extends('layouts.app')
@section('title')
    {{ trans('stock.income_order') }}
@endsection
@section('content')
    @include('backend.msg')
    <form action="{{ route('clothes_stock.store') }}"method="post" autocomplete="off">
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100">
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <tr>
                        <th class="py-2 px-4 text-right font-medium text-gray-600">
                            <x-input type="text" name="auto_number" value="{{ $auto_number }}" ></x-input>
                        </th>
                        <th class="py-2 px-4 text-right font-medium text-gray-600">
                            <x-input type="text" name="type" value="{{ trans('stock.income_order') }}" disabled></x-input>
                        </th>
                        <th class="py-2 px-4 text-right font-medium text-gray-600">
                            <x-input type="date" name="date" value="{{ date('Y-m-d') }}"></x-input>
                        </th>
                        <th class="py-2 px-4 text-right font-medium text-gray-600">الوقت : {{ date('H:i:s') }}</th>
                    </tr>
                </table>
            </div>
        </div>
            <div class="p-6">
                @csrf
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
                                <th class="px-4 py-2 text-xs font-medium text-gray-500 uppercase">{{ trans('clothes.sales_isset') }}</th>
                                <th class="px-4 py-2 text-xs font-medium text-gray-500 uppercase">{{ trans('report.quantity_total') }}</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @foreach ($clothes as $clothe)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">
                                        <input type="hidden" name="id[]"
                                            value="{{ $clothe->id }}"><span class="text-gray-800 font-medium">{{ $clothe->name }}</span>
                                    </td>
                                    <td class="px-4 py-2 text-gray-600">{{ $clothe->grade->name }}</td>
                                    <td class="px-4 py-2 text-gray-600">{{ $clothe->classroom->name }}</td>
                                    <td class="px-4 py-2">
                                        <input type="text" name="manual_num" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                                    </td>
                                    <td class="px-4 py-2">
                                        <input type="date" name="manual_date" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                                    </td>
                                    <td class="px-4 py-2">
                                        <input type="number" value="0" name="qty[]" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 qty">
                                    </td>
                                    <td class="px-4 py-2">
                                        <input type="number" value="0"name="purchase[]"
                                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 purchase">
                                    </td>
                                    <td class="px-4 py-2">
                                        <input type="number" value="0" name="sales[]" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                                    </td>
                                    <td class="px-4 py-2">
                                        <input type="number" value="0" name="sales_isset[]" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                                    </td>
                                    <td class="px-4 py-2">
                                        <input type="text" disabled value="0"
                                            class="w-full px-3 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-600 total_product">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot class="bg-gray-50">
                            <tr>
                                <td colspan="2" class="px-4 py-2 text-right font-medium text-gray-700">{{ trans('clothes.total_qty') }}</td>
                                <td colspan="2" class="px-4 py-2">
                                    <input type="text" disabled value="0" class="w-full px-3 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-600" id="grand_qty" >
                                </td>
                                <td></td>
                                <td colspan="2" class="px-4 py-2 text-right font-medium text-gray-700">{{ trans('clothes.total_price') }}</td>
                                <td colspan="2" class="px-4 py-2">
                                    <input type="text" disabled value="0" class="w-full px-3 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-600" id="grand_total" >
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="px-6 py-4 border-t border-gray-100 bg-gray-50 flex justify-end">
                <button class="px-6 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 font-medium" type="submit">{{ trans('general.Submit') }}</button>
            </div>
    </div>
        </form>
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