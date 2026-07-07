<div class="border-b-2 border-gray-300 pb-4 mb-6">
    <table class="w-full">
        <tr>
            <td class="w-1/5 text-left align-top">
                @if (isset($school_data->image->path))
                    <img src="{{ public_path('storage/' . $school_data->image->path) }}" alt="logo" class="w-24 h-auto" />
                @endif
            </td>
            <td class="w-3/5 text-center align-top">
                <h1 class="text-2xl font-bold text-gray-900 m-0">{{ $school_data->name ?? '' }}</h1>
                <p class="text-sm text-gray-600 mt-1">{{ $school_data->address ?? '' }}</p>
                <p class="text-sm text-gray-600">{{ $school_data->phone ?? '' }}</p>
            </td>
            <td class="w-1/5 text-right align-top">
                <h2 class="text-xl font-bold text-gray-800 m-0">{{ $title ?? 'Report' }}</h2>
                <p class="text-sm text-gray-500 mt-1">{{ trans('report.print_date', ['date' => date('Y-m-d')]) }}</p>
            </td>
        </tr>
    </table>
</div>
