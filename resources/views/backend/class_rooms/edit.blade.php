<div class="modal fade" id="class-edit-{{$class_room->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title">
          <h6>{{ trans('general.edit') }}</h6>

        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
            <form action="{{ route('class_rooms.update') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $class_room->id }}">
                <div class="modal-body">
                    <div class='form-group'>
                        <label for="" class="">{{ trans('Grades.title') }}</label>
                        <select class="custom-select" name="grade_name">
                            <option value="" @disabled(true)>{{ trans('class_rooms.select_grade') }}</option>
                            @foreach ($data['grades'] as $grade)
                            <option @selected($grade->id==$class_room->grade_id) value="{{ $grade->id
                                }}">{{
                                $grade->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <x-input name="class_name" class="" type="text" value="{{$class_room->name}}"></x-input>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit">{{ trans('general.Submit') }}</button>
                    <button class="btn btn-secondary" data-dismiss="modal">{{ trans('general.Cancel') }}</button>
                </div>
            </form>

        </div>
    </div>
</div>
