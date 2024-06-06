@extends('layouts.app')
@section('title')
    {{ trans('permissions.title') }} | {{ trans('General.new') }}
@endsection
@section('content')
    <div class="mb-4 row">

        <form action="#">
            @csrf
            <div class="row">
                @foreach ($permissions as $table => $roles)
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="">{{ trans($table.'.title') }}</h5>
                                        </div>
                                        <div class="col">
                                        <input type="checkbox" name="" id="">

                                        </div>
                                    </div>

                                </div>
                                <ul class="list list-unstyled ">
                                    @forelse ($roles as $role)
                                    <li>
                                        <input type="checkbox" name="{{$role->id}}" id="">

                                        <span>{{ $role->name }}</span>
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

    @push('scripts')
    @endpush
@endsection
