# Implementation Plan: Financial & Reporting Bugs Remediation

**Feature Directory:** `specs/010-financial-bugs-remediation`
**Source:** `docs/plan.md` (44-item catalogue; المرحلة صفر / المالية / الخزينة / التقارير)
**Created:** 2026-08-27
**Status:** Draft
**Branch:** `main`

> **⚠️ Grounding note:** Before planning, the codebase was re-audited file-by-file. Several items the catalogue lists as "still present" are **already fixed** in the current tree (e.g., `Grade_Name`, `class_room_count`, `where('excpetion_id')`, `StudentAccount` import, `$pay->amount`). Others remain broken **in different form than described**. Each item below records its **actual current state** so work targets real defects and does not chase ghosts. Do not "fix" items already resolved — rerun the relevant test instead to confirm.

---

## Technical Context

- **Framework:** Laravel 10, PHP 8.5, PHPUnit v10, Spatie Permissions
- **DB:** MySQL (primary); some tables use `schema::rename` incorrectly in a migration
- **School isolation:** `App\Models\Traits\BelongsToSchool` + `App\Models\Scopes\SchoolScope` global scope. **Applied to:** FundAccount, ReceiptPayment, FeeInvoice, SchoolFee, ExchangeBond. **NOT applied:** StudentAccount, Student.
- **Currency:** `schools.currency` column exists but is missing from `School::$fillable`; code mixes `config('school.currency')` and hardcoded `'EGP'`.
- **Key spelling anomalies:** table `recipt__payments` (double underscore), `school__fees` (double underscore), column `receipt_payment_id` (correct singular) vs controller misspelling `recipt_payment_id`; columns `Debit`/`Credit` (capitalized).
- **Broken migration:** `database/migrations/2026_07_03_000002_fix_payed_to_paid.php` misuses `Schema::rename()` (table-only) to try renaming columns — no-op; should be `renameColumn()`.

## Constitution Check

No `constitution.md` exists in this project. Following standard Laravel conventions per `AGENTS.md` (Eloquent relationships over raw joins, Form Request validation, tests for all changes, `vendor/bin/pint --dirty --format agent`).

## Governance Gates

| Gate | Status |
|------|--------|
| No spec.md / no formal speckit feature for financial bugs (user chose direct plan, Option C) | ⚠️ Accepted — plan is the governing artifact |
| Fixing one item must not regress another (catalogue §248-253 warns of chained regressions) | ✅ Enforced by per-item tests |
| All changes require a test (AGENTS.md) | ✅ Enforced below |

---

## Phase A — المرحلة صفر (P0) — Critical & Blocking

**Order is mandatory.** Each item here is a data-integrity or fatal-error risk. Fix in numeric order; write/run a test per fix before proceeding.

### A1. `PaymentService` transaction integrity (cat. #1–#4)
**Current state (verified):**
- `DB::commit()` at line 99 runs **before** `return` (line 100) — the "dead commit" is **already correct** in ordering. ⚠️ Do not "fix" commit order.
- **Real remaining defect:** the `catch` blocks (lines 101-106, 185-190) call `session()->flash()` + `\Log::alert()` but **NEVER `DB::rollBack()`** despite `DB::beginTransaction()` at lines 34 & 115 → partial writes committed when an exception occurs mid-transaction.
- Catch return types are **inconsistent** (array vs `RedirectResponse`) — a latent `TypeError`/confusing contract.
- **Null-deref:** line 39 accesses `$invoice->student_id` **before** the `if (! $invoice)` check at line 44. (Now redundant — the query already filters `student_id` — but still crashes on a missing invoice.)
- `catch (\Exception)` is fully-qualified; `use Exception;` import (line 16) is present but unused — style only.

**Fix:** add `DB::rollBack()` in each catch; hoist/move the null check before property access (or use `findOrFail()`); unify catch to `throw $e` (handle in controller) OR document a single consistent return contract. Add a feature test proving `student_accounts` + `fee_invoices` change only after the full `handleFeeInvoice`/`handlePartialPayment` succeeds, and that a forced exception rolls back state.

### A2. `AccountService` receipt/exception linkage (cat. #5–#6)
**Current state:** `createStudentAccount()` (lines 147-179) receives `$recipt_id` (param misspelled) and `$excpetion_id` (var misspelled, line 155) — but **`receipt_payment_id` is never written** into the create array at all (the param is dropped), and `'exception_id' => $excpetion_id` (line 169) propagates the misspelled variable.
**Fix:** write `receipt_payment_id` into the create array; drop/rename `$excpetion_id` → `$exception_id`. Keep column name `exception_id` (correct). Test: create a student account via service and assert both linkage columns persist correctly.

