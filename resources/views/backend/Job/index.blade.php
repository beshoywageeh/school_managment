@extends('layouts.app')
@section('title')
    {{ trans('jobs.title') }}
@endsection
@push('css')
@endpush
@section('content')
    <div class="row">
        <div class="col">
            <div class="mb-4 card">
                <div class="card-body">
                    @if ($create)
                    @can('jobs-create')
                        <form action="{{ route('jobs.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <x-input name="job_name" label="job_name" type="text"
                                        value="{{ old('job_name') }}">{{ trans('jobs.job_name') }}</x-input>
                                </div>
                                <x-input.worker_type name="job_type" />
                                <div class="col">
                                    <div class="form-group">
                                        <div class="checkbox checbox-switch switch-info">
                                            <label>{{ trans('jobs.status') }}
                                                <input type="checkbox" name="status">
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <button type="submit" class="button">{{ trans('general.Submit') }}</button>
                                </div>
                            </div>
                        </form>
                        @endcan
                    @else
                    @can('jobs-edit')
                        <form action="{{ route('jobs.update', 'test') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $job->id }}">
                            <div class="row">
                                <div class="col">
                                    <x-input name="job_name" label="job_name" type="text"
                                        value="{{ $job->name }}">{{ trans('jobs.job_name') }}</x-input>
                                </div>
                                <x-input.worker_type name="job_type" />
                                <div class="col">
                                    <div class="form-group">
                                        <div class="checkbox checbox-switch switch-info">
                                            <label>{{ trans('jobs.status') }}
                                                <span></span>
                                                <input type="checkbox" @checked($job->status == 0) name="status">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <button type="submit" class="button">{{ trans('general.Submit') }}</button>
                                </div>
                            </div>
                        </form>
                        @endcan
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="mb-4 row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        @can('jobs-list')
                        <table class="table table-striped table-bordered" id="datatable">
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
                                        <td> {{ $loop->iteration }}</td>
                                        <td>{{ $job->name }}</td>
                                        <td>{{ $job->type->lang() }}</td>
                                        <td>{{ $job->creator->name }}</td>
                                        <td>{{ $job->created_at->format('Y-m-d') }}</td>
                                        <td>
                                            <span class="badge {{ $job->status->color() }}">
                                                {{ $job->status->lang() }}
                                            </span>
                                        </td>

                                        <td>{{ $job->updator ? $job->updator->name : '' }}</td>
                                        <td>{{ $job->updator ? $job->updated_at->format('Y-m-d') : '' }}</td>

                                        <td>

                                            <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                                [
                                                    'url' => route('jobs.destroy', $job->id),
                                                    'text' => trans('general.delete'),
                                                    'icon' => 'ti-trash',
                                                    'onclick' => 'confirmation(event)',
                                                    'can' => 'jobs-delete',
                                                ],
                                                [
                                                    'url' => route('jobs.show', $job->id),
                                                    'text' => trans('general.info'),
                                                    'icon' => 'ti-info-alt',
                                                    'target' => '_blank',
                                                    'can'=>'jobs-info'
                                                ],
                                                [
                                                    'url' => route('jobs.edit', $job->id),
                                                    'text' => trans('general.edit'),
                                                    'icon' => 'ti-pencil',
                                                    'can'=>'jobs-edit'

                                                ],
                                            ]" />
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10" class="text-center">{{ trans('general.Msg') }}</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    @endpush
@endsection
