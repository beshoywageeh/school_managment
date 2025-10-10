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
                            {!! $dataTable->table(['class' => 'datatable table table-sm table-striped table-hover dt-buttons'], true) !!}
                        @endcan
                        @include('backend.Students.import')
                    </div>

                </div>
            </div>
        </div>

    </div>
    @push('scripts')
        {!! $dataTable->scripts(attributes: ['type' => 'module']) !!}
    @endpush
@endsection
