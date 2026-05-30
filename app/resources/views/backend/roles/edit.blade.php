@extends('layouts.app')
@section('title')
    {{ trans('permissions.title') }} | {{ trans('general.edit') }}
@endsection
@section('content')
    <div class="w-full">
        <form action="{{ route('roles.update') }}" method="post">
            @csrf
            <div class="bg-green-50 border border-green-200 rounded-lg p-4 mb-6">
                <input type="hidden" name="id" value="{{ $role->id }}">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center">
                    <div class="md:col-span-3">
                        <x-input name="name" type="text"
                            value="{{ $role->name }}">{{ trans('permissions.create') }}</x-input>
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-medium">{{ trans('general.Submit') }}</button>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach ($permissions as $table => $roles)
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                        <div class="bg-blue-500 text-white p-4">
                            <div class="flex justify-between items-center">
                                <h5 class="font-bold text-white"><strong>{{ trans('permissions.' . $table) }}</strong>
                                </h5>
                                <div class="flex items-center">
                                    <label class="text-sm font-medium mr-2">{{ trans('permissions.select_all') }} </label>
                                    <input type="checkbox" class="w-5 h-5 rounded border-white text-blue-600 focus:ring-blue-500" name="" id=""
                                        onchange="checkAll(this, '{{ $table }}')">
                                </div>
                            </div>
                        </div>
                        <div class="p-4">
                            <ul class="space-y-3">
                                @foreach ($roles as $role)
                                    <li class="flex items-center">
                                        <input type="checkbox"
                                            @if (in_array($role->id, $rolePermissions)) checked @endif
                                            name="permission[{{ $table }}][]"
                                            value="{{ $role->name }}" id="" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                        <span class="ml-2 text-sm text-gray-700"><strong>{{ trans('permissions.' . $role->name) }}</strong></span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        function checkAll(checkbox, tableName) {
            var name = 'permission[' + tableName + '][]';
            var checkboxes = document.querySelectorAll('input[name="' + name + '"]');
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = checkbox.checked = checkbox.checked ? false : true;
            });
        }
    </script>
@endpush