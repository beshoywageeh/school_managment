# Feature Specification: Masterplan Security & Quality Overhaul

**Feature Branch**: `007-masterplan-security-overhaul`
**Created**: 2026-07-27
**Status**: Draft
**Input**: User description: "Comprehensive security and quality overhaul based on docs/masterplan.md — 59+ issues across 6 sprints covering critical security vulnerabilities, data integrity bugs, performance problems, and architectural debt"

## Clarifications

### Session 2026-07-27

- Q: Which payment status naming convention should be standardized? → A: `paid`/`not_paid` (matches existing codebase convention, fewer changes needed)
- Q: How should school scoping be enforced? → A: Use existing BelongsToSchool + SchoolScope pattern; fix controllers with missing school_id filters (no new global scopes needed)
- Q: How should the `.env` removal from git history be handled? → A: Full history rewrite with BFG/filter-repo, rotate all credentials, all developers re-clone
- Q: Should the AdminIpWhitelist middleware be activated or removed? → A: Remove it entirely (dead code cleanup)
- Q: What rate limit should apply to API endpoints? → A: 60 requests per minute per authenticated user

## User Scenarios & Testing *(mandatory)*

### User Story 1 - Eliminate Critical Security Vulnerabilities (Priority: P0)

As a system administrator, I want all critical security vulnerabilities eliminated so that the school management system is safe for production use and student/school data is protected from unauthorized access.

**Why this priority**: These are actively exploitable vulnerabilities that could lead to complete system compromise. The `.env` file in git history exposes all secrets. The IDOR pattern allows any school to access any other school's data. The password change bug gives users a false sense of security. The unprotected API endpoints allow unauthenticated data manipulation. All P0 items must be fixed before any other work.

**Independent Test**: Can be verified by confirming: (1) `.env` is not in git history, (2) all controllers with `school_id` filter data by the authenticated user's school, (3) password changes actually update the stored password, (4) all API routes require authentication, (5) sensitive fields are not mass-assignable.

**Acceptance Scenarios**:

1. **Given** an attacker has access to the git repository, **When** they search the history for `.env` files, **Then** no environment files with credentials are found
2. **Given** a user from School A, **When** they attempt to access data belonging to School B, **Then** the request is denied or returns only School A's data
3. **Given** a user changes their password, **When** they log in with the new password, **Then** the new password works and the old password no longer works
4. **Given** an unauthenticated request hits any API endpoint, **When** the request is processed, **Then** a 401/403 response is returned
5. **Given** a malicious form submission includes `school_id` or `isAdmin` fields, **When** the model is saved, **Then** those fields are ignored (not mass-assignable)

---

### User Story 2 - Fix Critical Runtime Bugs (Priority: P0)

As a school administrator, I want all critical runtime bugs fixed so that the system doesn't crash or produce incorrect results when performing basic operations like viewing students, invoices, or managing parents.

**Why these priority**: These bugs cause immediate failures visible to the first user who encounters them. A typo causes a blank page on student view. A collection access error crashes invoice display. An impossible condition prevents parent deletion. These are the bugs users will hit within minutes of using the system.

**Independent Test**: Can be verified by: (1) viewing any student record without errors, (2) viewing any fee invoice without errors, (3) deleting a parent who has no students assigned.

**Acceptance Scenarios**:

1. **Given** a user views a student record, **When** the page loads, **Then** the student details display correctly without errors
2. **Given** a user views a fee invoice, **When** the page loads, **Then** the invoice amount and line items display correctly without collection access errors
3. **Given** a parent has zero students assigned, **When** an admin deletes the parent, **Then** the deletion succeeds without checking for negative student counts

---

### User Story 3 - Ensure Financial Data Integrity (Priority: P0)

As a school accountant, I want all financial operations to be accurate and reversible so that the school's financial records are reliable and errors can be corrected without data corruption.

**Why this priority**: Financial data corruption directly impacts the school's ability to track payments, invoices, and balances. Reversed credit/debit entries produce incorrect account balances. Double entry in fee invoices inflates revenue. Status inconsistencies between `paid`/`not_paid` and `paid`/`unpaid` cause reports to be wrong. Race conditions in auto-numbering can produce duplicate invoice numbers.

