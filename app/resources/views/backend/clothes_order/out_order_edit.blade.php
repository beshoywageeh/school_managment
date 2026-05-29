@extends('layouts.app')
@section('title')
    {{ trans('stock.outcome_order') }} | {{ $order->auto_number }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100">
            <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600" onclick="printDiv()">
                <x-hero-icon name="print" class="w-5 h-5" />
            </button>
        </div>
        <form action="{{ route('clothes_out_order.update') }}" method="POST" id="invo_submit">
            @csrf
            <input type="hidden" name="order_id" value="{{ $order->id }}">
            <div class="p-6" style="min-height: 50vh;">
                <div class="border-b border-gray-200 mb-4 pb-4">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <h6 class="text-gray-700 font-medium">الرقم : {{ $order->auto_number }}</h6>
                        </div>
                        <div>
                            <h6 class="text-gray-700 font-medium">التاريخ : {{ date('Y-m-d') }}</h6>
                        </div>
                        <div>
                            <h6 class="text-gray-700 font-medium">الوقت : {{ date('s : i : g A') }}</h6>
                        </div>
                    </div>
                    <div class="mt-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('student.name') }}</label>
                        <select name="student_id" id="student" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 select2 student">
                            <option value="" selected disabled>{{ trans('general.select') }}</option>
                            @forelse ($students as $student)
                                <option @selected($order->student_id == $student->id) value="{{ $student->id }}">
                                    {{ $student->name }}</option>
                            @empty
                            @endforelse
                        </select>
                    </div>
                </div>
                <form class="overflow-x-auto" id="print">
                    <table class="min-w-full text-sm">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-center font-semibold text-gray-700"><strong>#</strong></th>
                                <th class="px-4 py-2 text-start font-semibold text-gray-700"><strong>{{ trans('stock.name') }}</strong></th>
                                <th class="px-4 py-2 text-start font-semibold text-gray-700"><strong>{{ trans('clothes.sales_price') }}</strong></th>
                                <th class="px-4 py-2 text-start font-semibold text-gray-700"><strong>{{ trans('stock.quantity') }}</strong></th>
                            </tr>
                        </thead>
                        <tbody id="invoice_data" class="divide-y divide-gray-100">
                            @forelse ($order->stocks as $stock)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2 text-center text-gray-600">{{ $loop->index + 1 }}</td>
                                    <td class="px-4 py-2">
                                        <input type="hidden" name="id[]" value="{{ $stock->id }}">
                                        <span class="text-gray-800 font-medium">{{ $stock->name }}</span>
                                    </td>
                                    <td class="px-4 py-2 text-gray-600">{{ $stock->sales_price }}</td>
                                    <td class="px-4 py-2">
                                        <input class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" value="{{ $stock->pivot->quantity_out }}"
                                            name="quantity[]" type="number">
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </form>
            </div>
            <div class="px-6 py-4 border-t border-gray-100 bg-gray-50 flex justify-end">
                <button onclick="document.getElementById('invo_submit').submit();" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-medium"
                    type="submit">{{ trans('general.Submit') }}</button>
            </div>
        </form>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            const table = document.querySelector('#invoice_data');
            $("#student").on("select2:select", function() {
                table.innerHTML =
                    '<tr><td colspan="4" class="px-4 py-8 text-center"><img src="{{ asset('assests/images/ajax-loader.gif') }}"/></td></tr>';
                var select_val = $(this).val();
                $.ajax({
                    url: "{{ URL::to('/ajax/get_clothes/') }}/" + select_val,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        table.innerHTML = '';
                        if (data.length === 0) {
                            table.innerHTML =
                                '<tr><td colspan="4" class="px-4 py-8 text-center bg-red-50 text-red-600 rounded-lg">{{ trans('general.noDataToShow') }}</td></tr>';
                        } else {
                            $.each(data, (index, item) => {
                                var row = `<tr class="hover:bg-gray-50">
    <td class="px-4 py-2 text-center text-gray-600">${index + 1}</td>
    <td class="px-4 py-2"><input type="hidden" name="id[]" value="${item.id}"><span class="text-gray-800 font-medium">${item.name}</span></td>
    <td class="px-4 py-2 text-gray-600">${item.sales_price}</td>
    <td class="px-4 py-2"><input class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" name="quantity[]" value="1" type="number"/></td>
</tr>`;
                                table.innerHTML += row;
                            });
                        };
                    }
                });
            });
        });
    </script>
@endpush