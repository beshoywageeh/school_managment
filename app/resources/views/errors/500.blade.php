@extends('errors.layout')

@section('icon', 'server')
@section('title', __('Server Error'))
@section('code', '500')
@section('message', __('Server Error'))
@section('description',
    __('عذراً، حدث خطأ في الخادم — نعمل على حل المشكلة') .
    ' — ' .
    __('Sorry, a server error
    occurred — we are working on fixing it.'))
@section('action')
    <button onclick="location.reload()"
        class="inline-flex items-center px-5 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-lg transition-colors">
        {{ __('إعادة المحاولة') }} / {{ __('Try Again') }}
    </button>
    <a href="{{ url('/') }}"
        class="inline-flex items-center px-5 py-2.5 bg-white dark:bg-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 text-gray-700 dark:text-gray-200 text-sm font-medium rounded-lg border border-gray-200 dark:border-gray-600 transition-colors">
        {{ __('الرجوع للرئيسية') }} / {{ __('Go Home') }}
    </a>
    <a href="mailto:{{ config('mail.from.address') }}"
        class="inline-flex items-center px-5 py-2.5 bg-white dark:bg-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 text-gray-700 dark:text-gray-200 text-sm font-medium rounded-lg border border-gray-200 dark:border-gray-600 transition-colors">
        {{ __('الإبلاغ عن المشكلة') }} / {{ __('Report Issue') }}
    </a>
@endsection
