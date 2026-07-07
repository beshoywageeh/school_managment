# Smart Table Visual Polish Design

**Date:** 2026-07-06
**Component:** `<x-smart-table>` (`resources/views/components/smart-table.blade.php`)

## Goal

Improve the smart table component's visual appearance using Tailwind v4 theme tokens and refined interactive states — without changing its behavior, Alpine.js logic, or API contract.

## Theme Token Migration

All hardcoded colors replaced with the project's Tailwind v4 `@theme` tokens defined in `resources/css/app.css`:

| Current | → | Theme Token |
|---|---|---|
| `bg-indigo-600` | → | `bg-primary` |
| `hover:bg-indigo-700` | → | `hover:bg-primary-dark` |
| `text-indigo-600` | → | `text-primary` |
| `bg-gray-100` (thead) | → | `bg-muted` |
| `bg-gray-50` (panels/bars) | → | `bg-muted` |
| `bg-white` | → | `bg-surface` |
| `border-gray-200` / `border-gray-300` | → | `border-border` |
| `text-gray-700` | → | `text-text-primary` |
| `text-gray-600`, `text-gray-500` | → | `text-text-secondary` |
| `text-gray-300` (sort inactive) | → | `text-border` |
| `text-gray-400` (empty) | → | `text-text-secondary` |
| `text-red-500` (error) | → | `text-danger` |
| `focus:border-indigo-500 focus:ring-indigo-500` | → | `focus:border-primary focus:ring-primary/30` |
| `rounded-xl` + `rounded-lg` mix | → | `rounded-card` (card wrapper) |
| `shadow-sm` | → | `shadow-card` |

## Interactive States

- **Focus rings:** `focus-visible:ring-2 focus-visible:ring-primary/30 focus-visible:border-primary` on all inputs, selects, and buttons
- **Row hover:** `hover:bg-primary/5 transition-colors duration-150`
- **Sort button hover:** `hover:text-primary hover:bg-primary/10 rounded-md`
- **Disabled buttons:** `opacity-50 cursor-not-allowed` with no hover effect
- **Smooth transitions:** `transition-all duration-150 ease-in-out` on all interactive elements

## Visual Polish

- **Sort indicators:** Replace plain text `↑ ↓ ⇅` with inline SVG arrows for crisper rendering at any font size
- **Pagination buttons:** Pill-shaped (`rounded-full`), consistent primary styling for active state
- **Loading skeleton:** Use `bg-muted` with `animate-pulse`, better column-matching structure
- **Filter panel:** Softer background with card-style border, consistent inner spacing
- **Checkbox column:** Custom-styled checkboxes using `appearance-none` + `ring`/`bg-primary` checked state
- **Inputs/selects:** Consistent height, padding, border, and focus styling across all form elements
- **Per-page select:** Match other input styling exactly
- **Export button:** Pill-shaped matching pagination style
- **Card wrapper:** Use `shadow-card` and `rounded-card` from the project theme
- **Empty state:** Better centered layout with muted text using `text-text-secondary`

## Pre-existing Features (Baseline)

The following features were already present in the component (from prior uncommitted work) and are not part of this task's scope:
- Client-side pagination with from/to display and per-page selector
- Sortable columns
- Checkbox column with select-all and bulk actions slot
- Row click navigation
- Export button
- Global search with debounce
- Separate `$filters` prop (with backward-compatible legacy column-embedded filters)
- AbortController-based request cancellation
- Support for both legacy (`{items, pagination}`) and standard Laravel paginated API formats
- Custom theme tokens (`primary`, `surface`, `muted`, `border`, `text-primary`, etc.)

## Scope

- Only `resources/views/components/smart-table.blade.php` is modified
- All existing Alpine.js logic remains unchanged
- All existing Blade props, slots, and API contracts remain unchanged
- No new behavior or features added — purely visual polish
- Tests must continue to pass without modification

## Non-Goals

- No dark mode support
- No responsive card layout
- No behavioral changes
- No new props or slots
- No changes to the JS DataTable component or other table implementations
