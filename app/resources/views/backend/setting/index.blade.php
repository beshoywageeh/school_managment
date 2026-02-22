@extends('layouts.app')
@section('title')
    {{ trans('setting.title') }}
@endsection
@section('content')
    <div class="row mb-30">
        <div class="col-xl-4">
            <div class="row mb-30">
                <div class="col-xl-12">
                    <div class="card card-statistics h-100">
                        <div class="text-center card-body position-relative">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                      <td rowspan="4">
                                        @if ($school_info->image == null)
                                            <img class="img-fluid rounded-circle"
                                                src="{{ asset('assests/images/loop_labs.png') }}" alt="{{ $school_info->name }}"/>
                                        @else
                                            <img class="img-fluid rounded-circle"
                                                src="{{URL::asset('storage/attachments/schools/' . $school->slug . '/' . $school->image->filename)}}"
                                                alt="{{ $school_info->name }}"/>
                                        @endif
                                      </td>
                                    </tr>
                                    <tr>
                                        <th>{{ trans('setting.total_student') }}</th>
                                        <td>{{ $std_count }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ trans('setting.total_teacher') }}</th>
                                        <td>{{ $teach_count }}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ trans('setting.total_classroom') }}</th>
                                        <td>{{ $grd_count }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <p>
                                            {{ $school_info->address }}
                                        </p>
                                        <p>{{ $school_info->phone }}</p></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-40">
                <div class="col-xl-12">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ trans('Sidebar.Grade') }}</h5>
                            <ul class="list-unstyled">
                                @foreach ($grades as $grade)
                                    <li class="mb-20">
                                        <div class="media">

                                            <div class="media-body">
                                                <h6 class="mt-0 mb-0">
                                                    {{ $grade->name }}
                                                    <span class="float-right text-danger">
                                                        {{ $grade->students_count }}</span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="mt-20 divider dotted"></div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="row card-title">
                                <div class="col">
                                    <h2>
                                        {{ trans('setting.auth_details') }}</h2>
                                    <p class="mb-4 text-sm font-normal text-slate-400">
                                        {{ trans('setting.auth_details_desc') }}
                                    </p>
                                </div>
                                <div class="col text-md-right">
                                    <span class="my-1">{{ trans('setting.auth_name') }} : </span>
                                    <h4>{{ $user->name }}</h4>
                                </div>
                            </div>

                            <form method="post" action="{{ route('setting.update_password') }}">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <label class="block my-1">{{ trans('setting.old_password') }}</label>
                                        <input type="password" name="old_password" class="form-control" id="old_password" />
                                    </div>
                                    <div class="col">
                                        <label class="block my-1" for="new-password">
                                            {{ trans('setting.new_password') }}
                                        </label>
                                        <input type="password" name="new_password" class="form-control" id="new-password" />
                                    </div>
                                    <div class="col text-md-right">
                                        <label for=""></label>
                                        <!-- Button  -->
                                        <button type="submit"
                                            class="btn btn-danger btn-block">{{ trans('general.buttons.edit') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">
                        {{ trans('setting.school_details') }}</h2>
                    <form action="{{ route('settings.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $school_info->id }}">
                        <!-- Name  -->
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th><label class="" for="first-name">{{ trans('setting.name') }}</label></th>
                                    <th><label class="" for="last-name">{{ trans('setting.phone') }}</label></th>
                                </tr>
                                <tr>
                                    <th>
                                        <input type="text" class="form-control" value="{{ $school_info->name }}"
                                            name="school_name" />
                                        @error('school_name')
                                            <div class="mt-1 alert alert-error">{{ $message }}</div>
                                        @enderror
                                    </th>
                                    <th>
                                        <input type="text" class="form-control" value="{{ $school_info->phone }}"
                                            name="school_phone" />
                                        @error('school_phone')
                                            <div class="mt-1 alert alert-error">{{ $message }}</div>
                                        @enderror
                                    </th>
                                </tr>
                                <tr>
                                    <th><label>{{ trans('setting.address') }}</label></th>
                                    <th><label for="">{{ trans('general.logo') }}</label></th>
                                </tr>
                                <tr>
                                    <th><textarea class="form-control" rows="4" name="address">{{ $school_info->address }}</textarea>
                                    @error('address')
                                        <div class="mt-1 alert alert-error">{{ $message }}</div>
                                    @enderror</th>
                                    <th><input type="file" name="logo" accept="image/*" class="form-control">
                                   </th>
                                </tr>
                            </table>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label>
                                    {{ trans('setting.heading_right') }}
                                </label>
                                <textarea class="form-control" rows="4" name="head_right">{{ $school_info->heading_right }}</textarea>
                                @error('head_right')
                                    <div class="mt-1 alert alert-error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <label>
                                    {{ trans('setting.footer_right') }}
                                </label>
                                <textarea class="form-control" rows="4"  name="footer_right">{{ $school_info->footer_right }}</textarea>
                                @error('footer_right')
                                    <div class="mt-1 alert alert-error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <label>
                                    {{ trans('setting.footer_left') }}
                                </label>
                                <textarea class="form-control" rows="4" id="" name="footer_left">{{ $school_info->footer_left }}</textarea>
                                @error('footer_left')
                                    <div class="mt-1 alert alert-error">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!-- heading  -->
                        <div class="mt-4 row">
                            <div class="text-right col">
                                <button type="submit" class="btn btn-block btn-primary">{{ trans('general.buttons.save') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
