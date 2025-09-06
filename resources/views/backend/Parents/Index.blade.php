@extends('layouts.app')
@section('title')
    {{ trans('Parents.title') }}
@endsection
@section('content')
    <div class="mb-4 row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="col">
                            <h4>{{ trans('Parents.title') }}</h4>
                        </div>
                        <div class="col text-md-right">
                            @can('parents-create')
                                <a href="{{ route('parents.create') }}" class="btn btn-success">
                                    <i class="ti-plus"></i>
                                    {{ trans('parents.new') }}
                                </a>
                            @endcan
                            @can('Parents-import_Excel')
                                <button type="button" class="btn btn-primary" data-target="#Import_Excel"
                                    data-toggle="modal"><i class="ti-upload"></i>
                                    {{ trans('general.Import_Excel') }}</button>
                                @include('backend.Parents.import')
                            @endcan
                        </div>
                    </div>
                    <div class="table-responsive">
                        @can('parents-list')
                        {!! $dataTable->table(['class' => 'datatable table table-sm table-striped table-hover dt-buttons'], true) !!}
                        @endcan
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@push('scripts')
{{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
