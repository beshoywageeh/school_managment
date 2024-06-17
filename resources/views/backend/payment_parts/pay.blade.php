@extends('layouts.app')
@section('title')
    {{ trans('general.pay') }} | {{trans('PaymentParts.title')}}
@endsection
@section('content')
    <div class="mb-4 row">
        <div class="col">
            @include('backend.msg')
            <div class="card">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="col">
                            <input readonly class="form-control" value="{{$part->amount}}"/>
                        </div>

                    </div>
                    <form id="form-with-multiple-column" class="max-w-full" action="{{ route('payment_parts.submit_pay') }}"
                          method="post">

                        @csrf

                        <input type="hidden" name="id" value="{{$part->id}}">

                        <div class="row">
                            <div class="col">
                                <label for="">{{trans('Recipt_payments.name')}}</label>
                                <select name="student_id" id="" class="custom-select">

                                    <option value="{{$part->students->id}}">{{$part->students->name}}</option>

                                </select>
                            </div>

                            <div id="pay_total_div" class="col">
                                <label for="">{{trans('general.pay')}}</label>
                                <input id="amount" type="number" class="form-control" name="amount"
                                       value="{{$part->amount}}">
                            </div>


                        </div>
                        <br>
                        <div class="row">
                            <div class="col text-md-right">
                                <button class="btn btn-success" type="submit">{{ trans('General.Submit') }}</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


    @push('scripts')


    @endpush
@endsection
