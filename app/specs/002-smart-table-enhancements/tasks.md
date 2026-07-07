# Tasks: Smart-Table Enhancements

**Input**: Design documents from `specs/002-smart-table-enhancements/`
**Prerequisites**: plan.md (required), spec.md (required for user stories), research.md, data-model.md, contracts/

**Tests**: Test tasks are included in the final phase. The component will be verified through PHPUnit feature tests that load the component in a rendered page context.

**Organization**: Tasks are grouped by delivery increment to enable independent implementation and testing of each feature.

## Format: `[ID] [P?] [Story] Description`

- **[P]**: Can run in parallel (different files, no dependencies)
- **[Story]**: Which user story this task belongs to (US1–US6 from spec.md)
- Include exact file paths in descriptions

## Path Conventions

- **Component**: `resources/views/components/smart-table.blade.php` (1 file modified)
- **Tests**: `tests/Feature/SmartTableComponentTest.php` (1 new file)

---

## Phase 1: Core Refactor & Backward Compatibility (US1 + US6)

**Goal**: Refactor the component to accept new props, separate filters from columns, support standard Laravel paginated JSON while maintaining backward compatibility, and fix existing bugs.

**Independent Test**: Render the component with new props (columns, filters, apiUrl sorted) and verify it loads data. Then render with old-format columns and old-format API response and verify it still works.

### Implementation

- [X] T001 [P] [US1] Add new Blade props (`filters`, `perPage`, `perPageOptions`, `selectable`, `rowClickUrl`, `exportUrl`, `searchable`, `sortBy`, `sortOrder`, `primaryKey`) in `@props` block at `resources/views/components/smart-table.blade.php:1`
- [X] T002 [P] [US1] Update Alpine `x-data` initial state — add `selectedItems: []`, `search: ''`, `controller: null`; extend `pagination` with `total`, `from`, `to`, `perPage`; initialize sort from `sortBy`/`sortOrder` props in `resources/views/components/smart-table.blade.php:14`
- [X] T003 [P] [US6] Build filters from `$filters` prop in `init()`, or auto-build from old column `filter_type`/`filter_key`/`options` with deprecation warning in `resources/views/components/smart-table.blade.php:35`
- [X] T004 [P] [US1] Implement API format adapter in `fetchData()` — detect `response.data.data` (standard) vs `response.data.items` (legacy), map to internal state, emit `console.warn` once for legacy; **preserve existing `sort_by`/`sort_order` params** in the request in `resources/views/components/smart-table.blade.php:62`
- [X] T005 [P] [US6] Fix nested `<td>` bug in actions template — replace `td`-in-`td` pattern with proper column detection in `resources/views/components/smart-table.blade.php:169`
- [X] T006 [P] [US6] Fix skeleton `colspan` to account for optional checkbox column: `columns.length + (selectable ? 1 : 0)` for loading, error, and empty states in `resources/views/components/smart-table.blade.php:146`
- [X] T007 [P] [US1] Replace all `axios.get()` calls with `window.axios.get()` in `resources/views/components/smart-table.blade.php:77`

**Checkpoint**: Core refactor complete. Component accepts new props, standard Laravel pagination works, old format still works, bugs fixed.

---

## Phase 2: Pagination Enhancement (US2 — Per-Page Setting)

**Goal**: Add from/to summary display and per-page selector dropdown.

**Independent Test**: Render the component. Verify pagination bar shows "عرض 1 – 10 من N". Change per-page dropdown from 10 to 25, verify data re-fetches with 25 rows, pagination resets to page 1.

### Implementation

- [X] T008 [P] [US2] Add from/to summary — replace "صفحة X of Y" with "عرض {from} – {to} من {total}" using `pagination.from`, `pagination.to`, `pagination.total` in `resources/views/components/smart-table.blade.php:203`
- [X] T009 [P] [US2] Add per-page selector dropdown — render `<select>` with `perPageOptions` values, `x-model` bound to `pagination.perPage`, on change reset to page 1 and call `fetchData(1)` in `resources/views/components/smart-table.blade.php:196`

**Checkpoint**: Pagination shows from/to/summary and per-page dropdown works.

---

## Phase 3: Bulk Actions (US3 — Row Selection)

**Goal**: Add checkbox column for row selection with "Select All" toggle and a bulk actions slot.

**Independent Test**: Set `:selectable="true"`. Verify checkbox column renders. Check a row → "1 selected" bar appears. Check "Select All" → all rows checked. Change page → selection cleared.

### Implementation

