<div class="col-xl-4 mb-30">
    <div class="card card-statistics h-100 dash-card">
        <div class="card-body">
            <div class="clearfix">
                <div class="float-left icon-box-fixed img-state">
                    <img class="img img-responsive" width="50" src="{{ URL::asset('assests/images/Sidebar/' . $icon) }}">
                </div>
                <div class="float-right text-right ">
                    <h4 class="text-black">{{ $count }}</h4>
                    <a href="{{ route($route) }}" class="text-black card-text">
                        <strong>{{ $label }}</strong>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
