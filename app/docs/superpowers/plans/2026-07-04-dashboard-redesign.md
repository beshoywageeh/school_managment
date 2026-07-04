# Dashboard Redesign Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Modernize the school management dashboard — collapsible mini sidebar, role-aware homepage, polished stat cards, consistent components, and responsive mobile experience.

**Architecture:** Tailwind v4 CSS-first design tokens in `app.css` `@theme` + Alpine.js for all interactive state (sidebar collapse, nav search, widget loading, chart resize). No new JS build dependencies. Backend changes limited to one new API endpoint for dashboard widgets.

**Tech Stack:** Tailwind v4 (CSS `@theme`), Alpine.js v3, ApexCharts, Laravel 10, PHP 8.5

**Note on translations:** Tasks reference keys like `general.pin`, `general.unpin`, `general.recent_activity`, `general.no_recent_activity`, `general.student_created`, `general.payment_received`, `general.revenue`. Verify these exist in `lang/ar/general.php` and `lang/en/general.php` before final commit; add any missing keys.

## Global Constraints

- No dark mode — omit all `dark:` variants
- Keep RTL (`dir="rtl"`) throughout
- All UI strings through `trans()` — no hardcoded Arabic/English
- Use existing `<x-hero-icon>` for all icons
- No new npm/composer dependencies
- Permission-gate all nav items (existing `@can` / `hasAnyPermission` patterns)
- Follow existing code conventions exactly

---

### Task 1: Visual Foundation — CSS Variables, Theme, Stat Card, Button

**Files:**
- Modify: `resources/css/variables.css:1-3`
- Modify: `resources/css/app.css:1-17`
- Modify: `resources/views/components/stat_card.blade.php:1-18`
- Modify: `resources/views/components/button.blade.php` (read first)

**Interfaces:**
- Consumes: nothing
- Produces: CSS custom properties under `:root` and Tailwind `@theme` tokens consumed by all subsequent tasks

- [ ] **Step 1: Update `variables.css` with full palette**

```css
:root {
    --primary: #2563eb;
    --primary-dark: #1d4ed8;
    --surface: #ffffff;
    --muted: #f8fafc;
    --border: #e2e8f0;
    --text-primary: #0f172a;
    --text-secondary: #64748b;
    --success: #16a34a;
    --danger: #dc2626;
    --warning: #d97706;
    --info: #0284c7;
}
```

- [ ] **Step 2: Add Tailwind v4 `@theme` block to `app.css`**

Edit `app.css` to add after the existing imports:

```css
@import url("https://fonts.bunny.net/css?family=Nunito");

@import "./variables.css";

@import "tailwindcss";

@theme {
    --color-primary: #2563eb;
    --color-primary-dark: #1d4ed8;
    --color-surface: #ffffff;
    --color-muted: #f8fafc;
    --color-border: #e2e8f0;
    --color-text-primary: #0f172a;
    --color-text-secondary: #64748b;
    --color-success: #16a34a;
    --color-danger: #dc2626;
    --color-warning: #d97706;
    --color-info: #0284c7;
}

@keyframes shrink {
    from { width: 100%; }
    to { width: 0%; }
}
.animate-shrink {
    animation: shrink linear forwards;
}
```

- [ ] **Step 3: Refresh `stat_card.blade.php` — add `:trend`, `:sparkline-data`, `:icon-color` props, standardize card class**

Rewrite `resources/views/components/stat_card.blade.php`:

```blade
@props([
    'color' => 'blue',
    'trend' => null,
    'trendDirection' => 'up',
    'sparklineData' => null,
    'sparklineColor' => '#16a34a',
])

@php
    $colorMap = [
        'blue' => 'border-s-blue-500',
        'green' => 'border-s-green-500',
        'amber' => 'border-s-amber-500',
        'red' => 'border-s-red-500',
        'purple' => 'border-s-purple-500',
        'cyan' => 'border-s-cyan-500',
    ];
    $borderColor = $colorMap[$color] ?? 'border-s-blue-500';
@endphp

<div
    {{ $attributes->merge(['class' => "bg-white rounded-xl border border-gray-100 shadow-sm p-6 flex items-center gap-4 border-s-4 {$borderColor} w-full"]) }}>
    {{ $slot }}
    @if ($trend)
        <div class="flex flex-col items-end mr-auto">
            <span class="text-xs {{ $trendDirection === 'up' ? 'text-green-600' : 'text-red-600' }} font-medium">
                @if ($trendDirection === 'up')▲ @else ▼ @endif
                {{ $trend }}
            </span>
        </div>
    @endif
    @if ($sparklineData)
        <canvas class="w-16 h-8 ml-auto" data-sparkline="{{ json_encode($sparklineData) }}" data-color="{{ $sparklineColor }}"></canvas>
    @endif
</div>
```

- [ ] **Step 4: Read and refresh `button.blade.php` — ensure classes use the new palette**

Run: `cat resources/views/components/button.blade.php`

Update any hardcoded color classes to use `bg-primary`, `bg-primary-dark`, etc. if they exist, or keep existing color classes if they already look modern.

- [ ] **Step 5: Run Pint to fix formatting**

Run: `vendor/bin/pint --format agent`

- [ ] **Step 6: Commit**

```bash
git add resources/css/variables.css resources/css/app.css resources/views/components/stat_card.blade.php resources/views/components/button.blade.php
git commit -m "feat: add design token system and refresh stat-card component"
```

---

### Task 2: Collapsible Mini Sidebar — Full Rewrite

**Files:**
- Modify: `resources/views/layouts/sidebar.blade.php:1-387` (full rewrite)
- Test: visual verification in browser

