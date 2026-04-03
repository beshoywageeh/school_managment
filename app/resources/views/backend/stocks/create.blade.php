<div class="modal fade" id="newItem" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">
                    <h6>{{ trans('general.new') }}</h6>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ route('stocks.store') }}" method="POST">
                @csrf
                <div class="modal-body">

                    <div class="row">
                        <div class="col">
                            <div class="table-responsive">
                                <table class="list_stocks table-sm">
                                    <thead>
                                        <tr>
                                            <th><strong>{{ trans('stock.name') }}</strong></th>
                                            <th><strong>{{ trans('stock.opening_balance') }}</strong></th>
                                            <th><strong>{{ trans('stock.price') }}</strong></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody data-repeater-list="list_stocks">
                                        <tr data-repeater-item>
                                            <td>
                                                <input type="text" name="name" list="stocks" class="form-control"/>
                                                <datalist id="stocks">
                                                    @foreach ($stocks as $stock)
                                                        <option value="{{ $stock->name }}">
                                                    @endforeach
                                                </datalist>
                                            </td>
                                            <td>
                                                <input type="number" name="opening_qty" class="form-control">
                                            </td>
                                            <td>
                                                <input type="number" name="price" class="form-control">
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger btn-block"
                                                    data-repeater-delete><i class="ti-trash"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="4">
                                                <input class="btn btn-primary btn-block" data-repeater-create
                                                    type="button" value="{{ trans('general.new') }}" />
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
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
