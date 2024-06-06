@extends('layouts.app')
@section('title')
    {{ trans('general.edit') }} | {{trans('fee_invoice.title')}}
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
                    <form id="form-with-multiple-column" class="max-w-full" action="{{ route('fee_invoice.update') }}"
                          method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$fee->id}}">


                            <div class="row mb-30">
                                <div class="col">
                                    <label for="">{{trans('fee_invoice.name')}}</label>
                                    <select class="custom-select" name="student_id">
                                        <option value="{{$fee->students->id}}" selected>{{$fee->students->name}}</option>
                                    </select>

                                </div>
                                <div class="col">
                                    <label for="">{{trans('fee_invoice.selectschool')}}</label>

                                    <select class="custom-select" name="fee">
                                        <option value="" selected>{{trans('fee_invoice.selectschool')}}</option>
                                        @foreach($sfees as $sfee)
                                            <option value="{{$sfee->id}}" @selected($fee->id == $sfee->id)>
                                                {{$sfee->title}} - {{number_format($sfee->amount,2)}}&nbsp;ج.م
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>



                        <input type="hidden" name="grade_id" value="{{$fee->students->grade_id}}">
                        <input type="hidden"value="{{$fee->students->classroom_id}}"name="classroom_id">
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
