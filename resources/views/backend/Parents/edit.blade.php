@extends('layouts.app')
@section('title')
    {{ trans('general.edit') }}
@endsection
@section('content')
    <form id="form-with-multiple-column" class="max-w-full" action="{{ route('parents.update', $parent->id) }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $parent->id }}">
        <div class="mb-4 row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row card-title">
                            <div class="col">
                                <h4>{{ trans('Parents.Father_Info') }}</h4>
                            </div>
                        </div>
                        <!-- Father Info -->
                        <!-- Form Row: One -->
                        <div class="row">
                            <div class="col">
                                <!-- Form Column: Username -->
                                <x-input name='Father_Name' value="{{ old('Father_Name', $parent->Father_Name) }}" class=''
                                    type='text'>{{ trans('Parents.Father_Name') }}</x-input>
                            </div>
                            <div class="col">
                                <x-input name='Father_Phone' class='' value="{{ old('Father_Phone', $parent->Father_Phone) }}"
                                    type='text'>{{ trans('Parents.Father_Phone') }}</x-input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <!-- Form Column: Father_Job -->
                                <x-input name='Father_Job' value="{{ old('Father_Job', $parent->Father_Job) }}"
                                    type='text'>{{ trans('Parents.Father_Job') }}</x-input>
                            </div>
                            <div class="col">
                                <x-input name='Father_National_Id' value="{{ old('Father_National_Id', $parent->Father_National_Id) }}" class=''
                                    data="Father_National_Id" type='text'>{{ trans('Parents.Father_National_Id') }}
                                </x-input>
                            </div>
                        </div>
                        <!-- Form Row: Two -->
                        <div class="row">
                            <div class="col form-group">
                                <label>
                                    {{ trans('Parents.Father_Birth_Date') }}
                                </label>
                                <div class="input-group date" id="datepicker-action">
                                    <input class="form-control" name="Father_Birth_Date" type="text"
                                        value="{{ old('Father_Birth_Date', $parent->Father_Birth_Date) }}">
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col">
                                <x-input name='Father_Learning' class="" value="{{ old('Father_Learning', $parent->Father_Learning) }}"
                                    type='text'>{{ trans('Parents.Father_Learning') }}</x-input>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row card-title">
                            <div class="col">
                                <h4>{{ trans('Parents.Mother_Info') }}</h4>
                            </div>
                        </div>
                        <!-- Mother Info -->
                        <!-- Form Row: One -->
                        <div class="row">
                            <div class="col">
                                <!-- Form Column: Username -->
                                <x-input name='Mother_Name' class='' value="{{ old('Mother_Name', $parent->Mother_Name) }}"
                                    type='text'>{{ trans('Parents.Mother_Name') }}</x-input>
                            </div>
                            <div class="col">
                                <x-input name='Mother_Phone' class='' value="{{ old('Mother_Phone', $parent->Mother_Phone) }}"
                                    type='text'>{{ trans('Parents.Mother_Phone') }}</x-input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <x-input name='Mother_Job' class='' value="{{ old('Mother_Job', $parent->Mother_Job) }}"
                                    type='text'>{{ trans('Parents.Mother_Job') }}</x-input>
                            </div>
                            <div class="col">
                                <x-input name='Mother_National_Id' class='' value="{{ old('Mother_National_Id', $parent->Mother_National_Id) }}"
                                    type='text'>{{ trans('Parents.Mother_National_Id') }}</x-input>
                            </div>
                        </div>
                        <!-- Form Row: Two -->
                        <div class="row">
                            <div class="col form-group">
                                <x-input name='Mother_Birth_Date' class='' type="date"
                                    value="{{ old('Mother_Birth_Date', $parent->Mother_Birth_Date) }}">{{ trans('Parents.Mother_Birth_Date') }}</x-input>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row card-title">
                            <div class="col">
                                <h4>{{ trans('Parents.Other_Info') }}</h4>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Form Column: Address -->
                            <div class="col">
                                <label class="">{{ trans('Parents.Address') }}</label>
                                <textarea class="form-control" name="Address" placeholder="{{ trans('Parents.Address') }}">{{ old('Address', $parent->Address) }}</textarea>
                            </div>
                            <div class="col">
                                <x-input.religion-select name="Religion" :selected="old('Religion', $parent->Religion)"></x-input.religion-select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col text-md-right">
                                <button class="btn btn-success" type="submit">{{ trans('general.Submit') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @push('scripts')
    @endpush
@endsection
