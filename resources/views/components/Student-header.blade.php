<h4 class="card-title">{{trans('student.title')}}
</h4>
<div class="btn-group" style="flex-direction: row-reverse">
    <button class="btn btn-primary">
        <i data-feather="upload"></i>
        {{trans('general.Import_Excel')}}</button>
    <button class="btn btn-primary">
        <i data-feather="download"></i>
        {{trans('general.Export_Excel')}}
    </button>
    <a href="{{route('Students.pdf','test')}}" target="_new" class="btn btn-primary">
        <i data-feather="file-plus"></i>
        {{trans('general.Export_PDF')}}
    </a>
    <a href="{{route('Students.create')}}" class="btn btn-primary">
        <i data-feather="plus-square"></i>
        {{trans('general.new')}}</a>
</div>
