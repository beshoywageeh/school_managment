@extends('layouts.app')
@section('title')
    {{ trans('employees.title') }} | {{ trans('general.new') }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="mb-4 row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ trans('employees.title') }} | {{ trans('general.new') }}</h4>
                    <form id="form-with-multiple-column" action="{{ route('employees.store') }}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <!-- Personal Info -->
                        <fieldset class=''>
                            <legend
                                class='m-auto text-center text-muted'>{{ trans('employees.personal_info') }}</legend>
                            <!-- Form Body -->
                            <!-- Form Row: One -->
                            <div class="row">
                                <div class="col">

                                    <!-- Form Column: Username -->
                                    <x-input name="name" value="{{old('name')}}"
                                             type="text">{{ trans('employees.name') }}</x-input>
                                </div>
                                <div class="col">
                                    <!-- Form Column: Email -->
                                    <x-input name="learning" value="{{old('learning')}}"
                                             type="text">{{ trans('employees.learning') }}</x-input>
                                </div>

                                <div class="col form-group">
                                    <label for="religion" class="">{{ trans('employees.grade_year') }}</label>

                                    <select name="grade_year" id="grade_year" class="custom-select">
                                        <option value="" selected>{{ trans('employees.grade_year') }}</option>
                                        @foreach ($years as $year)
                                            <option value="{{ $year }}">{{ $year }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- Form Row: Two -->
                            <div class="row">
                                <div class="col form-group">
                                    <label>

                                        {{ trans('employees.birth_date') }}
                                    </label>
                                    <div class="input-group date" id="datepicker-action">
                                        <input class="form-control" name="birth_date" value="{{old('birth_date')}}"
                                               type="text">
                                        <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </span>
                                        @error('birth_date')
                                        <div class="mt-1 alert alert-error">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <x-input name="phone" value="{{old('phone')}}"
                                             type="text">{{ trans('employees.phone') }}</x-input>
                                </div>
                                <div class="col">

                                    <x-input name="national_id" value="{{old('national_id')}}"
                                             type="text">{{ trans('employees.national_id') }}</x-input>
                                </div>
                            </div>
                            <!-- Form Row: Two -->
                            <div class="row">
                                <x-input.gender-select/>
                                <x-input.religion-select/>
                            </div><!-- Form Row: Two -->
                            <div class="row">
                                <div class="col">

                                    <label class="">{{ trans('employees.address') }}</label>
                                    <textarea class="form-control" name="address"
                                              placeholder="{{ trans('employees.address') }}">{{ old('address') }}</textarea>
                                    @error('address')
                                    <div class="mt-1 alert alert-error">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                            </div>

                        </fieldset>
                        <hr>
                        <!-- Personal Info -->
                        <fieldset class=''>
                            <legend class='m-auto text-center text-muted'>{{ trans('employees.job_info') }}</legend>
                            <!-- Form Column: Username -->
                            <div class="row">
                                <div class="col">
                                    <x-input name="date_of_hiring" value="{{old('date_of_hiring')}}"
                                             type="date">{{ trans('employees.join_date') }}</x-input>

                                </div>

                                <x-input.worker_type/>
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
                                                <input type="checkbox" name="status" checked="">
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <x-input name="insurance_date" value="{{old('insurance_date')}}"
                                             type="date">{{ trans('employees.insurance_date') }}</x-input>
                                </div>
                                <div class="col">
                                    <x-input name="insurance_number" type="text">{{ trans('employees.insurance_number') }}</x-input>
                                </div>
                            </div>
                        </fieldset>
                        <hr>
                        <!-- Attachment -->
                        <fieldset class=''>


                            <legend class='m-auto text-center text-muted'>{{ trans('employees.attachment') }}</legend>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="file" multiple
                                                   accept="image/png,image/jpeg,application/pdf"
                                                   class="custom-file-input" id="inputGroupFile02">
                                            <label class="custom-file-label"
                                                   for="inputGroupFile02">{{trans('general.choose_file')}}</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">{{trans('general.upload')}}</span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </fieldset>
                        <hr>
                        <!-- Form Footer -->
                        <div class="row">
                            <div class="col text-md-right">

                                <button class="btn btn-secondary" type="button">{{ trans('General.Cancel') }}</button>
                                <button class="btn btn-success" type="submit">{{ trans('General.Submit') }}</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
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
