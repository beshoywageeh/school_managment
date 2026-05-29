@extends('layouts.app')
@section('title')
    {{ trans('permissions.title') }} | {{ trans('general.show') }} | {{ $role->name }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 mb-6">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <div>
                    <h4 class="text-xl font-semibold text-gray-800">{{ $role->name }}</h4>
                </div>
                <a href="{{ route('roles.edit', $role->id) }}"
                    class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-medium">{{ trans('general.edit') }}</a>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
            @foreach ($rolePermissions as $table => $roles)
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="bg-blue-500 px-4 py-3">
                        <h5 class="text-white font-semibold">
                            {{ trans('permissions.' . $table) }}
                        </h5>
                    </div>
                    <div class="p-4">
                        <ul class="space-y-2">
                            @foreach ($roles as $role)
                                <li class="text-gray-700"><strong>{{ trans('permissions.' . $role->name) }}</strong>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@push('scripts')
@endpush