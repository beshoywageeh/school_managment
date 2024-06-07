@extends('layouts.app')
@section('title')
    {{ trans('permissions.title') }} | {{ trans('General.edit') }}
@endsection
@section('content')
    <div class="mb-4 row">
        <div class="card">
            <div class="card-body">


        <form action="{{ route('roles.update') }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $role->id }}">
            <div class="row mb-4 alert-success rounded-lg">
                <div class="col-9">
                    <x-input name="name" type="text"
                        value="{{ $role->name }}">{{ trans('permissions.create') }}</x-input>
                </div>
                <div class="col-3">
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary btn-block">{{ trans('General.Submit') }}</button>
                </div>
            </div>
            <div class="row">
                @foreach ($permissions as $table => $roles)
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <div class="row">
                                        <div class="col-7">
                                            <h5 class="">{{ trans('permissions.' . $table) }}</h5>
                                        </div>
                                        <div class="col-5 text-right">
                                            <label>{{ trans('permissions.select_all') }} </label>
                                            <input type="checkbox" class="form-select" name="" id=""
                                                onchange="checkAll(this, '{{ $table }}')">
                                        </div>
                                    </div>
                                </div>
                                <ul class="list list-unstyled ">
                                    @foreach ($roles as $role)
                                        <li>
                                            <input type="checkbox" @if (in_array($role->id, $rolePermissions)) checked @endif
                                                name="permission[{{$table}}][]" value="{{ $role->name }}" id="">
                                            <span>{{ trans('permissions.' . $role->name) }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </form>
            </div>
        </div>
            </div>

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
@endsection
