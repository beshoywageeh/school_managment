<nav class="flex-row p-0 admin-header navbar navbar-default col-lg-12 col-12 fixed-top d-flex">
    <!-- logo -->

    <div class="text-left navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="https://www.facebook.com/LoopLabsDev"><img
                src="{{ asset('assests/images/logo-icon-dark.png') }}" alt=""><span>Loop Labs</span></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img
                src="{{ asset('assests/images/logo-icon-dark.png') }}" alt=""></a>
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
            <h6 class="m-auto text-center rounded alert alert-info" id="datetime"></h6>
        </li>
        <li class="nav-item fullscreen">
            <a id="btnFullscreen" href="#" class="nav-link"><i class="ti-fullscreen"></i></a>
        </li>

        <li class="nav-item dropdown mr-30">
            <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button"
                aria-haspopup="true" aria-expanded="false">
                <img src="{{ URL::asset('assests/images/Sidebar/avatar3.png') }}" alt="avatar">
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header">
                    <div class="media">
                        <div class="media-body">
                            <h5 class="mt-0 mb-0">{{ \Auth::user()->name }}</h5>
                            <span>{{ \Auth::user()->email }}</span>
                        </div>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="text-info ti-settings"></i>Settings</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item">
                        <i class="text-danger ti-unlock"></i>
                        <span>{{ trans('Header.logout') }}</span>
                    </button>
                </form>
            </div>
        </li>
    </ul>
</nav>
