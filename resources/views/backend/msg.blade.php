@if($errors->any())
<div class="alert alert-danger alert-dismissible" role="alert">
    <div>
        <div class="flex items-center gap-2 text-base font-medium">
            <i width="1em" height="1em" data-feather="alert-triangle"></i>
            <span> هناك بعض المشاكل في الادخال </span>
        </div>
        <div class="mt-3 font-normal ps-10">
            <ul class="px-4 space-y-1 list-disc" role="list">
                @foreach($errors->all() as $error)
        <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <button class="alert-dismiss" type="button">
        <i width="16" height="16" data-feather="x"></i>
    </button>
</div>
@endif
