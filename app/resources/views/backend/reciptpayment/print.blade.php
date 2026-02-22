@extends('layouts.invoice_view')
@push('css')

@endpush
@section('content')
<div class="receipt" id="print">
    <div class="pb-3 mb-3 row border-bottom">
        <div class="col-6">
            <div class="logo">
                @if($school->image)
                <img src="{{ asset('storage/attachments/schools/'.$school->slug.'/' . $school->image->filename) }}"
                     alt="{{$school->name}}" class="img-fluid">
                     @else
                     <img src="{{ asset('assests/images/logo-icon-dark.png') }}"
                     alt="Ischool" class="img-fluid">
                @endif
            </div>
        </div>
        <div class="col-6 text-end">
            <h1 class="h3">{{trans('Recipt_Payments.title')}}</h1>
            <p class="mb-0">{{trans('general.created_at')}}: {{$report_data['recipt']->date}}</p>
            <p class="mb-0">{{trans('Recipt_Payments.man')}}: {{$report_data['recipt']->manual}}</p>
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-12">
            <h2 class="h4">{{trans('Recipt_Payments.name')}}: {{$report_data['recipt']->student->name}}</h2>
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-12">
            <table class="table text-center table-bordered">
                <tbody>
                    <tr>
                        <td>{{trans('Recipt_Payments.amount')}}</td>
                        <td>{{Number::currency($report_data['recipt']->Debit, in: 'EGP', locale: 'ar')}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="text-center col-12">
            <h2 class="h4">{{ $report_data['tafqeet']}}</h2>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <h5 class="text-right">{{trans('Recipt_Payments.sign')}}</h5>
        </div>
    </div>
</div>
@endsection
