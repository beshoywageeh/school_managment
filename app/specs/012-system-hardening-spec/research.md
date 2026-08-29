# Research: System Hardening & Correctness Remediation

**Phase 0 output** — resolves all technical unknowns from the plan's Technical Context and documents decisions used by the data model and tasks.

---

## 1. Phase 3 scope — inventory system is already rebuilt

**Unknown**: The spec frame (AGENTS.md) described a not-yet-done inventory rebuild. Investigation shows the rebuild is **already complete on disk**:

- Legacy models (`Stock`, `Clothes`, `BookSheet`), controllers, views, and migrations no longer exist.
- New centralized implementation exists: 4 models under `app/Models/Inventory/`, 6 services under `app/Services/Inventory/`, 3 controllers under `app/Http/Controllers/Inventory/`, views under `resources/views/backend/inventory/`, 9 inventory migrations, `routes/inventory.php`.

**Decision**: Phase 3 targets consistency bugs in the *new* implementation. No legacy deletion work is required.

**Rationale**: Avoids patching code that no longer exists and matches the clarifying decision that Phase 3 items are constraints for the rebuilt system.

---

## 2. Security — confirmed critical defects and fixes

### 2.1 `AdminEraController` privilege escalation
`emp_active()` (lines 24–39) has **no** `permission:`/`can:`/`authorize()` guard; any authenticated user can set `isAdmin`, reset any password, change email, toggle `login_allow`, and assign roles. `Index()` selects the raw `password` hash column and passes it to the view (`AdminEraController.php:18`). Routes in `routes/security.php:22-30` have no group-level permission.

**Decision**:
- Apply `permission` middleware (e.g., `admin-era` permission or an equivalent) in the controller constructor; add a server-side policy/guard.
- Remove the raw `password` column from the `Index()` select list entirely (never expose hashes).
- Harden `UserService::assignFields()`/`prepareUserData()` so `isAdmin` and `login_allow` are **not** sourced from arbitrary request input for non-authorized callers.
- Enforce last-admin protection: prevent removal of admin privilege from the final administrator.

### 2.2 `login_allow` never enforced
`LoginRequest::authenticate()` passes `$this->boolean('login_allow')` as the second (remember-me) arg to `Auth::attempt()` (`LoginRequest.php:44`). The `login_allow` flag is written but never enforced.

**Decision**: After successful credentials, check the account's `login_allow`; reject disabled accounts with a "account disabled" message and log the attempt. `isAdmin`/`login_allow` removed from any insecure mass-assignment path where not server-guarded.

### 2.3 `ensureIsNotRateLimited()` is dead; no throttling on auth routes
`LoginRequest::ensureIsNotRateLimited()` is defined but never called. `routes/auth.php` register/login/password-reset have no `throttle`.

**Decision**: Create a dedicated `throttle:` rate limiter (e.g., `throttle:login`) applied to `POST /login`, `POST /register`, and password-reset endpoints, and wire `ensureIsNotRateLimited()` into `authenticate()`. Specified threshold: **5 failed/rapid attempts → 1-minute lockout, escalating on repeats** (SC-004). Use Laravel's `RateLimiter` (already present in the dead method) so no new dependency.

### 2.4 Open registration + `null school_id` super-admin escape hatch
`POST /register` is open (`routes/auth.php:18`); `SchoolScope` returns unfiltered when `school_id` is null (`SchoolScope.php:38-42`), so a self-registered user can see all schools. `HomeController::index()` does `User::query()->get()` (`HomeController.php:40`).

**Decision**:
- Gate or disable public self-registration: `register` routes only reachable when `setup`/provisioning context applies or are disabled by config default.
- `SchoolScope` no longer treats a `null school_id` as system-wide super-admin; super-admin is an explicit, provisioned flag. Null-school users are either denied list access or assigned a school.
- `HomeController::index()` scopes the user list to the current school and paginates it.
- `SettingsController::update()` gains permission middleware + school constraint (fixes cross-school IDOR, `SettingsController.php:92-124`).

### 2.5 Audit trail for privileged actions (clarification Q2)
**Decision**: Every granted privileged action (promote/demote admin, reset password, change email, toggle login, assign roles) writes a persistent audit entry (actor id, action, target id, timestamp) via the existing ActivityLog/`logActivity` infrastructure, rendered append-only for the acting admin (SC-011).

---

## 3. Financial correctness — confirmed defects and fixes

