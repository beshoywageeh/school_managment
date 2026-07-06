# Contract: Base Layout

**Component**: `layouts/app.blade.php`
**Type**: Blade layout (not Livewire)

## Regions

```
┌───────────────┬────────────────────────────────┐
│   SIDEBAR     │          TOPBAR                │
│  (w-64)       ├────────────────────────────────┤
│               │                                │
│  Collapsible  │         CONTENT                │
│  nav groups   │        (@yield)                │
│  Active       │                                │
│  highlight    │                                │
│               │                                │
│  Scrolls      │     Scrolls independently      │
│  independent  │                                │
│               │                                │
└───────────────┴────────────────────────────────┘
```

## Sidebar (Livewire Component)

**Class**: `App\Http\Livewire\Components\Navigation\Sidebar.php`

**Props**:
- `navGroups: array` — `[{key, icon, label, items: [{label, url, route}]}]`

**State**: `open: object` — tracks which groups are expanded by key

**Events emitted**: None

**Events listened**: None

**States**: Active route highlighted via `request()->routeIs()`

## Topbar (Livewire Component)

**Class**: `App\Http\Livewire\Components\Navigation\Topbar.php`

**Props**:
- `moduleTitle: string`
- `brandColor: string` (CSS variable, default `#0f6db8`)

**State**: User name from `auth()->user()`

**Events emitted**: None

**States**: Desktop/mobile responsive — mobile hides sidebar, shows hamburger
