# Quickstart: Deferred Hardening — Track 3

Setup is standard Laravel 10; here are the commands relevant to *this* feature's verification. The Laravel root is `/data/projects/laravel_projects/school_managment/app`.

## 1. Environment

```bash
composer install
npm install

# If a Vite manifest error appears after view changes:
npm run build    # or composer run dev
```

## 2. Database & migrations

All schema changes are **additive** (per constitution workflow #5). Run:

```bash
php artisan migrate
```

New migrations land under `database/migrations/2026_08_28_*_track3_*.php` (parents `father_name` index, transaction `reference_type` backfill, additive naming fixes). No legacy tables are dropped in this wave.

## 3. Verification commands

### Run the new tests (per areas)

```bash
# Inventory (stock, type, zero updates, reference)
php artisan test --compact tests/Feature/Inventory

# Multi-tenant (parent count, settings IDOR, role cleanup, HomeController scope)
php artisan test --compact tests/Feature/MultiTenancy

# Imports (parents mapping, upload validation, outcome reports, CSV-injection export)
php artisan test --compact tests/Feature/Imports

# Performance (pagination, cache invalidation on write)
php artisan test --compact tests/Feature/Performance
```

Or run the full suite before marking complete:

```bash
php artisan test --compact
```

### Targeted smoke checks (Laravel Boost `tinker`)

```bash
# Inventory reference resolves after backfill
# App\Models\Inventory\InventoryTransaction::first()->reference  # should return an InventoryOrder/Item
```

### Routes

```bash
php artisan route:list | grep -E "inventory/orders|settings|admin-era"
```

Expected: inventory order `pay` is POST (state-changing); `/settings/{id}` requires the settings permission.

### Code style (before finalizing)

```bash
vendor/bin/pint --format agent
```

## 4. Manual acceptance highlights

- **Inventory**: create a `purchases` order → persisted as `purchases` (not `sales`); concurrent stockOut cannot drive stock negative; set item price/quantity to `0` → persisted; order transaction history shows rows (reference resolved).
- **Multi-tenant**: non-admin dashboard parent count is correct (0, not an error); a user without the settings permission cannot edit another school's settings; deleting a role leaves no orphaned assignments.
- **Imports**: parents import saves all intended fields; a missing/invalid Excel upload yields a clear message (no crash); import success message reflects real counts; any export renders `=cmd` cells as inert text.
- **Performance**: core lists are paginated (≤50/page) and respond ≤500ms p95; fee/summary figures are refreshed on write (never full-day stale).

## 5. Scope notes

- No new composer/npm packages are required.
- Tracks 1–2 (security + September financial) are owned by `012-system-hardening-spec`; this wave is Track 3 only.
- Money stays DECIMAL; this wave does not re-plan the cents conversion (deferred, owned by 012).
- All changes are additive/backward-compatible; the inventory rebuild is already complete on disk and is hardened here, not rebuilt.
