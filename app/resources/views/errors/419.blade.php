@extends('errors.layout')

@section('icon', 'calendar-alt')
@section('title', __('Page Expired'))
@section('code', '419')
@section('message', __('Page Expired'))
@section('description',
    __('انتهت صلاحية الجلسة — الرجاء إعادة تحميل الصفحة') .
    ' — ' .
    __('Your session has expired —
    please refresh the page.'))
@section('action')
    <button onclick="location.reload()"
        class="inline-flex items-center px-5 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-lg transition-colors">
        {{ __('إعادة تحميل') }} / {{ __('Refresh') }}
    </button>
    <a href="{{ url('/') }}"
        class="inline-flex items-center px-5 py-2.5 bg-white dark:bg-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 text-gray-700 dark:text-gray-200 text-sm font-medium rounded-lg border border-gray-200 dark:border-gray-600 transition-colors">
        {{ __('الرجوع للرئيسية') }} / {{ __('Go Home') }}
    </a>
@endsection
