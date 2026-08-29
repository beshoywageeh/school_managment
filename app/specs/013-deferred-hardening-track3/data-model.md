# Data Model: Deferred Hardening — Track 3

**Phase 1 output**. Documents the entities touched by the deferred (Track 3) hardening, their fields/relationships, validation, and state transitions. Runs **alongside** existing model definitions; all change is additive and backward-compatible.

Legend: 📦 = inventory consistency · ⚡ = performance · 🏫 = multi-tenant correctness · 📥 = imports · 🛡 = dormant-path guards · ⚙ = maintainability.

---

## Inventory Item (📦)

- **Table**: `inventory_items`. **Fields**: id, type (`InventoryItemType`), category (`InventoryItemCategory`), name, grade_id, classroom_id, cost_price (DECIMAL), sell_price (DECIMAL), min_stock, max_stock, current_stock, is_active, opening_date, school_id, user_id.
- **Relationships**: `grade()`, `classroom()`, `school()`, `user()`; `orderItems(): MorphMany` (as `itemable` on `inventory_order_items`); `transactions(): HasMany`.
- **Changes (INV-3)**: `updateItem` persists **zero and false** values (`cost_price=0`, `sell_price=0`, `min_stock=0`, `max_stock=0`, `is_active=false`) via explicit `array_key_exists` presence checks instead of `array_filter`.
- **Changes (INV-1)**: stock balance recomputed under a row lock (`lockForUpdate()`) at the parent level; `current_stock` never driven to negative by concurrent `stockOut`.

## Inventory Order (📦)

- **Table**: `inventory_orders`. **Fields**: id, auto_number, type (`InventoryOrderType`: inventory/sales/purchases/gard), status (`InventoryOrderStatus`: not_paid/paid), date, manual_date, total_amount, student_id, school_id, user_id.
- **Unique constraint**: `(school_id, type, auto_number)`.
- **Relationships**: `student()`, `school()`, `user()`; `items(): HasMany`; `transactions(): MorphMany` via `reference`.
- **Changes (INV-2)**: order `type` is bound from the route into the form so `purchases` persists as a purchase (no hardcoded `sales`).
- **Changes (INV-4)**: transactions created with `reference_type` = **class name** so `transactions()` resolve.

## Inventory Order Item (📦)

- **Table**: `inventory_order_items`. **Fields**: inventory_order_id, itemable_id, itemable_type (polymorphic → `InventoryItem`), quantity_in, quantity_out, unit_price, total.
- **Relationship**: `order(): BelongsTo`; `itemable(): MorphTo`.
- **Changes**: uses the selected order type (from route), not a hardcoded value; line total consistent with stored `total_amount`.

## Inventory Transaction (📦)

- **Table**: `inventory_transactions`. **Fields**: id, item_id, type (`TransactionType`: in/out/adjust), quantity, balance, reference_type, reference_id, notes, user_id, school_id.
- **Changes (INV-4)**: `reference_type` must store the **class name** (e.g. `App\Models\Inventory\InventoryOrder`) so `reference(): MorphTo` resolves — currently writes bare `'order'` → dead relation. Additive migration backfills existing rows; a small in-project morph-map constant (or explicit class-name assignment) keeps it consistent.

## MyParent / Parent (🏫)

- **Table**: `parents`. **Fields**: id, school_id, father_name, mother_name, ... (no `student_id` column).
- **Relationship**: `students()` via a join/relationship table (`student_parent` / comparable), not a direct `student_id` column.
- **Changes (SCOPE-1)**: dashboard parent/student counts derived from the correct linkage (never `parents.student_id`); parent with no linked students → `0`, not an error.
- **Changes (IDX-1)**: additive index on `father_name` (the only column found genuinely missing an index).

## Student (🏫⚙)

- **Table**: `students`. **Fields**: id, school_id, name, code, ... (existing).
- **Changes (MAINT-1)**: student creation consolidated to one authoritative path (`StudentService`); `StudentRepository::storeStudent`, `StudentRegeister`, and `StudentImport::onRow` delegate to it with no behavior change.

