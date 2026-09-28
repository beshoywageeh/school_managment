# Quickstart: Report Module Error Remediation

**Date**: 2026-09-23 | **Branch**: 014-fix-report-bugs

Purpose: pick up this feature and verify every fix in minutes, with evidence tied to the success criteria in `spec.md` (SC-001 … SC-006).

## Prerequisites

- Composer-installed app (`composer install`), `.env` configured (DB host reachable — DB was down during research).
- Migrations applied and seeded with representative data: **at least** one school with grades/classrooms, students (some with `tameen` values), fee invoices + payment parts with `paid`/`unpaid` statuses, inventory items of all three types (`book`/`clothe`/`stock`) with opening dates, and an `AcademicYear` flagged by `config('school.academic_year_status')`.
- A user with `reports-view` **and** `reports-export` permissions, and one with `reports-view` only (authorization test).
- App boot check: `php artisan about` (should print app info, not errors).

## 1. Route & permission sanity

```bash
php artisan route:list --path=report
```

- Expect all 19 `report/*` routes with the matrix from `contracts/report-endpoints.md`.
- Expect `can:reports-export` on rows 2–18 (15 previously-ungated PDF actions now gated).

## 2. Data verification (fixes the two research flags)

```bash
# D-09 — confirm tameen value space (expected: 'active'/'inactive' strings):
php artisan tinker --execute="\App\Models\Student::query()->select('tameen')->distinct()->pluck('tameen')"

# D-03 — confirm status values stored in the two tables:
php artisan tinker --execute="\App\Models\PaymentParts::query()->select('status')->distinct()->pluck('status')"
php artisan tinker --execute="\App\Models\FeeInvoice::query()->select('status')->distinct()->pluck('status')"

# Active-year resolution expected non-null:
php artisan tinker --execute="\App\Models\AcademicYear::where('status', config('school.academic_year_status'))->first()?->view"
```

If the tameen values are confirmed `'active'`/`'inactive'`, the D-09 filter is `where('tameen', 'active')` — locked in the feature test.

## 3. Run the feature tests

```bash
php artisan test --compact tests/Feature/Reports/
```

New suites (PHPUnit 10, feature tests using factories; one class per report domain):

- `FinancialReportsTest` — credit, school-fees, payments, payment-parts, fees-invoices, payment-status, exception-fee: status filter mapping (all/unpaid/paid), key presence (`$data['credit']` etc.), year guard.
- `InventoryReportsTest` — stock-product, clothe-stock, book-sheet-stock, clothes-stocks, books-sheets: 404 on unknown item, `total`/`clothes` keys, `opening_date` present.
- `StudentReportsTest` — students-export: grouping by grade, parent N+1 gone, tameen filter matches string space; student-tameen types 1/2; student-report type 41.
- `FinalYearReportTest` — full filters, partial filters (grade only / classroom only), no filters: always 200/redirect, never 500.
- `ReportAuthorizationTest` — 403 without `reports-export` on the 15 hardened routes; 200 with it.

Filter one class at a time when iterating:

```bash
php artisan test --compact tests/Feature/Reports/FinancialReportsTest.php
php artisan test --compact --filter=test_status_filter_unpaid_matches_open_and_not_paid
```

## 4. Manual PDF smoke check (evidence for SC-001/SC-002)

With the app served and the browser logged in as an export-capable user:

1. Open the report index → for each action, pick a filter set that returns data → generate → expect a browser-rendered PDF **inline** (mPDF `Destination::INLINE`), never a blank page/500.
2. Repeat with an empty filter set (e.g., date range with no receipts): expect the "no data" flash and a redirect — not a 500.
3. `credit` and `school_fees` render tables (regression for the dotted-key bug).
4. `clothe_stock` / `book_sheet_stock` show the stock row with a working `total` column.
5. Students export prints one heading per grade with students beneath (correct grouping, no blank heading).
6. Inventory PDFs show the `opening_date` cell populated.

## 5. Performance check (SC-005)

- Generate the largest report (students export / fees invoices) for a school with ~5,000 students.
- Expected: page fully renders in < 10 s (previously N+1 on `parent` could stall). Abort if either query log shows repeated parent loads per row.

## Troubleshooting

- **Blank/500 PDF with debugbar off** → check `storage/logs/laravel.log`; the error class fixed here surfaces as `ErrorException: Undefined array key` (data-key) or `Trying to get property of non-object` (null-guard) — both removed by this feature.
- **403 on import** → assign `reports-export` permission; index-only access is intentional.
- **"no data" flash on realistic input** → verify seeded `AcademicYear` status matches `config('school.academic_year_status')`.
