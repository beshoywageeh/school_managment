# Feature Specification: Smart-Table Enhancements

**Date:** 2026-07-05
**Status:** Draft
**Version:** 1.0

---

## 1. Overview

### 1.1 Summary

Enhance the existing `smart-table.blade.php` Blade component to be easier for developers to configure and richer in features for end-users. The current implementation has several pain points: column and filter configuration are mixed together, the API response format is non-standard (requiring custom controller code), there is a broken `<td>` nesting bug, and missing features like per-page selection, bulk actions, row click navigation, and data export. This spec addresses all of these while maintaining backward compatibility with existing usage.

### 1.2 Business Value

- **Faster development** — Separating column definitions from filter config allows developers to add new table views with less code; any controller's `->paginate()` output works without custom transformation
- **Better end-user experience** — Per-page selector, from/to summary, bulk actions, row click navigation, and export save users time in daily workflows
- **Consistent UI** — One component used across all list pages guarantees identical look, feel, and behavior
- **Reduced maintenance** — Bug fix (invalid `<td>` nesting) prevents rendering issues; single component means fewer places to patch
- **Backward compatible** — Existing pages continue to work during migration; teams adopt new features at their own pace

### 1.3 Scope

**In scope:**
- Separate column definitions from filter configuration (new `$filters` prop)
- Adopt Laravel-standard `->paginate()` JSON response format (`{data, current_page, last_page, total, from, to}`)
- Support both old (`{items, pagination}`) and new (`{data, ...}`) API formats with automatic detection
- Fix invalid `<td>` nested in `<td>` bug in the actions template
- From/to summary display (e.g., "1 – 10 of 48")
- Per-page selector dropdown (10, 25, 50 options)
- Checkbox column for row selection with bulk actions slot
- Row click navigation with configurable URL template
- Export button (CSV) triggering an export endpoint
- Global search input with debounce
- Switch from global `axios` to `window.axios` (project convention)
- Skeleton colspan fix to account for checkbox/actions columns
- Backward compatibility: old column format (with `filter_type`/`filter_key`/`options`) auto-detected and auto-converted, old API format accepted via transitional adapter, deprecation warnings emitted in console

**Out of scope:**
- Rewriting existing controllers or routes (controllers will be updated separately per migration path)
- Adding new data export backends (export endpoint assumed to exist or be built separately)
- Dark mode for the table component
- Inline editing within table cells
- Column visibility toggles
- Drag-and-drop column reordering
- Server-side export processing

---

## Clarifications

### Session 2026-07-05 (Specify)

- **Q:** Should the spec include updating existing controllers? → **A:** No, separate follow-up task.
- **Q:** What built-in bulk operations should the component support? → **A:** None — checkbox selection + slot only.
- **Q:** Client-side or server-side export? → **A:** Server-side only.

### Session 2026-07-05 (Clarify)

- **Q1:** Should row selections persist across page changes when `selectable` is true? → **A:** No — current page only. Selections reset on page navigation; bulk action acts only on visible selected rows.
- **Q2:** How should concurrent API requests be handled when user rapidly changes multiple controls? → **A:** Cancel previous in-flight request using Axios AbortController before sending a new one.
- **Q3:** What level of keyboard accessibility should the enhanced table support? → **A:** Basic — all interactive elements (sort buttons, checkboxes, export button, search/filter inputs, per-page dropdown) focusable via Tab with ARIA labels describing state (sort direction, selection count, row count).

---

## 2. User Scenarios & Testing

### 2.1 Developer Configures a New Table

**Scenario:** Ahmed (developer) wants to add a list page for "Expenses" using the smart-table.

1. Ahmed defines columns in the controller: `['key' => 'date', 'label' => __('Date'), 'sortable' => true]`
2. Ahmed defines filters separately: `['key' => 'category_id', 'label' => __('Category'), 'type' => 'select', 'options' => $categories]`
3. Ahmed returns `Expense::query()->paginate(10)` (no custom JSON wrapping)
4. In the Blade view, Ahmed passes `$columns`, `$filters`, and the API URL to `<x-smart-table>`
5. The table renders with correct columns, filters, pagination, and features

**Expected outcome:** A working table with less than 10 lines of boilerplate in the controller.

**Testing approach:**
- Create a test controller with `Expense::paginate(10)`, pass columns/filters to smart-table
- Verify table renders, filters work, pagination navigates
- Verify no custom JSON mapping needed

### 2.2 User Changes Per-Page Setting

**Scenario:** Fatima (accountant) views the fee invoices list showing 10 rows per page by default.

