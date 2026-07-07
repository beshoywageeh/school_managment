# Implementation Plan: Dashboard Redesign

**Spec:** `specs/001-dashboard-redesign/spec.md`
**Date:** 2026-07-04
**Branch:** (to be created)

---

## Technical Context

### Current Architecture

| Layer | Technology | Status |
|-------|-----------|--------|
| **CSS** | Tailwind CSS v4 (`@import "tailwindcss"` + `@theme`) | ✅ In place |
| **CSS Variables** | `resources/css/variables.css` | ✅ In place |
| **JS Framework** | Alpine.js v3 (sidebar, modals, dropdowns, toasts) | ✅ In place |
| **Charts** | ApexCharts (dashboard) + SVG sparklines (stat cards) | ✅ In place |
| **AJAX** | Axios (dashboard widgets, smart-table) | ✅ In place |
| **Icons** | `<x-hero-icon>` component (inline SVGs) | ✅ In place |
| **Sidebar** | Fixed collapsible with hover/pin/search/mobile | ✅ In place |
| **Dashboard** | AJAX-driven with role-based widgets | ✅ In place |
| **Components** | button, smart-table, crud-modal, modal, dropdown-table, input, select, hero-icon, toasts, alert | ✅ In place |
| **Components (stat-card)** | stat-card | ✅ In place — reusable `<x-stat-card>` component at `resources/views/components/stat-card.blade.php` with sparkline SVG and trend indicator |

### Key Finding
Research (`research.md`) reveals that **~80% of spec requirements are already implemented**. This plan focuses on the gaps and polish needed.

### What Needs Work

| Category | Items |
|----------|-------|
| **Missing features** | SB-9 (icon tooltips), DH-5 (mobile quick-action scroll), DH-7 (chart resize), MR-2 (mobile fullscreen modals) |
| **New components** | `x-stat-card` extraction from inline Alpine template in `dashboard.blade.php` |
| **Role support** | Add accountant role branching in `HomeController::widgets()` — currently falls through to teacher path |
| **Sparkline data** | Wire up real month-over-month trend data in widget API (`HomeController::getFinancialData`) |
| **Audits** | VF-2/VF-3/VF-4/VF-5 (card/heading/button/input consistency), CS-2 (form component audit), MR-3 (mobile table scroll) |
| **Polish** | DH-2 (real trend data), sidebar styling refinements |

---

## Constitution Check

**Reference:** `.specify/memory/constitution.md` v1.0.0

| Principle | Compliance | Notes |
|-----------|-----------|-------|
| I. Framework Convention Compliance (MUST) | ✅ Pass | Blade components + Alpine.js for frontend; Eloquent for widget queries; Artisan scaffolds for any new components |
| II. Type Safety & Validation (MUST) | ✅ Pass | No new PHP enums needed; API response typed via array returns with PHPDoc; Blade props are typed via `@props` |
| III. Service Layer Architecture (MUST) | ✅ Pass | Widget logic stays in `HomeController` (thin controller — delegates queries to private trait methods); no new Service class warranted for this scope |
| IV. Incremental Refactoring (MUST) | ✅ Pass | All changes are additive (no legacy code deleted; CSS/Blade refinements are backward-compatible) |
| V. Automated Testing (SHOULD) | ✅ Pass | Feature tests for API endpoint and role-based responses; no existing tests removed |

**Gate evaluation:** All gates pass. No violations.

---

## Phase 0: Research Complete

Research findings are documented in `specs/001-dashboard-redesign/research.md`. All unknowns have been resolved through codebase exploration.

---

## Phase 1: Design Complete

Design artifacts generated:
- `specs/001-dashboard-redesign/data-model.md` — UI state, API models, component props
- `specs/001-dashboard-redesign/contracts/api-dashboard-widgets.md` — Widget API contract
- `specs/001-dashboard-redesign/quickstart.md` — Validation guide

---

## Phase 2: Implementation Tasks

### Task Group A: Visual Polish (VF-2, VF-3)

