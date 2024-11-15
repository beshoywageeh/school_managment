<div class="modal fade" id="BookSheet" tabindex="-1" role="dialog" aria-hidden="true">
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
            <form action="{{ route('books_sheets.store') }}" method="POST" autocomplete="off">
                @csrf
                <div class="modal-body">
                    <div class="row mb-30">
                        <div class="col">
                            <label for="" class="">{{ trans('Grades.title') }}</label>
                            <select class="custom-select" name="grade_id" id="grades_create">
                                <option value="" @disabled(true) selected>
                                    {{ trans('class_rooms.select_grade') }}</option>
                                @foreach ($grades as $grade)
                                    <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col">
                            <label for="">{{ trans('class_rooms.Name') }}</label>
                            <select name="classroom_id" class="custom-select" id="classrooms_create">
                                <option>{{ trans('General.choose_grade') }}</option>
                            </select>
                        </div>
                        <div class="col">
                            <x-input type="number" name="sales_price" class="form-control"
                                value="{{ old('sales-price') }}">
                                {{ trans('book_sheet.sales-price') }}
                            </x-input>
                        </div>
                    </div>

                    <div class="table-reponsive">
                        <table class="table book_list table-bordered">
                            <thead>
                                <tr>
                                    <th><strong>{{ trans('book_sheet.name') }}</strong></th>
                                    <th><strong>{{ trans('book_sheet.opening_qty') }}</strong></th>
                                    <th><strong>{{ trans('book_sheet.is_book') }}</strong></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody data-repeater-list="list_Books">
                                <tr data-repeater-item>
                                    <td>
                                        <input type="text" name="name" class="form-control"
                                        value="{{ old('name') }}">

                                    </td>
                                    <td>
                                        <input type="number" name="opening_qty" class="form-control"
                                            value="{{ old('opening_qty') }}">

                                    <td>
                                        <input type="checkbox" name="is_book" checked></td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-block" data-repeater-delete ><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4">
                                        <input class="btn btn-primary btn-block" data-repeater-create type="button"
                                            value="{{ trans('book_sheet.new_book') }}" />
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" type="submit">{{ trans('general.Submit') }}</button>
                        <button class="btn btn-secondary" data-dismiss="modal">{{ trans('general.Cancel') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