1. Fatima sees a per-page dropdown in the pagination bar showing "10"
2. Fatima changes it to "25"
3. The table re-fetches data and now shows up to 25 rows
4. The pagination controls update to reflect the new total pages

**Expected outcome:** User controls how many rows they see per page. Preference is maintained during the session.

**Testing approach:**
- Navigate to table page, verify default shows 10 rows
- Change to 25, verify 25 rows load
- Verify pagination page count adjusts correctly

### 2.3 User Selects Rows for Bulk Action

**Scenario:** Fatima needs to delete multiple fee invoices.

1. Fatima sees a checkbox column at the left of each row
2. A "Select All" checkbox in the header selects/deselects all visible rows
3. Fatima checks 3 invoices
4. A bulk action bar appears showing "3 selected" with action buttons (e.g., "Delete Selected")
5. Fatima clicks "Delete Selected"; a confirmation prompt appears
6. After confirming, selected items are deleted and the table refreshes

**Expected outcome:** Users can select multiple rows and perform batch operations.

**Testing approach:**
- Verify checkbox column renders in header and rows
- Check individual rows, verify selection count updates
- Check "Select All", verify all rows checked
- Uncheck one row, verify "Select All" becomes unchecked
- Perform bulk delete, verify items removed and table refreshes
- Verify bulk action bar disappears when no rows selected

### 2.4 User Clicks a Row to Navigate

**Scenario:** Fatima clicks on a student row to view their details.

1. The row has a subtle hover highlight indicating it's clickable
2. Fatima clicks anywhere on the row
3. The browser navigates to the configured detail/edit URL for that student
4. The row's `id` (or configured primary key) is inserted into the URL template

**Expected outcome:** Rows act as navigation links when `rowClickUrl` is configured.

**Testing approach:**
- Configure `rowClickUrl="/students/{id}/edit"` on the component
- Click a row, verify URL navigates to `/students/42/edit`
- Without `rowClickUrl`, verify row click does nothing

### 2.5 User Exports Data

**Scenario:** Ahmed exports the filtered fee invoice list to CSV.

1. Ahmed sets up filters and sees the desired subset of data
2. Ahmed clicks the "Export" button above the table
3. The browser downloads a CSV file with the filtered data (all pages, not just current)
4. The file name includes the current date (e.g., `fee-invoices-2026-07-05.csv`)

**Expected outcome:** Users can download filtered data for offline analysis.

**Testing approach:**
- Click export with no filters, verify all data exported
- Apply a filter, click export, verify only filtered data exported
- Verify CSV structure matches columns

### 2.6 Backward Compatibility — Existing Page Still Works

**Scenario:** The old fee invoices page (not yet migrated) still renders correctly.

1. The page passes `columns` with `filter_type`, `filter_key`, and `options` inside column definitions (old format)
2. The API returns `{items: [...], pagination: {last_page, current_page}}` (old format)
3. The component auto-detects the old API format and adapts
4. All existing features (filters, sorting, pagination) work identically
5. A deprecation warning is logged in the browser console

**Expected outcome:** Existing pages work without modification during migration.

**Testing approach:**
- Pass old-format columns to the component, verify filters render
- Return old-format API response, verify table renders
- Verify no errors in console (only deprecation warning)

---

## 3. Functional Requirements

### 3.1 Component API

| ID | Requirement | Acceptance Criteria |
|----|------------|-------------------|
| CA-1 | Component shall accept a `columns` prop as an array of objects with `key` and `label`; optional `sortable` (boolean, default false) | Columns render with labels in `<th>` elements; `sortable: true` columns show sort buttons |
| CA-2 | Component shall accept a `filters` prop separate from `columns` for search/filter inputs | Filters render in a filter row above the table, not mixed with column definitions |
| CA-3 | Each filter entry shall support `type` (`text`, `select`), `key`, `label`, and `options` (for `select`) | Text inputs for `text` type; dropdowns for `select` type with provided options |
| CA-4 | Component shall use the `$filters` prop to render filter inputs; if `$filters` is empty, it shall fall back to building filters from the old column format (auto-detect) | New-format views pass `$filters` separately; old-format columns still work via fallback |
| CA-5 | Component shall accept `apiUrl` (string) as the data endpoint | Fetch requests are sent to `apiUrl` with query parameters |
| CA-6 | Component shall accept `perPage` (number, default 10) and `perPageOptions` (array, default [10, 25, 50]) | Default per-page is 10; dropdown shows configured options |
| CA-7 | Component shall accept `selectable` (boolean, default false) to enable checkbox column | When `true`, a checkbox column appears with header "select all" toggle |
| CA-8 | Component shall accept `rowClickUrl` (string|null, default null) as a URL template with `{id}` placeholder | When set, clicking a row navigates to the URL with the row's primary key substituted |
| CA-9 | Component shall accept `exportUrl` (string|null, default null) for data export | When set, an export button appears; clicking triggers download from `exportUrl` with current filters |
| CA-10 | Component shall accept `searchable` (boolean, default false) for a global search input | When `true`, a text input appears above the filter row; debounced 300ms |
| CA-11 | Component shall accept `sortBy` (string, default 'id') and `sortOrder` (string, default 'desc') for default sort | Initial data request uses the configured defaults |
| CA-12 | Component shall accept `primaryKey` (string, default 'id') for row identification in checkboxes and click URL | Checkbox values and `rowClickUrl` substitution use this field |

