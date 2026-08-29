# Implementation Plan: Deferred Hardening — Track 3

**Branch**: `013-deferred-hardening-track3` | **Date**: 2026-08-28 | **Spec**: [spec.md](./spec.md)
**Input**: Feature specification from `app/specs/013-deferred-hardening-track3/spec.md`

## Summary

This plan hardens a Laravel 10 multi-tenant school management system by completing the **deferred** (Track 3) issues from the full priorities roadmap (`docs/أولويات-النظام-الكامل.md`). Tracks 1 and 2 — critical security and the September financial work — are owned by `012-system-hardening-spec` and are **out of scope here**. This plan covers only the deferred, post-September items:

- **Inventory consistency**: atomic stock deduction (no oversell under concurrency), purchase orders preservable through the UI, zero/false item values persist, and the order↔stock-movement `reference` mapping repaired (no longer dead/empty).
- **Performance**: core lists returned in bounded pages (≤50/page) responding in **≤500ms at p95**; dashboard figures cached for speed but **invalidated/refreshed on write** so nothing is full-day stale.
- **Multi-tenant correctness**: dashboard parent/student counts correct (not constant zero); no cross-school leakage for any non-super-admin (including users with a `null` school id); school-settings updates permission-guarded and scope-checked; role deletion cleans orphaned assignments/permissions.
- **Imports**: parents import saves every intended field; uploads validated (type/presence) with clear errors; **export-time** formula-neutralization (CSV-injection safe); reports reflect true outcomes.
- **Dormant-path guards**: the queued student-import path and the older auto-numbering path are fixed as guardrails before any future activation (school-scoped / collision-free, tested).
- **Maintainability**: student-creation logic consolidated to one authoritative path; unused services removed or guarded; naming/enums normalized backward-compatibly; missing indexes added.

**Relationship note**: several of the above overlap with `012`'s phases 3–4 (scoping, pagination, orphan-safe deletion, cache fix, indexes, dead-code removal, naming, inventory consistency). Where `012` has already committed work, this plan **references** it and assigns that work exactly once; this plan is the single source of truth for any remainder.

## Technical Context

**Language/Version**: PHP 8.5, Laravel framework v10
**Primary Dependencies**: spatie/laravel-permission, laravel/sanctum (v3), livewire/livewire (v4), maatwebsite/excel, mcamara/laravel-localization. **No new package dependencies required** (all fixes use Laravel core + existing packages; row locking uses `lockForUpdate()` + `DB::transaction`).
**Storage**: MySQL / MariaDB via Eloquent (DECIMAL handled via exact-decimal discipline; migrations-first per constitution).
**Testing**: PHPUnit 10; `php artisan test --compact --filter=...`; Laravel Boost `tinker` for smoke checks.
**Target Platform**: Linux web server (containerized via Docker/Sail).
**Project Type**: Laravel web application (Livewire 4 frontend).
**Performance Goals**: Core lists paginated ≤50/page and ≤500ms at p95; dashboard reads served from cache but invalidated on every relevant write (never full-day stale); inventory stock writes serialized via row locks.
**Constraints**: Multi-tenant isolation (schools) must never regress; no new dependencies without justification; incremental refactoring (backward-compatible additive changes first); money stays DECIMAL with exact-decimal discipline; any dormant path fixed only as a guardrail (not activated) and covered by a test.
**Scale/Scope**: Multi-school tenant model; several dozen tables; existing inventory `inventory_*` tables (already rebuilt) plus student-account/fee/fund financial tables and Spatie role tables.

## Constitution Check

*GATE: Must pass before Phase 0 research. Re-check after Phase 1 design.*

**PASS** — evaluated against constitution v1.1.0 (Clean Code & Convention Compliance, Simple UX, Minimal Dependencies, Service Layer, Automated Testing, Incremental Refactoring):

