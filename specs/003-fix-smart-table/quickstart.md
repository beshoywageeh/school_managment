# Quickstart: Fix smart-table Component

## Files to Modify

| File | Action |
|------|--------|
| `app/resources/views/components/smart-table.blade.php` | Apply 8 fixes |
| `app/lang/en/general.php` | Add `all_options` + `error_fetching` keys |
| `app/lang/ar/general.php` | Add `all_options` + `error_fetching` keys |

## Fixes Summary (execute in this order)

| # | Issue | What to change |
|---|-------|----------------|
| 2 | Null safety for `$initialItems` | Add `@php` validation block; replace `$initialItems` → `$paginator` |
| 7 | `getNestedValue` null crash | Add null check in reduce callback |
| — | Add `loading`, `error` Alpine properties | Insert after `sort` object |
| 4,6 | Loading + error handling in `fetchData` | Add `loading = true`, `error = null`, `.finally`, `.catch` sets `error` |
| 3 | Hardcoded Arabic strings | Replace with `trans('general.search')`, `trans('general.all_options')` |
| 8 | Missing select debounce | Add `.debounce.300ms` to `@change` |
| 1 | Fragile actions slot | Replace `${$col['key']}` with `{{ $actions ?? '' }}` in proper `<td>` |
| — | Loading state row | Add `<template x-if="loading">` row in `<tbody>` |
| — | Error state row | Add `<template x-if="error">` row in `<tbody>` |
| — | Empty state row | Add `<template x-if="!loading && items.length === 0">` row |
| — | Disable pagination during load | Add `|| loading` to both `:disabled` bindings |

## Verification

```bash
cd /data/projects/laravel_projects/school_managment/app
vendor/bin/pint --format agent
```

Then open browser and check:
1. Students index loads with working action buttons (correct IDs per row)
2. Fee invoices index loads without errors
3. Empty search shows "no data" message
4. Offline mode shows red error message
5. Loading indicator appears during slow requests
6. Pagination disabled during loading
7. Locale switch changes placeholder/option text
8. Null relationships show `-` instead of crash

## Rollback

```bash
git checkout -- resources/views/components/smart-table.blade.php
git checkout -- lang/ar/general.php
git checkout -- lang/en/general.php
```
