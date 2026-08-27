# Implementation Plan: Close Remaining Five Issues

**Feature Directory:** `specs/011-close-remaining-five`
**Source:** `docs/المتبقي-5-نقاط.md` (5 remaining items after re-examination of `docs/plan.md`)
**Spec:** [spec.md](spec.md)
**Created:** 2026-08-27
**Status:** Draft
**Branch:** `main`

> **⚠️ Grounding note:** Each item below records its **verified current code state** (from a file-by-file re-audit). This feature supersedes any earlier catalogue description of these five points; the fixes target the *real current defect*, not historical descriptions. Both accounting-integrity items (#1 Exemption reversal, #2 treasury direction) are P1 and require a real manual verification before closing (see governance gates).

---

## Summary

Two data-integrity defects in the accounting ledger, one display bug, and two robustness gaps remain after the earlier remediation:

1. **Exemption deletion** writes an orphaned student-account reversal entry carrying no context (same bug class fixed elsewhere but missed in this controller).
2. **Treasury direction** in `fund_accounts` is inconsistent — receipts and disbursements move the ledger the *same* way at create, and disbursement `store` disagrees with disbursement `update`.
3. **Exchange-bond edit page** shows an empty description (reads `note` instead of `description`).
4. **Grade update** can fail silently because the shared validation no longer enforces an `id`.
5. **Exemption update** can read a property on `null` (no not-found guard).

Each is a small, independently verifiable fix. No schema/migration changes are expected.

---

## Technical Context

- **Framework:** Laravel 10, PHP 8.5, PHPUnit v10 (feature tests), Livewire 4, Tailwind v4
- **DB:** MySQL
- **School isolation:** `App\Models\Traits\BelongsToSchool` (+ `SchoolScope` global scope) — applied to `StudentAccount`, `FundAccount`, `ReceiptPayment`, `FeeInvoice`, etc.
- **Ledger columns (capitalized):** `Debit` / `Credit` on both `student_accounts` and `fund_accounts`.
- **Key tables:** `student_accounts`, `fund_accounts`, `exception_fees` (`ExceptionFees`), `exchange_bonds` (`ExchangeBond`), `grades`.
- **Reversal service:** `App\Services\AccountingReversalService` — the canonical reversal primitive (creates proper offsetting entries with full context) already used by the exchange-bond and receipt paths.
- **Treasury statement UI:** `fund_accounts` Debit is styled green (funds in) and Credit red (funds out) — see `resources/views/livewire/components/statement/statement-tab.blade.php`.

**Unknowns needing confirmation (Phase 0 research):**
- **Treasury balance formula** (`sum(Debit) − sum(Credit)` vs reverse) — determines which sign receipts vs disbursements must take in `fund_accounts`.

---

## Constitution Check

Constitution: **School Management System Constitution v1.1.0** (`.specify/memory/constitution.md`).

| Principle | Compliance | Notes |
|-----------|-----------|-------|
| I. Clean Code & Convention | ✅ | Fixes use Eloquent (`StudentAccount::create`), Form Request (Grade), PHP 8 features, explicit return types, Pint. |
| II. Simple UX & Responsive | ✅ | Only view change is a one-line blade field correction; no new UI. |
| III. Minimal Dependencies | ✅ | No new package dependencies. |
| IV. Service Layer Architecture | ✅ | Reversal logic is centralized in / reuses `AccountingReversalService` (business logic out of controllers), per the principle. |
| V. Automated Testing (SHOULD) | ✅ | Every item gets a PHPUnit feature test; full suite before completion. |
| Workflow: feature branch | ⚠️ | See provenance note — work targeted to feature 011; branch handled by git hook (`before_plan` auto-commits). |
| Workflow: migrations-first | ✅ N/A | No DB changes for these fixes. |
| Workflow: incremental refactoring | ✅ | Legacy ledger rows not rewritten; fixes apply to new entries only. |

No complexity violations: no new patterns or dependencies are introduced, so the Complexity Tracking table is not required.

## Governance Gates

| Gate | Status |
|------|--------|
| Fixing one item must not regress another (ledger items interact) | ✅ Enforced by per-item + lifecycle tests |
| Treasury direction change must be validated by a real money-flow check (disbursement decreases balance; receipt increases it) | ✅ Enforced by gate G2 below |
| All changes require a test | ✅ Enforced per item |
| No migration/backfill unless the treasury-direction fix requires reconciling historical rows | ⚠️ Decide at implementation (default: no rewrite) |

**Gate G2 (mandatory before closing #2):** After implementing, record the treasury balance, create a disbursement and a receipt, and confirm the balance moves in opposite directions — a disbursement must *decrease* and a receipt *increase* the reported balance. If the confirmed balance formula is the opposite of the recommended convention below, invert accordingly and update the tests.

---

## Project Structure

### Documentation (this feature)

```text
specs/011-close-remaining-five/
├── plan.md              # This file
├── research.md          # Phase 0 — resolves the treasury-balance uncertainty
├── data-model.md        # Phase 1 — minimal, existing entities
├── quickstart.md        # Phase 1 — end-to-end validation scenarios
└── tasks.md             # Phase 2 (/speckit.tasks — NOT created here)
```

### Source Code (existing, modified in place)

No new directories. Files touched (all existing):
- `app/Http/Controllers/ExceptionFeesController.php` (destroy, update)
- `app/Services/Finance/AccountService.php` (fundAccount / exchange-bond writes)
- `app/Services/PaymentService.php` (receipt fund-account writes)
- `app/Services/AccountingReversalService.php` (receipt reversal sign)
- `app/Http/Controllers/ExchangeBondController.php` (update)
- `resources/views/backend/exchange_bond/edit.blade.php`
- `app/Http/Requests/GradeStoreRequest.php` (grade id rule)
- Corresponding feature tests under `tests/Feature/`

**Structure Decision**: In-place fixes within the existing Laravel structure; no new modules.

---

## Phase 0 — Research

See [research.md](research.md). Primary question: **what is the treasury balance formula** so receipts and disbursements are given opposite, correct signs.

**Recommended convention (default unless research overrides):**
- Treasury balance = `sum(Debit) − sum(Credit)` (matches UI green=in/red=out).
- **قبض (receipt — funds in):** `fund_accounts` → `Debit = amount`, `Credit = 0`.
- **صرف (disbursement — funds out):** `fund_accounts` → `Credit = amount`, `Debit = 0`.

This means the **receipt** write paths (currently `Credit=amount`) must switch to `Debit=amount`, while disbursement `store` (already `Credit=amount`) is retained, and disbursement `update` (currently `Debit=amount`) is corrected to match `store`.

> Confirm against the actual balance computation before finalizing; invert only if the verified formula is reversed.

---

## Phase 1 — Design

See [data-model.md](data-model.md) (no schema change; documents existing entities and the ledger signs) and [quickstart.md](quickstart.md) (validation scenarios).

---

## Phase 2 — Implementation Tasks (detail in tasks.md per /speckit.tasks; scope below)

### Task 1 — Exemption deletion reversal with full context (P1, FR-001/002/003/010)
**File:** `ExceptionFeesController::destroy`
**Current (verified):**
```php
foreach ($studentAccounts as $account) {
    $account->create(['Debit' => $account->Credit, 'Credit' => $account->Debit]);
}
```
Instantiates a fresh `StudentAccount` *via the instance* with **only** Debit/Credit — no student/exception/grade/classroom/year/school/type → orphaned, untraceable entry.
**Fix:** replace with an explicit context-carrying reversal — either reuse `AccountingReversalService` or `StudentAccount::create([...])` copying `student_id, grade_id, classroom_id, exception_id, academic_year_id, type, school_id, date, user_id` from `$account` (keeping original as history, inverting Debit/Credit). Preserve original entry. Remove the unused `$receiptIds` accumulator (dead code).
**Deliverable (test):** deleting an exemption creates a reversal entry carrying the full original context, inverts Debit/Credit, preserves the original, succeeds when no student account exists, and only touches the current school.

### Task 2 — Consistent, opposite treasury direction for receipt vs disbursement (P1, FR-004/005/006, SC-002/003)
**Files:** `PaymentService.php` (fee-invoice & partial-payment fund writes), `AccountService.php` (exchange-bond create), `ExchangeBondController.php` (update), `AccountingReversalService.php` (receipt reversal sign).
**Current (verified):** fee-receipt writes `Fund_Account(..., Credit=amount, Debit=0)`; exchange-bond `store` writes `fundAccount(..., Credit=amount, Debit=0)` — **both Credit** (not opposite). Exchange-bond `update` sets `$FundAccount->Debit = $request->amount` — **disagrees with store**.
**Fix (per recommended convention):** receipts → `Debit=amount, Credit=0`; disbursements → `Credit=amount, Debit=0`. Make `ExchangeBondController::update` apply the **delta** and the **same** direction as `store` (not full replacement). Align `AccountingReversalService::reverseReceiptEntries` to the corrected receipt sign.
**Gate G2**: real manual + automated check that a disbursement decreases and a receipt increases the same-school treasury balance.
**Deliverable (test):** create/edit disbursement and receipt; assert opposite sign, delta handling on edit, store/update consistency, no drift across create/edit cycles.

### Task 3 — Exchange-bond edit page shows saved description (P2, FR-007, SC-006)
**File:** `resources/views/backend/exchange_bond/edit.blade.php` (line 28)
**Current:** `{{ $exchange->note }}` — column is `description`.
**Fix:** `{{ $exchange->description }}`.
**Deliverable (test):** edit page pre-fills the saved description; empty description renders without error.

### Task 4 — Grade update enforces a valid id (P2, FR-008, SC-004)
**Files:** `app/Http/Requests/GradeStoreRequest.php`, `app/Http/Controllers/Grades/GradesController.php`
**Current:** `GradeStoreRequest` no longer requires `id` (share between create & update); `update()` (line 133) reads `$request->id` → can silently fail.
**Fix:** conditional rule in `GradeStoreRequest`: `'id' => $this->isMethod('put') ? 'required|exists:grades,id' : 'nullable'`.
**Deliverable (test):** update with missing/invalid id → clear validation error; update with valid id → succeeds; create with no id → still succeeds.

### Task 5 — Exemption update never reads a property on null (P2, FR-009, SC-005)
**File:** `ExceptionFeesController::update` (lines 212-214)
**Current:** `ExceptionFees::where('id',...)->first()` then `$pay->date = ...` → null-deref on missing id.
**Fix:** `findOrFail()` (or explicit `if (!$pay)` guard) with a clear error message.
**Deliverable (test):** update with valid id succeeds; update with non-existent id returns a clear error, no uncaught exception.

---

## Testing & Verification Strategy

- Per item: PHPUnit feature test via `php artisan test --compact --filter=<TestName>`.
- Lifecycle smoke test: exemption→delete reversal, receipt→disburse→edit→delete, asserting treasury balance never inflates.
- Final gates: `vendor/bin/pint --dirty --format agent`; `php artisan test --compact`; `php artisan route:list` unchanged (no route changes).

## Out of Scope / Deferred

- Any redesign of the accounting model or historical-ledger rewrite.
- The non-urgent dead-code cleanup in `ExceptionFeesController::destroy` is folded into Task 1 (zero behavior change).
- Inventory / schedule enhancements (separate features).
