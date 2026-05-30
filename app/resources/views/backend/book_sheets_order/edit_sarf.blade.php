@extends('layouts.app')
@section('title')
    {{ trans('stock.income_order') }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="flex flex-wrap mb-8">
        <div class="flex-1">
            <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                <form action="{{ route('bookSheetsOrder.update_sarf') }}" method="post" autocomplete="off">
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
                                    <select name="student_id" id="student" class="tom-select student">
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
                                        <td><input class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all" name="quantity[]" type="number"
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
        document.addEventListener('DOMContentLoaded', function() {
            const table = document.querySelector('#invoice_data');
            document.querySelector('#student').addEventListener('change', function() {
                const selectVal = this.value;
                if (!selectVal) return;
                table.innerHTML =
                    '<tr><td colspan="4" class="px-4 py-8 text-center"><svg class="animate-spin h-8 w-8 text-blue-500 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path></svg></td></tr>';
                fetch("{{ URL::to('/ajax/get_books_sheets/') }}/" + selectVal)
                    .then(response => response.json())
                    .then(data => {
                        table.innerHTML = '';
                        if (data.length === 0) {
                            table.innerHTML =
                                '<tr><td colspan="4" class="bg-red-50 text-red-600 px-4 py-3 rounded-lg">{{ trans('general.noDataToShow') }}</td></tr>';
                        } else {
                            data.forEach((item, index) => {
                                var row = `<tr>
<td class="px-4 py-2 text-center text-gray-600">${index + 1}</td>
<td class="px-4 py-2"><input type="hidden" name="id[]" value="${item.id}"><span class="text-gray-800 font-medium">${item.name}</span></td>
<td class="px-4 py-2 text-gray-600">${item.sales_price}</td>
<td class="px-4 py-2"><input class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all" name="quantity[]" value="1" type="number"/></td>
</tr>`;
                                table.innerHTML += row;
                            });
                        }
                    })
                    .catch(error => console.error('Error fetching data:', error));
            });
        });
    </script>
@endpush
