@extends('layouts.app')
@section('title')
{{ trans('stock.inventory_order') }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="row mb-30">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="text-center row">
                        <div class="col">
                            <h6><strong>الرقم : {{ $order->auto_number }}</strong></h6>
                        </div>
                        <div class="col">
                            <h6><strong>النوع : {{ trans('stock.inventory_order') }}</strong></h6>
                        </div>
                        <div class="col">
                            <h6><strong>التاريخ : {{ $order->created_at->format('Y-M-d') }}</strong></h6>
                        </div>
                        <div class="col">
                            <h6><strong>الوقت : {{ $order->created_at->format('s : i : g A') }}</strong></h6>
                        </div>
                    </div>
                </div>
                    <form action="{{ route('clothes_inventory_order.update') }}" method="post" autocomplete="off">
                <div class="card-body">
                    @csrf
                    <input type="hidden" name="id" value="{{ $order->id }}">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ trans('stock.name') }}</th>
                                <th>{{ trans('gard.inv_stock') }}</th>
                                <th>{{ trans('gard.actual_stock') }}</th>
                                <th>{{ trans('gard.different') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($order->stocks as $stock )
                          <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>
                              <label>{{$stock->name}}</label>
                                <input type="hidden" value="{{$stock->id}}" name="stock_id[]">
                            </td>
                                <td>
                                    <input type="text" disabled name="inv_stock[]" class="form-control inv_stock" value="{{$stock->orders()->sum('qty_in')+$stock->opening_qty }}"/>
                                </td>
                                <td>
                                    <input type="number" value={{$stock->orders()->sum('qty_in')+$stock->opening_qty-$stock->orders()->sum('qty_out')}} name="actual_stock[]" class="form-control actual_stock" />
                                </td>
                            <td>
                                <input type="number" disabled name="different[]" class="font-extrabold form-control different" value="0" />
                            </td>
                        </tr>
                          @endforeach
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
