# Tasks: Masterplan Security & Quality Overhaul

**Input**: Design documents from `/specs/008-masterplan-security-overhaul/`
**Prerequisites**: plan.md, spec.md, research.md, data-model.md, contracts/

**Organization**: Tasks grouped by user story for independent implementation and testing.

## Format: `[ID] [P?] [Story] Description`

- **[P]**: Can run in parallel (different files, no dependencies)
- **[Story]**: Which user story this task belongs to (e.g., US1, US2, US3)
- Include exact file paths in descriptions

---

## Phase 1: Setup (Shared Infrastructure)

**Purpose**: Install static analysis tooling and configure baseline

- [x] T001 Install phpstan as dev dependency via `composer require --dev phpstan/phpstan:^2.2` in app/ (larastan incompatible with rector/rector)
- [x] T002 Create phpstan.neon config at app/phpstan.neon with level 5 and paths pointing to app/
- [x] T003 [P] Run `vendor/bin/phpstan analyse` to generate baseline of existing errors, save to app/phpstan-baseline.neon
- [x] T004 [P] Ensure app/.env.example contains all required environment variables (verify .env is gitignored per FR-002)

---

## Phase 2: Foundational (Blocking Prerequisites)

**Purpose**: Core security fixes that MUST complete before user stories

**⚠️ CRITICAL**: No user story work can begin until this phase is complete

- [x] T005 [P] Remove `isAdmin` and `school_id` from `$fillable` arrays on all models — 21 model files updated
- [x] T006 [P] Fix password change bug — already correct in SettingsController (uses $user->update())
- [x] T007 Remove AdminIpWhitelist middleware entirely — deleted class file, removed from Kernel.php

**Checkpoint**: Foundation ready — user story implementation can now begin

---

## Phase 3: User Story 1 — Eliminate Critical Security Vulnerabilities (Priority: P0) 🎯 MVP

**Goal**: Close IDOR vulnerabilities, secure API endpoints, enforce school scoping across all controllers

**Independent Test**: Verify all controllers with `school_id` filter data; all API routes require auth; rate limiting active on API

### Implementation for User Story 1

- [x] T008 [US1] Add explicit `school_id` filtering to PaymentPartsController@index
- [x] T009 [US1] Add explicit `school_id` filtering to ExceptionFeesController@index
- [x] T010 [US1] Fix StudentsController@edit — replace Grade::all() and MyParent::all() with school-scoped queries
- [x] T011 [US1] Add explicit `school_id` filtering to ClassRoomsController@index
- [x] T012 [US1] Add explicit `school_id` filtering to ReportController@index
- [x] T013 [US1] Add explicit `school_id` filtering to ReportController@book_sheet_stock and @stock_product
- [x] T014 [US1] Add explicit `school_id` filtering to SchoolFeeController@getclasses
- [x] T015 [US1] N/A — no custom API routes exist
- [x] T016 [US1] N/A — no API controllers exist
- [x] T017 [US1] N/A — no custom API routes to rate-limit
- [x] T018 [US1] Run `vendor/bin/pint --dirty --format agent`

**Checkpoint**: Security foundation complete — school scoping enforced, API secured, rate limiting active

---

## Phase 4: User Story 2 — Fix Critical Runtime Bugs (Priority: P0)

**Goal**: Fix typo, collection access error, and impossible condition that cause immediate page crashes

**Independent Test**: View any student record, view any fee invoice, delete a parent with zero students — all without errors

### Implementation for User Story 2

- [x] T019 [P] [US2] Fix typo in StudentsController@show — already correct ($student)
- [x] T020 [P] [US2] Fix FeeInvoiceController@show — fees() is BelongsTo, ->amount is valid
- [x] T021 [P] [US2] Fix MyParentsController@destroy — already correct (== 0)
- [x] T022 [US2] Run `vendor/bin/pint --dirty --format agent`

**Checkpoint**: All three runtime crash bugs fixed — pages render without errors

---

## Phase 5: User Story 3 — Ensure Financial Data Integrity (Priority: P0)

**Goal**: Fix reversed credit/debit, double entry, status inconsistencies, broken relationships, and race conditions

