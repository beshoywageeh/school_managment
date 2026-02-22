@extends('layouts.app')
@section('title')
    {{ trans('profile.title') }} | {{ trans('general.edit') }}
@endsection
@section('content')
    <div class="card mb-40">
        <div class="card-header">
            <h4 class="">{{ trans('profile.title') }} | {{ trans('general.edit') }}</h4>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('profile.update') }}">
                @csrf
                @method('patch')
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label for="name">{{ trans('profile.name') }}</label>
                            <input type="text" name="name" id="name" value="{{ $user->name }}" class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">{{ trans('profile.email') }}</label>
                            <input type="email" name="email" id="email" value="{{ $user->email }}" class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">{{ trans('profile.password') }}</label>
                            <input type="password" name="password" id="password" value="" class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">{{ trans('general.Submit') }}</button>
            </form>
        </div>
    </div>
@endSection
