<div class="modal fade"
     id="Edit_year-{{$acadmice_year->id}}"
     tabindex="-1"
     role="dialog"
     aria-hidden="true">
    <div class="modal-dialog"
         role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title"
                     id="exampleModalLabel">
                    <div class="">
                        <h6>{{trans('academic_year.title')}} | {{trans('general.edit')}}</h6>
                    </div>
                </div>
                <button type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('academic_year.update') }}"
                  method="post">
                <div class="modal-body">
                    <input type="hidden"
                           name="id"
                           value="{{$acadmice_year->id}}">
                    @csrf
                    <div class="row">
                        <div class="col-8">
                            <div class="input-group date"
                                 id="datepicker-action">
                                {{trans('academic_year.year_end')}}
                                <input class="form-control"
                                       name="year_end"
                                       type="text"
                                       value="{{$acadmice_year->year_end}}">
                                <span class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label>
                                    {{ trans('academic_year.status') }}
                                </label>
                                <input type="checkbox"
                                       name="status"
                                       class="form-control" @checked($acadmice_year->status==1)>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit"
                            class="btn btn-success">{{ trans('general.Submit') }}</button>
                    <button type="button"
                            class="btn btn-secondary"
                            data-dismiss="modal">{{trans('general.close')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
