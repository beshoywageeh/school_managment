# Quickstart: Fix smart-table Component — Validation Guide

**Date**: 2026-07-04 | **Phase**: 1

## Prerequisites

- Laravel dev server running (`php artisan serve` or `composer run dev`)
- Browser with DevTools (Network tab)
- Two pages accessible: `/students` and `/fee_invoices`

## Files to Modify

| File | Action | Details |
|------|--------|---------|
| `app/resources/views/components/smart-table.blade.php` | Apply 8 fixes | See `plan.md` for exact old/new string replacements |
| `app/lang/en/general.php` | Add 2 keys | `'all_options' => 'All Options'`, `'error_fetching' => 'An error occurred while loading data.'` |
| `app/lang/ar/general.php` | Add 2 keys | `'all_options' => 'كل الخيارات'`, `'error_fetching' => 'حدث خطأ أثناء تحميل البيانات.'` |

## Setup

```bash
cd /data/projects/laravel_projects/school_managment/app
vendor/bin/pint --format agent
```

## Validation Scenarios

### Scenario 1 — Actions Slot (P1)

1. Navigate to `/students`
2. Confirm every row has a green "Actions" button
3. Click the button on row 1 — dropdown opens with links (View, Edit, Fee Invoice, etc.)
4. Inspect the "View" link URL — confirm it contains that student's ID
5. Repeat for row 5 and row 10
6. Navigate to `/fee_invoices` — confirm page loads without errors, table renders

### Scenario 2 — Null/Empty Safety (P2)

1. Temporarily pass `null` as `initialItems` in any controller using smart-table (or via tinker)
2. Confirm the page renders an empty table (no PHP crash, no white screen)

### Scenario 3 — Loading State (P2)

1. Open DevTools → Network → throttling → "Slow 3G"
2. Trigger a filter or pagination action
3. Confirm a loading indicator appears in the table body (centered text)
4. Confirm pagination Previous/Next buttons appear disabled during loading

### Scenario 4 — Empty Results (P2)

1. Apply a search filter that returns no matches, or pass an empty filter
2. Confirm the table body shows "no data" message (centered row in `<tbody>`)

### Scenario 5 — Error State (P2)

1. Open DevTools → Network → check "Offline"
2. Trigger any filter or pagination action
3. Confirm a red error message appears in the table body

### Scenario 6 — Localization (P3)

1. Switch app locale to English (via URL parameter or locale switcher)
2. Navigate to a page with smart-table
3. Confirm search placeholder reads "search" / "Search" (from `general.search`)
4. Confirm select filter default option reads "All Options"
5. Switch back to Arabic — confirm Arabic text returns

### Scenario 7 — Null Relationship (P3)

1. Find or create a student record with a null classroom relationship
2. Navigate to a page showing classroom columns
3. Confirm that cell shows `-` instead of a JS error

## Verification Checklist

- [ ] `students.index` loads with working action dropdowns per row
- [ ] Action URLs contain correct per-row student IDs
- [ ] `fee_invoices.index` renders without errors
- [ ] Page handles `null` as `initialItems` gracefully
- [ ] Loading indicator visible during AJAX
- [ ] Pagination buttons disabled during loading
- [ ] Empty search shows "no data" message
- [ ] Network error shows red error message
- [ ] Locale switch changes placeholder/option text
- [ ] Null relationship shows `-` instead of JS error
- [ ] `vendor/bin/pint --format agent` passes with no diffs

## Rollback

```bash
git checkout -- resources/views/components/smart-table.blade.php
git checkout -- lang/ar/general.php
git checkout -- lang/en/general.php
```
