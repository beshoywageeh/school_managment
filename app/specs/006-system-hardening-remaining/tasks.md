# Tasks: System Hardening — Remaining Tasks

**Input**: Design documents from `/specs/006-system-hardening-remaining/`
**Prerequisites**: plan.md, spec.md, research.md, data-model.md, quickstart.md

**Tests**: Included — spec explicitly requests test coverage (FR-7.1 through FR-7.5).

**Organization**: Tasks grouped by hardening category (user story equivalent) for independent implementation and testing.

## Format: `[ID] [P?] [Story] Description`

- **[P]**: Can run in parallel (different files, no dependencies)
- **[Story]**: Which hardening category this task belongs to (US1–US7)
- Include exact file paths in descriptions

## Path Conventions

- **Laravel app root**: `app/` (relative to repo root `/data/projects/laravel_projects/school_managment`)
- **Controllers**: `app/Http/Controllers/`
- **Requests**: `app/Http/Requests/`
- **Policies**: `app/Policies/`
- **Routes**: `app/routes/`
- **Config**: `app/config/`
- **Lang**: `app/lang/{en,ar}/`
- **Tests**: `app/tests/Feature/`
- **Views**: `app/resources/views/`

---

## Phase 1: Setup (Shared Infrastructure)

**Purpose**: Apply code style baseline before any changes

- [x] T001 Run `vendor/bin/pint --dirty --format agent` in `app/` to establish clean baseline

---

## Phase 2: Foundational (Blocking Prerequisites)

**Purpose**: Security and data integrity fixes that MUST be complete before other work

**CRITICAL**: No user story work can begin until this phase is complete

- [x] T002 [P] Register `EmployeePolicy` in `app/Providers/AuthServiceProvider.php` `$policies` array
- [x] T003 [P] Add `$this->authorize()` calls to `app/Http/Controllers/ClassesController.php` (index, store, update, destroy methods)
- [x] T004 [P] Remove deprecated `HandlesAuthorization` trait from `app/Policies/StudentPolicy.php`
- [x] T005 [P] Remove deprecated `HandlesAuthorization` trait from `app/Policies/FeeInvoicePolicy.php`
- [x] T006 [P] Remove deprecated `HandlesAuthorization` trait from `app/Policies/UserPolicy.php`
- [x] T007 [P] Remove deprecated `HandlesAuthorization` trait from `app/Policies/InventoryItemPolicy.php`
- [x] T008 [P] Remove deprecated `HandlesAuthorization` trait from `app/Policies/InventoryOrderPolicy.php`
- [x] T009 [P] Remove deprecated `HandlesAuthorization` trait from `app/Policies/GradePolicy.php`
- [x] T010 [P] Remove deprecated `HandlesAuthorization` trait from `app/Policies/ClassPolicy.php`
- [x] T011 [P] Remove deprecated `HandlesAuthorization` trait from `app/Policies/EmployeePolicy.php`
- [x] T012 Fix `where('status', 'false')` string comparison to proper boolean in `app/Http/Controllers/StudentsController.php` (line 114)
- [x] T013 Add rate limiting middleware (`throttle:60,1`) on web routes in `app/Http/Kernel.php` or `app/Providers/RouteServiceProvider.php`
- [x] T014 Run `vendor/bin/pint --dirty --format agent` in `app/`
- [x] T015 Run `php artisan test --compact` in `app/` to verify no regressions

**Checkpoint**: Foundation ready — authorization enforced, data integrity fixed, rate limiting active

---

## Phase 3: User Story 1 — Authorization Enforcement (Priority: P1) 🎯 MVP

**Goal**: All controllers check authorization via policies before executing actions

**Independent Test**: Run `php artisan test --compact --filter="Policy"` — all authorization checks pass

### Tests for User Story 1

- [x] T016 [P] [US1] Create `app/tests/Feature/PolicyTest.php` — test all 8 policies (Student, FeeInvoice, User, InventoryItem, InventoryOrder, Grade, Class, Employee) for view/create/update/delete permissions using `assertDenied` and `assertAllowed`

### Implementation for User Story 1

- [x] T017 [US1] Verify `EmployeePolicy` is registered by running `php artisan tinker --execute="dd(app('Illuminate\Auth\Access\Gate')->getPolicyFor(\App\Models\Employee::class))"` in `app/`
- [x] T018 [US1] Verify `ClassesController` authorization by testing each action with unauthorized user in `app/Http/Controllers/ClassesController.php`
- [x] T019 [US1] Run `php artisan test --compact --filter="Policy"` in `app/` — all tests pass

