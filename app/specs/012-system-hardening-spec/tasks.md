# Tasks: System Hardening & Correctness Remediation

**Input**: Design documents from `specs/012-system-hardening-spec/`
**Prerequisites**: plan.md (required), spec.md (required), research.md, data-model.md, contracts/

**Tests**: Included. The project constitution (Automated Testing) and Laravel Boost rules require programmatic tests for every change (PHPUnit feature tests).

**Revision note**: Regenerated after `/speckit.analyze` to resolve findings D1 (Form Requests per Constitution I), C1 (Service Layer per Constitution IV), U1/U2 (SC-006/SC-007 volume/concurrency precision), U3 (SC-009 list enumeration).

## Format: `[ID] [P?] [Story] Description`

- **[P]**: Can run in parallel (different files, no dependencies)
- **[Story]**: Which user story this task belongs to (e.g., US1, US2, US3)
- Include exact file paths in descriptions

## Path Conventions

- Laravel app root: `app` (e.g., `app/app/Http/Controllers/...`, `app/app/Services/...`, `app/app/Models/...`)
- Paths below are relative to `/data/projects/laravel_projects/school_managment/app/`

---

## Phase 1: Setup (Shared Infrastructure)

**Purpose**: Validation baseline and shared test fixtures before any story work.

- [ ] T001 Create shared test fixtures/factories for multi-school scenarios (two schools, users with/without admin, roles) in `app/database/factories/` and `app/tests/TestCase.php`
- [ ] T002 Add a `Money`/exact-decimal helper (cents or bcmath `bcadd`/`bcsub`/`bccomp` wrapper) in `app/app/Support/Money.php` with unit test in `app/tests/Unit/MoneyTest.php`
- [ ] T003 [P] Add an audit-log helper that records actor id, action, target, timestamp via the existing ActivityLog infrastructure, append-only for the actor, in `app/app/Services/AuditService.php`
- [ ] T004 [P] Confirm baseline test suite runs: `php artisan test --compact` before beginning changes

---

## Phase 2: Foundational (Blocking Prerequisites)

**Purpose**: Core shared infrastructure that MUST be complete before user stories begin.

**⚠️ CRITICAL**: No user story work can begin until this phase is complete.

- [ ] T005 Configure the `login` rate limiter (`throttle:login`) in `app/app/Providers/RouteServiceProvider.php` (or `AppServiceProvider`) per contract: `Limit::perMinutes(1, 5)->by(...)` with escalating lockout on repeats
- [ ] T006 Define the admin authorization gate: a `Gate`/permission named for admin-era control (e.g., `admin-era`) registered for authenticated guards, in `app/app/Providers/AppServiceProvider.php` and/or Spatie permission seeders
- [ ] T007 Add migration(s) (additive) for hardening DB changes tracked across stories: reference_type backfill support, missing indexes, and any ledger-alert flags, under `app/database/migrations/2026_08_28_*`
- [ ] T008 Establish a baseline test for tenant isolation using the new fixtures (school A user must not see school B data) in `app/tests/Feature/Quality/TenantIsolationTest.php`

**Checkpoint**: Foundation ready — security and financial story work can begin.

---

## Phase 3: User Story 1 - Only Administrators Can Perform Administrative Actions (Priority: P1) 🎯 MVP

**Goal**: Close the privilege-escalation hole so only authorized admins can manage users/admin; never expose password hashes; audit every privileged action; all admin HTTP input validated via a dedicated Form Request (Constitution I).

**Independent Test**: A non-admin authenticated user gets 403 on all admin actions and no data changes; an admin succeeds; audit entries written (SC-001, SC-011).

### Tests for User Story 1