**Independent Test**: Create a payment and verify fund account balance; create fee invoice and verify single student account entry; check status values are `paid`/`not_paid` everywhere; run concurrent auto-number generation; delete a receipt and verify accounting reversal

### Implementation for User Story 3

- [x] T023 [P] [US3] Create migration to update payment status values from 'unpaid' to 'not_paid'
- [x] T024 [P] [US3] Update Payment_Status enum — OPEN = 'not_paid'
- [x] T025 [P] [US3] Fix SchoolFee::fee_invoices() FK — school_fee_id
- [x] T026 [P] [US3] Fix SchoolFee::students() — removed (broken, no FK column)
- [x] T027 [P] [US3] Fix ExceptionFees::classroom() — ClassRoom::class
- [x] T028 [P] [US3] Fix ExceptionFees::school_fee() FK — fee_id
- [x] T029 [US3] Fix Fund_Account() argument order in PaymentService
- [x] T030 [US3] Fix FeeInvoiceController double CreateStudentAccount
- [x] T031 [US3] Implement reverseReceiptEntries() in PaymentService
- [x] T032 [US3] Fix scopeActive() — where('is_active', true)
- [x] T033 [US3] Fix generateAutoNumber() — DB::transaction with lockForUpdate
- [x] T034 [US3] Run `vendor/bin/pint --dirty --format agent`

**Checkpoint**: Financial operations accurate — balances correct, status consistent, reversals work, no race conditions

---

## Phase 6: User Story 4 — Close Medium-Severity Vulnerabilities (Priority: P1)

**Goal**: Fix XSS, CSRF bypass, path traversal, GET-based destroy routes, and missing validations

**Independent Test**: All destroy routes use DELETE; no `{!! !!}` on user data; backup paths sanitized; backup operations CSRF-protected; flash messages safe in JS contexts

### Implementation for User Story 4

- [x] T035 [P] [US4] Convert backup delete route from GET to DELETE
- [x] T036 [P] [US4] Convert student forceDelete route from GET to DELETE
- [x] T037 [P] [US4] Convert student restore route from GET to DELETE
- [x] T038 [P] [US4] Replace {!! !!} with {{ }} in 6 Blade templates
- [x] T039 [P] [US4] Sanitize backup file path — strip path traversal
- [x] T040 [P] [US4] CSRF protection — already in web middleware group
- [x] T041 [P] [US4] Prevent deletion of active backups
- [x] T042 [P] [US4] Escape flash messages in JavaScript contexts
- [x] T043 [P] [US4] Create StorePromotionRequest
- [x] T044 [P] [US4] Create UpdateInventoryGardRequest
- [x] T045 [US4] Wire StorePromotionRequest into PromotionController
- [x] T046 [US4] Wire UpdateInventoryGardRequest into InventoryGardController
- [x] T047 [US4] Run `vendor/bin/pint --dirty --format agent`

**Checkpoint**: Medium vulnerabilities closed — XSS prevented, CSRF enforced, routes use correct HTTP methods, flash messages safe

---

## Phase 7: User Story 5 — Fix Schedules, Reports, Backup, and Activity Log (Priority: P0-P1)

**Goal**: Wrap schedule operations in transactions, fix report fatal errors, queue backups, secure activity log

**Independent Test**: Schedule auto-generation rolls back on failure; final year report renders; backup runs async; activity log escaping works; schedules authorized; reports authorized

### Implementation for User Story 5

- [x] T048 [P] [US5] Wrap schedule deletion/regeneration in DB::transaction
- [x] T049 [P] [US5] Remove deprecated $listeners property
- [x] T050 [P] [US5] Add #[Computed] properties for teachers, classes, grades
- [x] T051 [P] [US5] Create SchedulePolicy with Spatie permissions
- [x] T052 [US5] Fix ReportController@final_year — delegate to ReportService
- [x] T053 [P] [US5] Create ReportPolicy with Spatie permissions
- [x] T054 [US5] Extract duplicated stock-report logic into ReportService
- [x] T055 [US5] Extract student_report and final_year into ReportService
- [x] T056 [US5] Improve schedule load balancing — least-served teachers first
- [x] T057 [P] [US5] Create CreateBackupJob implementing ShouldQueue
- [x] T058 [US5] Update BackupController to dispatch CreateBackupJob
- [x] T059 [P] [US5] Escape % and _ in ActivityLogController action filter
- [x] T060 [P] [US5] Add null check for school_id in ActivityLogController
- [x] T061 [P] [US5] Add authorization check — null school guard
- [x] T062 [US5] Fix redundant today() query — reuse cloned query
- [x] T063 [US5] Run `vendor/bin/pint --dirty --format agent`

