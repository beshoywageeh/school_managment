<div class="modal fade" id="tammen_1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title" id="exampleModalLabel">
                    <div class="">
                        <h6>{{ trans('report.student_tammen') }}</h6>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('report.student_tameen') }}" method="post">
                <div class="modal-body">
                    @csrf
                    <div class="mb-4 row">
                        <div class="col-3">
                            <label for="">{{ trans('General.choose', ['value' => trans('report.type')]) }}</label>
                        </div>
                        <div class="col-9">
                            <div class="row">
                                <div class="text-center col">
                                    <div class="p-2 form-check alert alert-success">
                                        <input class="form-check-input" name="type" type="radio" value="1"
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            1
                                        </label>
                                    </div>
                                </div>
                                <div class="text-center col">
                                    <div class="p-2 form-check alert-success">
                                        <input class="form-check-input" name="type" type="radio" value="2"
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            2
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <label
                                for="">{{ trans('General.choose', ['value' => trans('class_rooms.Name')]) }}</label>
                        </div>
                        <div class="col-9">
                            <select name="classroom_id" id="stock" class="custom-select w-100" style="width: 100%;">
                                <option selected disabled>
                                    {{ trans('General.choose', ['value' => trans('class_rooms.Name')]) }}</option>
                                @foreach ($grades as $grade)
                                    <optgroup label="{{ $grade->name }}">
                                        @foreach ($grade->class_rooms as $class_room)
                                            <option value="{{ $class_room->id }}">{{ $class_room->name }}</option>
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