- [X] T010 [P] [US3] Add checkbox column in `<thead>` with "Select All" toggle and in each `<tr>` with per-row checkbox bound to `toggleItem(item[primaryKey])` in `resources/views/components/smart-table.blade.php:120`
- [X] T011 [P] [US3] Add bulk action bar below table — show `"X selected"` with `aria-live="polite"` when `selectedItems.length > 0`, provide `{{ $bulkActions ?? '' }}` slot in `resources/views/components/smart-table.blade.php:194`
- [X] T012 [US3] Implement `toggleSelectAll()` and `toggleItem(id)` Alpine methods; clear `selectedItems` on page change, per-page change, filter, sort, or search in `resources/views/components/smart-table.blade.php:35`

**Checkpoint**: Bulk selection UI works — checkboxes render, select-all toggles, selection bar appears, selection resets on navigation.

---

## Phase 4: Row Click Navigation (US4)

**Goal**: Add configurable row click navigation.

**Independent Test**: Set `row-click-url="/students/{id}/edit"`. Click a row → browser navigates to `/students/42/edit`. Clicking a checkbox or action button does NOT navigate.

### Implementation

- [X] T013 [US4] Add `@click="handleRowClick(item)"` with `cursor-pointer` class on `<tr>` when `rowClickUrl` is set; implement `handleRowClick(item)` to substitute `{id}` with `item[primaryKey]` and navigate via `window.location.href`; stop propagation on checkbox and action button clicks in `resources/views/components/smart-table.blade.php:164`

**Checkpoint**: Row click navigates to configured URL. Interactive elements inside row (checkboxes, action buttons) do not trigger navigation.

---

## Phase 5: Export (US5)

**Goal**: Add export button that triggers filtered data download.

**Independent Test**: Set `export-url="/api/items/export"`. Verify export button renders. Click → opens URL with current filter/search params.

### Implementation

- [X] T014 [US5] Add export button in toolbar area (above filters) when `exportUrl` is set; implement `exportData()` method that builds params from current filters/search and opens `exportUrl` in new tab or triggers download in `resources/views/components/smart-table.blade.php:92`

**Checkpoint**: Export button renders and triggers download with current filters.

---

## Phase 6: Global Search & Request Cancellation

**Goal**: Add global search input with debounce and AbortController for concurrent request safety.

**Independent Test**: Set `:searchable="true"`. Verify search input renders above filters. Type a query → after 300ms debounce, API request fires with `search` param. Rapidly change per-page and sort → only latest request's response updates the table.

### Implementation

- [X] T015 [P] Add global search input above filter row when `searchable` is true; bind to `search` with `x-model` and `@input.debounce.300ms` in `resources/views/components/smart-table.blade.php:92`
- [X] T016 Include `search` param in API request params inside `fetchData()` in `resources/views/components/smart-table.blade.php:67`
- [X] T017 Implement AbortController in `fetchData()` — create new controller, cancel previous before sending, pass `signal`, handle `axios.isCancel()` silently in `resources/views/components/smart-table.blade.php:62`

**Checkpoint**: Global search works with debounce. No race conditions when controls change rapidly.

---

## Phase 7: Accessibility

**Goal**: Add ARIA labels and focusable elements for all interactive table controls.

**Independent Test**: Tab through the table. Sort buttons, checkboxes, export button, search input, filter inputs, per-page dropdown are all focusable and have ARIA labels.

### Implementation

- [X] T018 [P] Add ARIA labels to sort buttons: `:aria-label="'Sort by ' + col.label + (sort.by === col.key ? ' (' + sort.order + ')' : '')"` in `resources/views/components/smart-table.blade.php:126`
- [X] T019 [P] Add `aria-label="Select all rows"` on header checkbox and `:aria-label="'Select row ' + item[primaryKey]"` on row checkboxes in `resources/views/components/smart-table.blade.php:120`
- [X] T020 [P] Add `aria-live="polite"` on bulk action bar selection count in `resources/views/components/smart-table.blade.php:194`
- [X] T021 [P] Add descriptive ARIA labels on export button, search input, filter inputs, and per-page dropdown in `resources/views/components/smart-table.blade.php:92`

**Checkpoint**: All interactive elements are accessible via keyboard with descriptive ARIA labels.

---

## Phase 8: Testing & Verification

**Goal**: Verify the enhanced component through feature tests.

**Independent Test**: `php artisan test --filter=SmartTable` passes all 10 test cases.

### Implementation