**Independent Test**: Can be verified by: (1) creating a payment and confirming the fund account balance changes correctly, (2) creating a fee invoice and confirming only one student account entry is created, (3) checking that all status values across the database use a consistent naming convention, (4) running concurrent auto-number generation and confirming no duplicates.

**Acceptance Scenarios**:

1. **Given** a payment is recorded, **When** the fund account is updated, **Then** credits increase the balance and debits decrease it (not reversed)
2. **Given** a fee invoice is created, **When** the student account is updated, **Then** exactly one accounting entry is created (not duplicated)
3. **Given** the system uses payment status values, **When** any part of the system references a status, **Then** it uses `paid`/`not_paid` consistently
4. **Given** a receipt or invoice is deleted, **When** the deletion is processed, **Then** the corresponding student account, fund account, and invoice status are all reversed to their pre-transaction state
5. **Given** two requests generate auto-numbers simultaneously, **When** both complete, **Then** no duplicate numbers are produced

---

### User Story 4 - Close Medium-Severity Vulnerabilities (Priority: P1)

As a security administrator, I want medium-severity vulnerabilities closed so that the attack surface is minimized and common web application attacks (XSS, CSRF bypass, path traversal) are prevented.

**Why this priority**: These are real vulnerabilities but require more specific conditions to exploit. GET-based destroy routes can be triggered by link prefetching. Path traversal in backups could expose server files. XSS in Blade templates could enable session hijacking. Missing CSRF on backup operations could allow unauthorized backups.

**Independent Test**: Can be verified by: (1) confirming all destroy routes use HTTP DELETE, (2) confirming backup file paths are sanitized, (3) confirming no `{!! !!}` unescaped output exists in user-facing templates, (4) confirming backup operations are protected by CSRF.

**Acceptance Scenarios**:

1. **Given** a user clicks a delete button, **When** the form submits, **Then** it sends a DELETE request (not GET) protected by CSRF
2. **Given** a malicious file name is provided for backup, **When** the backup is created, **Then** path traversal characters are stripped and the file is saved safely
3. **Given** user-controlled data is displayed in a template, **When** the page renders, **Then** the data is HTML-escaped to prevent XSS
4. **Given** a backup operation is triggered, **When** the request is processed, **Then** it requires CSRF token and is rate-limited

---

### User Story 5 - Fix Critical Issues in Schedules, Reports, Backup, and Activity Log (Priority: P0-P1)

As a school administrator, I want the schedules, reports, backup, and activity log modules to function correctly and securely so that class scheduling works reliably, reports display accurate data, backups are safe, and system activity is properly tracked.

**Why this priority**: The schedule module can delete all school schedules without a transaction — if auto-generation fails midway, the school loses its entire schedule. The report controller has a fatal error (`DB::raw` without import) that crashes the final year report. The backup controller runs synchronously without rate limiting. The activity log has wildcard injection and no authorization checks. These issues affect core school operations.

**Independent Test**: Can be verified by: (1) generating schedules in a transaction that rolls back on failure, (2) viewing the final year report without fatal errors, (3) confirming backup operations are queued and rate-limited, (4) confirming activity log filtering prevents SQL wildcard injection.

**Acceptance Scenarios**:

1. **Given** a schedule auto-generation is triggered, **When** the process fails midway, **Then** the database rolls back and no schedules are lost
2. **Given** a user views the final year report, **When** the page loads, **Then** it displays correctly without fatal errors
3. **Given** a user requests a backup, **When** the request is processed, **Then** it runs asynchronously via a queue job with rate limiting
4. **Given** a user filters the activity log by action, **When** the filter contains `%` or `_` characters, **Then** those characters are escaped and do not act as SQL wildcards
5. **Given** an unauthenticated user attempts to view activity logs, **When** the request is processed, **Then** access is denied

---

### User Story 6 - Improve Performance and Reduce N+1 Queries (Priority: P1)

As a user of the school management system, I want pages to load quickly and efficiently so that daily operations are not slowed down by poor database performance.

**Why this priority**: N+1 query problems cause pages to make dozens or hundreds of database queries instead of a few. This degrades performance as data grows. Replacing `DB::table()` with proper Eloquent relationships improves maintainability and leverages Laravel's query optimization.

**Independent Test**: Can be verified by: (1) enabling query logging and confirming no N+1 queries on affected pages, (2) confirming all `DB::table()` calls for relationship-like data are replaced with Eloquent relationships.

