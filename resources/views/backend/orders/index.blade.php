@extends('layouts.app')
@section('title')
    @if ($type == 1)
        {{ trans('stock.income_order') }}
    @elseif ($type == 2)
        {{ trans('stock.outcome_order') }}
    @elseif ($type == 3)
        {{ trans('stock.inventory_order') }}
    @else
    @endif
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
                                @if ($type == 1)
                                    @can('stocks-income_order')
                                        <a href="{{ route('order.store') }}"
                                            class="px-4 btn btn-primary"><strong>{{ trans('stock.income_order') }}</strong></a>
                                    @endcan
                                @elseif ($type == 2)
                                    @can('stocks-outcome_order')
                                        <button data-toggle="modal" data-target="#CreateTransfer"
                                            class="px-4 btn btn-primary"><strong>{{ trans('stock.outcome_order') }}</strong></button>
                                    @endcan
                                @elseif ($type == 3)
                                    <a href="{{ route('gard.create') }}"
                                        class="px-4 btn btn-primary"><strong>{{ trans('stock.inventory_order') }}</strong></a>
                                @else
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        {{-- @can('orders-index') --}}
                        <table class="table table-bordered table-sm" id="datatable">
                            <thead class="alert-info">
                                <tr>
                                    <th>#</th>
                                    <th>{{ trans('orders.num') }}</th>
                                    <th>{{ trans('orders.product_count') }}</th>
                                    <th>{{ trans('general.created_at') }}</th>
                                    <th>{{ trans('general.updated_at') }}</th>
                                    <th>{{ trans('General.actions') }}</th>
                                </tr>
                                </theadv>
                            <tbody>
                                @forelse ($orders as $order)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td><a class="btn btn-outline-primary btn-sm" target="_blank"
                                                @if ($type == 1) href="{{ route('order.show', $order->id) }}" @endif
                                                @if ($type == 2) href="{{ route('outorder.show', $order->id) }}" @endif
                                                @if ($type == 3) href="{{ route('gard.show', $order->id) }}" @endif>{{ $order->auto_number }}</a>
                                        </td>
                                        <td>{{ $order->stocks_count }}</td>
                                        <td>{{ $order->created_at->format('Y-m-d') }}</td>
                                        <td>{{ $order->updated_at->format('Y-m-d') }}</td>
                                        <td>
                                            @if ($type == 1)
                                                <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                                    [
                                                        'type' => 'link',
                                                        'url' => route('order.destroy', $order->id),
                                                        'text' => trans('general.delete'),
                                                        'icon' => 'ti-trash',
                                                        'onclick' => 'confirmation(event)',
                                                        'can' => 'order-delete',
                                                    ],
                                                    [
                                                        'type' => 'link',
                                                        'url' => route('order.edit', $order->id),
                                                        'text' => trans('general.edit'),
                                                        'icon' => 'ti-pencil',
                                                        'can' => 'order-edit',
                                                    ],
                                                ]" />
                                            @elseif ($type == 2)
                                                <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                                    [
                                                        'type' => 'link',
                                                        'url' => route('outorder.destroy', $order->id),
                                                        'text' => trans('general.delete'),
                                                        'icon' => 'ti-trash',
                                                        'onclick' => 'confirmation(event)',
                                                        'can' => 'out_order-delete',
                                                    ],
                                                    [
                                                        'type' => 'link',
                                                        'url' => route('outorder.edit', $order->id),
                                                        'text' => trans('general.edit'),
                                                        'icon' => 'ti-pencil',
                                                        'can' => 'out_order-edit',
                                                    ],
                                                ]" />
                                            @elseif ($type == 3)
                                                <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                                    [
                                                        'type' => 'link',
                                                        'url' => route('gard.destroy', $order->id),
                                                        'text' => trans('general.delete'),
                                                        'icon' => 'ti-trash',
                                                        'onclick' => 'confirmation(event)',
                                                        'can' => 'stocks-inventory_delete',
                                                    ],
                                                    [
                                                        'type' => 'link',
                                                        'url' => route('gard.edit', $order->id),
                                                        'text' => trans('general.edit'),
                                                        'icon' => 'ti-pencil',
                                                        'can' => 'stocks-inventory_edit',
                                                    ],
                                                ]" />
                                            @else
                                                1
                                            @endif
                                        </td>
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
                        {{-- @endcan --}}
                        @if ($type == 2)
                            @include('backend.orders.transfer_create')
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    @endpush
@endsection
