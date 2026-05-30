<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>فاتورة | @yield('title')</title>
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

        .no-print {
            display: none;
        }
    }

    p {
        margin: 0;
        padding: 0;
    }
</style>

@stack('css')

<body>
    <div class="text-center max-w-full mx-auto px-4 text-middle">
        <div class="my-2 flex justify-between items-center no-print">
            <div>
                <a href="{{ url()->previous() }}"
                    class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">{{ trans('report.back') }}</a>
            </div>
            <div>
                <h6 class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg">{{ now()->format('Y-m-d s : i : g A') }}</h6>
            </div>
            <div>
                <button class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600"
                    onclick="window.print();">{{ trans('report.print') }}</button>
            </div>
        </div>
        <div class="flex justify-between items-center mb-2 pb-2" style="border-bottom:1px solid black;">
            <div class="flex-1">{!! $school->heading_right !!}</div>
            <div class="flex-1"></div>
            <div class="flex-1">
                @if ($school->image == null)
                    <img class="w-1/4 rounded-lg" style="width: 104px" src="{{ asset('assests/images/loop_labs.png') }}"
                        alt="{{ $school->name }}" />
                @else
                    <img class="w-1/4 rounded-lg"
                        src="{{ asset('storage/app/attachments/schools/' . $school->slug . '/' . $school->image->filename) }}"
                        alt="{{ $school->name }}" />
                @endif
            </div>
        </div>

        @yield('content')
    </div>
    @stack('js')

</body>

</html>
