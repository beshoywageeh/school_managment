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
                        <th><strong>{{ trans('Grades.name') }}</strong></th>
                        <th><strong>{{ trans('stock.name') }}</strong></th>
                        <th><strong>{{ trans('clothes.sales_price') }}</strong></th>
                        <th><strong>{{ trans('stock.quantity') }}</strong></th>
                    </tr>
                </thead>
                <tbody id="invoice_data">
                    @forelse ( $order->stocks as $stock )
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$stock->grade->name}}</td>
                        <td>{{$stock->name}}</td>
                        <td>{{($order->isset_order == 1)?Number::currency($stock->sales_price,'EGP','ar'):Number::currency($stock->sales_price_set,'EGP','ar')}}</td>
                        <td>{{number_format($stock->pivot->qty_out,2)}}</td>
                    </tr>
                    @empty
                    @endforelse
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3">{{trans('General.total')}}</td>
                        <td>
                            @if($order->isset== 1)
                            {{ Number::currency($order->stocks->sum(fn($stock) => $stock->pivot->qty_out * $stock->sales_price_set),'EGP','ar') }}
                            @else
                            {{ Number::currency($order->stocks->sum(fn($stock) => $stock->pivot->qty_out * $stock->sales_price),'EGP','ar') }}
                            @endif
                        </td>
                        <td>
                            {{ number_format($order->stocks->sum(fn($stock) => $stock->pivot->qty_out),2) }}</td>
                    </tr>
                </tfoot>

            </table>
        </div>
    </div>
@endsection
@push('js')
    {{-- <script>
        window.print();
        window.href('{{route("clothes_order.index",["type"=>2])}}')
    </script> --}}
@endpush
