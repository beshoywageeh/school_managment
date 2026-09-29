---

description: "Implementation task list for Report Module Error Remediation"
---

# Tasks: Report Module Error Remediation

**Input**: Design documents from `/specs/014-fix-report-bugs/`
**Prerequisites**: plan.md (required), spec.md (required for user stories), research.md, data-model.md, contracts/report-endpoints.md, quickstart.md

**Tests**: Test tasks ARE included. This is a bug-remediation feature; the plan (plan.md Test Suites) and the project constitution (Automated Testing — feature tests for all happy/failure/edge paths) require PHPUnit feature coverage. Tests are written FIRST and must fail (RED) before implementation (TDD).

**Organization**: Tasks are grouped by user story to enable independent implementation and testing of each story.

> **Path convention**: Paths below are relative to the Laravel app root (`school_managment/app/`), matching plan.md — e.g. `app/Http/Controllers/ReportController.php` == `school_managment/app/app/Http/...`; `routes/reports.php` == `school_managment/app/routes/reports.php`; `tests/Feature/Reports/` == `school_managment/app/tests/Feature/Reports/`.

## Format: `[ID] [P?] [Story] Description`

- **[P]**: Can run in parallel (different files, no dependencies)
- **[Story]**: Which user story this task belongs to (e.g., US1, US2, US3)
- Include exact file paths in descriptions

## Phase 1: Setup (Shared Infrastructure)

**Purpose**: Confirm the working baseline before any fixes land.

- [X] T001 Verify branch `014-fix-report-bugs` is checked out and feature docs exist under `app/specs/014-fix-report-bugs/` (plan.md, spec.md, research.md, data-model.md, contracts/report-endpoints.md, quickstart.md)
- [X] T002 [P] Snapshot the baseline route matrix: run `php artisan route:list --path=report` and save output to `storage/app/route-list-before.txt` (used in T040 to diff contract compliance)
- [ ] T003 [P] Confirm the test environment is green before changes: run `php artisan test --compact` against the configured test DB and record the passing baseline (any pre-existing failures unrelated to reports are noted, not fixed here)

**Checkpoint**: Baseline captured — fixes can now be applied and measured against it.

---

## Phase 2: Foundational (Blocking Prerequisites)

**Purpose**: Shared pieces that US1/US2/US3 all depend on — MUST complete before any user story starts.

**⚠️ CRITICAL**: No user story work can begin until this phase is complete

- [X] T004 Add `Payment_Status::filterValues(string $filter): ?array` to `app/Enums/Payment_Status.php` mapping the report filter input (`all` | `unpaid` | `paid`) to DB enum values per research D-03: `unpaid` → `['unpaid','not_paid']`, `paid` → `['paid']`, `all`/absent → `null` (no status clause). PHPDoc array-shape on the return.
- [X] T005 [P] Add active-academic-year resolution + null guard to `app/Services/Reports/ReportService.php` (`activeAcademicYear(): ?AcademicYear` via `AcademicYear::where('status', config('school.academic_year_status'))->first()`) — the single convention all year-scoped reports use (research D-04, spec FR-006, data-model.md)
- [X] T006 [P] Create test scaffolding `tests/Feature/Reports/ReportTestCase.php`: helpers to build an authenticated user with/without the `reports-export` permission (spatie), a school-scoped factory dataset, and a "disables the school scope only for explicit cross-school negative tests" helper — used by every story test class

**Checkpoint**: Foundation ready — all three user stories can now be implemented in parallel.

---

## Phase 3: User Story 1 - Financial Reports Generate Valid, Correct PDFs (Priority: P1) 🎯 MVP

**Goal**: `credit`, `school_fees`, `payments`, `payment_parts`, `fees_invoices`, `payment_status`, `exception_fee` all produce a valid PDF with exactly the filtered records — never a 500, never an empty PDF, never an empty "unpaid" filter (spec US1 / FR-001→FR-007, SC-001→SC-004).

**Independent Test**: `php artisan test --compact tests/Feature/Reports/FinancialReportsTest.php` passes; manual PDF smoke of credit + school_fees + payment_status renders correct tables (quickstart.md step 4.3–4.4).

