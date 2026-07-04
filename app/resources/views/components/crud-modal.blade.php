@props([
    'title' => '',
    'size' => 'lg',
    'submitLabel' => null,
])

@php
    $sizeMap = [
        'sm' => 'max-w-sm',
        'md' => 'max-w-md',
        'lg' => 'max-w-lg',
        'xl' => 'max-w-xl',
        '2xl' => 'max-w-2xl',
    ];
    $maxWidth = $sizeMap[$size] ?? 'max-w-lg';
@endphp

<div x-data="{ open: false }"
    x-on:open-crud-modal.window="if ($event.detail?.id === '{{ $attributes->get('modal-id') ?? '' }}') open = true"
    x-on:close-crud-modal.window="if ($event.detail?.id === '{{ $attributes->get('modal-id') ?? '' }}' || !$event.detail?.id) open = false"
    x-show="open"
    class="fixed inset-0 z-50 overflow-y-auto"
    style="display: none;">
    <div class="flex items-center justify-center min-h-screen px-4">
        <div class="fixed inset-0 bg-black/50" @click="open = false"></div>
        <div x-show="open" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="relative bg-white rounded-xl shadow-xl {{ $maxWidth }} w-full p-0 overflow-hidden">
            <!-- Header -->
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-bold text-gray-900">{{ $title }}</h3>
                <button @click="open = false" class="text-gray-400 hover:text-gray-600 transition-colors">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <!-- Body -->
            <div class="px-6 py-4">
                {{ $slot }}
            </div>
            <!-- Footer -->
            @if ($submitLabel || isset($footer))
                <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-200 bg-gray-50">
                    @if (isset($footer))
                        {{ $footer }}
                    @else
                        <button type="button" @click="open = false"
                            class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                            {{ trans('general.cancel') }}
                        </button>
                        <button type="submit"
                            class="px-4 py-2 text-sm font-medium text-white bg-primary rounded-lg hover:bg-primary-dark transition-colors">
                            {{ $submitLabel ?? trans('general.save') }}
                        </button>
                    @endif
                </div>
            @endif
        </div>
    </div>
</div>
