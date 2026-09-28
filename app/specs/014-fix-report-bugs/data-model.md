# Data Model: Report Module Error Remediation

**Date**: 2026-09-23 | **Branch**: 014-fix-report-bugs

**Summary**: No schema changes. This feature fixes how existing data is *read and rendered* for reports. This document defines the read model (entities used, relations required), the canonical grouping contract per report, and the per-action input-validation contract. All reads are subject to the school boundary via the global `SchoolScope` (non-admin users scoped to `school_id`; it must never be bypassed).

## Entities (read model — unchanged tables)

| Entity | Table | Key fields used by reports | Required relations (must be eager-loaded where the view touches them) |
|---|---|---|---|
| `AcademicYear` | `academic_years` | `id`, `view`, `status` (active flag) | — |
| `Student` | `students` | `id`, `name`, `grade_id`, `classroom_id`, `birth_date`, `birth_at_begin`, `gender`, `religion`, `student_status`, `national_id`, `parent_id`, `tameen` (string: `'active'`/`'inactive'` — semantics to confirm) | `grade`, `classroom`, `parent`, `academicYear` |
| `Grade` | `grades` | `id`, `name` | `class_rooms` (index screen only) |
| `ClassRoom` | `class_rooms` | `id`, `name`, `grade_id` | `grade` |
| `FeeInvoice` | `fee_invoices` | `id`, `student_id`, `grade_id`, `classroom_id`, `academic_year_id`, `school_fee_id`, `status` (enum string), `invoice_date` | `grade`, `classroom`, `student`, `schoolFee`, `acd_year` |
| `PaymentParts` | `payment_parts` | `date`, `amount`, `status` (DB enum `['paid','unpaid']`), `class_id` (FK to classroom) | `student`, `grade`, `classroom` (via `class_id`) |
| `ReceiptPayment` | `receipt_payments` | `date`, `amount`, `student_id` | `student.classroom`, `acc_year` |
| `ExceptionFees` | `exception_fees` | `date`, `student_id` | `student` |
| `SchoolFee` | `school_fees` | `id`, `title`, `amount`, `academic_year_id` | `grade`, `classroom` |
| `InventoryItem` | `inventory_items` | `id`, `type` (`InventoryItemType`: `book`/`clothe`/`stock`), `name`, `grade_id`, `classroom_id`, `opening_date` (NOT `opening_qty_date`/`opening_stock_date`), `opening_qty` | `grade`, `classroom`, `orders` (morphMany → `InventoryOrderItem`) |
| `InventoryOrderItem` | `inventory_order_items` | `quantity_in`, `quantity_out`, `unit_price`, `total`, `created_at` | `order` |

## Status value spaces (single source of truth)

| Source | Values | Used by |
|---|---|---|
| `App\Enums\Payment_Status` (backed string) | `OPEN='unpaid'`, `NOT_PAID='not_paid'`, `CLOSE='paid'` | `FeeInvoice.status`, `PaymentParts.status` casts |
| `payment_parts.status` DB enum | `['paid','unpaid']` | membership filter (D-03) |
| Report popup forms | `"all"`, `"unpaid"`, `"paid"` (strings) | filter input contract |

**Filter mapping (D-03)**: `unpaid` → `whereIn('status', ['unpaid', 'not_paid'])`; `paid` → `whereIn('status', ['paid'])`; `all` or absent → no status clause.

## Grouping contract (canonical)

| Report action | Grouping keys | Required eager loads | View arity |
|---|---|---|---|
| `ExportStudents` | `grade.name` (single key) | `grade`, `classroom`, `parent` | 2 levels: heading → Collection of students |
| `fees_invoices` | `['acd_year.view', 'grade.name', 'classroom.name']` | `acd_year:id,view`, `grade:id,name`, `classroom:id,name` | 3 levels: acc → grade → classroom → invoices |
| `payment_status` | `grade.name` (single key) | `grade:id,name`, `student:id,name`, `schoolFee:id,title` | 2 levels: heading → students |
| `stock_product` | none (per-item listing) | `orders` | flat rows of running totals |
| `clothe_stock` / `book_sheet_stock` | none (per-item listing) | `orders` | flat rows (view reads `total`) |
| `clothes_stocks` / `books_sheets` | none (list) | `orders`, `classroom`, `grade` | flat rows |
| `school_fees` | `['grade.name', 'classroom.name']` | `grade:id,name`, `classroom:id,name` | 3 levels: grade → classroom → fees |
| `student_tameen` | none | `parent:id,father_phone,address` | flat rows |

Rule: group keys must be attributes of loaded relations; a key resolving to a non-existent relation yields silent blank groups and is forbidden (D-02).

## Per-action input validation contract (Form Requests)

| Action | Params | Rules |
|---|---|---|
| `ExportStudents` (GET) | `grade`, `classroom` | `nullable\|integer` (0/absent = all) |
| `exception_fee` (POST) | `start_date`, `end_date` | `required\|date`; `end_date` `after_or_equal:start_date` |
| `stock_product`, `clothe_stock`, `book_sheet_stock` (POST) | `stock` | `required\|integer` |
| `student_report/{type}` (POST) | `type` (41) + `classroom_id` | `type` in supported set; `classroom_id` `required\|integer\|exists:class_rooms,id` |
| `student_tameen` (POST) | `type`, `classroom_id` | `type` `required\|integer\|in:1,2`; `classroom_id` required + exists |
| `payment_status` (POST) | `payment_status`, `grade` | `payment_status` `required\|string\|in:all,unpaid,paid`; `grade` `nullable\|integer` |
| `fees_invoices` (POST) | `grade`, `payment_status`, `from`, `to` | all nullable; `payment_status` `string\|in:all,unpaid,paid`; `from`/`to` dates (from→to range when both) |
| `payments`, `payment_parts` (POST) | `from`, `to`, `payment_status` (parts only) | `from`/`to` `required\|date`, `to` `after_or_equal:from`; `payment_status` `nullable\|string\|in:all,unpaid,paid` |
| `credit` (POST) | `acc_year` | `nullable\|integer` (0/absent = current active year) |
| `school_fees` (GET) | — | — |
| `final_year` (POST) | `grade`, `classroom` | `nullable\|integer` (0/absent = all) |

## State transitions

None — all report actions are read-only. PDF generation is stateless (no writes, no side-effect state).

## Data correctness invariants

1. Every report passes the exact array keys its view consumes (D-01) — data-model + view must never drift again.
2. Grouping keys exist on loaded relations (D-02) — the grouped result always has the view's expected depth.
3. Status filters use enum values, never raw ints or `null` bare comparisons (D-03, D-09).
4. Any optional/input-dependent value (active academic year, item lookup, optional collections) has an explicit guard that yields a clear message, never a crash (D-04).
5. `students.tameen` filter matches the string value space (D-09) — to be confirmed by data query in Phase 2 and locked by a test.