**A1: Audit card standardization across backend views**
- Search all backend views for card/container classes
- Replace non-standard card classes with `bg-white rounded-xl border border-gray-100 shadow-sm p-6`
- Focus on: `resources/views/backend/` and any view extending `layouts.app`

**A2: Audit heading hierarchy**
- Ensure all pages follow: h1=`text-2xl font-bold`, h2=`text-xl font-bold`, h3=`text-lg font-bold`
- The dashboard title already uses `text-2xl font-bold` — replicate across views

### Task Group B: Sidebar Refinements (SB-9)

**B1: Add tooltips to icon-only nav items**
- Add `:title="'{{ trans($item['labelKey']) }}'"` to each nav anchor in `sidebar.blade.php`
- The `title` attribute shows natively when sidebar is collapsed and icons are visible

### Task Group C: Dashboard Homepage (DH-5, DH-7)

**C1: Make quick actions horizontally scrollable on mobile**
- In `dashboard.blade.php`, change quick action wrapper from `flex flex-wrap gap-4` to `flex overflow-x-auto gap-4`

**C2: Implement chart resize on sidebar toggle**
- Add a `$watch('sidebarExpanded')` in the Alpine dashboard component (or use `@resize` on chart containers)
- After sidebar transition completes (~300ms), call `this.studentChart?.resize()` and `this.revenueChart?.resize()`
- Alternative: Use `ResizeObserver` on the chart container divs

### Task Group D: Input Audit (CS-2)

**D1: Find and replace raw form elements**
- Search all backend views for raw `<input>`, `<select>`, `<textarea>` tags
- Replace with `<x-input>`, `<x-select>`, `<x-textarea>` (or the appropriate component)
- Ensure consistent label → input → error → hint ordering

### Task Group E: Mobile Responsiveness (MR-2, MR-3)

**E1: Add full-screen mobile modal variant**
- In `<x-modal>` component, add mobile-responsive classes: `lg:max-w-lg max-w-full m-0 h-full lg:h-auto rounded-none lg:rounded-xl`
- The `sidebarMobileOpen` breakpoint (`lg` = 1024px) should be used consistently

**E2: Ensure tables are horizontally scrollable on mobile**
- Audit tables in backend views for `overflow-x-auto` wrapper
- Add wrapper where missing

### Task Group F: Smart-Table Polish (CS-1)

**F1: Verify loading skeleton across all smart-table instances**
- The `<x-smart-table>` component already has skeleton support
- Ensure all smart-table usages pass the correct `loading` prop

### Task Group G: Stat Card Component (DH-2)

**G1: Extract `<x-stat-card>` Blade component**
- Create `resources/views/components/stat-card.blade.php`
- Extract the inline Alpine template pattern from `dashboard.blade.php` (lines 30-51) into a reusable component
- Props: `color`, `trend`, `trendDirection`, `sparklineData`, `sparklineColor`
- The component should render a 30px SVG sparkline when `sparklineData` is provided and a trend indicator (▲/▼) when `trend` is provided
- Replace the inline stat card markup in `dashboard.blade.php` with `<x-stat-card>`

### Task Group H: Accountant Role Support (DH-1)

**H1: Add accountant role branching in widget API**
- In `HomeController::widgets()`, add `$user->hasRole('Accountant')` check
- Return fee-centric stat cards (invoiced, collected, pending, overdue counts)
- Return accounting-specific quick actions (New Invoice, Create Receipt, Fee Exceptions, Payment Plans)
- Hide student enrollment chart; show only accounting bar chart
- Filter recent activity to financial entries only

### Task Group I: Sparkline & Trend Data (DH-2)

**I1: Wire up real trend data in widget API**
- In `HomeController::getFinancialData()`, calculate month-over-month percentage changes for each stat card metric
- Generate sparkline data arrays (up to 12 values) from monthly aggregates using existing `getMonthlyRevenueTrend()` pattern
- Return `trend`, `trendDirection`, and `sparklineData` for each stat card instead of `null`

