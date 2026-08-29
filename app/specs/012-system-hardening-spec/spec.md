# Feature Specification: System Hardening & Correctness Remediation

**Feature Branch**: `010-system-hardening-spec`
**Created**: 2026-08-28
**Status**: Draft
**Input**: User description: "create specification plan with best practices for docs/analysis-system-full.md"

## Background

The full-system analysis (`docs/analysis-system-full.md`) identified a set of **critical security vulnerabilities**, **financial correctness bugs**, **inventory/consistency defects**, and **maintainability issues** across a multi-tenant school management system. This specification defines the user-visible behavior and measurable outcomes required to remediate those findings, prioritized by business risk. It deliberately avoids prescribing implementation details (languages, frameworks, packages), which are addressed in the planning phase.

The remediation scope is organized into four risk tiers that must be delivered in order:

1. **Phase 1 — Critical security** (privilege escalation, disabled-account login, open registration, brute-force protection)
2. **Phase 2 — Financial correctness** (money precision, double-entry reversal, fund-sign consistency, ledger integrity)
3. **Phase 3 — Inventory consistency** (auto-numbering, stock concurrency, order creation, authorization) — delivered as **constraints/requirements for the new rebuilt inventory system** (an in-flight centralization effort), not as patches to the legacy inventory code
4. **Phase 4 — Quality & hardening** (data leaks, missing constraints, indexing, performance, dead code)

## Clarifications

### Session 2026-08-28

- Q: Should Phase 3 (inventory consistency) fix the legacy inventory system, apply as constraints for the new rebuilt inventory system, or both? → A: Constraints for the new rebuilt inventory system (fits the ongoing rebuild). Phase 3 requirements must be honored by the new centralized inventory tables rather than patching code slated for deletion.
- Q: Must every privileged action produce a persistent, tamper-resistant audit log entry? → A: Yes — every privileged action is logged, and the log is tamper-resistant to the acting admin.
- Q: Beyond preventing new defects, must existing data be cleaned up/normalized, or detected-and-reported only? → A: Detect + report, auto-reconcile only the unambiguous (orphan rows, sign-consistency), manual review for ambiguous cases (e.g., duplicate order numbers).

## User Scenarios & Testing *(mandatory)*

### User Story 1 - Only Administrators Can Perform Administrative Actions (Priority: P1)

A regular logged-in user (teacher, accountant, or any school staff) must never be able to promote accounts to administrator, reset other users' passwords, change emails, disable logins, or assign roles. Only users explicitly granted administrative privileges may perform these actions.

**Why this priority**: This is the most severe finding in the analysis — any authenticated user can currently escalate themselves to full administrator and take over the system. It is an immediate, existential security risk to every school tenant.

**Independent Test**: Can be fully tested independently by verifying that a non-admin authenticated user is denied access to every administrative endpoint while an admin is granted access, delivering a hard security boundary.

**Acceptance Scenarios**:

1. **Given** a non-admin user is authenticated, **When** they attempt to access any administrative management action (promote admin, reset password, change email, disable login, assign roles), **Then** the request is rejected with an authorization error and no data is changed.
2. **Given** an authenticated user attempts to manage another user's account, **When** the request is processed, **Then** the target user's password hash, email, login status, admin flag, and roles remain unchanged.
3. **Given** an administrator manages users, **When** they view the user list, **Then** no raw password hashes are exposed to any browser response.

---

### User Story 2 - Disabled Employee Accounts Cannot Log In (Priority: P1)

When an administrator disables a staff account (sets `login_allow = false`), that person must be unable to sign in. When re-enabled, the account must become usable again without a password reset. Disabled accounts must also not be able to access the system through any other route.

**Why this priority**: Currently the disable flag is stored but never enforced, so terminated or suspended staff retain full access. This is a critical access-control gap that compounds the privilege-escalation risk.

**Independent Test**: Can be tested independently by disabling an account and confirming login is rejected, then re-enabling and confirming login succeeds.