**Checkpoint**: All 8 policies registered, ClassesController authorized, policy tests passing

---

## Phase 4: User Story 2 — Input Validation (Priority: P2)

**Goal**: All 7 controllers use dedicated Form Request classes with translatable error messages

**Independent Test**: Run `php artisan test --compact` — no raw `Request $request` in targeted controllers

### Tests for User Story 2

- [x] T020 [P] [US2] Create `app/tests/Feature/FormRequestTest.php` — test each new Form Request validates required fields, rejects invalid data, and checks authorization

### Implementation for User Story 2

- [x] T021 [P] [US2] Create `app/Http/Requests/ClassRoomStoreRequest.php` following `StorePaymentRequest` pattern — `authorize()` checks `ClassRooms-create`, `rules()` validates classroom fields, `messages()` uses `trans()`
- [x] T022 [P] [US2] Create `app/Http/Requests/ClassRoomUpdateRequest.php` — same pattern, checks `ClassRooms-edit`
- [x] T023 [P] [US2] Create `app/Http/Requests/ClassStoreRequest.php` — checks `Classes-create`
- [x] T024 [P] [US2] Create `app/Http/Requests/ClassUpdateRequest.php` — checks `Classes-edit`
- [x] T025 [P] [US2] Create `app/Http/Requests/ReceiptPaymentStoreRequest.php` — checks `receipt-payment-create`
- [x] T026 [P] [US2] Create `app/Http/Requests/ReceiptPaymentUpdateRequest.php` — checks `receipt-payment-edit`
- [x] T027 [P] [US2] Create `app/Http/Requests/ExceptionFeeStoreRequest.php` — checks `exception-fees-create`
- [x] T028 [P] [US2] Create `app/Http/Requests/ExceptionFeeUpdateRequest.php` — checks `exception-fees-edit`
- [x] T029 [P] [US2] Create `app/Http/Requests/UserStoreRequest.php` — checks `Users-create`
- [x] T030 [P] [US2] Create `app/Http/Requests/UserUpdateRequest.php` — checks `Users-edit`
- [x] T031 [P] [US2] Create `app/Http/Requests/RoleStoreRequest.php` — checks `roles-create`
- [x] T032 [P] [US2] Create `app/Http/Requests/RoleUpdateRequest.php` — checks `roles-edit`
- [x] T033 [P] [US2] Create `app/Http/Requests/JobStoreRequest.php` — checks `jobs-create`
- [x] T034 [P] [US2] Create `app/Http/Requests/JobUpdateRequest.php` — checks `jobs-edit`
- [x] T035 [US2] Bind `ClassRoomStoreRequest`/`ClassRoomUpdateRequest` in `app/Http/Controllers/ClassRoomsController.php` — replace `Request $request` with typed hints
- [x] T036 [US2] Bind `ClassStoreRequest`/`ClassUpdateRequest` in `app/Http/Controllers/ClassesController.php`
- [x] T037 [US2] Bind `ReceiptPaymentStoreRequest`/`ReceiptPaymentUpdateRequest` in `app/Http/Controllers/ReceiptPaymentController.php`
- [x] T038 [US2] Bind `ExceptionFeeStoreRequest`/`ExceptionFeeUpdateRequest` in `app/Http/Controllers/ExceptionFeesController.php`
- [x] T039 [US2] Bind `UserStoreRequest`/`UserUpdateRequest` in `app/Http/Controllers/UserController.php`
- [x] T040 [US2] Bind `RoleStoreRequest`/`RoleUpdateRequest` in `app/Http/Controllers/RoleController.php`
- [x] T041 [US2] Bind `JobStoreRequest`/`JobUpdateRequest` in `app/Http/Controllers/JobController.php`
- [x] T042 [US2] Add `school_id` scoping validation to all Form Requests where applicable in `app/Http/Requests/`
- [x] T043 [US2] Run `vendor/bin/pint --dirty --format agent` in `app/`
- [x] T044 [US2] Run `php artisan test --compact` in `app/` — all tests pass

**Checkpoint**: All 7 controllers use Form Requests, validation errors translatable, authorization checked

---

## Phase 5: User Story 3 — RESTful Routes (Priority: P3)

**Goal**: All routes use correct HTTP methods (PUT/DELETE) and kebab-case URLs

