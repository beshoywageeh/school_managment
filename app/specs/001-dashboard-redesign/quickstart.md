# Quickstart Validation Guide: Dashboard Redesign

## Prerequisites

- Local dev server running (`php artisan serve` or `composer run dev`)
- Database migrated and seeded
- Logged-in user with Admin role

---

## Validation Scenarios

### 1. Sidebar Visual Check

**Setup:** Log in with any role.

**Steps:**
1. Observe sidebar at default collapsed state (64px, icons only)
2. Hover over sidebar — it should expand to 256px with all labels visible
3. Click the pin icon at the bottom — sidebar stays expanded after unhovering
4. Click pin again — sidebar collapses back

**Expected:** Smooth 300ms transition between states. All nav item labels appear when expanded. Pin icon toggles pinned state.

**Troubleshooting:**
- If sidebar doesn't expand, check `app.blade.php` for Alpine `x-data` attributes
- If labels remain hidden, check `x-show="sidebarExpanded"` directives in sidebar

---

### 2. Sidebar Search

**Setup:** Ensure sidebar is expanded.

**Steps:**
1. Type a partial nav item name in the search input (e.g., "student")
2. Observe that only matching items remain visible
3. Clear the search — all items reappear

**Expected:** Real-time filtering with no perceptible lag.

---

### 3. Sidebar Tooltips

**Setup:** Sidebar in collapsed state.

**Steps:**
1. Hover over any nav icon
2. Observe that a tooltip appears showing the item label

**Expected:** Tooltip visible on all icon-only nav items when sidebar is collapsed.

---

### 4. Mobile Sidebar

**Setup:** Resize browser to < 1024px width.

**Steps:**
1. Verify sidebar is hidden by default
2. Click the hamburger icon in the header
3. Sidebar should slide in from the right (RTL) as a full-width overlay
4. Click the dark backdrop — sidebar should close

**Expected:** Off-canvas sidebar at 288px (w-72) with `bg-black/50` backdrop. Smooth slide transition.

---

### 5. Dashboard Widget Load

**Setup:** Navigate to dashboard (`/` or `/dashboard`).

**Steps:**
1. Observe initial loading state (4 pulsing skeleton cards)
2. Wait for data to load
3. Verify 4 stat cards render with correct values
4. Verify quick action row shows with icons
5. Verify charts render (line + bar)
6. Verify recent activity timeline shows 5 entries

**Expected:** Loading skeleton appears then transitions to content. Stat cards show student/parent/employee counts and pending balance.

**Verify with:**
```bash
curl http://localhost/api/dashboard/widgets \
  -H "Content-Type: application/json" \
  -b <session-cookie>
```

---

### 6. Chart Resize on Sidebar Toggle

**Setup:** Dashboard loaded with charts visible.

**Steps:**
1. Open browser DevTools and inspect the chart containers
2. Toggle sidebar expanded/collapsed
3. Verify charts re-render to fill available width (no gaps or overflow)

**Expected:** Charts resize dynamically when sidebar toggles. ApexCharts call `chart.resize()` in response.

---

### 7. Quick Action Mobile Scroll

**Setup:** Resize browser to mobile width (~375px).

**Steps:**
1. Scroll the quick action row horizontally
2. Verify it scrolls without wrapping to new lines

**Expected:** `overflow-x-auto` behavior with horizontal scroll, no vertical wrapping.

---

### 8. Button & Input Standardization (VF-4, VF-5)

**Setup:** Navigate to any backend CRUD page (e.g., students, employees, invoices).

**Steps:**
1. Inspect action buttons (Create, Edit, Save, Cancel, Delete)
2. Verify primary buttons use: `px-4 py-2 bg-primary text-white rounded-lg text-sm font-medium`
3. Verify secondary/cancel buttons use: `px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg text-sm font-medium`
4. Verify danger/delete buttons use: `px-4 py-2 bg-danger text-white rounded-lg text-sm font-medium`
5. Inspect form inputs — verify all use `rounded-lg border-gray-300 focus:ring-primary` patterns
6. Check different view types: create form, edit form, filter/search form, table

**Expected:** All buttons across all backend views use one of the three standardized class patterns. All inputs have consistent border radius, focus ring, and sizing.

**Troubleshooting:**
- Run audit commands in §Manual Audit Commands to find non-standard classes
- Fix by replacing the class attribute with the standardized pattern

---

### 9. Component Consistency

**Setup:** Navigate to an inventory page with CRUD table.

**Steps:**
1. Click a "Create" button to open the modal
2. Verify modal has: header with title + close, form body, footer with cancel + submit
3. Verify table loading state shows animated pulse skeletons
4. Verify table action column uses a dropdown (not inline buttons)
5. Resize to mobile and verify modal is full-screen

**Expected:** Consistent component markup across all inventory pages.

---

## Running Tests

```bash
# Run all tests
php artisan test --compact

# Run specific test file (when created)
php artisan test --compact --filter=DashboardRedesign

# Run route verification
php artisan route:list --name=dashboard
```

## Manual Audit Commands

```bash
# Check card class consistency across backend views
rg -l "rounded-xl" resources/views/ | wc -l

# Check for raw input elements remaining
rg -n "<input(?! )" resources/views/backend/ resources/views/components/ | grep -v "x-" | grep -v "wire:"

# Check for gradient classes
rg "bg-gradient" resources/views/

# VF-4: Check button class standardization (count non-standard patterns)
rg -n 'class="[^"]*btn[^"]*"' resources/views/backend/ || true
rg -n 'class="[^"]*bg-gray[^"]*"' resources/views/backend/ | head -20

# VF-5: Check input focus ring consistency
rg -n 'class="[^"]*border[^"]*rounded[^"]*"' resources/views/backend/ | grep -v "focus:ring-primary" | head -20
```
