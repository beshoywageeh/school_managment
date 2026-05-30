@props(['padding' => true, 'header' => null])

<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
    @if ($header)
        <div class="px-6 py-4 border-b border-gray-100">
            {{ $header }}
        </div>
    @elseif (isset($title) || isset($action))
        <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center">
            @isset($title)
                <h4 class="text-lg font-semibold text-gray-800">{{ $title }}</h4>
            @endisset
            @isset($action)
                <div>{{ $action }}</div>
            @endisset
        </div>
    @endif

    <div class="{{ $padding ? 'p-6' : '' }}">
        {{ $slot }}
    </div>
</div>