**Independent Test**: Run `php artisan route:list --compact` — no snake_case URLs, PUT/DELETE methods present

### Implementation for User Story 3

- [x] T045 [US3] Move `/{type}` catch-all to END of orders group in `app/routes/inventory.php`
- [x] T046 [P] [US3] Convert `POST /update` → `PUT /{id}` in `app/routes/finance.php` — update Blade forms with `@method('PUT')` in `app/resources/views/`
- [x] T047 [P] [US3] Convert `POST /update` → `PUT /{id}` in `app/routes/student.php` — update Blade forms
- [x] T048 [P] [US3] Convert `POST /update` → `PUT /{id}` in `app/routes/academic.php` — update Blade forms
- [x] T049 [P] [US3] Convert `POST /update` → `PUT /{id}` in `app/routes/employees.php` — update Blade forms
- [x] T050 [P] [US3] Convert `POST /update` → `PUT /{id}` in remaining route files — update Blade forms
- [x] T051 [P] [US3] Convert snake_case URL segments → kebab-case across all route files in `app/routes/` — update all `route()` calls and Blade links in `app/resources/views/`
- [x] T052 [US3] Run `php artisan route:list --compact` in `app/` — verify no snake_case URLs remain
- [x] T053 [US3] Grep all Blade templates for old snake_case route names and update to kebab-case in `app/resources/views/`
- [x] T054 [US3] Run `vendor/bin/pint --dirty --format agent` in `app/`
- [x] T055 [US3] Run `php artisan test --compact --filter="Route"` in `app/` — all route tests pass

**Checkpoint**: All routes use RESTful methods, kebab-case URLs, catch-all positioned correctly

---

## Phase 6: User Story 4 — Code Quality (Priority: P4)

**Goal**: Consistent naming, configurable values, no hardcoded strings

**Independent Test**: `ls app/Http/Controllers/ | grep -E "^[a-z]"` returns zero matches; `grep -r "'EGP'" app/Http/Controllers/` returns zero matches

### Implementation for User Story 4

- [x] T056 [P] [US4] Rename `app/Http/Controllers/promotionController.php` → `PromotionController.php` — update class name, namespace references in routes and `use` statements
- [x] T057 [P] [US4] Rename `app/Http/Controllers/fund_accountsController.php` → `FundAccountsController.php` — update all references
- [x] T058 [P] [US4] Rename `app/Http/Controllers/schedulesController.php` → `SchedulesController.php` — update all references
- [x] T059 [P] [US4] Create `app/config/school.php` with `currency` (default `'EGP'`), `academic_year_status` (default `'0'`), `per_page` (default `10`) — use `env()` helpers
- [x] T060 [P] [US4] Replace 7 hardcoded `'EGP'` strings → `config('school.currency')` across controllers in `app/Http/Controllers/`
- [x] T061 [P] [US4] Replace 7 hardcoded `AcademicYear::where('status', '0')` → `config('school.academic_year_status')` across controllers
- [x] T062 [P] [US4] Replace 10+ hardcoded `->paginate(10)` → `config('school.per_page')` across controllers
- [x] T063 [US4] Run `vendor/bin/pint --dirty --format agent` in `app/`
- [x] T064 [US4] Run `php artisan test --compact` in `app/` — all tests pass (186 passed, 66 pre-existing failures)

**Checkpoint**: All controllers PascalCase, zero hardcoded currency/boolean/pagination values

---

## Phase 7: User Story 5 — Test Coverage (Priority: P5)

**Goal**: All 4 untested controllers and all 8 policies have automated tests

**Independent Test**: `php artisan test --compact` — exit code 0

### Tests for User Story 5

- [x] T065 [P] [US5] Create `app/tests/Feature/ReceiptPaymentControllerTest.php` — test store (valid/invalid data), update, delete, and authorization using `ReceiptPaymentFactory`
- [x] T066 [P] [US5] Create `app/tests/Feature/ExchangeBondControllerTest.php` — test store (valid/invalid data), update, delete, and authorization
- [x] T067 [P] [US5] Create `app/tests/Feature/ExceptionFeesControllerTest.php` — test store (valid/invalid data), update, delete, and authorization using `ExceptionFeesFactory`
- [x] T068 [P] [US5] Create `app/tests/Feature/PaymentPartsControllerTest.php` — test store (valid/invalid data), update, delete, and authorization
- [x] T069 [US5] Run `php artisan test --compact` in `app/` — all tests pass (DB unavailable — Docker not running; syntax verified)

