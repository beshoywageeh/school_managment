@extends('layouts.app')
@section('title')
    {{ trans('general.edit') }}
@endsection
@section('content')
    <form id="form-with-multiple-column" class="max-w-full" action="{{ route('parents.update', $parent->id) }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $parent->id }}">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h4 class="text-lg font-semibold text-gray-800 mb-4">{{ trans('Parents.Father_Info') }}</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Parents.Father_Name') }}</label>
                        <input type="text" name="Father_Name" value="{{ old('Father_Name', $parent->Father_Name) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Parents.Father_Phone') }}</label>
                        <input type="text" name="Father_Phone" value="{{ old('Father_Phone', $parent->Father_Phone) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" />
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Parents.Father_Job') }}</label>
                        <input type="text" name="Father_Job" value="{{ old('Father_Job', $parent->Father_Job) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Parents.Father_National_Id') }}</label>
                        <input type="text" name="Father_National_Id" value="{{ old('Father_National_Id', $parent->Father_National_Id) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" />
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Parents.Father_Birth_Date') }}</label>
                        <div class="relative">
                            <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" name="Father_Birth_Date" type="text" value="{{ old('Father_Birth_Date', $parent->Father_Birth_Date) }}">
                            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
                                <x-hero-icon name="calendar-alt" class="w-5 h-5" />
                            </span>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Parents.Father_Learning') }}</label>
                        <input type="text" name="Father_Learning" value="{{ old('Father_Learning', $parent->Father_Learning) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" />
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h4 class="text-lg font-semibold text-gray-800 mb-4">{{ trans('Parents.Mother_Info') }}</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Parents.Mother_Name') }}</label>
                        <input type="text" name="Mother_Name" value="{{ old('Mother_Name', $parent->Mother_Name) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Parents.Mother_Phone') }}</label>
                        <input type="text" name="Mother_Phone" value="{{ old('Mother_Phone', $parent->Mother_Phone) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" />
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Parents.Mother_Job') }}</label>
                        <input type="text" name="Mother_Job" value="{{ old('Mother_Job', $parent->Mother_Job) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Parents.Mother_National_Id') }}</label>
                        <input type="text" name="Mother_National_Id" value="{{ old('Mother_National_Id', $parent->Mother_National_Id) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" />
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Parents.Mother_Birth_Date') }}</label>
                        <input type="date" name="Mother_Birth_Date" value="{{ old('Mother_Birth_Date', $parent->Mother_Birth_Date) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Parents.Mother_Status') }}</label>
                        <input list="mother_status_list" type="text" name="Mother_Status" value="{{ old('Mother_Status') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" />
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
                    <textarea class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" name="Address" rows="3" placeholder="{{ trans('Parents.Address') }}">{{ old('Address', $parent->Address) }}</textarea>
                </div>
                <div>
                    <x-input.religion-select name="Religion" :selected="old('Religion', $parent->Religion)"></x-input.religion-select>
                </div>
            </div>
            <div class="flex justify-end mt-6">
                <button class="px-6 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 font-medium" type="submit">
                    {{ trans('general.Submit') }}
                </button>
            </div>
        </div>
    </form>
    @push('scripts')
    @endpush
@endsection