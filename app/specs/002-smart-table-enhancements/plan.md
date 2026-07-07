# Implementation Plan: Smart-Table Enhancements

**Spec:** `specs/002-smart-table-enhancements/spec.md`
**Date:** 2026-07-05
**Branch:** (not yet created)

---

## Technical Context

### Current Architecture

| Layer | Technology | Status |
|-------|-----------|--------|
| **Component** | `resources/views/components/smart-table.blade.php` (215 lines, inline Alpine) | ✅ In place |
| **JS State** | Alpine.js v3 `x-data` with inline methods | ✅ In place |
| **HTTP** | `axios.get()` globally | ✅ In place |
| **API Format** | Custom `{items, pagination}` | ⚠️ Needs adapter |
| **Filters** | Mixed into column definitions (`filter_type`, `filter_key`, `options`) | ⚠️ Needs separation |
| **Pagination** | Previous/Next only, no from/to, no per-page | ⚠️ Needs enhancement |
| **Bulk Actions** | Not present | ❌ Needs new feature |
| **Row Click** | Not present | ❌ Needs new feature |
| **Export** | Not present | ❌ Needs new feature |
| **Global Search** | Not present | ❌ Needs new feature |
| **Accessibility** | Minimal (basic HTML semantics only) | ⚠️ Needs ARIA |
| **Request Handling** | No concurrency protection | ⚠️ Needs AbortController |
| **Existing usage** | 2 views (fee_invoices/index, Students/Index) | ✅ Backward compat required |

### Key Finding

Research (`research.md`) reveals that the component needs a significant but well-scoped enhancement. All new features are additive with backward compatibility maintained via adapters.

### What Needs Work

| Category | Items |
|----------|-------|
| **Bug fixes** | Nested `<td>` (BF-1), skeleton colspan (BF-2) |
| **Props refactor** | New `$filters`, `perPage`, `selectable`, `rowClickUrl`, `exportUrl`, `searchable`, `sortBy`, `sortOrder`, `primaryKey` |
| **API adapter** | Accept both standard `{data,...}` and legacy `{items, pagination}` formats |
| **New features** | Per-page selector, from/to display, bulk checkboxes + slot, row click, export button, global search |
| **Accessibility** | ARIA labels, focusable elements, `aria-live` region |
| **Request handling** | AbortController for concurrent request cancellation |

---

## Constitution Check

**Reference:** `.specify/memory/constitution.md` v1.0.0

| Principle | Compliance | Notes |
|-----------|-----------|-------|
| I. Framework Convention Compliance (MUST) | ✅ Pass | Blade component + Alpine.js; no new Artisan scaffolds needed for frontend-only change |
| II. Type Safety & Validation (MUST) | ✅ Pass | `@props` array types all existing props; new props added with types |
| III. Service Layer Architecture (MUST) | ✅ Pass | No new Service class needed — this is a frontend component only; controller migration is separate |
| IV. Incremental Refactoring (MUST) | ✅ Pass | Legacy API format and column format both supported via adapters; no code deleted |
| V. Automated Testing (SHOULD) | ✅ Pass | Feature tests can verify component rendering and behavior |

**Gate evaluation:** All gates pass. No violations.

---

## Phase 0: Research Complete

Research findings are documented in `specs/002-smart-table-enhancements/research.md`. All unknowns resolved.

---

## Phase 1: Design Complete

Design artifacts generated:
- `specs/002-smart-table-enhancements/data-model.md` — Alpine state shape, props, API contract, state transitions
- `specs/002-smart-table-enhancements/contracts/data-table-api.md` — Standard and legacy API contracts
- `specs/002-smart-table-enhancements/quickstart.md` — Validation scenarios

---

## Phase 2: Implementation Tasks

### Task Group A: Component Props & Alpine State Refactor

**A1: Add new Blade props**
- Add `filters`, `perPage`, `perPageOptions`, `selectable`, `rowClickUrl`, `exportUrl`, `searchable`, `sortBy`, `sortOrder`, `primaryKey` to `@props`
- Keep existing `columns`, `initialItems`, `apiUrl` props
- File: `resources/views/components/smart-table.blade.php`

