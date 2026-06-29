@if ($value)
    <span class="inline-flex items-center px-3 py-1.5 rounded-lg text-sm font-medium bg-green-100 text-green-800">
        {{ trans('general.ok_tammen') }}
    </span>
@else
    <span class="inline-flex items-center px-3 py-1.5 rounded-lg text-sm font-medium bg-red-100 text-red-800">
        {{ trans('general.no_tammen') }}
    </span>
@endif
