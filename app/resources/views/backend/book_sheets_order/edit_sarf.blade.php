@extends('layouts.app')
@section('title')
    {{ trans('stock.income_order') }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="flex flex-wrap mb-30">
        <div class="flex-1">
            <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                <form action="{{ route('bookSheetsOrder.update_sarf') }}"method="post" autocomplete="off">
                    @csrf
                    <input type="hidden" name="order_id" value="{{ $order->id }}">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <div class="text-center flex flex-wrap">
                            <div class="flex-1">
                                <h6>الرقم : {{ $order->auto_number }}</h6>
                            </div>
                            <div class="flex-1">
                                <h6>النوع : {{ trans('stock.income_order') }}</h6>
                            </div>
                            <div class="flex-1">
                                <h6>التاريخ : {{ $order->date }}</h6>
                            </div>
                            <div class="flex-1">
                                <h6>الوقت : {{ $order->created_at->format('g:i:s') }}</h6>
                            </div>
                            <div class="flex-1">
                                <div class="mb-4">
                                    <label for="">{{ trans('student.name') }}</label>
                                    <select name="student_id" id="student" class="select2 student">
                                        <option value="" selected disabled>{{ trans('general.select') }}</option>
                                        @forelse ($students as $student)
                                            <option value="{{ $student->id }}" @selected($order->student_id == $student->id)>
                                                {{ $student->name }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <table class="w-full text-center border border-gray-200">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ trans('stock.name') }}</th>
                                    <th>{{ trans('stock.quantity') }}</th>
                                    <th>{{ trans('clothes.sales_price') }}</th>
                                </tr>
                            </thead>
                            <tbody id="invoice_data">
                                @forelse ($order->stocks as $stock)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td><input type="hidden"
                                                name="id[]"value="{{ $stock->id }}" />{{ $stock->name }}
                                        </td>
                                        <td><input class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all" name="quantity[]" value="1" type="number"
                                                value="{{ $stock->pivot->quantity_out }}" /></td>
                                        <td>{{ $stock->sales_price }}</td>
                                    </tr>
                                @empty
                                @endforelse
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
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            const table = document.querySelector('#invoice_data');
            $("#student").on("select2:select", function() {
                table.innerHTML =
                    '<tr><td colspan="4"><img src="{{ asset('assests/images/ajax-loader.gif') }}"/></td></tr>';
                var select_val = $(this).val();
                $.ajax({
                    url: "{{ URL::to('/ajax/get_books_sheets/') }}/" + select_val,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        table.innerHTML = '';
                        if (data.length === 0) {
                            table.innerHTML =
                                '<tr><td colspan="4" class="alert alert-danger">{{ trans('general.noDataToShow') }}</td></tr>';
                        } else {
                            $.each(data, (index, item) => {
                                var row = `<tr>
<td>${index + 1}</td>
<td><input type="hidden" name="id[]" value="${item.id}">${item.name}</td>
<td>${item.sales_price}</td>
<td><input class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all" name="quantity[]" value="1" type="number"/></td>
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
