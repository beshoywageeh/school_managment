# Tasks — Financial & Reporting Bugs Remediation

**Feature:** `010-financial-bugs-remediation` (direct plan from `docs/plan.md`; no spec.md — governs by `plan.md`)
**Branch:** `main`
**Rule:** every change ships with a feature test (AGENTS.md). Run `php artisan test --compact --filter=<Test>` per task. Never mark done without green output.

**Story mapping** (no spec.md — units are the plan's canonical phases):
- **US1** = المرحلة صفر (P0) — critical data-integrity & fatal errors
- **US2** = المالية (Finance) #16–#22
- **US3** = الخزينة (Treasury) #23–#36
- **US4** = التقارير (Reports) #37–#44

---

## Phase 1 — Setup

- [x] T001 Review `app/Services/PaymentService.php`, `app/Services/Finance/AccountService.php`, `app/Services/AccountingReversalService.php`, the four financial models, and `app/Services/Reports/*` to confirm the audit findings in `plan.md` before editing (do not re-fix already-correct items)

## Phase 2 — Foundational (blocking prerequisites)

- [x] T002 Fix `database/migrations/2026_07_03_000002_fix_payed_to_paid.php`: replace the misused `Schema::rename(...)` (table-only, 2-arg) with `Schema::table(...)->renameColumn('payed','paid')` / `('notpayed','not_paid')` so `php artisan migrate` runs clean on fresh + existing DB
- [x] T003 [P] Add `school_id` migration + backfill for `student_accounts` (from student relation) if column missing — prerequisite for US1/US2 isolation

## Phase 3 — US1 (المرحلة صفر / P0)

- [x] T004 [US1] Add `DB::rollBack()` to both `catch` blocks in `app/Services/PaymentService.php` (lines ~101-106, ~185-190); move `$invoice->student_id` access after the `if (! $invoice)` null check (line 39/44); unify catch contract (throw to controller) — test: forced exception rolls back transactions, invoice-null handled
- [x] T005 [US1] Persist `receipt_payment_id` into the create array in `AccountService::createStudentAccount` (`app/Services/Finance/AccountService.php` ~147-179) and rename param/var `$excpetion_id`→`$exception_id` — test: linkage columns persist
- [x] T006 [US1] Fix `app/Http/Controllers/ReceiptPaymentController.php` update(): correct `recipt_payment_id`→`receipt_payment_id` (lines 221, 231); fix fund-account update to look up by `receipt_id` and pass array `['Debit' => $request->amount]` (lines 234-238) — test: receipt edit updates student + treasury correctly
- [x] T007 [US1] Apply `BelongsToSchool` trait to `app/Models/StudentAccount.php`; remove duplicate `school_id` fillable key (lines 30/32); ensure `exchange_bond_id` present — tests: new row auto-fills school_id; cross-school isolation
- [x] T008 [US1] Fix `'father_name' => $request['parent_id']` → real father-name source in `app/Repositories/Eloquent/ParentRepository.php:18` and `app/Services/Student/StudentRegeister.php:21`; add data-audit note for records written since bug — test: real father name persisted, not parent id
- [x] T009 [US1] Fix broken trait import `use App\Traits\LogActivity;` → existing `App\Http\Traits\LogsActivity` in `app/Livewire/ParentsTable.php:9` (or remove the `logActivity()` call at line 63); preserve the existing `return redirect(...)` at line 75 — test: deleting a parent no fatal + returns redirect
- [x] T010 [US1] (Verify-only) Confirm already-fixed items need no change: `ExceptionFeesController` `where('exception_id')`; `GradeStoreRequest` (no id-on-create rule); `GradesController` `name` + `class_rooms_count`; add a regression test that deleting a grade with classes is refused (`app/Http/Controllers/Grades/GradesController.php`)

## Phase 4 — US2 (المالية / Finance)

- [x] T011 [US2] Make hidden `feeInvoice` input unique/array-based in `resources/views/backend/reciptpayment/create.blade.php:62` (currently `name="feeInvoice"` inside the loop → only last value survives) — test: submitting a receipt with multiple unpaid invoices pays the intended one
- [x] T012 [US2] Fix `$studentAccount->debit = $fee->amount` → `$fee->schoolFee->amount` in `app/Http/Controllers/FeeInvoiceController.php:256` (FeeInvoice has no `amount` column) — test: correct debit persisted
- [x] T013 [P] [US2] Correct `exists:school_fees,id` → `exists:school__fees,id` in `app/Http/Requests/StorePaymentRequest.php:19` and `app/Http/Requests/FeeInvoiceRequest.php:19` (table is double-underscore `school__fees`; `StoreFeeInvoiceRequest.php` already correct) — test: valid/invalid school_fee_id
- [x] T014 [US2] Add `min:0.01` to payment-amount validation in the relevant Form Request(s) if absent — test: 0/negative rejected
- [x] T015 [US2] Add `where('school_id', $schoolId)` to the unscoped debit sum at `app/Services/DashboardService.php:52` (sibling queries already filter) — test: dashboard shows per-school totals only

## Phase 5 — US3 (الخزينة / Treasury)

- [x] T016 [US3] Rewrite `app/Services/AccountingReversalService.php` (reverseReceiptEntries + reverseFeeInvoiceEntries): replace instance `$entry->create([...])` anti-pattern with explicit `Model::create()` producing proper reversing entries that carry full context (student_id, grade_id, type, date, school_id, user_id, receipt/exception/fee refs) linked to the original preserved as history — tests: offsetting entry created, context carried, totals not inflated; delete exception/reset only affected invoices
- [x] T017 [US3] Add treasury balance check before disbursement in `AccountService::createOrUpdateExchangeBond` (`app/Services/Finance/AccountService.php` 79-127) with `lockForUpdate()` — test: over-disbursement blocked; concurrent disbursements don't overspend
- [x] T018 [US3] Wrap partial-payment read+status update in `DB::transaction()` with `lockForUpdate()` on the installment row (`PaymentService::handlePartialPayment`) — test: concurrent partial payments on same unpaid installment are safe
- [x] T019 [US3] Add idempotency guard to `ExchangeBond::updateOrCreate(['id' => $request->id], ...)` (`app/Services/Finance/AccountService.php:99`) so it does not unconditionally create duplicate `StudentAccount`/`FundAccount` rows — test: repeat call does not double-create
- [x] T020 [US3] Fix `ExchangeBondController::update()` (~105-115): pass `$exchange->id` (or `null`) as the `$fee_invoices_id` argument, not the `ExchangeBond` object — test: edit bond succeeds, no bogus `fee_invoices_id`
- [x] T021 [US3] Verify/fix `fundAccount()` Credit/Debit parameter order for a disbursement in `app/Services/Finance/AccountService.php` (signature `fundAccount($school,$exchange,$Credit,$Debit)` vs call `fundAccount($school,$exchange->id,0.0,$request->amount)`) — test: correct ledger sign
- [x] T022 [US3] Replace direct deletion in `ExchangeBondController::destroy()` (deletes 3 rows, no reversal) with a documented reversing entry preserving history (reuse T016 primitive) — test: offsetting entries remain after delete
- [x] T023 [US3] Replace hardcoded `'EGP'` with `$school->currency` / `config('school.currency')` in `resources/views/backend/exchange_bond/print.blade.php:77,80` and the other print/PDF views (FinalYear 73/92/122, credit.blade, reciptpayment/index:38); add `currency` to `app/Models/School.php` `$fillable` — test: render uses config currency
- [x] T024 [US3] Change `->get()` → `->paginate(config('school.per_page', 10))` in `app/Http/Controllers/ExchangeBondController.php:34` — test: index is paginated

## Phase 6 — US4 (التقارير / Reports)

- [x] T025 [US4] Prefix PDF view names with `backend.report.PDF.` in `app/Http/Controllers/ReportController.php` callers of `PDFExportService::loadView` (`'students'`, `'payment_part'`, `'fee_invoices'`, `'credit'`, `'payment_status_view'`) so blades under `resources/views/backend/report/PDF/` resolve — test: each report exports a PDF without view-not-found
- [x] T026 [US4] Unify variable names (`$Students_grouped` / `$Students_grouped_sum`) between `app/Services/Reports/FinancialReportService.php` `getFinalYearData()` and `resources/views/backend/report/PDF/FinalYear.blade.php` (lines 32, 57, 64-65) — test: FinalYear renders without undefined-variable
- [x] T027 [US4] Fix GET→POST 405: `resources/views/backend/report/index.blade.php:19` renders `type=>'link'` as `<a>` to `route('report.export-student')` which is a `POST` route (`routes/reports.php:12`) — make the route GET (no side effects) or render as a POST form — test: link no longer 405s
- [x] T028 [US4] Correct filter column `payment_status`→`status` in `app/Http/Controllers/ReportController.php:113-115` (`payment_parts` table column is `status`) — test: filtering returns rows, no SQL error
- [x] T029 [US4] Fix `FinancialReportService::getPaymentStatusReport` (`app/Services/Reports/FinancialReportService.php:126`): resolve Collection `->school_fees` misuse and sum `amount` from the `schoolFee`/`school__fees` relation with correct eager loading (fee_invoices has no `amount` column) — test: financial report totals nonzero & correct
- [x] T030 [US4] Replace `fees.amount`→`schoolFee.amount` in report tfoot totals: `fee_invoices.blade.php:53`, `credit.blade.php:42` — test: per-report totals correct
- [x] T031 [US4] Align `payment_status_view.blade.php:51` (`$student->note`) with controller-selected columns `['student_id','grade_id']` and correct `schoolFee` relation — test: payment-status report shows correct per-student totals
- [x] T032 [US4] Add Form Requests/explicit `validate()` to the ~18 report controller methods (`app/Http/Controllers/ReportController.php`), esp. dates and id filters — test: bad/absent params → clean validation error, no SQL error

## Phase 7 — Polish & Cross-Cutting

- [x] T033 Run repo-wide spelling-consistency sweep and fix all non-test occurrences (table `school__fees`, `recipt__payments`, column `receipt_payment_id`→not `recipt_payment_id`, `exception_id`, `name`, `class_rooms_count`) across the files in T004-T032 and related legacy financial/report code
- [x] T034 Freeze currency to a single source of truth: `config('school.currency')` (`SCHOOL_CURRENCY` env) + `School::$fillable['currency']`; remove remaining hardcoded `'EGP'` outside print/PDF views
- [x] T035 Harden school isolation: document `SchoolScope` behavior for unauthenticated/admin/null-school users (skip-filter decision) and ensure `StudentAccount` isolation via T007; confirm admin sees all schools while non-admin never writes unfiltered rows
- [x] T036 (Verify-only) Confirm already-correct items remain correct after the sweep: `$pay->Debit`, `$exchange->description`, receipt-link id in `reciptpayment/index.blade.php:33`, `payment_part` view name
- [x] T037 Final gates: `php artisan migrate` clean; `vendor/bin/pint --dirty --format agent` passes; `php artisan test --compact` full suite green

---

## Execution Order & Parallelization

**Dependency chain (must be sequential):**
1. **T001 → T002 → T003** (Setup + Foundational; unblocks fresh-DB CI)
2. **US1 (T004-T010):** T004→T005→T006 sequential (shared services); T007/T008/T009 parallelizable with each other (`[P]` where marked none due to shared models — run after T005); T010 verify-only
3. **US2 (T011-T015):** T012 after T011 (same UI path); T013/T014/T015 `[P]`-able
4. **US3 (T016-T024):** T016 (reversal primitive) FIRST, then T017-T022; T023/T024 `[P]`-able
5. **US4 (T025-T032):** T025 first (unblocks all exports); then T026-T032 mostly `[P]`
6. **T033-T037** close-out

**Parallel opportunities:** T002 ∥ T003; T013 ∥ T014 ∥ T015; T023 ∥ T024; T026..T032 within US4 (after T025). Shared-data tasks (T016 reversal, T007 isolation, T035) are serialization points.

**Independent test criteria (per story):**
- **US1:** each P0 fatal/data bug has a passing feature test; `migrate` clean
- **US2:** validation + persistence tests green without changing US3 ledger behavior
- **US3:** reversal/payment tests prove totals don't inflate and balance checks fire
- **US4:** every report exports a PDF and returns correct nonzero totals

## Implementation Strategy (MVP-first)

1. **MVP = US1 only:** close all P0 fatal/data-corruption bugs (T004-T010) and W1 migration (T002) first — these carry the highest risk and block reliable testing of the rest.
2. Then US2 (finance) to stop further data corruption (esp. T015 dashboard + T013 exists rule).
3. Then US3 treasury (ledger correctness) — the most accounting-sensitive.
4. US4 reports last (currently 0/12, so aggregate value is verification, not new functionality).
5. Close-out sweep/polish.

Do **not** re-fix items in plan.md marked "✅ ALREADY FIXED" — verify (T010, T036) instead of reworking.
