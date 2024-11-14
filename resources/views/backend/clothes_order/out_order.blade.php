@extends('layouts.app')
@section('title')
    {{ trans('stock.outcome_order') }} | {{ $auto_number }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="row mb-30">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <button class="btn btn-primary" onclick="printDiv()"><i class="fa fa-print"></i></button>
                </div>
                <form action="{{ route('clothes_out_order.store') }}" method="POST" id="invo_submit">@csrf
                    <div class="card-body" style="height:50vh;">
                        <div class="contaier" style="border-bottom:1px solid black; margin-bottom:5px;padding-bottom:5px">
                            <div class="row">
                                <div class="col">
                                    <h6>الرقم : {{ $auto_number }}</h6>
                                </div>
                                <div class="col">
                                    <h6>
                                        التاريخ : {{ date('Y-m-d') }}
                                    </h6>
                                </div>
                                <div class="col">
                                    الوقت : {{ date('s : i : g A') }}
                                </div>
                                <div class="col"><h6>{{trans('clothes.isset_order')}}</h6><input type="checkbox" name="isset" id=""></div>
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
                        <form class="table-responsive" id="print">
                            <table class="table table-bordered">
                                <thead class="">
                                    <tr>
                                        <th><strong>#</strong></th>
                                        <th><strong>{{ trans('stock.name') }}</strong></th>
                                        <th><strong>{{ trans('clothes.sales_price') }}</strong></th>
                                        <th><strong>{{ trans('stock.quantity') }}</strong></th>
                                    </tr>
                                </thead>
                                <tbody id="invoice_data">
                                    <tr class="alert alert-warning">
                                        <th colspan="4">{{ trans('general.choose_student') }}</th>
                                    </tr>
                                </tbody>

                            </table>

                        </form>

                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col"></div>
                            <div class="text-right col">
                                <button onclick="document.getElementById('invo_submit').submit();" class="btn btn-primary" type="submit">{{ trans('General.Submit') }}</button>
                            </div>
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
            table.innerHTML = '<tr><td colspan="4"><img src="{{ asset("assests/images/ajax-loader.gif") }}"/></td></tr>';

            var select_val = $(e.currentTarget).val();
            const response = await fetch(`/ajax/get_clothes/${select_val}`);
            const data = await response.json();
            table.innerHTML='';
            if(data.length === 0){
                table.innerHTML = '<tr><td colspan="4" class="alert alert-danger">{{trans("general.noDataToShow")}}</td></tr>';
            }else{
            data.forEach((item, index) => {
                var row = `<tr>
                        <td>${index+1}</td>
                        <td><input type="hidden" name="id[]"value="${item.id}"/>${item.name}</td>
                        <td>${item.sales_price}</td>
                        <td><input class="form-control" name="quantity[]" value="1" type="number"/></td>
                        </tr>`;
                table.innerHTML += row;
            })}
        });
    </script>
@endpush
