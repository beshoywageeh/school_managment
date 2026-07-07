<aside
    x-data="{
        search: '',
        sidebarPinned: localStorage.getItem('sidebarPinned') === 'true',
        sidebarHover: false,
        sidebarMobileOpen: false,
        get sidebarExpanded() {
            return this.sidebarPinned || this.sidebarHover;
        }
    }"
    :class="[
        sidebarExpanded ? 'w-64' : 'w-16',
        sidebarMobileOpen ? 'translate-x-0' : '',
    ]"
    class="fixed top-0 start-0 z-40 h-screen bg-gray-900 text-white overflow-hidden transition-all duration-300 flex flex-col translate-x-full lg:translate-x-0"
    @mouseenter="if (!sidebarPinned) sidebarHover = true"
    @mouseleave="if (!sidebarPinned) sidebarHover = false"
    role="navigation"
    aria-label="{{ trans('Sidebar.main_navigation') ?? 'القائمة الرئيسية' }}"
    dir="rtl">
    <!-- Logo area -->
    <div class="shrink-0 flex items-center justify-center h-16 border-b border-gray-800">
        <template x-if="sidebarExpanded">
            <span class="text-lg font-bold">{{ $school?->name ?? config('app.name') }}</span>
        </template>
        <template x-if="!sidebarExpanded">
            <span class="text-lg font-bold">{{ $school ? substr($school->name, 0, 2) : substr(config('app.name'), 0, 2) }}</span>
        </template>
    </div>

    <!-- Search input -->
    <div x-show="sidebarExpanded" class="px-3 pt-3" x-cloak>
        <input type="text" x-model="search" placeholder="بحث..."
            class="w-full bg-gray-800 text-white text-sm rounded-lg px-3 py-2 border border-gray-700 placeholder-gray-500 focus:outline-none focus:border-primary">
    </div>

    <!-- Navigation -->
    <nav class="flex-1 overflow-y-auto p-2 space-y-1 mt-2 sidebar-scroll">
        @foreach ($navGroups as $sectionKey => $section)
            <!-- Section header -->
            <div x-show="sidebarExpanded" x-cloak>
                @if (!empty($section['labelKey']))
                    <div class="pt-4 pb-1 px-3">
                        <span class="text-xs font-semibold text-gray-400 uppercase tracking-wider">{{ trans($section['labelKey']) }}</span>
                    </div>
                @endif
            </div>

            @if (!empty($section['subgroups']))
                <!-- Store submenu groups -->
                @foreach ($section['subgroups'] as $subKey => $subgroup)
                    @php
                        $subgroupActive = $this->isActiveSubgroup($subKey);
                    @endphp
                    <div x-data="{ open: {{ $subgroupActive ? 'true' : 'false' }} }"
                        x-show="!search || '{{ trans($subgroup['labelKey']) }}'.includes(search)">
                        <button @click="open = !open"
                            title="{{ trans($subgroup['labelKey']) }}"
                            class="flex items-center gap-3 w-full px-3 py-2.5 rounded-lg transition-all duration-200 {{ $subgroupActive ? 'bg-primary/10 text-primary border-s-3 border-primary' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                            <x-hero-icon name="{{ $subgroup['icon'] }}" class="w-5 h-5 shrink-0" />
                            <span x-show="sidebarExpanded" class="text-sm font-medium flex-1 text-start" x-cloak>{{ trans($subgroup['labelKey']) }}</span>
                            <svg x-show="sidebarExpanded" class="w-4 h-4 transition-transform duration-200" :class="{ 'rotate-180': open }" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="open" class="mt-1 mx-2 space-y-1 bg-gray-800 rounded-lg overflow-hidden" style="display: none;">
                            @foreach ($subgroup['items'] as $item)
                                @php
                                    $itemActive = $this->isActiveRoute($item['route'], $item['params'] ?? null);
                                @endphp
                                <a href="{{ route($item['route'], $item['params'] ?? []) }}"
                                    title="{{ trans($item['labelKey']) }}"
                                    class="block px-4 py-2 text-sm transition-colors {{ $itemActive ? 'bg-primary/10 text-primary' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}"
                                    @if ($itemActive) aria-current="page" @endif
                                    @keydown.arrow-down.prevent="$focus.next()"
                                    @keydown.arrow-up.prevent="$focus.prev()">
                                    {{ trans($item['labelKey']) }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            @else
                <!-- Regular items -->
                @foreach ($section['items'] as $item)
                    @php
                        $itemActive = $this->isActiveRoute($item['route'], $item['params'] ?? null);
                    @endphp
                    <a href="{{ route($item['route'], $item['params'] ?? []) }}"
                        title="{{ trans($item['labelKey']) }}"
                        x-show="!search || '{{ trans($item['labelKey']) }}'.includes(search)"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition-all duration-200 {{ $itemActive ? 'bg-primary/10 text-primary border-s-3 border-primary' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}"
                        @if ($itemActive) aria-current="page" @endif
                        @keydown.arrow-down.prevent="$focus.next()"
                        @keydown.arrow-up.prevent="$focus.prev()">
                        <x-hero-icon name="{{ $item['icon'] }}" class="w-5 h-5 shrink-0" />
                        <span x-show="sidebarExpanded" class="text-sm font-medium whitespace-nowrap" x-cloak>{{ trans($item['labelKey']) }}</span>
                    </a>
                @endforeach
            @endif
        @endforeach
    </nav>

    <!-- Pin button -->
    <div class="shrink-0 border-t border-gray-800 p-3">
        <button @click="sidebarPinned = !sidebarPinned; if(sidebarPinned) sidebarHover = false; localStorage.setItem('sidebarPinned', sidebarPinned)"
            class="flex items-center gap-3 w-full px-3 py-2 text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg transition-all duration-200 text-sm">
            <svg class="w-5 h-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
            </svg>
            <span x-show="sidebarExpanded" x-text="sidebarPinned ? '{{ trans('general.unpin') }}' : '{{ trans('general.pin') }}'" x-cloak></span>
        </button>
    </div>
</aside>

<style>
    .sidebar-scroll::-webkit-scrollbar { width: 4px; }
    .sidebar-scroll::-webkit-scrollbar-track { background: #1f2937; }
    .sidebar-scroll::-webkit-scrollbar-thumb { background: #4b5563; border-radius: 2px; }
</style>
