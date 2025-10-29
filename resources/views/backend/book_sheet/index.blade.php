@extends('layouts.app')
@section('title')
    {{ trans('Sidebar.books_sheets') }}
@endsection
@push('css')
@endpush
@section('content')
    <div class="row">
        <div class="col">
            <div class="mb-4 card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h4>{{ trans('Sidebar.books_sheets') }}</h4>
                        </div>
                        <div class="col text-md-right">
                            @can('books_sheets-create')
                                <button data-target="#BookSheet" data-toggle="modal"
                                    class="btn btn-primary">{{ trans('General.new') }}</button>
                            @endcan
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-reponsive">
                        <table class="table table-bordered table-striped" id="datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ trans('book_sheet.name') }}</th>
                                    <th>{{ trans('book_sheet.grade') }}</th>
                                    <th>{{ trans('book_sheet.classroom') }}</th>
                                    <th>{{ trans('book_sheet.opening_qty') }}</th>
                                    <th>{{ trans('book_sheet.sales-price') }}</th>
                                    <th>{{ trans('General.created_at') }}</th>
                                    <th>{{ trans('General.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($books_sheets as $book_sheet)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $book_sheet->name }}&nbsp<span
                                                class="badge badge-info">{{ $book_sheet->is_book == 1 ? trans('book_sheet.book') : trans('book_sheet.not_book') }}</span>
                                        </td>
                                        <td>{{ $book_sheet->grade->name }}</td>
                                        <td>{{ $book_sheet->classroom->name }}</td>
                                        <td>{{ $book_sheet->opening_qty + $book_sheet->orders->sum('pivot.quantity_in') - $book_sheet->orders->sum('pivot.quantity_out') }}
                                        </td>
                                        <td>{{ Number::currency($book_sheet->sales_price, 'EGP', 'ar') }}</td>
                                        <td>{{ $book_sheet->created_at->format('Y-m-d') }}</td>
                                        <td>
                                            <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                                [
                                                    'type' => 'button',
                                                    'target' => '#book_sheet-edit-' . $book_sheet->id,
                                                    'text' => trans('general.edit'),
                                                    'icon' => 'ti-pencil-alt',
                                                    'can' => 'books_sheets-update',
                                                ],
                                                [
                                                    'type' => 'link',
                                                    'url' => route('books_sheets.destroy', $book_sheet->id),
                                                    'text' => trans('general.delete'),
                                                    'icon' => 'ti-trash',
                                                    'onclick' => 'confirmation(event)',
                                                    'can' => 'books_sheets-delete',
                                                ],
                                            ]" />
                                        </td>
                                    </tr>
                                    @include('backend.book_sheet.edit')
                                @empty
                                    <tr>
                                        <td colspan="8">
                                            <span
                                                class="alert alert-info d-block">{{ trans('general.noDataToShow') }}</span>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @include('backend.book_sheet.create')
    </div>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        $('#grades_create').on('change', function() {
            let grade = $(this).val();
            if (grade) {
                $.ajax({
                    url: "{{ URL::to('/ajax/get_classRooms') }}/" + grade,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('#classrooms_create').empty();
                        $('#classrooms_create').append(
                            '<option selected disabled>{{ trans('student.choose_classroom') }}</option>'
                        );
                        $.each(data,function(key, value) {

                            $('#classrooms_create').append(
                                `<option value="${value.id}">${value.name}</option>`);

                        });
                    },
                });
            };
        });
    });
</script>


<script>
    $(document).ready(function() {
        $('#grades').on('change', function() {
            let grade = $(this).val();
            if (grade) {
                $.ajax({
                    url: "{{ URL::to('/ajax/get_classRooms') }}/" + grade,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('#classrooms').empty();
                        $('#classrooms').append(
                            '<option selected disabled>{{ trans('student.choose_classroom') }}</option>'
                        );
                        $.each(data,function(key, value) {

                            $('#classrooms').append(
                                `<option value="${value.id}">${value.name}</option>`);

                        });
                    },
                });
            };
        });
    });
</script>
    <script>
        $(document).ready(function() {
            $('.book_list').repeater({

                show: function() {
                    $(this).slideDown();
                },
                hide: function(deleteElement) {
                    $(this).slideUp(deleteElement);
                }
            });
        });
    </script>
@endpush
