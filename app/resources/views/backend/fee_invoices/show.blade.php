@extends('layouts.report_view')

@section('title')
    {{ trans('report.print') }} {{ trans('fee_invoice.title') }}
@endsection
@push('css')
<style>
    @page {
        size: A5 landscape;
        margin: 0;
    }
    body {
        font-family: Arial, sans-serif;
        background-color: white;
    }
    .receipt {
        width: 210mm;
        height: 148.5mm;
        padding: 10mm;
        box-sizing: border-box;
        overflow: hidden;
        page-break-inside: avoid;
    }
    .logo img {
        height: 50px;
    }
    @media print {
        body, html {
            width: 210mm;
            height: 148.5mm;
        }
        .receipt {
            width: 100%;
            height: 100%;
            box-shadow: none;
        }
    }
</style>
@endpush
@section('content')
<div class="receipt" id="print">
    <div class="pb-3 mb-3 row border-bottom">
        <div class="col-4">
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
        <div class="text-center col-4">
            <h1 class="h3">{{trans('fee_invoice.title')}}</h1>
            <p class="mb-0">{{trans('general.created_at')}}: {{$invoice_details->invoice_date}}</p>
        </div>
        <div class="col-4">
            {{$school->name}}<br>
            {{$school->address}}<br>
            {{$school->phone}}
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-12">
            <h2 class="h4">{{trans('Recipt_Payments.name')}}: {{$invoice_details->students->name}}</h2>
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-12">
            <table class="table text-center table-bordered">
                <tbody>
                    <tr>
                        <td>{{trans('Recipt_Payments.amount')}}</td>
                        <td>{{Number::currency($invoice_details->fees->amount, in: 'EGP', locale: 'ar')}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="text-center col-12">
            <h2 class="h4">{{ $tafqeet}}</h2>
        </div>
    </div>
</div>
@endsection
