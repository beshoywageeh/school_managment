# Tasks: Permission Middleware for All Controllers

**Input**: Design documents from `/specs/002-permission-middleware/`
**Prerequisites**: plan.md (required), spec.md (required for user stories), research.md, data-model.md, contracts/, quickstart.md

**Tests**: Smoke tests (one per controller) and 2-3 end-to-end gate tests are REQUIRED per spec FR-016/FR-017.

**Organization**: Tasks are grouped by user story to enable independent implementation and testing of each story.

## Format: `[ID] [P?] [Story] Description`

- **[P]**: Can run in parallel (different files, no dependencies)
- **[Story]**: Which user story this task belongs to (e.g., US1, US2, US3)
- Include exact file paths in descriptions

## Path Conventions

- **Laravel app**: `app/Http/Controllers/`, `tests/` at repository root
- Controllers live under `app/Http/Controllers/` with some in subdirectories

---

## Phase 1: Setup (Shared Infrastructure)

**Purpose**: Verify environment is ready for middleware additions

- [ ] T001 Verify Spatie Permission middleware is registered in `app/Http/Kernel.php` (look for `\Spatie\Permission\Middleware\PermissionMiddleware::class`)
- [ ] T002 Verify permission seeder exists and permissions are seeded in the database
- [ ] T003 Read `docs/permission-construct-plan.md` to understand the full permission-to-controller mapping

---

## Phase 2: Foundational (Blocking Prerequisites)

**Purpose**: Understand the implementation pattern before modifying any controllers

- [ ] T004 Read the commented-out constructor pattern in `app/Http/Controllers/RoleController.php` to confirm the middleware syntax
- [ ] T005 [P] Add `AuthorizationException` handling check in `app/Exceptions/Handler.php` (verify 403 renders default Laravel page — no custom handler needed)

**Checkpoint**: Pattern understood — controller modifications can begin in parallel

---

## Phase 3: User Story 1 - Administrator Assigns Permissions and Sees Enforcement (Priority: P1) 🎯 MVP

**Goal**: Every controller has middleware constructors gating standard CRUD methods by permission

**Independent Test**: Create a role with `classes-list` permission, assign to a user, verify 200 on `/classes` index and 403 on POST `/classes` (create)

### Tests for User Story 1

- [ ] T006 [P] [US1] Create end-to-end test: user with `classes-list` can access index, user without cannot access create — in `tests/Feature/PermissionGateTest.php`
- [ ] T007 [P] [US1] Create end-to-end test: user with `classes-create` can create, user without receives 403 — in `tests/Feature/PermissionGateTest.php`
- [ ] T008 [P] [US1] Create end-to-end test: user with `classes-delete` can delete, user without receives 403 — in `tests/Feature/PermissionGateTest.php`

### Implementation for User Story 1 — Batch A: Controllers with Known Mappings

Each task: Read the controller file, add `__construct` with `$this->middleware('permission:...', ['only' => ['...']])` calls per the mapping in `docs/permission-construct-plan.md`, preserve any existing dependency injection.

