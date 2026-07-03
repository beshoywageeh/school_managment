# Tasks: Complete System Repair — Fix All Project Issues

**Feature**: specs/001-fix-all-project-issues
**Date**: 2026-07-03
**Branch**: 001-fix-all-project-issues
**Prerequisites**: plan.md, spec.md, research.md, data-model.md, contracts/routes.md, quickstart.md

**Organization**: Tasks are grouped by user story (from spec.md) to enable independent implementation and testing of each story.

**Format**: `- [ ] TXXX [P] [USY] Task description with exact file path`

> **Note on phase numbering**: The spec labels phases as Phase 0 (Foundation), Phase 2 (Form Requests), Phase 4 (Business Logic), Phase 5 (Security), Phase 6 (Routes), Phase 7 (Tests) — skipping Phases 1 and 3 which are already 100% complete. This file renumbers them as Phase 1–7 for reading clarity. The origin spec phase is noted in each phase header.

---

## Phase 1: Foundation (spec Phase 0)

> **Infrastructure hardening**: `.env` review, storage link, queue config, rate limiting, security headers, DB indexes, cron/backup.
> **Story mapping**: US1 (security headers, rate limiting), US4 (queue, indexes, cron). Infrastructure tasks labeled for user story traceability.

- [ ] T001 [P] [US1] Verify APP_KEY, DB_DATABASE, QUEUE_CONNECTION, APP_URL are present in `app/.env` (F0.1)
- [ ] T002 [P] [US1] Execute `php artisan storage:link` and confirm symlink at `app/public/storage` → `storage/app/public` (F0.2)
- [ ] T003 [P] [US4] Set QUEUE_CONNECTION=database in `app/.env` and verify `config/queue.php` defaults to `database` (F0.3)
- [ ] T004 [P] [US4] Configure queue worker for `logs` queue: create Supervisor config at `/etc/supervisor/conf.d/laravel-worker.conf` for `php artisan queue:work --queue=logs` OR document alternative: add `* * * * * php /path/to/artisan queue:work --queue=logs --stop-when-empty >> /dev/null 2>&1` to server crontab (F0.4)
- [ ] T005 [P] [US1] Verify `throttle:api` in `app/app/Http/Kernel.php` (line 80: `api` group already has `ThrottleRequests::class.':api'`); confirm rate limiting via `for i in $(seq 1 65); do curl -s -o /dev/null -w "%{http_code}" http://localhost/api/endpoint; done` — last 5 responses should be 429 (F0.5)
- [ ] T006 [P] [US1] Create middleware `app/Http/Middleware/SecurityHeadersMiddleware.php` that adds CSP, HSTS, X-Frame-Options, X-Content-Type-Options headers (F0.6)
- [ ] T007 [P] [US1] Register SecurityHeadersMiddleware in `app/Http/Kernel.php` global middleware array (F0.6)
- [ ] T008 [P] Create custom error view files at `resources/views/errors/{401,403,404,419,429,500,503}.blade.php` reusing existing backend layout (extend `backend.layouts.master` or similar), with translated error message and "Return to Dashboard" link (F0.6)
- [ ] T009 [P] [US4] Create migration `database/migrations/2026_07_03_000001_add_indexes_to_frequent_queries.php` adding indexes on `student_accounts.type`, `activity_logs.action`, `inventory_items.category` (F0.7)
- [ ] T010 [P] [US4] Add database backup schedule to `app/app/Console/Kernel.php` via `$schedule->command('backup:run')->dailyAt('02:00')` (F0.8)
- [ ] T011 [P] Add `* * * * * php /path/to/artisan schedule:run >> /dev/null 2>&1` to server crontab (or document as ops task); after `php artisan schedule:run`, verify backup files appear in configured backup destination (F0.8 crontab)

---

## Phase 2: Form Requests — Input Layer (spec Phase 2)

> **Goal**: Bind existing Form Requests to their controllers; create 6 new financial Form Requests; add proper validation rules with `exists:` and school_id scoping.
> **Story mapping**: US2 (inventory form requests — already exist), US3 (financial form requests — new).

