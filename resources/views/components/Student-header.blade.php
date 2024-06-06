<div class="row card-title">
    <div class="col">
        <h4>{{ trans('student.title') }}</h4>
    </div>
    <div class="col text-md-right">
        <div class="btn-group" role="group" aria-label="Basic example">
            @can('Students-create')
            <a href="{{ route('Students.create') }}" class="btn btn-secondary"><i class="ti-plus"></i>
                {{ trans('general.new') }}</a>
                @endcan
                @can('Students-ImportExcel')
            <button type="button" class="btn btn-secondary"><i class="ti-upload"></i>
                {{ trans('general.Import_Excel') }}</button>
                @endcan
                @can('Students-Export_Excel')
                <a href="{{route('student.excel')}}" type="button" class="btn btn-secondary"><i class="ti-download"></i>
                    {{ trans('general.Export_Excel') }}</a>
                @endcan
                @can('Students-pdf')
            <a href="{{ route('Students.pdf', 'test') }}" target="_new" class="btn btn-secondary"><i
                    class="ti-file"></i>
                {{ trans('general.Export_PDF') }}</a>
                @endcan
        </div>
    </div>
</div>