### 3.2 API Response Format

| ID | Requirement | Acceptance Criteria |
|----|------------|-------------------|
| AR-1 | Component shall accept Laravel-standard `->paginate()` JSON format: `{data: [...], current_page, last_page, per_page, total, from, to}` | Standard paginated response renders correctly |
| AR-2 | Component shall also accept the legacy format: `{items: [...], pagination: {current_page, last_page}}` via transitional adapter | Old format auto-detected and adapted |
| AR-3 | A deprecation warning shall be logged to browser console when legacy format is detected | `console.warn` called with migration guidance |

### 3.3 Sorting

| ID | Requirement | Acceptance Criteria |
|----|------------|-------------------|
| ST-1 | Clicking a sortable column header shall toggle sort direction (asc → desc → asc) | First click: asc; second click: desc; third click: asc |
| ST-2 | Sort indicators shall show asc (↑), desc (↓), or unsortable (⇅) states | Visual indicators match current sort state |
| ST-3 | Sort parameters shall be sent as `sort_by` and `sort_order` in the API request | Query params include `sort_by` and `sort_order` |

### 3.4 Pagination

| ID | Requirement | Acceptance Criteria |
|----|------------|-------------------|
| PG-1 | Previous/Next buttons shall navigate to adjacent pages | Buttons disabled at boundaries (first/last page) |
| PG-2 | Page info shall show "Showing X – Y of Z" format in Arabic | e.g., "عرض 1 – 10 من 48" |
| PG-3 | Per-page dropdown shall re-fetch data with the new row count | Changing per-page resets to page 1 and fetches |
| PG-4 | Pagination controls shall be hidden when only one page exists | `x-show="pagination.last > 1"` |

### 3.5 Bulk Actions

| ID | Requirement | Acceptance Criteria |
|----|------------|-------------------|
| BA-1 | Checkbox column shall appear when `selectable` prop is `true` | Checkboxes in header (select all) and each row |
| BA-2 | "Select All" header checkbox shall toggle all visible rows | Check all → all rows checked; uncheck → all unchecked |
| BA-3 | A bulk action bar shall appear below the table when at least one row is selected | Shows "X selected" text and a slot for action buttons |
| BA-4 | Selected row IDs shall be trackable via `selectedItems` array | `selectedItems` exposed as Alpine data and accessible to the bulk actions slot |
| BA-5 | Row selection shall reset when page changes (pagination, per-page change, filter, or sort) | Changing page, per-page, filters, or sort clears `selectedItems` |

### 3.6 Row Click Navigation

| ID | Requirement | Acceptance Criteria |
|----|------------|-------------------|
| RC-1 | Rows shall be clickable when `rowClickUrl` is set | `cursor-pointer` class applied to rows |
| RC-2 | Clicking a row shall navigate to the URL with `{id}` replaced by the row's primary key | URL substitution works correctly |
| RC-3 | Row click shall NOT trigger when clicking a checkbox or an action button | Event propagation stopped on interactive elements |

### 3.7 Export

| ID | Requirement | Acceptance Criteria |
|----|------------|-------------------|
| EX-1 | An export button shall appear when `exportUrl` is set | Button positioned in the table toolbar area |
| EX-2 | Clicking export shall open the export URL in a new tab or trigger a download | Browser downloads the file |
| EX-3 | The export request shall include current filter parameters | Same filters applied to table are sent with the export |

### 3.8 Global Search

| ID | Requirement | Acceptance Criteria |
|----|------------|-------------------|
| GS-1 | A global search input shall appear when `searchable` is `true` | Input positioned above the filter row |
| GS-2 | Input shall debounce at 300ms before triggering a fetch | Typing pauses 300ms before API call |
| GS-3 | Search value shall be sent as `search` parameter in the API request | Query param `search` included |

### 3.9 Backward Compatibility

