# Smart-Table Improvements Plan

## Current Issues

| # | Issue | Location | Severity |
|---|-------|----------|----------|
| 1 | **Broken `<td>` nesting** — `<td>` opens second `<td>` inside actions template | Line 169-175 | 🐛 Bug |
| 2 | **Custom API format** — Uses `{items, pagination}` instead of Laravel-standard `{data, current_page, last_page, total, ...}` | Ajax response contract | 🏗️ DX |
| 3 | **Filter config mixed into columns** — `filter_type`, `filter_key`, `options` are column properties, bloating definitions | Lines 38-63 in controllers | 🏗️ DX |
| 4 | **Hardcoded sort param names** — `sort_by`/`sort_order` instead of convention | Line 69-70 | 🏗️ DX |
| 5 | **No from/to/summary display** — Only "page X of Y" | Line 203-206 | ➕ Feature |
| 6 | **No per-page selector** — Hardcoded to 10 in controller | — | ➕ Feature |
| 7 | **No checkbox/bulk actions** — Can't select multiple rows | — | ➕ Feature |
| 8 | **No row click** — Can't navigate on row click | — | ➕ Feature |
| 9 | **No export** — No CSV/Excel | — | ➕ Feature |
| 10 | **Skeleton colspan mismatch** — Uses `columns.length` ignoring potential checkbox/actions column | Line 146 | 🐛 Bug |

## Proposed Architecture

### API Contract (Laravel Standard)

Adopt the default `->paginate()` JSON so any controller returns it with zero custom code:

```json
{
  "data": [...],
  "current_page": 1,
  "last_page": 5,
  "per_page": 10,
  "total": 48,
  "from": 1,
  "to": 10
}
```

### Column Definitions (Clean)

Separate column config from filter config:

**Columns** (passed to component):
```php
$columns = [
    ['key' => 'invoice_date', 'label' => 'Date', 'sortable' => true],
    ['key' => 'students.name', 'label' => 'Student Name'],
    ['key' => 'grades.name', 'label' => 'Grade'],
];
```

**Filters** (optional, separate prop):
```php
$filters = [
    ['key' => 'student_name', 'label' => 'Student Name', 'type' => 'text'],
    ['key' => 'grade_id', 'label' => 'Grade', 'type' => 'select', 'options' => Grade::pluck('name', 'id')],
];
```

Controllers get simpler — just `->paginate()` and pass columns/filters.

### Props (New)

```php
@props([
    'columns' => [],
    'apiUrl' => '',
    'filters' => [],           // NEW: separate filter definitions
    'perPage' => 10,           // NEW
    'perPageOptions' => [10, 25, 50], // NEW
    'selectable' => false,     // NEW: show checkbox column
    'rowClickUrl' => null,     // NEW: route prefix for row click navigation
    'exportUrl' => null,       // NEW: CSV export endpoint
    'sortBy' => 'id',          // NEW: default sort column
    'sortOrder' => 'desc',     // NEW: default sort order
    'searchable' => false,     // NEW: global search input
    'primaryKey' => 'id',      // NEW: row key for checkboxes/select
])
```

### Features to Add

1. **Fix `<td>` nesting** — Extract actions into a proper column slot
2. **From/to display** — Show `1 - 10 من 48`
3. **Per-page selector** — Dropdown that re-fetches
4. **Bulk actions** — Checkbox column + slot for bulk action buttons
5. **Row click** — Optional URL template; e.g. `rowClickUrl="/fee-invoices/{id}/edit"`
6. **Export** — Optional export button linked to export URL
7. **Global search** — Debounced text input above filters
8. **Use `window.axios`** — Instead of global `axios` (follows app convention)

### Backward Compatibility

- Old `columns` with `filter_type`/`filter_key`/`options` continues to work (detect and auto-build `filters` internally)
- Old API format `{items, pagination}` supported via transitional adapter
- Emit deprecation warning in console when old format detected

### Migration Path

1. Release new component with backward compat
2. Update FeeInvoiceController and StudentsController to new column/filter format
3. Verify both pages work with both old and new API responses
4. Remove backward compat after verified

## Implementation Tasks

- [ ] T1: Fix broken `<td>` nesting in actions template
- [ ] T2: Add acceptance for both old/new API formats (transitional adapter)
- [ ] T3: Separate filters from columns (new `$filters` prop)
- [ ] T4: Add from/to/summary display in pagination bar
- [ ] T5: Add per-page selector dropdown
- [ ] T6: Add checkbox column + bulk actions slot
- [ ] T7: Add row click navigation
- [ ] T8: Add export button
- [ ] T9: Add global search input
- [ ] T10: Switch to `window.axios` (or configured HTTP instance)
- [ ] T11: Update FeeInvoiceController → use new column/filter format + standard `->paginate()`
- [ ] T12: Update StudentsController → use new column/filter format + standard `->paginate()`
- [ ] T13: Remove backward compat after verification
