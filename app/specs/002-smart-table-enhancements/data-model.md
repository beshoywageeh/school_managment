# Data Model: Smart-Table Enhancements

## Alpine Component State

### `x-data` State Shape

```js
{
    // Props (from Blade)
    columns: [],            // ColumnDef[]
    apiUrl: '',             // string
    filters: [],            // FilterDef[] (NEW)
    perPage: 10,            // number (NEW)
    perPageOptions: [10, 25, 50], // number[] (NEW)
    selectable: false,      // boolean (NEW)
    rowClickUrl: null,      // string|null (NEW)
    exportUrl: null,        // string|null (NEW)
    searchable: false,      // boolean (NEW)
    sortBy: 'id',           // string (NEW)
    sortOrder: 'desc',      // string (NEW)
    primaryKey: 'id',       // string (NEW)

    // Reactive state
    items: [],              // row data array
    sort: {
        by: 'id',           // string
        order: 'desc'       // 'asc'|'desc'
    },
    pagination: {
        current: 1,         // int
        last: 1,            // int
        total: 0,           // int (NEW)
        from: 0,            // int (NEW)
        to: 0,              // int (NEW)
        perPage: 10         // int (NEW)
    },
    filters: {},            // { [key: string]: string } — active filter values
    selectedItems: [],      // any[] (NEW) — array of primaryKey values
    loading: false,         // boolean
    error: null,            // string|null
    search: '',             // string (NEW) — global search value
    controller: null        // AbortController|null (NEW) — for request cancellation
}
```

### Computed/Helper Methods

| Method | Purpose |
|--------|---------|
| `init()` | Initialize filters from `$filters` prop (or auto-build from old column format), set default sort |
| `getNestedValue(obj, path)` | Traverse dotted path like `'students.name'` on data object |
| `sortBy(key)` | Toggle sort direction, call `fetchData(1)` |
| `fetchData(page)` | Cancel previous request, build params, send API call, update state |
| `toggleSelectAll()` | Select/deselect all visible items |
| `toggleItem(id)` | Toggle single item selection |
| `handleRowClick(item)` | Navigate to URL template if `rowClickUrl` is set |
| `exportData()` | Open `exportUrl` with current filter params |

## Props

### ColumnDef

| Field | Type | Required | Default | Description |
|-------|------|----------|---------|-------------|
| `key` | string | Yes | — | Dot-notation path to data field (e.g., `'students.name'`) |
| `label` | string | Yes | — | Display label (already translated) |
| `sortable` | bool | No | `false` | Whether column header is clickable for sorting |

**Backward compat (auto-detected):** If a column has `filter_type`, `filter_key`, or `options`, it's treated as old format. The component extracts these into separate FilterDef objects and emits a deprecation warning.

### FilterDef

| Field | Type | Required | Default | Description |
|-------|------|----------|---------|-------------|
| `key` | string | Yes | — | Query param name sent to API |
| `label` | string | Yes | — | Display label |
| `type` | string | Yes | — | `'text'` or `'select'` |
| `options` | array | Only for `select` | — | `{id: label}` pairs for dropdown |

## API Contract

See `contracts/data-table-api.md` for full details.

## State Transitions

```
Initial (init)
  │
  ├─► fetchData() ──► loading=true ──► API call ──► loading=false, items/pagination updated
  │                                              └─► error ──► loading=false, error='message'
  │
  ├─► sortBy(key) ──► sort state changes ──► fetchData(1)
  │
  ├─► perPage change ──► pagination.perPage changes ──► fetchData(1) ──► selectedItems cleared
  │
  ├─► filter change ──► (debounced) fetchData(1) ──► selectedItems cleared
  │
  ├─► page navigation ──► fetchData(N) ──► selectedItems cleared
  │
  ├─► toggleSelectAll ──► selectedItems = all|[] visible items
  │
  ├─► toggleItem(id) ──► selectedItems toggled
  │
  └─► search change ──► (debounced 300ms) fetchData(1)
```

## Validation Rules

| Field | Rule |
|-------|------|
| `columns` | Must be non-empty array |
| Each column `key` | Must be non-empty string |
| Each column `label` | Must be non-empty string |
| `filters[].type` | Must be `'text'` or `'select'` |
| `filters[].options` | Required when `type === 'select'` |
| `apiUrl` | Must be non-empty string |
| `perPage` | Must be one of `perPageOptions` values |
| `primaryKey` | Must match a field name in the row data |