- [ ] T009 [P] [US1] Feature test: non-admin denied `POST /admin-era/employee/{id}` (no data changed) in `app/tests/Feature/Security/AdminEraTest.php`
- [ ] T010 [P] [US1] Feature test: admin allowed and `isAdmin`/password/email/role changes applied in `app/tests/Feature/Security/AdminEraTest.php`
- [ ] T011 [P] [US1] Feature test: admin listing never includes the raw password hash in `app/tests/Feature/Security/AdminEraTest.php`
- [ ] T012 [P] [US1] Feature test: last-admin protection blocks removal of the final admin's privilege in `app/tests/Feature/Security/AdminEraTest.php`
- [ ] T013 [P] [US1] Feature test: every granted privileged action writes an audit log entry in `app/tests/Feature/Security/AdminEraAuditTest.php`
- [ ] T014 [P] [US1] Feature test: admin action Form Request rejects invalid payloads (validation errors, no partial update) in `app/tests/Feature/Security/AdminEraFormRequestTest.php`

### Implementation for User Story 1

- [ ] T015 [P] [US1] Create dedicated `AdminEraRequest` Form Request (rules + custom messages, array-style) for `emp_active` payload in `app/app/Http/Requests/AdminEraRequest.php`
- [ ] T016 [P] [US1] Add `permission:admin-era` (or equivalent) middleware guard in the constructor of `app/app/Http/Controllers/AdminEraController.php`
- [ ] T017 [US1] Remove the `password` column from the select list in `AdminEraController::Index()` and pass only non-sensitive fields in `app/app/Http/Controllers/AdminEraController.php`
- [ ] T018 [US1] Harden `emp_active()` to type-hint `AdminEraRequest`, enforce last-admin protection, and call the audit helper in `app/app/Http/Controllers/AdminEraController.php`
- [ ] T019 [US1] Harden `UserService::assignFields()`/`prepareUserData()` so `isAdmin`/`login_allow` are only sourced from server-side guards for authorized callers, in `app/app/Services/UserService.php`
- [ ] T020 [US1] Add `permission:admin-era` middleware to the admin-era route group in `app/routes/security.php`

**Checkpoint**: User Story 1 fully functional and testable independently (MVP).

---

## Phase 4: User Story 2 - Disabled Employee Accounts Cannot Log In (Priority: P1)

**Goal**: Enforce `login_allow` so disabled accounts cannot authenticate by any path; re-enabled accounts work again.

**Independent Test**: Disabled account rejected on login with "account disabled"; re-enabled account signs in (SC-002, FR-003).

### Tests for User Story 2

- [ ] T021 [P] [US2] Feature test: login rejected for `login_allow=false` user with clear message in `app/tests/Feature/Security/DisabledLoginTest.php`
- [ ] T022 [P] [US2] Feature test: re-enabled account logs in successfully in `app/tests/Feature/Security/DisabledLoginTest.php`
- [ ] T023 [P] [US2] Feature test: disabled account also blocked via password-reset/registration paths in `app/tests/Feature/Security/DisabledLoginTest.php`

### Implementation for User Story 2

- [ ] T024 [US2] Enforce `login_allow` in `app/app/Http/Requests/Auth/LoginRequest.php` — after credential check, reject disabled accounts (do NOT pass `login_allow` as the remember-me arg)
- [ ] T025 [US2] Update the `AuthenticatedSessionController` flow so disabled accounts are handled consistently and the attempt is logged, in `app/app/Http/Controllers/Auth/AuthenticatedSessionController.php`
- [ ] T026 [US2] Remove `login_allow`/`isAdmin` from insecure mass-assignment paths (confirm `UserService::assignFields`) so they cannot be self-set, in `app/app/Services/UserService.php`

**Checkpoint**: User Stories 1 AND 2 both work independently.

---

## Phase 5: User Story 3 - Anonymous Users Cannot Create Accounts or See Cross-School Data (Priority: P1)

**Goal**: Gate open registration; stop `null school_id` from being implicit super-admin; scope the dashboard user list and Settings school updates.

**Independent Test**: Anonymous self-registration is blocked/gated; a provisioned account sees only its own school's data (SC-003, FR-004/FR-005).

### Tests for User Story 3

- [ ] T027 [P] [US3] Feature test: open `POST /register` creates no self-provisioned account (or is gated) in `app/tests/Feature/Security/RegistrationTest.php`
- [ ] T028 [P] [US3] Feature test: null-school account is NOT treated as super-admin; sees no cross-school data in `app/tests/Feature/Security/SchoolScopeTest.php`
- [ ] T029 [P] [US3] Feature test: dashboard user list is scoped to current school and paginated in `app/tests/Feature/Security/DashboardScopingTest.php`
- [ ] T030 [P] [US3] Feature test: `SettingsController::update` is permission-guarded and cannot edit another school via arbitrary id in `app/tests/Feature/Security/SettingsIdorTest.php`

