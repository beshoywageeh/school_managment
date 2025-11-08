<nav class="flex-row p-0 admin-header navbar navbar-default col-lg-12 col-12 fixed-top d-flex">
    <!-- logo -->

    <div class="text-left navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="https://www.facebook.com/LoopLabsDev"><img
                src="{{ asset('assests/images/logo-icon-dark.png') }}" alt="{{ trans('general.loop_labs') }}"><span>{{ trans('general.loop_labs') }}</span></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img
                src="{{ asset('assests/images/logo-icon-dark.png') }}" alt="{{ trans('general.loop_labs') }}"></a>
        <title>{{ env('APP_NAME') }}&nbsp;@yield('page_title')</title>

    </div>
    <!-- Top bar left -->
    <ul class="mr-auto nav navbar-nav">
        <li class="nav-item">
            <a id="button-toggle" class="inline-block ml-20 button-toggle-nav pull-left" href="javascript:void(0);"><i
                    class="zmdi zmdi-menu ti-align-right"></i></a>
        </li>


    </ul>
    <!-- top bar right -->
    <ul class="ml-auto nav navbar-nav">
        <li class="nav-item">
            <h5 class="m-auto text-center rounded alert alert-warning">{{ \Auth::user()->name }}</h5>
            </li>
            <li class="nav-item">
            <h6 class="m-auto text-center rounded alert alert-info" id="datetime"></h6>
        </li>
        <li class="nav-item fullscreen">
            <a id="btnFullscreen" href="#" class="nav-link"><i class="ti-fullscreen"></i></a>
        </li>
        <li class="nav-item nav_item_header">
            <a class="btn" style="padding-top: 12px" href="{{ route('profile.edit') }}"><i
                    class="text-info ti-settings" ></i></a>
        </li>
        <li class="nav-item nav_item_header" style="margin-right:0">

            <form method="POST" action="{{ route('logout') }}" class="logout_form">
                @csrf
                <button type="submit" class="btn">
                    <i class="text-primary ti-unlock"></i>
                </button>
            </form>
        </li>
    </ul>

</nav>