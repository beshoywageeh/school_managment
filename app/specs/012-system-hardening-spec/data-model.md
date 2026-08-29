# Data Model: System Hardening & Correctness Remediation

**Phase 1 output**. Documents the entities touched/influenced by the remediation, their fields/relationships, validation, and state transitions. This runs **alongside** the existing model definitions; the goal is additive, backward-compatible change.

Legend: 🛡 = security-relevant change · 💰 = financial-relevant · 📦 = inventory-relevant · ⚙ = general quality.

---

## User / Account (🛡)

- **Fields**: id, school_id (nullable), name, email, code, type, job_id, isAdmin (bool), login_allow (bool), password (hashed), gender, religion, timestamps, soft-deletes.
- **Relationships**: `roles()`/`permissions()` (Spatie `HasRoles`), `school()` (BelongsToSchool), `job()`.
- **Changes**:
  - `login_allow` becomes an **enforced** gate at authentication (currently stored but ignored).
  - `school_id = null` no longer implies system-wide super-admin for data scoping (currently bypasses `SchoolScope`).
  - `isAdmin`/`login_allow` no longer settable from arbitrary request input except through authorized paths.
  - Password hash never selected into admin listings.
- **Validation**: registration gated/disabled by default; role assignment only via authorized admin.

## School / Tenant (🛡⚠️)

- **Fields**: id, name, ... (existing).
- **Relationship**: parent of all tenant-scoped records; every data record and account belongs to exactly one school.
- **Changes**: Explicit super-admin is a provisioned flag; null-school accounts treated as needing a school rather than unfiltered super-admin. `SettingsController` school updates must be permission-guarded and scope-checked (fix IDOR, `SettingsController.php:92-124`).

## Role / Permission (🛡⚙)

- **Fields**: id, name, guard_name, ... (Spatie); pivot `model_has_roles`, `role_has_permissions`.
- **Changes**: Role deletion must clean Spatie pivot tables (currently orphan rows). Permission-name casing inconsistencies normalized (seeders/migration); `can:monitor-access` given a matching Gate or switched to `permission:` middleware.

## Inventory Item (📦)

- **Table**: `inventory_items`. **Fields**: id, type (`InventoryItemType`), category (`InventoryItemCategory`), name, grade_id, classroom_id, cost_price, sell_price, min_stock, max_stock, current_stock, is_active, opening_date, school_id, user_id.
- **Relationships**: `grade()`, `classroom()`, `school()`, `user()`; `orderItems(): MorphMany` (as `itemable` on `inventory_order_items`); `transactions(): HasMany`.
- **Changes**:
  - `updateItem` must persist **zero and false** values (min_stock=0, max_stock=0, cost_price=0, sell_price=0, is_active=false).
  - All stock mutations (`stockIn`/`stockOut`/`adjustStock`) lock the item row (`lockForUpdate()`) to serialize concurrent writes and prevent negative stock.

## Inventory Order (📦)

- **Table**: `inventory_orders`. **Fields**: id, auto_number, type (`InventoryOrderType`: inventory/sales/purchases/gard), status (`InventoryOrderStatus`: not_paid/paid), date, manual_date, total_amount, student_id, school_id, user_id.
- **Unique constraint**: `(school_id, type, auto_number)` — added by `2026_08_27_184046`.
- **Relationships**: `student()`, `school()`, `user()`; `items(): HasMany` (`InventoryOrderItem`); `transactions(): MorphMany` via `reference`.
- **Changes**:
  - Single numbering provider (`InventoryOrderService::generateOrderNumber`) used by ALL order flows, including `StudentOrderService` (books/clothes), with unique-violation retry on insert.
  - `pay()` transition: **only authorized** (new `InventoryOrderPolicy`); action becomes state-changing POST (no GET toggle); order lookup school-scoped.
  - State machine: `not_paid ↔ paid` via `payOrder()`; reverse `paid → not_paid` also authorized.

## Inventory Order Item (📦)

- **Table**: `inventory_order_items`. **Fields**: inventory_order_id, itemable_id, itemable_type (polymorphic → `InventoryItem`), quantity_in, quantity_out, unit_price, total.
- **Relationship**: `order(): BelongsTo`; `itemable(): MorphTo`.
- **Changes**: Uses the selected order type (from route) rather than a hardcoded `sales`; line total computed consistently with stored `total_amount`.

## Inventory Transaction (📦)

