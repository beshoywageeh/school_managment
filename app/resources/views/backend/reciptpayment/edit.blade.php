@extends('layouts.app')
@section('title')
    {{ trans('general.edit') }} | {{ trans('Recipt_Payments.title') }}
@endsection
@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
        @include('backend.msg')
        <form id="form-with-multiple-column" class="max-w-full" action="{{ route('ReceiptPayment.update') }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $recipt_Payment->id }}">
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Recipt_Payments.man') }}</label>
                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100" disabled value="{{ $recipt_Payment->manual }}">
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Recipt_Payments.name') }}</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" name="student_id">
                        <option value="{{ $recipt_Payment->student->id }}">{{ $recipt_Payment->student->name }}</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Recipt_Payments.amount') }}</label>
                    <input type="number" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" name="amount" value="{{ $recipt_Payment->Debit }}">
                </div>
            </div>
            <div class="flex justify-end">
                <button class="px-6 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 font-medium" type="submit">
                    {{ trans('general.Submit') }}
                </button>
            </div>
        </form>
    </div>
    @push('scripts')
    @endpush
@endsection