- [ ] T009 [P] [US1] Add middleware constructor to `app/Http/Controllers/ClassesController.php` (permissions: classes-list, classes-create, classes-update, classes-delete, classes-addstudent, classes-tammen)
- [ ] T010 [P] [US1] Add middleware constructor to `app/Http/Controllers/ClassRooms/ClassRoomsController.php` (permissions: class_rooms-list, class_rooms-create, class_rooms-edit, class_rooms-info, class_rooms-delete, class_rooms-tammen)
- [ ] T011 [P] [US1] Add middleware constructor to `app/Http/Controllers/Grades/GradesController.php` (permissions: grade-list, grade-create, grade-edit, grade-info, grade-delete)
- [ ] T012 [P] [US1] Add middleware constructor to `app/Http/Controllers/AcademicYearController.php` (permissions: academic_year-list, academic_year-create, academic_year-edit, academic_year-info, academic_year-delete)
- [ ] T013 [P] [US1] Add middleware constructor to `app/Http/Controllers/JobController.php` (permissions: jobs-list, jobs-create, jobs-edit, jobs-info, jobs-delete)
- [ ] T014 [P] [US1] Add middleware constructor to `app/Http/Controllers/UserController.php` preserving existing `UserService` and `LoggerInterface` DI (permissions: employees-list, employees-create, employees-edit, employees-info, employees-delete, employees-import_Excel)
- [ ] T015 [P] [US1] Add middleware constructor to `app/Http/Controllers/schedulesController.php` (permission: scheduale-list only — other permissions skip until methods exist)
- [ ] T016 [P] [US1] Add middleware constructor to `app/Http/Controllers/Parents/MyParentsController.php` (permissions: parents-list, parents-create, parents-edit, parents-info, parents-delete, Parents-import_Excel)
- [ ] T017 [P] [US1] Add middleware constructor to `app/Http/Controllers/Students/StudentsController.php` preserving existing 4-service DI (permissions: Students-list, Students-create, Students-edit, Students-info, Students-delete, Students-graduated, Student-restore, graduated-list, Students-Import_Excel)
- [ ] T018 [P] [US1] Add middleware constructor to `app/Http/Controllers/FeeInvoiceController.php` preserving existing `InvoiceQueryService` and `FinancialService` DI (permissions: fee_invoice-list, fee_invoice-create, fee_invoice-edit, fee_invoice-info, fee_invoice-delete)
- [ ] T019 [P] [US1] Add middleware constructor to `app/Http/Controllers/PaymentPartsController.php` preserving existing `FinancialService` DI (permissions: payment_parts-list, payment_parts-create, payment_parts-edit, payment_parts-info, payment_parts-delete)
- [ ] T020 [P] [US1] Add middleware constructor to `app/Http/Controllers/promotionController.php` preserving existing `LoggerInterface` DI (permissions: promotion-list, promotion-create, promotion-delete)
- [ ] T021 [P] [US1] Uncomment and update middleware constructor in `app/Http/Controllers/RoleController.php` (permissions: role-list, role-create, role-edit, role-delete)
- [ ] T022 [P] [US1] Add middleware constructor to `app/Http/Controllers/BackupController.php` (permissions: backup-list, backup-create, backup-delete, backup-download)
- [ ] T023 [P] [US1] Add middleware constructor to `app/Http/Controllers/SettingsController.php` preserving existing `LoggerInterface` DI (permission: settings-info)
- [ ] T024 [P] [US1] Add middleware constructor to `app/Http/Controllers/Inventory/InventoryItemController.php` (legacy permissions: stocks-*, clothes-*, books_sheets-*)
- [ ] T025 [P] [US1] Add middleware constructor to `app/Http/Controllers/Inventory/InventoryOrderController.php` (legacy permissions: order_store-*, clothes-order-*, books_sheets-order-*)

### Implementation for User Story 1 — Batch B: Controllers Requiring Method Analysis First

Each task: Read the controller file to discover its methods, then add the middleware constructor with the correct permission mapping.

