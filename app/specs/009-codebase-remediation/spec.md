# Feature Specification: Codebase Remediation

**Feature Branch**: `009-codebase-remediation`
**Created**: 2026-07-29
**Status**: Draft
**Input**: User description: "Create specification plan for docs/remediation-plan.md — 72 issues across 9 phases covering broken functionality, security hardening, performance, data integrity, testing gaps, maintainability, route cleanup, config fixes, and view polish"

## Clarifications

*No clarifications needed — the remediation plan (docs/remediation-plan.md) provides sufficient detail derived from a comprehensive codebase review.*

## User Scenarios & Testing *(mandatory)*

### User Story 1 — Fix Broken Migrations & Core Functionality (Priority: P0)

As a developer deploying the system, I want all database migrations to run successfully without errors, so that the application can be set up and updated reliably.

**Why this priority**: A single broken migration (incorrect `Schema::rename()` usage) blocks ALL future migrations from running. Missing indexes on polymorphic columns degrade query performance as data grows. Destructive artisan commands exposed via GET routes pose a security risk even in development environments.

**Independent Test**: Can be verified by running `php artisan migrate` and confirming all migrations complete without errors, confirming `inventory_order_items` has indexes on polymorphic columns, and confirming `/mif` route returns 403 from non-local IPs.

**Acceptance Scenarios**:

1. **Given** a fresh database, **When** `php artisan migrate` is run, **Then** all 40+ migrations complete without errors
2. **Given** the `inventory_order_items` table, **When** checking its indexes, **Then** `itemable_type`, `itemable_id`, and the composite index exist
3. **Given** an unauthenticated or non-local request hits `/mif`, **When** processed, **Then** a 403/404 response is returned (not a destructive migration)

---

### User Story 2 — Close Security Vulnerabilities (Priority: P1)

As a system administrator, I want all identified security vulnerabilities closed so that the application is hardened against common web attacks and data breaches.

**Why this priority**: Multiple security gaps exist — unescaped LIKE patterns enabling DoS, missing `authorize()` calls on critical actions, `env()` usage that breaks when config is cached, open CORS, Telescope leakage, null school references, a fillable typo causing silent data loss, path traversal in backups, synchronous backup blocking, weak CSP, and missing input sanitization on inventory routes.

**Independent Test**: Can be verified by: (1) confirming LIKE patterns escape `%`/`_`, (2) confirming `pay()`/gard methods have explicit authorize calls, (3) confirming `env()` is not called outside config files, (4) confirming CORS is restricted, (5) confirming Telescope is disabled by default, (6) confirming `getSchool()` null case is handled.

**Acceptance Scenarios**:

1. **Given** a user searches with `%%%%%%%%%` in inventory items, **When** the LIKE query runs, **Then** no denial-of-service occurs (wildcards are escaped)
2. **Given** a user without permission attempts to pay an order, **When** the request is processed, **Then** a 403 response is returned by the policy
3. **Given** `APP_ENV` is set to `production`, **When** `MigrateMysqlToPostgres` runs, **Then** it reads from config (not `env()`)
4. **Given** a browser from an unknown origin makes a request, **When** CORS headers are checked, **Then** the request is denied
5. **Given** `TELESCOPE_ENABLED` is not set, **When** Telescope is accessed, **Then** it returns 404 (disabled by default)
6. **Given** a User model is created with a `religion` value, **When** the record is saved, **Then** the religion is persisted correctly
7. **Given** a backup file with a path traversal name, **When** download is attempted, **Then** the path is sanitized and no directory escape occurs

---

### User Story 3 — Eliminate N+1 Queries & Performance Bottlenecks (Priority: P1)

As a daily user of the school management system, I want pages to load quickly so that my work is not slowed down by excessive database queries.

**Why this priority**: N+1 query problems in inventory controllers cause dozens of extra queries per page load. Unbounded student/item queries load thousands of records into dropdowns. The Gard service queries the database inside a loop instead of batching.

**Independent Test**: Can be verified by enabling query logging and: (1) loading the orders index page and counting queries (should be O(1) not O(N)), (2) loading the items index page without N+1 on classroom, (3) confirming GardService fetches items before the loop.

