@props([
    'can' => null,
    'titleButton' => '',
    'title' => '',
    'id' => '',
    'icon' => '',
    'class' => '',
    'variant' => 'success', // success, danger, info
    'size' => 'md', // المقاسات المتاحة: sm, md, lg, xl, 2xl, max
])

@php
    // 1. إعداد الألوان الديناميكية
    $colors = [
        'success' => [
            'btn' => 'bg-success hover:bg-success/90 text-white',
            'icon' => 'text-success',
            'bg' => 'bg-success/10',
        ],
        'danger' => ['btn' => 'bg-danger hover:bg-danger/90 text-white', 'icon' => 'text-danger', 'bg' => 'bg-danger/10'],
        'info' => [
            'btn' => 'bg-primary hover:bg-primary/90 text-white',
            'icon' => 'text-primary',
            'bg' => 'bg-primary/10',
        ],
        'warning' => [
            'btn' => 'bg-warning hover:bg-warning/90 text-white',
            'icon' => 'text-warning',
            'bg' => 'bg-warning/10',
        ],
    ][$variant] ?? [
        'btn' => 'bg-success hover:bg-success/90 text-white',
        'icon' => 'text-success',
        'bg' => 'bg-success/10',
    ];

    // 2. إعداد المقاسات الديناميكية للمودال
    $sizes =
        [
            'sm' => 'max-w-sm', // 384px (مناسب للتنبيهات أو الحذف)
            'md' => 'max-w-md', // 448px (المقاس الافتراضي - فورم بسيطة)
            'lg' => 'max-w-lg', // 512px
            'xl' => 'max-w-xl', // 576px (فورم متوسطة)
            '2xl' => 'max-w-2xl', // 672px (فورم كبيرة أو تقسيم خانات بجانب بعض)
            'max' => 'max-w-4xl', // 896px (جداول أو بيانات ضخمة)
        ][$size] ?? 'max-w-md';
@endphp

<div x-data="{ open: false }" x-on:keydown.escape.window="open = false" class="inline-block">

    {{-- 1. زرار الفتح --}}
    @if (empty($can) || auth()->user()?->can($can))
        @if ($titleButton)
            <button x-on:click="open = true" type="button"
                class="flex items-center gap-2 px-4 py-2 text-white text-sm font-medium rounded-xl transition-colors {{ $colors['btn'] }}">
                @if ($icon)
                    <x-hero-icon name="{{ $icon }}" class="w-4 h-4 text-current" />
                @endif
                {{ $titleButton }}
            </button>
        @else
            <button x-on:click="open = true" type="button"
                class="p-2 rounded-lg transition-colors {{ $colors['icon'] }} {{ $colors['bg'] }} {{ $class }}"
                title="{{ $title ?: trans('general.edit') }}">
                @if ($icon)
                    <x-hero-icon name="{{ $icon }}" class="w-5 h-5" />
                @endif
            </button>
        @endif
    @endif

    {{-- 2. المودال والـ Backdrop --}}
    <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-50 flex items-stretch lg:items-center justify-center bg-black/50 lg:p-4"
        x-on:click.self="open = false" style="display: none;">

        {{-- تم تغيير كلاس العرض الثابت واستبداله بمتغير الـ $sizes المندمج مع كلاسات التجاوب --}}
        <div x-show="open" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            class="bg-white shadow-xl w-full overflow-hidden transition-all max-w-full m-0 h-full lg:h-auto rounded-none lg:rounded-xl lg:{{ $sizes }} lg:m-0">

            {{-- الهيدر --}}
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
                <div class="flex items-center gap-2">
                    @if ($icon)
                        <div class="w-8 h-8 rounded-lg flex items-center justify-center {{ $colors['bg'] }}">
                            <x-hero-icon name="{{ $icon }}" class="w-4 h-4 {{ $colors['icon'] }}" />
                        </div>
                    @endif
                    <h6 class="text-base font-medium text-gray-900">
                        {{ $title }} {{ $titleButton ? '| ' . $titleButton : '' }}
                    </h6>
                </div>
                <button x-on:click="open = false" type="button"
                    class="w-7 h-7 flex items-center justify-center rounded-lg border border-gray-200 text-gray-400 hover:text-gray-600 hover:bg-gray-50 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            {{-- محتوى المودال --}}
            <div class="px-6 py-4 max-h-[75vh] overflow-y-auto"> {{-- إضافة سكرول داخلي لو محتوى الفورم طويل جداً --}}
                {{ $slot }}
            </div>

            {{-- الفوتر --}}
            <div class="flex items-center justify-end gap-2 px-6 py-4 border-t border-gray-100 bg-gray-50/50">
                @if (isset($footer))
                    {{ $footer }}
                @else
                    <button type="button" x-on:click="open = false"
                        class="h-9 px-4 text-sm text-gray-600 rounded-lg border border-gray-200 hover:bg-gray-50 transition-colors">
                        {{ trans('general.Cancel') }}
                    </button>

                    @if ($id)
                        <button type="button"
                            x-on:click="document.getElementById('{{ $id }}').submit(); open = false;"
                            class="h-9 px-4 text-sm font-medium text-white rounded-lg transition-colors flex items-center gap-1.5 {{ $colors['btn'] }}">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            {{ trans('general.Submit') }}
                        </button>
                    @endif
                @endif
            </div>

        </div>
    </div>
</div>
