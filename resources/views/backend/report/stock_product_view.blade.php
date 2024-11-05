@extends('layouts.report_view')

@section('title')
    {{ trans('report.stock_transaction') }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h4>{{ trans('report.stock_transaction') }}</h4>
                <h4>{{ trans('report.print_date') }} | {{ date('Y-m-d') }}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="bg-primary">
                    <h5 class="text-center text-white p-2">{{ $stock->name }}</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>#</th>
                        <th>{{ trans('report.auto_number') }}</th>
                        <th>{{ trans('general.created_at') }}</th>
                        <th>{{ trans('report.type') }}</th>
                        <th>{{ trans('report.quantity_in') }}</th>
                        <th>{{ trans('report.quantity_out') }}</th>
                        <th>{{ trans('report.quantity_total') }}</th>
                    </tr>
                    @forelse ($stocks as $order)
                        @if ($loop->first)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $stock->name }}</td>
                                <td>{{ $stock->opening_stock_date }}</td>
                                <td colspan="4">
                                     <h6>{{ trans('report.opening_stock') }}
                                        &nbsp;&nbsp;===========>&nbsp;&nbsp;{{ number_format($stock->opening_stock, 2) }}
                                    </h6>
                                </td>
                            </tr>
                        @endif
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $order['stk']->auto_number }}</td>
                            <td>{{ $order['stk']->created_at->format('Y-m-d') }}</td>
                            <td>
                                @if ($order['stk']->type == '1')
                                    {{ trans('report.inorder') }}
                                @elseif($order['stk']->type == '2')
                                    {{ trans('report.outorder') }}
                                @else
                                    {{ trans('report.inventory') }}
                                @endif
                            </td>
                            <td>{{ number_format($order['stk']->pivot->quantity_in, 2) }}</td>
                            <td>{{ number_format($order['stk']->pivot->quantity_out, 2) }}</td>
                            <td>{{ number_format($order['total'] + $stock->opening_stock, 2) }}</td>
                        </tr>
                    @empty
                        <tr class="text-center alert-info">
                            <td colspan="7">{{ trans('report.no_data_found') }}</td>
                        </tr>
                    @endforelse
                    <tfoot>
                        <tr>
                            <th colspan='4'>{{ trans('report.total') }}</th>
                            <th>{{ number_format($stock->orders->sum('pivot.quantity_in')+$stock->opening_stock, 2) }}</th>
                            <th>{{ number_format($stock->orders->sum('pivot.quantity_out'), 2) }}</th>
                            <th>{{ number_format($order['total']+ $stock->opening_stock, 2) }}</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