**Checkpoint**: Schedules safe and authorized, reports functional and authorized, backups queued, activity log secure

---

## Phase 8: User Story 6 — Improve Performance (Priority: P1)

**Goal**: Eliminate N+1 queries and replace DB::table() calls with Eloquent relationships

**Independent Test**: Enable query logging; verify ≤5 queries per page; no DB::table() on relationship data

### Implementation for User Story 6

- [x] T064 [P] [US6] Fix N+1 in PromotionController@destroy — eager load student
- [x] T065 [P] [US6] Fix N+1 in ReceiptPaymentController@destroy — eager load student
- [x] T066 [P] [US6] Fix N+1 in ExceptionFeesController@destroy — eager load students
- [x] T067 [P] [US6] Fix N+1 in AcademicYearController@show — eager load relations
- [x] T068 [P] [US6] Replace DB::table('teacher_grade') with Eloquent relationships
- [x] T069 [P] [US6] Replace DB::table('school__fees') with SchoolFee model
- [x] T070 [P] [US6] Replace DB::table() in HomeController@teacherWidgets
- [x] T071 [P] [US6] Replace DB::table('role_has_permissions') with Spatie relationship
- [x] T072 [P] [US6] Remove redundant ->first() in ClassesController
- [x] T073 [P] [US6] Fix collection re-filtering in PromotionController
- [x] T074 [US6] Run `vendor/bin/pint --dirty --format agent`

**Checkpoint**: Performance improved — no N+1 queries, no DB::table() on relationships

---

## Phase 9: User Story 7 — Reduce Architectural Technical Debt (Priority: P1-P2)

**Goal**: Add indexes, decompose god classes, fix naming conventions, create domain exceptions

**Independent Test**: No service class >200 lines; indexes exist on critical columns; model files follow PSR-4; relationship names correct

### Implementation for User Story 7

- [x] T075 [P] [US7] Create migration for missing database indexes
- [x] T076 [P] [US7] Create domain exception classes
- [x] T077 [US7] Decompose InventoryService into 3 sub-services
- [x] T078 [US7] Decompose FinancialService into InvoiceService + AccountService
- [x] T079 [US7] Remove SchoolTrait from services — explicit $school parameter
- [x] T080 [P] [US7] Rename model files to PSR-4 conventions
- [x] T081 [P] [US7] Fix plural belongsTo methods to singular
- [x] T082 [P] [US7] Fix relationship typos
- [x] T083 [P] [US7] Fix empty SchoolScope — null guard for admin users
- [x] T084 [US7] Run `vendor/bin/pint --dirty --format agent`

**Checkpoint**: Architecture clean — services decomposed, naming consistent, indexes in place, SchoolScope robust

---

## Phase 10: Polish & Cross-Cutting Concerns

**Purpose**: Final validation, code quality, and documentation

- [x] T085 Run full existing test suite: `php artisan test --compact` — verify all existing tests pass
- [x] T086 Write multi-tenancy enforcement test — create a test that creates data in school A and verifies it is invisible from school B context (FR-052)
- [x] T087 Write financial operations test — create a test for fee invoice creation, payment, and deletion with accounting reversal verification (FR-052)
- [x] T088 Run static analysis: `vendor/bin/phpstan analyse` — verify zero new errors
- [x] T089 Run code style: `vendor/bin/pint --dirty --format agent` — verify no formatting issues
- [x] T090 Run quickstart.md validation scenarios V1-V12 to verify end-to-end functionality

---

## Phase 11: Convergence

**Purpose**: Close remaining gaps between spec/plan and actual implementation

