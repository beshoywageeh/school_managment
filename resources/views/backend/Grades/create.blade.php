<div class="modal modal-centered" id="CreateGrade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="flex items-center justify-between">
                    <h6>{{ trans('general.new') }}</h6>
                    <button type="button"
                        class="btn btn-plain-secondary dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:bg-slate-700"
                        data-dismiss="modal">
                        <i data-feather="x" width="1.5rem" height="1.5rem"></i>
                    </button>
                </div>
            </div>
            <form action="{{ route('grade.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class='input-group'>
                        <label for="" class="input-group-text">{{ trans('grades.name') }}</label>
                        <input type="text" name="Grade_Name" class="input" placeholder="{{ trans('grades.name') }}"
                            value={{ old('grade_name') }}>
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