- [ ] T026 [P] [US1] Read and add middleware constructor to `app/Http/Controllers/SchoolFeeController.php` (permissions: schoolfees-list, schoolfees-create, schoolfees-edit, schoolfees-info, schoolfees-delete)
- [ ] T027 [P] [US1] Read and add middleware constructor to `app/Http/Controllers/ExceptionFeesController.php` (permissions: except_fee-list, except_fee-create, except_fee-edit, except_fee-info, except_fee-delete, except_fee-print)
- [ ] T028 [P] [US1] Read and add middleware constructor to `app/Http/Controllers/ReceiptPaymentController.php` (permissions: ReceiptPayment-list, ReceiptPayment-create, ReceiptPayment-delete, ReceiptPayment-info, ReceiptPayment-edit)
- [ ] T029 [P] [US1] Read and add middleware constructor to `app/Http/Controllers/ExchangeBondController.php` (permissions: exchange_bonds-list, exchange_bonds-create, exchange_bonds-edit, exchange_bonds-info, exchange_bonds-delete)
- [ ] T030 [P] [US1] Read and add middleware constructor to `app/Http/Controllers/Inventory/InventoryGardController.php` (no legacy permission group specified — read controller, determine if permissions exist or skip)
- [ ] T031 [P] [US1] Read and add middleware constructor to `app/Http/Controllers/AdminEraController.php` (check if any permission group applies — read first)
- [ ] T032 [P] [US1] Read and add middleware constructor to `app/Http/Controllers/ReportController.php` (check if any permission group applies — read first)
- [ ] T033 [P] [US1] Read and add middleware constructor to `app/Http/Controllers/ActivityLogController.php` (check if any permission group applies — read first)
- [ ] T034 [P] [US1] Read and add middleware constructor to `app/Http/Controllers/SetupController.php` (check if any permission group applies — read first)
- [ ] T035 [P] [US1] Read and add middleware constructor to `app/Http/Controllers/HomeController.php` (check if any permission group applies — read first)

**Checkpoint**: At this point, all 25+ controllers should have middleware constructors. User Story 1 should be fully functional and testable independently.

---

## Phase 4: User Story 2 - Admin Configures Granular CRUD Permissions (Priority: P1)

**Goal**: Granular permission combinations work end-to-end (e.g., list+create but not edit+delete)

**Independent Test**: Assign a user `employees-list` and `employees-edit` but not `employees-delete` — verify they can list and edit but not delete

> **Note**: US2 is automatically delivered by US1 implementation. No additional code changes needed. This phase is purely verification.

- [ ] T036 [US2] Run the end-to-end gate tests created in Phase 3 and verify granular combinations pass (list+create, list-only, full CRUD, no permissions)

**Checkpoint**: User Stories 1 AND 2 should both work independently (US2 is verified by the same test suite).

---

## Phase 5: User Story 4 - Custom Permission Actions Are Enforced (Priority: P2)

**Goal**: Custom action permissions (import_Excel, graduated, restore, download, addstudent, tammen, print, etc.) gate their corresponding methods

**Independent Test**: Create a role with `Students-Import_Excel` but not `Students-list` — verify Excel import is accessible but list is not. Or: create a role with `backup-download` but not `backup-list` — verify download works but listing doesn't.

> **Note**: US4 is also automatically delivered by US1 implementation (custom suffixes were included in the constructor mappings). This phase is verification.

- [ ] T037 [P] [US4] Add end-to-end test for custom permission `Students-Import_Excel` gating the Excel import endpoint in `tests/Feature/PermissionGateTest.php`
- [ ] T038 [P] [US4] Add end-to-end test for custom permission `backup-download` gating the backup download in `tests/Feature/PermissionGateTest.php`
- [ ] T039 [P] [US4] Add end-to-end test for custom permission `Students-graduated` gating the graduation feature in `tests/Feature/PermissionGateTest.php`

**Checkpoint**: All custom action permissions work independently.

---

## Phase 6: User Story 3 - Developer Verifies Existing Controllers Still Work (Priority: P2)

**Goal**: Existing controller dependency injection and routes are preserved after middleware additions

**Independent Test**: Run the existing test suite — all tests pass. Run `php artisan route:list` — no errors.

