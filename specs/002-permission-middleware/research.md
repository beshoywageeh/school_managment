# Research: Permission Middleware for All Controllers

**Phase**: 0 — Outline & Research  
**Date**: 2026-07-04  
**Status**: All spec clarifications resolved during `/speckit.clarify`; no outstanding NEEDS CLARIFICATION markers.

## Resolved Decisions (from spec Clarifications section)

| Decision | Outcome | Rationale |
|----------|---------|-----------|
| Scope boundary | Strictly middleware constructors only | No new controllers, UI changes, or permission audits |
| Denial UX | Default Laravel 403 page | Consistent with framework defaults; no custom styling |
| Denial logging | Laravel default exception handling | 403s logged automatically via framework; no custom logger |
| Permission pre-existence | Trust the seeder | Spatie permissions already seeded; no runtime verification |
| Testing level | Smoke tests per controller + 2-3 end-to-end gate tests | Balances coverage with minimal overhead |

## Implementation Pattern

Based on the existing (commented-out) `RoleController` pattern:

```php
public function __construct()
{
    $this->middleware('permission:<group>-list', ['only' => ['index', 'show']]);
    $this->middleware('permission:<group>-create', ['only' => ['create', 'store']]);
    $this->middleware('permission:<group>-edit', ['only' => ['edit', 'update']]);
    $this->middleware('permission:<group>-delete', ['only' => ['destroy']]);
}
```

## Key Reference Files

- **Spec**: `specs/002-permission-middleware/spec.md`
- **Permission mapping document**: `docs/permission-construct-plan.md` (contains detailed per-controller permission mappings)
- **Constitution**: `.specify/memory/constitution.md`
