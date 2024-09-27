<div class="modal fade"
     id="Create_Job"
     tabindex="-1"
     role="dialog"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">
                    <h6>{{ trans('general.new') }}</h6>
                </div>
                <button type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ route('jobs.store') }}"
                  method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <div class="text-left checkbox checbox-switch switch-info">
                                    <label>{{ trans('jobs.is_main') }}
                                        <input type="checkbox"
                                               name="is_main"
                                               id="is_main" checked>
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <x-input name="job_name"
                                     label="job_name"
                                     type="text"
                                     value="{{ old('job_name') }}">{{ trans('jobs.job_name') }}</x-input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col"
                             id="main_jobs">
                            <label for="worker_type"
                                   class="">{{ trans('general.worker_type') }}</label>
                            <select id="worker_type"
                                    class="custom-select"
                                    name="type">
                                <option value=""
                                        disabled
                                        selected>{{ trans('general.worker_type') }}</option>
                                @foreach($jobs_main as $job_type)
                                    <option value="{{ $job_type->id }}" @selected(old('is_main', $job_type->id) == $job_type->id)>{{ $job_type->name }}</option>
                                @endforeach
                            </select>
                            @error('type')
                            <div class="mt-1 alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="text-left checkbox checbox-switch switch-info">
                                    <label>{{ trans('jobs.status') }}
                                        <input type="checkbox"
                                               name="status">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-success"
                            type="submit">{{ trans('general.Submit') }}</button>
                    <button class="btn btn-secondary"
                            data-dismiss="modal">{{ trans('general.Cancel') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
