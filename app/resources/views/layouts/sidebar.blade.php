<div class="side-menu-fixed">
    <div class="scrollbar side-menu-bg">
        <ul class="nav navbar-nav side-menu" id="Sidebarnav">
            <li class="py-3 m-auto my-2 text-center bg-white">
                <span class="font-bold">{{ $school->name }}</span>
            </li>
            <!-- school name -->
            <x-nav_link :href="route('dashboard')" :active="request()->is('*/')" icon="fa fa-dashboard">
                {{ trans('Sidebar.Dashboard') }}
            </x-nav_link>
            <!--for student-->
            @if (Auth::user()->hasAnyPermission(['Students-list', 'parents-list', 'promotion-list', 'graduated_list']))
                <li class="pl-4 mt-10 mb-10 font-medium text-muted menu-title">{{ trans('Sidebar.student_info') }} </li>
                @can('parents-list')
                    <x-nav_link :href="route('parents.index')" :active="request()->is('*/parents*')" icon="fa fa-users">
                        {{ trans('Sidebar.parents') }}
                    </x-nav_link>
                @endcan
                @can('Students-list')
                    <x-nav_link :href="route('students.index')" :active="request()->is('*/students') || request()->is('*/students/create')" icon="fa fa-graduation-cap">
                        {{ trans('Sidebar.Students') }}
                    </x-nav_link>
                @endcan
                @can('promotion-list')
                    <x-nav_link :href="route('promotion.index')" :active="request()->is('*/promotion') || request()->is('*/promotion/create')" icon="fa fa-level-up">
                        {{ trans('Sidebar.promotion') }}
                    </x-nav_link>
                @endcan
                @can('graduated-list')
                    <x-nav_link :href="route('students.graduated')" :active="request()->is('*/students/graduated*')" icon="fa fa-graduation-cap">
                        {{ trans('Sidebar.graduated') }}
                    </x-nav_link>
                @endcan
            @endif

            <!--for employee-->
            @if (Auth::user()->hasAnyPermission(['jobs-list', 'employees-list']))
                <li class="pl-4 mt-10 mb-10 font-medium text-muted menu-title">{{ trans('Sidebar.employee_info') }} </li>
                @can('jobs-list')
                    <x-nav_link :href="route('jobs.index')" :active="request()->is('*/jobs*')" icon="fa fa-briefcase">
                        {{ trans('Sidebar.jobs') }}
                    </x-nav_link>
                @endcan
                @can('employees-list')
                    <x-nav_link :href="route('employees.index')" :active="request()->is('*/employees*')" icon="fa fa-id-card-o">
                        {{ trans('Sidebar.employees') }}
                    </x-nav_link>
                @endcan
                @can('scheduale-list')
                    <x-nav_link :href="route('schedule.index')" :active="request()->is('*/schedule*')"
                        icon="fa fa-calendar-check-o">{{ trans('schedules.schedules') }}</x-nav_link>
                @endcan

                @can('employees-list')
                    <x-nav_link :href="route('employees.return_list')" :active="request()->is('*/employees/return_list*')" icon="fa fa-user-times">
                        {{ trans('general.resign') }}
                    </x-nav_link>
                @endcan
            @endif
            <!--for acounting-->
            @if (Auth::user()->hasAnyPermission([
                    'academic_year-list',
                    'schoolfees-list',
                    'fee_invoice-list',
                    'Recipt_Payment-list',
                    'except_fee-list',
                    'payment_parts-list',
                    'exchange_bonds-list',
                ]))
                <li class="pl-4 mt-10 mb-10 font-medium text-muted menu-title">{{ trans('Sidebar.accounting') }} </li>
                @can('academic_year-list')
                    <x-nav_link :href="route('academic_year.index')" :active="request()->is('*/academic_year*')" icon="fa fa-calendar">
                        {{ trans('academic_year.title') }}
                    </x-nav_link>
                @endcan
                @can('schoolfees-list')
                    <x-nav_link :href="route('school-fees.index')" :active="request()->is('*/school_fees*')" icon="fa fa-money">
                        {{ trans('Sidebar.schoolfees') }}
                    </x-nav_link>
                @endcan
                @can('fee_invoice-list')
                    <x-nav_link :href="route('fee-invoice.index')" :active="request()->is('*/fee-invoice*')" icon="fa fa-file-text-o">
                        {{ trans('Sidebar.fees_invoice') }}
                    </x-nav_link>
                @endcan
                @can('Recipt_Payment-list')
                    <x-nav_link :href="route('receipt-payment.index')" :active="request()->is('*/receipt-payment*')" icon="fa fa-credit-card">
                        {{ trans('Sidebar.Recipt_Payment') }}
                    </x-nav_link>
                @endcan
                @can('except_fee-list')
                    <x-nav_link :href="route('except-fee.index')" :active="request()->is('*/except-fee*')" icon="fa fa-minus-circle">
                        {{ trans('Sidebar.except_fee') }}
                    </x-nav_link>
                @endcan
                @can('payment_parts-list')
                    <x-nav_link :href="route('payment-parts.index')" :active="request()->is('*/payment-parts*')" icon="fa fa-arrow-circle-o-down">
                        {{ trans('Sidebar.payment_parts') }}
                    </x-nav_link>
                @endcan
                @can('exchange_bonds-list')
                    <x-nav_link :href="route('exchange-bonds.index')" :active="request()->is('*/exchange-bonds*')" icon="fa fa-credit-card">
                        {{ trans('Sidebar.exchange_bonds') }}
                    </x-nav_link>
                @endcan
                <x-nav_link :href="route('fund-account.index')" :active="request()->is('*/fund-account*')" icon="fa fa-university">
                    {{ trans('Sidebar.fund_account') }}
                </x-nav_link>
                </li>
            @endif
            <!--for grades_setting-->
            @if (Auth::user()->hasAnyPermission(['grade-list', 'class_rooms-list', 'classes-list']))
                <li class="pl-4 mt-10 mb-10 font-medium text-muted menu-title">{{ trans('Sidebar.grades_setting') }}
                </li>
                @can('grade-list')
                    <x-nav_link :href="route('grade.index')" :active="request()->is('*/grade*')" icon="fa fa-line-chart">
                        {{ trans('Sidebar.Grade') }}
                    </x-nav_link>
                @endcan
                @can('class_rooms-list')
                    <x-nav_link :href="route('class-rooms.index')" :active="request()->is('*/class-rooms*')" icon="fa fa-building-o">
                        {{ trans('Sidebar.Class_Rooms') }}
                    </x-nav_link>
                @endcan
                @can('classes-list')
                    <x-nav_link :href="route('classes.index')" :active="request()->is('*/classes*')" icon="fa fa-list-alt">
                        {{ trans('Sidebar.classes') }}
                    </x-nav_link>
                @endcan
            @endif
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
                <li class="pl-4 mt-10 mb-10 font-medium text-muted menu-title">{{ trans('Sidebar.stores') }}</li>

                <!--for stores-->
                @if (Auth::user()->hasAnyPermission([
                        'stocks-index',
                        'orders-index',
                        'order_out-index',
                        'stocks-inventory_order-index',
                        'labortories-index',
                    ]))
                    {{-- stocks-inventory --}}
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse"
                            data-target="#stocks">
                            <i class="fa fa-archive fa-lg fa-fw"></i>
                            <span class="mx-3 right-nav-text">{{ trans('Sidebar.stocks') }}</span>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="stocks" class="collapse">
                            @can('labortories-index')
                                <li> <a href="{{ route('labs.index') }}">{{ trans('Sidebar.lab_index') }}</a>
                                </li>
                            @endcan
                            @can('stocks-index')
                                <li> <a href="{{ route('stocks.index') }}">{{ trans('Sidebar.stocks_show') }}</a>
                                </li>
                            @endcan
                            @can('orders-index')
                                <li> <a href="{{ route('order.index') }}">{{ trans('orders.income') }}</a> </li>
                            @endcan
                            @can('order_out-index')
                                <li> <a href="{{ route('outorder.index') }}">{{ trans('stock.outcome_order') }}</a>
                                </li>
                            @endcan
                            @can('stocks-inventory_order-index')
                                <li> <a href="{{ route('gard.index') }}">{{ trans('stock.inventory_order') }}</a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endif
                @if (Auth::user()->hasAnyPermission([
                        'clothes-income_order',
                        'clothes-index',
                        'clothes-outcome_order',
                        'clothes-inventory_order',
                    ]))
                    {{-- clothes-inventory --}}
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#clothes">
                            <i class="fa fa-shirtsinbulk fa-lg fa-fw"></i>
                            <span class="mx-3 right-nav-text">{{ trans('stock.clothes') }}</span>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="clothes" class="collapse">
                            @can('clothes-index')
                                <li> <a href="{{ route('clothes.index') }}">{{ trans('Sidebar.clothes_show') }}</a>
                                </li>
                            @endcan
                            @can('clothes-income_order')
                                <li> <a
                                        href="{{ route('clothes_order.index', ['type' => '1']) }}">{{ trans('orders.income') }}</a>
                                </li>
                            @endcan
                            @can('clothes-outcome_order')
                                <li> <a
                                        href="{{ route('clothes_order.index', ['type' => '2']) }}">{{ trans('stock.outcome_order') }}</a>
                                </li>
                            @endcan
                            @can('clothes-inventory_order')
                                <li> <a
                                        href="{{ route('clothes_order.index', ['type' => '3']) }}">{{ trans('stock.inventory_order') }}</a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endif
                @if (Auth::user()->hasAnyPermission([
                        'books_sheets-index',
                        'books_sheets-outcome_order',
                        'books_sheets-income_order',
                        'books_sheets-inventory_order',
                    ]))
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#book_sheets">
                            <i class="fa fa-book fa-lg fa-fw"></i>
                            <span class="mx-3 right-nav-text">{{ trans('Sidebar.books_sheets') }}</span>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="book_sheets" class="collapse">
                            @can('books_sheets-index')
                                <li> <a
                                        href="{{ route('books_sheets.index') }}">{{ trans('Sidebar.books_sheets_show') }}</a>
                                </li>
                            @endcan
                            @can('books_sheets-income_order')
                                <li> <a
                                        href="{{ route('bookSheetsOrder.index', ['type' => '1']) }}">{{ trans('orders.income') }}</a>
                                </li>
                            @endcan
                            @can('books_sheets-outcome_order')
                                <li> <a
                                        href="{{ route('bookSheetsOrder.index', ['type' => '2']) }}">{{ trans('stock.outcome_order') }}</a>
                                </li>
                            @endcan
                            @can('books_sheets-inventory_order')
                                <li> <a
                                        href="{{ route('bookSheetsOrder.index', ['type' => '3']) }}">{{ trans('stock.inventory_order') }}</a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endif

            @endif
            <!--for security-->
            @if (Auth::user()->hasAnyPermission(['settings-info', 'role-list', 'back-list']))
                <li class="pl-4 mt-10 mb-10 font-medium text-muted menu-title">{{ trans('Sidebar.security') }}</li>

                @can('settings-info')
                    <x-nav_link :href="route('create-new-school')" :active="request()->is('*/create-new-school*')" icon="fa fa-cog">
                        {{ trans('Sidebar.setting') }}
                    </x-nav_link>
                @endcan

                <x-nav_link :href="route('system-lookup')" :active="request()->is('*/monitor')" icon="fa fa-shield">
                    {{ trans('Sidebar.look_up') }}
                </x-nav_link>
                @can('backup-list')
                    <x-nav_link :href="route('backup.index')" :active="request()->is('*/backup*')" icon="fa fa-database">
                        {{ trans('Sidebar.backup') }}
                    </x-nav_link>
                @endcan
                @can('role-list')
                    <x-nav_link :href="route('roles.index')" :active="request()->is('*/permission*')" icon="fa fa-lock">
                        {{ trans('Sidebar.permission') }}
                    </x-nav_link>
                @endcan
            @endif
            @if (\Auth::user()->isAdmin)
                <x-nav_link :href="route('admin-era.index')" :active="request()->is('*/admin-era*')" icon="fa fa-user-secret">
                    {{ trans('Sidebar.admin_era') }}
                </x-nav_link>
            @endif

            <li class="pl-4 mt-10 mb-10 font-medium text-muted menu-title"> {{ trans('Sidebar.report') }}</li>

            <!--for report-->
            <x-nav_link :href="route('report.index')" :active="request()->is('*/reports*')" icon="fa fa-bar-chart">
                {{ trans('Sidebar.report') }}
            </x-nav_link>
        </ul>
    </div>
</div>
