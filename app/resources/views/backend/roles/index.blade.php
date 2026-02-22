@extends('layouts.app')
@section('title')
    {{ trans('permissions.title') }}
@endsection
@section('content')
    <div class="mb-4 row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="col">
                            <h4>{{ trans('permissions.title') }}</h4>
                        </div>
                        <div class="col text-md-right">
                            @can('role-create')
                                <a class="btn btn-success" href={{ route('roles.create') }}>
                                    <i class="ti-plus"></i>
                                    {{ trans('general.new') }}
                                </a>
                            @endcan
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class='table table-sm table-bordered'>
                            <thead>
                                <tr>
                                    <th>{{ trans('permissions.name') }}</th>
                                    <th>{{ trans('permissions.permissions_count') }}</th>
                                    <th>{{ trans('general.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>{{ trans('permissions.' . $role->name) }}</td>
                                        <td>{{ $role->permissions_count }}</td>
                                        <td>
                                            <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                                [
                                                    'type' => 'link',
                                                    'url' => route('roles.delete', $role->id),
                                                    'text' => trans('general.delete'),
                                                    'icon' => 'ti-trash',
                                                    'onclick' => 'confirmation(event)',
                                                    'can' => 'role-delete',
                                                ],
                                                [
                                                    'url' => route('roles.show', $role->id),
                                                    'type' => 'link',
                                                    'text' => trans('general.info'),
                                                    'icon' => 'ti-info-alt',
                                                    'target' => '_blank',
                                                    'can' => 'role-info',
                                                ],
                                                [
                                                    'type' => 'link',
                                                    'url' => route('roles.edit', $role->id),
                                                    'text' => trans('general.edit'),
                                                    'icon' => 'ti-pencil',
                                                    'can' => 'role-edit',
                                                ],
                                            ]" />

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>


                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
@endpush
