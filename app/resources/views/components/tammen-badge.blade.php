@if ($value)
    <span class="inline-flex items-center px-3 py-1.5 rounded-lg text-sm font-medium bg-success/20 text-success">
        {{ trans('general.ok_tammen') }}
    </span>
@else
    <span class="inline-flex items-center px-3 py-1.5 rounded-lg text-sm font-medium bg-danger/20 text-danger">
        {{ trans('general.no_tammen') }}
    </span>
@endif
