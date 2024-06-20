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
                            <input type="text"
                                   class="form-control"
                                   readonly
                                   value="">
                        </div>
                    </div>
                    <form id="form-with-multiple-column"
                          class="max-w-full"
                          action="{{ route('payment_parts.store') }}"
                          method="post">
                        @csrf

                        <input type="hidden"
                               hidden
                               name="student_id"
                               value="{{$student[0]->students->id}}">

                        <div class="repeater">
                            <div data-repeater-list="list_parts">
                                <div data-repeater-item>
                                    <div class="row mb-30">
                                        <div class="col">
                                            <label for="">{{trans('fee_invoice.name')}}</label>
                                            <select class="custom-select"
                                                    name="student_id">
                                                <option value="{{$student[0]->students->id}}"
                                                        selected>{{$student[0]->students->name}}</option>
                                            </select>

                                        </div>
                                        <div class="col">
                                            <label for="">{{trans('fee_invoice.fee')}}</label>
                                            <select class="custom-select"
                                                    name="fee_id">
                                                <option value=""
                                                        selected>----
                                                </option>
                                                @foreach($student as $std)
                                                    <option value="{{$std->fees->id}}">{{$std->fees->title}}
                                                        - {{$std->fees->amount}}</option>
                                                @endforeach
                                            </select>

                                        </div>

                                        <div class="col">
                                            <label for="">{{trans('PaymentParts.date')}}</label>
                                            <input type="date"
                                                   class="form-control"
                                                   name="pay_at"
                                                   id="">
                                        </div>
                                        <div class="col">
                                            <label for="">{{trans('PaymentParts.amount')}}</label>
                                            <input type="number"
                                                   class="form-control"
                                                   name="amount"
                                                   id="">
                                        </div>
                                        <div class="col">
                                            <input class="btn btn-danger btn-block mx-auto"
                                                   data-repeater-delete
                                                   type="button"
                                                   value="{{trans('General.delete')}}"/>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row mt-20">
                                <div class="col-12">
                                    <input class="btn btn-primary"
                                           data-repeater-create
                                           type="button"
                                           value="{{trans('general.new')}}"/>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <input type="hidden"
                               name="grade_id"
                               value="{{$student[0]->grades->id}}"><input type="hidden"/>
                        <input type="hidden"
                               name="class_id"
                               value="{{$student[0]->classes->id}}"><input type="hidden"/>
                        <input type="hidden"
                               name="acd_year"
                               value="{{$student[0]->acd_year->id}}"><input type="hidden"/>
                        <div class="row">
                            <div class="col text-md-right">
                                <button class="btn btn-success btn-lg"
                                        type="submit">{{ trans('General.Submit') }}</button>
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