### Tests for User Story 1 ⚠️ (write FIRST — must FAIL before implementation)

- [X] T007 [P] [US1] Write `tests/Feature/Reports/FinancialReportsTest.php` covering: (1) status filter mapping — `unpaid` returns both `unpaid`+`not_paid` rows, `paid` returns only `paid`, `all`/absent returns all (research D-03 + clarify session); (2) date ranges inclusive of the end date (FR-003 clarify session); (3) `credit` + `school_fees` actions render with data (no 500, data keys `credit`/`school_fees` present via shared view-data assertion); (4) no-data → redirect with "no data" flash; (5) no active academic year → clear message, never a crash. Run: all assertions FAIL (RED).

### Implementation for User Story 1

- [X] T008 [P] [US1] Create `app/Http/Requests/Reports/PaymentStatusReportRequest.php` — `payment_status` `required|string|in:all,unpaid,paid`, `grade` `nullable|integer` (array-style rules + Arabic/English custom messages per sibling Form Requests)
- [X] T009 [P] [US1] Create `app/Http/Requests/Reports/FeesInvoicesReportRequest.php` — `grade`, `payment_status`, `from`, `to` all `nullable`; `payment_status` `string|in:all,unpaid,paid`; `from`/`to` `date` with `to` `after_or_equal:from`
- [X] T010 [P] [US1] Create `app/Http/Requests/Reports/PaymentRangeReportRequest.php` — used by `payments`/`payment_parts`: `from`/`to` `required|date`, `to` `after_or_equal:from`
- [X] T011 [P] [US1] Create `app/Http/Requests/Reports/ExceptionFeeReportRequest.php` — `start_date`/`end_date` `required|date`, `end_date` `after_or_equal:start_date`
- [X] T012 [P] [US1] Create `app/Http/Requests/Reports/CreditReportRequest.php` — `acc_year` `nullable|integer` (0/absent = active year)
- [X] T013 [US1] Update `app/Services/Reports/FinancialReportService.php`: PHPDoc array-shape annotations on every array-returning method; drop impossible conditions; deterministic empty collections instead of conditional init; inclusive date-range queries (`whereBetween` / `whereDate(date,'>=',from)->whereDate(date,'<=',to)`) per FR-003
- [X] T014 [US1] Fix `credit()` + `school_fees()` in `app/Http/Controllers/ReportController.php` — pass view keys `credit` / `school_fees` (never dotted `backend.report.PDF.*` keys, D-01), use `ReportService::activeAcademicYear()` + no-data guard (D-04), type-hint the new Form Requests, and `return $this->PDFExport->PrintPDF(...)` (D-06)
- [X] T015 [US1] Fix `payments()` + `payment_parts()` in `app/Http/Controllers/ReportController.php` — inclusive date range, `payment_parts` status filter via `Payment_Status::filterValues()` + `whereIn` (D-03 — never ints, never bare `null`), year guard where scoped, `return` the PDF
- [X] T016 [US1] Fix `payment_status()` + `fees_invoices()` in `app/Http/Controllers/ReportController.php` — grouping keys to real loaded relations (`payment_status`: `grade.name`; `fees_invoices`: `['acd_year.view','grade.name','classroom.name']` with `acd_year:id,view`,`grade:id,name`,`classroom:id,name` eager loads) (D-02), status filter via helper (D-03), year guard, `return` the PDF
- [X] T017 [US1] Fix `exception_fee()` in `app/Http/Controllers/ReportController.php` — Form Request validation, inclusive date range, `return` the PDF
- [ ] T018 [US1] Run `php artisan test --compact tests/Feature/Reports/FinancialReportsTest.php` — all assertions GREEN; verify no report action in this story returns a 500 via quickstart manual smoke (credit, school_fees, payment_status)

**Checkpoint**: User Story 1 fully functional and independently testable (MVP scope).

---

## Phase 4: User Story 2 - Stock and Inventory Reports Show True Quantities (Priority: P2)

