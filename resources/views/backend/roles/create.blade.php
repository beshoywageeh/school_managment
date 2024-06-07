@extends('layouts.app')
@section('title')
    {{ trans('permissions.title') }} | {{ trans('General.new') }}
@endsection
@section('content')
    <div class="mb-4 row">
<div class="card">
    <div class="card-body">
    <form action="{{route('roles.store')}}" method="post">
        @csrf

        <div class="row mb-4 alert-success rounded-lg">
            <div class="col-9">
                <x-input name="name" type="text">{{ trans('permissions.create') }}</x-input>
            </div>
            <div class="col-3">
                <br>
                <br>
                <button type="submit" class="btn btn-primary btn-block">{{trans('General.Submit')}}</button>
            </div>
        </div>
        <hr>
        <div class="row">
            @foreach ($permissions as $table => $roles)
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="card-title">
                                <div class="row">
                                    <div class="col-7">
                                        <h5 class="">{{ trans('permissions.' . $table) }}</h5>
                                    </div>
                                    <div class="col-5 text-right">
                                        <label >{{ trans('permissions.select_all') }} </label>
                                        <input type="checkbox" class="form-select" name=""
                                               onchange="checkAll(this, '{{ $table }}')">
                                    </div>
                                </div>
                            </div>

                            <ul class="list list-unstyled ">
                                @forelse ($roles as $role)
                                    <li>
                                        <input type="checkbox" name="permission[{{$table}}][]" value="{{ $role->name }}"
                                               id="">
                                        <span>{{ trans('permissions.' . $role->name) }}</span>
                                    </li>
                                @empty
                                @endforelse

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