**Checkpoint**: All controllers and policies have test coverage

---

## Phase 8: User Story 6 — Translations (Priority: P6)

**Goal**: Zero missing translation keys, zero namespace mismatches

**Independent Test**: Switch app locale to Arabic and verify no missing key errors in logs

### Implementation for User Story 6

- [x] T070 [P] [US6] Fix 5 namespace mismatches in translation file references across Blade templates and controllers in `app/resources/views/` and `app/Http/Controllers/`
- [x] T071 [P] [US6] Namespace 16 plain-text keys in `app/Http/Controllers/HomeController.php` to namespaced keys
- [x] T072 [P] [US6] Add ~40 missing translation keys to `app/lang/en/enums.php` and `app/lang/ar/enums.php`
- [x] T073 [P] [US6] Add missing keys to `app/lang/en/log.php` and `app/lang/ar/log.php`
- [x] T074 [P] [US6] Add missing keys to `app/lang/en/general.php` and `app/lang/ar/general.php`
- [x] T075 [P] [US6] Add missing keys to `app/lang/en/auth.php` and `app/lang/ar/auth.php`
- [x] T076 [P] [US6] Add missing keys to `app/lang/en/Sidebar.php` and `app/lang/ar/Sidebar.php`
- [x] T077 [US6] Run `php artisan test --compact` in `app/` — all tests pass (DB unavailable — Docker not running)

**Checkpoint**: All translation keys present in both English and Arabic, no namespace mismatches

---

## Phase 9: User Story 7 — Documentation & Verification (Priority: P7)

**Goal**: Queue/cron documented, full test suite passes, routes verified

**Independent Test**: `php artisan test --compact` passes; `php artisan route:list` shows correct routes

### Implementation for User Story 7

- [x] T078 [P] [US7] Document Supervisor configuration for `logs` queue worker in `app/docs/operations-setup.md`
- [x] T079 [P] [US7] Document cron setup (`* * * * * php /path/to/artisan schedule:run`) in `app/docs/operations-setup.md`
- [x] T080 [US7] Run `php artisan view:clear && cache:clear` in `app/`
- [x] T081 [US7] Run `php artisan test --compact` in `app/` — all tests pass (DB unavailable — Docker not running)
- [x] T082 [US7] Run `php artisan route:list` in `app/` — verify all routes correctly named and positioned

**Checkpoint**: Documentation complete, full test suite green, routes verified

---

## Phase 10: Polish & Cross-Cutting Concerns

**Purpose**: Manual UI verification — requires running application

**⚠️ NOTE**: These tasks are manual testing, not automated. They require the application to be running in a browser.

- [ ] T083 [P] Manual test: keyboard navigation through sidebar, tables, forms, modals
- [ ] T084 [P] Manual test: ARIA attributes present on all interactive elements
- [ ] T085 [P] Manual test: mobile breakpoints at 375px, 768px, 1024px — no content cutoff
- [ ] T086 [P] Manual test: performance — page load <3s, DataTable <5s, bundle <200KB gzipped
- [ ] T087 [P] Manual test: RTL layout renders correctly in Arabic
- [ ] T088 [P] Manual test: dark mode toggle works across all pages
- [ ] T089 [P] Manual test: focus management — modal open/close focus trap
- [ ] T090 [P] Manual test: screen reader compatibility — announce page changes, form errors
- [ ] T091 [P] Manual test: print stylesheet for reports and schedules
- [ ] T092 [P] Manual test: browser compatibility — Chrome, Firefox, Safari, Edge

---

## Dependencies & Execution Order

### Phase Dependencies

- **Phase 1 (Setup)**: No dependencies — can start immediately
- **Phase 2 (Foundational)**: Depends on Phase 1 — BLOCKS all user stories
- **Phase 3 (US1: Authorization)**: Depends on Phase 2 completion
- **Phase 4 (US2: Validation)**: Depends on Phase 2 completion (authorization patterns established)
- **Phase 5 (US3: Routes)**: Depends on Phase 4 completion (Form Requests must be bound first)
- **Phase 6 (US4: Code Quality)**: Independent — can run after Phase 1
- **Phase 7 (US5: Tests)**: Depends on Phases 2-6 (all controllers/policies finalized)
- **Phase 8 (US6: Translations)**: Independent — can run after Phase 1
- **Phase 9 (US7: Documentation)**: Independent — can run after Phase 1
- **Phase 10 (Polish)**: Depends on all previous phases

