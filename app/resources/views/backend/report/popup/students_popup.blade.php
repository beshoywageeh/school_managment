<div class="modal fade" id="students" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title" id="exampleModalLabel">
                    <div class="">
                        <h6>{{ trans('report.fee_invoice') }}</h6>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('reports.export_student')}}" method="post">
                <div class="modal-body">
                    @csrf
                    <div class="row mb-2">
                        <div class="col-3">
                            <label for="">{{ trans('general.choose', ['value' => trans('Grades.name')]) }}</label>
                        </div>
                        <div class="col-9">
                            <select name="grade" id="" class="custom-select w-100 grades" style="width: 100%;">
                                <option value="" selected disabled>{{ trans('general.choose_grade') }}</option>
                                <option value="0">{{ trans('general.all') }}</option>
                                @foreach ($grades as $grade)
                                    <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-3">
                            <label for="">{{ trans('general.choose', ['value' => trans('class_rooms.Name')]) }}</label>
                        </div>
                        <div class="col-9">
                            <select name="classroom" id="" class="custom-select w-100 classrooms" style="width: 100%;">

                                <option value="0">{{ trans('general.all') }}</option>

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
