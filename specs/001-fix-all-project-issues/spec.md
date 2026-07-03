# Specification: Complete System Repair — Fix All Project Issues

**Source Plan**: `app/docs/MASTER_MERGED_PLAN.md` (517 lines, v2 dated 2026-06-28)
**Current Progress**: ~98/153 tasks complete (64%). ~55 tasks remain across 7 phases.

---

## Overview

The school management system has accumulated technical debt across its inventory, financial, reporting, and security layers. A unified master plan was created merging 4 prior treatment plans. This specification covers all remaining work to bring the system to a stable, production-ready state.

The remaining work spans 7 dependency-ordered phases: Foundation (infrastructure), Input Layer (Form Requests), Business Logic (controller refactoring), Security (policies/authorization), Routes (convention cleanup), and Tests (verification). Additionally, a cross-cutting spelling fix (`payed` → `paid`) and 8 infrastructure items (`.env` check, queue setup, rate limiting, etc.) must be completed.

---

## Clarifications

### Session 2026-07-03

- Q: User roles and permission model for Phase 5 authorization → A: Map policies to the existing 30+ permission granularity already defined in the system. Default role tiers: Super Admin (all), Admin (most), Financial Operator (financial routes), Employee (limited). No new role system created.
- Q: InventoryOrder status lifecycle for T3 transition tests → A: 5 states — `pending`, `confirmed`, `completed`, `cancelled`, `returned`. Forward transitions: pending→confirmed→completed. Cancelled and returned are terminal from any non-terminal state.
- Q: Expected data volume and scale → A: Multi-school moderate scale — 2-20 schools, 500-5K students, 20-100 staff, <50K inventory items, <500 orders/month.
- Q: N+1 query optimization approach → A: Fix N+1 as part of Phase 4 controller refactoring. Add eager loading (`with()`) to StudentQueryService, InvoiceQueryService, and ReportService methods. No separate phase needed.
- Q: Backup and disaster recovery approach → A: Add a DB backup task to the cron schedule (alongside existing `schedule:run` verification). Verify backup files are created successfully.
- Q: Transaction rollback semantics for `executeInTransaction()` in multi-part payments → A: All-or-nothing. Any failure in any payment part rolls back ALL parts within the same transaction. Nested savepoints are not used.
- Q: Dead code removal verification method for F8.2 → A: Test suite + targeted smoke test. Run `php artisan test` after removal, then manually smoke-test each removed item's dependent paths to confirm no runtime breakage.

---

## User Stories & Testing

### User Scenarios

The system uses an existing permission model with 30+ granular permissions. Four role tiers exist:
- **Super Admin** — Full access to all modules
- **Admin** — CRUD on most entities, no system configuration changes
- **Financial Operator** — Access limited to financial routes (fee invoices, payments, exchange bonds)
- **Employee** — Read and create on assigned modules, no delete

#### US1: Admin accesses the system with full security
- Admin logs in, all routes enforce proper authorization via policies mapped to existing permissions
- API routes have rate limiting applied; brute force attempts are throttled
- Security headers (CSP, HSTS, X-Frame-Options) protect all pages
- Custom error pages (401–503) display properly instead of Laravel defaults
- **Verification**: Login as super admin, verify policy gates work; hit API with rapid requests and confirm 429; inspect response headers for CSP/HSTS

#### US2: Employee manages inventory items and orders
- Employee visits inventory item list with correct route ordering (catch-all `/{type}` does not block `/create/{type}`)
- All CRUD actions use proper Form Request validation with `exists:` rules and school_id scoping
- Employee can create and view items but cannot delete; admin can delete
- Stock PDF reports (6 unified functions) display correct data using InventoryItem type/category
- **Verification**: Create/update/delete items via forms; verify validation errors appear for invalid inputs; verify PDF reports generate correctly; confirm delete returns 403 for Employee role

#### US3: Financial operator processes payments and bonds
- Financial operator creates payment parts, exchange bonds, and fee invoices using dedicated Form Requests
- ReciptPaymentController (504 lines) has been refactored: payment logic extracted to PaymentService
- Transaction handling is unified via `executeInTransaction()` in the Base Controller
- Non-financial routes return 403 for financial operator
- **Verification**: Create a fee invoice with multiple payment parts; verify DB transaction rolls back on failure; confirm PaymentService contains the extracted logic; verify financial operator cannot access inventory delete

