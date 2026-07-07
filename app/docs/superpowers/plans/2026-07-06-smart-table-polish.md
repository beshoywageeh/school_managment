# Smart Table Visual Polish Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Improve the `<x-smart-table>` component's visual appearance using Tailwind v4 project theme tokens and refined interactive states.

**Architecture:** Single-file change to `resources/views/components/smart-table.blade.php`. All Alpine.js logic, Blade props, slots, and API contracts remain identical. No behavior changes.

**Tech Stack:** Tailwind CSS v4, Alpine.js (inline), Blade

## Global Constraints

- Only `resources/views/components/smart-table.blade.php` is modified
- All Alpine.js logic (x-data, methods, event handlers) must remain identical
- All Blade props, slots, and API contracts must remain identical
- No dark mode support
- Tests in `tests/Feature/SmartTableComponentTest.php` must continue to pass without modification
- Use only theme tokens from `resources/css/app.css`: `primary`, `primary-dark`, `surface`, `muted`, `border`, `text-primary`, `text-secondary`, `danger`, `shadow-card`, `radius-card`
- Hardcoded `indigo-*`, `gray-*`, `red-500` colors must be replaced

---
## File Structure

| File | Action |
|---|---|
| `resources/views/components/smart-table.blade.php` | Modify (CSS class changes only) |
| `tests/Feature/SmartTableComponentTest.php` | No changes (must pass) |

---

### Task 1: Theme Token Migration

**Files:**
- Modify: `resources/views/components/smart-table.blade.php`

**Interfaces:**
- Consumes: None (standalone task)
- Produces: Updated component with all hardcoded colors replaced by theme tokens

This task replaces every hardcoded Tailwind color class with the project's theme tokens.

**Color mapping reference (applied throughout the file):**
- `bg-indigo-600` → `bg-primary`
- `hover:bg-indigo-700` → `hover:bg-primary-dark`
- `text-indigo-600` → `text-primary`
- `text-indigo-700` → `text-primary`
- `bg-indigo-50` → `bg-primary/5`
- `border-indigo-200` → `border-primary/20`
- `bg-gray-100` → `bg-muted`
- `bg-gray-50` → `bg-muted`
- `bg-white` → `bg-surface`
- `text-gray-700` → `text-text-primary`
- `text-gray-600` → `text-text-secondary`
- `text-gray-500` → `text-text-secondary`
- `text-gray-400` → `text-text-secondary`
- `text-gray-300` → `text-border`
- `text-red-500` → `text-danger`
- `border-gray-200` → `border-border`
- `border-gray-300` → `border-border`
- `hover:bg-gray-50/80` → `hover:bg-primary/5`
- `hover:bg-gray-50` → `hover:bg-muted`
- `shadow-sm` → `shadow-card`
- `rounded-xl` → `rounded-card`
- `focus:border-indigo-500 focus:ring-indigo-500` → `focus:border-primary focus:ring-primary/30`

- [ ] **Step 1: Replace colors in the search/export toolbar (lines 176-197)**

Replace `text-indigo-600`, `bg-indigo-600`, `hover:bg-indigo-700`, `focus:border-indigo-500 focus:ring-indigo-500` with theme tokens.

- [ ] **Step 2: Replace colors in the filter panel (lines 200-254)**

Replace `bg-gray-50`, `border-gray-200`, `text-gray-600`, `border-gray-300`, `focus:ring-indigo-500` with theme tokens in both the new `$filters` section and the legacy fallback section.

- [ ] **Step 3: Replace colors in the table card wrapper and thead (lines 256-259)**

Replace `bg-white`, `rounded-xl`, `border-gray-200`, `shadow-sm` on the wrapper. Replace `bg-gray-100`, `text-gray-700`, `border-gray-200` on the thead.

- [ ] **Step 4: Replace colors in table header cells and sort buttons (lines 261-285)**

Replace `border-gray-200`, `text-gray-300` (sort inactive indicator), `text-indigo-600` with theme tokens.

- [ ] **Step 5: Replace colors in table body and row cells (lines 288-342)**

Replace `divide-gray-200`, `bg-gray-200` (skeleton), `text-gray-500`, `text-red-500`, `text-gray-400`, `hover:bg-gray-50/80` with theme tokens.

- [ ] **Step 6: Replace colors in bulk actions bar and pagination footer (lines 346-393)**

