# Contract: Routes, Authorization & Behavior (Deferred Hardening — Track 3)

**Phase 1 output**. Interface contracts for the deferred (Track 3) changes: what each route/endpoint exposes, the guards it requires, and the behavioral contracts for imports, caching, and performance. Each contract maps to a spec functional requirement.

---

## 1. Inventory (📦)

### Order type (`routes/inventory.php` + views) — INV-2

- The order `type` (`sales`/`inventory`/`purchases`/`gard`) is bound **from the route/controller** into the create form as a hidden field.
- Submitting a `purchases` order must persist `type = purchases` (never silently `sales`).
- `StoreOrderRequest` validates `type in:sales,inventory,purchases,gard`.

### Stock serialization (internal `InventoryTransactionService`) — INV-1

```
stockIn / stockOut / adjustStock:
  DB::transaction:
    item = InventoryItem::where('id', id)->lockForUpdate()->first()
    # recompute balance from the locked row; require current_stock >= quantity for stockOut
    write back
```

- No overselling under concurrent stockOut; stock never goes negative.

### Item update — INV-3

- `updateItem` persists `0`/`false` values using `array_key_exists` presence checks (no `array_filter`).

### Reference mapping — INV-4

- `inventory_transactions.reference_type` stores the **class name** (e.g. `App\Models\Inventory\InventoryOrder`) so `reference()`/`transactions()` resolve.
- Additive migration backfills existing `'order'`/`'adjustment'`/`'initial'`/`'reversal'` rows to class names.

### `pay()` / `show()` — INV-2 authorization

| Route | Method | Guard | Notes |
|-------|--------|-------|-------|
| `GET /inventory/orders/{id}/pay` | GET toggle | — | Replaced/removed |
| `POST /inventory/orders/{id}/pay` | POST | `auth` + `authorize` (Policy/permission) + school-scoped | State-changing, CSRF-protected |
| `GET /inventory/orders/{id}` | GET | `auth` + school-scoped | show lookup scoped to current school |

---

## 2. Multi-tenant correctness (🏫)

### Settings update (IDOR) — ADMIN-1

| Route | Method | Guard | Notes |
|-------|--------|-------|-------|
| `PUT /settings/{id}` | PUT | `auth` + `permission:settings-info` + school-ownership | Reject cross-school or speculative ids |

### Role deletion — ADMIN-2

- Delete via Spatie `Role` model (or explicitly detach) so `model_has_roles` / `role_has_permissions` pivots are cleaned — no orphaned rows.

### Dashboard parent count & user list — SCOPE-1/2/3

- Parent/student count derived from the correct join linkage; `0` shown (not an error) for parents with no linked students.
- `HomeController::index()` user list school-scoped and paginated; null-school users are **not** implicit super-admins.

---

## 3. Imports / Exports (📥)

### Upload validation — IMP-2

- User import endpoint validates the file via a Form Request: `required|file|mimes:xlsx,xls,csv`, with a clear message on failure (no crash on missing file).
- Parents import adds a row-length/emptiness guard before reading cells.

### Field mapping — IMP-1

- `ParentsImport` writes only fields present in `MyParent::$fillable`; either map `Father_Birth_Location` to a real column or drop it — no silent loss.

### Outcome reporting — IMP-4

- `StudentsController::Excel_Import` displays **actual** imported/failed counts (from the import service), never a hardcoded success message.

### CSV injection — IMP-3 (CLARIFIED: export-time)

```
helper: escapeFormulaCell(value)
  if value starts with '=', '+', '-', or '@': prefix with "'"
  return value
```

- Applied **at export** to every text cell in any CSV/XLSX export; stored values remain as-entered.

---

## 4. Caching & performance (⚡)

### Dashboard figure freshness — PERF-2 (CLARIFIED: invalidate on write)

- Figures are cached for reads under key `fees_{schoolId}_{gradeId}_{classroomId}` (and equivalents).
- On every relevant write (fee/accounting/grade/classroom change), `invalidateFeesCache()` clears **all key variants** (or uses cache tags) so nothing persists stale for a full day.

### Performance SLO — PERF-1 (CLARIFIED: ≤500ms p95)

- Core lists (receipts, exchange bonds, promotions, parents, etc.) are paginated **≤50/page** and respond **≤500ms at p95**.

---

## 5. Dormant-path guards (🛡)

- `ImportStudentsJob` (currently dead): every row it writes is school-scoped; a test asserts it remains disabled (or it is removed if confirmed never-used).
- Legacy auto-numbering (`StudentOrderService::generateAutoNumber`): once consolidated, it delegates to the single provider so reactivation cannot collide with the `(school_id, type, auto_number)` scheme.

---

## 6. Maintainability (⚙)

- Student creation consolidated to one authoritative `StudentService`; repository/import delegate (MAINT-1).
- Unused services removed only after verification (MAINT-2).
- Naming/enums normalized backward-compatibly; additive-only, no table drops (MAINT-3).
- Additive index on `parents.father_name` (+ any hot join column found) (IDX-1).
