# Research: Masterplan Security & Quality Overhaul

**Date**: 2026-07-27
**Spec**: [spec.md](./spec.md)

## R1: School Scope Architecture

**Decision**: Use existing `BelongsToSchool` + `SchoolScope` + `SchoolTrait` pattern. Fix controllers with missing explicit `school_id` filtering.

**Rationale**: The existing pattern is already deployed across 22 models and 27 controllers. It provides automatic Eloquent query filtering via global scope. Admin users bypass the scope (by design). Adding a new automatic scope would conflict with the existing bypass behavior and require migrating all 22 models.

**Current Architecture**:
- `SchoolScope` (Eloquent global scope) — adds `WHERE school_id = ?` to queries. Bypassed for admin users (`is_admin == true`).
- `BelongsToSchool` (Model trait) — registers SchoolScope, auto-populates `school_id` on creation.
- `SchoolTrait` (Controller helper) — provides `getSchool()` method. Used by 27 controllers.

**IDOR Fix Strategy**: The 8 controllers identified in the masterplan all rely on the global scope. For non-admin users, the scope provides protection. The fix is to ensure consistency — all controllers that manually filter should do so uniformly, especially for admin-context queries where the scope is bypassed.

**Controllers Needing Explicit school_id Filtering** (admin bypass gap):
| Controller | Method | Issue |
|-----------|--------|-------|
| `PaymentPartsController` | `@index` | No explicit filter; relies on scope |
| `ExceptionFeesController` | `@index` | No explicit filter; relies on scope |
| `StudentsController` | `@edit` | `Grade::all()` / `MyParent::all()` — inconsistent with `@create` which filters |
| `ClassRoomsController` | `@index` | `Grade::get()` — inconsistent with main query which filters |
| `ReportController` | `@index` | `InventoryItem::where('type','stock')->get()` — other methods filter |
| `ReportController` | `@book_sheet_stock` | No filter; `clothe_stock()` does filter |
| `SchoolFeeController` | `@getclasses` | `ClassRoom::where('grade_id',...)->get()` — no school filter |
| `AdminEraController` | `@index` | `User::get()` — likely intentional for super-admin panel |

---

## R2: Payment Status Values

**Decision**: Standardize on `paid` / `not_paid` across all enums and database values.

**Rationale**: `InventoryOrderStatus` already uses `not_paid`. The `Payment_Status` enum uses `unpaid` which is the outlier. Migrating `unpaid` → `not_paid` is fewer changes.

**Current State**:
- `Payment_Status` enum: `OPEN = 'unpaid'`, `CLOSE = 'paid'` — used by `FeeInvoice`, `PaymentParts`
- `InventoryOrderStatus` enum: `NOT_PAID = 'not_paid'`, `PAID = 'paid'` — used by `InventoryOrder`

**Migration Required**: Database migration to update `'unpaid'` → `'not_paid'` in `fee_invoices` and `payment_parts` tables. Update `Payment_Status` enum values.

---

## R3: Financial Data Integrity Bugs

**Decision**: Fix all 6 identified bugs as specified in FR-013 through FR-019.

### R3a: Fund_Account() Credit/Debit Reversal (FR-013)

**Bug**: In `PaymentService.php`, the clothes payment (lines 201-206) passes arguments in wrong order: amount goes to `$exchange`, receipt ID goes to `$Debit`. Books payment (lines 279-284) passes receipt ID as `$Debit`.

**Fix**: Correct argument order in both callers to match signature: `(school, exchange=null, Credit, Debit, receipt)`.

### R3b: Double CreateStudentAccount() (FR-014)

**Bug**: In `FeeInvoiceController@store`, `CreateStudentAccount()` is called once inside `FinancialService::FeeInvoice()` (debit=amount, credit=0) and again explicitly in the controller (debit=0, credit=amount). These cancel out, making students appear to owe nothing.

**Fix**: Remove the explicit `CreateStudentAccount()` call from the controller. The service method already handles it. Also fix the wrong FK being passed (school_fee_id instead of fee_invoices_id).

### R3c: scopeActive() Returns Soft-Deleted Records (FR-016)

**Bug**: `InventoryItem::scopeActive()` calls `withoutSoftDeletes()` instead of filtering by `is_active = true`. Returns all records including soft-deleted.

**Fix**: Change to `->where('is_active', true)` and remove `withoutSoftDeletes()`.

