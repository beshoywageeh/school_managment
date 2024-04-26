<div>
<header class="header">
<div class="flex items-center justify-between container-fluid">
            <!-- Sidebar Toggle & Search Starts -->
            <div class="flex items-center space-x-6 overflow-visible">
                <button class="sidebar-toggle">
                    <span class="flex space-x-4">
<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="22" width="22"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"></path>
                        </svg>
                        </span>
                        </button>

</div>
            <!-- Sidebar Toggle & Search Ends -->
            <!-- Header Options Starts -->
            <div class="flex items-center">
                <!-- Notification Dropdown Starts -->
                <div class="dropdown -mt-0.5" data-strategy="absolute">
                    <div class="px-3 dropdown-toggle">
                        <button
class="relative flex items-center justify-center mt-1 transition-colors duration-150 rounded-full text-slate-500 hover:text-slate-700 focus:text-primary-500 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:text-primary-500">
                            <i width="24" height="24" data-feather="bell"></i>
                            <span
class="absolute -right-1 -top-1.5 flex h-4 w-4 items-center justify-center rounded-full bg-danger-500 text-[11px] text-slate-200">
                                5
                            </span>
                        </button>
                    </div>

<div class="dropdown-content mt-3 w-[17.5rem] divide-y dark:divide-slate-700 sm:w-80">
                        <div class="flex items-center justify-between px-4 py-4">
                            <h6 class="text-slate-800 dark:text-slate-300">{{trans('Header.Notifications')}}</h6>
                            <button class="text-xs font-medium text-slate-600 hover:text-primary-500 dark:text-slate-300">
                                {{trans('Header.Clear_All')}}
                            </button>
                        </div>

<div class="w-full h-80" data-simplebar>
                            <ul>
                                <li
class="flex gap-4 px-4 py-3 transition-colors duration-150 cursor-pointer hover:bg-slate-100/70 dark:hover:bg-slate-700">
                                    <div
class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-green-500 bg-green-100 rounded-full">
                                        <i data-feather="check-circle" width="20" height="20"></i>
                                    </div>

<div>
                                        <h6 class="text-sm font-normal">Your order has been shipped</h6>
                                        <p class="text-xs text-slate-400">Order #1234 has been shipped</p>
                                        <p class="flex items-center gap-1 mt-1 text-xs text-slate-400">
                                            <i data-feather="clock" width="1em" height="1em"></i>
                                            <span>10 min ago</span>
                                        </p>
                                    </div>
                                    </li>
                                    </ul>
                                    </div>

<div class="px-4 py-2">
                            <button class="w-full btn btn-primary-plain btn-sm" type="button">
                                <span>{{trans('Header.View_More')}}</span>
                                <i data-feather="arrow-right" width="1rem" height="1rem"></i>
                            </button>
                        </div>
                        </div>
                        </div>
                        <!-- Notification Dropdown Ends -->
                        <!-- Profile Dropdown Starts -->
                        <div class="dropdown" data-strategy="absolute">
                            <div class="pl-3 dropdown-toggle">
                                <button class="group relative flex items-center gap-x-1.5" type="button">
                                    <div class="avatar avatar-circle avatar-indicator avatar-indicator-online">
<img class="avatar-img group-focus-within:ring group-focus-within:ring-primary-500"
                                    src="{{URL::asset('assests/images/user.png')}}" alt="Avatar 1" />
                                </div>
                                </button>
                                </div>

<div class="w-56 mt-1 divide-y dropdown-content dark:divide-slate-600">
                        <div class="px-4 py-3">
                            <p class="text-sm">{{trans('Header.login_as')}}</p>
<p class="text-sm font-medium truncate">{{\Auth::user()->first_name.'
                                '.\Auth::user()->second_name}}</p>
                            </div>
                            <div class="py-1">
                                <a href="{{route('profile.edit')}}" class="dropdown-link">
                                    <i width="18" height="18" data-feather="user" class="text-slate-500"></i>
                                    <span>{{trans('Header.Edit_Profile')}}</span>
                                </a>
                            </div>
                            <div class="py-1">
                                <form method="POST" action="{{route('logout')}}">
                                    @csrf
                                    <button type="submit" class="dropdown-btn">
                                        <i width="18" height="18" data-feather="log-out" class="text-slate-500"></i>
                                        <span>{{trans('Header.logout')}}</span>
                                    </button>
                                </form>
                            </div>
                            </div>
                            </div>
                            <!-- Profile Dropdown Ends -->
                            </div>
                            <!-- Header Options Ends -->
                            </div>
                            </header>
</div>
