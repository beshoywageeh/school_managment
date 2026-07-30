# Research Notes: Codebase Remediation

**Created**: 2026-07-30

## Approach

The remediation plan (`docs/remediation-plan.md`) provides sufficient technical detail for all 72 issues across 9 phases. No NEEDS CLARIFICATION markers remain in the spec — the research phase confirms existing patterns and validates approach choices.

## Decisions

### 1. Migration Strategy for `fix_payed_to_paid`

- **Decision**: Use `renameColumn()` instead of `Schema::rename()`
- **Rationale**: `Schema::rename()` renames tables, not columns. Laravel's Blueprint `renameColumn()` correctly renames a single column.
- **Risk**: If migration has already run on production databases with the incorrect syntax, the fix migration must handle both states (check column name before attempting rename).

### 2. Index Strategy for Polymorphic Columns

- **Decision**: Add individual + composite indexes
- **Rationale**: Polymorphic queries filter by both `itemable_type` and `itemable_id`. A composite index covers both, while individual indexes support queries filtering by only one.
- **Pattern**: `$table->index(['itemable_type', 'itemable_id'])` — follows Laravel conventions for polymorphic relationship optimization.

### 3. LIKE Wildcard Escaping

- **Decision**: `str_replace(['%', '_'], ['\\%', '\\_'], $search)` before each LIKE query
- **Rationale**: Prevents DoS via repeated wildcard characters while preserving legitimate search functionality.
- **Alternatives considered**: `addslashes()` — insufficient (doesn't handle `%`/`_`). Raw DB escaping — too complex for this use case.

### 4. Permission Consolidation

- **Decision**: Map legacy names to unified `inventory.items.*` and `inventory.orders.*` pattern
- **Rationale**: Current names (`stocks-*`, `clothes-*`, `books_sheets-*`) are tied to deleted legacy module structure.
- **Mapping**: `stocks-create` → `inventory.items.create`, `stocks-delete` → `inventory.items.delete`, `clothes-edit` → `inventory.orders.edit`, `books_sheets-show` → `inventory.items.show`, etc.
- **Cache**: Spatie permission cache must be cleared after renaming.

### 5. Dynamic Tailwind Classes

- **Decision**: Use `@php` block to compute full class strings, then use `{{ $class }}`
- **Rationale**: Tailwind v4 JIT cannot detect classes built via string concatenation in templates. A computed variable with a literal class string is detectable.

### 6. CSP Directives

- **Decision**: Remove `unsafe-eval`, add `connect-src`, `font-src`, `frame-src`. Keep `unsafe-inline` for Livewire/Alpine.js.
- **Rationale**: Livewire and Alpine.js require `unsafe-inline` for inline event handlers. `unsafe-eval` is not required by either library.

### 7. Route Conventions

- **Decision**: Follow RESTful conventions — PUT for updates, DELETE for destroy, kebab-case URLs
- **Rationale**: Standard Laravel conventions. GET-based destroy routes bypass CSRF protection.
- **No external API consumers** — changes are safe.

### 8. Test Database Strategy

- **Decision**: Use SQLite in-memory database for tests with `RefreshDatabase` trait
- **Rationale**: N+1 detection and authorization tests should use query count assertions, not database-specific features.

## Files in Scope

See `plan.md` for the complete list of ~54 files to create/modify.
