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

    </style>
</head>

<body x-data="{
    sidebarPinned: localStorage.getItem('sidebarPinned') === 'true',
    sidebarHover: false,
    sidebarMobileOpen: false,
    get sidebarExpanded() {
        return this.sidebarPinned || this.sidebarHover;
    }
}"
@keydown.window.escape="sidebarMobileOpen = false"
:class="sidebarMobileOpen ? 'overflow-hidden' : ''"
class="bg-gray-100 font-sans">
    <!-- Pre-loader - hidden after 2 seconds as fallback -->
    <div id="pre-loader" class="fixed inset-0 bg-white flex items-center justify-center z-[9999]">
        <img src="{{ asset('assests/images/logo-dark.png') }}" alt="Loading" class="w-32">
    </div>

    <!-- Mobile backdrop -->
    <template x-teleport="body">
        <div x-show="sidebarMobileOpen"
            class="fixed inset-0 z-30 bg-black/50 lg:hidden"
            @click="sidebarMobileOpen = false"
            x-transition.opener>
        </div>
    </template>

    <!-- Sidebar - Fixed -->
    @include('layouts.sidebar')

    <!-- Main Content Wrapper -->
    <div :class="sidebarExpanded ? 'lg:ms-64' : 'lg:ms-16'" class="ms-0 flex flex-col min-h-screen transition-all duration-300">
        <x-toasts />
        <x-alert />
        <!-- Header -->
        @include('layouts.header')
        <!-- Content Area -->
        <main class="flex-1 overflow-y-auto p-6 bg-gray-50">
            <h4 class="text-2xl font-bold text-gray-800">@yield('title')</h4>

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
