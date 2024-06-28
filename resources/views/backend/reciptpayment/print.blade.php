<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>{{ trans('general.print') }} | {{trans('Recipt_payments.title')}}</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: white; /* Remove background color */
        }

        .receipt {
            width: 210mm; /* A5 width */
            height: 148.5mm; /* A5 height */
            background-color: white;
            padding: 10mm; /* Add padding */
            box-sizing: border-box; /* Ensure padding is included in width/height */
            overflow: hidden; /* Prevent overflow */
            page-break-inside: avoid; /* Ensure no page breaks inside the receipt */
        }

        .receipt-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
        }

        .logo img {
            height: 50px;
        }

        .receipt-details {
            text-align: right;
        }

        .customer-info,
        .item-list,
        .total,
        .footer {
            margin-top: 10px; /* Adjust margins for better fitting */
        }

        h1, h2 {
            margin: 0 0 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 5px; /* Adjust padding for better fitting */
            border: 1px solid #ddd;
            text-align: left;
        }

        .total {
            text-align: right;
        }

        .footer {
            text-align: center;
            margin-top: 20px; /* Adjust margin for better fitting */
            font-style: italic;
        }

        @media print {
            @page {
                size: A5 landscape;
                margin: 0;
            }

            body, html {
                width: 210mm;
                height: 148.5mm;
            }

            .receipt {
                width: 100%;
                height: 100%;
                box-shadow: none;
                page-break-inside: avoid;
            }
        }

    </style>
</head>
<body>
<div class="receipt"
     id="print">
    <div class="receipt-header">
        <div class="logo">
            @if($school->image)
            <img src="{{ asset('storage/attachments/schools/'.$school->slug.'/' . $school->image->filename) }}"
                 alt="{{$school->name}}">
                @endif
        </div>
        <div class="receipt-details">
            <h1>{{trans('Recipt_payments.title')}}</h1>
            <p>{{trans('general.created_at')}}: {{$report_data['recipt']->date}}</p>
            <p>{{trans('Recipt_Payments.man')}}: {{$report_data['recipt']->manual}}</p>
        </div>
    </div>
    <div class="customer-info">
        <h2>
        {{trans('Recipt_Payments.name')}}: {{$report_data['recipt']->student->name}}</h2>
    </div>
    <div class="item-list" style="text-align: center">
        <table>

            <tbody>
            <tr>
                <td>{{trans('Recipt_Payments.amount')}}</td>
                <td>{{Number::currency($report_data['recipt']->Debit, in: 'EGP', locale: 'ar')}}</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="total" style="text-align: center">
        <h2>{{ $report_data['tafqeet']}}</h2>
    </div>

</div>
<script>
    window.print();
    window.location.href = "{{route('Students.index')}}";
</script>
</body>
</html>

