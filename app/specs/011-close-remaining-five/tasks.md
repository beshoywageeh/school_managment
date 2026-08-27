---

description: "Task list for closing the remaining five issues (feature 011)"
---

# Tasks: Close Remaining Five Issues

**Input**: Design documents from `/apps/app/specs/011-close-remaining-five/`
**Prerequisites**: plan.md (present), spec.md (present), research.md, data-model.md, quickstart.md

**Tests**: Tests ARE included — required by the specification's acceptance criteria (each references "verified by automated test"), the plan's governance gates, AGENTS.md, and the constitution's Automated Testing principle. Tests must be written first and should FAIL before implementation (TDD).

**Organization**: Tasks grouped by user story (P1 first) for independent implementation and testing.

## Format: `[ID] [P?] [Story] Description`

- **[P]**: Can run in parallel (different files, no dependencies)
- **[Story]**: Which user story the task belongs to (US1..US5)
- Exact file paths included.

## Path Conventions

Single Laravel project — app code under `app/`, tests under `tests/`. All paths relative to the Laravel project root (which is the `app/` subdirectory of the workspace).

---

## Phase 1: Setup (Shared Infrastructure)

**Purpose**: Confirm the test environment and model factories exist so all bug fixes can be verified.

- [ ] T001 Verify test DB is configured and `php artisan migrate:fresh --seed` runs cleanly in the test environment (`.env.testing` or configured test connection)
- [ ] T002 [P] Verify or add model factories for `ExceptionFees`, `StudentAccount`, `FundAccount`, `ExchangeBond`, `Grade` in `database/factories/`
- [ ] T003 [P] Run the existing financial/treasury feature tests (`php artisan test --compact`) to record a green baseline before any changes

---

## Phase 2: Foundational (Blocking Prerequisites)

**Purpose**: Shared pieces both accounting stories (US1, US2) depend on. Must complete before US1/US2 implementation.

**⚠️ CRITICAL**: US1 and US2 must not be implemented until this phase is complete.

- [x] T004 Confirm `App\Services\AccountingReversalService` is available via DI (registered / resolvable) and establish that per-school scoping (`BelongsToSchool` + `where('school_id', ...)`) is in effect for `StudentAccount` and `FundAccount`
- [x] T005 Confirm the containment refactor: reversal-creation logic that must be shared sits in `AccountingReversalService` (so controllers only marshal the request) — add a reusable `reverseExceptionEntries(ExceptionFees $exception)` method there if not present, returning the created reversal row(s)

**Checkpoint**: Foundation ready — US1 and US2 can now be implemented (US3/US4/US5 are independent of this phase).

---

## Phase 3: User Story 1 - Exemption Deletion Writes a Complete Reversal (Priority: P1) 🎯 MVP

**Goal**: Deleting an exemption (عفو) creates a reversal student-account entry carrying the full context of the original (student, exception, grade, classroom, year, type, school), preserves the original, and succeeds when no student account exists.

**Independent Test**: Delete an exemption, then inspect `student_accounts` — a new reversal row exists with the same context fields as the original and inverted debit/credit; deleting an exemption with no student account produces no error and no orphan row.

### Tests for User Story 1 (write FIRST, must FAIL before implementation) ⚠️

- [x] T006 [P] [US1] Feature test: deleting an exemption creates a full-context reversal, preserves the original, inverts debit/credit — `tests/Feature/ExceptionFeesDeletionReversalTest.php`
- [x] T007 [P] [US1] Feature test: deleting an exemption with no associated student account succeeds with no orphan row — same file
- [x] T008 [P] [US1] Feature test: reversal is scoped to the current school only — same file

### Implementation for User Story 1

- [x] T009 [US1] In `app/Http/Controllers/ExceptionFeesController.php` (`destroy`), replace the orphan-producing `$account->create([...])` loop with the context-copied reversal via `AccountingReversalService::reverseExceptionEntries` (or a `StudentAccount::create([...])` that copies `student_id, grade_id, classroom_id, exception_id, academic_year_id, type, school_id, date` and inverts debit/credit), preserving the original entry
- [x] T010 [US1] Remove the unused `$receiptIds` accumulator block in `ExceptionFeesController::destroy`
- [x] T011 [US1] Ensure `AccountingReversalService` is injected into `ExceptionFeesController` (constructor) and used rather than inline reversal logic

