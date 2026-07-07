@props([
    'label' => '',
    'value' => '',
    'trend' => null,
    'trendDirection' => null,
    'icon' => null,
])

<div x-data="useFetch()"
    x-init="fetch('{{ $attributes->get('endpoint', '') }}')"
    {{ $attributes->merge(['class' => 'bg-white rounded-xl border border-gray-200 p-6']) }}>
    <div class="flex items-start justify-between">
        <div>
            <p class="text-sm font-medium text-gray-500">{{ $label }}</p>
            <p class="text-3xl font-bold text-gray-900 mt-1" x-text="data?.value ?? '{{ $value }}'">{{ $value }}</p>
            @if ($trendDirection)
                <div class="flex items-center gap-1 mt-2">
                    <span class="{{ $trendDirection === 'up' ? 'text-green-600' : 'text-red-600' }}">
                        {{ $trendDirection === 'up' ? '↑' : '↓' }}
                    </span>
                    <span class="text-sm {{ $trendDirection === 'up' ? 'text-green-600' : 'text-red-600' }}">
                        {{ $trend }}
                    </span>
                </div>
            @endif
        </div>
        @if ($icon)
            <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center">
                <x-hero-icon name="{{ $icon }}" class="w-5 h-5 text-primary" />
            </div>
        @endif
    </div>
</div>
