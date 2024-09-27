<div class="modal fade"
     id="exception_fee"
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
                        <h6>{{trans('report.daily_fee')}}</h6>
                    </div>
                </div>
                <button type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('report.daily_fee') }}"
                  method="post">
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label for="">{{trans('academic_year.year_start')}}</label>
                            <input class="form-control"
                                   name="start_date"
                                   type="date"
                                   value="dd/mm/yyyy">
                        </div>
                        <div class="col">
                            <label for="">{{trans('academic_year.year_end')}}</label>

                            <input class="form-control"
                                   name="end_date"
                                   type="date"
                                   value="dd/mm/yyyy">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit"
                            class="btn btn-success">{{ trans('general.show') }}</button>
                    <button type="button"
                            class="btn btn-secondary"
                            data-dismiss="modal">{{trans('general.close')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
