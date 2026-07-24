# Tasks: Code Review Fixes

**Input**: Design documents from `/specs/007-code-review-fixes/`
**Prerequisites**: plan.md, spec.md, research.md, data-model.md, quickstart.md

**Tests**: Included per constitution requirement (Principle V) — validation changes require test coverage.

**Organization**: Tasks grouped by user story for independent implementation and testing.

## Format: `[ID] [P?] [Story] Description`

- **[P]**: Can run in parallel (different files, no dependencies)
- **[Story]**: Which user story this task belongs to (e.g., US1, US2, US3)
- Include exact file paths in descriptions

---

## Phase 1: Setup

**Purpose**: Verify prerequisites and baseline

- [X] T001 Verify FinancialService canonical location exists at `app/Services/Finance/FinancialService.php`
- [X] T002 Run `vendor/bin/pint --dirty --format agent` to establish code style baseline

---

## Phase 2: Foundational (Blocking Prerequisites)

**Purpose**: No user story work can begin until this phase is complete

- [X] T003 Run existing test suite with `php artisan test --compact` and document baseline results
- [X] T004 Run `php artisan route:list` to document current route state before changes

**Checkpoint**: Baseline established — user story implementation can now begin

---

## Phase 3: User Story 1 - Fix FinancialService Namespace Inconsistency (Priority: P1) 🎯 MVP

**Goal**: All controllers import FinancialService from `App\Services\Finance\FinancialService`

**Independent Test**: Grep all controller `use` statements for FinancialService — zero results showing `App\Services\FinancialService` (without Finance subdirectory)

### Implementation for User Story 1

- [X] T005 [P] [US1] Fix FinancialService import in `app/Http/Controllers/FeeInvoiceController.php` — change `App\Services\FinancialService` to `App\Services\Finance\FinancialService`
- [X] T006 [P] [US1] Fix FinancialService import in `app/Http/Controllers/ExchangeBondController.php` — change `App\Services\FinancialService` to `App\Services\Finance\FinancialService`
- [X] T007 [P] [US1] Fix FinancialService import in `app/Http/Controllers/ExceptionFeesController.php` — change `App\Services\FinancialService` to `App\Services\Finance\FinancialService`
- [X] T008 [US1] Run `vendor/bin/pint --dirty --format agent` on changed files
- [X] T009 [US1] Verify with grep: `grep -r "use.*FinancialService" app/Http/Controllers/ --include="*.php"` — all results show `App\Services\Finance\FinancialService`

**Checkpoint**: FinancialService namespace is consistent across all controllers

---

## Phase 4: User Story 2 - Convert Destroy Routes from GET to DELETE (Priority: P1)

**Goal**: All 14 GET destroy routes converted to HTTP DELETE, all Blade forms updated

**Independent Test**: `grep -rn "Route::get.*destroy" routes/ --include="*.php"` returns zero results

### Implementation for User Story 2

- [X] T010 [P] [US2] Convert 2 GET destroy routes to DELETE in `routes/employees.php` (jobs + users)
- [X] T011 [P] [US2] Convert 2 GET destroy routes to DELETE in `routes/student.php` (parents + students)
- [X] T012 [P] [US2] Convert 1 GET destroy route to DELETE in `routes/inventory.php` (inventory orders)
- [X] T013 [P] [US2] Convert 5 GET destroy routes to DELETE in `routes/finance.php` (fee-invoice, receipt-payment, exception-fees, payment-parts, exchange-bonds)
- [X] T014 [P] [US2] Convert 1 GET destroy route to DELETE in `routes/security.php` (permissions/roles)
- [X] T015 [P] [US2] Convert 4 GET destroy routes to DELETE in `routes/academic.php` (grades, academic-year, promotion, classes)
- [X] T016 [US2] Find all Blade views referencing destroy routes: `grep -rn "route.*destroy" resources/views/ --include="*.blade.php"`
- [X] T017 [US2] Update Blade destroy links to use `<form>` with `@method('DELETE')` in `resources/views/backend/` (all affected views)
- [X] T018 [US2] Verify: `grep -rn "Route::get.*destroy" routes/ --include="*.php"` returns zero results
- [X] T019 [US2] Run `vendor/bin/pint --dirty --format agent` on changed files

**Checkpoint**: Zero GET destroy routes remain; all delete actions use HTTP DELETE

---

## Phase 5: User Story 3 - Add Missing FormRequest Validations (Priority: P2)

**Goal**: All fields read by `UserService::assignFields()` are validated in FormRequest classes

