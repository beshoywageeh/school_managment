<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Document')</title>
    <style>
        body {
            font-size: 0.875rem;
        }

        .table {
            border: 1px solid black !important;
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        .table td,
        .table th {
            border: 1px solid black !important;
            border-collapse: collapse;
            padding: 3px;
        }

        .table th {
            font-weight: 1.2rem !important;
        }

        p {
            margin: 0;
            padding: 0;
        }

        #heading {
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .text-right {
            text-align: right;
        }

        .text-left {
            text-align: left;
        }

        .text-center {
            text-align: center;
        }

        @page {
            header: page-header;
            footer: page-footer;
        }

        @stack('styles')
    </style>
</head>

<body>
    @section('page-header')
        <htmlpageheader name="page-header">
            @include('backend.report.components.pdf_header')
        </htmlpageheader>
    @show

    @section('page-footer')
        <htmlpagefooter name="page-footer">
            @include('backend.report.components.pdf_footer')
        </htmlpagefooter>
    @show

    @yield('content')
</body>

</html>
