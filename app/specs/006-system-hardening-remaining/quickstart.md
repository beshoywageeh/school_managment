# Quickstart Validation Guide: System Hardening — Remaining Tasks

> Generated: 2026-07-23
> Spec: `specs/006-system-hardening-remaining/spec.md`

---

## Prerequisites

- PHP 8.2+ with required extensions
- Composer dependencies installed (`composer install`)
- NPM dependencies installed (`npm install && npm run build`)
- SQLite in-memory database configured in `phpunit.xml`
- Application key generated (`php artisan key:generate`)

## Validation Scenarios

### V1: Authorization Enforcement

**What to verify**: All controllers check authorization before executing actions.

```bash
# Run authorization tests
php artisan test --compact --filter="PolicyTest"

# Verify EmployeePolicy is registered
php artisan tinker --execute="dd(app('Illuminate\Auth\Access\Gate')->getPolicyFor(\App\Models\Employee::class))"
```

**Expected**: Policy class returned, not `null`.

### V2: Form Request Validation

**What to verify**: All 7 controllers use dedicated Form Requests with translatable errors.

```bash
# Run form request tests
php artisan test --compact --filter="FormRequest"

# Verify no raw Request usage in targeted controllers
grep -r "Request \$request" app/Http/Controllers/{ClassRooms,Classes,ReceiptPayment,ExceptionFees,User,Role,Job}Controller.php
```

**Expected**: Zero matches (all use typed Form Request classes).

### V3: Route Conventions

**What to verify**: RESTful methods and kebab-case URLs.

```bash
# Check for snake_case routes (should be zero)
php artisan route:list --compact | grep "_"

# Check route list for PUT/DELETE methods on update/destroy
php artisan route:list --compact | grep -E "(PUT|DELETE)"
```

**Expected**: No snake_case URLs. PUT and DELETE methods present for update/destroy operations.

### V4: Code Quality

**What to verify**: PascalCase naming, configurable values.

```bash
# Verify controller naming
ls app/Http/Controllers/ | grep -E "^[a-z]"

# Verify config values exist
php artisan tinker --execute="dd(config('school.currency'))"

# Verify no hardcoded EGP in controllers
grep -r "'EGP'" app/Http/Controllers/
```

**Expected**: No lowercase controller names. Config returns 'EGP'. No hardcoded currency strings.

### V5: Test Suite Pass

**What to verify**: All tests pass.

```bash
php artisan test --compact
```

**Expected**: Exit code 0, all tests green.

### V6: Translations Complete

**What to verify**: No missing translation keys.

```bash
# Verify key files exist
ls lang/en/ lang/ar/

# Check for missing keys (manual spot-check)
php artisan tinker --execute="trans('general.showing')"
```

**Expected**: Returns translated string, not key name.

### V7: Performance Targets

**What to verify**: Page load <3s, DataTable <5s, bundle <200KB.

```bash
# Check bundle size
ls -la public/build/assets/*.js | awk '{print $5}' | sort -n | tail -1

# Manual timing: open browser DevTools, load dashboard, check Network tab
```

**Expected**: Largest JS bundle under 200KB gzipped. Dashboard loads under 3 seconds.