**Acceptance Scenarios**:

1. **Given** a user views a page with related data, **When** the page loads, **Then** related data is eager-loaded in a single query (not N+1)
2. **Given** a developer reviews the codebase, **When** searching for `DB::table()` calls on relationship data, **Then** all instances have been replaced with Eloquent relationships

---

### User Story 7 - Reduce Architectural Technical Debt (Priority: P1-P2)

As a development team, I want architectural technical debt reduced so that the codebase is maintainable, new features can be built safely, and the risk of introducing bugs is minimized.

**Why this priority**: Large service classes (500+ lines) are hard to understand and modify. Missing database indexes cause slow queries. Inconsistent naming conventions (lowercase model files, plural relationship names for belongsTo, typos) confuse developers. Empty scopes and traits that don't function as intended create false assumptions.

**Independent Test**: Can be verified by: (1) confirming no service class exceeds 200 lines, (2) confirming critical query columns have indexes, (3) confirming model files follow PSR-4 naming, (4) confirming all relationship names are accurate.

**Acceptance Scenarios**:

1. **Given** a developer works on the inventory module, **When** they need to modify business logic, **Then** they interact with focused service classes under 200 lines each
2. **Given** a query filters by `school_id`, **When** the query runs, **Then** it uses a database index for efficient execution
3. **Given** a developer reads model relationship names, **When** they call `belongsTo` relationships, **Then** the method name is singular (e.g., `student()` not `students()`)

---

### Edge Cases

- What happens if the git history rewrite (`.env` removal) breaks existing developer clones? All developers MUST re-clone the repository after the history rewrite. This must be coordinated with the team before execution.
- What happens if a race condition occurs during auto-number generation under high concurrency? The `lockForUpdate()` mechanism prevents duplicate numbers but may cause brief request queuing.
- What happens if the schedule auto-generation transaction is very large? The transaction should be chunked to avoid holding locks for extended periods.
- What happens if a backup file is being created while another backup is in progress? Rate limiting prevents concurrent backups; the second request is queued or rejected.
- What happens if a user has roles from multiple schools? The school scope must be derived from the authenticated user's primary school assignment.

## Requirements *(mandatory)*

### Functional Requirements

**Security Foundation (Sprint 1)**

- **FR-001**: The `.env` file and all credentials MUST be removed from git history using `git filter-repo` or BFG Repo-Cleaner with a full history rewrite, ALL credentials MUST be rotated immediately, and all developers MUST re-clone the repository
- **FR-002**: `.gitignore` MUST include `.env` to prevent re-commitment
- **FR-003**: The password change operation MUST actually update the existing user record (not create a new one) so that the new password takes effect
- **FR-004**: All controllers that query models with `school_id` MUST apply school filtering using the existing `SchoolTrait::getSchool()` pattern — controllers identified with missing filters (PaymentPartsController, ExceptionFeesController, StudentsController edit, ClassRoomsController, ReportController, SchoolFeeController, AdminEraController) MUST add `->where('school_id', $school->id)` or use models with `BelongsToSchool` trait
- **FR-005**: All API routes for grades, classes, and academic years MUST require `auth:sanctum` authentication
- **FR-006**: All API create/update/delete operations MUST verify the authenticated user has permission via Policy or Gate checks
- **FR-007**: All API routes MUST be protected by rate limiting (60 requests per minute per authenticated user)
- **FR-008**: `isAdmin` and `school_id` MUST be removed from mass-assignable (`$fillable`) fields on all models; Spatie roles MUST be used for admin authorization
- **FR-009**: A static analysis tool (Larastan or equivalent) MUST be integrated to catch type errors, undefined variables, and incorrect property access automatically

**Critical Bug Fixes (Sprint 2)**

- **FR-010**: The student show method MUST use the correct variable name (`$student` not `$stuudent`) so the view renders without errors
- **FR-011**: The fee invoice show method MUST correctly access the `fees` relationship as a collection and iterate over it to sum amounts (not access `->amount` directly on a collection)
- **FR-012**: The parent deletion method MUST check that the student count equals zero (not less than zero) before allowing deletion

**Financial Data Integrity (Sprint 3)**

