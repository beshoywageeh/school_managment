@extends('layouts.app')
@section('title')
    {{ trans('labs.index') }} | {{ trans('General.show') }} | {{ $laboratory->main_location->location }} |
    {{ $laboratory->sub_location }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="row mb-30">
        <div class="col">

            <div class="card">
                <div class="card-header">
                    <div class="mt-2 text-center row">
                        <div class="col">
                            <h4>{{ $laboratory->main_location->location }}</h4>
                        </div>
                        <div class="col">
                            <h4>{{ $laboratory->sub_location }}</h4>
                        </div>
                        <div class="col">
                            <h4></h4>
                        </div>
                        <div class="col"> <button class="btn btn-primary"
                                onclick="printDiv()">{{ trans('general.print') }}</button></div>
                    </div>
                </div>
                <div class="card-body" id="print">
                    <div class="table-responsive">
                        <table class="table table-bordered">

                            @forelse ($laboratory->orders as $order)
                            <tr><td colspan="2">{{$order->auto_number}}</td>
                            <td colspan="2">{{$order->created_at->format('Y-m-d')}}</td></tr>
                            <tr>
                                <th>#</th>
                                <th>{{ trans('stock.name') }}</th>
                                <th>{{ trans('stock.quantity') }}</th>
                                <th>{{ trans('stock.current_stock') }}</th>
                            </tr>
                            @foreach ($order->stocks as $stock)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $stock->name }}</td>
                                <td>{{ $order->pivot->quantity_out }}</td>
                                <td></td>
                            </tr>
                            @endforeach
                            @empty
                                <tr>
                                    <td colspan="4">{{ trans('General.noDataToShow') }}</td>
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
@push('scripts')
@endpush
