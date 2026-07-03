# Quickstart Validation Guide: Complete System Repair

This guide describes how to validate the implementation end-to-end. For detailed data model and contracts, see [data-model.md](./data-model.md) and [contracts/routes.md](./contracts/routes.md).

## Prerequisites

- PHP ^8.4, Composer, MySQL/MariaDB
- Laravel 10 project at `app/`
- `.env` configured with `APP_KEY`, `DB_DATABASE`, `QUEUE_CONNECTION=database`
- `php artisan storage:link` executed
- `public/storage` symlink points to `storage/app/public`

## Setup Commands

```bash
# Install dependencies
cd app && composer install

# Run migrations
php artisan migrate

# Verify storage link
ls -la public/storage | grep storage/app/public

# Test queue setup
php artisan queue:table  # if not yet created
php artisan migrate
```

## Phase-by-Phase Validation

### Phase 0 — Foundation

```bash
# F0.1: Verify .env values
grep -E '^(APP_KEY|DB_DATABASE|QUEUE_CONNECTION|APP_URL)=' .env

# F0.2: Verify storage link
test -L public/storage && echo "OK" || echo "MISSING"

# F0.3-F0.4: Queue configuration
php artisan queue:work --queue=logs --once  # process one job

# F0.5: Rate limiting
for i in $(seq 1 65); do curl -s -o /dev/null -w "%{http_code}" http://localhost/api/endpoint; done
# Expect last 5 requests to return 429

# F0.6: Security headers
curl -s -I http://localhost | grep -E '(Content-Security-Policy|Strict-Transport-Security|X-Frame-Options|X-Content-Type-Options)'

# F0.7: Database indexes (PostgreSQL)
php artisan tinker --execute="print_r(DB::select(\"SELECT indexname, indexdef FROM pg_indexes WHERE tablename = 'student_accounts'\"));"

# F0.8: Cron & backup
php artisan schedule:run  # verify backup task runs
```

### Phase 2 — Form Requests

```bash
# Verify all 30+ controllers use specific Form Requests
grep -r 'extends FormRequest' app/Http/Requests/ | wc -l

# Verify new financial requests exist
ls app/Http/Requests/*Payment* app/Http/Requests/*ExchangeBond* app/Http/Requests/*FeeInvoice*
```

### Phase 4 — Business Logic

```bash
# Verify services exist
ls app/Services/*Service.php app/Services/**/*Service.php

# Check controller sizes
wc -l app/Http/Controllers/ReceiptPaymentController.php  # expect <250
wc -l app/Http/Controllers/HomeController.php  # expect <200

# Verify executeInTransaction usage
grep -r 'executeInTransaction' app/Http/Controllers/ | wc -l
```

### Phase 5 — Authorization

```bash
# Verify policies exist
ls app/Policies/

# Verify 42 controllers have authorize()
grep -r '\$this->authorize' app/Http/Controllers/ | wc -l

# Verify 20 Form Requests have real auth checks
grep -r 'user()->can' app/Http/Requests/ | wc -l
```

### Phase 6 — Routes

```bash
# Verify no snake_case URLs (F6.4)
rg '_' routes/ --type-add 'php:*.php' -t php | grep -v '_.*_.*_' | grep -v '^\s*$'

# Verify no GET destroy (F6.3)
rg 'GET.*destroy' routes/

# Verify no POST update (F6.5)
rg 'POST.*update' routes/

# Verify route names on API (F6.2)
grep '->name(' routes/api.php
```

### Phase 7 — Tests

```bash
# Run full test suite
php artisan test --compact
# Expected: OK (exit code 0)

# Run specific test groups
php artisan test --compact --filter=InventoryItemTest
php artisan test --compact --filter=InventoryOrderTest
php artisan test --compact --filter=AuthTest
php artisan test --compact --filter=FinancialTest
```

### Cross-Cutting (Phase 8)

```bash
# F8.1: Verify no payed/notpayed remains
rg -i 'payed|notpayed' --type php --type blade --type json -g '!vendor/' -g '!node_modules/'
# Expected: empty

# F8.2: Verify dead code removal
# Smoke test each removed path after running test suite
php artisan test --compact  # must still pass
```

## Expected Outcomes

| Phase | Key Signal |
|-------|-----------|
| Phase 0 | All 8 infrastructure checks green |
| Phase 2 | 9+ Form Requests with proper rules and messages |
| Phase 4 | ReciptPaymentController <250 lines, HomeController <200 lines |
| Phase 5 | All 42 controllers authorized, 20 FRs with real auth |
| Phase 6 | Zero `GET destroy`, zero `POST update`, zero snake_case |
| Phase 7 | `php artisan test --compact` exits 0 |
| Phase 8 | Zero grep hits for `payed`; dead code confirmed gone |
