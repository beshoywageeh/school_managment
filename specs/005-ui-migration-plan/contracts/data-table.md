# Contract: DataTable

**Component**: `x-ui.data-table` (Blade + Alpine presentation)
**Data driver**: Livewire component (event-driven, hybrid approach)

## Architecture

The DataTable uses a **hybrid pattern**: the existing Alpine-driven `x-data="dataTable()"`
presentation layer is kept (Blade view). A companion Livewire component handles
server-side data fetching, sorting, filtering, and pagination. The Livewire component
communicates with the Alpine component via dispatched events or `$wire` access.

### Blade Component
**File**: `resources/views/components/ui/data-table.blade.php` ✅ Already exists

**Props**:
- `columns: array` — `[{key: string, label: string, sortable: bool, type?: 'status'|'text'|'date'|'currency'}]`
- `perPage: int` (default 15)
- `livewireComponent: ?string` — companion Livewire component name
- `rowActions: ?string` — Blade view name for action buttons (optional, role-gated)

**State** (Alpine `dataTable()`):
- `rows: []`, `loading: bool`, `error: string|null`
- `sortField: ?string`, `sortDirection: 'asc'|'desc'`
- `currentPage: int`, `lastPage: int`, `total: int`, `from: int`, `to: int`
- `filters: {}`

### Livewire Data Source (Companion Component)

**Class**: `App\Livewire\Components\Table\DataTable.php`

**Props**:
- `model: string` — Eloquent model class to query
- `columns: array` — column definitions (passed from Blade)
- `filters: array` — `[{key: string, label: string, type: 'search'|'select', options?: array}]`
- `perPage: int` (default 15)
- `queryModifier: ?callable` — optional scope to apply to base query

**State**:
- `sortKey: ?string`, `sortDir: 'asc'|'desc'`
- `filterValues: object`, `page: int`, `lastPage: int`, `total: int`

**Methods**:
- `fetchData(): array` — queries model, returns `{rows, pagination}` JSON
- `sortBy(string $key): void` — toggle sort direction, re-fetch
- `applyFilters(): void` — reset to page 1, re-fetch
- `nextPage(): void`, `prevPage(): void`
- `performAction(int $id, string $action): void` — inline row action

**Communication**:
- Livewire renders initial JSON into Alpine via `x-init`
- Alpine dispatches `livewire-table-{name}-sort`, `livewire-table-{name}-filter`,
  `livewire-table-{name}-page` events
- Livewire listens via `$this->dispatch()` or `$wire` in Alpine

**Role awareness**:
- `columns` can be filtered: add `permission: ?string` on each column
- `rowActions` view can show different actions per role
- Companion Livewire component reads `auth()->user()` to filter data

**Accessibility**:
- Table: `<table role="grid" aria-label="..." aria-rowcount="...">`
- Sortable headers: `role="columnheader"`, `aria-sort="ascending|descending|none"`,
  `tabindex="0"`, `@keydown.enter="sort(key)"`
- Rows: `role="row"`, `aria-rowindex="..."`, `tabindex="0"`
- Pagination: `<nav role="navigation" aria-label="التنقل بين الصفحات">`, buttons have `aria-label`
- Loading: spinner has `role="status"`, `aria-live="polite"`
- Empty: `role="status"`, announces "لا توجد بيانات"
- Error: `role="alert"`, `aria-live="assertive"`

**States**: Loading → Loaded / Empty / Error
