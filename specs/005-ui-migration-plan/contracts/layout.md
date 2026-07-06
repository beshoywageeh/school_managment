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

**Class**: `App\Livewire\Components\Navigation\Sidebar.php`

**Props**:
- `navGroups: array` — `[{key, icon, label, items: [{label, url, route, permission: ?string}], permission: ?string}]`
- `currentUser: User` (injected via auth)

**State**: `open: object` — tracks which groups are expanded by key

**Events emitted**: None

**Events listened**: None

**States**: Active route highlighted via `request()->routeIs()`

**Role awareness**:
- `navGroups` are filtered server-side: a group/item is rendered only if the user has the required `permission` (or if no permission is required).
- Dashboard widgets and module links visible only per user's role/permissions.

**Accessibility**:
- Sidebar nav: `<nav role="navigation" aria-label="القائمة الرئيسية">`
- Nav items: `<a role="menuitem">` with `aria-current="page"` when active
- Collapsible groups: `role="button"`, `aria-expanded="true|false"`, `aria-controls="group-{key}"`
- Focus: visible `focus-visible:ring-2` on all interactive items
- Keyboard: Arrow keys to navigate items within a group, Enter/Space to activate

## Topbar (Livewire Component)

**Class**: `App\Livewire\Components\Navigation\Topbar.php`

**Props**:
- `moduleTitle: string`
- `brandColor: string` (CSS variable, default `#0f6db8`)

**State**: User name from `auth()->user()`

**Events emitted**:
- `toggle-sidebar-mobile` — dispatched on hamburger click for mobile drawer

**States**: Desktop/mobile responsive — mobile hides sidebar, shows hamburger

**Accessibility**:
- Topbar: `<header role="banner">`
- Hamburger button: `aria-label="فتح القائمة"` / `"إغلاق القائمة"`, `aria-expanded`
- User menu: `role="menu"`, items with `role="menuitem"`