**Acceptance Scenarios**:

1. **Given** a user loads the inventory orders index with 100 orders, **When** the page renders, **Then** the total number of queries does not increase linearly with the number of orders
2. **Given** a user loads the inventory items index, **When** editing an item, **Then** the classroom data is already loaded (no extra query)
3. **Given** a gard submission with 50 items, **When** the service processes it, **Then** only 1 query fetches all items (not 50 individual queries)

---

### User Story 4 — Ensure Data Integrity in Inventory Operations (Priority: P1)

As an inventory manager, I want all inventory forms and display pages to work correctly so that data entry is accurate and no incorrect data is stored.

**Why this priority**: The orders enum migration may fail on MySQL 8+, dynamic Tailwind classes disappear in production, Blade/Alpine index collisions cause form submission bugs, the quantity field partial shows both fields regardless of order type, and the classroom select never pre-selects the correct value in edit forms.

**Independent Test**: Can be verified by: (1) running the enum fix migration on MySQL 8+, (2) confirming dynamic status colors appear in production builds, (3) submitting an edit form with mixed existing/new items and confirming all save correctly, (4) confirming only the relevant quantity field shows per order type, (5) opening an edit form and confirming the correct classroom is pre-selected.

**Acceptance Scenarios**:

1. **Given** the database is MySQL 8.0.16+, **When** the enum fix migration runs, **Then** it completes without errors
2. **Given** the production CSS is built with Tailwind, **When** an order with `paid` status loads, **Then** the status color class exists and renders correctly
3. **Given** a user edits an order with 3 existing items and adds 2 new items, **When** the form is submitted, **Then** all 5 items are saved correctly
4. **Given** a user creates a tawreed (inflow) order, **When** adding item rows, **Then** only `quantity_in` is shown (not `quantity_out`)
5. **Given** a user edits an existing inventory item, **When** the edit modal opens, **Then** the classroom dropdown pre-selects the item's current classroom

---

### User Story 5 — Comprehensive Test Coverage for Inventory Module (Priority: P1)

As a developer maintaining the inventory system, I want comprehensive automated tests so that regressions are caught before deployment and the system's behavior is well-documented.

**Why this priority**: Critical inventory features have zero test coverage: gard operations, transaction service (stock in/out/adjust), order updates and deletes, pay toggle, unauthorized access scenarios, and school-scoping enforcement.

**Independent Test**: Can be verified by running the new test files and confirming all tests pass.

**Acceptance Scenarios**:

1. **Given** a new gard submission, **When** the InventoryGardTest runs, **Then** it verifies the gard order is created with correct stock adjustments
2. **Given** a stock-out operation, **When** stock exceeds available balance, **Then** the transaction service throws an appropriate exception
3. **Given** a user without `stocks-delete` permission, **When** they attempt to delete an item, **Then** a 403 response is returned
4. **Given** two users from different schools, **When** each queries inventory items, **Then** they only see their own school's data

---

### User Story 6 — Improve Codebase Maintainability (Priority: P2)

As a developer working on this codebase, I want consistent conventions, cleaned-up dead code, and simplified permission logic so that I can make changes confidently and efficiently.

**Why this priority**: Legacy permission names (`stocks-*`, `clothes-*`, `books_sheets-*`) create confusion. Permission checks are duplicated across 4 layers. Dead code (`ClassRoom2.php`, unused services) clutters the codebase. PDF reports crash on empty datasets. Missing empty states confuse users. Undefined `$order` variables in PDF reports cause errors.

**Independent Test**: Can be verified by: (1) confirming legacy permission names are replaced, (2) confirming no dead code files remain, (3) confirming PDF reports render correctly with empty data, (4) confirming all views with iteration use `@forelse` with empty states.

**Acceptance Scenarios**:

1. **Given** a developer searches for permission names, **When** reviewing controllers and policies, **Then** all references use unified `inventory.*` naming (not `stocks-*`/`clothes-*`/`books_sheets-*`)
2. **Given** a PDF report is generated with zero data items, **When** it renders, **Then** no undefined variable errors occur
3. **Given** a view iterates over a potentially empty collection, **When** the collection is empty, **Then** a user-friendly "no data" message is shown

---