- **Table**: `inventory_transactions`. **Fields**: id, item_id, type (`TransactionType`: in/out/adjust), quantity, balance, reference_type, reference_id, notes, user_id, school_id.
- **Changes (FR-018)**:
  - `reference_type` must store the **class name** (e.g., `App\Models\Inventory\InventoryOrder`) so `reference(): MorphTo` and `InventoryOrder::transactions(): MorphMany` resolve. Currently writes bare `'order'`.
  - Index `(reference_type, reference_id)` exists; backfill existing rows to class names (additive migration).

## Student Account / Ledger (💰)

- **Table**: `student_accounts`. **Fields**: id, student_id, grade_id, classroom_id, receipt_payment_id, fee_invoices_id, exception_id, exchange_bond_id, academic_year_id, date, type (`PaymentType`), debit (DECIMAL(10,2)), credit (DECIMAL(10,2)), school_id, soft-deletes.
- **Casts**: `debit`/`credit` → decimal:2 (string).
- **Changes**:
  - All arithmetic uses exact decimal discipline (`bcadd`/`bcsub`/`bccomp` or cents), never float coercion.
  - `fee_invoices_id` must not be misused to hold an inventory-order id; add correct order linkage so reversals update the right records.
  - Reversal entries must survive source-delete (avoid CASCADE-nullified reversals).

## School Fund (FundAccount) (💰)

- **Table**: `fund_accounts`. **Fields**: id, date, receipt_id, exchange_bond_id, user_id, Debit (DECIMAL(8,2))** , Credit (DECIMAL(8,2))** , school_id.
- **Casts**: `Debit`/`Credit` → decimal:2.
- **Changes**:
  - Unify sign: a student payment (fee, books, clothes) always **debits** the fund (`Debit = amount, Credit = 0.0`). Fix `InventoryPaymentService` so revenues don't appear as fund credits.
  - *Note inconsistency to normalize (⚙): PascalCase columns `Debit`/`Credit` vs lowercase elsewhere; left as-is for BC but documented.*

## Fee Invoice (💰)

- **Table**: `fee_invoices`. **Fields**: id, school_fee_id, student_id, status (paid/unpaid), ... (no amount column; amount via `school_fee_id → school__fees.amount`).
- **Changes**: Void must reverse associated ledger + receipt + fund entries before/instead of bare `delete()`; never delete a paid invoice without full reversal (FR-010).

## Exchange Bond (💰)

- **Table**: `exchange_bonds`. **Fields**: id, student_id, amount (DECIMAL(10,2)), academic_year_id, ...
- **Changes**: `update()` → reverse original StudentAccount+FundAccount entries, then record the new amount (no double-counting/additive difference entries) (FR-009).

## Exception Fees (💰)

- **Table**: `excption_fees` *(legacy misspelling)*. **Fields**: id, student_id, amount, ...
- **Changes**: Remove the dead `student_id` guard (`ExceptionFeesController::create` line 70) that fatals on empty; guard with `isEmpty()` first. Void reverses ledger and reversal survives cleanup (FR-010). Exact decimal comparison (`bccomp`), not loose `==`.

## Activity Log / Audit (🛡⚙)

- **Table**: `activity_logs` (existing `logActivity`/ActivityLog infra).
- **Changes**: Every granted privileged action logs actor id, action, target id, timestamp (SC-011); append-only semantics for the acting admin.

---

## Cross-cutting validation & conventions

- **Money**: All money values compare/calculate via exact decimal (`bccomp`/`bcadd`/`bcsub`); no `==` on float-coerced decimals; cents-based helper or decimal cast only.
- **Enums (TitleCase, ⚙)**: Rename `Payment_Status`→`PaymentStatus`, `Payment_Type`→`PaymentType`, `Student_Status`→`StudentStatus`; keep DB string values for BC. Existing TitleCase enums unchanged (`TransactionType`, `InventoryOrderType`, etc.).
- **Authorization**: Any state-changing controller action (`pay`, gard store/update, admin actions) requires `authorize()` via a Policy or `permission:` middleware in addition to authentication.
- **Multi-tenancy**: Every list/report and raw-query job path applies the current school scope; null-school accounts are not implicit super-admins.
- **Referential integrity (⚙)**: Maintain FKs; polymorphic `itemable`/`reference` columns remain FK-free by design but use consistent class-name conventions.

## State transitions summary

| Entity | States / transitions |
|--------|----------------------|
| User account | enabled `↔` disabled (`login_allow`); enforced at login |
| Inventory order status | `not_paid ↔ paid` (authorized `payOrder`) |
| Inventory transaction type | `in` · `out` · `adjust` (created only via serialized stock methods) |
| Inventory item active | `active ↔ inactive` (persisted incl. false) |
| Fee invoice status | `unpaid ↔ paid` (paid → reversal path on void) |
| Ledger (student/fund) | debits/credits in exact decimal; reverse-then-record on edits/void |
