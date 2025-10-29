@extends('layouts.app')
@section('title')
    {{ trans('stock.income_order') }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="row mb-30">
        <div class="col">
            <div class="card">
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
                    </div>
                </div>
                <form action="{{ route('bookSheetsOrder.update_tawreed') }}"method="post" autocomplete="off">
                    <input type="hidden" name="order_id" value="{{ $order->id }}">
                    <div class="card-body">
                        @csrf
                        <table class="table text-center table-bordered">
                            <thead>
                                <tr>
                                    <th>{{ trans('stock.name') }}</th>
                                    <th>{{ trans('Grades.name') }}</th>
                                    <th>{{ trans('class_rooms.Name') }}</th>
                                    <th>{{ trans('stock.manual_num') }}</th>
                                    <th>{{ trans('stock.manual_date') }}</th>
                                    <th>{{ trans('stock.quantity') }}</th>
                                    <th>{{ trans('clothes.sales_price') }}</th>
                                    <th>{{ trans('report.quantity_total') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order->stocks as $stock)
                                    <tr>
                                        <td>
                                            <input type="hidden" name="id[]"
                                                value="{{ $stock->id }}">{{ $stock->name }}
                                        </td>
                                        <td>{{ $stock->grade->name }}</td>
                                        <td>{{ $stock->classroom->name }}</td>
                                        <td>
                                            <input type="text" name="manual_num" class="form-control"
                                                value="{{ $order->manual_number }}">
                                        </td>
                                        <td>
                                            <input type="date" name="manual_date" value="{{ $order->manual_date }}"
                                                class="form-control">
                                        </td>
                                        <td>
                                            <input type="number" value="0" name="qty[]" class="form-control qty"
                                                value="{{ $stock->pivot->quantity_in }}">
                                        </td>
                                        <td>
                                            <input type="number" value="0" name="sales[]" class="form-control sales"
                                                value="{{ $stock->sales_price }}">
                                        </td>
                                        <td>
                                            <input type="text" disabled value="0" class="form-control total_product"
                                                value="{{ $stock->pivot->quantity_in * $stock->sales_price }}">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2">{{ trans('clothes.total_qty') }}</td>
                                    <td colspan="2">
                                        <input type="text" disabled value="0" class="form-control" id="grand_qty"
                                            value="{{ $order->stocks->sum(fn($stock) => $stock->pivot->quantity_in) }}">
                                    </td>
                                    <td></td>
                                    <td colspan="2">{{ trans('clothes.total_price') }}</td>
                                    <td colspan="2">
                                        <input type="text" disabled value="0" class="form-control" id="grand_total"
                                            value="{{ $order->stocks->sum(fn($stock) => $stock->pivot->quantity_in * $stock->sales_price) }}">
                                    </td>
                                </tr>
                            </tfoot>
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
            $('.sales, .qty').on('input', function() {
                var actual_stock = $(this).closest('tr').find('.sales').val();
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
