# Data Model: System Repair & Hardening

> **Feature**: specs/005-system-repair-hardening
> **Date**: 2026-07-12

## Overview

This feature is primarily a code quality and security initiative. Data model changes are minimal — limited to database indexes for performance and a column rename for spelling correction. No new tables or entities are introduced.

## Schema Changes

### Migration 1: Add Indexes

**File**: `database/migrations/2026_07_03_000001_add_indexes_to_frequent_queries.php`

| Table | Column | Index Type | Rationale |
|-------|--------|-----------|-----------|
| `student_accounts` | `type` | Index | Filtered in student account lookups |
| `activity_logs` | `action` | Index | Filtered in activity log listing/filtering |
| `inventory_items` | `category` | Index | Filtered in inventory item listing |

### Migration 2: Rename Columns

**File**: `database/migrations/2026_07_03_000002_fix_payed_to_paid.php`

| Table | Old Column | New Column | Notes |
|-------|-----------|-----------|-------|
| (if exists) | `payed` | `paid` | Spelling fix — verified zero occurrences in code |
| (if exists) | `notpayed` | `not_paid` | Spelling fix — verified zero occurrences in code |

**Note**: The spelling verification (T064) confirmed zero occurrences of `payed`/`notpayed` in PHP/Blade files. The migration is a safety net for any database columns that may still use the old spelling.

## New Files Created (Code Architecture)

### Form Requests (6 new files)

| File | Class | Validates | Controller |
|------|-------|-----------|------------|
| `StorePaymentRequest.php` | `StorePaymentRequest` | `student_id` (required|exists), `amount` (required|numeric|min:0.01), `type` (required|in:cash,bank), `date` (required|date), `fund_account_id` (required|exists:fund_accounts,id) | `PaymentPartsController` |
| `UpdatePaymentRequest.php` | `UpdatePaymentRequest` | `student_id` (required|exists), `amount` (required|numeric|min:0.01), `date` (required|date) | `PaymentPartsController` |
| `StoreExchangeBondRequest.php` | `StoreExchangeBondRequest` | `student_id` (required|exists), `amount` (required|numeric|min:0.01), `type` (required|in:receive,pay), `date` (required|date) | `ExchangeBondController` |
| `UpdateExchangeBondRequest.php` | `UpdateExchangeBondRequest` | `student_id` (required|exists), `amount` (required|numeric|min:0.01), `type` (required|in:receive,pay), `date` (required|date) | `ExchangeBondController` |
| `StoreFeeInvoiceRequest.php` | `StoreFeeInvoiceRequest` | `list_fees` (required|array|min:1), `list_fees.*.student_id` (required|exists:students,id), `list_fees.*.fee` (required|numeric|min:0) | `FeeInvoiceController` |
| `UpdateFeeInvoiceRequest.php` | `UpdateFeeInvoiceRequest` | Same as StoreFeeInvoiceRequest | `FeeInvoiceController` |

### Service Classes (5 new files)

| File | Class | Extracted From | Methods |
|------|-------|---------------|---------|
| `DashboardService.php` | `DashboardService` | `HomeController` | `getUserRoleCounts()`, `getFinancialData()`, `generateChartData()`, `getMonthlyRevenueTrend()` |
| `PaymentService.php` | `PaymentService` | `ReceiptPaymentController` | `handleFeeInvoice()`, `handlePartialPayment()`, `handleFullPayment()`, `handleExchangeBond()` |
| `StudentQueryService.php` | `StudentQueryService` | `StudentsController::index()` | `getFilteredQuery()`, `applyFilters()`, `applySorts()` |
| `InvoiceQueryService.php` | `InvoiceQueryService` | `FeeInvoiceController::index()` | `getFilteredQuery()`, `applyDynamicFilters()` |
| `UserService.php` | `UserService` | `UserController::store()`, `::update()` | `assignFields()`, `prepareUserData()` |

### Policy Classes (8 new files)

