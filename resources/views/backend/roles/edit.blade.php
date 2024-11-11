@extends('layouts.app')
@section('title')
    {{ trans('permissions.title') }} | {{ trans('General.edit') }}
@endsection
@section('content')
    <div class="mb-4 row">
        <div class="bg-transparent card">
            <form action="{{ route('roles.update') }}" method="post">
                @csrf
            <div class="card-header alert alert-success">
                <input type="hidden" name="id" value="{{ $role->id }}">
                <div class="mb-4 rounded-lg row alert-success">
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

            </div>
            <div class="card-body">
            <div class="row">
                @foreach ($permissions as $table => $roles)
                    <div class="mb-4 col-md-3 ">
                        <div class="card h-100" >
                            <div class="text-white card-header bg-primary">
                                <div class="row">
                                    <div class="col-7">
                                        <h5 class="text-white"><strong>{{ trans('permissions.' . $table) }}</strong></h5>
                                    </div>
                                    <div class="text-right col-5">
                                        <label>{{ trans('permissions.select_all') }} </label>
                                        <input type="checkbox" class="form-select" name="" id=""
                                            onchange="checkAll(this, '{{ $table }}')">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list list-unstyled">
                                    @foreach ($roles as $role)
                                        <li>
                                            <input type="checkbox" @if (in_array($role->id, $rolePermissions)) checked @endif
                                                name="permission[{{$table}}][]" value="{{ $role->name }}" id="">
                                            <span><strong>{{ trans('permissions.' . $role->name) }}</strong></span>
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
