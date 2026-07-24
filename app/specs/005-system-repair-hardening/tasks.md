# Tasks: System Repair & Hardening

> **Feature**: specs/005-system-repair-hardening
> **Generated**: 2026-07-12
> **Total Tasks**: 67

---

## Phase 1: Schedule Polish [US1]

- [x] T001 [US1] Add 9 missing English translation keys to `lang/en/schedules.php` (print_pdf, download_pdf, weekly_schedule, no_schedule, auto_generate_confirm, generation_summary, day short names, print_type, select_print_type)
- [x] T002 [US1] Add 9 missing Arabic translation keys to `lang/ar/schedules.php` (matching all English keys from T001)
- [x] T003 [US1] Add `wire:loading` indicators and Alpine.js confirmation dialog to `resources/views/livewire/Schedules/Schedules.blade.php`
- [x] T004 [US1] Verify schedule translation keys render correctly by running `php artisan test --compact --filter=schedule`
- [x] T005 [US1] Verify `wire:loading` indicators appear on auto-generate button by manual testing
- [x] T006 [US1] Run `vendor/bin/pint --dirty --format agent` on schedule-related files

**Verify**: `grep -c "=>" lang/en/schedules.php` returns ~51, `php artisan test --compact --filter=schedule` passes.

---

## Phase 2: Foundation [US8]

- [x] T007 [P] [US8] Create security headers middleware at `app/Http/Middleware/SecurityHeadersMiddleware.php` — adds CSP (`default-src 'self'; script-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline'; img-src 'self' data:`), HSTS, X-Frame-Options, X-Content-Type-Options
- [x] T008 [US8] Register SecurityHeadersMiddleware in global `$middleware` array in `app/Http/Kernel.php`
- [x] T009 [P] [US8] Create database index migration at `database/migrations/2026_07_03_000001_add_indexes_to_frequent_queries.php` — indexes on `student_accounts.type`, `activity_logs.action`, `inventory_items.category`
- [x] T010 [P] [US8] Create column rename migration at `database/migrations/2026_07_03_000002_fix_payed_to_paid.php` — rename `payed`→`paid`, `notpayed`→`not_paid` (only if columns exist)
- [x] T011 [US8] Add `executeInTransaction(callable $callback): mixed` method to base controller at `app/Http/Controllers/Controller.php`
- [x] T012 [US8] Create documentation file with cron setup (`* * * * * php artisan schedule:run >> /dev/null 2>&1`) and queue worker Supervisor config for `logs` queue — produces a markdown doc for operations team, not a deployment config

**Verify**: `php artisan migrate --pretend` succeeds, `curl -I http://localhost:8000/ | grep -i content-security-policy` returns match.

---

## Phase 3: Form Requests [US2]

- [x] T013 [P] [US2] Create `app/Http/Requests/StorePaymentRequest.php` — validates student_id (required|exists:students,id), amount (required|numeric|min:0.01), type (required|in:cash,bank), date (required|date), fund_account_id (required|exists:fund_accounts,id)
- [x] T014 [P] [US2] Create `app/Http/Requests/UpdatePaymentRequest.php` — validates student_id (required|exists:students,id), amount (required|numeric|min:0.01), date (required|date)
- [x] T015 [P] [US2] Create `app/Http/Requests/StoreExchangeBondRequest.php` — validates student_id (required|exists:students,id), amount (required|numeric|min:0.01), type (required|in:receive,pay), date (required|date)
- [x] T016 [P] [US2] Create `app/Http/Requests/UpdateExchangeBondRequest.php` — same rules as StoreExchangeBondRequest
- [x] T017 [P] [US2] Create `app/Http/Requests/StoreFeeInvoiceRequest.php` — validates list_fees (required|array|min:1), list_fees.*.student_id (required|exists:students,id), list_fees.*.fee (required|numeric|min:0)
- [x] T018 [P] [US2] Create `app/Http/Requests/UpdateFeeInvoiceRequest.php` — same rules as StoreFeeInvoiceRequest
- [x] T019 [US2] Bind StorePaymentRequest and UpdatePaymentRequest in `app/Http/Controllers/PaymentPartsController.php` store/update methods
- [x] T020 [US2] Bind StoreExchangeBondRequest and UpdateExchangeBondRequest in `app/Http/Controllers/ExchangeBondController.php` store/update methods
- [x] T021 [US2] Bind StoreFeeInvoiceRequest and UpdateFeeInvoiceRequest in `app/Http/Controllers/FeeInvoiceController.php` store/update methods
- [x] T022 [US2] Add `school_id` scoping validation to Form Requests where model has `school_id` column

