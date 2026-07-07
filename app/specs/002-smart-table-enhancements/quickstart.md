# Quickstart: Smart-Table Enhancements Validation

## Prerequisites

- Laravel dev server running (`php artisan serve` or Valet/Herd)
- Node dependencies installed (`npm install && npm run build`)
- Database migrated with seed data

## Validation Scenarios

### Scenario 1: Component Renders With New Props

**Setup:**
```blade
<x-smart-table
    :columns="[['key' => 'name', 'label' => 'Name', 'sortable' => true], ['key' => 'email', 'label' => 'Email']]"
    :filters="[['key' => 'name', 'label' => 'Name', 'type' => 'text']]"
    api-url="/api/items"
    :per-page="25"
    :per-page-options="[10, 25, 50]"
    :selectable="true"
    row-click-url="/items/{id}/edit"
    export-url="/api/items/export"
    :searchable="true"
/>
```

**Expected:**
- Table renders with "Name" (sortable) and "Email" columns
- Filter row shows a text input labeled "Name"
- Per-page dropdown shows "25" as selected, options [10, 25, 50]
- Checkbox column visible in header and rows
- Search input above filters
- Export button visible

### Scenario 2: Standard Pagination Works

**Setup:** Create a test controller returning `Model::query()->paginate(10)`.

**Expected:**
- Table loads data from the endpoint
- Pagination shows "Showing 1 – 10 of X"
- Previous/Next buttons work
- Changing per-page re-fetches and resets to page 1

### Scenario 3: Backward Compat — Old Format

**Setup:** Pass columns with `filter_type` inside (old format). API returns `{items, pagination}`.

**Expected:**
- Filters render from embedded column definitions
- Table renders data from `items` array
- Console shows deprecation warning (once)

### Scenario 4: Row Click Navigation

**Setup:** Set `row-click-url="/students/{id}/edit"`.

**Expected:**
- Hovering a row shows `cursor-pointer`
- Click navigates to `/students/42/edit` for row with `id: 42`
- Clicking a checkbox or action button does NOT navigate

### Scenario 5: Bulk Selection

**Setup:** Set `:selectable="true"`.

**Expected:**
- Checkbox column renders
- Check "Select All" → all visible rows checked
- Uncheck one → "Select All" unchecked
- "X selected" bar appears below table
- Changing page clears selection

### Scenario 6: Export

**Setup:** Set `export-url="/api/items/export"`.

**Expected:**
- Export button visible
- Clicking opens URL with current filters
- CSV file downloads

### Scenario 7: Request Cancellation

**Setup:** Rapidly change per-page and sort.

**Expected:**
- Only the latest request's response updates the table
- No race condition where stale response overwrites newer data

### Scenario 8: Accessibility

**Setup:** Navigate table using keyboard (Tab).

**Expected:**
- Sort buttons, checkboxes, export button, search/filter inputs, per-page dropdown all focusable
- ARIA labels present on interactive elements
- Screen reader announces selection count via `aria-live`

## Verification Commands

```bash
# Run component-specific feature tests
php artisan test --compact --filter=SmartTable

# Quick smoke test: check route loads
php artisan route:list --path=students

# Manual: open /students in browser, verify table
echo "Open http://localhost/students in browser"
```
