# Data Model: Dashboard Redesign

## 1. UI State Model (Alpine.js)

### 1.1 SidebarState

Stored as Alpine `x-data` on `<body>` in `app.blade.php`.

| Field | Type | Default | Persistence | Description |
|-------|------|---------|-------------|-------------|
| `sidebarPinned` | boolean | `false` | localStorage | User explicitly pinned sidebar open |
| `sidebarHover` | boolean | `false` | ephemeral | Mouse is hovering over sidebar |
| `sidebarMobileOpen` | boolean | `false` | ephemeral | Mobile off-canvas sidebar is open |
| `sidebarExpanded` | boolean (computed) | `false` | — | `sidebarPinned \|\| sidebarHover` |

### 1.2 SidebarSearch

Stored as Alpine `x-data` on `<aside>` in sidebar.

| Field | Type | Default | Description |
|-------|------|---------|-------------|
| `search` | string | `''` | Live search filter for nav items |

### 1.3 DashboardWidgets

Stored as Alpine component `dashboardWidgets()` in `dashboard.blade.php`.

| Field | Type | Default | Description |
|-------|------|---------|-------------|
| `loading` | boolean | `true` | Data fetching in progress |
| `error` | string\|null | `null` | Error message if fetch failed |
| `data.statCards` | StatCard[] | `[]` | Stat card data from API |
| `data.quickActions` | QuickAction[] | `[]` | Quick action links from API |
| `data.charts` | object | `{}` | Chart data (studentChart, revenueTrend) |
| `data.recentActivity` | ActivityEntry[] | `[]` | Recent activity entries |
| `data.permissions` | object | `{}` | User permission flags |
| `studentChart` | ApexCharts\|null | `null` | Student enrollment chart instance |
| `revenueChart` | ApexCharts\|null | `null` | Revenue trend chart instance |

---

## 2. API Response Models

### 2.1 DashboardWidgetsResponse

Returned by `GET /api/dashboard/widgets` (`HomeController::widgets()`).

```json
{
  "statCards": [ StatCard ],
  "quickActions": [ QuickAction ],
  "charts": {
    "studentChart": {
      "labels": ["Grade - Class A", "Grade - Class B"],
      "data": [25, 30]
    },
    "revenueTrend": {
      "labels": ["Jan 2026", "Feb 2026"],
      "data": [15000, 18000]
    }
  },
  "recentActivity": [ ActivityEntry ],
  "permissions": {
    "canViewStudents": true,
    "canViewParents": true,
    "canViewEmployees": false,
    "canViewFinancials": true
  }
}
```

### 2.2 StatCard

| Field | Type | Required | Description |
|-------|------|----------|-------------|
| `label` | string | yes | Display label (e.g., "Students") |
| `value` | string\|number | yes | Display value (e.g., 245 or "245") |
| `icon` | string | yes | Heroicon name |
| `color` | string | yes | Theme color key (blue, green, amber, red, purple, cyan) |
| `trend` | string\|null | no | Trend text (e.g., "+12%") |
| `trendDirection` | string\|null | no | "up" or "down" |
| `sparklineData` | number[]\|null | no | Data points for sparkline SVG |

### 2.3 QuickAction

| Field | Type | Required | Description |
|-------|------|----------|-------------|
| `route` | string | yes | Route name or path |
| `icon` | string | yes | Heroicon name |
| `label` | string | yes | Display label |
| `perm` | string\|null | no | Permission required to see this action |

### 2.4 ActivityEntry

| Field | Type | Required | Description |
|-------|------|----------|-------------|
| `icon` | string | yes | Heroicon name |
| `description` | string | yes | Human-readable activity description |
| `time` | string | yes | Relative time string (e.g., "2 hours ago") |

---

## 3. Blade Component Props

### 3.1 `<x-stat-card>`

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `color` | string | `'blue'` | Theme color key |
| `trend` | string\|null | `null` | Trend percentage text |
| `trendDirection` | string\|null | `null` | "up" or "down" |
| `sparklineData` | array\|null | `null` | Data for sparkline SVG |
| `sparklineColor` | string\|null | `null` | Sparkline color override |

### 3.2 `<x-smart-table>` (loading skeleton)

| Prop/Slot | Type | Default | Description |
|-----------|------|---------|-------------|
| `loading` | boolean | — | Show loading state |
| `loadingSkeleton` | slot | — | Custom skeleton content (default: 5 animated pulse rows) |

### 3.3 `<x-crud-modal>`

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `title` | string | — | Modal header title |
| `size` | string | `'lg'` | Modal size variant |
| `submitLabel` | string | `'Save'` | Submit button text |
| Default slot | slot | — | Form content body |

### 3.4 `<x-dropdown-table>`

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `buttonText` | string | — | Dropdown trigger label |
| `items` | array | — | Array of {label, route/action, perm, type} |

---

## 4. State Transitions

### 4.1 Sidebar State Machine

```
                    hover enter
  ┌──────────┐ ──────────────────> ┌───────────┐
  │ Collapsed │                     │ Temporary │
  │ (w-16)    │ <────────────────── │ Expanded  │
  └──────────┘    hover leave       │ (w-64)    │
       │                            └───────────┘
       │ pin click                       │ pin click
       v                                 v
  ┌──────────┐                     ┌───────────┐
  │ Pinned   │                     │ Pinned    │
  │ Collapsed│                     │ Expanded  │
  └──────────┘                     └───────────┘
       ^                                │
       └─── pin click ──────────────────┘
```

### 4.2 Mobile Sidebar

```
  ┌──────────┐  hamburger click  ┌───────────────┐
  │ Hidden   │ ────────────────> │ Visible       │
  │ (default)│                   │ (off-canvas)  │
  └──────────┘ <──────────────── └───────────────┘
                  backdrop click
                  or escape key
```

### 4.3 Dashboard Widget Load

```
  ┌──────────┐   mount/init    ┌───────────┐   axios.get()   ┌───────────┐
  │ Mounted  │ ───────────────> │ Loading   │ ──────────────> │ Loaded    │
  └──────────┘                  │ (skeleton)│                 │ (content) │
                                └───────────┘                 └───────────┘
                                     │                              │
                                     │ error                        │
                                     v                              │
                                ┌───────────┐                       │
                                │ Error     │ <─────────────────────┘
                                │ (message) │   refresh/retry
                                └───────────┘
```
