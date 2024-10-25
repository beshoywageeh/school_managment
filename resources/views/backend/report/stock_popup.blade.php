<div class="modal fade" id="stock" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title" id="exampleModalLabel">
                    <div class="">
                        <h6>{{ trans('report.stock') }}</h6>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('report.stock') }}" method="post">
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="col-3">
                            <label for="">{{ trans('report.stock') }}</label>
                        </div>
                        <div class="col-9">
                            <select name="stock" id="stock" class="form-control w-100 select2" style="width: 100%;">
                                <option selected disabled>{{trans('report.select_stock')}}</option>
                                @foreach ($stocks as $stock)
                                    <option value="{{ $stock->id }}">{{ $stock->name }}</option>
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
