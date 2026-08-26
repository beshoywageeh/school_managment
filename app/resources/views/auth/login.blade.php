@extends('layouts.app_login')
@section('page_title')
    {{ trans('login.login') }}
@endsection
@section('login')
    <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
        <div class="p-8">
            <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">{{ trans('login.enter_data') }}</h3>

            <form method="POST" action="{{ route('login') }}" autocomplete="off" x-data="{ loading: false }"
                x-on:submit="loading = true">
                @csrf

                <div class="mb-6">
                    <label for="email"
                        class="block text-sm font-medium text-gray-700 mb-2">{{ trans('login.email') }}</label>
                    <input id="email"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all @error('email') border-danger focus:border-danger focus:ring-danger/20 @enderror"
                        type="email" name="email" value="{{ old('email') }}" placeholder="{{ trans('login.email') }}"
                        required @error('email') aria-invalid="true" aria-describedby="email-error" @enderror>
                    @error('email')
                        <p id="email-error" class="mt-2 text-sm text-danger" role="alert">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password"
                        class="block text-sm font-medium text-gray-700 mb-2">{{ trans('login.password') }}</label>
                    <input id="password"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition-all @error('password') border-danger focus:border-danger focus:ring-danger/20 @enderror"
                        type="password" name="password" placeholder="{{ trans('login.password') }}" required
                        @error('password') aria-invalid="true" aria-describedby="password-error" @enderror>
                    @error('password')
                        <p id="password-error" class="mt-2 text-sm text-danger" role="alert">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" x-bind:disabled="loading"
                    class="w-full bg-primary hover:bg-primary/90 text-white font-semibold py-3 px-4 rounded-lg transition-colors duration-200 disabled:opacity-60">
                    <span x-show="!loading">{{ trans('login.login') }}</span>
                    <span x-show="loading" class="inline-flex items-center gap-2">
                        <svg class="animate-spin h-5 w-5" viewBox="0 0 24 24" fill="none">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z">
                            </path>
                        </svg>
                        {{ trans('login.login') }}
                    </span>
                </button>
            </form>
        </div>
    </div>
@endsection
