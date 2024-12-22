@extends('layouts.app')
@section('title')
    {{ trans('permissions.title') }} | {{ trans('General.show') }} | {{ $role->name }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="mb-4 row">
            <div class="col">
                <div class="alert alert-success">
                    <div class="mb-4 rounded-lg row alert-success">
                        <div class="mt-4 text-center col-9">
                            <h4>{{ $role->name }}</h4>
                        </div>
                        <div class="col-3">
                            <br>
                            <br>
                            <a href="{{ route('roles.edit', $role->id) }}"
                                class="btn btn-primary btn-block">{{ trans('General.edit') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($rolePermissions as $table => $roles)
                <div class="mb-4 col-md-3 ">
                    <div class="card h-100">
                        <div class="text-white card-header bg-primary">
                            <div class="row">
                                <div class="col-7">
                                    <h5 class="text-white">
                                        <strong>{{ trans('permissions.' . $table) }}</strong>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list list-hand">
                                @foreach ($roles as $role)
                                    <li><strong>{{ trans('permissions.' . $role->name) }}</strong>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


@push('scripts')
@endpush
