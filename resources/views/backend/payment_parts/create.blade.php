@extends('layouts.app')
@section('title')
    {{ trans('general.new') }} | {{trans('PaymentParts.title')}}
@endsection
@section('content')
    <div class="mb-4 row">
        <div class="col">
            @include('backend.msg')
            <div class="card">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="col">
                            <input type="text" class="form-control" readonly value="{{$student->fees_sum_amount}}">
                        </div>
                    </div>
                    <form id="form-with-multiple-column" class="max-w-full" action="{{ route('payment_parts.store') }}"
                          method="post">
                        @csrf

                        <input type="hidden" hidden name="student_id" value="{{$student->students->id}}">

                        <div class="repeater">
                            <div data-repeater-list="list_parts">
                                <div data-repeater-item>
                                    <div class="row mb-30">
                                        <div class="col">
                                            <label for="">{{trans('fee_invoice.name')}}</label>
                                            <select class="custom-select" name="student_id">
                                                <option value="{{$student->students->id}}" selected>{{$student->students->name}}</option>
                                            </select>

                                        </div>
                                        <div class="col">
                                            <label for="">{{trans('PaymentParts.date')}}</label>
                                            <input type="date" class="form-control" name="pay_at" id="">
                                        </div>
                                        <div class="col">
                                            <label for="">{{trans('PaymentParts.amount')}}</label>
                                            <input type="number" class="form-control" name="amount" id="">
                                        </div>
                                        <div class="col">
                                            <input class="btn btn-danger btn-block" data-repeater-delete type="button"
                                                   value="{{trans('General.delete')}}"/>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row mt-20">
                                <div class="col-12">
                                    <input class="btn btn-primary" data-repeater-create type="button"
                                           value="{{trans('general.new')}}"/>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <input type="hidden" name="grade_id" value="{{$student->grades->id}}"><input type="hidden"
                        <input type="hidden" name="class_id" value="{{$student->classes->id}}"><input type="hidden"
                        <input type="hidden" name="acd_year" value="{{$student->acd_year->id}}"><input type="hidden"

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