**Goal**: `stock_product`, `clothe_stock`, `book_sheet_stock`, `stocks_products` list, `clothes_stocks`, `books_sheets` render correct totals/headings/opening values — unknown or foreign item ids give a clean "not found", not a crash (spec US2 / FR-005, FR-010, SC-001, SC-004).

**Independent Test**: `php artisan test --compact tests/Feature/Reports/InventoryReportsTest.php` passes; quickstart smoke opens each stock report and shows populated rows + `opening_date` cells (quickstart step 4.5–4.6).

### Tests for User Story 2 ⚠️ (write FIRST — must FAIL before implementation)

- [X] T019 [P] [US2] Write `tests/Feature/Reports/InventoryReportsTest.php` covering: (1) `stock_product`/`clothe_stock`/`book_sheet_stock` with a valid owned item render totals (keys `stock`+`total`/`stocks`, D-01); (2) unknown or other-school item id → 404, never 500 (FR-005); (3) `clothes_stocks` passes `clothes` key (D-01); (4) stock views render `opening_date` (not `opening_qty_date`/`opening_stock_date`) — RED now (views still contain legacy names)

### Implementation for User Story 2

- [X] T020 [P] [US2] Create `app/Http/Requests/Reports/StockItemReportRequest.php` — `stock` `required|integer`
- [X] T021 [US2] Fix `app/Services/Reports/StockReportService.php` — null-guard in `getStockItemReport()`/`calculateTotals()`: `if (! $stock) abort(404)` (D-04); keep returning `totals`; PHPDoc array-shape on `getStockItemReport()` return (constitution I)
- [X] T022 [US2] Fix `stock_product()` + `clothe_stock()` + `book_sheet_stock()` in `app/Http/Controllers/ReportController.php` — wire the Form Request; map service keys to view keys (`stock_product`: `stocks`; clothe/book: `total` alongside `stock`) (D-01); `return` the PDF (D-06)
- [X] T023 [US2] Fix `clothes_stocks()` + `books_sheets()` in `app/Http/Controllers/ReportController.php` — `clothes_stocks` passes `['clothes' => $collection]` (D-01); eager-load `orders`, `classroom`, `grade` (D-08); `return` the PDF
- [X] T024 [P] [US2] Fix `resources/views/backend/report/PDF/stock_product_view.blade.php` — replace legacy `opening_qty_date` with the real `InventoryItem` attribute `opening_date` (D-07, FR-010)
- [X] T025 [P] [US2] Fix `resources/views/backend/report/PDF/clothe_stock.blade.php` + `resources/views/backend/report/PDF/book_sheet_stock.blade.php` — replace legacy `opening_stock_date` with `opening_date` (D-07, FR-010)
- [ ] T026 [US2] Run `php artisan test --compact tests/Feature/Reports/InventoryReportsTest.php` — all assertions GREEN; manual smoke of per-item stock report 404 for a foreign id (quickstart step 4.2)

**Checkpoint**: User Stories 1 AND 2 both work independently.

---

## Phase 5: User Story 3 - Student Reports Group Correctly and Stay Private (Priority: P3)

**Goal**: `students-export`, `student-tameen`, `student-report/{type}`, `final-year` group students under correct headings, keep sensitive exports behind `can:reports-export`, and never crash on partial/no filters (spec US3 / FR-004, FR-008, FR-009, FR-010, SC-002, SC-006).

**Independent Test**: `php artisan test --compact tests/Feature/Reports/StudentReportsTest.php tests/Feature/Reports/FinalYearReportTest.php tests/Feature/Reports/ReportAuthorizationTest.php` pass; quickstart step 4.5 shows one heading per grade.

### Tests for User Story 3 ⚠️ (write FIRST — must FAIL before implementation)

