@extends('layouts.pdf', ['school' => $school])

@section('header-center')
    {{ $data['stock']->name }}
@endsection

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>{{ trans('report.auto_number') }}</th>
                <th>{{ trans('general.created_at') }}</th>
                <th>{{ trans('report.type') }}</th>
                <th>{{ trans('report.quantity_in') }}</th>
                <th>{{ trans('report.quantity_out') }}</th>
                <th>{{ trans('report.quantity_total') }}</th>
            </tr>
        </thead>
        @forelse ($data['total'] as $order)
            @if ($loop->first)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $data['stock']->name }}</td>
                    <td>{{ $data['stock']->opening_stock_date }}</td>
                    <td colspan="4">
                        <h6>{{ trans('report.opening_stock') }}
                            &nbsp;&nbsp;===========>&nbsp;&nbsp;{{ number_format($data['stock']->opening_qty, 2) }}
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
                <td>{{ number_format($order['stk']->quantity_in, 2) }}</td>
                <td>{{ number_format($order['stk']->quantity_out, 2) }}</td>
                <td>{{ number_format($order['total'] + $data['stock']->opening_qty, 2) }}</td>
            </tr>
        @empty
            <tr class="text-center alert-info">
                <td colspan="7">{{ trans('report.no_data_found') }}</td>
            </tr>
        @endforelse
        <tfoot>
            <tr>
                <th colspan='4'>{{ trans('report.total') }}</th>
                <th>{{ number_format($data['stock']->orders->sum('pivot.quantity_in') + $data['stock']->opening_qty, 2) }}
                </th>
                <th>{{ number_format($data['stock']->orders->sum('pivot.quantity_out'), 2) }}</th>
                <th>{{ number_format($order['total'] + $data['stock']->opening_qty, 2) }}</th>
            </tr>
        </tfoot>
    </table>
@endsection