**A2: Update Alpine `x-data` initial state**
- Add new reactive properties: `selectedItems: []`, `search: ''`, `controller: null`
- Extend `pagination` object with `total`, `from`, `to`, `perPage`
- Build filters from `$filters` prop in `init()` (if provided), or auto-build from old column format
- Initialize sort from `sortBy`/`sortOrder` props
- File: `resources/views/components/smart-table.blade.php`

### Task Group B: API Format Adapter

**B1: Implement response adapter in `fetchData()`**
- Detect response format: check `response.data.hasOwnProperty('data')` vs `response.data.hasOwnProperty('items')`
- Map both formats to internal `items` and `pagination` state
- Emit `console.warn` once for legacy format
- File: `resources/views/components/smart-table.blade.php`

### Task Group C: Bug Fixes

**C1: Fix nested `<td>` in actions template**
- Replace the `<template x-if="col.key === 'actions'">` block with proper handling
- Options: use a separate `<td>` for actions columns rendered via `$actions` slot, or detect actions column position and render outside the `x-for` loop
- File: `resources/views/components/smart-table.blade.php`

**C2: Fix skeleton colspan**
- Account for checkbox column (`selectable`) in colspan calculation
- Use `columns.length + (selectable ? 1 : 0)` for loading skeleton, error state, and empty state
- File: `resources/views/components/smart-table.blade.php`

### Task Group D: Pagination Enhancement

**D1: Add from/to summary display**
- Replace "صفحة X of Y" with "عرض {from} – {to} من {total}"
- Use `pagination.from`, `pagination.to`, `pagination.total`
- Show in pagination bar
- File: `resources/views/components/smart-table.blade.php`

**D2: Add per-page selector dropdown**
- Add a `<select>` dropdown in the pagination bar showing `perPageOptions`
- `x-model` bound to `pagination.perPage`
- On change: reset to page 1, refetch data
- File: `resources/views/components/smart-table.blade.php`

### Task Group E: Bulk Actions

**E1: Add checkbox column**
- When `selectable` is true, render a `<th>` with "Select All" checkbox before columns
- Render a `<td>` with checkbox in each row before data cells
- Bind header checkbox to `toggleSelectAll()` method
- Bind row checkbox to `toggleItem(item[primaryKey])`
- File: `resources/views/components/smart-table.blade.php`

**E2: Add bulk action bar**
- Show a bar below the table when `selectedItems.length > 0`
- Display "X selected" text with `aria-live="polite"`
- Provide a slot for action buttons: `{{ $bulkActions ?? '' }}`
- File: `resources/views/components/smart-table.blade.php`

**E3: Implement selection methods**
- `toggleSelectAll()`: if all visible items selected → clear; else → select all
- `toggleItem(id)`: add/remove from `selectedItems`
- Clear `selectedItems` on page change, per-page change, filter, sort, or search
- File: `resources/views/components/smart-table.blade.php`

### Task Group F: Row Click Navigation

**F1: Add row click handling**
- When `rowClickUrl` is set, add `@click="handleRowClick(item)"` to `<tr>` with `cursor-pointer` class
- Implement `handleRowClick(item)`: substitute `{id}` with `item[primaryKey]` in `rowClickUrl`, then navigate via `window.location.href`
- Stop propagation on checkbox and action button clicks
- File: `resources/views/components/smart-table.blade.php`

### Task Group G: Export

**G1: Add export button**
- When `exportUrl` is set, render an "Export" button in the toolbar area (above filters)
- On click: call `exportData()` method
- Implement `exportData()`: build params object with current filters/search, open `exportUrl` in new tab or trigger download
- File: `resources/views/components/smart-table.blade.php`

### Task Group H: Global Search

