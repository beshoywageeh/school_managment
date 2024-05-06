<div class="modal modal-centered" id="CreateClassRoom">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="flex items-center justify-between">
                    <h6>{{ trans('class_rooms.new') }}</h6>
                    <button type="button"
                        class="btn btn-plain-secondary dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:bg-slate-700"
                        data-dismiss="modal">
                        <i data-feather="x" width="1.5rem" height="1.5rem"></i>
                    </button>
                </div>
            </div>
            <form action="{{ route('class_rooms.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class='mb-2 input-group'>
                        <label for="" class="input-group-text">{{ trans('Grades.title') }}</label>
                        <select class="select" name="grade_name">
                            <option value="" @disabled(true)>{{ trans('class_rooms.select_grade') }}</option>
                            @foreach ($data['grades'] as $grade)
                            <option @selected($grade->id == $class_room->grade_id) value="{{ $grade->id }}">{{
                                $grade->Grade_Name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class='input-group'>
                        <label for="" class="input-group-text">{{ trans('class_rooms.new') }}</label>
                        <input type="text" class="input" placeholder="{{ trans('classroom.new') }}" name="class_name"
                            value={{ old('class_name') }}>
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
