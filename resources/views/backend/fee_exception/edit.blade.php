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
                    <form id="form-with-multiple-column" class="max-w-full" action="{{ route('except_fee.update') }}"
                          method="post">

                        @csrf

                        <input type="hidden" name="id" value="{{$excptionFees->id}}">

                        <div class="row">
                            <div class="col">
                                <label for="">{{trans('Recipt_payments.name')}}</label>
                                <select name="student_id" id="tom-select" class="form-control">

                                    <option value="{{$excptionFees->students->id}}">{{$excptionFees->students->name}}</option>

                                </select>
                            </div>
                            <div class="col">
                                <label for="">{{trans('ExcptionFee.amount')}}</label>
                                <input type="number" class="form-control" name="amount" value="{{$excptionFees->amount}}">
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
