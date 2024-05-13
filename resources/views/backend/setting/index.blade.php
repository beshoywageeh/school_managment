@extends('layouts.app')
@section('title')
    {{ trans('setting.title') }}
@endsection
@section('content')

    <!-- Page Title Ends -->
    <!-- User Profile Start  -->
    <div class="grid grid-cols-1 gap-6 lg:grid-cols-4">
        <!-- Left Section Start  -->
        <section class="col-span-1 flex h-min w-full flex-col gap-6 lg:sticky lg:top-20">
            <!-- User Avatar & Status  -->
            <div class="card">
                <div class="card-body flex flex-col items-center">
                    <div class="relative my-2 h-24 w-24 rounded-full">
                        <img src="{{ asset('storage/attachments/schools/' . $school->image->filename) }}"
                            alt="{{ $school->name }}" id="user-image" class="h-full w-full rounded-full" />
                        <label for="upload-avatar"
                            class="absolute bottom-0 right-0 flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-slate-50 p-2 dark:bg-slate-900">
                            <span class="text-slate-600 dark:text-slate-300">
                                <i class="w-full" data-feather="camera"></i>
                            </span>
                            <input type="file" accept="image/jpeg, image/png, image/jpg" class="hidden"
                                id="upload-avatar" />
                        </label>
                    </div>
                    <h2 class="text-[16px] font-medium text-slate-700 dark:text-slate-200">{{ $school->name }}</h2>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="mb-2 flex items-center justify-between">
                        <h3 class="text-[16px] font-semibold text-slate-700 dark:text-slate-200">
                            {{ trans('Sidebar.Grade') }}</h3>
                    </div>
                    <hr />
                    @foreach ($grades as $grade)
                        <div class="my-3 flex items-center gap-4">
                            <div>
                                <h5 class="text-sm font-medium text-slate-700 dark:text-slate-300">{{ $grade->name }}</h5>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- Left Section End  -->
        <!-- Right Section Start  -->
        <section class="col-span-1 flex w-full flex-1 flex-col gap-6 lg:col-span-3 lg:w-auto">
            <!-- school details  -->
            <div class="card">
                <div class="card-body">
                    <h2 class="text-[16px] font-semibold text-slate-700 dark:text-slate-300">
                        {{ trans('setting.school_details') }}</h2>
                    <!-- Name  -->
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                        <label class="label" for="first-name">
                            <span class="my-1 block">{{ trans('setting.name') }}</span>
                            <input type="text" class="input" value="{{ $school->name }}" disabled />
                        </label>
                        <label class="label" for="last-name">
                            <span class="my-1 block">{{ trans('setting.phone') }}</span>
                            <input type="tell" class="input" value="{{ $school->phone }}" disabled />
                        </label>
                    </div>
                    <!-- address  -->
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                        <label class="label" for="phone">
                            <span class="my-1 block">{{ trans('setting.address') }}</span>
                            <input type="text" class="input" value="{{ $school->address }}" id="phone" disabled />
                        </label>
                    </div>
                    <!-- heading  -->
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                        <label class="label" for="country">
                            <span class="my-1 block">{{ trans('setting.heading_right') }}</span>
                            <input type="text" class="input" value="{{ $school->heading_right }}" id="country"
                                disabled />
                        </label>
                        <label class="label" for="country">
                            <span class="my-1 block">{{ trans('setting.heading_left') }}</span>
                            <input type="text" class="input" value="{{ $school->heading_left }}"
                                id="country"disabled />
                        </label>
                    </div>
                </div>
            </div>
            <!-- Auth Details  -->
            <div class="card">
                <div class="card-body">
                    <h2 class="text-[16px] font-semibold text-slate-700 dark:text-slate-300">
                        {{ trans('setting.auth_details') }}</h2>
                    <p class="mb-4 text-sm font-normal text-slate-400">
                        {{ trans('setting.auth_details_desc') }}
                    </p>
                    <div class="flex bg-secondary text-center mb-4">
                        <span class="my-1">{{ trans('setting.auth_name') }} : </span>
                        <h4>{{ $user->first_name }} {{ $user->second_name }}</h4>
                    </div>
                    <form method="post" action="{{ route('setting.update_password') }}" class="flex flex-col gap-5">
                        @csrf
                        <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                            <label class="label" for="old_password">
                                <span class="my-1 block">{{ trans('setting.old_password') }}</span>
                                <input type="password" name="old_password" class="input" id="old_password" />
                            </label>
                            <label class="label" for="new-password">
                                <span class="my-1 block">{{ trans('setting.new_password') }}</span>
                                <input type="password" name="new_password" class="input" id="new-password" />
                            </label>
                        </div>
                        <!-- Button  -->
                        <div class="flex items-center justify-end gap-4">
                            <button type="submit" class="btn btn-primary">{{ trans('general.update') }}</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Preferences  -->
            <div class="card">
                <div class="card-body">
                    <h2 class="text-[16px] font-semibold text-slate-700 dark:text-slate-300 mb-4">
                        {{ trans('academic_year.title') }}</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>#</th>
                                <th>{{ trans('academic_year.year_start') }}</th>
                                <th>{{ trans('academic_year.year_end') }}</th>
                                <th>{{ trans('academic_year.status') }}</th>
                                <th>{{ trans('general.created_at') }}</th>
                            </tr>
                            @forelse ($academic_years as $acadmic_year)
                                <tr>
                                    <td>{{ $acadmic_years->first_item() + $loop->index }}</td>
                                    <td>{{ $acadmic_year->year_start }}</td>
                                    <td>{{ $acadmic_year->year_end }}</td>
                                    <td>
                                        <div
                                            class="badge bade-soft-{{ $acadmic_year->status == 1 ? 'success' : 'warning' }}">
                                            {{ $acadmic_year->status == 1 ? trans('general.active') : trans('general.inactive') }}
                                        </div>


                                    </td>
                                    <td>{{ $acadmic_year->created_at->format('Y-m-d') }}</td>
                                </tr>
                            @empty
                                <div class="alert alert-primary" role="alert">
                                    <i width="1rem" height="1rem" data-feather="alert-circle"></i>
                                    <p>{{ trans('general.Msg') }}</p>
                                </div>
                            @endforelse
                            {{$academic_years->links('components.Paginatortion')}}
                        </table>
                    </div>
                </div>
            </div>


        </section>
        <!-- Right Section End -->
    </div>

    <!-- User Profile End  -->

    @push('scripts')
    @endpush
@endsection
