@extends('layouts.app')
@section('title')
    {{ trans('exchange_bonds.title') }} {{trans('General.new')}}
@endsection
@push('css')
@endpush
@section('content')
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-satistics h-100">
                <div class="card-body">
                    <form action="{{ route('exchange_bonds.store') }}" method="POST">
                        @csrf
                        <div class="mb-3 form-row">
                            <div class="form-group col-md-4">
                                <label for="manual" class="font-weight-bold">{{trans('exchange_bonds.manual')}}</label>
                                <input type="text" name="manual" id="manual" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="student_id" class="font-weight-bold">{{ trans('exchange_bonds.student') }}</label>
                                <input name="student_id" value="{{ $student->id }}" type="hidden">
                                <input type="text" class="form-control" value="{{ $student->name }}" disabled>
                                <input type="text" class="form-control" value="{{ Number::Currency($student->student_account_sum_debit-$student->student_account_sum_credit,'EGP') }}" disabled>
                                
                            </div>
                            <div class="form-group col-md-4">
                                <label for="amount" class="font-weight-bold">{{ trans('exchange_bonds.amount') }}</label>
                                <input type="number" name="amount" id="amount" class="form-control" step="0.01">
                            </div>
                        </div>
                  
                        <div class="mb-3 form-row">
                            <div class="form-group col">
                                <label for="note" class="font-weight-bold">{{ trans('exchange_bonds.note') }}</label>
                                <textarea name="note" id="note" class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-success btn-block">{{ trans('General.Submit') }}</button>
                            </div>
                        </div>
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
@endsection
