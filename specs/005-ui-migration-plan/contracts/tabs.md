# Contract: Tabs

**Component**: `livewire:ui.tabs`
**Class**: `App\Http\Livewire\Components\UI\Tabs.php`

## Interface

**Props**:
- `tabs: array` — `[{key: string, label: string, component?: string, columns?: array}]`
- `default: string` — key of initially active tab

**State** (Alpine `x-data`):
- `activeTab: string` — currently visible tab key
- `loadedTabs: object` — tracks which tabs have been loaded (for on-demand)

**Methods**:
- No Livewire methods needed — fully Alpine-managed

**Behavior**:
- Only the active tab's panel is visible (`x-show`)
- Content loads on demand (first activation only)
- Tab bar has bottom-border indicator on active tab
- Smooth transition on tab switch (`x-transition`)
- Lazy loading: `loadedTabs[tab.key]` set to `true` on first activation

**States**: Initial (first tab visible, others hidden) / Switched (on-demand)

**Accessibility**:
- Tab list: `<div role="tablist" aria-label="tabs">`
- Tab buttons: `<button role="tab" :aria-selected="activeTab === key" :aria-controls="'tabpanel-' + key" :tabindex="activeTab === key ? '0' : '-1'">`
- Tab panels: `<div role="tabpanel" :aria-labelledby="'tab-' + key" :id="'tabpanel-' + key">`
- Keyboard: Arrow Left/Right to switch tabs, Home/End to go to first/last
- Active tab: visual indicator (bottom border + primary color)