**Interfaces:**
- Consumes: Alpine state `sidebarPinned`, `sidebarHover` (set on `<body>` in Task 3)
- Produces: sidebar with mini/collapsible states, nav search, section grouping

- [ ] **Step 1: Rewrite sidebar with new structure**

Replace entire `sidebar.blade.php` with the new design. Key structure:

```blade
<aside
    x-data="{ search: '' }"
    :class="sidebarExpanded ? 'w-64' : 'w-16'"
    class="fixed top-0 start-0 z-40 h-screen bg-gray-900 text-white overflow-hidden transition-all duration-300 flex flex-col"
    @mouseenter="if (!sidebarPinned) sidebarHover = true"
    @mouseleave="if (!sidebarPinned) sidebarHover = false"
    dir="rtl">
    <!-- Logo area -->
    <div class="shrink-0 flex items-center justify-center h-16 border-b border-gray-800">
        <template x-if="sidebarExpanded">
            <span class="text-lg font-bold">{{ $school->name }}</span>
        </template>
        <template x-if="!sidebarExpanded">
            <span class="text-lg font-bold">{{ substr($school->name, 0, 2) }}</span>
        </template>
    </div>

    <!-- Search input (visible when expanded) -->
    <div x-show="sidebarExpanded" class="px-3 pt-3" x-cloak>
        <input type="text" x-model="search" placeholder="بحث..."
            class="w-full bg-gray-800 text-white text-sm rounded-lg px-3 py-2 border border-gray-700 placeholder-gray-500 focus:outline-none focus:border-primary">
    </div>

    <!-- Navigation -->
    <nav class="flex-1 overflow-y-auto p-2 space-y-1 mt-2 sidebar-scroll">
        @php
            $navSections = [
                'dashboard' => [
                    'label' => '',
                    'items' => [
                        ['route' => 'dashboard', 'icon' => 'dashboard', 'perm' => null, 'labelKey' => 'Sidebar.Dashboard'],
                    ],
                ],
                'student_info' => [
                    'labelKey' => 'Sidebar.student_info',
                    'perm' => ['Students-list', 'parents-list', 'promotion-list', 'graduated_list'],
                    'items' => [
                        ['route' => 'parents.index', 'icon' => 'users', 'perm' => 'parents-list', 'labelKey' => 'Sidebar.parents'],
                        ['route' => 'students.index', 'icon' => 'graduation-cap', 'perm' => 'Students-list', 'labelKey' => 'Sidebar.Students'],
                        ['route' => 'promotion.index', 'icon' => 'level-up', 'perm' => 'promotion-list', 'labelKey' => 'Sidebar.promotion'],
                        ['route' => 'students.graduated', 'icon' => 'graduation-cap', 'perm' => 'graduated-list', 'labelKey' => 'Sidebar.graduated'],
                    ],
                ],
                'employee_info' => [
                    'labelKey' => 'Sidebar.employee_info',
                    'perm' => ['jobs-list', 'employees-list'],
                    'items' => [
                        ['route' => 'jobs.index', 'icon' => 'briefcase', 'perm' => 'jobs-list', 'labelKey' => 'Sidebar.jobs'],
                        ['route' => 'employees.index', 'icon' => 'id-card', 'perm' => 'employees-list', 'labelKey' => 'Sidebar.employees'],
                        ['route' => 'schedule.index', 'icon' => 'calendar-check', 'perm' => 'scheduale-list', 'labelKey' => 'schedules.schedules'],
                        ['route' => 'employees.return_list', 'icon' => 'user-times', 'perm' => 'employees-list', 'labelKey' => 'general.resign'],
                    ],
                ],
                'accounting' => [
                    'labelKey' => 'Sidebar.accounting',
                    'perm' => ['academic_year-list', 'schoolfees-list', 'fee_invoice-list', 'ReceiptPayment-list', 'except_fee-list', 'payment_parts-list', 'exchange_bonds-list'],
                    'items' => [
                        ['route' => 'academic_year.index', 'icon' => 'calendar', 'perm' => 'academic_year-list', 'labelKey' => 'academic_year.title'],
                        ['route' => 'school_fees.index', 'icon' => 'money', 'perm' => 'schoolfees-list', 'labelKey' => 'Sidebar.schoolfees'],
                        ['route' => 'fee_invoice.index', 'icon' => 'file-text', 'perm' => 'fee_invoice-list', 'labelKey' => 'Sidebar.fees_invoice'],
                        ['route' => 'receipt_payment.index', 'icon' => 'credit-card', 'perm' => 'ReceiptPayment-list', 'labelKey' => 'Sidebar.ReceiptPayment'],
                        ['route' => 'except_fee.index', 'icon' => 'minus-circle', 'perm' => 'except_fee-list', 'labelKey' => 'Sidebar.except_fee'],
                        ['route' => 'payment_parts.index', 'icon' => 'arrow-circle-down', 'perm' => 'payment_parts-list', 'labelKey' => 'Sidebar.payment_parts'],
                        ['route' => 'exchange-bonds.index', 'icon' => 'credit-card', 'perm' => 'exchange_bonds-list', 'labelKey' => 'Sidebar.exchange_bonds'],
                        ['route' => 'fund_account.index', 'icon' => 'university', 'perm' => null, 'labelKey' => 'Sidebar.FundAccount'],
                    ],
                ],
                'grades_setting' => [
                    'labelKey' => 'Sidebar.grades_setting',
                    'perm' => ['grade-list', 'class_rooms-list', 'classes-list'],
                    'items' => [
                        ['route' => 'grade.index', 'icon' => 'line-chart', 'perm' => 'grade-list', 'labelKey' => 'Sidebar.Grade'],
                        ['route' => 'class_rooms.index', 'icon' => 'building', 'perm' => 'class_rooms-list', 'labelKey' => 'Sidebar.Class_Rooms'],
                        ['route' => 'classes.index', 'icon' => 'list-alt', 'perm' => 'classes-list', 'labelKey' => 'Sidebar.classes'],
                    ],
                ],
                'stores' => [
                    'labelKey' => 'Sidebar.stores',
                    'perm' => ['stocks-index', 'orders-index', 'order_out-index', 'stocks-inventory_order-index', 'clothes-income_order', 'clothes-index', 'clothes-outcome_order', 'books_sheets-index', 'books_sheets-outcome_order', 'books_sheets-income_order', 'books_sheets-inventory_order', 'clothes-inventory_order'],
                    'items' => [
                        // sub-menu groups rendered inline below
                    ],
                ],
                'security' => [
                    'labelKey' => 'Sidebar.security',
                    'perm' => ['settings-info', 'role-list', 'back-list'],
                    'items' => [
                        ['route' => 'create-new-school', 'icon' => 'cog', 'perm' => 'settings-info', 'labelKey' => 'Sidebar.setting'],
                        ['route' => 'system-lookup', 'icon' => 'shield', 'perm' => null, 'labelKey' => 'Sidebar.look_up'],
                        ['route' => 'backup.index', 'icon' => 'database', 'perm' => 'backup-list', 'labelKey' => 'Sidebar.backup'],
                        ['route' => 'roles.index', 'icon' => 'lock', 'perm' => 'role-list', 'labelKey' => 'Sidebar.permission'],
                    ],
                ],
            ];
        @endphp

        @foreach ($navSections as $sectionKey => $section)
            @php
                $visible = true;
                if (isset($section['perm']) && is_array($section['perm'])) {
                    $visible = Auth::user()->hasAnyPermission($section['perm']);
                }
            @endphp
            @if ($visible)
                <!-- Section header -->
                <div x-show="sidebarExpanded" x-cloak>
                    @if (!empty($section['labelKey']))
                        <div class="pt-4 pb-1 px-3">
                            <span class="text-xs font-semibold text-gray-400 uppercase tracking-wider">{{ trans($section['labelKey']) }}</span>
                        </div>
                    @endif
                </div>
                @foreach ($section['items'] as $item)
                    @php
                        if (isset($item['perm']) && $item['perm'] && !Auth::user()->can($item['perm'])) continue;
                        $isActive = request()->is($item['route']) || request()->routeIs($item['route']);
                    @endphp
                    <a href="{{ route($item['route']) }}"
                        x-show="!search || '{{ trans($item['labelKey']) }}'.includes(search)"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition-all duration-200 {{ $isActive ? 'bg-primary/10 text-primary border-s-3 border-primary' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                        <x-hero-icon name="{{ $item['icon'] }}" class="w-5 h-5 shrink-0" />
                        <span x-show="sidebarExpanded" class="text-sm font-medium whitespace-nowrap" x-cloak>{{ trans($item['labelKey']) }}</span>
                    </a>
                @endforeach
            @endif
        @endforeach

        <!-- Stores section with sub-menus (keep existing collapsible logic adapted for mini sidebar) -->
        @if (Auth::user()->hasAnyPermission(['stocks-index', 'orders-index', 'order_out-index', 'stocks-inventory_order-index', 'clothes-income_order', 'clothes-index', 'clothes-outcome_order', 'books_sheets-index', 'books_sheets-outcome_order', 'books_sheets-income_order', 'books_sheets-inventory_order', 'clothes-inventory_order']))
            <div x-show="sidebarExpanded" x-cloak>
                <div class="pt-4 pb-1 px-3">
                    <span class="text-xs font-semibold text-gray-400 uppercase tracking-wider">{{ trans('Sidebar.stores') }}</span>
                </div>
            </div>
            <!-- Stocks sub-menu -->
            @if (Auth::user()->hasAnyPermission(['stocks-index', 'orders-index', 'order_out-index', 'stocks-inventory_order-index']))
                <div x-data="{ stocksOpen: {{ request()->is('*stocks*') || request()->is('*order*') ? 'true' : 'false' }} }">
                    <button @click="stocksOpen = !stocksOpen"
                        class="flex items-center gap-3 w-full px-3 py-2.5 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition-all duration-200">
                        <x-hero-icon name="archive" class="w-5 h-5 shrink-0" />
                        <span x-show="sidebarExpanded" class="text-sm font-medium flex-1 text-start" x-cloak>{{ trans('Sidebar.stocks') }}</span>
                        <svg x-show="sidebarExpanded" class="w-4 h-4 transition-transform duration-200" :class="{ 'rotate-180': stocksOpen }" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="stocksOpen" class="mt-1 mx-2 space-y-1 bg-gray-800 rounded-lg overflow-hidden" style="display: none;">
                        <a href="{{ route('inventory.items.index', ['type' => 'stock']) }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors">{{ trans('Sidebar.stocks_show') }}</a>
                        <a href="{{ route('inventory.orders.index', ['type' => 'purchases']) }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors">{{ trans('orders.income') }}</a>
                        <a href="{{ route('inventory.orders.index', ['type' => 'sales']) }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors">{{ trans('stock.outcome_order') }}</a>
                        <a href="{{ route('inventory.orders.index', ['type' => 'inventory']) }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors">{{ trans('stock.inventory_order') }}</a>
                    </div>
                </div>
            @endif
            <!-- Clothes sub-menu -->
            @if (Auth::user()->hasAnyPermission(['clothes-income_order', 'clothes-index', 'clothes-outcome_order', 'clothes-inventory_order']))
                <div x-data="{ clothesOpen: {{ request()->is('*clothes*') ? 'true' : 'false' }} }">
                    <button @click="clothesOpen = !clothesOpen"
                        class="flex items-center gap-3 w-full px-3 py-2.5 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition-all duration-200">
                        <x-hero-icon name="shirt" class="w-5 h-5 shrink-0" />
                        <span x-show="sidebarExpanded" class="text-sm font-medium flex-1 text-start" x-cloak>{{ trans('stock.clothes') }}</span>
                        <svg x-show="sidebarExpanded" class="w-4 h-4 transition-transform duration-200" :class="{ 'rotate-180': clothesOpen }" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="clothesOpen" class="mt-1 mx-2 space-y-1 bg-gray-800 rounded-lg overflow-hidden" style="display: none;">
                        <a href="{{ route('inventory.items.index', ['type' => 'clothe']) }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors">{{ trans('Sidebar.clothes_show') }}</a>
                        <a href="{{ route('inventory.orders.index', ['type' => 'purchases']) }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors">{{ trans('orders.income') }}</a>
                        <a href="{{ route('inventory.orders.index', ['type' => 'sales']) }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors">{{ trans('stock.outcome_order') }}</a>
                        <a href="{{ route('inventory.orders.index', ['type' => 'inventory']) }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors">{{ trans('stock.inventory_order') }}</a>
                    </div>
                </div>
            @endif
            <!-- Books sub-menu -->
            @if (Auth::user()->hasAnyPermission(['books_sheets-index', 'books_sheets-outcome_order', 'books_sheets-income_order', 'books_sheets-inventory_order']))
                <div x-data="{ booksOpen: {{ request()->is('*book*') ? 'true' : 'false' }} }">
                    <button @click="booksOpen = !booksOpen"
                        class="flex items-center gap-3 w-full px-3 py-2.5 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition-all duration-200">
                        <x-hero-icon name="book" class="w-5 h-5 shrink-0" />
                        <span x-show="sidebarExpanded" class="text-sm font-medium flex-1 text-start" x-cloak>{{ trans('Sidebar.books_sheets') }}</span>
                        <svg x-show="sidebarExpanded" class="w-4 h-4 transition-transform duration-200" :class="{ 'rotate-180': booksOpen }" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="booksOpen" class="mt-1 mx-2 space-y-1 bg-gray-800 rounded-lg overflow-hidden" style="display: none;">
                        <a href="{{ route('inventory.items.index', ['type' => 'book']) }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors">{{ trans('Sidebar.books_sheets_show') }}</a>
                        <a href="{{ route('inventory.orders.index', ['type' => 'purchases']) }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors">{{ trans('orders.income') }}</a>
                        <a href="{{ route('inventory.orders.index', ['type' => 'sales']) }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors">{{ trans('stock.outcome_order') }}</a>
                        <a href="{{ route('inventory.orders.index', ['type' => 'inventory']) }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors">{{ trans('stock.inventory_order') }}</a>
                    </div>
                </div>
            @endif
        @endif

        <!-- Report -->
        <div x-show="sidebarExpanded" x-cloak>
            <div class="pt-4 pb-1 px-3">
                <span class="text-xs font-semibold text-gray-400 uppercase tracking-wider">{{ trans('Sidebar.report') }}</span>
            </div>
        </div>
        <a href="{{ route('report.index') }}"
            class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition-all duration-200 {{ request()->is('*reports*') ? 'bg-primary/10 text-primary border-s-3 border-primary' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
            <x-hero-icon name="bar-chart" class="w-5 h-5 shrink-0" />
            <span x-show="sidebarExpanded" class="text-sm font-medium" x-cloak>{{ trans('Sidebar.report') }}</span>
        </a>

        <!-- Admin Era -->
        @if (\Auth::user()->isAdmin)
            <a href="{{ route('admin_era.index') }}"
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition-all duration-200 {{ request()->is('*admin-era*') ? 'bg-primary/10 text-primary border-s-3 border-primary' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                <x-hero-icon name="user-secret" class="w-5 h-5 shrink-0" />
                <span x-show="sidebarExpanded" class="text-sm font-medium" x-cloak>{{ trans('Sidebar.admin_era') }}</span>
            </a>
        @endif
    </nav>

    <!-- Pin button -->
    <div class="shrink-0 border-t border-gray-800 p-3">
        <button @click="sidebarPinned = !sidebarPinned; if(sidebarPinned) sidebarHover = false"
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
```

