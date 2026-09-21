# Table Search for Admin List Screens — Design

Date: 2026-09-21
Status: Approved by user (shared `<x-filters>` component)

## Goal

Add server-side search to 14 admin list screens, following the existing
inventory pattern (GET form → `like` / `whereHas` filtering → paginate).
All screens share one Blade component for the filter bar.

## Mechanism

- Each target screen gets a GET filter bar above its table.
- The controller filters its existing query using `request('search')`
  (and optional filter selects) via `->when(...)`.
- Pagination links on these screens must use `->appends(request()->query())`
  so filters survive across pages.
- A `reset` link clears the filters.

## Shared component: `<x-filters>`

New Blade component in `resources/views/components/`:

```
<x-filters action="" :columns="['...']" placeholder="...">
  {{-- optional select filters slot --}}
</x-filters>
```

Behavior:
- Renders a GET `<form action=...>` containing:
  - a search text `<input name="search">` prefilled with `request('search')`,
    label `trans('general.search')`, placeholder = column name to search;
  - an optional `{{ $slot }}` for filter `<select>`s;
  - Submit button + reset link (`employees.reset_filters`).
- Every select in the slot keeps `name="..."` + `value="{{ request('...') }}"`.
- The reset link points at the index route without any query string.
- Uses the same styling as the inventory filter bar (Tailwind classes in the
  existing `inventory/items/index.blade.php` filter form).

## Searchable fields

| Screen | Search matches | Optional selects |
|---|---|---|
| Students/Index | name, father name, address (reuse existing `StudentQueryService::getFilteredQuery`) | grade_id, classroom_id |
| Students/graduated | name, father name | — |
| Roles | role name | — |
| Classes | title | grade_id, class_room_id |
| ClassRooms | name | grade_id |
| ExchangeBond | manual, student name, description | — |
| AdminEra (employees) | name, code, email | — |
| AcademicYear | year_start / year_end (numeric year) | — |
| FeeInvoice | student name (reuse existing `InvoiceQueryService::getFilteredQuery`) | grade_id |
| SchoolFee | title, description | grade_id |
| ExceptionFees | student name | — |
| PaymentParts | student name | status |
| ReceiptPayment | manual, student name | — |
| Promotion | student name | — |

Notes:
- Student-name searches use `whereHas('student', fn ($q) => $q->where('name','like',...))`
  (or the existing services where already wired).
- Existing injected-but-unused services are reused rather than re-implemented:
  `StudentQueryService` (StudentsController) and `InvoiceQueryService`
  (FeeInvoiceController).
- Only add filter selects where the controller can cheaply supply the option
  list (grades/classes/status); skip otherwise.

## Required `->appends()` changes

Currently all 14 screens render plain `->links()`. Change each to
`->appends(request()->query())` so the search term and filters persist on
page 2+.

## Out of scope

- Inventory items/orders (already have search).
- Jobs + Grades list (not selected by user).
- Sortable columns.
- School-scoping changes: keep each query's existing scope untouched.
- Livewire screens (Parents, Employees index).

## Components touched

- 1 new Blade component + CSS classes reuse.
- 14 controllers (index/graduated methods): filter wiring.
- 14 views: replace bare `<table>` header area with `<x-filters>` block and
  fix `->links()`.
- Lang: reuse `general.search`, `general.all`, `employees.reset_filters`,
  `general.Submit`. Add new keys only if a label is missing.

## Testing

New feature test class(es) using factories, covering representative cases:
- Students index search by name → only matching students returned, page keeps
  `?search=` in pagination links.
- Graduated search by name.
- Role name search.
- ExchangeBond by manual #.
- FeeInvoice by student name (via InvoiceQueryService).
- Employee (User) search by name/code/email.
- Filter select (e.g. status on PaymentParts) works and persists.
- Reset link clears the query.