### User Story 7 — Standardize Routes & Configuration (Priority: P2)

As a developer, I want standard RESTful routes and configuration-driven settings so that the application follows conventions and deployment configuration is centralized.

**Why this priority**: Route conventions are inconsistent (catch-all routes before specific routes, POST for updates instead of PUT, snake_case URLs, GET for deletes). Hardcoded values (timezone, locale, currency, pagination) make deployment configuration fragile.

**Independent Test**: Can be verified by: (1) running `php artisan route:list` and confirming all routes follow conventions, (2) confirming config files use `env()` for overridable values.

**Acceptance Scenarios**:

1. **Given** all route definitions, **When** reviewing `routes/inventory.php`, **Then** the `/{type}` catch-all is at the end of each group
2. **Given** all update routes, **When** reviewing route definitions, **Then** they use `PUT` method (not `POST`)
3. **Given** the application is deployed, **When** checking `config/app.php`, **Then** timezone and locale are configurable via environment variables

---

### User Story 8 — Polish Views & Fix Accessibility (Priority: P3)

As a user of the system, I want translated and accessible interfaces so that I can use the system comfortably regardless of language or ability.

**Why this priority**: Hardcoded Arabic/English strings appear in templates instead of using `trans()`. Icon buttons lack accessible labels. A JavaScript bug in the role creation page breaks the "select all" functionality. Commented-out code and duplicate CSS definitions add noise.

**Independent Test**: Can be verified by: (1) visually inspecting views for hardcoded strings, (2) testing the role creation "select all" checkbox, (3) checking icon buttons have accessible labels.

**Acceptance Scenarios**:

1. **Given** a view with user-facing text, **When** inspecting the Blade template, **Then** all text uses `trans()` calls (no hardcoded Arabic/English)
2. **Given** a user with a screen reader, **When** they navigate to an icon button, **Then** an accessible label is present
3. **Given** a role management page, **When** the "select all" checkbox is clicked, **Then** all child checkboxes are properly toggled

---

### Edge Cases

- What if the broken migration has already been run on production databases? The fix migration must use `DROP COLUMN` + `ADD COLUMN` approach or verify the column name before attempting rename.
- What if the legacy permission names are referenced by Spatie's permission cache? The cache must be cleared after renaming permissions.
- What if the CSP directive changes break existing functionality? Each change must be tested against the full application to ensure Livewire/Alpine.js functionality is preserved.
- What if test database has different morphology than production (MySQL vs SQLite)? Eager loading and N+1 tests should use query count assertions (not database-specific features).
- What if backup files have non-ASCII names? The sanitization must handle Unicode filenames while preventing path traversal.

## Requirements *(mandatory)*

### Functional Requirements

**Phase 1: P0 — Broken Functionality**

- **FR-001**: The `fix_payed_to_paid` migration MUST use `renameColumn()` instead of `Schema::rename()` so that columns are renamed correctly
- **FR-002**: A new migration MUST add indexes on `inventory_order_items.itemable_type`, `inventory_order_items.itemable_id`, a composite `[itemable_type, itemable_id]`, and `inventory_transactions.reference_type` + `reference_id`
- **FR-003**: The local routes guard in `web.php` MUST use strict comparison (`===`) and add IP whitelisting (`127.0.0.1`) so that destructive commands are never exposed

**Phase 2: P1 — Security Hardening**

- **FR-004**: All LIKE queries in controllers MUST escape `%` and `_` wildcard characters using `str_replace()` before constructing the LIKE pattern
- **FR-005**: `InventoryOrderController::pay()`, `InventoryGardController::store()`, and `InventoryGardController::update()` MUST have explicit `$this->authorize()` calls
- **FR-006**: `MigrateMysqlToPostgres.php` MUST use `config()` instead of `env()` for database configuration
- **FR-007**: CORS configuration MUST restrict `allowed_origins` to specific domains (not wildcard `*`)
- **FR-008**: Telescope MUST be disabled by default (`env('TELESCOPE_ENABLED', false)`)
- **FR-009**: Livewire `release_token` MUST use `env('APP_KEY')` or a proper random string
- **FR-010**: `SchoolTrait::getSchool()` MUST handle null user/school gracefully, returning an appropriate error response
- **FR-011**: The `User` model's `$fillable` array MUST use `'religion'` (correct spelling) instead of `'reiligon'`
- **FR-012**: Backup file operations MUST sanitize filenames to prevent path traversal
- **FR-013**: Backup creation MUST be dispatched as a queued job instead of running synchronously
- **FR-014**: CSP headers MUST remove `unsafe-eval` and add `connect-src`, `font-src`, `frame-src` directives
- **FR-015**: Inventory route groups MUST apply the `sanitize` middleware

