# Feature Specification: Close Remaining Five Issues

**Feature Branch**: `011-close-remaining-five`  
**Created**: 2026-08-27  
**Status**: Draft  
**Input**: User description: "create specification plan for docs/المتبقي-5-نقاط.md"

## Overview

Following a full re-examination of the accounting/finance codebase, roughly 77% of the previously-identified issues have been verified as fixed. This feature closes the five remaining issues (and one non-urgent note) that were recorded in the re-examination. These are correctness and data-integrity defects in the financial, grade, and exchange-bond (disbursement) flows:

1. Deleting an exemption (عفو) writes an orphaned reversal entry with no context.
2. Disbursement (سند صرف) and receipt (قبض) record the same fund-account direction; store and update disagree.
3. Exchange-bond edit page shows an empty description.
4. Grade update can fail silently because the shared validation no longer requires an id.
5. Exemption update can attempt to read a property on `null`.

Each issue is small and independently verifiable, with the highest priority on the two accounting-integrity defects (items 1 and 2).

## User Scenarios & Testing *(mandatory)*

### User Story 1 - Exemption Deletion Writes a Complete Reversal (Priority: P1)

When a school employee deletes an exemption (عفو/exception fee) for a student, the system must create a proper accounting reversal so the student's ledger remains accurate and auditable. The reversal entry must carry the full context of the original transaction so an auditor can trace it back to the deletion.

**Why this priority**: This is a data-integrity defect. Without the context fields, the student ledger accumulates orphaned entries that cannot be traced, corrupting balances and audit history. It is the same class of bug previously fixed in `AccountingReversalService` but was missed in this controller path.

**Independent Test**: Delete an exemption that has an existing student-account entry, then inspect the student's ledger. The new reversal entry must reference the same student, year, exemption, grade, and account type as the original.

**Acceptance Scenarios**:

1. **Given** a student has an exemption with an associated student-account entry **When** an authorized employee deletes that exemption **Then** a reversal student-account entry is created **And** that entry carries the same `student`, `exception`, `academic year`, `grade`, `classroom`, and `type` values as the original.
2. **Given** the same exemption deletion **When** the ledger is inspected **Then** the original entry is preserved as history **And** the reversal entry inverts Debit/Credit relative to the original.
3. **Given** an exemption deletion with no associated student account **When** the employee deletes it **Then** the deletion still succeeds without error **And** no orphaned reversal entry is written.
4. **Given** the exemption belongs to the current school **When** deleted **Then** only that school's student-account rows are affected.

---

### User Story 2 - Disbursement and Receipt Move the Treasury in Opposite Directions (Priority: P1)

The treasury ledger must reflect that a receipt (قبض) increases available funds and a disbursement (سند صرف) decreases them. Currently both record the same direction in the fund account, and creating a disbursement (`store`) records a different direction than editing one (`update`). The system must define one consistent convention and apply it to creation and editing alike.

**Why this priority**: This is a financial-correctness defect. If receipts and disbursements move the ledger in the same direction, the reported treasury balance is wrong in real money terms. Inconsistent store-vs-update behavior compounds the error over time.

**Independent Test**: Create a disbursement, record the treasury balance; then edit the same disbursement to a new amount and record the balance again. Also create a receipt and confirm the balance moves the opposite way to the disbursement.

**Acceptance Scenarios**:

1. **Given** an existing positive treasury balance **When** a disbursement of amount X is created **Then** the treasury balance decreases by X.
2. **Given** an existing treasury balance **When** a receipt of amount X is recorded **Then** the treasury balance increases by X **And** this direction is opposite to the disbursement case.
3. **Given** a disbursement of amount X **When** it is edited to amount Y **Then** the treasury balance changes by (Y − X) relative to the created state **And** the direction matches the `store` convention for the same operation type.
4. **Given** the same school **When** the fund-account rows for a disbursement are inspected **Then** the direction recorded on `store` and on `update` is identical.

---

### User Story 3 - Exchange-Bond Edit Page Shows the Saved Description (Priority: P2)

An employee editing a disbursement (سند صرف) must see the description that is actually saved on the record. Currently the edit form reads a non-existent field, so the description appears empty even though data exists.

**Why this priority**: This is a low-risk display bug but directly affects data-entry confidence and can cause employees to re-type or overwrite existing descriptions.

**Independent Test**: Open the edit page for a disbursement that has a description saved on it and confirm the description field is pre-filled.

**Acceptance Scenarios**:

1. **Given** a disbursement record with a saved description **When** an employee opens the edit page **Then** the description field is pre-filled with the saved value.
2. **Given** a disbursement record with no description **When** the edit page is opened **Then** the description field is empty (no error).

---

### User Story 4 - Grade Update Cannot Fail Silently (Priority: P2)

An employee updating a school grade must receive a clear result: either the update succeeds or the system reports a validation/not-found error. Currently the shared validation no longer enforces an `id`, so the update path reads an `id` that may not be present and can fail silently.

**Why this priority**: Silent failures erode data trust and make it hard to detect that an intended change never persisted.

**Independent Test**: Submit a grade update with and without an id and confirm the outcome is explicit in both cases.