- [X] T027 [P] [US3] Write `tests/Feature/Reports/StudentReportsTest.php` covering: (1) students-export groups by `grade.name` only (each student once, no blank heading, no 500) — RED now (controller groups by phantom `acd_year`/`classes` keys); (2) `parent` is eager-loaded (assert query count — N+1 guard, D-08 + spec SC-005); (3) student-tameen types 1/2 render with `students` key + `isEmpty` guard (D-01/D-04); (4) tameen filter matches the string value space confirmed in quickstart step 2 (`where('tameen','active')` expected — lock the confirmed mapping in this test, D-09)
- [X] T028 [P] [US3] Write `tests/Feature/Reports/FinalYearReportTest.php` covering: final-year with full filters, grade-only, classroom-only, and no filters — every case completes (200/redirect with message), never 500 (FR-004/FR-006, quickstart data-model.md invariant 4)
- [X] T029 [P] [US3] Write `tests/Feature/Reports/ReportAuthorizationTest.php` covering: 403 for staff without `reports-export` on ALL 15 newly-gated PDF routes (contract report-endpoints.md `[add]` rows), 200/PDF with the permission; index (`report.index`) requires only `reports-view` (SC-006, FR-008)

### Implementation for User Story 3

- [X] T030 [P] [US3] Create `app/Http/Requests/Reports/ExportStudentsRequest.php` — `grade`/`classroom` `nullable|integer` (0/absent = all)
- [X] T031 [P] [US3] Create `app/Http/Requests/Reports/StudentTameenRequest.php` — `type` `required|integer|in:1,2`, `classroom_id` `required|integer|exists:class_rooms,id`
- [X] T032 [P] [US3] Create `app/Http/Requests/Reports/FinalYearReportRequest.php` — `grade`/`classroom` `nullable|integer`
- [X] T033 [US3] Add `can:reports-export` to the 15 PDF routes currently missing it in `routes/reports.php` — `stocks-product`, `books-sheets`, `clothes-stocks`, `stock`, `book-sheet-stock`, `clothe-stock`, `payment-status`, `fees-invoices`, `payments`, `payment-parts`, `credit`, `school-fees`, `final-year`, `student-report`, `student-tameen` (contract report-endpoints.md authorization matrix, D-05/FR-008)
- [X] T034 [US3] Fix `ExportStudents()` in `app/Http/Controllers/ReportController.php` — validate via ExportStudentsRequest; `groupBy('grade.name')` only; eager-load `grade`, `classroom`, `parent`; null-safe `optional($stud->parent)` in the students view path (D-02/D-08); `return` the PDF
- [X] T035 [US3] Fix `student_tameen()` in `app/Http/Controllers/ReportController.php` — pass `students` key, guard with `isEmpty()` (never `is_null`), tameen filter via confirmed string mapping (D-09), active-year guard, `return` the PDF
- [X] T036 [US3] Fix `final_year()` in `app/Http/Controllers/ReportController.php` + confirm `resources/views/backend/report/PDF/FinalYear.blade.php` — `$students_accounts_query` and `$exception_fees` ALWAYS initialized (empty collections when filters omit grade+classroom); drop the contradictory all-grades repopulation branch; partial/no filters complete (D-04, FR-004); `return` the PDF
- [X] T037 [US3] Fix `student_report()` type-41 path in `app/Http/Controllers/ReportController.php` + `app/Services/Reports/ReportService.php` — `classroom_id` validated (`required|exists:class_rooms,id`), data assembled via service so any type renders or gives a clear message
- [ ] T038 [US3] Run `php artisan test --compact tests/Feature/Reports/StudentReportsTest.php tests/Feature/Reports/FinalYearReportTest.php tests/Feature/Reports/ReportAuthorizationTest.php` — all GREEN; manual smoke of a students export page (quickstart step 4.5)

**Checkpoint**: All user stories independently functional and privacy-gated.

---

## Phase 6: Polish & Cross-Cutting Concerns

**Purpose**: Remaining audit findings that span multiple stories + full verification.

