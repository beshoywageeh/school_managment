<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') — {{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('head')
</head>

<body class="antialiased">
    <div
        class="min-h-screen flex items-center justify-center bg-gradient-to-br from-indigo-50 via-white to-purple-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 p-4">

        <div class="w-full max-w-lg">
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 md:p-10 text-center">

                <div
                    class="mx-auto w-16 h-16 flex items-center justify-center rounded-full bg-indigo-100 dark:bg-indigo-900/50 mb-6">
                    <x-hero-icon name="@yield('icon', 'information-circle')" class="w-8 h-8 text-indigo-600 dark:text-indigo-400" />
                </div>

                <div class="text-7xl font-bold text-indigo-600 dark:text-indigo-400 mb-4 font-mono"
                    x-data="{ count: 0 }" x-init="() => {
                        let target = @yield('code');
                        if (target <= 0) return;
                        let step = Math.max(1, Math.floor(target / 40));
                        let i = setInterval(() => {
                            count = Math.min(count + step, target);
                            if (count >= target) clearInterval(i);
                        }, 30);
                    }">
                    <span x-text="count">@yield('code')</span>
                </div>

                <h1 class="text-2xl font-semibold text-gray-900 dark:text-white mb-3">
                    @yield('message')
                </h1>

                <p class="text-gray-500 dark:text-gray-400 mb-8 leading-relaxed">
                    @yield('description')
                </p>

                <div class="flex flex-wrap items-center justify-center gap-3">
                    @yield('action')
                </div>

            </div>

            <p class="text-center text-sm text-gray-400 dark:text-gray-500 mt-6">
                &copy; {{ date('Y') }} {{ config('app.name') }}
            </p>
        </div>
    </div>
</body>

</html>
