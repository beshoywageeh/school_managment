@props([
    'title' => '',
    'module' => 'default',
])

@php
    $moduleColors = [
        'default' => 'bg-white border-b border-gray-200',
        'primary' => 'bg-primary text-white',
        'success' => 'bg-green-600 text-white',
        'danger' => 'bg-red-600 text-white',
        'info' => 'bg-blue-600 text-white',
    ][$module] ?? 'bg-white border-b border-gray-200';

    $titleColor = in_array($module, ['default']) ? 'text-gray-800' : 'text-white';
@endphp

<div class="{{ $moduleColors }} px-6 py-4 flex items-center justify-between shrink-0">
    <h1 class="text-xl font-bold {{ $titleColor }}">{{ $title }}</h1>
    <div class="flex items-center gap-2">
        {{ $actions ?? '' }}
    </div>
</div>