### Implementation for User Story 3

- [ ] T031 [US3] Gate/disable public registration: apply `setup` guard or config-gated registration in `app/routes/auth.php` and `app/app/Http/Controllers/Auth/RegisteredUserController.php`
- [ ] T032 [US3] Update `app/app/Models/Scopes/SchoolScope.php` so a `null`/missing `school_id` no longer bypasses the school filter (explicit super-admin only)
- [ ] T033 [US3] Scope and paginate the dashboard user query in `app/app/Http/Controllers/HomeController.php` (replace `User::query()->get()` with a scoped, paginated query and eager-load roles)
- [ ] T034 [US3] Add permission middleware + school constraint to `SettingsController` update/update-password in `app/app/Http/Controllers/SettingsController.php` and `app/routes/security.php`

**Checkpoint**: User Stories 1-3 independently functional.

---

## Phase 6: User Story 4 - Login and Authentication Are Protected Against Brute Force (Priority: P1)

**Goal**: Wire real rate limiting so login/registration/password-reset throttle after repeated failures without harming legit single logins.

**Independent Test**: 5 rapid failed attempts trigger a 1-minute (escalating) lockout; a correct first attempt succeeds (SC-004, FR-006).

### Tests for User Story 4

- [ ] T035 [P] [US4] Feature test: 5 failed logins trigger the lockout and further attempts are throttled in `app/tests/Feature/Security/BruteForceTest.php`
- [ ] T036 [P] [US4] Feature test: a correct login on first attempt is not rate-limited in `app/tests/Feature/Security/BruteForceTest.php`
- [ ] T037 [P] [US4] Feature test: registration and password-reset endpoints are throttled under rapid requests in `app/tests/Feature/Security/BruteForceTest.php`

### Implementation for User Story 4

- [ ] T038 [US4] Wire `ensureIsNotRateLimited()` into `authenticate()` and align `RateLimiter::hit/clear` with the `login` limiter in `app/app/Http/Requests/Auth/LoginRequest.php`
- [ ] T039 [US4] Apply `throttle:login` to `POST /login`, `POST /register`, and forgot/reset-password routes in `app/routes/auth.php`

**Checkpoint**: All four P1 security stories independently functional. **STOP and VALIDATE before Phase 7.**

---

## Phase 7: User Story 5 - Financial Records Are Precise and Never Corrupt Ledgers (Priority: P2)

**Goal**: Exact-decimal money; consistent school-fund sign; reverse-then-record on exchange-bond edits; reverse ledger on invoice void; record partials and track over-payment; ledger↔order integrity. Ledger reversal logic lives in services (Constitution IV), not controllers.

**Independent Test**: Run fee/payment/reversal/void scenarios and confirm balances + fund reconcile to the cent with no orphan entries (SC-005, FR-007..012).

### Tests for User Story 5

- [ ] T040 [P] [US5] Feature/unit test: fee payment vs book/clothes payment produce a consistent fund sign (both Debit) in `app/tests/Feature/Finance/FundSignTest.php`
- [ ] T041 [P] [US5] Feature test: exchange-bond edit reverses original entry then records the new amount (no inflation) in `app/tests/Feature/Finance/ExchangeBondReversalTest.php`
- [ ] T042 [P] [US5] Feature test: invoice void reverses ledger + receipt + fund; no orphaned debit; reversal survives cleanup in `app/tests/Feature/Finance/InvoiceVoidReversalTest.php`
- [ ] T043 [P] [US5] Feature test: partial payment recorded to the cent and over-payment tracked as surplus/credit in `app/tests/Feature/Finance/PartialOverpayTest.php`
- [ ] T044 [P] [US5] Feature test: inventory ledger reversal never updates the wrong FeeInvoice (correct order linkage) in `app/tests/Feature/Finance/InventoryLedgerIntegrityTest.php`
- [ ] T045 [P] [US5] Unit test: no float drift in `Money` arithmetic across edge amounts in `app/tests/Unit/MoneyTest.php`

