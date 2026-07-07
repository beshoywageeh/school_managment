# Quickstart Validation Guide: UI Migration

**Phase 1 Output** — Runnable validation scenarios to prove the feature works end-to-end.

## Prerequisites

- Laravel application running locally (`php artisan serve` or Valet/Sail)
- Node dependencies installed: `npm install && npm run build`
- Admin user seeded: run `php artisan db:seed --class=AdminUserSeeder` (if exists) or create manually
- An existing JSON API endpoint returning paginated data (e.g., `/api/users`)

## Validation Scenarios

### 1. Layout Shell Renders Correctly

**Steps**:
1. Open `resources/views/layouts/app.blade.php`
2. Verify it contains three regions: `<x-ui.sidebar>`, `<x-ui.topbar>`, `{{ $slot }}`
3. Load any authenticated page in the browser
4. Verify:
   - Right-side sidebar with collapsible nav groups
   - Top header bar with user name
   - Main content area fills remaining width
   - RTL alignment (`dir="rtl"` on `<html>`)

**Expected**: Three-region layout renders with RTL alignment.

---

### 2. Component Library Renders in Isolation

**Steps**:
1. Create a temporary test view at `resources/views/test-components.blade.php` using the layout:

```blade
<x-ui.layout>
    <x-slot:content>
        <x-ui.card icon="chart" label="Dashboard" href="/dashboard" active />
        <x-ui.button variant="primary" icon="plus">إضافة</x-ui.button>
        <x-ui.status-badge status="active" label="نشط" />
        <x-ui.data-table endpoint="/api/users" :columns="[['key'=>'id','label'=>'ID'],['key'=>'name','label'=>'Name']]" />
        <x-ui.modal title="إضافة جديد">
            <form>...</form>
        </x-ui.modal>
        <x-ui.tabs :tabs="[['key'=>'details','label'=>'التفاصيل'],['key'=>'history','label'=>'السجل']]" />
    </x-slot>
</x-ui.layout>
```

2. Add a route: `Route::view('/test-components', 'test-components')->middleware('auth');`
3. Visit `/test-components` in browser
4. Verify each component renders with correct styling

---

### 3. Data Table Fetches & Paginates

**Steps**:
1. Create a minimal JSON endpoint (or use existing):

```php
Route::get('/api/users', function () {
    return User::paginate(15);
})->middleware('auth');
```

2. Render `<x-ui.data-table endpoint="/api/users" :columns="[['key'=>'id','label'=>'ID', 'sortable'=>true], ['key'=>'name','label'=>'Name', 'sortable'=>true]]" />`
3. Verify:
   - Table loads with data on page load
   - Click column header → sort asc/desc
   - Click pagination "next" → loads page 2
   - Shows "1-15 of {total}" display

---

### 4. Modal CRUD Flow

**Steps**:
1. Create a test page with a modal and data table
2. Click "إضافة" button → modal opens with `role="dialog"` and `aria-labelledby`
3. Tab through fields → focus is trapped within modal
4. Press Escape → modal closes
5. Submit empty form → validation errors appear inline on fields
6. Submit valid data → modal closes, table refreshes, toast shows "تم الحفظ بنجاح"

---

### 5. Error States

**Steps**:
1. Disconnect network → trigger Axios call → toast "حدث خطأ في الاتصال" appears, auto-dismisses after 5s
2. Submit form with invalid data → 422 response → inline errors on fields, no toast
3. Session expires (clear cookies) → trigger Axios call → toast "انتهت الجلسة" → redirected to login

---

### 6. Mobile Responsiveness

**Steps**:
1. Open browser DevTools, set viewport to 375px width
2. Verify:
   - Sidebar is hidden by default
   - Hamburger menu icon visible in topbar
   - Click hamburger → sidebar slides in as overlay from right
   - Click outside sidebar → it closes
3. Set viewport to 1024px → sidebar is visible, no hamburger

---

## Running Tests

```bash
# Run all UI migration feature tests
php artisan test --compact tests/Feature/Ui/

# Run specific test
php artisan test --compact --filter=LayoutShellTest

# Check component rendering
php artisan test --compact --filter=ComponentRenderTest
```

## Expected Outcomes

| Scenario | Expected Result | Test File |
|----------|----------------|-----------|
| Layout renders three regions | DOM contains sidebar, topbar, content | `LayoutShellTest.php` |
| Card component renders | Icon, label, active border present | `ComponentRenderTest.php` |
| Data table fetches data | Rows visible, pagination controls work | `DataTableEndpointTest.php` |
| Modal opens/closes | Focus trap, Escape close, ARIA attrs | `ComponentRenderTest.php` |
| Error toast appears | Toast visible for 5s, auto-dismiss | `ComponentRenderTest.php` |
| Mobile sidebar drawer | Hidden at <768px, toggle opens overlay | `LayoutShellTest.php` |

## Artifacts

| Artifact | Location |
|----------|----------|
| Spec | [spec.md](./spec.md) |
| Implementation Plan | [plan.md](./plan.md) |
| Research | [research.md](./research.md) |
| Data Model | [data-model.md](./data-model.md) |
| API Contracts | [contracts/data-table-api.md](./contracts/data-table-api.md) |
| Axios Contract | [contracts/axios-interceptor.md](./contracts/axios-interceptor.md) |
| Modal CRUD Contract | [contracts/modal-crud-flow.md](./contracts/modal-crud-flow.md) |
