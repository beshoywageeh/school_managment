<div class="modal fade" id="credit" tabindex="-1" role="dialog" aria-hidden="true">
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
            <form action="{{ route('report.credit') }}" method="post">
                <div class="modal-body">
                    @csrf
                    <div class="row mb-2">
                        <div class="col-3">
                            <label for="">{{ trans('General.choose', ['value' => trans('academic_year.view')]) }}</label>
                        </div>
                        <div class="col-9">
                            <select name="acc_year" id="" class="custom-select w-100" style="width: 100%;">
                                <option value="" selected disabled>{{ trans('General.academic_year') }}</option>
                                <option value="0">{{ trans('General.all') }}</option>
                                @foreach ($acadmeic_years as $acc_year)
                                    <option value="{{ $acc_year->id }}">{{ $acc_year->view }}</option>
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
