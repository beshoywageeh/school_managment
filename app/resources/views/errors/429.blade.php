@extends('errors.layout')

@section('icon', 'minus-circle')
@section('title', __('Too Many Requests'))
@section('code', '429')
@section('message', __('Too Many Requests'))
@section('description',
    __('عدد الطلبات كبير جداً — الرجاء الانتظار ثم المحاولة مرة أخرى') .
    ' — ' .
    __('Too many
    requests — please wait and try again.'))

@section('head')
    @parent
    <link rel="stylesheet" href="{{ asset('css/errors.css') }}">
@endsection

@section('action')
    <div class="w-full text-center" x-data="{
        seconds: 30,
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