**Acceptance Scenarios**:

1. **Given** a valid grade update request that includes an existing `id` **When** submitted **Then** the grade's name is updated and the operation reports success.
2. **Given** a grade update request **When** submitted **Then** the system enforces that a valid id is present **And** returns a clear validation error if it is missing or does not exist.
3. **Given** a grade **When** a new grade is created **Then** the create path does not require an `id` (the previously-fixed creation flow continues to work).

---

### User Story 5 - Exemption Update Never Reads a Property on Null (Priority: P2)

An employee updating an exemption (عفو) must get a clear error if the target record does not exist, instead of a runtime error from reading a property on `null`.

**Why this priority**: This prevents uncaught runtime exceptions and gives the user an actionable message.

**Independent Test**: Attempt to update an exemption with a non-existent id and confirm a clear error is returned rather than an exception stack.

**Acceptance Scenarios**:

1. **Given** an exemption update request with a valid existing id **When** submitted **Then** the exemption is updated successfully.
2. **Given** an exemption update request with an `id` that does not exist **When** submitted **Then** the system returns a clear not-found/validation error **And** does not throw an uncaught runtime exception.

---

### Edge Cases

- Exemption deletion where the student-account query returns zero rows (must still succeed, no reversal written).
- Disbursement edited to the exact same amount (balance change of zero must be handled without error or duplicate entries).
- Disbursement edited to a larger or smaller amount than created (the delta, not a full replacement, must be applied).
- Grade update submitted from a stale form (missing `id`) — clear validation message, no silent failure.
- Exemption update with a malformed or non-existent id — clear error, no `null` property access.
- Receipts recorded before this fix already exist in the ledger — the fix applies to new entries and does not rewrite historical treasury rows unless explicitly required.

## Requirements *(mandatory)*

### Functional Requirements

- **FR-001**: The system MUST create the exemption-deletion reversal entry with the full context of the original entry (student, exception, grade, classroom, academic year, type, and school).
- **FR-002**: The system MUST preserve the original exemption entry as history and create the reversal as a new entry that inverts Debit/Credit.
- **FR-003**: The system MUST complete exemption deletion successfully when no associated student account exists, without writing an orphan entry.
- **FR-004**: The system MUST define a single, consistent treasury direction convention where a receipt and a disbursement move the balance in opposite directions.
- **FR-005**: The system MUST record the same treasury direction when a disbursement is created and when it is edited.
- **FR-006**: The system MUST apply the delta (Y − X) when a disbursement is edited from amount X to amount Y, not a full replacement that corrupts the ledger.
- **FR-007**: The disbursement edit page MUST display the value of the saved description field.
- **FR-008**: The system MUST enforce that a valid `id` is present when updating a grade, while requiring no `id` on grade creation.
- **FR-009**: The system MUST return a clear, user-facing error when an exemption update references a record that does not exist.
- **FR-010**: The system MUST scope all affected reversal, student-account, and treasury operations to the current school.

### Key Entities

- **Exemption (عفو / Exception Fees)**: A fee waiver linked to a student, grade, classroom, year, and school. Deleting it requires an accounting reversal.
- **Student Account**: The per-student ledger of Debit/Credit entries. Reversal entries are written here and must carry full context.
- **Fund Account**: The treasury ledger of Debit/Credit movements for receipts and disbursements. Its direction convention drives the reported balance.
- **Exchange Bond (سند صرف)**: A disbursement record with an amount and description, created and edited through the treasury flow.
- **Grade**: A school grade whose creation must not require an `id`, while its update must.

## Success Criteria *(mandatory)*

### Measurable Outcomes

- **SC-001**: 100% of exemption deletions produce a new reversal entry carrying the same student, exception, grade, classroom, year, and type as the original (verified by automated test).
- **SC-002**: Treasury balance after a disbursement decreases by exactly the disbursed amount, and after a receipt increases by exactly the received amount (verified by automated test).
- **SC-003**: Creating and editing the same disbursement record the identical treasury direction, so repeated create/edit cycles never drift the balance (verified by automated test).
- **SC-004**: 100% of grade updates with a missing or invalid `id` return a clear validation error, while grade creation continues to succeed without an `id` (verified by automated test).
- **SC-005**: No code path in the exemption-update flow can trigger an uncaught "property on null" runtime error (verified by automated test and code inspection).
- **SC-006**: The exchange-bond edit page always renders the saved description value (verified by automated test).

## Assumptions

- The accounting convention (which of Credit/Debit means "funds in") will be determined from the existing system's established receipt behavior and applied to the disbursement as its opposite.
- Fixes apply to newly-created ledger entries; historical treasury rows are not rewritten unless explicitly required, to avoid unintended side effects.
- All work is scoped to the current school's data (existing school-isolation behavior is preserved and enforced on the affected paths).
- The non-urgent dead-code note (`$receiptIds` unused in `ExceptionFeesController::destroy`) may be cleaned up as part of item 1 but is not required for any behavior change.
- No schema/migration changes are anticipated for these fixes; they are logic/view-only corrections unless testing reveals otherwise.
