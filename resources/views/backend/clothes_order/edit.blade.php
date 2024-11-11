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
                    <div class="table-responsive">
                        <table class="table table-sm table-borderless">
                            <tr>
                                <th>
                                    <h6>الرقم : {{ $order->auto_number }}</h6>
                                </th>
                                <th>
                                    <h6>النوع : {{ trans('stock.income_order') }}</h6>
                                </th>
                                <th>
                                    <h6>التاريخ : {{ $order->date }}</h6>
                                </th>
                                <th>الوقت : {{ $order->created_at->format('H : i : s A') }}</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <form action="{{ route('clothes_stock_submit.update') }}"method="post" autocomplete="off">
                    <div class="card-body">
                        @csrf
                        <input type="hidden" name="order_id" value="{{ $order->id }}">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>{{ trans('stock.name') }}</th>
                                    <th>{{ trans('Grades.name') }}</th>
                                    <th>{{ trans('class_rooms.Name') }}</th>
                                    <th>{{ trans('stock.manual_num') }}</th>
                                    <th>{{ trans('stock.manual_date') }}</th>
                                    <th>{{ trans('stock.quantity') }}</th>
                                    <th>{{ trans('clothes.purchase_price') }}</th>
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
                                        <td>{{$stock->grade->name}}</td>
                                        <td>{{$stock->classroom->name}}</td>
                                        <td>
                                            <input type="text" name="manual_num" class="form-control" value="{{$stock->manual_number}}">
                                        </td>
                                        <td>
                                            <input type="date" name="manual_date" class="form-control" value="{{$stock->manual_date}}">
                                        </td>
                                        <td>
                                            <input type="number" value="{{$stock->pivot->qty_in}}" name="qty[]" class="form-control qty">
                                        </td>
                                        <td>
                                            <input type="number" value="{{$stock->purchase_price}}" name="purchase[]" class="form-control purchase">
                                        </td>
                                        <td>
                                            <input type="number" value="{{$stock->sales_price}}" name="sales[]" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" disabled  value="{{$stock->pivot->qty_in * $stock->purchase_price}}" class="form-control total_product">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2">{{trans('clothes.total_qty')}}</td>
                                    <td colspan="2">
                                        <input type="text"   disabled value="{{ number_format($order->stocks->sum(fn($stock) => $stock->pivot->qty_in),2) }}" class="form-control" id="grand_qty">
                                    </td>
                                    <td></td>
                                    <td colspan="2">{{trans('clothes.total_price')}}</td>
                                    <td colspan="2">
                                        <input type="text"  disabled value=" {{ Number::currency($order->stocks->sum(fn($stock) => $stock->pivot->qty_in * $stock->sales_price),'EGP','ar') }}" class="form-control" id="grand_total">
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
            $('.purchase, .qty').on('input', function() {
                var actual_stock = $(this).closest('tr').find('.purchase').val();
                var inv_stock = $(this).closest('tr').find('.qty').val();
                var total_product = parseFloat(actual_stock) * parseFloat(inv_stock);
                $(this).closest('tr').find('.total_product').val(total_product.toLocaleString('en-EG', {style: 'currency', currency: 'EGP'}));

                var total = 0;
                $('.total_product').each(function() {
                    total += parseFloat($(this).val().replace(/[^\d\.\-]/g, ''));
                });
                $('#grand_total').val(total.toLocaleString('en-EG', {style: 'currency', currency: 'EGP'}));
            });
        });
    </script>


@endpush