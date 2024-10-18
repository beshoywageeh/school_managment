<div class="modal fade" id="Edit_year-{{ $acadmice_year->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title" id="exampleModalLabel">
                    <div class="">
                        <h6>{{ trans('academic_year.title') }} | {{ trans('general.edit') }}</h6>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('academic_year.update') }}" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" value="{{ $acadmice_year->id }}">
                    @csrf
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>{{ trans('academic_year.year_end') }}</th>
                                <th>
                                    {{ trans('academic_year.status') }}
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="input-group date display-years" id="datepicker-action">
                                        <input class="form-control" name="year_end" type="text"
                                            value="{{ $acadmice_year->year_end }}">
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <input type="checkbox" name="status" class="form-control"
                                        @checked($acadmice_year->status == 1)>
                                </td>
                            </tr>
                        </table>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">{{ trans('general.Submit') }}</button>
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">{{ trans('general.close') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
