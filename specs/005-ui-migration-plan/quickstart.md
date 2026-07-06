# Quickstart: UI Redesign & Migration Validation

## Prerequisites

- Node dependencies installed: `npm install`
- Dev server running: `npm run dev` or `composer run dev`
- Laravel app accessible at configured URL

## Phase-by-Phase Validation

### Phase 1: Layout Shell

```bash
# Load any page that extends the new layouts.app
# Verify:
# - Sidebar renders with nav groups (RTL, right side)
# - Topbar shows user name + module title
# - Content area fills remaining space
# - Sidebar scrolls independently of content
```

### Phase 2: Component Library

```bash
# Run Livewire component tests
php artisan test --compact --filter=SidebarTest
php artisan test --compact --filter=CardTest
php artisan test --compact --filter=DataTableTest
php artisan test --compact --filter=ModalTest
php artisan test --compact --filter=TabsTest

# Manual visual check for each x-ui.* component
# on a rendered page
```

### Phase 3: Settings Hub Page

```bash
# Navigate to /settings/{module}
# Verify:
# - Cards render in responsive grid (1→2→3 columns)
# - Active card has green border
# - Clicking a card navigates to the target page
# - The page extends the new layout (sidebar + topbar visible)
```

### Phase 4: Dashboard Page

```bash
# Navigate to /dashboard
# Verify:
# - KPI stat cards render with values
# - Donut chart renders via ApexCharts (check console for errors)
# - Line/area chart renders alongside donut
# - "آخر الفواتير" table uses DataTable component
# - Charts have RTL-correct labels
```

### Phase 5: List / Index Page (e.g., /finance/accounts)

```bash
# Navigate to /finance/accounts (or any list page)
# Test inline actions:
#   - Click column header → table re-sorts
#   - Click "next page" → next records load
#   - Open filter panel → enter criteria → results update
#   - Click inline "مطابقة" → row status updates
# All without full page reload
```

### Phase 6: Detail / Record Page

```bash
# Navigate to /finance/accounts/{id}
# Verify:
# - Record header shows name, balance, status badge, action buttons
# - Tab bar renders with correct Arabic labels
# - Click each tab → content loads on demand
# - Statement tab table supports sort/filter/page
```

### Phase 7: Mobile Responsive

```bash
# Open browser dev tools, set viewport to 375px width
# Verify:
# - Sidebar hidden by default, togglable via hamburger
# - Tables scroll horizontally without breaking layout
# - Cards stack in single column
# - All text readable without zoom
```

### Phase 8: Cleanup Verification

```bash
# Check for legacy Bootstrap/jQuery references
rg -l 'bootstrap\|jquery' resources/views/ resources/js/
# Expected: no matches (after full migration)

# Build production bundle
npm run build
# Verify bundle size is smaller after Bootstrap removal
```

## End-to-End Smoke Test

```bash
# 1. Open the app and log in
# 2. Visit the dashboard → verify KPIs + charts + latest records table
# 3. Navigate to a list page via sidebar → verify table sort/filter/page
# 4. Click "إضافة" → modal opens → fill form → submit → table refreshes
# 5. Click a record → detail page with tabs → switch tabs
# 6. Click inline action on a row → status updates
# 7. Resize to mobile → sidebar collapses, layout adapts
# 8. Wait for session to expire → toast notification → redirect to login
```

## Test Commands

```bash
# Run all Livewire component tests
php artisan test --compact --filter='Tests\\Feature\\Livewire\\Components'

# Run full test suite
php artisan test --compact
```
