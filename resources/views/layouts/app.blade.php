@php
    $data['school'] = App\Models\settings::with('image')->first();
@endphp
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon"
        href="{{ asset('storage/attachments/schools/' . $data['school']->school_name . '/' . $data['school']->image->filename) }}"
        type="image/png" />
    <title>@yield('page_title')</title>
    @livewireStyles
    @include('layouts.header_css')
    @Vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        @media (min-width: 1024px) {
            body .wrapper {
                margin-left: 0rem;
                margin-right: 18rem;
            }

            body .wrapper.expanded {
                margin-left: 0rem;
                margin-right: 5rem !important;
            }

            * {
                font-family: 'Cairo';
                direction: rtl;
                scrollbar-width: thin;
                scrollbar-color: #888 #f6f6f6;
                scroll-behavior: smooth;
            }

            /* width */
            ::-webkit-scrollbar {
                width: 10px;
            }

            /* Track */
            ::-webkit-scrollbar-track {
                background: #888;
                border-radius: 5px;
            }

            /* Handle */
            ::-webkit-scrollbar-thumb {
                background: #000;
                border-radius: 5px;
            }

            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
                background: #555;
            }


        }
    </style>

</head>

<body>

    <div id="app">

        <!-- Sidebar Starts -->
        @include('layouts.sidebar')
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
                    @yield('main_content')
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
