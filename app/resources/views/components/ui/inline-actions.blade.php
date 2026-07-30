@props([
    'actions' => [],
    'rowId' => null,
])

<div class="flex items-center gap-1">
    @php
        $primaryActions = array_filter($actions, fn ($a) => ! isset($a['secondary']) || ! $a['secondary']);
        $secondaryActions = array_filter($actions, fn ($a) => isset($a['secondary']) && $a['secondary']);
    @endphp

    @foreach ($primaryActions as $action)
        @if (! isset($action['permission']) || auth()->user()->can($action['permission']))
            <button type="button"
                wire:click="performAction({{ $rowId }}, '{{ $action['action'] }}')"
                wire:loading.attr="disabled"
                wire:target="performAction({{ $rowId }}, '{{ $action['action'] }}')"
                aria-label="{{ $action['label'] }}"
                class="p-1.5 rounded-lg transition-colors
                    {{ $action['variant'] ?? 'text-gray-600 hover:text-primary hover:bg-primary/10' }}
                    @if (($action['variant'] ?? '') === 'danger') text-danger hover:bg-danger/10
                    @elseif (($action['variant'] ?? '') === 'success') text-success hover:bg-success/10
                    @else text-gray-600 hover:text-primary hover:bg-primary/10
                    @endif"
                title="{{ $action['label'] }}">
                @if (isset($action['icon']))
                    <x-hero-icon name="{{ $action['icon'] }}" class="w-5 h-5" />
                @else
                    <span class="text-sm font-medium">{{ $action['label'] }}</span>
                @endif
            </button>
        @endif
    @endforeach

    @if (count($secondaryActions) > 0)
        <div class="relative" x-data="{ open: false }" x-on:click.outside="open = false">
            <button type="button"
                x-on:click="open = !open"
                :aria-expanded="open"
                aria-label="{{ trans('general.more_actions') }}"
                class="p-1.5 rounded-lg text-gray-400 hover:text-gray-600 hover:bg-gray-100 transition-colors">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 3a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM10 8.5a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM10 14a1.5 1.5 0 110 3 1.5 1.5 0 010-3z" />
                </svg>
            </button>
            <div x-show="open"
                x-transition:enter="transition ease-out duration-100"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                class="absolute left-0 mt-1 min-w-[160px] bg-white border border-gray-200 rounded-xl z-50 p-1 shadow-lg origin-top-left"
                style="display: none;">
                @foreach ($secondaryActions as $action)
                    @if (! isset($action['permission']) || auth()->user()->can($action['permission']))
                        <button type="button"
                            wire:click="performAction({{ $rowId }}, '{{ $action['action'] }}')"
                            wire:loading.attr="disabled"
                            wire:target="performAction({{ $rowId }}, '{{ $action['action'] }}')"
                            x-on:click="open = false"
                            aria-label="{{ $action['label'] }}"
                            class="w-full flex items-center gap-2 px-3 py-2 text-sm rounded-lg text-right transition-colors
                                {{ ($action['variant'] ?? '') === 'danger' ? 'text-danger hover:bg-danger/10' : 'text-gray-700 hover:bg-gray-50' }}">
                            @if (isset($action['icon']))
                                <x-hero-icon name="{{ $action['icon'] }}"
                                    class="w-4 h-4 {{ ($action['variant'] ?? '') === 'danger' ? 'text-danger' : 'text-gray-400' }}" />
                            @endif
                            {{ $action['label'] }}
                        </button>
                    @endif
                @endforeach
            </div>
        </div>
    @endif
</div>
