<div class="modal modal-centered" id="grade-edit-{{ $grade->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="flex items-center justify-between">
                    <h6>{{ trans('general.edit') }}</h6>
                    <button type="button"
                        class="btn btn-plain-secondary dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:bg-slate-700"
                        data-dismiss="modal">
                        <i data-feather="x" width="1.5rem" height="1.5rem"></i>
                    </button>
                </div>
            </div>
            <form action="{{ route('grade.update') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $grade->id }}">
                <div class="modal-body">

                    <div class="input-group input-group-disabled mb-2">
                        <label for="" class="input-group-text">{{ trans('grade.old_name')
                            }}</label>
                        <input type="text" disabled class="input" value="{{ $grade->name }}">
                    </div>
                    <div class='input-group'>
                        <label for="" class="input-group-text">{{ trans('general.new') }}</label>
                        <input type="text" name="Grade_Name" class="input"
                            placeholder="{{ trans('grades.grade_name') }}" value={{ old('grade_name') }}>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit">{{ trans('general.Submit') }}</button>
                    <button class="btn btn-secondary" data-dismiss="modal">{{ trans('general.Cancel') }}</button>
                </div>
            </form>

        </div>
    </div>
</div>
