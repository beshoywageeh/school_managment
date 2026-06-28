@props(['class' => 'primary', 'type' => 'button'])
@php
    $classes = match ($class) {
        'primary' => 'bg-blue-500 text-white hover:bg-blue-600',
        'secondary' => 'bg-gray-500 text-white hover:bg-gray-600',
        'success' => 'bg-green-500 text-white hover:bg-green-600',
        'danger' => 'bg-red-500 text-white hover:bg-red-600',
        'warning' => 'bg-yellow-500 text-white hover:bg-yellow-600',
        'info' => 'bg-cyan-500 text-white hover:bg-cyan-600',
        'outline-primary' => 'border border-blue-500 text-blue-500 hover:bg-blue-50',
        'outline-secondary' => 'border border-gray-500 text-gray-500 hover:bg-gray-50',
        'outline-success' => 'border border-green-500 text-green-500 hover:bg-green-50',
        'outline-danger' => 'border border-red-500 text-red-500 hover:bg-red-50',
        default => 'bg-blue-500 text-white hover:bg-blue-600',
    };
@endphp
<button class="px-4 py-2 rounded-lg font-medium cursor-pointer {{ $classes }}" {{ $attributes }}
    type="{{ $type }}">
    {{ $slot }}
</button>
