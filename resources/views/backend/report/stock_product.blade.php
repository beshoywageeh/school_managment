@extends('layouts.report_view')

@section('title')
    {{ trans('report.stock_product') }}
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
        <div class="col">
            <h4>{{ trans('report.stock_product') }}</h4>
        </div>
        <div class="col">
        <h4> {{ trans('report.print_date') }} | {{ date('Y-m-d') }}</h4>
        </div>
    </div>
<div class="row">
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <tr>
                <th>#</th>
                <th>{{ trans('stock.name') }}</th>
                <th>{{ trans('stock.quantity') }}</th>
                <th>{{ trans('General.created_at') }}</th>
                <th>{{ trans('General.updated_at') }}</th>
            </tr>
            @forelse ($stocks as $stock)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $stock->name }}</td>
                    <td>{{ $stock->orders()->sum('quantity_in') + $stock->opening_stock - $stock->orders()->sum('quantity_out') }}
                    </td>
                    <td>{{ $stock->created_at->format('Y-m-d') }}</td>
                    <td>{{ $stock->updated_at->format('Y-m-d') }}</td>
                </tr>
            @empty
            @endforelse
        </table>
    </div>
</div>
</div>

@endsection
