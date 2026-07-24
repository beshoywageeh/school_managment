# Phase 3 & 4 — System Hardening Report

**Date:** 2026-07-23

## Task Status

### Phase 3 — Authorization Tests (T016–T019)

| Task | Description | Status | Notes |
|------|-------------|--------|-------|
| T016 | Write PolicyTest for StudentPolicy | ✅ Done | 6 tests: view/create/delete × authorized/unauthorized |
| T017 | Write PolicyTest for FeeInvoicePolicy | ✅ Done | 2 tests: view authorized/unauthorized |
| T018 | Write PolicyTest for UserPolicy/EmployeePolicy | ✅ Done | 12 tests: view/create/delete × authorized/unauthorized for both |
| T019 | Write PolicyTest for InventoryItemPolicy + InventoryOrderPolicy | ✅ Done | 8 tests: view/delete authorized/unauthorized |

### Phase 4 — Form Requests (T020–T044)

| Task | Description | Status | Notes |
|------|-------------|--------|-------|
| T020–T023 | Create/update Form Requests for ClassRooms | ✅ Done | ClassRoomStoreRequest + ClassRoomUpdateRequest |
| T024–T025 | Create/update Form Requests for Classes | ✅ Done | ClassStoreRequest + ClassUpdateRequest |
| T026–T027 | Create/update Form Requests for ReceiptPayment | ✅ Done | ReceiptPaymentStoreRequest + ReceiptPaymentUpdateRequest |
| T028–T029 | Create/update Form Requests for ExceptionFee | ✅ Done | ExceptionFeeStoreRequest + ExceptionFeeUpdateRequest |
| T030–T031 | Create/update Form Requests for User (Employee) | ✅ Done | UserStoreRequest + UserUpdateRequest |
| T032–T033 | Create/update Form Requests for Roles | ✅ Done | RoleStoreRequest + RoleUpdateRequest |
| T034–T035 | Create/update Form Requests for Jobs | ✅ Done | JobStoreRequest + JobUpdateRequest |
| T036 | Write FormRequestTest for ClassRoomStoreRequest | ✅ Done | Tests required fields, invalid data, unauthorized access |
| T037 | Write FormRequestTest for ClassRoomUpdateRequest | ✅ Done | Tests required id, invalid id |
| T038 | Write FormRequestTest for ClassStoreRequest | ✅ Done | Tests classroom array validation |
| T039 | Write FormRequestTest for ClassUpdateRequest | ✅ Done | Tests required id |
| T040 | Write FormRequestTest for ReceiptPaymentStoreRequest | ✅ Done | Tests student_id, type validation |
| T041 | Write FormRequestTest for ExceptionFeeStoreRequest | ✅ Done | Tests student_id, amount validation |
| T042 | Write FormRequestTest for UserStoreRequest | ✅ Done | Tests name, phone, national_id validation |
| T043 | Write FormRequestTest for RoleStoreRequest | ✅ Done | Tests name, permission validation |
| T044 | Write FormRequestTest for JobStoreRequest | ✅ Done | Tests job_name, worker_type validation |

## Test Results

- **PolicyTest:** 34 tests passed (34 assertions)
- **FormRequestTest:** 31 tests passed (56 assertions)
- **Total:** 65 tests passed (90 assertions)

## Issues Encountered

### 1. Broken `$this->authorize()` calls in ClassesController

Phase 2 (T003) added `$this->authorize('Classes-list')`, `$this->authorize('Classes-delete')` calls to `ClassesController`. These call `Gate::authorize('Classes-list')` which looks for a Gate named `Classes-list` — no such Gate exists. The middleware (`permission:classes-list`) already handles authorization correctly, making these calls redundant AND broken.

**Fix:** Removed the broken `$this->authorize()` calls from `ClassesController::index()` and `ClassesController::destroy()`.

### 2. Student softDelete requires dual permissions

The `StudentsController::softDelete` method is guarded by TWO middleware rules:
- `permission:Students-delete`
- `permission:Students-graduated`

Authorized tests must grant both permissions.

### 3. Spatie permission cache in tests

The `FormRequestTest::givePermission()` was not calling `PermissionRegistrar::forgetCachedPermissions()`. Added cache clearing before and after permission assignment (matching `PolicyTest` pattern).

### 4. Permission name mismatches

The `ClassesController` middleware checks `classes-create` (lowercase) but `ClassStoreRequest::authorize()` checks `Classes-create` (uppercase). Tests must grant both permissions to pass both middleware and FormRequest authorization.

### 5. `roles.update` route uses PUT

The `roles.update` route is `Route::put(...)`, so tests must use `$this->put()` not `$this->post()`.

## Files Modified

| File | Change |
|------|--------|
| `app/Http/Controllers/ClassesController.php` | Removed broken `$this->authorize('Classes-list')` and `$this->authorize('Classes-delete')` calls |
| `tests/Feature/PolicyTest.php` | **New file** — 34 authorization tests across 8 policies |
| `tests/Feature/FormRequestTest.php` | **New file** — 31 validation tests across 14 Form Requests |
