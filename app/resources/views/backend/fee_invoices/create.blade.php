@extends('layouts.app')
@section('title')
    {{ trans('general.new') }} | {{ trans('fee_invoice.title') }}
@endsection
@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
        @include('backend.msg')
        <h4 class="text-lg font-semibold text-gray-800 mb-4">{{ $student->name }}</h4>
        <form id="form-with-multiple-column" class="max-w-full" action="{{ route('fee_invoice.store') }}"
            method="post">
            @csrf
            <input type="hidden" name="student_id" value="{{ $student->id }}">
            <div class="repeater">
                <div data-repeater-list="list_fees">
                    <div data-repeater-item>
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('fee_invoice.name') }}</label>
                                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" name="student_id">
                                    <option value="{{ $student->id }}" selected>{{ $student->name }}</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('fee_invoice.selectschool') }}</label>
                                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" name="fee">
                                    <option value="" selected>{{ trans('fee_invoice.selectschool') }}
                                    </option>
                                    @foreach ($school_fees as $fee)
                                        <option value="{{ $fee->id }}">
                                            {{ $fee->title }} -
                                            {{ number_format($fee->amount, 2) }}&nbsp;ج.م
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex items-end">
                                <button class="w-full px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600" data-repeater-delete type="button">
                                    {{ trans('general.delete') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                    <div class="w-full">
                        <input class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-medium" data-repeater-create type="button"
                            value="{{ trans('general.new') }}" />
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200">

            <input type="hidden" name="grade_id" value="{{ $student->grade_id }}"><input type="hidden"
                value="{{ $student->classroom_id }}" name="classroom_id">
            <div class="flex justify-end">
                <button class="px-6 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 font-medium" type="submit">{{ trans('general.Submit') }}</button>
            </div>
        </form>
    </div>

    @push('scripts')
    @endpush
@endsection