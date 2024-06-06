@extends('layouts.app')
@section('title')
    {{ trans('general.print') }} | {{trans('Recipt_payments.title')}}
@endsection
@section('content')
    <div class="mb-4 row">
        <div class="col">
            @include('backend.msg')
            <div class="card">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="col">
                            <button class="button" onclick="printDiv()">{{trans('general.print')}}<i class="ti-printer"></i></button>
                        </div>
                    </div>
                   <div class="container" id="print">
                       <div class="row" >

                           <table class="table ">
                               <tr>
                                   <td><h4>{{$school->heading_right}}</h4></td>
                                   <td><img width="100"
                                            src="{{ asset('storage/attachments/schools/' . $school->image->filename) }}"
                                            alt=""></td>
                                   <td><h4>{{$school->heading_left}}</h4></td>
                               </tr>
                           </table>

                       </div>
                       <div class="row">
                           <table id="data" class="table table-bordered">
                               <tr>
                                   <td><h4>{{trans('general.created_at')}}</h4></td>
                                   <td><h4>{{$report_data['recipt']->date}}</h4></td>
                               </tr>
                               <tr>
                                   <td><h4>{{trans('Recipt_Payments.name')}}</h4></td>
                                   <td><h4>{{$report_data['recipt']->student->name}}</h4></td>

                               </tr>
                               <tr>
                                   <td><h4>{{trans('Recipt_Payments.amount')}}</h4></td>

                                   <td><h4>{{number_format($report_data['recipt']->Debit,2)}}&nbsp; ج.م</h4></td>
                               </tr>
                               <tr>
                                   <td colspan="2"><h4>{{ $report_data['tafqeet']}}</h4></td>
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
