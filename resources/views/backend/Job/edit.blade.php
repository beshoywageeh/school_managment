<div class="modal fade"
     id="Edit_Job"
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
                    <input type="hidden"
                           name="id"
                           value="{{ $job->id }}">
                    <div class="row">
                        <div class="col">
                            <x-input name="job_name"
                                     label="job_name"
                                     type="text"
                                     value="{{ $job->name }}">{{ trans('jobs.job_name') }}</x-input>
                        </div>
                        <div class="col">
                            <label for="worker_type"
                                   class="">{{ trans('general.worker_type') }}</label>
                            <select id="worker_type"
                                    class="custom-select"
                                    name="type">
                                <option value=""
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
                                <div class="checkbox checbox-switch switch-info">
                                    <label>{{ trans('jobs.status') }}
                                        <span></span>
                                        <input type="checkbox"
                                               @checked($job->status == 0) name="status">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <button type="submit"
                                    class="btn btn-success">{{ trans('general.Submit') }}</button>
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
