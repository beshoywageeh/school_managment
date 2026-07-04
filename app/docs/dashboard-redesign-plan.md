# Dashboard Redesign Plan

**Date:** 2026-07-04
**Scope:** Full dashboard UX enhancement — visual refresh, collapsible mini sidebar, role-aware homepage, component standardization

---

## 1. Visual Foundation

### Color Palette
Define in `resources/css/variables.css` and expose via Tailwind v4 `@theme` in `app.css`:

```css
@theme {
  --color-primary: #2563eb;
  --color-primary-dark: #1d4ed8;
  --color-surface: #ffffff;
  --color-muted: #f8fafc;
  --color-border: #e2e8f0;
  --color-text-primary: #0f172a;
  --color-text-secondary: #64748b;
  --color-success: #16a34a;
  --color-danger: #dc2626;
  --color-warning: #d97706;
  --color-info: #0284c7;
}
```

### Cards
Standardize across all views:
```html
<div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6">
```

### Buttons
- Replace gradient quick-action cards with solid colored cards with icon + label
- Keep `<x-button>` component variants but refresh colors to match palette

### Typography
- Nunito font (already loaded)
- Heading hierarchy: `text-2xl font-bold` → `text-xl font-bold` → `text-lg font-bold`
- Body: `text-sm text-gray-600`
- Labels: `text-xs font-medium text-gray-500`

### Spacing
- Page padding: `p-6`
- Between cards: `gap-6`
- Card inner padding: `p-6`
- Stack spacing: `space-y-6`

---

## 2. Collapsible Mini Sidebar

### Files affected
- `resources/views/layouts/sidebar.blade.php` — rewrite
- `resources/views/layouts/app.blade.php` — update sidebar reference + wrapper margins
- `resources/views/layouts/header.blade.php` — update hamburger behavior

### State management (Alpine.js on `<body>`)
```js
{
  sidebarPinned: false,
  sidebarHover: false,
  get sidebarExpanded() {
    return this.sidebarPinned || this.sidebarHover;
  }
}
```

### Default state: icon-only (64px)
- Only icons visible, labels hidden
- Tooltips on hover for icon-only items via `title` attribute or Alpine tooltip
- Width: `w-16`, transition to `w-64` when expanded

### Expanded state
- Triggered by: hover (temporary) or pin click (permanent)
- All labels visible
- Section headers visible
- Pin icon in sidebar footer to lock open

### Nav search
- Search input at top: `<input x-model="search" placeholder="بحث..." class="..." />`
- Alpine computed filter: `filteredItems()` that matches item label against search
- Sections with no matching items get hidden

### Active state
- Pill highlight with left accent bar (3px `border-s-3 border-primary`)
- `bg-primary/10 text-primary` background + text

### Sections (keep existing groups)
- Dashboard, Student Info, Employee Info, Accounting, Grades Setting, Stores, Security, Reports
- Cleaner dividers: `border-b border-gray-800/20` (or `border-gray-200` for light)
- Section headers: `text-xs font-semibold text-gray-400 uppercase tracking-wider`

### Mobile
- Off-canvas overlay: full-width sidebar slides from `start-0`, backdrop with `bg-black/50`
- Toggle via hamburger button in header
- Close on backdrop click (`@click.self`)
- Width: `w-72` (full, not mini)

### Transition
```css
.sidebar { transition: width 300ms ease; }
```

---

## 3. Dashboard Homepage

### Files affected
- `resources/views/dashboard.blade.php` — rewrite
- `app/Http/Controllers/HomeController.php` — add API endpoint for widgets
- `routes/web.php` or `routes/api.php` — add widget endpoint

### Role-aware widgets
- New route: `GET /api/dashboard/widgets` returns JSON based on user role:
  - **Admin:** Financial KPIs (total invoiced, paid, pending), student/employee counts
  - **Teacher:** Class rosters, schedule today, pending tasks
  - **Accountant:** Fee collection stats, payment parts, exchange bonds
- Alpine `x-init` fetches data, renders appropriate widgets

### Stat cards (polished)
- `<x-stat-card>` gets optional `:trend`, `:sparkline-data`, `:icon-color` props
- Sparkline: 30px tall `<canvas>` drawn with native JS — simple green/red line
- Trend indicator: `▲ +12%` green or `▼ -3%` red
- Layout: `grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6`

### Quick actions
- Colored cards (solid, no gradient) with `<x-hero-icon>` + label
- Each routes to a create page
- Horizontally scrollable on mobile: `flex overflow-x-auto gap-4`

### Charts
- Keep ApexCharts for existing line chart (student numbers)
- Restore accounting chart (ApexCharts bar)
- Wrap charts in a reactive Alpine component that calls `chart.resize()` on sidebar toggle (watches `sidebarExpanded`)

### Recent activity
- New widget: last 5 system actions
- Backend: lightweight activity log query (created_at, description, user, icon)
- Alpine fetches and renders as a vertical timeline list

### Page layout
```
[Stat Card] [Stat Card] [Stat Card] [Stat Card]    ← grid-cols-4
[Quick Actions - horizontal scroll row]
[Chart (line)]            [Chart (bar)]             ← grid-cols-2
[Recent Activity]
```

---

## 4. Component Standardization

### Smart-table loading skeleton
- Add `loading-skeleton` slot to `<x-smart-table>`
- 5 rows of animated pulse: `<div class="h-10 bg-gray-200 rounded animate-pulse" />`
- Replace all "Loading..." text instances with skeleton

### Form input audit
- Find all raw `<input>`, `<select>`, `<textarea>` in backend views
- Replace with `<x-input>`, component equivalents
- Ensure consistent: label → input → error → hint

### Extract `<x-crud-modal>`
- Inventory views duplicate modal markup for create/edit
- New component: `<x-crud-modal :title :size>` with `form` slot
- Standardized: header (title + close), body (form slot), footer (cancel + submit)

### Dropdown actions consistency
- Audit all table action columns
- Replace inline button groups with `<x-dropdown-table>`

---

## 5. Mobile Responsiveness

- Sidebar: off-canvas overlay on `< lg` breakpoints
- Stat cards: stack to single column on mobile (`grid-cols-1`)
- Charts: stack vertically on mobile
- Quick actions: horizontal scrollable row
- Tables: horizontal scroll wrapper (`overflow-x-auto`) on mobile
- Modals: full-screen on mobile (`max-w-full m-0 h-full rounded-none`)

---

## 6. Implementation Order

1. **Visual Foundation** — Update `variables.css`, `app.css` with new palette, update card/button styles globally
2. **Sidebar** — Rewrite sidebar with mini/collapsible state, search, mobile off-canvas
3. **Layout adjustments** — Update `app.blade.php` wrapper margins to work with mini sidebar
4. **Component standardization** — CRUD modal, smart-table skeleton, dropdown audit, form audit
5. **Dashboard homepage** — Stat card refresh, role-aware widgets, quick actions, charts, activity feed
6. **Cross-view polish** — Audit remaining pages for consistency
