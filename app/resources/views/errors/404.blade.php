@extends('errors.layout')

@section('icon', 'file-text')
@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found'))
@section('description',
    __('الصفحة المطلوبة غير موجودة') .
    ' — ' .
    __('The page you are looking for could not be
    found.'))
@section('action')
    <a href="{{ url('/') }}"
        class="inline-flex items-center px-5 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-lg transition-colors">
        {{ __('الرجوع للرئيسية') }} / {{ __('Go Home') }}
    </a>
    <button onclick="history.back()"
        class="inline-flex items-center px-5 py-2.5 bg-white dark:bg-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 text-gray-700 dark:text-gray-200 text-sm font-medium rounded-lg border border-gray-200 dark:border-gray-600 transition-colors">
        {{ __('العودة للصفحة السابقة') }} / {{ __('Go Back') }}
    </button>
@endsection
