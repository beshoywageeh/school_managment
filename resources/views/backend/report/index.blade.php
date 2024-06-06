@extends('layouts.app')
@section('title')
    {{ trans('report.title') }}
@endsection
@push('css')
@endpush
@section('content')
    <div class="row">
        <div class="col">
            <div class="mb-4 card">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="col text-center">
                            <h4>{{ trans('report.title') }} | {{ trans('student.title') }}</h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="mb-4 card">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="col text-center">
                            <h4>{{ trans('report.title') }} | {{ trans('student.title') }}</h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="mb-4 card">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="col text-center">
                            <h4>{{ trans('report.title') }} | {{ trans('student.title') }}</h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="mb-4 card">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="col text-center">
                            <h4>{{ trans('report.title') }} | {{ trans('student.title') }}</h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    @endpush
@endsection
