# Implementation Plan: UI Redesign & Migration

**Branch**: `005-ui-migration-plan` | **Date**: 2026-07-06 | **Spec**: specs/005-ui-migration-plan/spec.md
**Input**: Feature specification from specs/005-ui-migration-plan/spec.md

## Summary

Replace the current Bootstrap/jQuery-based admin interface with a modern,
responsive, RTL Arabic ERP layout using Livewire 4 + Alpine.js 3 + Tailwind CSS v4
(with `@theme` design tokens). Deliver a reusable Blade component library so every
module page is built by composing components, not duplicating markup. Follow
incremental refactoring: old and new code coexist until each module is verified.

## Technical Context

**Language/Version**: PHP ^8.5, Laravel 10
**Primary Dependencies**: Livewire 4.3 (installed), Alpine.js 3.15 (installed),
  Tailwind CSS v4.2 (installed, CSS-first via `@tailwindcss/vite` plugin),
  ApexCharts 5.11 (already installed — preferred over Chart.js, no new deps)
**Storage**: MySQL / MariaDB via Eloquent (no new storage; existing schema)
**Testing**: PHPUnit 10 + Livewire component tests for behavior; manual QA
  visual checklist per phase against reference screenshots
**Target Platform**: Web — RTL Arabic, desktop-first with responsive mobile layout
**Project Type**: Web application (Laravel 10 + Livewire + Alpine)
**Performance Goals**: <2s initial page load, <1s tab switch, no full-page reloads
  for sort/filter/paginate (Livewire or Alpine-driven with Livewire events)
**Constraints**: RTL Arabic layout; no Bootstrap/jQuery in final output;
  incremental refactoring (old + new coexist); minimal dependencies
**Scale/Scope**: All existing modules migrated, phased by module/page type
**Existing Assets**: 12 Blade UI components already exist at `resources/views/components/ui/`;
  7 UI test files (37 tests) exist at `tests/Feature/Ui/` and `tests/Feature/DashboardRedesignTest.php`
**Role Awareness**: Sidebar navigation, dashboard widgets, and accessible modules
  MUST adapt per user role/permissions. Component rendering may differ by role.
**Accessibility**: WCAG 2.1 Level AA — ARIA labels, keyboard navigation, focus
  management, color contrast, form error announcements, screen reader support.
**DataTable Pattern**: Hybrid approach — Alpine presentation layer (`x-data="dataTable()"`)
  kept for the existing data-table component, with Livewire event-driven data fetching
  replacing direct API endpoint calls. New DataTable components use Livewire full-stack.

## Constitution Check

*GATE: Must pass before Phase 0 research. Re-check after Phase 1 design.*

**Principle I — Clean Code & Convention Compliance**: All code will follow
Laravel 10 conventions, PSR-12, and Pint style. Blade components will use proper
props and slots. ✅ No violation.

**Principle II — Simple UX & Responsive Design**: Plan uses Livewire 4 + Alpine.js
3 + Tailwind CSS v4 (`@theme` for design tokens). Livewire handles server state
(forms, modals, data fetching). Alpine handles client-side toggles, animations,
chart init, and the existing DataTable presentation layer. RTL Arabic responsive
layout. All interactive components meet WCAG 2.1 Level AA (ARIA labels, keyboard
navigation, focus management, color contrast, screen reader support). Note: Dark mode explicitly deferred per spec Q&A 7 (light-only theme); no violation per Constitution II's SHOULD language. ✅ Compliant.

**Principle III — Minimal Dependencies**: No new npm/composer packages required.
ApexCharts (already installed) used for dashboard charts instead of adding Chart.js.
Existing Alpine composables kept; no jQuery added. ✅ Compliant.

**Principle IV — Service Layer Architecture**: Existing backend controllers may
need lightweight adjustments to work with Livewire components — delegate data
queries to Service classes where needed. Sidebar navigation, dashboard widgets,
and modules adapt per user role/permissions via Livewire server state. ✅ No violation.

