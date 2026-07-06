# Quickstart: UI Redesign & Migration Validation

## Prerequisites

- Node dependencies installed: `npm install`
- Dev server running: `npm run dev` or `composer run dev`
- Laravel app accessible at configured URL
- Test users with Admin, Teacher, and Accountant roles for role-based validation

## Phase-by-Phase Validation

### Phase 1: Layout Shell + Role Filtering

```bash
# Load any page that extends the new layouts.app
# Verify:
# - Sidebar renders with nav groups (RTL, right side)
# - Topbar shows user name + module title
# - Content area fills remaining space
# - Sidebar scrolls independently of content
# - ADMIN sees all nav groups
# - ACCOUNTANT sees only financial modules
# - TEACHER sees only teaching modules
# - Skip-to-content link visible on focus (Tab on page load)
```

### Phase 2: Component Library + Accessibility

```bash
# Run existing component tests
php artisan test --compact --filter=ComponentRenderTest
php artisan test --compact --filter=SettingsHubTest
php artisan test --compact --filter=LayoutShellTest
php artisan test --compact --filter=ListPageTest
php artisan test --compact --filter=DetailPageTest
php artisan test --compact --filter=DashboardTest

# Run new Livewire component tests
php artisan test --compact --filter=SidebarRoleTest

# Manual visual check for each x-ui.* component on a rendered page
# Verify accessibility for each component:
# - Button: focus ring visible, aria-disabled when disabled, aria-label present
# - Card: aria-label, tabindex="0", focus visible
# - Status badge: role="status", aria-label, color + text (not color alone)
# - Modal: focus trap active, Escape closes, aria-labelledby correct
# - Tabs: Arrow keys navigate, aria-selected correct, tabpanel focusable
```

### Phase 3: Settings Hub Page

```bash
# Navigate to /settings/{module}
# Verify:
# - Cards render in responsive grid (1→2→3 columns)
# - Active card has green border
# - Clicking a card navigates to the target page
# - The page extends the new layout (sidebar + topbar visible)
# - Tab through cards with keyboard — each receives focus
```

### Phase 4: Dashboard Page (Role-Aware)

```bash
# Login as ADMIN:
#   - Verify 4 KPI stat cards render
#   - Donut chart + line chart render via ApexCharts (check console)
#   - Latest records table uses DataTable hybrid
#   - Charts have RTL-correct labels
#
# Login as ACCOUNTANT:
#   - Verify 4 financial KPI cards (Invoiced, Collected, Pending, etc.)
#   - Verify student chart is hidden
#   - Verify 4 quick actions (financial only)
#
# Login as TEACHER:
#   - Verify 3 teaching KPI cards (My Students, Today Schedule, Pending Tasks)
#   - Verify all charts are empty
#   - Verify 3 quick actions (teaching only)
```

### Phase 5: List / Index Page (e.g., /finance/accounts)

```bash
# Navigate to /finance/accounts (or any list page)
# Test inline actions:
#   - Click column header → table re-sorts (aria-sort updates)
#   - Click "next page" → next records load
#   - Open filter panel → enter criteria → results update
#   - Click inline "مطابقة" → row status updates
# All without full page reload
#
# Accessibility:
#   - Sortable headers: focusable, Enter to sort, aria-sort="asc|desc|none"
#   - Rows: aria-rowindex, tabindex="0"
#   - Pagination: nav role="navigation", aria-label, buttons labeled
#   - Loading: aria-busy="true" + role="status" spinner
#   - Empty: role="status" announces "لا توجد بيانات"
#   - Error: role="alert" on error message
```

### Phase 6: Detail / Record Page

```bash
# Navigate to /finance/accounts/{id}
# Verify:
# - Record header shows name, balance, status badge, action buttons
# - Tab bar renders with correct Arabic labels
# - Click each tab → content loads on demand
# - Statement tab table supports sort/filter/page
#
# Accessibility:
#   - Tab Arrow Left/Right navigates between tabs
#   - aria-selected on active tab, aria-controls linking to panel
#   - aria-labelledby on tabpanel from tab button
#   - Record header action buttons keyboard-accessible
```

### Phase 7: Mobile Responsive

```bash
# Open browser dev tools, set viewport to 375px width
# Verify:
# - Sidebar hidden by default, togglable via hamburger
# - Hamburger has aria-label="فتح القائمة" / "إغلاق القائمة" + aria-expanded
# - Focus moves into sidebar when opened
# - Tables scroll horizontally without breaking layout
# - Cards stack in single column
# - All text readable without zoom
# - Escape key closes mobile sidebar drawer
```

### Phase 8: Accessibility Audit & Cleanup

```bash
# Comprehensive accessibility audit:
# 1. Keyboard-only navigation through every page type
# 2. Screen reader test (NVDA/VoiceOver) on migrated pages
# 3. Color contrast check (WCAG 2.1 AA: 4.5:1 normal, 3:1 large)
# 4. 200% zoom — no content loss or horizontal page scroll
# 5. Focus order follows visual order

# Check for legacy Bootstrap/jQuery references
rg -l 'bootstrap\|jquery' resources/views/ resources/js/
# Expected: no matches (after full migration)

# Build production bundle
npm run build
# Verify bundle size is smaller after Bootstrap removal
```

## End-to-End Smoke Test

```bash
# 1. Open the app and log in as ADMIN
# 2. Visit the dashboard → verify KPIs + charts + latest records table
# 3. Navigate to a list page via sidebar → verify table sort/filter/page
# 4. Click "إضافة" → modal opens → fill form → submit → table refreshes
# 5. Click a record → detail page with tabs → switch tabs with Arrow keys
# 6. Click inline action on a row → status updates → announced via live region
# 7. Resize to mobile → sidebar collapses, focus management works
# 8. Log in as ACCOUNTANT → verify different sidebar + KPI cards
# 9. Log in as TEACHER → verify different sidebar + KPI cards
# 10. Wait for session to expire → toast notification → redirect to login
```

## Test Commands

```bash
# Run all existing UI tests
php artisan test --compact --filter='Tests\\Feature\\Ui'

# Run role-aware dashboard tests
php artisan test --compact --filter=DashboardRedesignTest

# Run all Livewire component tests
php artisan test --compact --filter='Tests\\Feature\\Livewire'

# Run full test suite (including zero-regression check)
php artisan test --compact
```