**Checkpoint**: US1 fully functional and independently testable.

---

## Phase 4: User Story 2 - Receipt and Disbursement Move the Treasury in Opposite Directions (Priority: P1)

**Goal**: A receipt (قبض) increases and a disbursement (سند صرف) decreases the treasury balance, and disbursement `update` matches `store` direction applying a delta.

**Independent Test**: Create a receipt and a disbursement and confirm the balance moves in opposite directions; edit the disbursement and confirm a delta is applied with the same sign as `store`.

### Tests for User Story 2 (write FIRST, must FAIL before implementation) ⚠️

- [x] T012 [P] [US2] Feature test: a receipt increases the treasury balance by X and a disbursement decreases it by Y (opposite directions) — `tests/Feature/TreasuryDirectionTest.php`
- [x] T013 [P] [US2] Feature test: editing a disbursement from X to Y applies delta (Y−X) and records the same `fund_accounts` direction as `store` — same file
- [x] T014 [P] [US2] Feature test: repeated create/edit cycles never drift the balance — same file

### Implementation for User Story 2

- [x] T015 [US2] Change receipt fund-account writes to `Debit=amount, Credit=0` in `app/Services/PaymentService.php` (`handleFeeInvoice` and `handlePartialPayment`)
- [x] T016 [US2] Confirm and retain disbursement `store` sign (`Credit=amount, Debit=0`) in `app/Services/Finance/AccountService.php` (`createOrUpdateExchangeBond`)
- [x] T017 [US2] Fix `ExchangeBondController::update` (`app/Http/Controllers/ExchangeBondController.php`) to apply the delta and use the same direction as `store` (currently sets `$FundAccount->Debit = $request->amount`)
- [x] T018 [US2] Align `AccountingReversalService::reverseReceiptEntries` sign with the corrected receipt direction so a reversed receipt restores the balance symmetrically
- [x] T019 [US2] **Gate G2 (manual verification):** record the treasury balance, create a receipt and a disbursement, and confirm the balance moves in opposite directions (disbursement decreases, receipt increases); if the verified balance formula is the reverse, invert the convention and update T012-T014 accordingly

**Checkpoint**: US1 and US2 both independently functional and verified.

---

## Phase 5: User Story 3 - Exchange-Bond Edit Page Shows the Saved Description (Priority: P2)

**Goal**: The edit page for a disbursement pre-fills the saved description.

**Independent Test**: Open the edit page for a disbursement with a saved description and confirm the field is pre-filled.

### Tests for User Story 3 ⚠️

- [ ] T020 [P] [US3] Feature test: edit page pre-fills the saved description; renders without error when empty — `tests/Feature/ExchangeBondEditTest.php`

### Implementation for User Story 3

- [ ] T021 [US3] Change `{{ $exchange->note }}` → `{{ $exchange->description }}` in `resources/views/backend/exchange_bond/edit.blade.php`

**Checkpoint**: US3 independently functional.

---

## Phase 6: User Story 4 - Grade Update Cannot Fail Silently (Priority: P2)

**Goal**: Grade update enforces a valid `id` (clear error when missing/invalid) while creation still requires no `id`.

**Independent Test**: Update a grade with and without an `id` and confirm an explicit outcome in both cases; create succeeds without an `id`.

### Tests for User Story 4 ⚠️

- [ ] T022 [P] [US4] Feature test: grade update with missing/invalid `id` returns a clear validation error; update with valid `id` succeeds; create with no `id` succeeds — `tests/Feature/GradesTest.php`

### Implementation for User Story 4

- [ ] T023 [US4] Add a conditional `id` rule in `app/Http/Requests/GradeStoreRequest.php`: `'id' => $this->isMethod('put') ? 'required|exists:grades,id' : 'nullable'`

**Checkpoint**: US4 independently functional.

---

## Phase 7: User Story 5 - Exemption Update Never Reads a Property on Null (Priority: P2)

**Goal**: Updating an exemption with a non-existent `id` returns a clear error, never a "property on null" runtime error.

**Independent Test**: Update an exemption with a non-existent `id` and confirm a clear error instead of an exception.

### Tests for User Story 5 ⚠️

- [ ] T024 [P] [US5] Feature test: exemption update with a non-existent `id` returns a clear error and does not throw — `tests/Feature/ExceptionFeesUpdateTest.php`

