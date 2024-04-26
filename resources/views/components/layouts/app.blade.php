@php
$data['school'] = App\Models\settings::with('image')->first();
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ trans($title.'.title') ?? env('APP_NAME') }}</title>

@Vite(['resources/css/app.css', 'resources/js/app.js'])
@livewireStyles
@include('layouts.header_css')
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
                    {{$slot}}
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