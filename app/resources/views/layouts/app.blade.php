<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('assests/images/logo-icon-dark.png') }}" type="image/png" />
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('layouts.header_css')
    @livewireStyles
    <style>
        [x-cloak] {
            display: none !important;
        }

        body {
            overflow-x: hidden;
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: rgba(0, 0, 0, 0.5);
            align-items: center;
            justify-content: center;
        }

        .modal-dialog {
            max-width: 500px;
            margin: auto;
        }

        .modal-content {
            background: white;
            border-radius: 12px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
    </style>
</head>

<body class="bg-gray-100 font-sans">
    <!-- Pre-loader - hidden after 2 seconds as fallback -->
    <div id="pre-loader" class="fixed inset-0 bg-white flex items-center justify-center z-[9999]">
        <img src="{{ asset('assests/images/logo-dark.png') }}" alt="Loading" class="w-32">
    </div>
    <script>

    </script>

    <!-- Sidebar - Fixed -->
    @include('layouts.sidebar')

    <!-- Main Content Wrapper -->
    <div class="ms-64 flex flex-col min-h-screen">
        <x-toasts />
        <x-alert />
        <!-- Header -->
        @include('layouts.header')

        <!-- Content Area -->
        <main class="flex-1 overflow-y-auto p-6 bg-gray-50">
            <div class="mb-6">
                <h4 class="text-2xl font-bold text-gray-800">@yield('title')</h4>
            </div>
            @yield('content')
        </main>
        @if (session('success'))
            <div x-data x-init="window.dispatchEvent(new CustomEvent('add-toast', { detail: { id: Date.now(), message: '{{ session('success') }}', type: 'success', sticky: false, duration: 4000, progress: 100 } }))"></div>
        @endif

        @if (session('error'))
            <div x-data x-init="window.dispatchEvent(new CustomEvent('add-toast', { detail: { id: Date.now(), message: '{{ session('error') }}', type: 'danger', sticky: false, duration: 4000, progress: 100 } }))"></div>
        @endif

        @if (session('info'))
            <div x-data x-init="window.dispatchEvent(new CustomEvent('add-toast', { detail: { id: Date.now(), message: '{{ session('info') }}', type: 'info', sticky: false, duration: 4000, progress: 100 } }))"></div>
        @endif

        @if (session('warning'))
            <div x-data x-init="window.dispatchEvent(new CustomEvent('add-toast', { detail: { id: Date.now(), message: '{{ session('warning') }}', type: 'warning', sticky: false, duration: 4000, progress: 100 } }))"></div>
        @endif
        <!-- Footer -->
        @include('layouts.footer')
    </div>

    @include('layouts.footer_script')

    @livewireScripts
</body>

</html>
