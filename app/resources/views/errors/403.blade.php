@extends('errors.layout')

@section('icon', 'shield')
@section('title', __('Forbidden'))
@section('code', '403')
@section('message', isset($exception) ? $exception->getMessage() : null ?: __('Forbidden'))
@section('description',
    __('ليس لديك صلاحية الوصول إلى هذه الصفحة') .
    ' — ' .
    __('You do not have permission to access
    this page.'))
@section('action')
    <a href="{{ url('/') }}"
        class="inline-flex items-center px-5 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-lg transition-colors">
        {{ __('الرجوع للرئيسية') }} / {{ __('Go Home') }}
    </a>
    <a href="mailto:{{ config('mail.from.address') }}"
        class="inline-flex items-center px-5 py-2.5 bg-white dark:bg-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 text-gray-700 dark:text-gray-200 text-sm font-medium rounded-lg border border-gray-200 dark:border-gray-600 transition-colors">
        {{ __('طلب الصلاحية') }} / {{ __('Request Access') }}
    </a>
@endsection
