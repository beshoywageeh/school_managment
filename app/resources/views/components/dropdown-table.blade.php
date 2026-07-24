@props([
    'buttonText' => 'Actions',
    'items' => [],
])

<div class="relative inline-block" x-data="{ open: false }" x-on:click.outside="open = false">

    <button type="button" x-on:click="open = !open" :aria-expanded="open"
        class="inline-flex items-center gap-1.5 h-8 px-3 bg-green-600 hover:bg-green-700 active:bg-green-800 text-white text-sm font-medium rounded-lg transition-colors select-none cursor-pointer">
        {{ $buttonText }}
        <svg x-bind:class="open ? 'rotate-180' : ''" class="w-3.5 h-3.5 transition-transform duration-200" fill="none"
            stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    <div x-show="open" x-transition
        class="absolute right-0 mt-1 min-w-[180px] bg-white border-gray-200 rounded-xl z-50 p-1 origin-top-right shadow-lg"
        style="display: none;">

        @if ($slot->isNotEmpty())
            {{ $slot }}
        @else
            @foreach ($items as $item)
                @can($item['can'] ?? '')
                    @php
                        $isDanger =
                            str_contains($item['className'] ?? '', 'danger') ||
                            str_contains($item['className'] ?? '', 'delete') ||
                            str_contains($item['className'] ?? '', 'red');
                    @endphp

                    @if (($item['type'] ?? 'link') === 'delete')
                        <form action="{{ $item['url'] }}" method="POST" class="w-full" x-on:submit="open = false">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                @if (isset($item['onclick'])) onclick="{{ $item['onclick'] }}" @endif
                                class="w-full flex items-center gap-2 px-3 py-2 text-sm rounded-lg text-right transition-colors
                                    {{ $isDanger ? 'text-red-600 hover:bg-red-50' : 'text-gray-700 hover:bg-gray-50' }}
                                    {{ $item['className'] ?? '' }}">
                                @if (isset($item['icon']))
                                    <x-hero-icon name="{{ $item['icon'] }}"
                                        class="w-5 h-5 {{ $isDanger ? 'text-red-500' : 'text-gray-400' }}" />
                                @endif
                                {{ $item['text'] }}
                            </button>
                        </form>
                    @elseif (($item['type'] ?? 'link') === 'button')
                        <button type="button" x-on:click="open = false"
                            @if (isset($item['id'])) id="{{ $item['id'] }}" @endif
                            @if (isset($item['onclick'])) onclick="{{ $item['onclick'] }}" @endif
                            @if (isset($item['target'])) data-target="{{ $item['target'] }}" @endif
                            class="w-full flex items-center gap-2 px-3 py-2 text-sm rounded-lg text-right transition-colors
                                {{ $isDanger ? 'text-red-600 hover:bg-red-50' : 'text-gray-700 hover:bg-gray-50' }}
                                {{ $item['className'] ?? '' }}">
                            @if (isset($item['icon']))
                                <x-hero-icon name="{{ $item['icon'] }}"
                                    class="w-5 h-5 {{ $isDanger ? 'text-red-500' : 'text-gray-400' }}" />
                            @endif
                            {{ $item['text'] }}
                        </button>
                    @else
                        <a href="{{ $item['url'] }}" x-on:click="open = false"
                            @if (isset($item['id'])) id="{{ $item['id'] }}" @endif
                            @if (isset($item['onclick'])) onclick="{{ $item['onclick'] }}" @endif
                            @if (isset($item['target'])) target="{{ $item['target'] }}" @endif
                            class="flex items-center gap-2 px-3 py-2 text-sm rounded-lg transition-colors
                                {{ $isDanger ? 'text-red-600 hover:bg-red-50' : 'text-gray-700 hover:bg-gray-50' }}
                                {{ $item['className'] ?? '' }}">
                            @if (isset($item['icon']))
                                <x-hero-icon name="{{ $item['icon'] }}"
                                    class="w-5 h-5 {{ $isDanger ? 'text-red-500' : 'text-gray-400' }}" />
                            @endif
                            {{ $item['text'] }}
                        </a>
                    @endif

                    @if ($isDanger)
                        <div class="h-px bg-gray-100 my-1 -mx-1"></div>
                    @endif
                @endcan
            @endforeach
        @endif
    </div>
</div>
