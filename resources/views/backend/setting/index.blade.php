@extends('layouts.app')
@section('title')
    {{ trans('setting.title') }}
@endsection
@section('content')
    <div class="row mb-30">
        <div class="col-xl-4">
            <div class="card card-statistics h-100">
                <div class="p-4 text-center bg" style="background: url({{ asset('assests/images/bg/01.jpg') }})">
                    <h5 class="text-white mb-70 position-relative">
                        {{ $school->name }}
                    </h5>

                </div>
                <div class="text-center card-body position-relative">
                    <div class="avatar-top">
                        <img class="img-fluid w-25 rounded-circle"
                            src="{{ asset('storage/attachments/schools/'.$school->slug .'/'. $school->image->filename) }}"
                            alt="{{ $school->name }}">
                    </div>
                    <div class="row">
                        <div class="col-sm-4 mt-30">
                            <b>{{ trans('setting.total_student') }}</b>
                            <h4 class="mt-10 text-success">{{$std_count}}</h4>
                        </div>
                        <div class="col-sm-4 mt-30">
                            <b>{{ trans('setting.total_teacher') }}</b>
                            <h4 class="mt-10 text-danger">{{$teach_count}}</h4>
                        </div>
                        <div class="col-sm-4 mt-30">
                            <b>{{ trans('setting.total_classroom') }}</b>
                            <h4 class="mt-10 text-warning">{{$grd_count}}</h4>
                        </div>
                    </div>
                    <div class="mt-20 divider"></div>
                    <p class="mt-30">
                        {{ $school->address }}
                    </p>
                    <p class="mt-10">{{ $school->phone }}</p>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">
                        {{ trans('setting.school_details') }}</h2>
                    <!-- Name  -->
                    <div class="row">
                        <div class="col">
                            <label class="" for="first-name">{{ trans('setting.name') }}</label>
                            <input type="text" class="form-control" value="{{ $school->name }}" disabled />
                        </div>
                        <div class="col">
                            <label class="" for="last-name">{{ trans('setting.phone') }}</label>
                            <input type="tell" class="form-control" value="{{ $school->phone }}" disabled />
                        </div>


                    </div>
                    <!-- address  -->
                    <div class="row">
                        <div class="col">
                            <label class="label" for="phone">{{ trans('setting.address') }}
                            </label>
                            <input type="text" class="form-control" value="{{ $school->address }}" id="phone"
                                disabled />
                        </div>
                        <div class="col"></div>
                    </div>
                    <!-- heading  -->
                    <div class="row">
                        <div class="col">
                            <label class="label" for="country">
                                {{ trans('setting.heading_right') }}
                            </label>
                            <input type="text" class="form-control" value="{{ $school->heading_right }}" id="country"
                                disabled />
                        </div>
                        <div class="col">
                            <label class="label" for="country">{{ trans('setting.heading_left') }}

                            </label>
                            <input type="text" class="form-control" value="{{ $school->heading_left }}"
                                id="country"disabled />
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-30">
        <div class="col-xl-4">
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
    <div class="row mb-30">
        <div class="col-xl-4"></div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="col">
                            <h2 >
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
                                <!-- Button  -->
                                <button type="submit" class="btn btn-danger btn-block">{{ trans('general.update') }}</button>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    @endpush
@endsection