- [ ] T012 [P] [US3] Create `app/Http/Requests/StorePaymentRequest.php` with validation rules for `student_id` (exists:students), `amount` (required|numeric|min:0), `type` (in:full,partial), `date` (required|date), `fund_account_id` (exists:fund_accounts) (F2.2)
- [ ] T013 [P] [US3] Create `app/Http/Requests/UpdatePaymentRequest.php` with validation rules for `student_id` (exists:students), `amount` (required|numeric|min:0), `date` (required|date) (F2.2)
- [ ] T014 [P] [US3] Create `app/Http/Requests/StoreExchangeBondRequest.php` with validation rules for `student_id` (exists:students), `amount` (required|numeric|min:0), `type` (in:...), `date` (required|date) (F2.2)
- [ ] T015 [P] [US3] Create `app/Http/Requests/UpdateExchangeBondRequest.php` with validation rules for `student_id` (exists:students), `amount` (required|numeric|min:0), `type` (in:...), `date` (required|date) (F2.2)
- [ ] T016 [P] [US3] Create `app/Http/Requests/StoreFeeInvoiceRequest.php` with validation rules for `list_fees` (required|array|min:1), `list_fees.*.student_id` (exists:students), `list_fees.*.fee` (exists:school_fees) (F2.2)
- [ ] T017 [P] [US3] Create `app/Http/Requests/UpdateFeeInvoiceRequest.php` with validation rules matching StoreFeeInvoiceRequest (F2.2)
- [ ] T018 [P] [US3] Bind StorePaymentRequest to `create()` and UpdatePaymentRequest to `update()` in `app/Http/Controllers/PaymentPartsController.php` (F2.1)
- [ ] T019 [P] [US3] Bind StoreExchangeBondRequest to `create()` and UpdateExchangeBondRequest to `update()` in `app/Http/Controllers/ExchangeBondController.php` (F2.1)
- [ ] T020 [P] [US3] Bind StoreFeeInvoiceRequest to `create()` and UpdateFeeInvoiceRequest to `update()` in `app/Http/Controllers/FeeInvoiceController.php` (F2.1)
- [ ] T021 [P] [US2] Add `exists:grades,id` and `exists:class_rooms,id` rules to existing inventory Form Requests in `app/Http/Requests/Inventory/` (F2.3)
- [ ] T022 [P] Add `school_id` scoping validation (via `exists:schools,id` or custom rule) to all 9+ Form Requests where applicable (F2.3)

---

## Phase 3: Business Logic — Controller Refactoring (spec Phase 4)

> **Goal**: Extract 5 services from bloated controllers, add `executeInTransaction()` to base controller, fix N+1 queries, unify constructor injection.
> **Story mapping**: US2 (inventory service already exists), US3 (payment service), US4 (dashboard service, invoice query), US1 (user service).

