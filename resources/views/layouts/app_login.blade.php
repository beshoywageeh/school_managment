<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('assests/images/logo-icon-dark.png') }}" type="image/png" />
    <title>{{ env('APP_NAME') }} &nbsp; {{ trans('auth.login') }}</title>
    @include('layouts.header_css')
</head>
<style>
    @keyframes pulse {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.1);
        }

        100% {
            transform: scale(1);
        }
    }

    .pulse {
        background-color: #3498db;
        border-radius: 10px;
        padding: 10px;
        color: white;
        animation: pulse 2s infinite;
    }
</style>
<body>
    <div class="wrapper">
        <div id="pre-loader" class="pulse">
            <img src="{{ asset('assests/images/logo-dark.png') }}" alt="">

        </div>
        <section class="height-100vh d-flex align-items-center page-section-ptb login"
            style="background-image: url({{ asset('assests/images/login-bg.jpg') }});background-repeat: no-repeat;
    background-size: cover;">
            <div class="container">
                @yield('login')
            </div>
        </section>
    </div>
    @include('layouts.footer_script')
</body>

</html>