**Verify**: `php artisan test --compact` still passes after controller changes.

---

## Phase 4: Service Layer Extraction [US3]

- [x] T023 [P] [US3] Create `app/Services/DashboardService.php` — extract getUserRoleCounts(), getFinancialData(), generateChartData(), getMonthlyRevenueTrend() from HomeController
- [x] T024 [P] [US3] Create `app/Services/PaymentService.php` — extract handleFeeInvoice(), handlePartialPayment(), handleFullPayment(), handleExchangeBond() from ReceiptPaymentController
- [x] T025 [P] [US3] Create `app/Services/StudentQueryService.php` — extract getFilteredQuery(), applyFilters(), applySorts() from StudentsController::index()
- [x] T026 [P] [US3] Create `app/Services/InvoiceQueryService.php` — extract getFilteredQuery(), applyDynamicFilters() from FeeInvoiceController::index()
- [x] T027 [P] [US3] Create `app/Services/UserService.php` — extract assignFields(), prepareUserData() from UserController::store() and ::update()
- [x] T028 [US3] Refactor `app/Http/Controllers/HomeController.php` to delegate to DashboardService — target <200 lines
- [x] T029 [US3] Refactor `app/Http/Controllers/ReceiptPaymentController.php` to delegate to PaymentService — target <250 lines
- [x] T030 [US3] Refactor `app/Http/Controllers/Students/StudentsController.php` to delegate to StudentQueryService — target <250 lines
- [x] T031 [US3] Refactor `app/Http/Controllers/FeeInvoiceController.php` to delegate to InvoiceQueryService — target <250 lines
- [x] T032 [US3] Refactor `app/Http/Controllers/UserController.php` to delegate to UserService — target <200 lines
- [x] T033 [US3] Replace DB::beginTransaction/commit/rollback with $this->executeInTransaction() across 12 controllers (ReceiptPaymentController, UserController, GradesController, FeeInvoiceController, ExchangeBondController, ExceptionFeesController, promotionController, SettingsController, SetupController, ClassRoomsController, ClassesController)
- [x] T034 [US3] Add eager loading to StudentQueryService: with('grade', 'classroom', 'parent')
- [x] T035 [US3] Add eager loading to InvoiceQueryService: with('fees', 'student')
- [x] T036 [US3] Add eager loading to ReportService: with() for related models

**Verify**: `wc -l` under target for each refactored controller, `grep -r "DB::beginTransaction" app/Http/Controllers/` returns 0 matches.

---

## Phase 5: Authorization Policies [US4]