Replace `bg-indigo-50`, `border-indigo-200`, `text-indigo-700`, `bg-gray-50`, `border-gray-200`, `border-gray-300`, `text-gray-600`, `text-gray-700`, `text-indigo-600`, `hover:bg-gray-50`, `bg-white` with theme tokens.

- [ ] **Step 7: Run tests to verify nothing broke**

Run: `php artisan test --compact --filter=SmartTableComponentTest`
Expected: All 8 tests PASS

- [ ] **Step 8: Commit**

```bash
git add resources/views/components/smart-table.blade.php
git commit -m "refactor: migrate smart-table colors to project theme tokens"
```

---

### Task 2: Interactive States & Visual Polish

**Files:**
- Modify: `resources/views/components/smart-table.blade.php`

**Interfaces:**
- Consumes: Task 1 (file already updated with theme tokens)
- Produces: Final polished component

- [ ] **Step 1: Add focus-visible ring to all interactive elements**

Add `focus-visible:ring-2 focus-visible:ring-primary/30` to:
- Search input (line ~185)
- All text filter inputs (lines ~206, 233)
- All select filter dropdowns (lines ~212, 240)
- Per-page select (line ~367)
- Pagination prev/next buttons (lines ~376, 386)
- Export button (line ~191)
- Sort buttons in thead (line ~274)

- [ ] **Step 2: Add smooth transitions and improved hover states**

- Add `transition-colors duration-150` to table row `<tr>` (line ~310)
- Add `transition-all duration-150 ease-in-out` to pagination buttons and export button
- Add `hover:bg-primary/10 rounded-md` to sort button (line ~274)
- Add `disabled:opacity-50 disabled:cursor-not-allowed` to all disabled buttons

- [ ] **Step 3: Replace text sort indicators with inline SVG arrows**

Replace the text characters `↑`, `↓`, `⇅` in the sort button template with inline SVGs:

```html
<!-- Ascending (sort.by === col.key && sort.order === 'asc') -->
<svg x-show="sort.by === col.key && sort.order === 'asc'" class="w-3.5 h-3.5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path d="M5 15l7-7 7 7"/></svg>
<!-- Descending (sort.by === col.key && sort.order === 'desc') -->
<svg x-show="sort.by === col.key && sort.order === 'desc'" class="w-3.5 h-3.5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path d="M19 9l-7 7-7-7"/></svg>
<!-- Unsorted (sort.by !== col.key) -->
<svg x-show="sort.by !== col.key" class="w-3.5 h-3.5 text-border" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M8 7l4-4 4 4M8 17l4 4 4-4"/></svg>
```

- [ ] **Step 4: Polish pagination and export buttons to pill shape**

Add `rounded-full` to prev/next buttons (lines ~376, 386) and to the export button (line ~192). Keep the existing border/background but now as pill-shaped.

- [ ] **Step 5: Style checkboxes with custom appearance**

Replace plain checkboxes in the select-all th (line ~263) and row td (line ~314) with custom-styled ones:

```html
<input type="checkbox"
    class="h-4 w-4 rounded border-border text-primary focus:ring-2 focus:ring-primary/30 focus:ring-offset-0 cursor-pointer"
    ...>
```

- [ ] **Step 6: Improve loading skeleton with theme-aware styling**

Replace the skeleton structure (lines ~292-300) to use `bg-muted` instead of `bg-gray-200` and match column count properly with `rounded-md`.

- [ ] **Step 7: Run tests to verify nothing broke**

Run: `php artisan test --compact --filter=SmartTableComponentTest`
Expected: All 8 tests PASS

- [ ] **Step 8: Commit**

```bash
git add resources/views/components/smart-table.blade.php
git commit -m "feat: add interactive states, SVG sort indicators, and visual polish to smart-table"
```

---

### Task 3: Visual regression check

- [ ] **Step 1: Run full test suite for the component**

Run: `php artisan test --compact --filter=SmartTableComponentTest`
Expected: All 8 tests PASS

- [ ] **Step 2: Run Pint to ensure code style**

Run: `vendor/bin/pint --format agent`
Expected: No formatting issues or auto-fixes applied

- [ ] **Step 3: Final commit if needed**

```bash
git add -A
git commit -m "chore: final polish and formatting for smart-table"
```