### A3. Exception fee delete lookup (cat. #7) — ✅ ALREADY FIXED
`ExceptionFeesController::destroy()` uses `where('exception_id', ...)` (correct). **Do not change.** Confirm with existing coverage / quick test.

### A4. `ReceiptPaymentController::update` (cat. #8) — 🔴 STILL BROKEN, worse than catalogue
**Current state (verified):** misspelled column `recipt_payment_id` at lines 221 **and** 231 (DB+model use `receipt_payment_id`); and lines 234-238 call `FundAccount::findOrFail($pay->id)` (wrong PK — fund id ≠ receipt id) then `->update($pay->id, $request->amount, 'receipt_payment')` (3 non-array args → Laravel `update()` type error).
**Fix:** correct column spellings to `receipt_payment_id`; fix the fund-account update to look up by `receipt_id` and pass an array `['Debit' => $request->amount]` (or correct financial delta). Test: update a receipt amount and assert both `student_accounts.receipt_payment_id` row and `fund_accounts` row reflect the new amount.

### A5. `$fillable` school isolation on financial models (cat. #9, #21) — PARTIALLY
**Current state:** `school_id` **is** in `$fillable` for all four models (StudentAccount has it twice — duplicate key line 32). **However** `BelongsToSchool` trait + `SchoolScope` are **NOT applied to `StudentAccount`** (nor `Student`), so `student_accounts` rows get **no** automatic `school_id` fill and **no** global school filter. This is the real isolation gap.
**Fix:** apply `BelongsToSchool` to `StudentAccount`; add `school_id` column/backfill via migration if missing; remove duplicate fillable key; add `exchange_bond_id` if absent (already present per audit). Tests: (a) new student-account auto-fills school_id; (b) school-scoped queries return only own-school rows; (c) cross-school isolation test.

### A6. Grade create validation (cat. #10) — ✅ ALREADY FIXED
`GradeStoreRequest` rules contain **no** `id`-required-on-create rule. **Do not change.** Confirm with existing tests.

### A7. `GradesController` field read (cat. #11) — ✅ ALREADY FIXED
`store()`/`update()` use `$request->name`. **Do not change.**

### A8. Grade delete guard (cat. #12) — ✅ ALREADY FIXED
Uses `class_rooms_count` (correct). **Do not change.** (Optional: add a regression test that deleting a grade with classes is refused.)

### A9. `father_name` stores parent ID (cat. #13) — 🔴 STILL PRESENT
**Current state:** `ParentRepository.php:18` and `Student/StudentRegeister.php:21` both do `'father_name' => $request['parent_id']` → stores the numeric parent id into the father-name text field.
**Fix:** resolve the actual father-name field (e.g., `$request['father_name']` or derive from the parent record) in both places; add a data-audit/backfill note for records written since the bug appeared. Test: registering a student persists a real father name, not the parent id.

