@extends('layouts.app')
@section('title')
    {{ trans('classes.add_Students') }}
@endsection
@push('css')
@endpush
@section('content')
    <div class="row">
        <div class="col">
            <div class="mb-4 card">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="col-lg">
                            <h4>{{ trans('classes.add_Students') }}</h4>
                        </div>
                        <div class="col-lg text-md-right">
                            <div class="row text-center ">
                                <div class="col"><h5>{{ $class->grade->name }}</h5></div>
                                <div class="col"><h5>{{ $class->class_room->name }}</h5></div>
                                <div class="col"><h5>{{ $class->title }}</h5></div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <form method="post" action="{{ route('classes.add_students_submit') }}">
                            @csrf
                            <input type="hidden" name="class_id" value="{{ $class->id }}">
                            <div class="row my-2">
                                <div class="col-lg-12">
                                    <label for="">{{trans('classes.choose_student')}}</label>
                                    <select name="student_id[]" id="" multiple class="custom-select select2 w-100">
                                        @foreach ($students as $student)
                                            <option value="{{ $student->id }}">{{ $student->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-right">
                                    <button class="btn btn-success" type="submit">{{ trans('General.Submit') }}</button>
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
