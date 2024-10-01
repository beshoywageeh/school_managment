@extends('layouts.app')
@section('title')
    {{ trans('general.new') }} | {{trans('ExcptionFee.title')}}
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
                    <form id="form-with-multiple-column" class="max-w-full" action="{{ route('except_fee.store') }}"
                          method="post">
                        @csrf

                        <div class="row">
                            <div class="col-3">
                                <label for="">{{trans('Recipt_payments.name')}}</label>
                                <select name="student_id" id="" class="custom-select">
                                    <option value="{{$Excpetion->id}}">{{$Excpetion->name}}</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <label for="">{{trans('academic_year.title')}}</label>
                                <select name="acadmic_id" id="" class="custom-select">
                                    @forelse ($acadmincs as $acadminc)
                                    <option value="{{$acadminc->id}}">{{\Carbon\Carbon::parse($acadminc->year_start)->format('Y')}} - {{\Carbon\Carbon::parse($acadminc->year_end)->format('Y')}}</option>
                                    @empty

                                    @endforelse

                                </select>
                            </div>
                            <div class="col-3">
                                <label for="">{{trans('fees.title')}}</label>
                                <select name="fee_id" id="" class="custom-select">
                                    @forelse ($fees as $fee)
                                        <option value="{{$fee->id}}">{{$fee->fees->title}}</option>
                                    @empty
                                        <option value="">No Fee</option>
                                    @endforelse
                            </div>
                            <div class="col-3">
                                <label for="">{{trans('ExcptionFee.amount')}}</label>
                                <input type="number" class="form-control" name="amount">
                            </div>
                        </div>

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