**Phase 3: P1 — Performance & N+1**

- **FR-016**: Inventory orders index MUST eager-load `student` and `user` relationships
- **FR-017**: Inventory items index MUST eager-load `classroom` relationship
- **FR-018**: Student and item select dropdowns MUST use server-side searchable selects instead of loading all records
- **FR-019**: `InventoryGardService::submitGard()` MUST batch-fetch items before the loop using `whereIn()`

**Phase 4: P1 — Data Integrity**

- **FR-020**: The orders enum fix migration MUST use `ALTER TABLE ... MODIFY COLUMN` for MySQL compatibility
- **FR-021**: Dynamic Tailwind classes in Blade templates MUST use full class strings (not string concatenation) to ensure JIT compilation
- **FR-022**: Order edit forms MUST render ALL items (existing + new) through a single Alpine-managed array to prevent index collision
- **FR-023**: `_item_row.blade.php` MUST conditionally show only the relevant quantity field based on order type
- **FR-024**: `_form.blade.php` classroom select MUST use `$item->classroom_id` as the default value (not `$item->id`)

**Phase 5: P1 — Testing**

- **FR-025**: `InventoryGardTest` MUST cover gard create, store, edit, and update flows
- **FR-026**: `InventoryTransactionServiceTest` MUST cover stockIn, stockOut, adjustStock, and canStockOut operations
- **FR-027**: Inventory order update and destroy endpoints MUST have dedicated tests
- **FR-028**: The pay toggle method MUST have a dedicated test verifying status toggles correctly
- **FR-029**: Tests MUST verify unauthorized users receive 403 responses for guarded inventory endpoints
- **FR-030**: Tests MUST verify school-scoping prevents cross-school data access
- **FR-031**: Shared test setup methods MUST be extracted into a base class or trait

**Phase 6: P2 — Maintainability**

- **FR-032**: Legacy permission names (`stocks-*`, `clothes-*`, `books_sheets-*`) MUST be replaced with unified `inventory.*` permission names across all controllers, policies, form requests, and helpers
- **FR-033**: Permission duplication MUST be reduced by establishing a single authorization point per action
- **FR-034**: Dead code files MUST be removed: `ClassRoom2.php`, unused report services
- **FR-035**: Shared validation rules in `StoreOrderRequest` / `UpdateOrderRequest` MUST be extracted into a base request
- **FR-036**: PDF report views MUST initialize `$order` before the loop to prevent undefined variable errors
- **FR-037**: All `@foreach` loops over potentially empty collections MUST be replaced with `@forelse`
- **FR-038**: `EmployeePolicy` MUST be registered in `AuthServiceProvider`
- **FR-039**: Inconsistent controller names (`promotionController`, `fund_accountsController`, `schedulesController`) MUST be fixed

**Phase 7: P2 — Routes & Conventions**

- **FR-040**: `/{type}` catch-all routes MUST be placed at the end of each route group
- **FR-041**: All POST-based update routes MUST be converted to PUT
- **FR-042**: Snake_case URL segments MUST be converted to kebab-case
- **FR-043**: All API routes MUST have named route definitions
- **FR-044**: All GET-based destroy routes MUST be converted to DELETE
- **FR-045**: Inventory endpoints MUST have throttling middleware applied

**Phase 8: P2 — Configuration**

- **FR-046**: Timezone MUST use `env('APP_TIMEZONE', 'EET')` instead of hardcoded `'EET'`
- **FR-047**: Locale MUST use `env('APP_LOCALE', 'ar')` instead of hardcoded `'ar'`
- **FR-048**: Hardcoded `'EGP'` currency values MUST use `config('school.currency')`
- **FR-049**: Hardcoded `->paginate(10)` MUST use `config('school.per_page')`
- **FR-050**: Hardcoded URL `/login` MUST use `route('login')`
- **FR-051**: Hardcoded Facebook URL MUST use a config or env variable