- [ ] T023 [P] [US4] Create `app/Services/DashboardService.php` with methods `getUserRoleCounts()`, `getFinancialData()`, `generateChartData()`, `getMonthlyRevenueTrend()` extracted from `app/Http/Controllers/HomeController.php` (F4.1)
- [ ] T024 [US4] Refactor `app/Http/Controllers/HomeController.php` to delegate to DashboardService; remove private methods; verify `wc -l` < 200 lines (currently 181) (F4.1)
- [ ] T025 [P] [US3] Create `app/Services/PaymentService.php` with 4 payment handler methods extracted from `app/Http/Controllers/ReceiptPaymentController.php` (F4.2)
- [ ] T026 [US3] Refactor `app/Http/Controllers/ReceiptPaymentController.php` to delegate to PaymentService; inject Logger via constructor; after extraction verify `wc -l` < 250 lines (currently 501, ~260 lines to extract → ~241 expected) (F4.2)
- [ ] T027 [P] [US4] Create `app/Services/StudentQueryService.php` with filter/sort/join logic extracted from `app/Http/Controllers/Students/StudentsController::index()` (F4.3)
- [ ] T028 [US4] Refactor `app/Http/Controllers/Students/StudentsController.php` to delegate to StudentQueryService (F4.3)
- [ ] T029 [P] [US4] Create `app/Services/InvoiceQueryService.php` with dynamic query building extracted from `app/Http/Controllers/FeeInvoiceController::index()` (F4.4)
- [ ] T030 [US4] Refactor `app/Http/Controllers/FeeInvoiceController.php` to delegate to InvoiceQueryService (F4.4)
- [ ] T031 [P] [US1] Create `app/Services/UserService.php` with field assignment logic extracted from `app/Http/Controllers/UserController::store()` and `UserController::update()` (F4.5)
- [ ] T032 [US1] Refactor `app/Http/Controllers/UserController.php` to delegate to UserService; inject Logger via constructor (F4.5)
- [ ] T033 Add `executeInTransaction()` method to `app/Http/Controllers/Controller.php` that wraps a callable in `DB::transaction()` with all-or-nothing rollback (F4.6)
- [ ] T034 [P] Refactor all controllers in `app/Http/Controllers/` to replace `DB::beginTransaction()/commit()/rollback()` with `$this->executeInTransaction()` (F4.6)
- [ ] T035 [P] Unify constructor injection in all 5 refactored controllers — move all dependencies to constructor parameters (F4.7)
- [ ] T036 [P] [US4] Fix N+1 queries in StudentQueryService by adding `with('grade', 'classroom', 'parent')` eager loading (F4.8)
- [ ] T037 [P] [US4] Fix N+1 queries in InvoiceQueryService by adding `with('fees', 'student')` eager loading (F4.8)
- [ ] T038 [P] [US4] Fix N+1 queries in ReportService by adding `with()` for related models (F4.8)

---

## Phase 4: Security — Authorization (spec Phase 5)

> **Goal**: Create 8 policy classes, register in AuthServiceProvider, add `$this->authorize()` to all 40 controllers, fix 20 Form Request `authorize()` methods, add middleware to routes.
> **Story mapping**: US1 (all security/policy work). Controller list: AcademicYear, ActivityLog, AdminEra, Backup, Classes, ClassRooms, ExceptionFees, ExchangeBond, FeeInvoice, FeeInvoiceApi, fund_accounts, Grades, Home, InventoryGard, InventoryItem, InventoryOrder, Job, MyParents, PaymentParts, Profile, promotion, ReceiptPayment, Report, Role, schedules, SchoolFee, Settings, Setup, StudentApi, Students, User + 9 Auth controllers (AuthenticatedSession, ConfirmablePassword, EmailVerificationNotification, EmailVerificationPrompt, NewPassword, Password, PasswordResetLink, RegisteredUser, VerifyEmail). Excluding Controller.php base class.

- [ ] T039 [P] [US1] Create `app/Policies/StudentPolicy.php` with `view`, `create`, `update`, `delete` gated by `$user->can('add_student')`, `edit_student`, `delete_student` (F5.1)
- [ ] T040 [P] [US1] Create `app/Policies/FeeInvoicePolicy.php` with `view`, `create`, `update`, `delete` gated by `add_fee_invoice`, `edit_fee_invoice`, `delete_fee_invoice` (F5.1)
- [ ] T041 [P] [US1] Create `app/Policies/UserPolicy.php` with `view`, `create`, `update`, `delete` gated by `add_user`, `edit_user`, `delete_user` (F5.1)
- [ ] T042 [P] [US1] Create `app/Policies/InventoryItemPolicy.php` with `view`, `create`, `update`, `delete` gated by `add_inventory`, `edit_inventory`, `delete_inventory` (F5.1)
- [ ] T043 [P] [US1] Create `app/Policies/InventoryOrderPolicy.php` with `view`, `create`, `update`, `delete` gated by `add_inventory_order`, `edit_inventory_order`, `delete_inventory_order` (F5.1)
- [ ] T044 [P] [US1] Create `app/Policies/GradePolicy.php` with `view`, `create`, `update`, `delete` gated by `add_grade`, `edit_grade`, `delete_grade` (F5.1)
- [ ] T045 [P] [US1] Create `app/Policies/ClassPolicy.php` with `view`, `create`, `update`, `delete` gated by `add_class`, `edit_class`, `delete_class` (F5.1)
- [ ] T046 [P] [US1] Create `app/Policies/EmployeePolicy.php` with employee-specific permission gates (F5.1)
- [ ] T047 [US1] Register all 8 policies in `$policies` array in `app/Providers/AuthServiceProvider.php` (F5.2)
- [ ] T048 [US1] Add `$this->authorize()` calls to all applicable controller actions across the 40 controllers in `app/Http/Controllers/` (skip Auth controllers which handle guest/auth transitions via middleware) (F5.3)
- [ ] T049 [P] [US1] Fix `authorize()` method in 20 Form Request classes in `app/Http/Requests/` to check `$this->user()->can('permission_key')` instead of `return true` (F5.4)
- [ ] T050 [P] [US1] Add `can:` middleware with appropriate permission keys to all routes in `routes/reports.php` (F5.5)
- [ ] T051 [P] [US1] Add authentication + authorization middleware to `/monitor` route in `routes/security.php` (F5.6)

