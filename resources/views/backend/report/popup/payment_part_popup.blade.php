<div class="modal fade" id="payment_parts" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title" id="exampleModalLabel">
                    <div class="">
                        <h6>{{ trans('Sidebar.Recipt_Payment') }}</h6>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('report.payment_parts') }}" method="post">
                <div class="modal-body">
                    @csrf
                    <div class="row mb-4">
                        <div class="col">
                            <div class="input-group" data-date="23/11/2018" data-date-format="mm/dd/yyyy">
                                <span class="input-group-addon">{{ trans('general.from') }}</span>
                                <input type="text" class="form-control range-from" name="from">
                                <span class="input-group-addon">{{ trans('general.to') }}</span>
                                <input class="form-control range-to" type="text" name="to">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">

                                <label for="">{{ trans('General.payment_status') }}</label>

                                <select name="payment_status" id="" class="custom-select">
                                    <option value="" selected disabled>
                                        {{ trans('General.choose', ['value'=> trans('report.payment_status')]) }}</option>
                                    <option value="2">{{ trans('General.all') }}</option>
                                    <option value="0">{{ trans('clothes.not_payed') }}</option>
                                    <option value="1">{{ trans('clothes.payed') }}</option>
                                </select>
                            </div>
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
