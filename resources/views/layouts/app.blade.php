<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" href="{{ asset('assests/images/logo-icon-dark.png') }}" type="image/png" />
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
        .form-control{
            border: 1px solid #3498db !important;
        }
     
    </style>
    <title>@yield('title')</title>

    @include('layouts.header_css')

    @livewireStyles

</head>

<body>
    <!-- Wrapper Starts -->
    <div class="wrapper">
        <div id="pre-loader" class="pulse">
            <img src="{{ asset('assests/images/logo-dark.png') }}" alt="">

        </div>
        <!-- Header Starts -->
        @include('layouts.header')
        <div class="container-fluid">
            <div class="row">

                @include('layouts.sidebar')
                <div class="content-wrapper">
                    <!-- Sidebar Starts -->
                    <!-- Sidebar Ends -->
                    <div class="page-title mb-30">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4 class="mb-0 font_cairo">@yield('title')</h4>
                            </div>
                            <div class="col-sm-6">
                                <ol class="float-left pt-0 pr-0 breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- Page Title Ends -->

                    @yield('content')
                    <!-- Footer Starts -->
                    @include('layouts.footer')
                    <!-- Footer Ends -->
                </div>
            </div>

        </div>
        <!-- Header Ends -->



    </div>

    <!-- Page Content Ends -->

    @include('layouts.footer_script')
    @livewireScripts
</body>

</html>
