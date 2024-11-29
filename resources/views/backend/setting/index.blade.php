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
                        @if ($school_info->image == null)
                            <div class="p-4 text-center bg"
                                style="background: url({{ asset('assests/images/loop_labs.png') }});background-repeat: no-repeat;background-size: cover;">
                                <h5 class="text-white mb-70 position-relative">
                                    {{ $school_info->name }}
                                </h5>

                            </div>
                        @else
                            <div class="p-4 text-center bg"
                                style="background: url({{ asset('storage/app/attachments/schools/' . $school_info->slug . '/' . $school_info->image->filename) }});background-repeat: no-repeat;background-size: cover;">
                                <h5 class="text-white mb-70 position-relative">
                                    {{ $school_info->name }}
                                </h5>

                            </div>
                        @endif

                        <div class="text-center card-body position-relative">
                            <div class="avatar-top">
                                @if ($school_info->image == null)
                                    <img class="img-fluid w-25 rounded-circle"
                                        src="{{ asset('assests/images/loop_labs.png') }}" alt="{{ $school_info->name }}">
                                @else
                                    <img class="img-fluid w-25 rounded-circle"
                                        src="{{ asset('storage/app/attachments/schools/' . $school_info->slug . '/' . $school_info->image->filename) }}"
                                        alt="{{ $school_info->name }}">
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-sm-4 mt-30">
                                    <b>{{ trans('setting.total_student') }}</b>
                                    <h4 class="mt-10 text-success">{{ $std_count }}</h4>
                                </div>
                                <div class="col-sm-4 mt-30">
                                    <b>{{ trans('setting.total_teacher') }}</b>
                                    <h4 class="mt-10 text-danger">{{ $teach_count }}</h4>
                                </div>
                                <div class="col-sm-4 mt-30">
                                    <b>{{ trans('setting.total_classroom') }}</b>
                                    <h4 class="mt-10 text-warning">{{ $grd_count }}</h4>
                                </div>
                            </div>
                            <div class="mt-20 divider"></div>
                            <p class="mt-30">
                                {{ $school_info->address }}
                            </p>
                            <p class="mt-10">{{ $school_info->phone }}</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
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
                        <div class="row">
                            <div class="col">
                                <label class="" for="first-name">{{ trans('setting.name') }}</label>
                                <input type="text" class="form-control" value="{{ $school_info->name }}"
                                    name="school_name" />
                                @error('school_name')
                                    <div class="mt-1 alert alert-error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <label class="" for="last-name">{{ trans('setting.phone') }}</label>
                                <input type="text" class="form-control" value="{{ $school_info->phone }}"
                                    name="school_phone" />
                                @error('school_phone')
                                    <div class="mt-1 alert alert-error">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <!-- address  -->
                        <div class="mt-4 row">
                            <div class="col">
                                <label>{{ trans('setting.address') }}
                                </label>
                                <textarea class="form-control" rows="4" name="address">{{ $school_info->address }}</textarea>
                                @error('address')
                                    <div class="mt-1 alert alert-error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="">{{ trans('general.logo') }}</label>
                                <input type="file" name="logo" accept="image/*" id="logo"
                                    onchange="showPreview(event)" hidden>
                                <img src="{{ asset('assests/images/logo-icon-dark.png') }}" style="margin-right: 50%"
                                    class="img-fluid w-25 avatar rounded-circle user-avatar"
                                    onclick="  $('#logo').trigger('click');" id="preview">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>
                                    {{ trans('setting.heading_right') }}
                                </label>
                                <textarea class="form-control " id="summernote" name="head_right">{{ $school_info->heading_right }}</textarea>
                                @error('head_right')
                                    <div class="mt-1 alert alert-error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <label>
                                    {{ trans('setting.footer_right') }}
                                </label>
                                <textarea class="form-control" rows="20" id="summernote1" name="footer_right">{{ $school_info->footer_right }}</textarea>
                                @error('footer_right')
                                    <div class="mt-1 alert alert-error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <label>
                                    {{ trans('setting.footer_left') }}
                                </label>
                                <textarea class="form-control" rows="20" id="summernote2" name="footer_left">{{ $school_info->footer_left }}</textarea>
                                @error('footer_left')
                                    <div class="mt-1 alert alert-error">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!-- heading  -->
                        <div class="mt-4 row">
                            <div class="text-right col">
                                <button type="submit" class="btn btn-primary">{{ trans('General.Submit') }}</button>
                            </div>


                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="row mb-30">
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
                                    class="btn btn-danger btn-block">{{ trans('general.update') }}</button>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">{{ trans('academic_year.title') }}</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatable">
                            <tr>
                                <th>#</th>
                                <th>{{ trans('academic_year.year_start') }}</th>
                                <th>{{ trans('academic_year.year_end') }}</th>
                                <th>{{ trans('academic_year.status') }}</th>
                                <th>{{ trans('general.created_at') }}</th>
                            </tr>
                            @forelse ($academic_years as $acadmic_year)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $acadmic_year->year_start }}</td>
                                    <td>{{ $acadmic_year->year_end }}</td>
                                    <td>
                                        <span class="{{ $acadmic_year->status->color() }}">
                                            {{ $acadmic_year->status->lang() }}
                                        </span>
                                    </td>
                                    <td>{{ $acadmic_year->created_at->format('Y-m-d') }}</td>
                                </tr>
                            @empty
                                <div class="alert alert-primary" role="alert">
                                    <i width="1rem" height="1rem" data-feather="alert-circle"></i>
                                    <p>{{ trans('general.Msg') }}</p>
                                </div>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>

    @push('scripts')
        <script>
            function showPreview(event) {
                if (event.target.files.length > 0) {
                    let src = URL.createObjectURL(event.target.files[0]),
                        preview = document.getElementById("preview");
                    preview.src = src;
                }
            }
        </script>
    @endpush
@endsection
