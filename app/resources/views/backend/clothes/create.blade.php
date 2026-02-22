<div class="modal modal-fullscreen fade " id="newItem" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <div class="row mb-40">
                        <div class="col">
                            <label>
                                {{trans('Grades.name')}}
                            </label>
                            <select name="grade_id" class="custom-select" id="grades_create">
                                <option value="" disabled selected>{{ trans('general.select') }}
                                </option>
                                @foreach ($grades as $grade)
                                    <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <label>{{trans('class_rooms.title') }}</label>
                            <select name="classroom_id" id="classrooms_create" class="custom-select ">
                                <option disabled selected>{{ trans('general.choose_grade') }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table book_list table-bordered">
                            <thead>
                            <tr>


                                <th><strong>{{ trans('stock.name')  }}</strong></th>
                                <th><strong>{{ trans('stock.quantity')  }}</strong></th>
                                <th><strong>{{ trans('general.isset')  }}</strong></th>
                                <th><strong>{{ trans('clothes.sales_isset') }}</strong></th>
                                <th><strong>{{trans('stock.purchase_price') }}</strong></th>
                                <th><strong>{{ trans('stock.sale_price')  }}</strong></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody data-repeater-list="list_books_Sheets">
                            <tr data-repeater-item>

                                <td>
                                    <input type="text" name="name" class="form-control" /></td>
                                <td><input type="number" name="quantity" class="form-control" /></td>
                                <td><input type="checkbox" name="isset" class="form-select" id=""></td>
                                <td> <input type="number" name="sales_price_isset" class="form-control" id=""></td>
                                <td><input type="number" name="purchase_price" class="form-control" /></td>
                                <td><input type="number" name="sales_price" class="form-control" /></td>

                                <td>
                                    <button type="button" class="btn btn-danger btn-block" data-repeater-delete ><i class="ti-trash"></i></button>
                                </td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="9">
                                    <input class="btn btn-primary btn-block" data-repeater-create type="button"
                                           value="{{ trans('book_sheet.new_book') }}" />
                                </td>
                            </tr>
                            </tfoot>
                        </table>
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
