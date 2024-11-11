@extends('layouts.invoice_view')
@section('title')
    {{ trans('stock.outcome_order') }} | {{ $order->auto_number }}
@endsection
@section('content')
    <div class="contaier" style="border-bottom:1px solid black; margin-bottom:5px;padding-bottom:5px">
        <div class="row">
            <div class="col">
                <h6>الرقم : {{ $order->auto_number }}</h6>
            </div>
            <div class="col">
                <h6>
                    التاريخ : {{ $order->created_at->format('Y-m-d') }}
                </h6>
            </div>
            <div class="col">
                الوقت : {{ $order->created_at->format('s : i : g A') }}
            </div>
            <div class="col">
                {{$order->students->name}}
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="">
                    <tr>
                        <th><strong>#</strong></th>
                        <th><strong>{{ trans('stock.name') }}</strong></th>
                        <th><strong>{{ trans('clothes.sales_price') }}</strong></th>
                        <th><strong>{{ trans('stock.quantity') }}</strong></th>
                    </tr>
                </thead>
                <tbody id="invoice_data">
                    @forelse ( $order->stocks as $stock )
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$stock->name}}</td>
                        <td>{{$stock->sales_price}}</td>
                        <td>{{$stock->pivot->qty_out}}</td>
                    </tr>
                    @empty
                    @endforelse
                </tbody>
        
            </table>
        </div>
    </div>
@endsection
@push('js')
    <script>
        window.print();
        window.href('{{route("clothes_order.index",["type"=>2])}}')
    </script>
@endpush
