@extends('layouts.app')
@section('title')
    @if ($type == 1)
        {{ trans('stock.income_order') }} | {{ $order->auto_number }}
    @elseif ($type == 2)
        {{ trans('stock.outcome_order') }} | {{ $order->auto_number }}
    @elseif ($type == 3)
        {{ trans('stock.gard') }} | {{ $order->auto_number }}
    @else
    @endif
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
                                     @if ($type == 1)
                                        {{ trans('stock.income_order') }}
                                    @elseif ($type == 2)
                                        {{ trans('stock.outcome_order') }}
                                    @elseif ($type == 3)
                                        {{ trans('stock.gard') }}
                                    @else
                                    @endif
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
                                    @if($type==1)
                                    <th>{{ trans('stock.manual_num') }}</th>
                                    <th>{{ trans('stock.manual_date') }}</th>
                                    @endif
                                    <th>{{ trans('stock.quantity') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($order->stocks as $stock)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $stock->name }}</td>
                                        @if ($type == 1)
                                            <td>{{ $stock->pivot->manual }}</td>
                                            <td>{{ $stock->pivot->manual_date }}</td>
                                            <td>{{ number_format($stock->pivot->quantity_in, 2) }}</td>
                                        @endif
                                        @if ($type == 2)
                                            <td>{{ number_format($stock->pivot->quantity_out, 2) }}</td>
                                        @endif
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
