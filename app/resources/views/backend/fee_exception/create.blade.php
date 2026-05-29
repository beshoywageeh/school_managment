@extends('layouts.app')
@section('title')
    {{ trans('general.new') }} | {{ trans('ExcptionFee.title') }}
@endsection
@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
        @include('backend.msg')
        <h4 class="text-lg font-semibold text-gray-800 mb-4">{{ $Excpetion->name }}</h4>
        <form id="form-with-multiple-column" class="max-w-full" action="{{ route('except_fee.store') }}"
            method="post">
            @csrf
            <input type="hidden" name="student_id"value="{{ $Excpetion->id }}">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('fees.title') }}</label>
                    <select name="fee_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                        @forelse ($fees as $fee)
                            <option value="{{ $fee->id }}">{{ $fee->fees->title }}</option>
                        @empty
                            <option value="">No Fee</option>
                        @endforelse
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('ExcptionFee.student_account') }}</label>
                    <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-600" readonly
                        value={{ Number::currency($Excpetion->StudentAccount->sum('debit') - $Excpetion->StudentAccount->sum('credit'), 'EGP') }}>
                </div>
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('ExcptionFee.amount') }}</label>
                    <input type="number" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" name="amount">
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