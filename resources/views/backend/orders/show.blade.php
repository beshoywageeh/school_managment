@extends('layouts.app')
@section('title')
    {{ trans('stock.income_order') }} | {{ $order->auto_number }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="row mb-30">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <button class="btn btn-primary" onclick="printDiv()"><i class="fa fa-print"></i></button>
                </div>
                <div class="card-body">
                    <div class="table-responsive" id="print">
                        <table class="table table-sm table-borderless">
                            <tr>
                                <th>الرقم : {{ $order->auto_number }}</th>
                                <th>النوع :
                                    أمر توريد

                                </th>
                                <th>التاريخ : {{ $order->created_at->format('Y-M-d') }}</th>
                                <th>الوقت : {{ $order->created_at->format('h : i : s A') }}</th>
                            </tr>
                        </table>
                        <table class="table table-sm table-bordered">
                            <thead class="alert-info">
                                <tr>
                                    <th>#</th>
                                    <th>{{ trans('stock.name') }}</th>
                                    <th>{{ trans('stock.manual_num') }}</th>
                                    <th>{{ trans('stock.manual_date') }}</th>
                                    <th>{{ trans('stock.quantity') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($order->stocks as $stock)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $stock->name }}</td>
                                        <td>{{ $stock->pivot->manual }}</td>
                                        <td>{{ $stock->pivot->manual_date }}</td>
                                        <td>{{ number_format($stock->pivot->quantity_in, 2) }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">{{ trans('general.404') }}</td>
                                    </tr>
                                @endforelse
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    @endpush
@endsection
