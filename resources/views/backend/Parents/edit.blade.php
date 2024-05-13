@extends('layouts.app')
@section('title')
{{trans('general.edit')}}
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <div class="flex justify-between mb-4">
            <h4 class="card-title">{{ trans('general.edit') }}</h4>
        </div>
        @include('backend.msg')
        <form id="form-with-multiple-column" class="max-w-full" action="{{route('parents.update')}}" method="post">
            @csrf
            <input type='hidden' name="id" value="{{$parent->id}}">
            <!-- Father Info -->
            <div class="flex flex-col gap-4 my-4">
                <h5 class="text-center">{{ trans('Parents.Father_Info') }}</h5>
                <!-- Form Row: One -->
                <div class="flex flex-col items-center w-full gap-4 md:flex-row">
                    <!-- Form Column: Username -->
                    <x-input name='Father_Name' class='' value="{{ $parent->Father_Name }}" type='text'>{{
                        trans('Parents.Father_Name') }}</x-input>
                    <x-input name='Father_Phone' class='' value="{{ $parent->Father_Phone }}" type='text'>{{
                        trans('Parents.Father_Phone') }}</x-input>
                    <!-- Form Column: Father_Job -->
                    <x-input name='Father_Job' value="{{ $parent->Father_Job }}" type='text'>{{
                        trans('Parents.Father_Job') }}</x-input>
                </div>
                <!-- Form Row: Two -->

                <div class="flex flex-col items-center w-full gap-4 md:flex-row">
                    <x-input value="{{ $parent->Father_National_Id }}" name='Father_National_Id' class=''
                        data="Father_National_Id" type='text'>{{
                        trans('Parents.Father_National_Id') }}
                    </x-input>
                    <x-input value="{{ $parent->Father_Birth_Date }}" name='Father_Birth_Date' class="input-date"
                        type='date'>
                        {{
                        trans('Parents.Father_Birth_Date') }}</x-input>
                    <x-input value="{{ $parent->Father_Learning }}" name='Father_Learning' class="" type='text'>{{
                        trans('Parents.Father_Learning') }}</x-input>
                </div>
            </div>
            <hr>
            <!-- Mother Info -->
            <div class="flex flex-col gap-4 my-4">
                <h5 class="text-center">{{ trans('Parents.Mother_Info') }}</h5>


                <!-- Form Row: One -->
                <div class="flex flex-col items-center w-full gap-4 md:flex-row">
                    <!-- Form Column: Username -->
                    <x-input name='Mother_Name' value="{{ $parent->Mother_Name }}" class='' type='text'>{{
                        trans('Parents.Mother_Name') }}</x-input>
                    <x-input name='Mother_Phone' class='' value="{{ $parent->Mother_Phone }}" type='text'>{{
                        trans('Parents.Mother_Phone') }}</x-input>
                    <x-input name='Mother_Job' class='' value="{{ $parent->Mother_Job }}" type='text'>{{
                        trans('Parents.Mother_Job') }}</x-input>
                </div>
                <!-- Form Row: Two -->
                <div class="flex flex-col items-center w-full gap-4 md:flex-row">
                    <x-input name='Mother_National_Id' value="{{ $parent->Mother_National_Id }}" class='' type='text'>{{
                        trans('Parents.Mother_National_Id') }}</x-input>
                    <x-input name='Mother_Birth_Date' value="{{ $parent->Mother_Birth_Date }}" class='input-date'
                        type='date'>
                        {{
                        trans('Parents.Mother_Birth_Date') }}</x-input>
                </div>
            </div>
            <hr>
            <!-- Other Info -->
            <div class="flex flex-col gap-4 my-4">
                <h5 class="text-center">{{ trans('Parents.Other_Info') }}</h5>

                <!-- Form Row: One -->
                <div class="flex flex-col items-center w-full gap-4 md:flex-row">

                    <!-- Form Row: Two -->
                    <div class="flex flex-col items-center w-full gap-4 md:flex-row">
                        <!-- Form Column: Father_Job -->
                        <div class="w-full md:w-1/2">
                            <label class="mb-1 label">{{ trans('Parents.Address') }}</label>
                            <textarea class="textarea" name="Address"
                                placeholder="{{ trans('Parents.Address') }}">{{ $parent->Address }}</textarea>
                        </div>

                            <x-input.religion-select name="Religion"></x-input.religion-select>
                    </div>

                </div>

            </div>
            <div class="flex items-center justify-end w-full gap-2">
                <button class="btn btn-primary" type="submit">{{ trans('General.Submit') }}</button>
            </div>
        </form>

    </div>
</div>

@push('scripts')

@endpush
@endsection
