@extends('layouts.app')
@section('title')
    {{ trans('general.new') }} | {{trans('fee_invoice.title')}}
@endsection
@section('content')
    <div class="mb-4 row">
        <div class="col">
            @include('backend.msg')
            <div class="card">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="col">
                            <h4>{{$student->name}}</h4>
                        </div>
                    </div>
                    <form id="form-with-multiple-column" class="max-w-full" action="{{ route('fee_invoice.store') }}"
                          method="post">
                        @csrf
                        <input type="hidden" name="student_id" value="{{$student->id}}">
                        <div class="repeater">
                            <div data-repeater-list="list_fees">
                                <div data-repeater-item>
                                    <div class="row mb-30">
                                        <div class="col">
                                            <label for="">{{trans('fee_invoice.name')}}</label>
                                            <select class="custom-select" name="student_id">
                                                <option value="{{$student->id}}" selected>{{$student->name}}</option>
                                            </select>

                                        </div>
                                        <div class="col">
                                            <label for="">{{trans('fee_invoice.selectschool')}}</label>

                                            <select class="custom-select" name="fee">
                                                <option value="" selected>{{trans('fee_invoice.selectschool')}}</option>
                                                @foreach($school_fees as $fee)
                                                    <option value="{{$fee->id}}">
                                                        {{$fee->title}} - {{number_format($fee->amount,2)}}&nbsp;ج.م
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label></label>
                                            <input class="btn btn-danger btn-block" data-repeater-delete type="button"
                                                   value="{{trans('general.delete')}}"/>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="mt-20 row">
                                <div class="col-12">
                                    <input class="btn btn-primary" data-repeater-create type="button"
                                           value="{{trans('general.new')}}"/>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <input type="hidden" name="grade_id" value="{{$student->grade_id}}"><input type="hidden"
                                                                                                   value="{{$student->classroom_id}}"
                                                                                                   name="classroom_id">
                        <div class="row">
                            <div class="col text-md-right">
                                <button class="btn btn-success" type="submit">{{ trans('general.Submit') }}</button>
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
