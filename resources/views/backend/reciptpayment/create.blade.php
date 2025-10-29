@extends('layouts.app')
@section('title')
    {{ trans('general.new') }} | {{trans('Recipt_Payments.title')}}
@endsection
@push('styles')
<style>
    .active{
        background-color: none !important;
    }
</style>
@endpush
@section('content')
    <div class="mb-4 row">
        <div class="col">
            @include('backend.msg')
            <div class="card">
                <div class="card-body">
                    <div class="row card-title">

                        <div class="col">
                            <label for="">{{trans('Recipt_Payments.man')}}</label>
                            <input type="text"
                                   class="form-control"
                                   disabled
                                   value="{{$invoice_manual}}">

                        </div>
                        <div class="col">
                            <label for="">{{trans('Recipt_Payments.total')}}</label>
                            <input type="text"
                                   class="form-control"
                                   disabled
                                   value="{{$Student->fees->sum('debit')-$Student->fees->sum('credit')}}">

                        </div>
                    </div>


                    <div class="tab">
                        <ul class="nav nav-tabs"
                            role="tablist">
                            <li class="nav-item">
                                <a
                                    class="nav-link active show"
                                    id="home-tab"
                                    data-toggle="tab"
                                    href="#payment_invoice"
                                    role="tab"
                                    aria-controls="home"
                                    aria-selected="true"
                                >{{trans('Sidebar.fees_invoice')}}</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    id="profile-tab"
                                    data-toggle="tab"
                                    href="#payment_part"
                                    role="tab"
                                    aria-controls="profile"
                                    aria-selected="false"
                                >{{trans('Sidebar.payment_parts')}}</a
                                >
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div
                                class="tab-pane fade active show"
                                id="payment_invoice"
                                role="tabpanel"
                                aria-labelledby="home-tab"
                            >
                                <table class="table table-bordered table-sm">
                                    <tr>
                                        <th>{{trans('Recipt_Payments.name')}}</th>
                                        <th>{{trans('general.created_at')}}</th>
                                        <th>{{trans('fees.desc')}}</th>
                                        <th>{{trans('Recipt_Payments.amount')}}</th>
                                        <th></th>
                                    </tr>
                                    @forelse($feeInvoices as $feeInvoice)
                                        <form id="form-with-multiple-column" autocomplete="off"
                                              class="max-w-full"
                                              action="{{ route('Recipt_Payment.store') }}"
                                              method="post">

                                            @csrf
                                            <tr>
                                                <input type="hidden"
                                                       name="type"
                                                       value="full">
                                                <input type="hidden"
                                                       name="feeInvoice"
                                                       value="{{$feeInvoice->id}}">
                                                <td>
                                                    <select name="student_id"
                                                            class="custom-select">
                                                        <option value="{{$Student->id}}">{{$Student->name}}</option>
                                                    </select>
                                                </td>
                                                <td>{{$feeInvoice->invoice_date}}</td>
                                                <td>{{$feeInvoice->fees->title}}</td>
                                                @php
                                                $get_fees = \App\Models\ExcptionFees::where('student_id',$Student->id)->where('fee_id',$feeInvoice->id)->first();
                                                if($get_fees != null){
                                                    $final = $feeInvoice->fees->amount - $get_fees->amount;
                                                }else{
                                                    $final = $feeInvoice->fees->amount;
                                                }
                                                @endphp
                                                <td>{{$final}}</td>
                                                <td>
                                                    <button class="btn btn-success btn-block"
                                                            type="submit">{{ trans('general.full_pay') }}</button>
                                                </td>
                                            </tr>

                                        </form>

                                    @empty
                                        <tr>
                                            <td colspan="5"
                                                class="alert alert-info">
                                                {{trans('general.noDataToShow')}}
                                            </td>

                                        </tr>
                                    @endforelse

                                </table>
                            </div>
                            <div
                                class="tab-pane fade"
                                id="payment_part"
                                role="tabpanel"
                                aria-labelledby="profile-tab"
                            >
                                <table class="table table-bordered table-sm">
                                    <tr>
                                        <th>{{trans('Recipt_Payments.name')}}</th>
                                        <th>{{trans('PaymentParts.date')}}</th>
                                        <th>{{trans('PaymentParts.amount')}}</th>
                                        <th>{{trans('PaymentParts.pay_part')}}</th>
                                        <th></th>
                                    </tr>
                                    @forelse($parts as $part)
                                        <form id="form-with-multiple-column" autocomplete="off"
                                              class="max-w-full"
                                              action="{{ route('payment_parts.submit_pay') }}"
                                              method="post">

                                            @csrf
                                            <tr>
                                                <input type="hidden"
                                                       name="type" value="full">
                                                <input type="hidden"
                                                       name="id" value="{{$part->id}}">
                                                <td>
                                                    <select name="student_id"
                                                            class="custom-select">
                                                        <option value="{{$Student->id}}">{{$Student->name}}</option>
                                                    </select>
                                                </td>
                                                <td>{{$part->date}}</td>
                                                <td>{{$part->amount}}</td>
                                                <td>
                                                    <input type="number"
                                                           name="amount"
                                                           id=""
                                                           class="form-control" value="{{$part->amount}}">
                                                </td>
                                                <td>
                                                    <button class="btn btn-success btn-block"
                                                            type="submit">{{ trans('general.Submit') }}</button>
                                                </td>
                                            </tr>

                                        </form>

                                    @empty
                                        <tr>
                                            <td colspan="5" class="alert alert-info">
                                                {{trans('general.noDataToShow')}}
                                            </td>

                                        </tr>
                                    @endforelse

                                </table>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h4 class="py-2 my-4 text-center text-white bg-info">{{trans('Recipt_Payments.mini_report')}}</h4>
                            <table class="table table-active table-bordered table-sm">
                                <tr>
                                    <th>{{trans('Recipt_Payments.total_debit')}}</th>
                                    <th>{{trans('Recipt_Payments.total_credit')}}</th>
                                    <th>{{trans('Recipt_Payments.total_final')}}</th>
                                </tr>
                                <tr>
                                    <td>{{$Student->fees->sum('debit')}}</td>
                                    <td>{{$Student->fees->sum('credit')}}</td>
                                    <td>{{$Student->fees->sum('debit')-$Student->fees->sum('credit')}}</td>
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
