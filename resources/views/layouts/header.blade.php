<nav class="flex-row p-0 admin-header navbar navbar-default col-lg-12 col-12 fixed-top d-flex">
    <!-- logo -->

    <div class="text-left navbar-brand-wrapper">
        @if (isset($school) && $school->slug != null && $school->image !=null)
            <a class="navbar-brand brand-logo" href="index.html"><img
                    src="{{ asset('storage/attachments/schools/' . $school->slug . '/' . $school->image->filename) }}"
                    alt=""></a>
            <a class="navbar-brand brand-logo-mini" href="index.html"><img
                    src="{{ asset('storage/attachments/schools/' . $school->slug . '/' . $school->image->filename) }}"
                    alt=""></a>
        @else
            <link rel="icon" href="" type="image/png" />
        @endif
        <title>@yield('page_title')</title>

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
            <h6 class="text-center alert alert-info rounded m-auto" id="datetime"></h6>
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