- [ ] **Step 2: Open browser and verify sidebar renders at `w-16` default, expands on hover, shows sub-menus, search filters items**

Run: (visual check — open dashboard page)

- [ ] **Step 3: Run Pint**

Run: `vendor/bin/pint --format agent`

- [ ] **Step 4: Commit**

```bash
git add resources/views/layouts/sidebar.blade.php
git commit -m "feat: rewrite sidebar as collapsible mini with search and pin"
```

---

### Task 3: Layout + Header — Wire Sidebar State, Responsive Overlay

**Files:**
- Modify: `resources/views/layouts/app.blade.php:18` — update `<body>` Alpine state
- Modify: `resources/views/layouts/app.blade.php:24` — update sidebar include
- Modify: `resources/views/layouts/app.blade.php:27` — update wrapper margin
- Modify: `resources/views/layouts/header.blade.php:2-8` — update hamburger for mobile overlay

**Interfaces:**
- Consumes: sidebar component (Task 2)
- Produces: `<body>` Alpine state with `sidebarPinned`, `sidebarHover`, `sidebarMobileOpen`; responsive margins

- [ ] **Step 1: Update `<body>` Alpine state in `app.blade.php`**

Change:
```blade
<body x-data="{ sidebarOpen: true }" class="bg-gray-100 font-sans">
```
To:
```blade
<body x-data="{ sidebarPinned: false, sidebarHover: false, sidebarMobileOpen: false }"
    x-init="sidebarPinned = localStorage.getItem('sidebarPinned') === 'true'"
    @keydown.window.escape="sidebarMobileOpen = false"
    :class="sidebarMobileOpen ? 'overflow-hidden' : ''"
    class="bg-gray-100 font-sans">
```

