@extends('layouts.pdf', ['school' => $school])

@section('title', trans('report.stock_product'))

@section('header-center')
    <p>{{ trans('report.stock_product') }}</p>
    <br>
    <p>{{ trans('report.print_date', ['date' => date('Y-m-d')]) }}</p>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>#</th>
                        <th>{{ trans('stock.name') }}</th>
                        <th>{{ trans('stock.quantity') }}</th>
                        <th>{{ trans('general.created_at') }}</th>
                        <th>{{ trans('general.updated_at') }}</th>
                    </tr>
                    @forelse ($data['stocks'] as $stock)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $stock->name }}</td>
                            <td>{{ $stock->orders->sum('quantity_in') + $stock->opening_qty - $stock->orders->sum('quantity_out') }}
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