### Implementation for User Story 5

- [ ] T046 [US5] Refactor `PaymentService::handleFeeInvoice`/`handlePartialPayment` to use exact-decimal math and to record partial + track over-payment/remainder in `app/app/Services/PaymentService.php`
- [ ] T047 [P] [US5] Fix `InventoryPaymentService::handleBooksPayment`/`handleClothesPayment` fund sign to `Debit=amount` (unify with fee payments) and correct the order linkage (not `fee_invoices_id`) in `app/app/Services/InventoryPaymentService.php`; refactor the 90%-duplicated pair into a shared private helper
- [ ] T048 [US5] Extract exchange-bond ledger ops to reverse-then-record (reverse original StudentAccount+FundAccount before new amount) in `app/app/Services/Finance/ExchangeBondService.php`; call from `app/app/Http/Controllers/ExchangeBondController.php`
- [ ] T049 [US5] Add `app/app/Services/Finance/ExceptionFeeLedgerService.php` and move the exception-fee void/reversal ledger logic into it, so controllers only marshal HTTP (Constitution IV); call from `app/app/Http/Controllers/ExceptionFeesController.php`
- [ ] T050 [US5] Fix `AccountingReversalService::reverseReceiptEntries` to avoid recursive double-reversal and preserve `exchange_bond_id`, in `app/app/Services/AccountingReversalService.php`
- [ ] T051 [US5] Fix `ExceptionFeesController` dead `student_id` guard and exact-decimal compare (`bccomp`); delegate ledger work to `ExceptionFeeLedgerService` in `app/app/Http/Controllers/ExceptionFeesController.php`
- [ ] T052 [US5] Fix `FundAccount`/ledger sign handling and document the PascalCase `Debit`/`Credit` columns for BC, in `app/app/Models/FundAccount.php`

**Checkpoint**: Financial correctness story complete and independently testable.

---

## Phase 8: User Story 6 - Inventory Numbers Are Unique, Stock Cannot Oversell, and Orders Are Correct (Priority: P2)

**Goal**: Single consistent numbering; serialized (non-overselling) stock; both order types creatable; `pay()` authorized and POST; correct reference mapping. Volume/concurrency tests pinned to SC-006/SC-007.

**Independent Test**: No number collisions across 10,000 orders; no negative stock under 100 concurrent sales; purchases order saved as purchases; `pay()` only for authorized via POST (SC-006/007, FR-013..016, FR-018).

### Tests for User Story 6

- [ ] T053 [P] [US6] Unit/feature test: single numbering provider yields unique, formatted numbers across types (incl. `StudentOrderService` books/clothes) in `app/tests/Feature/Inventory/OrderNumberingTest.php`
- [ ] T054 [P] [US6] Volume test (SC-006): generate 10,000 orders across types and assert zero `(school_id, type, auto_number)` collisions in `app/tests/Feature/Inventory/OrderNumberingVolumeTest.php`
- [ ] T055 [P] [US6] Concurrency test (SC-007): 100 concurrent `stockOut` calls assert stock never goes negative (relies on `lockForUpdate`) in `app/tests/Feature/Inventory/StockConcurrencyTest.php`
- [ ] T056 [P] [US6] Feature test: a `purchases` order is created with `type=purchases` (not `sales`) in `app/tests/Feature/Inventory/OrderTypeTest.php`
- [ ] T057 [P] [US6] Feature test: `pay()` requires authorization, is POST-only, and is school-scoped in `app/tests/Feature/Inventory/OrderPayTest.php`
- [ ] T058 [P] [US6] Feature test: `inventory_transactions.reference` resolves to the correct related record (class-name mapping) in `app/tests/Feature/Inventory/ReferenceMappingTest.php`
- [ ] T059 [P] [US6] Feature test: creating an order with an invalid/zero cost still saves a valid order (edge) in `app/tests/Feature/Inventory/OrderEdgeCasesTest.php`

### Implementation for User Story 6