### R3d: generateAutoNumber() Race Condition (FR-019)

**Bug**: No `lockForUpdate()` — concurrent requests can generate duplicate auto-numbers.

**Fix**: Wrap the read-compute-write in `DB::transaction()` with `lockForUpdate()` on the query.

### R3e: Broken Financial Relationships (FR-017)

| Relationship | Bug | Fix |
|-------------|-----|-----|
| `SchoolFee::fee_invoices()` | Wrong FK `fee_invoice_id` | Change to `school_fee_id` |
| `SchoolFee::students()` | Non-existent column `school_fee_id` on students | Remove or redefine (students don't have school_fee_id) |
| `ExceptionFees::classroom()` | References non-existent `class_room` class | Change to `ClassRoom::class` |
| `ExceptionFees::school_fee()` | References `school_fee_id` but column is `fee_id` | Change to `fee_id` |

---

## R4: GET-Based Destroy Routes

**Decision**: Convert all 3 GET-based destructive routes to POST/DELETE with CSRF.

**Routes to Convert**:
| Route | File | Line | Action |
|-------|------|------|--------|
| `GET /backup/delete/{file_name}` | `routes/security.php` | 51 | Backup deletion |
| `GET /forceDelete/{id}` | `routes/student.php` | 43 | Permanent student deletion |
| `GET /restore/{id}` | `routes/student.php` | 40 | Student restore |

**Route Ordering**: No issues found. Wildcard routes are correctly positioned after specific routes.

---

## R5: XSS Vulnerabilities

**Decision**: Replace all 7 user-controlled `{!! !!}` outputs with `{{ }}`.

**Vulnerable Instances** (all render school settings fields — `heading_right`, `footer_right`, `footer_left`):
| File | Line | Expression |
|------|------|-----------|
| `report/components/pdf_footer.blade.php` | 6 | `{!! $school->footer_right ?? '' !!}` |
| `report/components/pdf_footer.blade.php` | 12 | `{!! $school->footer_left ?? '' !!}` |
| `report/components/pdf_header.blade.php` | 6 | `{!! $school->heading_right ?? '' !!}` |
| `report/PDF/payment_status_view.blade.php` | 13 | `{!! $school->heading_right !!}` |
| `school_fees/show.blade.php` | 27 | `{!! $school->heading_right !!}` |
| `Students/show.blade.php` | 194 | `{!! $school->heading_right !!}` |
| `layouts/invoice_view.blade.php` | 78 | `{!! $school->heading_right !!}` |

**Note**: These are school-level settings (header/footer text). If rich HTML is intentionally supported, use a purifier library instead of raw output. The spec says to use `{{ }}` (escaped), so that's the approach.

---

## R6: Static Analysis (Larastan)

**Decision**: Add `nunomaduro/larastan` as a dev dependency.

**Rationale**: Catches type errors, undefined variables, incorrect property access (like the `$stuudent` typo and `->fees->amount` collection access bug) automatically. Already recommended in the masterplan.

**Configuration**: Create `phpstan.neon` at project root with level 5 baseline, gradually increasing.

---

## R7: Backup Queue Job

**Decision**: Dispatch backup creation as a queued job instead of synchronous `Artisan::call('backup:run')`.

**Implementation**: Create `CreateBackupJob` implementing `ShouldQueue`. The controller dispatches the job and returns a redirect with a flash message. Rate limit the job dispatch endpoint.

---

## R8: God Class Decomposition

**Decision**: Split `InventoryService` (539 lines) into 3 focused services:
- `InventoryItemService` — CRUD for items
- `InventoryOrderService` — order processing
- `InventoryTransactionService` — transaction tracking

Split `FinancialService` into 3 focused services:
- `InvoiceService` — fee invoice operations
- `PaymentService` (already exists) — payment processing
- `AccountService` — student/fund account management

**Rationale**: Each service under 200 lines. Single responsibility. Easier to test.

---

## Alternatives Considered

| Decision | Alternative | Why Rejected |
|----------|------------|--------------|
| Keep existing school scope | Add new automatic global scope | Conflicts with admin bypass behavior; 22 models to migrate |
| Standardize on `not_paid` | Standardize on `unpaid` | More changes needed (`InventoryOrderStatus` already uses `not_paid`) |
| Remove AdminIpWhitelist | Activate with config | Dead code; no current use case |
| Full git history rewrite | Gitignore + rotate only | Security risk — secrets remain in history |