- [x] T037 [P] [US4] Create `app/Policies/StudentPolicy.php` — view/create→add_student, update→edit_student, delete→delete_student
- [x] T038 [P] [US4] Create `app/Policies/FeeInvoicePolicy.php` — view/create→add_fee_invoice, update→edit_fee_invoice, delete→delete_fee_invoice
- [x] T039 [P] [US4] Create `app/Policies/UserPolicy.php` — view/create→add_user, update→edit_user, delete→delete_user
- [x] T040 [P] [US4] Create `app/Policies/InventoryItemPolicy.php` — view/create→add_inventory, update→edit_inventory, delete→delete_inventory
- [x] T041 [P] [US4] Create `app/Policies/InventoryOrderPolicy.php` — view/create→add_inventory_order, update→edit_inventory_order, delete→delete_inventory_order
- [x] T042 [P] [US4] Create `app/Policies/GradePolicy.php` — view/create→add_grade, update→edit_grade, delete→delete_grade
- [x] T043 [P] [US4] Create `app/Policies/ClassPolicy.php` — view/create→add_class, update→edit_class, delete→delete_class
- [x] T044 [P] [US4] Create `app/Policies/EmployeePolicy.php` — view→view_employee, create→add_employee, update→edit_employee, delete→delete_employee
- [x] T045 [US4] Register all 8 policies in `$policies` array in `app/Providers/AuthServiceProvider.php`
- [x] T046 [US4] Add $this->authorize() calls to controller actions across applicable controllers (StudentsController, FeeInvoiceController, UserController, InventoryItemController, InventoryOrderController, GradesController, ClassRoomsController)
- [x] T047 [US4] Fix authorize() methods in Form Request classes to check `$this->user()->can('permission_key')` instead of `return true` — skip Auth/LoginRequest and ProfileUpdateRequest which don't need permission checks; apply to all others including 13 root-level requests, 5 Inventory requests, and Student/StudentStoreRequest
- [x] T048 [US4] Add `can:` middleware with permission keys to routes in `routes/reports.php`
- [x] T049 [US4] Add auth + authorization middleware to `/monitor` route in `routes/security.php`

**Verify**: `grep -r "this->authorize" app/Http/Controllers/` returns matches, `grep -A3 "function authorize" app/Http/Requests/*.php` shows permission checks.

---

## Phase 6: Route Convention Cleanup [US5]

- [x] T050 [US5] Move `/{type}` catch-all route to END of items group in `routes/inventory.php`
- [x] T051 [P] [US5] Add `->name()` to all 11+ routes in `routes/api.php`
- [x] T052 [US5] Convert POST /update to PUT /{id} in `routes/inventory.php` (orders, gard groups) and `routes/security.php` — update Blade forms with `@method('PUT')`
- [x] T053 [US5] Convert snake_case URL segments to kebab-case in `routes/web.php`, `routes/reports.php`, `routes/employees.php`, `routes/academic.php`, `routes/security.php`

**Verify**: `grep "POST.*update" routes/inventory.php` returns 0 matches, `grep "GET.*destroy" routes/` shows minimal matches.

---

## Phase 7: Tests [US6]

- [x] T054 [P] [US6] Create `tests/Feature/InventoryItemTest.php` — CRUD tests (valid/invalid data, authorization negatives), status transitions
- [x] T055 [P] [US6] Create `tests/Feature/InventoryOrderTest.php` — CRUD + status transition tests (pending→confirmed→completed, cancelled/returned terminal)
- [x] T056 [P] [US6] Create `tests/Feature/ActivityLogTest.php` — listing, filtering by action/type, pagination tests
- [x] T057 [P] [US6] Create `tests/Feature/FinancialTest.php` — FeeInvoice creation, PaymentParts processing, ExchangeBond creation (valid/invalid, authorization negatives)
- [x] T058 [US6] Run full test suite `php artisan test --compact` and fix any failures until exit code 0

---

## Phase 8: Cleanup [US7]

- [x] T059 [P] [US7] Remove dead `app/Http/Traits/EagerLoadingTrait.php` — verify zero imports with grep
- [x] T060 [P] [US7] Remove dead `app/Providers/ViewServiceProvider.php` and unregister from `config/app.php`
- [x] T061 [P] [US7] Remove 8 unused pagination templates from `resources/views/vendor/pagination/` — keep only `tailwind.blade.php`
- [x] T062 [US7] Audit all Eloquent models in `app/Models/` for missing `$fillable` or `$guarded` properties — add if missing
- [x] T063 [US7] Run full test suite after cleanup: `php artisan test --compact`
- [x] T064 [US7] Run code style check: `vendor/bin/pint --dirty --format agent`

**Verify**: `ls resources/views/vendor/pagination/` shows 1 file, `php artisan test --compact` passes, `php artisan route:list` loads without errors.

