@props([
    'tabs' => [],
    'default' => null,
])

<div x-data="{
    activeTab: '{{ $default ?? (count($tabs) > 0 ? $tabs[0]['key'] : '') }}',
    loadedTabs: {},
    tabLabels: {{ json_encode($tabs) }},
}"
    {{ $attributes->merge(['class' => 'w-full']) }}
    role="tablist"
    aria-label="tabs">
    {{-- Tab Headers --}}
    <div class="flex border-b border-gray-200 overflow-x-auto">
        @foreach ($tabs as $tab)
            <button type="button"
                x-on:click="activeTab = '{{ $tab['key'] }}'; loadedTabs['{{ $tab['key'] }}'] = true"
                :class="{ 'border-b-2 border-primary text-primary font-semibold': activeTab === '{{ $tab['key'] }}', 'text-gray-500 hover:text-gray-700': activeTab !== '{{ $tab['key'] }}' }"
                class="px-4 py-3 text-sm font-medium whitespace-nowrap transition-colors"
                role="tab"
                :aria-selected="activeTab === '{{ $tab['key'] }}'"
                :aria-controls="'tabpanel-{{ $tab['key'] }}'"
                :tabindex="activeTab === '{{ $tab['key'] }}' ? '0' : '-1'"
                x-on:keydown.arrow-right.prevent="
                    const keys = tabLabels.map(t => t.key);
                    const idx = keys.indexOf(activeTab);
                    if (idx < keys.length - 1) activeTab = keys[idx + 1]; loadedTabs[activeTab] = true;
                "
                x-on:keydown.arrow-left.prevent="
                    const keys = tabLabels.map(t => t.key);
                    const idx = keys.indexOf(activeTab);
                    if (idx > 0) activeTab = keys[idx - 1]; loadedTabs[activeTab] = true;
                ">
                {{ $tab['label'] }}
            </button>
        @endforeach
    </div>

    {{-- Tab Content --}}
    @foreach ($tabs as $tab)
        <div x-show="activeTab === '{{ $tab['key'] }}'"
            x-cloak
            x-init="loadedTabs['{{ $tab['key'] }}'] = true"
            :id="'tabpanel-{{ $tab['key'] }}'"
            role="tabpanel"
            :aria-labelledby="'tab-{{ $tab['key'] }}'"
            class="py-4">
            {{ ${$tab['key']} ?? $slot ?? '' }}
        </div>
    @endforeach
</div>
