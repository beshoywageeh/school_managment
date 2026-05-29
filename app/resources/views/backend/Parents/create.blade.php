@extends('layouts.app')
@section('title')
    {{ trans('Parents.new') }}
@endsection
@section('content')
    <form id="form-with-multiple-column" class="max-w-full" action="{{ route('parents.store') }}" method="post">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h4 class="text-lg font-semibold text-gray-800 mb-4">{{ trans('Parents.Father_Info') }}</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <x-input name='Father_Name' value="{{ old('Father_Name') }}"
                            type='text'>{{ trans('Parents.Father_Name') }}</x-input>
                    </div>
                    <div>
                        <x-input name='Father_Phone' value="{{ old('Father_Phone') }}"
                            type='text'>{{ trans('Parents.Father_Phone') }}</x-input>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <div>
                        <x-input name='Father_Job' value="{{ old('Father_Job') }}"
                            type='text'>{{ trans('Parents.Father_Job') }}</x-input>
                    </div>
                    <div>
                        <x-input name='Father_National_Id' value="{{ old('Father_National_Id') }}"
                            data="Father_National_Id" type='text'>{{ trans('Parents.Father_National_Id') }}
                        </x-input>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Parents.Father_Birth_Date') }}</label>
                        <div class="relative">
                            <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" name="Father_Birth_Date" type="text" value="{{ old('Father_Birth_Date') }}">
                            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
                                <x-hero-icon name="calendar-alt" class="w-5 h-5" />
                            </span>
                        </div>
                    </div>
                    <div>
                        <x-input name='Father_Learning' value="{{ old('Father_learning') }}"
                            type='text'>{{ trans('Parents.Father_Learning') }}</x-input>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h4 class="text-lg font-semibold text-gray-800 mb-4">{{ trans('Parents.Mother_Info') }}</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <x-input name='Mother_Name' value="{{ old('Mother_Name') }}"
                            type='text'>{{ trans('Parents.Mother_Name') }}</x-input>
                    </div>
                    <div>
                        <x-input name='Mother_Phone' value="{{ old('Mother_Phone') }}"
                            type='text'>{{ trans('Parents.Mother_Phone') }}</x-input>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <div>
                        <x-input name='Mother_Job' value="{{ old('Mother_Job') }}"
                            type='text'>{{ trans('Parents.Mother_Job') }}</x-input>
                    </div>
                    <div>
                        <x-input name='Mother_National_Id' value="{{ old('Mother_National_Id') }}"
                            type='text'>{{ trans('Parents.Mother_National_Id') }}</x-input>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <div>
                        <x-input name='Mother_Birth_Date' type="date"
                            value="{{ old('Mother_Birth_Date') }}">{{ trans('Parents.Mother_Birth_Date') }}</x-input>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Parents.Mother_Status') }}</label>
                        <input list="mother_status_list" type="text" name="Mother_Status" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
                            value="{{ old('Mother_Status') }}">
                        <datalist id="mother_status_list">
                            @foreach ($Mother_Status as $status)
                                <option value="{{ $status->Mother_Status }}">
                            @endforeach
                        </datalist>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
            <h4 class="text-lg font-semibold text-gray-800 mb-4">{{ trans('Parents.Other_Info') }}</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Parents.Address') }}</label>
                    <textarea class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" name="Address" rows="3" placeholder="{{ trans('Parents.Address') }}">{{ old('Address') }}</textarea>
                </div>
                <div>
                    <x-input.religion-select name="Religion"></x-input.religion-select>
                </div>
            </div>
            <div class="mt-6 flex justify-end">
                <button class="px-6 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 font-medium" type="submit">{{ trans('general.Submit') }}</button>
            </div>
        </div>
    </form>

    @push('scripts')
    @endpush
@endsection