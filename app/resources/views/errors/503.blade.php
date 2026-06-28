@extends('errors.layout')

@section('icon', 'cog')
@section('title', __('Service Unavailable'))
@section('code', '503')
@section('message', __('Service Unavailable'))
@section('description',
    __('الخدمة غير متاحة حالياً — جاري الصيانة') .
    ' — ' .
    __('The service is currently unavailable
    — maintenance in progress.'))

@section('head')
    @parent
    <style>
        [x-cloak] {
            display: none !important;
        }

        @keyframes spin-slow {
            to {
                transform: rotate(360deg);
            }
        }

        .animate-spin-slow {
            animation: spin-slow 3s linear infinite;
        }
    </style>
@endsection

@section('action')
    <div class="w-full text-center" x-data="{
        seconds: 60,
        init() {
            let i = setInterval(() => {
                if (this.seconds <= 0) {
                    clearInterval(i);
                    location.reload();
                }
                this.seconds--;
            }, 1000);
        }
    }">
        <div class="flex items-center justify-center gap-2 mb-4">
            <x-hero-icon name="cog" class="w-5 h-5 text-gray-400 animate-spin-slow" />
            <span class="text-sm text-gray-500 dark:text-gray-400">{{ __('جاري الصيانة') }} / {{ __('Maintenance') }}</span>
        </div>
        <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">
            <span x-show="seconds > 0" x-cloak>
                {{ __('إعادة المحاولة بعد') }} / {{ __('Retry in') }}
                <span class="font-semibold text-indigo-600 dark:text-indigo-400" x-text="seconds"></span>
                {{ __('ثانية') }} / {{ __('seconds') }}
            </span>
        </p>
        <a href="{{ url('/') }}"
            class="inline-flex items-center px-5 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-lg transition-colors">
            {{ __('الرجوع للرئيسية') }} / {{ __('Go Home') }}
        </a>
    </div>
@endsection
