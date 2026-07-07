@extends('layouts.app')
@section('title')
    {{ trans('profile.title') }} | {{ trans('general.edit') }}
@endsection
@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
        <h4 class="text-lg font-bold text-gray-800 mb-4">{{ trans('profile.title') }} | {{ trans('general.edit') }}</h4>
        <form method="post" action="{{ route('profile.update') }}">
            @csrf
            @method('patch')
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div></div>
                <div class="md:col-span-2 space-y-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">{{ trans('profile.name') }}</label>
                        <input type="text" name="name" id="name" value="{{ $user->name }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary @error('name') border-red-500 @enderror">
                        @error('name')
                            <span class="text-sm text-red-600" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">{{ trans('profile.email') }}</label>
                        <input type="email" name="email" id="email" value="{{ $user->email }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary @error('email') border-red-500 @enderror">
                        @error('email')
                            <span class="text-sm text-red-600" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">{{ trans('profile.password') }}</label>
                        <input type="password" name="password" id="password" value=""
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary @error('password') border-red-500 @enderror">
                        @error('password')
                            <span class="text-sm text-red-600" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="mt-6">
                <button type="submit" class="px-6 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 font-medium">{{ trans('general.Submit') }}</button>
            </div>
        </form>
    </div>
@endSection