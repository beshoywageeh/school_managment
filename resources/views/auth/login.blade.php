@extends('layouts.app_login')
@section('page_title')
    {{ trans('login.login') }}
@endsection
@section('login')
    <div class="text-center row justify-content-center no-gutters vertical-align">
        <div class="bg-white col-lg-6 col-md-4">
            <div class="clearfix pb-40 login-fancy">
                <h3 class="mb-30">{{ trans('login.enter_data') }}</h3>
                <form method="POST" action="{{ route('login') }}" autocomplete="off">
                    @csrf
                    <div class="mb-20 section-field">
                        <input id="name" class="web form-control" type="email" name="email"
                            placeholder="{{ trans('login.email') }} ">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-20 section-field">
                        <input id="Password" class="Password form-control" type="password"
                            placeholder="{{ trans('login.password') }}" name="password">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="button">{{ trans('login.login') }} </button>
                </form>
            </div>
        </div>
    </div>
@endsection
