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
  for sort/filter/paginate (Livewire server-driven)
**Constraints**: RTL Arabic layout; no Bootstrap/jQuery in final output;
  incremental refactoring (old + new coexist); minimal dependencies
**Scale/Scope**: All existing modules migrated, phased by module/page type

## Constitution Check

*GATE: Must pass before Phase 0 research. Re-check after Phase 1 design.*

**Principle I — Clean Code & Convention Compliance**: All code will follow
Laravel 10 conventions, PSR-12, and Pint style. Blade components will use proper
props and slots. ✅ No violation.

**Principle II — Simple UX & Responsive Design**: Plan uses Livewire 4 + Alpine.js
3 + Tailwind CSS v4 (`@theme` for design tokens). Livewire handles server state
(tables, forms, modals). Alpine handles client-side toggles, animations, and
enhancements. RTL Arabic responsive layout. ✅ Compliant.

**Principle III — Minimal Dependencies**: No new npm/composer packages required.
ApexCharts (already installed) used for dashboard charts instead of adding Chart.js.
Axios usage will be reduced in favor of Livewire server actions. ✅ Compliant.

**Principle IV — Service Layer Architecture**: Existing backend controllers may
need lightweight adjustments to work with Livewire components — delegate data
queries to Service classes where needed. ✅ No violation.

**Principle V — Automated Testing**: Livewire component tests for data table
(sort/filter/paginate), modal open/close, form submission, inline row actions.
Manual QA visual checklist per phase. Run `vendor/bin/pint --format agent` before
finalizing. ✅ Compliant.

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

```text
app/
  Http/
    Livewire/
      Components/          # Reusable Livewire components
        Navigation/
          Sidebar.php
          Topbar.php
        Table/
          DataTable.php
          DataTableActions.php
        UI/
          Modal.php
          Tabs.php
        Dashboard/
          KpiCard.php
          ChartWidget.php

resources/
  views/
    components/
      ui/                  # Blade component views (x-ui.*)
        card.blade.php
        button.blade.php
        status-badge.blade.php
        modal.blade.php
        tabs.blade.php
      table/
        data-table.blade.php
        data-table-actions.blade.php
    layouts/
      app.blade.php        # New base layout (sidebar + topbar + content)
      partials/
        sidebar.blade.php
        topbar.blade.php
    livewire/              # Livewire component views
      navigation/
        sidebar.blade.php
        topbar.blade.php
      table/
        data-table.blade.php
      ui/
        modal.blade.php
        tabs.blade.php
      dashboard/
        kpi-card.blade.php
        chart-widget.blade.php

  css/
    app.css                # Add ERP brand tokens to @theme
  js/
    app.js                 # Alpine boot + ApexCharts; reduce Axios usage
    Components/
      DataTable/           # Existing — refactor to Livewire
    Composables/
      useFetch.js          # Existing — keep for chart data

tests/
  Feature/
    Livewire/
      Components/
        DataTableTest.php
        ModalTest.php
        TabsTest.php
        SidebarTest.php
        CardTest.php
```

**Structure Decision**: Laravel web application — Blade + Livewire components
under `app/Http/Livewire/Components/` with views in `resources/views/components/`.
Alpine kept for client-side enhancement layer (toggles, transitions, chart init).
Tests under `tests/Feature/Livewire/Components/`.

## Complexity Tracking

No constitution violations to justify. All principles satisfied.
