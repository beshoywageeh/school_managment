@extends('layouts.app_login')
@section('page_title')
    {{ trans('install.new_school') }}
@endsection
@section('login')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-50 border border-red-200 rounded-lg">
                <ul class="list-disc list-inside text-sm text-red-600">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="text-center mb-6">
            <h4 class="text-xl font-semibold text-gray-800">{{ trans('install.new_school') }}</h4>
        </div>
        <form action="{{ route('config') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-4 border border-blue-200 rounded-xl">
                    <h5 class="text-center text-gray-500 font-medium mb-4">{{ trans('install.school_details') }}</h5>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('install.school_name') }}</label>
                        <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 @error('schoolname') border-red-500 @enderror"
                            name="schoolname" value="{{ old('schoolname') }}"
                            placeholder="{{ trans('install.school_name') }}" />
                        @error('schoolname')
                            <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('install.address') }}</label>
                        <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 @error('address') border-red-500 @enderror"
                            name="address" placeholder="{{ trans('install.address') }}"
                            value="{{ old('address') }}" />
                        @error('address')
                            <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('install.phone') }}</label>
                        <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 @error('phone') border-red-500 @enderror"
                            name="phone" value="{{ old('phone') }}"
                            placeholder="{{ trans('install.phone') }}" />
                        @error('phone')
                            <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('install.logo') }}</label>
                        <input class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" accept="*/image" type="file" name="logo">
                        @error('logo')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="p-4 border border-blue-200 rounded-xl">
                    <h5 class="text-center text-gray-500 font-medium mb-4">{{ trans('install.admin') }}</h5>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('install.name') }} </label>
                        <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 @error('name') border-red-500 @enderror"
                            name="name" value="{{ old('name') }}"
                            placeholder="{{ trans('install.name') }} " />
                        @error('name')
                            <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('install.password') }} </label>
                        <input type="password" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 @error('password') border-red-500 @enderror"
                            name="password" value="{{ old('password') }}"
                            placeholder="{{ trans('install.password') }} " />
                        @error('password')
                            <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <input type="hidden" name="isAdmin" value="1">
                    <input type="hidden" name="loginAllow" value="1">
                </div>
            </div>

            <div class="mt-8 flex justify-end">
                <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-medium">{{ trans('install.register') }}</button>
            </div>
        </form>
    </div>
@endsection
@push('js')
@endpush