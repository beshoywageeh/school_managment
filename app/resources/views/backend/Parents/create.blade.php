@extends('layouts.app')
@section('title')
    {{ trans('Parents.new') }}
@endsection
@section('content')
    <form id="form-with-multiple-column" class="max-w-full" action="{{ route('parents.store') }}" method="post">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h4 class="text-lg font-bold text-gray-800 mb-4">{{ trans('Parents.Father_Info') }}</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <x-input name='father_name' value="{{ old('father_name') }}"
                            type='text'>{{ trans('Parents.Father_Name') }}</x-input>
                    </div>
                    <div>
                        <x-input name='father_phone' value="{{ old('father_phone') }}"
                            type='text'>{{ trans('Parents.Father_Phone') }}</x-input>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <div>
                        <x-input name='father_job' value="{{ old('father_job') }}"
                            type='text'>{{ trans('Parents.Father_Job') }}</x-input>
                    </div>
                    <div>
                        <x-input name='father_national_id' value="{{ old('father_national_id') }}"
                            data="father_national_id" type='text'>{{ trans('Parents.Father_National_Id') }}
                        </x-input>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Parents.Father_Birth_Date') }}</label>
                        <div class="relative">
                            <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" name="father_birth_date" type="text" value="{{ old('father_birth_date') }}">
                            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
                                <x-hero-icon name="calendar-alt" class="w-5 h-5" />
                            </span>
                        </div>
                    </div>
                    <div>
                        <x-input name='father_learning' value="{{ old('Father_learning') }}"
                            type='text'>{{ trans('Parents.Father_Learning') }}</x-input>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h4 class="text-lg font-bold text-gray-800 mb-4">{{ trans('Parents.Mother_Info') }}</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <x-input name='mother_name' value="{{ old('mother_name') }}"
                            type='text'>{{ trans('Parents.Mother_Name') }}</x-input>
                    </div>
                    <div>
                        <x-input name='mother_phone' value="{{ old('mother_phone') }}"
                            type='text'>{{ trans('Parents.Mother_Phone') }}</x-input>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <div>
                        <x-input name='mother_job' value="{{ old('mother_job') }}"
                            type='text'>{{ trans('Parents.Mother_Job') }}</x-input>
                    </div>
                    <div>
                        <x-input name='mother_national_id' value="{{ old('mother_national_id') }}"
                            type='text'>{{ trans('Parents.Mother_National_Id') }}</x-input>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <div>
                        <x-input name='mother_birth_date' type="date"
                            value="{{ old('mother_birth_date') }}">{{ trans('Parents.Mother_Birth_Date') }}</x-input>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Parents.Mother_Status') }}</label>
                        <input list="mother_status_list" type="text" name="Mother_Status" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary"
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
            <h4 class="text-lg font-bold text-gray-800 mb-4">{{ trans('Parents.Other_Info') }}</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <x-textarea name="address" label="{{ trans('Parents.Address') }}" rows="3" placeholder="{{ trans('Parents.Address') }}">{{ old('address') }}</x-textarea>
                <div>
                    <x-input.religion-select name="religion"></x-input.religion-select>
                </div>
            </div>
            <div class="mt-6 flex justify-end">
                <button class="px-6 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 font-medium" type="submit">{{ trans('general.Submit') }}</button>
            </div>
        </div>
    </form>

    @push('scripts')
    @endpush
@endsection