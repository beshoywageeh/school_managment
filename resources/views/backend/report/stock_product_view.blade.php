<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ trans('report.stock_transaction') }}</title>
</head>
<style>
    body {
        font-size: 0.875rem;
        text-align: center !important;
    }

    .table {
        border: 1px solid black !important;
        width: 100%;
        border-collapse: collapse;
        text-align:center;
    }

    .table td,
    .table th {
        border: 1px solid black !important;
        border-collapse: collapse;
        padding: 3px;
    }

    .table th {
        font-weight: 1.2rem !important;
    }

    p {
        margin: 0;
        padding: 0;
    }

    #heading {
        padding-top: 15px;
        padding-bottom: 15px;
    }

    .text-right {
        text-align: right;
    }

    .text-left {
        text-align: left;
    }

    @page {
        header: page-header;
        footer: page-footer;
    }
</style>
<body>
    <div class="container-fluid">
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
                    @forelse ($data['stocks'] as $order)
                        @if ($loop->first)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $data['stock']->name }}</td>
                                <td>{{ $data['stock']->opening_stock_date }}</td>
                                <td colspan="4">
                                     <h6>{{ trans('report.opening_stock') }}
                                        &nbsp;&nbsp;===========>&nbsp;&nbsp;{{ number_format($data['stock']->opening_stock, 2) }}
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
                            <td>{{ number_format($order['total'] + $data['stock']->opening_stock, 2) }}</td>
                        </tr>
                    @empty
                        <tr class="text-center alert-info">
                            <td colspan="7">{{ trans('report.no_data_found') }}</td>
                        </tr>
                    @endforelse
                    <tfoot>
                        <tr>
                            <th colspan='4'>{{ trans('report.total') }}</th>
                            <th>{{ number_format($data['stock']->orders->sum('pivot.quantity_in')+$data['stock']->opening_stock, 2) }}</th>
                            <th>{{ number_format($data['stock']->orders->sum('pivot.quantity_out'), 2) }}</th>
                            <th>{{ number_format($order['total']+ $data['stock']->opening_stock, 2) }}</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <htmlpageheader name="page-header">
        <div style="height: 5px; width: 95%; margin: auto;">
            <div style="font-size: 15px; font-weight:bold; margin-top:50px;border-bottom:2px solid black">
                <table class="data-table" style="width:100%">
                    <tr>
                        <td class="text-center" width="25%">
                            <center>

                            </center>
                        </td>
                        <td class="text-center" width="50%">
                            <center>
                                <p>{{trans('report.product_trans',['product'=>$data['stock']->name])}}</p>
                                <br>
                                <p>{{trans('report.print_date',['date'=>date('Y-m-d')])}}</p>
                            </center>
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
                            <center>

                                {PAGENO}
                            </center>
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
</body>
</html>

