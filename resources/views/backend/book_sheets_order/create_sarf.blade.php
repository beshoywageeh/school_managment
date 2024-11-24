@extends('layouts.app')
@section('title')
    {{ trans('stock.income_order') }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="row mb-30">
        <div class="col">
            <div class="card">
                <form action="{{ route('bookSheetsOrder.store_sarf') }}"method="post" autocomplete="off">
                    @csrf

                    <div class="card-header">
                        <div class="text-center row">
                            <div class="col">
                                <h6>الرقم : {{ $auto_number }}</h6>
                            </div>
                            <div class="col">
                                <h6>النوع : {{ trans('stock.income_order') }}</h6>
                            </div>
                            <div class="col">
                                <h6>التاريخ : {{ date('Y-m-d') }}</h6>
                            </div>
                            <div class="col">
                                <h6>الوقت : {{ date('g:i:s') }}</h6>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">{{ trans('student.name') }}</label>
                                    <select name="student_id" id="student" class="select2 student">
                                        <option value="" selected disabled>{{ trans('general.select') }}</option>
                                        @forelse ($students as $student)
                                            <option value="{{ $student->id }}">{{ $student->name }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table text-center table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ trans('stock.name') }}</th>
                                    <th>{{ trans('stock.quantity') }}</th>
                                    <th>{{ trans('clothes.sales_price') }}</th>
                                </tr>
                            </thead>
                            <tbody id="invoice_data">
                                <tr class="alert alert-warning">
                                    <th colspan="4">{{ trans('general.choose_student') }}</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <div class="text-md-right">
                            <button class="btn btn-success" type="submit">{{ trans('general.Submit') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        const table = document.querySelector('#invoice_data');
        $("#student").on("select2:select", async (e) => {
            table.innerHTML =
                '<tr><td colspan="4"><img src="{{ asset('assests/images/ajax-loader.gif') }}"/></td></tr>';

            var select_val = $(e.currentTarget).val();
            const response = await fetch(`/ajax/get_books_sheets/${select_val}`);
            const data = await response.json();
            table.innerHTML = '';
            if (data.length === 0) {
                table.innerHTML =
                    '<tr><td colspan="4" class="alert alert-danger">{{ trans('general.noDataToShow') }}</td></tr>';
            } else {
                data.forEach((item, index) => {
                    var row = `<tr>
                        <td>${index+1}</td>
                        <td><input type="hidden" name="id[]"value="${item.id}"/>${item.name}</td>
                        <td><input class="form-control" name="quantity[]" value="1" type="number"/></td>
                        <td>${item.sales_price}</td>
                        </tr>`;
                    table.innerHTML += row;
                })
            }
        });
    </script>
@endpush
