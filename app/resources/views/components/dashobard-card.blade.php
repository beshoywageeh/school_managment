<div class="row mb-4">
    @foreach($item as $it)
        <div class="col-md-3">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left icon-box {{$it['class']}} rounded-circle">
                  <span class="text-white">
                    <i class="{{$it['icon']}} highlight-icon" aria-hidden="true"></i>
                  </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">{{ $it['header'] }}</p>
                            <h4>{{$it['data']}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>