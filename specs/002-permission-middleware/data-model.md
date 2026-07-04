# Data Model: Permission Middleware Mapping

**Phase**: 1 — Design & Contracts  
**Date**: 2026-07-04  
**Spec**: [spec.md](./spec.md)

## Entities

### Permission

A named authorization string in the format `<module>-<action>`.

| Attribute | Type | Description | Example |
|-----------|------|-------------|---------|
| name | string | Unique permission identifier | `classes-list`, `employees-create` |
| module | string | The module/permission group prefix | `classes`, `employees` |
| action | string | The action suffix | `list`, `create`, `edit`, `delete`, `info` |

**Actions and their method mappings**:

| Suffix | Methods Gated |
|--------|---------------|
| `-list` | `index`, `show` |
| `-create` | `create`, `store` |
| `-edit` / `-update` | `edit`, `update` |
| `-delete` | `destroy` |
| `-info` | `show` |
| Custom (e.g., `-addstudent`) | Same-named custom method |

### Controller

An HTTP controller class that handles a module's web requests.

| Attribute | Type | Description | Example |
|-----------|------|-------------|---------|
| class | string | Fully qualified class name | `App\Http\Controllers\ClassesController` |
| permission_group | string | The permission prefix used in middleware | `classes` |
| methods | string[] | All controller methods that receive middleware | `['index', 'create', 'store', ...]` |

### Permission Mapping

The association between a permission group prefix, a controller, and its methods.

- Format: `$this->middleware('permission:<group>-<action>', ['only' => [<methods>]])`
- One middleware call per unique permission action
- Multiple methods can share a permission (e.g., `-create` gates both `create` and `store`)

## Validation Rules

- Permission strings must match seeded values exactly (case-sensitive)
- Methods not listed in any middleware's `only` array remain ungated at the middleware level
- Existing constructor dependencies must be preserved — middleware calls are additive

## Permission Inventory (25+ Controllers)

See `docs/permission-construct-plan.md` for the full per-controller permission-to-method mapping table.