### 3.1 Money as float coercion
All money is `decimal:2` (cast → PHP string). Arithmetic coerces to float in `PaymentService` (`$current_amount = $request->amount * 1`), `ExceptionFeesController` (`sum('debit') - sum('credit')`), `ExchangeBondController` (`$request->amount - $student_account->debit`), and loose `==` comparisons (`ExceptionFeesController.php:119`).

**Decision**: Use exact decimal arithmetic. Preferred: Laravel/Eloquent `decimal` casts + explicit rounding via `bcadd/bcsub/bccomp` or a small money helper, computing in cents. No new package. Replace loose `==` money comparisons with `bccomp`.

### 3.2 School-fund sign inconsistency
`PaymentService` records FeePayment as **Fund Debit** (money in); `InventoryPaymentService::handleClothesPayment`/`handleBooksPayment` record a **Fund Credit** (money out) for the same kind of event (student pays for books/clothes).

**Decision**: Unify sign — a student payment (whether fee, books, or clothes) always **debits** the school fund. Update `InventoryPaymentService` to `Debit = amount, Credit = 0.0` to match `PaymentService`.

### 3.3 `fee_invoices_id` misuse in inventory payments
`InventoryPaymentService` stores the inventory order id into `student_accounts.fee_invoices_id` (FK → `fee_invoices.id`), so `AccountingReversalService::reverseReceiptEntries` can update the wrong FeeInvoice.

**Decision**: Add a dedicated order linkage (e.g., inventory ledger linkage) so reversals never touch the wrong fee invoice; enforce FK integrity. Reversals only act on records actually linked to the receipt.

### 3.4 `ExchangeBondController::update` double-counts
Creates a difference `StudentAccount` entry without reversing the original (`ExchangeBondController.php:108-118`), and overwrites the FundAccount while student account is additive.

**Decision**: Extract to a ledger service: reverse the original entries (via `AccountingReversalService`) before recording the new amount. Both StudentAccount and FundAccount reflect a clean reverse-then-record.

### 3.5 Invoice void without reversal; cascade nullifies reversal
`ExceptionFeesController::destroy()` reverses then deletes; the `student_accounts.exception_id` CASCADE then deletes the reversal too. `store()` deletes the FeeInvoice on full-amount exception without reversing ledger.

**Decision**: Reverse ledger entries and **detach semantics** so reversal survives cleanup; avoid relying on cascade to remove reversals. `store()` never deletes a paid invoice without reversing its ledger and receipt/fund entries.

### 3.6 Partial/over-payment dropped
`handlePartialPayment` skips installments when amount < part value and silently discards surplus.

**Decision**: Record every partial amount to the cent; track surplus/remainder (credit) explicitly rather than dropping. Partial within an installment is supported by exact decimal math.

---

## 4. Inventory → constraints for the new (already-rebuilt) system

### 4.1 Auto-numbering split (race + format)
`InventoryOrderService::generateOrderNumber` → `SRF-00001`; `StudentOrderService::generateAutoNumber` → 6-digit no-prefix (`000123`), not school/type scoped. Both write `auto_number` under a new unique `(school_id, type, auto_number)` index → collision risk and format break for sales orders created via `StudentOrderService`.

**Decision**: Consolidate numbering into `InventoryOrderService::generateOrderNumber` as the single provider; `StudentOrderService` delegates to it (both `addStudentBookInvoice`/`addStudentClotheInvoice`). Retry on unique-violation inside a transaction to close the remaining race (insert-with-retry alongside `lockForUpdate`).

### 4.2 `stockOut` race / oversell
`InventoryTransactionService::stockIn`/`stockOut`/`adjustStock` read `current_stock` then write without `lockForUpdate()` on the item row → lost update/oversell (lines 51-93, 95-123).

**Decision**: Wrap stock mutations in a transaction and issue `lockForUpdate()` on the `inventory_items` row before recomputing balance; `canStockOut` re-checked under the lock. Block stock-negative (reject or require explicit override).

### 4.3 `updateItem` drops zero/false
`InventoryItemService::updateItem` uses `array_filter(...)` (no callback) → `0`/`false` values stripped (lines 51-77).

**Decision**: Replace `array_filter` with explicit `array_key_exists` presence checks so `0`, `false`, and empty are persisted (FR-017).

### 4.4 Polymorphic `reference` mismatch (dead relationship)
`InventoryTransaction` writes `reference_type => 'order'` while `reference()` MorphTo and `InventoryOrder::transactions()` MorphMany expect a **class name**.

