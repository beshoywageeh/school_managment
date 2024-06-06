@extends('layouts.app')
@section('title')
    {{ trans('general.edit') }} | {{trans('Recipt_payments.title')}}
@endsection
@section('content')
    <div class="mb-4 row">
        <div class="col">
            @include('backend.msg')
            <div class="card">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="col">
                            <h4></h4>
                        </div>
                    </div>
                    <form id="form-with-multiple-column" class="max-w-full" action="{{ route('payment_parts.update') }}"
                          method="post">

                        @csrf

                        <input type="hidden" name="id" value="{{$paymentParts->id}}">

                        <div class="row">
                            <div class="col">
                                <label for="">{{trans('student.name')}}</label>
                                <input value="{{$paymentParts->students->name}}" class="form-control" readonly/>
                            </div>
                            <div class="col">
                                <label for="">{{trans('student.grade')}}</label>
                                <input value="{{$paymentParts->grades->name}}" class="form-control" readonly/>
                            </div>
                            <div class="col">
                                <label for="">{{trans('student.class')}}</label>
                                <input value="{{$paymentParts->classes->name}}" class="form-control" readonly/>


                            </div>
                            <div class="col">
                                <label for="">{{trans('academic_year.title')}}</label>
                                <input
                                    value="{{\Carbon\Carbon::parse($paymentParts->year->year_start)->format('Y')}}-{{\Carbon\Carbon::parse($paymentParts->year->year_end)->format('Y')}}"
                                    class="form-control" readonly/>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="">{{trans('ExcptionFee.amount')}}</label>
                                <input type="number" class="form-control" name="amount"
                                       value="{{$paymentParts->amount}}">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col text-md-right">
                                <button class="button" type="submit">{{ trans('General.Submit') }}</button>
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
