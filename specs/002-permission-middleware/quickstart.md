# Quickstart: Permission Middleware Validation

**Phase**: 1 — Design & Contracts  
**Date**: 2026-07-04  
**Spec**: [spec.md](./spec.md)

## Prerequisites

- Laravel application running on the `002-permission-middleware` branch
- Spatie `laravel-permission` package installed and configured
- Permissions seeded in the database (`php artisan db:seed --class=PermissionTableSeeder`)
- A test user with assignable roles

## Setup

```bash
# 1. Ensure on the correct branch
git checkout 002-permission-middleware

# 2. Run migrations and seeders
php artisan migrate
php artisan db:seed

# 3. Verify Spatie middleware is registered in app/Http/Kernel.php
#    Look for: \Spatie\Permission\Middleware\PermissionMiddleware::class
```

## Validation Scenarios

### 1. Smoke Test — All Controllers Load Without Error

```bash
php artisan route:list
```

**Expected**: All routes appear without errors. No `LogicException` or `InvalidArgumentException` about middleware.

### 2. Permission Gating — Positive Case

Create a test user with `classes-list` permission and verify access:

```bash
php artisan tinker
```

```php
$user = User::factory()->create();
$user->givePermissionTo('classes-list');
Auth::login($user);
// Visit /classes — should return 200
```

**Expected**: User can view the classes index page.

### 3. Permission Gating — Negative Case

```php
// Same user WITHOUT classes-create permission
// POST to /classes — should return 403
```

**Expected**: User receives 403 Forbidden.

### 4. Run Full Test Suite

```bash
php artisan test --compact
```

**Expected**: All tests pass (no regressions from middleware additions).

### 5. Custom Permission — Import Excel Gate

```php
$user = User::factory()->create();
$user->givePermissionTo('Students-Import_Excel');
// Access Excel import endpoint — should return 200

$user2 = User::factory()->create();
// Access Excel import endpoint without permission — should return 403
```

**Expected**: Permission gates work for custom action suffixes.

## End-to-End Test Script

Run the targeted smoke tests and gate tests (created per FR-016/FR-017):

```bash
php artisan test --compact --filter=PermissionMiddleware
```

**Expected**: All smoke tests (one per controller) and 2-3 end-to-end gate tests pass.

## Artifacts to Verify

| Artifact | Path | Expected |
|----------|------|----------|
| All controllers with middleware | `app/Http/Controllers/**/*.php` | Each has `__construct` with permission middleware |
| RoleController constructor | `app/Http/Controllers/RoleController.php` | Constructor uncommented and active |
| No broken routes | `php artisan route:list` | All routes resolve |
| Code style | `vendor/bin/pint --format agent` | No style violations |
