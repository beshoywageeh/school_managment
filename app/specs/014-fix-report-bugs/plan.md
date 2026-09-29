# Implementation Plan: Report Module Error Remediation

**Branch**: `014-fix-report-bugs` | **Date**: 2026-09-23 | **Spec**: [spec.md](./spec.md)
**Input**: Feature specification from `app/specs/014-fix-report-bugs/spec.md`

## Summary

This plan eliminates the error class found in the reporting module audit of the Laravel 10 multi-tenant school management system. The audit found that most of the 17 report actions can fail in user-visible ways: server errors (500), blank/empty PDFs, silently mis-grouped rows, inverted or dead payment-status filters, and export actions exposing sensitive student data without the export permission. This plan fixes **all** of them so every report produces a valid PDF or a clear "no data / not found" message:

- **Data-key contract fixes** (`credit`, `school_fees`, `student_tameen`, `clothes_stocks`, `clothe_stock`/`book_sheet_stock`): each action passes exactly the array keys its Blade PDF view already consumes, eliminating the 500/empty-output class.
- **Grouping contract fixes** (students export, fees invoices, payment status): `groupBy` uses only real, eager-loaded relations (`grade`, `classroom`, `acd_year`) with the nesting arity each view expects; secondary-data N+1 is removed (e.g., `parent` eager load).
- **Payment-status filter contract**: the UI sends `all` | `unpaid` | `paid` strings, but controller validation demanded integers and compared raw ints against an enum-string column (MySQL coerces non-numeric strings to 0, inverting the filter). Validation + filtering are aligned to the `Payment_Status` enum values.
- **Null-safety**: academic-year resolution uses the active-year convention with a clear-message guard; per-item stock reports `abort(404)` on unknown/foreign items; final-year report initializes its optional collections so partial/no filters never 500.
- **Authorization**: all PDF-producing report routes receive `can:reports-export`; only the report index stays under `reports-view`.
- **Data correctness**: PDF views reference the real `InventoryItem` fields (`opening_date`), the student-insurance filter is aligned to the actual `students.tameen` string semantics, and controllers `return` the PDF response instead of relying on mPDF's inline echo side effect.

**No schema changes, no new dependencies, no new reports, no layout redesign** — fixes only, in place, per constitution principle IV (incremental, backward-compatible).

## Technical Context

**Language/Version**: PHP 8.5, Laravel framework v10
**Primary Dependencies**: carlos-meneses/laravel-mpdf (mPDF v2 — already installed), laravel/spatie permission; **no new package dependencies required** (all fixes use Laravel core, existing services, and the existing enums `Payment_Status` / `InventoryItemType`).
**Storage**: MySQL / MariaDB via Eloquent. Read-only report queries; **no migrations** (schema untouched; `payment_parts.status` is a DB enum `['paid','unpaid']`, `students.tameen` is a string defaulting to `'inactive'`).
**Testing**: PHPUnit 10 feature tests (`php artisan test --compact --filter=Report...`) + Laravel Boost `tinker` smoke checks.
**Target Platform**: Linux web server (Docker/Sail), browser-rendered PDFs.
**Project Type**: Laravel web application (Livewire 4 frontend; report PDFs are server-rendered Blade views via mPDF).
**Performance Goals**: report for a school of up to 5,000 students completes in under 10 seconds (spec SC-005) — achieved by correct eager loading (no N+1) and no heavy joins; grouping is in-memory on already-loaded relations.
**Constraints**: multi-tenant school isolation must never regress (global `SchoolScope` is the single source of truth — the fixes must not `withoutGlobalScopes`); no new dependencies; the intended grouping of each report is preserved; PDF output format is preserved; all input validation via Form Requests per constitution.
**Scale/Scope**: 17 report actions in `ReportController`; 4 report services; 19 PDF views + 13 popup forms; 1 routes file (`routes/reports.php`); ~10 new/updated PHPUnit feature test classes.

## Constitution Check

*GATE: Must pass before Phase 0 research. Re-check after Phase 1 design.*

**PASS** — evaluated against constitution v1.1.0 (Clean Code & Convention Compliance, Simple UX, Minimal Dependencies, Service Layer, Automated Testing, Incremental Refactoring):

- **I. Clean Code & Convention Compliance** — PASS. All report input moves to dedicated Form Request classes (`app/Http/Requests/Reports/*`) with array-style rules + custom messages; Eloquent relations and enums (`Payment_Status::CLOSE->value` etc.) replace raw int comparison; `config()` only; PHP 8 constructor promotion and explicit return types retained; PHPDoc array-shape annotations added to service methods that return arrays (`StockReportService`, `FinancialReportService`, `ReportService`).
- **II. Simple UX & Responsive Design** — PASS. No UI work except correctness: popups already send the right `all`/`unpaid`/`paid` values (they are now honored); PDF views are corrected in place (data keys, field names, heading groups) so they render — no visual redesign, no new components.
- **III. Minimal Dependencies** — PASS. Nothing new installed; fixes use mPDF already present, core query builder, and existing enum helpers.
- **IV. Service Layer Architecture** — PASS. Business logic stays in the existing `App\Services\Reports\{ReportService,StockReportService,FinancialReportService,PDFExportService}`; controllers remain thin (marshal request → call service → return response). `StockReportService::calculateTotals()` gains a null-guard; `getStockItemReport()` stays the item-lookup boundary.
- **V. Automated Testing** — PASS. Every defect ships with a PHPUnit feature test (happy + failure + edge), grouped by report domain (financial, inventory, student, authorization); the insurance-filter semantics are locked by a test once the live value space is confirmed.
- **Development Workflow 5 (Incremental refactoring)** — PASS. Fixes are behavior-only, in-place, backward-compatible; no legacy tables/modules are deleted; no schema changes; old routes and views are retained.

