@extends('layouts.app')
@section('title')
    @if ($type == 1)
        {{ trans('stock.income_order') }} : {{ trans('sidebar.books_sheets') }}
    @endif
    @if ($type == 2)
        {{ trans('stock.outcome_order') }} : {{ trans('sidebar.books_sheets') }}
    @endif
    @if ($type == 3)
        {{ trans('stock.inventory_order') }} : {{ trans('sidebar.books_sheets') }}
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
                                    @can('books_sheets-income_order-create')
                                        <a href="{{ route('bookSheetsOrder.create') }}"
                                            class="px-4 btn btn-primary"><strong>{{ trans('stock.income_order') }}</strong></a>
                                    @endcan
                                @endif
                                @if ($type == 2)
                                    @can('books_sheets-outcome_order-create')
                                        <a href="{{ route('bookSheetsOrder.create_sarf') }}"
                                            class="px-4 btn btn-primary"><strong>{{ trans('stock.outcome_order') }}</strong></a>
                                    @endcan
                                @endif
                                @if ($type == 3)
                                    @can('books_sheets-inventory_order-create')
                                        <a href="{{ route('bookSheetsOrder.create_gard') }}"
                                            class="px-4 btn btn-primary"><strong>{{ trans('stock.inventory_order') }}</strong></a>
                                    @endcan
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
                                        @if ($type == 2)
                                            <th>{{ trans('student.name') }}</th>
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
                                                @if ($order->is_payed == 0 && $order->type == 2)
                                                    <span
                                                        class="badge badge-danger">{{ trans('clothes.not_payed') }}</span>
                                                @endif
                                                @if ($order->is_payed == 1 && $order->type == 2)
                                                    <span class="badge badge-success">{{ trans('clothes.payed') }}</span>
                                                @endif
                                            </td>
                                            @if ($order->type == 2)
                                                <th>{{ $order->students->name }}</th>
                                            @endif

                                            <td>{{ trans('clothes.total_product') . ' ' . $order->stocks()->count('quantity_in') . ' ' . trans('clothes.total_qty') . ' ' . $order->stocks()->sum('quantity_in') - $order->stocks()->sum('quantity_out') }}
                                            </td>
                                            <td>{{ $order->created_at->format('Y-m-d') }}</td>
                                            <td>{{ $order->updated_at ? $order->updated_at->format('Y-m-d') : '' }}
                                            </td>
                                            <td>
                                                @if ($type == 1)
                                                    <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                                        [
                                                            'type' => 'link',
                                                            'url' => route('bookSheetsOrder.destroy', $order->id),
                                                            'text' => trans('general.delete'),
                                                            'icon' => 'ti-trash',
                                                            'onclick' => 'confirmation(event)',
                                                            'can' => 'books_sheets-income_order_delete',
                                                        ],
                                                        [
                                                            'type' => 'link',
                                                            'url' => route('bookSheetsOrder.edit_tawreed', $order->id),
                                                            'text' => trans('general.edit'),
                                                            'icon' => 'ti-pencil',
                                                            'can' => 'books_sheets-income_order-update',
                                                        ],
                                                        [
                                                            'type' => 'link',
                                                            'url' => route('bookSheetsOrder.show', $order->id),
                                                            'text' => trans('general.show'),
                                                            'icon' => 'fa fa-print',
                                                            'can' => 'books_sheets-order_show',
                                                        ],
                                                    ]" />
                                                @endif
                                                @if ($order->is_payed == 1)
                                                    @if ($type == 2)
                                                        <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                                          [
                                                            'type' => 'link',
                                                            'url' => route('bookSheetsOrder.destroy', $order->id),
                                                            'text' => trans('general.delete'),
                                                            'icon' => 'ti-trash',
                                                            'onclick' => 'confirmation(event)',
                                                            'can' => 'books_sheets-outcome_order-delete',
                                                        ],
                                                        [
                                                            'type' => 'link',
                                                            'url' => route('bookSheetsOrder.edit_sarf', $order->id),
                                                            'text' => trans('general.edit'),
                                                            'icon' => 'ti-pencil',
                                                            'can' => 'books_sheets-outcome_order-update',
                                                        ],
                                                        [
                                                            'type' => 'link',
                                                            'url' => route('bookSheetsOrder.show', $order->id),
                                                            'text' => trans('general.show'),
                                                            'icon' => 'fa fa-print',
                                                            'can' => 'books_sheets-order_show',
                                                        ],
                                                            [
                                                                'type' => 'link',
                                                                'url' => route('bookSheetsOrder.pay', $order->id),
                                                                'text' => trans('clothes.pay'),
                                                                'icon' => 'ti-money',
                                                                'can' => 'books_sheets-outcome_order-pay',
                                                            ],
                                                        ]" />
                                                    @endif
                                                @endif
                                                @if ($type == 3)
                                                    <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                                        [
                                                            'type' => 'link',
                                                            'url' => route('bookSheetsOrder.destroy', $order->id),
                                                            'text' => trans('general.delete'),
                                                            'icon' => 'ti-trash',
                                                            'onclick' => 'confirmation(event)',
                                                            'can' => 'books_sheets-inventory_order-delete',
                                                        ],
                                                        [
                                                            'type' => 'link',
                                                            'url' => route('bookSheetsOrder.edit_gard', $order->id),
                                                            'text' => trans('general.edit'),
                                                            'icon' => 'ti-pencil',
                                                            'can' => 'books_sheets-inventory_order-update',
                                                        ],
                                                        [
                                                            'type' => 'link',
                                                            'url' => route('bookSheetsOrder.show', $order->id),
                                                            'text' => trans('general.show'),
                                                            'icon' => 'fa fa-print',
                                                            'can' => 'books_sheets-order_show',
                                                        ],
                                                    ]" />
                                                @endif

                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan='6'>
                                                {{ trans('general.noDataToShow') }}
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
