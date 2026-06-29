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
                        <input type="text" name="father_name" value="{{ old('father_name', $parent->father_name) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Parents.Father_Phone') }}</label>
                        <input type="text" name="father_phone" value="{{ old('father_phone', $parent->father_phone) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" />
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Parents.Father_Job') }}</label>
                        <input type="text" name="father_job" value="{{ old('father_job', $parent->father_job) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Parents.Father_National_Id') }}</label>
                        <input type="text" name="father_national_id" value="{{ old('father_national_id', $parent->father_national_id) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" />
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Parents.Father_Birth_Date') }}</label>
                        <div class="relative">
                            <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" name="father_birth_date" type="text" value="{{ old('father_birth_date', $parent->father_birth_date) }}">
                            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
                                <x-hero-icon name="calendar-alt" class="w-5 h-5" />
                            </span>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Parents.Father_Learning') }}</label>
                        <input type="text" name="father_learning" value="{{ old('father_learning', $parent->father_learning) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" />
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h4 class="text-lg font-semibold text-gray-800 mb-4">{{ trans('Parents.Mother_Info') }}</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Parents.Mother_Name') }}</label>
                        <input type="text" name="mother_name" value="{{ old('mother_name', $parent->mother_name) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Parents.Mother_Phone') }}</label>
                        <input type="text" name="mother_phone" value="{{ old('mother_phone', $parent->mother_phone) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" />
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Parents.Mother_Job') }}</label>
                        <input type="text" name="mother_job" value="{{ old('mother_job', $parent->mother_job) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Parents.Mother_National_Id') }}</label>
                        <input type="text" name="mother_national_id" value="{{ old('mother_national_id', $parent->mother_national_id) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" />
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Parents.Mother_Birth_Date') }}</label>
                        <input type="date" name="mother_birth_date" value="{{ old('mother_birth_date', $parent->mother_birth_date) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" />
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
                    <textarea class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" name="address" rows="3" placeholder="{{ trans('Parents.Address') }}">{{ old('address', $parent->address) }}</textarea>
                </div>
                <div>
                    <x-input.religion-select name="religion" :selected="old('religion', $parent->religion)"></x-input.religion-select>
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