<div class="modal fade" id="fees_invoices" tabindex="-1" role="dialog" aria-hidden="true">
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
            <form action="{{ route('report.fees_invoices') }}" method="post">
                <div class="modal-body">
                    @csrf
                    <div class="row mb-2">
                        <div class="col-3">
                            <label for="">{{ trans('General.choose', ['value' => trans('grades.name')]) }}</label>
                        </div>
                        <div class="col-9">
                            <select name="grade" id="" class="custom-select w-100" style="width: 100%;">
                                <option value="" selected disabled>{{ trans('General.choose_grade') }}</option>
                                <option value="0">{{ trans('General.all') }}</option>
                                @foreach ($grades as $grade)
                                    <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-3">
                            <label for="">{{ trans('academic_year.year_start') }}</label>
                        </div>
                        <div class="col-9">
                            <input type="date" class="form-control" name="from">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-3">
                            <label for="">{{ trans('academic_year.year_end') }}</label>
                        </div>
                        <div class="col-9">
                            <input type="date" class="form-control" name="to">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-3">
                            <label for="">{{ trans('General.payment_status') }}</label>
                        </div>
                        <div class="col-9">
                            <select name="payment_status" id="" class="custom-select">
                                <option value="" selected disabled>
                                    {{ trans('General.choose', ['value'=> trans('report.payment_status')]) }}</option>
                                <option value="0">{{ trans('General.all') }}</option>

                                <option value="1">{{ trans('clothes.not_payed') }}</option>
                                <option value="2">{{ trans('clothes.payed') }}</option>
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
