@extends('layouts.app')
@section('title')
    {{ trans('parents.new') }}
@endsection
@section('content')
    <div class="mb-4 row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="col">
                            <h4>{{ trans('parents.new') }}</h4>
                        </div>
                    </div>
                    <form id="form-with-multiple-column" class="max-w-full" action="{{ route('parents.store') }}"
                        method="post">
                        @csrf
                        <fieldset class=''>
                            <legend class='m-auto text-center text-muted'>{{ trans('Parents.Father_Info') }}</legend>
                            <!-- Father Info -->
                            <!-- Form Row: One -->
                            <div class="row">
                                <div class="col">
                                    <!-- Form Coumn: Username -->
                                    <x-input name='Father_Name' value="{{old('Father_Name')}}" class=''
                                        type='text'>{{ trans('Parents.Father_Name') }}</x-input>
                                </div>
                                <div class="col">
                                    <x-input name='Father_Phone' class='' value="{{old('Father_Phone')}}"
                                        type='text'>{{ trans('Parents.Father_Phone') }}</x-input>
                                </div>
                                <div class="col">
                                    <!-- Form Column: Father_Job -->
                                    <x-input name='Father_Job' value="{{old('Father_Job')}}" type='text'>{{ trans('Parents.Father_Job') }}</x-input>
                                </div>
                            </div>
                            <!-- Form Row: Two -->
                            <div class="row">
                                <div class="col">
                                    <x-input name='Father_National_Id' value="{{old('Father_National_Id')}}" class='' data="Father_National_Id"
                                        type='text'>{{ trans('Parents.Father_National_Id') }}
                                    </x-input>

                                </div>
                                <div class="col form-group">
                                    <label>
                                        {{ trans('Parents.Father_Birth_Date') }}
                                    </label>
                                    <div class="input-group date" id="datepicker-action">
                                        <input class="form-control" name="Father_Birth_Date" type="text"
                                            value="{{old('Father_Birth_Date')}}">
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col">
                                    <x-input name='Father_Learning' class="" value="{{old('Father_learning')}}"
                                        type='text'>{{ trans('Parents.Father_Learning') }}</x-input>
                                </div>
                            </div>
                        </fieldset>
                        <hr>
                        <fieldset class=''>
                            <legend class='m-auto text-center text-muted'>{{ trans('Parents.Mother_Info') }}</legend>
                            <!-- Mother Info -->
                            <!-- Form Row: One -->
                            <div class="row">
                                <div class="col">
                                    <!-- Form Column: Username -->
                                    <x-input name='Mother_Name' class='' value="{{old('Mother_Name')}}"
                                        type='text'>{{ trans('Parents.Mother_Name') }}</x-input>
                                </div>
                                <div class="col">
                                    <x-input name='Mother_Phone' class='' value="{{old('Mother_Phone')}}"
                                        type='text'>{{ trans('Parents.Mother_Phone') }}</x-input>
                                </div>
                                <div class="col">
                                    <x-input name='Mother_Job' class='' value="{{old('Mother_Job')}}"
                                        type='text'>{{ trans('Parents.Mother_Job') }}</x-input>
                                </div>
                            </div>
                            <!-- Form Row: Two -->
                            <div class="row">
                                <div class="col">
                                    <x-input name='Mother_National_Id' class='' value="{{old('Mother_National_Id')}}"
                                        type='text'>{{ trans('Parents.Mother_National_Id') }}</x-input>
                                </div>
                                <div class="col form-group">
                                    <x-input name='Mother_Birth_Date' class='' type="date" value="{{old('Mother_Birth_Date')}}">{{trans('Parents.Mother_Birth_Date')}}</x-input>

                                </div>
                            </div>
                        </fieldset>
                        <hr>
                        <fieldset class=''>
                            <legend class='m-auto text-center text-muted'>{{ trans('Parents.Other_Info') }}</legend>
                            <!-- Other Info -->

                            <!-- Form Row: One -->
                            <div class="row">
                                <!-- Form Column: Father_Job -->
                                <div class="col">
                                    <label class="">{{ trans('Parents.Address') }}</label>
                                    <textarea class="form-control" name="Address" placeholder="{{ trans('Parents.Address') }}">
{{old("Address")}}
                                    </textarea>
                                </div>
                                <div class="col">

                                    <x-input.religion-select name="Religion"></x-input.religion-select>
                                </div>
                            </div>

                        </fieldset>
                        <hr>
                        <div class="row">
                            <div class="col"></div>
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
