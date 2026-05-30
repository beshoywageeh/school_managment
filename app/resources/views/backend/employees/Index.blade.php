@extends('layouts.app')
@section('title')
    {{ trans('employees.title') }}
@endsection
@section('content')
    <div class="mb-4 flex flex-wrap">
        <div class="flex-1">

            <livewire-employees-table />

        </div>
    </div>


@endsection