- [ ] T040 [US3] Create smoke test for ClassesController middleware registration in `tests/Feature/PermissionSmokeTest.php`
- [ ] T041 [P] [US3] Create smoke test for ClassRoomsController middleware registration in `tests/Feature/PermissionSmokeTest.php`
- [ ] T042 [P] [US3] Create smoke test for GradesController middleware registration in `tests/Feature/PermissionSmokeTest.php`
- [ ] T043 [P] [US3] Create smoke test for AcademicYearController middleware registration in `tests/Feature/PermissionSmokeTest.php`
- [ ] T044 [P] [US3] Create smoke test for JobController middleware registration in `tests/Feature/PermissionSmokeTest.php`
- [ ] T045 [P] [US3] Create smoke test for UserController middleware registration in `tests/Feature/PermissionSmokeTest.php`
- [ ] T046 [P] [US3] Create smoke test for schedulesController middleware registration in `tests/Feature/PermissionSmokeTest.php`
- [ ] T047 [P] [US3] Create smoke test for MyParentsController middleware registration in `tests/Feature/PermissionSmokeTest.php`
- [ ] T048 [P] [US3] Create smoke test for StudentsController middleware registration in `tests/Feature/PermissionSmokeTest.php`
- [ ] T049 [P] [US3] Create smoke test for SchoolFeeController middleware registration in `tests/Feature/PermissionSmokeTest.php`
- [ ] T050 [P] [US3] Create smoke test for FeeInvoiceController middleware registration in `tests/Feature/PermissionSmokeTest.php`
- [ ] T051 [P] [US3] Create smoke test for ExceptionFeesController middleware registration in `tests/Feature/PermissionSmokeTest.php`
- [ ] T052 [P] [US3] Create smoke test for PaymentPartsController middleware registration in `tests/Feature/PermissionSmokeTest.php`
- [ ] T053 [P] [US3] Create smoke test for ReceiptPaymentController middleware registration in `tests/Feature/PermissionSmokeTest.php`
- [ ] T054 [P] [US3] Create smoke test for ExchangeBondController middleware registration in `tests/Feature/PermissionSmokeTest.php`
- [ ] T055 [P] [US3] Create smoke test for promotionController middleware registration in `tests/Feature/PermissionSmokeTest.php`
- [ ] T056 [P] [US3] Create smoke test for InventoryItemController middleware registration in `tests/Feature/PermissionSmokeTest.php`
- [ ] T057 [P] [US3] Create smoke test for InventoryOrderController middleware registration in `tests/Feature/PermissionSmokeTest.php`
- [ ] T058 [P] [US3] Create smoke test for InventoryGardController middleware registration in `tests/Feature/PermissionSmokeTest.php`
- [ ] T059 [P] [US3] Create smoke test for BackupController middleware registration in `tests/Feature/PermissionSmokeTest.php`
- [ ] T060 [P] [US3] Create smoke test for RoleController middleware registration in `tests/Feature/PermissionSmokeTest.php`
- [ ] T061 [P] [US3] Create smoke test for SettingsController middleware registration in `tests/Feature/PermissionSmokeTest.php`
- [ ] T062 [P] [US3] Create smoke test for AdminEraController middleware registration in `tests/Feature/PermissionSmokeTest.php`
- [ ] T063 [P] [US3] Create smoke test for ReportController middleware registration in `tests/Feature/PermissionSmokeTest.php`
- [ ] T064 [P] [US3] Create smoke test for ActivityLogController middleware registration in `tests/Feature/PermissionSmokeTest.php`
- [ ] T065 [P] [US3] Create smoke test for SetupController middleware registration in `tests/Feature/PermissionSmokeTest.php`
- [ ] T066 [P] [US3] Create smoke test for HomeController middleware registration in `tests/Feature/PermissionSmokeTest.php`
- [ ] T067 [US3] Run `php artisan route:list` and verify all routes resolve without errors
- [ ] T068 [US3] Run full test suite: `php artisan test --compact` — verify no regressions

**Checkpoint**: All smoke tests pass, all routes resolve, existing test suite passes.

---

## Phase 7: Polish & Cross-Cutting Concerns

**Purpose**: Code style cleanup and final verification

- [ ] T069 [P] Run `vendor/bin/pint --format agent` on all modified controller files
- [ ] T070 Run the smoke test filter: `php artisan test --compact --filter=PermissionSmoke`
- [ ] T071 Run the gate test filter: `php artisan test --compact --filter=PermissionGate`
- [ ] T072 Run `php artisan route:list` one final time to confirm no breakage after pint formatting
- [ ] T073 Remove any `$this->authorize()` calls from controller method bodies where middleware now provides equivalent coverage

