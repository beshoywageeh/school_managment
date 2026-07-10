<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>{{ trans('schedules.grade_schedule') }} - {{ $grade->name }}</title>
    <style>
        @page { size: A4 landscape; margin: 10mm; }
        body { font-family: sans-serif; font-size: 12px; margin: 20px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        th, td { border: 1px solid #333; padding: 8px; text-align: center; }
        th { background: #f0f0f0; font-weight: bold; }
        h2 { margin-bottom: 5px; }
        h3 { margin-top: 20px; margin-bottom: 10px; }
        .no-print { margin-bottom: 20px; }
        .no-print button { padding: 8px 16px; cursor: pointer; }
        .no-print a { margin-right: 10px; text-decoration: none; color: #333; }
        @media print { .no-print { display: none; } }
    </style>
</head>
<body>
    <div class="no-print">
        <button onclick="window.print()">{{ trans('schedules.print') }}</button>
        <a href="{{ route('schedule.index') }}">{{ trans('general.back') }}</a>
    </div>
    <h2>{{ trans('schedules.grade_schedule') }} - {{ $grade->name }}</h2>
    @foreach(['saturday','sunday','monday','tuesday','wednesday','thursday'] as $day)
        <h3>{{ trans("schedules.{$day}") }}</h3>
        <table>
            <thead>
                <tr>
                    <th>{{ trans('schedules.period') }}</th>
                    @foreach($classes as $class)
                        <th>{{ $class->title }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @for($i = 1; $i <= 8; $i++)
                    <tr>
                        <td>{{ trans("schedules.period_{$i}") }}</td>
                        @foreach($classes as $class)
                            <td>
                                {{ $schedules->get($day, collect())->where('period', $i)->where('class_id', $class->id)->first()?->teacher->name ?? '-' }}
                            </td>
                        @endforeach
                    </tr>
                @endfor
            </tbody>
        </table>
    @endforeach
</body>
</html>
