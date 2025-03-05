@extends('layouts.app')
@section('title')
{{trans('schedules.schedules')}}
@endsection
@section('content')

        <div class="mb-4 row">
            <div class="col-md-12">
                <livewire:schedules/>
            </div>
        </div>
@endsection
