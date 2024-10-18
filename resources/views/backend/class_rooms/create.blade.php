<div class="modal fade" id="CreateClassRoom" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">
                    <h6>{{ trans('general.new') }}</h6>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ route('class_rooms.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="repeater">
                        <div data-repeater-list="list_classes">
                            <div data-repeater-item>
                                <div class="row mb-30">
                                    <div class="col">
                                        <label for="" class="">{{ trans('Grades.title') }}</label>
                                        <select class="custom-select" name="grade_name">
                                            <option value="" @disabled(true)>
                                                {{ trans('class_rooms.select_grade') }}</option>
                                            @foreach ($data['grades'] as $grade)
                                                <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="">{{ trans('class_rooms.Name') }}</label>
                                        <input type="text" name="class_name" class="form-control" />
                                    </div>
                                    <div class="col">
                                        <input class="btn btn-danger btn-block" data-repeater-delete type="button"
                                            value="{{ trans('General.delete') }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-20 row">
                            <div class="col-12">
                                <input class="btn btn-primary" data-repeater-create type="button"
                                    value="{{ trans('class_rooms.new') }}" />
                            </div>
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
