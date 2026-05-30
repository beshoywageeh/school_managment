@extends('layouts.app')
@section('title')
    {{ trans('schedules.schedules') }}
@endsection
@section('content')
    <div class="mb-4">
        <div class="w-full">
            <livewire:Schedules />
        </div>
    </div>
@endsection
