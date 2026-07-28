@extends('layouts.app_login')
@section('page_title')
    {{ trans('login.login') }}
@endsection
@section('login')
    <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
        <div class="p-8">
            <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">{{ trans('login.enter_data') }}</h3>

            <form method="POST" action="{{ route('login') }}" autocomplete="off">
                @csrf

                <div class="mb-6">
                    <label for="email"
                        class="block text-sm font-medium text-gray-700 mb-2">{{ trans('login.email') }}</label>
                    <input id="email"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all"
                        type="email" name="email" value="{{ $request->email ?? old('email') }}" placeholder="{{ trans('login.email') }}"
                        required>
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password"
                        class="block text-sm font-medium text-gray-700 mb-2">{{ trans('login.password') }}</label>
                    <input id="password"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all"
                        type="password" name="password" placeholder="{{ trans('login.password') }}" required>
                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-4 rounded-lg transition-colors duration-200">
                    {{ trans('login.login') }}
                </button>
            </form>
        </div>
    </div>
@endsection