**Principle V — Automated Testing**: Livewire component tests for data table
(sort/filter/paginate), modal open/close, form submission, inline row actions.
Manual QA visual checklist per phase. Run `vendor/bin/pint --format agent` before
finalizing. Each phase gates on THREE criteria: (1) Livewire/component tests pass,
(2) manual QA visual checklist passes, (3) existing test suite shows zero regressions. ✅ Compliant.

**Development Workflow — Incremental Refactoring**: Old Bootstrap views remain
accessible alongside new Livewire components during each phase. Legacy files
deleted only after replacement passes tests + smoke checks. ✅ Compliant.

**GATE RESULT**: PASS — all principles satisfied. No complexity violations.

## Project Structure

### Documentation (this feature)

```text
specs/005-ui-migration-plan/
├── plan.md              # This file
├── research.md          # Phase 0 output
├── data-model.md        # Phase 1 output
├── quickstart.md        # Phase 1 output
├── contracts/           # Phase 1 output
│   ├── layout.md
│   ├── data-table.md
│   ├── cards.md
│   ├── modals.md
│   ├── tabs.md
│   ├── status-badge.md
│   └── button.md
└── tasks.md             # Phase 2 output (/speckit.tasks)
```

### Source Code (repository root)

**Existing components (already built, to be enhanced):**

```text
resources/views/components/ui/
├── button.blade.php         ✅ Exists — needs role-aware disabled states
├── card.blade.php           ✅ Exists — needs aria roles
├── status-badge.blade.php   ✅ Exists — needs aria roles
├── data-table.blade.php     ✅ Exists — Alpine-driven, refactor to Livewire hybrid
├── modal.blade.php          ✅ Exists — needs focus trap validation
├── tabs.blade.php           ✅ Exists — needs keyboard arrow nav
├── page-header.blade.php    ✅ Exists
├── filter-panel.blade.php   ✅ Exists — Livewire event wiring needed
├── detail-header.blade.php  ✅ Exists
├── settings-hub.blade.php   ✅ Exists
├── kpi-tile.blade.php       ✅ Exists — Livewire event wiring needed
└── skeleton.blade.php       ✅ Exists
```

**New components to create:**

```text
app/
  Livewire/
    Components/              # New Livewire full-stack components
      Navigation/
        Sidebar.php          # Role-filtered nav groups
        Topbar.php           # User info, module title
      Dashboard/
        KpiCard.php          # Server-driven KPI data
        ChartWidget.php      # ApexCharts wrapper
      UI/
        Modal.php            # If Livewire modal needed (else keep Blade)
        Tabs.php             # If Livewire tabs needed (else keep Blade)

resources/
  views/
    layouts/
      app.blade.php          ✅ Exists — three-region shell (sidebar + topbar + content)
      partials/
        sidebar.blade.php    ✅ Exists
        topbar.blade.php     ⚠️ Split from existing layout
    livewire/                # New Livewire component views
      navigation/
        sidebar.blade.php
        topbar.blade.php
      dashboard/
        kpi-card.blade.php
        chart-widget.blade.php
    backend/
      ui-examples/           # Example pages (MUST create — tests expect them)
        settings/
          index.blade.php
        list/
          index.blade.php
        detail/
          index.blade.php
        dashboard/
          index.blade.php

  css/
    app.css                  ✅ Exists — has @theme tokens, add brand tokens if needed
  js/
    app.js                   ✅ Exists — Alpine boot + ApexCharts; refactor dataTable()
    Composables/
      useFetch.js            ✅ Exists

tests/
  Feature/
    Ui/                      ✅ 6 test files (25 tests) already exist
    DashboardRedesignTest.php ✅ 12 role-based tests already exist
    Livewire/
      Components/            # New — tests for new Livewire components
```

**Structure Decision**: Laravel web application — Livewire components under
`app/Livewire/Components/` (Livewire 4 default namespace) with views in
`resources/views/livewire/`. Existing Blade-only components remain under
`resources/views/components/ui/`. Existing Alpine-driven DataTable is
enhanced with Livewire event-driven data fetching (hybrid pattern).
Tests under `tests/Feature/Ui/` (existing) and `tests/Feature/Livewire/` (new).

## Complexity Tracking

No constitution violations to justify. All principles satisfied.
