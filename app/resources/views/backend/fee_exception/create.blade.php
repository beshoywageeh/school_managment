@extends('layouts.app')
@section('title')
    {{ trans('general.new') }} | {{ trans('ExcptionFee.title') }}
@endsection
@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
        @include('backend.msg')
        <h4 class="text-lg font-bold text-gray-800 mb-4">{{ $exception->name }}</h4>
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form id="form-with-multiple-column" class="max-w-full" action="{{ route('except-fee.store') }}"
            method="post">
            @csrf
            <input type="hidden" name="student_id"value="{{ $exception->id }}">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <x-select name="fee_id" label="{{ trans('fees.title') }}">
                    @forelse ($fees as $fee)
                        <option value="{{ $fee->id }}">{{ $fee->schoolFee->title }}</option>
                    @empty
                        <option value="">No Fee</option>
                    @endforelse
                </x-select>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('ExcptionFee.student_account') }}</label>
                    <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-600" readonly
                        value={{ Number::currency($exception->studentAccount->sum('debit') - $exception->studentAccount->sum('credit'), config('school.currency')) }}>
                </div>
                <div class="md:col-span-2">
                    <x-input name="amount" type="number">{{ trans('ExcptionFee.amount') }}</x-input>
                </div>
            </div>

            <div class="mt-6 flex justify-end">
                <button class="px-6 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 font-medium" type="submit">{{ trans('general.Submit') }}</button>
            </div>
        </form>
    </div>

    @push('scripts')
    @endpush
@endsection