@props([
    'title' => '',
    'status' => 'active',
    'statusLabel' => '',
    'balance' => null,
])

<div class="bg-white rounded-xl border border-gray-200 p-6 mb-6">
    <div class="flex items-start justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">{{ $title }}</h1>
            @if ($statusLabel)
                <div class="mt-2">
                    <x-ui.status-badge :status="$status" :label="$statusLabel" />
                </div>
            @endif
        </div>
        <div class="flex items-center gap-2">
            {{ $actions ?? '' }}
        </div>
    </div>
    @if ($balance !== null)
        <div class="mt-4 pt-4 border-t border-gray-100">
            <span class="text-sm text-gray-500">{{ trans('general.balance') ?? 'الرصيد' }}: </span>
            <span class="text-lg font-semibold text-gray-900">{{ number_format($balance) }}</span>
        </div>
    @endif
    {{ $slot ?? '' }}
</div>
