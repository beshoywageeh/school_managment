@extends('layouts.app')
@section('title')
    {{ trans('general.edit') }} | {{ trans('fee_invoice.title') }}
@endsection
@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
        @include('backend.msg')
        <form id="form-with-multiple-column" class="max-w-full" action="{{ route('fee_invoice.update') }}"
            method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $fee->id }}">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                <x-select name="student_id" label="{{ trans('fee_invoice.name') }}">
                    <option value="{{ $fee->students->id }}" selected>{{ $fee->students->name }}</option>
                </x-select>
                <x-select name="fee" label="{{ trans('fee_invoice.selectschool') }}">
                    <option value="" selected>{{ trans('fee_invoice.selectschool') }}</option>
                    @foreach ($sfees as $sfee)
                        <option value="{{ $sfee->id }}" @selected($fee->id == $sfee->id)>
                            {{ $sfee->title }} - {{ number_format($sfee->amount, 2) }}&nbsp;ج.م
                        </option>
                    @endforeach
                </x-select>
            </div>

            <input type="hidden" name="grade_id" value="{{ $fee->students->grade_id }}">
            <input type="hidden" value="{{ $fee->students->classroom_id }}" name="classroom_id">
            <div class="flex justify-end">
                <button class="px-6 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 font-medium" type="submit">{{ trans('general.Submit') }}</button>
            </div>
        </form>
    </div>

    @push('scripts')
    @endpush
@endsection