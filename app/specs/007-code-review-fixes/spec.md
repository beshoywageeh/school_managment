# Feature Specification: Code Review Fixes

**Feature Branch**: `007-code-review-fixes`  
**Created**: 2026-07-24  
**Status**: Draft  
**Input**: User description: "Address remaining pre-existing issues and improvements identified in the code review report (docs/code-review-report.md)"
## Clarifications

### Session 2026-07-24

- Q: Should the DELETE route conversion apply to ALL destroy routes across every module, or only the flagged ones? → A: All modules
- Q: What should the CSP `connect-src` directive allow? → A: Self only
- Q: What validation rules should apply to the `insurance_number` field? → A: Required numeric 10-14 digits
- Q: Should we verify the FinancialService canonical location before standardizing imports? → A: Verify then standardize

## User Scenarios & Testing *(mandatory)*

### User Story 1 - Fix FinancialService Namespace Inconsistency (Priority: P1)

As a developer, I want all controllers to use a consistent namespace for FinancialService so that the codebase is maintainable and import errors don't occur when refactoring.

**Why this priority**: Wrong namespace imports cause runtime errors. Three controllers (`FeeInvoiceController`, `ExchangeBondController`, `ExceptionFeesController`) import from `App\Services\FinancialService` (missing the `Finance` sub-namespace) while others correctly use `App\Services\Finance\FinancialService`. This inconsistency risks breakage during any service refactoring.

**Independent Test**: Can be verified by grepping all controller `use` statements for FinancialService imports and confirming they all reference the same namespace.

**Acceptance Scenarios**:

1. **Given** a developer greps for `FinancialService` imports across all controllers, **When** reviewing the results, **Then** all controllers reference the same fully-qualified class name
2. **Given** the service class exists at a single canonical location, **When** any controller resolves FinancialService via dependency injection, **Then** the correct class is resolved without error

---

### User Story 2 - Convert Destroy Routes from GET to DELETE (Priority: P1)

As a security-conscious developer, I want all resource deletion endpoints to use the HTTP DELETE method instead of GET so that deletions are protected by CSRF middleware and can't be triggered by link prefetching or browser crawlers.

**Why this priority**: GET-based destroy routes bypass CSRF protection entirely. Any page containing an `<img>` tag or link to a destroy URL could silently delete data. This is a security gap that affects data integrity.

**Independent Test**: Can be tested by confirming ALL destroy routes across ALL modules use `Route::delete()` and all Blade forms use `@method('DELETE')` alongside the destroy action.

**Acceptance Scenarios**:

1. **Given** a destroy route exists for a resource, **When** a developer inspects the route definition, **Then** it uses `Route::delete()` not `Route::get()`
2. **Given** a Blade form triggers a destroy action, **When** inspecting the form markup, **Then** it includes `@method('DELETE')` and uses `method="POST"` in the form tag
3. **Given** a user clicks a delete button in the UI, **When** the form submits, **Then** the request is a DELETE request protected by CSRF verification

---

### User Story 3 - Add Missing FormRequest Validations (Priority: P2)

As a system administrator, I want all user creation and update fields to be properly validated so that invalid or malicious data cannot be stored in the database.

**Why this priority**: The `UserStoreRequest` doesn't validate several fields that `UserService::assignFields()` reads directly from the request (`worker_type`, `grade_year`, `lesson_count`, `sepicality`, `national_id_expire_date`, `contract_start_date`, `notes`, `ministry_code`). This allows arbitrary unvalidated data to be persisted.

**Independent Test**: Can be tested by submitting a user creation form with invalid values for the missing fields and confirming validation errors are returned.

**Acceptance Scenarios**:

1. **Given** a user creation form is submitted, **When** `worker_type` contains an invalid value, **Then** the system returns a validation error
2. **Given** a user creation form is submitted, **When** `national_id_expire_date` contains a non-date string, **Then** the system returns a validation error
3. **Given** a user creation form is submitted with all valid data, **When** the form is processed, **Then** the user is created successfully

---

### User Story 4 - Add `insurance_number` to User Mass Assignment (Priority: P2)

As a developer, I want `insurance_number` to be included in the User model's `$fillable` array so that it can be set via mass assignment like other user fields, rather than requiring direct property assignment.

**Why this priority**: The `UserService::prepareUserData()` method sets `insurance_number` but the field isn't in `$fillable`, so `fill()` silently ignores it. This causes data loss on user updates unless direct property assignment is used as a workaround.

**Independent Test**: Can be tested by creating/updating a user with `insurance_number` and confirming the value is persisted.

**Acceptance Scenarios**:

1. **Given** a user is created with a valid `insurance_number` (10-14 digits), **When** the user record is retrieved, **Then** the `insurance_number` value matches what was provided
2. **Given** a user is updated with a new valid `insurance_number`, **When** the user record is retrieved, **Then** the `insurance_number` reflects the update
3. **Given** a user is created with an `insurance_number` that is not numeric or not 10-14 digits, **When** the form is submitted, **Then** a validation error is returned

