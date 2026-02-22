<div class="modal fade" id="book_sheet-edit-{{ $book_sheet->id }}" tabindex="-1" role="dialog" aria-hidden="true">
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
            <form action="{{ route('books_sheets.update') }}" method="POST" autocomplete="off">
                @csrf
                <input type="hidden" name="id"value="{{ $book_sheet->id }}">
                <div class="modal-body">
                    <div class="row mb-30">
                        <div class="col">
                            <label for="" class="">{{ trans('Grades.title') }}</label>
                            <select class="custom-select" name="grade_id" id="grades">
                                <option value="" @disabled(true) selected>
                                    {{ trans('class_rooms.select_grade') }}</option>
                                @foreach ($grades as $grade)
                                    <option @selected($book_sheet->grade_id == $grade->id) value="{{ $grade->id }}">{{ $grade->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <label for="">{{ trans('class_rooms.Name') }}</label>
                            <select name="classroom_id" class="custom-select" id="classrooms">
                                <option value="{{ $book_sheet->classroom_id }}">{{ $book_sheet->classroom->name }}
                                </option>
                            </select>
                        </div>
                        <div class="col">
                            <x-input type="text" name="name" class="form-control"
                                value="{{ $book_sheet->name }}">
                                {{ trans('book_sheet.name') }}
                            </x-input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <x-input type="number" name="opening_qty" class="form-control"
                                value="{{ $book_sheet->opening_qty }}">
                                {{ trans('book_sheet.opening_qty') }}
                            </x-input>

                        </div>
                        <div class="col">
                            <x-input type="number" name="sales_price" value="{{ $book_sheet->sales_price }}"
                                class="form-control">{{ trans('book_sheet.sales-rice') }}</x-input>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ trans('book_sheet.is_book') }}</label>
                                <input type="checkbox" name="is_book" @checked($book_sheet->is_book == 1)>
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
