# Contract: Tabs

**Component**: `livewire:ui.tabs`
**Class**: `App\Http\Livewire\Components\UI\Tabs.php`

## Interface

**Props**:
- `tabs: array` — `{key: string, label: string, component: ?string}`
- `default: string` — key of initially active tab
- `recordId: int|string` — parent record identifier

**State**:
- `activeTab: string` — currently visible tab key

**Methods**:
- `switchTab(string $key): void` — update active tab, lazy-load content

**Behavior**:
- Only the active tab's component is rendered (lazy)
- Tab bar has underline indicator on active tab
- Smooth transition on tab switch (`x-transition`)

**States**: Initial (first tab loaded) / Switched (on-demand load per tab)
