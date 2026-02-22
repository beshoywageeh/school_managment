<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تقارير | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assests/css/bootstrap-rtl.min.css') }}">
</head>

<style>
    body {
        font-size: 0.75rem;
        text-align: center;
    }

    table th,
    table tr,
    table td {
        align-content: center;
        border: 1px solid black;
    }

    @media print {

        .no-print,
        .no-print * {
            display: none !important;
        }

        /* html,body{
                width: 210mm;
                height:297mm ;
            } */
    }
</style>

@stack('css')

<body>
    <div class="text-center container-fluid text-middle">
        <div class="my-2 row no-print">
            <div class="col"><a href="{{ url()->previous() }}" class="btn btn-primary">{{ trans('report.back') }}</a>
            </div>
            <div class="col"><h6 class="alert alert-secondary">{{now()->format('Y-m-d s : i : g A')}}</h6></div>
            <div class="col">
                <button class="btn btn-success" onclick="window.print();">{{ trans('report.print') }}</button>
            </div>
        </div>
        @yield('content')
    </div>
    @stack('js')
    <script></script>
</body>

</html>