**Acceptance Scenarios**:

1. **Given** an account has been disabled by an administrator, **When** the account owner submits valid credentials, **Then** authentication is rejected with a clear "account disabled" message.
2. **Given** a previously disabled account is re-enabled, **When** the owner submits valid credentials, **Then** authentication succeeds.
3. **Given** a disabled account, **When** the owner attempts to register, reset a password, or otherwise gain access, **Then** the attempt is denied or nullified.

---

### User Story 3 - Anonymous Users Cannot Create Accounts or See Cross-School Data (Priority: P1)

A visitor to the system should not be able to self-register an account without being provisioned by a school administrator. Any authenticated account must only ever see data belonging to its own school. No authenticated user should ever see users or data from other schools simply by having an account.

**Why this priority**: Open public registration combined with cross-school scope leaking exposes every school's users and data to unprovisioned accounts. This is both a security and a tenant-isolation (multi-tenancy) failure.

**Independent Test**: Can be tested independently by attempting public registration (which should be blocked) and by confirming that a freshly provisioned account views only its own school's data.

**Acceptance Scenarios**:

1. **Given** the system is in normal operation, **When** an anonymous visitor attempts to self-register, **Then** registration is either disabled, gated, or requires the visitor to be invited/provisioned by an administrator.
2. **Given** an authenticated user in school A, **When** they access user listings or dashboards, **Then** they see only school A's data, never school B's.
3. **Given** any account, **When** it lacks an assigned school, **Then** it does not implicitly become a super-admin and cannot see all schools' data.

---

### User Story 4 - Login and Authentication Are Protected Against Brute Force (Priority: P1)

Repeated failed login attempts, registration, and password-reset attempts must be rate-limited so that automated credential-guessing and password-recovery loops are slowed or blocked without harming legitimate single-attempt logins.

**Why this priority**: Rate-limiting protection currently exists but is not wired into the authentication flow, leaving credential-guessing unmitigated.

**Independent Test**: Can be tested independently by issuing many rapid failed login attempts and confirming the system starts rejecting or throttling them after a threshold.

**Acceptance Scenarios**:

1. **Given** a user provides incorrect credentials repeatedly, **When** failed attempts exceed the threshold, **Then** the system locks or throttles further attempts for a defined period.
2. **Given** rapid automated requests to registration and password-reset endpoints, **When** the request volume exceeds the limit, **Then** the endpoints reject excess requests without disrupting legitimate single submissions.
3. **Given** a legitimate single login attempt, **When** credentials are correct, **Then** authentication proceeds without encountering rate limits.

---

### User Story 5 - Financial Records Are Precise and Never Corrupt Ledgers (Priority: P2)

All money calculations must be exact to the cent in every scenario: creating fees, recording payments, issuing exchange bonds, reversing transactions, and voiding invoices. A recorded payment must never silently lose money, double-count a balance, sign the school fund inconsistently, or leave an orphaned ledger entry when an invoice is voided.

**Why this priority**: Current calculations may lose cents, inflate a student's balance, record the same economic event with opposite signs in the school fund, and void invoices without reversing their ledger entries. These produce corrupt and untrustworthy financial reports.

**Independent Test**: Can be tested independently by running a consistent set of fee/payment/reversal/void operations and confirming that student balances and the school fund reconcile exactly with the economic events.

**Acceptance Scenarios**:

1. **Given** a fee invoice is paid, **When** the payment is recorded, **Then** the student balance and the school fund both reflect the exact amount without rounding error and with a consistent sign across all payment types.
2. **Given** an exchange bond is edited, **When** the update is saved, **Then** the original ledger entry is reversed before the new amount is recorded, so the student balance never inflates.
3. **Given** a fully-paid invoice is voided, **When** the void completes, **Then** the associated ledger debit is reversed and the invoice is removed without leaving an orphaned entry.
4. **Given** a partial payment or an over-payment, **When** it is processed, **Then** the exact paid amount is recorded and any surplus/remainder is tracked, never silently dropped.

