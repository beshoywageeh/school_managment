@extends('layouts.app')
@section('title')
    {{ trans('jobs.title') }}
@endsection
@push('css')
    <style>
        .spinner {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            /* Ensure the spinner is above other elements */
        }

        .loader {
            border: 16px solid #f3f3f3;
            border-top: 16px solid #3498db;
            border-radius: 50%;
            width: 120px;
            height: 120px;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
@endpush
@section('content')
    <div class="mb-4 row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="row">
                            <div class="col"></div>
                            <div class="text-right col">
                                @can('jobs-create')
                                    <button type="button" class="btn btn-success" data-target="#Create_Job"
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
                                    <table class="table table-striped table-bordered table-sm">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>{{ trans('jobs.title_name') }}</th>
                                                <th>{{trans('jobs.employees_count')}}</th>
                                                <th>{{ trans('general.actions') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($jobs_main as $job)
                                                <tr>
                                                    <td> {{ $loop->iteration }}</td>
                                                    <td>{{ $job->lang() }}</td>
                                                    <td>{{ $job->value ? \App\Models\user::where('type', $job->value)->count() : 0 }}</td>
                                                    <td>
                                                        @can('jobs-info')
                                                            <a class="text-white btn btn-info btn-sm show_jobs"
                                                                href="{{ route('jobs.show', $job->value) }}"> <i
                                                                    class="ti-info-alt"></i> {{ trans('general.info') }}</a>
                                                        @endcan

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
                        <div class="col">

                            <div id="loadingSpinner" class="spinner col " style="display: none;">
                                <!-- You can customize this spinner as per your requirement -->
                                <div class="text-center loader"></div>
                            </div>
                            <table id="jobs_table" style="display: none" class="table table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ trans('jobs.job_name') }}</th>
                                        <th>{{trans('jobs.employees_count')}}</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            @include('backend.Job.edit')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            let is_main = document.getElementById('is_main'),
                main_jobs = document.getElementById('main_jobs');
            main_jobs.style.display = 'none';
            is_main.addEventListener('click', function() {
                if (is_main.checked) {
                    main_jobs.style.display = 'none';
                } else {
                    main_jobs.style.display = 'block';

                }
            })
        </script>
        <script>
            let show_jobs = document.querySelectorAll('.show_jobs');
            let loadingSpinner = document.getElementById('loadingSpinner');
            let table = document.getElementById('jobs_table');
            show_jobs.forEach(function(job) {
                job.addEventListener('click', function(e) {
                    e.preventDefault();

                    // Show the spinner
                    loadingSpinner.style.display = 'block';
                    table.style.display = 'none';
                    fetch(this.href)
                        .then(response => response.json())
                        .then(data => {
                            const tbody = document.querySelector('#jobs_table tbody');
                            // Remove all existing rows
                            tbody.innerHTML = '';
                            if (data.length === 0) {
                                // Display a message if no jobs are found
                                const tr = `<tr><td colspan="3">{{ trans('general.Msg') }}</td></tr>`;
                                tbody.insertAdjacentHTML('beforeend', tr);
                            } else {
                                // Add new rows
                                data.forEach((job, index) => {
                                    const tr = `<tr>
                            <td>${index + 1}</td>
                            <td>${job.name}</td>
                            <td>${job.users_count}</td>
                            <td>
                                @can('jobs-edit')
                                    
                                <button data-id="${job.id}" class="btn btn-warning btn-sm edit-btn" data-toggle="modal">
                                    <i class="ti-pencil"></i>
                                </button>
                                @endcan
                                @can('jobs-delete')
                                    
                                <a href="{{ route('jobs.destroy', '') }}/${job.id}" class="btn btn-danger btn-sm delete-btn" onclick="confirmation(event)">
                                    <i class="ti-trash"></i>
                                </a>
                                @endcan
                            </td>
                        </tr>`;
                                    tbody.insertAdjacentHTML('beforeend', tr);
                                });
                            }

                            // Add event listeners for edit buttons after rendering
                            document.querySelectorAll('.edit-btn').forEach(function(btn) {
                                btn.addEventListener('click', function(e) {
                                    e.preventDefault();
                                    const jobId = this.dataset.id;
                                    // Open edit modal with jobId
                                    $('#Edit_Job').modal('show');
                                    // Populate modal fields with job data
                                    const jobData = data.find(j => j.id == jobId);
                                    $('#Edit_Job #job_id').val(jobId);
                                    $('#Edit_Job #job_name').val(jobData
                                        .name); // Adjust to match your data structure
                                    $('#Edit_Job #worker_type').val(jobData
                                        .type); // Adjust to match your data structure
                                    $('#Edit_Job #is_main').prop('checked', jobData
                                        .is_main == 1
                                    ); // Adjust to match your data structure
                                });
                            });
                        })
                        .catch(error => {
                            console.error('Error fetching jobs:', error);
                        })
                        .finally(() => {
                            // Hide the spinner after the fetch is complete
                            loadingSpinner.style.display = 'none';
                            table.style.display = "";
                        });
                });
            });
        </script>
    @endpush
@endsection
