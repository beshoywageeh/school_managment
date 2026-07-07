@props([
    'label' => '',
    'value' => '',
    'trend' => null,
    'trendDirection' => 'up',
    'icon' => null,
    'loading' => false,
])

<div
    aria-busy="{{ $loading ? 'true' : 'false' }}"
    role="region"
    aria-label="{{ $label }}"
    {{ $attributes->merge(['class' => 'bg-white rounded-xl border border-gray-200 p-6']) }}
>
    @if ($loading)
        <div class="animate-pulse space-y-3">
            <div class="h-4 bg-gray-200 rounded w-1/2"></div>
            <div class="h-8 bg-gray-200 rounded w-1/3"></div>
            @if ($trend)
                <div class="h-3 bg-gray-200 rounded w-1/4"></div>
            @endif
        </div>
    @else
        <div class="flex items-start justify-between">
            <div>
                <p class="text-sm font-medium text-gray-500">{{ $label }}</p>
                <p class="text-3xl font-bold text-gray-900 mt-1">{{ $value }}</p>
                @if ($trend)
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
    @endif
</div>