- **I. Clean Code & Convention Compliance** — PASS. All fixes respect Form Requests, PHP 8 constructor property promotion, TitleCase backed enums, `config()` only, Artisan `make:` scaffolding, Eloquent over raw `DB::`, PHPDoc array-shape annotations where arrays are returned.
- **II. Simple UX & Responsive Design** — PASS. UI changes are minimal (pagination on lists, order-type hidden field, settings/role guards) and reuse the existing Livewire 4 / Alpine 3 / Tailwind v4 patterns; inline validation via `@error` and loading via `wire:loading`.
- **III. Minimal Dependencies** — PASS. No new package is introduced. Row locking uses `lockForUpdate()`; exact-decimal uses Laravel decimal cast + core `bc*` functions; CSV-injection neutralization at export is a small in-project helper; cache invalidation uses Laravel cache tags/keys. Additive migrations only.
- **IV. Service Layer Architecture** — PASS. Business logic lives/enhances existing `App\Services\` classes (`InventoryItemService`, `InventoryTransactionService`, `InventoryOrderService`, `UserService`, `PaymentService`, etc.); controllers remain thin; duplicated student-creation logic is consolidated into an authoritative service path.
- **V. Automated Testing** — PASS. Every change ships with PHPUnit feature/unit tests (happy + failure + edge), per phase; guardrail/dormant paths are tested.
- **Development Workflow 5 (Incremental refactoring)** — PASS. Deferred work is done as additive, backward-compatible migrations and behavior fixes on stable tables; old/normalized naming is retained for BC during transition; no legacy module deletion is re-done here (completed by the inventory rebuild).

No violations require Complexity Tracking justification.

## Project Structure

### Documentation (this feature)

```text
app/specs/013-deferred-hardening-track3/
├── plan.md              # This file (/speckit.plan command output)
├── research.md          # Phase 0 output
├── data-model.md        # Phase 1 output
├── quickstart.md        # Phase 1 output
├── contracts/           # Phase 1 output (routes / authz / import / cache contracts)
└── tasks.md             # Phase 2 output (/speckit.tasks command - NOT created by /speckit.plan)
```

### Source Code (repository root — Laravel layout)

```text
app/                                  # Laravel app root (school_managment/app)
├── Http/
│   ├── Controllers/
│   │   ├── Inventory/InventoryItemController.php          # FIX: persist zero/false item values
│   │   ├── Inventory/InventoryOrderController.php         # FIX: preserve type; scope list/show
│   │   ├── Inventory/InventoryGardController.php          # FIX: order-type binding
│   │   ├── Admin/SettingsController.php                   # FIX: permission + school scope (IDOR)
│   │   ├── Admin/RoleController.php                       # FIX: clean Spatie pivots on role delete
│   │   ├── StudentsController.php                         # FIX: true import outcome messages
│   │   ├── HomeController.php                             # FIX: scope user list + parent count
│   │   └── Admin/ImportController (if extended)           # FIX: upload validation + export sanitize
│   ├── Requests/                                          # reinforced/added Form Requests for imports & settings
│   └── Middleware/                                        # (reuse existing) school/permission guards
├── Services/
│   ├── Inventory/InventoryItemService.php                 # FIX: presence-based updateItem
│   ├── Inventory/InventoryTransactionService.php          # FIX: stockOut lockForUpdate
│   ├── Inventory/InventoryOrderService.php                # FIX: reference mapping + numbering provider
│   ├── Inventory/InventoryPaymentService.php              # FIX: defer-to-single (books/clothes) if active
│   ├── StudentService.php (NEW, consolidated)             # MAINT-1: single authoritative student-creation path
│   └── CacheService.php                                   # FIX: invalidate all key variants on write
├── Models/
│   ├── Inventory/InventoryOrder.php                       # FIX: transactions() via class-name reference
│   └── Inventory/InventoryItem.php                        # (index/backfill notes)
└── database/
    └── migrations/ 2026_08_28_*_track3_*.php              # additive: indexes, reference backfill, rename BC
```

**Structure Decision**: Single Laravel application as already structured; deferred hardening touches the existing `app/Http`, `app/Services`, `app/Models`, and `database/migrations` under the Laravel root at `/data/projects/laravel_projects/school_managment/app`. No new base folders are introduced (per constitution, new base folders require approval).

## Complexity Tracking

> **Fill ONLY if Constitution Check has violations that must be justified**

No violations — all work is additive/behavioral within existing structure and principles, so no Complexity Tracking entries are required.
