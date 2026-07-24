# System Hardening — Remaining Tasks

> Replaces: `specs/005-system-repair-hardening`
> Source: `docs/todo.md` (July 23, 2026)

---

## Clarifications

### Session 2026-07-23

- Q: How should Form Request validation errors be presented to the user? → A: Standard Laravel validation error bag — existing Blade/Livewire components already display these, no custom format needed
- Q: What performance thresholds should UI verification use? → A: Page load <3s, DataTable filter+sort+paginate <5s, JS bundle <200KB gzipped
- Q: Which permission naming convention should authorization checks use? → A: Existing convention `{entity}-{action}` (e.g., Students-create, FeeInvoice-list) — matches all 8 existing policies

---

## Overview

The iSchool Management System has completed ~60% of its hardening roadmap. Core infrastructure (security headers, queue config, database indexes, backup schedules) and major features (service extraction, policy creation, UI migration) are done. What remains is a curated set of ~40 tasks across 10 categories: security integration, input validation, route conventions, test coverage, code quality, translations, and UI verification. This spec consolidates all remaining work into a single execution plan with clear priorities and dependencies.

## Actors

- **School Administrator**: Daily system user — benefits from fixed code quality issues (correct boolean comparisons, consistent naming, reliable pagination), working authorization, and complete translations
- **Developer**: Maintains the codebase — benefits from Form Request validation on all controllers, proper authorization checks, test coverage, consistent route conventions, and removed dead code
- **QA Tester**: Verifies UI correctness — benefits from manual verification checklist for keyboard nav, ARIA, mobile, RTL, dark mode, and performance

## User Scenarios

### Scenario 1: Authorization Enforcement

**Given** the system has 8 Policy classes and 20+ Form Request classes

**When** a user attempts to create, update, or delete a resource

**Then** the controller checks authorization via `$this->authorize()` or Form Request `authorize()` method

**And** the policy checks the user's permission using `{entity}-{action}` naming (e.g., `Students-create`, `FeeInvoice-list`)

**And** unauthorized actions return 403 Forbidden

### Scenario 2: Input Validation Completeness

**Given** 7 controllers still use raw `Request $request` instead of Form Requests

**When** a user submits any form (classroom, receipt payment, exception fees, user, role, job)

**Then** a dedicated Form Request class validates all fields with proper rules and translatable error messages

**And** the controller delegates validation entirely to the Form Request

**And** `school_id` scoping is enforced in Form Request `authorize()` where applicable

### Scenario 3: RESTful Route Conventions

**Given** routes currently use GET for destructive actions and snake_case URL segments

**When** routes are standardized

**Then** destructive operations use DELETE method, updates use PUT method — all Blade forms updated with `@method()` directives

**And** URL segments use kebab-case (e.g., `fee-invoices` instead of `fees_invoices`)

**And** the inventory catch-all route is positioned last to avoid shadowing specific routes

### Scenario 4: Code Quality Consistency

**Given** controller naming is inconsistent (`promotionController`, `fund_accountsController`, `schedulesController`) and hardcoded values exist throughout

**When** code quality fixes are applied

**Then** all controllers use PascalCase naming conventions

**And** currency values reference a config value instead of hardcoded `'EGP'`

**And** academic year status checks use proper booleans instead of string comparisons

**And** pagination limits are configurable instead of hardcoded

### Scenario 5: Test Coverage

**Given** 4 controllers and all 8 policies have zero test coverage

**When** tests are written and executed

**Then** ReceiptPaymentController, ExchangeBondController, ExceptionFeesController, and PaymentPartsController are tested with valid and invalid data

**And** all 8 policies are tested for permission-based authorization

**And** the full test suite passes with exit code 0

### Scenario 6: Complete Translations

**Given** ~50 translation keys are missing or mismatched across namespaces

**When** a user switches the interface between English and Arabic

**Then** all labels, messages, and navigation items display correct translations

**And** namespace mismatches are fixed (grade→Grades, classrooms→class_rooms, etc.)

**And** HomeController plain-text keys are namespaced properly

### Scenario 7: UI Manual Verification

**Given** the migrated UI components (sidebar, dashboard, tables, modals, settings) are complete

**When** a QA tester performs manual verification

**Then** keyboard navigation works through sidebar, tables, and forms

**And** ARIA attributes are present on interactive elements

**And** mobile layouts at 375px show no content cutoff or horizontal scroll

**And** RTL layout renders correctly in Arabic

**And** dark mode toggle works across all pages

**And** print stylesheet produces correct output

**And** screen readers can navigate the interface

**And** focus management works during modal open/close

**And** bundle size and load times meet performance targets (page load <3s, DataTable <5s, bundle <200KB gzipped)

**And** all major browsers render correctly

## Functional Requirements

### Schedule Verification (Phase 1)
- FR-1.1: Run `php artisan view:clear && cache:clear` and verify no errors
- FR-1.2: Verify all routes are accessible and correctly named
- FR-1.3: Run Pint code style check and fix any violations
- FR-1.4: Run full test suite and confirm all tests pass