**Decision**: Write `reference_type` as the class name (`App\Models\Inventory\InventoryOrder`, etc.) and set `reference_id` accordingly so `reference()`/`transactions()` resolve correctly (FR-018). Backfill existing rows in an additive migration.

### 4.5 `pay()` — GET, no authorize, no scope; `show()` unscoped
`InventoryOrderController::pay()` (177-186) is a GET toggle with no `authorize()` and no school scoping; `show()` has no scope.

**Decision**: Convert `pay()` to a POST route with `authorize('pay', $order)` via a new `InventoryOrderPolicy` and school-scope the lookup; `show()` scoped to current school (FR-016).

### 4.6 Hardcoded `type="sales"` in `create_sarf`
`create_sarf.blade.php:14` hardcodes `type="sales"` but the controller renders it for both `sales` and `purchases` → purchases cannot be created.

**Decision**: Pass the order type from the route/controller into the form (hidden field bound to the selected type) (FR-015).

### 4.7 `InventoryGardController` no `authorize()`
**Decision**: Add `authorize()` for gard store/update (FR-016 coverage).

---

## 5. Quality & hardening

### 5.1 Missing indexes / FK gaps
Most existing FKs are in a late `db_relations` migration; `inventory_order_items.itemable` and `inventory_transactions.reference` are polymorphic (no FK by design). Some core list columns lack indexes.

**Decision**: Add additive migrations for missing indexes on commonly filtered/joined columns surfaced during implementation (agree with FR-019/FR-020). Preserve polymorphic columns without FKs.

### 5.2 Raw queries bypass SchoolScope; unbounded lists
`HomeController` widgets use `DB::table(...)`; `ImportStudentsJob`; `RoleController` RAW deletes roles without cleaning `model_has_roles`/`role_has_permissions`.

**Decision**: Scope every raw query/job to current school (FR-022); paginate core lists (FR-021); clean Spatie role tables on role deletion; fix `can:monitor-access` (define a matching Gate or use `permission:` middleware) (`security.php:63`).

### 5.3 Cache invalidation bug
`CacheService::invalidateFeesCache()` clears one key while getters build multiple keys (`fees_{schoolId}_{gradeId}_{classroomId}`) → stale 24h data.

**Decision**: Invalidate by pattern/prefix across all key variants (FR-023).

### 5.4 Dead/duplicated/misnamed code
Dead services: `PromotionService`, `InventoryOrderQueryService` (actually used by query service), `ReportPolicy` (unregistered), `SettingsController::store()`. Duplicated `generateAutoNumber`. Duplicated `handleClothesPayment`/`handleBooksPayment` (90% identical). Misspelled names: `chipt__payments`, `excption_fees`, `reiligon`, `StudentRegeister`; snake_case enums `Payment_Status`/`Payment_Type`/`Student_Status`.

**Decision**: 
- Consolidate numbering and inventory-payment duplication (shared private helper).
- Remove dead services/methods not referenced (after confirming no references).
- Rename enums to TitleCase (`PaymentStatus`, `PaymentType`, `StudentStatus`) with `backed` string casts preserved; keep DB column values (BC), fix spelling in casts where the column value is corrected in a migration.
- Normalize permission-name casing where genuinely inconsistent, via seeder/migration (FR-024).

### 5.5 `ImageTrait` path mismatch + wrong morph namespace
`ImageTrait` saves under `Str::slug($fName)` but deletes from `folderName/filename`; `UserController` passes `imageable_type = 'App\Model\Users'`.

**Decision**: Align save/delete paths; fix the morph class namespace (FR-024).

---

## Consolidated decisions table

| # | Area | Decision |
|---|------|----------|
| 1 | Scope | Inventory rebuild already done; Phase 3 fixes the new implementation |
| 2 | Security | Gate AdminEra + drop password hash; enforce login_allow; wire throttle (5/1min escalating); gate registration; scope HomeController; no null→super-admin |
| 3 | Finance | Exact decimal money; unify fund sign (payments debit fund); ledger reverse-then-record; no cascade-nullified reversals; track partial/overpay |
| 4 | Inventory | Single numbering provider + retry; lockForUpdate stock; zero/false updates; class-name reference; pay()→POST+Policy; type from route; gard authorize |
| 5 | Quality | Scope raw queries; paginate; index gaps; fix cache; remove dead code; TitleCase enums; normalize permission casing; ImageTrait |
| 6 | Audit | Every privileged action logged via existing ActivityLog, append-only for actor (SC-011) |
