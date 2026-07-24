# System Repair & Hardening Specification

## Clarifications

### Session 2026-07-12

- Q: What authorization permission key naming pattern should policies use? → A: `{action}_{entity}` pattern (e.g., `add_student`, `edit_student`, `delete_student`) — matches existing middleware convention
- Q: What CSP policy strictness level should the security headers middleware use? → A: Practical CSP: `default-src 'self'; script-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline'; img-src 'self' data:` — allows inline for Blade/Alpine compatibility
- Q: How should route method changes (GET destroy → DELETE, POST update → PUT) handle backward compatibility? → A: Direct replacement — convert all routes and update all Blade forms with `@method()` directives, no backward compatibility layer needed

---

## Overview

The school management system has accumulated technical debt across multiple areas: missing validation layers, inline business logic in controllers, no authorization policies, non-standard route conventions, incomplete test coverage, and dead code. This initiative systematically repairs and hardens the entire system across 8 phases, delivering infrastructure security, code quality, and maintainability improvements.

## Actors

- **School Administrator**: Uses the system daily — benefits from faster pages (N+1 fixes), better security (policies), and reliable validation
- **Developer**: Maintains the codebase — benefits from clean architecture (services, policies), test coverage, and removal of dead code
- **System Operator**: Deploys and monitors — benefits from queue workers, security headers, database indexes, and backup schedules

## User Scenarios

### Scenario 1: Schedule Feature Polish

**Given** the schedule auto-distribution and PDF print features are built but missing some translation keys and UX polish

**When** a user switches the interface to Arabic or English

**Then** all schedule-related labels, buttons, and messages display correct translations

**And** the auto-generate button shows a confirmation dialog before executing

**And** action buttons show loading indicators while processing

### Scenario 2: Infrastructure Hardening

**Given** the application runs in production

**When** a user makes any HTTP request

**Then** security headers are present in the response: CSP policy (`default-src 'self'; script-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline'; img-src 'self' data:`), HSTS, X-Frame-Options, X-Content-Type-Options

**And** queue jobs for logging are processed by a configured worker

**And** frequently queried database columns have proper indexes for performance

**And** the cron scheduler is documented for operations team

### Scenario 3: Input Validation Layer

**Given** a user submits a payment, exchange bond, or fee invoice form

**When** the form data is processed by the controller

**Then** a dedicated Form Request class validates all fields with proper rules (required, exists, numeric, etc.)

**And** validation error messages are clear and specific

**And** the controller delegates validation entirely to the Form Request, containing no inline validation logic

### Scenario 4: Service Layer Extraction

**Given** controllers like HomeController (493 lines), ReceiptPaymentController (506 lines), and StudentsController contain complex business logic

**When** the refactoring extracts logic into dedicated service classes

**Then** each controller method becomes a thin delegation layer (< 250 lines total per controller)

**And** services like DashboardService, PaymentService, StudentQueryService, InvoiceQueryService, and UserService encapsulate business logic

**And** N+1 query problems are resolved through eager loading in services

**And** database transactions use a unified `executeInTransaction()` wrapper

### Scenario 5: Authorization Policies

**Given** the system uses role-based permissions via `spatie/laravel-permission`

**When** a user attempts to view, create, update, or delete a resource

**Then** a Policy class checks the appropriate permission using `{action}_{entity}` naming (e.g., `add_student`, `edit_student`, `delete_student`) — matching existing middleware convention

**And** unauthorized actions return 403 Forbidden

**And** Form Request `authorize()` methods check actual permissions instead of returning `true`

**And** report routes have `can:` middleware with appropriate permission keys

### Scenario 6: Route Convention Cleanup

**Given** routes currently use GET for destructive actions (destroy), POST for updates, and snake_case URL segments

**When** routes are standardized

**Then** destructive operations use DELETE method, updates use PUT method — all Blade forms updated with `@method('DELETE')` / `@method('PUT')` directives

**And** URL segments use kebab-case (e.g., `fee-invoices` instead of `fees_invoices`)

**And** API routes have proper names for reverse routing

**And** the inventory catch-all route is positioned last to avoid shadowing specific routes

### Scenario 7: Test Coverage

**Given** the system has limited test coverage for inventory, financial, and activity log features