- [ ] **Step 2: Add computed `sidebarExpanded` via `<script>`** (Alpine doesn't support computed getters in `x-data` directly on `<body>`, use a `$watch` or inline).

Better approach — add a small inline script right after `<body>` to define the global reactive state:

```blade
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
```

- [ ] **Step 3: Keep sidebar include but add mobile overlay backdrop**

Replace current sidebar include with:
```blade
<!-- Mobile backdrop -->
<template x-teleport="body">
    <div x-show="sidebarMobileOpen"
        class="fixed inset-0 z-30 bg-black/50 lg:hidden"
        @click="sidebarMobileOpen = false"
        x-transition.opener>
    </div>
</template>

<!-- Sidebar -->
@include('layouts.sidebar')
```

- [ ] **Step 4: Update main wrapper margin**

Change:
```blade
<div class="ms-64 flex flex-col min-h-screen">
```
To:
```blade
<div :class="sidebarExpanded ? 'lg:ms-64' : 'lg:ms-16'" class="ms-0 flex flex-col min-h-screen transition-all duration-300">
```

- [ ] **Step 5: Update header hamburger in `header.blade.php`**

Change the hamburger button:
```blade
<button type="button" @click="sidebarMobileOpen = !sidebarMobileOpen"
    class="lg:hidden p-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-lg">
```
And add a second hamburger for desktop (to toggle sidebar pin):
```blade
<button type="button" @click="sidebarPinned = !sidebarPinned; localStorage.setItem('sidebarPinned', sidebarPinned)"
    class="hidden lg:flex p-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-lg">
    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
    </svg>
</button>
```

- [ ] **Step 6: Run Pint**

Run: `vendor/bin/pint --format agent`

- [ ] **Step 7: Commit**

```bash
git add resources/views/layouts/app.blade.php resources/views/layouts/header.blade.php
git commit -m "feat: wire sidebar state into layout, add mobile overlay and responsive margins"
```

---

### Task 4: Smart-Table Loading Skeleton

**Files:**
- Modify: `resources/views/components/smart-table.blade.php:143-150` — replace loading text with skeleton

- [ ] **Step 1: Replace the loading `<template>` in smart-table**

Change lines 143-150:
```blade
<template x-if="loading">
    <tr>
        <td :colspan="columns.length" class="text-center py-8 text-gray-500">
            {{ trans('general.loading') }}
        </td>
    </tr>
</template>
```
To:
```blade
<template x-if="loading">
    <tr>
        <td :colspan="columns.length" class="px-6 py-4">
            <div class="space-y-3">
                <template x-for="i in 5" :key="i">
                    <div class="flex gap-4 items-center">
                        <div class="h-8 bg-gray-200 rounded animate-pulse flex-1"></div>
                        <div class="h-8 bg-gray-200 rounded animate-pulse flex-1"></div>
                        <div class="h-8 bg-gray-200 rounded animate-pulse w-24"></div>
                    </div>
                </template>
            </div>
        </td>
    </tr>
</template>
```

- [ ] **Step 2: Commit**

```bash
git add resources/views/components/smart-table.blade.php
git commit -m "feat: add animated skeleton loading to smart-table"
```

---

### Task 5: CRUD Modal Component

**Files:**
- Create: `resources/views/components/crud-modal.blade.php`
- Modify: (optional) inventory views to use new component later

- [ ] **Step 1: Create the `<x-crud-modal>` component**

```blade
@props([
    'title' => '',
    'size' => 'lg',
    'submitLabel' => null,
])

@php
    $sizeMap = [
        'sm' => 'max-w-sm',
        'md' => 'max-w-md',
        'lg' => 'max-w-lg',
        'xl' => 'max-w-xl',
        '2xl' => 'max-w-2xl',
    ];
    $maxWidth = $sizeMap[$size] ?? 'max-w-lg';
@endphp

<div x-data="{ open: false }"
    x-on:open-crud-modal.window="if ($event.detail?.id === '{{ $attributes->get('modal-id') ?? '' }}') open = true"
    x-on:close-crud-modal.window="if ($event.detail?.id === '{{ $attributes->get('modal-id') ?? '' }}' || !$event.detail?.id) open = false"
    x-show="open"
    class="fixed inset-0 z-50 overflow-y-auto"
    style="display: none;">
    <div class="flex items-center justify-center min-h-screen px-4">
        <div class="fixed inset-0 bg-black/50" @click="open = false"></div>
        <div x-show="open" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="relative bg-white rounded-xl shadow-xl {{ $maxWidth }} w-full p-0 overflow-hidden">
            <!-- Header -->
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-bold text-gray-900">{{ $title }}</h3>
                <button @click="open = false" class="text-gray-400 hover:text-gray-600 transition-colors">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <!-- Body -->
            <div class="px-6 py-4">
                {{ $slot }}
            </div>
            <!-- Footer -->
            @if ($submitLabel || isset($footer))
                <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-200 bg-gray-50">
                    @if (isset($footer))
                        {{ $footer }}
                    @else
                        <button type="button" @click="open = false"
                            class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                            {{ trans('general.cancel') }}
                        </button>
                        <button type="submit"
                            class="px-4 py-2 text-sm font-medium text-white bg-primary rounded-lg hover:bg-primary-dark transition-colors">
                            {{ $submitLabel ?? trans('general.save') }}
                        </button>
                    @endif
                </div>
            @endif
        </div>
    </div>
</div>
```

- [ ] **Step 2: Commit**

```bash
git add resources/views/components/crud-modal.blade.php
git commit -m "feat: add reusable crud-modal component"
```

---

### Task 6: Dashboard Stat Card Sparkline — Native JS

**Files:**
- Modify: `resources/views/components/stat_card.blade.php` — add sparkline script
- Modify: `resources/views/dashboard.blade.php` — update stat card usage with trend data

**Interfaces:**
- Consumes: stat card component (Task 1)
- Produces: stat cards with sparkline canvases rendered on page load

- [ ] **Step 1: Add sparkline initialization script to `stat_card.blade.php`**

Add after the card markup:
```blade
@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('canvas[data-sparkline]').forEach(function (canvas) {
            var data = JSON.parse(canvas.dataset.sparkline);
            var color = canvas.dataset.color || '#16a34a';
            var ctx = canvas.getContext('2d');
            var w = canvas.width, h = canvas.height;
            var max = Math.max(...data, 1);
            var min = Math.min(...data);
            var range = max - min || 1;
            var padding = 2;
            ctx.clearRect(0, 0, w, h);
            ctx.beginPath();
            ctx.strokeStyle = color;
            ctx.lineWidth = 1.5;
            ctx.lineJoin = 'round';
            data.forEach(function (val, i) {
                var x = padding + (i / (data.length - 1)) * (w - padding * 2);
                var y = h - padding - ((val - min) / range) * (h - padding * 2);
                i === 0 ? ctx.moveTo(x, y) : ctx.lineTo(x, y);
            });
            ctx.stroke();
        });
    });
</script>
@endpush
```

- [ ] **Step 2: Commit**

```bash
git add resources/views/components/stat_card.blade.php
git commit -m "feat: add sparkline canvas rendering to stat-card"
```

---

### Task 7: Dashboard Homepage — Role-Aware Widget API

**Files:**
- Modify: `app/Http/Controllers/HomeController.php` — add `widgets` API method
- Create: `app/Http/Controllers/Api/DashboardController.php` (or add route directly)
- Modify: `routes/web.php` — add dashboard widget route

**Interfaces:**
- Consumes: existing HomeController logic
- Produces: `GET /api/dashboard/widgets` JSON endpoint returning role-aware data

- [ ] **Step 1: Add widget API method to HomeController**

```php
public function widgets()
{
    $user = Auth::user();
    $school = $this->getSchool();
    $schoolId = $school->id;
    $isAdmin = $user->hasRole('Admin');

    [$students, $parents] = $this->getUserRoleCounts($user->id, $schoolId, $isAdmin);
    $employees = DB::table('users')
        ->where('school_id', $schoolId)
        ->where('code', '!=', '000001')
        ->count();
    $financialData = $this->getFinancialData($schoolId);
    $grades = Grade::where('school_id', $school->id)
        ->with(['class_rooms' => function ($q) { $q->withCount('students'); }])
        ->where('school_id', $schoolId)
        ->get();
    $chartData = $this->generateChartData($grades);
    $revenueTrend = $this->getMonthlyRevenueTrend($schoolId);

    // Recent activity (last 5)
    $recentActivity = collect();
    // Example: merge from multiple tables
    $recentStudents = Student::where('school_id', $schoolId)
        ->latest()->take(2)->get()->map(fn ($s) => [
            'icon' => 'graduation-cap',
            'description' => __('general.student_created') . ': ' . $s->name,
            'time' => $s->created_at->diffForHumans(),
        ]);
    $recentPayments = ReceiptPayment::where('school_id', $schoolId)
        ->latest()->take(2)->get()->map(fn ($p) => [
            'icon' => 'credit-card',
            'description' => __('general.payment_received') . ': ' . number_format($p->Debit, 2),
            'time' => $p->created_at->diffForHumans(),
        ]);
    $recentActivity = $recentStudents->concat($recentPayments)->sortByDesc('time')->take(5)->values();

    return response()->json([
        'statCards' => [
            ['label' => __('Sidebar.Students'), 'value' => $students, 'icon' => 'graduation-cap', 'color' => 'blue', 'trend' => '+5%', 'trendDirection' => 'up', 'sparklineData' => [10, 15, 12, 18, 22, 25]],
            ['label' => __('Sidebar.parents'), 'value' => $parents, 'icon' => 'users', 'color' => 'green', 'trend' => '+2%', 'trendDirection' => 'up', 'sparklineData' => [8, 12, 10, 15, 18, 20]],
            ['label' => __('Sidebar.employees'), 'value' => $employees, 'icon' => 'id-card', 'color' => 'cyan', 'trend' => null, 'sparklineData' => null],
            ['label' => __('Sidebar.pending_balance'), 'value' => number_format($financialData['totalInvoiced'] - $financialData['totalPaid'], 2), 'icon' => 'exclamation-circle', 'color' => 'red', 'trend' => null, 'sparklineData' => null],
        ],
        'quickActions' => [
            ['route' => 'students.index', 'icon' => 'graduation-cap', 'label' => __('Sidebar.Students'), 'perm' => 'Students-create'],
            ['route' => 'parents.create', 'icon' => 'users', 'label' => __('Sidebar.parents'), 'perm' => 'parents-create'],
            ['route' => 'grade.index', 'icon' => 'line-chart', 'label' => __('Sidebar.Grade'), 'perm' => 'grade-list'],
            ['route' => 'class_rooms.index', 'icon' => 'building', 'label' => __('Sidebar.Class_Rooms'), 'perm' => 'class_rooms-list'],
            ['route' => 'jobs.create', 'icon' => 'briefcase', 'label' => __('Sidebar.jobs'), 'perm' => 'jobs-create'],
            ['route' => 'backup.create', 'icon' => 'database', 'label' => __('general.buttons.create') . ' ' . __('backup.title'), 'perm' => 'backup-create'],
        ],
        'charts' => [
            'studentChart' => [
                'labels' => $chartData['chart_labels'],
                'data' => $chartData['chart_data'],
            ],
            'revenueTrend' => [
                'labels' => $revenueTrend['revenue_trend_labels'],
                'data' => $revenueTrend['revenue_trend_data'],
            ],
        ],
        'recentActivity' => $recentActivity,
        'permissions' => [
            'canViewStudents' => $user->can('Students-list'),
            'canViewParents' => $user->can('parents-list'),
            'canViewEmployees' => $user->can('employees-list'),
            'canViewFinancials' => $user->hasAnyPermission(['schoolfees-list', 'fee_invoice-list', 'ReceiptPayment-list']),
        ],
    ]);
}
```

- [ ] **Step 2: Add the route in `routes/web.php`**

```php
use App\Http\Controllers\HomeController;

Route::get('/api/dashboard/widgets', [HomeController::class, 'widgets'])->middleware(['auth'])->name('dashboard.widgets');
```

- [ ] **Step 3: Commit**

```bash
git add app/Http/Controllers/HomeController.php routes/web.php
git commit -m "feat: add role-aware dashboard widgets API endpoint"
```

---

### Task 8: Dashboard Homepage — Rewrite with Alpine-Fetched Widgets

**Files:**
- Modify: `resources/views/dashboard.blade.php:1-231` — full rewrite

**Interfaces:**
- Consumes: widget API (Task 7), sparkline canvas (Task 6)
- Produces: fully reactive dashboard homepage

- [ ] **Step 1: Rewrite `dashboard.blade.php`**

```blade
@extends('layouts.app')

@section('title')
    {{ trans('Sidebar.Dashboard') }}
@endsection

@section('content')
<div x-data="dashboardWidgets()" x-init="init()" class="space-y-6">
    <!-- Loading state -->
    <template x-if="loading">
        <div class="space-y-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <template x-for="i in 4" :key="i">
                    <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6">
                        <div class="h-20 bg-gray-200 rounded animate-pulse"></div>
                    </div>
                </template>
            </div>
        </div>
    </template>

    <!-- Error state -->
    <template x-if="error">
        <div class="bg-red-50 border border-red-200 rounded-xl p-6 text-red-700 text-center">
            <p x-text="error"></p>
        </div>
    </template>

    <!-- Content -->
    <template x-if="!loading && !error">
        <div class="space-y-6">
            <!-- Stat Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <template x-for="(card, idx) in data.statCards" :key="idx">
                    <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6 flex items-center gap-4 border-s-4"
                        :class="'border-s-' + card.color + '-500'">
                        <div class="w-14 h-14 rounded-xl flex items-center justify-center text-white shrink-0"
                            :class="'bg-' + card.color + '-500'">
                            <x-hero-icon name="graduation-cap" class="w-8 h-8" />
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-2xl font-bold text-gray-900" x-text="card.value"></p>
                            <p class="text-sm text-gray-500 truncate" x-text="card.label"></p>
                        </div>
                        <template x-if="card.trend">
                            <div class="flex flex-col items-end">
                                <span class="text-xs font-medium"
                                    :class="card.trendDirection === 'up' ? 'text-green-600' : 'text-red-600'"
                                    x-text="(card.trendDirection === 'up' ? '▲ ' : '▼ ') + card.trend">
                                </span>
                            </div>
                        </template>
                        <template x-if="card.sparklineData">
                            <canvas class="w-16 h-8" :data-sparkline="JSON.stringify(card.sparklineData)" data-color="#16a34a"></canvas>
                        </template>
                    </div>
                </template>
            </div>

            <!-- Quick Actions -->
            <div class="flex flex-wrap gap-4">
                <template x-for="(action, idx) in data.quickActions" :key="idx">
                    <template x-if="!action.perm || (permissions[action.perm] !== false)">
                        <a :href="'{{ url('') }}/' + action.route"
                            class="flex items-center gap-3 px-5 py-4 bg-white rounded-xl border border-gray-100 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all duration-200 no-underline text-gray-700 hover:text-gray-900">
                            <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center">
                                <x-hero-icon name="plus" class="w-5 h-5 text-primary" />
                            </div>
                            <span class="text-sm font-medium" x-text="action.label"></span>
                        </a>
                    </template>
                </template>
            </div>

            <!-- Charts -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6">
                    <h5 class="text-lg font-semibold text-gray-800 mb-4 text-center">{{ trans('report.student_numbers') }}</h5>
                    <div id="student_chart" x-init="renderStudentChart()"></div>
                </div>
                <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6">
                    <h5 class="text-lg font-semibold text-gray-800 mb-4 text-center">{{ trans('Sidebar.accounting') }}</h5>
                    <div id="revenue_chart" x-init="renderRevenueChart()"></div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6">
                <h5 class="text-lg font-semibold text-gray-800 mb-4">{{ trans('general.recent_activity') }}</h5>
                <div class="space-y-3">
                    <template x-for="(activity, idx) in data.recentActivity" :key="idx">
                        <div class="flex items-center gap-3 py-2 border-b border-gray-50 last:border-0">
                            <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center">
                                <x-hero-icon name="clock" class="w-4 h-4 text-gray-500" />
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm text-gray-700 truncate" x-text="activity.description"></p>
                                <p class="text-xs text-gray-400" x-text="activity.time"></p>
                            </div>
                        </div>
                    </template>
                    <template x-if="data.recentActivity.length === 0">
                        <p class="text-sm text-gray-400 text-center py-4">{{ trans('general.no_recent_activity') }}</p>
                    </template>
                </div>
            </div>
        </div>
    </template>
</div>
@endsection

@push('scripts')
<script>
    function dashboardWidgets() {
        return {
            loading: true,
            error: null,
            data: {
                statCards: [],
                quickActions: [],
                charts: {},
                recentActivity: [],
            },
            permissions: {},
            studentChart: null,
            revenueChart: null,

            init() {
                this.fetchWidgets();
            },

            fetchWidgets() {
                this.loading = true;
                this.error = null;

                axios.get('{{ route("dashboard.widgets") }}')
                    .then(response => {
                        this.data = response.data;
                        this.permissions = response.data.permissions || {};
                    })
                    .catch(err => {
                        this.error = '{{ trans("general.error_fetching") }}';
                        console.error('Dashboard widgets error:', err);
                    })
                    .finally(() => {
                        this.loading = false;
                    });
            },

            renderStudentChart() {
                this.$nextTick(() => {
                    if (!this.data.charts?.studentChart) return;
                    const el = document.getElementById('student_chart');
                    if (!el) return;
                    const options = {
                        chart: { type: 'line', height: 300 },
                        series: [{ name: '{{ trans("report.student_numbers") }}', data: this.data.charts.studentChart.data }],
                        colors: ['#2563eb'],
                        xaxis: { categories: this.data.charts.studentChart.labels },
                    };
                    this.studentChart = new ApexCharts(el, options);
                    this.studentChart.render();
                });
            },

            renderRevenueChart() {
                this.$nextTick(() => {
                    if (!this.data.charts?.revenueTrend) return;
                    const el = document.getElementById('revenue_chart');
                    if (!el) return;
                    const options = {
                        chart: { type: 'bar', height: 300 },
                        series: [{ name: '{{ trans("general.revenue") }}', data: this.data.charts.revenueTrend.data }],
                        colors: ['#16a34a'],
                        xaxis: { categories: this.data.charts.revenueTrend.labels },
                    };
                    this.revenueChart = new ApexCharts(el, options);
                    this.revenueChart.render();
                });
            },
        };
    }
</script>
@endpush
```

- [ ] **Step 2: Add missing translation keys to `lang/ar/general.php` and `lang/en/general.php`**

Check if keys like `recent_activity`, `no_recent_activity`, `student_created`, `payment_received`, `pin`, `unpin`, `revenue` exist. Add them if missing.

- [ ] **Step 3: Run Pint**

Run: `vendor/bin/pint --format agent`

- [ ] **Step 4: Commit**

```bash
git add resources/views/dashboard.blade.php
git commit -m "feat: rewrite dashboard homepage with Alpine-fetched role-aware widgets"
```

---

### Task 9: Component Consistency Audit — Forms, Dropdowns, Tables

**Files:**
- Read: all index views in `resources/views/backend/` (identify raw inputs, inline action buttons)
- Modify: individual views to use `<x-input>`, `<x-dropdown-table>`

- [ ] **Step 1: Find all raw form inputs**

Run: `grep -rn "<input\|<select\|<textarea" resources/views/backend/ --include="*.blade.php" | grep -v "x-input\|x-select\|component" | head -30`

- [ ] **Step 2: Replace raw inputs with `<x-input>` in each file found**

For each match, replace:
```blade
<input type="text" ...>
```
With:
```blade
<x-input type="text" ... />
```

- [ ] **Step 3: Find all inline action buttons**

Run: `grep -rn "class=.*rounded.*px.*py.*bg-" resources/views/backend/ --include="*.blade.php" | grep -i "edit\|delete\|show" | head -20`

- [ ] **Step 4: Replace inline action groups with `<x-dropdown-table>`**

For each match, replace inline buttons with the dropdown component while preserving permission checks.

- [ ] **Step 5: Commit**

```bash
git add resources/views/backend/
git commit -m "fix: standardize form inputs and action dropdowns across backend views"
```

---

### Task 10: Final Polish — Mobile Responsiveness & Cross-View Audit

**Files:**
- Modify: various view files for responsive adjustments

- [ ] **Step 1: Check mobile responsiveness of sidebar overlay**

Verify: `< lg` breakpoint shows hamburger, sidebar slides as off-canvas overlay, backdrop dims content, close on backdrop click or escape key.

- [ ] **Step 2: Ensure tables have horizontal scroll on mobile**

For every table, ensure it's wrapped in:
```blade
<div class="overflow-x-auto">
    <table>...</table>
</div>
```

- [ ] **Step 3: Ensure modals go full-screen on mobile**

Check `<x-modal>` and `<x-crud-modal>` for responsive classes. Add if missing:
```blade
class="... lg:max-w-lg w-full max-w-full m-0 h-full lg:h-auto lg:m-6 rounded-none lg:rounded-xl"
```

- [ ] **Step 4: Visual check — open all major pages**

Verify: sidebar behavior on desktop (mini, hover, pin), sidebar behavior on mobile (overlay), stat cards render with sparklines, charts load, quick actions style matches.

- [ ] **Step 5: Run full test suite**

Run: `php artisan test --compact`

- [ ] **Step 6: Commit**

```bash
git add .
git commit -m "feat: final polish — mobile responsiveness, modal fullscreen, cross-view audit"
```
