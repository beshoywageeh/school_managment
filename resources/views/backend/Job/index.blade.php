@extends('layouts.app')
@section('title')
    {{ trans('jobs.title') }}
@endsection
@push('css')
@endpush
@section('content')
    <div class="mb-4 row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="row">
                            <div class="col"></div>
                            <div class="col text-right">
                                @can('jobs-create')
                                    <button type="button"
                                            class="btn btn-success btn-lg"
                                            data-target="#Create_Job"
                                            data-toggle="modal"><i class="ti-plus"></i>
                                        {{ trans('general.new') }}</button>
                                    @include('backend.Job.create')
                                @endcan

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="table-responsive">
                                @can('jobs-list')
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{ trans('jobs.job_name') }}</th>
                                            <th>{{ trans('academic_year.status') }}</th>
                                            <th>{{ trans('general.actions') }}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse ($jobs_main as $job)
                                            <tr>
                                                <td> {{ $loop->iteration }}</td>
                                                <td>{{ $job->name }}</td>
                                                <td>
                                            <span class="badge {{ $job->status->color() }}">
                                                {{ $job->status->lang() }}
                                            </span>
                                                </td>
                                                <td>
                                                    <a href="route('jobs.edit', $job->id)"></a>

                                                    <x-dropdown-table :buttonText="trans('general.actions')"
                                                                      :items="[
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
                                                 
                                                    'can'=>'jobs-info'
                                                ],
                                                [
                                                    'url' => route('jobs.edit', $job->id),
                                                    'text' => trans('general.edit'),
                                                    'icon' => 'ti-pencil',
                                                    'can'=>'jobs-edit'

                                                ],
                                            ]"/>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="10"
                                                    class="text-center">{{ trans('general.Msg') }}</td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                @endcan
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            let is_main = document.getElementById('is_main'),
                main_jobs = document.getElementById('main_jobs');
            is_main.addEventListener('click', function () {
                if (is_main.checked) {
                    main_jobs.style.display = 'none';
                } else {
                    main_jobs.style.display = 'block';

                }
            })
        </script>
    @endpush
@endsection
