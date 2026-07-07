@props([
    'title' => '',
    'name' => 'modal',
])

<div x-data="useModal()"
    x-on:open-modal.window="if ($event.detail?.name === '{{ $name }}') openModal($event)"
    x-on:close-modal.window="if ($event.detail?.name === '{{ $name }}' || !$event.detail?.name) closeModal()"
    x-show="open"
    x-cloak
    {{ $attributes->merge(['class' => 'fixed inset-0 z-50 overflow-y-auto']) }}
    role="dialog"
    :aria-labelledby="'modal-title-' + name"
    aria-modal="true"
    x-trap.noscroll="open"
    @keydown="handleKeydown">
    {{-- Backdrop --}}
    <div class="fixed inset-0 bg-black/50" @click="closeModal()" aria-hidden="true"></div>

    {{-- Modal Panel --}}
    <div x-show="open"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        class="relative bg-white rounded-xl shadow-xl max-w-lg w-full mx-auto mt-16 mb-8 overflow-hidden"
        @click.away="closeModal()">
        {{-- Header --}}
        <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200">
            <h3 :id="'modal-title-' + name" class="text-lg font-semibold text-gray-900">
                {{ $title }}
            </h3>
            <button type="button" @click="closeModal()"
                class="p-1 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100 transition-colors"
                aria-label="إغلاق">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        {{-- Body --}}
        <div class="px-6 py-4 max-h-[60vh] overflow-y-auto">
            {{ $slot }}
        </div>
        {{-- Footer --}}
        @if (isset($footer))
            <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-200 bg-gray-50">
                {{ $footer }}
            </div>
        @endif
    </div>
</div>