- [X] T039 [P] Clean `ReportController::index()` in `app/Http/Controllers/ReportController.php` — eager-load stocks with `grade`+`classroom` (D-08); replace `DB::table('teacher_grade')` with the Eloquent relation/query-builder equivalent where the model relation exists (constitution I); fix the `acadmeic_years` variable typo (research finding 15)
- [ ] T040 [P] Contract verification — run `php artisan route:list --path=report` and diff against `storage/app/route-list-before.txt` + `contracts/report-endpoints.md` matrix (permissions, actions, counts); every PDF route shows `can:reports-export`
- [ ] T041 [P] Run `quickstart.md` end-to-end — tinker data checks (tameen value space, status values, active year resolution), full test suite `php artisan test --compact`, manual PDF smoke checks for all three stories (SC-001…SC-006 evidence); optional large-school perf check (5,000 students < 10s, SC-005)
- [ ] T042 [P] Final hygiene — run `vendor/bin/pint --dirty` (constitution I); confirm zero new composer/npm dependencies were added (constitution III); scan the diff for accidental `withoutGlobalScopes()` usage (school boundary, FR-009)

---

## Dependencies & Execution Order

### Phase Dependencies

- **Setup (Phase 1)**: No dependencies — can start immediately
- **Foundational (Phase 2)**: Depends on Setup — BLOCKS all user stories (T004/T005 are referenced by every story's controller work; T006 by every story's tests)
- **User Stories (Phase 3+)**: All depend on Foundational completion; then independent (parallelizable by team)
- **Polish (Final Phase)**: Depends on US1–US3 completion; T042 closes the loop

### User Story Dependencies

- **US1 (P1)**: After Foundational only — no dependency on US2/US3 (different controller methods, service, views, request files)
- **US2 (P2)**: After Foundational only — touches `StockReportService`, `StockItemReportRequest`, 3 PDF views — no overlap with US1 files
- **US3 (P3)**: After Foundational only — touches `routes/reports.php`, students/final-year methods, 3 request files, 3 test files — no overlap with US1/US2 files

**File-conflict note**: The three stories all edit `app/Http/Controllers/ReportController.php` — different methods per story, but the same file. If stories are paralleled on the same branch, controller tasks within a story are strictly sequential (T014→T017, T022→T023, T034→T037) and should be coordinated to avoid merge conflicts (e.g., one dev per story integrating file changes incrementally).

### Within Each User Story

- Tests (T007/T019/T027-T029) MUST be written and FAIL before implementation
- Form Requests [P] → Service fixes → Controller method fixes (same file, sequential) → Run story tests GREEN
- Story complete before moving to next priority (or before integration)

### Parallel Opportunities

- Phase 1: T002, T003 in parallel
- Phase 2: T004, T005, T006 in parallel
- US1: T007 + all five Form Requests T008–T012 in parallel (separate files); then T013→T018 sequential (service, controller, verify)
- US2: T019 + T020 in parallel; then T021→T023 sequential; T024/T025 parallel (different views)
- US3: T027/T028/T029 + T030/T031/T032 all in parallel (6 separate files); then T033, and T034→T037 sequential; T038 verify
- Polish: T039–T042 in parallel (different concerns; T041 depends on earlier phases completing)

---

## Parallel Example: User Story 3

```bash
# Launch all tests + Form Requests for User Story 3 together (6 independent files):
Task: "T027 [US3] Write tests/Feature/Reports/StudentReportsTest.php"
Task: "T028 [US3] Write tests/Feature/Reports/FinalYearReportTest.php"
Task: "T029 [US3] Write tests/Feature/Reports/ReportAuthorizationTest.php"
Task: "T030 [US3] Create app/Http/Requests/Reports/ExportStudentsRequest.php"
Task: "T031 [US3] Create app/Http/Requests/Reports/StudentTameenRequest.php"
Task: "T032 [US3] Create app/Http/Requests/Reports/FinalYearReportRequest.php"
```

---

## Implementation Strategy

### MVP First (User Story 1 Only)

