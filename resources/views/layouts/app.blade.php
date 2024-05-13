<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('storage/attachments/schools/' . $school->image->filename) }}" type="image/png" />
    <title>@yield('title')</title>

    @Vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @include('layouts.header_css')


</head>

<body>
    <div id='loader' class="flex items-center justify-center w-full min-h-screen">
        <div class="sk-chase">
            <div class="sk-chase-dot before:bg-primary-500"></div>
            <div class="sk-chase-dot before:bg-primary-500"></div>
            <div class="sk-chase-dot before:bg-primary-500"></div>
            <div class="sk-chase-dot before:bg-primary-500"></div>
            <div class="sk-chase-dot before:bg-primary-500"></div>
            <div class="sk-chase-dot before:bg-primary-500"></div>
        </div>
    </div>

    <div id="app" style="display:none;">

        <!-- Sidebar Starts -->@include('layouts.sidebar')
        <!-- Sidebar Ends -->
        <!-- Wrapper Starts -->
        <div class="wrapper" id='customwrapper'>

            <!-- Header Starts -->
            @include('layouts.header')
            <!-- Header Ends -->

            <!-- Page Content Starts -->
            <div class="content">
                <!-- Main Content Starts -->
                <main class="container flex-grow p-4 sm:p-6">
                    <!-- Page Title Starts -->
                    <div class="mb-6 flex flex-col justify-between gap-y-1 sm:flex-row sm:gap-y-0">
                        <h5>@yield('title') | {{ $school->name }}</h5>
                    </div>
                    @yield('content')
                </main>
                <!-- Main Content Ends -->

                <!-- Footer Starts -->
                @include('layouts.footer')
                <!-- Footer Ends -->
            </div>
            <!-- Page Content Ends -->
        </div>
        <!-- Wrapper Ends -->
    </div>

    @livewireScripts

    @include('layouts.footer_script')
</body>

</html>
