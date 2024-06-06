@extends('layouts.app')
@section('title')
{{ trans('employees.title') }} | {{ trans('general.edit') }}
@endsection
@section('content')
<div class="mb-4 row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="row card-title">
                    <div class="col">
                        <h4>{{ trans('employees.title') }} | {{ trans('general.edit') }}</h4>
                    </div>
                    <div class="col text-md-right">
                        <a href="{{route('employees.index')}}" class="button">{{ trans('general.back') }}</a>
                    </div>
                </div>
                <form id="form-with-multiple-column" action="{{ route('employees.update','test') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <!-- Personal Info -->
                    <fieldset class=''>
                        <legend class='m-auto text-center text-muted'>{{ trans('employees.personal_info') }}</legend>
                        <!-- Form Body -->
                        <!-- Form Row: One -->
                        <div class="row">
                            <!-- Form Column: Username -->
                            <div class="col">
                                <x-input name="name" type="text" value="{{$user->name}}">{{ trans('employees.name') }}</x-input>
                            </div>
                            <div class="col">
                                <!-- Form Column: Email -->
                                <x-input name="learning" type="text" value="{{$user->learning}}">{{ trans('employees.learning') }}</x-input>
                            </div>
                            <div class="col form-group">
                                <label for="religion" class="">{{ trans('employees.grade_year') }}</label>

                                <select name="grade_year" id="grade_year" class="form-control">
                                    <option value="" >{{ trans('employees.grade_year') }}</option>
                                    @foreach ($years as $year)
                                    <option value="{{ $year }}" {{$user->grade_year == $year ? 'selected' : ''}}>{{ $year }}</option>
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
                                    <input class="form-control" name="birth_date" type="text" value="{{$user->date_of_birth}}">
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col">
                                <x-input name="phone" type="text" value="{{$user->phone}}">{{ trans('employees.phone') }}</x-input>
                            </div>
                            <div class="col">
                                <x-input name="national_id" type="text" value="{{$user->national_id}}">{{ trans('employees.national_id') }}</x-input>
                            </div>
                        </div>
                        <!-- Form Row: Two -->
                        <div class="row">
                            <x-input.gender-select />
                            <x-input.religion-select />
                        </div><!-- Form Row: Two -->
                        <div class="row">
                            <div class="col form-group">
                                <label class="">{{ trans('employees.address') }}</label>
                                <textarea class="form-control" name="address" placeholder="{{ trans('employees.address') }}">{{$user->address}}</textarea>
                            </div>

                        </div>

                    </fieldset>
                    <hr>
                    <!-- Personal Info -->
                    <fieldset class=''>
                        <legend class='m-auto text-center text-muted'>{{ trans('employees.job_info') }}</legend>
                        <div class="row">
                            <div class="col form-group">
                                <label>

                                    {{ trans('employees.join_date') }}
                                </label>
                                <div class="input-group date" id="datepicker-action">
                                    <input class="form-control" name="date_of_hiring" type="text" value="{{$user->date_of_hiring}}">
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col">

                                <x-input.worker_type />
                            </div>
                            <div class="col form-group">
                                <label for="jobs" class="">{{ trans('employees.job_title') }}</label>
                                <select name="job_id" id="jobs" class="form-control">
                                    <option> {{ trans('employees.select_worker_title') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <div class="checkbox checbox-switch switch-info">
                                        <label>{{ trans('employees.insurance_status') }}
                                            <input type="checkbox" name="status" {{$user->status ? 'checked' : ''}}>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <x-input name="insurance_date" class="input input-date" type="text" value="{{$user->insurance_date}}">{{ trans('employees.insurance_date') }}</x-input>
                            </div>
                            <div class="col">

                                <x-input name="insurance_number" type="text" value="{{$user->insurance_number}}">{{ trans('employees.insurance_number') }}</x-input>
                            </div>
                        </div>
                    </fieldset>
                    <hr>
                    <!-- Attachment -->
                    <fieldset class=''>
                        <legend class='m-auto text-center text-muted'>{{ trans('employees.attachment') }}</legend>
                        <div class="mb-3 input-group">
                            <div class="custom-file">
                              <input type="file" name="file" multiple accept="image/png,image/jpeg,application/pdf" class="custom-file-input" id="inputGroupFile02">
                              <label class="custom-file-label" for="inputGroupFile02">{{trans('general.choose_file')}}</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text">{{trans('general.upload')}}</span>
                            </div>
                          </div>
                    </fieldset>
                    <hr>
                    <!-- Form Footer -->
                    <div class="row">
                        <div class="col text-md-right">

                            <button class="btn btn-secondary" type="button">{{ trans('General.Cancel') }}</button>
                            <button class="button" type="submit">{{ trans('General.Submit') }}</button>
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

        jobs.innerHTML = '<option>{{ trans('
        employees.select_worker_type ') }}</option>';
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
