@extends('layouts.app')
@section('title')
    {{ trans('general.edit') }} | {{ trans('Recipt_Payments.title') }}
@endsection
@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
        @include('backend.msg')
        <form id="form-with-multiple-column" class="max-w-full" action="{{ route('except-fee.update') }}"
            method="post">

            @csrf
            @method('PUT')

            <input type="hidden" name="id" value="{{ $excptionFees->id }}">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <x-select name="student_id" label="{{ trans('Recipt_Payments.name') }}" id="tom-select">
                    <option value="{{ $excptionFees->students->id }}">{{ $excptionFees->students->name }}
                    </option>
                </x-select>
                <div>
                    <x-input name="amount" type="number" value="{{ $excptionFees->amount }}">{{ trans('ExcptionFee.amount') }}</x-input>
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