# Implementation Plan: Fix smart-table.blade.php Component

**Branch**: `003-fix-smart-table` | **Date**: 2026-07-04 | **Spec**: `specs/003-fix-smart-table/spec.md`
**Input**: Feature specification from `specs/003-fix-smart-table/spec.md`

## Summary

Fix 8 issues in the shared `smart-table.blade.php` Blade/Alpine component: fragile actions slot rendering, null/type safety for `$initialItems`, hardcoded Arabic strings, missing loading/empty/error states, `getNestedValue` null crash, and missing debounce on select filters. All changes are confined to one Blade component and two lang files.

## Technical Context

**Language/Version**: PHP 8.5 / Blade (Laravel 10), Alpine.js 3, Axios
**Primary Dependencies**: Alpine.js 3 (via CDN or compiled assets), Axios (for AJAX), Tailwind CSS v4
**Storage**: N/A — frontend-only component; data fetched via Axios from existing JSON API endpoints
**Testing**: Visual verification (browser-based checklist) — no automated tests per spec clarification
**Target Platform**: Modern browsers (Chrome, Firefox, Edge)
**Project Type**: Web application (Laravel Blade)
**Performance Goals**: No specific targets — debounce (300ms) prevents excessive requests
**Constraints**: Must remain backward-compatible with both callers (`Students/Index.blade.php`, `fee_invoices/index.blade.php`)
**Scale/Scope**: 2 callers, 1 component file, ~168 lines

## Constitution Check

*GATE: Must pass before Phase 0 research. Re-check after Phase 1 design.*

| Principle | Status | Rationale |
|-----------|--------|-----------|
| I. Framework Convention Compliance | ✅ PASS | Blade component uses standard Laravel `@props`, `{{ }}`, Alpine `x-data` patterns |
| II. Type Safety & Validation | ✅ PASS | N/A — frontend component; `$initialItems` validation added via `@php` instanceof check |
| III. Service Layer Architecture | ✅ PASS | N/A — no backend logic |
| IV. Incremental Refactoring | ✅ PASS | No legacy code replaced; component is modified in-place |
| V. Automated Testing | ⚠️ WAIVED | Spec clarifies visual verification suffices for pure Blade/Alpine component; no backend logic to test |

**Gate verdict**: ✅ PASS (V waived with documented justification in spec clarification)

## Project Structure

### Documentation (this feature)

```text
specs/003-fix-smart-table/
├── plan.md              # This file
├── research.md          # Phase 0 output
├── data-model.md        # Phase 1 output
├── quickstart.md        # Phase 1 output (validation guide)
└── contracts/           # (skipped — internal component, no external interfaces)
```

### Source Code (repository root)

```text
app/resources/views/components/
├── smart-table.blade.php    # Target file (modified)

app/lang/en/
└── general.php              # Add all_options, error_fetching keys

app/lang/ar/
└── general.php              # Add all_options, error_fetching keys
```

**Structure Decision**: Single Laravel project. Changes limited to one Blade component file and two lang files.

## Complexity Tracking

*No constitution violations to justify.*

## Phase 0 — Research

### Unknowns Identified

| Unknown | Status | Resolution |
|---------|--------|------------|
| `general.error_fetching` key exists? | Resolved | Does not exist — must be added (spec FR-006b) |
| `general.loading` includes trailing dots? | Resolved | Yes — use key directly without extra `...` |
| Translation key for error message | Resolved | New `general.error_fetching` key per spec clarification |

**No further research needed.** All technical details are known. See `research.md`.

## Phase 1 — Design Artifacts

### Entities

| Entity | Description |
|--------|-------------|
| `smart-table` | Blade/Alpine component at `components/smart-table.blade.php` |
| `columns` | Prop: array of column definitions with `key`, `label`, `sortable`, `filter_type`, `filter_key`, `options` |
| `initialItems` / `paginator` | Prop: `LengthAwarePaginator` instance (or empty default) |
| `apiUrl` | Prop: string URL for AJAX data fetching |

See `data-model.md` for full details.

### External Contracts

None — component is internal to the Laravel application. Callers pass data via Blade props and named slots.

### Validation / Quickstart

See `quickstart.md` for the verification checklist and browser-based testing steps.
