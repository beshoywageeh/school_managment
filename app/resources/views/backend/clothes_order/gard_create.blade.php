@extends('layouts.app')
@section('title')
    {{ trans('stock.inventory_order') }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100">
            <div class="grid grid-cols-4 gap-4 text-center">
                <div>
                    <h6 class="text-gray-700 font-medium">الرقم : {{ $order->auto_number }}</h6>
                </div>
                <div>
                    <h6 class="text-gray-700 font-medium">النوع : {{ trans('stock.inventory_order') }}</h6>
                </div>
                <div>
                    <h6 class="text-gray-700 font-medium">التاريخ : {{ $order->created_at->format('Y-m-d') }}</h6>
                </div>
                <div>
                    <h6 class="text-gray-700 font-medium">الوقت : {{ $order->created_at->format('g : i : s A') }}</h6>
                </div>
            </div>
        </div>
        <form action="{{ route('clothes_gard.submit') }}"method="post" autocomplete="off">
            <div class="p-6">
                @csrf
                <input type="hidden" name="id" value="{{ $order->id }}">
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase"><strong>#</strong></th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase"><strong>{{ trans('Grades.name') }}</strong></th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase"><strong>{{ trans('class_rooms.Name') }}</strong></th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase"><strong>{{ trans('stock.name') }}</strong></th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase"><strong>{{ trans('gard.inv_stock') }}</strong></th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase"><strong>{{ trans('gard.actual_stock') }}</strong></th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase"><strong>{{ trans('gard.different') }}</strong></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @foreach ($stocks as $stock)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2 text-center text-gray-600">{{ $loop->index + 1 }}</td>
                                    <td class="px-4 py-2 text-gray-600">{{ $stock->grade->name }}</td>
                                    <td class="px-4 py-2 text-gray-600">{{ $stock->classroom->name }}</td>
                                    <td class="px-4 py-2">
                                        <label class="text-gray-800 font-medium">{{ $stock->name }}</label>
                                        <input type="hidden" value="{{ $stock->id }}" name="stock_id[]">
                                    </td>
                                    <td class="px-4 py-2">
                                        <input type="text" disabled name="inv_stock[]" class="w-full px-3 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-600 inv_stock"
                                            value="{{ $stock->orders()->sum('quantity_in') + $stock->opening_qty - $stock->orders()->sum('quantity_out') }}" />
                                    </td>
                                    <td class="px-4 py-2">
                                        <input type="number" name="actual_stock[]" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 actual_stock" />
                                    </td>
                                    <td class="px-4 py-2">
                                        <input type="number" disabled name="different[]"
                                            class="w-full px-3 py-2 border border-gray-300 rounded-lg bg-gray-50 font-bold text-gray-800 different" value="0" />
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
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