- [ ] T060 [US6] Consolidate numbering: make `InventoryOrderService::generateOrderNumber` the single provider with unique-violation retry; have `StudentOrderService::generateAutoNumber` delegate to it, in `app/app/Services/Inventory/InventoryOrderService.php` and `app/app/Services/StudentOrderService.php`
- [ ] T061 [P] [US6] Add `lockForUpdate()` on the item row in `stockIn`/`stockOut`/`adjustStock` and re-check availability under lock, in `app/app/Services/Inventory/InventoryTransactionService.php`
- [ ] T062 [P] [US6] Fix `create_sarf.blade.php` to bind `type` from the selected order type (not hardcoded `sales`), in `app/resources/views/backend/inventory/orders/create_sarf.blade.php` and controller `InventoryOrderController::create`
- [ ] T063 [P] [US6] Create `InventoryOrderPolicy` with a `pay` ability and school-scope check in `app/app/Policies/InventoryOrderPolicy.php`
- [ ] T064 [US6] Convert `pay()` to POST with `authorize('pay', $order)` and school-scoped lookup; scope `show()`, in `app/app/Http/Controllers/Inventory/InventoryOrderController.php` and `app/routes/inventory.php`; update `index.blade.php` pay anchor to a POST form
- [ ] T065 [P] [US6] Write `reference_type` as the class name and backfill existing rows so `reference()`/`transactions()` resolve, in `app/app/Services/Inventory/InventoryTransactionService.php` + an additive migration under `app/database/migrations/`
- [ ] T066 [P] [US6] Add `authorize()` to `InventoryGardController` store/update in `app/app/Http/Controllers/Inventory/InventoryGardController.php`
- [ ] T067 [P] [US6] Create/harden `UpdateInventoryItemRequest` Form Request (rules allowing zero values, custom messages) in `app/app/Http/Requests/UpdateInventoryItemRequest.php` and wire into `InventoryItemController::update`

**Checkpoint**: Inventory consistency story complete and independently testable.

---

## Phase 9: User Story 7 - Stock Data Supports Zero Values and Full Editing (Priority: P3)

**Goal**: Inventory updates persist zero price/quantity and inactive status, validated through the dedicated Form Request (Constitution I).

**Independent Test**: Setting price/quantity to zero and deactivating an item are persisted (SC-008, FR-017).

### Tests for User Story 7

- [ ] T068 [US7] Feature test: setting `min_stock`/`max_stock`/`cost_price`/`sell_price` to `0` persists in `app/tests/Feature/Inventory/ZeroValueUpdateTest.php`
- [ ] T069 [P] [US7] Feature test: setting `is_active=false` persists the item as inactive in `app/tests/Feature/Inventory/ZeroValueUpdateTest.php`

### Implementation for User Story 7

- [ ] T070 [US7] Replace `array_filter` in `InventoryItemService::updateItem` with explicit presence checks so `0`/`false` are persisted, in `app/app/Services/Inventory/InventoryItemService.php`

**Checkpoint**: Zero-value editing works independently.

---

## Phase 10: User Story 8 - The System Is Clean, Fast, and Maintainable (Priority: P3)

**Goal**: Fix cross-school leaks in raw query/jobs, orphan-preventing delete semantics, missing indexes, pagination, cache invalidation, and dead/misnamed code. Pagination asserts the concrete large lists (SC-009).

**Independent Test**: No orphan rows, core lists paginated, dashboards current, no cross-school leak, dead code removed (SC-009/010, FR-019..024).

### Tests for User Story 8

- [ ] T071 [P] [US8] Feature test: role deletion cleans Spatie pivot tables in `app/tests/Feature/Quality/RoleCleanupTest.php`
- [ ] T072 [P] [US8] Feature test: raw-query/job dashboard widgets are school-scoped in `app/tests/Feature/Quality/RawQueryScopingTest.php`
- [ ] T073 [P] [US8] Feature test (SC-009): the concrete large lists (`AdminEraController`, `ReportController`, `ClassesController`, `HomeController`) return ≤50 records/page in `app/tests/Feature/Quality/PaginationTest.php`
- [ ] T074 [P] [US8] Feature/unit test: cache invalidation clears all fee cache key variants in `app/tests/Feature/Quality/CacheInvalidationTest.php`

