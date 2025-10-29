@extends('layouts.app')
@section('title')
    {{ trans('general.new') }} | {{ trans('ExcptionFee.title') }}
@endsection
@section('content')
    <div class="mb-4 row">
        <div class="col">
            @include('backend.msg')
            <div class="card">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="col">
                            <h4>{{ $Excpetion->name }}</h4>
                        </div>
                    </div>
                    <form id="form-with-multiple-column" class="max-w-full" action="{{ route('except_fee.store') }}"
                        method="post">
                        @csrf
                        <input type="hidden" name="student_id"value="{{ $Excpetion->id }}">
                        <div class="row">

                            <div class="col-6">
                                <label for="">{{ trans('fees.title') }}</label>
                                <select name="fee_id" id="" class="custom-select">
                                    @forelse ($fees as $fee)
                                        <option value="{{ $fee->id }}">{{ $fee->fees->title }}</option>
                                    @empty
                                        <option value="">No Fee</option>
                                    @endforelse
                                </select>
                            </div>
                            <div class="col-6">
                                <label>{{ trans('ExcptionFee.student_account') }}</label>
                                <input type="text" class="form-control" readonly
                                    value={{ Number::currency($Excpetion->StudentAccount->sum('debit') - $Excpetion->StudentAccount->sum('credit'),'EGP') }}>
                            </div>
                            <div class="col-6 ">
                                <label for="">{{ trans('ExcptionFee.amount') }}</label>
                                <input type="number" class="form-control" name="amount">
                            </div>
                        </div>

                        <div class="row mt-4">
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
