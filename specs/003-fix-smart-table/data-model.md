# Data Model: Fix smart-table.blade.php Component

**Date**: 2026-07-04 | **Phase**: 1

## Overview

The smart-table is a Blade component — no database entities are involved. This document describes the component's interface contract (props, slots, state).

## Component Props

### `columns` (required)

Array of column definition objects. Each object may contain:

| Field | Type | Required | Description |
|-------|------|----------|-------------|
| `key` | string | Yes | Column identifier; `"actions"` triggers special slot rendering |
| `label` | string | Yes | Display text for the column header |
| `sortable` | bool | No | If true, header becomes clickable sort toggle |
| `filter_type` | string | No | `"text"` or `"select_relation"` — renders filter input |
| `filter_key` | string | If `filter_type` set | URL parameter name sent with AJAX request |
| `options` | array | If `filter_type` is `"select_relation"` | Key-value pairs for `<option>` tags |

### `initialItems` (required, may be null)

Expected: `Illuminate\Pagination\LengthAwarePaginator` instance.

If null or not a `LengthAwarePaginator`, defaults to empty paginator with 0 items and 1 page.

### `apiUrl` (required)

String URL pointing to a JSON endpoint. The endpoint must return:

```json
{
    "items": [ /* array of row data objects */ ],
    "pagination": {
        "last_page": 5
    }
}
```

## Component Slots

### `actions` slot (optional)

Named slot rendered when a column has `key: "actions"`. Currently used only by `Students/Index.blade.php`.

**Constraint**: The component only supports a slot named `actions`. If a future column uses a different key, the slot won't render. Dynamic slot resolution was considered and rejected for simplicity.

## Alpine Component State

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `columns` | array | from prop | Column definitions |
| `items` | array | from `paginator.items()` | Current page data |
| `filters` | object | {} | Active filter values keyed by `filter_key` |
| `sort.by` | string | `"id"` | Current sort column |
| `sort.order` | string | `"desc"` | Current sort direction (`"asc"` / `"desc"`) |
| `loading` | bool | `false` | True during AJAX fetch |
| `error` | string\|null | `null` | Error message text on fetch failure |
| `pagination.current` | int | from `paginator.currentPage()` | Current page number |
| `pagination.last` | int | from `paginator.lastPage()` | Last page number |

## Callers

| Caller | Slot | Impact |
|--------|------|--------|
| `Students/Index.blade.php` | `actions` (CRUD dropdown) | Fix 1 critical |
| `fee_invoices/index.blade.php` | None | Fixes 2–7 apply |
