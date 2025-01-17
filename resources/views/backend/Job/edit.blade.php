<div class="modal fade"
     id="Edit_Job"
     tabindex="-1"
     role="dialog"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">
                    <h6>{{ trans('general.edit') }}</h6>
                </div>
                <button type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ route('jobs.update') }}"
                  method="POST">
                @csrf
                <div class="modal-body">
                    <input type="hidden"
                           name="id"
                           id="job_id"
                           value="">
                    <div class="row">
                        <div class="col">
                            <x-input name="job_name"
                                     label="job_name"
                                     type="text"
                                     value=""
                                     id="job_name">{{ trans('jobs.job_name') }}</x-input>
                        </div>
                        <div class="col">
                           <x-input.job_type/>

                            @error('type')
                            <div class="mt-1 alert alert-danger">{{ $message }}</div>
                            @enderror
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
