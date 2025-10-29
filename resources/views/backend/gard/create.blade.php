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
                    <div class="table-responsive">
                        <table class="table table-sm table-borderless">
                            <tr>
                                <th>الرقم : {{ $order }}</th>
                                <th>النوع : {{ trans('stock.inventory_order') }}</th>
                                <th>التاريخ : {{ now()->format('y-m-d') }}</th>
                                <th>الوقت : {{ now()->format('y-m-d') }}</th>
                            </tr>
                        </table>
                    </div>
                </div>
                    <form action="{{ route('gard.store') }}"method="post" autocomplete="off">
                <div class="card-body">
                    @csrf
                    {{-- <input type="hidden" name="id" value="{{ $order->id }}"> --}}
                    <table class="table table-sm table-bordered">
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
                          @foreach ($stocks as $stock )
                          <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>
                              <label>{{$stock->name}}</label>
                                <input type="hidden" value="{{$stock->id}}" name="stock_id[]">
                            </td>
                                <td>
                                    <input type="text" disabled name="inv_stock[]" class="form-control inv_stock" value="{{$stock->orders()->sum('quantity_in')+$stock->opening_stock- $stock->orders()->sum('quantity_out')}}"/>
                                </td>
                                <td>
                                    <input type="number" name="actual_stock[]" class="form-control actual_stock" />
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
