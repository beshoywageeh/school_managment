# Feature Specification: Deferred Hardening — Track 3

## Background

The school management system (Laravel 10, multi-tenant by school) was analyzed end-to-end and prioritized into three tracks (`docs/أولويات-النظام-الكامل.md`). Tracks 1 and 2 — critical security and the financial work intersecting the September student/account delivery — are already specified and planned in **specs/012-system-hardening-spec/** (phases 1 and 2). Those are out of scope here.

Track 3 captures the **deferred** issues: real but not urgent, and not blocking the student/account delivery. This specification covers only those deferred items, ensuring they are planned and completed as a separate, controlled wave after September. Any Track 3 item already fully covered by 012's plan (inventory consistency, orphan-safe deletion, missing indexes, scoping, pagination, cache fix, dead-code removal, naming) is cross-referenced here to avoid duplicated work, and this spec is the single source of truth for completing the remainder.

> **Relationship note:** Several Track 3 items overlap with 012's phases 3 and 4. Where a Track 3 item is already committed in 012, this spec references it rather than re-specifying it; this spec's own user stories focus on the outcome being fully delivered, and the plan phase will reconcile the two to assign work exactly once.

## Clarifications

### Session 2026-08-28

- Q: Where should spreadsheet-formula (CSV-injection) neutralization happen? → A: Escape at export; store values as-entered and sanitize only when generating output.
- Q: How should dashboard figures stay fresh (vs. caching)? → A: Invalidate the cache on write; refresh the affected school's figures whenever fee/accounting records change, keeping reads fast.
- Q: What response-time target should the referenced list screens meet? → A: ≤500ms at the 95th percentile (p95).
- **Scope choice (2026-08-28):** The user selected to scope this spec to **Track 3 only**, referencing 012 for Tracks 1–2.
- **Dead-code handling:** Two deferred items are "dead code" today (`ImportStudentsJob`, `StudentOrderService`). They carry real risk if ever activated, so they must be fixed before any future activation — they are in scope as *guardrail* work, not active-path work.
- **Money:** Full integer-cents conversion is intentionally deferred (architectural change not appropriate under a deadline) and is referenced from 012; it is NOT re-specified here.
- **Naming/typos normalization:** Column renames affect live tables and code across the app; renaming is done safely (additive columns + data copy + backfill) so no data is lost.

## User Scenarios & Testing *(mandatory)*

### User Story 1 - Inventory Stays Consistent and Correct Under Real Use (Priority: P3)

As a store admin, I want the inventory module to remain correct even when I sell items quickly or edit prices, so that stock never goes negative and no order type is impossible to create.

- Given item X has 5 units, when two staff sell 4 units each at the same time, then the system must not allow the second sale to exceed the available stock (no overselling).
- Given I open the order creation screen labeled for purchases, when I create a purchase order, then it is actually recorded as a purchase (not silently as a sale).
- Given an item whose current price or quantity is zero, when I edit it to set price/quantity to zero, then the zero value is saved (not ignored).
- Given the reporting relation between an order and its stock movements, when I view an order's transaction history, then the history loads and displays correctly (no broken/empty relation).

### User Story 2 - Large Lists Load Quickly and Always Show Current Data (Priority: P3)

As a school admin, I want large lists and the dashboard to load quickly and show fresh figures, so that my team is not slowed down and does not make decisions on stale numbers.

- Given a school with many receipts, exchange bonds, promotions, or parents, when I open those screens, then I see results in pages (≤50 per page) rather than one overwhelming dump, and the screens respond within 500ms at the 95th percentile.
- Given the dashboard, when it loads, then the fee/summary values shown match the latest recorded activity (cached for speed but invalidated/refreshed on every relevant write, never full-day-stale).

### User Story 3 - A Parent's Student Count and School Boundaries Are Always Correct (Priority: P3)

As a parent or school admin, I want the dashboard to count my linked students correctly and never show data from other schools.

- Given a parent account linked to students, when I view the dashboard, then the "my students/parents" count reflects the real links (not zero).
- Given a self-registered or school-scoped user, when I view data, then I only ever see that user's own school's data — no leakage from other schools.
- Given a user account with no school explicitly granted, when it is not an authorized super-admin, then it is not treated as a super-admin.

### User Story 4 - School Settings and Roles Stay Secure When Administered (Priority: P3)

As a school admin, I want school settings only changeable by permissioned users and role deletion to leave no broken assignments.

- Given a user without the settings permission, when I call the school-settings update endpoint directly by guessing an id, then the change is rejected.
- Given a role that is deleted, when other users had that role, then those assignments and any role permissions are cleaned up (no orphaned rows).

### User Story 5 - Data Imports Are Reliable and Safe (Priority: P3)

As an admin using Excel imports, I want imports to save all intended fields, report the true outcome, and never inject formulas.

- Given a parents import file, when imported, then every intended field is saved to the correct column (no missing or mismatched field) and the report reflects the true number imported/failed.
- Given a user import with no file attached, when submitted, then the system responds with a clear validation message instead of crashing.
- Given a cell that starts with `=`, `+`, `-`, or `@` (e.g. `=cmd`), when imported and later exported, then the stored value is unchanged but the exported output renders it as inert text (formula-injection safe via export-time escaping).

### User Story 6 - Dead Code Cannot Become an Accidental Danger (Priority: P3)

As a system owner, I want dormant risky paths fixed before they can ever be switched on, so enabling a long-disabled feature later does not introduce a data or security problem.

- Given the queued student import path, if it is ever activated again, it must school-scope every row it writes (that behavior, and that it is still disabled, is covered by a test).
- Given the older automatic ordering-number path, if reactivated, it must not collide with the new numbering scheme.

### User Story 7 - The Codebase Is Maintainable (Priority: P3)

As a developer, I want duplicated logic centralized, dead code removed, and confusing names cleaned up, so that future changes are safe and fast.

- Given student creation logic currently scattered in more than one place, when it is refactored, then there is one authoritative path and the others delegate to it (no behavior change).
- Given a service that is not called anywhere, when the cleanup wave runs, then it is removed or explicitly guarded.
- Given a non-uniform column name or enum name, when normalized, then the change is backward-compatible and nothing breaks existing data or screens.

### Edge Cases

- Concurrent inventory sells (race condition) — must not oversell.
- Zero-valued price, quantity, or a disabled-item flag set to false — must persist.
- Purchase-type order created from a shared form — must stay a purchase.
- Parent with zero linked students — dashboard shows 0, not an error.
- User with `null` school id who is NOT a real super-admin — must not see all schools.
- Role delete while users still hold it; settings update on a nonexistent school id.
- Import file missing, mismatched column casing, or formula-prefix cells.
- Deferred/queued import job and old numbering service activated later.

## Requirements *(mandatory)*

### Functional Requirements

- **INV-1:** Stock deduction checks available quantity atomically so concurrent sales cannot oversell.
- **INV-2:** Purchase orders can be created through the order UI; the order type is preserved through submission.
- **INV-3:** Item edits persist zero values for price, quantity, and disable/`is_active` state.
- **INV-4:** An order's stock-movement history uses a correct reference mapping and displays as data (the relation is no longer dead/empty).
- **PERF-1:** Core lists (receipts, exchange bonds, promotions, parents, and similar large lists) are returned in bounded page sizes (≤50 per page) and respond in **≤500ms at the 95th percentile (p95)**.
- **PERF-2:** Dashboard summary/fee figures are cached for read speed but are **invalidated on write**: whenever a fee/accounting record is created or changed, the affected school's cached figures are refreshed, so reads always reflect the latest data (never full-day-stale).
- **SCOPE-1:** Dashboard parent/student counts are derived from the correct link, never constant zero.
- **SCOPE-2:** Raw-data queries and any jobs respect school boundaries; non-super-admin users only ever access their own school's data.
- **SCOPE-3:** A user with no school grant is not implicitly a super-admin unless explicitly authorized as one.
- **ADMIN-1:** Updating school settings requires an appropriate permission; the target school belongs to the acting admin's scope.
- **ADMIN-2:** Deleting a role also cleans its user assignments and permission links (no orphaned rows).
- **IMP-1:** Parents import saves every intended field to its correct column.
- **IMP-2:** Excel imports validate the uploaded file (type and presence) before processing and surface a clear message when invalid.
- **IMP-3:** Spreadsheet-formula (CSV-injection) neutralization happens **at export**: imported values are stored as-entered, and only generated output is sanitized so formula-prefix cells (`=`, `+`, `-`, `@`) are rendered as inert text.
- **IMP-4:** Import success/failure reports reflect the actual outcome (true counts, not hard-coded success).
- **GUARD-1:** The dormant queued student-import path is school-scoped (or kept disabled) and the guardrail is covered by a test.
- **GUARD-2:** The dormant auto-numbering path cannot collide with the current numbering scheme if reactivated.
- **MAINT-1:** Student-creation logic has one authoritative path; other call sites delegate to it.
- **MAINT-2:** Unused services are removed or explicitly guarded.
- **MAINT-3:** Column/enum naming is normalized in a backward-compatible way (no data loss, no broken screens).
- **IDX-1:** Frequently-filtered columns on the receipt, exception, exchange-bond, promotion, and parent tables are indexed for fast lookups (performance, not data-safety, concern).

### Key Entities *(include if feature involves data)*

- **InventoryItem** — stock quantities/prices; must support zero and disabled states; row-locked for deduction.
- **InventoryOrder / InventoryTransaction** — order type and stock-movement reference mapping.
- **School** — tenant boundary; settings edits gated; scope for all data.
- **User / Role / Permission** — role deletion cleanup, explicit super-admin flag.
- **MyParent / Student / Dashboard aggregate** — parent-student link used for counts.
- **FeeInvoice / ReceiptPayment / StudentAccount** — large financial lists, caching, and index targets.

## Success Criteria *(mandatory)*

### Measurable Outcomes

- **Zero overselling** under concurrent stock sales (verified by a concurrent test).
- **100% of order types** creatable through the UI (purchase orders are persisted as purchases).
- **Zero/false item values** persist across edits (verified by targeted tests).
- **All referenced lists display in pages** (≤50 per page) and respond in **≤500ms at the 95th percentile**.
- **Dashboard figures match the ledger** at the time of load (cache invalidated/refreshed on write; no full-day-stale figure).
- **Parent/student dashboard counts are non-zero and correct** for linked accounts.
- **No cross-school data leakage** for any non-super-admin user, including a user with no school id (unless explicitly a super-admin).
- **Unauthorized settings updates are rejected**; role deletion leaves no orphaned assignment/permission rows.
- **Imports save all fields, report true outcomes, and export inert text** (formula-injection safe); missing/invalid files yield a clear message, not a crash.
- **Dormant risky paths are fixed and guarded by tests** before any future activation.
- **Duplicated student-creation logic is consolidated** with no behavior change; unused services removed; naming normalized without data loss.

## Assumptions

- Track 3 is **deferred after September** and does not block the student/account delivery (Tracks 1–2).
- Tracks 1–2 are the responsibility of `012-system-hardening-spec`; this spec does not duplicate them.
- Where a Track 3 item is already committed in 012's phases 3–4, the plan reconciles and assigns the work exactly once (this spec references those outcomes).
- Full integer-cents money conversion remains deferred and is referenced from 012, not re-specified here.
- Migration-based additive renames preserve all existing data; normalization is backward-compatible.
- Standard web-application performance and error-message UX expectations apply.
