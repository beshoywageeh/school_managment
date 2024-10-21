@extends('layouts.app')
@section('title')
    {{ trans('orders.income') }}
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
                                    <a href="{{route('order.store')}}"
                                        class="px-4 btn btn-primary"><strong>{{ trans('stock.income_order') }}</strong></a>
                                @endcan
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
                                            <td><a class="btn btn-outline-primary btn-sm" target="_blank" href="{{ route('order.show', $order->id) }}">{{ $order->auto_number }}</a></td>
                                            <td>{{ $order->stocks_count }}</td>
                                            <td>{{ $order->created_at->format('Y-m-d') }}</td>
                                            <td>{{ $order->updated_at->format('Y-m-d') }}</td>
                                            <td>
                                                <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                                    [
                                                        'type'=>'link',
                                                        'url' => route('order.destroy', $order->id),
                                                        'text' => trans('general.delete'),
                                                        'icon' => 'ti-trash',
                                                        'onclick' => 'confirmation(event)',
                                                        'can' => 'order-delete',
                                                    ],
                                                    [
                                                        'type'=>'link',
                                                        'url' => route('order.edit', $order->id),
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    @endpush
@endsection
