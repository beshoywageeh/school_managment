@props([
    'title' => '',
])

<div>
    <x-ui.page-header :title="$title" module="default">
        <x-slot:actions>
            {{ $actions ?? '' }}
        </x-slot:actions>
    </x-ui.page-header>

    <div class="p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            {{ $slot }}
        </div>
    </div>
</div>
