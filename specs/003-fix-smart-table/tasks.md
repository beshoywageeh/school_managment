---
description: "Task list for fixing smart-table.blade.php component"
---

# Tasks: Fix smart-table.blade.php Component

**Input**: Design documents from `specs/003-fix-smart-table/`
**Prerequisites**: plan.md, spec.md, research.md, data-model.md, quickstart.md

**Tests**: No tests requested — visual verification per spec clarification.

**Organization**: Tasks are grouped by the plan's execution phases. Since all changes target the same file, tasks run sequentially.

## Format: `[ID] [P?] [Story] Description`

- **[P]**: Can run in parallel (different files, no dependencies)
- **[Story]**: Which user story this task belongs to
- Include exact file paths in descriptions

## Path Conventions

- **Laravel app root**: `/data/projects/laravel_projects/school_managment/app/`
- **Blade components**: `resources/views/components/`
- **Lang files**: `lang/{ar,en}/`

---

## Phase 1: Setup (Read Current State)

**Purpose**: Read current files to understand existing code before making changes.

- [ ] T001 Read `resources/views/components/smart-table.blade.php` — the target component
- [ ] T002 [P] Read `lang/en/general.php` — English translations
- [ ] T003 [P] Read `lang/ar/general.php` — Arabic translations

---

## Phase 2: Foundational — Null Safety & Props Restructure (Fix 2)

**Purpose**: Prevent runtime crashes from null `$initialItems`. This restructures the props/initialization block and MUST be done first as other fixes reference `$paginator`.

**⚠️ CRITICAL**: No other task can proceed until Fix 2 is complete.

- [ ] T004 Change `@props` default: `'initialItems' => []` → `'initialItems' => null` in `resources/views/components/smart-table.blade.php`
- [ ] T005 Add `@php` block: validate `$initialItems` instanceof `LengthAwarePaginator`, default to empty paginator in `resources/views/components/smart-table.blade.php`
- [ ] T006 Replace all `$initialItems->` with `$paginator->` in the x-data block (lines 9, 21, 22) in `resources/views/components/smart-table.blade.php`

**Checkpoint**: Page should render without PHP error even if `null` is passed as `initialItems`.

---

## Phase 3: User Story 1 — Actions Slot (Priority: P1) 🎯 MVP

**Goal**: Fix the fragile `${$col['key']}` action slot rendering so action dropdowns work regardless of column order.

**Independent Test**: Visit `/students` — confirm each row has a working "Actions" button with correct per-row student IDs in URLs. Visit `/fee_invoices` — confirm table renders without errors (no actions slot).

- [ ] T007 [US1] Replace `${$col['key']}` with `{{ $actions ?? '' }}` wrapped in proper `<td>` element with `class="px-6 py-4 text-gray-900"` in `resources/views/components/smart-table.blade.php`

**Checkpoint**: Students index page loads with working action dropdowns. Fee invoices page renders without errors.

---

## Phase 4: User Story 4 — Localization & User Story 5 — Debounce (Priority: P3/P4)

**Goal**: Remove hardcoded Arabic strings so the component respects locale, and add consistent debounce to select filters.

**Independent Test**: Switch locale to English — search placeholder shows English text, select default option shows "All Options". Rapidly change select filter — only one AJAX request fires.

- [ ] T008 [P] [US4] Replace hardcoded `placeholder="ابحث هنا..."` with `placeholder="{{ trans('general.search') }}"` in `resources/views/components/smart-table.blade.php`
- [ ] T009 [P] [US4] Replace hardcoded `<option value="">كل الخيارات</option>` with `<option value="">{{ trans('general.all_options') }}</option>` in `resources/views/components/smart-table.blade.php`
- [ ] T010 [P] [US4] Add `'all_options' => 'All Options'` to `lang/en/general.php`
- [ ] T011 [P] [US4] Add `'all_options' => 'كل الخيارات'` to `lang/ar/general.php`
- [ ] T012 [P] [US4] Add `'error_fetching' => 'An error occurred while loading data.'` to `lang/en/general.php`
- [ ] T013 [P] [US4] Add `'error_fetching' => 'حدث خطأ أثناء تحميل البيانات.'` to `lang/ar/general.php`
- [ ] T014 [US5] Add `.debounce.300ms` to select `@change` handler in `resources/views/components/smart-table.blade.php`

**Checkpoint**: UI text changes with locale. Select filter debounces.

---

## Phase 5: User Story 2 — Loading, Empty & Error States (Priority: P2)

**Goal**: Add visual feedback during AJAX loading, empty results, and network errors so users never see a blank table without explanation.

**Independent Test**: Apply a search filter returning no results — "no data" message appears. Throttle network to "Slow 3G" — loading indicator appears and pagination buttons are disabled. Disconnect network — red error message appears.

