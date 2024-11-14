@extends('layouts.app')
@section('title')
    @if ($type == 1)
        {{ trans('stock.income_order') }} : {{ trans('sidebar.clothes') }}
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
                                    @can('clothes-income_order')
                                        <a href="{{ route('clothes_order.tawreed') }}"
                                            class="px-4 btn btn-primary"><strong>{{ trans('stock.income_order') }}</strong></a>
                                    @endcan
                                @elseif ($type == 2)
                                    @can('clothes-outcome_order')
                                        <button data-toggle="modal" data-target="#Out_order"
                                            class="px-4 btn btn-primary"><strong>{{ trans('stock.outcome_order') }}</strong></button>
                                    @endcan
                                @elseif ($type == 3)
                                    @can('clothes-inventory_order')
                                        <a href="{{ route('clothes.gard') }}"
                                            class="px-4 btn btn-primary"><strong>{{ trans('stock.inventory_order') }}</strong></a>
                                    @endcan
                                @else
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        @if (Auth::user()->hasAnyPermission(['clothes-income_order', 'clothes-outcome_order', 'clothes-inventory_order']))
                            <table class="table table-bordered table-sm" id="datatable">
                                <thead class="alert-info">
                                    <tr>
                                        <th>#</th>
                                        <th>{{ trans('orders.num') }}</th>
                                        @if($type==2)
                                        <th>{{trans('student.name')}}</th>
                                        @endif
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
                                                    @if($order->is_payed == 0)
                                                        <span class="badge badge-danger">{{trans('clothes.not_payed')}}</span>

                                                    @endif
                                                    @if($order->is_payed == 1 && $order->type==1)
                                                        <span class="badge badge-success">{{trans('clothes.payed')}}</span>

                                                    @endif
                                            </td>
                                            @if($order->type==2)
                                            <th>{{$order->students->name}}</th>
                                            @endif

                                                <td>{{ trans('clothes.total_product') . ' ' . $order->stocks()->count('quantity_in') . ' ' . trans('clothes.total_qty') . ' ' . $order->stocks()->sum('quantity_in')-$order->stocks()->sum('quantity_out') }}
                                                </td>
                                            <td>{{ $order->created_at->format('Y-m-d') }}</td>
                                            <td>{{ $order->updated_at ? $order->updated_at->format('Y-m-d') : '' }}
                                            </td>
                                            <td>
                                                @if ($type == 1)
                                                    <x-dropdown-table :buttonText="trans('general.actions')" :items="[
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
                                                            'can' => 'clothes-income_order-update',
                                                        ],
                                                    ]" />
                                                @endif
                                                @if($order->is_payed == 0)
                                                @if ($type == 2)
                                                    <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                                        [
                                                            'type' => 'link',
                                                            'url' => route('clothes_order.delete', $order->id),
                                                            'text' => trans('general.delete'),
                                                            'icon' => 'ti-trash',
                                                            'onclick' => 'confirmation(event)',
                                                            'can' => 'clothes-outcome_order-delete',
                                                        ],
                                                        [
                                                            'type' => 'link',
                                                            'url' => route('clothes_out_order.edit', $order->id),
                                                            'text' => trans('general.edit'),
                                                            'icon' => 'ti-pencil',
                                                            'can' => 'clothes-outcome_order-update',
                                                        ],                                                        [
                                                            'type' => 'link',
                                                            'url' => route('clothes_order.pay', $order->id),
                                                            'text' => trans('clothes.pay'),
                                                            'icon' => 'ti-money',
                                                            'can' => 'clothes-outcome_order-update',
                                                        ],
                                                    ]" />
                                                @endif
                                                @endif
                                                @if ($type == 3)
                                                    <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                                        [
                                                            'type' => 'link',
                                                            'url' => route('clothes_order.delete', $order->id),
                                                            'text' => trans('general.delete'),
                                                            'icon' => 'ti-trash',
                                                            'onclick' => 'confirmation(event)',
                                                            'can' => 'clothes-inventory_order-delete',
                                                        ],
                                                        [
                                                            'type' => 'link',
                                                            'url' => route('clothes_inventory_order.edit', $order->id),
                                                            'text' => trans('general.edit'),
                                                            'icon' => 'ti-pencil',
                                                            'can' => 'clothes-inventory_order-update',
                                                        ],
                                                    ]" />
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
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
@endpush
