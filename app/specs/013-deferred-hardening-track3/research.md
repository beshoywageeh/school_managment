# Research: Deferred Hardening — Track 3

**Phase 0 output** — resolves the technical unknowns from the plan's Technical Context and documents the decisions that drive the data model, contracts, and task list. All findings were verified directly against the source at `/data/projects/laravel_projects/school_managment/app`.

---

## 0. Scope reconciliation with `012-system-hardening-spec`

**Unknown**: Several Track 3 items overlap with 012's phases 3–4 (inventory consistency, auto-numbering, missing indexes, pagination, cache fix, orphan-safe deletion, scoping, dead-code removal, naming).

**Decision**: 012 owns Tracks 1–2 and the *commitment* to phases 3–4. This plan is the **single source of truth for the deferred remainder**. During `/speckit.tasks`, each overlapping item is assigned exactly once — if 012's `tasks.md` already contains the concrete task, this plan references it (T-code) rather than re-planning it; otherwise this plan adds the task. No duplicated work.

**Rationale**: Prevents conflicting implementations of the same fix while guaranteeing full completion of Track 3.

---

## 1. Inventory rebuild is complete (not "to be built")

**Unknown**: The AGENTS.md frame described a not-yet-done inventory rebuild.

**Decision**: Treat inventory work as **hardening the existing rebuilt system**. Verified existence: 4 models (`app/Models/Inventory/`), 6+ services (`app/Services/Inventory/` + `InventoryPaymentService`), 3 controllers (`app/Http/Controllers/Inventory/`), 10 inventory migrations, and `routes/inventory.php`. Legacy `Stock`/`Clothes`/`BookSheet` are gone.

**Rationale**: Patching code that no longer exists would be wasted effort; the plan targets the new implementation's defects.

---

## 2. Inventory consistency (Track 3 core)

### 2.1 `stockOut` race / possible oversell — VERIFIED
`InventoryTransactionService::stockOut` L75 reads `$item->current_stock`, L89 writes it back. All three mutations (`stockIn` L31/45, `stockOut` L68/75/89, `adjustStock` L101/119) are inside `DB::transaction` but **no `lockForUpdate()`** exists in the file (the only inventory locks are in numbering). Read-modify-write race → concurrent sells can oversell.

**Decision**: Move stock balance recomputation under the same transaction and issue `lockForUpdate()` on the `inventory_items` row before recomputing; re-run the availability check under the lock; reject stock-negative. (Overlaps 012 Inventory audit; coordinate to assign once.)

### 2.2 `updateItem` strips zero/false — VERIFIED
`InventoryItemService::updateItem` L51–77 uses `array_filter([...])` with **no callback** at L54; `0`/`false`/`''`/`null` values are dropped (e.g. `cost_price=0`, `sell_price=0`, `min_stock=0`, `max_stock=0`, `is_active=false` not persisted).

**Decision**: Replace `array_filter` with explicit `array_key_exists()` presence checks so `0`, `false`, and empty persist (INV-3).

### 2.3 Purchase order silently becomes sales — VERIFIED (live bug)
`create_sarf.blade.php` L14 hardcodes `<input type="hidden" name="type" value="sales">`; `InventoryOrderController::create()` L100–103 maps **both** `sales` and `purchases` to `create_sarf`. Clicking "purchases" posts `type=sales`, so a purchase order is stored as a SALES order.

**Decision**: Bind the order type from the route/controller into the form (hidden field bound to the selected type) so purchases persist as purchases; `StoreOrderRequest` allows `purchases` (INV-2).

### 2.4 Broken polymorphic `reference` mapping — VERIFIED (live bug)
`InventoryTransactionService` defaults `$referenceType = 'order'` (L16/L54; written L38, L82; `'adjustment'` L112; `'initial'` in `InventoryItemService` L41; `'reversal'` in `InventoryOrderService` L187/L197). `InventoryTransaction::reference()` (L58–61) and `InventoryOrder::transactions()` (L65–68) are `MorphTo`/`MorphMany` expecting **class names**, but there is **no `morphMap`/`Relation::enforceMorphMap` anywhere in `app/`**. So `reference()` resolves to `null` for every transaction — the relationship is dead.

