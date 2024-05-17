@extends('layouts.app')
@section('title')
    {{ trans('employees.title') }} | {{ trans('general.new') }}
@endsection
@section('content')
@include('backend.msg')
    <div class="card">
        <div class="card-body">
            <div class="flex justify-between mb-4">
                <h4 class="card-title">{{ trans('employees.title') }} | {{ trans('general.new') }}</h4>
            </div>
            <form id="form-with-multiple-column" action="{{ route('employees.store') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <!-- Personal Info -->
                <fieldset class='p-4 rounded border-2 border-indigo-600 border-solid'>
                    <legend class='m-auto text-center text-muted'>{{ trans('employees.personal_info') }}</legend>
                    <!-- Form Body -->
                    <!-- Form Row: One -->
                    <div class="flex flex-col gap-4 items-center w-full md:flex-row">
                        <!-- Form Column: Username -->
                        <x-input name="name" type="text">{{ trans('employees.name') }}</x-input>
                        <!-- Form Column: Email -->
                        <x-input name="learning" type="text">{{ trans('employees.learning') }}</x-input>
                        <div class="w-full md:w-1/3">
                            <label for="religion"
                                class="mb-1 label label-required">{{ trans('employees.grade_year') }}</label>

                            <select name="grade_year" id="grade_year" class="select">
                                <option value="" selected>{{ trans('employees.grade_year') }}</option>
                                @foreach ($years as $year)
                                    <option value="{{ $year }}">{{ $year }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- Form Row: Two -->
                    <div class="flex flex-col gap-4 items-center w-full md:flex-row">
                        <x-input name="birth_date" class="input-date"
                            type="text">{{ trans('employees.birth_date') }}</x-input>
                        <x-input name="phone" type="text">{{ trans('employees.phone') }}</x-input>
                        <x-input name="national_id" type="text">{{ trans('employees.national_id') }}</x-input>
                    </div>
                    <!-- Form Row: Two -->
                    <div class="flex flex-col gap-4 items-center w-full md:flex-row">
                        <x-input.gender-select />
                        <x-input.religion-select />
                    </div><!-- Form Row: Two -->
                    <div class="flex flex-col gap-4 items-center mt-4 w-full md:flex-row">

                        <label class="mb-1 label">{{ trans('employees.address') }}</label>
                        <textarea class="textarea" name="address" placeholder="{{ trans('employees.address') }}"></textarea>

                    </div>

                </fieldset>
                <!-- Personal Info -->
                <fieldset class='p-4 rounded border-2 border-indigo-600 border-solid'>
                    <legend class='m-auto text-center text-muted'>{{ trans('employees.job_info') }}</legend>
                    <div class="flex flex-col gap-4 items-center w-full md:flex-row">
                        <!-- Form Column: Username -->
                        <x-input class="input input-date" name="date_of_hiring"
                            type="text">{{ trans('employees.join_date') }}</x-input>
                        <x-input.worker_type />
                        <div class="w-full md:w-1/3">
                            <label for="jobs" class="mb-1 label">{{ trans('employees.job_title') }}</label>
                            <select name="job_id" id="jobs" class="w-full input">
                                <option> {{ trans('employees.select_worker_title') }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4 items-center w-full md:flex-row">
                        <div class="w-full md:w-1/3">
                            <label for="toggle-success" class="toggle toggle-success group reverse">
                                <span class="label">{{ trans('employees.insurance_status') }}</span>
                                <input class="sr-only toggle-input peer" id="toggle-success" name="status" type="checkbox"
                                    checked="">
                                <div class="toggle-body"></div>
                            </label>
                        </div>
                        <x-input name="insurance_date" class="input input-date" type="text">{{ trans('employees.insurance_date') }}</x-input>
                        <x-input name="insurance_number" type="text">{{ trans('employees.insurance_number') }}</x-input>
                    </div>
                </fieldset>
                <!-- Attachment -->
                <fieldset class='p-4 rounded border-2 border-indigo-600 border-solid'>
                    <legend class='m-auto text-center text-muted'>{{ trans('employees.attachment') }}</legend>
                    <x-input name="file" multiple accept="image/png,image/jpeg,application/pdf" type="file">{{ trans('employees.attachment') }}</x-input>
                </fieldset>
                <!-- Form Footer -->
                <div class="flex gap-2 justify-end items-center mt-6 w-full">
                    <button class="btn btn-soft-secondary" type="button">{{ trans('General.Cancel') }}</button>
                    <button class="btn btn-primary" type="submit">{{ trans('General.Submit') }}</button>
                </div>
            </form>

        </div>
    </div>

    @push('scripts')
        <script>
            const jobs = document.querySelector('#jobs');
            const worker_type = document.querySelector('#worker_type')
            worker_type.addEventListener('change', async () => {

                jobs.innerHTML = '<option>{{ trans('employees.select_worker_type') }}</option>';
                const response = await fetch(`/ajax/get_jobs/${worker_type.value}`)
                const data = await response.json();
                data.forEach(job => {
                    const option = document.createElement('option');
                    option.value = job.id;
                    option.text = job.name;
                    jobs.appendChild(option);

                });

            });
        </script>
    @endpush
@endsection
