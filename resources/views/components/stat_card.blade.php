<div class="col-xl-4 mb-30">
    <div class="card card-statistics bg-primary h-100">
        <div class="card-body">
            <div class="clearfix">
                <div class="float-left icon-box-fixed">
                    <img class="img img-responsive" width="50" src="{{ URL::asset('assests/images/Sidebar/' . $icon) }}">
                </div>
                <div class="float-right text-right">
                    <h4 class="text-white">{{ $count }}</h4>
                    <a href="{{ route($route) }}" class="text-white card-text">{{ $label }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