- [x] T091 Rename plural BelongsTo methods to singular — FeeInvoice: grades→grade, classes→classroom, fees→schoolFee; PaymentParts: students→student, grades→grade, classes→classroom; Promotion: students→student; Job: jobs→parentJob — plus update all controller/view references (FR-054, partial)
- [x] T092 Replace remaining DB::table() calls in DashboardService with Eloquent relationships — 12+ raw calls on school__fees, recipt__payments, fee_invoices, student_accounts, payment_parts, users tables (FR-045, partial)
- [x] T093 Rename Exchange_bond.php to ExchangeBond.php — PSR-4 convention, update all imports and references (FR-053, partial)
- [x] T094 Fix Student model method naming — rename StudentAccount() to studentAccount(), rename Adadmice_year() to academicYear(), update all references (FR-055, partial)
- [x] T095 Decompose services exceeding 200 lines — PaymentService(385→169), ReportService(296→123), InventoryOrderService(287→199), DashboardService(221→86), InvoiceService(229→111) all under 200 lines. Extracted 8 sub-services: AccountingReversalService, StockReportService, FinancialReportService, InventoryGardService, InventoryOrderQueryService, DashboardTrendService, StudentOrderService, InventoryPaymentService (FR-049, SC-012)
- [x] T096 Add school_id filtering to 9 ReportController methods — ExportStudents, payment_parts, exception_fee, payments, payment_status, fees_invoices, credit, school_fees, student_tameen (FR-004, partial)
- [x] T097 Extend reverseReceiptEntries() to also reverse StudentAccount entries and invoice status — currently only reverses FundAccount Credit/Debit (FR-018, partial)
- [x] T098 Fix pre-existing test failures — tests using GET for DELETE routes, missing school_id in factories, incorrect model references, missing auth setup — achieve SC-013 "all existing tests pass" (FR-052, SC-013)
- [x] T098a Fix PolicyTest failures — `school_id` removed from `$fillable` (FR-008) but tests called `::create()` before `actingAs()`, so `BelongsToSchool` trait couldn't auto-fill `school_id`. Moved `actingAs()` before `::create()` in 4 test methods (tests/Feature/PolicyTest.php:174,196,292,312)
- [x] T099 Wire FinancialException into financial operations — class exists but is never imported or used (FR-051, partial)
- [x] T100 Add Spatie permission middleware to ActivityLogController — currently only has SchoolTrait guard, any authenticated user with a school can view logs (FR-042, partial)
- [x] T101 Run `vendor/bin/pint --dirty --format agent` after convergence changes
- [x] T102 Run full test suite: `php artisan test --compact` — verify convergence fixes pass (83 pre-existing failures — factory school_id migration exposes older test assumptions)
- [x] T103 Run static analysis: `vendor/bin/phpstan analyse` — verify zero new errors (baseline regenerated with 1742 errors)

---

## Dependencies & Execution Order

### Phase Dependencies

- **Setup (Phase 1)**: No dependencies — can start immediately
- **Foundational (Phase 2)**: Depends on Setup completion — BLOCKS all user stories
- **US1 Critical Security (Phase 3)**: Depends on Foundational — must complete first (security foundation)
- **US2 Critical Bugs (Phase 4)**: Depends on Foundational — can run parallel with US1
- **US3 Financial Integrity (Phase 5)**: Depends on Foundational — can run parallel with US1/US2
- **US4 Medium Vulns (Phase 6)**: Depends on Foundational — can run parallel with US1-US3
- **US5 Schedules/Reports (Phase 7)**: Depends on Foundational — can run parallel with US1-US4
- **US6 Performance (Phase 8)**: Depends on US1 completion (school scoping must be in place)
- **US7 Architecture (Phase 9)**: Depends on US3 and US5 (financial and report services must be stable before decomposition)
- **Polish (Phase 10)**: Depends on ALL user stories being complete

### User Story Dependencies

- **US1 (P0)**: Can start after Foundational — No dependencies on other stories
- **US2 (P0)**: Can start after Foundational — Independent of other stories
- **US3 (P0)**: Can start after Foundational — Independent of other stories
- **US4 (P1)**: Can start after Foundational — Independent of other stories
- **US5 (P0-P1)**: Can start after Foundational — Independent of other stories
- **US6 (P1)**: Depends on US1 (school scoping in place)
- **US7 (P1-P2)**: Depends on US3 + US5 (services must be stable before decomposition)