### Implementation for User Story 8

- [ ] T075 [P] [US8] School-scope `HomeController` raw `DB::table` widgets and `ImportStudentsJob`; scope the role deletion and clean Spatie pivots in `app/app/Http/Controllers/HomeController.php`, `app/app/Jobs/ImportStudentsJob.php`, `app/app/Http/Controllers/RoleController.php`
- [ ] T076 [P] [US8] Add pagination to the concrete unbounded lists (`AdminEra`, `HomeController`, `ReportController`, `ClassesController`) in their respective `app/app/Http/Controllers/*.php`
- [ ] T077 [P] [US8] Add the missing indexes (per data-model) via an additive migration under `app/database/migrations/`
- [ ] T078 [P] [US8] Fix `CacheService::invalidateFeesCache()` to clear all `fees_{schoolId}_{gradeId}_{classroomId}` variants in `app/app/Services/CacheService.php`
- [ ] T079 [P] [US8] Fix `can:monitor-access` (define a matching Gate or switch to `permission:` middleware) in `app/routes/security.php`
- [ ] T080 [P] [US8] Fix `RoleController` deletion cleanup and `ImageTrait` save/delete path + morph namespace in `app/app/Traits/ImageTrait.php` (and the `UserController` `imageable_type` fix)

**Checkpoint**: Quality & hardening complete.

---

## Phase 11: Polish & Cross-Cutting Concerns

**Purpose**: Improvements that affect multiple user stories and final normalization.

- [ ] T081 [P] Normalize snake_case enums to TitleCase (`Payment_Status`→`PaymentStatus`, `Payment_Type`→`PaymentType`, `Student_Status`→`StudentStatus`) with BC casts preserved, in `app/app/Enums/` and affected models
- [ ] T082 [P] Remove dead code/services: `PromotionService`, dead `InventoryOrderQueryService` methods, `ReportPolicy` (unregistered), `SettingsController::store()` (no route), duplicate `generateAutoNumber` refs, in `app/app/Services/` and `app/app/Http/Controllers/SettingsController.php`
- [ ] T083 [P] Normalize permission-name/role casing where genuinely inconsistent (seeder/migration) in `app/database/seeders/PermissionTableSeeder.php`
- [ ] T084 [P] Fix legacy misspellings surfaced for future correctness (`recipt__payments`, `excption_fees`, `reiligon`, `StudentRegeister`) — at minimum document + additive migration where safe, in `app/database/migrations/`
- [ ] T085 [P] Align spec/plan branch reference (`012-system-hardening-spec`) and re-key `FR-006a` to a consistent `FR-025` in `specs/012-system-hardening-spec/spec.md`
- [ ] T086 [P] Run full verification: `php artisan test --compact` and `vendor/bin/pint --format agent` in the Laravel root
- [ ] T087 [P] Run `php artisan route:list` to confirm guarded admin-era, POST `pay`, and throttled auth routes; resolve any `Vite manifest` errors with `npm run build`

---

## Dependencies & Execution Order

### Phase Dependencies

- **Setup (Phase 1)**: No dependencies — can start immediately.
- **Foundational (Phase 2)**: Depends on Setup — BLOCKS all user stories (rate limiter, admin gate, migrations, isolation baseline).
- **User Stories (Phase 3+)**:
  - US1–US4 (all P1 security) depend on Phase 2 and on T001/T002/T003 from Setup.
  - US5 (finance) depends on T002 (Money); otherwise independent of US1–US4.
  - US6–US7 (inventory) largely independent; US6 depends on the inventory baseline (already on disk). T063/T064 (pay policy) must follow T063 (policy) before T064 (route).
  - US8 (quality) overlaps `HomeController` with US3 — sequence US3 before US8 if single developer.
- **Polish (Final Phase)**: Depends on all user stories.

### User Story Dependencies

