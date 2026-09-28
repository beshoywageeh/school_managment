# Research: Report Module Error Remediation

**Date**: 2026-09-23 | **Branch**: 014-fix-report-bugs

The research was executed as a direct code audit of the live repository (ReportController, the four report services, all 19 PDF views, 13 popup forms, routes, models, enums, and the PDF library). No open questions remain. Database connectivity was unavailable during the audit, so the two schema-dependent items below were verified against migration files and are re-verified by tests + smoke checks in Phase 2 (**limitations**).

## Decisions

### D-01 Report data-key contract (actions → view keys)

Reports must pass exactly the array keys their Blade PDF views consume. Analysis found four actions setting `$data['backend.report.PDF.<name>']` (dotted keys) while the views read `$data['credit']`, `$data['school_fees']`, `$data['students']` — undefined keys produce ErrorException/500. `clothes_stocks()` passes a raw Collection while its view iterates `$data['clothes']`; `clothe_stock()`/`book_sheet_stock()` pass the service's `totals` key while their views read `total`.

- **Decision**: Each action passes the view's exact keys: `credit`, `school_fees` (→ `get()` result keyed `credit`/`school_fees`), `student_tameen` → `students` (plus `isEmpty()` guard on the right key), `clothes_stocks` → `['clothes' => $data]`, `clothe_stock`/`book_sheet_stock` → add `'total' => $data['totals']`.
- **Rationale**: Views are the rendering contract's source of truth; minimal diff; `stock_product()` already demonstrates the correct wrapping pattern (`['stocks' => $data['totals']]`).
- **Alternatives considered**: renaming the 19 views' keys to match the controller (larger churn, no benefit); changing the service to return `total` (conflicts with `stock_product` which consumes `totals`).

### D-02 Grouping contract (students export, fees invoices, payment status)

`Collection::groupBy()` with a key that has no matching attribute/relation resolves to `null` (silently), producing blank headings or fatal array-access in views. Student has `academicYear` (not `acd_year`) and `classroom` (not `classes`); FeeInvoice has `grade`/`classroom` (not `grades`/`classes`).

- **Decision**:
  - `ExportStudents` → `->groupBy('grade.name')` only; eager-load `grade`, `classroom`, and `parent` (view calls `parent->father_name`/`address`); null-safe `optional($stud->parent)`.
  - `fees_invoices` → `->groupBy(['acd_year.view', 'grade.name', 'classroom.name'])` — matches the view's 3-level iteration (acc → grade → classroom → invoices); `classroom:id,name` already eager-loaded.
  - `payment_status` → `->groupBy('grade.name')` (view iterates exactly 2 levels: heading → students).
- **Rationale**: the nesting arity of each view dictates the grouping depth; only real relations are usable keys.
- **Alternatives considered**: changing the views to match the current 3-key/phantom-key shape (rejected — view shapes match the intended printed layout; phantom keys were a regression).

### D-03 Payment-status filter contract (`all` | `unpaid` | `paid`)

The popup forms send `payment_status` as strings `"all"`, `"unpaid"`, `"paid"` (fees_invoices, payment_part, payment_status). The controller validates `integer` and compares raw ints against an enum-string column (`payment_parts.status` DB enum `['paid','unpaid']`; `fee_invoices.status` stores `Payment_Status` values). Consequences: validation rejects every UI submission (reports unreachable from the UI), `where('status', null)` matches nothing when the field is absent, and `status = 0` matches all rows while `status = 1` matches none (MySQL coerces non-numeric strings to 0 — inverted).

- **Decision**:
  - Validation: `nullable|string|in:all,unpaid,paid` (`required` only where the form forces a choice).
  - Mapping to `Payment_Status` enum values: `unpaid` → `['unpaid','not_paid']` (OPEN + NOT_PAID), `paid` → `['paid']` (CLOSE), `all` or absent → no status clause.
  - Filters use `whereIn('status', <enum values>)` — never raw ints, never a bare `null` comparison.
