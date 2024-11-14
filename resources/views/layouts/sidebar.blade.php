<div class="side-menu-fixed">
    <div class="scrollbar side-menu-bg">
        <ul class="nav navbar-nav side-menu" id="sidebarnav">
            <li class="py-3 m-auto my-2 text-center bg-white">
                <span class="font-bold">{{ $school->name }}</span>
            </li>
            <!-- school name -->
            <x-nav_link :href="route('dashboard')" :active="request()->is('*/dashboard')" :image="URL::asset('assests/images/Sidebar/dashboard.png')">
                {{ trans('Sidebar.Dashboard') }}
            </x-nav_link>
            <!--for student-->
            @if (Auth::user()->hasAnyPermission(['Students-list', 'parents-list', 'promotion-list']))
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#student-info">
                        <div class="pull-left">
                            <img class="img-fluid" width="25" height="25"
                                src="{{ URL::asset('assests/images/Sidebar/students.png') }}"
                                alt="{{ trans('sidebar.student_info') }}" />
                            <span class="right-nav-text">{{ trans('sidebar.student_info') }}</span>
                        </div>
                        <div class="pull-right"><i class="ti-plus"></i></div>
                        <div class="clearfix"></div>
                    </a>
                    <ul id="student-info" class="collapse" data-parent="#sidebarnav">
                        @can('parents-list')
                            <x-nav_link :href="route('parents.index')" :active="request()->is('*/parents/*')" :image="URL::asset('assests/images/Sidebar/parents.png')">
                                {{ trans('sidebar.parents') }}
                            </x-nav_link>
                        @endcan
                        @can('Students-list')
                            <x-nav_link :href="route('Students.index')" :active="request()->is('*/students/*')" :image="URL::asset('assests/images/Sidebar/students.png')">
                                {{ trans('sidebar.Students') }}
                            </x-nav_link>
                        @endcan
                        @can('promotion-list')
                            <x-nav_link :href="route('promotion.index')" :active="request()->is('*/promotion/*')" :image="URL::asset('assests/images/Sidebar/promotion.png')">
                                {{ trans('sidebar.promotion') }}
                            </x-nav_link>
                        @endcan
                    </ul>
                </li>
            @endif

            <!--for employee-->
            @if (Auth::user()->hasAnyPermission(['jobs-list', 'employees-list']))
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#employee_info">
                        <div class="pull-left">
                            <img class="img-fluid" width="25" height="25"
                                src="{{ URL::asset('assests/images/Sidebar/employees.png') }}"
                                alt="{{ trans('sidebar.employee_info') }}" />
                            <span class="right-nav-text">{{ trans('sidebar.employee_info') }}</span>
                        </div>
                        <div class="pull-right"><i class="ti-plus"></i></div>
                        <div class="clearfix"></div>
                    </a>
                    <ul id="employee_info" class="collapse" data-parent="#sidebarnav">
                        @can('jobs-list')
                            <x-nav_link :href="route('jobs.index')" :active="request()->is('*/jobs/*')" :image="URL::asset('assests/images/Sidebar/job.png')">
                                {{ trans('sidebar.jobs') }}
                            </x-nav_link>
                        @endcan
                        @can('employees-list')
                            <x-nav_link :href="route('employees.index')" :active="request()->is('*/employees/*')" :image="URL::asset('assests/images/Sidebar/employees.png')">
                                {{ trans('sidebar.employees') }}
                            </x-nav_link>
                        @endcan
                    </ul>
                </li>
            @endif
            <!--for acounting-->
            @if (Auth::user()->hasAnyPermission([
                    'academic_year-list',
                    'schoolfees-list',
                    'fee_invoice-list',
                    'Recipt_Payment-list',
                    'except_fee-list',
                    'payment_parts-list',
                ]))
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#accounting">
                        <div class="pull-left">
                            <img class="img-fluid" width="25" height="25"
                                src="{{ URL::asset('assests/images/Sidebar/money.png') }}"
                                alt="{{ trans('sidebar.accounting') }}" />
                            <span class="right-nav-text">{{ trans('sidebar.accounting') }}</span>
                        </div>
                        <div class="pull-right"><i class="ti-plus"></i></div>
                        <div class="clearfix"></div>
                    </a>
                    <ul id="accounting" class="collapse" data-parent="#sidebarnav">
                        @can('academic_year-list')
                            <x-nav_link :href="route('academic_year.index')" :active="request()->is('*/academic_year/*')" :image="URL::asset('assests/images/Sidebar/calendar.png')">
                                {{ trans('academic_year.title') }}
                            </x-nav_link>
                        @endcan
                        @can('schoolfees-list')
                            <x-nav_link :href="route('schoolfees.index')" :active="request()->is('*/school_fees/*')" :image="URL::asset('assests/images/Sidebar/money.png')">
                                {{ trans('sidebar.schoolfees') }}
                            </x-nav_link>
                        @endcan
                        @can('fee_invoice-list')
                            <x-nav_link :href="route('fee_invoice.index')" :active="request()->is('*/fee_invoice/*')" :image="URL::asset('assests/images/Sidebar/invoice.png')">
                                {{ trans('sidebar.fees_invoice') }}
                            </x-nav_link>
                        @endcan
                        @can('Recipt_Payment-list')
                            <x-nav_link :href="route('Recipt_Payment.index')" :active="request()->is('*/Recipt_Payment/*')" :image="URL::asset('assests/images/Sidebar/bill.png')">
                                {{ trans('sidebar.Recipt_Payment') }}
                            </x-nav_link>
                        @endcan
                        @can('except_fee-list')
                            <x-nav_link :href="route('except_fee.index')" :active="request()->is('*/except_fee/*')" :image="URL::asset('assests/images/Sidebar/declined.png')">
                                {{ trans('sidebar.except_fee') }}
                            </x-nav_link>
                        @endcan
                        @can('payment_parts-list')
                            <x-nav_link :href="route('payment_parts.index')" :active="request()->is('*/payment_parts/*')" :image="URL::asset('assests/images/Sidebar/down-payment.png')">
                                {{ trans('sidebar.payment_parts') }}
                            </x-nav_link>
                        @endcan
                    </ul>
                </li>
            @endif
            <!--for grades_setting-->
            @if (Auth::user()->hasAnyPermission(['grade-list', 'class_rooms-list']))
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#grades_setting">
                        <div class="pull-left">
                            <img class="img-fluid" width="25" height="25"
                                src="{{ URL::asset('assests/images/Sidebar/classroom.png') }}"
                                alt="{{ trans('sidebar.grades_setting') }}" />
                            <span class="right-nav-text">{{ trans('sidebar.grades_setting') }}</span>
                        </div>
                        <div class="pull-right"><i class="ti-plus"></i></div>
                        <div class="clearfix"></div>
                    </a>
                    <ul id="grades_setting" class="collapse" data-parent="#sidebarnav">
                        @can('grade-list')
                            <x-nav_link :href="route('grade.index')" :active="request()->is('*/grade/*')" :image="URL::asset('assests/images/Sidebar/score.png')">
                                {{ trans('sidebar.Grade') }}
                            </x-nav_link>
                        @endcan
                        @can('class_rooms-list')
                            <x-nav_link :href="route('class_rooms.index')" :active="request()->is('*/class_rooms/*')" :image="URL::asset('assests/images/Sidebar/classroom.png')">
                                {{ trans('sidebar.Class_Rooms') }}
                            </x-nav_link>
                        @endcan
                    </ul>
                </li>
            @endif
            @if (Auth::user()->hasAnyPermission([
                    'stocks-index',
                    'orders-index',
                    'order_out-index',
                    'stocks-inventory_order-index',
                    'clothes-income_order',
                    'clothes-index',
                    'clothes-outcome_order',
                ]))
                <!--for stores-->
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#inventory">
                        <div class="pull-left"> <img class="img-fluid" width="25" height="25"
                                src="{{ URL::asset('assests/images/Sidebar/inventory.png') }}"
                                alt="{{ trans('sidebar.stores') }}" /><span
                                class="right-nav-text">{{ trans('sidebar.stores') }}</span></div>
                        <div class="pull-right"><i class="ti-plus"></i></div>
                        <div class="clearfix"></div>
                    </a>
                    <ul id="inventory" class="collapse" data-parent="#sidebarnav">
                        {{-- stocks-inventory --}}
                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse"
                                data-target="#stocks">{{ trans('sidebar.stocks') }}<div class="pull-right"><i
                                        class="ti-plus"></i></div>
                                <div class="clearfix"></div>
                            </a>
                            <ul id="stocks" class="collapse">

                                @can('stocks-index')
                                    <li> <a href="{{ route('stocks.index') }}">{{ trans('sidebar.stocks_show') }}</a>
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
                        {{-- clothes-inventory --}}
                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#clothes">
                                {{ trans('stock.clothes') }}<div class="pull-right"><i class="ti-plus"></i></div>
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
                                @can('clothes-outcome_order')
                                    <li> <a
                                            href="{{ route('clothes_order.index', ['type' => '3']) }}">{{ trans('stock.inventory_order') }}</a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                         <li>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#book_sheets">
                                {{ trans('Sidebar.books_sheets') }}<div class="pull-right"><i class="ti-plus"></i></div>
                                <div class="clearfix"></div>
                            </a>
                            <ul id="book_sheets" class="collapse">
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
                                @can('clothes-outcome_order')
                                    <li> <a
                                            href="{{ route('clothes_order.index', ['type' => '3']) }}">{{ trans('stock.inventory_order') }}</a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    </ul>
                </li>
            @endif
            <!--for security-->
            @if (Auth::user()->hasAnyPermission(['settings-info', 'role-list', 'back-list']))
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#security">
                        <div class="pull-left">
                            <img class="img-fluid" width="25" height="25"
                                src="{{ URL::asset('assests/images/Sidebar/encrypted.png') }}"
                                alt="{{ trans('sidebar.security') }}" />
                            <span class="right-nav-text">{{ trans('sidebar.security') }}</span>
                        </div>
                        <div class="pull-right"><i class="ti-plus"></i></div>
                        <div class="clearfix"></div>
                    </a>
                    <ul id="security" class="collapse" data-parent="#sidebarnav">
                        @can('settings-info')
                            <x-nav_link :href="route('setting.index')" :active="request()->is('*/settings/*')" :image="URL::asset('assests/images/Sidebar/cogwheel.png')">
                                {{ trans('sidebar.setting') }}
                            </x-nav_link>
                        @endcan

                        <x-nav_link :href="route('system_lookup')" :active="request()->is('*/monitor')" :image="URL::asset('assests/images/Sidebar/security.png')">
                            {{ trans('sidebar.look_up') }}
                        </x-nav_link>
                        @can('backup-list')
                            <x-nav_link :href="route('backup.index')" :active="request()->is('*/backup/*')" :image="URL::asset('assests/images/Sidebar/data-recovery.png')">
                                {{ trans('sidebar.backup') }}
                            </x-nav_link>
                        @endcan
                        @can('role-list')
                            <x-nav_link :href="route('roles.index')" :active="request()->is('*/permission/*')" :image="URL::asset('assests/images/Sidebar/shield.png')">
                                {{ trans('sidebar.permission') }}
                            </x-nav_link>
                        @endcan
                    </ul>
                </li>
            @endif
            @if (\Auth::user()->isAdmin)
                <x-nav_link :href="route('admin_era.index')" :active="request()->is('*/admin_era/*')" :image="URL::asset('assests/images/Sidebar/admin.png')">
                    {{ trans('sidebar.admin_era') }}
                </x-nav_link>
            @endif


            <!--for report-->
            <x-nav_link :href="route('report.index')" :active="request()->is('*/reports/*')" :image="URL::asset('assests/images/Sidebar/report.png')">
                {{ trans('sidebar.report') }}
            </x-nav_link>
        </ul>
    </div>
</div>
