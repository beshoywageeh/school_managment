# Data Model: Masterplan Security & Quality Overhaul

**Date**: 2026-07-27

## Overview

This overhaul modifies existing entities (status value migration, index additions, relationship fixes) rather than creating new entities. All changes are additive or corrective.

## Entity Changes

### Payment_Status Enum (Modify)

**File**: `app/Enums/Payment_Status.php`

| Current | New | Notes |
|---------|-----|-------|
| `OPEN = 'unpaid'` | `OPEN = 'not_paid'` | Align with InventoryOrderStatus |
| `CLOSE = 'paid'` | `CLOSE = 'paid'` | No change |

**Migration**: Update `fee_invoices.status` and `payment_parts.status` columns from `'unpaid'` to `'not_paid'`.

### InventoryOrderStatus Enum (No Change)

**File**: `app/Enums/InventoryOrderStatus.php`

Already uses `paid` / `not_paid`. No migration needed.

### SchoolFee Model — Fix Relationships

**File**: `app/Models/SchoolFee.php`

| Relationship | Current FK | Correct FK | Type |
|-------------|-----------|-----------|------|
| `fee_invoices()` | `fee_invoice_id` (wrong) | `school_fee_id` | HasMany |
| `students()` | `school_fee_id` (non-existent) | Remove or redefine | — |

### ExceptionFees Model — Fix Relationships

**File**: `app/Models/ExceptionFees.php`

| Relationship | Current | Correct | Type |
|-------------|---------|---------|------|
| `classroom()` | `App\Models\class_room` (non-existent) | `ClassRoom::class` | BelongsTo |
| `school_fee()` | `school_fee_id` (wrong) | `fee_id` | BelongsTo |

### InventoryItem Model — Fix scopeActive()

**File**: `app/Models/Inventory/InventoryItem.php`

| Current | New |
|---------|-----|
| `withoutSoftDeletes()` | `->where('is_active', true)` |

### Database Indexes to Add

| Table | Column(s) | Index Type | Reason |
|-------|-----------|-----------|--------|
| `students` | `school_id` | Single | Multi-tenancy filtering |
| `fee_invoices` | `school_id` | Single | Multi-tenancy filtering |
| `recipt_payments` | `school_id` | Single | Multi-tenancy filtering |
| `inventory_orders` | `school_id`, `status` | Composite | Filtered queries |
| `inventory_transactions` | `school_id`, `item_id` | Composite | Transaction lookups |
| `activity_logs` | `school_id`, `created_at` | Composite | Filtered audit queries |

### Status Value Migration

**Migration**: `update_payment_status_values`

```sql
-- Update fee_invoices
UPDATE fee_invoices SET status = 'not_paid' WHERE status = 'unpaid';

-- Update payment_parts
UPDATE payment_parts SET status = 'not_paid' WHERE status = 'unpaid';
```

## Unchanged Entities

The following entities are referenced but not modified by this overhaul:
- `User` — mass-assignable fields updated (isAdmin, school_id removed from $fillable)
- `Student` — relationship access fixed (eager loading)
- `ClassRoom` — no schema changes
- `Grade` — no schema changes
- `MyParent` — no schema changes
- `AcademicYear` — no schema changes
- `FundAccount` — credit/debit logic fixed in service layer, not schema
- `InventoryItem` — scopeActive fixed, no schema changes
- `InventoryOrder` — no schema changes
- `InventoryTransaction` — no schema changes
- `Schedule` — transaction wrapping, no schema changes
- `ActivityLog` — wildcard escaping, no schema changes
