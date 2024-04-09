@php
    $page = Str::after(Str::ucfirst(request()->route()->uri()), '/');
@endphp
@extends('layouts.app')
@section('page_title')
    {{ trans($page . '.title') }}
@endsection
@push('css')
    <style>
        table,
        thead,
        tbody,
        tr,
        td,
        th {
            text-align: center !important;
        }
    </style>
@endpush
@section('main_content')
@include('backend.msg')

    @switch($page)
        @case(request()->is('*/grades'))
            <livewire:Grades :page="$page" />
        @break

        @case(request()->is('*/class_rooms'))
            <livewire:ClassRooms :page="$page" />
        @break

        @case(request()->is('*/parents'))
            <livewire:Parents :page="$page" />
        @break

        @case(request()->is('*/students'))
            <livewire:Student :page="$page" />
        @break
        @case(request()->is('*/school_fees'))
            <livewire:school_fees :page="$page" />
        @break

        @default
    @endswitch
@endsection
@push('scripts')
@endpush
