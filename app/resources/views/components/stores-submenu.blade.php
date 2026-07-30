<!-- Stocks sub-menu -->
@if (Auth::user()->hasAnyPermission(['stocks-index', 'orders-index', 'order_out-index', 'stocks-inventory_order-index']))
    @php
        $stocksActive = request()->is('*inventory/items/stock*') || request()->is('*inventory/orders*');
    @endphp
    <div x-data="{ stocksOpen: {{ request()->is('*inventory/items/stock*') || request()->is('*inventory/orders*') ? 'true' : 'false' }} }" x-show="!search || '{{ trans('Sidebar.stocks') }}'.includes(search)">
        <button @click="stocksOpen = !stocksOpen" title="{{ trans('Sidebar.stocks') }}"
            class="flex items-center gap-3 w-full px-3 py-2.5 rounded-lg transition-all duration-200 {{ $stocksActive ? 'bg-primary/10 text-primary' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
            <x-hero-icon name="archive" class="w-5 h-5 shrink-0" />
            <span x-show="sidebarExpanded" class="text-sm font-medium flex-1 text-start"
                x-cloak>{{ trans('Sidebar.stocks') }}</span>
            <svg x-show="sidebarExpanded" class="w-4 h-4 transition-transform duration-200"
                :class="{ 'rotate-180': stocksOpen }" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
        <div x-show="stocksOpen" class="mt-1 mx-2 space-y-1 bg-gray-800 rounded-lg overflow-hidden"
            style="display: none;">
            @can('stocks-index')
                <a href="{{ route('inventory.items.index', ['type' => 'stock']) }}"
                    class="block px-4 py-2 text-sm transition-colors {{ request()->is('*inventory/items/stock*') ? 'bg-primary/10 text-primary' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">{{ trans('Sidebar.stocks_show') }}</a>
            @endcan
            @can('orders-index')
                <a href="{{ route('inventory.orders.index', ['type' => 'purchases']) }}"
                    class="block px-4 py-2 text-sm transition-colors {{ request()->is('*inventory/orders/purchases*') ? 'bg-primary/10 text-primary' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">{{ trans('orders.income') }}</a>
            @endcan
            @can('order_out-index')
                <a href="{{ route('inventory.orders.index', ['type' => 'sales']) }}"
                    class="block px-4 py-2 text-sm transition-colors {{ request()->is('*inventory/orders/sales*') ? 'bg-primary/10 text-primary' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">{{ trans('stock.outcome_order') }}</a>
            @endcan
            @can('stocks-inventory_order-index')
                <a href="{{ route('inventory.orders.index', ['type' => 'inventory']) }}"
                    class="block px-4 py-2 text-sm transition-colors {{ request()->is('*inventory/orders/inventory*') ? 'bg-primary/10 text-primary' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">{{ trans('stock.inventory_order') }}</a>
            @endcan
        </div>
    </div>
@endif