- **Rationale**: strings match the enum values directly and the UI unchanged; aligns with constitution I (enums as single source of truth).
- **Alternatives considered**: changing popups to send 0/1/2 and mapping in the controller (rejected — larger UI churn, less readable, duplicates meaning already in the enum); `whereNull` for absence (rejected — absence means "all" per the UI's intent).

### D-04 Null-safety (academic year, stock item, final-year collections)

`AcademicYear::whereYear('year_start', now()->format('Y'))->first()` can return null (school year may start in the previous calendar year; no year matches) → `->id` fatal in `payment_status`, `school_fees`, `student_tameen`. `StockReportService::getStockItemReport()` may return `null` item → `$stocks->orders` fatal in `calculateTotals()`. `final_year` references `$students_accounts_query`/`$exception_fees` which are only set when both grade+classroom filters are present.

- **Decision**:
  - Active academic year = `AcademicYear::where('status', config('school.academic_year_status'))->first()` (the convention already used by `ReportController::index()` and `FinancialReportService`); on null → redirect-back with the existing "no data" flash.
  - Per-item stock reports: `if (! $stock) abort(404);` in the service (school_id is already applied, so foreign/unknown ids 404).
  - Final-year: initialize `$students_accounts_query` and `$exception_fees` as empty collections always; drop the `where('id','!=',null)` no-op conditions and the contradictory branch that repopulates all grades/classrooms while keeping the other filter.
- **Rationale**: eliminates the whole 500 class with user-friendly outcomes, matching spec FR-002/FR-005/FR-006.
- **Alternatives considered**: requiring filters for final-year (rejected — spec US3 explicitly requires no-filter completion); leaving stock lookup to the caller (rejected — every caller would duplicate the guard).

### D-05 Export authorization contract

Only 2 of the 17 PDF-producing routes carry `can:reports-export` (`students-export`, `exception-fee`). `student-tameen` exports national IDs and parent phone numbers, and `student-report` also lacks the gate.

- **Decision**: add `can:reports-export` to every PDF-producing route: `stocks-product`, `books-sheets`, `clothes-stocks`, `stock`, `book-sheet-stock`, `clothe-stock`, `payment-status`, `fees-invoices`, `payments`, `payment-parts`, `credit`, `school-fees`, `final-year`, `student-report`, `student-tameen`. The index screen keeps `reports-view` only.
- **Rationale**: spec FR-008/SC-006; export permission already exists and is the established gate.
- **Alternatives considered**: a report-group middleware wrapping all routes (rejected — more invasive; per-route policy matches the existing style in `routes/reports.php`).

### D-06 PDF response handling

`PDFExportService::PrintPDF()` returns the mPDF response (`Destination::INLINE`), but every controller call ignores the return value. It works today only because mPDF echoes the body directly after sending headers — fragile with Laravel output buffering and dev middleware (debugbar).

- **Decision**: controllers `return $this->PDFExport->PrintPDF(...)` in all 15 actions. Service signature unchanged.
- **Rationale**: explicit response contract; removes headers-already-sent risk.
- **Alternatives considered**: changing PrintPDF to buffer and return a Symfony Response (larger change, same result).

### D-07 Field-name alignment (stock opening values)

The inventory rebuild renamed fields on `InventoryItem`; three PDF views still reference legacy names.

- **Decision**: `stock_product_view` `opening_qty_date` → `opening_date`; `clothe_stock`/`book_sheet_stock` `opening_stock_date` → `opening_date`. `opening_qty` is already a cast decimal on the model — unchanged.
- **Rationale**: spec FR-010 (no blank cells where a value exists).
- **Alternatives considered**: adding legacy accessors on the model (rejected — hides the mismatch, violates clean code).

### D-08 Eager loading / N+1

- **Decision**: `ExportStudents` eager-loads `parent`; `index()` stock list adds `with('grade','classroom')`; stock list reports already eager-load `orders`,`classroom`,`grade` (kept). No lazy-loading in view loops for these relations.
- **Rationale**: spec SC-005 (≤10s at 5,000 students); view contracts require the relations.
- **Alternatives considered**: accepting lazy loads (rejected at target scale).

### D-09 Student-insurance filter semantics (flag)

`students.tameen` is a **string** column defaulting to `'inactive'` (migration `2024_03_29_121647_create_students_table.php`; `class_rooms.tameen` is also string default `'inactive'`, while the newer replaceable `classes.tameen` is boolean). The controller filters `where('tameen', 1)` — comparing a string column to the integer 1, which in MySQL matches only numeric-coercible values and never `'active'`/`'inactive'` semantics.

- **Decision**: filter is aligned to the live value space once confirmed (expected: `where('tameen', 'active')` or equivalent documented constant). Because the DB was unreachable during research, Phase 2 must (a) confirm stored values with a data query, (b) lock the decision in a feature test.
- **Rationale**: spec FR-007 sprit — filters must match the statuses actually used; the insurance list must not silently be empty or inverted.
- **Alternatives considered**: casting the column (schema change — out of scope; fixes-only). 

## Performance notes

- All fixes are O(1) select/groupBy corrections on already-eager-loaded relations — no new joins or subqueries.
- N+1 elimination (D-08) is the only meaningful performance lever; no pagination is added (PDF reports are full dumps by design).
- `ReportController::index()` gains eager loading only for the relations its view touches.

## Limitations

- Database connectivity was unavailable during research: `students.tameen` value space (D-09) and live popup/route behavior could not be re-verified at run time. Both are covered by quickstart smoke checks and feature tests in Phase 2.
- mPDF behavior was verified from the installed source (`vendor/carlos-meneses/laravel-mpdf`, `Mccarlosen\LaravelMpdf\LaravelMpdf::stream` → `Destination::INLINE`); no runtime render check was possible without an app boot (DB down). The validation guide covers it.
