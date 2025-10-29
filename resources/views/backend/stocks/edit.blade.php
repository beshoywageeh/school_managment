<div class="modal fade " id="editItem-{{ $stock->id }}" tabindex="-1" role="dialog" aria-hidden="true">
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
            <form action="{{ route('stock.update') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $stock->id }}">
                <div class="modal-body">

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">
                                    {{ trans('stock.name') }}
                                </label>
                                <input type="text" name="name" value="{{ $stock->name }}" class="form-control" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>{{ trans('stock.quantity') }}</label>
                                <input type="number" value="{{ $stock->opening_stock }}"name="quantity"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ trans('general.isset') }}</label>
                                <input type="checkbox" @checked($stock->isset == 1) name="isset" class="form-select"
                                    id="">
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
