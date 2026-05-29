@extends('layouts.app')
@section('title')
    {{ trans('general.pay') }} | {{ trans('PaymentParts.title') }}
@endsection
@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
        @include('backend.msg')
        <div class="mb-6">
            <input readonly class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-600" value="{{ $part->amount }}" />
        </div>
        <form id="form-with-multiple-column" class="max-w-full" action="{{ route('payment_parts.submit_pay') }}"
            method="post">

            @csrf

            <input type="hidden" name="id" value="{{ $part->id }}">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Recipt_Payments.name') }}</label>
                    <select name="student_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                        <option value="{{ $part->students->id }}">{{ $part->students->name }}</option>
                    </select>
                </div>

                <div id="pay_total_div">
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('general.pay') }}</label>
                    <input id="amount" type="number" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" name="amount"
                        value="{{ $part->amount }}">
                </div>
            </div>
            <div class="mt-6 flex justify-end">
                <button class="px-6 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 font-medium" type="submit">{{ trans('general.Submit') }}</button>
            </div>
        </form>
    </div>

    @push('scripts')
    @endpush
@endsection