#### US4: Admin monitors system health
- Queue worker processes activity logs asynchronously (`QUEUE_CONNECTION=database`)
- `php artisan queue:work --queue=logs` consumes queued log entries
- Database indexes exist on `student_accounts.type`, `activity_logs.action`, `inventory_items.category`
- Scheduled tasks run via cron (`schedule:run`)
- **Verification**: Dispatch a log entry; confirm it appears in the activity_logs table after queue worker runs; verify `EXPLAIN SELECT` uses the new indexes

#### US5: Developer runs the test suite
- Test database uses SQLite in-memory (`phpunit.xml` configured)
- Tests exist for: InventoryItem CRUD, InventoryOrder CRUD + status transitions, Auth (login/logout/permissions), ActivityLog (index/filters/pagination), Financial (FeeInvoice, PaymentParts, ExchangeBond)
- Permission tests verify each role tier can/cannot access protected endpoints
- All tests pass with `php artisan test` — zero failures
- **Verification**: Run `php artisan test --compact` and confirm all tests pass

### Edge Cases

- **EC1**: Legacy route ordering — `/{type}` catch-all incorrectly matches `/create/{type}`. Fixed by placing catch-all last in `routes/inventory.php`
- **EC2**: Spelling `payed`/`notpayed` appears in lang files and database columns. Fixed by renaming to `paid`/`not_paid` across all files and creating a migration
- **EC3**: Missing `$fillable` in models causes MassAssignmentException on create/update
- **EC4**: `QUEUE_CONNECTION=sync` causes async activity logs to be lost. Fixed by changing to `database` in `.env`
- **EC5**: `POST /update` and `GET /destroy` violate REST conventions. Fixed by converting to `PUT /{id}` and `DELETE /{id}`

---

## Functional Requirements

### Phase 0 — Foundation (Infrastructure)

| ID | Requirement | Acceptance Criteria |
|----|-------------|-------------------|
| F0.1 | `.env` file must be reviewed for `APP_KEY`, `DB_DATABASE`, `QUEUE_CONNECTION`, `APP_URL` | All four values are present and non-empty. `APP_KEY` is a valid 32-character base64 string. |
| F0.2 | `php artisan storage:link` must be executed | The `public/storage` symlink points to `storage/app/public`. Uploaded images appear in the browser. |
| F0.3 | Queue connection must be set to `database` | `.env` has `QUEUE_CONNECTION=database`. `config/queue.php` uses `database` as default. |
| F0.4 | A queue worker must be configured for the `logs` queue | Running `php artisan queue:work --queue=logs` processes queued activity log jobs. (Or Supervisor config is in place.) |
| F0.5 | Rate limiting must be applied to API routes | Routes in `routes/api.php` use `throttle:api` middleware. More than 60 requests per minute per IP return 429. |
| F0.6 | Security headers middleware must be registered | All HTTP responses include: `Content-Security-Policy`, `Strict-Transport-Security`, `X-Frame-Options`, `X-Content-Type-Options`. |
| F0.7 | Database indexes must be added on frequently-queried columns | Migrations add indexes on: `student_accounts.type`, `activity_logs.action`, `inventory_items.category`. `EXPLAIN` queries show index usage. |
| F0.8 | Cron entry for `schedule:run` must be verified | The server crontab includes `* * * * * php artisan schedule:run >> /dev/null 2>&1`. A database backup task is registered in `app/Console/Kernel.php` schedule. Backup files are created successfully on each run. |

### Phase 2 — Form Requests (Input Layer)

| ID | Requirement | Acceptance Criteria |
|----|-------------|-------------------|
| F2.1 | Bind existing Form Requests to their controllers | 6 controllers use `SpecificRequest` instead of `Request` in `store()` and `update()`. |
| F2.2 | Create new Form Requests for PaymentParts, ExchangeBond, FeeInvoice | 6 new FRs exist: StorePayment, UpdatePayment, StoreExchangeBond, UpdateExchangeBond, StoreFeeInvoice, UpdateFeeInvoice. |
| F2.3 | Add validation rules (`exists:table,column`, `school_id`, required/nullable) to all Form Requests | All 9+ FRs have proper rules. Invalid inputs return validation error messages. |

### Phase 4 — Business Logic (Controller Refactoring)