**H1: Add global search input**
- When `searchable` is true, render a text input above the filter row
- Bind to `search` with `x-model` and debounced `@input.debounce.300ms`
- Include `search` param in API requests
- File: `resources/views/components/smart-table.blade.php`

### Task Group I: Request Cancellation

**I1: Implement AbortController**
- In `fetchData()`: create new `AbortController`, store in `this.controller`
- Before creating new request: call `this.controller?.abort()` to cancel previous
- Pass `signal: this.controller.signal` to axios request
- Handle `axios.isCancel()` error — silently ignore (don't set error state)
- File: `resources/views/components/smart-table.blade.php`

### Task Group J: Accessibility

**J1: Add ARIA labels to interactive elements**
- Sort buttons: `:aria-label="'Sort by ' + col.label + (sort.by === col.key ? ' (' + sort.order + ')' : '')"`
- Checkbox header: `aria-label="Select all rows"`
- Row checkboxes: `:aria-label="'Select row ' + item[primaryKey]"`
- Bulk action bar: `aria-live="polite"` on selection count
- Export button, search input, per-page dropdown: descriptive ARIA labels
- File: `resources/views/components/smart-table.blade.php`

### Task Group K: Use `window.axios` Instead of Global `axios`

**K1: Replace `axios.get()` with `window.axios.get()`**
- Change all `axios.get(...)` calls to `window.axios.get(...)`
- File: `resources/views/components/smart-table.blade.php`

### Task Group L: Testing

**L1: Write feature tests**
- Create `tests/Feature/SmartTableComponentTest.php`
- Test cases:
  - Component renders with new props
  - Component renders with old props (backward compat)
  - Pagination renders and navigates
  - Per-page selector renders and switches
  - Bulk checkbox column renders (when selectable)
  - Row click URL generates correct link
  - Export button renders (when exportUrl set)
  - Global search input renders (when searchable)
  - Accessibility: ARIA labels present
  - No nested `<td>` in HTML output

---

## Implementation Order

```
Phase 2a (Core Refactor)
├── A1: Add new Blade props                     (1 file)
├── A2: Update Alpine initial state             (1 file)
├── B1: API format adapter in fetchData()       (1 file)
├── C1: Fix nested <td>                        (1 file)
├── C2: Fix skeleton colspan                   (1 file)
└── K1: Switch to window.axios                 (1 file)

Phase 2b (New Features)
├── D1: From/to summary display                (1 file)
├── D2: Per-page selector dropdown             (1 file)
├── E1: Checkbox column                        (1 file)
├── E2: Bulk action bar + slot                 (1 file)
├── E3: Selection methods                      (1 file)
├── F1: Row click handling                     (1 file)
├── G1: Export button                          (1 file)
├── H1: Global search input                    (1 file)
└── I1: AbortController implementation         (1 file)

Phase 2c (Polish)
└── J1: ARIA labels and accessibility          (1 file)

Phase 2d (Verification)
└── L1: Feature tests                          (1 file)
```

---

## Files to Modify

| File | Task | Change |
|------|------|--------|
| `resources/views/components/smart-table.blade.php` | All A–K | Rewrite Alpine state, add props, fix bugs, add features, ARIA, AbortController, window.axios |
| `tests/Feature/SmartTableComponentTest.php` | L1 | **New file** — feature tests for component rendering and behavior |

---

## Risk Assessment

| Risk | Likelihood | Mitigation |
|------|-----------|------------|
| Breaking existing smart-table usage | Low | Backward compat adapters for both column format and API format; both existing usage patterns covered in test L1 |
| Backward compat adapter misses edge case | Low | Detection logic checks for `hasOwnProperty('items')` vs `hasOwnProperty('data')` — clear distinction |
| AbortController not supported in older browsers | Low | Project targets modern browsers (Chrome/Firefox/Safari/Edge); AbortController is widely supported since 2018 |
| Race condition between AbortController and legacy browser | Low | `axios.isCancel()` check prevents error state from cancel events |
| Conflicts with x-ui.data-table | None | Separate component, no shared state |