- [X] T022 [P] Create `tests/Feature/SmartTableComponentTest.php` with test for new props rendering — assert column headers (Name, Email), filter row, per-page dropdown, export button, global search, and checkbox column all render when respective props are set
- [X] T023 [P] Add test for backward compatibility — pass old-format columns (with `filter_type`, `filter_key`, `options`) and render, verify filters still appear from embedded definitions
- [X] T024 [P] Add test for pagination display — assert "عرض 1 – 10 من" text appears, per-page selector has options [10, 25, 50]
- [X] T025 [P] Add test for zero rows / empty state — assert empty message renders when no items
- [X] T026 [P] Add test for error state — assert error message displays when fetch fails
- [X] T027 [P] Add test for row selection — assert checkbox column renders when `selectable` is true, assert "Select all rows" ARIA label present
- [X] T028 [P] Add test for row click URL — assert `cursor-pointer` class and `row-click-url` data attribute present when `rowClickUrl` is set
- [X] T029 [P] Add test for no nested `<td>` — assert HTML output contains no invalid `<td>` inside `<td>` patterns
- [X] T030 [P] Add test for accessibility — assert ARIA labels present on sort buttons, checkboxes, search input, etc.

**Checkpoint**: All 10 test cases pass.

---

## Dependencies & Execution Order

### Phase Dependencies

- **Phase 1 (Core Refactor)**: No dependencies — can start immediately
- **Phase 2 (Pagination)**: Depends on Phase 1 (needs new props and Alpine state)
- **Phase 3 (Bulk Actions)**: Depends on Phase 1 (needs Alpine state + sort/filter reset behavior)
- **Phase 4 (Row Click)**: Depends on Phase 1 (needs new props)
- **Phase 5 (Export)**: Depends on Phase 1 (needs new props)
- **Phase 6 (Search + Abort)**: Depends on Phase 1 (needs Alpine state + fetchData)
- **Phase 7 (Accessibility)**: Depends on Phases 1–6 (needs all interactive elements in place)
- **Phase 8 (Testing)**: Depends on Phases 1–7 (needs all features implemented)

### User Story Dependencies

- **US1 (Developer Config) + US6 (Backward Compat)**: Phase 1 — No dependencies on other stories
- **US2 (Per-Page)**: Phase 2 — Depends on US1
- **US3 (Bulk Actions)**: Phase 3 — Depends on US1
- **US4 (Row Click)**: Phase 4 — Depends on US1
- **US5 (Export)**: Phase 5 — Depends on US1
- All features in Phases 2–5 are independent of each other

### Parallel Opportunities

- All Phase 1 tasks marked [P] can run in parallel (they edit the same file but different concerns — props, state, adapter, bug fixes)
- Phases 2–5 are independent and can run in parallel if working on separate feature branches
- All Phase 8 test tasks marked [P] can run in parallel (they're different test methods in the same file)
- Phases 7 (Accessibility) must come after 1–6 since it touches all interactive elements

---

## Parallel Example: Phase 1

```bash
# Launch all Phase 1 tasks together (different parts of same file):
Task: T001 Add Blade props
Task: T002 Update Alpine state
Task: T003 Filters from $filters prop
Task: T004 API format adapter
Task: T005 Fix nested <td>
Task: T006 Fix skeleton colspan
Task: T007 Switch to window.axios
```

---

## Implementation Strategy

### MVP First (Phases 1–3)

1. Complete Phase 1: Core Refactor + Backward Compat
2. Complete Phase 2: Pagination Enhancement
3. Complete Phase 3: Bulk Actions
4. **STOP and VALIDATE**: Test features independently (Phases 1–3 cover US1, US2, US3, US6)
5. Deploy/demo if ready

### Incremental Delivery

1. Phase 1 done → Foundation: new props, standard pagination, bugs fixed, backward compat
2. Phase 2 done → Add per-page selector + from/to display (US2)
3. Phase 3 done → Add bulk selection (US3)
4. Phase 4 done → Add row click navigation (US4)
5. Phase 5 done → Add export (US5)
6. Phase 6 done → Add global search + request cancellation
7. Phase 7 done → Accessibility polish
8. Phase 8 done → Testing & verification
9. Each phase adds value without breaking previous phases

---

## Notes

- [P] tasks = different concerns within the same file — can be applied as sequential edits without conflict
- [Story] label maps task to specific user story from spec.md
- All tasks target `resources/views/components/smart-table.blade.php` (modify in place) or `tests/Feature/SmartTableComponentTest.php` (new file)
- Run `vendor/bin/pint --format agent` before finalizing
