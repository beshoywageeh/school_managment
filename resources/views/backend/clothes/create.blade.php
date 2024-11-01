<div class="modal fade " id="newItem" tabindex="-1" role="dialog" aria-hidden="true">
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
            <form action="{{ route('clothes.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>{{ trans('grades.name') }}</label>
                                <select name="grade_id" class="custom-select" id="grades_create">
                                    <option value="" disabled selected>{{ trans('general.select') }}
                                    </option>
                                    @foreach ($grades as $grade)
                                        <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ trans('class_rooms.title') }}</label>
                                <select name="classroom_id" id="classrooms_create" class="custom-select ">
                                    <option value="" disabled selected>{{ trans('general.select') }}
                                    </option>
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
                                <input type="text" name="name" class="form-control" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>{{ trans('stock.quantity') }}</label>
                                <input type="number" name="quantity" class="form-control" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{trans('general.isset')}}</label>
                                <input type="checkbox" name="isset" class="form-select" id="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ trans('stock.purchase_price') }}</label>
                                <input type="number" name="purchase_price" class="form-control" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ trans('stock.sale_price') }}</label>
                                <input type="number" name="sales_price" class="form-control" />
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
