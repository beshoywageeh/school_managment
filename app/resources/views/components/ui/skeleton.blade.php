@props([
    'variant' => 'text',
    'width' => null,
    'height' => null,
    'count' => 1,
])

@php
    $variants = [
        'text' => 'h-4 w-full rounded',
        'title' => 'h-6 w-3/4 rounded',
        'avatar' => 'h-12 w-12 rounded-full',
        'card' => 'h-48 w-full rounded-xl',
        'chart' => 'h-64 w-full rounded-xl',
        'kpi' => 'h-24 w-full rounded-xl',
    ][$variant] ?? 'h-4 w-full rounded';

    $widthStyle = $width ? "width: {$width};" : '';
    $heightStyle = $height ? "height: {$height};" : '';
@endphp

@for ($i = 0; $i < $count; $i++)
    <div
        class="animate-pulse bg-gray-200 {{ $variants }}"
        style="{{ $widthStyle }} {{ $heightStyle }}"
        aria-hidden="true"
        role="presentation">
    </div>
@endfor
