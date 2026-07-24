# Research: Code Review Fixes

**Date**: 2026-07-24
**Spec**: [spec.md](spec.md)

## Research Questions & Findings

### R1: FinancialService Canonical Location

**Decision**: `App\Services\Finance\FinancialService` (at `app/Services/Finance/FinancialService.php`)

**Rationale**: Single definition exists. 4 controllers + 1 service already use the correct namespace. 3 controllers use the wrong namespace `App\Services\FinancialService`.

**Controllers needing namespace fix** (wrong → correct):
- `FeeInvoiceController` → `App\Services\Finance\FinancialService`
- `ExchangeBondController` → `App\Services\Finance\FinancialService`
- `ExceptionFeesController` → `App\Services\Finance\FinancialService`

**Controllers already correct**:
- `StudentsController`, `SchoolFeeController`, `ReceiptPaymentController`, `PaymentPartsController`

**Alternatives considered**: Creating a class alias at `App\Services\FinancialService` — rejected because it hides the real namespace and adds unnecessary indirection.

---

### R2: CSP Middleware Location & Current State

**Decision**: Modify `app/Http/Middleware/SecurityHeadersMiddleware.php` (line 17)

**Current CSP value**:
```
default-src 'self'; script-src 'self' 'unsafe-inline' 'unsafe-eval'; style-src 'self' 'unsafe-inline'; img-src 'self' data:
```

**Target CSP value** (per spec FR-006, FR-007):
```
default-src 'self'; script-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline'; img-src 'self' data:; connect-src 'self'; font-src 'self' data:; frame-src 'none'
```

**Changes**:
- Remove `unsafe-eval` from `script-src`
- Add `connect-src 'self'`
- Add `font-src 'self' data:`
- Add `frame-src 'none'`

**Registration**: Global middleware in `app/Http/Kernel.php` (line 61) — runs on every request.

**Rationale**: Livewire and Alpine.js don't require `unsafe-eval`. `connect-src 'self'` covers Livewire AJAX. `frame-src 'none'` prevents clickjacking.

**Alternatives considered**: CSP only on `web` middleware group — rejected because security headers should apply globally.

---

### R3: GET Destroy Routes Audit

**Decision**: Convert 14 GET destroy routes to DELETE across 6 route files.

**Route files needing changes**:

| File | Routes to convert |
|------|------------------|
| `routes/employees.php` | 2 routes (jobs + users) |
| `routes/student.php` | 2 routes (parents + students) |
| `routes/inventory.php` | 1 route (inventory orders) |
| `routes/finance.php` | 5 routes (fee-invoice, receipt-payment, exception-fees, payment-parts, exchange-bonds) |
| `routes/security.php` | 1 route (permissions/roles) |
| `routes/academic.php` | 4 routes (grades, academic-year, promotion, classes) |

**Already correct** (5 routes): `ProfileController`, `InventoryItemController`, `SchoolFeeController`, `ClassRoomsController`, `StudentApiController`

**No `Route::resource()` calls exist** — all routes are hand-defined.

**Blade view changes needed**: Each converted route requires corresponding Blade form updates to use `@method('DELETE')` with `method="POST"` form tags.

**Rationale**: GET-based destroy routes bypass CSRF protection entirely. This is a security gap that affects data integrity.

**Alternatives considered**: Adding CSRF manually to GET routes — rejected because GET requests should never have side effects (HTTP spec violation).

---

### R4: User Model & FormRequest Gaps

**Decision**: Add 8 missing fields to `UserStoreRequest` and `UserUpdateRequest` validation, add `insurance_number` to User `$fillable`.

**User `$fillable` missing**: `insurance_number` (not present in the array)

**`UserStoreRequest` missing fields** (used by `assignFields()` but not validated):
- `grade_year` — `nullable|string|max:255`
- `lesson_count` — `nullable|integer`
- `sepicality` — `nullable|string|max:255`
- `national_id_expire_date` — `nullable|date`
- `contract_start_date` — `nullable|date`
- `notes` — `nullable|string`
- `ministry_code` — `nullable|string|max:255`
- `worker_type` — `required|integer` (mapped to `type` column)

**`UserUpdateRequest` missing fields**:
- `birth_date`, `date_of_hiring`, `religion`, `gender`, `isAdmin`, `login_allow`
- `insurance`, `insurance_number`, `insurance_date`
- `grade_year`, `lesson_count`, `sepicality`, `national_id_expire_date`, `contract_start_date`, `notes`, `ministry_code`

**`insurance_number` validation** (per clarification): `required|numeric|digits_between:10,14`

**Rationale**: Unvalidated fields allow arbitrary data injection. The `assignFields()` method reads directly from `$request` without validation.

**Alternatives considered**: Removing fields from `assignFields()` — rejected because these fields are legitimately used by the application.

---

### R5: Orphan Labs Views

**Decision**: Remove the entire `resources/views/backend/labs/` directory (4 files).

**Findings**:
- `edit.blade.php` references non-existent `labs.update` route (no LabsController exists)
- No LabsController or LabController exists anywhere in the codebase
- No `labs.*` routes exist in any route file
- All 4 views (`index`, `create`, `edit`, `show`) are dead code

**Rationale**: No backing controller or routes exist — the entire module is dead code.

**Alternatives considered**: Only removing `edit.blade.php` — rejected because all 4 views are orphaned and removing the directory is cleaner.

---

### R6: Blade View Pattern for DELETE Routes

**Target pattern** (already used by 5 existing DELETE routes):
```blade
<form action="{{ route('resource.destroy', $id) }}" method="POST" class="inline">
    @csrf
    @method('DELETE')
    <button type="submit" class="...">Delete</button>
</form>
```

**Current broken pattern** (GET routes):
```blade
<a href="{{ route('resource.destroy', $id) }}" class="..." onclick="return confirm('...')">Delete</a>
```

**Migration strategy**: Search all Blade views for `route('*.destroy'` references and convert `<a href>` links to `<form>` submissions with `@method('DELETE')`.
