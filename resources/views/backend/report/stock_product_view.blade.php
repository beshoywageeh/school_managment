@extends('layouts.report_view')

@section('title')
    {{ trans('report.stock_transaction') }}
@endsection
@section('content')
<htmlpageheader name="page-header">
    <div style="height: 5px; width: 95%; margin: auto;">
        <div style="font-size: 15px; font-weight:bold; margin-top:50px;border-bottom:2px solid black">
            <table class="data-table" style="width:100%">
                <tr>
                    <td class="text-center" width="25%">
                        {!! $school->heading_right !!}
                    </td>
                    <td class="text-center" width="50%">
                        {{ trans('report.period', ['from' => $data['begin'], 'to' => $data['end']]) }}
                    </td>
                    <td class="text-left">
                        @if ($school->image == null)
                            <img class="img-fluid" style="max-width:10%"
                                src="{{ asset('assests/images/loop_labs.png') }}" alt="{{ $school->name }}">
                        @else
                            <img class="img-fluid" style="max-width:10%"
                                src="{{ asset('storage/app/attachments/schools/' . $school->slug . '/' . $school->image->filename) }}"
                                alt="{{ $school->name }}">
                        @endif
                    </td>
                </tr>
            </table>
        </div>
    </div>
</htmlpageheader>
<htmlpagefooter name="page-footer">
    <div style="height: 5px; width: 95%; margin: auto;">
        <div style="font-size: 15px; font-weight:bold; margin-top:50px;border-top:2px solid black">
            <table class="data-table" style="width:100%">
                <tr>
                    <td class="text-right" width="20%">
                        <div class="text-center">
                            <center>

                                {!! $school->footer_right !!}
                            </center>
                        </div>
                    </td>
                    <td class="text-center" width="50%">
                        {PAGENO}
                    </td>
                    <td class="text-left">

                        <center>

                            {!! $school->footer_left !!}
                        </center>

                    </td>
                </tr>
            </table>
        </div>
    </div>
</htmlpagefooter>
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
                    <h5 class="p-2 text-center text-white">{{ $stock->name }}</h5>
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