| ID | Requirement | Acceptance Criteria |
|----|-------------|-------------------|
| F4.1 | Extract DashboardService from HomeController | `getUserRoleCounts`, `getFinancialData`, `generateChartData`, `getMonthlyRevenueTrend` are in a dedicated service. HomeController delegates to it. |
| F4.2 | Extract PaymentService from ReciptPaymentController | 4 payment handlers (~260 lines) are in a dedicated service. Controller methods are thin wrappers. |
| F4.3 | Extract StudentQueryService from StudentsController::index() | Filter/sort/join logic (~100 lines) is in a dedicated service. |
| F4.4 | Extract InvoiceQueryService from fee_invoiceController::index() | Dynamic query building (~90 lines) is in a dedicated service. |
| F4.5 | Extract UserService from UserController::store()/update() | Field assignment logic (~80 lines) is in a dedicated service. |
| F4.6 | Add `executeInTransaction()` to Base Controller | All controllers use this method instead of raw `DB::beginTransaction/commit/rollback`. Rollback is all-or-nothing — any failure rolls back all operations in the transaction. |
| F4.7 | Unify constructor injection across all controllers | All dependencies are injected via constructor, not individual methods. |
| F4.8 | Fix N+1 queries in extracted services | StudentQueryService, InvoiceQueryService, and ReportService methods use eager loading (`with()`) for related models. Query count per page does not exceed (1 + number of relations) + 1. |

### Phase 5 — Security (Authorization)

Policies map to the existing 30+ permission keys already defined in the system (e.g., `add_student`, `edit_fee_invoice`, `delete_inventory`). No new permission system is created. The four role tiers (Super Admin, Admin, Financial Operator, Employee) derive their access from permission assignments.

| ID | Requirement | Acceptance Criteria |
|----|-------------|-------------------|
| F5.1 | Create 8 Policy classes mapped to existing permissions | StudentPolicy, FeeInvoicePolicy, UserPolicy, InventoryItemPolicy, InventoryOrderPolicy, GradePolicy, ClassPolicy, EmployeePolicy exist. Each gates via `$user->can('permission_key')` against existing permissions. |
| F5.2 | Register policies in AuthServiceProvider | All 8 policies are listed in `$policies` array. |
| F5.3 | Add `$this->authorize()` to all 42 controllers | Each controller action calls the appropriate policy method. Unauthorized requests return 403. |
| F5.4 | Fix Form Request `authorize()` methods | 20 Form Requests check `$this->user()->can(...)` instead of `return true`. |
| F5.5 | Add `can:` middleware to reports routes | Routes in `routes/reports.php` have `can:` middleware referencing existing permission keys. |
| F5.6 | Add middleware to `/monitor` route | Route `routes/security.php` has proper authentication/authorization middleware. |

### Phase 6 — Routes (Conventions)

| ID | Requirement | Acceptance Criteria |
|----|-------------|-------------------|
| F6.1 | Fix `/{type}` catch-all route ordering | In `routes/inventory.php`, `/{type}` is placed after all specific routes like `/create/{type}`. |
| F6.2 | Add `->name()` to 11 API routes | All routes in `routes/api.php` have named route identifiers. |
| F6.3 | Unify destroy routes to DELETE method | `GET /destroy/{id}` becomes `DELETE /{id}` throughout the application. |
| F6.4 | Convert URLs to kebab-case | `/exception_fee` becomes `/exception-fee`, etc. |
| F6.5 | Apply REST conventions | `POST /update` becomes `PUT /{id}`, `GET /destroy/{id}` becomes `DELETE /{id}`. |

### Phase 7 — Tests

| ID | Requirement | Acceptance Criteria |
|----|-------------|-------------------|
| F7.1 | Configure test database in phpunit.xml | `DB_CONNECTION=sqlite` and `DB_DATABASE=:memory:` are set. Tests run without affecting the main database. |
| F7.2 | Create InventoryItem CRUD tests | Tests cover create, read, update, delete operations with valid and invalid data. |
| F7.3 | Create InventoryOrder CRUD + status transition tests | Tests cover the full order lifecycle across 5 states: `pending` → `confirmed` → `completed` (forward progression). `cancelled` and `returned` are terminal from any non-terminal state. Invalid transitions (e.g., pending→completed skipping confirmed) are rejected with validation error. |
| F7.4 | Create auth tests | Tests cover login (valid/invalid credentials), logout, and permission-based access. |
| F7.5 | Create ActivityLog tests | Tests cover listing, filtering by action/type, and pagination. |
| F7.6 | Create financial tests | Tests cover FeeInvoice creation, PaymentParts processing, and ExchangeBond creation. |
| F7.7 | Run full test suite with zero failures | `php artisan test --compact` exits with code 0. |

