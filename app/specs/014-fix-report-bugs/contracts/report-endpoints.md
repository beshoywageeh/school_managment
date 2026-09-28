# Contract: Report Endpoints

**Date**: 2026-09-23 | **Branch**: 014-fix-report-bugs

Contract for all report routes in `routes/reports.php` (group prefix `report/`, middleware already includes `reports-view` auth + school scope). This feature only **adds** `can:reports-export` (D-05, marked `[add]`) and fixes response/data behavior — routes and actions are unchanged.

## Routes (after this feature)

| # | Method | URI | Route name | Permission | Controller action | Output |
|---|---|---|---|---|---|---|
| 1 | GET | `report/index` | `report.index` | `reports-view` | `index` | Blade screen |
| 2 | GET | `report/students-export` | `report.students.export` | `reports-export` | `ExportStudents` | PDF inline |
| 3 | POST | `report/exception-fee` | `report.exception.fee` | `reports-export` | `exception_fee` | PDF inline |
| 4 | POST | `report/stock` | `report.stock` | `reports-export` `[add]` | `stock_product` | PDF inline |
| 5 | POST | `report/book-sheet-stock` | `report.book.sheet.stock` | `reports-export` `[add]` | `book_sheet_stock` | PDF inline |
| 6 | POST | `report/clothe-stock` | `report.clothe.stock` | `reports-export` `[add]` | `clothe_stock` | PDF inline |
| 7 | GET | `report/stocks-product` | `report.stocks.product` | `reports-export` `[add]` | `StockProducts` | PDF inline |
| 8 | GET | `report/books-sheets` | `report.books.sheets` | `reports-export` `[add]` | `books_sheets` | PDF inline |
| 9 | GET | `report/clothes-stock` | `report.clothes.stocks` | `reports-export` `[add]` | `clothes_stocks` | PDF inline |
| 10 | POST | `report/payment-status` | `report.payment.status` | `reports-export` `[add]` | `payment_status` | PDF inline |
| 11 | POST | `report/fees-invoices` | `report.fees.invoices` | `reports-export` `[add]` | `fees_invoices` | PDF inline |
| 12 | POST | `report/payments` | `report.payments` | `reports-export` `[add]` | `payments` | PDF inline |
| 13 | POST | `report/payment-parts` | `report.payment.parts` | `reports-export` `[add]` | `payment_parts` | PDF inline |
| 14 | POST | `report/credit` | `report.credit` | `reports-export` `[add]` | `credit` | PDF inline |
| 15 | GET | `report/school-fees` | `report.school.fees` | `reports-export` `[add]` | `school_fees` | PDF inline |
| 16 | POST | `report/final-year` | `report.final.year` | `reports-export` `[add]` | `final_year` | PDF inline |
| 17 | POST | `report/student-tammen` | `report.student.tameen` | `reports-export` `[add]` | `student_tameen` | PDF inline |
| 18 | POST | `report/student-report/{type}` | `report.student` | `reports-export` `[add]` | `student_report` | PDF inline |

## Input contracts

Per-action input/validation as defined in **data-model.md → Per-action input validation contract**. Summary:

- `payment_status` filter inputs: string `all` | `unpaid` | `paid` — never integers (D-03).
- Date ranges: `from`/`to`, `start_date`/`end_date` — required where specified, `to`/`end_date` must be `after_or_equal` the start.
- Selectors: `grade`/`classroom`/`acc_year`/`classroom_id`/`stock` are integers; `0`/absent means "all" (void-casted per action).
- `student_report/{type}`: `type` must be in the supported set (`41` documented; others 404).

## Response contracts

| Outcome | Behavior |
|---|---|
| Success | `return $this->PDFExport->PrintPDF(view, type, data, orientation, heading)` — mPDF `Destination::INLINE` stream (D-06) |
| Validation failure | Redirect back with errors (`FormRequest`) — standard UI flash |
| No data (empty result / no active academic year / no matching item) | Redirect back with existing "no data" flash — never a 500 (D-04) |
| Unknown stock item / unknown report type | `abort(404)` (D-04) |
| Unauthorized (no `reports-export`) | 403 via permission middleware |

## Data keys consumed by each PDF view (D-01 contract)

| Action | PDF view | Array keys the view consumes (must be provided) |
|---|---|---|
| `credit` | `backend.report.PDF.credit` | `credit` |
| `school_fees` | `backend.report.PDF.school_fees` | `school_fees` |
| `student_tameen` | `backend.report.PDF.student_tameen_1` / `student_tameen_2` | `students` |
| `clothes_stocks` | `backend.report.PDF.clothes_stocks` | `clothes` |
| `clothe_stock` | `backend.report.PDF.clothe_stock` | `stock` + `total` |
| `book_sheet_stock` | `backend.report.PDF.book_sheet_stock` | `stock` + `total` |
| `stock_product` | `backend.report.PDF.stock_product_view` | `stocks`; view reads `opening_date` (not `opening_qty_date`) |
| `books_sheets` | `backend.report.PDF.books_sheets` | raw `$data` (Collection) |
| `payment_status` | `backend.report.PDF.payment_status_view` | `exp`, `minus` |
| `fees_invoices` | `backend.report.PDF.fee_invoices` | `all`, `minus` |
| `ExportStudents` | `backend.report.PDF.students` | raw `$data` (Collection) — grouped by `grade.name` |
| `final_year` | `backend.report.PDF.FinalYear` | `students_accounts_query`, `exception_fees` (always set) |

## Authorization matrix

- `report.index` (screen): `reports-view`.
- All 17 PDF actions (rows 2–18): `can:reports-export` — rows marked `[add]` (15) gain the gate in this feature; rows 2 and 3 already gated.
- No route bypasses the school scope; no controller action may call `withoutGlobalScopes()`.