| ID | Requirement | Acceptance Criteria |
|----|------------|-------------------|
| BC-1 | Old column format with embedded filter config (`filter_type`, `filter_key`, `options`) shall continue to render filters via fallback | Filters auto-built from column properties; no separate `$filters` prop needed |
| BC-2 | Legacy API format `{items, pagination}` shall be accepted — see AR-2 for the transitional adapter | Data renders correctly from legacy format; AR-3 deprecation warning emitted |
| BC-3 | Deprecation warnings shall be emitted only once per format detection (once for old columns, once for old API) | No console spam |

### 3.10 Network Request Behavior

| ID | Requirement | Acceptance Criteria |
|----|------------|-------------------|
| NR-1 | Each new API request shall cancel any previous in-flight request from the same component | AbortController used; only latest response updates the table state |

### 3.11 Accessibility

| ID | Requirement | Acceptance Criteria |
|----|------------|-------------------|
| AX-1 | Sort buttons in column headers shall have ARIA labels indicating current sort direction (ascending, descending, or none) | `aria-label` present on each sort button describing state |
| AX-2 | Checkbox column inputs shall have ARIA labels for select-all and per-row selection | `aria-label="Select all rows"` on header checkbox; `aria-label="Select row {id}"` on row checkboxes |
| AX-3 | The bulk action bar shall announce the count of selected rows via `aria-live` region | `aria-live="polite"` on selection count text |
| AX-4 | Pagination controls, export button, and global search input shall be focusable via Tab and have descriptive ARIA labels | All interactive elements reachable via sequential keyboard navigation |

### 3.12 Bug Fixes

| ID | Requirement | Acceptance Criteria |
|----|------------|-------------------|
| BF-1 | Actions column shall not produce nested `<td>` elements | Valid HTML output |
| BF-2 | Loading skeleton `colspan` shall account for checkbox column (when `selectable`) | Skeleton row spans correct number of columns |

---

## 4. Success Criteria

| Criterion | Type | Target | Verification Method |
|-----------|------|--------|-------------------|
| Existing fee invoices page renders identically after upgrade | Backward compat | No visual regressions | Side-by-side comparison |
| New controller with `->paginate()` works without custom JSON wrapping | DX | Zero additional code | Developer creates new list page in < 5 min |
| Per-page change re-fetches data in under 2 seconds | Performance | ≤2s | Automated timing test |
| Bulk select/unselect cycle responds in under 100ms | UX | ≤100ms | Manual testing |
| Export downloads correctly filtered data | Correctness | 100% match | Compare export CSV with table data |
| Row click navigates to correct URL | Correctness | 100% match | Automated test with known IDs |
| All browser console warnings are migration guidance only | Code quality | No errors | Automated console log capture |
| Invalid HTML (nested `<td>`) eliminated | Code quality | 0 instances | DOM validation |

---

## 5. Key Entities

| Entity | Description | Attributes |
|--------|-------------|------------|
| **ColumnDef** | A table column definition | key (string), label (string), sortable (bool, default false) |
| **FilterDef** | A filter input definition | key (string), label (string), type (text\|select), options (array, for select) |
| **PaginationState** | Current pagination state | current (int), last (int), perPage (int), total (int), from (int), to (int) |
| **SortState** | Current sort state | by (string), order (asc\|desc) |
| **SelectionState** | Row selection tracking | selectedItems (array), selectAll (bool) |
| **TableFilters** | Active filter values | key-value pairs sent as query params |

---

## 6. Dependencies

| Dependency | Impact | Notes |
|-----------|--------|-------|
| Alpine.js | Required for all interactive state | Already available |
| Axios (`window.axios`) | Required for API requests | Already configured in app.js |
| Laravel paginator JSON format | Required for standard API contract | Built into Laravel |
| Existing `x-smart-table` usage in 2 views | Must maintain backward compat | FeeInvoiceController and StudentsController |

---

## 7. Assumptions

- The component file is `resources/views/components/smart-table.blade.php` and will be edited in place
- `window.axios` is already configured in `resources/js/app.js` with base URL and interceptors
- The existing `x-ui.data-table` Alpine component (`resources/js/Components/DataTable/index.js`) is a separate component and will not be merged or removed
- The project uses `axios.get()` not `fetch()` for API calls
- Controllers (FeeInvoiceController, StudentsController) will be migrated to the new column/filter format as a separate task after the component is released (confirmed via Q1 resolution)
- The export endpoint is expected to accept the same filter parameters as the list endpoint and return a CSV file download
- Per-page preference is session-only (not persisted to user profile or localStorage)
- The component uses `sort_by` and `sort_order` param names (current convention) rather than renaming them
