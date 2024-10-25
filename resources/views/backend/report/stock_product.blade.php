@extends('layouts.report_view')

@section('title')
    {{ trans('report.stock_product') }}
@endsection

@section('content')
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
