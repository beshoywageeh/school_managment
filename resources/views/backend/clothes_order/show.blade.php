@extends('layouts.app')
@section('title')
    @if ($order->type == 1)
        {{ trans('stock.income_order') }}
    @elseif ($order->type == 2)
        {{ trans('stock.outcome_order') }}
    @elseif ($order->type == 3)
        {{ trans('stock.inventory_order') }}
    @else
    @endif
@endsection
@push('css')
    <style>
        @media print{
            @page{
                size:A5;
                width:210mm;
                height:148mm;
            }
        }
        .table {
            border:3px solid black;
        }
        .table td, .table th {
            border:3px solid black;
        }
        .table th{
            background-color:#ddd;
            font-weight: 1.2rem
        }
    </style>
@endpush
@section('content')
    @include('backend.msg')
    <div class="row mb-30">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-6"></div>
                        <div class="col-lg-6 text-md-right">
                            <button type="button" onclick="printDiv()" class="btn btn-primary"><i class="fa fa-print"></i>
                                {{ trans('general.print') }}</button>
                        </div>
                    </div>
                </div>
                <div class="card-body" id="print">
                    <div class="table-responsive">
                        <table class="table">
                            <tr><td colspan="2"><h6>{{$school->name}}</h6></td></tr>
                            <tr>
                                <th>{{ trans('orders.num') }}</th>
                                <td>{{ $order->auto_number }}</td>
                            </tr>
                            <tr>
                                <th>{{ trans('general.created_at') }}</th>
                                <td>{{ $order->date }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="table-responsive">
                        {{-- @can('orders-index') --}}
                        <table class="table">

                                <tr>
                                    <th>#</th>
                                    <th>{{ trans('stock.name') }}</th>
                                    <th>{{ trans('Grades.name') }}</th>
                                    <th>{{ trans('class_rooms.Name') }}</th>
                                    <th>{{ trans('clothes.sales_price') }}</th>
                                    @if($order->type == 1)
                                    <th>{{ trans('clothes.purchase_price') }}</th>
                                    @endif
                                    <th>{{ trans('stock.quantity') }}</th>
                                    <th>{{ trans('clothes.total_price') }}</th>
                                </tr>

                            <tbody>
                                @forelse ($order->stocks as $stock)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $stock->name }}</td>
                                        <td>{{ $stock->grade->name }}</td>
                                        <td>{{ $stock->classroom->name }}</td>
                                        @if ($order->isset == 1)
                                        <td>{{ Number::currency($stock->sales_price_set,'EGP','ar') }}</td>
                                        @else
                                        <td>{{ Number::currency($stock->sales_price,'EGP','ar') }}</td>
                                        @endif
                                        @if($order->type == 1)
                                        <td>{{ Number::currency($stock->purchase_price,'EGP','ar') }}</td>
                                        @endif
                                        @if ($order->isset == 1)
                                        <td>{{ number_format($stock->pivot->quantity_out, 2) }}</td>
                                        <td>{{ Number::currency($stock->pivot->quantity_out * $stock->sales_price_set, 'EGP','ar') }}</td>
                                        @else
                                        <td>{{ number_format($stock->pivot->quantity_out, 2) }}</td>
                                        <td>{{ Number::currency($stock->pivot->quantity_out * $stock->sales_price, 'EGP','ar') }}</td>
                                        @endif

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan='6'>
                                            {{ trans('general.404') }}
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="{{$order->type==1?6:5}}"><strong>{{trans('general.total')}}</strong></td>
                                    @if ($order->isset == 1)
                                    <td>
                                        {{ number_format($order->stocks->sum(fn($stock) => $stock->pivot->quantity_out),2) }}</td>
                                    <td>
                                        {{ Number::currency($order->stocks->sum(fn($stock) => $stock->pivot->quantity_out * $stock->sales_price_set),'EGP','ar') }}
                                    </td>
                                    @else
                                    <td>
                                        {{ number_format($order->stocks->sum(fn($stock) => $stock->pivot->quantity_out),2) }}</td>
                                    <td>
                                        {{ Number::currency($order->stocks->sum(fn($stock) => $stock->pivot->quantity_out * $stock->sales_price),'EGP','ar') }}
                                    </td>
                                    @endif

                                </tr>
                                <tr>
                                    <td colspan="7">{{Numbers::TafqeetMoney($order->stocks->sum(fn($stock) => $stock->pivot->quantity_out * $stock->sales_price),'EGP')}}</td>
                                </tr>
                            </tfoot>
                        </table>
                        {{-- @endcan --}}
                        @if ($order->type == 2)
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