---

### User Story 6 - Inventory Numbers Are Unique, Stock Cannot Oversell, and Orders Are Correct (Priority: P2)

Every inventory order gets one unique, consistently-formatted number; concurrent sales must never sell more stock than is available; both purchase ("tawreed") and sales ("sarf") orders can actually be created through the interface; and only authorized staff can mark an order as paid.

**Why this priority**: Conflicting number generators crash on insert, concurrent sales oversell stock, purchase orders cannot be created through their UI, and a `GET` request lets anyone toggle payment state — all undermining inventory integrity.

**Independent Test**: Can be tested independently by creating numbers for many orders, simulating concurrent stock deductions, creating both order types, and verifying that only authorized users can change payment state.

**Acceptance Scenarios**:

1. **Given** multiple inventory orders of different types are created, **When** each is assigned a number, **Then** all numbers are unique within the same school and type and follow a single consistent format.
2. **Given** stock quantity at a limit, **When** two concurrent sales attempt to deduct the last units simultaneously, **Then** at most the available quantity is sold and stock never goes negative.
3. **Given** a user needs to record an incoming (purchase) order, **When** they use the order-creation interface, **Then** they can select the purchase type and successfully save a purchase order.
4. **Given** a user attempts to change an order's paid state, **When** the action is performed, **Then** only users with appropriate permission can do so, and the action cannot be triggered accidentally (e.g., by visiting a link).

---

### User Story 7 - Stock Data Supports Zero Values and Full Editing (Priority: P3)

Inventory staff must be able to set a price or quantity to zero and to disable (deactivate) an item, and these changes must take effect rather than being silently ignored.

**Why this priority**: Current update logic filters out zero and false values, so valid corrections (e.g., reducing stock to zero or deactivating an obsolete item) are ignored and stale data persists.

**Independent Test**: Can be tested independently by updating an item's price to zero, setting quantity to zero, and deactivating an item, then confirming each change is persisted.

**Acceptance Scenarios**:

1. **Given** an inventory item has a non-zero price and quantity, **When** an authorized user sets both to zero, **Then** both values are saved as zero.
2. **Given** an active inventory item, **When** an authorized user deactivates it, **Then** the item's active status is saved as inactive.

---

### User Story 8 - The System Is Clean, Fast, and Maintainable (Priority: P3)

The system must not leak data across schools through raw queries, must not lose referential integrity or suffer slow lookups from missing constraints and indexes, and must not retain dead, duplicated, or misnamed code that makes maintenance error-prone. Core resource lists must be paginated and heavy dashboards must not recompute expensive aggregates on every view.

**Why this priority**: These issues erode correctness (orphan rows, data leakage), performance (slow reports, stale caches), and the team's ability to safely change the code. They are lower urgency than security/finance but materially affect trust and velocity.

**Independent Test**: Can be tested independently by checking that orphaned data cannot be created, large lists load in pages, and dashboards return consistently current data without unbounded scans.

**Acceptance Scenarios**:

1. **Given** the system enforces referential integrity, **When** a record with a related reference is deleted, **Then** the system prevents or safely handles the deletion rather than leaving orphan rows.
2. **Given** any core entity list, **When** a user views it, **Then** it is returned in pages rather than as a single unbounded load.
3. **Given** repeated dashboard views over a month, **When** a user opens the dashboard, **Then** it returns current data without recomputing expensive aggregates from scratch every time.
4. **Given** any authenticated user in one school, **When** they trigger list/report queries, **Then** the results contain only their own school's data even when raw database queries are involved.

---

### Edge Cases