- [ ] T015 [US2] Add Alpine `loading: false` and `error: null` reactive properties after the `sort` object in `resources/views/components/smart-table.blade.php`
- [ ] T016 [US2] Update `fetchData`: set `loading = true` at start, `error = null` at start, set `error` in `.catch`, set `loading = false` in `.finally` in `resources/views/components/smart-table.blade.php`
- [ ] T017 [US2] Add loading state row (`<template x-if="loading">`) after `<tbody>` open tag in `resources/views/components/smart-table.blade.php`
- [ ] T018 [US2] Add error state row (`<template x-if="error">`) after loading row in `resources/views/components/smart-table.blade.php`
- [ ] T019 [US2] Add empty state row (`<template x-if="!loading && items.length === 0">`) before `</tbody>` in `resources/views/components/smart-table.blade.php`
- [ ] T020 [US2] Disable pagination buttons during loading (`:disabled="... || loading"`) on both Previous and Next buttons in `resources/views/components/smart-table.blade.php`

**Checkpoint**: Loading indicator, empty message, and error message all display correctly. Pagination buttons disabled during load.

---

## Phase 6: User Story 3 — Null Relationship Guard (Priority: P3)

**Goal**: Prevent `getNestedValue` from crashing when a relation property is null.

**Independent Test**: Find a student with null classroom — the classroom column shows `-` instead of a JS error.

- [ ] T021 [US3] Add null/undefined check in `getNestedValue` reduce callback — if `acc` is null or undefined, return null immediately in `resources/views/components/smart-table.blade.php`

**Checkpoint**: Null relation columns display `-` without JS errors.

---

## Phase 7: Polish & Verification

**Purpose**: Code style cleanup and end-to-end verification.

- [ ] T022 Run `vendor/bin/pint --format agent` to fix code style
- [ ] T023 Perform visual verification per quickstart.md checklist

---

## Dependencies & Execution Order

### Phase Dependencies

- **Setup (Phase 1)**: No dependencies — read current files
- **Foundational (Phase 2)**: Depends on Setup — BLOCKS all user story tasks
- **US1 (Phase 3)**: Depends on Phase 2 — no dependencies on other stories
- **US4 + US5 (Phase 4)**: Depends on Phase 2 — lang edits independent of component changes
- **US2 (Phase 5)**: Depends on Phase 2 (needs `loading`/`error` props) — independent of US1
- **US3 (Phase 6)**: Depends on Phase 2 — independent of all other stories
- **Polish (Phase 7)**: Depends on all phases

### User Story Dependencies

- **US1 (P1)**: No dependencies on other stories — can be implemented stand-alone after Phase 2
- **US2 (P2)**: No dependencies on other stories
- **US3 (P3)**: No dependencies on other stories
- **US4 (P3)**: No dependencies on other stories
- **US5 (P4)**: No dependencies on other stories

### Parallel Opportunities

- All 4 lang key additions (T010, T011, T012, T013) can run in parallel
- US4 tasks (T008, T009) can run in parallel with each other
- US2 UI row tasks (T017, T018, T019) can run in parallel
- US4 (lang edits) and US5 (debounce) can run in parallel
- All user stories can theoretically run in parallel since they modify different parts of the same file

### Parallel Example: Phase 4 (US4 + US5)

```bash
# Launch all lang key additions together (different files):
Task: "Add 'all_options' to lang/en/general.php"  (T010)
Task: "Add 'all_options' to lang/ar/general.php"  (T011)
Task: "Add 'error_fetching' to lang/en/general.php"  (T012)
Task: "Add 'error_fetching' to lang/ar/general.php"  (T013)
```

---

## Implementation Strategy

### MVP First (User Story 1 Only)

1. Complete Phase 1: Setup
2. Complete Phase 2: Foundational (Fix 2 — props restructure)
3. Complete Phase 3: US1 (Fix 1 — actions slot)
4. **STOP and VALIDATE**: Visit `/students` and `/fee_invoices` to confirm tables render with working actions
5. Deploy/demo if ready

### Incremental Delivery

1. **MVP** (Phase 1 + 2 + 3): Actions slot fixed — no more column-order breakage
2. **+ Safety** (Phase 4): Localization + debounce — no hardcoded strings, consistent filter behavior
3. **+ UX** (Phase 5): Loading, empty, error states — no more blank table confusion
4. **+ Defensive** (Phase 6): Null relationship guard — no more JS crashes
5. **+ Polish** (Phase 7): Code style, final verification

Each increment adds value without breaking previous ones.

---

## Notes

- All tasks modify the same Blade component file except lang tasks (T010-T013)
- Run `vendor/bin/pint --format agent` after ALL changes to avoid style conflicts
- Verify each checkpoint before proceeding to the next phase
- Rollback: `git checkout -- resources/views/components/smart-table.blade.php lang/ar/general.php lang/en/general.php`
