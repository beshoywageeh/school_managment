<aside x-show="sidebarOpen" x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
    x-transition:leave="transition ease-in duration-200" x-transition:leave-start="translate-x-0"
    x-transition:leave-end="-translate-x-full"
    class="w-64 bg-gray-900 text-white shrink-0 h-screen overflow-y-auto overflow-x-hidden fixed top-0 start-0 z-40"
    dir="rtl">
    <div class="h-full flex flex-col">
        <!-- Logo -->
        <div class="p-4 border-b border-gray-700 shrink-0">
            <div class="text-center">
                <span class="text-lg font-bold">{{ $school->name }}</span>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="flex-1 overflow-y-auto p-2 space-y-1" style="overflow-y: auto !important;">
            <!-- Dashboard -->
            <a href="{{ route('dashboard') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 {{ request()->is('/') ? 'bg-blue-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                <x-hero-icon name="dashboard" class="w-5 h-5" />
                <span class="text-sm font-medium">{{ trans('Sidebar.Dashboard') }}</span>
            </a>

            <!-- Student Section -->
            @if (Auth::user()->hasAnyPermission(['Students-list', 'parents-list', 'promotion-list', 'graduated_list']))
                <div class="pt-4 pb-2">
                    <span class="px-4 text-sm font-medium text-gray-400">{{ trans('Sidebar.student_info') }}</span>
                </div>
                @can('parents-list')
                    <a href="{{ route('parents.index') }}"
                        class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 {{ request()->is('*/parents*') ? 'bg-blue-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                        <x-hero-icon name="users" class="w-5 h-5" />
                        <span class="text-sm font-medium">{{ trans('Sidebar.parents') }}</span>
                    </a>
                @endcan
                @can('Students-list')
                    <a href="{{ route('students.index') }}"
                        class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 {{ request()->is('*/students*') && !request()->is('*/students/graduated*') ? 'bg-blue-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                        <x-hero-icon name="graduation-cap" class="w-5 h-5" />
                        <span class="text-sm font-medium">{{ trans('Sidebar.Students') }}</span>
                    </a>
                @endcan
                @can('promotion-list')
                    <a href="{{ route('promotion.index') }}"
                        class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 {{ request()->is('*/promotion*') ? 'bg-blue-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                        <x-hero-icon name="level-up" class="w-5 h-5" />
                        <span class="text-sm font-medium">{{ trans('Sidebar.promotion') }}</span>
                    </a>
                @endcan
                @can('graduated-list')
                    <a href="{{ route('students.graduated') }}"
                        class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 {{ request()->is('*/students/graduated*') ? 'bg-blue-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                        <x-hero-icon name="graduation-cap" class="w-5 h-5" />
                        <span class="text-sm font-medium">{{ trans('Sidebar.graduated') }}</span>
                    </a>
                @endcan
            @endif

            <!-- Employee Section -->
            @if (Auth::user()->hasAnyPermission(['jobs-list', 'employees-list']))
                <div class="pt-4 pb-2">
                    <span class="px-4 text-sm font-medium text-gray-400">{{ trans('Sidebar.employee_info') }}</span>
                </div>
                @can('jobs-list')
                    <a href="{{ route('jobs.index') }}"
                        class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 {{ request()->is('*/jobs*') ? 'bg-blue-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                        <x-hero-icon name="briefcase" class="w-5 h-5" />
                        <span class="text-sm font-medium">{{ trans('Sidebar.jobs') }}</span>
                    </a>
                @endcan
                @can('employees-list')
                    <a href="{{ route('employees.index') }}"
                        class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 {{ request()->is('*/employees*') ? 'bg-blue-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                        <x-hero-icon name="id-card" class="w-5 h-5" />
                        <span class="text-sm font-medium">{{ trans('Sidebar.employees') }}</span>
                    </a>
                @endcan
                @can('scheduale-list')
                    <a href="{{ route('schedule.index') }}"
                        class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 {{ request()->is('*/schedule*') ? 'bg-blue-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                        <x-hero-icon name="calendar-check" class="w-5 h-5" />
                        <span class="text-sm font-medium">{{ trans('schedules.schedules') }}</span>
                    </a>
                @endcan
                @can('employees-list')
                    <a href="{{ route('employees.return_list') }}"
                        class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 {{ request()->is('*/employees/return_list*') ? 'bg-blue-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                        <x-hero-icon name="user-times" class="w-5 h-5" />
                        <span class="text-sm font-medium">{{ trans('general.resign') }}</span>
                    </a>
                @endcan
            @endif

            <!-- Accounting Section -->
            @if (Auth::user()->hasAnyPermission([
                    'academic_year-list',
                    'schoolfees-list',
                    'fee_invoice-list',
                    'Recipt_Payment-list',
                    'except_fee-list',
                    'payment_parts-list',
                    'exchange_bonds-list',
                ]))
                <div class="pt-4 pb-2">
                    <span class="px-4 text-sm font-medium text-gray-400">{{ trans('Sidebar.accounting') }}</span>
                </div>
                @can('academic_year-list')
                    <a href="{{ route('academic_year.index') }}"
                        class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 {{ request()->is('*/academic-year*') ? 'bg-blue-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                        <x-hero-icon name="calendar" class="w-5 h-5" />
                        <span class="text-sm font-medium">{{ trans('academic_year.title') }}</span>
                    </a>
                @endcan
                @can('schoolfees-list')
                    <a href="{{ route('school_fees.index') }}"
                        class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 {{ request()->is('*/school-fees*') ? 'bg-blue-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                        <x-hero-icon name="money" class="w-5 h-5" />
                        <span class="text-sm font-medium">{{ trans('Sidebar.schoolfees') }}</span>
                    </a>
                @endcan
                @can('fee_invoice-list')
                    <a href="{{ route('fee_invoice.index') }}"
                        class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 {{ request()->is('*/fee-invoice*') ? 'bg-blue-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                        <x-hero-icon name="file-text" class="w-5 h-5" />
                        <span class="text-sm font-medium">{{ trans('Sidebar.fees_invoice') }}</span>
                    </a>
                @endcan
                @can('Recipt_Payment-list')
                    <a href="{{ route('receipt_payment.index') }}"
                        class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 {{ request()->is('*/receipt-payment*') ? 'bg-blue-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                        <x-hero-icon name="credit-card" class="w-5 h-5" />
                        <span class="text-sm font-medium">{{ trans('Sidebar.Recipt_Payment') }}</span>
                    </a>
                @endcan
                @can('except_fee-list')
                    <a href="{{ route('except_fee.index') }}"
                        class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 {{ request()->is('*/except-fee*') ? 'bg-blue-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                        <x-hero-icon name="minus-circle" class="w-5 h-5" />
                        <span class="text-sm font-medium">{{ trans('Sidebar.except_fee') }}</span>
                    </a>
                @endcan
                @can('payment_parts-list')
                    <a href="{{ route('payment_parts.index') }}"
                        class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 {{ request()->is('*/payment-parts*') ? 'bg-blue-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                        <x-hero-icon name="arrow-circle-down" class="w-5 h-5" />
                        <span class="text-sm font-medium">{{ trans('Sidebar.payment_parts') }}</span>
                    </a>
                @endcan
                @can('exchange_bonds-list')
                    <a href="{{ route('exchange-bonds.index') }}"
                        class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 {{ request()->is('*/exchange-bonds*') ? 'bg-blue-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                        <x-hero-icon name="credit-card" class="w-5 h-5" />
                        <span class="text-sm font-medium">{{ trans('Sidebar.exchange_bonds') }}</span>
                    </a>
                @endcan
                <a href="{{ route('fund_account.index') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 {{ request()->is('*/fund-account*') ? 'bg-blue-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                    <x-hero-icon name="university" class="w-5 h-5" />
                    <span class="text-sm font-medium">{{ trans('Sidebar.fund_account') }}</span>
                </a>
            @endif

            <!-- Grades Setting Section -->
            @if (Auth::user()->hasAnyPermission(['grade-list', 'class_rooms-list', 'classes-list']))
                <div class="pt-4 pb-2">
                    <span class="px-4 text-sm font-medium text-gray-400">{{ trans('Sidebar.grades_setting') }}</span>
                </div>
                @can('grade-list')
                    <a href="{{ route('grade.index') }}"
                        class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 {{ request()->is('*/grade*') ? 'bg-blue-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                        <x-hero-icon name="line-chart" class="w-5 h-5" />
                        <span class="text-sm font-medium">{{ trans('Sidebar.Grade') }}</span>
                    </a>
                @endcan
                @can('class_rooms-list')
                    <a href="{{ route('class_rooms.index') }}"
                        class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 {{ request()->is('*/class-rooms*') ? 'bg-blue-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                        <x-hero-icon name="building" class="w-5 h-5" />
                        <span class="text-sm font-medium">{{ trans('Sidebar.Class_Rooms') }}</span>
                    </a>
                @endcan
                @can('classes-list')
                    <a href="{{ route('classes.index') }}"
                        class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 {{ request()->is('*/classes*') ? 'bg-blue-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                        <x-hero-icon name="list-alt" class="w-5 h-5" />
                        <span class="text-sm font-medium">{{ trans('Sidebar.classes') }}</span>
                    </a>
                @endcan
            @endif

            <!-- Stores Section -->
            @if (Auth::user()->hasAnyPermission([
                    'stocks-index',
                    'orders-index',
                    'order_out-index',
                    'stocks-inventory_order-index',
                    'clothes-income_order',
                    'clothes-index',
                    'clothes-outcome_order',
                    'books_sheets-index',
                    'books_sheets-outcome_order',
                    'books_sheets-income_order',
                    'books_sheets-inventory_order',
                    'clothes-inventory_order',
                ]))
                <div class="pt-4 pb-2">
                    <span class="px-4 text-sm font-medium text-gray-400">{{ trans('Sidebar.stores') }}</span>
                </div>

                @if (Auth::user()->hasAnyPermission([
                        'stocks-index',
                        'orders-index',
                        'order_out-index',
                        'stocks-inventory_order-index',
                        'labortories-index',
                    ]))
                    @php $stocksOpen = request()->is('*stocks*') || request()->is('*labs*') || request()->is('*gard*') || request()->is('*order*') ? 'true' : 'false'; @endphp
                    <div x-data="{ stocksOpen: {{ $stocksOpen }} }">
                        <button @click="stocksOpen = !stocksOpen" type="button"
                            class="flex items-center gap-3 w-full px-4 py-3 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition-all duration-200">
                            <x-hero-icon name="archive" class="w-5 h-5" />
                            <span class="text-sm font-medium flex-1 text-start">{{ trans('Sidebar.stocks') }}</span>
                            <svg class="w-4 h-4 transition-transform duration-200"
                                :class="{ 'rotate-180': stocksOpen }" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="stocksOpen" class="mt-1 mx-2 space-y-1 bg-gray-800 rounded-lg overflow-hidden"
                            style="display: none;">
                            {{-- @can('labortories-index')
                                <a href="{{ route('labs.index') }}"
                                    class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors">{{ trans('Sidebar.lab_index') }}</a>
                            @endcan --}}
                            @can('stocks-index')
                                <a href="{{ route('inventory.items.index', ['type' => 'stock']) }}"
                                    class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors">{{ trans('Sidebar.stocks_show') }}</a>
                            @endcan
                            @can('orders-index')
                                <a href="{{ route('inventory.orders.index', ['type' => 'purchases']) }}"
                                    class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors">{{ trans('orders.income') }}</a>
                            @endcan
                            @can('order_out-index')
                                <a href="{{ route('inventory.orders.index', ['type' => 'sales']) }}"
                                    class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors">{{ trans('stock.outcome_order') }}</a>
                            @endcan
                            @can('stocks-inventory_order-index')
                                <a href="{{ route('inventory.orders.index', ['type' => 'inventory']) }}"
                                    class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors">{{ trans('stock.inventory_order') }}</a>
                            @endcan
                        </div>
                    </div>
                @endif

                @if (Auth::user()->hasAnyPermission([
                        'clothes-income_order',
                        'clothes-index',
                        'clothes-outcome_order',
                        'clothes-inventory_order',
                    ]))
                    @php $clothesOpen = request()->is('*clothes*') ? 'true' : 'false'; @endphp
                    <div x-data="{ clothesOpen: {{ $clothesOpen }} }">
                        <button @click="clothesOpen = !clothesOpen" type="button"
                            class="flex items-center gap-3 w-full px-4 py-3 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition-all duration-200">
                            <x-hero-icon name="shirt" class="w-5 h-5" />
                            <span class="text-sm font-medium flex-1 text-start">{{ trans('stock.clothes') }}</span>
                            <svg class="w-4 h-4 transition-transform duration-200"
                                :class="{ 'rotate-180': clothesOpen }" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="clothesOpen" class="mt-1 mx-2 space-y-1 bg-gray-800 rounded-lg overflow-hidden"
                            style="display: none;">
                            @can('clothes-index')
                                <a href="{{ route('inventory.items.index', ['type' => 'clothe']) }}"
                                    class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors">{{ trans('Sidebar.clothes_show') }}</a>
                            @endcan
                            @can('clothes-income_order')
                                <a href="{{ route('inventory.orders.index', ['type' => 'purchases']) }}"
                                    class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors">{{ trans('orders.income') }}</a>
                            @endcan
                            @can('clothes-outcome_order')
                                <a href="{{ route('inventory.orders.index', ['type' => 'sales']) }}"
                                    class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors">{{ trans('stock.outcome_order') }}</a>
                            @endcan
                            @can('clothes-inventory_order')
                                <a href="{{ route('inventory.orders.index', ['type' => 'inventory']) }}"
                                    class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors">{{ trans('stock.inventory_order') }}</a>
                            @endcan
                        </div>
                    </div>
                @endif

                @if (Auth::user()->hasAnyPermission([
                        'books_sheets-index',
                        'books_sheets-outcome_order',
                        'books_sheets-income_order',
                        'books_sheets-inventory_order',
                    ]))
                    @php $booksOpen = request()->is('*book*') ? 'true' : 'false'; @endphp
                    <div x-data="{ booksOpen: {{ $booksOpen }} }">
                        <button @click="booksOpen = !booksOpen" type="button"
                            class="flex items-center gap-3 w-full px-4 py-3 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition-all duration-200">
                            <x-hero-icon name="book" class="w-5 h-5" />
                            <span
                                class="text-sm font-medium flex-1 text-start">{{ trans('Sidebar.books_sheets') }}</span>
                            <svg class="w-4 h-4 transition-transform duration-200" :class="{ 'rotate-180': booksOpen }"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="booksOpen" class="mt-1 mx-2 space-y-1 bg-gray-800 rounded-lg overflow-hidden"
                            style="display: none;">
                            @can('books_sheets-index')
                                <a href="{{ route('inventory.items.index', ['type' => 'book']) }}"
                                    class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors">{{ trans('Sidebar.books_sheets_show') }}</a>
                            @endcan
                            @can('books_sheets-income_order')
                                <a href="{{ route('inventory.orders.index', ['type' => 'purchases']) }}"
                                    class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors">{{ trans('orders.income') }}</a>
                            @endcan
                            @can('books_sheets-outcome_order')
                                <a href="{{ route('inventory.orders.index', ['type' => 'sales']) }}"
                                    class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors">{{ trans('stock.outcome_order') }}</a>
                            @endcan
                            @can('books_sheets-inventory_order')
                                <a href="{{ route('inventory.orders.index', ['type' => 'inventory']) }}"
                                    class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors">{{ trans('stock.inventory_order') }}</a>
                            @endcan
                        </div>
                    </div>
                @endif
            @endif

            <!-- Security Section -->
            @if (Auth::user()->hasAnyPermission(['settings-info', 'role-list', 'back-list']))
                <div class="pt-4 pb-2">
                    <span class="px-4 text-sm font-medium text-gray-400">{{ trans('Sidebar.security') }}</span>
                </div>
                @can('settings-info')
                    <a href="{{ route('create-new-school') }}"
                        class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 {{ request()->is('*/create-new-school*') ? 'bg-blue-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                        <x-hero-icon name="cog" class="w-5 h-5" />
                        <span class="text-sm font-medium">{{ trans('Sidebar.setting') }}</span>
                    </a>
                @endcan
                <a href="{{ route('system-lookup') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 {{ request()->is('*/monitor') ? 'bg-blue-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                    <x-hero-icon name="shield" class="w-5 h-5" />
                    <span class="text-sm font-medium">{{ trans('Sidebar.look_up') }}</span>
                </a>
                @can('backup-list')
                    <a href="{{ route('backup.index') }}"
                        class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 {{ request()->is('*/backup*') ? 'bg-blue-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                        <x-hero-icon name="database" class="w-5 h-5" />
                        <span class="text-sm font-medium">{{ trans('Sidebar.backup') }}</span>
                    </a>
                @endcan
                @can('role-list')
                    <a href="{{ route('roles.index') }}"
                        class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 {{ request()->is('*/permission*') ? 'bg-blue-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                        <x-hero-icon name="lock" class="w-5 h-5" />
                        <span class="text-sm font-medium">{{ trans('Sidebar.permission') }}</span>
                    </a>
                @endcan
            @endif

            @if (\Auth::user()->isAdmin)
                <a href="{{ route('admin_era.index') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 {{ request()->is('*/admin-era*') ? 'bg-blue-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                    <x-hero-icon name="user-secret" class="w-5 h-5" />
                    <span class="text-sm font-medium">{{ trans('Sidebar.admin_era') }}</span>
                </a>
            @endif

            <div class="pt-4 pb-2">
                <span class="px-4 text-sm font-medium text-gray-400">{{ trans('Sidebar.report') }}</span>
            </div>
            <a href="{{ route('report.index') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 {{ request()->is('*/reports*') ? 'bg-blue-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                <x-hero-icon name="bar-chart" class="w-5 h-5" />
                <span class="text-sm font-medium">{{ trans('Sidebar.report') }}</span>
            </a>
        </nav>
    </div>
</aside>

<style>
    aside::-webkit-scrollbar {
        width: 6px;
    }

    aside::-webkit-scrollbar-track {
        background: #1f2937;
    }

    aside::-webkit-scrollbar-thumb {
        background: #4b5563;
        border-radius: 3px;
    }

    aside::-webkit-scrollbar-thumb:hover {
        background: #6b7280;
    }
</style>
