<header class="bg-white border-b border-gray-200 h-16 flex items-center justify-between px-6 shrink-0"
    style="border-color: var(--module-primary);">
    <div class="flex items-center gap-4">
        <button type="button" @click="sidebarMobileOpen = !sidebarMobileOpen"
            class="lg:hidden p-3 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-lg"
            :aria-label="sidebarMobileOpen ? 'إغلاق القائمة' : 'فتح القائمة'" aria-expanded="false"
            :aria-expanded="sidebarMobileOpen.toString()">
            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <button type="button"
            @click="sidebarPinned = !sidebarPinned; localStorage.setItem('sidebarPinned', sidebarPinned)"
            class="hidden lg:flex p-3 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-lg">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <a href="https://www.facebook.com/LoopLabsDev" class="flex items-center gap-2">
            <img src="{{ asset('assests/images/logo-icon-dark.png') }}" alt="Logo" class="w-8 h-8">
            <span class="font-bold text-gray-700">{{ trans('general.loop_labs') }}</span>
        </a>
    </div>

    <div class="flex items-center gap-3">
        @auth
            <span class="px-3 py-1.5 bg-warning/20 text-warning rounded-lg text-sm font-medium">
                {{ Auth::user()->name }}
            </span>
        @endauth
        <span class="px-3 py-1.5 bg-primary/10 text-primary rounded-lg text-sm whitespace-nowrap"
            id="datetime">{{ now()->format('Y-m-d H:i') }}</span>

        <button type="button" id="btnFullscreen"
            class="p-3 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-lg"
            title="{{ trans('general.fullscreen') }}">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
            </svg>
        </button>

        <a href="{{ route('profile.edit') }}" class="p-3 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-lg"
            title="{{ trans('general.settings') }}">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
        </a>

        <form method="POST" action="{{ route('logout') }}" class="flex items-center gap-2">
            @csrf
            <button type="submit"
                class="px-4 py-3 bg-danger hover:bg-danger/90 text-white rounded-lg flex items-center gap-2 transition-colors"
                title="{{ trans('auth.logout') }}">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
            </button>
        </form>
    </div>
</header>

<script>
    document.getElementById('btnFullscreen')?.addEventListener('click', function() {
        if (!document.fullscreenElement) {
            document.documentElement.requestFullscreen();
        } else {
            document.exitFullscreen();
        }
    });
</script>
