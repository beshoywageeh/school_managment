@extends('layouts.app')
@section('title')
    {{ trans('general.new') }} | {{trans('Recipt_payments.title')}}
@endsection
@section('content')
    <div class="mb-4 row">
        <div class="col">
            @include('backend.msg')
            <div class="card">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="col">
                            <h4></h4>
                        </div>
                    </div>
                    <form id="form-with-multiple-column" class="max-w-full" action="{{ route('Recipt_Payment.store') }}"
                          method="post">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="">{{trans('Recipt_payments.man')}}</label>
                                <input type="text" class="form-control" disabled value="{{$invoice_manual}}">

                            </div>
                            <div class="col">
                                <label for="">{{trans('Recipt_payments.total')}}</label>
                                <input type="text" class="form-control" disabled
                                       value="{{$Student->fees->sum('debit')-$Student->fees->sum('credit'),2}}">

                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="">{{trans('Recipt_payments.name')}}</label>
                                <select name="student_id" class="custom-select">
                                    <option value="{{$Student->id}}">{{$Student->name}}</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="">{{trans('Recipt_payments.amount')}}</label>
                                <input type="number" class="form-control" name="amount">
                            </div>

                        </div>
                        <br>
                        <div class="row">
                            <div class="col text-md-right">
                                <button class="button" type="submit">{{ trans('General.Submit') }}</button>
                            </div>
                        </div>
                    </form>

                    <hr>
                    <div class="row">
                        <div class="col">
                            <h4 class="bg-info text-center my-4 py-2 text-white">{{trans('Recipt_Payments.mini_report')}}</h4>
                            <table class="table table-active table-bordered">
                                <tr>
                                    <th>{{trans('Recipt_Payments.total_debit')}}</th>
                                    <th>{{trans('Recipt_Payments.total_credit')}}</th>
                                    <th>{{trans('Recipt_Payments.total_final')}}</th>
                                </tr>
                                <tr>
                                    <td>{{number_format($Student->fees->sum('debit'),2)}}&nbsp;ج.م</td>
                                    <td>{{number_format($Student->fees->sum('credit'),2)}}&nbsp;ج.م</td>
                                    <td>{{number_format($Student->fees->sum('debit')-$Student->fees->sum('credit'),2)}}&nbsp;ج.م</td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    @push('scripts')
    @endpush
@endsection