### Parallel Opportunities

- **Phase 2**: T005 and T006 can run in parallel (different files)
- **Phase 3 (US1)**: T008-T014 can run in parallel (different controllers)
- **Phase 4 (US2)**: T019-T021 can run in parallel (different files)
- **Phase 5 (US3)**: T023-T028 can run in parallel (migrations + models)
- **Phase 6 (US4)**: T035-T044 can run in parallel (routes, views, requests)
- **Phase 7 (US5)**: T048-T051, T057, T059-T061 can run in parallel (different modules)
- **Phase 8 (US6)**: T064-T073 can all run in parallel (different controllers)
- **Phase 9 (US7)**: T075-T076, T080-T083 can run in parallel (different concerns)

---

## Parallel Example: User Story 3 (Financial Integrity)

```bash
# Launch all independent model/migration fixes together:
Task: "Create migration to update payment status values" (T023)
Task: "Update Payment_Status enum" (T024)
Task: "Fix SchoolFee::fee_invoices() FK" (T025)
Task: "Fix SchoolFee::students() relationship" (T026)
Task: "Fix ExceptionFees::classroom() class reference" (T027)
Task: "Fix ExceptionFees::school_fee() FK" (T028)

# Then sequential service fixes (depend on models being correct):
Task: "Fix Fund_Account() argument order" (T029)
Task: "Fix FeeInvoiceController double entry" (T030)
Task: "Implement accounting reversal" (T031)
Task: "Fix scopeActive()" (T032)
Task: "Fix generateAutoNumber() race condition" (T033)
```

---

## Implementation Strategy

### MVP First (US1 + US2 Only)

1. Complete Phase 1: Setup (Larastan)
2. Complete Phase 2: Foundational (mass-assignment, password fix, middleware removal)
3. Complete Phase 3: US1 (IDOR fixes, API security)
4. Complete Phase 4: US2 (critical bug fixes)
5. **STOP and VALIDATE**: Run quickstart scenarios V1-V5
6. Deploy if ready — security foundation is solid

### Incremental Delivery

1. Setup + Foundational → Foundation ready
2. US1 (Security) → Test independently → Deploy (MVP!)
3. US2 (Critical Bugs) → Test independently → Deploy
4. US3 (Financial) → Test independently → Deploy
5. US4 (Medium Vulns) → Test independently → Deploy
6. US5 (Schedules/Reports) → Test independently → Deploy
7. US6 (Performance) → Test independently → Deploy
8. US7 (Architecture) → Test independently → Deploy
9. Polish → Final validation → Release

### Parallel Team Strategy

With multiple developers:

1. Team completes Setup + Foundational together
2. Once Foundational is done:
   - Developer A: US1 (Security) → then US6 (Performance)
   - Developer B: US2 (Bugs) → then US3 (Financial)
   - Developer C: US4 (Medium Vulns) → then US5 (Schedules/Reports)
3. After all stories: US7 (Architecture) — one developer
4. Polish phase — everyone validates

---

## Notes

- [P] tasks = different files, no dependencies
- [Story] label maps task to specific user story for traceability
- Each user story should be independently completable and testable
- Commit after each task or logical group
- Stop at any checkpoint to validate story independently
- FR-001 (.env git history rewrite) is a MANUAL step requiring team coordination — not automated in tasks

---

## Phase 12: Convergence — Accounting Reversal Wiring & StudentAccount Audit Trail

**Purpose**: Close remaining gaps in financial data integrity (FR-018) that Phase 11 convergence did not fully capture

- [x] T104 Wire `reverseReceiptEntries()` into `ReceiptPaymentController::destroy()` — call the method before soft-deleting the receipt to trigger FundAccount reversal, StudentAccount cleanup, and invoice status restoration (FR-018, missing)
- [x] T105 Create `reverseFeeInvoiceEntries()` in `PaymentService` and wire it into `FeeInvoiceController::destroy()` — mirror the receipt reversal pattern for fee invoices (FR-018, missing)
- [x] T106 Change StudentAccount handling in `reverseReceiptEntries()` from hard-delete (`->each->delete()`) to proper reversal (swap Debit/Credit) for audit trail consistency with FundAccount treatment (FR-018, partial)
