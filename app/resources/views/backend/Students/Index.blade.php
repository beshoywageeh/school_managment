@extends('layouts.app')
@section('title')
    {{ trans('student.title') }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="row mb-30">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <x-Student-header />
                    <div class="table-responsive">
                        @can('Students-list')
                            <livewire:students.students />
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('backend.Students.import')
@endsection