---

## Dependencies & Execution Order

### Phase Dependencies

- **Setup (Phase 1)**: No dependencies — can start immediately
- **Foundational (Phase 2)**: Depends on Setup completion — BLOCKS all user stories
- **User Stories (Phase 3-6)**: All depend on Foundational phase completion
  - US1 implementation (Phase 3) blocks US2 (Phase 4), US4 (Phase 5), US3 (Phase 6)
  - US2, US4, US3 can proceed in any order after US1
- **Polish (Phase 7)**: Depends on all user story phases being complete

### User Story Dependencies

- **User Story 1 (P1)**: Can start after Foundational (Phase 2) — No dependencies on other stories
- **User Story 2 (P1)**: Depends on US1 implementation (same code delivers both) — verification only
- **User Story 4 (P2)**: Depends on US1 implementation — verification tests only
- **User Story 3 (P2)**: Depends on US1 implementation (tests must run against fully modified controllers)

### Within Each User Story

- Tests (if included) MUST be written and FAIL before implementation
- Read controller first, then edit
- Controllers with existing DI: add middleware calls inside the existing body
- Controllers without existing DI: add new `__construct` method

### Parallel Opportunities

- All controllers in Phase 3 Batch A (T009-T025) can run in parallel — separate files, no dependencies
- All controllers in Phase 3 Batch B (T026-T035) can run in parallel
- All smoke tests in Phase 6 (T040-T066) can run in parallel
- Phase 3 Batch A and Batch B can run in parallel (different files)
- Different user stories cannot start until Phase 3 finishes (all controllers must have middleware before verification)

---

## Parallel Example: User Story 1

```bash
# Launch all Batch A controllers in parallel:
Task: "Add middleware to ClassesController (T009)"
Task: "Add middleware to ClassRoomsController (T010)"
Task: "Add middleware to GradesController (T011)"
Task: "Add middleware to UserController (T014)"
Task: "Add middleware to StudentsController (T017)"

# Launch all Batch B controllers in parallel after Batch A:
Task: "Read and add middleware to SchoolFeeController (T026)"
Task: "Read and add middleware to ReceiptPaymentController (T028)"
Task: "Read and add middleware to HomeController (T035)"
```

---

## Implementation Strategy

### MVP First (User Story 1 + 2 Only)

1. Complete Phase 1: Setup
2. Complete Phase 2: Foundational
3. Complete Phase 3: User Story 1 (all controllers)
4. Complete Phase 4: User Story 2 (verification)
5. **STOP and VALIDATE**: Run `php artisan route:list` and gate tests
6. All P1 functionality delivered

### Incremental Delivery

1. Complete Setup + Foundational → Foundation ready
2. Complete Phase 3 (all controllers) → Middleware on all controllers (MVP!)
3. Phase 4 (US2 verification) → Granular permissions confirmed
4. Phase 5 (US4 custom actions) → Custom action gating confirmed
5. Phase 6 (US3 smoke tests) → Regression safety net
6. Phase 7 (Polish) → Code style cleanup

### Parallel Team Strategy

With multiple developers:

1. Team completes Phase 1 + 2 together
2. Split controllers across developers for Phase 3 (15-20 controllers each)
3. One developer writes end-to-end gate tests while others implement controllers
4. After all controllers done: merge verification, smoke tests, polish

---

## Notes

- [P] tasks = different files, no dependencies
- [Story] label maps task to specific user story for traceability
- Each user story should be independently completable and testable
- Verify tests fail before implementing
- Commit after each task or logical group
- Stop at any checkpoint to validate story independently
- Controllers with existing DI require careful preservation of constructor parameters
- Run `vendor/bin/pint --format agent` before finalizing each controller edit
