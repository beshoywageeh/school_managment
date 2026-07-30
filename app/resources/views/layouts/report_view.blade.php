<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تقارير | @yield('title')</title>
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
        border-collapse: collapse;
    }

    @media print {

        .no-print,
        .no-print * {
            display: none !important;
        }
    }

    img {
        width: 10%
    }
</style>

@stack('css')

<body>
    <div class="text-center w-full text-middle">
        <div class="my-4 flex justify-between items-center no-print">
            <div>
                <a href="{{ url()->previous() }}"
                    class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/90">{{ trans('report.back') }}</a>
            </div>
            <div>
                <h6 class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg">{{ now()->format('Y-m-d s : i : g A') }}</h6>
            </div>
            <div>
                <button class="px-4 py-2 bg-success text-white rounded-lg hover:bg-success/90"
                    onclick="window.print();">{{ trans('report.print') }}</button>
            </div>
        </div>
        @yield('content')
    </div>

</body>

</html>