---

### User Story 5 - Strengthen Content Security Policy Headers (Priority: P3)

As a security administrator, I want the Content Security Policy to be as restrictive as possible while still allowing the application to function, so that the attack surface for XSS and data exfiltration is minimized.

**Why this priority**: The current CSP allows `unsafe-eval` for scripts which is unnecessary for Livewire/Alpine.js. Missing directives (`connect-src`, `font-src`, `frame-src`) leave gaps in protection.

**Independent Test**: Can be tested by inspecting HTTP response headers and verifying CSP directives match the hardened configuration.

**Acceptance Scenarios**:

1. **Given** a page is loaded in the browser, **When** inspecting the Content-Security-Policy header, **Then** `unsafe-eval` is NOT present in `script-src`
2. **Given** a page is loaded, **When** inspecting the CSP header, **Then** `connect-src`, `font-src`, and `frame-src` directives are present with appropriate values

---

### User Story 6 - Remove Orphan Labs Edit Form (Priority: P3)

As a developer, I want orphaned views that reference non-existent routes to be removed so that dead code doesn't confuse future contributors.

**Why this priority**: The orphan labs edit view posts to a non-existent `labs.update` route. This is dead code that could mislead developers.

**Independent Test**: Can be verified by grepping for `labs.update` route references and confirming the view file is removed.

**Acceptance Scenarios**:

1. **Given** a developer searches for `labs.update` in route files, **When** reviewing results, **Then** no route definition is found
2. **Given** a developer searches for `labs.update` in Blade views, **When** reviewing results, **Then** no form references the non-existent route

---

### Edge Cases

- What happens if the FinancialService class is renamed or moved during namespace standardization? The canonical location must be confirmed before changing imports.
- What happens if a destroy route is referenced by external API consumers? The HTTP method change is a breaking change for any external integrations. Assumption: no external API consumers exist (internal school management system only).
- What happens if `insurance_number` contains special characters? The field should be validated as a string with appropriate length limits.
- What if CSP `unsafe-eval` removal breaks any inline JavaScript? Alpine.js and Livewire don't require eval, but custom inline scripts might.

## Requirements *(mandatory)*

### Functional Requirements

- **FR-001**: All controllers MUST import FinancialService from a single canonical namespace (verify canonical location exists before changing imports)
- **FR-002**: All destroy routes across ALL modules (finance, academic, employee, student, inventory, settings, roles, parents, grades, class-rooms, promotions, jobs, fund-accounts, exchange-bonds, school-fees, fee-invoices, receipt-payments, exception-fees, payment-parts, labs) MUST use the HTTP DELETE method
- **FR-003**: All web forms triggering destroy actions MUST use the HTTP DELETE method via form method spoofing
- **FR-004**: The `UserStoreRequest` MUST validate all fields that `UserService::assignFields()` reads from the request
- **FR-005**: The `User` model MUST include `insurance_number` in its `$fillable` array, and `UserStoreRequest`/`UserUpdateRequest` MUST validate it as required, numeric, 10-14 digits
- **FR-006**: The CSP header MUST NOT include `unsafe-eval` in `script-src`
- **FR-007**: The CSP header MUST include `connect-src 'self'`, `font-src 'self' data:`, and `frame-src 'none'` directives
- **FR-008**: The orphan labs edit view MUST be removed (currently references non-existent route)
- **FR-009**: All changes MUST pass `vendor/bin/pint --dirty --format agent` without errors
- **FR-010**: All existing tests MUST continue to pass after changes

### Key Entities

- **User**: Employee/user model with mass-assignable fields including `insurance_number`
- **FinancialService**: Business logic service for financial operations (receipt payments, exchange bonds, exception fees, payment parts)
- **Content Security Policy**: HTTP header configuration controlling resource loading policies
- **Route Definitions**: HTTP method and URI mappings for resource CRUD operations

## Success Criteria *(mandatory)*

### Measurable Outcomes

- **SC-001**: Zero namespace inconsistencies for FinancialService across all controllers
- **SC-002**: Zero destroy routes using HTTP GET method across ALL route files
- **SC-003**: All user-related form request classes validate 100% of fields accessed by their corresponding service methods
- **SC-004**: CSP header contains zero `unsafe-*` directives (except `unsafe-inline` for Livewire/Alpine.js), `connect-src` is `'self'` only, `frame-src` is `'none'`
- **SC-005**: Zero orphan Blade views referencing non-existent routes
- **SC-006**: All existing tests pass with no regressions

## Assumptions

- The canonical FinancialService location is `App\Services\Finance\FinancialService` (matching the 3 controllers that already use it) — implementation MUST verify this location exists before standardizing imports
- The `labs/` module is deprecated and its views can be safely removed without affecting other functionality
- `unsafe-inline` in CSP is acceptable for Livewire/Alpine.js compatibility (these frameworks require it)
- The `insurance_number` field is required, numeric, 10-14 digits (matching Egyptian national ID format)
- External API consumers (if any) will be notified of the DELETE method change before deployment
