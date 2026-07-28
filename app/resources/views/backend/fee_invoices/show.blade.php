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

            body,
            html {
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
        <div class="pb-3 mb-3 flex flex-wrap border-bottom">
            <div class="w-1/3">
                <div class="logo">
                    @if ($school->image)
                        <img src="{{ asset('storage/attachments/schools/' . $school->slug . '/' . $school->image->filename) }}"
                            alt="{{ $school->name }}" class="max-w-full h-auto">
                    @else
                        <img src="{{ asset('assests/images/logo-icon-dark.png') }}" alt="Ischool" class="max-w-full h-auto">
                    @endif
                </div>
            </div>
            <div class="text-center w-1/3">
                <h1 class="text-2xl font-bold">{{ trans('fee_invoice.title') }}</h1>
                <p class="mb-0">{{ trans('general.created_at') }}: {{ $invoice_details->invoice_date }}</p>
            </div>
            <div class="w-1/3">
                {{ $school->name }}<br>
                {{ $school->address }}<br>
                {{ $school->phone }}
            </div>
        </div>
        <div class="mb-3 flex flex-wrap">
            <div class="w-full">
                <h2 class="text-xl font-bold">{{ trans('Recipt_Payments.name') }}: {{ $invoice_details->student->name }}</h2>
            </div>
        </div>
        <div class="mb-3 flex flex-wrap">
            <div class="w-full">
                <table class="w-full text-center border-collapse border border-gray-300">
                    <tbody>
                        <tr>
                            <td>{{ trans('Recipt_Payments.amount') }}</td>
                            <td>{{ Number::currency($invoice_details->schoolFee->amount, in: 'EGP', locale: 'ar') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="flex flex-wrap">
            <div class="text-center w-full">
                <h2 class="text-xl font-bold">{{ $tafqeet }}</h2>
            </div>
        </div>
    </div>
@endsection
