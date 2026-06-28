@extends('errors.layout')

@section('icon', 'credit-card')
@section('title', __('Payment Required'))
@section('code', '402')
@section('message', __('Payment Required'))
@section('description', __('مطلوب الدفع لإتمام هذه العملية') . ' — ' . __('Payment is required to complete this
    process.'))
@section('action')
    <a href="{{ url('/') }}"
        class="inline-flex items-center px-5 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-lg transition-colors">
        {{ __('الرجوع للرئيسية') }} / {{ __('Go Home') }}
    </a>
    <a href="mailto:{{ config('mail.from.address') }}"
        class="inline-flex items-center px-5 py-2.5 bg-white dark:bg-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 text-gray-700 dark:text-gray-200 text-sm font-medium rounded-lg border border-gray-200 dark:border-gray-600 transition-colors">
        {{ __('اتصل بالدعم') }} / {{ __('Contact Support') }}
    </a>
@endsection