- What happens when a non-admin account is the last remaining admin and an attempt is made to remove its privilege? (Must prevent lockout.)
- How does the system behave when a disabled account is the currently logged-in session that gets disabled mid-session? (Should invalidate access promptly.)
- What happens when rate limiting is triggered for a legitimate user on a shared network IP address? (Must allow genuine retries after cooldown.)
- How are partial payments of fractions of a cent handled? (Round deterministically or reject for confirmation, never silently lose.)
- What happens during concurrent payment + void of the same invoice? (Must serialize so only one effective outcome.)
- How is an over-payment beyond all installments handled when the user did not request a refund? (Must be tracked as credit/remainder, never dropped.)
- What happens if two order numbers collide despite the fix (e.g., legacy data already contains duplicates)? (Must detect and surface for cleanup rather than crash silently; duplicates are routed for manual review, not auto-changed.)
- How is a purchase order saved when the item has zero cost? (Must still save a valid zero-amount order.)
- What happens to stock when a reversal of a sales order would push stock negative? (Must block or require explicit override.)

## Requirements *(mandatory)*

### Functional Requirements

**Phase 1 — Critical Security**

- **FR-001**: System MUST restrict all administrative user-management actions (promote/demote admin, reset email, reset password, toggle login-allow, assign roles) to users explicitly authorized to perform them.
- **FR-002**: System MUST NOT return, render, or expose password hashes in any administrative listing or API response.
- **FR-003**: System MUST prevent a disabled account (login-allow flag set to disabled) from authenticating through any mechanism, and MUST allow re-authentication once re-enabled.
- **FR-004**: System MUST prevent unprovisioned anonymous self-registration, or require administrator provisioning/invitation before an account can access the system.
- **FR-005**: System MUST only ever expose a user to data belonging to their own school; an account without an assigned school MUST NOT be treated as a system-wide administrator by default.
- **FR-006**: System MUST apply brute-force protection to login, registration, and password-reset attempts that triggers after a threshold of failed/rapid attempts and does not impede legitimate single attempts.
- **FR-006a**: System MUST record a persistent audit-log entry (actor, timestamp, action, target) for every granted privileged action, and MUST protect that log from alteration by the acting administrator.

**Phase 2 — Financial Correctness**

- **FR-007**: System MUST perform all monetary arithmetic in exact cent/precise-decimal terms such that no rounding loss occurs across fee creation, payments, reversals, and voids.
- **FR-008**: System MUST record the school fund with a single consistent sign convention for the same economic event regardless of payment type.
- **FR-009**: System MUST reverse the original ledger entry before recording an amended amount when an exchange/edit is performed on a financial record.
- **FR-010**: System MUST reverse the associated ledger entry whenever an invoice is voided, leaving no orphaned debit.
- **FR-011**: System MUST record every partial payment fully and MUST track any surplus/remainder from over-payment rather than silently dropping it.
- **FR-012**: System MUST preserve referential integrity between inventory orders and their related financial entries so reversals never update the wrong record.

**Phase 3 — Inventory Consistency**

- **FR-013**: System MUST generate order numbers that are unique per school and per order type using a single consistent numbering scheme across all order flows.
- **FR-014**: System MUST serialize stock deductions so that concurrent sales can never sell more stock than is available (stock never goes negative).
- **FR-015**: System MUST allow creation of both purchase and sales order types through their respective interfaces.
- **FR-016**: System MUST authorize any change to an order's paid state and MUST NOT allow it via a simple unauthenticated link navigation.
- **FR-017**: System MUST persist zero values (price = 0, quantity = 0) and inactive/active status when an item is updated.
- **FR-018**: System MUST ensure the polymorphic item/transaction references resolve to the correct related records, and MUST NOT silently return null for valid references.

**Phase 4 — Quality & Hardening**

- **FR-019**: System MUST enforce referential integrity (foreign keys) between related tables so orphan rows cannot be created.
- **FR-020**: System MUST add indexes on frequently-filtered and joined columns used by core lists and reports.
- **FR-021**: System MUST paginate all core entity lists rather than returning unbounded single loads.
- **FR-022**: System MUST scope every data query — including raw database queries and background jobs — to the current school so cross-tenant data never leaks.
- **FR-023**: System MUST return current dashboard data without recomputing heavy monthly aggregates on every request (e.g., via caching that is invalidated correctly across all cache keys).
- **FR-024**: System MUST remove or replace dead, duplicated, and misnamed code paths (dead services, duplicate order-number generators, misspelled class/column names, snake_case enums) with a single consistent implementation.

### Key Entities *(include if feature involves data)*

- **User / Account**: A staff member or administrator account with credentials, login-enabled flag, admin flag, roles, and an optional school assignment. Central to access control.
- **School (Tenant)**: The isolation boundary; every data record and account belongs to a single school and must never leak across it.
- **Role / Permission**: The authorization model that governs who may perform administrative actions.
- **Inventory Item**: A stockable product with price, quantity, and active/inactive status.
- **Inventory Order**: A purchase or sales order with a per-school/type-unique number, line items, and a paid state.
- **Inventory Transaction**: A movement record (initial, sale, purchase, reversal, adjustment) referencing an order.
- **Student Account / Ledger**: The per-student financial ledger of debits and credits.
- **School Fund**: The aggregate fund account whose sign must be consistent across payment types.
- **Fee Invoice**: A bill for a student linked to ledger entries and (for inventory) to an order.
- **Rule of thumb**: The system treats money as precise decimal/cent values and transactions as double-entry (every credit has a corresponding debit).

## Success Criteria *(mandatory)*

### Measurable Outcomes

- **SC-001**: 100% of administrative user-management actions are denied for non-admin authenticated users and permitted for admins, verified across all affected endpoints.
- **SC-002**: A disabled account is rejected on login in under 1 second from submission, and re-enabled accounts sign in successfully.
- **SC-003**: No anonymous self-registration creates an account with access to another school's data; a provisioned account sees only its own school's data in 100% of list/dashboard/API queries.
- **SC-004**: Brute-force protection triggers after 5 failed/rapid attempts with an initial 1-minute lockout that escalates on repeated failures, and allows a legitimate login to succeed on the first correct attempt.
- **SC-005**: 100% of audited fee/payment/reversal/void scenarios reconcile to the cent; the school fund shows one consistent sign per economic event across all payment types; no orphaned ledger entries remain after void.
- **SC-006**: Every inventory order number is unique within its school/type across 10,000 generated orders with zero collisions.
- **SC-007**: Concurrent oversell protection guarantees stock never goes negative under a simulated 100-concurrent-sale load.
- **SC-008**: 100% of zero-value and deactivate item updates persist correctly.
- **SC-009**: Core lists return in pages (e.g., ≤ 50 records/page) and dashboards return current data without unbounded scans or stale values.
- **SC-010**: All raw-query and background-job paths are school-scoped; cross-tenant leakage reduces to zero in automated tests.
- **SC-011**: 100% of privileged actions produce a persistent audit-log entry that cannot be altered by the acting admin.

## Assumptions

- The authorization model (roles/permissions/policies) is reused rather than replaced; remediation focuses on applying it consistently to the unprotected paths.
- Money stored as fixed-point decimal remains the storage approach; remediation is in calculation and double-entry discipline, not a wallet/ledger system redesign.
- Multi-tenancy is required (schools must remain isolated); super-admin is an explicit, provisioned role, not an implicit default for school-less accounts.
- Registration may be kept but MUST be gated/provisioned; public open self-service is considered out of scope unless the tenant explicitly opts in.
- Existing encrypted password storage and session-based authentication are retained.
- Legacy data may contain duplicate/conflicting order numbers and orphan/sign-inconsistent records; remediation must detect and report them, auto-reconcile only the unambiguous records, and route ambiguous cases (e.g., duplicate order numbers) to manual review rather than silently altering them.
- Inventory and finance hardening can be delivered independently of each other, but Phase 1 security is a prerequisite for all other phases.
- Phase 3 (inventory consistency) requirements are binding constraints for the new centralized inventory system already underway; the legacy inventory code is out of scope for direct patching here.
- The "plan" output from this workflow (spec → plan → tasks) will translate these requirements into implementation steps; this specification intentionally omits the technology stack.