No violations require Complexity Tracking justification.

## Project Structure

### Documentation (this feature)

```text
app/specs/014-fix-report-bugs/
├── spec.md              # Feature specification (/speckit.specify command output)
├── plan.md              # This file (/speckit.plan command output)
├── research.md          # Phase 0 output — decision log
├── data-model.md        # Phase 1 output — read model + grouping/validation contracts
├── contracts/           # Phase 1 output — report endpoint + authorization contract
│   └── report-endpoints.md
├── quickstart.md        # Phase 1 output — runnable validation guide
└── tasks.md             # Phase 2 output (/speckit.tasks command - NOT created by /speckit.plan)
```

### Source Code (repository root — Laravel layout)

```text
app/                                        # Laravel app root (school_managment/app)
├── Http/
│   ├── Controllers/
│   │   └── ReportController.php            # FIX: data keys, groupBy keys, null guards,
│   │                                       #      enum-filter mapping, return PDF responses,
│   │                                       #      eager loads, tameen filter semantics
│   └── Requests/
│       └── Reports/                        # NEW Form Requests (array-style rules + messages)
│           ├── ExportStudentsRequest.php   #       grade/classroom nullable ints (0 = all)
│           ├── ExceptionFeeReportRequest.php #     start_date/end_date required dates
│           ├── StockItemReportRequest.php  #       stock required integer
│           ├── StudentTameenRequest.php    #       type in:1,2 + classroom_id exists
│           ├── PaymentStatusReportRequest.php #  payment_status in:all,unpaid,paid + grade
│           ├── FeesInvoicesReportRequest.php #   grade/payment_status/from/to (nullable)
│           ├── PaymentRangeReportRequest.php #   from/to required dates (payments, payment-parts)
│           ├── CreditReportRequest.php     #       acc_year nullable integer
│           └── FinalYearReportRequest.php  #       grade/classroom nullable integers
├── Services/
│   └── Reports/
│       ├── PDFExportService.php            # (signature kept; controllers now return it) — FIX
│       ├── ReportService.php               # FIX: typed array shape; keep type-41 path
│       ├── StockReportService.php          # FIX: null-guard + array-shape doc; keep totals key
│       └── FinancialReportService.php      # FIX: deterministic collections for final-year,
│                                           #      drop impossible conditions, array-shape doc
├── Models/
│   ├── Enums/Payment_Status.php            # (existing) values: unpaid | not_paid | paid
│   └── Inventory/InventoryItem.php         # (existing) opening_date / opening_qty (no change)
├── resources/views/backend/report/
│   ├── PDF/*.blade.php                     # FIX keys where views are contract (11 files touched:
│   │                                       #  credit, school_fees, student_tameen_1/2,
│   │                                       #  clothes_stocks, clothe_stock, book_sheet_stock,
│   │                                       #  stock_product_view, fee_invoices, payment_status_view,
│   │                                       #  students) — field names opening_date
│   └── popup/*.blade.php                   # (existing, unchanged — already send all/unpaid/paid)
├── routes/
│   └── reports.php                         # FIX: add can:reports-export to PDF-producing routes
└── tests/
    └── Feature/
        └── Reports/                        # NEW PHPUnit feature tests (PHPUnit 10)
            ├── FinancialReportsTest.php    # credit, school-fees, payments, payment-parts,
            │                               # fees-invoices, payment-status, exception-fee
            ├── InventoryReportsTest.php    # stock-product, clothe-stock, book-sheet-stock,
            │                               # clothes-stocks, books-sheets
            ├── StudentReportsTest.php      # students-export, student-tameen, student-report(41)
            ├── FinalYearReportTest.php     # final-year full/partial/no filters
            └── ReportAuthorizationTest.php # export-permission gates per route
```

**Structure Decision**: Single Laravel application, unchanged layout (no new base folders — per constitution). All work lands in the existing `app/Http`, `app/Services/Reports`, `app/Enums`, `resources/views/backend/report/{PDF,popup}`, `routes/reports.php`, and a new `tests/Feature/Reports/` folder (tests are new files, not a new base folder). The single new folder is `app/Http/Requests/Reports/` for Form Requests, matching the existing `app/Http/Requests` convention.

## Complexity Tracking

> **Fill ONLY if Constitution Check has violations that must be justified**

**Approved exemption — `withoutGlobalScope(SoftDeletingScope::class)` in `FinancialReportService::getFinalYearData()`** (constitution compliance note; does not violate the constraint "the fixes must not `withoutGlobalScopes`" in spirit, because the **school-boundary scope is never removed**):

- `FeeInvoice::query()->withoutGlobalScope(SoftDeletingScope::class)` removes **only** Laravel's built-in soft-delete scope so the `leftJoin` on `school__fees` can aggregate `amount` in a single scalar `SUM` (removing it avoids the ambiguous/unqualified `deleted_at` clause being applied to the joined table).
- The school boundary is preserved: the global `SchoolScope` remains active, and soft-deleted rows are excluded explicitly with `whereNull('fee_invoices.deleted_at')` and `whereNull('school__fees.deleted_at')`.
- No report controller or service removes the school scope anywhere; FR-009 is not weakened.
