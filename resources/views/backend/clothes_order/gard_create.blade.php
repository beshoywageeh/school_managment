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
                    <div class="my-2 text-center row">
                        <div class="col"><h6>الرقم : {{ $order->auto_number }}</h6></div>
                        <div class="col"><h6>النوع : {{ trans('stock.inventory_order') }}</h6></div>
                        <div class="col"><h6>التاريخ : {{ $order->created_at->format('Y-m-d') }}</h6></div>
                        <div class="col"><h6>الوقت : {{ $order->created_at->format('g : i : s A') }}</h6></div>
                    </div>
                </div>
                <form action="{{ route('clothes_gard.submit') }}"method="post" autocomplete="off">
                    <div class="card-body">
                        @csrf
                        <input type="hidden" name="id" value="{{ $order->id }}">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="my-1">
                                    <th><strong>#</strong></th>
                                    <th><strong>{{ trans('Grades.name') }}</strong></th>
                                    <th><strong>{{ trans('class_rooms.Name') }}</strong></th>
                                    <th><strong>{{ trans('stock.name') }}</strong></th>
                                    <th><strong>{{ trans('gard.inv_stock') }}</strong></th>
                                    <th><strong>{{ trans('gard.actual_stock') }}</strong></th>
                                    <th><strong>{{ trans('gard.different') }}</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($stocks as $stock)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $stock->grade->name }}</td>
                                        <td>{{ $stock->classroom->name }}</td>
                                        <td>
                                            <label>{{ $stock->name }}</label>
                                            <input type="hidden" value="{{ $stock->id }}" name="stock_id[]">
                                        </td>
                                        <td>
                                            <input type="text" disabled name="inv_stock[]" class="form-control inv_stock"
                                                value="{{ $stock->orders()->sum('quantity_in') + $stock->opening_qty - $stock->orders()->sum('quantity_out') }}" />
                                        </td>
                                        <td>
                                            <input type="number" name="actual_stock[]" class="form-control actual_stock" />
                                        </td>
                                        <td>
                                            <input type="number" disabled name="different[]"
                                                class="font-extrabold form-control different" value="0" />
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
