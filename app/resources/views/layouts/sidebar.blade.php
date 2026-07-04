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
