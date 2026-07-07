@extends('layouts.app')
@section('title')
    {{ trans('jobs.title') }}
@endsection
@push('css')

@endpush
@section('content')
    <div x-data="{
        jobs: [],
        loading: false,
        tableVisible: false,
        canEdit: @json(auth()->user()->can('jobs-edit')),
        canDelete: @json(auth()->user()->can('jobs-delete')),
        async fetchJobs(url) {
            this.loading = true;
            this.tableVisible = false;
            try {
                const response = await fetch(url);
                this.jobs = await response.json();
                this.tableVisible = true;
            } catch (error) {
                console.error('Error fetching jobs:', error);
            } finally {
                this.loading = false;
            }
        },
        editJob(job) {
            window.dispatchEvent(new CustomEvent('open-modal-edit-job', {
                detail: { id: job.id, name: job.name, type: job.type, is_main: job.is_main }
            }));
        }
    }" class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100 flex justify-between items-center">
            <h4 class="text-lg font-bold text-gray-800">{{ trans('jobs.title') }}</h4>
            @can('jobs-create')
                <button type="button" class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 flex items-center gap-2" @click="window.dispatchEvent(new Event('open-modal-create-job'))">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                    {{ trans('general.buttons.create') }}
                </button>
                @include('backend.Job.create')
            @endcan
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-4">
            <div>
                @can('jobs-list')
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase">#</th>
                                    <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('jobs.title_name') }}</th>
                                    <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase">{{ trans('jobs.employees_count') }}</th>
                                    <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase">{{ trans('general.buttons.action') }}</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                @forelse($jobs_main as $job)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-3 text-center text-sm text-gray-600">{{ $loop->iteration }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-800 font-medium">{{ $job->lang() }}</td>
                                    <td class="px-4 py-3 text-center text-sm text-gray-600">{{ $job->value ? \App\Models\user::where('type', $job->value)->count() : 0 }}</td>
                                    <td class="px-4 py-3 text-center">
                                        @can('jobs-info')
                                        <a class="show_jobs px-3 py-1 bg-primary text-white rounded-lg text-sm font-medium hover:bg-primary/90" href="{{ route('jobs.show', $job->value) }}" @click.prevent="fetchJobs($el.href)">
                                            <svg class="w-4 h-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            {{ trans('general.buttons.view') }}
                                        </a>
                                        @endcan
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="px-4 py-12 text-center text-gray-500">{{ trans('general.Messages.view') }}</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                @endcan
            </div>

            <div class="overflow-x-auto">

                <table id="jobs_table" x-show="tableVisible" x-cloak class="min-w-full border border-gray-200 rounded-lg">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase">#</th>
                            <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('jobs.job_name') }}</th>
                            <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase">{{ trans('jobs.employees_count') }}</th>
                            <th class="px-4 py-2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <template x-for="(job, index) in jobs" :key="job.id">
                            <tr>
                                <td class="px-4 py-2 text-center text-sm text-gray-600" x-text="index + 1"></td>
                                <td class="px-4 py-2 text-sm text-gray-800" x-text="job.name"></td>
                                <td class="px-4 py-2 text-center text-sm text-gray-600" x-text="job.users_count"></td>
                                <td class="px-4 py-2 text-center">
                                    <div class="flex items-center justify-center gap-1">
                                        <button x-show="canEdit" @click="editJob(job)" class="p-2 text-primary hover:bg-primary/10 rounded-lg" title="{{ trans('general.edit') }}">
                                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </button>
                                        <a x-show="canDelete" :href="`{{ route('jobs.destroy', '') }}/${job.id}`" class="p-2 text-danger hover:bg-danger/10 rounded-lg" onclick="confirmation(event)" title="{{ trans('general.delete') }}">
                                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </template>
                        <tr x-show="jobs.length === 0">
                            <td colspan="4" class="px-4 py-12 text-center text-gray-500">{{ trans('general.Msg') }}</td>
                        </tr>
                    </tbody>
                </table>
                @include('backend.Job.edit')
            </div>
        </div>
    </div>

@endsection
