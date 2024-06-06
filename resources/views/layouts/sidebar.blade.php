<div class="side-menu-fixed">
    <div class="scrollbar side-menu-bg">
        <ul class="nav navbar-nav side-menu" id="sidebarnav">
            <!-- school name -->
            <x-nav_link :href="route('dashboard')" :active="request()->is('*/dashboard')" :image="URL::asset('assests/images/Sidebar/dashboard.png')">
                {{ trans('Sidebar.Dashboard') }}
            </x-nav_link>
            <!--for student-->
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
                    <x-nav_link :href="route('parents.index')" :active="request()->is('*/parents/*')" :image="URL::asset('assests/images/Sidebar/parents.png')">
                        {{ trans('sidebar.parents') }}
                    </x-nav_link>
                    <x-nav_link :href="route('Students.index')" :active="request()->is('*/students/*')" :image="URL::asset('assests/images/Sidebar/students.png')">
                        {{ trans('sidebar.Students') }}
                    </x-nav_link>
                    <x-nav_link :href="route('promotion.index')" :active="request()->is('*/promotion/*')" :image="URL::asset('assests/images/Sidebar/promotion.png')">
                        {{ trans('sidebar.promotion') }}
                    </x-nav_link>
                </ul>
            </li>
            <!--for employee-->
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
                    <x-nav_link :href="route('jobs.index')" :active="request()->is('*/jobs/*')" :image="URL::asset('assests/images/Sidebar/job.png')">
                        {{ trans('sidebar.jobs') }}
                    </x-nav_link>
                    <x-nav_link :href="route('employees.index')" :active="request()->is('*/employees/*')" :image="URL::asset('assests/images/Sidebar/employees.png')">
                        {{ trans('sidebar.employees') }}
                    </x-nav_link>
                </ul>
            </li>
            <!--for acounting-->
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
                    <x-nav_link :href="route('academic_year.index')" :active="request()->is('*/academic_year/*')" :image="URL::asset('assests/images/Sidebar/calendar.png')">
                        {{ trans('academic_year.title') }}
                    </x-nav_link>
                    <x-nav_link :href="route('schoolfees.index')" :active="request()->is('*/school_fees/*')" :image="URL::asset('assests/images/Sidebar/money.png')">
                        {{ trans('sidebar.schoolfees') }}
                    </x-nav_link>
                    <x-nav_link :href="route('fee_invoice.index')" :active="request()->is('*/fee_invoice/*')" :image="URL::asset('assests/images/Sidebar/invoice.png')">
                        {{ trans('sidebar.fees_invoice') }}
                    </x-nav_link>
                    <x-nav_link :href="route('Recipt_Payment.index')" :active="request()->is('*/Recipt_Payment/*')" :image="URL::asset('assests/images/Sidebar/bill.png')">
                        {{ trans('sidebar.Recipt_Payment') }}
                    </x-nav_link>
                    <x-nav_link :href="route('except_fee.index')" :active="request()->is('*/except_fee/*')" :image="URL::asset('assests/images/Sidebar/declined.png')">
                        {{ trans('sidebar.except_fee') }}
                    </x-nav_link>
                    <x-nav_link :href="route('payment_parts.index')" :active="request()->is('*/payment_parts/*')" :image="URL::asset('assests/images/Sidebar/down-payment.png')">
                        {{ trans('sidebar.payment_parts') }}
                    </x-nav_link>
                </ul>
            </li>
            <!--for grades_setting-->
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
                    <x-nav_link :href="route('grade.index')" :active="request()->is('*/grade/*')" :image="URL::asset('assests/images/Sidebar/score.png')">
                        {{ trans('sidebar.Grade') }}
                    </x-nav_link>
                    <x-nav_link :href="route('class_rooms.index')" :active="request()->is('*/class_rooms/*')" :image="URL::asset('assests/images/Sidebar/classroom.png')">
                        {{ trans('sidebar.Class_Rooms') }}
                    </x-nav_link>
                </ul>
            </li>
            @if (\Auth::user()->isAdmin)
                <!--for security-->
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

                        <x-nav_link :href="route('setting.index')" :active="request()->is('*/settings/*')" :image="URL::asset('assests/images/Sidebar/cogwheel.png')">
                            {{ trans('sidebar.setting') }}
                        </x-nav_link>
                        <x-nav_link :href="route('system_lookup')" :active="request()->is('*/monitor')" :image="URL::asset('assests/images/Sidebar/security.png')">
                            {{ trans('sidebar.look_up') }}
                        </x-nav_link>
                        <x-nav_link :href="route('backup.index')" :active="request()->is('*/backup/*')" :image="URL::asset('assests/images/Sidebar/data-recovery.png')">
                            {{ trans('sidebar.backup') }}
                        </x-nav_link>
                        <x-nav_link :href="route('roles.index')" :active="request()->is('*/permission/*')" :image="URL::asset('assests/images/Sidebar/shield.png')">
                            {{ trans('sidebar.permission') }}
                        </x-nav_link>
                    </ul>
                </li>
            @endif


            <!--for report-->
            <x-nav_link :href="route('report.index')" :active="request()->is('*/reports/*')" :image="URL::asset('assests/images/Sidebar/report.png')">
                {{ trans('sidebar.report') }}
            </x-nav_link>
        </ul>
    </div>
</div>
