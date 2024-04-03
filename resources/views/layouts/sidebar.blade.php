<aside class="sidebar">
    <!-- Sidebar Header Starts -->
    <a href="/">
        <div class="sidebar-header">
            <div class="sidebar-logo-icon">
                <img src="{{ asset('storage/attachments/schools/' . $data['school']->school_name . '/' . $data['school']->image->filename) }}"
                    alt="logo" class="h-[45px]" />
            </div>

            <div class="sidebar-logo-text">
                <h1 class="flex text-xl">
                    <span class="font-bold text-slate-800 dark:text-slate-200"> {{ $data['school']->school_name }}</span>
                </h1>
            </div>
        </div>
    </a>
    <!-- Sidebar Header Ends -->

    <!-- Sidebar Menu Starts -->
    <ul class="sidebar-content">
        <!-- Dashboard -->
        <x-nav_link :href="route('dashboard')" :active="request()->is('*/dashboard')" :image="URL::asset('assests/images/Sidebar/dashboard.png')">
            {{ trans('Sidebar.Dashboard') }}
        </x-nav_link>
        <x-nav_link :href="route('grades.index')" :active="request()->is('*/grades')" :image="URL::asset('assests/images/Sidebar/score.png')">
            {{ trans('sidebar.Grade') }}
        </x-nav_link>
        <x-nav_link :href="route('class_rooms.index')" :active="request()->is('*/class_rooms')" :image="URL::asset('assests/images/Sidebar/classroom.png')">
            {{ trans('sidebar.Class_Rooms') }}
        </x-nav_link>
        <x-nav_link :href="route('parents.index')" :active="request()->is('*/parents')" :image="URL::asset('assests/images/Sidebar/parents.png')">
            {{ trans('sidebar.parents') }}
        </x-nav_link>
        <x-nav_link :href="route('Students.index')" :active="request()->is('*/students')" :image="URL::asset('assests/images/Sidebar/students.png')">
            {{ trans('sidebar.Students') }}
        </x-nav_link>
    </ul>
    <!-- Sidebar Menu Ends -->
</aside>
