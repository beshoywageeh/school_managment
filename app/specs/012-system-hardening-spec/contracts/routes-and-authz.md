# Contract: Authorization & Route Changes (Security + Inventory)

**Phase 1 output**. Documented interface contracts for state-changing and authorization-sensitive changes. These define what routes/endpoints expose and what guards they require.

---

## 1. Administrative actions (`AdminEraController`) — 🛡

### Route contract (`routes/security.php`)

| Route | Method | Guard | Notes |
|-------|--------|-------|-------|
| `/admin-era` | GET | `auth` + `permission:admin-era` | Renders user list. **Must NOT select/return the `password` column.** |
| `/admin-era/employee/{id}` | POST | `auth` + `permission:admin-era` | Privileged mutation (isAdmin, password, email, login_allow, roles). |

### Behavior contract

- Any request without the `admin-era` permission → **403**, no data changed (FR-001).
- Response payloads never contain password hashes (FR-002).
- Last-admin protection: an action that would remove admin from the sole remaining admin is rejected (edge case).
- Every granted privileged action writes an audit entry (SC-011).

### Guard strategy

Apply `permission:` middleware in the controller constructor (matching sibling controllers' convention). Add a server-side Policy/method guard so `isAdmin`/`login_allow` in `UserService::assignFields()` are only honored for authorized callers.

---

## 2. Authentication (`routes/auth.php`) — 🛡

### Route contract

| Route | Method | Guard | Notes |
|-------|--------|-------|-------|
| `/login` | POST | `guest` + `throttle:login` | Enforced `login_allow`; disabled accounts rejected with "account disabled". |
| `/register` | POST | gated/disabled by default | Open self-service disabled or restricted to provisioning context (FR-004). |
| `/forgot-password` / password-reset | POST | `guest` + `throttle:login` | Rate-limited. |

### Behavior contract

- Brute-force: **5 failed/rapid attempts → 1-minute lockout, escalating** (SC-004). Legit single login unaffected.
- Disabled account (`login_allow=false`) cannot authenticate by any path (FR-003).
- `ensureIsNotRateLimited()` wired into `authenticate()`; `RateLimiter::hit/clear` aligned with the limiter.

### Rate-limiter contract

```
throttle:login = Limit::perMinutes(1, 5)->by(email+ip)  // escalating on repeats (SC-004)
```

---

## 3. Inventory `pay` (→ POST + Policy) — 📦

### Route contract (`routes/inventory.php`)

| Route | Current | New |
|-------|---------|-----|
| `GET /inventory/orders/{id}/pay` | GET toggle, no authorize, no scope | Removed; replaced by |
| `POST /inventory/orders/{id}/pay` | — | POST, `auth` + `authorize('pay', $order)`, school-scoped lookup |

### Behavior contract (FR-016)

- Only users with `pay` permission/ability toggles `status` (not_paid ↔ paid).
- School-scoped order lookup → cross-school orders 404/denied.
- Triggered via a POST form (CSRF-protected), never a plain `GET` link (the `index.blade.php` pay anchor becomes a form).
- `InventoryGardController` store/update also guarded (`authorize`).
- `show($id)` school-scoped.

### Policy contract (`InventoryOrderPolicy`)

```
define('pay', user, order): user owns a permission to pay AND order belongs to user's school
```

---

## 4. Ledger-safe financial mutations — 💰

### Behavior contract

- **Exchange bond update**: reverse original `StudentAccount` + `FundAccount` entries, then record new amount (FR-009). No additive difference entries.
- **Invoice void / exception store on full amount**: reverse ledger + receipt + fund before/without bare delete; reversal entries survive source cleanup (FR-010).
- **Fund sign**: any student payment (fee/books/clothes) → **Debit** the fund (FR-008). `InventoryPaymentService` updated to `Debit=amount, Credit=0`.
- **Money math**: exact decimal (`bccomp`/`bcadd`/`bcsub`), never float `* 1` or loose `==` (FR-007).
- **Partial/overpay**: record every partial to the cent; track surplus/remainder as credit, never drop (FR-011).
- **Ledger↔order integrity**: reversals act only on records actually linked to the receipt; `fee_invoices_id` never stores an inventory order id (FR-012).

---

## 5. Inventory numbering & stock (internal service contracts) — 📦

### Numbering contract (FR-013)

- Single provider: `InventoryOrderService::generateOrderNumber(schoolId, type)` → `{PREFIX}-{5-digit}` (INV/SRF/PUR/GRD).
- All order flows (including `StudentOrderService` books/clothes) call this provider.
- Unique-violation retry inside the transaction; never collides under the `(school_id, type, auto_number)` unique index.

### Stock contract (FR-014)

- `stockIn`/`stockOut`/`adjustStock` acquire `lockForUpdate()` on the `inventory_items` row; re-check availability under the lock; reject stock-negative (or explicit override).

### Item update contract (FR-017)

- `updateItem` persists `0`/`false` values using explicit presence checks (no `array_filter`).

### Reference contract (FR-018)

- `inventory_transactions.reference_type` stores the **class name** so `reference()`/`transactions()` resolve; existing rows backfilled.

---

## 6. Multi-tenancy & quality contracts — ⚙

- Every list/report/raw-query/job path applies the current school scope; no `null school_id` → super-admin (FR-005, FR-022).
- Core lists paginated ≤50/page (FR-021, SC-009).
- Raw role deletion cleans Spatie pivot tables; `can:monitor-access` resolves (gate or middleware).
- Cache invalidation clears all `fees_{schoolId}_{gradeId}_{classroomId}` key variants (FR-023).
- Missing indexes added via additive migration (FR-020).
