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
                                <th>الرقم : {{ $order->auto_number }}</th>
                                <th>النوع : @if ($order->type == 1)
                                        أمر توريد
                                    @elseif($order->type == 2)
                                        أمر صرف
                                    @else
                                        أمر جرد
                                    @endif
                                </th>
                                <th>التاريخ : {{ $order->created_at->format('Y-M-d') }}</th>
                                <th>الوقت : {{ $order->created_at->format('h : i : s A') }}</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <form action="{{ route('stock_submit.store') }}"method="post" autocomplete="off">
                        <div class="card-body">
                        @csrf
                        <input type="hidden" name="id" value="{{ $order->id }}">
                        <table class="table table-sm table-bordered">
                            <thead>
                                <tr>
                                    <th>{{ trans('stock.name') }}</th>
                                    <th>{{ trans('stock.manual_num') }}</th>
                                    <th>{{ trans('stock.manual_date') }}</th>
                                    <th>{{ trans('stock.quantity') }}</th>
                                    <th>{{ trans('General.delete') }}</th>
                                </tr>
                            </thead>
                            <tbody data-repeater-list="List_stocks">
                                <tr data-repeater-item>
                                    <td>
                                        <input type="text" list="stocks_stock" name="stock_name" class="form-control">
                                        <datalist id="stocks_stock">
                                            @forelse ($stocks as $stock)
                                                <option value={{ $stock->name }}>
                                                @empty
                                                <option value="">{{ trans('General.noDataToShow') }}</option>
                                            @endforelse
                                        </datalist>
                                    </td>
                                    <td>
                                        <input type="text" name="manual_num" class="form-control" />
                                    </td>
                                    <td>
                                        <input type="date" name="manual_date" class="form-control" />
                                    </td>
                                    <td>
                                        <input type="number" name="quantity" class="form-control" />
                                    </td>
                                    <td>
                                        <input class="btn btn-danger btn-block" data-repeater-delete type="button"
                                            value="{{ trans('General.delete') }}" />
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="5">
                                        <button class="btn btn-primary" data-repeater-create
                                            type="button">{{ trans('stock.new') }}</button>
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
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('.table').repeater({

                    show: function() {
                        $(this).slideDown();
                    },
                    hide: function(deleteElement) {
                        $(this).slideUp(deleteElement);
                    }
                });
            });
        </script>
    @endpush
@endsection
