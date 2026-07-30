# Quickstart: Codebase Remediation Validation

**Created**: 2026-07-30

## Prerequisites

```bash
composer install
npm install && npm run build  # for Tailwind production build testing
cp .env.example .env          # configure database
php artisan key:generate
```

## Per-Phase Validation

### Phase 1: P0 — Broken Functionality

```bash
# Verify migration runs clean
php artisan migrate --pretend | grep fix_payed_to_paid
# Should show: renameColumn payed → paid (NOT Schema::rename)

# Verify local routes guarded
curl -s -o /dev/null -w "%{http_code}" http://localhost/mif
# Expected: 403 or 404
```

### Phase 2: P1 — Security Hardening

```bash
# Verify LIKE escaping
grep -r "str_replace.*%" app/Http/Controllers/
# Should show escaping in InventoryItemController, InventoryOrderController, ActivityLogController

# Verify no env() outside config
grep -rn "env(" app/ --include="*.php" | grep -v "config/"
# Expected: zero results in app/ (all env() calls in config/)

# Verify Telescope disabled by default
grep "TELESCOPE_ENABLED" config/telescope.php
# Should show: env('TELESCOPE_ENABLED', false)
```

### Phase 3: P1 — Performance & N+1

```bash
php artisan test --compact --filter=InventoryOrderTest
# Verify query count assertions pass
```

### Phase 4: P1 — Data Integrity

```bash
# Build Tailwind and verify dynamic classes
npm run build
grep "text-success\|text-warning" public/build/assets/*.css
# Should contain these classes
```

### Phase 5: P1 — Testing

```bash
php artisan test --compact --filter=InventoryGardTest
php artisan test --compact --filter=InventoryTransactionServiceTest
php artisan test --compact --filter=InventoryAuthorizationTest
php artisan test --compact --filter=InventorySchoolScopeTest
# All should pass
```

### Phase 6-9: P2/P3

```bash
vendor/bin/pint --dirty --format agent
php artisan test --compact
```

## Full Verification

```bash
# 1. All migrations
php artisan migrate:fresh --seed
php artisan migrate --pretend  # verify no errors

# 2. All tests
php artisan test --compact

# 3. Code style
vendor/bin/pint --dirty --format agent

# 4. Route conventions
php artisan route:list --path=inventory | grep -E "DELETE|PUT"
# Verify no GET-based destroy or POST-based update routes

# 5. Config maturity
grep -rn "env(" config/ --include="*.php"
# Verify all config defaults set
```

## Expected Test Results

| Test Suite | Expected |
|-----------|----------|
| `--filter=InventoryItemTest` | ✅ All pass |
| `--filter=InventoryOrderTest` | ✅ All pass |
| `--filter=InventoryGardTest` | ✅ All pass |
| `--filter=InventoryTransactionService` | ✅ All pass |
| `--filter=InventoryAuthorization` | ✅ All pass |
| `--filter=InventorySchoolScope` | ✅ All pass |
| `--filter=RouteTest` | ✅ All pass |
| `php artisan test --compact` | ✅ No regressions |
