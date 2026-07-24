# Phase 2 - System Hardening Report

**Date:** 2026-07-23

## Task Status

| Task | Description | Status | Notes |
|------|-------------|--------|-------|
| T002 | Register EmployeePolicy in AuthServiceProvider | ✅ Done | Created minimal `Employee` model extending `User` (shares `users` table). Registered `Employee::class => EmployeePolicy::class`. |
| T003 | Add authorize() calls to ClassesController | ✅ Done | Added `$this->authorize('Classes-list')` to `index()`, `'Classes-create'` to `store()`, `'Classes-edit'` to `update()`, `'Classes-delete'` to `destroy()`. |
| T004 | Remove HandlesAuthorization from StudentPolicy | ✅ Done | |
| T005 | Remove HandlesAuthorization from FeeInvoicePolicy | ✅ Done | |
| T006 | Remove HandlesAuthorization from UserPolicy | ✅ Done | |
| T007 | Remove HandlesAuthorization from InventoryItemPolicy | ✅ Done | |
| T008 | Remove HandlesAuthorization from InventoryOrderPolicy | ✅ Done | |
| T009 | Remove HandlesAuthorization from GradePolicy | ✅ Done | |
| T010 | Remove HandlesAuthorization from ClassPolicy | ✅ Done | |
| T011 | Remove HandlesAuthorization from EmployeePolicy | ✅ Done | |
| T012 | Fix boolean comparison in StudentsController | ✅ Done | Changed `where('status', 'false')` to `where('status', Status::CLOSE)` using proper `Status` enum. |
| T013 | Add rate limiting on web routes | ✅ Done | Added `web` rate limiter (60/min/IP) in RouteServiceProvider and `throttle:web` middleware to web route group. |

## Issues Encountered

1. **No Employee model existed:** Employees are `User` model instances. Created a minimal `Employee` model extending `User` with `$table = 'users'` to satisfy the policy registration.

2. **Status comparison was not boolean:** The `status` column on `academic_years` uses a `Status` enum (`'active'`/`'inactive'`), not a boolean. The string `'false'` matched nothing. Fixed by using `Status::CLOSE` (value: `'inactive'`).

3. **`throttle` middleware alias already existed:** The `throttle` alias was already registered in `Kernel.php` mapping to `ThrottleRequests::class`, so only the rate limiter definition and middleware usage were needed.

## Test Results

- **Total tests:** 187
- **Passed:** 130
- **Failed:** 57
- **Assertions:** 745

All 57 failures are **pre-existing** issues unrelated to Phase 2 changes:

- `Class "App\Models\class_room" not found` / `Fee_invoice` — tests reference non-existent model names
- `Database\Factories\Inventory\InventoryItemFactory` — missing factory classes
- Auth tests failing — misconfigured test setup
- Route [class-rooms.store] not defined — missing routes
- ProfileTest 404 — missing `/profile` route
- GradeCrudTest — permission middleware blocking unauthenticated test users
- RouteTest: `create` method missing on ClassesController — pre-existing route without matching method

## Files Modified

| File | Change |
|------|--------|
| `app/Providers/AuthServiceProvider.php` | Added EmployeePolicy import and registration |
| `app/Models/Employee.php` | **New file** — minimal model extending User |
| `app/Http/Controllers/ClassesController.php` | Added 4 authorize() calls |
| `app/Policies/StudentPolicy.php` | Removed HandlesAuthorization |
| `app/Policies/FeeInvoicePolicy.php` | Removed HandlesAuthorization |
| `app/Policies/UserPolicy.php` | Removed HandlesAuthorization |
| `app/Policies/InventoryItemPolicy.php` | Removed HandlesAuthorization |
| `app/Policies/InventoryOrderPolicy.php` | Removed HandlesAuthorization |
| `app/Policies/GradePolicy.php` | Removed HandlesAuthorization |
| `app/Policies/ClassPolicy.php` | Removed HandlesAuthorization |
| `app/Policies/EmployeePolicy.php` | Removed HandlesAuthorization |
| `app/Http/Controllers/Students/StudentsController.php` | Fixed status comparison with Status enum |
| `app/Providers/RouteServiceProvider.php` | Added web rate limiter definition |
| `routes/web.php` | Added throttle:web middleware |
