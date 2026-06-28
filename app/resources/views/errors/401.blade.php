@extends('errors.layout')

@section('icon', 'lock')
@section('title', __('Unauthorized'))
@section('code', '401')
@section('message', __('Unauthorized'))
@section('description',
    __('يجب تسجيل الدخول للوصول إلى هذه الصفحة') .
    ' — ' .
    __('You must be logged in to access this
    page.'))
@section('action')
    <a href="{{ route('login') }}"
        class="inline-flex items-center px-5 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-lg transition-colors">
        {{ __('تسجيل الدخول') }} / {{ __('Login') }}
    </a>
    <a href="{{ url('/') }}"
        class="inline-flex items-center px-5 py-2.5 bg-white dark:bg-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 text-gray-700 dark:text-gray-200 text-sm font-medium rounded-lg border border-gray-200 dark:border-gray-600 transition-colors">
        {{ __('الرجوع للرئيسية') }} / {{ __('Go Home') }}
    </a>
@endsection