**When** tests are written and executed

**Then** inventory item CRUD operations are tested with valid and invalid data

**Then** inventory order status transitions are tested (pending→confirmed→completed, cancelled/returned)

**And** financial operations (FeeInvoice, PaymentParts, ExchangeBond) are tested

**And** activity log listing and filtering is tested

**And** all tests pass with exit code 0

### Scenario 8: Dead Code Cleanup

**Given** the codebase contains unused traits, service providers, services, and pagination templates

**When** dead code is identified and removed

**Then** EagerLoadingTrait and ViewServiceProvider are deleted

**And** unused pagination templates are removed (keeping only tailwind.blade.php)

**And** database columns renamed from `payed`/`notpayed` to `paid`/`not_paid`

**And** all models are audited for proper `$fillable` or `$guarded` properties

**And** the application continues to function correctly after removal

### Scenario 9: UI Verification

**Given** UI components (sidebar, dashboard, smart-table, crud-modal, settings-hub) have been built

**When** a QA tester performs manual verification

**Then** sidebar collapses/expands, supports search, pin, and mobile drawer

**Then** dashboard shows KPI numbers, charts render, tables display data

**Then** CRUD list pages support filter, sort, paginate, and modal create

**Then** detail pages support tab switching and row actions

**Then** settings page reflows from 3→2→1 columns at different breakpoints

### Scenario 10: Accessibility & Performance Audit

**Given** the migrated UI needs to meet accessibility standards

**When** an accessibility audit is performed

**Then** keyboard navigation works through sidebar, tables, and forms

**Then** color contrast meets WCAG 2.1 AA standards

**Then** screen readers can navigate the interface

**Then** DataTable filter+sort+paginate completes within 10 seconds

**Then** detail page initial load completes within 2 seconds

**Then** mobile layouts at 375px show no content cutoff or horizontal scroll

## Functional Requirements

### Phase 1: Schedule Polish
- FR-1.1: All schedule UI labels must have translations in both English and Arabic
- FR-1.2: Auto-generate button must show confirmation dialog before executing
- FR-1.3: All action buttons must display loading indicators during processing

### Phase 2: Foundation
- FR-2.1: Security headers middleware must add CSP (`default-src 'self'; script-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline'; img-src 'self' data:`), HSTS, X-Frame-Options, X-Content-Type-Options to all responses
- FR-2.2: Queue worker configuration must be documented for the `logs` queue
- FR-2.3: Database indexes must be added on `student_accounts.type`, `activity_logs.action`, `inventory_items.category`
- FR-2.4: Cron setup documentation must be provided for the scheduler

### Phase 3: Form Requests
- FR-3.1: Payment operations must use dedicated Store/Update Form Request classes with field-specific validation
- FR-3.2: Exchange bond operations must use dedicated Store/Update Form Request classes
- FR-3.3: Fee invoice operations must use dedicated Store/Update Form Request classes
- FR-3.4: All Form Requests must include `school_id` scoping validation where applicable
- FR-3.5: Controllers must type-hint Form Request classes instead of generic Request

### Phase 4: Business Logic
- FR-4.1: DashboardService must encapsulate role counts, financial data, chart data, and revenue trends
- FR-4.2: PaymentService must encapsulate payment handler methods (4 methods)
- FR-4.3: StudentQueryService must encapsulate filter/sort/join logic
- FR-4.4: InvoiceQueryService must encapsulate dynamic query building
- FR-4.5: UserService must encapsulate field assignment logic for store/update
- FR-4.6: Base Controller must provide `executeInTransaction()` wrapper
- FR-4.7: All controllers must use `executeInTransaction()` instead of raw DB transactions
- FR-4.8: N+1 queries must be resolved with eager loading in services
- FR-4.9: Refactored controllers must be under 200-250 lines each

### Phase 5: Security
- FR-5.1: Eight Policy classes must be created for Student, FeeInvoice, User, InventoryItem, InventoryOrder, Grade, Class, Employee — using `{action}_{entity}` permission naming (e.g., `add_student`, `edit_student`, `delete_student`)
- FR-5.2: Policies must be registered in AuthServiceProvider
- FR-5.3: Controllers must use `$this->authorize()` calls for authorization
- FR-5.4: Form Request `authorize()` methods must check actual user permissions
- FR-5.5: Report routes must have `can:` middleware
- FR-5.6: The `/monitor` route must have authentication and authorization middleware

