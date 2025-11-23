<div class="side-menu-fixed">
    <div class="scrollbar side-menu-bg">
        <ul class="nav navbar-nav side-menu" id="Sidebarnav">
            <li class="py-3 m-auto my-2 text-center bg-white">
                <span class="font-bold">{{ $school->name }}</span>
            </li>
            <!-- school name -->
            <x-nav_link :href="route('dashboard')" :active="request()->is('*/')" :image="URL::asset('assests/images/Sidebar/dashboard.png')">
                {{ trans('Sidebar.Dashboard') }}
            </x-nav_link>
            <!--for student-->
            @if (Auth::user()->hasAnyPermission(['Students-list', 'parents-list', 'promotion-list', 'graduated_list']))
                <li class="pl-4 mt-10 mb-10 font-medium text-muted menu-title">{{ trans('Sidebar.student_info') }} </li>
                @can('parents-list')
                    <x-nav_link :href="route('parents.index')" :active="request()->is('*/parents*')" :image="URL::asset('assests/images/Sidebar/parents.png')">
                        {{ trans('Sidebar.parents') }}
                    </x-nav_link>
                @endcan
                @can('Students-list')
                    <x-nav_link :href="route('Students.index')" :active="request()->is('*/students') || request()->is('*/students/create')" :image="URL::asset('assests/images/Sidebar/students.png')">
                        {{ trans('Sidebar.Students') }}
                    </x-nav_link>
                @endcan
                @can('promotion-list')
                    <x-nav_link :href="route('promotion.index')" :active="request()->is('*/promotion') || request()->is('*/promotion/create')" :image="URL::asset('assests/images/Sidebar/promotion.png')">
                        {{ trans('Sidebar.promotion') }}
                    </x-nav_link>
                @endcan
                @can('graduated-list')
                    <x-nav_link :href="route('Students.graduated')" :active="request()->is('*/students/graduated*')" :image="URL::asset('assests/images/Sidebar/promotion.png')">
                        {{ trans('Sidebar.graduated') }}
                    </x-nav_link>
                @endcan
            @endif

            <!--for employee-->
            @if (Auth::user()->hasAnyPermission(['jobs-list', 'employees-list']))
                <li class="pl-4 mt-10 mb-10 font-medium text-muted menu-title">{{ trans('Sidebar.employee_info') }} </li>
                @can('jobs-list')
                    <x-nav_link :href="route('jobs.index')" :active="request()->is('*/jobs*')" :image="URL::asset('assests/images/Sidebar/job.png')">
                        {{ trans('Sidebar.jobs') }}
                    </x-nav_link>
                @endcan
                @can('employees-list')
                    <x-nav_link :href="route('employees.index')" :active="request()->is('*/employees*')" :image="URL::asset('assests/images/Sidebar/employees.png')">
                        {{ trans('Sidebar.employees') }}
                    </x-nav_link>
                @endcan
                @can('scheduale-list')
                    <x-nav_link :href="route('schedules.index')" :active="request()->is('*/schedule*')"
                        :image="URL::asset('assests/images/Sidebar/schedules.png')">{{ trans('schedules.schedules') }}</x-nav_link>
                @endcan

                @can('employees-list')
                    <x-nav_link :href="route('employees.return_list')" :active="request()->is('*/employees/return_list*')">
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
                    <x-nav_link :href="route('academic_year.index')" :active="request()->is('*/academic_year*')" :image="URL::asset('assests/images/Sidebar/calendar.png')">
                        {{ trans('academic_year.title') }}
                    </x-nav_link>
                @endcan
                @can('schoolfees-list')
                    <x-nav_link :href="route('schoolfees.index')" :active="request()->is('*/school_fees*')" :image="URL::asset('assests/images/Sidebar/money.png')">
                        {{ trans('Sidebar.schoolfees') }}
                    </x-nav_link>
                @endcan
                @can('fee_invoice-list')
                    <x-nav_link :href="route('fee_invoice.index')" :active="request()->is('*/fee_invoice*')" :image="URL::asset('assests/images/Sidebar/invoice.png')">
                        {{ trans('Sidebar.fees_invoice') }}
                    </x-nav_link>
                @endcan
                @can('Recipt_Payment-list')
                    <x-nav_link :href="route('Recipt_Payment.index')" :active="request()->is('*/Recipt_Payment*')" :image="URL::asset('assests/images/Sidebar/bill.png')">
                        {{ trans('Sidebar.Recipt_Payment') }}
                    </x-nav_link>
                @endcan
                @can('except_fee-list')
                    <x-nav_link :href="route('except_fee.index')" :active="request()->is('*/except_fee*')" :image="URL::asset('assests/images/Sidebar/declined.png')">
                        {{ trans('Sidebar.except_fee') }}
                    </x-nav_link>
                @endcan
                @can('payment_parts-list')
                    <x-nav_link :href="route('payment_parts.index')" :active="request()->is('*/payment_parts*')" :image="URL::asset('assests/images/Sidebar/down-payment.png')">
                        {{ trans('Sidebar.payment_parts') }}
                    </x-nav_link>
                @endcan
                @can('exchange_bonds-list')
                    <x-nav_link :href="route('exchange_bonds.index')" :active="request()->is('*/exchange_bonds*')" :image="URL::asset('assests/images/Sidebar/bill.png')">
                        {{ trans('Sidebar.exchange_bonds') }}
                    </x-nav_link>
                @endcan
                <x-nav_link :href="route('fund_account.index')" :active="request()->is('*/fund_account*')" :image="URL::asset('assests/images/Sidebar/bill.png')">
                    {{ trans('Sidebar.fund_account') }}
                </x-nav_link>
                </li>
            @endif
            <!--for grades_setting-->
            @if (Auth::user()->hasAnyPermission(['grade-list', 'class_rooms-list', 'classes-list']))
                <li class="pl-4 mt-10 mb-10 font-medium text-muted menu-title">{{ trans('Sidebar.grades_setting') }}
                </li>
                @can('grade-list')
                    <x-nav_link :href="route('grade.index')" :active="request()->is('*/grade*')" :image="URL::asset('assests/images/Sidebar/score.png')">
                        {{ trans('Sidebar.Grade') }}
                    </x-nav_link>
                @endcan
                @can('class_rooms-list')
                    <x-nav_link :href="route('class_rooms.index')" :active="request()->is('*/class_rooms*')" :image="URL::asset('assests/images/Sidebar/classroom.png')">
                        {{ trans('Sidebar.Class_Rooms') }}
                    </x-nav_link>
                @endcan
                @can('classes-list')
                    <x-nav_link :href="route('classes.index')" :active="request()->is('*/classes*')" :image="URL::asset('assests/images/Sidebar/classes.png')">
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
                            data-target="#stocks">{{ trans('Sidebar.stocks') }}
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
                            {{ trans('stock.clothes') }}
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
                                        href="{{ route('clothes_order.index', ['type' => 'inventory']) }}">{{ trans('orders.income') }}</a>
                                </li>
                            @endcan
                            @can('clothes-outcome_order')
                                <li> <a
                                        href="{{ route('clothes_order.index', ['type' => 'sales']) }}">{{ trans('stock.outcome_order') }}</a>
                                </li>
                            @endcan
                            @can('clothes-inventory_order')
                                <li> <a
                                        href="{{ route('clothes_order.index', ['type' => 'gard']) }}">{{ trans('stock.inventory_order') }}</a>
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
                            {{ trans('Sidebar.books_sheets') }}
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
                                        href="{{ route('bookSheetsOrder.index', ['type' => 'inventory']) }}">{{ trans('orders.income') }}</a>
                                </li>
                            @endcan
                            @can('books_sheets-outcome_order')
                                <li> <a
                                        href="{{ route('bookSheetsOrder.index', ['type' => 'sales']) }}">{{ trans('stock.outcome_order') }}</a>
                                </li>
                            @endcan
                            @can('books_sheets-inventory_order')
                                <li> <a
                                        href="{{ route('bookSheetsOrder.index', ['type' => 'gard']) }}">{{ trans('stock.inventory_order') }}</a>
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
                    <x-nav_link :href="route('setting.index')" :active="request()->is('*/settings*')" :image="URL::asset('assests/images/Sidebar/cogwheel.png')">
                        {{ trans('Sidebar.setting') }}
                    </x-nav_link>
                @endcan

                <x-nav_link :href="route('system_lookup')" :active="request()->is('*/monitor')" :image="URL::asset('assests/images/Sidebar/security.png')">
                    {{ trans('Sidebar.look_up') }}
                </x-nav_link>
                @can('backup-list')
                    <x-nav_link :href="route('backup.index')" :active="request()->is('*/backup*')" :image="URL::asset('assests/images/Sidebar/data-recovery.png')">
                        {{ trans('Sidebar.backup') }}
                    </x-nav_link>
                @endcan
                @can('role-list')
                    <x-nav_link :href="route('roles.index')" :active="request()->is('*/permission*')" :image="URL::asset('assests/images/Sidebar/shield.png')">
                        {{ trans('Sidebar.permission') }}
                    </x-nav_link>
                @endcan
            @endif
            @if (\Auth::user()->isAdmin)
                <x-nav_link :href="route('admin_era.index')" :active="request()->is('*/admin_era*')" :image="URL::asset('assests/images/Sidebar/admin.png')">
                    {{ trans('Sidebar.admin_era') }}
                </x-nav_link>
            @endif

            <li class="pl-4 mt-10 mb-10 font-medium text-muted menu-title"> {{ trans('Sidebar.report') }}</li>

            <!--for report-->
            <x-nav_link :href="route('report.index')" :active="request()->is('*/reports*')" :image="URL::asset('assests/images/Sidebar/report.png')">
                {{ trans('Sidebar.report') }}
            </x-nav_link>
        </ul>
    </div>
</div>
