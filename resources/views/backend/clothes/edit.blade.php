<div class="modal fade" id="editItem-{{$stock->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
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
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="id" value="{{$stock->id}}">
                        <div class="col">
                            <x-input name="name" type="text" value="{{$stock->name}}">{{ trans('stock.name') }}</x-input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <x-input name="opening_qty" value="{{$stock->opening_stock}}" type="number">{{ trans('stock.opening_balance') }}</x-input>
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
