# Contract: DataTable

**Component**: `livewire:table.data-table`
**Class**: `App\Http\Livewire\Components\Table\DataTable.php`

## Interface

**Props**:
- `model: string` — Eloquent model class to query
- `columns: array` — `[{key: string, label: string, sortable: bool}]`
- `filters: array` — `[{key: string, label: string, type: 'search'|'select', options?: array}]`
- `rowActions: ?string` — Blade view name for action buttons
- `perPage: int` (default 10)
- `queryModifier: ?callable` — optional scope to apply to base query

**State**:
- `rows: Collection` — current page records
- `sortKey: ?string`
- `sortDir: 'asc'|'desc'`
- `filterValues: object` — key-value pairs for current filters
- `page: int`
- `lastPage: int`
- `total: int`
- `loading: bool`

**Methods**:
- `sortBy(string $key): void` — toggle sort direction, re-fetch
- `applyFilters(): void` — reset to page 1, re-fetch
- `nextPage(): void`
- `prevPage(): void`
- `performAction(int $id, string $action): void` — inline row action

**Events emitted**:
- `table-refresh` — request sibling table to reload

**Events listened**:
- `table-refresh` — re-fetch current data

**States**: Loading → Loaded / Empty / Error
