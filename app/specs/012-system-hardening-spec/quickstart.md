# Quickstart: System Hardening & Correctness Remediation

Set up the environment is standard Laravel 10; here are the commands relevant to *this* feature's verification.

## 1. Environment

The app runs from the Laravel root `/data/projects/laravel_projects/school_managment/app`.

```bash
# Dependencies (already installed in this repo)
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

New migrations land under `database/migrations/2026_08_28_*_harden_*.php` (enums/ledger/index/reference backfill). Legacy tables already gone (inventory rebuild done).

## 3. Permissions & seeders

If permission names are normalized, refresh where needed:

```bash
php artisan db:seed --class=PermissionTableSeeder   # only if permission casing changed
```

## 4. Verification commands

### Run the new tests (per phase)

```bash
# Security (privilege, disabled-login, registration, throttle, audit)
php artisan test --compact tests/Feature/Security

# Finance (reconciliation, reversal, fund sign, partial/overpay)
php artisan test --compact tests/Feature/Finance

# Inventory (numbering, oversell, pay auth, zero updates, reference)
php artisan test --compact tests/Feature/Inventory

# Quality (scoping, pagination, cache)
php artisan test --compact tests/Feature/Quality
```

Or run the full suite before marking complete:

```bash
php artisan test --compact
```

### Targeted smoke checks (Laravel Boost `tinker`)

```bash
# Disabled account login blocked
# php artisan tinker
# Auth::attempt on a login_allow=false user should be false / rejected per new logic.
```

### Routes

```bash
php artisan route:list | grep -E "admin-era|inventory/orders.*pay|login|register|forgot"
```

Expected: `/admin-era*` guarded; `pay` is POST; login/register/password-reset throttled.

### Code style (before finalizing)

```bash
vendor/bin/pint --format agent
```

## 5. Manual acceptance highlights

- **Security**: log in as a non-admin → `/admin-era` returns 403; disabled employee cannot log in; repeated wrong passwords lockout after 5 attempts.
- **Finance**: pay a fee and a book order → both debit the school fund; edit an exchange bond → old + new correctly reflected (no inflation); void an invoice → ledger reversed.
- **Inventory**: create a `purchases` order → `type=purchases` persisted (not `sales`); concurrent stockOut cannot go negative; set item price/quantity to 0 → persisted; `pay` only for authorized users and via POST.

## 6. Scope notes

- No new composer/npm packages are required.
- Inventory rebuild is already complete on disk; this work hardens the new implementation.
- Money stays DECIMAL; arithmetic is exact-decimal.