### Cross-Cutting Fixes

| ID | Requirement | Acceptance Criteria |
|----|-------------|-------------------|
| F8.1 | Replace all instances of `payed`/`notpayed` with `paid`/`not_paid` | No occurrence of `payed` or `notpayed` exists anywhere in the codebase. Lang files, database columns, migrations, and blade views are all updated. |
| F8.2 | Remove all dead code identified in the plan | ~800 lines of dead code (3 Events, Listener, Service, 4 trait methods, Laboratory, ReportService, 2 Providers, 4 pagination templates, DTOs/, Reports/, views) are removed without breaking any functionality. Verification: run `php artisan test` then manually smoke-test each removed item's dependent paths. |

---

## Success Criteria

| Criterion | Metric | Verification Method |
|-----------|--------|-------------------|
| SC1: Infrastructure stability | All 8 N-items (N1–N9 except N5) are green | Manual checklist sign-off per item |
| SC2: Input validation completeness | All 9+ Form Requests bound and validated | `php artisan route:list` + manual test of each form |
| SC3: Controller size reduction | ReciptPaymentController < 250 lines; HomeController < 200 lines | `wc -l` on each refactored controller |
| SC4: Authorization coverage | All 42 controllers have `authorize()` calls; 20 FRs have real auth checks | Code review + grep for `authorize` patterns |
| SC5: Route convention compliance | Zero `GET /destroy`, Zero `POST /update`, Zero snake_case URLs | `rg 'GET.*destroy' routes/` returns empty |
| SC6: Test suite reliability | `php artisan test --compact` exits 0 with all new tests passing | CI/CD pipeline or manual run |
| SC7: Zero spelling errors | `rg -i 'payed\|notpayed'` returns empty across all files | Automated grep check |
| SC8: Zero dead code | All 15 dead code items confirmed removed | `git diff` against known list |

---

## Key Entities

| Entity | Description | Phase |
|--------|-------------|-------|
| `InventoryItem` | Centralized polymorphic item (replaces stock/clothes/book_sheet) | Existing (no changes) |
| `InventoryOrder` | Centralized polymorphic order (replaces multiple order tables) | Existing (no changes) |
| `InventoryTransaction` | Polymorphic transaction log for inventory movements | Existing (no changes) |
| `FormRequest` classes | 9+ validation classes for inventory, financial, and user input | Phase 2 |
| `DashboardService` | Extracted analytics/business logic from HomeController | Phase 4 |
| `PaymentService` | Extracted payment processing from ReciptPaymentController | Phase 4 |
| Policy classes | 8 authorization policy classes | Phase 5 |
| Database indexes | New indexes on high-query columns | Phase 0 |

---

## Dependencies

```
Phase 0 (Foundation) → no dependencies
Phase 1 (Models)     → already 100% complete
Phase 2 (Form Req.)  → depends on Phase 1
Phase 3 (Frontend)   → already 100% complete
Phase 4 (Biz Logic)  → depends on Phase 1 + 2 + 3
Phase 5 (Security)   → depends on Phase 1 + 2 + 4
Phase 6 (Routes)     → depends on Phase 4
Phase 7 (Tests)      → depends on all prior phases
```

Phases must be executed in strict order. Each phase should be verified before beginning the next.

---

## Assumptions

1. **Database access**: The development team has production database access for running migrations and adding indexes.
2. **Server access**: The team has SSH access to configure cron, Supervisor, and verify `.env` on the production server.
3. **Existing tests**: The current test suite (if any) will continue to pass; no existing tests will be removed.
4. **Queue infrastructure**: The server supports either `php artisan queue:work` as a daemon or Supervisor for process management.
5. **Spelling fix scope**: `payed` → `paid` applies to all PHP, Blade, Lang, and database schema files. No external API contracts are affected.
6. **Dead code is truly dead**: All 15 items listed in the plan are safe to remove with no side effects.
7. **Data volume**: The system operates at moderate multi-school scale (2-20 schools, 500-5K students, <50K inventory items, <500 orders/month). Infrastructure decisions (rate limiting, queue config, indexes) are sized for this range.

---

## Out of Scope

- New feature development (inventory rebuild, new modules, etc.)
- Performance optimization beyond database indexing
- UI/UX redesign
- API versioning or new API endpoints
- Docker/containerization
- CI/CD pipeline setup