- **US1 (P1)**: After Phase 2. Independent. **MVP.**
- **US2 (P1)**: After Phase 2. Independent of US1 (different file: `LoginRequest`) but both P1 security.
- **US3 (P1)**: After Phase 2. Depends on SchoolScope isolation baseline (T008).
- **US4 (P1)**: After Phase 2. Depends on the `login` limiter (T005). Complements US2 (login path).
- **US5 (P2)**: Depends on T002 (Money). Independent of security stories.
- **US6 (P2)**: After Phase 2; independent (inventory already implemented). Internal order: T053–T059 tests, then T060 (numbering) → T061 (locking) → T063 (policy) → T064 (route) → T062/T065/T066/T067 parallel.
- **US7 (P3)**: After Phase 2; independent. Depends on T067 (`UpdateInventoryItemRequest`) from US6 for validation.
- **US8 (P3)**: After Phase 2; overlaps HomeController with US3 — sequence US3 before US8 if single dev.

### Within Each User Story

- Tests written FIRST and left failing before implementation.
- Models/helpers (Form Requests) before services.
- Services before controllers/routes.
- Story complete before next priority.

### Parallel Opportunities

- All Setup `[P]` tasks in parallel (T003, T004).
- Most Foundational `[P]` tasks in parallel after T001/T005/T007.
- Test tasks within each story run in parallel.
- Once Phase 2 completes: US1 (dev A), US5 (dev B), US6+US7 (dev C), US3→US8 (dev D) can run in parallel.
- Within US6: T062/T065/T066/T067 parallel after numbering/locking; T063 (policy) precedes T064 (route).

---

## Parallel Example: User Story 1

```bash
# Launch all US1 tests together:
Task: "Feature test: non-admin denied POST /admin-era/employee/{id}"
Task: "Feature test: admin allowed to change user fields"
Task: "Feature test: admin listing excludes raw password hash"
Task: "Feature test: last-admin protection"
Task: "Feature test: privileged action audit log"
Task: "Feature test: AdminEraRequest validation rejects invalid payloads"

# Then implementation (Form Request + middleware parallel, then controller):
Task: "Create AdminEraRequest Form Request"
Task: "Add permission middleware to AdminEraController constructor"
Task: "Remove password column from Index select"
Task: "Harden emp_active() + audit"
Task: "Harden UserService assignFields"
Task: "Add permission middleware to admin-era route group"
```

---

## Implementation Strategy

### MVP First (User Story 1 Only)

1. Phase 1: Setup (Money helper, fixtures, audit helper, baseline).
2. Phase 2: Foundational (rate limiter, admin gate, migrations, isolation baseline).
3. Phase 3: User Story 1 (privilege escalation + hash exposure + audit + Form Request).
4. **STOP and VALIDATE**: run US1 tests, confirm no data changes for non-admin.
5. Deploy/demo if ready — the highest-risk security hole is closed.

### Incremental Delivery

1. Setup + Foundational → foundation ready.
2. US1 (admin escalation) → test → deploy/demo (MVP).
3. US2 (disabled login) → test → deploy.
4. US3 (registration/tenant isolation) → test → deploy.
5. US4 (brute force) → test → deploy. **All P1 security done.**
6. US5 (finance) → test → deploy.
7. US6 (inventory) → test → deploy.
8. US7 (zero values) → test → deploy.
9. US8 (quality) → test → deploy.
10. Polish (enums, dead code, casing, misspellings, spec nits) → full verify.

### Parallel Team Strategy

- Team completes Setup + Foundational together.
- Dev A: US1 + US2 + US4 (security). Dev B: US5 (finance). Dev C: US6 + US7 (inventory). Dev D: US3 then US8 (quality). Each integrates independently.
- Polish ownership: one person after all stories.

---

## Notes

- [P] tasks = different files, no dependencies.
- [Story] label maps tasks to a user story for traceability.
- Each user story is independently completable and testable.
- Verify tests fail before implementing.
- Commit after each task or logical group.
- Run `vendor/bin/pint --format agent` before finalizing code changes per Laravel Boost rules.
- Analysis findings resolved: D1 (T015/T018, T067 — Form Requests), C1 (T049 — ExceptionFee ledger service), U1 (T054 — 10k volume), U2 (T055 — 100 concurrent), U3 (T073 — concrete lists).
