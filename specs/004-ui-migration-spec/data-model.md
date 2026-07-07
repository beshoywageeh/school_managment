# Data Model: UI Migration — Daftra-Style ERP Redesign

**Phase 1 Design Output** — Defines Blade component props, Alpine state contracts, and layout structure.

## Blade Component Library

### `<x-ui.layout>` — App Layout Shell (`resources/views/layouts/app.blade.php`)

| Slot | Description |
|------|-------------|
| `sidebar` | Navigation sidebar (right side, collapsible groups) |
| `topbar` | Top header bar with user info and actions |
| `content` | Main content area |

**Props**: None (uses slot-based composition).

**Alpine State**: `sidebarOpen` (boolean, controls mobile drawer), `activeGroup` (string|null, tracks expanded nav group).

---

### `<x-ui.card>` — Settings Hub Tile

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `icon` | string | required | Icon class/name |
| `label` | string | required | Display label text |
| `href` | string | required | Click target URL |
| `active` | bool | false | Whether card has green border highlight |

**Alpine State**: None (pure render).

---

### `<x-ui.button>` — Action Button

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `variant` | string | `'primary'` | One of: `primary`, `secondary`, `danger` |
| `icon` | string | `null` | Optional icon class |
| `type` | string | `'button'` | HTML button type attribute |
| `disabled` | bool | `false` | Disabled state |

**Slot**: Default slot for button text.

---

### `<x-ui.status-badge>` — Status Indicator

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `status` | string | required | One of: `active`, `inactive`, `excluded`, `primary` |
| `label` | string | required | Display text |

**Color mapping**:
| Status  | Dot Color | Arabic Example |
|---------|-----------|----------------|
| active  | Green | نشط / مطابق |
| inactive | Gray | غير نشط |
| excluded | Red | مستبعد / غير مطابق |
| primary | Blue | أساسي |

---

### `<x-ui.data-table>` — Data Table

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `endpoint` | string | required | JSON API URL for fetching data |
| `columns` | array | required | `[{key: string, label: string, sortable: bool}]` |
| `per-page` | int | `15` | Rows per page |

**Slots**:
| Slot | Description |
|------|-------------|
| `filters` | Filter inputs rendered above table |
| `actions` | Per-row action buttons (receives `row` scope) |

**Alpine State**: `dataTable()` component.
```js
{
  rows: [],              // Current page data array
  loading: false,        // Loading indicator
  currentPage: 1,        // Current page number
  lastPage: 1,           // Total pages
  total: 0,              // Total records
  from: 0,               // Current page start record
  to: 0,                 // Current page end record
  sortField: null,       // Currently sorted column key
  sortDirection: 'asc',  // 'asc' or 'desc'
  filters: {},           // Active filter key-value pairs
  error: null            // Error message string
}
```

**Methods**:
| Method | Signature | Description |
|--------|-----------|-------------|
| `init()` | `() => void` | Fetch first page on mount |
| `fetchPage(url?)` | `(url?: string) => Promise` | Fetch given page URL or current page |
| `sort(field)` | `(field: string) => void` | Toggle sort on field, re-fetch |
| `applyFilters()` | `() => void` | Apply current filters, reset to page 1 |
| `refresh()` | `() => void` | Re-fetch current page (after CRUD) |

---

### `<x-ui.modal>` — Modal Dialog

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `title` | string | required | Modal header title |

**Slots**:
| Slot | Description |
|------|-------------|
| `default` | Modal body content (typically form) |
| `footer` | Modal footer (typically action buttons) |

**Events**:
| Event | Description |
|-------|-------------|
| `open-modal` | Dispatch on any element to open modal (detail: `{name: string}`) |
| `close-modal` | Dispatch to close modal |

**Alpine State**:
```js
{
  open: false,           // Visibility state
  name: '',              // Modal identifier (for multi-modal pages)
  focusableElements: [], // Focus-trap query results
  previousFocus: null    // Element that triggered open, for focus return
}
```

---

### `<x-ui.tabs>` — Tabbed Interface

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `tabs` | array | required | `[{key: string, label: string}]` |
| `default` | string | first key | Initially active tab key |

**Alpine State**:
```js
{
  activeTab: '',         // Currently active tab key
  loadedTabs: {}         // Tracks which tabs have been lazy-loaded
}
```

---

## Alpine.js Stores

### Toast Store (`resources/js/Stores/toast.js`)

```js
Alpine.store('toast', {
  show: false,
  message: '',
  type: 'error',       // 'error' | 'success' | 'warning' | 'info'
  timeout: null,

  show(message, type = 'error', duration = 5000) { ... },
  hide() { ... }
})
```

---

## Layout Structure

```
┌────────────────────────────────────────────┐
│ Top Header Bar                             │
│ [Logo] [Module Title]    [User] [🔔] [⚙️]  │
├────────────┬───────────────────────────────┤
│ Sidebar    │ Main Content Area             │
│ (right)    │                               │
│            │  ┌─────────────────────────┐  │
│ Group 1 ▼  │  │ Page Header    [Button] │  │
│  • Item 1  │  ├─────────────────────────┤  │
│  • Item 2  │  │ [Filter Panel]          │  │
│ Group 2 ▼  │  │ ┌─────────────────────┐ │  │
│  • Item 3  │  │ │ Data Table          │ │  │
│            │  │ │                     │ │  │
│            │  │ └─────────────────────┘ │  │
│            │  │ Pagination: < 1-10 >    │  │
│            │  └─────────────────────────┘  │
└────────────┴───────────────────────────────┘
```

### Responsive Breakpoints

| Breakpoint | Width | Sidebar Behavior |
|------------|-------|------------------|
| Desktop | ≥768px | Fixed right sidebar visible |
| Mobile | <768px | Sidebar hidden off-canvas, hamburger toggle |
