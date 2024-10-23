@extends('layouts.app')
@section('title')
    {{ trans('stock.title') }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="row mb-30">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-6"></div>
                        <div class="col-lg-6 text-md-right">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                @can('stocks-income_order')
                                    <a href="{{ route('order.store') }}"
                                        class="px-4 btn btn-primary"><strong>{{ trans('stock.income_order') }}</strong></a>
                                @endcan
                                @can('stocks-outcome_order')
                                    <button data-toggle="modal" data-target="#CreateTransfer"
                                        class="px-4 btn btn-primary"><strong>{{ trans('stock.outcome_order') }}</strong></button>
                                @endcan
                                @can('stocks-inventory_order')
                                    <a href="{{ route('gard.create') }}"
                                        class="px-4 btn btn-primary"><strong>{{ trans('stock.inventory_order') }}</strong></a>
                                @endcan
                                @can('stocks-create')
                                    <button data-toggle="modal" data-target="#newItem"
                                        class="px-4 btn btn-success"><strong>{{ trans('general.new') }}</strong></button>
                                @endcan
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        @can('stocks-index')
                            <table class="table table-bordered table-sm">
                                <thead class="alert-info">
                                    <tr>
                                        <th>#</th>
                                        <th>{{ trans('stock.name') }}</th>
                                        <th>{{ trans('stock.opening_balance') }}</th>
                                        <th>{{ trans('stock.opening_date') }}</th>
                                        <th>{{ trans('stock.current_stock') }}</th>
                                        <th>{{ trans('General.actions') }}</th>
                                    </tr>
                                    </theadv>
                                <tbody>
                                    @forelse ($stocks as $stock)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $stock->name }}</td>
                                            <td>{{ $stock->opening_stock }}</td>
                                            <td>{{ $stock->opening_stock_date }}</td>
                                            <td>{{ $stock->orders()->sum('quantity_in') + $stock->opening_stock - $stock->orders()->sum('quantity_out') + $stock->gard()->sum('quantity') }}
                                            </td>
                                            <td> <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                                [
                                                    'type' => 'link',
                                                    'url' => route('stock.destroy', $stock->id),
                                                    'text' => trans('general.delete'),
                                                    'icon' => 'ti-trash',
                                                    'onclick' => 'confirmation(event)',
                                                    'can' => 'stock-delete',
                                                ],
                                            ]" /></td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan='6'>
                                                {{ trans('general.404') }}
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
        @include('backend.stocks.create')
        @include('backend.orders.transfer_create')
    </div>
    @push('scripts')
    @endpush
@endsection