**Decision**: Write `reference_type` as the class name (`App\Models\Inventory\InventoryOrder`, `InventoryItem`, etc.) and set `reference_id` accordingly; add an additive migration to backfill existing rows; use a small in-project morph-map constant (respecting the constitution's "no new dependency" rule) or explicit class-name assignment (INV-4).

### 2.5 Two auto-numbering providers — VERIFIED
`StudentOrderService::generateAutoNumber()` L21–33 (pure 6-digit, no prefix) vs `InventoryOrderService::generateOrderNumber()` L19–43 (`INV-`/`SRF-`/`PUR-`/`GRD-` + 5 digits). Both write `inventory_orders.auto_number` under the unique `(school_id, type, auto_number)` index added `2026_08_27_184046`. Competing sequences; `StudentOrderService` parses a prefixed order as `(int)"SRF-00042" = 0`.

**Decision**: Consolidate on `InventoryOrderService::generateOrderNumber` as the single provider; `StudentOrderService` delegates; unique-violation retry inside the transaction (coordinate with 012 numbering work to assign once).

### 2.6 `pay()` / `show()` authorization & scoping — VERIFIED (nit)
`InventoryOrderController::pay()` L177–186 is a **GET** toggle with no `authorize()`; `show()` L131–140 `findOrFail` with no explicit school scope. Mitigated for non-admins by `SchoolScope` (L26–45) but bypassed for `isAdmin` and null-school users.

**Decision**: Convert `pay()` to POST with an `authorize()` (Policy or permission), scope lookups to the current school; keep `show()` scoped (coordinate with 012).

---

## 3. Performance (Track 3 core)

### 3.1 Cache invalidation is a no-op — VERIFIED (live bug)
`CacheService::getSchoolFeesWithCache()` builds key `fees_{schoolId}_{gradeId}_{classroomId}` at L57 (always suffixed). `invalidateFeesCache()` L95–98 does `Cache::forget("fees_{$this->schoolId}")` — a key **never written** → invalidation never clears the actual keys (same pattern: `invalidateGradesCache` L85 vs `classrooms_grade_{gradeId}` keys L38–40).

**Decision**: Invalidate by actual key pattern/suffix variants (or cache tags) on every relevant write so figures never go full-day stale (**PERF-2**; clarified: invalidate/refresh on write, keep caching for read speed).

### 3.2 Performance SLO — CLARIFIED
Dashboard/list reads meet **≤500ms at p95**; core lists paginated **≤50/page** (**PERF-1**).

**Decision**: Enforce page sizing and pagination on core lists; treat ≥1s p95 or >50 rows on single screen as a failure. Measured via the affected feature tests and a smoke benchmark.

---

## 4. Multi-tenant correctness (Track 3 core)

### 4.1 Dashboard parent-count bug — VERIFIED (live bug)
`DashboardService` L31: for non-admins, `$parents->whereIn('student_id', $gradeIds)` runs on the `parents` table, which has **no `student_id` column** (migration L14–39) → MySQL error / broken card for non-admin dashboards. Admin path (L34) is clean.

**Decision**: Derive the parent/student count from the correct linkage (the `parent_student` join table / relationship), never `parents.student_id`; show `0` (not an error) when a parent has no linked students (**SCOPE-1**).

### 4.2 Unscoped user query — VERIFIED
`HomeController::index()` L40 does `User::query()->get()` with no school scope. `SchoolScope` bypasses for admins and null-school users.

**Decision**: Scope the user list to the current school (or explicit authorized admin semantics) and paginate (**SCOPE-2**). Null-school users are **not** implicit super-admins (**SCOPE-3**).

### 4.3 Settings update IDOR — VERIFIED (live bug)
`SettingsController::update()` L92–124 loads `School::findorfail($id)` with **no authorization** that the school belongs to the caller; `permission:settings-info` is applied only to `index()` (constructor L21–24). Any authenticated user can edit any school by id.

**Decision**: Add `permission:` middleware (and a school-scope/ownership check) to `update()`; reject cross-school or speculative-ids (**ADMIN-1**).

### 4.4 Role deletion leaves orphaned pivots — VERIFIED (live bug)
`RoleController::destroy()` L94–99 does raw `DB::table('roles')->where('id',$id)->delete()`, bypassing the Spatie `Role` model → no `model_has_roles`/`role_has_permissions` cleanup.

**Decision**: Delete via the Spatie model so pivots are cleaned (or explicitly detach) (**ADMIN-2**).

---

## 5. Imports (Track 3 core)

### 5.1 ParentsImport drops a field — VERIFIED
`ParentsImport` L26 writes `'Father_Birth_Location' => $row[6]`, which is **not in `MyParent::$fillable`** → silently dropped; no row-length/emptiness guard (unlike `StudentImport`) → array-key errors on short/blank rows; `school_id` auto-filled by trait (OK).

**Decision**: Align the import columns to `$fillable` (map or add the field), add a row-length guard, and validate the file (**IMP-1**, **IMP-2**).

### 5.2 Hardcoded import success message — VERIFIED (live bug)
`StudentsController::Excel_Import` L360–395 validates the upload (L365–375) but reads `$result['errors']`/`$result['imported']` while `StudentImportService::StudentImport()` returns **only** `['message' => 'Import started...']` → the hardcoded `'✅ Students imported successfully!'` (L390–394) is always shown.

**Decision**: Return/display real imported/failed counts; never hardcode success (**IMP-4**).

### 5.3 UserController import has no validation — VERIFIED
`UserController::Excel_Import` L184–199 calls `$request->file('excel')->getRealPath()` directly with **no presence/type validation** (would fatal on missing file).

**Decision**: Add a Form Request (`required|file|mimes:xlsx,xls,csv`) with a clear message (**IMP-2**).

### 5.4 CSV injection — VERIFIED absent; **CLARIFIED: export-time**
No export-time neutralization exists. The maatwebsite Excel export is dead (`StudentsExport` + `ExportStudentsJob` never dispatched); live export is PDF.

**Decision**: Add a small export helper that escapes `=`, `+`, `-`, `@` prefixes **at export** (store values as-entered) so any future/current spreadsheet output renders inert text (**IMP-3**; clarified). Applies to any `FromCollection`/`FromView` CSV/XLSX export path added or found during implementation.

---

## 6. Dormant-path guards (Track 3 core)

### 6.1 `ImportStudentsJob` — VERIFIED **dead**
Defined in `app/Jobs/ImportStudentsJob.php`, **never dispatched/referenced** anywhere.

**Decision**: Keep it guarded: school-scope every row it writes and add a test asserting it stays disabled (or remove it if it's genuinely never used and no plan to activate) (**GUARD-1**).

### 6.2 Auto-numbering collision on reactivation — VERIFIED **live/entangled**
`StudentOrderService` is **active via a legacy chain** (`FinancialService` → `InventoryPaymentService` → `ReceiptPaymentController::store`), and its `generateAutoNumber` collides with the consolidated provider.

**Decision**: Once numbering is consolidated (2.5), the legacy `generateAutoNumber` is guarded/delegated so reactivation cannot collide (**GUARD-2**).

---

## 7. Maintainability (Track 3 core)

### 7.1 Student-creation duplication — VERIFIED
Three write sites: `StudentRepository::storeStudent` L41 (active, web form), `StudentRegeister` L28 (dormant create), `StudentImport::onRow` L203 (active, queued import). No central `StudentService` exists.

**Decision**: Introduce/consolidate a single authoritative student-creation path (e.g. `StudentService`); repositories/importdelegate to it; no behavior change (**MAINT-1**).

### 7.2 Unused services — VERIFIED
`StockReportService` is a legacy name leak. Confirm each "unused" service before removal via grep; remove only genuinely unreferenced classes, else guard them (**MAINT-2**).

### 7.3 Naming / enums / typos — VERIFIED
- Underscore enums: `Payment_Status`, `Payment_Type`, `Student_Status`, `user_religion`, `Jobs_types`, `Status` (all string-backed). PascalCase set: `UserGender`, `TransactionType`, `InventoryOrderType`, `InventoryOrderStatus`, `InventoryItemType`, `InventoryItemCategory`.
- Typo tables/columns: `recipt__payments`, `excption_fees`, `acadmice_years`, `school__fees`, `users.reiligon`.

**Decision**: Normalize naming **backward-compatibly** (additive migrations keep old tables/columns during transition per constitution workflow #5; `backed` enum casts preserve DB values; fix only where a migration corrects a column value) (**MAINT-3**). Do **not** drop legacy tables in this wave.

### 7.4 Missing index — VERIFIED
Only `parents.father_name` genuinely lacks an index (in MySQL, the other columns already get implicit indexes from the `db_relations` FKs; `add_missing_indexes` already covered `students`/`fee_invoices`/`recipt__payments`/`inventory_*`/`activity_logs` but not `father_name`).

**Decision**: Add an additive migration indexing `parents.father_name` (and re-check any remaining hot join column during implementation) (**IDX-1**).

---

## Consolidated decisions table

| # | Area | Decision |
|---|------|----------|
| 0 | Scope | Track 3 only; 012 owns Tracks 1–2 + phase 3/4 commitments; assign overlapping items exactly once |
| 1 | Inventory | Rebuild complete; harden the new system (no legacy work) |
| 2.1 | Stock | `lockForUpdate()` under transaction; no oversell; re-check under lock |
| 2.2 | Item update | `array_key_exists` presence checks so zero/false persist |
| 2.3 | Order type | Bind type from route into form; purchases persist as purchases |
| 2.4 | Reference | Store class name; additive backfill migration + morph map constant |
| 2.5 | Numbering | Single provider; legacy provider delegates; unique-violation retry |
| 2.6 | pay/show | POST + authorize; school-scoped lookup |
| 3.1 | Cache | Invalidate/refresh actual key variants on write (never full-day stale) |
| 3.2 | Perf SLO | ≤500ms p95; ≤50/list page |
| 4.1 | Parent count | Correct linkage via join table; 0 not error |
| 4.2 | User list | School-scope + paginate HomeController users |
| 4.3 | Settings | permission + school-ownership check on update |
| 4.4 | Role delete | Clean Spatie pivots (model delete) |
| 5.1 | Parents import | Align columns to fillable; row-length guard |
| 5.2 | Import report | Real imported/failed counts; no hardcoded success |
| 5.3 | Upload validation | Form Request presence/type + clear message |
| 5.4 | CSV injection | **Export-time** escaping (store as-entered) |
| 6.1 | ImportStudentsJob | Guard + scope + keep-disabled test (or remove) |
| 6.2 | Auto-numbering | Consolidate first, then guard collision-free reactivation |
| 7.1 | Student creation | One authoritative `StudentService`; others delegate |
| 7.2 | Unused services | Remove only verified-unreferenced; else guard |
| 7.3 | Naming/enums | Backward-compatible normalization; additive; no drops |
| 7.4 | Index | Additive index on `parents.father_name` (+ hot columns as found) |
