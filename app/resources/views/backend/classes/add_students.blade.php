@extends('layouts.app')
@section('title')
    {{ trans('classes.add_Students') }}
@endsection
@push('css')
@endpush
@section('content')
    <div class="flex flex-wrap">
        <div class="flex-1">
            <div class="mb-4 bg-white rounded-lg shadow-sm border border-gray-200">
                <div class="p-6">
                    <div class="flex flex-wrap text-lg font-semibold mb-4">
                        <div class="flex-1">
                            <h4>{{ trans('classes.add_Students') }}</h4>
                        </div>
                        <div class="flex-1 text-left">
                            <div class="flex flex-wrap text-center">
                                <div class="flex-1">
                                    <h5>{{ $class->grade->name }}</h5>
                                </div>
                                <div class="flex-1">
                                    <h5>{{ $class->class_room->name }}</h5>
                                </div>
                                <div class="flex-1">
                                    <h5>{{ $class->title }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-7xl mx-auto px-4">
                        <form method="post" action="{{ route('classes.add_students_submit') }}">
                            @csrf
                            <input type="hidden" name="class_id" value="{{ $class->id }}">
                            <div class="flex flex-wrap my-2">
                                <div class="w-full">
                                    <label for="">{{ trans('classes.choose_student') }}</label>
                                    <select name="student_id[]" id="" multiple class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all tom-select">
                                        @foreach ($students as $student)
                                            <option value="{{ $student->id }}">{{ $student->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="flex flex-wrap">
                                <div class="flex-1 text-right">
                                    <x-button class="success" type="submit">{{ trans('general.Submit') }}</x-button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
    @push('scripts')
    @endpush
@endsection
