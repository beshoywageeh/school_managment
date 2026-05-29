@extends('layouts.app')
@section('title')
    {{ trans('exchange_bonds.title') }} {{ trans('general.new') }}
@endsection
@push('css')
@endpush
@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-6">
            <form action="{{ route('exchange_bonds.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                    <div>
                        <label for="manual" class="block text-sm font-semibold text-gray-700 mb-1">{{ trans('exchange_bonds.manual') }}</label>
                        <input type="text" name="manual" id="manual" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                    </div>
                    <div>
                        <label for="student_id" class="block text-sm font-semibold text-gray-700 mb-1">{{ trans('exchange_bonds.student') }}</label>
                        <input name="student_id" value="{{ $student->id }}" type="hidden">
                        <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-600 mb-2" value="{{ $student->name }}" disabled>
                        <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-600"
                            value="{{ Number::Currency($student->student_account_sum_debit - $student->student_account_sum_credit, 'EGP') }}"
                            disabled>
                    </div>
                    <div>
                        <label for="amount" class="block text-sm font-semibold text-gray-700 mb-1">{{ trans('exchange_bonds.amount') }}</label>
                        <input type="number" name="amount" id="amount" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" step="0.01">
                    </div>
                </div>

                <div class="mb-4">
                    <label for="note" class="block text-sm font-semibold text-gray-700 mb-1">{{ trans('exchange_bonds.note') }}</label>
                    <textarea name="note" id="note" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" rows="3"></textarea>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <button type="submit"
                            class="w-full px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 font-medium">{{ trans('general.Submit') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection