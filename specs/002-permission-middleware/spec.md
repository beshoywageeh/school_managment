# Feature Specification: Permission Middleware for All Controllers

**Feature Branch**: `001-permission-middleware`  
**Created**: 2026-07-04  
**Status**: Draft  
**Input**: User description: "Add permission middleware to all controllers following Spatie Permission pattern"

## Clarifications

### Session 2026-07-04

- Q: What is explicitly out of scope? → A: Strictly add middleware constructors only — no new controllers, no UI changes, no permission audits
- Q: What should users see on permission denial? → A: Default Laravel 403 error page — no custom styling or redirect
- Q: Should permission denials be logged? → A: Default framework exception handling — 403 exceptions appear in application logs automatically
- Q: Should permission strings be verified at runtime? → A: Trust the seeder — assume all permission strings exist; no runtime verification needed
- Q: What level of testing for permission gates? → A: Targeted smoke tests — one test per controller verifying middleware registers, plus 2-3 end-to-end gate tests across different controllers

## User Scenarios & Testing *(mandatory)*

### User Story 1 - Administrator Assigns Permissions and Sees Enforcement (Priority: P1)

As a school administrator, I want to assign specific permissions to roles and have those permissions enforced across all management sections so that each user can only access the features they are authorized to use.

**Why this priority**: This is the core value — enforcing access control across all controllers is the entire feature.

**Independent Test**: Can be fully tested by creating a role with a single permission (e.g., `classes-list`), assigning it to a user, and verifying that user can access the classes index but cannot create, edit, or delete classes.

**Acceptance Scenarios**:

1. **Given** a user has a role with only `classes-list` permission, **When** they visit `/classes`, **Then** they see the classes list (200 OK)
2. **Given** a user has a role with only `classes-list` permission, **When** they POST to `/classes` (create), **Then** they receive a 403 Forbidden response
3. **Given** a user has a role with `classes-create` permission, **When** they visit the create class form, **Then** they see the form (200 OK)
4. **Given** a user has no roles with `classes-delete` permission, **When** they DELETE `/classes/1`, **Then** they receive a 403 Forbidden response

---

### User Story 2 - Admin Configures Granular CRUD Permissions (Priority: P1)

As an administrator, I want to assign granular create/read/update/delete permissions per module so that staff members can be given only the access level appropriate for their job.

**Why this priority**: Granular read/write access control must be consistent across all modules so administrators can precisely match permissions to job roles.

**Independent Test**: Can be tested by assigning a user `classes-list` + `classes-create` but NOT `classes-edit` or `classes-delete`, then verifying the user can list and create classes but the edit and delete buttons/actions are unavailable or return 403.

**Acceptance Scenarios**:

1. **Given** a user has `employees-list` and `employees-edit` permissions, **When** they view the employees list and click edit, **Then** they can edit employee details
2. **Given** a user has `employees-list` but not `employees-edit`, **When** they attempt to access the employee edit form, **Then** they receive a 403 Forbidden response
3. **Given** a user has `schoolfees-list` and `schoolfees-create`, **When** they create a new school fee, **Then** the fee is saved successfully

---

### User Story 3 - Developer Verifies Existing Controllers Still Work (Priority: P2)

As a developer, I want the existing dependency injection and controller logic preserved so that adding middleware constructors does not break any existing functionality.

**Why this priority**: Safety — existing controllers may have custom constructors with injected services that must be preserved.

**Independent Test**: Can be tested by running the existing test suite and verifying all tests still pass after middleware constructors are added.

**Acceptance Scenarios**:

1. **Given** a controller with existing dependency injection (e.g., `ClassesController` with `LoggerInterface`), **When** the middleware constructor is added, **Then** the original dependencies are still injected and functional
2. **Given** all middleware constructors have been added, **When** the system enumerates all available routes, **Then** every route resolves correctly without errors
3. **Given** controllers have methods without matching permissions, **When** those methods are accessed, **Then** they still function (ungated at middleware level)

---

### User Story 4 - Custom Permission Actions Are Enforced (Priority: P2)

As an administrator, I want custom actions (import Excel, graduate students, restore deleted records, download backups) to be gated by their specific permissions so that sensitive operations require explicit authorization.

**Why this priority**: Custom actions often handle sensitive operations and must be protected.

**Independent Test**: Create a role with all standard CRUD permissions but exclude `Students-Import_Excel`, then verify the user cannot access the Excel import feature.

**Acceptance Scenarios**:

1. **Given** a user has `Students-list` but not `Students-Import_Excel`, **When** they attempt to access the Excel import endpoint, **Then** they receive a 403 Forbidden response
2. **Given** a user has `backup-download` permission, **When** they download a backup file, **Then** the download succeeds
3. **Given** a user has `Students-graduated` permission, **When** they access the graduation feature, **Then** they can graduate students

---

### Edge Cases

- What happens when a permission suffix (e.g., `-status`, `-pay`, `-print`) has no corresponding method in the controller? The permission middleware is simply not registered for that suffix — no error should occur.
- What happens when a controller has methods that are not covered by any permission (e.g., `getclasses($id)` in StudentsController)? Those methods should remain accessible — only methods with a matching permission are gated.
- What happens when multiple controllers share the same permission group (e.g., `InventoryItemController` handles `stocks-*`, `clothes-*`, `books_sheets-*`)? The constructor must register middleware for each permission group that maps to the controller's methods.
- What does the user see when a permission check denies access? The default Laravel 403 error page is displayed — no custom redirect or flash message is implemented.

## Requirements *(mandatory)*

### Functional Requirements

- **FR-001**: System MUST gate every controller method with the corresponding permission check based on the defined permission-to-method mapping
- **FR-002**: The `-list` permission suffix MUST gate the `index` and `show` methods
- **FR-003**: The `-create` permission suffix MUST gate the `create` and `store` methods
- **FR-004**: The `-edit` or `-update` permission suffix MUST gate the `edit` and `update` methods
- **FR-005**: The `-info` permission suffix MUST gate the `show` method
- **FR-006**: The `-delete` permission suffix MUST gate the `destroy` method
- **FR-007**: Custom permission suffixes (-addstudent, -tammen, -graduated, -restore, -download, -import_Excel, -export_Excel, -pdf, -print, -status, -pay) MUST gate their correspondingly named controller methods
- **FR-008**: Existing dependency injection in controller constructors MUST be preserved when adding permission checks
- **FR-009**: If a controller already has a constructor, permission checks MUST be added inside the existing constructor body without replacing it
- **FR-010**: Controllers with methods that have no matching permission MUST leave those methods ungated at the middleware level
- **FR-011**: The `RoleController` (already having a commented-out constructor) MUST have its constructor uncommented and updated to match the standard pattern
- **FR-012**: All 25+ controllers identified in the permission-to-controller mapping MUST be updated
- **FR-013**: The `schedulesController` (with only an `index()` method) MUST only have middleware for `scheduale-list`; other permission middleware should not be registered until methods exist
- **FR-014**: The `labortories` permission group has no corresponding controller — no middleware is registered for this group; it is skipped
- **FR-015**: Existing `$this->authorize()` calls in controller method bodies MUST be removed where the middleware permission coverage is equivalent and confirmed to match
- **FR-016**: One smoke test MUST be written per controller to verify middleware registers without error
- **FR-017**: At least 2-3 end-to-end permission gate tests MUST be written across different controllers (e.g., one list gate, one create gate, one delete gate)

### Out of Scope

- Creating new controllers or permission groups for modules that lack them
- Building or modifying a permission management user interface
- Auditing existing permission seeds or database records for correctness
- Modifying controller method behavior beyond adding permission checks
- Creating controllers for the `labortories` permission group

### Key Entities

- **Permission**: A named authorization rule (e.g., `classes-list`, `employees-create`) that represents a specific action a user may or may not perform
- **Controller**: A module handler that receives web requests and maps them to specific actions
- **Permission Mapping**: The association between a permission and the specific actions it allows or denies
- **Permission Group**: A set of related permissions sharing the same module prefix (e.g., `classes-list`, `classes-create`, `classes-edit`, `classes-delete`)

## Success Criteria *(mandatory)*

### Measurable Outcomes

- **SC-001**: All 25+ controllers in the inventory have permission checks registered for their available methods
- **SC-002**: A user with a single specific permission can only access the methods gated by that permission (verified via at least 3 test scenarios)
- **SC-003**: A user with no permissions receives 403 Forbidden when attempting any gated action
- **SC-004**: All existing controller dependency injections remain intact and functional after middleware addition
- **SC-005**: System can enumerate all routes without errors after middleware constructors are added
- **SC-006**: Existing test suite passes without regressions after middleware constructors are added
- **SC-007**: No authorization gap exists — every method that handles data mutation (create, update, delete) is gated by an appropriate permission
- **SC-008**: At least 25 smoke tests (one per controller) pass, confirming middleware registers without errors
- **SC-009**: At least 2-3 end-to-end permission gate tests pass, confirming list/create/delete gating works end-to-end

## Assumptions

- The permission system is already installed and configured with middleware registered in the application kernel
- Permission names in the seeder match the permission strings used in middleware (e.g., `classes-list`, `classes-create`) — no runtime verification of permission existence is required
- All listed controllers exist at their specified file paths; the `labortories` permission group has no controller and is skipped
- The existing authentication system (login/session) is already in place; this feature only adds authorization (permission-based) on top of authentication
- Methods that do not map to any existing permission should remain accessible (additional authorization checks already inside method bodies continue to apply)
- The standard mapping of permission suffix to method names follows: `-list` -> index/show, `-create` -> create/store, `-edit`/-`update` -> edit/update, `-delete` -> destroy, `-info` -> show, custom suffixes map to same-named methods
