# Quickstart Validation: System Repair & Hardening

> **Feature**: specs/005-system-repair-hardening
> **Date**: 2026-07-12

## Prerequisites

- PHP 8.5+, Composer, Node.js
- SQLite in-memory configured in `phpunit.xml`
- Application bootstrapped (`composer install`, `npm install`)

## Validation Scenarios

### V1: Schedule Translation Completeness

```bash
# Verify all expected keys exist in both lang files
grep -c "=>" lang/en/schedules.php  # Expected: ~51
grep -c "=>" lang/ar/schedules.php  # Expected: ~51

# Verify new keys are present
grep "print_pdf" lang/en/schedules.php
grep "weekly_schedule" lang/en/schedules.php
grep "auto_generate_confirm" lang/en/schedules.php
```

**Expected**: Both files have matching key counts. All 9 new keys present in both files.

### V2: Security Headers

```bash
# Verify middleware exists
test -f app/Http/Middleware/SecurityHeadersMiddleware.php && echo "EXISTS"

# Verify registered in Kernel
grep "SecurityHeadersMiddleware" app/Http/Kernel.php

# Test via route (after app boot)
curl -I http://localhost:8000/ | grep -i "content-security-policy"
curl -I http://localhost:8000/ | grep -i "x-frame-options"
curl -I http://localhost:8000/ | grep -i "strict-transport-security"
```

**Expected**: Middleware file exists, registered in Kernel, headers present in HTTP responses.

### V3: Form Request Binding

```bash
# Verify new Form Request files exist
test -f app/Http/Requests/StorePaymentRequest.php && echo "StorePaymentRequest EXISTS"
test -f app/Http/Requests/UpdatePaymentRequest.php && echo "UpdatePaymentRequest EXISTS"
test -f app/Http/Requests/StoreExchangeBondRequest.php && echo "StoreExchangeBondRequest EXISTS"
test -f app/Http/Requests/UpdateExchangeBondRequest.php && echo "UpdateExchangeBondRequest EXISTS"
test -f app/Http/Requests/StoreFeeInvoiceRequest.php && echo "StoreFeeInvoiceRequest EXISTS"
test -f app/Http/Requests/UpdateFeeInvoiceRequest.php && echo "UpdateFeeInvoiceRequest EXISTS"

# Verify controllers type-hint Form Requests
grep "StorePaymentRequest" app/Http/Controllers/PaymentPartsController.php
grep "StoreExchangeBondRequest" app/Http/Controllers/ExchangeBondController.php
grep "StoreFeeInvoiceRequest" app/Http/Controllers/FeeInvoiceController.php
```

**Expected**: All 6 files exist. Controllers import and type-hint the new Form Requests.

### V4: Service Layer

```bash
# Verify new services exist
for svc in DashboardService PaymentService StudentQueryService InvoiceQueryService UserService; do
  test -f "app/Services/${svc}.php" && echo "${svc} EXISTS"
done

# Verify controllers delegate to services
grep "DashboardService" app/Http/Controllers/HomeController.php
grep "PaymentService" app/Http/Controllers/ReceiptPaymentController.php
grep "StudentQueryService" app/Http/Controllers/Students/StudentsController.php
grep "InvoiceQueryService" app/Http/Controllers/FeeInvoiceController.php
grep "UserService" app/Http/Controllers/UserController.php

# Verify executeInTransaction exists
grep "executeInTransaction" app/Http/Controllers/Controller.php

# Verify controller line counts
wc -l app/Http/Controllers/HomeController.php          # Expected: <200
wc -l app/Http/Controllers/ReceiptPaymentController.php  # Expected: <250
wc -l app/Http/Controllers/Students/StudentsController.php  # Expected: <250
```

**Expected**: All 5 services exist. Controllers import and use them. Line counts under targets.

### V5: Authorization Policies

```bash
# Verify 8 policies exist
for pol in StudentPolicy FeeInvoicePolicy UserPolicy InventoryItemPolicy InventoryOrderPolicy GradePolicy ClassPolicy EmployeePolicy; do
  test -f "app/Policies/${pol}.php" && echo "${pol} EXISTS"
done

# Verify registered in AuthServiceProvider
grep "StudentPolicy" app/Providers/AuthServiceProvider.php
grep "UserPolicy" app/Providers/AuthServiceProvider.php

# Verify Form Requests check permissions (not return true)
grep -A5 "function authorize" app/Http/Requests/StorePaymentRequest.php | grep -v "return true"
```

**Expected**: All 8 policies exist. AuthServiceProvider has `$policies` array populated. Form Request `authorize()` checks permissions.

### V6: Route Convention Cleanup

```bash
# Verify no GET destroy routes remain (except inventory items which use DELETE)
grep -r "GET.*destroy" routes/ | grep -v "inventory/items"

# Verify no POST update routes remain in inventory
grep -r "POST.*update" routes/inventory.php

# Verify kebab-case URLs (no snake_case in route definitions)
grep -r "['\"]/" routes/ | grep "_" | grep -v "//\|__\|admin_\|school_" | head -20

# Verify inventory catch-all is last in items group
grep -n "inventory" routes/inventory.php
```

**Expected**: Minimal GET destroy routes. No POST update in inventory. Snake_case reduced. Catch-all positioned correctly.

### V7: Dead Code Removal

```bash
# Verify removed files
test ! -f app/Http/Traits/EagerLoadingTrait.php && echo "EagerLoadingTrait REMOVED"
test ! -f app/Providers/ViewServiceProvider.php && echo "ViewServiceProvider REMOVED"

# Verify ViewServiceProvider removed from config
grep "ViewServiceProvider" config/app.php  # Expected: no match

# Verify pagination templates reduced
ls resources/views/vendor/pagination/ | wc -l  # Expected: 1-2
```

**Expected**: Dead files removed. Config updated. Pagination templates reduced.

### V8: Database Indexes

```bash
# Verify migration exists
test -f database/migrations/2026_07_03_000001_add_indexes_to_frequent_queries.php && echo "INDEX MIGRATION EXISTS"
test -f database/migrations/2026_07_03_000002_fix_payed_to_paid.php && echo "RENAME MIGRATION EXISTS"
```

**Expected**: Both migration files exist.

### V9: Full Test Suite

```bash
php artisan test --compact
```

**Expected**: Exit code 0, all tests pass.

### V10: Code Style

```bash
vendor/bin/pint --test --format agent
```

**Expected**: Exit code 0, no style violations.

## End-to-End Validation

After all phases complete:

1. Run `php artisan migrate --force` — migrations apply without errors
2. Run `php artisan route:list` — all routes use correct HTTP methods
3. Run `php artisan test --compact` — full suite passes
4. Run `vendor/bin/pint --dirty --format agent` — code style clean
5. Boot app and test a protected route — should return 403 for unauthorized users
6. Check HTTP response headers — security headers present
