<div class="col-lg-2">
    <a href="{{ route($route) }}" class="py-5 btn btn-primary dashboard-btn btn-block">
        <img src="{{ URL::asset('assests/images/Sidebar/' . $icon) }}" width="70" alt="">
        <br>
        <h5 class="text-white">{{ $label }}</h5>
    </a>
</div>