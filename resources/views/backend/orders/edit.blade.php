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
                                <th>النوع : @if ($type == 1)
                                        {{ trans('stock.income_order') }}
                                    @elseif ($type == 2)
                                        {{ trans('stock.outcome_order') }}
                                    @elseif ($type == 3)
                                        {{ trans('stock.gard') }}
                                    @else
                                    @endif
                                </th>
                                @if ($type == 2)
                                    <th>إلي : {{ $order->location }}</th>
                                @endif
                                <th>التاريخ : {{ $order->created_at->format('Y-M-d') }}</th>
                                <th>الوقت : {{ $order->created_at->format('h : i : s A') }}</th>
                            </tr>
                        </table>
                        @if ($type == 1)
                            <form action="{{ route('order.update') }}" method="POST">
                            @elseif($type == 2)
                                <form action="{{ route('outorder.update') }}" method="POST">
                                @else
                        @endif
                        @csrf
                        <input type="hidden" name="order_id" value="{{ $order->id }}">
                        <table class="table table-sm table-bordered">
                            <thead class="alert-info">
                                <tr>
                                    <th>#</th>
                                    <th>{{ trans('stock.name') }}</th>
                                    @if ($type == 1)
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
                                        <td><select class="custom-select" name="name[]">
                                                @forelse ($stocks as $stockd)
                                                    <option @selected($stockd->id == $stock->pivot->stock_id) value={{ $stockd->id }}>
                                                        {{ $stockd->name }}</option>
                                                @empty
                                                    <option value="">{{ trans('General.noDataToShow') }}</option>
                                                @endforelse
                                            </select>
                                        </td>
                                        @if ($type == 1)
                                            <td><input type="text" name="manual[]" class="form-control"
                                                    value="{{ $stock->pivot->manual ?? '' }}"></td>
                                            <td><input type="date"
                                                    class="form-control"value="{{ $stock->pivot->manual_date ?? '' }}"
                                                    class="form_control" name="manual_date"></td>
                                        @endif
                                        <td>
                                            @if($type==1)
                                            <input type="number" class="form-control" name="quantity[]"
                                            value="{{ $stock->pivot->quantity_in ?? '' }}">
                                            @elseif($type == 2)
                                            <input type="number" class="form-control" name="quantity[]"
                                            value="{{ $stock->pivot->quantity_out ?? '' }}">
@else
@endif
                                           </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">{{ trans('general.404') }}</td>
                                    </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="5">
                                        <button class="btn btn-primary"
                                            type="submit">{{ trans('General.Submit') }}</button>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    @endpush
@endsection
