@extends('layouts.app_login')
@section('page_title')
    {{trans('install.new_school')}}
@endsection
@section('login')
    <div class="card">
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="text-center card-title">
                <h4>{{trans('install.new_school')}}</h4>
            </div>
            <form action="{{ route('config') }}" method="post" enctype="multipart/form-data">

                @csrf
                <div class="row">
                    <div class="col">
                        <fieldset class='p-4 border rounded border-primary'>
                            <legend class="m-auto text-center text-muted">{{trans('install.school_details')}}</legend>

                            <div class="form-group">
                                <label class="">{{trans('install.school_name')}}</label>
                                <input type="text" class="form-control @error('schoolname') is-invalid @enderror"
                                       name="schoolname"
                                       value="{{old('schoolname')}}" placeholder="{{trans('install.school_name')}}"/>
                                @error('schoolname')
                                <div class="mt-1 error-message">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="">{{trans('install.address')}}</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                       name="address"
                                       placeholder="{{trans('install.address')}}" value="{{old('address')}}"/>
                                @error('address')
                                <div class="mt-1 error-message">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="">{{trans('install.phone')}}</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                       name="phone"
                                       value="{{old('phone')}}" placeholder="{{trans('install.phone')}}"/>
                                @error('phone')
                                <div class="mt-1 error-message">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="">{{trans('install.logo')}}</label>
                                <input class="form-control" accept="*/image" type="file" name="logo">
                                @error('logo')
                                <span>{{$message}}</span>
                                @enderror
                            </div>
                        </fieldset>
                    </div>
                    <div class="col">
                        <fieldset class='p-4 border rounded border-primary'>
                            <legend class="m-auto text-center text-muted">{{trans('install.admin')}}</legend>
                            <div class="form-group">
                                <label class="">{{trans('install.name')}} </label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name"
                                       value="{{old('name')}}" placeholder="{{trans('install.name')}} "/>
                                @error('name')
                                <div class="mt-1 error-message">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="">{{trans('install.password')}} </label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                       name="password"
                                       value="{{old('password')}}" placeholder="{{trans('install.password')}} "/>
                                @error('password')
                                <div class="mt-1 error-message">{{ $message }}</div>
                                @enderror
                            </div>
                            <input type="hidden" name="isAdmin" value="1">
                            <input type="hidden" name="loginAllow" value="1">
                        </fieldset>
                    </div>
                </div>

                <div class="mt-40 row">
                    <div class="col text-md-right">
                        <button type="submit" class="button">{{trans('install.register')}}</button>

                    </div>
                </div>

            </form>
        </div>

    </div>

@endsection
@push('js')
@endpush
