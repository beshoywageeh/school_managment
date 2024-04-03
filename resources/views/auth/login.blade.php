@extends('layouts.app_login')
@section('page_title')
    {{trans('login.login')}}
@endsection
@section('login')
<div class="w-full max-w-md mx-auto card">
    <div class="px-10 py-12 card-body">
      <div class="flex flex-col items-center justify-center">
        <img src="{{URL::asset('assests/svg/logo-small.svg')}}" alt="logo" class="h-[50px]" />
        <h5 class="mt-4">{{ trans('login.msg') }}</h5>
        <p class="text-sm text-slate-500 dark:text-slate-400">{{trans('login.enter_data')}} </p>
      </div>

      <form method="POST" action="{{ route('login') }}">
        @csrf
    <div class="flex flex-col gap-5 mt-6">
        <!-- Email -->
        <div>
          <label class="mb-1 label">{{trans('login.email')}}</label>
          <input type="text" class="input" name="email" placeholder="{{trans('login.email')}} " />
          @error('email')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
        </div>
        <!-- Password-->
        <div class="">
          <label class="mb-1 label">{{trans('login.password')}} </label>
          <input type="password" class="input" name="password" placeholder="{{trans('login.password')}}  " />
          @error('password')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
        </div>
      </div>
      <!-- Login Button -->
      <div class="mt-8">
        <button type="submit" class="btn btn-primary w-full py-2.5">{{trans('login.login')}} </button>
      </div>
  </form>
    </div>
  </div>
@endsection

