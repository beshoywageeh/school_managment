<div class="modal fade" id="incoming_students" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title" id="exampleModalLabel">
                    <div class="">
                        <h6>{{trans('report.report_type', ['type' => 41]).' '. trans('General.choose',['value'=>trans('class_rooms.Name')]) }}</h6>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('report.student_report',['type'=>41]) }}" method="post">
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="col-3">
                            <label for="">{{ trans('General.choose',['value'=>trans('class_rooms.Name')]) }}</label>
                        </div>
                        <div class="col-9">
                            <select name="classroom_id" id="stock" class="custom-select w-100" style="width: 100%;">
                                <option selected disabled>{{ trans('General.choose',['value'=>trans('class_rooms.Name')]) }}</option>
                                @foreach ($grades as $grade)
                                    <optgroup label="{{$grade->name}}">
                                        @foreach ($grade->class_rooms as $class_room)
                                        <option value="{{$class_room->id}}">{{$class_room->name}}</option>
                                        @endforeach
                                    </optgroup>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">{{ trans('general.show') }}</button>
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">{{ trans('general.close') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
