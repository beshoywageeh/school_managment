<div class="row card-title">
    <div class="col">
        <h4>{{ trans('student.title') }}</h4>
    </div>
    <div class="col text-md-right">
        <div class="btn-group" role="group" aria-label="Basic example">
            @can('Students-create')
            <button type="button" class="btn btn-primary" data-target="#Create_Student" data-toggle="modal"><i
                    class="ti-plus"></i>
                {{ trans('general.buttons.create') }}</button>
            @endcan
            @can('Students-Import_Excel')
                <button type="button" class="btn btn-primary" data-target="#Import_Excel" data-toggle="modal"><i
                        class="ti-upload"></i>
                    {{ trans('general.Import_Excel') }}</button>
            @endcan

            @can('Students-pdf')
                <a href="{{ route('report.export_student') }}" target="_new" class="btn btn-primary"><i
                        class="ti-file"></i>
                    {{ trans('general.Export_PDF') }}</a>
            @endcan
        </div>
    </div>
</div>