---

## Phase 5: Routes — Convention Cleanup (spec Phase 6)

> **Goal**: Fix catch-all route ordering, add API route names, unify destroy/update to REST conventions, convert URLs to kebab-case.
> **Story mapping**: US2 (inventory route ordering), US1 (convention fixes).

- [ ] T052 [P] [US2] Move `/{type}` catch-all route to the END of the `items` group in `routes/inventory.php` so `/create/{type}` and other specific routes match first (F6.1)
- [ ] T053 [P] [US1] Add `->name()` to all 11+ routes in `routes/api.php` (F6.2)
- [ ] T054 [US1] Run `rg 'GET.*destroy' routes/` to identify all `GET /destroy/{id}` patterns; convert each to `DELETE /{id}` across `routes/web.php` and related route files (F6.3, F6.5)
- [ ] T055 [US1] Run `rg 'POST.*update' routes/` to identify all `POST /update` patterns; convert each to `PUT /{id}` across `routes/web.php` and related route files (F6.5)
- [ ] T056 [US1] Run `rg '_' routes/ --include '*.php'` to identify all snake_case URL segments; convert each to kebab-case across all route files in `routes/` (e.g., `/exception_fee` → `/exception-fee`) (F6.4)

---

## Phase 6: Tests (spec Phase 7)

> **Goal**: Configure test DB, create comprehensive test coverage for Inventory CRUD, Order state transitions, Auth, ActivityLog, and Financial operations. Test must cover happy paths, failure paths, and edge cases.
> **Story mapping**: US5 (test suite). Tests validate US1–US4.

- [ ] T057 [US5] Configure `DB_CONNECTION=sqlite` and `DB_DATABASE=:memory:` in `app/phpunit.xml` for test isolation; run `php artisan migrate --env=testing` to create test schema (F7.1)
- [ ] T058 [P] [US5] Create `tests/Feature/InventoryItemTest.php` with CRUD tests for create/read/update/delete with valid + invalid data (missing required fields, invalid types, duplicates, boundary values) + authorization negatives (unauthenticated, role-based 403) (F7.2)
- [ ] T059 [P] [US5] Create `tests/Feature/InventoryOrderTest.php` with CRUD + status transition tests across 5 states: `pending→confirmed→completed` forward, `cancelled`/`returned` as terminal from any non-terminal state, invalid transitions rejected (F7.3)
- [ ] T060 [P] [US5] Create `tests/Feature/AuthTest.php` with login (valid/invalid credentials), logout, and permission-based access tests (F7.4)
- [ ] T061 [P] [US5] Create `tests/Feature/ActivityLogTest.php` with listing, filtering by action/type, and pagination tests (F7.5)
- [ ] T062 [P] [US5] Create `tests/Feature/FinancialTest.php` with FeeInvoice creation, PaymentParts processing, ExchangeBond creation tests (valid + invalid data: missing fields, invalid amounts, boundary values) + authorization negatives (F7.6)
- [ ] T063 [US5] Run `php artisan test --compact` and fix any failures to achieve exit code 0 (F7.7)

