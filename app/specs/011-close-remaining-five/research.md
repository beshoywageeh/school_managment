# Research: Close Remaining Five Issues

**Date:** 2026-08-27
**Feature:** [spec.md](spec.md)

## Open Question Resolved: Treasury Balance Direction

### Decision
`fund_accounts` balance = **`sum(Debit) − sum(Credit)`**, giving the ledger signs:

| Operation | `fund_accounts` sign | Effect on balance |
|-----------|----------------------|-------------------|
| قبض (receipt — funds in) | `Debit = amount`, `Credit = 0` | Increases |
| صرف (disbursement — funds out) | `Credit = amount`, `Debit = 0` | Decreases |

### Rationale
- The treasury statement UI treats Debit as funds-in (green) and Credit as funds-out (red) — `resources/views/livewire/components/statement/statement-tab.blade.php:61-69`.
- This guarantees SC-002 (a disbursement *decreases* the balance by exactly the amount; a receipt *increases* it).
- The existing student-account convention already models قبض = credit / صرف = debit (opposite directions), confirming financial movements must be opposite-signed in any single ledger.

### Alternatives considered
1. **Keep receipts as `Credit` and make disbursements `Debit`** — rejected: would make a قبض (money in) *decrease* the treasury, contradicting the UI/domain meaning of the balance.
2. **Balance = `sum(Credit) − sum(Debit)`** — rejected: inverts the established green=in/red=out semantics for no benefit.

### Impact on current code
- **Receipt paths** (`PaymentService::handleFeeInvoice` S65-71, `handlePartialPayment` S151-157) currently write `Credit=amount, Debit=0` → **must change** to `Debit=amount, Credit=0`.
- **Disbursement `store`** (`AccountService::createOrUpdateExchangeBond` S154) already writes `Credit=amount, Debit=0` → **retained** (correct sign).
- **Disbursement `update`** (`ExchangeBondController::update` S119) currently sets `Debit=amount` → **must change** to match store (`Credit`), using the delta.
- **`AccountingReversalService::reverseReceiptEntries`** (S24-33) must invert the corrected receipt sign so a reversed receipt restores the balance symmetrically.

> **Verification gate (G2):** before closing #2, confirm with a real flow that a disbursement decreases and a receipt increases the same-school treasury balance. If the deployed balance formula proves to be the reverse, invert the table above and update the tests accordingly.

## Technology / best-practice notes (non-binding, applied in tasks)

- Reversal entries must always copy the **full context** (student, grade, classroom, year, type, school, refs) from the original — the pattern already established in `AccountingReversalService` and reused across exchange-bond and receipt paths.
- School isolation is preserved: all affected writes are scoped to the current school (`BelongsToSchool` + `where('school_id', ...)`).
- Tests are PHPUnit feature tests; run per-file with `--filter`.