<!-- Clothes sub-menu -->
@if (Auth::user()->hasAnyPermission([
        'clothes-income_order',
        'clothes-index',
        'clothes-outcome_order',
        'clothes-inventory_order',
    ]))
    @php
        $clothesActive = request()->is('*inventory/items/clothe*');
    @endphp
    <div x-data="{ clothesOpen: {{ request()->is('*inventory/items/clothe*') ? 'true' : 'false' }} }" x-show="!search || '{{ trans('stock.clothes') }}'.includes(search)">
        <button @click="clothesOpen = !clothesOpen" title="{{ trans('stock.clothes') }}"
            class="flex items-center gap-3 w-full px-3 py-2.5 rounded-lg transition-all duration-200 {{ $clothesActive ? 'bg-primary/10 text-primary' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
            <x-hero-icon name="shirt" class="w-5 h-5 shrink-0" />
            <span x-show="sidebarExpanded" class="text-sm font-medium flex-1 text-start"
                x-cloak>{{ trans('stock.clothes') }}</span>
            <svg x-show="sidebarExpanded" class="w-4 h-4 transition-transform duration-200"
                :class="{ 'rotate-180': clothesOpen }" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
        <div x-show="clothesOpen" class="mt-1 mx-2 space-y-1 bg-gray-800 rounded-lg overflow-hidden"
            style="display: none;">
            @can('clothes-index')
                <a href="{{ route('inventory.items.index', ['type' => 'clothe']) }}"
                    class="block px-4 py-2 text-sm transition-colors {{ request()->is('*inventory/items/clothe*') ? 'bg-primary/10 text-primary' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">{{ trans('Sidebar.clothes_show') }}</a>
            @endcan
            @can('clothes-income_order')
                <a href="{{ route('inventory.orders.index', ['type' => 'purchases']) }}"
                    class="block px-4 py-2 text-sm transition-colors {{ request()->is('*inventory/orders/purchases*') ? 'bg-primary/10 text-primary' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">{{ trans('orders.income') }}</a>
            @endcan
            @can('clothes-outcome_order')
                <a href="{{ route('inventory.orders.index', ['type' => 'sales']) }}"
                    class="block px-4 py-2 text-sm transition-colors {{ request()->is('*inventory/orders/sales*') ? 'bg-primary/10 text-primary' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">{{ trans('stock.outcome_order') }}</a>
            @endcan
            @can('clothes-inventory_order')
                <a href="{{ route('inventory.orders.index', ['type' => 'inventory']) }}"
                    class="block px-4 py-2 text-sm transition-colors {{ request()->is('*inventory/orders/inventory*') ? 'bg-primary/10 text-primary' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">{{ trans('stock.inventory_order') }}</a>
            @endcan
        </div>
    </div>
@endif

<!-- Books sub-menu -->
@if (Auth::user()->hasAnyPermission([
        'books_sheets-index',
        'books_sheets-outcome_order',
        'books_sheets-income_order',
        'books_sheets-inventory_order',
    ]))
    @php
        $booksActive = request()->is('*inventory/items/book*');
    @endphp
    <div x-data="{ booksOpen: {{ request()->is('*inventory/items/book*') ? 'true' : 'false' }} }" x-show="!search || '{{ trans('Sidebar.books_sheets') }}'.includes(search)">
        <button @click="booksOpen = !booksOpen" title="{{ trans('Sidebar.books_sheets') }}"
            class="flex items-center gap-3 w-full px-3 py-2.5 rounded-lg transition-all duration-200 {{ $booksActive ? 'bg-primary/10 text-primary' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
            <x-hero-icon name="book" class="w-5 h-5 shrink-0" />
            <span x-show="sidebarExpanded" class="text-sm font-medium flex-1 text-start"
                x-cloak>{{ trans('Sidebar.books_sheets') }}</span>
            <svg x-show="sidebarExpanded" class="w-4 h-4 transition-transform duration-200"
                :class="{ 'rotate-180': booksOpen }" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
        <div x-show="booksOpen" class="mt-1 mx-2 space-y-1 bg-gray-800 rounded-lg overflow-hidden"
            style="display: none;">
            @can('books_sheets-index')
                <a href="{{ route('inventory.items.index', ['type' => 'book']) }}"
                    class="block px-4 py-2 text-sm transition-colors {{ request()->is('*inventory/items/book*') ? 'bg-primary/10 text-primary' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">{{ trans('Sidebar.books_sheets_show') }}</a>
            @endcan
            @can('books_sheets-income_order')
                <a href="{{ route('inventory.orders.index', ['type' => 'purchases']) }}"
                    class="block px-4 py-2 text-sm transition-colors {{ request()->is('*inventory/orders/purchases*') ? 'bg-primary/10 text-primary' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">{{ trans('orders.income') }}</a>
            @endcan
            @can('books_sheets-outcome_order')
                <a href="{{ route('inventory.orders.index', ['type' => 'sales']) }}"
                    class="block px-4 py-2 text-sm transition-colors {{ request()->is('*inventory/orders/sales*') ? 'bg-primary/10 text-primary' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">{{ trans('stock.outcome_order') }}</a>
            @endcan
            @can('books_sheets-inventory_order')
                <a href="{{ route('inventory.orders.index', ['type' => 'inventory']) }}"
                    class="block px-4 py-2 text-sm transition-colors {{ request()->is('*inventory/orders/inventory*') ? 'bg-primary/10 text-primary' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">{{ trans('stock.inventory_order') }}</a>
            @endcan
        </div>
    </div>
@endif
