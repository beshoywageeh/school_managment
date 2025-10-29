@extends('layouts.app')
@section('title')
@if ($type == 1)
{{ trans('stock.income_order') }}
@elseif ($type == 2)
{{ trans('stock.outcome_order') }}
@elseif ($type == 3)
{{ trans('stock.gard') }}
@else
@endif
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
                                <th>النوع :   @if ($type == 1)
                                    {{ trans('stock.income_order') }}
                                @elseif ($type == 2)
                                    {{ trans('stock.outcome_order') }}
                                @elseif ($type == 3)
                                    {{ trans('stock.gard') }}
                                @else
                                @endif
                                </th>
                                @if($type==2)
                                <th>إلي : {{ $order->location }}</th>
                                @endif
                                <th>التاريخ : {{ $order->created_at->format('Y-M-d') }}</th>
                                <th>الوقت : {{ $order->created_at->format('h : i : s A') }}</th>
                            </tr>
                        </table>
                    </div>
                </div>
                @if ($type == 1)
                    <form action="{{ route('stock_submit.store') }}"method="post" autocomplete="off">
                    @elseif($type == 2)
                        <form action="{{ route('orders.submit_transfer') }}"method="post" autocomplete="off">
                @endif
                <div class="card-body">
                    @csrf
                    <input type="hidden" name="id" value="{{ $order->id }}">
                   <div class="table-responsive">
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <th>{{ trans('stock.name') }}</th>
                                @if ($type == 1)
                                    <th>{{ trans('stock.manual_num') }}</th>
                                    <th>{{ trans('stock.manual_date') }}</th>
                                @endif
                                <th>{{ trans('stock.quantity') }}</th>
                                <th>{{ trans('General.delete') }}</th>
                            </tr>
                        </thead>
                        <tbody data-repeater-list="List_stocks">
                            <tr data-repeater-item>
                                <td>
                                   <select name="name" class="custom-select">
                                        <option value="" selected disabled>{{ trans('general.select') }}</option>
                                        @forelse ($stocks as $stock)
                                            <option value={{ $stock->id }}>
                                                {{ $stock->name }}
                                            </option>
                                            @empty
                                            <option value="">{{ trans('General.noDataToShow') }}</option>
                                        @endforelse
                                    </select>
                                </td>
                                @if ($type == 1)
                                    <td>
                                        <input type="text" name="manual_num" class="form-control" />
                                    </td>
                                    <td>
                                        <input type="date" name="manual_date" class="form-control" />
                                    </td>
                                @endif
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
