# Research: Complete System Repair — Fix All Project Issues

## Unknowns & Resolutions

All NEEDS CLARIFICATION markers were resolved during the `/speckit.clarify` step. No additional unknowns remain.

### Resolved Clarifications

| Question | Resolution |
|----------|------------|
| Inventory entity rebuild status | Rebuild completed in first ~98 tasks. All entity models exist and require no changes. |
| Logging strategy for Phase 4 services | Activity log entries for mutation operations (create/update/delete) via injected logger. |
| Negative test coverage scope | Full set: missing required fields, invalid types, duplicates, boundary values, auth negatives. |

## Technology Best Practices

### Laravel 10 — Form Request Pattern
- Existing requests use `array<string, ValidationRule|array|string>` return type with array-style rules (e.g., `['required', 'integer', 'exists:table,column']`)
- Custom messages via `messages()` method returning `trans()` calls
- `authorize()` currently returns `true` for most — Phase 5 updates to real permission checks

### PHP 8.4 Enums
- Project uses PHP 8.1+ backed enums with `string` type, TitleCase keys (per constitution II)
- Existing examples: `InventoryItemType`, `InventoryOrderStatus`, `TransactionType`

### spatie/laravel-permission Authorization
- Existing permissions use underscore snake_case keys (e.g., `add_student`, `edit_fee_invoice`, `delete_inventory`)
- Policy classes use `$user->can('permission_key')` pattern
- No policies currently exist — 8 new ones to create in Phase 5

### Test Infrastructure
- PHPUnit 10 with SQLite in-memory (`phpunit.xml` configured with `DB_CONNECTION=sqlite`, `DB_DATABASE=:memory:`)
- Existing tests in `tests/Feature/` directory
- Factory states to be used for model setup (per constitution V)

### Queue Configuration
- Uses `QUEUE_CONNECTION=database` (to be verified/set in F0.3)
- Activity logs dispatched via `LogActivityJob` to `logs` queue
- Worker runs as `php artisan queue:work --queue=logs`

## Dependencies & Integration Points

| Dependency | Integration | Notes |
|------------|-------------|-------|
| spatie/laravel-permission | Permission gates in policies | Already installed, 30+ permissions exist |
| spatie/laravel-backup | Cron backup task (F0.8) | Already installed, needs schedule registration |
| maatwebsite/excel | Student exports | Already installed, `StudentsExport` exists |
| mcamara/laravel-localization | Multi-language support | Lang files need `payed`→`paid` fix (F8.1) |

## Key Risks

| Risk | Mitigation |
|------|------------|
| Dead code removal (F8.2) breaks tests | Test-first approach: run suite before and after removal |
| Route ordering change (F6.1) breaks existing URLs | Place catch-all `/{type}` last, verify with smoke test |
| Column rename `payed`→`paid` breaks queries | Create additive migration, update all references before dropping old column |