## User / Account (🏫)

- **Table**: `users`. **Fields**: id, school_id (nullable), name, email, code, type, job_id, isAdmin (bool), login_allow (bool), password (hashed), religion*, timestamps, soft-deletes. (*legacy column `reiligon` — normalize backward-compatibly, MAINT-3.)
- **Changes (SCOPE-2/3)**: `HomeController::index()` user list school-scoped + paginated; a user with `school_id = null` is **not** implicit super-admin (consistent with 012's user/account work; set explicitly where shown).
- **Changes (GUARD-2)**: dormant auto-numbering delegate cannot collide with the consolidated order-numbering scheme.

## School / Tenant (🏫)

- **Table**: `schools`. **Fields**: id, name, ... (no global `BelongsToSchool` scope).
- **Changes (ADMIN-1)**: `SettingsController::update()` gains `permission:` middleware + school-ownership scope check (fixes IDOR where any authenticated user could edit any school by id).

## Role / Permission (🏫)

- **Tables**: `roles`, `permissions`, pivots `model_has_roles`, `role_has_permissions` (Spatie).
- **Changes (ADMIN-2)**: role deletion goes through the Spatie model (or explicitly detaches pivots) so no orphaned `model_has_roles`/`role_has_permissions` rows remain (current raw `DB::table` delete leaves orphans).

## Enums (⚙)

- **Current underscore/lowercase (string-backed)**: `Payment_Status`, `Payment_Type`, `Student_Status`, `user_religion`, `Jobs_types`, `Status`.
- **Existing PascalCase**: `UserGender`, `TransactionType`, `InventoryOrderType`, `InventoryOrderStatus`, `InventoryItemType`, `InventoryItemCategory`.
- **Changes (MAINT-3)**: normalize underscore/lowercase enum names to TitleCase (`PaymentStatus`, `PaymentType`, `StudentStatus`, etc.) with `backed` string casts preserved; DB column values kept (BC); additive migration where a column value is corrected.

## Backing data (⚙)

- **Typo tables/columns to normalize backward-compatibly**: `recipt__payments`, `excption_fees`, `acadmice_years`, `school__fees`, `users.reiligon`.
- **Imports**: `ParentsImport` aligned to `MyParent::$fillable` (currently writes `Father_Birth_Location` not in fillable → dropped); row-length guard added; `StudentsController::Excel_Import` reports real counts; `UserController::Excel_Import` validates the upload.

---

## Cross-cutting validation & conventions

- **Multi-tenancy**: every list/report/raw-query/job path applies the current school scope; null-school accounts are not implicit super-admins. (Consistent with 012.)
- **Money**: any values touched remain DECIMAL and are handled with exact-decimal discipline (no float coercion); no re-work of the cents conversion (deferred, owned by 012).
- **Performance**: core lists paginated ≤50/page and ≤500ms p95; dashboard/summary figures cached for reads but invalidated/refreshed on every relevant write (never full-day stale).
- **Imports**: uploads validated (presence + type) with clear messages; CSV-injection neutralization at **export** only (store as-entered).
- **Dormant paths**: `ImportStudentsJob` and the legacy auto-numbering path are school-scoped / collision-free and covered by a test asserting they cannot be activated unsafely.
- **Referential integrity**: polymorphic `itemable`/`reference` columns remain FK-free by design but use consistent class-name conventions; additive migrations only.

## State transitions summary

| Entity | States / transitions |
|--------|----------------------|
| Inventory item | `active ↔ inactive` (zero/false persisted); stock never below 0 (row-locked writes) |
| Inventory order | type preserved at creation (`sales`/`inventory`/`purchases`/`gard`); `not_paid ↔ paid` (authorized) |
| Inventory transaction | `in` · `out` · `adjust` (created only via serialized stock methods; reference maps to class) |
| Student | created via one authoritative path (repository/import delegate) |
| Dashboard figures | cached for reads; **refreshed/invalidated on every relevant write** |
| User role assignment | role deletion cleans pivot rows (no orphans) |
| School settings | only permissioned, in-scope admins may update |
