# Data Model: Codebase Remediation

**Created**: 2026-07-30

## Existing Entities (No New Entities Required)

All entities already exist from the previous inventory rebuild (features 001-008). This feature only modifies existing tables/columns and adds indexes.

### InventoryOrderItems

| Column | Type | Current State | Required Fix |
|--------|------|---------------|--------------|
| `itemable_type` | string | No index | Add `->index()` |
| `itemable_id` | bigint | No index | Add `->index()` |
| Composite (`itemable_type`, `itemable_id`) | — | No composite index | Add `->index(['itemable_type', 'itemable_id'])` |

### InventoryTransactions

| Column | Type | Current State | Required Fix |
|--------|------|---------------|--------------|
| `reference_type` | string | No index | Add `->index()` |
| `reference_id` | bigint | No index | Add `->index()` |
| Composite (`reference_type`, `reference_id`) | — | No composite index | Add `->index(['reference_type', 'reference_id'])` |

### InventoryOrders (Enum Fix)

| Column | Type | Current Values | Fix |
|--------|------|----------------|-----|
| `type` | ENUM | `inventory`, `sales`, `purchases` | Add `gard` via `ALTER TABLE MODIFY` |
| `status` | ENUM | `paid`, `not_paid` | No change needed |

### Users (Fillable Fix)

| Column | Current Fillable | Fix |
|--------|-----------------|-----|
| `religion` | `'reiligon'` (typo) | `'religion'` |

### Payed → Paid Migration

| Table | Current Column | Target Column | Migration Approach |
|-------|---------------|---------------|-------------------|
| `inventory_orders` | `payed` | `paid` | `renameColumn('payed', 'paid')` |

## New Database Migrations

None required — all fixes use existing migration files.

## Permission Data Migration

New migration to rename Spatie permission records in `permissions` table:
- `stocks-*` → `inventory.items.*`
- `clothes-*` → `inventory.orders.*`
- `books_sheets-*` → `inventory.items.*` or `inventory.orders.*`

## Configuration Schema

New `config/school.php`:

```php
return [
    'currency' => env('SCHOOL_CURRENCY', 'EGP'),
    'per_page' => (int) env('SCHOOL_PER_PAGE', 10),
];
```
