@extends('layouts.app')
@section('title')
    {{ trans('employees.title') }} | {{ trans('general.edit') }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="mb-4 row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="col">
                            <h4>{{ trans('employees.title') }} | {{ trans('general.edit') }}</h4>
                        </div>
                        <div class="col text-md-right">
                            <a href="{{ route('employees.index') }}" class="btn btn-success">{{ trans('general.back') }}</a>
                        </div>
                    </div>
                    <form id="form-with-multiple-column" action="{{ route('employees.update', $user->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <!-- Personal Info -->
                        <fieldset class=''>
                            <legend class='m-auto text-center text-white bg-primary p-2'>{{ trans('employees.personal_info') }}</legend>
                            <!-- Form Body -->
                            <!-- Form Row: One -->
                            <div class="row">
                                <div class="col">
                                    <!-- Form Column: Username -->
                                    <x-input name="name" value="{{ old('name', $user->name) }}"
                                        type="text">{{ trans('employees.name') }}</x-input>
                                </div>
                                <div class="col">
                                    <!-- Form Column: Email -->
                                    <x-input name="learning" value="{{ old('learning', $user->learning) }}"
                                        type="text">{{ trans('employees.learning') }}</x-input>
                                </div>
                                <div class="col form-group">
                                    <label for="religion" class="">{{ trans('employees.grade_year') }}</label>
                                    <select name="grade_year" id="grade_year" class="custom-select select2">
                                        <option value="">{{ trans('employees.grade_year') }}</option>
                                        @foreach ($years as $year)
                                            <option value="{{ $year }}" {{ old('grade_year', $user->grade_year) == $year ? 'selected' : '' }}>{{ $year }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- Form Row: Two -->
                            <div class="row">
                                <div class="col">
                                    <x-input type="date" name="birth_date"
                                        value="{{ old('birth_date', $user->date_of_birth) }}">{{ trans('employees.birth_date') }}</x-input>
                                </div>
                                <div class="col">
                                    <x-input name="phone" value="{{ old('phone', $user->phone) }}"
                                        type="text">{{ trans('employees.phone') }}</x-input>
                                </div>
                                <div class="col">
                                    <x-input name="national_id" value="{{ old('national_id', $user->national_id) }}"
                                        type="text">{{ trans('employees.national_id') }}</x-input>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <x-input name="sepicality" value="{{ old('sepicality', $user->sepicality ?? '') }}"
                                        type="text">{{ trans('employees.sepicality') }}</x-input>
                                </div>
                                <div class="col">
                                    <x-input name="ministry_code" value="{{ old('ministry_code', $user->ministry_code ?? '') }}"
                                        type="text">{{ trans('employees.ministry_code') }}</x-input>
                                </div>
                                <div class="col">
                                    <x-input type="date" name="national_id_expire_date"
                                        value="{{ old('national_id_expire_date', $user->national_id_expire_date ?? '') }}">{{ trans('employees.national_id_expire_date') }}</x-input>
                                </div>
                            </div>
                            <!-- Form Row: Two -->
                            <div class="row">
                                <x-input.gender-select />
                                <x-input.religion-select  />
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label class="">{{ trans('employees.address') }}</label>
                                    <textarea class="form-control" name="address" placeholder="{{ trans('employees.address') }}">{{ old('address', $user->address) }}</textarea>
                                    @error('address')
                                        <div class="mt-1 alert alert-error">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label class="">{{ trans('employees.notes') }}</label>
                                    <textarea class="form-control" name="note" placeholder="{{ trans('employees.notes') }}">{{ old('note', $user->note ?? '') }}</textarea>
                                    @error('note')
                                        <div class="mt-1 alert alert-error">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </fieldset>
                        <hr>
                        <!-- Job Info -->
                        <fieldset class=''>
                            <legend class='m-auto text-center text-white bg-primary p-2'>{{ trans('employees.job_info') }}</legend>
                            <div class="row">
                                <div class="col">
                                    <x-input name="contract_start_date" value="{{ old('contract_start_date', $user->contract_start_date ?? '') }}"
                                        type="date">{{ trans('employees.contract_start_date') }}</x-input>
                                </div>
                                <div class="col">
                                    <x-input name="date_of_hiring" value="{{ old('date_of_hiring', $user->date_of_hiring) }}"
                                        type="date">{{ trans('employees.join_date') }}</x-input>
                                </div>
                                <x-input.job_type :selected="old('worker_type', $user->worker_type ?? null)" />
                                <div class="col">
                                    <label for="jobs" class="">{{ trans('employees.job_title') }}</label>
                                    <select name="job_id" id="jobs" class="custom-select">
                                        <option selected> ---{{ trans('employees.select_worker_title') }}---</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <div class="checkbox checbox-switch switch-info">
                                            <label>
                                                {{ trans('employees.insurance_status') }}
                                                <input type="checkbox" name="status" {{ old('status', $user->status) ? 'checked' : '' }}>
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <x-input name="lesson_count" value="{{ old('lesson_count', $user->lesson_count ?? 24) }}"
                                        type="number">{{ trans('employees.lesson_count') }}</x-input>
                                </div>
                                <div class="col">
                                    <x-input name="insurance_date" value="{{ old('insurance_date', $user->insurance_date) }}"
                                        type="date">{{ trans('employees.insurance_date') }}</x-input>
                                </div>
                                <div class="col">
                                    <x-input name="insurance_number" value="{{ old('insurance_number', $user->insurance_number) }}"
                                        type="text">{{ trans('employees.insurance_number') }}</x-input>
                                </div>
                            </div>
                        </fieldset>
                        <hr>
                        <!-- Attachment -->
                        <fieldset class=''>
                            <legend class='m-auto text-center text-white bg-primary p-2'>{{ trans('employees.attachment') }}</legend>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="file" multiple
                                                accept="image/png,image/jpeg,application/pdf" class="custom-file-input"
                                                id="inputGroupFile02">
                                            <label class="custom-file-label"
                                                for="inputGroupFile02">{{ trans('general.choose_file') }}</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">{{ trans('general.upload') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <hr>
                        <!-- Form Footer -->
                        <div class="row">
                            <div class="col text-md-right">
                                <button class="btn btn-secondary" type="button">{{ trans('general.Cancel') }}</button>
                                <button class="btn btn-success" type="submit">{{ trans('general.Submit') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#worker_type').on('change', function() {
                    const workerTypeId = $(this).val();
                    $('#jobs').html('<option>{{ trans('general.loading') }}</option>');
                    $.ajax({
                        url: "{{ URL::to('/ajax/get_jobs') }}/" + workerTypeId,
                        method: 'GET',
                        success: function(data) {
                            $('#jobs').html(
                                '<option>{{ trans('employees.select_worker_type') }}</option>');
                            $.each(data, function(index, job) {
                                $('#jobs').append($('<option>', {
                                    value: job.id,
                                    text: job.name
                                }));
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error('Error fetching jobs:', error);
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection
