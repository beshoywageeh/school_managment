<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <link rel="icon" href="{{ asset('assests/images/logo-icon-dark.png') }}" type="image/png" />
    <title>{{ config('app.name') }} - {{ trans('auth.login') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('layouts.header_css')
</head>

<body class="bg-gray-100 font-sans">


    <div class="min-h-screen flex items-center justify-center bg-cover bg-center"
        style="background-image: url('{{ asset('assests/images/login-bg.jpg') }}')">
        <div class="absolute inset-0 bg-black/50"></div>

        <div class="relative z-10 w-full max-w-md">
            @yield('login')
        </div>
    </div>

    @include('layouts.footer_script')
</body>

</html>
