<div class="header">
    <table style="width: 100%;" border="0">
        <tr>
            <td style="width: 20%; text-align: left;">
                @if(isset($school_data->image->path))
                    <img src="{{ public_path('storage/' . $school_data->image->path) }}" alt="logo" width="100"/>
                @endif
            </td>
            <td style="width: 60%; text-align: center;">
                <h1>{{ $school_data->name ?? '' }}</h1>
                <p>{{ $school_data->address ?? '' }}</p>
                <p>{{ $school_data->phone ?? '' }}</p>
            </td>
            <td style="width: 20%; text-align: right;">
                <h2>{{ $title ?? 'Report' }}</h2>
                <p>Date: {{ date('Y-m-d') }}</p>
            </td>
        </tr>
    </table>
    <hr>
</div>