| File | Class | Model | Permissions |
|------|-------|-------|-------------|
| `StudentPolicy.php` | `StudentPolicy` | `Student` | `view` → `add_student`, `create` → `add_student`, `update` → `edit_student`, `delete` → `delete_student` |
| `FeeInvoicePolicy.php` | `FeeInvoicePolicy` | `FeeInvoice` | `view` → `add_fee_invoice`, `create` → `add_fee_invoice`, `update` → `edit_fee_invoice`, `delete` → `delete_fee_invoice` |
| `UserPolicy.php` | `UserPolicy` | `User` | `view` → `add_user`, `create` → `add_user`, `update` → `edit_user`, `delete` → `delete_user` |
| `InventoryItemPolicy.php` | `InventoryItemPolicy` | `InventoryItem` | `view` → `add_inventory`, `create` → `add_inventory`, `update` → `edit_inventory`, `delete` → `delete_inventory` |
| `InventoryOrderPolicy.php` | `InventoryOrderPolicy` | `InventoryOrder` | `view` → `add_inventory_order`, `create` → `add_inventory_order`, `update` → `edit_inventory_order`, `delete` → `delete_inventory_order` |
| `GradePolicy.php` | `GradePolicy` | `Grade` | `view` → `add_grade`, `create` → `add_grade`, `update` → `edit_grade`, `delete` → `delete_grade` |
| `ClassPolicy.php` | `ClassPolicy` | `ClassRoom` | `view` → `add_class`, `create` → `add_class`, `update` → `edit_class`, `delete` → `delete_class` |
| `EmployeePolicy.php` | `EmployeePolicy` | `Employee` | `view` → `view_employee`, `create` → `add_employee`, `update` → `edit_employee`, `delete` → `delete_employee` |

### Middleware (1 new file)

| File | Class | Registers In | Headers Added |
|------|-------|-------------|---------------|
| `SecurityHeadersMiddleware.php` | `SecurityHeadersMiddleware` | `Kernel.php` global middleware | CSP, HSTS, X-Frame-Options, X-Content-Type-Options |

## State Transitions

### Inventory Order Status (existing — no schema change)

```
pending → confirmed → completed
   ↓          ↓
cancelled   returned
```

- `cancelled` and `returned` are terminal states
- Transitions are managed by `InventoryService`, not by this feature

## Files Modified (not created)

| File | Change | Phase |
|------|--------|-------|
| `app/Http/Controllers/HomeController.php` | Delegate to DashboardService | 4 |
| `app/Http/Controllers/ReceiptPaymentController.php` | Delegate to PaymentService | 4 |
| `app/Http/Controllers/Students/StudentsController.php` | Delegate to StudentQueryService | 4 |
| `app/Http/Controllers/FeeInvoiceController.php` | Delegate to InvoiceQueryService, bind Form Requests | 3, 4 |
| `app/Http/Controllers/UserController.php` | Delegate to UserService | 4 |
| `app/Http/Controllers/PaymentPartsController.php` | Bind Form Requests | 3 |
| `app/Http/Controllers/ExchangeBondController.php` | Bind Form Requests | 3 |
| `app/Http/Controllers/Controller.php` | Add `executeInTransaction()` | 4 |
| `app/Providers/AuthServiceProvider.php` | Register 8 policies | 5 |
| `app/Http/Kernel.php` | Register SecurityHeadersMiddleware | 2 |
| `routes/inventory.php` | Reorder catch-all route | 6 |
| `routes/api.php` | Add route names | 6 |
| `routes/*.php` | Convert methods and URL segments | 6 |
| `lang/en/schedules.php` | Add 9 translation keys | 1 |
| `lang/ar/schedules.php` | Add 9 translation keys | 1 |
| `resources/views/livewire/Schedules/Schedules.blade.php` | Add wire:loading, confirmation dialog | 1 |
| 20 Form Request classes | Fix `authorize()` to check permissions | 5 |
| 12+ controllers | Replace DB::beginTransaction with executeInTransaction | 4 |
| Multiple Blade forms | Add @method('DELETE') / @method('PUT') | 6 |

## Files Deleted

| File | Reason | Phase |
|------|--------|-------|
| `app/Http/Traits/EagerLoadingTrait.php` | Dead code — 0 imports | 8 |
| `app/Providers/ViewServiceProvider.php` | Dead code — empty boot() | 8 |
| 8 unused pagination templates | Only tailwind.blade.php needed | 8 |

## Files NOT Deleted (correction from original plan)

| File | Reason |
|------|--------|
| `app/Services/Reports/PDFExportService.php` | Used by ReportController — NOT dead code |
| `app/Services/Reports/ReportService.php` | Used by ReportController — NOT dead code |
