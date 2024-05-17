@extends('layouts.app')
@section('title')
    {{ trans('jobs.title') }}
@endsection
@push('css')
@endpush
@section('content')
    <div class="mb-4 card">
        <div class="card-body">
            @if ($create)
                <form action="{{ route('jobs.store') }}" method="post">
                    @csrf
                    <div class="flex flex-col gap-1 items-center w-full md:flex-row md:gap-2">
                        <div class="w-full md:w-1/3">
                            <label class="label label-required" for="job_name">{{ trans('jobs.job_name') }}</label>
                        </div>
                        <div class="w-full md:w-1/3">
                            <input class="input" id="job_name" name="job_name" type="text"
                                value="{{ old('job_name') }}">
                        </div>
                        <x-input.worker_type name="job_type" />
                        <div class="w-full md:w-1/3">
                            <label for="toggle-success" class="toggle toggle-success group reverse">
                                <span class="label">{{ trans('jobs.status') }}</span>
                                <input class="sr-only toggle-input peer" id="toggle-success" name="status" type="checkbox"
                                    checked="">
                                <div class="toggle-body"></div>
                            </label>
                        </div>
                        <div class="w-full md:w-1/3">
                            <button type="submit" class="w-full btn btn-primary">{{ trans('general.Submit') }}</button>
                        </div>
                    </div>
                </form>
            @else
                <form action="{{ route('jobs.update', 'test') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $job->id }}">
                    <div class="flex flex-col gap-1 items-center w-full md:flex-row md:gap-2">
                        <div class="w-full md:w-1/3">
                            <label class="label label-required" for="job_name">{{ trans('jobs.job_name') }}</label>
                        </div>
                        <div class="w-full md:w-1/3">
                            <input class="input" id="job_name" name="job_name" type="text" value="{{ $job->name }}">
                        </div>
                        <x-input.worker_type name="job_type" />

                        <div class="w-full md:w-1/3">
                            <label for="toggle-success" class="toggle toggle-success group reverse">
                                <span class="label">{{ trans('jobs.status') }}</span>
                                <input class="sr-only toggle-input peer" id="toggle-success" name="status" type="checkbox"
                                    @checked($job->status == 0)>
                                <div class="toggle-body"></div>
                            </label>
                        </div>
                        <div class="w-full md:w-1/3">
                            <button type="submit" class="w-full btn btn-primary">{{ trans('general.Submit') }}</button>
                        </div>
                    </div>
                </form>
            @endif
        </div>
    </div>
    <div class="card">
        <div class="card-body">

            <div class="my-4 table-resposive">
                <table class="table table-striped table-bordered" id="datatable-filter">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ trans('jobs.job_name') }}</th>
                            <th>{{ trans('general.worker_type') }}</th>
                            <th>{{ trans('general.created_by') }}</th>
                            <th>{{ trans('general.created_at') }}</th>
                            <th>{{ trans('academic_year.status') }}</th>
                            <th>{{ trans('general.updated_by') }}</th>
                            <th>{{ trans('general.updated_at') }}</th>
                            <th>{{ trans('general.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($jobs as $job)
                            <tr>
                                <td> {{ $jobs->firstItem() + $loop->index }}</td>
                                <td>{{ $job->name }}</td>
                                <td>{{ $job->type->lang() }}</td>
                                <td>{{ $job->creator->name }}</td>
                                <td>{{ $job->created_at->format('Y-m-d') }}</td>
                                <td>
                                    <div class="badge {{ $job->status->color() }}">
                                        {{ $job->status->lang() }}
                                    </div>
                                </td>

                                <td>{{ $job->updator ? $job->updator->name : '' }}</td>
                                <td>{{ $job->updator ? $job->updated_at->format('Y-m-d') : '' }}</td>

                                <td>
                                    <div class="dropdown">
                                        <button class="items-center dropdown-toggle btn btn-primary btn-xs"><i
                                                class="w-4" data-feather="chevron-down"></i>
                                        </button>
                                        <div class="dropdown-content">
                                            <ul class="dropdown-list">
                                                <li class="dropdown-list-item">
                                                    <a class="dropdown-link" href="{{ route('jobs.edit', $job->id) }}">
                                                        <i class="w-4" data-feather="edit"></i>
                                                        {{ trans('general.edit') }}
                                                    </a>
                                                </li>
                                                <li class="dropdown-list-item">
                                                    <a href="{{ route('jobs.destroy', $job->id) }}" class="dropdown-link"
                                                        onclick="confirmation(event)"><i class="w-4"
                                                            data-feather="trash-2"></i>
                                                        {{ trans('general.delete') }}</a>
                                                </li>
                                                <li class="dropdown-list-item">
                                                    <a target="_blank" href="{{ route('jobs.show', $job->id) }}"
                                                        class="dropdown-link">
                                                        <i class="w-4" data-feather="info"></i>
                                                        {{ trans('general.info') }} </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="text-center">{{ trans('general.Msg') }}</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{ $jobs->links('components.Paginatortion') }}
        </div>
    </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @endpush
@endsection