### A10. `ParentsTable` LogActivity trait (cat. #14) — 🔴 STILL PRESENT (different cause)
**Current state:** line 9 `use App\Traits\LogActivity;` references a **non-existent class** (only `App\Http\Traits\LogsActivity` exists; `app/Traits/` doesn't exist) → fatal on component load. The missing-return (cat. #15) is **already fixed** (method has `return redirect(...)` at line 75).
**Fix:** correct the trait import to the existing `LogsActivity` trait path (and its `logActivity` method name) or remove the call if logging is handled elsewhere. Test: deleting a parent from Livewire does not fatal and returns a redirect.

---

## Phase B — المالية (Finance) — #16–#22

### B1. Receipt-create duplicate hidden `feeInvoice` input (cat. #16) — 🔴 STILL PRESENT
`reciptpayment/create.blade.php:62` uses `name="feeInvoice"` inside `@forelse($Student->fee_invoice ...)` → only last value survives.
**Fix:** make each input unique, or switch to a submitted array (`name="feeInvoice[]"`) and handle array in controller/store request. Test: submitting a receipt with multiple unpaid invoices pays the intended invoice.

### B2. `FeeInvoiceController` StudentAccount usage (cat. #17) — PARTIALLY (import fixed, NEW bug)
Import `use App\Models\StudentAccount;` (line 21) is present. **BUT** line 256 `$studentAccount->debit = $fee->amount;` — `FeeInvoice` has **no `amount` column** (amount is on `schoolFee`) → writes null.
**Fix:** source the amount from the `schoolFee` relation (`$fee->schoolFee->amount`) where the amount is needed. Test: creating a fee invoice persists the correct debit amount.

### B3. `exists:school_fees,id` wrong table (cat. #18) — 🔴 STILL PRESENT
`StorePaymentRequest.php:19` and `FeeInvoiceRequest.php:19` use `exists:school_fees,id`; actual table is `school__fees` (double underscore). `StoreFeeInvoiceRequest.php` is already correct.
**Fix:** correct to `exists:school__fees,id` in the two wrong requests. **Add a domain-consistency checklist item:** scan every form request for `school_fees`/`recipt__payments` single/double-underscore and `receipt_payment_id`/`recipt_payment_id` spellings (catalogue §248-253 warns these recur in many places).
Test: validation accepts a valid `school_fee_id` and rejects an invalid one.

### B4. Exception-fee reversal (cat. #19) + #27/#28 — 🔴 STILL PRESENT (see Phase C)
See `AccountingReversalService` fixes below (reversal logic is shared between phases). Items #19/#27/#28 are implemented together.

### B5. Zero/negative payment amount (cat. #20) — verify missing `min:0.01`
Add `min:0.01` (and rejectability) to payment-amount validation rules if not already present. Test: submit 0 / negative → validation error.

### B6. `StudentAccount` isolation (cat. #21) — 🔴 see A5
Handled in Phase A5 (BelongsToSchool on StudentAccount + migration backfill). Add dedicated treasury check in Phase C.

### B7. Dashboard cross-school sums (cat. #22) — 🔴 STILL PRESENT
`DashboardService.php:52`: `StudentAccount::where('type','invoice')->sum('debit')` has **no `school_id` filter** (sibling queries all filter).
**Fix:** add `where('school_id', $schoolId)` (or rely on a correct global scope once StudentAccount has BelongsToSchool). Test: dashboard for school A shows only A's totals.

---

## Phase C — الخزينة (Treasury) — #23–#36

### C1. Receipt edit updates treasury (cat. #23) — 🔴 STILL BROKEN
See A4: the fund-account update path in `ReceiptPaymentController::update` is broken (wrong lookup + non-array `update()`). Implement the fund-account delta (increase/decrease, not full replace) when a receipt amount changes. Test in A4.

### C2. `$pay->amount` on `Debit` column (cat. #24) — ✅ ALREADY FIXED
Code uses `Debit` (lines 95, 167, 171). **Do not change.**

### C3. Empty description in print (cat. #25) — ✅ ALREADY FIXED
`print.blade.php:84` uses `$exchange->description` (correct). **Do not change.**

### C4. Receipt-link id (cat. #26) — ✅ ALREADY FIXED
`reciptpayment/index.blade.php:33` passes the receipt id, matching `show($id)`. **Do not change.**

### C5. `AccountingReversalService` reversal semantics (cat. #27/#28/#19) — 🔴 STILL PRESENT
**Current state:** `reverseReceiptEntries`/`reverseFeeInvoiceEntries` call `$entry->create([...])` / `$account->create([...])` on **model instances** (anti-pattern), creating new rows **lacking context** (`school_id`, `date`, `user_id`, `receipt_id`), instead of proper reversing entries; `reverseReceiptEntries` only resets affected invoices to unpaid. `read` uses correct `receipt_payment_id` and `fee_invoices_id` columns.
**Fix:** rewrite as explicit `Model::create()` (query-builder level) producing a **proper reversing entry** carrying full context copied from the original entry (student_id, grade_id, type, date, school_id, user_id, receipt/exception/fee refs), preserving the original as history. Do **not** blindly `update()` the original. Tie the reversing entry to the original by ref. Test: deleting an exception/refund creates a numerically-offsetting entry, preserves the original, and carries context; balance does not inflate.

### C6. Treasury balance check before disbursement (cat. #29) — 🔴 STILL PRESENT
`AccountService::createOrUpdateExchangeBond` (79-127) performs **no** balance check before creating the debit.
**Fix:** before any disbursement create/update, compare available treasury balance vs amount being spent, using `lockForUpdate()` to prevent concurrency races. Test: attempting to disburse more than balance is blocked; concurrent disbursements don't overspend.

### C7. Partial-payment race condition (cat. #30) — 🔴 STILL PRESENT
`handlePartialPayment`: `status='unpaid'` filter exists but no `lockForUpdate()` / real transaction around read-write.
**Fix:** wrap read + status update in `DB::transaction()` with `lockForUpdate()` on the installment row. Test: two concurrent partial payments on the same unpaid installment — only one succeeds/status flips correctly.

### C8. `updateOrCreate` duplicate entries (cat. #31) — 🔴 STILL PRESENT
`ExchangeBond::updateOrCreate(['id' => $request->id], ...)` unconditionally creates new `StudentAccount` + `FundAccount` rows (lines 113-123) with no idempotency guard.
**Fix:** guard against duplicate accounting entries for the same operation (composite key or existence check with the operation ref) before creating. Test: calling the service twice for the same operation does not double-create entries.

### C9. ExchangeBond object passed as `fee_invoices_id` (cat. #32) — 🔴 STILL PRESENT
`ExchangeBondController::update()` (105-115) passes the `$exchange` **ExchangeBond object** as the `$fee_invoices_id` argument into `CreateStudentAccount`.
**Fix:** pass `$exchange->id` (or `null`) as appropriate, not the object. Test: editing an exchange bond does not error/write a bogus `fee_invoices_id`.

### C10. Reversed fund-account param order (cat. #33) — 🔴 STILL PRESENT (confirm direction)
`fundAccount($school, $exchange, $Credit, $Debit)` signature vs the call `fundAccount($school, $exchange->id, 0.0, $request->amount)` → Credit=0, Debit=amount. Review accounting direction for a disbursement against a receipt and fix the parameter order if inverted. Test: disbursement writes the correct Credit/Debit sign per the ledger convention.

### C11. Delete exchange bond without reversal (cat. #34) — 🔴 STILL PRESENT
`ExchangeBondController::destroy()` deletes 3 rows (bond + student account + fund account) with **no** reversal record.
**Fix:** replace direct deletion with a documented reversing entry that preserves the full historical trail (reuse C5 reversal primitive). Test: deleting a bond leaves offsetting reversal entries, not a silent gap.

### C12. Hardcoded EGP in print (cat. #35) — 🔴 STILL PRESENT
`exchange_bond/print.blade.php:77,80` hardcode `'EGP'`.
**Fix:** source currency from `$school->currency` (add `currency` to `School::$fillable` if mass-assignment should include it) or `config('school.currency')`. **Apply the same sweep to PDF views** (FinalYear 73/92/122, credit.blade, reciptpayment/index:38, etc.). Test: rendering uses the school config currency.

### C13. Exchange bond index pagination (cat. #36) — 🔴 STILL PRESENT
`ExchangeBondController::index():34` uses `->get()`.
**Fix:** `->paginate(config('school.per_page', 10))`. Test: index is paginated.

---

## Phase D — التقارير (Reports) — #37–#44

> Catalogue notes the reports module is entirely unfixed (0/12). Suppress a large rework; fix ordering below.

### D1. PDF view `loadView` prefix (cat. #37) — 🔴 CONCEPTUAL (via callers)
`PDFExportService::loadView($view, ...)` takes the view name dynamically; `ReportController` passes **unprefixed** names (`'students'`, `'payment_part'`, `'fee_invoices'`, `'credit'`, `'payment_status_view'`) while blades live at `resources/views/backend/report/PDF/*.blade.php`.
**Fix:** prefix callers with `backend.report.PDF.` (or map to registered paths). Test: each report export renders a PDF without "view not found".

### D2. `payment_part` view name (cat. #38) — ✅ ALREADY FIXED / NOT the issue
Blade `backend/report/PDF/payment_part.blade.php` and controller arg `'payment_part'` already match. The real blocker is D1's prefix. **Do not rename.**

### D3. `payment_status` wrong relation in view (cat. #39) — verify `schoolFee.amount`
`payment_status_view.blade.php:51` uses `$student->note` (unselected/absent column) → null. Controller selects only `['student_id','grade_id']`. Confirm relation spelling and select the needed columns.
**Fix:** align view field access with selected columns and the correct `schoolFee` relation. Test: payment-status report shows correct per-student totals.

### D4. `FinalYear.blade.php` undefined variables (cat. #40) — 🔴 STILL PRESENT
View references `$Students_grouped` / `$Students_grouped_sum` (lines 32, 57, 64-65); service `getFinalYearData()` provides `Students_query`, `Students_by_grade`, `Students_by_classroom`, etc. — **not** `Students_grouped`.
**Fix:** unify variable names between `FinancialReportService` and the blade (pick one canonical name, e.g. `$students_by_grade`). Test: FinalYear report renders without undefined-variable errors.

### D5. GET link to POST route (cat. #41) — 🔴 STILL PRESENT
`backend/report/index.blade.php:19` renders `type => 'link'` entries as `<a href route('report.export-student')>` where the route is `POST` → 405.
**Fix:** either make the route GET (safe, no side effects) or render as a POST form for that report. Test: clicking the export-student link no longer 405s.

### D6. Zero validation in 18 report functions (cat. #42)
**Fix:** add Form Requests / explicit `validate()` to report controller methods, especially for dates and id filters passed to queries. Test: bad/absent filter params → clear validation error, no SQL error.

### D7. `fees.amount` vs `schoolFee.amount` (cat. #43) — 🔴 STILL PRESENT
`fee_invoices.blade.php:53` and `credit.blade.php:42` tfoot use `->sum('fees.amount')`; relation is `schoolFee` (singular). `FinancialReportService.php:126` calls `$student->fee_invoices->school_fees` (collection → invalid) and sums `amount` on a relation with no amount column.
**Fix:** global sweep replace `fees.amount` → `schoolFee.amount` in totals; fix `FinancialReportService` `getPaymentStatusReport` to sum from the `school__fees`/`schoolFee` relation with correct eager loading; correct column selection (fee_invoices has `id,student_id,status` — no `amount`). Test: each financial report total is nonzero and correct.

### D8. `ReportController:114` filter on missing column (cat. #44) — 🔴 STILL PRESENT
`payment_parts()` lines 113-115 filter `where('payment_status', ...)`; the `payment_parts` table column is `status` (enum paid/unpaid).
**Fix:** correct column to `status` and align the request param. Test: filtering payment parts by status returns rows without SQL error.

---

## Cross-Cutting Workstreams

### W1. Broken `fix_payed_to_paid` migration
`2026_07_03_000002_fix_payed_to_paid.php` misuses `Schema::rename()` (2-arg table-only) to rename `payed`→`paid` / `notpayed`→`not_paid` columns (3 args) → no-op/error on fresh DB.
**Fix:** replace with `Schema::table(...)->renameColumn(...)`; verify any actual `payed`/`notpayed` columns. Test: `php artisan migrate` runs clean on fresh + existing DB.

### W2. Spelling consistency sweep (catalogue §248-253)
Run a repo-wide grep for the recurring misspellings and normalize across all files + tests (see B3):
- `recipt_payment_id` → `receipt_payment_id` (column+queries)
- `school_fees` → `school__fees` (table) where a single-underscore erroneously appears
- `excpetion*` → `exception*` (exception_id)
- `Grade_Name` → `name`; `class_room_count` → `class_rooms_count`
Audit **legacy financial + report files** for silent data-write bugs (like `father_name`) in addition to crash bugs.

### W3. Currency configuration
Make currency a single source (`School::$fillable` + `config('school.currency')` with `SCHOOL_CURRENCY` env) and remove hardcoded `'EGP'` from print/PDF/index views.

### W4. School isolation hardening
`SchoolScope` skips filtering for unauthenticated/admin/null-school users. Decide explicitly whether admin should see all schools (likely yes) and that null-school users never write unfiltered rows. Ensure `BelongsToSchool` covers `StudentAccount` (A5/B6).

---

## Testing & Verification Strategy

- **Per item:** write or reuse a PHPUnit feature test before considering the item done (AGENTS.md). Run with `php artisan test --compact --filter=<TestName>`.
- **Regression guard:** because catalogue items interact (e.g., reversal touches both exception fees and exchange bonds), add a smoke test that runs the payment→reversal lifecycle and asserts totals don't inflate.
- **Final gates:**
  - `php artisan migrate` passes on fresh + existing DB (W1).
  - `vendor/bin/pint --dirty --format agent` passes.
  - `php artisan route:list` unchanged by non-route fixes.
  - Full suite: `php artisan test --compact`.

## Out of Scope / Deferred
- Inventory module remediation (that is `specs/009-codebase-remediation` — separate feature).
- Schedule enhancement (see `specs/004`).
- Any redesign of the accounting model beyond the minimal reversal/isolation fixes needed to stop data corruption.
