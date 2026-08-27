@extends('layouts.app')
@section('title')
    {{ trans('exchange_bonds.title') }} {{ trans('general.edit') }}
@endsection
@push('css')
@endpush
@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-6">
            <form action="{{ route('exchange-bonds.update', $exchange->id) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $exchange->id }}">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                    <div>
                        <x-input name="manual" type="text" value="{{ $exchange->manual }}">{{ trans('exchange_bonds.manual') }}</x-input>
                    </div>
                    <div>
                        <label for="student_id" class="block text-sm font-semibold text-gray-700 mb-1">{{ trans('exchange_bonds.student') }}</label>
                        <input name="student_id" value="{{ $exchange->student->id }}" type="hidden">
                        <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-600" value="{{ $exchange->student->name }}" disabled>
                    </div>
                    <div>
                        <x-input name="amount" type="number" step="0.01" value="{{ $exchange->amount }}">{{ trans('exchange_bonds.amount') }}</x-input>
                    </div>
                </div>

                <x-textarea name="note" label="{{ trans('exchange_bonds.note') }}" id="note" rows="3" :value="$exchange->description"></x-textarea>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <button type="submit"
                            class="w-full px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 font-medium">{{ trans('general.Submit') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection