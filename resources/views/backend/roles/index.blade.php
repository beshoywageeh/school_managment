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
                        <h4 >{{ trans('permissions.title') }}</h4>
                    </div>
                    <div class="col text-md-right">
                        @can('role-create')
                        <a class="button" href={{route('roles.create')}}>
                            <i class="ti-plus"></i>
                            {{ trans('General.new') }}
                        </a>
                        @endcan
                    </div>
                </div>
<div class="table-responsive">
    <table class='table'>
        <thead>
        <tr>
            <th>{{ trans('permissions.name') }}</th>
            <th>{{ trans('permissions.permissions') }}</th>
            <th>{{ trans('general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($roles as $role)
            <tr>
                <td>{{trans('permissions.'.$role->name)}}</td>
                <td>
                    @foreach($role->permissions as $permission)
                        <span class='badge badge-primary'>{{trans('permissions.'.$permission->name)}}</span>
                    @endforeach
                </td>
                <td>
                    <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                        [
                            'url' => route('roles.delete',$role->id),
                            'text' => trans('general.delete'),
                            'icon' => 'ti-trash',
                            'onclick' => 'confirmation(event)',
                            'can'=>'role-delete'
                        ],
                        [
                            'url' =>'#',
                            'text' => trans('general.info'),
                            'icon' => 'ti-info-alt',
                            'target' => '_blank',
                            'can'=>'role-info'
                        ],
                        [
                            'url' => route('roles.edit',$role->id),
                            'text' => trans('general.edit'),
                            'icon' => 'ti-pencil',
                            'can'=>'role-edit'

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
    @push('scripts')


    @endpush
@endsection
