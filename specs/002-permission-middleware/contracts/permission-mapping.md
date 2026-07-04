# Contract: Permission Middleware Interface

**Phase**: 1 — Design & Contracts  
**Date**: 2026-07-04  
**Spec**: [spec.md](../spec.md)

## Contract Type

Internal HTTP middleware contract — Spatie `permission` middleware gating controller methods via Laravel's `$this->middleware()`.

## Interface Definition

### Middleware Signature

```php
$this->middleware('permission:<permission-string>', ['only' => ['<method-name>', ...]]);
```

### Permission String Format

```
<module-prefix>-<action-suffix>
```

Where `<module-prefix>` is the permission group (e.g., `classes`, `employees`, `students`) and `<action-suffix>` is one of: `list`, `create`, `edit`, `update`, `delete`, `info`, or a custom action name (e.g., `addstudent`, `tammen`, `graduated`, `import_Excel`).

### Constructor Registration

Each controller may have zero or more middleware calls in its `__construct` method. If a constructor already exists with dependency injection, middleware calls are added inside the existing body.

```php
// Existing constructor with DI preserved
public function __construct(
    private SomeService $service,
    private LoggerInterface $logger,
) {
    // Middleware calls added below
    $this->middleware('permission:module-list', ['only' => ['index', 'show']]);
    $this->middleware('permission:module-create', ['only' => ['create', 'store']]);
    $this->middleware('permission:module-edit', ['only' => ['edit', 'update']]);
    $this->middleware('permission:module-delete', ['only' => ['destroy']]);
}
```

### Response Contract

- **Authorized (200)**: Request proceeds normally to controller method
- **Unauthorized (403)**: Laravel `AuthorizationException` thrown, rendered as default 403 error page; logged via default framework exception handling

## Implementation Rules

1. Read the controller file before editing — do not guess method names
2. Map permission suffixes to methods per the standard table in [data-model.md](../data-model.md)
3. Preserve all existing `use` imports, constructor parameters, and method bodies
4. For controllers without an existing constructor, add a new `public function __construct()` with middleware calls
5. For controllers with an existing constructor, add `$this->middleware(...)` calls inside the body
6. Run `vendor/bin/pint --format agent` after each file edit
7. Run `php artisan route:list` after all edits to verify no route breakage

## Verification

- Each controller file should have a `__construct` method containing `$this->middleware('permission:...', ...)` calls
- `php artisan route:list` shows all routes with no errors
- Test suite passes: `php artisan test --compact`
