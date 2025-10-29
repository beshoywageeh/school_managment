<div class="modal fade" id="class-edit-{{$class->id}}" tabindex="-1" role="dialog" aria-hidden="true">
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
            <form action="{{ route('classes.update') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $class->id }}">
                <div class="modal-body">
                    <div class="row mb-30">
                        <div class="col">
                            <label for="" class="">{{ trans('Grades.title') }}</label>
                            <select class="custom-select" name="grade_name">
                                <option value="" @disabled(true)>
                                    {{ trans('class_rooms.select_grade') }}</option>
                                @foreach ($class_rooms as $key=>$class_room)
                                <optgroup label="{{$key}}">
                                    @foreach ($class_room as $item)
                                    <option value="{{ $item->id }}" @selected($item->id == $class->class_room_id)>{{ $item->name }}</option>
                                    @endforeach
                                </optgroup>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-30">
                        <div class="col">
                            <label for="">{{ trans('class_rooms.Name') }}</label>
                            <input type="text" name="class_name" class="form-control" value="{{$class->title}}"/>
                        </div>

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
