# Unified Master Plan — iSchool Management System

> **Last updated**: 2026-07-17 (codebase-verified)
> **Stack**: Laravel 10, Livewire 4, Tailwind CSS 4, Alpine.js, Spatie Permission, Sanctum
> **Status**: ~60% complete — core infrastructure done, integration & polish remaining

---

## Quick Status

| Area | Done | Remaining | % |
|------|------|-----------|---|
| Schedule Enhancement | 6 | 3 | 67% |
| Foundation (infra) | 8 | 3 | 73% |
| Form Requests | 7 | 10 | 41% |
| Services (business logic) | 4 | 12 | 25% |
| Policies (security) | 1 | 12 | 8% |
| Routes (conventions) | 0 | 4 | 0% |
| Tests | 8 | 5 | 62% |
| Cleanup (dead code) | 5 | 4 | 56% |
| Translations | 85% | ~40 keys | 85% |
| UI Migration (spec 004+005) | 80% | ~20 tasks | 80% |
| Smart Table Polish | 13 | 0 | 100% |

---

## What's DONE (verified in codebase)

### Infrastructure
- **T001** APP_KEY, DB_DATABASE, QUEUE_CONNECTION, APP_URL present
- **T002** Storage symlink exists
- **T005** throttle:api verified in Kernel.php
- **T006** SecurityHeadersMiddleware created
- **T007** SecurityHeadersMiddleware registered in Kernel.php global middleware
- **T008** Custom error views: 401, 402, 403, 404, 419, 429, 500, 503
- **T009** Index migration created (`add_indexes_to_frequent_queries`)
- **T010** Backup schedule (dailyAt 14:00)
- **T064** Verified zero occurrences of 'payed'/'notpayed' in code
- **T065** Payed-to-paid column rename migration created
- **T067** EagerLoadingTrait removed (file doesn't exist)
- **T068** ViewServiceProvider removed (file doesn't exist)
- **T070** Unused pagination templates removed (only `tailwind.blade.php` remains)

### Services Created
- **T023** DashboardService.php
- **T025** PaymentService.php
- **T029** InvoiceQueryService.php
- **T031** UserService.php
- Bonus: PromotionService.php, CacheService.php (not in original plan)

### Policies Created (all 8)
- StudentPolicy, FeeInvoicePolicy, UserPolicy, InventoryItemPolicy, InventoryOrderPolicy, GradePolicy, ClassPolicy, EmployeePolicy
- **NOTE**: All 8 still use deprecated `HandlesAuthorization` trait — needs cleanup

### Form Requests Created
- StorePaymentRequest, UpdatePaymentRequest
- StoreExchangeBondRequest, UpdateExchangeBondRequest
- StoreFeeInvoiceRequest, UpdateFeeInvoiceRequest
- Plus: JobRequest, ReceiptPaymentRequest, PromotionRequest, ClassRoomRequest, GradeStoreRequest, etc.

### Schedule Enhancement
- **T003-T007**: autoGenerate(), teacher/classroom/grade PDF views, SchedulePrintController
- Schedule translation keys (print_pdf, download_pdf, weekly_schedule, etc.) added

### Smart Table Polish
- Theme token migration complete (bg-primary, bg-surface, text-text-primary, etc.)
- SVG sort indicators, focus rings, transitions, pill-shaped buttons
- Backward-compatible API format support (legacy + standard Laravel pagination)

### Tests (35 files)
- Feature: InventoryItemTest, InventoryOrderTest, FinancialTest, ActivityLogTest, GradeCrudTest, ClassRoomCrudTest, RouteTest, DashboardRedesignTest, ScheduleEnhancementTest, SmartTableComponentTest, ProfileTest, ExampleTest
- Feature/UI: 9 test files (LayoutShellTest, SidebarRoleTest, SettingsHubTest, etc.)
- Feature/Auth: 6 test files (AuthenticationTest, RegistrationTest, etc.)
- Feature/Livewire: DataTableDriverTest
- Unit/Models: UserTest, StudentTest, FeeInvoiceTest, ClassRoomTest
- Unit: ExampleTest

### Translations
- fallback_locale fixed (ar → en)
- 53 missing English keys added across 15 file pairs
- Validation placeholders fixed in ar/validation.php
- Typo fixes applied (maual → manual, etc.)

### UI Migration (Specs 004 + 005)
- Component library: card, button, status-badge, data-table, modal, tabs
- Layout shell, sidebar, topbar
- Dashboard, settings hub, list pages, detail pages
- Mobile responsive, accessibility (WCAG 2.1 AA contrast verified)

---

## What's REMAINING

### Phase 1: Schedule Polish (3 tasks) — ~1 hour

- [ ] **T01** Add remaining translation keys: `generation_summary`, day short names, `print_type`, `select_print_type` to `lang/{ar,en}/schedules.php`
- [ ] **T02** Add `wire:loading` indicators to Schedules Livewire component buttons + confirmation dialog on autoGenerate
- [ ] **T03** Run verification: `php artisan view:clear && cache:clear`, verify routes, pint, test suite

### Phase 2: Foundation (3 tasks) — ~1.5 hours

- [ ] **T004** Configure queue worker: create Supervisor config for `logs` queue OR document cron alternative
- [ ] **T011** Document cron setup: `* * * * * php /path/to/artisan schedule:run >> /dev/null 2>&1`
- [ ] **T022** Add `school_id` scoping validation to all Form Requests where applicable

### Phase 3: Form Requests — Binding & Missing (10 tasks) — ~2 hours

Already created but NOT bound to controllers:
- [ ] **T018** Bind StorePaymentRequest/UpdatePaymentRequest in PaymentPartsController
- [ ] **T019** Bind StoreExchangeBondRequest/UpdateExchangeBondController in ExchangeBondController
- [ ] **T020** Bind StoreFeeInvoiceRequest/UpdateFeeInvoiceRequest in FeeInvoiceController

Still using `Request $request` instead of Form Requests:
- [ ] **T027** Create Form Request for ClassRoomsController (store/update use raw Request)
- [ ] **T028** Create Form Request for ClassesController (store/update use raw Request)
- [ ] **T029** Create Form Request for ReceiptPaymentController (store/update use raw Request)
- [ ] **T030** Create Form Request for ExceptionFeesController (store/update use raw Request)
- [ ] **T031** Create Form Request for UserController (store/update use raw Request)
- [ ] **T032** Create Form Request for RoleController (store/update use raw Request)
- [ ] **T033** Create Form Request for JobController (store/update use raw Request)

### Phase 4: Business Logic — Refactoring (12 tasks) — ~4 hours

Services exist but controllers not fully refactored:
- [ ] **T024** Refactor HomeController to delegate to DashboardService
- [ ] **T026** Refactor ReceiptPaymentController to delegate to PaymentService

Services still needed:
- [ ] **T027b** Create StudentQueryService (filter/sort/join logic from StudentsController::index)

Transaction wrapper:
- [ ] **T033** Add `executeInTransaction()` to base Controller class

N+1 / Redundant queries (CRITICAL — from db-query-performance-analysis.md):
- [ ] **T036** Fix ExceptionFeesController::update() — 4 redundant `Student::where()` queries (lines 180-205). Should fetch Student ONCE and reuse.
- [ ] **T037** Fix ReceiptPaymentController::update() — Student fetched separately for grade_id and classroom_id. Should fetch ONCE.
- [ ] **T038** Fix ReportController::books_sheets() — missing `school_id` filter (line 153). Other report methods have it.

Code quality (from analysis.md):
- [ ] **T039** Remove `get_defined_vars()` from 45 controller methods — use `compact()` instead
- [ ] **T040** Fix `->with('fees')->first()` after `findorfail()` pattern ( meaningless after model loaded)
- [ ] **T041** Unify error handling: `session()->flash()` vs `->with()` across controllers

### Phase 5: Security — Authorization Integration (10 tasks) — ~3 hours

Policies exist but NOT integrated:
- [ ] **T047** Register all 8 policies in AuthServiceProvider `$policies` array
- [ ] **T048** Add `$this->authorize()` calls to controller actions
- [ ] **T049** Fix `authorize()` method in 20 Form Request classes (currently `return true`)
- [ ] **T050** Add `can:` middleware to routes in `routes/reports.php`
- [ ] **T051** Add auth middleware to `/monitor` route in `routes/security.php`
- [ ] **T059** Remove deprecated `HandlesAuthorization` trait from all 8 policies

### Phase 6: Routes — Convention Cleanup (4 tasks) — ~1.5 hours

- [ ] **T052** Move `/{type}` catch-all to END of items group in `routes/inventory.php`
- [ ] **T053** Add `->name()` to all routes in `routes/api.php`
- [ ] **T055** Convert `POST /update` → `PUT /{id}` patterns
- [ ] **T056** Convert snake_case URL segments → kebab-case across all route files

### Phase 7: Tests — Missing Coverage (5 tasks) — ~2.5 hours

No tests exist for:
- [ ] **T058** ReceiptPaymentController
- [ ] **T059b** ExchangeBondController
- [ ] **T059c** ExceptionFeesController
- [ ] **T059d** PaymentPartsController
- [ ] **T059e** All Policies (8 policies, zero tests)

### Phase 8: Cleanup (4 tasks) — ~1.5 hours

- [ ] **T066** Audit all Eloquent models for missing `$fillable`/`$guarded`
- [ ] **T069** Remove dead `PDFExportService`/`ReportService` from `app/Services/Reports/`
- [ ] **T071** Run `php artisan test --compact` after cleanup
- [ ] **T072** Run `php artisan route:list` smoke test

### Code Quality (from analysis.md — not in spec tasks)

- [ ] **CQ01** Fix naming: `promotionController` → `PromotionController`
- [ ] **CQ02** Fix naming: `fund_accountsController` → `FundAccountsController`
- [ ] **CQ03** Fix naming: `schedulesController` → `SchedulesController`
- [ ] **CQ04** Add rate limiting on web routes
- [ ] **CQ05** Fix `'EGP'` hardcoded currency → config value
- [ ] **CQ06** Fix `AcademicYear::where('status', '0')` hardcoded → config
- [ ] **CQ07** Fix `where('status', 'false')` string → proper boolean
- [ ] **CQ08** Fix `->paginate(10)` hardcoded → config or variable

### Translation Keys (from fix-all-missing-keys-plan.md)

~40 keys still missing across namespaces:
- `enums.php`: 3 new sections (inventory_order_status, inventory_order_type, transaction_type)
- `log.php`: 8 missing keys (SchoolFee, user status, parents, orders)
- `general.php`: 16 missing keys (showing, cancel, save, balance, chart, etc.)
- `auth.php`: 1 key (session_expired)
- `Sidebar.php`: 2 keys (ReceiptPayment, main_navigation)
- 5 namespace mismatches: grade→Grades, classrooms→class_rooms, fee_invoices→fee_invoice, receipt→Recipt_Payments, FundAccount→fund_account
- Dashboard plain-text keys → namespaced (16 keys in HomeController)

### UI Verification (from specs 004+005 — manual testing)

~20 manual verification tasks remaining (keyboard nav, ARIA, mobile breakpoints, performance, etc.)

---

## Execution Order

```
Phase 1 (Schedule Polish) ─────────── 3 tasks, ~1h
         ↓
Phase 2 (Foundation) ──────────────── 3 tasks, ~1.5h
         ↓
Phase 3 (Form Requests) ───────────── 10 tasks, ~2h
         ↓
Phase 4 (Business Logic) ──────────── 12 tasks, ~4h  ← biggest chunk
         ↓
Phase 5 (Security Integration) ────── 10 tasks, ~3h
         ↓
Phase 6 (Routes) ──────────────────── 4 tasks, ~1.5h
         ↓
Phase 7 (Tests) ───────────────────── 5 tasks, ~2.5h
         ↓
Phase 8 (Cleanup) ─────────────────── 4 tasks, ~1.5h
         ↓
Code Quality + Translations ────────── 12 tasks, ~3h
         ↓
UI Verification (manual) ───────────── 20 tasks, ~4h
```

**Total remaining**: ~70 tasks, ~25-30 hours

---

## Parallel Opportunities

| Phase | Parallel Tasks |
|-------|---------------|
| Phase 3 | Create all 7 missing Form Requests simultaneously |
| Phase 4 | Fix all N+1 queries simultaneously; remove get_defined_vars simultaneously |
| Phase 5 | Register policies + add authorize calls can overlap |
| Phase 7 | Create all 5 test files simultaneously |
| Translations | All 13 file pairs can be updated in parallel |

---

## Critical Path

```
Foundation (queue, cron) → Form Requests → Service Refactoring → Policy Integration → Routes → Tests → Cleanup
```

The biggest bottleneck is **Phase 4 (Business Logic)** — 12 tasks including N+1 fixes, get_defined_vars removal, and controller refactoring. Prioritize this after Form Requests.

---

## Source Documents

| Doc | Content |
|-----|---------|
| `analysis.md` | Full codebase audit: 9 categories of issues, 50+ specific problems |
| `dashboard-redesign-plan.md` | Dashboard UX: visual foundation, sidebar, KPI cards, charts |
| `schedule-enhancement-design.md` | Auto-distribution algorithm, print routes/views |
| `UI-Migration-Plan.md` | 10-phase Bootstrap→Tailwind+Alpine migration plan |
| `smart-table-improvements.md` | Smart table architecture: API contract, features, migration path |
| `fix-missing-translations-plan.md` | Translation fixes: fallback_locale, 53 missing keys, validation |
| `fix-all-missing-keys-plan.md` | 3 categories: namespace mismatches (5), missing keys (57), plain-text (47) |
| `a11y-contrast-notes.md` | WCAG 2.1 AA contrast verification for all components |
| `db-query-performance-analysis.md` | 17 performance issues: 5 critical, 5 significant, 7 minor |
| `operations-setup.md` | Cron scheduler + Supervisor queue worker config |
| `superpowers/plans/` | Smart table visual polish plan (3 tasks — DONE) |
| `superpowers/specs/` | Smart table polish design spec |
| `specs/001-fix-all-project-issues/` | 73-task spec: foundation, forms, services, security, routes, tests, cleanup |
| `specs/002-permission-middleware/` | Permission middleware (COMPLETE) |
| `specs/003-fix-smart-table/` | Smart table fix (COMPLETE) |
| `specs/004-ui-migration-spec/` | UI migration component specs |
| `specs/005-ui-migration-plan/` | UI migration implementation plan |

---

## Notes

- Arabic RTL layout must be maintained in all new views
- Use `protected $casts = []` on models (not `casts()` method) for Laravel 10
- Run `vendor/bin/pint --dirty --format agent` after each task
- Run `php artisan test --compact` with filter for test verification
- All 8 policies use deprecated `HandlesAuthorization` trait — must be removed
- `get_defined_vars()` is used in 45 places — biggest code quality issue
- ExceptionFeesController::update() has 4 redundant Student queries — biggest performance issue