---

## Phase 9: Manual Verification [US9]

- [ ] T065 [US9] Perform UI verification per spec Scenario 9: sidebar collapse/expand/search/pin/mobile, dashboard KPIs/charts/tables, CRUD list filter/sort/paginate/modal, detail page tabs/row actions, settings responsive reflow (3→2→1 columns)
- [ ] T066 [US9] Perform accessibility audit per spec Scenario 10: keyboard navigation through sidebar/tables/forms, color contrast WCAG 2.1 AA, screen reader navigation, DataTable filter+sort+paginate <10s, detail page load <2s, mobile 375px no cutoff/scroll

---

## US Mapping

| tasks.md US | Spec Scenario | Description |
|-------------|---------------|-------------|
| US1 | Scenario 1 | Schedule Feature Polish |
| US2 | Scenario 3 | Input Validation Layer |
| US3 | Scenario 4 | Service Layer Extraction |
| US4 | Scenario 5 | Authorization Policies |
| US5 | Scenario 6 | Route Convention Cleanup |
| US6 | Scenario 7 | Test Coverage |
| US7 | Scenario 8 | Dead Code Cleanup |
| US8 | Scenario 2 | Infrastructure Hardening |
| US9 | Scenarios 9-10 | UI Verification + Accessibility Audit |

---

## Dependencies

```
Phase 1 (Schedule Polish) — independent
Phase 2 (Foundation) ──→ Phase 3 (Form Requests) ──→ Phase 4 (Services) ──→ Phase 5 (Policies) ──→ Phase 7 (Tests) ──→ Phase 8 (Cleanup)
                                        │
                                        └──→ Phase 6 (Routes)

Phase 9 (Manual Verification) — after all automated phases complete
```

## Parallel Opportunities

| Phase | Parallel Tasks |
|-------|---------------|
| 1 | T001, T002 (sequential — same files) |
| 2 | T007, T009, T010 (independent files) |
| 3 | T013-T018 (create 6 Form Requests — all parallel) |
| 4 | T023-T027 (create 5 services — all parallel) |
| 5 | T037-T044 (create 8 policies — all parallel) |
| 7 | T054-T057 (create 4 tests — all parallel) |
| 8 | T059-T061 (delete files — all parallel) |

## Independent Test Criteria

| Story | Test |
|-------|------|
| US1 (Schedule Polish) | `php artisan test --compact --filter=schedule` passes, translations render |
| US2 (Form Requests) | `php artisan test --compact` passes, form validation rejects invalid data |
| US3 (Service Layer) | `wc -l` under target for all refactored controllers, no DB::beginTransaction in controllers |
| US4 (Authorization) | `$this->authorize()` in controllers, policies registered, Form Requests check permissions |
| US5 (Routes) | No POST update, no snake_case URLs, catch-all last, API routes named |
| US6 (Tests) | `php artisan test --compact` exit code 0 |
| US7 (Cleanup) | Dead files removed, pagination templates reduced, models audited |
| US8 (Infrastructure) | Security headers present, migrations run, documentation created |
| US9 (Manual Verification) | UI scenarios pass, accessibility/performance benchmarks met |

## MVP Scope

**US1 (Schedule Polish)** + **US2 (Form Requests)** + **US7 (Cleanup)** — minimal risk, immediate value, no interdependencies.

## Implementation Strategy

1. **Start with Phase 2 (Foundation)** — security headers and migrations are standalone, low risk
2. **Then Phase 3 (Form Requests)** — pure additions, no existing code changes
3. **Then Phase 4 (Services)** — highest effort, most value (controller size reduction)
4. **Then Phase 5 (Policies)** — policies are pure additions
5. **Then Phase 6 (Routes)** — breaking changes, do after services are stable
6. **Then Phase 7 (Tests)** — validate everything works
7. **Finally Phase 8 (Cleanup)** — remove dead code last
8. **Phase 9 (Manual Verification)** — after all automated phases complete
