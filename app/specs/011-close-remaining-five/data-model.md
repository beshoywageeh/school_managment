# Data Model: Close Remaining Five Issues

No schema/migration changes are required. This documents the existing entities and the ledger-sign conventions the fixes must observe.

## Entities (existing)

### ExceptionFees (عفو / exemption)
- Fee waiver linked to a **student**, **grade**, **classroom**, **academic year**, and **school**.
- Deleting one (via `ExceptionFeesController::destroy`) must produce an accounting reversal in `student_accounts`.

### StudentAccount
- Per-student ledger; columns include `student_id, grade_id, classroom_id, fee_invoices_id, receipt_payment_id, exception_id, exchange_bond_id, academic_year_id, date, type, debit, credit, school_id`.
- **Reversal entries** written here must carry all context copied from the original and invert `debit/credit`.

### FundAccount
- Treasury ledger; columns `receipt_id, exchange_bond_id, date, Debit, Credit, user_id, school_id`.
- **Convention (resolved in research):** balance = `sum(Debit) − sum(Credit)`.
  - Receipt (قبض): `Debit = amount, Credit = 0` → increases.
  - Disbursement (صرف): `Credit = amount, Debit = 0` → decreases.

### ExchangeBond (سند صرف)
- Disbursement record with `amount` and `description` (displayed on the edit page), linked to exchange-bond ledger rows above.

### Grade
- Creation requires **no `id`**; update requires a **valid `id`** (enforced by the shared request, conditional on HTTP method).

## State / interactions affected
- Exemption → delete → `StudentAccount` reversal (context-copied, offsetting, original preserved).
- Receipt → create/update → `FundAccount` (Debit sign; update applies delta).
- Disbursement → create/update → `FundAccount` (Credit sign; update matches store, applies delta).
- Reversal service → inverted signs align with the corrected receipt direction.

## Validation rules (relevant)
- `GradeStoreRequest`: `'id' => $this->isMethod('put') ? 'required|exists:grades,id' : 'nullable'`.
- Exemption update: looked up with `findOrFail()` → clear error on missing id.
