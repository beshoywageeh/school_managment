# Research: Smart-Table Enhancements

## Codebase Exploration

### Current Smart-Table Component
- **File**: `resources/views/components/smart-table.blade.php` (215 lines)
- **Approach**: Single-file Blade component with inline Alpine.js `x-data`
- **Props**: `columns`, `initialItems`, `apiUrl`
- **Alpine State**: `columns`, `items`, `filters`, `sort`, `loading`, `error`, `pagination`
- **API Pattern**: `axios.get(apiUrl, { params: { page, sort_by, sort_order, ...filters } })`
- **Response format expected**: `{ items: [...], pagination: { current_page, last_page } }`
- **Known bug**: Nested `<td>` at lines 169-175 (actions template opens a second `<td>` inside a `<td>`)

### Existing Usage
1. **FeeInvoiceController/index** (no actions slot):
   ```blade
   <x-smart-table :columns="$columns" :initial-items="$fee_invoices" api-url="{{ route('fee_invoice.index') }}" />
   ```

2. **Students/Index** (with actions slot):
   ```blade
   <x-smart-table :columns="$columns" :initial-items="$students" api-url="{{ route('students.index') }}">
       <x-slot:actions>...</x-slot:actions>
   </x-smart-table>
   ```

### x-ui.data-table (Separate Component)
- **File**: `resources/js/Components/DataTable/index.js` (84 lines)
- **Approach**: Pure Alpine.js component registered globally via `Alpine.data('dataTable', dataTable)`
- **Used by**: `resources/views/components/ui/data-table.blade.php`
- **API Pattern**: `window.axios.get(url, { params: { page, per_page, sort, direction, filter[...] } })`
- **Response format**: Laravel-standard paginated JSON (`.data`, `.current_page`, `.last_page`, `.total`, `.from`, `.to`)
- **Key difference**: Uses `per_page`, `sort`/`direction`, `filter[...]` param names — different from smart-table's `sort_by`/`sort_order`

### Axios Configuration (resources/js/app.js)
```js
import axios from "axios";
window.axios = axios;
const http = axios.create({ ... });
```
Both `window.axios` and a configured `http` instance are available.

## Key Findings

| Finding | Decision |
|---------|----------|
| `window.axios` is available globally | Use `window.axios` per convention (requirement CA-implied) |
| x-ui.data-table uses Laravel-standard pagination | Confirm this is the target format for smart-table too |
| Smart-table uses `sort_by`/`sort_order` param names | Keep these for backward compat (assumption in spec) |
| Existing controllers return custom `{items, pagination}` format | Adapter needed during migration |
| No existing JS test infrastructure for Alpine components | Testing will be PHPUnit/feature-test based (load page, assert HTML) |
| Fee invoices page has no actions slot → simpler test case | Students page has actions slot → test both variants |

## Technology Choices

| Decision | Rationale | Alternatives Considered |
|----------|-----------|------------------------|
| Keep `sort_by`/`sort_order` param names (not switch to `sort`/`direction`) | Backward compatibility with existing controllers; can add alias later | Switch to `sort`/`direction` like x-ui.data-table (rejected: breaks existing controller code) |
| AbortController for request cancellation | Native browser API, no extra dependency | Axios CancelToken (deprecated in newer axios), RxJS (heavy) |
| Keep as single Blade file (no JS extraction) | Follows project pattern; all Alpine state is inline | Extract Alpine logic to `resources/js/Components/SmartTable/` (rejected: too heavy for this scope) |
| Use `window.axios` not custom `http` instance | Matches existing smart-table convention; `http` has interceptors that may interfere | Use `http` instance (rejected: existing code uses `axios.get` directly) |