### Foundation (Phase 2)
- FR-2.1: Document Supervisor configuration for `logs` queue worker, or document cron-based alternative
- FR-2.2: Document cron setup: `* * * * * php /path/to/artisan schedule:run >> /dev/null 2>&1`
- FR-2.3: Add `school_id` scoping validation to all Form Requests where applicable

### Form Requests (Phase 3)
- FR-3.1: Create `ClassRoomStoreRequest` and `ClassRoomUpdateRequest` for ClassRoomsController
- FR-3.2: Create `ClassStoreRequest` and `ClassUpdateRequest` for ClassesController
- FR-3.3: Create `ReceiptPaymentStoreRequest` and `ReceiptPaymentUpdateRequest` for ReceiptPaymentController
- FR-3.4: Create `ExceptionFeeStoreRequest` and `ExceptionFeeUpdateRequest` for ExceptionFeesController
- FR-3.5: Create `UserStoreRequest` and `UserUpdateRequest` for UserController
- FR-3.6: Create `RoleStoreRequest` and `RoleUpdateRequest` for RoleController
- FR-3.7: Create `JobStoreRequest` and `JobUpdateRequest` for JobController
- FR-3.8: All new Form Requests must include translatable error messages using standard Laravel validation error bag (displayed by existing Blade/Livewire components)
- FR-3.9: All new Form Requests must check authorization via `authorize()` using existing permission keys

### Security — Authorization (Phase 5)
- FR-5.1: Register `EmployeePolicy` in `AuthServiceProvider` `$policies` array (currently missing)
- FR-5.2: Add `$this->authorize()` calls to `ClassesController` index, store, update, destroy actions
- FR-5.3: Remove deprecated `HandlesAuthorization` trait from all 8 Policy classes

### Routes — Convention Cleanup (Phase 6)
- FR-6.1: Move `/{type}` catch-all to END of orders group in `routes/inventory.php`
- FR-6.2: Convert 13 `POST /update` route patterns to `PUT /{id}` across 6 route files — update all corresponding Blade forms with `@method('PUT')`
- FR-6.3: Convert 20+ snake_case URL segments to kebab-case across all route files — update all corresponding Blade links and `route()` calls

### Tests (Phase 7)
- FR-7.1: Create `ReceiptPaymentControllerTest` covering store with valid/invalid data, update, delete, and authorization
- FR-7.2: Create `ExchangeBondControllerTest` covering store with valid/invalid data, update, delete, and authorization
- FR-7.3: Create `ExceptionFeesControllerTest` covering store with valid/invalid data, update, delete, and authorization
- FR-7.4: Create `PaymentPartsControllerTest` covering store with valid/invalid data, update, delete, and authorization
- FR-7.5: Create `PolicyTest` covering all 8 policies (Student, FeeInvoice, User, InventoryItem, InventoryOrder, Grade, Class, Employee) for view/create/update/delete permissions
- FR-7.6: All tests must use existing factories where available, create inline models otherwise
- FR-7.7: Run `php artisan test --compact` after all tests are created

### Cleanup Verification (Phase 8)
- FR-8.1: Run `php artisan test --compact` — all tests must pass
- FR-8.2: Run `php artisan route:list` — verify all routes are correctly named and positioned

### Code Quality (CQ)
- FR-CQ1: Rename `promotionController` to `PromotionController` — update all references (routes, type-hints, `use` statements)
- FR-CQ2: Rename `fund_accountsController` to `FundAccountsController` — update all references
- FR-CQ3: Rename `schedulesController` to `SchedulesController` — update all references
- FR-CQ4: Add rate limiting middleware on web routes (throttle:60,1 or configurable)
- FR-CQ5: Replace 7 hardcoded `'EGP'` currency strings with `config('school.currency')` or equivalent config value
- FR-CQ6: Replace 7 hardcoded `AcademicYear::where('status', '0')` with config-driven query
- FR-CQ7: Fix `where('status', 'false')` string comparison to proper boolean in StudentsController (line 114)
- FR-CQ8: Replace 10+ hardcoded `->paginate(10)` with configurable value from config or variable

### Translations
- FR-T1: Fix 5 namespace mismatches (grade→Grades, classrooms→class_rooms, fee_invoices→fee_invoice, receipt→Recipt_Payments, FundAccount→fund_account)
- FR-T2: Namespace 16 plain-text keys in HomeController to namespaced keys
- FR-T3: Add ~40 missing translation keys across `enums.php`, `log.php`, `general.php`, `auth.php`, `Sidebar.php`

