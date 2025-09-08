<div class="modal fade" id="payment_status" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title" id="exampleModalLabel">
                    <div class="">
                        <h6>{{ trans('General.payment_status') }}</h6>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('report.payment_status') }}" method="post">
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label
                                    for="">{{ trans('General.choose', ['value' => trans('Sidebar.Class_Rooms')]) }}</label>
                                <select name="grade" id="" class="custom-select">
                                    <option value="" selected disable>{{ trans('General.choose_grade') }}</option>
                                    <option value="0">{{ trans('General.all') }}</option>
                                    @forelse($grades as $grade)
                                        <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                    @empty
                                    <option value="">
                                        {{trans('General.noDataToShow')}}
                                    </option>
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">

                                <label for="">{{ trans('General.payment_status') }}</label>

                                <select name="payment_status" id="" class="custom-select">
                                    <option value="" selected disabled>
                                        {{ trans('General.choose', ['value'=> trans('report.payment_status')]) }}</option>
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