**Independent Test**: Submit user creation/update forms with invalid values for previously-unvalidated fields — validation errors returned

### Tests for User Story 3

- [X] T020 [P] [US3] Create test for missing field validations in `tests/Feature/UserValidationTest.php` — test that `worker_type`, `grade_year`, `lesson_count`, `sepicality`, `national_id_expire_date`, `contract_start_date`, `notes`, `ministry_code` are validated on store
- [X] T021 [P] [US3] Create test for `insurance_number` validation in `tests/Feature/UserValidationTest.php` — test required, numeric, digits_between:10,14

### Implementation for User Story 3

- [X] T022 [US3] Add 8 missing field validation rules to `app/Http/Requests/UserStoreRequest.php`: `worker_type` (required|integer), `grade_year` (nullable|string|max:255), `lesson_count` (nullable|integer), `sepicality` (nullable|string|max:255), `national_id_expire_date` (nullable|date), `contract_start_date` (nullable|date), `notes` (nullable|string), `ministry_code` (nullable|string|max:255)
- [X] T023 [US3] Add `insurance_number` validation to `app/Http/Requests/UserStoreRequest.php`: `required|numeric|digits_between:10,14`
- [X] T024 [US3] Add 16 missing field validation rules to `app/Http/Requests/UserUpdateRequest.php`: `birth_date` (sometimes|date), `date_of_hiring` (sometimes|date), `religion` (sometimes|integer), `gender` (sometimes|integer), `isAdmin` (sometimes|boolean), `login_allow` (sometimes|boolean), `insurance` (sometimes|boolean), `insurance_number` (sometimes|numeric|digits_between:10,14), `insurance_date` (sometimes|date), `grade_year` (sometimes|string|max:255), `lesson_count` (sometimes|integer), `sepicality` (sometimes|string|max:255), `national_id_expire_date` (sometimes|date), `contract_start_date` (sometimes|date), `notes` (sometimes|string), `ministry_code` (sometimes|string|max:255)
- [X] T025 [US3] Run validation tests: `php artisan test --compact --filter="UserValidation"`
- [X] T026 [US3] Run `vendor/bin/pint --dirty --format agent` on changed files

**Checkpoint**: All fields read by assignFields() are validated in both FormRequest classes

---

## Phase 6: User Story 4 - Add insurance_number to User Mass Assignment (Priority: P2)

**Goal**: `insurance_number` can be set via mass assignment on User model

**Independent Test**: Create/update a user with `insurance_number` — value persists in database

### Implementation for User Story 4

- [X] T027 [US4] Add `insurance_number` to `$fillable` array in `app/Models/User.php`
- [X] T028 [US4] Verify: create a user with `insurance_number` via tinker or test — value persists
- [X] T029 [US4] Run `vendor/bin/pint --dirty --format agent` on changed files

**Checkpoint**: insurance_number persists through mass assignment

---

## Phase 7: User Story 5 - Strengthen Content Security Policy Headers (Priority: P3)

**Goal**: CSP header hardened — no `unsafe-eval`, new directives added

**Independent Test**: Inspect HTTP response headers — CSP matches hardened configuration

### Implementation for User Story 5

- [X] T030 [US5] Remove `unsafe-eval` from `script-src` in `app/Http/Middleware/SecurityHeadersMiddleware.php` (line 17)
- [X] T031 [US5] Add `connect-src 'self'` directive to CSP in `app/Http/Middleware/SecurityHeadersMiddleware.php`
- [X] T032 [US5] Add `font-src 'self' data:` directive to CSP in `app/Http/Middleware/SecurityHeadersMiddleware.php`
- [X] T033 [US5] Add `frame-src 'none'` directive to CSP in `app/Http/Middleware/SecurityHeadersMiddleware.php`
- [X] T034 [US5] Verify CSP header: `curl -I http://localhost:8000/ | grep -i content-security-policy`
- [X] T035 [US5] Run `vendor/bin/pint --dirty --format agent` on changed files

**Checkpoint**: CSP header contains zero `unsafe-*` directives (except `unsafe-inline`), all required directives present

---

## Phase 8: User Story 6 - Remove Orphan Labs Edit Form (Priority: P3)

**Goal**: Dead labs views removed

**Independent Test**: `ls resources/views/backend/labs/` returns "No such file or directory"

### Implementation for User Story 6

- [X] T036 [US6] Remove `resources/views/backend/labs/` directory (4 files: index, create, edit, show)
- [X] T037 [US6] Verify: `grep -rn "labs.update" resources/views/ --include="*.blade.php"` returns zero results
- [X] T038 [US6] Run `vendor/bin/pint --dirty --format agent` on changed files

