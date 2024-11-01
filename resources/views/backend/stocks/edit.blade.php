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
            <form action="{{ route('clothe.update') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $stock->id }}">
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>{{ trans('grades.name') }}</label>
                                <select name="grade_id" class="custom-select" id="grades">
                                    <option value="" disabled selected>{{ trans('general.select') }}
                                    </option>
                                    @foreach ($grades as $grade)
                                        <option @selected($grade->id == $stock->grade_id) value="{{ $grade->id }}">
                                            {{ $grade->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ trans('class_rooms.title') }}</label>
                                <select name="classroom_id" id="classrooms" class="custom-select ">
                                    <option value="{{ $stock->classroom_id }}">{{ $stock->classroom->name }}</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">
                                    {{ trans('stock.name') }}
                                </label>
                                <input type="text" name="name" value={{ $stock->name }} class="form-control" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>{{ trans('stock.quantity') }}</label>
                                <input type="number" value="{{ $stock->opening_qty }}"name="quantity"
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
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ trans('stock.purchase_price') }}</label>
                                <input type="number" name="purchase_price" value="{{ $stock->purchase_price }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ trans('stock.sale_price') }}</label>
                                <input type="number" value="{{ $stock->sales_price }}" name="sales_price"
                                    class="form-control" />
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
