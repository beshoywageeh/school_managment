<!DOCTYPE html>
<html>
<head>
    <title>{{ trans('exchange_bonds.title') }} - Print</title>
    <style>
        @page {
            size: A5;
            margin: 10mm;
        }
        @media print {
            body {
            font-family: Arial, sans-serif;
            font-size: 10pt;
            line-height: 1.4;
            margin: 0;
            width: 148mm; /* A5 width */
            height: 210mm; /* A5 height */
            }
            .print-header {
            text-align: center;
            margin-bottom: 20px;
            }
            .print-row {
            margin-bottom: 12px;
            clear: both;
            }
            .print-label {
            font-weight: bold;
            width: 120px;
            float: left;
            }
            .print-value {
            margin-left: 130px;
            }
            .print-footer {
            margin-top: 30px;
            text-align: center;
            }
            .no-print {
            display: none;
            }
        }
    </style>
</head>
<body>
    <div class="print-header">
        <h1>{{ $school->name }}</h1>
        <p>{{ $school->address }}</p>
        <p>{{ $school->phone }}</p>
        <h2>{{ trans('exchange_bonds.title') }}</h2>
        <p>{{ date('Y-m-d') }}</p>
    </div>

    <div class="print-row">
        <span class="print-label">{{trans('exchange_bonds.manual')}}:</span>
        <span class="print-value">{{ $exchange->manual }}</span>
    </div>

    <div class="print-row">
        <span class="print-label">{{ trans('exchange_bonds.student') }}:</span>
        <span class="print-value">{{ $exchange->student->name }}</span>
    </div>

    <div class="print-row">
        <span class="print-label">{{ trans('exchange_bonds.amount') }}:</span>
        <span class="print-value">{{ Number::Currency($exchange->amount,'EGP','AR') }}</span>
    </div>
<div class="print-row">
    <span class="print-value">{{Numbers::TafqeetMoney($exchange->amount,'EGP')}}</span>
</div>
    <div class="print-row">
        <span class="print-label">{{ trans('exchange_bonds.note') }}:</span>
        <span class="print-value">{{ $exchange->note }}</span>
    </div>

    <div class="print-footer">
        <p>________________________</p>
        <p>{{ $school->name }}</p>
    </div>

    <div class="no-print">
        <button onclick="window.print()">{{ trans('General.print') }}</button>
        <a href="{{route('exchange_bonds.index')}}">{{ trans('General.close') }}</a>
    </div>
</body>
</html>
