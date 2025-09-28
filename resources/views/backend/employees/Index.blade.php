@extends('layouts.app')
@section('title')
    {{ trans('employees.title') }}
@endsection
@section('content')
    <div class="mb-4 row">
        <div class="col">

            <livewire-employees-table />

        </div>
    </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @endpush
@endsection