1. Complete Phase 1: Setup (T001–T003)
2. Complete Phase 2: Foundational (T004–T006 — CRITICAL, blocks all stories)
3. Complete Phase 3: User Story 1 (T007–T018)
4. **STOP and VALIDATE**: `php artisan test --compact tests/Feature/Reports/FinancialReportsTest.php` + quickstart smoke — US1 independently proven (financial reports are the school's monthly-critical path, spec US1 rationale)
5. Deploy/demo if ready

### Incremental Delivery

1. Foundation ready (Setup + Foundational) → snapshot baseline
2. US1 (financial) → test → deploy/demo (MVP)
3. US2 (inventory) → test → deploy/demo
4. US3 (student + privacy gates) → test → deploy/demo
5. Polish → full-suite + quickstart verification; each increment is backward-compatible and independently testable (no schema change, no new dependencies)

### Parallel Team Strategy

With multiple developers (file-conflict note above applies):

1. Team completes Setup + Foundational together
2. Once Foundational done:
   - Developer A: US1 (controller actions X, Y, Z sequentially)
   - Developer B: US2 (own service/views/actions)
   - Developer C: US3 (own actions + routes/reports.php + tests)
3. Stories integrate independently; T033 (routes permission) lands with US3 before any release

---

## Notes

- [P] tasks = different files, no dependencies
- [Story] label maps task to specific user story for traceability
- Each user story is independently completable and testable (independent test criteria per phase)
- Tests are written first and verified RED, then GREEN after implementation
- Commit after each task or logical group (e.g., after each GREEN test run)
- Stop at any checkpoint to validate story independently
- Avoid: vague tasks, same-file conflicts (controller tasks within a story are sequential), cross-story dependencies that break independence
- Data-model invariants (research D-01…D-09) are encoded in the tests above — do not merge a story whose tests are RED

---

## Phase 7: Convergence

**Origin**: `/speckit.converge` run on 2026-09-29 after `/speckit.implement`. All implementation tasks (T004–T039) are checked; the below captures the remaining verification work and the artifact/code reconciliation gaps the code review surfaced.

- [X] T043 [P] Run the FULL test suite to green evidence and record the result — `php artisan test --compact` (constitution V "run the full suite before marking a feature complete") after the final `database/factories/GradeFactory.php`/`SchoolFeeFactory.php` and `app/Services/Reports/PDFExportService.php` changes (sub-suites verified: 49 report tests, 7 GradeCrudTest, 3 SeederCoherenceTest); fix any residual failure (missing)
- [X] T044 [P] Run the per-story verification suites for completeness of T018/T026/T038 — `php artisan test --compact tests/Feature/Reports/FinancialReportsTest.php`, `tests/Feature/Reports/InventoryReportsTest.php`, and `tests/Feature/Reports/StudentReportsTest.php tests/Feature/Reports/FinalYearReportTest.php tests/Feature/Reports/ReportAuthorizationTest.php`; note that `Contract verification (T040)` must compare by URI + permission, not by dotted route names (missing)
- [X] T045 Amend `app/specs/014-fix-report-bugs/contracts/report-endpoints.md` row 16 (`final_year` output) and `app/specs/014-fix-report-bugs/spec.md` Assumptions + SC-001 wording to record the owner-approved HTML-view exception — implement now returns `view('backend.report.PDF.FinalYear')` from `final_year()`, never a PDF, and the contract must not keep asserting PDF (contradicts)
- [X] T046 Document the `withoutGlobalScope(SoftDeletingScope::class)` exemption in `app/specs/014-fix-report-bugs/plan.md` Complexity Tracking (or the review doc) — `FinancialReportService::getFinalYearData()` removes only the soft-delete scope (school boundary intact, explicit `whereNull('deleted_at')` guards) but plan.md forbids `withoutGlobalScopes`; a constitution-compliant justification is required (contradicts)
- [X] T047 [P] Align `app/specs/014-fix-report-bugs/contracts/report-endpoints.md` Route-name column with the implemented hyphen route names (`report.export-student`, `report.stock-product`, `report.book-sheet-stock`, `report.payment-status`, `report.student-tameen`, etc.) so the T040 route-list diff is unambiguous (partial)
- [ ] T048 [P] Run the DB-dependent verification once the MySQL `db` host is reachable — quickstart.md §2 tinker checks against real data (D-09 `students.tameen` value space; `fee_invoices`/`payment_parts` status value spaces; active-year resolution) and quickstart.md §5 SC-005 perf check (students export for ~5,000 students < 10 s); adjust the D-09 `where('tameen', 'active')` mapping if real data differs (missing)