### Implementation for User Story 5

- [ ] T025 [US5] In `app/Http/Controllers/ExceptionFeesController.php` (`update`), replace `ExceptionFees::where('id',...)->first()` with `findOrFail()` (or an explicit `if (!$pay)` guard) returning a clear error

**Checkpoint**: US5 independently functional.

---

## Phase 8: Polish & Cross-Cutting Concerns

**Purpose**: Final consistency, code style, and full-suite verification across all stories.

- [ ] T026 [P] Remove any now-unused imports/leftover code introduced or exposed by T009-T011, T017 (verify with static inspection of `app/Http/Controllers/ExceptionFeesController.php`, `app/Http/Controllers/ExchangeBondController.php`)
- [ ] T027 [P] Run `vendor/bin/pint --dirty --format agent` to normalize style
- [ ] T028 Run the full suite `php artisan test --compact` (all stories + existing tests) — must pass
- [ ] T029 Run `quickstart.md` validation scenarios end-to-end and confirm `php artisan route:list` is unchanged by these fixes

---

## Dependencies & Execution Order

### Phase Dependencies

- **Setup (Phase 1)**: No dependencies — start immediately
- **Foundational (Phase 2)**: Depends on Setup — BLOCKS US1 and US2
- **User Stories**: US1, US2 depend on Foundational; US3, US4, US5 are independent and can start after Setup
- **Polish (Phase 8)**: Depends on all desired stories being complete

### User Story Dependencies

- **US1 (P1)**: After Foundational; independent of other stories
- **US2 (P1)**: After Foundational; independent of other stories (shares `AccountingReversalService` with US1, but different methods)
- **US3 (P2)**: After Setup; independent
- **US4 (P2)**: After Setup; independent
- **US5 (P2)**: After Setup; independent (same controller as US1 but different method — coordinate to avoid same-file conflicts if staffed in parallel)

### Within Each User Story

- Tests MUST be written and FAIL before implementation
- Implementation then service/controller edits
- Each story complete and independently testable before moving to the next priority

### Parallel Opportunities

- T001/T002/T003 marked [P] run in parallel
- Within each story, the test tasks (marked [P]) run in parallel
- US3, US4, US5 can be done in parallel with each other (no cross-dependencies)
- US1 and US2 both touch `AccountingReversalService` — prefer sequential or coordinate file ownership

---

## Parallel Example: User Story 1

```bash
# Launch all US1 tests together (write-first, expect FAIL):
Task: "Feature test deleting an exemption creates a full-context reversal (tests/Feature/ExceptionFeesDeletionReversalTest.php)"
Task: "Feature test deletion with no student account (same file)"
Task: "Feature test reversal scoped to current school (same file)"

# Implementation (after tests fail):
Task: "Replace orphan reversal loop in ExceptionFeesController::destroy"
```

---

## Implementation Strategy

### MVP First (User Story 1 Only)

1. Phase 1: Setup (confirm test env + factories)
2. Phase 2: Foundational (reversal primitive in `AccountingReversalService`)
3. Phase 3: US1 (exemption deletion reversal)
4. **STOP and VALIDATE**: US1 independently tested and green
5. Deploy/demo if ready

### Incremental Delivery

1. Setup + Foundational → foundation ready
2. US1 → test → deploy/demo (MVP — highest data-integrity risk)
3. US2 → test → deploy/demo (second P1 data-integrity fix)
4. US3, US4, US5 → each test → deploy/demo
5. Polish phase → full suite

### Parallel Team Strategy

- Team completes Phase 1 + Phase 2 together
- Developer A: US1 (exemption reversal)
- Developer B: US2 (treasury direction)
- Developer C: US3 + US4 + US5 (independent, low-risk)
- Care: US1 and US2 both edit `AccountingReversalService` — coordinate.

---

## Notes

- [P] tasks = different files, no same-file dependencies
- [Story] label maps each task to its spec user story for traceability
- Every user story is independently testable per spec
- Tests must fail before implementation (TDD)
- Commit after each task or logical group (git hook auto-commits at phase boundaries)
- Avoid same-file conflicts: US1 and US5 both touch `ExceptionFeesController` — order or coordinate
- Run `vendor/bin/pint --format agent` before finalizing (constitution I)