**Phase 9: P3 — View Polish**

- **FR-052**: Hardcoded `'Sheet'` string MUST be replaced with `trans('book_sheet.sheet')`
- **FR-053**: Hardcoded Arabic strings in layouts MUST be replaced with `trans()` calls
- **FR-054**: Icon buttons MUST include accessible labels (`aria-label`)
- **FR-055**: The `checkAll()` JavaScript function in roles creation MUST correctly toggle child checkboxes
- **FR-056**: Student select elements in order forms MUST have the `required` attribute
- **FR-057**: Commented-out code in `app.blade.php` MUST be removed
- **FR-058**: Duplicate CSS in `header_css.blade.php` MUST be deduplicated

### Key Entities

- **InventoryItem**: Centralized polymorphic inventory item (replaces legacy stock/clothes/book_sheet models)
- **InventoryOrder**: Inventory order with polymorphic items, supporting inflow/outflow/gard types
- **InventoryOrderItem**: Individual line items within an order, using morph-to relationship
- **InventoryTransaction**: Stock movement audit trail recording every in/out/adjust operation
- **User/Employee**: System user with roles, Permissions, and school association
- **School**: Multi-tenant boundary for all data
- **Config Files**: Application configuration (app, cors, livewire, telescope, school, filesystems)
- **Route Definitions**: HTTP method/URI mappings across all route files (inventory, finance, academic, etc.)
- **Blade Templates**: View files across backend/, layouts/, components/ directories

## Success Criteria *(mandatory)*

### Measurable Outcomes

- **SC-001**: `php artisan migrate` completes with zero errors on fresh and existing databases
- **SC-002**: Zero `env()` calls exist outside config files (verified by grep)
- **SC-003**: Zero LIKE queries pass unescaped user input (verified by code review)
- **SC-004**: All inventory action endpoints have explicit `authorize()` calls or middleware-based permission checks
- **SC-005**: CORS headers restrict origins to configured domains only (verified by HTTP response inspection)
- **SC-006**: Telescope returns 404 when `TELESCOPE_ENABLED` is not set
- **SC-007**: Zero controllers crash from null `getSchool()` return
- **SC-008**: Zero cross-school data leaks (verified by test assertions)
- **SC-009**: Inventory pages make ≤5 database queries regardless of data volume on paginated views
- **SC-010**: All form submissions in order edit flows save all line items correctly (100% test pass)
- **SC-011**: All Tailwind dynamic class names resolve correctly in production builds (verified by visual inspection)
- **SC-012**: Test coverage for inventory module reaches 90%+ (gard, transactions, authorization, scoping)
- **SC-013**: Zero dead code files remain (`ClassRoom2.php`, unused report services)
- **SC-014**: All destroy routes use HTTP DELETE method (zero GET-based destroy routes)
- **SC-015**: Configurable values (timezone, locale, currency, pagination) use `env()` with sensible defaults
- **SC-016**: Zero hardcoded user-facing strings remain in Blade templates (all use `trans()`)
- **SC-017**: All existing tests pass with no regressions
- **SC-018**: `vendor/bin/pint --dirty --format agent` passes without errors

## Assumptions

- The application uses MySQL/MariaDB as its primary database (migration fixes are MySQL-specific)
- No external API consumers exist — HTTP method changes (GET→DELETE, POST→PUT) are safe
- Livewire and Alpine.js require `unsafe-inline` CSP directive (will not be removed)
- The legacy permission names (`stocks-*`, `clothes-*`, `books_sheets-*`) map directly to `inventory.items.*` and `inventory.orders.*` equivalents
- Spatie permission cache will be cleared after permission renaming
- Template files use `{{ }}` by default which escapes HTML — only explicit `{!! !!}` cases need review
- The project uses Tailwind v4 JIT mode — dynamically concatenated class names must be avoided
- Base Controller `executeInTransaction()` method already exists for service-level transaction wrapping
- All changes will be verified against the existing test suite before merge