---

## Phase 7: Cross-Cutting & Cleanup

> **Purpose**: Spelling verification, $fillable audit, dead code removal, and phase validation sign-off.

- [ ] T064 [P] Run `rg -i 'payed\|notpayed' --type php --type blade -g '!vendor/' -g '!node_modules/'` to verify zero occurrences remain across source code; if any found, fix to `paid`/`not_paid` in those specific files (F8.1 verification — prior work may have already completed this)
- [ ] T065 [P] Create a migration `database/migrations/2026_07_03_000002_fix_payed_to_paid.php` that renames any remaining database columns from `payed`/`notpayed` to `paid`/`not_paid`; run `php artisan migrate` (F8.1)
- [ ] T066 [P] Audit all Eloquent models in `app/Models/` for missing `$fillable` or `$guarded` properties; add `$fillable` where absent to prevent MassAssignmentException (spec EC3)
- [ ] T067 [P] Remove dead `EagerLoadingTrait` from `app/Http/Traits/EagerLoadingTrait.php` — verified unused via `rg 'use App\\\\Http\\\\Traits\\\\EagerLoadingTrait'` returning zero matches (F8.2)
- [ ] T068 [P] Remove dead `ViewServiceProvider` from `app/Providers/ViewServiceProvider.php` — empty `boot()` method; unregister from `config/app.php` providers array (F8.2)
- [ ] T069 [P] Remove dead `PDFExportService` and `ReportService` from `app/Services/Reports/` directory — files declare `namespace App\Services;` (wrong namespace) and cannot be autoloaded for `App\Services\Report\*` imports used by `ReportController`; the real files at `app/Services/Report/` have already been removed (F8.2)
- [ ] T070 [P] Remove unused pagination templates from `resources/views/vendor/pagination/` — keep only `tailwind.blade.php` (and optionally `simple-tailwind.blade.php`); remove `bootstrap-4.blade.php`, `bootstrap-5.blade.php`, `default.blade.php`, `semantic-ui.blade.php`, `simple-bootstrap-4.blade.php`, `simple-bootstrap-5.blade.php`, `simple-default.blade.php` (F8.2)
- [ ] T071 Run `php artisan test --compact` after dead code removal to confirm zero regressions (F8.2 verification)
- [ ] T072 Run `php artisan route:list` and manually smoke-test the following paths to confirm no breakage after dead code removal: Inventory items index, Order creation, Student report, Fee invoice listing (F8.2 smoke test)
- [ ] T073 [P] After each phase, run the corresponding validation commands from `quickstart.md` before proceeding to next phase (phase validation)

---

## Summary

| Phase | Tasks | US Label | Parallel [P] |
|-------|-------|----------|-------------|
| Phase 1: Foundation | T001–T011 | US1, US4 | 10 of 11 |
| Phase 2: Form Requests | T012–T022 | US2, US3 | 10 of 11 |
| Phase 3: Business Logic | T023–T038 | US1, US3, US4 | 10 of 16 |
| Phase 4: Security | T039–T051 | US1 | 9 of 13 |
| Phase 5: Routes | T052–T056 | US1, US2 | 3 of 5 |
| Phase 6: Tests | T057–T063 | US5 | 5 of 7 |
| Phase 7: Cross-Cutting | T064–T073 | — | 6 of 10 |
| **Total** | **T001–T073 (73 tasks)** | **5 stories** | **53 of 73** |

### User Story to Task Mapping

| Story | Tasks | Independent Test |
|-------|-------|-----------------|
| US1: Admin — full security | T001–T002, T005–T008, T031–T032, T039–T051, T053–T056 | Login as super admin, verify policy gates; 65 rapid API requests → expect 429; inspect headers for CSP/HSTS |
| US2: Employee — inventory/orders | T021, T052 | Create/update/delete items via forms; verify validation errors; confirm Employee cannot delete (403) |
| US3: Financial operator — payments | T012–T020, T025–T026 | Create fee invoice with multiple parts; verify DB rollback on failure; PaymentService contains extracted logic |
| US4: Admin — system health | T003–T004, T009–T010, T023–T024, T027–T030, T036–T038 | Dispatch log entry, confirm in activity_logs after queue worker; `EXPLAIN SELECT` uses indexes; `schedule:run` executes backup |
| US5: Developer — test suite | T057–T063 | `php artisan test --compact` exits 0 |

