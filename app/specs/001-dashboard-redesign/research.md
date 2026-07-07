# Research Findings: Dashboard Redesign

## 1. Current State vs. Spec Requirements

### 1.1 Visual Foundation

| Req | Status | Finding |
|-----|--------|---------|
| VF-1 | ✅ **Already done** | Color palette defined in `resources/css/app.css` via `@theme` AND in `resources/css/variables.css` — matches spec exactly |
| VF-2 | ⚠️ **Partial** | Dashboard cards already use standardized classes; need to audit other backend views |
| VF-3 | ⚠️ **Partial** | Dashboard uses `text-2xl font-bold` for title; other views need audit |
| VF-4 | ⚠️ **Needs audit** | Button standardization audit required — ensure all buttons across backend views follow Tailwind class patterns (primary: `px-4 py-2 bg-primary text-white rounded-lg text-sm font-medium`, secondary/danger variants) |
| VF-5 | ⚠️ **Needs audit** | Input field Tailwind class consistency audit — ensure all `<x-input>`, `<x-select>`, `<x-textarea>` use `w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-primary focus:ring-1 focus:ring-primary` |

### 1.2 Collapsible Mini Sidebar

All sidebar requirements are **already implemented** in `resources/views/layouts/sidebar.blade.php`:

| Req | Status | Finding |
|-----|--------|---------|
| SB-1 | ✅ | `w-16` default (icon-only), labels hidden with `x-show="sidebarExpanded"` |
| SB-2 | ✅ | `transition-all duration-300` on `<aside>`, full expansion on hover |
| SB-3 | ✅ | Pin button with localStorage persistence, `sidebarPinned` toggle |
| SB-4 | ✅ | Search input with Alpine `x-model="search"` and `x-show` filtering |
| SB-5 | ✅ | `border-s-3 border-primary bg-primary/10 text-primary` on active items |
| SB-6 | ✅ | `text-xs font-semibold text-gray-400 uppercase tracking-wider` on section headers |
| SB-7 | ✅ | All 8 sections present |
| SB-8 | ✅ | Mobile off-canvas with `bg-black/50` backdrop, `sidebarMobileOpen` toggle |
| SB-9 | ⚠️ **Missing** | No `title` attribute or Alpine tooltip on icon-only items |

### 1.3 Dashboard Homepage

| Req | Status | Finding |
|-----|--------|---------|
| DH-1 | ✅ | Role-aware counts via `getUserRoleCounts()` in `HomeController` |
| DH-2 | ⚠️ **Partial** | Inline stat card template in `dashboard.blade.php` supports trend/sparkline; widget API doesn't send real trend data |
| DH-3 | ✅ | `grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6` |
| DH-4 | ✅ | Solid white cards with icon, no gradients |
| DH-5 | ⚠️ **Missing** | Quick actions use `flex flex-wrap gap-4`, not `overflow-x-auto` mobile scroll |
| DH-6 | ✅ | ApexCharts line + bar charts rendered |
| DH-7 | ❌ **Missing** | Charts don't watch `sidebarExpanded` for resize |
| DH-8 | ✅ | Recent activity timeline with description + time |
| DH-9 | ✅ | `GET /api/dashboard/widgets` route exists (`dashboard.widgets` named route) |

### 1.4 Component Standardization

| Req | Status | Finding |
|-----|--------|---------|
| CS-1 | ✅ | Smart-table already has 5-row skeleton loading state |
| CS-2 | ⚠️ **Partial** | Need to audit backend views for raw `<input>/<select>/<textarea>` |
| CS-3 | ✅ | `<x-crud-modal>` already extracted |
| CS-4 | ✅ | `<x-dropdown-table>` already exists |

### 1.5 Mobile Responsiveness

| Req | Status | Finding |
|-----|--------|---------|
| MR-1 | ✅ | Mobile sidebar off-canvas with backdrop |
| MR-2 | ⚠️ **Partial** | `<x-modal>` supports `max` size (896px) but no explicit full-screen mobile variant |
| MR-3 | ⚠️ **Partial** | Smart-table may already handle mobile scroll; other tables need audit |

---

## 2. Technology Stack Verification

| Technology | Version | Status |
|------------|---------|--------|
| Tailwind CSS v4 | v4 | Confirmed — `@import "tailwindcss"` + `@theme` in app.css |
| Alpine.js | v3 | Confirmed — used for sidebar, dashboard, modals, dropdowns |
| ApexCharts | — | Confirmed — used for dashboard charts |
| Axios | — | Confirmed — used for widget AJAX calls |
| Heroicons | — | Confirmed — `<x-hero-icon>` component exists |

---

## 3. Key Architecture Decisions

### 3.1 Sidebar State Management
- **Location**: Alpine `x-data` on `<body>` in `app.blade.php`
- **States**: `sidebarPinned` (boolean, persisted via localStorage), `sidebarHover` (boolean, ephemeral), `sidebarMobileOpen` (boolean)
- **Computed**: `sidebarExpanded` returns `sidebarPinned || sidebarHover`
- **Margin**: Main content uses `lg:ms-64` when expanded, `lg:ms-16` when collapsed

### 3.2 Dashboard Widget Data Flow
- **Frontend**: Alpine `dashboardWidgets()` component calls `axios.get(route('dashboard.widgets'))`
- **Backend**: `HomeController::widgets()` returns JSON with `statCards`, `quickActions`, `charts`, `recentActivity`, `permissions`
- **Charts**: Rendered in `$nextTick` after data loads via ApexCharts constructor

### 3.3 Navigation Structure
- 8 sections defined in PHP array in `sidebar.blade.php`
- Permission-based filtering via `@can` and `Auth::user()->can()`
- Stores section has 3 sub-menus: Stocks, Clothes, Books/Sheets

---

## 4. Unknowns / Clarifications

| Question | Resolution |
|----------|-----------|
| What constitutes "all backend views" for card/heading audit? | All views under `resources/views/backend/` and any views extending `layouts.app` |
| Does existing activity log need enhancement? | No — current `recentActivity` (latest students + payments) meets the "last 5 actions" requirement |
| What role-based data should accountants see? | Spec clarification (2026-07-04): Fee-centric stat cards (invoiced, collected, pending, overdue) + accounting quick actions (New Invoice, Create Receipt, Fee Exceptions, Payment Plans) + accounting bar chart only; student chart hidden |
| What format should sparkline data take? | Spec clarification (2026-07-04): `number[]` flat array (up to 12 values) for mini line chart; trend = current month vs previous month percentage change |

---

## 5. Implementation Strategy

### Key Insight
~80% of the spec requirements are **already implemented**. The project needs **polish/refinement**, not a ground-up rebuild.

### Priority Order
1. **Core features**: G1 (stat-card component extraction), H1 (accountant role support), I1 (sparkline/trend data)
2. **Missing features**: SB-9 (tooltips), DH-5 (mobile quick-action scroll), DH-7 (chart resize on sidebar toggle), MR-2 (mobile fullscreen modals)
3. **Audits**: VF-2 (card standardization across views), VF-3 (heading hierarchy), VF-4 (button standardization), VF-5 (input Tailwind styling), CS-2 (form input audit), MR-3 (mobile table scroll)
4. **Polish**: General consistency pass
