@props(['class' => 'primary', 'type' => 'button'])
@php
    $classes = match ($class) {
        'primary' => 'bg-primary text-white hover:bg-primary/90',
        'secondary' => 'bg-gray-500 text-white hover:bg-gray-600',
        'success' => 'bg-success text-white hover:bg-success/90',
        'danger' => 'bg-danger text-white hover:bg-danger/90',
        'warning' => 'bg-warning text-white hover:bg-warning/90',
        'info' => 'bg-info text-white hover:bg-info/90',
        'outline-primary' => 'border border-primary text-primary hover:bg-primary/10',
        'outline-secondary' => 'border border-gray-500 text-gray-500 hover:bg-gray-50',
        'outline-success' => 'border border-success text-success hover:bg-success/10',
        'outline-danger' => 'border border-danger text-danger hover:bg-danger/10',
        default => 'bg-primary text-white hover:bg-primary/90',
    };
@endphp
<button class="px-4 py-2 rounded-lg font-medium cursor-pointer {{ $classes }}" {{ $attributes }}
    type="{{ $type }}">
    {{ $slot }}
</button>
