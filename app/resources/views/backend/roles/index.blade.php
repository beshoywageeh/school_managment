@extends('layouts.app')
@section('title')
    {{ trans('permissions.title') }}
@endsection
@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-6 border-b border-gray-100 flex justify-between items-center">
            <h4 class="text-lg font-bold text-gray-800">{{ trans('permissions.title') }}</h4>
            @can('role-create')
                <a class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 flex items-center gap-2" href={{ route('roles.create') }}>
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                    {{ trans('general.new') }}
                </a>
            @endcan
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('permissions.name') }}</th>
                        <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('permissions.permissions_count') }}</th>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">{{ trans('general.actions') }}</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach ($roles as $role)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm text-gray-800 font-medium">{{ trans('permissions.' . $role->name) }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $role->permissions_count }}</td>
                            <td class="px-6 py-4 text-center">
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
@endsection
@push('scripts')
@endpush