### UI Verification (Manual)
- FR-UV1: Keyboard navigation testing — tab through sidebar, tables, forms, modals
- FR-UV2: ARIA attribute verification — labels, roles, live regions on interactive elements
- FR-UV3: Mobile breakpoint testing — content at 375px, 768px, 1024px
- FR-UV4: Performance testing — page load under 3 seconds,DataTable filter+sort+paginate under 5 seconds, JS bundle under 200KB gzipped
- FR-UV5: RTL layout verification — Arabic text direction, alignment, pagination direction
- FR-UV6: Dark mode verification — all pages render correctly in dark theme
- FR-UV7: Focus management testing — modal open/close focus trap, return focus on close
- FR-UV8: Screen reader compatibility — announce page changes, form errors, loading states
- FR-UV9: Print stylesheet testing — print layout for reports and schedules
- FR-UV10: Browser compatibility testing — Chrome, Firefox, Safari, Edge

## Success Criteria

- **Security**: All 8 policies registered, all controllers use authorization checks, deprecated `HandlesAuthorization` trait removed
- **Validation**: All 7 remaining controllers use dedicated Form Request classes with translatable error messages
- **Conventions**: All routes use RESTful methods (PUT/DELETE), kebab-case URLs, correct positioning
- **Code Quality**: All controllers use PascalCase naming, zero hardcoded currency/boolean/pagination values
- **Test Coverage**: All 4 untested controllers and all 8 policies have automated tests; full suite passes
- **Translations**: Zero namespace mismatches, zero missing keys, all user-facing strings translatable
- **UI**: Manual verification passes for keyboard nav, ARIA, mobile, RTL, dark mode, print, performance, and browser compatibility

## Key Entities

- **Form Request**: Validates incoming form data with field-specific rules, authorization checks, and translatable error messages
- **Policy**: Authorizes user actions on models based on role permissions using `{entity}-{action}` naming
- **Route**: Defines HTTP endpoints with correct methods, naming conventions, and URL segment formatting
- **Controller**: Handles HTTP requests — must delegate validation to Form Requests and authorization to Policies
- **Translation Key**: Localized string identifier — must be namespaced and present in both `en/` and `ar/` directories

## Assumptions

- The existing `spatie/laravel-permission` package is properly configured with roles and permissions already defined
- The application uses Laravel 10 conventions (`protected $casts = []` on models, not `casts()` method)
- The Arabic RTL layout must be maintained in all new and modified views
- Existing Form Requests in `app/Http/Requests/` already have proper validation rules and can be used as patterns
- The `phpunit.xml` is already configured with SQLite in-memory database for tests
- Existing factories are available for models used in tests (Student, User, FeeInvoice, ClassRoom, etc.)
- The `school_id` is always available from the authenticated user's school assignment
- The existing permission keys follow `{entity}-{action}` pattern (e.g., `Students-list`, `Students-create`)
- Legacy inventory code (stocks, clothes, book_sheets) remains intact — this spec does not address legacy deletion
- The dashboard widgets API endpoint and session expiry handler already exist and are not part of this scope
- Pint code style must be run after each task (`vendor/bin/pint --dirty --format agent`)

## Scope

**In Scope**:
- 3 schedule verification tasks (T03)
- 3 foundation/documentation tasks (T004, T011, T022)
- 7 Form Request creation tasks (T027-T033)
- 3 security/authorization tasks (T047, T048, T059)
- 3 route convention tasks (T052, T055, T056)
- 5 test coverage tasks (T058-T059e)
- 2 verification tasks (T071, T072)
- 8 code quality tasks (CQ01-CQ08)
- 2 translation categories (~50+ keys)
- 10 UI manual verification tasks

**Out of Scope**:
- Legacy inventory system deletion (stocks, clothes, book_sheets modules)
- New feature development
- Business logic refactoring (Phase 4 tasks — service extraction, N+1 fixes, get_defined_vars removal)
- Database schema changes beyond what's already planned
- Third-party package upgrades
- Performance optimization beyond what's already planned

## Execution Priority

```
1. Security (T047, T048, T059)  ──→  highest priority, zero auth on ClassesController
2. Code Quality (CQ07, CQ04)    ──→  data integrity (boolean fix) + security (rate limiting)
3. Code Quality (CQ01-CQ03)     ──→  naming consistency
4. Form Requests (T027-T033)    ──→  validation completeness
5. Routes (T052, T055, T056)    ──→  RESTful conventions
6. Tests (T058-T059e)           ──→  verification of all above
7. Code Quality (CQ05-CQ06,CQ08)──→  configuration improvements
8. Translations                 ──→  i18n completeness
9. Foundation (T004, T011, T022)──→  documentation
10. Verification (T03, T071,T072)──→  final smoke tests
11. UI Verification (manual)    ──→  last, requires running application
```

## Dependencies

- T048 (authorize calls) depends on T047 (policy registration)
- T059 (remove trait) depends on all policies being registered (T047)
- T055 (PUT routes) depends on all Blade forms being updated with `@method('PUT')`
- T056 (kebab-case URLs) depends on all Blade links using the new URL format
- T071 (test suite) depends on T058-T059e (new tests created)
- All CQ tasks are independent of each other
- All translation tasks are independent of each other
- UI verification tasks are independent but require the application to be runnable
