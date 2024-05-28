@extends('layouts.app_login')
@section('page_title')
    {{trans('install.new_school')}}

@endsection
@section('login')
    <div class="w-full mx-auto card">
        <div class="px-10 py-12 card-body">
            <form action="{{ route('new_school') }}" method="post" enctype="multipart/form-data">
                <section class="grid grid-cols-4 gap-6 sm:grid-cols-2 xl:grid-cols-1">
                    @csrf
                    <!-- school data  -->
                    <div class="card">
                        <div class="flex flex-col items-center justify-center">
                            <h5 class="mt-4">    {{trans('install.new_school')}}
                            </h5>
                        </div>
                        <div class="flex items-center justify-center gap-4 card-body">

                            <div class="flex flex-col gap-5 mt-6">
                                <!-- Fullname -->
                                <div>
                                    <label class="mb-1 label">{{trans('install.school_name')}}</label>
                                    <input type="text" class="input @error('schoolname') is-invalid @enderror" name="schoolname" value="{{old('schoolname')}}"placeholder="{{trans('install.school_name')}}" />
                                    @error('schoolname')
                                   <div class="mt-1 error-message">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Email -->
                                <div>
                                    <label class="mb-1 label">{{trans('install.address')}}</label>
                                    <input type="text" class="input @error('title') is-invalid @enderror" name="address" placeholder="{{trans('install.address')}}" value="{{old('address')}}" />
                                    @error('address')
                                    <div class="mt-1 error-message">{{ $message }}</div>
                                @enderror
                                </div>
                                <!-- Password -->
                                <div>
                                    <label class="mb-1 label">{{trans('install.phone')}}</label>
                                    <input type="text" class="input @error('phone') is-invalid @enderror" name="phone" value="{{old('phone')}}" placeholder="{{trans('install.phone')}}" />
                                    @error('phone')
                                    <div class="mt-1 error-message">{{ $message }}</div>
                                @enderror
                                </div>
                                <div>
                                    <label class="mb-1 label">{{trans('install.logo')}}</label>
                                    <input class="input" accept="*/image" type="file" name="logo">
                                    @error('logo')
                                        <span>{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- admin data  -->
                    <div class="card">
                        <div class="flex flex-col items-center justify-center">
                            <h5 class="mt-4">{{trans('install.admin')}}</h5>
                        </div>
                        <div class="flex items-center justify-center gap-4 card-body">

                            <div class="flex flex-col gap-5 mt-6">

                                <div>
                                    <label class="mb-1 label">{{trans('install.first_name')}} </label>
                                    <input type="text" class="input @error('first_name') is-invalid @enderror" name="first_name"  value="{{old('first_name')}}"placeholder="{{trans('install.first_name')}} " />
                                    @error('first_name')
                                    <div class="mt-1 error-message">{{ $message }}</div>
                                @enderror
                                </div>
                                <div>
                                    <label class="mb-1 label">{{trans('install.second_name')}} </label>
                                    <input type="text" class="input @error('second_name') is-invalid @enderror" name="second_name" value="{{old('second_name')}}" placeholder="{{trans('install.second_name')}} " />
                                    @error('second_name')
                                    <div class="mt-1 error-message">{{ $message }}</div>
                                @enderror
                                </div>
                                <div>
                                    <label class="mb-1 label">{{trans('install.email')}}</label>
                                    <input type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" placeholder="{{trans('install.email')}}" />
                                    @error('email')
                                    <div class="mt-1 error-message">{{ $message }}</div>
                                @enderror
                                </div>
                                <div>
                                    <label class="mb-1 label">{{trans('install.password')}} </label>
                                    <input type="password" class="input @error('password') is-invalid @enderror" name="password" value="{{old('password')}}" placeholder="{{trans('install.password')}} " />
                                    @error('password')
                                    <div class="mt-1 error-message">{{ $message }}</div>
                                @enderror
                                </div>
                                <input type="hidden" name="isAdmin" value="1">
                                <input type="hidden" name="loginAllow" value="1">
                            </div>
                        </div>
                    </div>
                </section>
                <div class="mt-8">
                    <button type="submit" class="btn btn-primary w-full py-2.5">{{trans('install.register')}}</button>
                </div>
            </div>
        </form>

    </div>
    </div>
@endsection
@push('js')
@endpush
