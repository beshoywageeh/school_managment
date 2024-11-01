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
                                        <a href="{{ route('clothes_order.tawreed') }}"
                                            class="px-4 btn btn-primary"><strong>{{ trans('stock.income_order') }}</strong></a>
                                    @endcan
                                @elseif ($type == 2)
                                    @can('stocks-outcome_order')

                                    @endcan
                                @elseif ($type == 3)

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
                                        <td><a class="btn btn-outline-primary btn-sm"
                                                target="_blank"href="{{ route('clothes_order.show', $order->id) }}">
                                                {{ $order->auto_number }}</a>
                                        </td>
                                        <td>{{ trans('clothes.total_product') . ' ' . $order->stocks()->count('qty_in') . ' ' . trans('clothes.total_qty') . ' ' . $order->stocks()->sum('qty_in') }}
                                        </td>
                                        <td>{{ $order->created_at->format('Y-m-d') }}</td>
                                        <td>{{ $order->updated_at ? $order->updated_at->format('Y-m-d') : '' }}</td>
                                        <td>                                                <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                                    [
                                                        'type' => 'link',
                                                        'url' => route('clothes_order.delete', $order->id),
                                                        'text' => trans('general.delete'),
                                                        'icon' => 'ti-trash',
                                                        'onclick' => 'confirmation(event)',
                                                        'can' => 'clothes-income_order_delete',
                                                    ],
                                                    [
                                                        'type' => 'link',
                                                        'url' => route('clothes_order.edit', $order->id),
                                                        'text' => trans('general.edit'),
                                                        'icon' => 'ti-pencil',
                                                        'can' => 'order-edit',
                                                    ],
                                                ]" />

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
