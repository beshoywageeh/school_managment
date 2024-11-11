<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>فاتورة | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assests/css/bootstrap-rtl.min.css') }}">
</head>

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
        .no-print{
            display:none;
        }
    }
    p{
        margin:0;
        padding:0;
    }
</style>

@stack('css')

<body>
    <div class="text-center container text-middle">
        <div class="my-2 row no-print">
            <div class="col"><a href="{{ url()->previous() }}" class="btn btn-primary">{{ trans('report.back') }}</a>
            </div>
            <div class="col"><h6 class="alert alert-secondary">{{now()->format('Y-m-d s : i : g A')}}</h6></div>
            <div class="col">
                <button class="btn btn-success" onclick="window.print();">{{ trans('report.print') }}</button>
            </div>
        </div>
        <div class="row" style="margin-bottom: 5px; border-bottom:1px solid black;">
            <div class="col">{!!$school->heading_right!!}</div>
            <div class="col"></div>
            <div class="col">          @if ($school->image == null)
                <img class="img-fluid w-25 rounded-lg" style="width: 104px"
                    src="{{ asset('assests/images/loop_labs.png') }}"
                    alt="{{ $school->name }}">
            @else
                <img class="img-fluid w-25 rounded-lg"
                    src="{{ asset('storage/app/attachments/schools/' . $school->slug . '/' . $school->image->filename) }}"
                    alt="{{ $school->name }}">
            @endif</div>
        </div>
       
        @yield('content')
    </div>
    @stack('js')
 
</body>

</html>
