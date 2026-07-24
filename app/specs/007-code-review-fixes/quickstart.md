# Quickstart Validation Guide: Code Review Fixes

**Date**: 2026-07-24
**Spec**: [spec.md](spec.md)

## Prerequisites

- PHP 8.5, Composer dependencies installed
- MySQL database with migrations run
- Application configured in `.env`

## Validation Scenarios

### SC1: FinancialService Namespace Consistency

```bash
# Verify all controllers import from the same namespace
grep -r "use.*FinancialService" app/Http/Controllers/ --include="*.php"
# Expected: ALL results show "App\Services\Finance\FinancialService"
# Zero results showing "App\Services\FinancialService" (without Finance subdirectory)
```

### SC2: Destroy Routes Use DELETE Method

```bash
# Verify no GET destroy routes remain
grep -rn "Route::get.*destroy" routes/ --include="*.php"
# Expected: zero results

# Verify all destroy routes use DELETE
grep -rn "Route::delete.*destroy" routes/ --include="*.php"
# Expected: 19+ results (14 converted + 5 existing)
```

### SC3: Blade Forms Use Method Spoofing

```bash
# Verify all destroy-related forms use @method('DELETE')
grep -rn "route.*destroy" resources/views/ --include="*.blade.php" -A 5 | grep "@method('DELETE')"
# Expected: every destroy form includes @method('DELETE')
```

### SC4: User Validation Complete

```bash
# Run existing user-related tests
php artisan test --compact --filter="User"
# Expected: all tests pass

# Run form request tests
php artisan test --compact --filter="FormRequest"
# Expected: all tests pass
```

### SC5: CSP Header Hardened

```bash
# Start the application and check response headers
php artisan serve
# In another terminal:
curl -I http://localhost:8000/ | grep -i "content-security-policy"
# Expected: CSP header does NOT contain "unsafe-eval"
# Expected: CSP header contains "connect-src 'self'"
# Expected: CSP header contains "font-src 'self' data:"
# Expected: CSP header contains "frame-src 'none'"
```

### SC6: Orphan Labs Views Removed

```bash
# Verify labs directory is removed
ls resources/views/backend/labs/
# Expected: "No such file or directory"

# Verify no references to labs.update in any view
grep -rn "labs.update" resources/views/ --include="*.blade.php"
# Expected: zero results
```

### SC7: Insurance Number Persisted

```bash
# Run the full test suite
php artisan test --compact
# Expected: all tests pass (or only pre-existing DB failures)
```

### SC8: Code Style

```bash
# Run Pint on changed files
vendor/bin/pint --dirty --format agent
# Expected: no errors, files reformatted if needed
```