---

## Dependencies & Execution Order

### Phase Dependencies

```
Phase 1 (Foundation)  → no dependencies — start immediately
Phase 2 (Form Req.)   → depends on Phase 1 model layer (already complete)
Phase 3 (Biz Logic)   → depends on Phase 1 + Phase 2
Phase 4 (Security)    → depends on Phase 1 + Phase 2 + Phase 3
Phase 5 (Routes)      → depends on Phase 3 (controllers exist)
Phase 6 (Tests)       → depends on all prior phases complete
Phase 7 (Cross-cut)   → independent — can run last after tests pass
```

Phases MUST be executed in dependency order within the same phase. Tasks marked [P] within a phase can run in parallel.

### Within Each Phase

- Tests (if included) MUST be written and FAIL before implementation
- Services before controller refactoring
- Models/policies before registration
- Run `quickstart.md` validation after each phase before proceeding to the next

---

## Parallel Execution Examples

```bash
# Phase 1 — Foundation (run all in parallel):
php artisan storage:link                          # T002
# Edit .env for QUEUE_CONNECTION                  # T003
# Create SecurityHeadersMiddleware.php             # T006
# Create migration for indexes                    # T009

# Phase 3 — Business Logic (extract services in parallel):
# Create DashboardService.php                     # T023
# Create PaymentService.php                       # T025
# Create StudentQueryService.php                  # T027
# Create InvoiceQueryService.php                  # T029
# Create UserService.php                          # T031

# Phase 4 — Security (create policies in parallel):
# Create StudentPolicy.php                        # T039
# Create FeeInvoicePolicy.php                     # T040
# Create UserPolicy.php                           # T041
# Create InventoryItemPolicy.php                  # T042
# Create InventoryOrderPolicy.php                 # T043
# Create GradePolicy.php                          # T044
# Create ClassPolicy.php                          # T045
# Create EmployeePolicy.php                       # T046

# Phase 6 — Tests (create test files in parallel):
# Create InventoryItemTest.php                    # T058
# Create InventoryOrderTest.php                   # T059
# Create AuthTest.php                             # T060
# Create ActivityLogTest.php                      # T061
# Create FinancialTest.php                        # T062
```

---

## Implementation Strategy

### MVP First (US1 + US2 — P1)

1. Complete Phase 1: Foundation (T001–T011)
2. Complete Phase 2: Form Requests for inventory (T021–T022)
3. Complete Phase 5: Route cleanup for inventory (T052)
4. Complete Phase 4: Security (T039–T051) — needed for auth
5. **STOP and VALIDATE**: US1 (all policies work), US2 (inventory CRUD works)
6. Deploy/demo if ready

### Incremental Delivery

| Step | Phases | Value |
|------|--------|-------|
| 1 | Phase 1 | Infrastructure hardened |
| 2 | + Phase 2 (inventory FRs) | Input validation complete |
| 3 | + Phase 4 (security) | Authorization in place |
| 4 | + Phase 5 (routes inventory) | Clean URLs |
| 5 | **→ MVP ready (US1 + US2)** | **Deploy/demo** |
| 6 | + Phase 3 (payment service) | Financial extracted |
| 7 | + Phase 2 (financial FRs) | Financial validation |
| 8 | + Phase 5 (routes rest) | All routes clean |
| 9 | + Phase 6 (tests) | Test coverage |
| 10 | + Phase 7 (cross-cut) | Dead code removed, verified |
| 11 | **→ Full delivery** | **All 5 stories verified** |

### Validation After Each Phase

Run the corresponding validation commands from `quickstart.md` after each phase before proceeding.