### Task Group J: Style/Stores Sub-menu Polish (sidebar)

**J1: Tidy up the "Stores" section in sidebar**
- The existing stores section has hand-written collapsible sub-menus (Stocks, Clothes, Books)
- These already work but could be extracted as a Blade `@include` partial for cleanliness
- Ensure the `x-show` search filter applies to sub-menu items correctly

### Task Group K: Testing

**K1: Write dashboard redesign feature tests**
- Test sidebar expand/collapse interactions (future: Laravel Dusk)
- Test dashboard API endpoint returns correct role-based data
- Test component rendering consistency
- Test mobile sidebar behavior

### Task Group L: Tailwind Design Consistency (VF-4, VF-5)

**L1: Audit button standardization across backend views**
- Search all backend views for `<button>`, `<a class="btn`, and `<x-button>` usage
- Replace non-standard button classes with: primary=`px-4 py-2 bg-primary text-white rounded-lg text-sm font-medium`, secondary=`px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg text-sm font-medium`, danger=`px-4 py-2 bg-danger text-white rounded-lg text-sm font-medium`
- Focus on: `resources/views/backend/` — CRUD action buttons, filter/submit buttons, table action buttons

**L2: Audit input field Tailwind class consistency**
- Search all backend views for `<x-input>`, `<x-select>`, `<x-textarea>` components
- Ensure all form fields use: `w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-primary focus:ring-1 focus:ring-primary`
- Add missing classes where component defaults don't include them

**K1: Write dashboard redesign feature tests**
- Test sidebar expand/collapse interactions (future: Laravel Dusk)
- Test dashboard API endpoint returns correct role-based data
- Test component rendering consistency
- Test mobile sidebar behavior

---

## Implementation Order

```
Phase 2a (Core Features)
├── G1: Stat card component extraction     (1 new file + 1 modified)
├── H1: Accountant role in widget API      (1 file)
├── I1: Sparkline & trend data             (1 file)
├── B1: Icon tooltips                      (quick win, 1 file)
├── C1: Mobile quick-action scroll         (quick win, 1 file)
├── C2: Chart resize on sidebar toggle     (1 file)
├── E1: Mobile fullscreen modal            (1 component file)
└── J1: Stores section cleanup             (1 file)

Phase 2b (Audit & Fix)
├── A1/A2: Card/heading audit              (multiple views)
├── L1: Button standardization audit       (multiple views)
├── L2: Input Tailwind class audit         (multiple views)
├── D1: Form input audit                   (multiple views)
├── E2: Mobile table scroll audit          (multiple views)
└── F1: Smart-table skeleton verify        (spot-check)

Phase 2c (Verification)
└── K1: Feature tests
```

---

## Files to Modify

| File | Task | Change |
|------|------|--------|
| `resources/views/layouts/sidebar.blade.php` | B1, J1 | Add tooltips; tidy stores sub-menus |
| `resources/views/dashboard.blade.php` | C1, C2, G1 | Mobile scroll + chart resize; replace inline stat cards with `<x-stat-card>` |
| `resources/views/components/stat-card.blade.php` | G1 | **New file** — reusable stat card component with sparkline + trend |
| `resources/views/components/modal.blade.php` | E1 | Mobile fullscreen variant |
| `app/Http/Controllers/HomeController.php` | H1, I1 | Add accountant role branch; wire real trend/sparkline data |
| `resources/css/app.css` | None needed (palette already set) | — |
| Backend views (various) | A1, A2, D1, E2 | Card/heading/input/mobile audits |

---

## Risk Assessment

| Risk | Likelihood | Mitigation |
|------|-----------|------------|
| Breaking existing sidebar behavior | Low | All changes are additive (tooltips, search refinement) |
| Disrupting existing card layouts | Medium | Audit-only — changes are visual, not structural |
| Chart resize causing layout shifts | Low | `chart.resize()` is non-destructive; 300ms delay after sidebar transition |
| Mobile changes affecting desktop | Low | All mobile changes use `lg:` breakpoint prefix |
