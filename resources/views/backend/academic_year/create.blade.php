<div class="modal fade" id="Create_Year" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title" id="exampleModalLabel">
                    <div class="">
                        <h6>{{ trans('academic_year.title') }} | {{ trans('general.new') }}</h6>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('academic_year.store') }}" method="post">
                <div class="modal-body">
                    @csrf
                    <div class="table">
                        <table class="table table-sm table-bordered">
                            <tr>
                            <th>{{ trans('academic_year.year_start') }}</th>
                            <th>{{ trans('academic_year.year_end') }}</th>
                            <th>{{ trans('academic_year.status') }}</th>
                            </tr>
                            <tr>
                                <td>
                                    <input class="form-control" name="year_start" type="date" value="dd/mm/yyyy">
                                </td>
                                <td>
                                    <input class="form-control" name="year_end" type="date" value="dd/mm/yyyy">
                                </td>
                                <td>
                                    <input type="checkbox" name="status" class="custom-checkbox">

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