- **FR-013**: The payment service fund account method MUST apply credits to increase balance and debits to decrease balance (not reversed)
- **FR-014**: Fee invoice creation MUST produce exactly one student account entry (remove duplicate `CreateStudentAccount()` call)
- **FR-015**: All payment status values across the entire database and all enums MUST use `paid`/`not_paid` consistently — any existing `paid`/`unpaid` values MUST be migrated to `paid`/`not_paid`
- **FR-016**: The `scopeActive()` method MUST filter by `is_active = true` without conflicting with soft deletes
- **FR-017**: All financial relationships (e.g., `SchoolFee::fee_invoices()`, `SchoolFee::students()`, `ExceptionFees::classroom()`) MUST be correctly defined and functional
- **FR-018**: Deleting a receipt or invoice MUST trigger an accounting reversal that restores `student_accounts`, `fund_accounts`, and invoice status to their pre-transaction state
- **FR-019**: The auto-number generation method MUST use `lockForUpdate()` to prevent race conditions under concurrent requests

**Medium Vulnerabilities (Sprint 4)**

- **FR-020**: All payment-related destroy routes MUST use HTTP POST/PATCH with CSRF token (not GET)
- **FR-021**: The backup file path MUST be sanitized to prevent path traversal attacks
- **FR-022**: CSRF protection and rate limiting MUST be enabled on all backup operations
- **FR-023**: All `{!! !!}` (unescaped) output in Blade templates MUST be replaced with `{{ }}` (escaped) output, except where raw HTML is explicitly required and the content is trusted
- **FR-024**: Flash messages used in JavaScript contexts MUST be properly escaped to prevent XSS
- **FR-025**: The `AdminIpWhitelist` middleware MUST be removed entirely (dead code cleanup)
- **FR-026**: Route definitions MUST place specific routes before wildcard routes to prevent unintended route matching
- **FR-027**: `PromotionController::store()` and `InventoryGardController::update()` MUST have dedicated FormRequest validation classes

**Schedules/Reports/Backup/ActivityLog Fixes (Sprint 4.5)**

- **FR-028**: Schedule deletion and regeneration MUST be wrapped in a `DB::transaction()` so that failure rolls back all changes
- **FR-029**: Schedule operations MUST be protected by Policy or Gate authorization checks
- **FR-030**: Schedule Livewire component MUST use `#[Computed]` properties for data that doesn't change between renders (teachers, classes, grades) to eliminate N+1 queries
- **FR-031**: The schedule auto-generation algorithm MUST implement load balancing so that teachers are distributed evenly across available time slots
- **FR-032**: Deprecated `$listeners` property MUST be replaced with `#[On('event')]` attributes (Livewire v3+ convention)
- **FR-033**: The report controller's `final_year` method MUST fix the `DB::raw` usage so the report renders without fatal errors
- **FR-034**: All report controller methods MUST have validation and authorization checks
- **FR-035**: The `ReportService` dependency MUST be utilized in report methods instead of duplicating logic in the controller
- **FR-036**: Large report methods (`student_report`, `final_year`) MUST be extracted into the service layer
- **FR-037**: Duplicated stock-report logic (`clothe_stock`, `book_sheet_stock`, `stock_product`) MUST be consolidated into a single reusable method
- **FR-038**: Backup creation MUST be dispatched as a queued job instead of running synchronously in the HTTP request
- **FR-039**: Backup operations MUST be rate-limited and must not allow deletion of currently-active backup copies
- **FR-040**: Activity log `action` filter MUST escape `%` and `_` characters to prevent SQL wildcard injection
- **FR-041**: Activity log controller MUST handle null `school_id` gracefully instead of crashing
- **FR-042**: Activity log viewing MUST require authorization checks
- **FR-043**: Activity log queries MUST avoid redundant `today()` calculations by reusing query clones

**Performance (Sprint 5)**

- **FR-044**: All Eloquent relationship access in loops MUST use eager loading (`with()`) to prevent N+1 queries
- **FR-045**: All `DB::table()` calls on relationship data (teacher_grade, school__fees, role_has_permissions) MUST be replaced with proper Eloquent relationship methods
- **FR-046**: Redundant query methods (e.g., `->first()` after `findOrFail()`) MUST be removed
- **FR-047**: Unnecessary collection re-filtering MUST be replaced with direct element access