### Phase 6: Routes
- FR-6.1: Inventory catch-all route must be positioned last in its group
- FR-6.2: API routes must have named routes
- FR-6.3: Destructive operations must use DELETE method — all Blade forms updated with `@method('DELETE')`
- FR-6.4: Update operations must use PUT method — all Blade forms updated with `@method('PUT')`
- FR-6.5: All URL segments must use kebab-case

### Phase 7: Tests
- FR-7.1: InventoryItemTest must cover CRUD with valid/invalid data and authorization
- FR-7.2: InventoryOrderTest must cover CRUD and status transitions
- FR-7.3: ActivityLogTest must cover listing, filtering, and pagination
- FR-7.4: FinancialTest must cover FeeInvoice, PaymentParts, ExchangeBond creation
- FR-7.5: Full test suite must pass with exit code 0

### Phase 8: Cleanup
- FR-8.1: Database columns must be renamed from `payed`/`notpayed` to `paid`/`not_paid`
- FR-8.2: All Eloquent models must have `$fillable` or `$guarded` properties
- FR-8.3: Dead code (EagerLoadingTrait, ViewServiceProvider) must be removed — note: PDFExportService and ReportService are NOT dead code (used by ReportController)
- FR-8.4: Unused pagination templates must be removed
- FR-8.5: Application must function correctly after all cleanup

## Success Criteria

- **Security**: All HTTP responses include security headers; all protected routes have proper authorization checks
- **Code Quality**: No controller exceeds 250 lines; all business logic lives in service classes; all form inputs validated by dedicated Form Requests
- **Performance**: Frequently queried database columns have indexes; N+1 query problems are eliminated through eager loading
- **Test Coverage**: Inventory, financial, and activity log features have automated test coverage; full test suite passes
- **Maintainability**: Dead code is removed; URL conventions follow REST standards; route naming is consistent
- **Translation Completeness**: All user-facing strings have English and Arabic translations
- **Documentation**: Queue worker setup and cron scheduler are documented for operations team

## Key Entities

- **Form Request**: Validates incoming form data with field-specific rules, authorization checks, and error messages
- **Service Class**: Encapsulates business logic extracted from controllers, providing testable and reusable operations
- **Policy**: Authorizes user actions on models based on role permissions
- **Middleware**: Processes HTTP requests to add security headers and enforce authorization
- **Migration**: Modifies database schema to add indexes and rename columns
- **Test**: Verifies feature behavior through automated assertions

## Assumptions

- The existing `spatie/laravel-permission` package is properly configured with roles and permissions already defined
- The application uses Laravel 10 conventions (Model `$casts` property, not `casts()` method)
- The Arabic RTL layout must be maintained in all new and modified views
- Existing Form Requests in `app/Http/Requests/Inventory/` already have proper `exists` validation rules
- The `phpunit.xml` is already configured with SQLite in-memory database for tests
- The `SchedulePrintController` handles PDF generation (not Livewire methods as originally planned)
- Legacy inventory code (stocks, clothes, book_sheets) remains intact — this spec does not address legacy deletion
- The dashboard widgets API endpoint and session expiry handler already exist and are not part of this scope

## Scope

**In Scope**:
- 85 remaining tasks across 8 phases as defined in `docs/unified-master-plan.md`
- Schedule feature polish (translation keys, UX improvements, verification)
- Foundation infrastructure (security headers, queue worker, indexes, cron docs)
- Form Request creation and controller binding
- Service class extraction and controller refactoring
- Policy creation and authorization enforcement
- Route convention standardization
- Test coverage for inventory, financial, and activity log features
- Dead code removal and database column renaming
- UI manual verification and accessibility/performance auditing

**Out of Scope**:
- Legacy inventory system deletion (stocks, clothes, book_sheets modules)
- New feature development beyond the 85 defined tasks
- Database schema changes beyond indexes and column renaming
- Third-party package upgrades
- Performance optimization beyond N+1 query fixes and database indexes
