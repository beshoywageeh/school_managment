# Implementation Plan: Complete System Repair — Fix All Project Issues

**Branch**: `001-fix-all-project-issues` | **Date**: 2026-07-03 | **Spec**: [spec.md](./spec.md)
**Input**: Feature specification from `/specs/001-fix-all-project-issues/spec.md`

## Summary

Fix ~55 remaining technical debt tasks across 7 phases in a Laravel 10 school management system: infrastructure hardening (Phase 0), Form Request validation (Phase 2), controller refactoring into services (Phase 4), authorization policies (Phase 5), route convention cleanup (Phase 6), test coverage (Phase 7), plus cross-cutting spelling fix and dead code removal. Inventory module (models, controllers, requests, services, enums) is already 100% complete from earlier tasks.

## Technical Context

**Language/Version**: PHP ^8.4 / Laravel 10
**Primary Dependencies**: Livewire 4, Alpine.js 3, Tailwind CSS v4, spatie/laravel-permission, spatie/laravel-backup, maatwebsite/excel, mcamara/laravel-localization
**Storage**: PostgreSQL via Eloquent ORM
**Testing**: PHPUnit 10 with SQLite in-memory test database
**Target Platform**: Linux server (Apache/Nginx)
**Project Type**: Web application (Laravel MVC + Livewire frontend)
**Performance Goals**: N/A — no new performance targets. Existing N+1 fixes (F4.8) and database indexes (F0.7) address known slow queries.
**Constraints**: All 42 controllers must gain `authorize()` calls (F5.3). ReciptPaymentController must be < 250 lines, HomeController < 200 lines (SC3).
**Scale/Scope**: Multi-school moderate scale: 2–20 schools, 500–5K students, <50K inventory items, <500 orders/month.

## Constitution Check

*GATE: Must pass before Phase 0 research. Re-check after Phase 1 design.*

### Principle I — Framework Convention Compliance (MUST)
- **Status**: ✅ PASS — All requirements use Laravel conventions: Eloquent ORM, thin controllers, Form Requests for validation, Artisan commands for scaffolding.
- **Phase 4 extracts services** into `App\Services\` — compliant with III. Service Layer Architecture.
- **Phase 5 uses policies** mapped to existing spatie/laravel-permission gates — compliant with Laravel auth conventions.

### Principle II — Type Safety & Validation (MUST)
- **Status**: ✅ PASS — Phase 2 creates new Form Requests with array-style rules. Existing enums (`InventoryItemType`, `InventoryOrderStatus`, etc.) already use TitleCase backed enums.
- **Logging in services** uses injected `LogsActivity` trait — leverages existing pattern.

### Principle III — Service Layer Architecture (MUST)
- **Status**: ✅ PASS — Phase 4 extracts 5 services (DashboardService, PaymentService, StudentQueryService, InvoiceQueryService, UserService) into `App\Services\`. Services receive dependencies via constructor injection.
- **No violations**: The existing `InventoryService` already follows this pattern.

### Principle IV — Incremental Refactoring (MUST)
- **Status**: ✅ PASS — All changes are additive or in-place refactoring:
  - Form Requests are new files, no removals
  - Service extraction leaves existing controller methods intact (delegates to service)
  - Policies are new files, registered in existing provider
  - Database changes are additive migrations (indexes, spelling fix column rename)
  - Dead code removal (F8.2) runs only after test verification
- **No legacy coexistence needed** — inventory rebuild was already completed in earlier tasks.

### Principle V — Automated Testing (SHOULD)
- **Status**: ✅ PASS — Phase 7 creates comprehensive test coverage: CRUD, state transitions, auth, financial operations. All tests use PHPUnit. Factory states to be used.
- Tests must cover happy paths, failure paths, and edge cases (per clarification).

### Gate Verdict
**PASS** — All constitution principles satisfied. No violations requiring Complexity Tracking.

## Project Structure

### Documentation (this feature)

```text
specs/001-fix-all-project-issues/
├── plan.md              # This file
├── research.md          # Phase 0 output
├── data-model.md        # Phase 1 output
├── quickstart.md        # Phase 1 output
├── contracts/           # Phase 1 output (route contracts)
└── tasks.md             # Phase 2 output (/speckit.tasks)
```

### Source Code (repository root)

```text
app/
├── Http/
│   ├── Controllers/
│   │   ├── Inventory/          # [EXISTS] 3 controllers
│   │   ├── ... (27 more)
│   │   ├── HomeController.php  # TO REFACTOR (F4.1)
│   │   ├── ReceiptPaymentController.php  # TO REFACTOR (F4.2)
│   │   ├── StudentsController.php       # TO REFACTOR (F4.3)
│   │   ├── fee_invoiceController.php    # TO REFACTOR (F4.4)
│   │   └── UserController.php           # TO REFACTOR (F4.5)
│   ├── Requests/
│   │   ├── Inventory/          # [EXISTS] 5 requests
│   │   ├── ... (11 more)
│   │   └── (6 new financial FRs)         # TO CREATE (F2.2)
│   └── Middleware/             # TO MODIFY (F0.6: security headers)
├── Models/
│   ├── Inventory/             # [EXISTS] 4 models
│   └── ... (19 more)
├── Services/                  # [EXISTS] Inventory service +
│   ├── Inventory/
│   └── (5 new services)       # TO CREATE (F4.1–F4.5)
├── Enums/                     # [EXISTS] 12 enums including inventory
└── Policies/                  # TO CREATE (F5.1: 8 new policies)

routes/
├── inventory.php              # TO FIX route ordering (F6.1)
├── api.php                    # TO ADD route names (F6.2)
├── web.php                    # TO FIX REST conventions (F6.3–F6.5)
├── reports.php                # TO ADD can: middleware (F5.5)
├── security.php               # TO AUTH middleware (F5.6)
└── ... (9 more route files)

tests/
├── Feature/                   # TO CREATE test files (F7.2–F7.6)
└── Unit/

resources/
├── views/                     # TO UPDATE lang strings (F8.1)
└── lang/                      # TO FIX payed→paid (F8.1)

database/
└── migrations/                # TO ADD indexes (F0.7) + spelling fix (F8.1)
```

**Structure Decision**: Standard Laravel MVC structure. All changes are contained within existing conventions — no new top-level directories needed. New services go under `app/Services/`, new policies under `app/Policies/`, new form requests under `app/Http/Requests/`.

## Complexity Tracking

> No constitution violations found. This section is intentionally empty.