**Architecture (Sprint 6)**

- **FR-048**: Missing database indexes MUST be added, including `school_id` on critical tables and composite indexes on `inventory_orders`/`inventory_transactions`
- **FR-049**: God classes MUST be decomposed: `InventoryService` (539 lines) into 3 focused services, `FinancialService` into 3 focused services
- **FR-050**: `SchoolTrait` MUST be removed from the service layer; school context MUST be passed as a parameter instead of relying on `Auth::user()` inside services
- **FR-051**: Domain-specific exception classes (`InventoryException`, `FinancialException`) MUST be created for meaningful error handling
- **FR-052**: All existing tests MUST continue to pass; new tests MUST be added for multi-tenancy enforcement and financial operations
- **FR-053**: Model files with lowercase names (`classes.php`, `schedules.php`, `nationality.php`, `promotion.php`) MUST be renamed to follow PSR-4 conventions
- **FR-054**: Relationship methods using plural names for `belongsTo` (e.g., `students()` in `FeeInvoice`) MUST be renamed to singular
- **FR-055**: Relationship methods with typos (`Adadmice_year()`, `excpetion()`, `recipt_payment()`) MUST be corrected
- **FR-056**: Empty `SchoolScope` implementations MUST be replaced with a functional scope that actually filters by `school_id`

### Key Entities

- **User/Employee**: System users with roles, school assignments, and authentication credentials
- **Student**: Enrolled students linked to parents, grades, classrooms, and financial accounts
- **School**: Multi-tenant boundary — all data is scoped to a school
- **FeeInvoice**: Financial invoices linking students to school fees with payment tracking
- **ReceiptPayment**: Payment records linking to students, invoices, and fund accounts
- **StudentAccount**: Running balance ledger for each student's financial activity
- **FundAccount**: School fund accounts tracking incoming/outgoing payments
- **InventoryItem**: School inventory items (stocks, clothes, book sheets) with quantities
- **InventoryOrder**: Purchase orders for inventory items
- **Schedule**: Class timetable assignments linking teachers, classes, and time slots
- **Backup**: System backup snapshots with creation timestamps and file paths
- **ActivityLog**: System audit trail recording user actions across the application

## Success Criteria *(mandatory)*

### Measurable Outcomes

- **SC-001**: Zero `.env` files or credentials present in git history
- **SC-002**: Zero cross-school data leaks — all controllers with `school_id` column filter by the authenticated user's school
- **SC-003**: Password changes take effect immediately (100% of test cases pass)
- **SC-004**: All API endpoints require authentication and return 401/403 for unauthenticated requests
- **SC-005**: Zero runtime errors on student view, fee invoice view, and parent deletion pages
- **SC-006**: Financial calculations are accurate — fund account balances match sum of all payments
- **SC-007**: All payment status values use a single consistent naming convention across the entire database
- **SC-008**: Schedule auto-generation failures roll back completely with zero data loss
- **SC-009**: All destroy routes use HTTP DELETE method (zero GET-based destroy routes)
- **SC-010**: Zero unescaped `{!! !!}` outputs in user-facing Blade templates
- **SC-011**: All N+1 query issues resolved — affected pages use ≤5 queries regardless of data volume
- **SC-012**: No service class exceeds 200 lines of code
- **SC-013**: All existing tests pass after changes; new tests cover multi-tenancy and financial operations
- **SC-014**: Static analysis (Larastan) passes with zero errors on the codebase

## Assumptions

- The school management system is an internal application with no external API consumers — HTTP method changes (GET to DELETE) are safe
- The existing authentication system (Laravel Sanctum) will be reused for API security
- Spatie roles/permissions package is already installed and configured
- Multi-tenancy is enforced via `school_id` column on relevant tables, using `BelongsToSchool` trait + `SchoolScope` global scope + `SchoolTrait` controller helper
- The application uses Laravel 10 with Livewire 4, Alpine.js 3, and Tailwind CSS v4
- Database is MySQL/MariaDB
- Backup operations use `spatie/laravel-backup` package
- The legacy inventory system (stocks, clothes, book_sheets) has already been replaced with the centralized inventory system
- All existing tests use PHPUnit (not Pest)
- The team has access to the git repository and can perform history rewriting
- The `.env` credentials rotation must be coordinated with all deployment environments
