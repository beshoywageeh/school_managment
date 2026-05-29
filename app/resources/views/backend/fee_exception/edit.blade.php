@extends('layouts.app')
@section('title')
    {{ trans('general.edit') }} | {{ trans('Recipt_Payments.title') }}
@endsection
@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
        @include('backend.msg')
        <form id="form-with-multiple-column" class="max-w-full" action="{{ route('except_fee.update') }}"
            method="post">

            @csrf

            <input type="hidden" name="id" value="{{ $excptionFees->id }}">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Recipt_Payments.name') }}</label>
                    <select name="student_id" id="tom-select" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">

                        <option value="{{ $excptionFees->students->id }}">{{ $excptionFees->students->name }}
                        </option>

                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('ExcptionFee.amount') }}</label>
                    <input type="number" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" name="amount"
                        value="{{ $excptionFees->amount }}">
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