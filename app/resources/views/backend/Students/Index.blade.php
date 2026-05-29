@extends('layouts.app')
@section('title')
    {{ trans('student.title') }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-6">
            <x-Student-header />
        </div>
        @can('Students-list')
            <livewire:students.students />
        @endcan
    </div>
    
@endsection