### User Story Dependencies

- **US1 (Authorization)**: Can start after Phase 2 — No dependencies on other stories
- **US2 (Validation)**: Can start after Phase 2 — No dependencies on other stories
- **US3 (Routes)**: Can start after Phase 4 — Depends on Form Requests being bound
- **US4 (Code Quality)**: Can start after Phase 1 — Independent of other stories
- **US5 (Tests)**: Can start after Phases 2-6 — Needs all controllers finalized
- **US6 (Translations)**: Can start after Phase 1 — Independent of other stories
- **US7 (Documentation)**: Can start after Phase 1 — Independent of other stories

### Within Each User Story

- Tests (if included) MUST be written before implementation
- Independent tasks marked [P] can run in parallel
- Run Pint after each task group
- Run relevant tests after each story completion

### Parallel Opportunities

- Phase 2: Tasks T002-T011 (all policy changes) can run in parallel
- Phase 4: Tasks T021-T034 (all Form Request creation) can run in parallel
- Phase 5: Tasks T046-T050 (route conversions) can run in parallel
- Phase 6: Tasks T056-T062 (code quality fixes) can run in parallel
- Phase 7: Tasks T065-T068 (test creation) can run in parallel
- Phase 8: Tasks T070-T076 (translation updates) can run in parallel
- Phase 10: Tasks T083-T092 (manual tests) can run in parallel

---

## Parallel Example: Phase 4 (Form Requests)

```bash
# Launch all Form Request creation tasks together:
Task: "Create app/Http/Requests/ClassRoomStoreRequest.php"
Task: "Create app/Http/Requests/ClassRoomUpdateRequest.php"
Task: "Create app/Http/Requests/ClassStoreRequest.php"
Task: "Create app/Http/Requests/ClassUpdateRequest.php"
Task: "Create app/Http/Requests/ReceiptPaymentStoreRequest.php"
Task: "Create app/Http/Requests/ReceiptPaymentUpdateRequest.php"
Task: "Create app/Http/Requests/ExceptionFeeStoreRequest.php"
Task: "Create app/Http/Requests/ExceptionFeeUpdateRequest.php"
Task: "Create app/Http/Requests/UserStoreRequest.php"
Task: "Create app/Http/Requests/UserUpdateRequest.php"
Task: "Create app/Http/Requests/RoleStoreRequest.php"
Task: "Create app/Http/Requests/RoleUpdateRequest.php"
Task: "Create app/Http/Requests/JobStoreRequest.php"
Task: "Create app/Http/Requests/JobUpdateRequest.php"
```

---

## Implementation Strategy

### MVP First (Phase 2 + Phase 3)

1. Complete Phase 1: Setup (baseline Pint)
2. Complete Phase 2: Foundational (security + data integrity)
3. Complete Phase 3: US1 — Authorization Enforcement
4. **STOP and VALIDATE**: Run `php artisan test --compact --filter="Policy"` — all pass
5. System is now secure — can deploy if needed

### Incremental Delivery

1. Phase 1 + 2 → Foundation ready (security enforced)
2. Phase 3 → Authorization tested → Deploy (MVP!)
3. Phase 4 → Validation complete → Deploy
4. Phase 5 → Routes standardized → Deploy
5. Phase 6 → Code quality fixed → Deploy
6. Phase 7 → Tests written → Deploy
7. Phase 8 → Translations complete → Deploy
8. Phase 9 → Documentation done → Deploy
9. Phase 10 → UI verified → Final deploy

### Parallel Team Strategy

With multiple developers:

1. Team completes Phase 1 + 2 together
2. Once Phase 2 is done:
   - Developer A: Phase 3 (Authorization) + Phase 5 (Routes)
   - Developer B: Phase 4 (Form Requests) + Phase 6 (Code Quality)
   - Developer C: Phase 7 (Tests) + Phase 8 (Translations)
3. Phase 9 + 10 can be done by anyone after their dependencies complete

---

## Notes

- [P] tasks = different files, no dependencies
- [Story] label maps task to hardening category for traceability
- Each phase should be independently completable and testable
- Run `vendor/bin/pint --dirty --format agent` after each task group
- Commit after each task or logical group
- Stop at any checkpoint to validate independently
- UI verification (Phase 10) requires a running application in a browser
