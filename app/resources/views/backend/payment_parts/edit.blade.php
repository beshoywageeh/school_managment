@extends('layouts.app')
@section('title')
    {{ trans('general.edit') }} | {{ trans('Recipt_Payments.title') }}
@endsection
@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
        @include('backend.msg')
        <form id="form-with-multiple-column" class="max-w-full" action="{{ route('payment_parts.update') }}"
            method="post">

            @csrf

            <input type="hidden" name="id" value="{{ $paymentParts->id }}">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('student.name') }}</label>
                    <input value="{{ $paymentParts->students->name }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-600" readonly />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('student.grade') }}</label>
                    <input value="{{ $paymentParts->grades->name }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-600" readonly />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('student.class') }}</label>
                    <input value="{{ $paymentParts->classes->name }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-600" readonly />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('academic_year.title') }}</label>
                    <input
                        value="{{ \Carbon\Carbon::parse($paymentParts->year->year_start)->format('Y') }}-{{ \Carbon\Carbon::parse($paymentParts->year->year_end)->format('Y') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-600" readonly />
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('ExcptionFee.amount') }}</label>
                <input type="number" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" name="amount"
                    value="{{ $paymentParts->amount }}">
            </div>
            <div class="mt-6 flex justify-end">
                <button class="px-6 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 font-medium" type="submit">{{ trans('general.Submit') }}</button>
            </div>
        </form>
    </div>

    @push('scripts')
    @endpush
@endsection
