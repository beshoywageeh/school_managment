@extends('layouts.app_login')
@section('page_title')
    {{ trans('login.login') }}
@endsection
@section('login')
    <div class="row justify-content-center no-gutters vertical-align text-center">
        <div class="col-lg-8 col-md-6 bg-white">
            <div class="login-fancy pb-40 clearfix">
                <h3 class="mb-30">{{ trans('login.enter_data') }}</h3>
                <form method="POST" action="{{ route('login') }}" autocomplete="off">
                    @csrf
                    <div class="section-field mb-20">

                        <label class="mb-10" for="name">{{ trans('login.email') }}</label>
                        <input id="name" class="web form-control" type="email" name="email"
                            placeholder="{{ trans('login.email') }} ">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="section-field mb-20">

                        <label class="mb-10" for="Password">{{ trans('login.password') }} </label>
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