**Checkpoint**: No orphan labs views remain

---

## Phase 9: Polish & Cross-Cutting Concerns

**Purpose**: Final validation across all user stories

- [X] T039 Run full test suite: `php artisan test --compact`
- [X] T040 Run `vendor/bin/pint --dirty --format agent` on all changed files
- [X] T041 Run `php artisan route:list` to verify route changes
- [X] T042 Run quickstart.md validation scenarios SC1-SC8

---

## Dependencies & Execution Order

### Phase Dependencies

- **Setup (Phase 1)**: No dependencies — can start immediately
- **Foundational (Phase 2)**: Depends on Setup completion — BLOCKS all user stories
- **US1 (Phase 3)**: Can start after Foundational — no dependencies on other stories
- **US2 (Phase 4)**: Can start after Foundational — no dependencies on other stories
- **US3 (Phase 5)**: Can start after Foundational — no dependencies on other stories
- **US4 (Phase 6)**: Depends on US3 (insurance_number validation must exist before mass assignment is meaningful)
- **US5 (Phase 7)**: Can start after Foundational — no dependencies on other stories
- **US6 (Phase 8)**: Can start after Foundational — no dependencies on other stories
- **Polish (Phase 9)**: Depends on ALL user stories being complete

### User Story Dependencies

- **US1 (P1)**: Independent — can start after Phase 2
- **US2 (P1)**: Independent — can start after Phase 2
- **US3 (P2)**: Independent — can start after Phase 2
- **US4 (P2)**: Depends on US3 (validation should exist before mass assignment is enabled)
- **US5 (P3)**: Independent — can start after Phase 2
- **US6 (P3)**: Independent — can start after Phase 2

### Within Each User Story

- Tests (if included) MUST be written and FAIL before implementation
- Implementation follows spec requirements
- Pint formatting after each file change
- Verification grep/check after implementation

### Parallel Opportunities

- US1, US2, US3, US5, US6 can ALL run in parallel after Phase 2
- T005, T006, T007 (US1 namespace fixes) can run in parallel
- T010-T015 (US2 route conversions) can run in parallel
- T020, T021 (US3 test creation) can run in parallel
- T030-T033 (US5 CSP changes) can run in parallel (all modify same file — sequential recommended)

---

## Parallel Example: User Story 1

```bash
# All three namespace fixes can run in parallel (different files):
Task: "Fix FinancialService import in app/Http/Controllers/FeeInvoiceController.php"
Task: "Fix FinancialService import in app/Http/Controllers/ExchangeBondController.php"
Task: "Fix FinancialService import in app/Http/Controllers/ExceptionFeesController.php"
```

---

## Implementation Strategy

### MVP First (User Stories 1 + 2 — both P1)

1. Complete Phase 1: Setup (verify prerequisites)
2. Complete Phase 2: Foundational (baseline tests + routes)
3. Complete Phase 3: US1 (namespace consistency) — **5 tasks, ~5 min**
4. Complete Phase 4: US2 (DELETE routes) — **10 tasks, ~30 min**
5. **STOP and VALIDATE**: Run quickstart SC1 + SC2
6. Security fix deployed

### Incremental Delivery

1. Setup + Foundational → Baseline ready
2. Add US1 → Namespace consistent → Deploy (security fix #1)
3. Add US2 → Routes hardened → Deploy (security fix #2)
4. Add US3 + US4 → Validations complete → Deploy (data integrity fix)
5. Add US5 → CSP hardened → Deploy (security fix #3)
6. Add US6 → Dead code removed → Deploy (cleanup)
7. Polish → Full validation → Final deploy

### Parallel Team Strategy

With multiple developers:

1. Team completes Setup + Foundational together
2. Once Foundational is done:
   - Developer A: US1 (namespace) + US2 (routes) — P1 security fixes
   - Developer B: US3 (validations) + US4 (fillable) — P2 data integrity
   - Developer C: US5 (CSP) + US6 (cleanup) — P3 hardening
3. All stories complete and integrate independently
4. Polish phase validates everything together

---

## Notes

- [P] tasks = different files, no dependencies
- [Story] label maps task to specific user story for traceability
- Each user story is independently completable and testable
- Commit after each task or logical group
- Stop at any checkpoint to validate story independently
- Total tasks: 42 (2 setup + 2 foundational + 5 US1 + 10 US2 + 7 US3 + 3 US4 + 6 US5 + 3 US6 + 4 polish)
