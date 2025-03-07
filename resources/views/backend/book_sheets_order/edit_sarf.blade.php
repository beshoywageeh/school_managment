@extends('layouts.app')
@section('title')
    {{ trans('stock.income_order') }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="row mb-30">
        <div class="col">
            <div class="card">
                <form action="{{ route('bookSheetsOrder.update_sarf') }}"method="post" autocomplete="off">
                    @csrf
                    <input type="hidden" name="order_id" value="{{ $order->id }}">
                    <div class="card-header">
                        <div class="text-center row">
                            <div class="col">
                                <h6>الرقم : {{ $order->auto_number }}</h6>
                            </div>
                            <div class="col">
                                <h6>النوع : {{ trans('stock.income_order') }}</h6>
                            </div>
                            <div class="col">
                                <h6>التاريخ : {{ $order->date }}</h6>
                            </div>
                            <div class="col">
                                <h6>الوقت : {{ $order->created_at->format('g:i:s') }}</h6>
                            </div>
                            <div class="col">
                                <div class="form-group">
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
                    <div class="card-body">
                        <table class="table text-center table-bordered">
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
                                        <td><input class="form-control" name="quantity[]" value="1" type="number"
                                                value="{{ $stock->pivot->quantity_out }}" /></td>
                                        <td>{{ $stock->sales_price }}</td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <div class="text-md-right">
                            <button class="btn btn-success" type="submit">{{ trans('general.Submit') }}</button>
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
<td><input class="form-control" name="quantity[]" value="1" type="number"/></td>
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
