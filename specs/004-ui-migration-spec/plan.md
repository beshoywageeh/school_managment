# Implementation Plan: UI Migration — Daftra-Style ERP Redesign

**Branch**: `004-ui-migration-spec` | **Date**: 2026-07-05 | **Spec**: [spec.md](./spec.md)
**Input**: Feature specification from `specs/004-ui-migration-spec/spec.md`

## Summary

Migrate the school management admin backend from scattered Bootstrap-styled views to a unified ERP-style UI using a shared Blade component library (`<x-ui.card>`, `<x-ui.button>`, `<x-ui.status-badge>`, `<x-ui.data-table>`, `<x-ui.modal>`, `<x-ui.tabs>`), a three-region RTL layout shell (sidebar + topbar + content), and Alpine.js/Axios-driven interactivity (server-paginated data tables, modal CRUD, lazy-loading tabs). The migration covers 4 reference screen types across P1/P2/P3 priority pages, with explicit out-of-scope boundaries.

## Technical Context

**Language/Version**: PHP ^8.4, Laravel 10, Blade templating  
**Primary Dependencies**: Tailwind CSS v4 + Alpine.js v3 + Axios + Vite + Livewire 4 (coexistence)  
**Storage**: Existing MySQL/MariaDB via Eloquent (no new storage — UI-only migration)  
**Testing**: PHPUnit 10 via `php artisan test`; Alpine.js behavior tested via DOM assertions in feature tests  
**Target Platform**: Web — Laravel backend, server-rendered Blade with Alpine.js enhancement  
**Project Type**: Web application (monolith Laravel with Blade/Alpine frontend)  
**Performance Goals**: <2s initial page load for migrated pages; <500ms data table response at 10K rows with server-side pagination; skeleton placeholders shown during fetch  
**Constraints**: RTL layout required; mobile off-canvas sidebar; 5s auto-dismiss toast for errors; inline field errors for 422s; focus trap in modals; keyboard-navigable tables  
**Scale/Scope**: ~10K rows max per data table; 4 reference screen types (settings hub, dashboard, list/index, detail/record); 6 core components; layout shell applied to all authenticated pages

## Constitution Check

*GATE: Must pass before Phase 0 research. Re-check after Phase 1 design.*

| Principle | Status | Notes |
|-----------|--------|-------|
| **I. Framework Convention Compliance** (MUST) | ✅ PASS | Blade components use standard Laravel view namespace (`x-ui.*`). Alpine.js + Axios follow documented Livewire co-existence pattern. Vite asset pipeline unchanged. |
| **II. Type Safety & Validation** (MUST) | ⚠️ PARTIAL | Blade component props lack runtime type enforcement. Mitigation: document all component prop interfaces via PHPDoc/JS comments. Alpine.js component state is untyped JS — acceptable for UI layer. |
| **III. Service Layer Architecture** (MUST) | ✅ PASS | Backend JSON endpoints (data table feeds, CRUD actions) delegate to existing Service classes per constitution. No new bypass of service layer. |
| **IV. Incremental Refactoring** (MUST) | ✅ PASS | Legacy views remain intact during transition. Migration adds new layout + components alongside existing code. Legacy views deleted only after verification. |
| **V. Automated Testing** (SHOULD) | ⚠️ PARTIAL | Component-level visual testing not covered by PHPUnit. Mitigation: feature tests verify components render with correct props; Alpine.js behavior tested via feature test assertions on DOM output. |

**Gate Decision**: ✅ PASS — Partial items have documented mitigations. Proceeding to Phase 0.

## Project Structure

### Documentation (this feature)

```text
specs/004-ui-migration-spec/
├── plan.md              # This file
├── spec.md              # Feature specification
├── research.md          # Phase 0 output
├── data-model.md        # Phase 1 output
├── quickstart.md        # Phase 1 output
├── contracts/           # Phase 1 output
└── tasks.md             # Phase 2 output (/speckit.tasks command)
```

### Source Code (repository root)

```text
resources/
├── views/
│   ├── components/
│   │   └── ui/              # <x-ui.*> Blade components
│   │       ├── card.blade.php
│   │       ├── button.blade.php
│   │       ├── status-badge.blade.php
│   │       ├── data-table.blade.php
│   │       ├── modal.blade.php
│   │       └── tabs.blade.php
│   └── layouts/
│       └── app.blade.php    # New layout shell

resources/js/
├── Components/              # Alpine.js component definitions
│   └── DataTable/
│       └── index.js         # dataTable() Alpine component
├── Composables/             # Shared Alpine.js composables
│   ├── useToast.js
│   ├── useModal.js
│   └── useFetch.js
└── app.js                   # Alpine.js boot + Axios config

app/
├── Http/
│   └── Controllers/
│       └── Api/             # JSON endpoints (existing pattern)
└── ...existing structure unchanged

tests/
└── Feature/
    └── Ui/
        ├── LayoutShellTest.php
        ├── ComponentRenderTest.php
        ├── ListPageTest.php
        ├── DetailPageTest.php
        ├── SettingsHubTest.php
        └── DashboardTest.php
```

**Structure Decision**: Option 2 (Web application) adapted — Laravel monolith with Blade views under `resources/views/components/ui/`, Alpine.js modules under `resources/js/`, and feature tests under `tests/Feature/Ui/`.

## Complexity Tracking

> No constitution violations detected. This section left empty.
